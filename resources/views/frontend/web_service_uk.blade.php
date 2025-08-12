@extends("layouts.front.app")
@if (!empty($metaTitle))
@section("title", $metaTitle)
@else
@section("title", "Digi Rush Solutions | A Complete Web Solutions Agency in India")
@endif
@if (!empty($metaDescription))
@section("description", $metaDescription)
@else
@section("description", "Digi Rush Solutions | Find The Perfect Solution For Your Business")
@endif
@if (!empty($metaKey))
@section("keywords", $metaKey)
@else
@section("keywords", "Business, marketing, seo")
@endif
@section("content")
<section class="page-header" style="background-image: url({{ custom_asset('front_assets/img/united_kingdom_banner.png')}});">
   <div class="page-header-shape"></div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-7">
            <div class="page-header-info">
               <h1>United Kingdom (UK) </h1>
               <p>Digi Rush Solutins is the best Digital Marketing, Web Designing and Developemnt Agency in the UK.</p>
               <div class="btn_digital">
                  <a href="{{ route('contact') }}" class="default-btn"> Hire Now </a>
               </div>
            </div>
         </div>
         <div class="col-md-5">
                <div class="main_subscription_form  new_digital_form">
                    <div class="under_form_sestion">
                        <!-- <h2>Get Your Quote Now</h2> -->
                        <div class="main_gif_heading">
          <img src="{{custom_asset('front_assets/img/40_GIF.gif')}}" alt="" style="height: 160%;width: 100%;
    max-width: 148px;
   ">
          <h2>Upgrade Your Online Presence Today! </h2>
        </div>
                        <form method="post" action="{{ route('seoform.submit') }}" id="contact-form">
                            @csrf
                            <input type="hidden" name="city_name" value="digital_marketing">
                            <input type="hidden" name="city_name" value="digital_marketing_uk">
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
                            <div class="form-field">
                                <button id="submit" class="default-btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
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
                <h2>Welcome to Digi Rush Solutions -<br> All in One Solution in the UK</h2>
                </div>
                <div class="about-content">
                <p>Welcome to Digi Rush Solutions – Top rated digital marketing, web designing and development
                    agency in the UK. We are a team of passionate digital marketing and web design & development
                    professionals who are passionate about helping small and medium-sized businesses succeed in the
                    UK market. We believe in the value of a well-thought-out online strategy and provide a full
                    range of services that are designed to: 
                </p>
                <ul>
                    <li>
                        <p>Strengthen your online visibility and make it easy for your audience to find you</p>
                    </li>
                    <li>
                        <p>Increase high-quality website traffic and convert traffic into leads and sales</p>
                    </li>
                    <li>
                        <p>Achieve your unique marketing objectives, such as brand recognition, lead generation or
                            increased sales
                        </p>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="default-btn">GET STARTED</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="about-thumb">
                  <img src="{{ custom_asset('front_assets/img/seos.webp')}}" alt="img">
                </div>
            </div>
      </div>
   </div>
