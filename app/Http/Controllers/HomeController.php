<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\DynamicPage;
use App\Models\Blog;
use App\Models\HomeForm;
use App\Models\CaseStudy;
use App\Models\MessageForm;
use App\Models\ReviewOtp;
use App\Models\ContactForm;
use App\Models\SeoCompany;
use App\Models\Review;
use App\Models\HireDeveloper;
use App\Models\BlogCategory;
use App\Models\Landing;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class HomeController extends Controller
{
    ///////////    service section function /////////


    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function new_dashboard()
    {
        return view('admin.new-dashboard');
    }

    //for dynamic frontend pages
    public function dynamic_page($slugs)
    {
        $data = DynamicPage::where('slug', $slugs)->first();
        if ($data) {
            return view('frontend.dynamic_page', compact('data'));
        } else {
            return view('frontend.ppc_expert');
        }

    }

    //sending otp for review
    public function send_review_otp(Request $request)
    {
        $request->validate([
            'email' => 'email|unique:review_otps,email'
        ]);

        $otp = rand(100000, 999999);
        $data = [
            "email_to" => $request->email,
            "title" => "OTP For Review",
            "OTP" => $otp,
            "email_person" => $request->email
        ];

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'support@digirushsolutions.com';
            $mail->Password = '>wE2;o7$Cz'; // Store securely in .env in production
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('support@digirushsolutions.com', 'Digi Rush');
            $mail->addAddress($data["email_to"]);
            $mail->isHTML(true);
            $mail->Subject = $data["title"];
            $mail->Body = "
                <h3>Please use this otp for the review.</h3>
                <p><strong>OTP:</strong> {$data['OTP']}</p>
            ";
            ;
            $mail->AltBody = 'This is a plain text version of the quote enquiry.';
            $mail->send();

            $save_otp = new ReviewOtp();
            $save_otp->otp = $otp;
            $save_otp->mail_sent = "1";
            $save_otp->email = $request->email;
            $save_otp->save();

        } catch (Exception $e) {
            Log::error("Quote form mail error: " . $mail->ErrorInfo);
        }
        session()->flash('form_submitted', true);
        return response()->json(['message' => 'OTP Sent Succesfully!']);
    }

    public function review_otp_verify(Request $request)
    {
        $request->validate([
            'otp' => 'required'
        ]);
        $check = ReviewOtp::where('otp', $request->otp)->first();

        if (!$check) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid OTP. Please try again.'
            ]);
        }
        if (!$request->has('name') && !$request->has('rating') && !$request->has('review')) {
            return response()->json([
                'success' => true,
                'message' => 'OTP verified successfully. Please submit your review.'
            ]);
        }
        $request->validate([
            'name' => 'required|unique:reviews,name',
            'rating' => 'required',
            'review' => 'required'
        ]);
        $review = new Review();
        $review->name = $request->name;
        $review->rating = $request->rating;
        $review->review = $request->review;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_image.' . $file->getClientOriginalExtension();
            $path = ('uploads/reviews');
            $file->move($path, $filename);
            $review->image = 'uploads/reviews/' . $filename;
        }
        $review->save();
        return response()->json([
            'success' => true,
            'message' => 'Review saved successfully!'
        ]);
    }

    public function mobile_seo()
    {
        return view('frontend.mobile_seo');
    }
    public function email_marketing()
    {
        return view('frontend.email-marketing');
    }
    public function fullstack_dev()
    {
        return view('frontend.fullstack-development');
    }
    public function logo_design()
    {
        return view('frontend.logo-design');
    }
    public function php_developme()
    {
        return view('frontend.php_development');
    }

    public function wix_developement()
    {
        return view('frontend.wix-development');
    }
    public function laravel_develop()
    {
        return view('frontend.laravel-develop');
    }
    public function ecommerce_design()
    {
        return view('frontend.ecommerce_design');
    }
    public function ecommerce_app()
    {
        return view('frontend.ecommerce-appdevelop');
    }
    public function product_design()
    {
        return view('frontend.product-design');
    }
    public function ecommerce_seo()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_shopify_seo']->value ?? '';
        $metatitle = $settings['title_shopify_seo']->value ?? '';
        $metaKeywords = $settings['keyword_shopify_seo']->value ?? '';

        return view('frontend.shopify_seo', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }
    public function home()
    {
        $blogs = Blog::take(6)->latest()->get();
        $blog_categories = BlogCategory::all();
        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_Home']->value ?? '';
        $metatitle = $settings['title_home']->value ?? '';
        $metaKeywords = $settings['keyword_home']->value ?? '';
        $review_list = Review::take(10)->latest()->get();

        return view('home', compact('metaDescription', 'metatitle', 'blogs', 'blog_categories', 'metaKeywords', 'review_list'));
    }

    public function about()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_About_us']->value ?? '';
        $metatitle = $settings['title_About_us']->value ?? '';
        $review_list = Review::take(10)->latest()->get();

        return view('frontend.about', compact('metaDescription', 'metatitle', 'review_list'));
    }
    public function blogs()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_blogs']->value ?? '';
        $metatitle = $settings['title_blogs']->value ?? '';
        return view('frontend.blogs', compact('metaDescription', 'metatitle'));
    }
    public function digital_marketing()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_digitalmarketing']->value ?? '';
        $metatitle = $settings['title_digitalmarketing']->value ?? '';
        $metaKeywords = $settings['keyword_digitalmarketing']->value ?? '';

        return view('frontend.digital_marketing', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }

    public function seo_company()
    {
        return view('frontend.seo-services');
    }

    public function seo_services()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_seo']->value ?? '';
        $metatitle = $settings['title_seo']->value ?? '';
        $metaKeywords = $settings['keyword_seo']->value ?? '';

        return view('frontend.seo_company', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }
    public function seo_servicess()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_seo']->value ?? '';
        $metatitle = $settings['title_seo']->value ?? '';
        $metaKeywords = $settings['keyword_seo']->value ?? '';

        return view('frontend.local_seo_company', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }

    public function local_seo()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_local_seo']->value ?? '';
        $metatitle = $settings['title_local_seo']->value ?? '';
        $metaKeywords = $settings['keyword_local_seo']->value ?? '';

        return view('frontend.local_seo_company', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }

    public function ppc_services()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_ppc_expert']->value ?? '';
        $metatitle = $settings['title_ppc_expert']->value ?? '';
        $metaKeywords = $settings['keyword_ppc_expert']->value ?? '';

        return view('frontend.ppc_expert', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }

    public function content_marketing()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_content_management']->value ?? '';
        $metatitle = $settings['title_content_management']->value ?? '';
        $metaKeywords = $settings['keyword_content_management']->value ?? '';

        return view('frontend.content_management', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }

    public function web_services()
    {
        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_webservices']->value ?? '';
        $metatitle = $settings['title_webservices']->value ?? '';
        $metaKeywords = $settings['keyword_webservices']->value ?? '';

        return view('frontend.web_services', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }

    public function web_development()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_web_development']->value ?? '';
        $metatitle = $settings['title_web_development']->value ?? '';
        $metaKeywords = $settings['keyword_web_development']->value ?? '';

        return view('frontend.web_development', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }

    public function php_developement()
    {

        $metaDesc = Setting::where('type', 'like', 'description_php')->first();
        $metaTitle = Setting::where('type', 'like', 'title_php')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_php')->first();

        return view('frontend.php_development', compact('metaDesc', 'metaTitle', 'metaKey'));
    }
    public function ecommerce_development()
    {

        $metaDesc = Setting::where('type', 'like', 'description_ecommerce')->first();
        $metaTitle = Setting::where('type', 'like', 'title_ecommerce')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_ecommerce')->first();

        return view('frontend.ecommerce_development', compact('metaDesc', 'metaTitle', 'metaKey'));
    }
    public function laravel_developement()
    {

        $metaDesc = Setting::where('type', 'like', 'description_laravel')->first();
        $metaTitle = Setting::where('type', 'like', 'title_laravel')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_laravel')->first();

        return view('frontend.laravel_development', compact('metaDesc', 'metaTitle', 'metaKey'));
    }
    public function web_design()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_web_designing']->value ?? '';
        $metatitle = $settings['title_web_designing']->value ?? '';
        $metaKeywords = $settings['keyword_web_designing']->value ?? '';

        return view('frontend.web_designing', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }
    public function social_marketing()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_social_media']->value ?? '';
        $metatitle = $settings['title_social_media']->value ?? '';
        $metaKeywords = $settings['keyword_social_media']->value ?? '';

        return view('frontend.social_media_marketing', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }
    public function website_redesign()
    {

        $metaDesc = Setting::where('type', 'like', 'description_redesign')->first();
        $metaTitle = Setting::where('type', 'like', 'title_redesign')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_redesign')->first();

        return view('frontend.website_redesign', compact('metaDesc', 'metaTitle', 'metaKey'));
    }
    public function web_service_uk()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_web_service_uk']->value ?? '';
        $metatitle = $settings['title_web_service_uk']->value ?? '';

        return view('frontend.web_service_uk', compact('metaDescription', 'metatitle'));
    }
    public function seo_agency_chandigarh()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_seo_chandigarh']->value ?? '';
        $metatitle = $settings['title_seo_chandigarh']->value ?? '';

        return view('frontend.seo_agency_chandigarh', compact('metaDescription', 'metatitle'));
    }
    public function seo_agency_delhi()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_seo_delhi']->value ?? '';
        $metatitle = $settings['title_seo_delhi']->value ?? '';

        return view('frontend.seo_agency_delhi', compact('metaDescription', 'metatitle'));
    }
    public function seo_agency_jaipur()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_seo_jaipur']->value ?? '';
        $metatitle = $settings['title_seo_jaipur']->value ?? '';

        return view('frontend.seo_agency_jaipur', compact('metaDescription', 'metatitle'));
    }

    public function seo_agency_bangalore()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_seo_bangalore']->value ?? '';
        $metatitle = $settings['title_seo_bangalore']->value ?? '';

        return view('frontend.seo_agency_bangalore', compact('metaDescription', 'metatitle'));
    }

    public function seo_agency_in_pune()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_seo_pune']->value ?? '';
        $metatitle = $settings['title_seo_pune']->value ?? '';


        return view('frontend.seo_agency_in_pune', compact('metaDescription', 'metatitle'));
    }

    public function case_studies()
    {

        $cases = CaseStudy::where('status', 'active')->latest()->get();
        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_casestudy']->value ?? '';
        $metatitle = $settings['title_casestudy']->value ?? '';
        return view('frontend.case_studies', compact('metaDescription', 'metatitle', 'cases'));
    }

    public function case_details($slug)
    {

        $case = CaseStudy::where('slug', $slug)->first();
        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_casestudy']->value ?? '';
        $metatitle = $settings['title_casestudy']->value ?? '';

        return view('frontend.case_studies.project_details', compact('metaDescription', 'metatitle', 'case'));
    }

    public function contact()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_contact']->value ?? '';
        $metatitle = $settings['title_contact']->value ?? '';

        return view('frontend.contact', compact('metaDescription', 'metatitle'));
    }
    public function submitHomeForm(Request $request)
    {
        if ($request->filled('otp')) {
            if (
                session('home_form_email') === $request->email &&
                session('home_form_otp') == $request->otp &&
                now()->lt(session('home_form_otp_expires'))
            ) {
                $homeForm = new HomeForm();
                $homeForm->fname = session('home_form_fname');
                $homeForm->email = session('home_form_email');
                $homeForm->city = session('home_form_city');
                $homeForm->number = session('home_form_number');
                $homeForm->services = session('home_form_services');
                $homeForm->save();

                session()->forget([
                    'home_form_fname',
                    'home_form_email',
                    'home_form_city',
                    'home_form_number',
                    'home_form_services',
                    'home_form_otp',
                    'home_form_otp_expires'
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Form submitted successfully! Reloading...',
                    'refresh' => true
                ]);
            }

            return response()->json(['success' => false, 'message' => 'Invalid or expired OTP.']);
        }
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'number' => 'required|numeric|digits:10',
            'email' => 'required|email|unique:home_form,email',
            'services' => 'required|string',
            'city' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
        ]);
        session([
            'home_form_fname' => $validatedData['fname'],
            'home_form_email' => $validatedData['email'],
            'home_form_city' => $validatedData['city'],
            'home_form_number' => $validatedData['number'],
            'home_form_services' => $validatedData['services'],
        ]);
        $otp = rand(100000, 999999);
        session([
            'home_form_otp' => $otp,
            'home_form_otp_expires' => now()->addMinutes(10),
        ]);
        try {
            $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'support@digirushsolutions.com';
            $mail->Password = '>wE2;o7$Cz';
            $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->setFrom('support@digirushsolutions.com', 'Digi Rush');
            $mail->addAddress($validatedData['email']);
            $mail->isHTML(true);
            $mail->Subject = "Your OTP for Quote Verification";
            $mail->Body = "<p>Your OTP is <b>{$otp}</b>. It will expire in 10 minutes.</p>";
            $mail->AltBody = "Your OTP is {$otp}. It will expire in 10 minutes.";

            $mail->send();
        } catch (\Exception $e) {
            Log::error("OTP mail error: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Failed to send OTP. Try again.']);
        }
        return response()->json(['success' => true, 'message' => 'OTP sent to your email. Please enter it to verify.']);
    }


    public function homepageform()
    {
        $submissions = HomeForm::all();
        return view('admin.home_page_form.index', compact('submissions'));
    }

    public function edithomepageform($id)
    {
        $submission = HomeForm::findOrFail($id);
        return view('admin.home_page_form.edit', compact('submission'));
    }

    public function updatehomepageform(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'services' => 'required|string|max:255',
        ]);

        $submission = HomeForm::findOrFail($id);
        $submission->update($request->all());

        return redirect()->route('homePageSubmissions.index')->with('success', 'Submission updated successfully!');
    }

    public function destroyhomepageform($id)
    {
        $submission = HomeForm::findOrFail($id);
        $submission->delete();

        return redirect()->route('homePageSubmissions.index')->with('success', 'Submission deleted successfully!');
    }


    public function storequote(Request $request)
    {
        $formId = $request->input('form_id', 'default');
        if ($request->filled('otp')) {
            if (
                session('quote_email') === $request->email &&
                session('quote_otp') == $request->otp &&
                now()->lt(session('quote_otp_expires'))
            ) {
                MessageForm::create([
                    'name' => session('quote_name'),
                    'phone' => session('quote_phone'),
                    'email' => session('quote_email'),
                    'service' => session('quote_service'),
                    'city' => session('quote_city'),
                    'city_name' => session('quote_city_name') ?? '',
                    'form_source' => $formId
                ]);
                session()->forget([
                    'quote_name',
                    'quote_phone',
                    'quote_email',
                    'quote_service',
                    'quote_city',
                    'quote_city_name',
                    'quote_otp',
                    'quote_otp_expires'
                ]);
                return response()->json([
                    'success' => true,
                    'message' => 'Form submitted successfully! Reloading...',
                    'refresh' => true
                ]);
            }
            return response()->json(['success' => false, 'message' => 'Invalid or expired OTP.']);
        }
        if ($formId === 'form3') {
            $rules = [
                'name' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
                'phone' => 'required|string|max:10|regex:/^\+?[0-9\s\-()]+$/|unique:message_form,phone',
                'email' => 'required|email|max:255|unique:message_form,email',
                'service' => 'required|string|max:255',
                'city' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
                'city_name' => 'nullable|string',
            ];
        } else {
            $rules = [
                'fname' => 'required|string|max:255',
                'number' => 'required|string|max:10|regex:/^\+?[0-9\s\-()]+$/|unique:message_form,phone',
                'email' => 'required|email|max:255|unique:message_form,email',
                'services' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'city_name' => 'nullable|string',
            ];
        }
        $validated = $request->validate($rules);
        $name = $validated['name'] ?? $validated['fname'] ?? '';
        $phone = $validated['phone'] ?? $validated['number'] ?? '';
        $email = $validated['email'];
        $service = $validated['service'] ?? $validated['services'] ?? '';
        $city = $validated['city'];
        $cityName = $validated['city_name'] ?? '';
        session([
            'quote_name' => $name,
            'quote_phone' => $phone,
            'quote_email' => $email,
            'quote_service' => $service,
            'quote_city' => $city,
            'quote_city_name' => $cityName,
        ]);
        $otp = rand(100000, 999999);
        session([
            'quote_otp' => $otp,
            'quote_otp_expires' => now()->addMinutes(10),
        ]);
        try {
            $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'support@digirushsolutions.com';
            $mail->Password = '>wE2;o7$Cz';
            $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->setFrom('support@digirushsolutions.com', 'Digi Rush');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = "Your OTP for Quote Verification";
            $mail->Body = "<p>Your OTP is <b>{$otp}</b>. It will expire in 10 minutes.</p>";
            $mail->AltBody = "Your OTP is {$otp}. It will expire in 10 minutes.";
            $mail->send();
        } catch (\Exception $e) {
            Log::error("Quote OTP mail error: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Failed to send OTP. Try again.']);
        }
        return response()->json(['success' => true, 'message' => 'OTP sent to your email. Please enter it to verify.']);
    }
    public function storequotes(Request $request)
    {
        $validatedData = $request->validate([
            'name_uk' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'phone_uk' => 'required|string|max:15|regex:/^\+?[0-9\s\-()]+$/|unique:message_form,phone',
            'email_uk' => 'required|email|max:255|unique:message_form,email',
            'service_uk' => 'required|string|max:255',
            'city_uk' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'city_name_uk' => 'nullable|string',
        ], [
            'name_uk.required' => 'Please provide your full name.',
            'name_uk.regex' => 'The full name may only contain letters and spaces.',
            'phone_uk.required' => 'Please provide a phone number.',
            'phone_uk.regex' => 'Invalid phone format. Use numbers, spaces, hyphens, parentheses.',
            'email_uk.required' => 'Please enter a valid email address.',
            'email_uk.email' => 'The email address must be a valid email format.',
            'service_uk.required' => 'Please specify the service you are interested in.',
            'city_uk.required' => 'Please provide your city.',
            'city_uk.regex' => 'The city may only contain letters and spaces.',
        ]);

        // Save to database
        MessageForm::create([
            'name' => $validatedData['name_uk'],
            'phone' => $validatedData['phone_uk'],
            'email' => $validatedData['email_uk'],
            'service' => $validatedData['service_uk'],
            'city' => $validatedData['city_uk'],
            'city_name' => $validatedData['city_name_uk'] ?? '',
        ]);

        // Prepare email data
        $data = [
            "email_to" => 'support@digirushsolutions.com',
            "cc_emails" => ['manav.digirush@gmail.com', 'nitish.digirush@gmail.com'],
            "title" => "New Quote Request",
            "name" => $validatedData['name_uk'],
            "email_person" => $validatedData['email_uk'],
            "phone" => $validatedData['phone_uk'],
            "services" => $validatedData['service_uk'],
            "city" => $validatedData['city_uk'],
            "city_name" => $validatedData['city_name_uk'] ?? '',
        ];

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'support@digirushsolutions.com';
            $mail->Password = '>wE2;o7$Cz'; // Store securely in .env in production
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('support@digirushsolutions.com', 'Digi Rush');
            $mail->addAddress($data["email_to"]);
            foreach ($data["cc_emails"] as $cc) {
                $mail->addCC($cc);
            }

            $mail->isHTML(true);
            $mail->Subject = $data["title"];
            $mail->Body = view('mail.contact_us', ['data' => $data])->render();
            $mail->AltBody = 'This is a plain text version of the quote enquiry.';

            $mail->send();
        } catch (Exception $e) {
            Log::error("Quote form mail error: " . $mail->ErrorInfo);
        }

        session()->flash('form_submitted', true);
        return redirect()->route('thankyou')->with('success', 'Form submitted successfully!');
    }

    public function submitSeoCompanyForm(Request $request)
    {
        $isOtpStep = $request->filled('otp');

        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'email' => 'required|email|unique:seo_company,email|max:255',
            'city' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'number' => 'required|digits:10',
            'countryCode' => 'required|in:91,44,1',
            'message' => [
                'required',
                'max:255',
                function ($attribute, $value, $fail) {
                    $pattern = '/^(https?:\/\/)?(www\.)?(\.)?[a-zA-Z0-9-]+\.[a-zA-Z]{2,}(\/\S*)?$/';
                    if (!preg_match($pattern, $value)) {
                        $fail('The ' . $attribute . ' must be a valid URL.');
                    }
                }
            ],
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $email = $request->email;
        $phoneNumber = $request->countryCode . $request->number;

        if (!$isOtpStep) {
            if (SeoCompany::where('email', $email)->exists()) {
                return response()->json(['success' => false, 'message' => 'This email already exists.'], 422);
            }

            $phoneValidation = $this->validatePhoneNumber($request->countryCode, $request->number);
            if (!$phoneValidation['valid']) {
                return response()->json([
                    'success' => false,
                    'message' => $phoneValidation['message']
                ], 422);
            }

            // Generate and send OTP
            $otp = rand(100000, 999999);
            session([
                'otp' => $otp,
                'otp_email' => $email,
            ]);

            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'support@digirushsolutions.com';
                $mail->Password = '>wE2;o7$Cz';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->setFrom('support@digirushsolutions.com', 'Digi Rush');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'Your OTP Code';
                $mail->Body = "Your OTP code is: <strong>$otp</strong>";
                $mail->send();

                return response()->json([
                    'success' => true,
                    'message' => 'OTP sent to your email. Please enter it to verify.'
                ]);
            } catch (Exception $e) {
                Log::error("OTP Email Error: " . $mail->ErrorInfo);
                return response()->json(['success' => false, 'message' => 'Failed to send OTP. Try again.']);
            }
        }

        // OTP verification step
        if (
            session()->has('otp') &&
            session()->has('otp_email') &&
            session('otp_email') === $email &&
            session('otp') == $request->otp
        ) {
            SeoCompany::create([
                'fname' => $request->fname,
                'email' => $email,
                'city' => $request->city,
                'mobile_number' => $phoneNumber,
                'url' => $request->message,
                'city_name' => $request->input('city_name'),
            ]);
            session()->forget(['otp', 'otp_email']);

            return response()->json([
                'success' => true,
                'message' => 'Form submitted successfully!'
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Invalid or expired OTP.']);
    }

    private function validatePhoneNumber($countryCode, $phoneNumber)
    {
        try {
            $cleanCountryCode = ltrim($countryCode, '+');
            $fullPhone = '+' . $cleanCountryCode . $phoneNumber;
            $accessKey = '376d42f16158f1ca5bb00609ac57132d';
            $verifyUrl = "https://apilayer.net/api/validate?access_key=" . $accessKey . "&number=" . urlencode($fullPhone) . "&format=1";
            $response = Http::timeout(10)->get($verifyUrl);
            if (!$response->successful()) {
                Log::error('Numverify API request failed', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                return [
                    'valid' => false,
                    'message' => 'Phone validation service is temporarily unavailable. Please try again.'
                ];
            }
            $phoneData = $response->json();
            Log::info('Numverify API Response', [
                'phone' => $fullPhone,
                'response' => $phoneData
            ]);
            if (isset($phoneData['success']) && $phoneData['success'] === false) {
                Log::error('Numverify API Error', [
                    'error' => $phoneData['error'] ?? 'Unknown error',
                    'phone' => $fullPhone
                ]);
                return [
                    'valid' => false,
                    'message' => 'Unable to validate phone number. Please check the number and try again.'
                ];
            }
            if (!isset($phoneData['valid'])) {
                Log::error('Invalid Numverify API response structure', [
                    'response' => $phoneData,
                    'phone' => $fullPhone
                ]);
                return [
                    'valid' => false,
                    'message' => 'Phone validation failed. Please try again.'
                ];
            }
            $isValidPhone = $phoneData['valid'] === true;
            $lineType = $phoneData['line_type'] ?? '';
            $countryName = $phoneData['country_name'] ?? '';
            $carrierName = $phoneData['carrier'] ?? '';
            if (!$isValidPhone) {
                return [
                    'valid' => false,
                    'message' => 'The phone number is not valid. Please check and try again.'
                ];
            }
            if (!in_array($lineType, ['mobile', 'Mobile', 'MOBILE'])) {
                return [
                    'valid' => false,
                    'message' => 'Please enter a valid mobile phone number.'
                ];
            }
            $expectedCountries = [
                '91' => ['India', 'IN'],
                '44' => ['United Kingdom', 'UK', 'GB'],
                '1' => ['United States', 'US', 'USA', 'Canada', 'CA']
            ];
            if (isset($expectedCountries[$cleanCountryCode])) {
                $countryCode = $phoneData['country_code'] ?? '';
                if (
                    !in_array($countryCode, $expectedCountries[$cleanCountryCode]) &&
                    !in_array($countryName, $expectedCountries[$cleanCountryCode])
                ) {
                    return [
                        'valid' => false,
                        'message' => "The phone number doesn't match the selected country code (+{$cleanCountryCode})."
                    ];
                }
            }
            return [
                'valid' => true,
                'message' => 'Phone number is valid',
                'details' => [
                    'country' => $countryName,
                    'carrier' => $carrierName,
                    'line_type' => $lineType
                ]
            ];
        } catch (Exception $e) {
            Log::error('Phone validation exception', [
                'error' => $e->getMessage(),
                'phone' => $fullPhone ?? null
            ]);
            return [
                'valid' => false,
                'message' => 'Phone validation service is temporarily unavailable. Please try again.'
            ];
        }
    }

    public function submitcontactform(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'lastname' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'mobile_number' => 'required|digits:10',
            'email' => 'required|email|max:255',
            'services' => 'required|string',
            'city' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'countryCode' => 'nullable|numeric',
            'otp' => 'nullable|digits:6',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        $data = $validator->validated();
        $email = $data['email'];
        $otp = $data['otp'] ?? null;
        $phoneNumber = $data['countryCode'] ? $data['countryCode'] . $data['mobile_number'] : $data['mobile_number'];
        if (!$otp) {
            $exists = ContactForm::where('email', $email)
                ->orWhere('mobile_number', $phoneNumber)
                ->exists();
            if ($exists) {
                return response()->json([
                    'success' => false,
                    'message' => 'Phone or email already exists.'
                ]);
            }
            $generatedOtp = rand(100000, 999999);
            Session::put('otp_email', $email);
            Session::put('otp_code', $generatedOtp);
            Session::put('otp_expires_at', now()->addMinutes(5));
            Session::put('contact_data', $data);
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'support@digirushsolutions.com';
                $mail->Password = '>wE2;o7$Cz';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->setFrom('support@digirushsolutions.com', 'Digi Rush');
                $mail->addAddress($email);
                $mail->Subject = "Your OTP Code";
                $mail->Body = "Your OTP is: $generatedOtp";
                $mail->send();
                return response()->json([
                    'success' => true,
                    'step' => 'otp_sent'
                ]);
            } catch (Exception $e) {
                Log::error("OTP send failed: " . $mail->ErrorInfo);
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to send OTP.'
                ]);
            }
        }
        if (
            Session::get('otp_email') !== $email ||
            Session::get('otp_code') != $otp ||
            now()->gt(Session::get('otp_expires_at'))
        ) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid or expired OTP.'
            ]);
        }
        $stored = Session::get('contact_data', $data);
        ContactForm::create([
            'firstname' => $stored['firstname'],
            'lastname' => $stored['lastname'],
            'email' => $stored['email'],
            'mobile_number' => $stored['countryCode'] ? $stored['countryCode'] . $stored['mobile_number'] : $stored['mobile_number'],
            'city' => $stored['city'],
            'services' => $stored['services'],
        ]);
        Session::forget(['otp_email', 'otp_code', 'otp_expires_at', 'contact_data']);
        return response()->json(['success' => true, 'action' => 'form_saved']);

    }

    public function homelandingform()
    {
        return view('frontend.homelandingpage');
    }

    public function storeblogs(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
        ]);

        if ($request->hasFile('blog_banner')) {
            $file = $request->file('blog_banner');
            $uploadId = $this->handleImage($file);

        } else {
            $uploadId = NULL;
        }


        $blog = new Blog;

        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));

        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->banner = $uploadId;
        $blog->slug = strtolower($slug);
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;

        $blog->meta_title = $request->meta_title;
        $blog->meta_img = $request->meta_img;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $blog->banner = $this->handleImage($file);
        }
        if ($request->hasFile('meta_img')) {
            $file = $request->file('meta_img');
            $blog->meta_img = $this->handleImage($file);
        }

        $blog->save();


        return redirect()->route('blog')->with('success', 'Blog post has been created successfully');

    }

    public function seo_digital_services()
    {
        return view('frontend.seodigitalpage');
    }

    public function storehomelanding(Request $request)
    {
        $formType = $request->input('type');

        if ($formType === 'digital-web-services') {
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
        } elseif ($formType === 'footer_form') {
            $validated = $request->validate([
                'fname_footer' => 'required',
                'phone_no_footer' => 'required|digits:10|numeric|unique:home_landings,phone_no_footer',
                'email_footer' => 'required|email|max:255|unique:home_landings,email_footer',
                'services_footer' => 'required|string|max:255',
                'lname_footer' => 'required',
                'city_footer' => 'nullable|string|max:255',
            ]);

            DB::table('home_landings')->insert([
                'fname_footer' => $validated['fname_footer'],
                'lname_footer' => $validated['lname_footer'],
                'phone_no_footer' => $validated['phone_no_footer'],
                'email_footer' => $validated['email_footer'],
                'services_footer' => $validated['services_footer'],
                'city_footer' => $validated['city_footer'],
                'type' => $formType,
                'created_at' => now(),
            ]);
        }

        $data["email_to"] = 'support@digirushsolutions.com';
        $data["email_to"] = 'manav.digirush@gmail.com';
        $data["email_to"] = 'nitish.digirush@gmail.com';
        $data["title"] = "New Enquiry Request";
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

    public function storehomelandingg(Request $request)
    {
        $formType = $request->input('type');


        $validated = $request->validate([
            'fname_footer' => 'required|regex:/^[a-zA-Z]+$/',
            'phone_no_footer' => 'required|digits:10|numeric|unique:home_landings,phone_no',
            'email_footer' => 'required|email|max:255|unique:home_landings,email',
            'services_footer' => 'required|string|max:255',
            'lname_footer' => 'nullable|regex:/^[a-zA-Z]+$/',
            'city_footer' => 'nullable|string|max:255',

        ]);

        DB::table('home_landings')->insert([
            'fname' => $validated['fname_footer'],
            'lname' => $validated['lname_footer'],
            'phone_no' => $validated['phone_no_footer'],
            'email' => $validated['email_footer'],
            'services' => $validated['services_footer'],
            'city' => $validated['city_footer'],
            'type' => $formType,
            'created_at' => now(),
        ]);

        $data["email_to"] = 'support@digirushsolutions.com';
        $data["email_to"] = 'manav.digirush@gmail.com';
        $data["email_to"] = 'nitish.digirush@gmail.com';
        $data["title"] = "New Enquiry Request";
        $data["name"] = $request->fname_footer . ' ' . $request->lname_footer;
        $data["email_person"] = $request->email_footer;
        $data["phone"] = $request->phone_no_footer;
        $data["services"] = $request->services_footer;
        $data["city"] = $request->city_footer;
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


    public function file_upload(Request $request)
    {
        if ($request->hasFile('upload')) {

            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();

            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('blog_image'), $fileName);
            $url = asset('blog_image/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);


        }

    }

    //indexpage for home landind
    public function home_landing()
    {
        $data = DB::table('home_landings')->where('type', 'digital-web-services')->orderBy('id', 'desc')->get();
        return view('admin.home_landing.index', compact('data'));
    }


    //view function
    public function home_view($id)
    {
        $data = DB::table('home_landings')->find($id);
        return view('admin.home_landing.view', compact('data'));
    }

    //delete function
    public function home_destroy($id)
    {

        $data = DB::table('home_landings')->where('id', $id)->first();

        if ($data) {

            DB::table('home_landings')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Record deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Record not found');
        }
    }




    //indexpage for home landind
    public function seo_landing()
    {
        $data = DB::table('home_landings')->where('type', 'seo-digital-services')->orderBy('id', 'desc')->get();
        return view('admin.seo_landing.index', compact('data'));
    }


    //view function
    public function seo_view($id)
    {
        $data = DB::table('home_landings')->find($id);
        return view('admin.seo_landing.view', compact('data'));
    }

    //delete function
    public function seo_destroy($id)
    {

        $data = DB::table('home_landings')->where('id', $id)->first();

        if ($data) {

            DB::table('home_landings')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Record deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Record not found');
        }
    }

    public function bulkDelete(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('ids') && is_array($request->ids)) {
                $deletedCount = DB::table('home_landings')->whereIn('id', $request->ids)->delete();
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
            DB::table('home_landings')->whereIn('id', $request->ids)->delete();
            return back()->with('success', 'Selected records deleted successfully.');
        }
        return back()->with('error', 'No records selected.');
    }


    public function hire_developers()
    {
        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_hire_developers']->value ?? '';
        $metatitle = $settings['title_hire_developers']->value ?? '';
        $metaKeywords = $settings['keyword_home']->value ?? '';

        return view('frontend.hire_devlopers', compact('metaDescription', 'metatitle'));
    }
    public function homelandingus()
    {
        return view('frontend.homelanding_us');
    }

    public function submithiredeveloperform(Request $request)
    {
        $isOtpStep = $request->filled('otp');

        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'number' => 'required|digits:10',
            'countryCode' => 'required|in:91,44,1',
            'message' => 'nullable|max:255',
        ], [
            'fname.required' => 'The full name field is required.',
            'fname.regex' => 'The full name may only contain letters and spaces.',
            'email.required' => 'The email address field is required.',
            'email.email' => 'Please enter a valid email address.',
            'city.required' => 'The city field is required.',
            'city.regex' => 'The city may only contain letters and spaces.',
            'number.required' => 'The phone number field is required.',
            'number.digits' => 'The phone number must be exactly 10 digits.',
            'countryCode.required' => 'Country code is required.',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $email = $request->email;
        $phoneNumber = $request->countryCode . $request->number;

        if (!$isOtpStep) {
            // Check if email already exists
            if (HireDeveloper::where('email', $email)->exists()) {
                return response()->json(['success' => false, 'message' => 'This email already exists.'], 422);
            }
            // Check if phone already exists
            if (HireDeveloper::where('mobile_number', $phoneNumber)->exists()) {
                return response()->json(['success' => false, 'message' => 'This phone number has already been taken.'], 422);
            }

            // Generate and send OTP
            $otp = rand(100000, 999999);
            session([
                'otp' => $otp,
                'otp_email' => $email,
            ]);

            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'support@digirushsolutions.com';
                $mail->Password = '>wE2;o7$Cz';  // Use env variables in production!
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('support@digirushsolutions.com', 'Digi Rush');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'Your OTP Code';
                $mail->Body = "Your OTP code is: <strong>$otp</strong>";
                $mail->send();

                return response()->json([
                    'success' => true,
                    'message' => 'OTP sent to your email. Please enter it to verify.'
                ]);
            } catch (Exception $e) {
                Log::error("OTP Email Error: " . $mail->ErrorInfo);
                return response()->json(['success' => false, 'message' => 'Failed to send OTP. Try again.']);
            }
        }

        // OTP verification step
        if (
            session()->has('otp') &&
            session()->has('otp_email') &&
            session('otp_email') === $email &&
            session('otp') == $request->otp
        ) {
            $lname = $request->input('lname', '');
            $fullName = $request->fname . ($lname ? ' ' . $lname : '');

            HireDeveloper::create([
                'fname' => $fullName,
                'email' => $email,
                'city' => $request->city,
                'mobile_number' => $phoneNumber,
                'url' => $request->message,
                'services' => $request->input('services'),
            ]);

            session()->forget(['otp', 'otp_email']);

            // Send notification email to admin(s)
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'support@digirushsolutions.com';
                $mail->Password = '>wE2;o7$Cz';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('support@digirushsolutions.com', 'Digi Rush');
                $mail->addAddress('support@digirushsolutions.com');
                $mail->addCC('manav.digirush@gmail.com');
                $mail->addCC('nitish.digirush@gmail.com');

                $mail->isHTML(true);
                $mail->Subject = "New Quote Request";
                $mail->Body = view('mail.contact_us', [
                    'data' => [
                        'name' => $fullName,
                        'email_person' => $email,
                        'phone' => $phoneNumber,
                        'services' => $request->input('services'),
                        'url' => $request->message,
                        'city' => $request->city,
                    ]
                ])->render();

                $mail->send();
            } catch (Exception $e) {
                Log::error("Quote form mail error: " . $mail->ErrorInfo);
            }

            return response()->json([
                'success' => true,
                'message' => 'Form submitted successfully!'
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Invalid or expired OTP.']);
    }


    public function submitLandingForm(Request $request)
    {
        Log::info('Form data:', $request->all());
        $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        Landing::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'form_type' => $request->form_type,
        ]);


        $data["email_to"] = 'support@digirushsolutions.com';
        $data["email_to"] = 'manav.digirush@gmail.com';
        $data["email_to"] = 'nitish.digirush@gmail.com';
        $data["title"] = "New Enquiry Request";
        $data["name"] = $request->name;
        $data["email_person"] = $request->email;
        $data["phone"] = $request->phone;
        $data["message"] = $request->message;
        $data["form_type"] = $request->form_type;
        $mail = new PHPMailer(true);



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
        $mail->Body = view('mail.contact_us_new', ['data' => $data])->render();
        $mail->AltBody = 'This is a plain-text message body for non-HTML email clients';


        $mail->send();
        session()->flash('form_submitted', true);
        return response()->json(['success' => true]);
    }


    public function payment()
    {
        return view('frontend.payment');
    }


    public function initiatePayment(Request $request)
    {
        $merchant_id = '3355649'; // your real merchant ID
        $accessCode = 'AVRS68LC87AL07SRLA'; // your real access code
        $working_key = '5D47676D4590C5344233E9E66F5C952C'; // your working key
        $redirectUrl = route('ccavenue.response');

        $order_id = uniqid('ORD');
        $amount = $request->amount;
        $currency = 'INR'; // ensure this is set

        $data = [
            'merchant_id' => $merchant_id,
            'order_id' => $order_id,
            'currency' => $currency,
            'amount' => $amount,
            'redirect_url' => $redirectUrl,
            'cancel_url' => $redirectUrl,
            'language' => 'EN',
            'billing_name' => $request->name ?? 'Test User',
            'billing_email' => $request->email ?? 'test@example.com',
            'billing_tel' => '9999999999',
            'billing_address' => 'Address',
            'billing_city' => 'City',
            'billing_state' => 'State',
            'billing_country' => 'India',
            'billing_zip' => '000000',
        ];

        $merchant_data = http_build_query($data);
        $encRequest = $this->encrypt($merchant_data, $working_key);

        return view('payment.ccavenue_request', compact('encRequest', 'accessCode'));
    }

    public function paymentResponse(Request $request)
    {
        $working_key = '5D47676D4590C5344233E9E66F5C952C';
        $encResponse = $request->encResp;

        $rcvd_string = $this->decrypt($encResponse, $working_key);
        parse_str($rcvd_string, $output);

        if (isset($output['order_status']) && $output['order_status'] == 'Success') {
            return redirect()->back()->with('success', 'Payment Successful!');
        } else {
            return redirect()->back()->with('error', 'Payment Failed or Cancelled.');
        }
    }

    private function encrypt($plainText, $key)
    {
        $secretKey = pack('H*', md5($key));
        $initVector = pack('H*', '00000000000000000000000000000000'); // 16 bytes IV
        $openMode = openssl_encrypt($plainText, 'AES-128-CBC', $secretKey, OPENSSL_RAW_DATA, $initVector);
        return bin2hex($openMode);
    }

    private function decrypt($encryptedText, $key)
    {
        $secretKey = pack('H*', md5($key));
        $initVector = pack('H*', '00000000000000000000000000000000');
        $encryptedText = pack('H*', $encryptedText);
        return openssl_decrypt($encryptedText, 'AES-128-CBC', $secretKey, OPENSSL_RAW_DATA, $initVector);
    }


}
