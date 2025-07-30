@extends('layouts.front.app')
@section('content')
<section class="page-header page-header-secnd" style="background-image: url({{ custom_asset('front_assets/img/web_service_bannner_provide.png')}});">
   <div class="page-header-shape"></div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-7">
            <div class="page-header-info">
               <h1>Best Web Services Provider Agency in India</h1>
               <p>Get Customized Web Services From the Best Web Service Agency In India.</p>
               <div class="btn_digital">
                  <a href="{{ route('contact') }}" class="default-btn"> Hire Now </a>
               </div>
            </div>
         </div>
         <div class="col-md-5">
            <div class="main_subscription_form  new_digital_form">
               <div class="under_form_sestion">
                  <h2>Get Your Quote Now</h2>
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
               <span class="sub-heading">Best Web Services</span>
               <h2>Is it Necessary to Have a Web Service through Best Web Service Agency?</h2>
            </div>
            <div class="about-content">
               <p>Yes. Having a website as a web service is essential because it serves as a virtual storefront for businesses, organizations, and individuals. It provides a platform to showcase products, services, or information to a global audience 24/7. A website enhances credibility, boosts brand visibility, facilitates customer interaction, and enables online transactions, ultimately driving growth and success.</p>
               <p>The web service definition itself says that it is a technology that allows different software applications to communicate and exchange data over the Internet. It acts as a middleman, enabling different systems and platforms to interact and share information seamlessly. </p>
               <p>As one of the best web service agencies and <a href="{{ route('web_services') }}">best web service providers,</a> we leverage standardized protocols and formats, making it easier for diverse applications to work together effectively.</p>
               <a href="contact.php" class="default-btn">GET STARTED</a>
            </div>
         </div>
         <div class="col-lg-6 sm-padding">
            <div class="about-thumb">
               <img src="{{ custom_asset('front_assets/img/webserv.jpg')}}" alt="best web service providers">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="progress-section bg-grey padding">
   <div class="corner-pattern"></div>
   <div class="corner-pattern bottom"></div>
   <div class="container">
      <div class="row align-items-end">
         <div class="col-lg-6 col-md-12 col-12">
            <div class="section-heading mb-40">
               <h4 class="sub-heading"></h4>
               <h2> Why Choose Us, for Your Web Services?</h2>
            </div>
            <p>
               Digi Rush Solutions specializes in developing websites for businesses. Our team of skilled developers and designers will work with you to build a website from the beginning, using the latest technologies and standard frameworks. We focus on creating interactive websites that will help your business grow and succeed.
            </p>
            <p>As the best web service provider agency in India, we also function as a premier <a href="{{ route('web_development') }}">web development</a> and <a href="{{ route('web_designing') }}">design agency,</a> offering customized web services. This includes creating and designing websites that are optimized for search engines (SEO) and social media (SMO). Our commitment to you is to design a website that not only maximizes your return on investment (ROI) but also delivers the best possible outcomes for your business.</p>
         </div>
         <div class="col-lg-6 col-md-12 col-12">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-6 ">
                  <div class="industries_box service-item">
                     <span class="reting">165%</span>
                     <p class="h_box">AVERAGE SEO TRAFFIC INCREASE AFTER 1 YEAR </p>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-6 ">
                  <div class="industries_box service-item">
                     <span class="reting">70% </span>
                     <p class="h_box">AVERAGE ROI INCREASE FROM SEO </p>
                  </div>
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-lg-6 col-md-6 col-6 ">
                  <div class="industries_box service-item">
                     <span class="reting">326+ </span>
                     <p class="h_box">SEO PROJECTS COMPLETED </p>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-6 ">
                  <div class="industries_box service-item">
                     <span class="reting">35% </span>
                     <p class="h_box">CONVERSION RATE INCREASE </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="service-section bg-grey padding marketing_service_offer">
   <div class="corner-pattern"></div>
   <div class="corner-pattern bottom"></div>
   <div class="arrow-direction"></div>
   <div class="container">
      <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
         <span class="sub-heading white">Our Services</span>
         <h2>Our Services</h2>
      </div>
      <div class="row">
            <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-item service_box">
                <h4>UX/UI Optimized Websites</h4>
                <p>As website development providers, our team takes a holistic approach and provides you with
                    creative and eye-catching UX/UI-optimized websites. Besides increasing your website's
                    conversions, it also helps you to improve your SEO rankings in search engines. Moreover, this
                    development process is cost-effective, which will increase your revenue in the long run as a
                    result of your investment.
                </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                <div class="service-item service_box">
                <h4>API Development</h4>
                <p>The Digi Rush team employs API developers who provide complete solutions to our clients that assist them in augmenting their business and effectively conveying a company's essence through websites that reflect the essence of their company. As one of the best web service providers, we offer a wide range of API development services, including third-party API integration, API testing automation, API consulting, and many more, utilizing the latest technologies.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                <div class="service-item service_box">
                <h4>Landing Pages</h4>
                <p> A landing page is one of the most significant parts of a website. As a result, it helps
                    businesses turn visitors into leads in a more efficient way. With Digi Rush experts, you're
                    guaranteed that your company's landing pages will feature all the essential elements, such as
                    headings, images, videos, call-to-action buttons, and customized content that will boost the
                    growth of your company.
                </p>
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
                                <a href="{{ route('web_development') }}">Web Development</a>
                            </li>
                            <li>
                                <a href="{{ route('web_designing') }}">Web Design </a>
                            </li>
                            <li>
                            <a href="{{ route('digital_marketing') }}">Digital Marketing</a>
                            </li>
                            <li>
                            <a href="{{ route('seo_company') }}">SEO Services</a>
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
                            <a href="{{ route('ppc_expert') }}">PPC Service</a>
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