<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SeocompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InqueryformController;
use App\Http\Controllers\DevController;

Route::get('/clear-all', function () {
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('optimize:clear');

    return '✅ All clear & cached successfully!';
});
Route::get('/clear-route-cache', function () {
    \Artisan::call('route:clear');
    return "Route cache cleared!";
});
Route::get('/clear-app-cache', function () {
    \Artisan::call('cache:clear');
    return "Application cache cleared!";
});
Route::fallback(function () {
    return redirect('/');
});

Route::get('/thankyou', function () {
    return view('frontend.thankyou');
})->name('thankyou');

Route::get('/us/digital-services', function () {
    return view('digital_assets.index');
});


Route::get('/privacy-policy', function () {
    return view('frontend.privacy_policy');
});
Route::get('/terms-and-conditions', function () {
    return view('frontend.terms-and-conditions');
});
Route::get('/refund-policy', function () {
    return view('frontend.refund-policy');
});



//////////////////////////////     Services routes   ///////////////////////////
       /////////////////////     digital marketing   //////////////////////////////
Route::get('local-seo', [HomeController::class, 'local_seo'])->name('local-seo');
Route::get('mobile-seo', [HomeController::class, 'mobile_seo'])->name('mobile-seo');
Route::get('content-marketing', [HomeController::class, 'content_marketing'])->name('content-marketing');



      //////////////////////    web developement   //////////////////
Route::get('wordpress-developement', [HomeController::class, 'wordpress_developement'])->name('wordpress-developement');
Route::get('php-developement', [HomeController::class, 'php_developement'])->name('php-developement');
Route::get('shopify-developement', [HomeController::class, 'shopify_developement'])->name('shopify-developement');
Route::get('webflow-developement', [HomeController::class, 'webflow_developement'])->name('webflow-developement');
Route::get('wix-developement', [HomeController::class, 'wix_developement'])->name('wix-developement');
Route::get('ecommerce-developement', [HomeController::class, 'ecommerce_developement'])->name('ecommerce-developement');
Route::get('laravel-developement', [HomeController::class, 'laravel_developement'])->name('laravel-developement');
Route::get('maintenence-support', [HomeController::class, 'maintenence_support'])->name('maintenence-support');



       ///////////////////      full stck developement    ///////////////////

Route::get('custom-design', [HomeController::class, 'custom_design'])->name('custom-design');
Route::get('responsive-design', [HomeController::class, 'responsive_design'])->name('responsive-design');
Route::get('shopify-design', [HomeController::class, 'shopify_design'])->name('shopify-design');
Route::get('ecommerce-design', [HomeController::class, 'ecommerce_design'])->name('ecommerce-design');
Route::get('ui-design', [HomeController::class, 'ui_design'])->name('ui-design');
Route::get('app-developement', [HomeController::class, 'app_developement'])->name('app-developement');
Route::get('android-app', [HomeController::class, 'android_app'])->name('android-app');
Route::get('ios-app', [HomeController::class, 'ios_app'])->name('ios-app');
Route::get('custom-app', [HomeController::class, 'custom_app'])->name('custom-app');
Route::get('ecommerce-app', [HomeController::class, 'ecommerce_app'])->name('ecommerce-app');


    ///////////////////      branding   ///////////////////
Route::get('logo-design', [HomeController::class, 'logo_design'])->name('logo-design');
Route::get('product-design', [HomeController::class, 'product_design'])->name('product-design');
Route::get('graphic-design', [HomeController::class, 'graphic_design'])->name('graphic-design');

Route::post('/submit-digital-service', [HomeController::class, 'storedigitalservices'])->name('digital.service.submit');

Route::get('web-services-us', [HomeController::class, 'homelandingus'])->name('web-services-us');
Route::get('payment', [HomeController::class, 'payment'])->name('payment');

Route::post('/payment/pay', [HomeController::class, 'initiatePayment'])->name('ccavenue.pay');
Route::post('/payment/response', [HomeController::class, 'paymentResponse'])->name('ccavenue.response');


