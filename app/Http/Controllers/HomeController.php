<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\DynamicPage;
use App\Models\Blog;
use App\Models\HomeForm;
use App\Models\MessageForm;
use App\Models\ContactForm;
use App\Models\SeoCompany;
use App\Models\HireDeveloper;
use App\Models\BlogCategory;
use App\Models\Landing;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mail;
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
    public function dynamic_page($slugs){
        $data = DynamicPage::where('slug',$slugs)->first();
        if($data){
            return view('frontend.dynamic_page',compact('data'));
        }else{
            return view('frontend.ppc_expert');
        }
        
    }
    
    public function mobile_seo()
    {
        return view('frontend.mobile_seo');
    }

    public function webflow_developement()
    {
        return view('frontend.webflow-development');
    }
    public function email_marketing()
    {
        return view('frontend.email-marketing');
    }
    public function maintenence_support()
    {
        return view('frontend.website-maintenance');
    }
    public function fullstack_dev()
    {
        return view('frontend.fullstack-development');
    }
    public function shopify_design()
    {
        return view('frontend.shopify-design');
    }
    public function ui_design()
    {
        return view('frontend.uiux-design');
    }
    public function android_app()
    {
        return view('frontend.android-alldevelopment');
    }
    public function ios_app()
    {
        return view('frontend.ios-appdevelopment');
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
    public function custom_design()
    {
        return view('frontend.custom-design');
    }
    public function responsive_design()
    {
        return view('frontend.responsive-design');
    }
    public function ecommerce_design()
    {
        return view('frontend.ecommerce_design');
    }
    public function custom_app()
    {
        return view('frontend.custom-appdevelopment');
    }
    public function ecommerce_app()
    {
        return view('frontend.ecommerce-appdevelop');
    }
    public function product_design()
    {
        return view('frontend.product-design');
    }
    public function graphic_design()
    {
        return view('frontend.graphic-design');
    }
    public function home()
    {
        $blogs = Blog::take(6)->get();
        $blog_categories = BlogCategory::all();
        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_Home']->value ?? '';
        $metatitle = $settings['title_home']->value ?? '';
        $metaKeywords = $settings['keyword_home']->value ?? '';

        return view('home', compact('metaDescription', 'metatitle', 'blogs', 'blog_categories', 'metaKeywords'));
    }

    public function about()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_About_us']->value ?? '';
        $metatitle = $settings['title_About_us']->value ?? '';

        return view('frontend.about', compact('metaDescription', 'metatitle'));
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

    public function seo_services()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_seo']->value ?? '';
        $metatitle = $settings['title_seo']->value ?? '';
        $metaKeywords = $settings['keyword_seo']->value ?? '';

        return view('frontend.seo_company', compact('metaDescription', 'metatitle', 'metaKeywords'));
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

    public function wordpress_developement()
    {

        $metaDesc = Setting::where('type', 'like', 'description_wordpress')->first();
        $metaTitle = Setting::where('type', 'like', 'title_wordpress')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_wordpress')->first();

        return view('frontend.wordpress_development', compact('metaDesc', 'metaTitle', 'metaKey'));
    }

    public function ecommerce_developement()
    {

        $metaDesc = Setting::where('type', 'like', 'description_ecommerce')->first();
        $metaTitle = Setting::where('type', 'like', 'title_ecommerce')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_ecommerce')->first();

        return view('frontend.ecommerce_development', compact('metaDesc', 'metaTitle', 'metaKey'));
    }

    public function shopify_developement()
    {

        $metaDesc = Setting::where('type', 'like', 'description_shopify')->first();
        $metaTitle = Setting::where('type', 'like', 'title_shopify')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_shopify')->first();

        return view('frontend.shopify_development', compact('metaDesc', 'metaTitle', 'metaKey'));
    }

    public function laravel_developement()
    {

        $metaDesc = Setting::where('type', 'like', 'description_laravel')->first();
        $metaTitle = Setting::where('type', 'like', 'title_laravel')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_laravel')->first();

        return view('frontend.laravel_development', compact('metaDesc', 'metaTitle', 'metaKey'));
    }

    public function api_development()
    {

        $metaDesc = Setting::where('type', 'like', 'description_api')->first();
        $metaTitle = Setting::where('type', 'like', 'title_api')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_api')->first();

        return view('frontend.api_development', compact('metaDesc', 'metaTitle', 'metaKey'));
    }

    public function web_design()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_web_designing']->value ?? '';
        $metatitle = $settings['title_web_designing']->value ?? '';
        $metaKeywords = $settings['keyword_web_designing']->value ?? '';

        return view('frontend.web_designing', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }

    public function ecommerce_seo()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_shopify_seo']->value ?? '';
        $metatitle = $settings['title_shopify_seo']->value ?? '';
        $metaKeywords = $settings['keyword_shopify_seo']->value ?? '';

        return view('frontend.shopify_seo', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }

    public function social_marketing()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_social_media']->value ?? '';
        $metatitle = $settings['title_social_media']->value ?? '';
        $metaKeywords = $settings['keyword_social_media']->value ?? '';

        return view('frontend.social_media_marketing', compact('metaDescription', 'metatitle', 'metaKeywords'));
    }

    public function keyword_research()
    {

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_research']->value ?? '';
        $metatitle = $settings['title_research']->value ?? '';

        return view('frontend.keyword_research', compact('metaDescription', 'metatitle'));
    }
    public function website_redesign()
    {

        $metaDesc = Setting::where('type', 'like', 'description_redesign')->first();
        $metaTitle = Setting::where('type', 'like', 'title_redesign')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_redesign')->first();

        return view('frontend.website_redesign', compact('metaDesc', 'metaTitle', 'metaKey'));
    }
    public function responsive_web()
    {

        $metaDesc = Setting::where('type', 'like', 'description_responsive')->first();
        $metaTitle = Setting::where('type', 'like', 'title_responsive')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_responsive')->first();

        return view('frontend.responsive_web', compact('metaDesc', 'metaTitle', 'metaKey'));
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

        $cases = Blog::where('category_id', '34')->orderBy('id', 'desc')->get();

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_casestudy']->value ?? '';
        $metatitle = $settings['title_casestudy']->value ?? '';

        return view('frontend.case_studies', compact('metaDescription', 'metatitle', 'cases'));
    }

    public function case_details($slug)
    {

        $blog = Blog::where('slug', $slug)->first();

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_casestudy']->value ?? '';
        $metatitle = $settings['title_casestudy']->value ?? '';

        return view('frontend.case_studies.project_details', compact('metaDescription', 'metatitle', 'blog'));
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
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'number' => 'required|numeric|digits:10|unique:home_form,number',
            'email' => 'required|email|max:255|unique:home_form,email',
            'services' => 'required|string',
            'city' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'countryCode' => 'nullable|numeric',
        ], [
            'fname.required' => 'Please provide your full name.',
            'fname.regex' => 'The full name may only contain letters and spaces.',
            'number.required' => 'The phone number field is required.',
            'number.digits' => 'The phone number must be exactly 10 digits.',
            'number.unique' => 'This phone number has already been taken.',
            'email.required' => 'Please enter a valid email address.',
            'email.email' => 'The email address must be a valid email format.',
            'city.required' => 'Please specify your city.',
            'city.regex' => 'The city may only contain letters and spaces.',
            'services.required' => 'Please specify the services.',
            'countryCode.numeric' => 'The country code must be a number.',
        ]);
        $phoneNumber = $request->input('countryCode')
            ? $request->input('countryCode') . $request->input('number')
            : $request->input('number');
        $phoneExists = HomeForm::where('number', $phoneNumber)->exists();
        if ($phoneExists) {
            return back()->withErrors(['number' => 'This phone number has already been taken.'])->withInput();
        }

        $phoneNumber = $validatedData['countryCode'] ? $validatedData['countryCode'] . $validatedData['number'] : $validatedData['number'];


        $homeForm = new HomeForm();
        $homeForm->fname = $validatedData['fname'];
        $homeForm->email = $validatedData['email'];
        $homeForm->city = $validatedData['city'];
        $homeForm->number = $phoneNumber;
        $homeForm->services = $validatedData['services'];
        $homeForm->save();

        // Prepare email data
        $data = [
            "email_to" => 'contact@digirushsolutions.com',
            "cc_emails" => ['manav.digirush@gmail.com', 'nitish.digirush@gmail.com', 'anudeol054@gmail.com'],
            "title" => "New Quote Request",
            "name" => $validatedData['fname'],
            "email_person" => $validatedData['email'],
            "phone" => $validatedData['number'],
            "services" => $validatedData['services'],
            "city" => $validatedData['city'],
            "city_name" => $validatedData['city_name_uk'] ?? '',
        ];

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@digirushsolutions.com';
            $mail->Password = 'L1[tIPdxD92w'; // Store securely in .env in production
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('contact@digirushsolutions.com', 'Digi Rush');
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
            \Log::error("Quote form mail error: " . $mail->ErrorInfo);
        }

        session()->flash('form_submitted', true);
        return redirect()->route('thankyou')->with('success', 'Form submitted successfully!');
        session()->flash('form_submitted', true);

        return redirect()->route('thankyou')->with('success', 'Form submitted successfully!');

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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'phone' => 'required|string|max:10|regex:/^\+?[0-9\s\-()]+$/|unique:message_form,phone',
            'email' => 'required|email|max:255|unique:message_form,email',
            'service' => 'required|string|max:255',
            'city' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'city_name' => 'nullable|string',
        ], [
            'name.required' => 'Please provide your full name.',
            'name.regex' => 'The full name may only contain letters and spaces.',
            'phone.required' => 'Please provide a phone number.',
            'phone.regex' => 'Invalid phone format. Use numbers, spaces, hyphens, parentheses.',
            'email.required' => 'Please enter a valid email address.',
            'email.email' => 'The email address must be a valid email format.',
            'service.required' => 'Please specify the service you are interested in.',
            'city.required' => 'Please provide your city.',
            'city.regex' => 'The city may only contain letters and spaces.',
            'city_name.string' => 'The city name must be a string.',
        ]);

        MessageForm::create([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'service' => $validatedData['service'],
            'city' => $validatedData['city'],
            'city_name' => $validatedData['city_name'] ?? '',
        ]);
        // Prepare email data
        $data = [
            "email_to" => 'contact@digirushsolutions.com',
            "cc_emails" => ['manav.digirush@gmail.com', 'nitish.digirush@gmail.com'],
            "title" => "New Quote Request",
            "name" => $validatedData['name'],
            "email_person" => $validatedData['email'],
            "phone" => $validatedData['phone'],
            "services" => $validatedData['service'],
            "city" => $validatedData['city'],
            "city_name" => $validatedData['city_name'] ?? '',
        ];

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@digirushsolutions.com';
            $mail->Password = 'L1[tIPdxD92w'; // Store securely in .env in production
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('contact@digirushsolutions.com', 'Digi Rush');
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
            \Log::error("Quote form mail error: " . $mail->ErrorInfo);
        }

        session()->flash('form_submitted', true);
        return redirect()->route('thankyou')->with('success', 'Form submitted successfully!');
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
            "email_to" => 'contact@digirushsolutions.com',
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
            $mail->Username = 'contact@digirushsolutions.com';
            $mail->Password = 'L1[tIPdxD92w'; // Store securely in .env in production
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('contact@digirushsolutions.com', 'Digi Rush');
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
            \Log::error("Quote form mail error: " . $mail->ErrorInfo);
        }

        session()->flash('form_submitted', true);
        return redirect()->route('thankyou')->with('success', 'Form submitted successfully!');
    }


    public function submitseocompanyform(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'email' => 'required|email|max:255|unique:seo_company,email',
            'city' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'number' => 'required|digits:10|unique:seo_company,mobile_number',
            'message' => [
                'required',
                'max:255',
                function ($attribute, $value, $fail) {
                    $pattern = '/^(https?:\/\/)?(www\.)?(\.)?[a-zA-Z0-9-]+\.[a-zA-Z]{2,}(\/\S*)?$/';
                    if (!preg_match($pattern, $value)) {
                        $fail('The ' . $attribute . ' must be a valid URL starting with http(s):// or www and must contain at least one "."');
                    }
                }
            ],
            'countryCode' => 'nullable|numeric',
        ], [
            'fname.required' => 'The full name field is required.',
            'fname.regex' => 'The full name may only contain letters and spaces.',
            'email.required' => 'The email address field is required.',
            'email.email' => 'Please enter a valid email address.',
            'city.required' => 'The city field is required.',
            'city.regex' => 'The city may only contain letters and spaces.',
            'number.required' => 'The phone number field is required.',
            'number.digits' => 'The phone number must be exactly 10 digits.',
            'message.required' => 'The website URL field is required.',
            'message.max' => 'The website URL may not be greater than 255 characters.',
        ]);

        $phoneNumber = $validatedData['countryCode']
            ? $validatedData['countryCode'] . $validatedData['number']
            : $validatedData['number'];

        $phoneExists = SeoCompany::where('mobile_number', $phoneNumber)->exists();
        if ($phoneExists) {
            return back()->withErrors(['number' => 'This phone number has already been taken.'])->withInput();
        }

        // Save to DB
        SeoCompany::create([
            'fname' => $validatedData['fname'],
            'email' => $validatedData['email'],
            'city' => $validatedData['city'],
            'mobile_number' => $phoneNumber,
            'url' => $validatedData['message'],
            'city_name' => $request->input('city_name'),
        ]);

        // Email data
        $data = [
            "email_to" => 'contact@digirushsolutions.com',
            "cc_emails" => ['manav.digirush@gmail.com', 'nitish.digirush@gmail.com'],
            "title" => "New SEO Company Enquiry",
            "name" => $validatedData['fname'],
            "email_person" => $validatedData['email'],
            "phone" => $phoneNumber,
            "services" => 'SEO Company Form',
            "city" => $validatedData['city'],
            "url" => $validatedData['message'],
        ];

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@digirushsolutions.com';
            $mail->Password = 'L1[tIPdxD92w'; // Move to .env for security
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('contact@digirushsolutions.com', 'Digi Rush');
            $mail->addAddress($data["email_to"]);

            foreach ($data["cc_emails"] as $cc) {
                $mail->addCC($cc);
            }

            $mail->isHTML(true);
            $mail->Subject = $data["title"];
            $mail->Body = view('mail.contact_us', ['data' => $data])->render();
            $mail->AltBody = 'Plain text version of the SEO company enquiry email.';

            $mail->send();
        } catch (Exception $e) {
            \Log::error("SEO form email failed: " . $mail->ErrorInfo);
        }

        session()->flash('form_submitted', true);
        return redirect()->route('thankyou')->with('success', 'Form submitted successfully!');
    }





    public function submitcontactform(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'lastname' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'mobile_number' => 'required|digits:10|unique:contact_form_tbl,mobile_number',
            'email' => 'required|email|max:255|unique:contact_form_tbl,email',
            'services' => 'required|string',
            'city' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'countryCode' => 'nullable|numeric',
        ], [
            'firstname.required' => 'Please provide your first name.',
            'firstname.regex' => 'The first name may only contain letters and spaces.',
            'lastname.required' => 'Please provide your last name.',
            'lastname.regex' => 'The last name may only contain letters and spaces.',
            'mobile_number.required' => 'Please provide your mobile number.',
            'mobile_number.digits' => 'The mobile number must be exactly 10 digits.',
            'mobile_number.unique' => 'This phone number has already been taken.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'The email address must be a valid email format.',
            'services.required' => 'Please specify the services you are interested in.',
            'city.required' => 'Please provide your city.',
            'city.regex' => 'The city may only contain letters and spaces.',
            'countryCode.numeric' => 'The country code must be a number.',
        ]);

        $phoneNumber = $validatedData['countryCode'] ? $validatedData['countryCode'] . $validatedData['mobile_number'] : $validatedData['mobile_number'];

        $phoneExists = ContactForm::where('mobile_number', $phoneNumber)->exists();
        if ($phoneExists) {
            return back()->withErrors(['mobile_number' => 'This phone number has already been taken.'])->withInput();
        }

        // Save to DB
        ContactForm::create([
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname'],
            'email' => $validatedData['email'],
            'city' => $validatedData['city'],
            'mobile_number' => $phoneNumber,
            'services' => $validatedData['services'],
        ]);

        // Prepare email data
        $data = [
            "email_to" => 'contact@digirushsolutions.com',
            "cc_emails" => ['manav.digirush@gmail.com', 'nitish.digirush@gmail.com'],
            "title" => "New Enquiry Request",
            "name" => $validatedData['firstname'] . ' ' . $validatedData['lastname'],
            "email_person" => $validatedData['email'],
            "phone" => $phoneNumber,
            "services" => $validatedData['services'],
            "city" => $validatedData['city'],
            "type" => 'Contact Form',
        ];

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@digirushsolutions.com';
            $mail->Password = 'L1[tIPdxD92w'; // Consider moving this to .env for security
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('contact@digirushsolutions.com', 'Digi Rush');
            $mail->addAddress($data["email_to"]);

            foreach ($data["cc_emails"] as $ccEmail) {
                $mail->addCC($ccEmail);
            }

            $mail->isHTML(true);
            $mail->Subject = $data["title"];
            $mail->Body = view('mail.contact_us', ['data' => $data])->render();
            $mail->AltBody = 'Plain-text version of the enquiry mail.';

            $mail->send();
        } catch (Exception $e) {
            \Log::error("Contact form email failed: " . $mail->ErrorInfo);
        }

        session()->flash('form_submitted', true);
        return redirect()->route('thankyou')->with('success', 'Thank you for contacting us!');
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

        $data["email_to"] = 'contact@digirushsolutions.com';
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
            $mail->Username = 'contact@digirushsolutions.com';
            $mail->Password = 'L1[tIPdxD92w';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;


            $mail->setFrom('contact@digirushsolutions.com', 'Digi Rush');
            $mail->addAddress($data["email_to"]);


            $mail->isHTML(true);
            $mail->Subject = $data["title"];
            $mail->Body = view('mail.contact_us', ['data' => $data])->render();
            $mail->AltBody = 'This is a plain-text message body for non-HTML email clients';


            $mail->send();

            session()->flash('form_submitted', true);

            return redirect()->route('thankyou')->with('success', 'Form submitted and email sent successfully!');

        } catch (Exception $e) {

            \Log::error('Mail send failed: ' . $mail->ErrorInfo);
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

        $data["email_to"] = 'contact@digirushsolutions.com';
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
            $mail->Username = 'contact@digirushsolutions.com';
            $mail->Password = 'L1[tIPdxD92w';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;


            $mail->setFrom('contact@digirushsolutions.com', 'Digi Rush');
            $mail->addAddress($data["email_to"]);


            $mail->isHTML(true);
            $mail->Subject = $data["title"];
            $mail->Body = view('mail.contact_us', ['data' => $data])->render();
            $mail->AltBody = 'This is a plain-text message body for non-HTML email clients';


            $mail->send();
            session()->flash('form_submitted', true);

            return redirect()->route('thankyou')->with('success', 'Form submitted and email sent successfully!');

        } catch (Exception $e) {

            \Log::error('Mail send failed: ' . $mail->ErrorInfo);
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
        if ($request->has('ids')) {
            DB::table('home_landings')->whereIn('id', $request->ids)->delete();
            return back()->with('success', 'Selected SEO Landing entries deleted successfully.');
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
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'email' => 'required|email|max:255|unique:seo_company,email',
            'city' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'number' => 'required|digits:10|unique:seo_company,mobile_number',
        ], [
            'fname.required' => 'The full name field is required.',
            'fname.regex' => 'The full name may only contain letters and spaces.',
            'email.required' => 'The email address field is required.',
            'email.email' => 'Please enter a valid email address.',
            'city.required' => 'The city field is required.',
            'city.regex' => 'The city may only contain letters and spaces.',
            'number.required' => 'The phone number field is required.',
            'number.digits' => 'The phone number must be exactly 10 digits.',
            'message.max' => 'The website URL may not be greater than 255 characters.',
        ]);
        $phoneNumber = $request->input('countryCode')
            ? $request->input('countryCode') . $request->input('number')
            : $request->input('number');
        if ($request->input('countryCode') == '') {
            $phoneNumber = '91';
        } else {
            $phoneNumber = $request->input('countryCode');
        }
        $phoneExists = HireDeveloper::where('mobile_number', $phoneNumber)->exists();
        if ($phoneExists) {
            return back()->withErrors(['number' => 'This phone number has already been taken.'])->withInput();
        }

        $validatedData['number'] = $phoneNumber . $validatedData['number'];
        $services = $request->input('services');
        $lname = $request->input('lname');
        if ($lname == '') {
            $lname = '';
        }
        $name = $validatedData['fname'] . ' ' . $lname;

        HireDeveloper::create([
            'fname' => $name,
            'email' => $validatedData['email'],
            'city' => $validatedData['city'],
            'mobile_number' => $validatedData['number'],
            'url' => $request->input('message'),
            'services' => $services,
        ]);
        // Prepare email data
        $data = [
            "email_to" => 'contact@digirushsolutions.com',
            "cc_emails" => ['manav.digirush@gmail.com', 'nitish.digirush@gmail.com'],
            "title" => "New Quote Request",
            "name" => $validatedData['fname'],
            "email_person" => $validatedData['email'],
            "phone" => $validatedData['number'],
            "services" => $services,
            "url" => $request->input('message'),
            "city" => $validatedData['city'] ?? '',
        ];

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@digirushsolutions.com';
            $mail->Password = 'L1[tIPdxD92w'; // Store securely in .env in production
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('contact@digirushsolutions.com', 'Digi Rush');
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
            \Log::error("Quote form mail error: " . $mail->ErrorInfo);
        }

        session()->flash('form_submitted', true);
        return redirect()->route('thankyou')->with('success', 'Form submitted successfully!');
    }


    public function submitLandingForm(Request $request)
    {
        \Log::info('Form data:', $request->all());
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


        $data["email_to"] = 'contact@digirushsolutions.com';
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
        $mail->Username = 'contact@digirushsolutions.com';
        $mail->Password = 'L1[tIPdxD92w';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;


        $mail->setFrom('contact@digirushsolutions.com', 'Digi Rush');
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
