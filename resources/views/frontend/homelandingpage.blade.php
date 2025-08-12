@extends('layouts.front.app')
@section('headTag')
    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '572282435289817');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=572282435289817&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->


    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11046950714"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-11046950714');
    </script>

    <script>
        gtag('config', 'AW-11046950714/UgWvCLDfstkZELquzJMp', {
            'phone_conversion_number': '+91 99159 54999'
        });
    </script>
@endsection
@section('stylesheets')

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

@endsection

@section('content')

    <header class="landing_header_main main_section_new">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="header_landng_logo">
                        <div class="site-logo">
                            <a href="{{url('/')}}"><img src="{{custom_asset('front_assets/img/F-Logo.png')}}"
                                    alt="digirusholution"></a>
                        </div>
                        <div class="ul_flx_main_head fdffg">
                            <ul class="number_box">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"
                                        viewBox="0 0 512 512">
                                        <path fill="#999" fill-rule="nonzero"
                                            d="M256 0c70.68 0 134.69 28.66 181.01 74.99C483.34 121.31 512 185.32 512 256c0 70.68-28.66 134.69-74.99 181.01C390.69 483.34 326.68 512 256 512c-70.68 0-134.69-28.66-181.01-74.99C28.66 390.69 0 326.68 0 256c0-70.68 28.66-134.69 74.99-181.01C121.31 28.66 185.32 0 256 0z">
                                        </path>
                                        <path fill="#fff" fill-rule="nonzero"
                                            d="M255.99 19.48c65.31 0 124.46 26.48 167.25 69.27 42.79 42.79 69.28 101.93 69.28 167.24s-26.49 124.46-69.28 167.25c-42.79 42.79-101.94 69.28-167.25 69.28-65.23 0-124.38-26.51-167.18-69.33-42.84-42.74-69.33-101.89-69.33-167.2 0-65.31 26.48-124.45 69.27-167.24 42.79-42.79 101.93-69.27 167.24-69.27z">
                                        </path>
                                        <path fill="#F93" fill-rule="nonzero"
                                            d="M255.99 39.59c84.4 0 157.5 48.29 193.17 118.74H62.84C98.52 87.88 171.62 39.59 255.99 39.59z">
                                        </path>
                                        <path fill="#128807" fill-rule="nonzero"
                                            d="M60.38 348.64h391.24c-34.71 73.18-109.24 123.77-195.63 123.77-86.37 0-160.89-50.59-195.61-123.77z">
                                        </path>
                                        <path fill="#008"
                                            d="M255.99 179.9c42.05 0 76.13 34.08 76.13 76.11 0 42.04-34.08 76.12-76.13 76.12-42.03 0-76.11-34.08-76.11-76.12 0-42.03 34.08-76.11 76.11-76.11zm13.31 75.43c-.04-.71-.13-1.41-.27-2.09l13.3-1.92 38.01-12.54-39.2 8.14-12.46 4.99c-.22-.68-.49-1.33-.81-1.95l12.34-5.29 33.46-21.96c-.9-1.56-1.85-3.08-2.87-4.55l.07-.05c-1.46 1.13-3.55.84-4.68-.61a3.345 3.345 0 0 1 .56-4.61 62.382 62.382 0 0 0-3.66-3.96v-.02l-29.87 26.65-8.29 10.57c-.53-.48-1.1-.91-1.68-1.3l8.04-10.75 18.01-35.75-21.95 33.47-5.29 12.35c-.62-.32-1.28-.59-1.97-.81l5.01-12.46 8.14-39.2-12.56 38.01-1.9 13.3c-.68-.14-1.38-.23-2.09-.28l1.6-13.34-2.3-39.95c-1.8 0-3.59.09-5.37.22l-.01-.1c.24 1.83-1.05 3.5-2.87 3.74a3.325 3.325 0 0 1-3.72-2.79c-3.58.65-7.05 1.59-10.4 2.79.65 1.68-.16 3.6-1.84 4.28-1.66.68-3.58-.08-4.31-1.73-1.63.78-3.23 1.63-4.78 2.52l21.96 33.45 5.29 12.35c.62-.32 1.27-.59 1.95-.81l-4.99-12.46-8.14-39.2 12.55 38.01 1.91 13.3c.68-.14 1.38-.23 2.09-.28l-1.6-13.34 2.28-39.95c1.81 0 3.61.08 5.39.22l.01-.1a3.342 3.342 0 0 0 2.87 3.74c1.79.24 3.45-1.01 3.72-2.79 3.58.65 7.05 1.59 10.41 2.79-.65 1.68.16 3.6 1.82 4.28 1.68.68 3.59-.08 4.32-1.73 3.28 1.55 6.38 3.34 9.33 5.39l.05-.07c-1.13 1.46-.84 3.55.61 4.67a3.36 3.36 0 0 0 4.68-.61l-.07.08a64.22 64.22 0 0 1 3.94 3.62h.02l-26.64 29.89-10.56 8.29c.48.53.9 1.08 1.28 1.68l10.76-8.06 35.74-18c.89 1.56 1.74 3.15 2.52 4.78a3.298 3.298 0 0 0-1.73 4.31c.68 1.67 2.58 2.48 4.28 1.83 1.19 3.34 2.13 6.83 2.78 10.41a3.325 3.325 0 0 0-2.78 3.72c.23 1.82 1.91 3.1 3.73 2.86l-.09.02c.13 1.77.22 3.56.22 5.37l-39.95-2.28-13.35 1.6zm-46.61-56.98 18.01 35.73 8.06 10.75c-.6.39-1.16.82-1.68 1.3l-8.3-10.57-29.87-26.63c1.27-1.27 2.6-2.49 3.96-3.66 1.13 1.39 3.18 1.65 4.61.55a3.33 3.33 0 0 0 .62-4.67l.05.07c1.48-1.02 2.99-1.97 4.54-2.87zm-13.78 10.58 26.64 29.87 10.56 8.29c-.47.53-.9 1.08-1.3 1.68l-10.75-8.06-35.74-18c-.89 1.55-1.73 3.15-2.5 4.76a3.35 3.35 0 0 1 1.72 4.33c-.68 1.67-2.6 2.48-4.27 1.83-.61 1.7-1.13 3.41-1.6 5.15l38 12.54 13.31 1.92c-.15.68-.24 1.38-.29 2.09l-13.33-1.6-39.96 2.28c0 1.81.1 3.61.22 5.38l-.09.02c1.82-.25 3.5 1.03 3.74 2.87.23 1.79-1.02 3.45-2.79 3.72.65 3.58 1.58 7.03 2.79 10.39 1.67-.64 3.59.17 4.27 1.83.68 1.67-.08 3.6-1.72 4.33.77 1.63 1.61 3.21 2.5 4.76l35.74-18 10.75-8.05c.4.59.83 1.16 1.3 1.68l-10.56 8.3-26.65 29.87h.01c1.27 1.26 2.6 2.48 3.96 3.66 1.13-1.4 3.18-1.67 4.61-.56 1.46 1.12 1.74 3.22.62 4.67l.05-.06c1.47 1.03 2.99 1.98 4.54 2.88l21.96-33.48 5.29-12.35c.62.33 1.27.6 1.95.82l-4.99 12.47-8.14 39.19c1.73.46 3.49.86 5.26 1.19a3.325 3.325 0 0 1 3.72-2.8c1.79.25 3.06 1.87 2.87 3.65 1.77.15 3.56.23 5.38.23l2.3-39.97-1.6-13.34c.71-.03 1.41-.13 2.09-.27l1.9 13.3 12.56 38.01-8.14-39.19-5.01-12.47c.69-.22 1.35-.5 1.97-.82l5.29 12.35 21.95 33.48c1.55-.9 3.09-1.87 4.56-2.88l.05.06c-1.13-1.45-.84-3.55.61-4.67 1.43-1.11 3.49-.84 4.6.56 1.37-1.16 2.7-2.4 3.97-3.66l-26.64-29.87-10.56-8.3c.48-.52.9-1.09 1.28-1.68l10.76 8.05 35.76 18-33.48-21.96-12.36-5.28c.34-.63.61-1.28.83-1.96l12.46 5.01 39.18 8.13c.46-1.72.87-3.46 1.2-5.25a3.325 3.325 0 0 1-2.78-3.72 3.318 3.318 0 0 1 3.73-2.87l-.09-.02c.14-1.77.22-3.56.22-5.38l-39.95 2.28-13.35-1.6c-.04.73-.13 1.43-.27 2.11l13.3 1.9 37.99 12.55c-.47 1.75-.98 3.46-1.58 5.14-1.7-.64-3.6.17-4.28 1.83-.7 1.7.08 3.61 1.73 4.33a64.329 64.329 0 0 1-5.39 9.32l.07.05a3.335 3.335 0 0 0-4.68.62c-1.1 1.42-.83 3.48.56 4.59a72.466 72.466 0 0 1-3.66 3.98l-29.87-26.64-8.29-10.56c-.53.46-1.1.9-1.68 1.28l8.04 10.75 18.01 35.76c-1.55.89-3.14 1.73-4.77 2.5-.71-1.64-2.63-2.42-4.32-1.72-1.7.69-2.5 2.64-1.79 4.34l-.03-.07a64.87 64.87 0 0 1-10.41 2.79 3.325 3.325 0 0 0-3.72-2.8c-1.79.25-3.06 1.87-2.87 3.65-1.77.13-3.59.23-5.4.23l-2.28-39.97 1.6-13.34c-.71-.03-1.41-.13-2.09-.27l-1.91 13.3-12.55 38.01c-1.75-.46-3.48-1-5.14-1.6a3.3 3.3 0 0 0-1.84-4.27c-1.68-.7-3.6.08-4.32 1.72a65.32 65.32 0 0 1-4.77-2.5l18.01-35.76 8.06-10.75c-.6-.38-1.16-.82-1.68-1.28l-8.3 10.56-29.88 26.64v-.02c-1.27-1.27-2.49-2.6-3.65-3.96 1.4-1.11 1.65-3.17.56-4.59a3.324 3.324 0 0 0-4.67-.62l.06-.05c-1.01-1.47-1.98-3-2.88-4.56l33.46-21.96 12.35-5.28c-.31-.63-.58-1.28-.81-1.96l-12.46 5.01-39.19 8.13 38-12.55 13.31-1.9c-.15-.68-.24-1.38-.29-2.11l-13.33 1.6-39.96-2.28c0-1.82.08-3.6.22-5.37l-.09-.02c1.82.24 3.5-1.04 3.74-2.86.23-1.79-1.02-3.45-2.79-3.72.33-1.78.73-3.53 1.19-5.26l39.19 8.14 12.46 4.99c.23-.68.5-1.33.81-1.95l-12.35-5.29-33.46-21.96c.9-1.56 1.85-3.08 2.88-4.55l-.06-.05c1.45 1.13 3.54.84 4.67-.61 1.09-1.43.84-3.49-.56-4.61 1.18-1.36 2.4-2.69 3.66-3.96z">
                                        </path>
                                    </svg>
                                    <a href="tel:+91 99159 54999">+91 99159 54999</a>
                                </li>
                                <li>
                                    <div class="mail_icon">
                                        <a href="mailto:support@digirushsolutions.com"><i class="fa-solid fa-envelope"></i>
                                            support@digirushsolutions.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="icon_landing">
                        <div class="img_off">
                            <img src="https://digirushsolutions.com/public/front_assets/img/GET-4.gif" alt=""
                                class="img-fluid">
                        </div>
                        <div class="btn_call_now">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Get A Free Consultation
                            </button>
                        </div>
                        <div class="btn_call_now">
                            <a href="tel:+91 99159 54999">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="home_landing_new">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="home_landing_under">
                        <div class="under_txt_main">
                            <span>Digi Rush Solutions</span>
                            <h1>Web Services for Business Growth, Starting at Rs. 4999!</h1>
                            <p>At Digi Rush Solutions, we specialize in affordable web services designed to help businesses
                                like yours to grow and succeed online.</p>
                            <ul>
                                <li>
                                    <p>Fully Customized Web Development and Designing </p>
                                </li>
                                <li>
                                    <p>100% Ownership Rights for Long-Term Flexibility</p>
                                </li>
                                <li>
                                    <p>Analytics and Performance Tracking for Data-Driven Growth</p>
                                </li>
                                <li>
                                    <p>Affordable & Transparent Pricing for High ROI</p>
                                </li>
                            </ul>
                            <div class="trust_pilot_logos">
                                <div class="img_logo_pilot">
                                    <img src="{{ custom_asset('front_assets/img/google-.png') }}" alt="" class="img-fluid">
                                </div>

                                <div class="img_logo_pilot">
                                    <img src="{{ custom_asset('front_assets/img/Upwork-logo.png') }}" alt=""
                                        class="img-fluid">
                                </div>

                                <div class="img_logo_pilot">
                                    <img src="{{ custom_asset('front_assets/img/freelancer.png') }}" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="img_logo_pilot">
                                    <img src="{{ custom_asset('front_assets/img/visualhunter.png') }}" alt=""
                                        class="img-fluid">
                                </div>

                            </div>

                            <div class="btn_landing_page">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Get A Free Consultation
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="slick-slider-banner  banner_spacing">
                        <div class="landing_computer_img">
                            <img src="{{ custom_asset('front_assets/img/Gif-mockup22.gif') }}" alt="" class="img-fluid">
                        </div>
                        <div class="landing_computer_img">
                            <img src="{{ custom_asset('front_assets/img/Loan-SuvidhaGIF.gif') }}" alt="" class="img-fluid">
                        </div>
                        <div class="landing_computer_img">
                            <img src="{{ custom_asset('front_assets/img/babycorngif.gif') }}" alt="" class="img-fluid">
                        </div>
                        <div class="landing_computer_img">
                            <img src="{{ custom_asset('front_assets/img/Shrishti-Gif.gif') }}" alt="" class="img-fluid">
                        </div>
                        <div class="landing_computer_img">
                            <img src="{{ custom_asset('front_assets/img/just-jadaugif.gif') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="conter_home_landing">
        <div class="container">
            <div class="heading_counter">
                <h2>Our Numbers Speak For Themselves</h2>
            </div>
            <div class="row">
                <div class="four col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-box colored">
                        <img src="{{ custom_asset('front_assets/img/webCard1-1.png') }}" alt="" class="img-fluid">
                        <div class="flx_counter_contain">
                            <span class="counter">2147</span>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                </div>
                <div class="four col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-box colorback">
                        <img src="{{ custom_asset('front_assets/img/webCard1-1.png') }}" alt="" class="img-fluid">
                        <div class="flx_counter_contain">
                            <span class="counter">3275</span>
                            <p>Registered Members</p>
                        </div>
                    </div>
                </div>
                <div class="four col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-box color_back">
                        <img src="{{ custom_asset('front_assets/img/webCard1-1.png') }}" alt="" class="img-fluid">
                        <div class="flx_counter_contain">
                            <span class="counter">289</span>
                            <p>Available Products</p>
                        </div>
                    </div>
                </div>
                <div class="four col-lg-3 col-md-6 col-sm-12 ">
                    <div class="counter-box color_main">
                        <img src="{{ custom_asset('front_assets/img/webCard1-1.png') }}" alt="" class="img-fluid">
                        <div class="flx_counter_contain">
                            <span class="counter">1563</span>
                            <p>Saved Trees</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="industries_cantered">
        <div class="container-fluid">
            <div class="heading_counter">
                <h2>Industries We Have Served</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 ">
                    <div class="spacing_main">
                        <div class="row main_space">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                                <div class="main_industries  main_indus_color">
                                    <ul>
                                        <li>
                                            <div class="real_statte  travel_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/travel_booking.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Travel And Booking</h3>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="real_statte education_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/education.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Education</h3>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="real_statte manufacturing_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/manufacturring.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Manufacturing</h3>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-6 upper_space  main_indus_colors">
                                <div class="main_industries">
                                    <ul>
                                        <li>
                                            <div class="real_statte banking_finance_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/banking_fiance.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Banking & Finance</h3>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="real_statte media_entertainment_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/media_entertainment.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Media & Entertainment</h3>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="real_statte lifestyle_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/lifestyle.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Lifestyle</h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-6  main_indus_colorss">
                                <div class="main_industries">
                                    <ul>
                                        <li>
                                            <div class="real_statte digital_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/digital_advertising.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Digital Advertising</h3>
                                                </div>
                                            </div>
                                        </li>


                                        <li>
                                            <div class="real_statte healthcare_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/healthcare.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Healthcare</h3>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="real_statte sports_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/sports_fitness.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Sports & Fitness</h3>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-6 upper_space   main_indus_colorsss">
                                <div class="main_industries ">
                                    <ul>
                                        <li>
                                            <div class="real_statte social_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/social_network.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Social Network</h3>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="real_statte estatte_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/real_estateee.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Real Estate</h3>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="real_statte transportaion_color">
                                                <div class="content_txt">
                                                    <div class="img_read">
                                                        <img src="{{ custom_asset('front_assets/img/transporation.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <h3>Transportation & Logistics</h3>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="txt_cantered_main">
                        <div class="under_txt_indus">
                            <h2>Industries We Empower with Cutting-Edge Web Solutions</h2>
                            <p>We specialize in crafting unique and impactful web experiences for businesses across various
                                industries. Our custom web development and web designing services are designed to drive
                                growth, engagement and success in the digital world.</p>
                            <div class="btn_landing_page">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Book A Free Demo
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="website_devlopment_section">
        <div class="container">
            <div class="heading_website_devlop">
                <h2>Unlock Your Business Potential with Expert Website Development</h2>
                <p>Transform your ideas into profitable solutions with expert website development. Let's grow together.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="under_website_devlop ">
                        <div class="main_under bg_color_one">
                            <div class="img_website">
                                <img src="{{ custom_asset('front_assets/img/business-logo-1.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="content_website_devlop">
                                <h3>Web Portal Solutions</h3>
                                <p>Custom web portals are designed to streamline business processes, increase user
                                    involvement and support better communication.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="under_website_devlop ">
                        <div class="main_under bg_color_two">
                            <div class="img_website">
                                <img src="{{ custom_asset('front_assets/img/business-logo-2.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="content_website_devlop">
                                <h3>Tailored Web Development</h3>
                                <p>We offer customized web development services to bring your vision into a completely
                                    functional, responsive website built to respond to your business needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="under_website_devlop">
                        <div class="main_under  bg_color_three">
                            <div class="img_website">
                                <img src="{{ custom_asset('front_assets/img/business-logo-3.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="content_website_devlop">
                                <h3>E-Commerce Solution</h3>
                                <p>Our e-commerce solutions will optimize the shopping experience online, providing scalable
                                    platforms to power sales and customer satisfaction.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="under_website_devlop ">
                        <div class="main_under bg_color_four">
                            <div class="img_website">
                                <img src="{{ custom_asset('front_assets/img/business-logo-4.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="content_website_devlop">
                                <h3>Custom CMS Development</h3>
                                <p>We have custom CMS platforms designed and developed to give you full control of your
                                    content management using user-friendly interfaces and powerful features.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="under_website_devlop ">
                        <div class="main_under bg_color_five">
                            <div class="img_website">
                                <img src="{{ custom_asset('front_assets/img/business-logo-5.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="content_website_devlop">
                                <h3>Enterprise Web Solutions</h3>
                                <p>We have enterprise-grade web solutions, built with fit and integrating the right into
                                    your already existing systems for growth and scalable success for the long haul.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="under_website_devlop ">
                        <div class="main_under bg_color_six">
                            <div class="img_website">
                                <img src="{{ custom_asset('front_assets/img/business-logo-6.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="content_website_devlop">
                                <h3>Continuous Web Support & Maintenance</h3>
                                <p>We offer continuous web support and maintenance services to ensure your website will be
                                    safe and updated and performing at its best.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="for_quality_main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="for_quality_txt">
                        <h2>Take Your Business to New Heights with Expert Web Development Service </h2>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="btn_landing_page btn_get_quote">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Get Started!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dynamic_brewing_section">
        <div class="container">
            <div class="heading_dynamic_main">
                <h2>Enhance the Expansion of Your Business - Welcome to The Era Of Agile Web Development</h2>
                <p>Employ an efficient and flexible method for their evolution to Web development applications that meet the
                    client's needs and yield results.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-12">
                    <div class="icons-container">
                        <div class="d-flex flex-column gap-4">
                            <div class="main_flx">
                                <img src="{{ custom_asset('front_assets/img/light-bulb.png') }}" alt="Planner"
                                    class="icons img-fluid" data-slide="0">
                                <h3>Planner</h3>
                            </div>
                            <div class="main_flx">
                                <img src="{{ custom_asset('front_assets/img/carousel2-logo2.png') }}" alt="Design"
                                    class="icons" data-slide="1">
                                <h3>Design</h3>
                            </div>
                            <div class="main_flx">
                                <img src="{{ custom_asset('front_assets/img/carousel2-logo3.png') }}" alt="Development"
                                    class="icons" data-slide="2">
                                <h3>Development</h3>
                            </div>
                            <div class="main_flx">
                                <img src="{{ custom_asset('front_assets/img/carousel2-logo4.png') }}" alt="QA & Launch"
                                    class="icons" data-slide="3">
                                <h3>QA & Launch</h3>
                            </div>
                            <div class="main_flx">
                                <img src="{{ custom_asset('front_assets/img/carousel2-logo5.png') }}" alt="Maintenance"
                                    class="icons" data-slide="4">
                                <h3>Maintenance</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="responsive">
                        <img src="{{ custom_asset('front_assets/img/qa-and-launch.jpg') }}" alt="" class="img-fluid">
                        <img src="{{ custom_asset('front_assets/img/design_launch.png') }}" alt="" class="img-fluid">
                        <img src="{{ custom_asset('front_assets/img/devloment_planner.png') }}" alt="" class="img-fluid">
                        <img src="{{ custom_asset('front_assets/img/quality_assurance.png') }}" alt="" class="img-fluid">
                        <img src="{{ custom_asset('front_assets/img/maintance_planner.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our_services_section">
        <div class="container">
            <div class="our_services_heading">
                <span>Our services</span>
                <h2>Cutting-edge technologies to Create Exceptional Web Solutions</h2>
                <p>We take a careful, step-by-step approach to ensure that we achieve your business objectives and
                    subsequently improve the business on the web.
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/css.png') }}" alt="" class="img-fluid">
                                <h3>CSS</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/html.png') }}" alt="" class="img-fluid">
                                <h3>HTML</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/php.png') }}" alt="" class="img-fluid">
                                <h3>PHP</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/java.png') }}" alt="" class="img-fluid">
                                <h3>Java</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/nodejs.png') }}" alt="" class="img-fluid">
                                <h3>Node.js</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/react.png') }}" alt="" class="img-fluid">
                                <h3>React</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/wordpress_logo.svg') }}" alt=""
                                    class="img-fluid">
                                <h3>Wordpress</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/shopify_logo_new.png') }}" alt=""
                                    class="img-fluid">
                                <h3>shopify</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/WIX-Logo.jpg') }}" alt="" class="img-fluid">
                                <h3>Wix</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/ai.png') }}" alt="" class="img-fluid">
                                <h3>Illustrator</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/ae.png') }}" alt="" class="img-fluid">
                                <h3>After Effects</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="img_logo">
                                <img src="{{ custom_asset('front_assets/img/xd.png') }}" alt="" class="img-fluid">
                                <h3>Adobe Experience Design</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-lg col-md-6 col-sm-6 mb-4">
                                    <div class="web_designing_main">
                                        <div class="under_Designing web_design_color">
                                            <div class="img_design">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 24 24" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="M20.97 7.27a.996.996 0 000-1.41l-2.83-2.83a.996.996 0 00-1.41 0l-4.49 4.49-3.89-3.89c-.78-.78-2.05-.78-2.83 0l-1.9 1.9c-.78.78-.78 2.05 0 2.83l3.89 3.89L3 16.76V21h4.24l4.52-4.52 3.89 3.89c.95.95 2.23.6 2.83 0l1.9-1.9c.78-.78.78-2.05 0-2.83l-3.89-3.89 4.48-4.48zM5.04 6.94l1.89-1.9L8.2 6.31 7.02 7.5l1.41 1.41 1.19-1.19 1.2 1.2-1.9 1.9-3.88-3.88zm11.23 7.44l-1.19 1.19 1.41 1.41 1.19-1.19 1.27 1.27-1.9 1.9-3.89-3.89 1.9-1.9 1.21 1.21zM6.41 19H5v-1.41l9.61-9.61 1.3 1.3.11.11L6.41 19zm9.61-12.44l1.41-1.41 1.41 1.41-1.41 1.41-1.41-1.41z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="txt_design_web">
                                                <h2>Web Design</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-lg col-md-6 col-sm-6 mb-4">
                                    <div class="web_designing_main">
                                        <div class="under_Designing web_frame_color">
                                            <div class="img_design">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 448 512" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M448 73.143v45.714C448 159.143 347.667 192 224 192S0 159.143 0 118.857V73.143C0 32.857 100.333 0 224 0s224 32.857 224 73.143zM448 176v102.857C448 319.143 347.667 352 224 352S0 319.143 0 278.857V176c48.125 33.143 136.208 48.572 224 48.572S399.874 209.143 448 176zm0 160v102.857C448 479.143 347.667 512 224 512S0 479.143 0 438.857V336c48.125 33.143 136.208 48.572 224 48.572S399.874 369.143 448 336z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="txt_design_web">
                                                <h2>Web Frameworks</h2>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-lg col-md-6 col-sm-6 mb-4">
                                    <div class="web_designing_main">
                                        <div class="under_Designing plateforms_color">
                                            <div class="img_design">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 512 512" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M256 23C127.4 23 23 127.4 23 256s104.4 233 233 233 233-104.4 233-233S384.6 23 256 23zm-33.7 20.63C190 66.85 163.6 92.25 143.2 119H90.26C122.9 79.54 169.4 51.95 222.3 43.63zm67.4 0c52.9 8.32 99.4 35.91 132 75.37h-52.9c-20.4-26.75-46.8-52.15-79.1-75.37zm-60.2 16.98C219 80.42 210 99.85 202.5 119h-36.3c17.1-20.39 38.2-40 63.3-58.39zm53 0c25.1 18.39 46.2 38 63.3 58.39h-36.3c-7.5-19.15-16.5-38.58-27-58.39zM247 65.99V119h-25.1c7-17.3 15.4-34.95 25.1-53.01zm18 0c9.7 18.06 18.1 35.71 25.1 53.01H265V65.99zM76.89 137h53.51c-9.8 15-17.8 30.4-23.9 46H53.71c5.89-16.3 13.71-31.8 23.18-46zm75.21 0h43.8c-5.4 15.5-9.6 30.8-12.9 46h-57.1c6.7-15.6 15.5-30.9 26.2-46zm62.8 0H247v46h-45.6c3.4-15.2 7.9-30.5 13.5-46zm50.1 0h32.1c5.6 15.5 10.1 30.8 13.5 46H265v-46zm51.1 0h43.8c10.7 15.1 19.5 30.4 26.2 46H329c-3.3-15.2-7.5-30.5-12.9-46zm65.5 0h53.5c9.5 14.2 17.3 29.7 23.2 46h-52.8c-6.1-15.6-14.1-31-23.9-46zM48.1 201h52.1c-4.63 15.2-7.5 30.6-8.64 46H41.2c.65-15.8 3.01-31.2 6.9-46zm70.9 0h60.5c-2.5 15.4-3.9 30.7-4.4 46h-65.5c1.2-15.3 4.4-30.7 9.4-46zm78.8 0H247v46h-53.9c.5-15.3 2-30.6 4.7-46zm67.2 0h49.2c2.7 15.4 4.2 30.7 4.7 46H265v-46zm67.5 0H393c5 15.3 8.2 30.7 9.4 46h-65.5c-.5-15.3-1.9-30.6-4.4-46zm79.3 0h52.1c3.9 14.8 6.2 30.2 6.9 46h-50.4c-1.1-15.4-4-30.8-8.6-46zM41.2 265h49.83c.23 15.5 2.24 30.9 6.02 46H48.1c-3.89-14.8-6.25-30.2-6.9-46zm67.8 0h66.1c.5 15.3 1.9 30.6 4.4 46h-63.9c-4.1-15.2-6.3-30.6-6.6-46zm84.1 0H247v46h-49.2c-2.7-15.4-4.2-30.7-4.7-46zm71.9 0h53.9c-.5 15.3-2 30.6-4.7 46H265v-46zm71.9 0H403c-.3 15.4-2.5 30.8-6.6 46h-63.9c2.5-15.4 3.9-30.7 4.4-46zm84.1 0h49.8c-.7 15.8-3 31.2-6.9 46H415c3.7-15.1 5.7-30.5 6-46zM53.71 329h48.69c5.4 15.7 12.8 31.1 22.1 46H76.89c-9.47-14.2-17.29-29.7-23.18-46zm67.69 0H183c3.3 15.2 7.5 30.5 12.9 46h-50c-10.4-14.9-18.5-30.3-24.5-46zm80 0H247v46h-32.1c-5.6-15.5-10.1-30.8-13.5-46zm63.6 0h45.6c-3.4 15.2-7.9 30.5-13.5 46H265v-46zm64 0h61.6c-6 15.7-14.1 31.1-24.5 46h-50c5.4-15.5 9.6-30.8 12.9-46zm80.6 0h48.7c-5.9 16.3-13.7 31.8-23.2 46h-47.6c9.3-14.9 16.7-30.3 22.1-46zM90.26 393h46.64c20.3 27.1 47.3 52.3 80.9 74.6-51-9.1-95.8-36.3-127.54-74.6zm69.34 0h42.9c7.9 20.4 17.6 41 29 62.1-29.3-18.9-53.2-39.8-71.9-62.1zm62.3 0H247v53c-9.7-18-18.1-35.7-25.1-53zm43.1 0h25.1c-7 17.3-15.4 35-25.1 53v-53zm44.5 0h42.9c-18.7 22.3-42.6 43.2-71.9 62.1 11.4-21.1 21.1-41.7 29-62.1zm65.6 0h46.6c-31.7 38.3-76.5 65.5-127.5 74.6 33.6-22.3 60.6-47.5 80.9-74.6z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="txt_design_web">
                                                <h2>Platforms</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-lg col-md-6 col-sm-6 mb-4">
                                    <div class="web_designing_main">
                                        <div class="under_Designing web_frameworks_color">
                                            <div class="img_design">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 512 512" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M318 123.645l-61.5 35.7-61.76-35.7 61.76-35.7zm93.68 54.19l-61.76 35.7 61.76 35.7 61.5-35.7zm-294.39 80.64l61.76 35.7 61.5-35.7-61.5-35.7zm139.52-80.57l-61.76 35.7 61.76 35.7 61.5-35.7zM31 298.365l62 35.69v-71l-62-35.65v71zm373-26l-62 35.69v70.94l62-35.66v-70.97zm-225.11-139.4l-61.76 35.7 61.76 35.7 61.5-35.7zM109 343.305l62 35.69v-70.94l-62-35.69v71zm225.41-120.45l-61.76 35.7 61.76 35.7 61.5-35.7zM249 353.055l-62-35.7v71l62 35.7v-71zm77-35.67l-61 35.67v70.94l61-35.66v-70.95zm8.07-184.5l-61.76 35.7 61.76 35.7 61.5-35.7zm-232.6 44.95l-61.77 35.7 61.76 35.7 61.5-35.7zM481 227.565l-61 35.66v70.94l61-35.66v-70.94zm-286.11 75.93l61.76 35.7 61.5-35.7-61.5-35.7z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="txt_design_web">
                                                <h2>Web Frameworks</h2>
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

    <section class="why_choose_solution">
        <div class="container">
            <div class="heading_why_choose">
                <h2>Why Choose Digi Rush Solution for Web Development & Web Designing?</h2>
                <p>Digi Rush Solution has earned its reputation as one of the best web development and design firms by
                    creating aesthetically pleasing and functional designs.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card-container main_first_color">
                        <img src="{{ custom_asset('front_assets/img/custom_web_design.png') }}" alt="">
                        <h3>Custom Web Design</h3>
                        <div class="card-content">
                            <p>Unique, responsive custom web designs that reflect your brand identity, ensuring
                                user-friendly navigation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card-container main_second_color">
                        <img src="{{ custom_asset('front_assets/img/seo_friendly_.png') }}" alt="">
                        <h3>SEO-Friendly Websites</h3>
                        <div class="card-content">
                            <p>We build SEO-friendly websites with optimized content and strategic keyword integration to
                                boost visibility.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card-container main_third_color">
                        <img src="{{ custom_asset('front_assets/img/ecommerce_solution_.png') }}" alt="">
                        <h3>E-Commerce Solutions</h3>
                        <div class="card-content">
                            <p>Custom e-commerce solutions with secure payment gateways, user-friendly interfaces, inventory
                                management, etc</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card-container main_fourth_color">
                        <img src="{{ custom_asset('front_assets/img/secure_.png') }}" alt="">
                        <h3>Fast and Secure</h3>
                        <div class="card-content">
                            <p>Fast, secure websites with optimized performance, SSL encryption, robust security protocols,
                                and quick load times.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="for_quality_main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="for_quality_txt">
                        <h2>Let’s Start Building Web Solutions To Help Achieve Your Business Goals</h2>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="btn_landing_page btn_get_quote">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Get Free Consultation
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="support_maintaince_sec">
        <div class="container">
            <div class="support" id="support_maintance">
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="support_carousel_text">
                                    <div class="content_support_cntnt">
                                        <h2>Website Development Work</h2>
                                        <p>For Loan Suvidhaa, we have integrated advanced loan calculators, secure
                                            application form and real-time loan status tracking, ensuring a smooth,
                                            user-friendly experience. Additionally, we’ve optimized mobile responsiveness
                                            and implemented robust data security measures for enhanced performance and
                                            privacy.</p>
                                        <div class="btn_landing_page support_maintain_btn">
                                            <a href="https://loansuvidhaa.com/"> <button type="button"
                                                    class="btn btn-primary">
                                                    Visit Site
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="imageBox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item">
                                        <a data-fancybox="gallery" href="https://loansuvidhaa.com/">
                                            <img src="{{ custom_asset('front_assets/img/loan_suvidha.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="support_carousel_text">

                                    <div class="content_support_cntnt">
                                        <h2>Website Designing Work</h2>
                                        <p>For the Great Media website, we crafted a visually engaging, mobile-responsive
                                            design, incorporating interactive elements and SEO-optimized content. The site
                                            is designed for fast load times and easy navigation, ensuring an exceptional
                                            user experience across all devices.</p>
                                        <div class="btn_landing_page support_maintain_btn">
                                            <a href="https://greatmedia.in/"> <button type="button" class="btn btn-primary">
                                                    Visit Site
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="imageBox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item">
                                        <a data-fancybox="gallery" href="https://greatmedia.in/">
                                            <img src="{{ custom_asset('front_assets/img/great_media_in.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="support_carousel_text">

                                    <div class="content_support_cntnt">
                                        <h2>Website Development, Support and Maintenance Work</h2>
                                        <p>For the Baby Corn Group website, we provided custom web development with SEO
                                            optimization, integrated secure contact forms and implemented real-time data
                                            updates. Additionally, we ensure ongoing performance monitoring, security
                                            patching and content management support for seamless user experience.</p>
                                        <div class="btn_landing_page support_maintain_btn">
                                            <a href="https://babycorngroup.com/"> <button type="button"
                                                    class="btn btn-primary">
                                                    Visit Site
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="imageBox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item">
                                        <a data-fancybox="gallery" href="https://babycorngroup.com/">
                                            <img src="{{ custom_asset('front_assets/img/baby_corn_group.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="for_quality_main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="for_quality_txt">
                        <h2>Custom Web Solutions That Drive Your Business Success. Begin Your Journey Today
                        </h2>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="btn_landing_page btn_get_quote">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Start Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="marque_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="marquee-container mb-4">
                        <div class="marquee-left">
                            <div class="marquee-content">
                                <img src="{{ custom_asset('front_assets/img/client_logo_1.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/client_logo_2.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/client_logo_3.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/Modern Sales.png') }}" alt="Client Logo"
                                    class="mx-4">

                                <img src="{{ custom_asset('front_assets/img/client_logo_6.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/client_logo_7.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/sristi_main.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/client_logo_3.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/Modern Sales.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/sristi_main.png') }}" alt="Client Logo"
                                    class="mx-4">
                            </div>
                        </div>
                    </div>


                    <div class="marquee-container">
                        <div class="marquee-right">
                            <div class="marquee-content">
                                <img src="{{ custom_asset('front_assets/img/client_logo_8.jpg') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/client_logo_9.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/client_logo_10.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/Shivanghi Electronics logo.png') }}"
                                    alt="Client Logo" class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/client_logo_12.png') }}" alt="Client Logo"
                                    class="mx-4">

                                <img src="{{ custom_asset('front_assets/img/client_logo_13.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/client_logo_14.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/client_logo_15.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/client_logo_16.png') }}" alt="Client Logo"
                                    class="mx-4">
                                <img src="{{ custom_asset('front_assets/img/sristi_main.png') }}" alt="Client Logo"
                                    class="mx-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="app_devloper_form">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="txt_cantered_main devlopment_css">
                        <div class="txt_app_devloper">
                            <h2>Top Web Development by Digi Rush Solutions
                            </h2>
                            <p>Digi Rush Solutions is acknowledged as the best company that provides quality web development
                                services to let the companies gain a solid online foundation. From developers, designers and
                                strategists to bring innovative solutions to the table responsive and user-friendly websites
                                tailored to specific client requirements. True excellence is being a step ahead of the rest
                                of the industry with what is next latest technologies to continue refining performance and
                                user experience. Trust Digi Rush to create a website that looks good and really works for
                                your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="_cntact_form_landing  left_spacing_form">
                        @include('frontend.commonform.landingform')
                    </div>
                </div>
            </div>
    </section>


    <section class="royal_care_travel_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="main_laginator">
                        <img src="{{ custom_asset('front_assets/img/video_laginator_we.png') }}" alt="Client Logo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial_slider">
                        <div class="slider">
                            <div class="laginator_main_travel">
                                <div class="img_reiews_webite">
                                    <img src="{{ custom_asset('front_assets/img/super_dop.webp') }}" alt="Client Logo">
                                </div>
                                <div class="under_ycc">
                                    <div class="content">
                                        <p>Digi Rush Solutions helped us build our Wix site, Super Dope Goodz, and we are
                                            happy with the results! The team’s innovative design, mobile optimization and
                                            smooth shopping experience have significantly increased both traffic and sales.
                                            Highly recommended!</p>
                                        <h4>Super Dope Goodz</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="laginator_main_travel">
                                <div class="img_reiews_webite">
                                    <img src="{{ custom_asset('front_assets/img/just_jadu.webp') }}" alt="Client Logo"
                                        class="just_jadau_logo img-fluid">
                                </div>
                                <div class="under_ycc">
                                    <div class="content">
                                        <p>Digi Rush Solutions help us to develop our e-commerce site, Just Jadau. They
                                            created a beautifully designed, functional platform with custom product pages
                                            and a secure checkout. We've seen significant growth with our website. Very good
                                            work team.</p>
                                        <h4>Just Jadau</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="laginator_main_travel">
                                <div class="img_reiews_webite">
                                    <img src="{{ custom_asset('front_assets/img/client_logo_17.webp') }}" alt="Client Logo"
                                        class="img-fluid">
                                </div>
                                <div class="under_ycc">
                                    <div class="content">
                                        <p>The development team from Digi Rush Solutions has delivered a clean, professional
                                            and user-friendly platform that enhances customer experience. We've seen
                                            improved engagement and inquiries. We must recommend Digi Rush Solutions for
                                            industry-specific websites!</p>
                                        <h4> Loan Suvidhaa</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="laginator_main_travel">
                                <div class="img_reiews_webite">
                                    <img src="{{ custom_asset('front_assets/img/royalcare-logo (2).jpg') }}"
                                        alt="Client Logo" class="just_jadau_logo img-fluid">
                                </div>
                                <div class="under_ycc">
                                    <div class="content">
                                        <p>We partnered with Digi Rush Solutions to create our Shopify store for Woof
                                            Blankets and the results exceeded expectations! Their expertise in e-commerce
                                            design, attention to detail and seamless user experience have boosted our
                                            conversions. Highly recommend Digi Rush Solutions!</p>
                                        <h4>Royal Care Travels </h4>
                                    </div>
                                </div>
                            </div>
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
                <div class="col-md-12 sm-padding wow fade-in-right" data-wow-delay="200ms"
                    style="visibility: visible; animation-delay: 200ms; animation-name: fade-in-right;">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What services does Digi Rush Solutions offer in web development?

                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Digi Rush Solutions provides full web development, with the
                                    requirement of a customized website design, e-commerce solutions, CMS development,
                                    responsive web design and constant after-sales and maintenance support.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    How does Digi Rush Solutions ensure quality web development?

                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A results-based approach, rigorous industry best practices,
                                    cutting-edge technologies and comprehensive testing will ensure that our web solutions
                                    meet your business objectives and deliver the best user experience.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    What types of industries does Digi Rush Solutions support in web development?

                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Businesses are catered for, including the government, start-ups,
                                    small to medium-sized enterprises, health, retail, education, and many more, all about
                                    their unique and particular solutions.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    How long does building a website with Digi Rush Solutions take?

                                </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">The overall time needed depends on the project's complexity and
                                    scope. Generally, an average website would take 4 to 8 weeks, while larger, more complex
                                    solutions take more time.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    What makes Digi Rush Solutions different from other web development companies?

                                </button>
                            </h2>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Digi Rush Solutions is different from others due to its intense
                                    customization of solutions, agility in developing processes and dedicated team that
                                    tries to ensure the delivery of quality web solutions on time and within budget.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingsixs">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsesixs" aria-expanded="false"
                                    aria-controls="flush-collapsesixs">
                                    Is there support offered after the launch or post-launch maintenance services?

                                </button>
                            </h2>
                            <div id="flush-collapsesixs" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingsixs" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Yes! We provide after-launch support and maintenance services,
                                    so you can always be assured that your website will continue to be functional, secure
                                    and current with new features and technological enhancements.</div>
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
                <div class="col-md-3">
                    <div class="footer_under_txt">
                        <div class="site-logo">
                            <a href="https://digirushsolutions.com"><img
                                    src="https://digirushsolutions.com/public/front_assets/img/F-Logo.png"
                                    alt="digirusholution"></a>
                        </div>
                        <h2>Digi Rush Solutions LLP</h2>
                        <p>Lift your business to new heights with our digital marketing services. The magic of marketing,
                            the science of sales.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="corporate_office_india">

                        <p>C-177(A) Ind Area Uttam Towers, 6th Floor, Phase 8-B, Mohali (PB), India.</p>
                        <ul>
                            <li>
                                <a href="tel:+91 99159 54999"> <i class="fa-solid fa-phone"></i> &nbsp;+91 99159 54999</a>
                            </li>
                            <li>
                                <a href="mailto:support@digirushsolutions.com"><i class="fa-solid fa-envelope"></i>
                                    &nbsp;support@digirushsolutions.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer_under_txt">
                        <h2>Quick Links</h2>
                        <ul class="links_landing_page">
                            <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                            <li><a href="{{url('terms-and-conditions')}}"> Terms & Conditions</a></li>
                            <li><a href="{{url('refund-policy')}}">Refund Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                        <div class="portfolio-item">
                            <a data-fancybox="gallery" href="https://babycorngroup.com/">
                                <img src="{{ custom_asset('front_assets/img/baby_corn_group.png') }}" alt="Maintenance">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="floating-buttons">
        <a href="tel:9915954999" class="float-btn float-left">
            <i class="fas fa-phone"></i>
        </a>
        <a href="https://wa.me/9915954999" target="_blank" class="float-btn float-right">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="reset_form()"></button>
                </div>
                <div class="modal-body">
                    <div class="_cntact_form_landing">
                        @include('frontend.commonform.landingform')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        window.addEventListener("resize", resizeCanvas, false);
        window.addEventListener("DOMContentLoaded", onLoad, false);

        var w, h, particles = [], probability = 0.04, xPoint, yPoint;
        var canvas, isMobile = false; // Flag to detect mobile screen

        function onLoad() {
            canvas = document.getElementById('canvas');
            if (!canvas) {
                console.error("Canvas element not found");
                return;
            }
            resizeCanvas();
            if (!isMobile) {
                window.requestAnimationFrame(updateWorld);
            }
        }

        function resizeCanvas() {
            w = window.innerWidth;
            h = window.innerHeight;
            isMobile = w < 991;
        }

        function updateWorld() {
            update();
            if (!isMobile) {
                window.requestAnimationFrame(updateWorld);
            }
        }

        function update() {
            if (particles.length < 500 && Math.random() < probability) {
                createFirework();
            }
            var alive = [];
            for (var i = 0; i < particles.length; i++) {
                if (particles[i].move()) {
                    alive.push(particles[i]);
                }
            }
            particles = alive;
        }

        function createFirework() {
            xPoint = Math.random() * (w - 200) + 100;
            yPoint = Math.random() * (h - 200) + 100;
            var nFire = Math.random() * 50 + 100;
            var color = `rgb(${~~(Math.random() * 200 + 55)},${~~(Math.random() * 200 + 55)},${~~(Math.random() * 200 + 55)})`;

            for (var i = 0; i < nFire; i++) {
                var particle = new Particle(xPoint, yPoint, color);
                particles.push(particle);
                particle.create();
            }
        }

        function Particle(x, y, color) {
            this.x = x;
            this.y = y;
            this.vx = (Math.random() - 0.5) * 10;
            this.vy = (Math.random() - 0.5) * 10;
            this.alpha = Math.random() * 0.5 + 0.5;
            this.color = color;

            this.element = document.createElement('div');
            this.element.style.position = 'absolute';
            this.element.style.width = `${Math.random() * 4 + 2}px`;
            this.element.style.height = `${Math.random() * 4 + 2}px`;
            this.element.style.borderRadius = '50%';
            this.element.style.backgroundColor = this.color;
            this.element.style.opacity = this.alpha;
        }

        Particle.prototype.create = function () {
            this.element.style.left = `${this.x}px`;
            this.element.style.top = `${this.y}px`;
            canvas.appendChild(this.element);
        };

        Particle.prototype.move = function () {
            this.x += this.vx;
            this.vy += 0.05; // gravity
            this.y += this.vy;
            this.alpha -= 0.01;
            this.element.style.left = `${this.x}px`;
            this.element.style.top = `${this.y}px`;
            this.element.style.opacity = this.alpha;

            if (this.alpha <= 0) {
                canvas.removeChild(this.element);
                return false;
            }
            return true;
        };
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const counters = document.querySelectorAll(".counter");

            counters.forEach((counter) => {
                const updateCount = (target) => {
                    let count = 0;
                    const duration = 4000;
                    const increment = target / (duration / 100);
                    const step = () => {
                        count = Math.ceil(count + increment);
                        counter.textContent = count;

                        if (count < target) {
                            requestAnimationFrame(step);
                        } else {
                            counter.textContent = target;
                        }
                    };

                    requestAnimationFrame(step);
                };

                const targetValue = parseInt(counter.textContent, 10);
                updateCount(targetValue);
            });
        });

    </script>
    <!-- bootstrap -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function () {
            var slider = $('.responsive').slick({
                dots: false,
                infinite: true,
                speed: 300,
                autoplay: true,
                autoplaySpeed: 2000, // Set autoplay speed
                slidesToShow: 1,
                slidesToScroll: 1,
            });

            var icons = $('.icons');
            var highlight = $('.highlight');

            function updateHighlight(index) {
                var icon = icons.eq(index);
                var iconHeight = icon.outerHeight(true);
                var iconOffsetTop = icon.position().top;

                highlight.css({
                    top: iconOffsetTop + 'px',
                    height: iconHeight + 'px'
                });
            }

            // Update active icon on manual click
            icons.on('click', function () {
                var slideIndex = $(this).data('slide');

                icons.removeClass('active');
                $(this).addClass('active');

                slider.slick('slickGoTo', slideIndex);
                updateHighlight(icons.index(this));
            });

            // Update active icon and highlight on slide change (automatic or manual)
            slider.on('afterChange', function (event, slick, currentSlide) {
                icons.removeClass('active');
                icons.eq(currentSlide).addClass('active');
                updateHighlight(currentSlide);
            });

            // Initialize first icon as active
            icons.first().addClass('active');
            updateHighlight(0);
        });
    </script>

    <script>
        $('.support').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                dots: true
            });
        });
    </script>

    <script>
        function reset_form() {

            location.reload();

        };
    </script>

    <script>
        $(document).ready(function () {
            $('.slick-slider-banner').slick({
                fade: true,
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 7000,
                arrows: false,
                dots: true,
            });
        });
    </script>
@endsection