//seocompanyconrtoller routes
Route::get('index', [SeocompanyController::class, 'index'])->name('seo-index');
Route::delete('destroy/{id}', [SeocompanyController::class, 'destroy'])->name('seo.delete');
Route::delete('/seo/bulk-delete', [SeocompanyController::class, 'bulkDelete'])->name('seo.bulk-delete');


Route::get('view/{id}', [SeocompanyController::class, 'view'])->name('seo-view');
Route::get('us-view/{id}', [SeocompanyController::class, 'view_us'])->name('us-view');
Route::get('index_us', [SeocompanyController::class, 'index_us'])->name('index_us');
Route::delete('us-destroy_us/{id}', [SeocompanyController::class, 'destroy_us'])->name('destroy_us_view');

Route::get('index_hire', [SeocompanyController::class, 'index_hire'])->name('index_hire');
Route::delete('destroy_hire/{id}', [SeocompanyController::class, 'destroy_hire'])->name('destroy_hire');
Route::delete('/hire-developers/bulk-delete', [SeocompanyController::class, 'bulkDeletehire'])->name('bulk_delete_hire');


//contactus form route
Route::get('contact-index', [ContactController::class, 'contactindex'])->name('contact-index');
Route::delete('contact-destroy/{id}', [ContactController::class, 'contactdestroy'])->name('contact.delete');
Route::delete('/contact/bulk-delete', [ContactController::class, 'bulkDelete'])->name('contact.bulk-delete');

Route::get('contact-view/{id}', [ContactController::class, 'contactview'])->name('contact-view');

//inquery form route
Route::get('home-index', [InqueryformController::class, 'homeindex'])->name('home-index');
Route::delete('home-destroy/{id}', [InqueryformController::class, 'homedestroy'])->name('home.delete');
Route::get('home-view/{id}', [InqueryformController::class, 'homeview'])->name('home-view');
Route::get('general-index', [InqueryformController::class, 'generalindex'])->name('general-index');
Route::delete('general-destroy/{id}', [InqueryformController::class, 'generaldestroy'])->name('general.delete');
Route::get('general-view/{id}', [InqueryformController::class, 'generalview'])->name('general-view');
Route::delete('/general/bulk-delete', [InqueryformController::class, 'bulkDelete'])->name('general.bulk-delete');
Route::delete('/home/bulk-delete', [InqueryformController::class, 'bulkDeletehome'])->name('home.bulk-delete');



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/blog-grid', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/digital-marketing-agency-in-india', [HomeController::class, 'digital_marketing'])->name('digital_marketing');
Route::get('/seo-company-in-india', [HomeController::class, 'seo_company'])->name('seo_company');
Route::get('/best-local-seo-company-in-india', [HomeController::class, 'seo_services'])->name('local_seo_company');
Route::get('/best-ppc-expert-agency-in-india', [HomeController::class, 'ppc_services'])->name('ppc_expert');
Route::get('/best-content-management-marketing-agency-in-india', [HomeController::class, 'content_management'])->name('content_management');
Route::get('/best-web-services-provider-agency-in-india', [HomeController::class, 'web_services'])->name('web_services');
Route::get('/best-web-development-agency-in-india', [HomeController::class, 'web_development'])->name('web_development');
Route::get('/best-web-designing-agency-in-india', [HomeController::class, 'web_design'])->name('web_designing');

Route::get('/best-ecommerce-shopify-seo-agency-in-india', [HomeController::class, 'ecommerce_seo'])->name('shopify_seo');
Route::get('/best-social-media-marketing-smm-agency-in-india', [HomeController::class, 'social_marketing'])->name('social_media_marketing');
Route::get('/best-keyword-research-agency-in-india', [HomeController::class, 'keyword_research'])->name('keyword_research');
Route::get('/best-website-redesign-agency-in-india', [HomeController::class, 'website_redesign'])->name('website_redesign');
Route::get('/best-responsive-web-designing-agency-in-india', [HomeController::class, 'responsive_web'])->name('responsive_web');


