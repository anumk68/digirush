@extends("layouts.front.app")
@section('content')

    <section class="page-header page-header-secnd" style="background-image: url({{ custom_asset('front_assets/img/ppc_bannner.png')}});">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                    <div class="page-header-info">
                        <h1>Best PPC Agency In India</h1>
                        <p>Maximize your online visibility and conversions with India’s leading PPC strategies tailored for your business needs.
                        </p>
                        <div class="btn_digital">
                        <a href="{{ route('contact') }}" class="default-btn"> Hire Now </a>
                        </div>
                    </div>

            </div>
        </div>
    </section>
    <section class="about-section padding digitalmarketing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 sm-padding">
                    <div class="section-heading mb-20">
                        <h2>What is PPC Management?</h2>
                    </div>
                    <div class="about-content">
                        <p>Achieving online traffic is often a challenge, particularly for those who are not accustomed to the field. An ideal solution in such a situation would be to use PPC services from the <a href="{{ route('ppc_expert') }}">best PPC agency in India</a>. In the world of internet marketing, pay-per-click marketing is one of the most common methods of getting better leads. It drives traffic to websites when users visit them, and when a user clicks on an advertisement, the customer pays for these paid ads to the owner of the website.</p>
                        <p> PPC in digital marketing is both a short-term strategy and a long-term strategy that can give
                            your business a boost and provide you with a profitable return on investment (ROI). It is a
                            remarkable instrument that enables you to increase sales and thereby grow your business at the
                            same time.</p>
                        <a href="{{route('contact')}}" class="default-btn">GET STARTED</a>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="about-thumb">
                        <img src="{{ custom_asset('front_assets/img/businesswoman-working-laptop.jpg')}}" alt="pay per click advertising india">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="progress-section bg-grey padding">
        <div class="corner-pattern"></div>
        <div class="corner-pattern bottom"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="section-heading mb-40">
                        <h4 class="sub-heading"></h4>
                        <h2>Why Digi Rush Solutions For Best PPC Advertising Services?</h2>
                    </div>
                    <p>Digi Rush is a smart PPC company in India with years of experience in this industry. Our PPC experts have helped hundreds of clients achieve their ROAs (Return on Ad Spends) by applying strong strategies and using them effectively. </p>

                    <p>As a leading <a href="{{ route('content_management') }}">content marketing agency in India,</a> we offer comprehensive PPC services in India that provide valuable opportunities to businesses on various platforms, such as Facebook, Instagram, local service ads, Google Ads, and others. With our <a href="https://digirushsolutions.com/blogs/what-are-the-3-phases-of-ppc">PPC campaigns,</a> you can expect instant success and a high level of visibility that will increase your exposure.</p>
                    <a href="{{route('contact')}}" class="default-btn btn_response">GET A FREE CONSULTATION</a>
                </div>

                <div class="col-lg-6 col-md-12 col-12">

                 <div class="main_subscription_form  new_digital_form">
                        <div class="under_form_sestion">
                            <div class="main_gif_heading">
          <img src="{{custom_asset('front_assets/img/40_GIF.gif')}}" alt="" style="height: 160%;width: 100%;
    max-width: 148px;
   ">
          <h2>Upgrade Your Online Presence Today!</h2>
        </div>
                            <form method="post" action="{{ route('seoform.submit') }}" id="contact-form">
                                @csrf
                                <input type="hidden" name="city_name" value="digital_marketing">
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
                                                <option data-countryCode="IN"
                                                    value="91"{{ old('countryCode') == '91' ? 'selected' : '' }}>Ind
                                                    (+91)</option>
                                                <option data-countryCode="UK"
                                                    value="44"{{ old('countryCode') == '44' ? 'selected' : '' }}>UK
                                                    (+44)</option>
                                                <option data-countryCode="US"
                                                    value="1"{{ old('countryCode') == '1' ? 'selected' : '' }}>US (+1)
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
                                    <small style="color: grey; font-size: 14px;">Example: www.google.com (Full Domain Name)</small> 
                                    @error('message')
                                        <div class="error-message" style="color:red;">{{ $message }}</div>
                                    @enderror
                                </div>
<div id="otp-group4" style="display:none;">
                                    <label for="otp">Enter OTP</label>
                                    <input type="text" name="otp" class="form-control" />
                                </div>
                                <p id="message" style="color:red; margin-top: 10px;"></p>
                                <div class="form-field">
                                    <button id="submit" class="default-btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        
    <section class="top_countries_cities padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="under_top_country">
                        <div class="heading_canada">
                            <h2>Quick Links</h2>
                        </div>
                        <div class="ul_flx_mai">
                            <ul>
                            <li>
                                <a href="{{ route('web_services') }}">Web Services</a>
                                </li>
                            
                                <li>
                                    <a href="{{ route('web_development') }}">Web Development</a>
                                </li>
                                <li>
                                    <a href="{{ route('web_designing') }}">Web Design </a>
                                </li>
                     
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="under_top_country">
                        <div class="heading_canada">
                            <h3 class="topinggg"></h3>
                        </div>
                        <div class="ul_flx_mai">
                            <ul>
                                <li>
                                <a href="{{ route('seo_company') }}">SEO Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('digital_marketing') }}">Digital Marketing</a>
                                </li>
                                <li>
                                <a href="{{ route('content_management') }}">Content Management Marketing</a>
                                </li>
                        
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="under_top_country mb-0">
                        <div class="heading_canada">
                            <h3 class="topinggg"></h3>
                        </div>
                        <div class="ul_flx_mai">
                            <ul>
                            <li>
                                <a href="{{ route('local_seo_company') }}">Local SEO</a></li>
                                </li>
                                <li>
                                <a href="{{ route('shopify_seo') }}">eCommerce SEO</a>
                                </li>
                                <li>
                                <a href="{{ route('social_media_marketing') }}">Social Media Marketing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
