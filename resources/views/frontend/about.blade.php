@extends('layouts.front.app')
@section('content')
    <section class="page-header page-header-secnd"
        style="background-image: url({{ custom_asset('front_assets/img/about_banner_.jpg') }});">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="page-header-info">
                        <h1>About us</h1>
                        <p>Digi Rush Solutions - Your Trusted Digital Partner</p>
                        <div class="btn_digital">
                            <a href="{{ route('contact') }}" class="default-btn">Hire Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="main_subscription_form  new_digital_form">
                        <div class="under_form_sestion">
                            <h2>Get Your Quote Now</h2>
                            <form method="post" action="{{ route('seoform.submit') }}" id="contact-form">
                                @csrf
                                <input type="hidden" name="city_name" value="company">
                                <div class="form-field">
                                    <input type="text" id="fname" name="fname" placeholder="Full Name"
                                        value="{{ old('fname') }}">
                                    @error('fname')
                                        <div class="error-message" style="color:red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <input type="email" id="email" name="email" placeholder="Email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="error-message" style="color:red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <input type="text" id="city" name="city" placeholder="City"
                                        value="{{ old('city') }}">
                                    @error('city')
                                        <div class="error-message" style="color:red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <select name="countryCode">
                                                <option data-countryCode="IN" value="91"
                                                    {{ old('countryCode') == '91' ? 'selected' : '' }}>Ind
                                                    (+91)</option>
                                                <option data-countryCode="UK" value="44"
                                                    {{ old('countryCode') == '44' ? 'selected' : '' }}>UK
                                                    (+44)</option>
                                                <option data-countryCode="US" value="1"
                                                    {{ old('countryCode') == '1' ? 'selected' : '' }}>US (+1)
                                                </option>
                                            </select>
                                        </div>
                                        <input type="text" id="phone" name="number" minlength="10" maxlength="10"
                                            class="form-control" value="{{ old('number') }}">
                                    </div>
                                    @error('number')
                                        <div class="error-message" style="color:red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <input type="text" id="url" name="message" placeholder="Your Website"
                                        value="{{ old('message') }}">
                                    <small style="color: grey; font-size: 14px;">Example: www.google.com (Full Domain
                                        Name)</small>
                                    @error('message')
                                        <div class="error-message" style="color:red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <button id="submit" class="default-btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="about-section padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 sm-padding wow fade-in-left" data-wow-delay="200ms"
                    style="visibility: visible; animation-delay: 200ms; animation-name: fade-in-left;">
                    <div class="about-thumbs">
                        <img src="{{ custom_asset('front_assets/img/new_img_main.jpg') }}"
                            alt="web development company in india">
                        <div class="about-counter">
                            <h3><span class="odometer" data-count="1.5">00</span>k+</h3>
                            <span>Project Done</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="section-heading mb-20 sub_heading_response">
                        <span class="sub-heading">Who We Are</span>
                        <h2>About Digi Rush Solutions</h2>
                    </div>
                    <div class="about-content">
                        <p>Digi Rush Solutions is the best and top-rated IT solutions agency in India, offering a
                            comprehensive range of services from digital marketing to web services. As a leading web
                            development company in India and the <a href="{{ route('seo_company') }}">best SEO agency in
                                India</a>, we specialize in digital marketing services such as Search Engine Optimization
                            (SEO), Pay-Per-Click (PPC), Social Media Optimization (SMO), Social Media Marketing (SMM),
                            Content Management and Marketing System (CMS), Email Marketing, and more. </p>
                        <p>In web services, we provide expert solutions in Web Redesign, Web Design, Web Development, App
                            Development and Integration, Web Maintenance, Hosting, Domain services, and beyond. Our
                            expertise in web design and development leverages the latest strategies and technologies across
                            platforms like WordPress, PHP, Laravel, and HTML. Using today’s cutting-edge digital marketing
                            techniques, we drive immediate results for website visibility and brand ranking on SERPs. Our
                            dedicated team of experts in digital marketing and web development consistently delivers
                            fruitful results for our clients.</p>
                        <a href="{{ route('contact') }}" class="default-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vision_mission_value">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="vision_under">
                        <div class="icon_img abt_icon_img_hd">
                            <img src="{{ custom_asset('front_assets/img/mission_img.png') }}"
                                alt="website development company in india">
                            <h3>Our Mission</h3>
                        </div>
                        <div class="main_mission_under">
                            <p>Digi Rush Solutions produces groundbreaking innovations in the field of digital marketing and
                                web development, further uplifting businesses to new heights of their visibility,
                                engagement, and growth. We strive to strengthen the brand through innovative strategies,
                                providing ways for improvement and thrust in the digital world. Focusing on delivering
                                superior services in areas such as SEO, PPC, web development, and many more, we look forward
                                to driving measurable results for our clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="vision_under">
                        <div class="icon_img abt_icon_img_hd">
                            <img src="{{ custom_asset('front_assets/img/vision_img.png') }}"
                                alt="best website design and development company in india">
                            <h3>Our Vision</h3>
                        </div>
                        <div class="main_mission_under">
                            <p>Our vision will be to be at the forefront in the world of IT solutions, striving for
                                excellence in the digital marketing and web services world. We strive to be constantly
                                evolving as we embrace the new trends and techniques that help businesses stay ahead at the
                                curve. We look to establish long-term relationships with our clients, envisioning a path to
                                becoming the partner for businesses that will thrive in the exciting world of digital.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="vision_under">
                        <div class="icon_img abt_icon_img_hd">
                            <img src="{{ custom_asset('front_assets/img/value_immg.png') }}"
                                alt="best website development company in india">
                            <h3>Value</h3>
                        </div>
                        <div class="main_mission_under">
                            <p>We stay ahead by embracing both the latest and earliest technologies to provide the best
                                solutions efficiently. We are committed to integrity, working transparently and ethically to
                                build trust with our clients. Our dedicated team exceeds expectations, driven by a passion
                                for success. Through teamwork and open communication, we foster strong client relationships.
                                Striving for excellence, we ensure every project is executed with precision, from digital
                                marketing campaigns to complex web development tasks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video-section">
        <div class="shape-wrap">
            <div class="shape"></div>
            <div class="shape red"></div>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 sm-padding">
                    <div class="section-heading mb-40">
                        <span class="sub-heading">Follow us</span>
                        <h2 class="white">Get Latest Updates on Digital Marketing and Web Services Latest Trends.</h2>
                        <a href="{{ route('contact') }}" class="default-btn">Get In Touch</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 sm-padding">
                    <div class="play-btn-wrap">
                        <a href="https://www.youtube.com/@digirushsolutions" class="play-btn">
                            <span class="play-icon">
                                <svg aria-hidden="true" focusable="false" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section-2 bg-grey padding">
        <div class="container">
            <div class="section-heading-wrap mb-40">
                <div class="section-heading">
                    <span class="sub-heading">Clients Testimonials</span>
                    <h2>What our customers tell <br>about our Business!</h2>
                </div>
                <div class="carousel-navigation">
                    <button class="carousel-button-prev"><i class="las la-long-arrow-alt-left"></i></button>
                    <button class="carousel-button-next"><i class="las la-long-arrow-alt-right"></i></button>
                </div>
            </div>
            <div class="testimonial-carousel-wrapper">
                <div class="testimonial-carousel-2 testimonial-card">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                <p>Digi Rush Solutions transformed our business with its excellent web design and
                                    development, effective PPC campaigns, and smart SEO strategies. Our website is an
                                    educational-based website and looks great, traffic has increased, and our search
                                    rankings have improved. I highly recommend them for boosting your online presence. </p>
                                <div class="testi-author">
                                    <div class="author-info">
                                        <span>Srishti Admission Point</span>
                                        <div class="star_authorrr">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                <p>We are a travel agency in the USA for flight tickets, hotels, and rental car booking.
                                    Digi Rush Solutions did a fantastic job designing and developing our website for Royal
                                    Care Travels. They also improved ranking through SEO, leading to better search rankings
                                    and more traffic. Their expertise has truly enhanced our online presence. We highly
                                    recommend Digi Rush Solutions for top-quality digital services.</p>
                                <div class="testi-author">
                                    <div class="author-info">
                                        <div class="author-info">
                                            <span>Royal Care Travels</span>
                                            <div class="star_authorrr">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                <p>Digi Rush Solutions is the best digital marketing and web development agency in
                                    Chandigarh. They did their job designing and developing our eCommerce website for Adhya
                                    Bedsheet. They handled everything from the initial design to the full setup with great
                                    attention to detail. The result is a sleek, functional site that perfectly suits our
                                    needs. We’re thrilled with their work and highly recommend Digi Rush Solutions for any
                                    eCommerce project.</p>
                                <div class="testi-author">
                                    <div class="author-info">
                                        <span>Adhya Bedsheet </span>
                                        <div class="star_authorrr">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                <p>Digi Rush Solutions worked excellently. Development work on my website is perfect. Their
                                    team created a professional, user-friendly site that perfectly meets my needs as a
                                    doctor. I’m very satisfied with their work and would highly recommend them to anyone.
                                </p>
                                <div class="testi-author">
                                    <div class="author-info">
                                        <div class="author-info">
                                            <span>Dr. Richa Gupta</span>
                                            <div class="star_authorrr">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                <p>Digi Rush Solutions exceeded our expectations with the development of our loan services
                                    website. They provided a functional design that highlights our offerings and makes it
                                    easy for customers to navigate. Their expertise and attention to detail have greatly
                                    enhanced our online presence.</p>
                                <div class="testi-author">
                                    <div class="author-info">
                                        <div class="author-info">
                                            <span>Loan Suvidhaa</span>
                                            <div class="star_authorrr">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                <p>We are an Educational firm named PERSDC (Pragyan Educational Research & Skill Development
                                    Council). Digi Rush Solutions created a clean, professional design that perfectly
                                    represents our organization and enhances user experience. We highly recommend it to
                                    anyone for development, marketing or branding.</p>
                                <div class="testi-author">
                                    <div class="author-info">
                                        <div class="author-info">
                                            <span>PERSDC</span>
                                            <div class="star_authorrr">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                <p>Digi Rush Solutions transformed our online presence with its exceptional website design
                                    and development for Router Ninjas. Their work has greatly improved how we present our
                                    router support services and IT solutions. The website is not only visually appealing but
                                    also highly functional and easy to navigate. We’re very impressed and strongly recommend
                                    Digi Rush Solutions for anyone seeking expert web development.</p>
                                <div class="testi-author">
                                    <div class="author-info">
                                        <div class="author-info">
                                            <span>Router Ninjas </span>
                                            <div class="star_authorrr">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                <p>Digi Rush Solutions completely developed our website named Baby Corn Group. The site is
                                    vibrant, easy to navigate, and perfectly reflects our event organising services. We’re
                                    thrilled with the outcome and highly recommend their expertise.</p>
                                <div class="testi-author">
                                    <div class="author-info">
                                        <div class="author-info">
                                            <span>Baby Corn Group</span>
                                            <div class="star_authorrr">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                <p>Digi Rush Solutions transformed our online presence with their expert digital marketing
                                    services especially Social Media Marketing and SEO. Our website traffic and engagement
                                    have significantly increased. Highly recommend.
                                </p>
                                <div class="testi-author">
                                    <div class="author-info">
                                        <div class="author-info">
                                            <span>SONY CENTER (Shivanghi Electronics) </span>
                                            <div class="star_authorrr">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                <p>We’ve seen a remarkable increase in leads since partnering with Digi Rush Solutions for
                                    Social Media Marketing. Their approach is data-driven and results-oriented.
                                </p>
                                <div class="testi-author">
                                    <div class="author-info">
                                        <div class="author-info">
                                            <span>Terrace on 3</span>
                                            <div class="star_authorrr">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                <p>Digi Rush Solutions' digital marketing team is top-notch. Their campaigns have delivered
                                    impressive results, and their insights have been incredibly valuable. I highly recommend
                                    their services to anyone looking to enhance their online marketing.
                                </p>
                                <div class="testi-author">
                                    <div class="author-info">
                                        <div class="author-info">
                                            <span>Soul Fit Bespoke Fitness</span>
                                            <div class="star_authorrr">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="ricing_nav_tab padding">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Php/Laravel</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Wordpress</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Full Stack</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-wix-tab" data-bs-toggle="pill" data-bs-target="#pills-wix"
                        type="button" role="tab" aria-controls="pills-wix" aria-selected="false">Wix</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-ecommerce-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-ecommerce" type="button" role="tab" aria-controls="pills-ecommerce"
                        aria-selected="false">E-commerce</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-shopify-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-shopify" type="button" role="tab" aria-controls="pills-shopify"
                        aria-selected="false">Shopify</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <section class="our-pricing-planss">
                        <div class="container text-center">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/logo-package-vector.png') }}"
                                                                alt="Basic" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Basic</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>7500</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹10000</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_1">
                                                    <div id="mCSB_1"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        style="max-height: none;" tabindex="0">
                                                        <div id="mCSB_1_container" class="mCSB_container"
                                                            style="position:relative; top:0; left:0;" dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 5 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_1_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_1_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 116px; max-height: 170px; top: 0px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="199" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Starter Website Package - $199" data-src="#popupform"
                                                    data-price="$195" href="javascript:void(0);"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/website-package-vector.png') }}"
                                                                alt="Standard" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Standard</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>15000</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹20000</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_2">
                                                    <div id="mCSB_2"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_2_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 7 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_2_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_2_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_2_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 95px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="349" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Professional Website Package - $349" data-price="$349"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <span class="strip best-seller">Best Seller</span>
                                            <div class="package website">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/video-package-vector.png') }}"
                                                                alt="Premium" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Premium</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>25000</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹30000</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_3">
                                                    <div id="mCSB_3"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_3_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 15 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_3_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_3_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_3_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 64px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="449" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Business Website Package - $449" data-price="$449"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <section class="our-pricing-planss">
                        <div class="container text-center">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/logo-package-vector.png') }}"
                                                                alt="Basic" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Basic</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>199</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹298</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_1">
                                                    <div id="mCSB_1"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        style="max-height: none;" tabindex="0">
                                                        <div id="mCSB_1_container" class="mCSB_container"
                                                            style="position:relative; top:0; left:0;" dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 5 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_1_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_1_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 116px; max-height: 170px; top: 0px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="199" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Starter Website Package - $199" data-src="#popupform"
                                                    data-price="$195" href="javascript:void(0);"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/website-package-vector.png') }}"
                                                                alt="Standard" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Standard</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>349</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹789</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_2">
                                                    <div id="mCSB_2"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_2_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 7 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_2_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_2_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_2_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 95px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="349" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Professional Website Package - $349" data-price="$349"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <span class="strip best-seller">Best Seller</span>
                                            <div class="package website">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/video-package-vector.png') }}"
                                                                alt="Premium" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Premium</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>449</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹1698</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_3">
                                                    <div id="mCSB_3"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_3_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 15 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_3_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_3_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_3_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 64px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="449" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Business Website Package - $449" data-price="$449"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <section class="our-pricing-planss">
                        <div class="container text-center">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/logo-package-vector.png') }}"
                                                                alt="Basic" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Basic</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>199</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹298</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_1">
                                                    <div id="mCSB_1"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        style="max-height: none;" tabindex="0">
                                                        <div id="mCSB_1_container" class="mCSB_container"
                                                            style="position:relative; top:0; left:0;" dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 5 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_1_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_1_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 116px; max-height: 170px; top: 0px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="199" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Starter Website Package - $199" data-src="#popupform"
                                                    data-price="$195" href="javascript:void(0);"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/website-package-vector.png') }}"
                                                                alt="Standard" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Standard</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>349</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹789</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_2">
                                                    <div id="mCSB_2"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_2_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 7 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_2_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_2_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_2_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 95px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="349" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Professional Website Package - $349" data-price="$349"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <span class="strip best-seller">Best Seller</span>
                                            <div class="package website">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/video-package-vector.png') }}"
                                                                alt="Premium" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Premium</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>449</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹1698</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_3">
                                                    <div id="mCSB_3"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_3_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 15 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_3_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_3_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_3_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 64px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="449" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Business Website Package - $449" data-price="$449"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="pills-wix" role="tabpanel" aria-labelledby="pills-wix-tab">
                    <section class="our-pricing-planss">
                        <div class="container text-center">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/logo-package-vector.png') }}"
                                                                alt="Basic" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Basic</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>199</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹298</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_1">
                                                    <div id="mCSB_1"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        style="max-height: none;" tabindex="0">
                                                        <div id="mCSB_1_container" class="mCSB_container"
                                                            style="position:relative; top:0; left:0;" dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 5 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_1_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_1_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 116px; max-height: 170px; top: 0px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="199" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Starter Website Package - $199" data-src="#popupform"
                                                    data-price="$195" href="javascript:void(0);"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/website-package-vector.png') }}"
                                                                alt="Standard" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Standard</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>349</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹789</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_2">
                                                    <div id="mCSB_2"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_2_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 7 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_2_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_2_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_2_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 95px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="349" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Professional Website Package - $349" data-price="$349"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <span class="strip best-seller">Best Seller</span>
                                            <div class="package website">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/video-package-vector.png') }}"
                                                                alt="Premium" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Premium</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>449</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹1698</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_3">
                                                    <div id="mCSB_3"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_3_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 15 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_3_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_3_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_3_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 64px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="449" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Business Website Package - $449" data-price="$449"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="pills-ecommerce" role="tabpanel" aria-labelledby="pills-ecommerce-tab">
                    <section class="our-pricing-planss">
                        <div class="container text-center">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/logo-package-vector.png') }}"
                                                                alt="Basic" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Basic</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>199</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹298</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_1">
                                                    <div id="mCSB_1"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        style="max-height: none;" tabindex="0">
                                                        <div id="mCSB_1_container" class="mCSB_container"
                                                            style="position:relative; top:0; left:0;" dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 5 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_1_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_1_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 116px; max-height: 170px; top: 0px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="199" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Starter Website Package - $199" data-src="#popupform"
                                                    data-price="$195" href="javascript:void(0);"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/website-package-vector.png') }}"
                                                                alt="Standard" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Standard</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>349</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹789</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_2">
                                                    <div id="mCSB_2"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_2_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 7 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_2_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_2_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_2_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 95px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="349" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Professional Website Package - $349" data-price="$349"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <span class="strip best-seller">Best Seller</span>
                                            <div class="package website">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/video-package-vector.png') }}"
                                                                alt="Premium" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Premium</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>449</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹1698</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_3">
                                                    <div id="mCSB_3"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_3_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 15 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_3_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_3_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_3_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 64px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="449" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Business Website Package - $449" data-price="$449"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="pills-shopify" role="tabpanel" aria-labelledby="pills-shopify-tab">
                    <section class="our-pricing-planss">
                        <div class="container text-center">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/logo-package-vector.png') }}"
                                                                alt="Basic" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Basic</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>199</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹298</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_1">
                                                    <div id="mCSB_1"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        style="max-height: none;" tabindex="0">
                                                        <div id="mCSB_1_container" class="mCSB_container"
                                                            style="position:relative; top:0; left:0;" dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 5 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_1_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_1_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 116px; max-height: 170px; top: 0px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="199" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Starter Website Package - $199" data-src="#popupform"
                                                    data-price="$195" href="javascript:void(0);"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <div class="package video">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/website-package-vector.png') }}"
                                                                alt="Standard" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Standard</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>349</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹789</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_2">
                                                    <div id="mCSB_2"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_2_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 7 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_2_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_2_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_2_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 95px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="349" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Professional Website Package - $349" data-price="$349"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 owl-items">
                                        <div class="item">
                                            <span class="strip best-seller">Best Seller</span>
                                            <div class="package website">
                                                <div class="head">
                                                    <div class="left">
                                                        <i><img class="lazy loading"
                                                                src="{{ custom_asset('front_assets/img/video-package-vector.png') }}"
                                                                alt="Premium" data-was-processed="true"></i>
                                                    </div>
                                                    <div class="right">
                                                        <h2>Premium</h2>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="left">
                                                        <span><sup>₹</sup>449</span>
                                                    </div>
                                                    <div class="right">
                                                        <strike>₹1698</strike>
                                                        <span>Only</span>
                                                    </div>
                                                </div>
                                                <div class="content mCustomScrollbar _mCS_3">
                                                    <div id="mCSB_3"
                                                        class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside"
                                                        tabindex="0" style="max-height: none;">
                                                        <div id="mCSB_3_container" class="mCSB_container"
                                                            style="position: relative; top: 0px; left: 0px;"
                                                            dir="ltr">
                                                            <div class="listing">
                                                                <ul>
                                                                    <li>upto 15 Pages Standard PHP Fully Functional Website
                                                                        built with PHP, Laravel Framework</li>
                                                                    <li>Web design, Graphic design</li>
                                                                    <li>All device Responsive</li>
                                                                    <li>Lead Form Connect</li>
                                                                    <li>CTA (Call to action buttons) Whatsapp , Social Media
                                                                        Contact Form, Phone No.</li>
                                                                    <li>Keyword research According to business</li>
                                                                    <li>Seo Specific Content,On-page Seo, Web Optimization,
                                                                        Web indexing in Google & Bing , Google Analytics
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_3_scrollbar_vertical"
                                                            class="mCSB_scrollTools mCSB_3_scrollbar mCS-light-1 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag"
                                                            style="display: block;">
                                                            <a href="#" class="mCSB_buttonUp"
                                                                style="display: block;"></a>
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_3_dragger_vertical"
                                                                    class="mCSB_dragger mCSB_dragger_onDrag"
                                                                    style="position: absolute; min-height: 30px; display: block; height: 64px; max-height: 170px; top: 150px;">
                                                                    <div class="mCSB_dragger_bar"
                                                                        style="line-height: 30px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                            <a href="#" class="mCSB_buttonDown"
                                                                style="display: block;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a name="449" data-fancybox=""
                                                    data-options="{&quot;touch&quot; : false}"
                                                    title="Business Website Package - $449" data-price="$449"
                                                    data-src="#popupform" href="javascript:;"
                                                    class="custom-btn small-btn various open-popup"><span>Start
                                                        Project</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section> -->