Route::get('/best-php-website-development-agency-in-india', [HomeController::class, 'php_development'])->name('php_development');
Route::get('/best-wordpress-website-development-agency-in-india', [HomeController::class, 'wordpress_development'])->name('wordpress_development');
Route::get('/top-ecommerce-website-development-agency-in-india', [HomeController::class, 'ecommerce_development'])->name('ecommerce_development');
Route::get('/top-shopify-website-development-agency-in-india', [HomeController::class, 'shopify_development'])->name('shopify_development');
Route::get('/best-laravel-website-development-agency-in-india', [HomeController::class, 'laravel_development'])->name('laravel_development');
Route::get('/top-api-integration-development-agency-in-india', [HomeController::class, 'api_development'])->name('api_development');
Route::get('/digital-web-services-in-uk', [HomeController::class, 'web_service_uk'])->name('web_service_uk');
Route::get('/seo-agency-in-chandigarh', [HomeController::class, 'seo_agency_chandigarh'])->name('seo_agency_chandigarh');
Route::get('/seo-agency-in-delhi', [HomeController::class, 'seo_agency_delhi'])->name('seo_agency_delhi');
Route::get('/seo-agency-in-jaipur', [HomeController::class, 'seo_agency_jaipur'])->name('seo_agency_jaipur');
Route::get('/seo-agency-in-bangalore', [HomeController::class, 'seo_agency_bangalore'])->name('seo_agency_bangalore');
Route::get('/seo-agency-in-pune', [HomeController::class, 'seo_agency_in_pune'])->name('seo_agency_in_pune');
Route::get('/case_studies', [HomeController::class, 'case_studies'])->name('case_studies');
Route::get('/case_studies/{slug}', [HomeController::class, 'case_details'])->name('case_details');


Route::post('/seoform-submit', [HomeController::class, 'submitseocompanyform'])->name('seoform.submit');
Route::post('/contactform-submit', [HomeController::class, 'submitcontactform'])->name('contactform.submit');
Route::get('/digital-web-services', [HomeController::class, 'homelandingform'])->name('home.landing');
Route::post('/store-blogs', [HomeController::class, 'storeblogs'])->name('blogs.store');
Route::get('/seo-services', [HomeController::class,'seo_digital_services'])->name('seo-digitalservices');
Route::post('/submit-landing-form', [HomeController::class, 'storehomelanding'])->name('homelanding.store');
Route::post('/submitt-landing-form', [HomeController::class, 'storehomelandingg'])->name('homelandingg.store');

Route::post('/submit-hire-form', [InqueryformController::class, 'hire_form'])->name('hireform.store');

Route::get('home/index', [HomeController::class, 'home_landing'])->name('home-manage-index');
Route::delete('home/destroy/{id}', [HomeController::class, 'home_destroy'])->name('home-manage-delete');
Route::delete('/home-manage/bulk-delete', [HomeController::class, 'bulkDelete'])->name('home-manage.bulk-delete');

Route::get('home/view/{id}', [HomeController::class, 'home_view'])->name('home-manage-view');


Route::get('seo/index', [HomeController::class, 'seo_landing'])->name('seo-manage-index');
Route::delete('seo/destroy/{id}', [HomeController::class, 'seo_destroy'])->name('seo-manage-delete');

Route::delete('/seo-landing/bulk-delete', [HomeController::class, 'bulkDelete'])->name('seo-manage.bulk-delete');

Route::get('seo/view/{id}', [HomeController::class, 'seo_view'])->name('seo-manage-view');
Route::get('hire-developers', [HomeController::class, 'hire_developers'])->name('hire-developers');

Route::get('/login', [UserController::class,'show'])->name('admin.show');
Route::post('/login', [UserController::class,'login'])->name('login');
Route::get('logout', [UserController::class,'logout'])->name('logout');

