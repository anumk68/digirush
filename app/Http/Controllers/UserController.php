<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use PHPMailer\PHPMailer\PHPMailer;

class UserController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = \App\Models\User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'User does not exist.'])->withInput();
        }
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
        $otp = rand(100000, 999999);
        Session::put('otp', $otp);
        Session::put('otp_expires', now()->addMinutes(5));
        $mail = new PHPMailer(true);
        try {
            // $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'support@digirushsolutions.com';
            $mail->Password = '>wE2;o7$Cz';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->setFrom('support@digirushsolutions.com', 'DigiRush');
            $mail->addAddress('support@digirushsolutions.com'); // First recipient
            $mail->addAddress('deepak.digirush@gmail.com');     // Second recipient
            $mail->addAddress('manpreet.digirush@gmail.com');   // Third recipient

            $mail->isHTML(true);
            $mail->Subject = 'Your Login OTP';
            $mail->Body = "Your OTP is <b>$otp</b>. It is valid for 5 minutes.";
            $mail->send();
        } catch (Exception $e) {
            return back()->withErrors(['email' => 'OTP sending failed: ' . $mail->ErrorInfo])->withInput();
        }
        return redirect()->route('verify.login.otp.form');
    }

    public function showOtpForm()
    {
        if (!Session::has('otp')) {
            return redirect()->route('login')->withErrors(['email' => 'Session expired. Please login again.']);
        }
        return view('auth.verify-otp');
    }
    public function verifyOtp(Request $request)
    {
        $request->validate(['otp' => 'required|digits:6']);
        if (Session::get('otp') == $request->otp) {
            $userId = Session::get('otp_user_id');
            Auth::loginUsingId($userId);
            Session::forget(['otp', 'otp_user_id']);
            return redirect('/new-dashboard');
        } else {
            return back()->withErrors(['otp' => 'Invalid OTP']);
        }
    }
    public function forgetPasswordForm()
    {
        return view('auth.forget_password');
    }
    public function sendForgotOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);
        $otp = rand(100000, 999999);
        session([
            'forgot_password_email' => $request->email,
            'forgot_password_otp' => $otp,
            'forgot_password_otp_expires_at' => now()->addMinutes(10)
        ]);
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'support@digirushsolutions.com';
            $mail->Password = '>wE2;o7$Cz';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('support@digirushsolutions.com', 'DigiRush Solution');
            $mail->addAddress($request->email);

            $mail->isHTML(true);
            $mail->Subject = 'Your OTP for Password Reset';
            $mail->Body = "<p>Your OTP is: <strong>$otp</strong></p>";
            $mail->send();

            return back()->with('success', 'OTP sent to your email.');
        } catch (Exception $e) {
            return back()->withErrors(['email' => 'Mail could not be sent.']);
        }
    }
    public function verifyForgotOtp(Request $request)
    {
        $request->validate(['otp' => 'required|numeric']);
        if (
            session('forgot_password_otp') == $request->otp &&
            now()->lt(session('forgot_password_otp_expires_at'))
        ) {
            session(['forgot_password_verified' => true]);
            return back()->with('otp_verified', true);
        }
        return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
    }
    public function resetForgotFlow()
    {
        session()->forget([
            'forgot_password_email',
            'forgot_password_otp',
            'forgot_password_otp_expires_at',
            'otp_verified',
            'forgot_password_verified',
        ]);
        return redirect()->route('forgetForm');
    }
    public function resetPassword(Request $request)
    {
        if (!session('forgot_password_verified')) {
            return back()->withErrors(['otp' => 'OTP not verified.']);
        }
        $request->validate([
            'password' => 'required|string|confirmed|min:6',
        ]);
        $user = User::where('email', session('forgot_password_email'))->first();
        $user->password = bcrypt($request->password);
        $user->save();
        session()->forget([
            'forgot_password_email',
            'forgot_password_otp',
            'forgot_password_otp_expires_at',
            'forgot_password_verified'
        ]);
        return redirect()->route('login')->with('success', 'Password reset successful.');
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function sendRegisterOtp(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        }
        $otp = rand(100000, 999999);
        session([
            'register_data' => [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'otp' => $otp,
                'otp_expires' => now()->addMinutes(10),
            ]
        ]);
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'support@digirushsolutions.com';
            $mail->Password = '>wE2;o7$Cz';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('support@digirushsolutions.com', 'DigiRush Solution');
            $mail->addAddress($request->email);
            $mail->addAddress('support@digirushsolutions.com'); // First recipient




            $mail->isHTML(true);
            $mail->Subject = 'Your OTP for Registration';
            $mail->Body = "<p>Your OTP for DigiRush registration is: <strong>$otp</strong></p>";
            $mail->send();
            return response()->json([
                'success' => true,
                'message' => 'OTP sent to your email.'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Mail could not be sent. Mailer Error: ' . $mail->ErrorInfo
            ]);
        }
    }

    public function verifyRegisterOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);
        $sessionData = Session::get('register_data');
        if (!$sessionData) {
            return response()->json(['success' => false, 'message' => 'Session expired. Try again.']);
        }
        if ($request->otp != $sessionData['otp']) {
            return response()->json(['success' => false, 'message' => 'Invalid OTP']);
        }
        if (now()->gt($sessionData['otp_expires'])) {
            return response()->json(['success' => false, 'message' => 'OTP expired']);
        }
        User::create([
            'name' => $sessionData['name'],
            'email' => $sessionData['email'],
            'password' => $sessionData['password'],
        ]);
        Session::forget('register_data');
        return response()->json(['success' => true, 'message' => 'Registration successful!']);
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

    }

    public function logout(Request $request)
    {
        if (auth()->user() != null) {
            $redirect_route = '/';
        }

        Auth::logout();
        Session::flush();

        return redirect('/login');

    }

    protected function isImageField($fieldType, Request $request)
    {
        // Define which types are considered image fields
        $imageFields = ['image', 'profile_picture', 'avatar']; // Add your image field types here

        return in_array($fieldType, $imageFields);
    }

    protected function overWriteEnvFile($key, $value)
    {
        $path = base_path('.env');

        if (File::exists($path)) {
            $contents = File::get($path);
            $pattern = "/^{$key}=(.*)$/m";
            $replacement = "{$key}={$value}";

            if (preg_match($pattern, $contents)) {
                $contents = preg_replace($pattern, $replacement, $contents);
            } else {
                $contents .= PHP_EOL . $replacement;
            }

            File::put($path, $contents);
        }
    }

    public function editSettingForm($id)
    {
        // Fetch the specific setting by ID
        $setting = Setting::find($id);

        if (!$setting) {
            return redirect()->route('metapage')->with('error', 'Setting not found');
        }

        return view('admin.settings.edit', ['setting' => $setting]);
    }


    public function updateSetting(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'type' => 'required|string',
            'value' => 'required|string',
        ]);

        $setting = Setting::find($request->input('id'));

        if (!$setting) {
            return redirect()->route('settings.index')->with('error', 'Setting not found');
        }

        $setting->value = $request->input('value');
        $setting->save();

        return redirect()->route('metaPage')->with('success', 'Setting updated successfully');
    }

    public function new_meta_add(Request $request)
    {

        $request->validate([
            'metaselect' => 'string|in:description_,title_,keyword_',
            'type' => 'string',
            'value' => 'string',
        ]);

        $prefix = $request->input('metaselect');

        $name = str_replace(' ', '_', $request->type);

        $prefixedName = $prefix . $name;

        $file_value = $request->value;

        $settings = new Setting;
        $settings->type = $prefixedName;
        $settings->value = $file_value;
        $settings->save();

        return redirect()->back()->with('success', 'Setting added successfully.');
    }


    public function metapage()
    {
        $descriptionsettings = Setting::where('type', 'like', 'description_%')->get();
        $titlesettings = Setting::where('type', 'like', 'title_%')->get();
        $keywordsettings = Setting::where('type', 'like', 'keyword_%')->get();

        $sett = Setting::where('type', 'like', 'fields%')
            ->orWhere('type', 'like', 'links%')
            ->get();

        // Fetch $settings if needed
        $settings = Setting::all(); // Or however you retrieve $settings

        return view("admin.settings.index", compact('descriptionsettings', 'titlesettings', 'keywordsettings', 'sett', 'settings'));
    }



}