</section>
<section class="service-section bg-grey padding uk_main_paddin">
   <div class="corner-pattern"></div>
   <div class="corner-pattern bottom"></div>
   <div class="arrow-direction"></div>
    <div class="container">
        <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
            <h2>Digital Marketing Services <br>in the UK</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-item service_box">
                    <div class="img_pay_newt">
                        <img src="{{ custom_asset('front_assets/img/PPC-1.png')}}" alt="Pay Per Click">
                    </div>
                    <h4>PPC (Pay Per Click)</h4>
                    <p>
                        Pay-per-click (PPC) is one of the most popular digital marketing techniques in the United
                        Kingdom (UK). It’s when you run targeted ads on Google, Bing and any other search engines, as
                        well as on social media. You’re only paid when someone clicks your ad.
                    </p>
                    <div class="btn_read_mo">
                        <a href="{{ route('ppc_expert') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-item service_box">
                    <div class="img_pay_newt">
                        <img src="{{ custom_asset('front_assets/img/SEO.png')}}" alt="Search Engine Optimization">
                    </div>
                    <h4>SEO (Search Engine Optimization)</h4>
                    <p>
                        SEO is the process of improving the website's online presence or visibility in order to rank
                        higher in search engines for specific keywords. The higher your website’s ranking in SERPs, the
                        more users in the UK are likely to discover your business when looking for your products or
                        services.
                    </p>
                    <div class="btn_read_mo">
                        <a href="{{ route('seo_company') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box">
                        <div class="img_pay_newt">
                            <img src="{{ custom_asset('front_assets/img/SMM-SMO.png')}}" alt="Social Media Marketing">
                        </div>
                        <h4>SMM (Social Media Marketing)</h4>
                        <p>
                            SMM is the use of social media platforms such as Facebook, Twitter, Instagram and more to reach
                            your target audience. SMM involves creating content, running advertising, and engaging with your
                            audience to increase brand awareness, website traffic, lead generation and sales.
                        </p>
                        <div class="btn_read_mo">
                            <a href="{{ route('social_media_marketing') }}">Read More</a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h2 class="wen_weee">Web Services in the UK</h2>
            </div>
            <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-item service_box">
                <div class="img_pay_newt">
                    <img src="{{ custom_asset('front_assets/img/Web-Designing.png')}}" alt="Web Designing">
                </div>
                <h4>Web Designing</h4>
                <p>
                    Web design creates easy-to-use websites that work seamlessly on any device. Design is accessible
                    and responsive to local preferences, while meeting accessibility standards. The emphasis remains
                    on providing a positive UX that appeals to audiences.
                </p>
                <div class="btn_read_mo">
                    <a href="{{ route('web_designing') }}">Read More</a>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-item service_box">
                    <div class="img_pay_newt">
                        <img src="{{ custom_asset('front_assets/img/Web-Development.png')}}" alt="Web Development">
                    </div>
                    <h4>Web Development</h4>
                    <p>
                        Web development is the process of creating a website. It involves creating user interfaces
                        (UI’s) and programming functions behind the scenes. A front-end developer focuses on visual
                        effects, while a back-end developer deals with data and server communications.
                    </p>
                    <div class="btn_read_mo">
                        <a href="{{ route('web_development') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="get_free_consulation  padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-7">
            <div class="under_txt_consultation">
               <div class="main_consulant">
                  <span>Digi Rush Solutions</span>
                  <h2>Get Free Consultation LET'S START . . .</h2>
               </div>
            </div>
         </div>
         <div class="col-md-5">
                <div class="main_subscription_form  new_digital_form">
                    <div class="under_form_sestion">
                        <h2>Request a Callback</h2>
                        <form method="post" action="https://digirushsolutions.com/seoform-submit" id="contact-form">
                            <input type="hidden" name="_token" value="Sgw8cH9uJYwjHapC85anSGElp3gTDgv1fOeYc5Th" autocomplete="off">  
                            <input type="hidden" name="city_name" value="digital_marketing">
                            <input type="hidden" name="type" value="digital_web_services_uk">
                            <div class="form-field">
                                <input type="text" id="fname" name="fname" placeholder="Full Name" value="">
                            </div>
                            <div class="form-field">
                                <input type="email" id="email" name="email" placeholder="Email" value="">
                            </div>
                            <div class="form-field">
                                <input type="text" id="city" name="city" placeholder="City" value="">
                            </div>
                            <div class="form-field">
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <select name="countryCode">
                                        <option data-countrycode="IN" value="91">Ind
                                            (+91)
                                        </option>
                                        <option data-countrycode="UK" value="44">UK
                                            (+44)
                                        </option>
                                        <option data-countrycode="US" value="1">US (+1)
                                        </option>
                                    </select>
                                </div>
                                <input type="text" id="phone" name="number" minlength="10" maxlength="10" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-field">
                                <input type="text" id="url" name="message" placeholder="Your Website" value="">
                                <small style="color: grey; font-size: 14px;">Example: www.google.com (Full Domain Name)</small> 
                            </div>
                            <div class="form-field">
                                <button id="submit" class="default-btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
         </div>
      </div>
   </div>
</section>
@endsection