Route::post('register', [UserController::class,'register'])->name('admin.register');
Route::get('/showblogs', [BlogController::class, 'showallblogs'])->name('allblogs.show');
Route::get('/blog', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blogs/{slug}', [BlogController::class, 'blog_details'])->name('blog.blog_details');
Route::get('/services/{slugs}', [HomeController::class, 'dynamic_page'])->name('dynamic_page');


Route::group(['middleware' => ['userAccess']], function () {
    //dynamic pages routes for front-end


Route::post('ckeditor/upload', [HomeController::class, 'file_upload'])->name('ckeditor.upload');

// development page
Route::get('/dynamic-index', [DevController::class, 'dynamic_index'])->name('dynamic.index');
Route::get('/dynamic-create', [DevController::class, 'dynamic_create'])->name('dynamic.create');
Route::post('/dynamic-store', [DevController::class, 'dynamic_store'])->name('dynamic.store');
Route::get('/dynamic-edit/{id}', [DevController::class, 'dynamic_edit'])->name('dynamic.edit');
Route::post('/dynamic-edit-post/{id}', [DevController::class, 'dynamic_edit_post'])->name('dynamic.edit.post');
Route::delete('/dynamic-delete/{id}', [DevController::class, 'dynamic_delete'])->name('dynamic.delete');

//header page
Route::get('/header-index', [DevController::class, 'header_index'])->name('header.index');
Route::get('/header-create', [DevController::class, 'header_create'])->name('header.create');
Route::post('/header-store', [DevController::class, 'header_store'])->name('header.store');
Route::get('/header-status/{id}', [DevController::class, 'header_status_update'])->name('header.status.update');
Route::delete('/header-store/{id}', [DevController::class, 'header_delete'])->name('header.delete');

// Start Blogs routes
Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blog');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{id}', [BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/update/{id}', [BlogController::class,'update'])->name('blog.update');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

// Start Blogs-category routes
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/new-dashboard', [HomeController::class, 'new_dashboard'])->name('admin.new_dashboard');
Route::get('/blog-category', [BlogCategoryController::class, 'index'])->name('blog-category');
Route::post('/blog-category/store', [BlogCategoryController::class, 'store'])->name('blog-category.store');
Route::get('/blog-category/edit/{id}', [BlogCategoryController::class,'edit'])->name('blog-category.edit');
Route::post('/blog-category/update/{id}', [BlogCategoryController::class,'update'])->name('blog-category.update');
Route::delete('/blog-category/destroy/{id}', [BlogCategoryController::class,'destroy'])->name('blog-category.destroy');

// Start setting routes
Route::get('/setting', [SettingController::class,'index'])->name('setting.index');
Route::post('/setting/update', [SettingController::class,'update'])->name('setting.update');

});

Route::get('/case-study', [SettingController::class,'case_study'])->name('case-study');
Route::get('/setting', [UserController::class, 'metaPage'])->name('metaPage');
Route::post('/settings/update', [UserController::class, 'updateSetting'])->name('settings.update');
Route::post('/settings/new-meta', [UserController::class, 'new_meta_add'])->name('settings.new_meta');
Route::get('settings/edit-meta/{id}', [UserController::class, 'editSettingForm'])->name('settings.edit_meta');
Route::post('/submit-home-form', [HomeController::class, 'submitHomeForm'])->name('submit_home_form');
Route::get('/home-page-submissions', [HomeController::class, 'homepageform'])->name('homePageSubmissions.index');
Route::get('/home-page-submissions/{id}/edit', [HomeController::class, 'edithomepageform'])->name('homePageSubmissions.edit');
Route::put('/home-page-submissions/{id}', [HomeController::class, 'updatehomepageform'])->name('homePageSubmissions.update');
Route::delete('/home-page-submissions/{id}', [HomeController::class, 'destroyhomepageform'])->name('homePageSubmissions.destroy');
Route::post('/quote', [HomeController::class, 'storequote'])->name('quote.store');
Route::post('/submit-landing-forms', [HomeController::class, 'submitLandingForm'])->name('landing.form');
Route::post('/hiredeveloper-submit', [HomeController::class, 'submithiredeveloperform'])->name('hire.submit');

