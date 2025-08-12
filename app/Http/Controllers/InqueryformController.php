<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\CaseStudy;
use App\Models\HomeForm;
use App\Models\MessageForm;
use App\Models\ContactForm;
use App\Models\DynamicPage;
use App\Models\Header;
use App\Models\Landing;
use App\Models\SeoCompany;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class InqueryformController extends Controller
{

    //index function
    public function generalindex()
    {
        $data = MessageForm::orderBy('id', 'desc')->get();
        return view('admin.inquery.generalindex', compact('data'));

    }

    //view function
    public function generalview($id)
    {
        $data = MessageForm::find($id);
        return view('admin.inquery.generalview', compact('data'));
    }

    //delete function
    public function generaldestroy($id)
    {
        $data = HomeForm::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Record deleted successfully');
    }
    public function bulkDeletehome(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('ids') && is_array($request->ids)) {
                $deletedCount = HomeForm::whereIn('id', $request->ids)->delete();
                return response()->json([
                    'success' => true,
                    'message' => "{$deletedCount} record(s) deleted successfully."
                ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'No records selected.'
            ], 400);
        }
        if ($request->has('ids') && is_array($request->ids)) {
            HomeForm::whereIn('id', $request->ids)->delete();
            return back()->with('success', 'Selected records deleted successfully.');
        }
        return back()->with('error', 'No records selected.');
    }


    //index of home function
    public function homeindex()
    {
        $data = HomeForm::orderBy('id', 'desc')->get();
        return view('admin.inquery.homeindex', compact('data'));

    }

    //view of home function
    public function homeview($id)
    {
        $data = HomeForm::find($id);
        return view('admin.inquery.homeview', compact('data'));
    }

    //delete of home function
    public function homedestroy($id)
    {

        $data = MessageForm::find($id);

        $data->delete();
        return redirect()->back()->with('success', 'Record deleted successfully');
    }
    public function bulkDelete(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('ids') && is_array($request->ids)) {
                $deletedCount = MessageForm::whereIn('id', $request->ids)->delete();
                return response()->json([
                    'success' => true,
                    'message' => "{$deletedCount} record(s) deleted successfully."
                ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'No records selected.'
            ], 400);
        }
        if ($request->has('ids') && is_array($request->ids)) {
            MessageForm::whereIn('id', $request->ids)->delete();
            return back()->with('success', 'Selected records deleted successfully.');
        }
        return back()->with('error', 'No records selected.');
    }

    public function blog_bulkDelete(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('ids') && is_array($request->ids)) {
                $deletedCount = Blog::whereIn('id', $request->ids)->delete();
                return response()->json([
                    'success' => true,
                    'message' => "{$deletedCount} record(s) deleted successfully."
                ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'No records selected.'
            ], 400);
        }
        if ($request->has('ids') && is_array($request->ids)) {
            Blog::whereIn('id', $request->ids)->delete();
            return back()->with('success', 'Selected records deleted successfully.');
        }
        return back()->with('error', 'No records selected.');
    }
    public function case_bulkDelete(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('ids') && is_array($request->ids)) {
                $deletedCount = CaseStudy::whereIn('id', $request->ids)->delete();
                return response()->json([
                    'success' => true,
                    'message' => "{$deletedCount} record(s) deleted successfully."
                ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'No records selected.'
            ], 400);
        }
        if ($request->has('ids') && is_array($request->ids)) {
            CaseStudy::whereIn('id', $request->ids)->delete();
            return back()->with('success', 'Selected records deleted successfully.');
        }
        return back()->with('error', 'No records selected.');
    }
    public function devPage_bulkDelete(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('ids') && is_array($request->ids)) {
                $deletedCount = DynamicPage::whereIn('id', $request->ids)->delete();
                return response()->json([
                    'success' => true,
                    'message' => "{$deletedCount} record(s) deleted successfully."
                ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'No records selected.'
            ], 400);
        }
        if ($request->has('ids') && is_array($request->ids)) {
            DynamicPage::whereIn('id', $request->ids)->delete();
            return back()->with('success', 'Selected records deleted successfully.');
        }
        return back()->with('error', 'No records selected.');
    }
    public function blogCategoryBulkdestroy(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('ids') && is_array($request->ids)) {
                $deletedCount = BlogCategory::whereIn('id', $request->ids)->delete();
                return response()->json([
                    'success' => true,
                    'message' => "{$deletedCount} record(s) deleted successfully."
                ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'No records selected.'
            ], 400);
        }
        if ($request->has('ids') && is_array($request->ids)) {
            BlogCategory::whereIn('id', $request->ids)->delete();
            return back()->with('success', 'Selected records deleted successfully.');
        }
        return back()->with('error', 'No records selected.');
    }
    public function header_bulkDelete(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('ids') && is_array($request->ids)) {
                $deletedCount = Header::whereIn('id', $request->ids)->delete();
                return response()->json([
                    'success' => true,
                    'message' => "{$deletedCount} record(s) deleted successfully."
                ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'No records selected.'
            ], 400);
        }
        if ($request->has('ids') && is_array($request->ids)) {
            Header::whereIn('id', $request->ids)->delete();
            return back()->with('success', 'Selected records deleted successfully.');
        }
        return back()->with('error', 'No records selected.');
    }
    public function us_landing_bulkDelete(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('ids') && is_array($request->ids)) {
                $deletedCount = Landing::whereIn('id', $request->ids)->delete();
                return response()->json([
                    'success' => true,
                    'message' => "{$deletedCount} record(s) deleted successfully."
                ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'No records selected.'
            ], 400);
        }
        if ($request->has('ids') && is_array($request->ids)) {
            Landing::whereIn('id', $request->ids)->delete();
            return back()->with('success', 'Selected records deleted successfully.');
        }
        return back()->with('error', 'No records selected.');
    }



    public function hire_form(Request $request)
    {
        $formType = $request->input('type');


        $validated = $request->validate([
            'fname' => 'required|regex:/^[a-zA-Z]+$/',
            'lname' => 'nullable|regex:/^[a-zA-Z]+$/',
            'phone_no' => 'required|digits:10|numeric|unique:home_landings,phone_no',
            'email' => 'required|email|max:255|unique:home_landings,email',
            'services' => 'required|string|max:255',

            'city' => 'nullable|string|max:255',

        ]);

        DB::table('home_landings')->insert([
            'fname' => $validated['fname'],
            'lname' => $validated['lname'],
            'phone_no' => $validated['phone_no'],
            'email' => $validated['email'],
            'services' => $validated['services'],
            'city' => $validated['city'],
            'type' => $formType,
            'created_at' => now(),
        ]);


        $data["email_to"] = 'support@digirushsolutions.com';
        // $data["email_to"] = 'balpreet.digirush@gmail.com'; 
        $data["title"] = "New Hire Enquiry Request";
        $data["name"] = $request->fname . ' ' . $request->lname;
        $data["email_person"] = $request->email;
        $data["phone"] = $request->phone_no;
        $data["services"] = $request->services;
        $data["city"] = $request->city;
        $data["type"] = $request->type;


        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'support@digirushsolutions.com';
            $mail->Password = '>wE2;o7$Cz';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;


            $mail->setFrom('support@digirushsolutions.com', 'Digi Rush');
            $mail->addAddress($data["email_to"]);


            $mail->isHTML(true);
            $mail->Subject = $data["title"];
            $mail->Body = view('mail.contact_us', ['data' => $data])->render();
            $mail->AltBody = 'This is a plain-text message body for non-HTML email clients';


            $mail->send();

            session()->flash('form_submitted', true);

            return redirect()->route('thankyou')->with('success', 'Form submitted and email sent successfully!');

        } catch (Exception $e) {

            Log::error('Mail send failed: ' . $mail->ErrorInfo);
            return response()->json(['error' => 'Sorry! Mail could not be sent. Please try again later.'], 500);
        }

    }
}