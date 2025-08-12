@extends('layouts.front.app')
@section('content')

   <section class="page-header" style="background-image: url({{ custom_asset('front_assets/img/seo_banner.png')}});">
      <div class="page-header-shape"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="page-header-info">
            <h1>Best Web Development</h1>
            <p>Digi Rush Solutions is the best SEO company in India, offering expert services to boost your
               rankings, drive traffic, and grow your online presence.</p>
            <div class="btn_digital">
               <a href="{{route('contact')}}" class="default-btn">Hire Now</a>
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
               <span class="sub-heading">Web Development Agency</span>
               <h2>How We Make Your Website Stand Out from the Competition?</h2>
            </div>
            <div class="about-content">
               <p>A company’s website is incredibly valuable. However, simply putting together a website with basic
                 information is no longer enough. It’s important to understand the significance of web development. A
                 visually appealing and user-friendly website will attract visitors and encourage them to stay longer,
                 increasing the chances of them reaching out to you.</p>
               <p>If your website doesn’t load quickly or doesn’t have an appealing design, visitors will leave without
                 hesitation. In such cases, it’s crucial to reach out to a <a href="{{ route('web_development') }}">web
                   development company in India</a> that can provide advanced web development services. As a custom
                 web development company, we ensure your website performs well and looks attractive to retain visitors.
                 Trust the best website developer in India to elevate your online presence.</p>
               <a href="{{route('contact')}}" class="default-btn">GET STARTED</a>
            </div>
          </div>
          <div class="col-lg-6 sm-padding">
            <div class="about-thumb">
               <img src="{{ custom_asset('front_assets/img/programing_web.jpg')}}"
                 alt="Best Web Development Agency in India">
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
               <h2>We Are Transforming Ideas Into Reality</h2>
            </div>
            <p>Digi Rush Solutions, a web development company in India, has excelled in creating advanced web portals
               for various industries, including eCommerce. We also offer internship programs for aspiring web
               developers. Our front-end web developer agency utilizes up-to-date technologies like Laravel and
               CodeIgniter to deliver tailored, adaptable, and contemporary websites at affordable prices.
            </p>
            <p>Digi Rush Solutions, the best agency for web development, believes in providing comprehensive solutions
               that cover all aspects of <a
                 href="https://digirushsolutions.com/blogs/which-are-the-best-trends-in-web-development-for-2023">web
                 development</a>. When you choose us, you’ll have access to customized development processes and
               scalable web applications that deliver clear and impressive results. As a full stack developer company,
               our team of professionals ensures your website operates smoothly and efficiently, keeping a close eye on
               its performance to safeguard your business’s reputation. For specialized projects, you can also hire a
               core PHP developer from our expert team. Benefit from our extensive expertise today as one of the <a
                 href="{{ route('web_services') }}">best web service providers</a>!
            </p> <a href="{{route('contact')}}" class="default-btn btn_response">GET A FREE CONSULTATION</a>
          </div>
          <div class="col-lg-6 col-md-12 col-12">
            <div class="main_subscription_form  new_digital_form new_digital_formpd">
               <div class="under_form_sestion">
                 <!-- <h2>Get FREE Website Audit</h2> -->
                 <div class="main_gif_heading">
                   <img src="{{custom_asset('front_assets/img/40_GIF.gif')}}" alt="" style="height: 160%;width: 100%;
      max-width: 148px;
    ">
                   <h2>Upgrade Your Online Presence Today! </h2>
                 </div>
                 <form method="post" action="{{ route('seoform.submit') }}" id="contact-form">
                   @csrf
                   <input type="hidden" name="city_name" value="company">
                   <div class="form-field">
                     <input type="text" id="fname" name="fname" placeholder="Full Name" value="{{ old('fname') }}">
                     @error('fname')
                   <div class="error-message" style="color:red;">{{ $message }}</div>
                 @enderror
                   </div>
                   <div class="form-field">
                     <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                     @error('email')
                   <div class="error-message" style="color:red;">{{ $message }}</div>
                 @enderror
                   </div>
                   <div class="form-field">
                     <input type="text" id="city" name="city" placeholder="City" value="{{ old('city') }}">
                     @error('city')
                   <div class="error-message" style="color:red;">{{ $message }}</div>
                 @enderror
                   </div>
                   <div class="form-field">
                     <div class="input-group">
                        <div class="input-group-prepend">
                          <select name="countryCode">
                            <option data-countryCode="IN" value="91" {{ old('countryCode') == '91'
      ? 'selected' : '' }}>Ind
                              (+91)</option>
                            <option data-countryCode="UK" value="44" {{ old('countryCode') == '44'
      ? 'selected' : '' }}>UK
                              (+44)</option>
                            <option data-countryCode="US" value="1" {{ old('countryCode') == '1'
      ? 'selected' : '' }}>US (+1)
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

   <section class="web_logo_development  padding">
      <div class="container">

        <div class="section-heading mb-40">
          <h2>Technologies for Advanced Web </h2>
        </div>
        <!-- Frontend -->
        <div class="tech-category">
          <h5 class="tech-title">Frontend</h5>
          <div class="row">
            <div class="col-md-2 col-6 tech-box"><img
                 src="{{ custom_asset('front_assets/img/Angular-Js-by-Acmo.webp') }}" alt=""> AngularJS</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/react.webp') }}" alt="">
               React</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/javascript.webp') }}"
                 alt="">JavaScript</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/html5.webp') }}" alt="">
               HTML5</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/css.webp') }}" alt=""> CSS
            </div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/saas.webp') }}" alt="">
               SASS</div>
          </div>
        </div>

        <!-- Backend -->
        <div class="tech-category">
          <h5 class="tech-title">Backend</h5>
          <div class="row">
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/php.webp') }}" alt=""> PHP
            </div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/c_main_play.webp') }}"
                 alt=""> C#</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/node.webp') }}" alt="">
               NodeJS</div>
          </div>
        </div>

        <!-- Framework -->
        <div class="tech-category">
          <h5 class="tech-title">Framework</h5>
          <div class="row">
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/express.webp') }}" alt="">
               Express.js</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/laravel.png') }}" alt="">
               Laravel</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/ACMOD.webp') }}" alt="">
               YII2</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/symfony.webp') }}" alt="">
               Symfony</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/aspnet.webp') }}" alt="">
               ASP.net MVC</div>
          </div>
        </div>

        <!-- CMS -->
        <div class="tech-category">
          <h5 class="tech-title">CMS</h5>
          <div class="row">
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/mainly.webp') }}" alt="">
               OpenCart</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/wordpress.webp') }}"
                 alt=""> WordPress</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/jommla.webp') }}" alt="">
               Joomla</div>
          </div>
        </div>

        <!-- Database -->
        <div class="tech-category">
          <h5 class="tech-title">Database</h5>
          <div class="row">
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/mysqul.webp') }}" alt="">
               MySQL</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/postgresql.webp') }}"
                 alt=""> PostgreSQL</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/mongodb.webp') }}" alt="">
               MongoDB</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/elasticsearch.webp') }}"
                 alt=""> Elasticsearch</div>
            <div class="col-md-2 col-6 tech-box"><img src="{{ custom_asset('front_assets/img/redis.webp') }}" alt="">
               Redis</div>
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
          <span class="sub-heading white"> Web Development</span>
          <h2>Our Core Web Development <br>Services</h2>
          <p class="quality_main">Your website is a business tool intended to deliver measurable results (website
            traffic, leads and sales). This is why Digi Rush web design solutions are centered around delivering on
            this primary objective.
          </p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
            <div class="service-item service_box best_box">
               <h4>eCommerce Development</h4>
               <p>As a leading eCommerce website development company, Dish Rush ensures complete success for your
                 eCommerce endeavors by ensuring complete adherence to your requirements. As a result of our extensive
                 experience, we design websites that are unique and engaging, providing your customers with a seamless
                 online shopping experience.
               </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
            <div class="service-item service_box best_box">
               <h4>WordPress Development</h4>
               <p>As a WordPress website development company, we highlight the wide range of benefits that WordPress
                 offers to its users. With it, developers can create the perfect platform for you using the extensive
                 options available. With our customized WordPress development services, companies can gain complete
                 control over their business processes and functions. Using CMS development features, we build a
                 website that is easy to maintain and meets all industry standards.
               </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
            <div class="service-item service_box best_box">
               <h4>PHP Core Development
               </h4>
               <p>
                 Among the most useful programming languages, PHP offers excellent compatibility with other
                 technologies. Digi Rush is an organization committed to the development of top-quality PHP websites
                 that are tailored according to each customer's project requirements. From us, you can hire core PHP
                 developers who adhere to SEO guidelines and optimize the website and PHP applications so they are more
                 visible in search engine results.
               </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
            <div class="service-item service_box best_box">
               <h4>Shopify Development
               </h4>
               <p>
                 Looking for a Shopify website development company that can build robust, next-generation, and
                 customizable online stores? With our Shopify developers, we are here to tailor our services to
                 your needs and take your business to the next level. Hire us and take advantage of our Shopify
                 expertise.
               </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
            <div class="service-item service_box best_box">
               <h4>Laravel Development</h4>
               <p>
                 As a most reputed Laravel Development Company, we unleash the power of the Laravel Framework and
                 help your business to reach new heights. We have Laravel Developers that have extensive
                 experience as they work with a variety of industries to deliver robust solutions. Hire us now!
               </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
            <div class="service-item service_box best_box">
               <h4>Full Stack Web Development
               </h4>
               <p>Hiring a full stack developer company offers many advantages—from quicker development time to lower
                 development costs, making them a popular choice for many companies. From our global talent network,
                 Digi Rush has a team of full-stack web developers, designers, and product managers tailored to meet
                 your business requirements.
               </p>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-half-color">
        <div class="shape-pattern"></div>
      </div>
   </section>


   <section class="blog-section faq-page bg-grey padding">
      <div class="container">
        <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
          <span class="sub-heading white">FAQ</span>
          <h2>Frequently Asked Questions
          </h2>
        </div>
        <div class="row">
          <div class="col-lg-12 sm-padding">
            <ul class="tab-list on_page_optimization  targeted_jquery">
               <div class="accordion">
                 <div class="accordion-section">
                   <a href="#accordion-2" class="accordion-section-title"> Why do I need a website development
                     company? <span class="plus">+</span><span class="minus">-</span></a>
                   <div id="accordion-2" class="accordion-section-content" style="display: none;">
                     <p>The all-in-one solution to rank your website and get organic traffic is the
                        expertise, knowledge and skills of the website development company. Come, join hands
                        with Digi Rush, the most experienced and leading marketing team and grow your
                        business and get more clients converted into leads.
                     </p>
                   </div>
                 </div>
                 <div class="accordion-section">
                   <a href="#accordion-3" class="accordion-section-title">How long does it take to build a website?
                     <span class="plus">+</span><span class="minus">-</span></a>
                   <div id="accordion-3" class="accordion-section-content" style="display: none;">
                     <p>Depending on various factors such as the complexity of the website, the number of
                        pages, the functionality required and the expertise of the person, the duration of
                        the website depends. Digi Rush generally provides the delivery of the website based
                        on the factors such as the availability of content, the quality of the design and
                        the responsiveness of the client in approvals and decisions.
                     </p>
                   </div>
                 </div>
                 <div class="accordion-section">
                   <a href="#accordion-4" class="accordion-section-title"> What are the sources employed to build a
                     website? <span class="plus">+</span><span class="minus">-</span></a>
                   <div id="accordion-4" class="accordion-section-content" style="display: none;">
                     <p>The most important source is a web hosting service, which provides the space where
                        the website will be stored and made available to the public. Some other important
                        sources are domain name registrars, Content management systems (CMS) such as
                        WordPress. Web development tools like HTML, CSS, and JavaScript are used to design
                        and develop the website’s visual appearance and functionality.
                     </p>
                   </div>
                 </div>
                 <div class="accordion-section">
                   <a href="#accordion-5" class="accordion-section-title"> Can you provide responsive web development
                     services?<span class="plus">+</span><span class="minus">-</span></a>
                   <div id="accordion-5" class="accordion-section-content" style="display: none;">
                     <p>Yes, our website development services do involve the process of creating websites
                        that are optimized for different devices and screen sizes which ensures that a
                        website is easy to use and navigate on any device. Digi Rush ensures to provide you
                        with the best responsive website services, as it is an essential aspect of modern
                        web design and development.
                     </p>
                   </div>
                 </div>
                 <div class="accordion-section">
                   <a href="#accordion-6" class="accordion-section-title">Is
                     it possible for me to edit my website on my own?<span class="plus">+</span><span
                        class="minus">-</span></a>
                   <div id="accordion-6" class="accordion-section-content" style="display: none;">
                     <p>Yes, you can edit your website on your own, if your website was created using a CMS
                        such as WordPress.If your website was custom-built, you may need to have some
                        knowledge of HTML, CSS, and JavaScript to make changes to the code.
                     </p>
                   </div>
                 </div>
               </div>
            </ul>
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
                 <h2>Top Countries</h2>
               </div>
               <div class="ul_flx_mai">
                 <ul>
                   <li>
                     <a href="javascript:void(0)">Canada</a>
                   </li>
                   <li>
                     <a href="javascript:void(0)">Australia </a>
                   </li>
                   <li>
                     <a href="{{ route('web_service_uk') }}">United Kingdom (UK)</a>
                   </li>
                   <li>
                     <a href="javascript:void(0)">United States of America (USA)</a>
                   </li>
                 </ul>
               </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="under_top_country">
               <div class="heading_canada">
                 <h2>Top Indian Cities</h2>
               </div>
               <div class="ul_flx_mai">
                 <ul>
                   <li>
                     <a href="{{ route('seo_agency_chandigarh') }}">SEO Agency in Chandigarh</a>
                   </li>
                   <li>
                     <a href="{{ route('seo_agency_delhi') }}">SEO Agency in Delhi (NCR)</a>
                   </li>
                   <li>
                     <a href="{{ route('seo_agency_jaipur') }}">SEO Agency in Jaipur</a>
                   </li>
                   <li>
                     <a href="{{ route('seo_agency_bangalore') }}">SEO Agency in Bangalore </a>
                   </li>
                   <li>
                     <a href="{{ route('seo_agency_in_pune') }}">SEO Agency in Pune </a>
                   </li>
                 </ul>
               </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="under_top_country mb-0">
               <div class="heading_canada">
                 <h2>Top Worldwide Cities</h2>
               </div>
               <div class="ul_flx_mai">
                 <ul>
                   <li>
                     <a href="javascript:void(0)">SEO Agency in London</a>
                   </li>
                   <li>
                     <a href="javascript:void(0)">SEO Agency in Sydney</a>
                   </li>
                   <li>
                     <a href="javascript:void(0)">SEO Agency in Melbourne</a>
                   </li>
                   <li>
                     <a href="javascript:void(0)">SEO Agency in Washington D.C. </a>
                   </li>
                   <li>
                     <a href="javascript:void(0)">SEO Agency in Toronto</a>
                   </li>
                 </ul>
               </div>
            </div>
          </div>

        </div>
      </div>
   </section>

@endsection