
@extends('layouts.front.app')
@section('content')
<style>
    a:hover {
    color: #e1e1e1;
    text-decoration: none;
}
.btn_call_now :hover {
    background: #780000;
}
.btn_landing_home a:hover {
    background: #780000;
}

ul.number_box li a:hover {
    color: #780000ed;
}
</style>
<header class="landing_header_main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2">
                <div class="header_landng_logo">
                    <div class="site-logo">
                        <a href="https://digirushsolutions.com"><img src="{{custom_asset('front_assets/img/F-Logo.png')}}" alt="digirusholution"></a>
                        </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="ul_flx_main_head fdffg">
                    <ul class="number_box">
                        <li><svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512">
                                <path fill="#999" fill-rule="nonzero" d="M256 0c70.68 0 134.69 28.66 181.01 74.99C483.34 121.31 512 185.32 512 256c0 70.68-28.66 134.69-74.99 181.01C390.69 483.34 326.68 512 256 512c-70.68 0-134.69-28.66-181.01-74.99C28.66 390.69 0 326.68 0 256c0-70.68 28.66-134.69 74.99-181.01C121.31 28.66 185.32 0 256 0z">
                                </path>
                                <path fill="#fff" fill-rule="nonzero" d="M255.99 19.48c65.31 0 124.46 26.48 167.25 69.27 42.79 42.79 69.28 101.93 69.28 167.24s-26.49 124.46-69.28 167.25c-42.79 42.79-101.94 69.28-167.25 69.28-65.23 0-124.38-26.51-167.18-69.33-42.84-42.74-69.33-101.89-69.33-167.2 0-65.31 26.48-124.45 69.27-167.24 42.79-42.79 101.93-69.27 167.24-69.27z">
                                </path>
                                <path fill="#F93" fill-rule="nonzero" d="M255.99 39.59c84.4 0 157.5 48.29 193.17 118.74H62.84C98.52 87.88 171.62 39.59 255.99 39.59z">
                                </path>
                                <path fill="#128807" fill-rule="nonzero" d="M60.38 348.64h391.24c-34.71 73.18-109.24 123.77-195.63 123.77-86.37 0-160.89-50.59-195.61-123.77z">
                                </path>
                                <path fill="#008" d="M255.99 179.9c42.05 0 76.13 34.08 76.13 76.11 0 42.04-34.08 76.12-76.13 76.12-42.03 0-76.11-34.08-76.11-76.12 0-42.03 34.08-76.11 76.11-76.11zm13.31 75.43c-.04-.71-.13-1.41-.27-2.09l13.3-1.92 38.01-12.54-39.2 8.14-12.46 4.99c-.22-.68-.49-1.33-.81-1.95l12.34-5.29 33.46-21.96c-.9-1.56-1.85-3.08-2.87-4.55l.07-.05c-1.46 1.13-3.55.84-4.68-.61a3.345 3.345 0 0 1 .56-4.61 62.382 62.382 0 0 0-3.66-3.96v-.02l-29.87 26.65-8.29 10.57c-.53-.48-1.1-.91-1.68-1.3l8.04-10.75 18.01-35.75-21.95 33.47-5.29 12.35c-.62-.32-1.28-.59-1.97-.81l5.01-12.46 8.14-39.2-12.56 38.01-1.9 13.3c-.68-.14-1.38-.23-2.09-.28l1.6-13.34-2.3-39.95c-1.8 0-3.59.09-5.37.22l-.01-.1c.24 1.83-1.05 3.5-2.87 3.74a3.325 3.325 0 0 1-3.72-2.79c-3.58.65-7.05 1.59-10.4 2.79.65 1.68-.16 3.6-1.84 4.28-1.66.68-3.58-.08-4.31-1.73-1.63.78-3.23 1.63-4.78 2.52l21.96 33.45 5.29 12.35c.62-.32 1.27-.59 1.95-.81l-4.99-12.46-8.14-39.2 12.55 38.01 1.91 13.3c.68-.14 1.38-.23 2.09-.28l-1.6-13.34 2.28-39.95c1.81 0 3.61.08 5.39.22l.01-.1a3.342 3.342 0 0 0 2.87 3.74c1.79.24 3.45-1.01 3.72-2.79 3.58.65 7.05 1.59 10.41 2.79-.65 1.68.16 3.6 1.82 4.28 1.68.68 3.59-.08 4.32-1.73 3.28 1.55 6.38 3.34 9.33 5.39l.05-.07c-1.13 1.46-.84 3.55.61 4.67a3.36 3.36 0 0 0 4.68-.61l-.07.08a64.22 64.22 0 0 1 3.94 3.62h.02l-26.64 29.89-10.56 8.29c.48.53.9 1.08 1.28 1.68l10.76-8.06 35.74-18c.89 1.56 1.74 3.15 2.52 4.78a3.298 3.298 0 0 0-1.73 4.31c.68 1.67 2.58 2.48 4.28 1.83 1.19 3.34 2.13 6.83 2.78 10.41a3.325 3.325 0 0 0-2.78 3.72c.23 1.82 1.91 3.1 3.73 2.86l-.09.02c.13 1.77.22 3.56.22 5.37l-39.95-2.28-13.35 1.6zm-46.61-56.98 18.01 35.73 8.06 10.75c-.6.39-1.16.82-1.68 1.3l-8.3-10.57-29.87-26.63c1.27-1.27 2.6-2.49 3.96-3.66 1.13 1.39 3.18 1.65 4.61.55a3.33 3.33 0 0 0 .62-4.67l.05.07c1.48-1.02 2.99-1.97 4.54-2.87zm-13.78 10.58 26.64 29.87 10.56 8.29c-.47.53-.9 1.08-1.3 1.68l-10.75-8.06-35.74-18c-.89 1.55-1.73 3.15-2.5 4.76a3.35 3.35 0 0 1 1.72 4.33c-.68 1.67-2.6 2.48-4.27 1.83-.61 1.7-1.13 3.41-1.6 5.15l38 12.54 13.31 1.92c-.15.68-.24 1.38-.29 2.09l-13.33-1.6-39.96 2.28c0 1.81.1 3.61.22 5.38l-.09.02c1.82-.25 3.5 1.03 3.74 2.87.23 1.79-1.02 3.45-2.79 3.72.65 3.58 1.58 7.03 2.79 10.39 1.67-.64 3.59.17 4.27 1.83.68 1.67-.08 3.6-1.72 4.33.77 1.63 1.61 3.21 2.5 4.76l35.74-18 10.75-8.05c.4.59.83 1.16 1.3 1.68l-10.56 8.3-26.65 29.87h.01c1.27 1.26 2.6 2.48 3.96 3.66 1.13-1.4 3.18-1.67 4.61-.56 1.46 1.12 1.74 3.22.62 4.67l.05-.06c1.47 1.03 2.99 1.98 4.54 2.88l21.96-33.48 5.29-12.35c.62.33 1.27.6 1.95.82l-4.99 12.47-8.14 39.19c1.73.46 3.49.86 5.26 1.19a3.325 3.325 0 0 1 3.72-2.8c1.79.25 3.06 1.87 2.87 3.65 1.77.15 3.56.23 5.38.23l2.3-39.97-1.6-13.34c.71-.03 1.41-.13 2.09-.27l1.9 13.3 12.56 38.01-8.14-39.19-5.01-12.47c.69-.22 1.35-.5 1.97-.82l5.29 12.35 21.95 33.48c1.55-.9 3.09-1.87 4.56-2.88l.05.06c-1.13-1.45-.84-3.55.61-4.67 1.43-1.11 3.49-.84 4.6.56 1.37-1.16 2.7-2.4 3.97-3.66l-26.64-29.87-10.56-8.3c.48-.52.9-1.09 1.28-1.68l10.76 8.05 35.76 18-33.48-21.96-12.36-5.28c.34-.63.61-1.28.83-1.96l12.46 5.01 39.18 8.13c.46-1.72.87-3.46 1.2-5.25a3.325 3.325 0 0 1-2.78-3.72 3.318 3.318 0 0 1 3.73-2.87l-.09-.02c.14-1.77.22-3.56.22-5.38l-39.95 2.28-13.35-1.6c-.04.73-.13 1.43-.27 2.11l13.3 1.9 37.99 12.55c-.47 1.75-.98 3.46-1.58 5.14-1.7-.64-3.6.17-4.28 1.83-.7 1.7.08 3.61 1.73 4.33a64.329 64.329 0 0 1-5.39 9.32l.07.05a3.335 3.335 0 0 0-4.68.62c-1.1 1.42-.83 3.48.56 4.59a72.466 72.466 0 0 1-3.66 3.98l-29.87-26.64-8.29-10.56c-.53.46-1.1.9-1.68 1.28l8.04 10.75 18.01 35.76c-1.55.89-3.14 1.73-4.77 2.5-.71-1.64-2.63-2.42-4.32-1.72-1.7.69-2.5 2.64-1.79 4.34l-.03-.07a64.87 64.87 0 0 1-10.41 2.79 3.325 3.325 0 0 0-3.72-2.8c-1.79.25-3.06 1.87-2.87 3.65-1.77.13-3.59.23-5.4.23l-2.28-39.97 1.6-13.34c-.71-.03-1.41-.13-2.09-.27l-1.91 13.3-12.55 38.01c-1.75-.46-3.48-1-5.14-1.6a3.3 3.3 0 0 0-1.84-4.27c-1.68-.7-3.6.08-4.32 1.72a65.32 65.32 0 0 1-4.77-2.5l18.01-35.76 8.06-10.75c-.6-.38-1.16-.82-1.68-1.28l-8.3 10.56-29.88 26.64v-.02c-1.27-1.27-2.49-2.6-3.65-3.96 1.4-1.11 1.65-3.17.56-4.59a3.324 3.324 0 0 0-4.67-.62l.06-.05c-1.01-1.47-1.98-3-2.88-4.56l33.46-21.96 12.35-5.28c-.31-.63-.58-1.28-.81-1.96l-12.46 5.01-39.19 8.13 38-12.55 13.31-1.9c-.15-.68-.24-1.38-.29-2.11l-13.33 1.6-39.96-2.28c0-1.82.08-3.6.22-5.37l-.09-.02c1.82.24 3.5-1.04 3.74-2.86.23-1.79-1.02-3.45-2.79-3.72.33-1.78.73-3.53 1.19-5.26l39.19 8.14 12.46 4.99c.23-.68.5-1.33.81-1.95l-12.35-5.29-33.46-21.96c.9-1.56 1.85-3.08 2.88-4.55l-.06-.05c1.45 1.13 3.54.84 4.67-.61 1.09-1.43.84-3.49-.56-4.61 1.18-1.36 2.4-2.69 3.66-3.96z">
                                </path>
                            </svg> <a href="tel:+91 99159 54999">+91 99159 54999</a></li>
                <li>
                    <div class="mail_icon">
                        <a href="#"><i class="fa-solid fa-envelope"></i> support@digirushsolutions.com</a>
                    </div>
                </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                    <div class="icon_landing">
                        <ul class="number_box fjhgf">
                            <li><a href="https://www.facebook.com/DigiRushSolutionLLP"><i class="fa-brands fa-square-facebook"></i></a></li>
                            <li><a href="https://in.linkedin.com/company/digirushsolutions"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li><a href="https://x.com/i/flow/login?redirect_after_login=%2FDigirush_"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/digirushsolutions/"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/@digirushsolutions"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                        <div class="btn_call_now">
                            <a href="tel:+91 99159 54999">Call Now</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</header>

