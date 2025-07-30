<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request){
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the user exists
        $userExists = User::where('email', $request->email)->exists();

        if (!$userExists) {
            return back()->withErrors(['email' => 'User does not exist.']);
        }

        // Attempt to log in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Successful login
            $user = Auth::user();
            return redirect()->intended('/new-dashboard');

        } else {
            // Unsuccessful login
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }



    //  Created a user
    public function register(Request $request){
       

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = $this->create($request->all());

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
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
    
    
    public function metapage() {
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