<section class="our_work_process padding">
<div class="container">
    <div class="heading_work">
        <h2>Our Work Process</h2>
    </div>
    <div class="row justify-content-center ">
        <div class="col-md-4 mb-3">
            <div class="under_work_process">
                <div class="heading_work_process">
                    <h3>Understanding Your Business Goals</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore delectus quidem nobis voluptatibus aliquam quasi est sunt dolores quos libero, velit sit ipsam omnis repellendus corrupti minus possimus iusto laudantium.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="under_work_process">
                <div class="heading_work_process">
                    <h3>Planning the Website or Campaign</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore delectus quidem nobis voluptatibus aliquam quasi est sunt dolores quos libero, velit sit ipsam omnis repellendus corrupti minus possimus iusto laudantium.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="under_work_process">
                <div class="heading_work_process">
                    <h3>Design & Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore delectus quidem nobis voluptatibus aliquam quasi est sunt dolores quos libero, velit sit ipsam omnis repellendus corrupti minus possimus iusto laudantium.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="under_work_process">
                <div class="heading_work_process">
                    <h3>Testing & Review</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore delectus quidem nobis voluptatibus aliquam quasi est sunt dolores quos libero, velit sit ipsam omnis repellendus corrupti minus possimus iusto laudantium.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="under_work_process">
                <div class="heading_work_process">
                    <h3>Launch & Ongoing Support</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore delectus quidem nobis voluptatibus aliquam quasi est sunt dolores quos libero, velit sit ipsam omnis repellendus corrupti minus possimus iusto laudantium.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>







    @endsection