<section class="landing_banner_home" style="background-image: url({{custom_asset('front_assets/img/home-landing-11.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="txt_landing_min">
                    <div class="main_landing_txxxt">
                        <span>Digirush solutions</span>
                        <h1>Get # Rank of your <br>website in  Google<br> First page</h1>
                            <p>Hire Digi Rush Solutions to #Rank your website on the search engine results page. Increase your website’s visibility, take your business globally, and boost your sales with Digi Rush Solutions. Our team of SEO experts creates the best SEO strategies according to your business, finds the right keywords, targets the right audience  & drives relevant traffic to get quality leads. </p>
                            <div class="btn_landing_home">
                                <a href="tel:+91 99159 54999"><i class="fa-solid fa-phone"></i> Call Now  </a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
              <div class="_cntact_form_landing">
    <form action="{{ route('homelanding.store') }}" method="POST" id="bannerForm">
        @csrf
        <input type="hidden" name="type" value="seo-digital-services"> <!-- Correctly include type -->
        <div class="txt_form">
            <h2>Fill The Form Now</h2>
            <img src="{{custom_asset('front_assets/img/GET-2.gif')}}" alt="">
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <label for="fname">First name*</label>
                <input type="text" id="fname" name="fname" placeholder="First Name" value="{{ old('fname') }}" required>
                @error('fname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="lname">Last name</label>
                <input type="text" id="lname" name="lname" placeholder="Last name" value="{{ old('lname') }}">
                @error('lname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-4">
                <label for="phone_no">Phone No*</label>
                <input type="text" id="phone_no" name="phone_no" placeholder="Phone No" value="{{ old('phone_no') }}" required>
                @error('phone_no')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-4">
                <label for="services">Services*</label>
                <select name="services" id="services" required>
                    <option value="">Select Service</option>
                    <option value="Website Design & Development" {{ old('services') == 'Website Design & Development' ? 'selected' : '' }}>Website Design & Development</option>
                    <option value="Application Development" {{ old('services') == 'Application Development' ? 'selected' : '' }}>Application Development</option>
                    <option value="Software Development" {{ old('services') == 'Software Development' ? 'selected' : '' }}>Software Development</option>
                    <option value="Digital Marketing Services" {{ old('services') == 'Digital Marketing Services' ? 'selected' : '' }}>All Digital Marketing Services</option>
                    <option value="SEO Services" {{ old('services') == 'SEO Services' ? 'selected' : '' }}>SEO Services</option>
                    <option value="SMO Services" {{ old('services') == 'SMO Services' ? 'selected' : '' }}>SMO Services</option>
                    <option value="PPC Services" {{ old('services') == 'PPC Services' ? 'selected' : '' }}>PPC Services</option>
                    <option value="Graphic Designing" {{ old('services') == 'Graphic Designing' ? 'selected' : '' }}>Graphic Designing</option>
                    <option value="Video Editing" {{ old('services') == 'Video Editing' ? 'selected' : '' }}>Video Editing</option>
                    <option value="Email Marketing" {{ old('services') == 'Email Marketing' ? 'selected' : '' }}>Email Marketing</option>
                </select>
                @error('services')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="City" value="{{ old('city') }}">
                @error('city')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="btn_submit">
                <button type="submit">Submit</button> <!-- Use button for submission -->
            </div>
        </div>
    </form>
</div>

            </div>
        </div>
    </div>
</section>


<div class="sponsor-section landing_sponser_page">
    <div class="container">
        <div class="main_landing_under">
            <div class="heading_landing">
                <h2>Popular Brands We Have Worked With</h2>
            </div>
            <div class="outside-spacing">
                <div class="sponsor-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide logo_client ">
                            <img src="{{custom_asset('front_assets/img/royalcare-logo.jpg')}}" alt="client">
                        </div>
                        <div class="swiper-slide logo_client">
                            <img src="{{custom_asset('front_assets/img/foryou.png')}}" alt="client">
                        </div>
                        <div class="swiper-slide logo_client">
                            <img src="{{custom_asset('front_assets/img/sristi_logo.png')}}" alt="client">
                        </div>
                        <div class="swiper-slide logo_client">
                            <img src="{{custom_asset('front_assets/img/Great-media-1536x733.png')}}" alt="client">
                        </div>
                        <div class="swiper-slide logo_client">
                            <img src="{{custom_asset('front_assets/img/freebacklinks-logo.png')}}" alt="client">
                        </div>
                        <div class="swiper-slide logo_client">
                            <img src="{{custom_asset('front_assets/img/bookmy122313223-ticket-180x37-1.png')}}" alt="client">
                        </div>
                        <div class="swiper-slide logo_client">
                            <img src="{{custom_asset('front_assets/img/airtkt-logo.png')}}" alt="client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="about_landing_company padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="company_img_main">
                    <img src="{{custom_asset('front_assets/img/company_landing_1.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_company_main">
                    <div class="under_main_point">
                        <span>About Company</span>
                        <h2>Compassionate Care Is What We Provide</h2>
                        <p>Small and medium-sized enterprises, the backbone of the U.S. economy, deserve every chance develop and continue their immense contributions to society. However, the majority of marketing companies mainly serve huge corporations that can afford their services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services_main_home" style="background-image: url({{custom_asset('front_assets/img/service_background.webp')}});">
 <div class="container">
    <div class="heading_main_services">
            <span>Services</span>
            <h2>OUR SPECIALIZATION</h2>
            <p>We provide complete Web Designing, Development & Digital Marketing Solution at one place.</p>
    </div>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="under_main_specialization">
                <div class="img_specia">
                    <img src="{{custom_asset('front_assets/img/coding_1.png')}}" alt="">
                </div>
                <div class="txt_special_lization">
                    <h2>Keyword Research & Strategy</h2>
                    <p>Our experts conduct thorough keyword research to identify high-impact keywords that your target audience is searching for. We then develop a strategic plan to rank your website for these keywords, ensuring maximum visibility.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="under_main_specialization">
                <div class="img_specia">
                    <img src="{{custom_asset('front_assets/img/coding_2.png')}}" alt="">
                </div>
                <div class="txt_special_lization">
                    <h2>On-Page SEO</h2>
                    <p>Optimize your website’s content, meta tags, images, and structure to enhance its relevance and usability for both users and search engines. Our on-page SEO services ensure your site is search engine-friendly and ranks higher on search engine results pages (SERPs).</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="under_main_specialization">
                <div class="img_specia">
                    <img src="{{custom_asset('front_assets/img/coding_3.png')}}" alt="">
                </div>
                <div class="txt_special_lization">
                    <h2>Off-Page SEO</h2>
                    <p>Build your website’s authority with our off-page SEO services, which include high-quality link-building, social media marketing, and influencer outreach. We focus on creating a strong backlink profile that improves your site’s credibility and rankings.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="under_main_specialization">
                <div class="img_specia">
                    <img src="{{custom_asset('front_assets/img/coding_4.png')}}" alt="">
                </div>
                <div class="txt_special_lization">
                    <h2>Technical SEO</h2>
                    <p>We address technical aspects of your website, such as site speed, mobile-friendliness, and crawlability, to ensure search engines can easily index and rank your pages. Our technical SEO services help you stay ahead of the competition by optimizing your site’s performance.</p>
                </div>
            </div>
        </div>


        
        <div class="col-md-3 mb-4">
            <div class="under_main_specialization">
                <div class="img_specia">
                    <img src="{{custom_asset('front_assets/img/coding_5.png')}}" alt="">
                </div>
                <div class="txt_special_lization">
                    <h2>Local SEO</h2>
                    <p>Attract more customers in your area with our local SEO services. We optimize your Google My Business listing, create local citations, and develop location-based strategies to increase your visibility in local searches.</p>
                </div>
            </div>
        </div>

        
        <div class="col-md-3 mb-4">
            <div class="under_main_specialization">
                <div class="img_specia">
                    <img src="{{custom_asset('front_assets/img/software.png')}}" alt="">
                </div>
                <div class="txt_special_lization">
                    <h2>Content Marketing</h2>
                    <p>Content is king, and our content marketing services ensure you have high-quality, engaging content that resonates with your audience. From blog posts and articles to infographics and videos, we create content that drives traffic and boosts conversions.</p>
                </div>
            </div>
        </div>

        
        <div class="col-md-3 mb-4">
            <div class="under_main_specialization">
                <div class="img_specia">
                    <img src="{{custom_asset('front_assets/img/usability.png')}}" alt="">
                </div>
                <div class="txt_special_lization">
                    <h2>E-commerce SEO</h2>
                    <p>Enhance your online store’s visibility with our e-commerce SEO services. We optimize product pages, improve site structure, and implement strategies that drive more sales and improve your store’s ranking on search engines.</p>
                </div>
            </div>
        </div>

        
        <div class="col-md-3 mb-4">
            <div class="under_main_specialization">
                <div class="img_specia">
                    <img src="{{custom_asset('front_assets/img/coding_8.png')}}" alt="">
                </div>
                <div class="txt_special_lization">
                    <h2>SEO Audits & Reporting</h2>
                    <p>Our comprehensive SEO audits identify areas for improvement, and our detailed reports keep you informed about your website’s performance. We provide actionable insights and recommendations to ensure continuous improvement.</p>
                </div>
            </div>
        </div>

    </div>
 </div>
</section>

<section class="progress-section padding landing_progressing">
    <div class="corner-pattern"></div>
    <div class="corner-pattern bottom"></div>
    <div class="container">
        <div class="row align-items-center">


            <div class="col-lg-6 col-md-12 col-12">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6 ">
                        <div class="industries_box service-item">
                            <span class="reting">320m</span>
                            <p class="h_box">Digital global audience reach </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-6 ">
                        <div class="industries_box service-item">
                            <span class="reting">89%</span>
                            <p class="h_box">Of the audience is under 34 years old </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 col-6 ">
                        <div class="industries_box service-item">
                            <span class="reting">1350</span>
                            <p class="h_box">Content pieces produced everyday</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-6 ">
                        <div class="industries_box service-item">
                            <span class="reting">94%</span>
                            <p class="h_box">Of the audience is under 34 years old</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="img_audience">
                    <img src="{{custom_asset('front_assets/img/audience_homeee.webp')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature_main_section padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="img_feature">
                    <img src="{{custom_asset('front_assets/img/feature_1_img.jpg')}}" alt="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="main_feature_front">
                    <span>  Features</span>
                    <h2>Outstanding Digital Experience</h2>
                    <p>Digi Rush Solutions is a digital marketing, web design and web development agency in INDIA that offers complete web & marketing solution to boost your online presence and boost your business sales.</p>
                    <ul class="feature_ul_li">
                        <li>
                            Attended no do thoughts me on dissuade scarcely.
                        </li>
                        <li>
                            Own are pretty spring suffer old denote his.
                        </li>
                        <li>
                            He forbade affixed parties of assured to me windows.
                        </li>
                        <li>
                            Out may few northward believing attempted.
                        </li>
                        <li>
                        Unsatiable understood or expression dissimilar so sufficient.
                        </li>
                        <li>
                        Prepared do an dissuade be so whatever steepest.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="smart_marketing_main padding" style="background-image: url({{custom_asset('front_assets/img/smart_marketing_bg.jpg')}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                    <div class="main_smart_under_txt">
                        <h2>Smart Marketing Solution With Great Strategies</h2>
                        <p>We have a team of experts having 15Plus years of experience in Marketing & Development field. We provide best marketing strategies that helps you grow and boost your online presence.</p>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="img_marketing_">
                        <img src="{{custom_asset('front_assets/img/smart_under.png')}}" alt="">
                    </div>
            </div>
        </div>
    </div>
</section>


<section class="nav_tab_new_session padding landing_nav_home">
    <div class="container">

    <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Website Designing & Development</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">SEO Services</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-service-tab" data-bs-toggle="pill" data-bs-target="#pills-service" type="button" role="tab" aria-controls="pills-service" aria-selected="false">PPC Services</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-smo-tab" data-bs-toggle="pill" data-bs-target="#pills-smo" type="button" role="tab" aria-controls="pills-smo" aria-selected="false">SMO Services</button>
    </li>
    </ul>
   <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="pills_under_img">
                <img src="{{custom_asset('front_assets/img/greatmedia.jpg')}}" alt="img">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="pills_under_img">
                <img src="{{custom_asset('front_assets/img/Babycorngroup.png')}}" alt="img">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="pills_under_img">
                <img src="{{custom_asset('front_assets/img/Srishti-Admission-Point-Get-Admission-in-Top-Indian-Universities.jpg')}}" alt="img">
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="pills_under_img">
                <img src="{{custom_asset('front_assets/img/Pragyan-Educational-Research-Skill-Development-Council.jpg')}}" alt="img">
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="pills_under_img">
                <img src="{{custom_asset('front_assets/img/Computer-Course-Digital-Marketing-Course-Coding-Classes.jpg')}}" alt="img">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="pills_under_img">
                <img src="{{custom_asset('front_assets/img/Book-My-Ticket-–-Book-My-Ticket.jpg')}}" alt="img">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="pills_under_img">
                <img src="{{custom_asset('front_assets/img/Smartcare-travel.jpg')}}" alt="img">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="pills_under_img">
                <img src="{{custom_asset('front_assets/img/Gynaecologist-Near-Me.jpg')}}" alt="img">
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> <div class="container">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="pills_under_img">
            <img src="{{custom_asset('front_assets/img/greatmedia.jpg')}}" alt="img">
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="pills_under_img">
            <img src="{{custom_asset('front_assets/img/Babycorngroup.png')}}" alt="img">
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="pills_under_img">
            <img src="{{custom_asset('front_assets/img/Srishti-Admission-Point-Get-Admission-in-Top-Indian-Universities.jpg')}}" alt="img">
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="pills_under_img">
            <img src="{{custom_asset('front_assets/img/Pragyan-Educational-Research-Skill-Development-Council.jpg')}}" alt="img">
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="pills_under_img">
            <img src="{{custom_asset('front_assets/img/Computer-Course-Digital-Marketing-Course-Coding-Classes.jpg')}}" alt="img">
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="pills_under_img">
            <img src="{{custom_asset('front_assets/img/Book-My-Ticket-–-Book-My-Ticket.jpg')}}" alt="img">
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="pills_under_img">
            <img src="{{custom_asset('front_assets/img/Smartcare-travel.jpg')}}" alt="img">
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="pills_under_img">
            <img src="{{custom_asset('front_assets/img/Gynaecologist-Near-Me.jpg')}}" alt="img">
            </div>
        </div>
    </div>
        </div></div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="pills_under_img">
            <img src="{{custom_asset('front_assets/img/seo_service_tab_2.png')}}" alt="img">

            <h2 class="supern">Telecom Supermarket</h2>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="pills_under_img">
            <img src="{{custom_asset('front_assets/img/seo_service_tab_3.png')}}" alt="img">

            <h2 class="supern">Digibizonn - Starting and result within the month</h2>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="pills_under_img">
            <img src="{{custom_asset('front_assets/img/seo_service_tab_3.png')}}" alt="img">

            <h2 class="supern">Channel and Tray</h2>
            </div>
        </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-service" role="tabpanel" aria-labelledby="pills-service-tab">   <div class="row">
    <div class="col-md-4 mb-4">
        <div class="pills_under_img">
        <img src="{{custom_asset('front_assets/img/ppc_srvice_tab_1.png')}}" alt="img">
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="pills_under_img">
        <img src="{{custom_asset('front_assets/img/ppc_srvice_tab_2.png')}}" alt="img">
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="pills_under_img">
        <img src="{{custom_asset('front_assets/img/ppc_srvice_tab_3.png')}}" alt="img">
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="pills_under_img">
        <img src="{{custom_asset('front_assets/img/ppc_srvice_tab_4.png')}}" alt="img">
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="pills_under_img">
        <img src="{{custom_asset('front_assets/img/ppc_srvice_tab_5.png')}}" alt="img">
        </div>
    </div>    <div class="col-md-4 mb-4">
        <div class="pills_under_img">
        <img src="{{custom_asset('front_assets/img/ppc_srvice_tab_6.png')}}" alt="img">
        </div>
    </div>
    </div>
</div>
<div class="tab-pane fade" id="pills-smo" role="tabpanel" aria-labelledby="pills-smo-tab">   <div class="row">
    <div class="col-md-4 mb-4">
        <div class="pills_under_img">
        <img src="{{custom_asset('front_assets/img/Telecom-1.png')}}" alt="img">
        
        <h2 class="supern">Grahatalk Social Media</h2>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="pills_under_img">
        <img src="{{custom_asset('front_assets/img/telecom-2.png')}}" alt="img">
        </div>
    </div>

    </div>
</div>
</div>
    </div>
    </div>
</section>

<section class="feature_main_section padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="img_feature">
                    <img src="{{custom_asset('front_assets/img/skills.webp')}}" alt="">
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="main_feature_front">
                    <span>Perfect destination For All Your Needs!</span>
                    <h2>Providing Complete and Effective Digital Solutions!</h2>
                    <p>Digi Rush Solutions specializes in digital marketing as our main aim is to help our clients increase their revenue. We achieve this by using various digital marketing strategies to connect with customers at every step of their buying process. This could eventually turn clicks into loyal supporters of your brand. By implementing our digital campaigns, your business will see significant growth.</p>
                 
                </div>
            </div>
        </div>
    </div>
    </section>


    <section class="royal_care_travel_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                <div class="main_laginator">
                    <img src="{{custom_asset('front_assets/img/video_laginator_we.png')}}" alt="">
                </div>
                </div>
                <div class="col-md-6">
                    <div class="laginator_main_travel">
                        <div class="under_ycc">
                            <div class="lion_img">
                                <img src="{{custom_asset('front_assets/img/lion_design_main.png')}}" alt="">
                            </div>
                            <div class="content">
                                <p>I am thrillеd to sharе my outstanding еxpеriеncе with DigiRush Solutions.  Thеir SEO sеrvicеs havе bееn a gamе-changеr for my businеss.  From stratеgic planning to еxеcution,  thеy'vе propеllеd my wеbsitе to nеw hеights,  significantly boosting visibility and organic traffic.  Thеir transparеnt communication and еxpеrtisе makе thеm thе go-to choicе for unparallеlеd SEO solutions.  Thank you,  DigiRush Solutions,  for еxcееding еxpеctations!</p><h4>Royal Care travel</h4>                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-section padding">
        <div class="net-pattern"></div>
        <div class="container">
            <div class="section-heading mb-20">
                        <h2 class="text-center">Frequently Asked Questions!</h2>
              
            </div>
            <div class="row align-items-center">
                          <div class="col-md-12 sm-padding wow fade-in-right" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fade-in-right;">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What is the exact meaning of Digital Marketing?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Digital marketing is the practice of promoting products or services using different-different digital channels. It involves leveraging technologies like the internet, social media, and mobile devices to reach and engage with a target audience. It includes tactics such as SEO (Search Engine Optimization), Social Media Marketing (SMM), Content Marketing, and online advertising to achieve business objectives.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    What is SEO?
    
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">SEO stands for Search Engine Optimization, is the process of improving a website’s visibility and higher ranking on Search Engine Results Pages (SERPs). It involves optimizing various elements on a website like, content, meta tags, and site structure, to increase organic traffic from search engines like Google, Bing, Yahoo and so on. Mainly three types of SEO like ON-Page SEO, OFF-Page SEO and Technical SEO. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    What is On-page SEO and Off-page SEO?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">On-page SEO refers to the optimization techniques applied directly on a live website to improve its search engine’s ranking. It includes on-page content optimization, meta tags, main headings, URL structure, internal linking and external linking. Off-page SEO, on the other hand, focuses on external factors like backlinks, social signals, and online reputation management to boost website visibility and authority.</div>
                            </div>
                        </div>
    
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                    What is PPC and how it is important for all businesses?
    
                                </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">PPC stands for Pay-Per-Click, a digital advertising model where advertisers pay a fee each time their ad is clicked. It’s important for all businesses as it offers immediate visibility, targeting options, and measurable results. PPC allows businesses to reach their target audience effectively, increase brand awareness, drive website traffic, and achieve specific marketing goals. Popular PPC platforms include Google Ads, Bing Ads, and Social Media Advertising networks.
                                </div>
                            </div>
                        </div>
    
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                    What is Web Designing?
                                </button>
                            </h2>
                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Web designing refers to the process of creating and arranging visual elements, layout, and content on a website to deliver an appealing and user-friendly experience. It involves skills in graphic design, UI/UX, and coding to ensure the website is aesthetically pleasing, functional, and accessible on various devices. It is the first part of website development.</div>
                            </div>
                        </div>
    

                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                    What is Web Development?
                                </button>
                            </h2>
                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Web development is the process of building and maintaining all websites. It involves coding, programming, and designing the technical aspects of a website, such as its functionality or functions, database integration, and server configuration. Web developers utilize programming languages like HTML, CSS, JavaScript, and frameworks to create interactive and dynamic websites.</div>
                            </div>
                        </div>
    
                 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="landing_footer_Sec">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="footer_under_txt">
                <h2>Digi Rush Solutions</h2>
                <p>Lift your business to new heights with our digital marketing services. The magic of marketing, the science of sales.</p>

                <ul class="number_box fjhgf">
                    <li><a href="https://www.facebook.com/DigiRushSolutionLLP"><i class="fa-brands fa-square-facebook"></i></a></li>
                    <li><a href="https://in.linkedin.com/company/digirushsolutions"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="https://x.com/i/flow/login?redirect_after_login=%2FDigirush_"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/digirushsolutions/"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/@digirushsolutions"><i class="fa-brands fa-youtube"></i></a></li>


                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="corporate_office_india">
                <h2>Digi Rush Solutions LLP</h2>
                   <p>C-177(A) Ind Area Uttam Towers, 6th Floor, Phase 8-B, Mohali (PB), India.</p>
                   <ul>
                    <li>
                        <a href="#"> <i class="fa-solid fa-phone"></i> &nbsp;+91 99159 54999</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-envelope"></i> &nbsp;support@digirushsolutions.com</a>
                    </li>
                   </ul>
               
            </div>
        </div>
        <div class="col-md-4">
            <div class="_cntact_form_landing footer_form   ">
            <form action="{{ route('homelanding.store') }}" method="POST">
                    <div class="btn_pink">
                    <h2>Fill The Form Now get 30% Off</h2>
                    </div>
                            <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="fname">First name*</label>
                        <input type="text" id="fname" name="fname" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <label for="lname">Last name</label>
                        <input type="text" id="lname" name="lname" placeholder="Last name">
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="fname">Phone No*</label>
                        <input type="number" id="fname" name="phone_no" placeholder="Phone No">
                    </div>
                    <div class="col-md-6">
                        <label for="Email">Email*</label>
                        <input type="text" id="Email" name="email" placeholder="Email Address">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fname">Website *</label>
                        <select name="services" id="cars" placeholder="Service">
                            <option value="volvo" disabled>Service</option>
                            <option value="Website Design">Website Design &amp; Devlopment</option>
                            <option value="Application Development">Application Development</option>
                            <option value="Software Devlopment">Software Devlopment</option>
                            <option value="SRM">SRM,ERP Devlopment</option>
                            <option value="All Digital Marketing Services">All Digital Marketing Services</option>
                            <option value="SEO Services">SEO Services</option>
                            <option value="SMO Services">SMO Services</option>
                            <option value="PPC Services">PPC Services</option>
                            <option value="Graphic Designing">Graphic Designing</option>
                            <option value="Video Editing">Video Editing</option>
                            <option value="Email Marketing">Email Marketing,SMS,Whatsap Messages,Broadcast Services</option>
                          </select>
                    </div>
                    <div class="col-md-6">
                        <label for="Email">City</label>
                        <input type="text" id="Email" name="Email" placeholder="City">
                    </div>

                   
                        <div class="btn_submit">
                           <button type="submit" name="submit">Submit</button>
                 
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
    </footer>
    @endsection