@extends('layouts.front.app')
@section('content')



  

<section class="banner-slider owl-carousel owl-theme">
  <div class="banner-slide">
    <h1 class="animate__animated animate__fadeInDown">Website & Mobile</h1>
    <h2 class="animate__animated animate__fadeInDown animate__delay-1s">App Development</h2>
    <p class="animate__animated animate__fadeInUp animate__delay-2s">
      Transforming ideas into intuitive digital experiences. Expert website and mobile app development services tailored to your needs.
    </p>

    <div class="d-flex justify-content-center flex-wrap mt-4 animate__animated animate__fadeInUp animate__delay-3s">
      <a href="#" class="btn btn-custom btn-read">≡ Read More</a>
      <a href="#" class="btn btn-custom btn-contact"><i class="fas fa-phone"></i>Contact Us</a>
    </div>

    <div class="floating-tags">
         <span class="tag1 service-tag animate__animated animate__zoomIn animate__delay-1s">Web Design</span>
         <span class="tag2 service-tag animate__animated animate__zoomIn animate__delay-1s">Web Development</span>
          <span class="tag8 service-tag animate__animated animate__zoomIn animate__delay-1s">Product Design</span>
         <span class="tag3 service-tag animate__animated animate__zoomIn animate__delay-2s">App Development</span>
         <span class="tag4 service-tag animate__animated animate__zoomIn animate__delay-2s">Web Services</span>
         <span class="tag5 service-tag animate__animated animate__zoomIn animate__delay-3s">Local Services</span>
         <span class="tag6 service-tag animate__animated animate__zoomIn animate__delay-3s">PPC Services</span>
         <span class="tag7 service-tag animate__animated animate__zoomIn animate__delay-4s">Logo Design</span>
        
    </div>
  </div>

   <div class="banner-slide">
    <h1 class="animate__animated animate__fadeInDown">Website & Mobile22</h1>
    <h2 class="animate__animated animate__fadeInDown animate__delay-1s">App Development</h2>
    <p class="animate__animated animate__fadeInUp animate__delay-2s">
      Transforming ideas into intuitive digital experiences. Expert website and mobile app development services tailored to your needs.
    </p>

    <div class="d-flex justify-content-center flex-wrap mt-4 animate__animated animate__fadeInUp animate__delay-3s">
      <a href="#" class="btn btn-custom btn-read">≡ Read More</a>
      <a href="#" class="btn btn-custom btn-contact">📞 Contact Us</a>
    </div>

    <div class="floating-tags">
         <span class="tag1 service-tag animate__animated animate__zoomIn animate__delay-1s">Web Design</span>
         <span class="tag2 service-tag animate__animated animate__zoomIn animate__delay-1s">Web Development</span>
          <span class="tag8 service-tag animate__animated animate__zoomIn animate__delay-4s">Product Design</span>
         <span class="tag3 service-tag animate__animated animate__zoomIn animate__delay-2s">App Development</span>
         <span class="tag4 service-tag animate__animated animate__zoomIn animate__delay-2s">Web Services</span>
         <span class="tag5 service-tag animate__animated animate__zoomIn animate__delay-3s">Local Services</span>
         <span class="tag6 service-tag animate__animated animate__zoomIn animate__delay-3s">PPC Services</span>
         <span class="tag7 service-tag animate__animated animate__zoomIn animate__delay-4s">Logo Design</span>
        
    </div>
  </div>
</section>



<!-- 
<section class="hero-section page-header" style="background-image: url('public/front_assets/img/home_banner_slide_1.webp' );">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-7 col-md-12 col-12 sm-padding">
            <div class="hero-content ">
               <span><i class="las la-bolt"></i>Welcome To Digi Rush Solutions</span>
               <h1>Elevate Your Brand With the<span class="heder_main"> Best Website Design and Development </span>Company in India</h1>
               <p>Discover strategies to elevate your brand, enhance visibility and engage your audience effectively with the best website design and development company in India . Transform your marketing today!</p>
                  <div class="trust_pilot_logos">
                        <div class="img_logo_pilot"><a href="https://g.co/kgs/bD26grj"><img src="{{ custom_asset('front_assets/img/google- (1).webp') }}" alt="DigiRush"loading="lazy"></a> </div>
                        <div class="img_logo_pilot"><a href="https://www.upwork.com/agencies/1631222952270098432/"><img src="{{ custom_asset('front_assets/img/Upwork-logo.webp') }}" alt="DigiRush"loading="lazy"></a></div>
                        <div class="img_logo_pilot"> <a href="#"><img src="{{ custom_asset('front_assets/img/freelancer.webp') }}" alt="DigiRush" loading="lazy"></a></div>
                        <div class="img_logo_pilot"> <a href="https://www.trustpilot.com/review/digirushsolutions.com 
                         "><img src="{{ custom_asset('front_assets/img/visualhunter.webp') }}" alt="DigiRush" loading="lazy"></a></div>
                   </div>
               <div class="btn-holder">
                  <a href="{{route('contact')}}" class="default-btn">Get Started</a>
                  <a href="#" class="play-btn" data-bs-toggle="modal" data-bs-target="#videoModal">
                     <span class="play-icon">
                        <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg"viewBox="0 0 448 512">
                           <path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"></path>
                        </svg>
                     </span>
                     <span class="play-btn-txt">Watch Video</span>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-5 d-none d-lg-block">
            <div class="brands-circle">
               <div class="inner-icon">
                  <i class="lab la-hubspot"></i>
                  <i class="lab la-dribbble"></i>
               </div>
               <div class="center-icon"><img src="{{ custom_asset('front_assets/img/DigiRush_Solution.webp') }}" alt="DigiRush"loading="lazy">
               </div>
               <div class="outer-icon">
                  <i class=""><a href="{{route('web_development')}}"><img src="{{ custom_asset('front_assets/icon/app-development.webp') }}" alt="app-development" loading="lazy"></a></i>
                  <i class=""><a href="{{route('seo_company')}}"><img src="{{ custom_asset('front_assets/icon/seo.webp') }}" alt="seo" loading="lazy"></a></i>
                  <i class=""><a href="{{route('ppc_expert')}}"><img src="{{ custom_asset('front_assets/icon/pay-per-click.webp') }}" alt="pay-per-click" loading="lazy"></a></i>
                  <i class=""><a href="{{route('content_management')}}"><img src="{{ custom_asset('front_assets/icon/cms.webp') }}" alt="cms" loading="lazy"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->

<section class="our_partners padding">
   <div class="container">
      <div class="heading_our_partners">
         <h2>Our Partners</h2>
      </div>
      <div class="row">
         <div class="col-lg-2 col-md-4 col-sm-4 mb-2">
            <div class="patners_img">
               <img src="{{ custom_asset('front_assets/img/google.webp') }}"alt="digital_service" loading="lazy">
            </div>
         </div>
            <div class="col-lg-2 col-md-4 col-sm-4 mb-2">
            <div class="patners_img">
               <img src="{{ custom_asset('front_assets/img/Amazon-By-Acmo.webp') }}"alt="digital_service" loading="lazy">
            </div>
         </div>
            <div class="col-lg-2 col-md-4 col-sm-4 mb-2">
            <div class="patners_img">
               <img src="{{ custom_asset('front_assets/img/Zoho-By-Acmo.webp') }}"alt="digital_service" loading="lazy">
            </div>
         </div>
            <div class="col-lg-2 col-md-4 col-sm-4 mb-2">
            <div class="patners_img">
               <img src="{{ custom_asset('front_assets/img/Instamojo.webp') }}"alt="digital_service" loading="lazy">
            </div>
         </div>
            <div class="col-lg-2 col-md-4 col-sm-4 mb-2">
            <div class="patners_img">
               <img src="{{ custom_asset('front_assets/img/Razorpay-by-acmo-1.webp') }}"alt="digital_service" loading="lazy">
            </div>
         </div>
            <div class="col-lg-2 col-md-4 col-sm-4 mb-2">
            <div class="patners_img">
               <img src="{{ custom_asset('front_assets/img/Shopify-by-acmo.webp') }}"alt="digital_service" loading="lazy">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="testimonial-section-3 bg-grey padding">
   <div class="container">
      <div class="testimonial-carousel-wrapper">
         <div class="testimonial-carousel-3 testimonial-card">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="main_promo_delay">
                     <div class="promo-item">
                        <div class="promo-head">
                           <div class="promo-icon"><img src="{{ custom_asset('front_assets/img/digi_mar_src.png') }}"alt="digital_service" loading="lazy"></div>
                           <h3 class="digigiii">Digital Marketing Services</h3>
                        </div>
                        <div class="promo-content">
                           <p class="enhanceee">Enhance the brand's online presence, reach targeted audiences, and drive growth. </p>
                           <a href="{{route('digital_marketing')}}" class="read-more">Explore Services <span><i class="las la-long-arrow-alt-right"></i></span></a>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="main_promo_delay">
                     <div class="promo-item">
                        <div class="promo-head">
                           <div class="promo-icon"> <img src="{{ custom_asset('front_assets/img/digital_service_2.webp') }}" alt="PPC Services"  loading="lazy"></div>
                           <h3 class="digigi">PPC Services </h3>
                        </div>
                        <div class="promo-content">
                           <p class="enhanceee">Boost your ROI, designed to drive targeted traffic and generate leads for your business.</p>
                           <a href="{{route('ppc_expert')}}" class="read-more">Explore Services <span><i class="las la-long-arrow-alt-right"></i></span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="main_promo_delay">
                     <div class="promo-item">
                        <div class="promo-head">
                           <div class="promo-icon"> <img src="{{ custom_asset('front_assets/img/digital_service_3.webp') }}" alt="SEO Services" loading="lazy"></div>
                           <h3>SEO Services</h3>
                        </div>
                        <div class="promo-content">
                           <p>Increase your online search engine rankings (SEO) and traffic with our SEO services.</p>
                           <a href="{{route('seo_company')}}" class="read-more">Explore Services <span><i class="las la-long-arrow-alt-right"></i></span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="main_promo_delay">
                     <div class="promo-item">
                        <div class="promo-head">
                           <div class="promo-icon"> <img src="{{ custom_asset('front_assets/img/digital_service_4.webp') }}" alt="SMO/SMM Service" loading="lazy"></div>
                           <h3>SMO/SMM Services</h3>
                        </div>
                        <div class="promo-content">
                           <p>Maximize your social media presence through strategic SMO and SMM.</p>
                           <a href="{{route('social_media_marketing')}}" class="read-more">Explore Services <span><i class="las la-long-arrow-alt-right"></i></span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="main_promo_delay">
                     <div class="promo-item">
                        <div class="promo-head">
                           <div class="promo-icon"> <img src="{{ custom_asset('front_assets/img/digital_service_5.webp') }}" alt="Web Design" loading="lazy"></div>
                           <h3>Web Design</h3>
                        </div>
                        <div class="promo-content">
                           <p>Craft visually stunning and user-friendly websites with our expert web design services.</p>
                           <a href="{{route('web_designing')}}" class="read-more">Explore Services <span><i class="las la-long-arrow-alt-right"></i></span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="main_promo_delay">
                     <div class="promo-item">
                        <div class="promo-head">
                           <div class="promo-icon"> <img src="{{ custom_asset('front_assets/img/digital_service_6.webp') }}" alt="Web Devlopment" loading="lazy"></div>
                           <h3>Web Devlopment</h3>
                        </div>
                        <div class="promo-content">
                           <p>Transforming your digital dreams into functional realities, one line of code at a time. </p>
                           <a href="{{route('web_development')}}" class="read-more">Explore Services <span><i class="las la-long-arrow-alt-right"></i></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="section-heading-wrap mt-30">
         <div class="section-heading">
            <h4 class="sub-headingg"></h4>
         </div>
         <div class="carousel-navigation">
            <button class="carousel-button-prev"><i class="las la-long-arrow-alt-left"></i></button>
            <button class="carousel-button-next"><i class="las la-long-arrow-alt-right"></i></button>
         </div>
      </div>
   </div>
</section>
<section class="about-section padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 sm-padding wow fade-in-left" data-wow-delay="200ms">
            <div class="about-thumbs">
               <img src="{{ custom_asset('front_assets/img/new_img_main.webp') }}" alt="Project-img" loading="lazy">
               <div class="about-counter">
                  <h3><span class="odometer" data-count="1.5">00</span>k+</h3>
                  <span>Project Done</span>
               </div>
            </div>
         </div>
         <div class="col-lg-6 sm-padding wow fade-in-right" data-wow-delay="200ms">
            <div class="main_servicing_f">
               <div class="section-heading mb-20 about_phome sub_heading_response">
                  <span class="sub-heading">About Digi Rush Solutions</span>
                  <h2>Get to Know Digi Rush Solutions</h2>
               </div>
               <div class="about-content">
                  <p><a href="{{route('home')}}">Digi Rush Solutions</a> is a full service digital agency specializing as a digital marketing, web design and web development company in india. We are driven by
                     innovation and creativity and create custom solutions that elevate brands and promote online success. Our team combines digital marketing strategy, compelling web design, seamless website
                     development and results that exceed the expectations. </p>
                  <p>As we are a <a href="{{route('digital_marketing')}}">advertising agency in india,</a> we use variety of digital marketing techniques, such as keyword research, search engine optimisation
                     (SEO), pay-per-click (PPC), social media marketing and optimisation (SMM or SMO) and content marketing also, to increase brand awareness, target traffic, generate leads and optimize every
                     campaign to maximize impact and return on investment (ROI). </p>
                  <p>We also provide web design and development services. Elevate your brand with our expert web design and development services. We create visually stunning and user-friendly websites that drive
                     engagement and growth.</p>
                  <a href="{{route('about')}}" class="default-btn">More About Us</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class=" service-2 bg-dark padding service-section-respons">
   <div class="corner-pattern"></div>
   <div class="corner-pattern bottom"></div>
   <div class="container">
      <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
         <span class="sub-heading">Our Services</span>
         <h2 class="white">What We Offer</h2>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="200ms">
            <div class="service-card">
               <div class="service-head">
                  <div class="service-icon"> <img src="{{ custom_asset('front_assets/icon/content-strategy.webp') }}" alt="digital-marketing" loading="lazy"></div>
                  <h3>Digital Marketing</h3>
               </div>
               <div class="service-content">
                  <p>Digital marketing in india​ is crucial for any business's online presence, utilizing strategies like SEO, social media, and content marketing to boost brand visibility and engagement. By
                     targeting specific audiences, digital marketing drives traffic, increases conversions, and fosters growth, making it essential for measurable success in the digital world.ervices india </p>
                  <a href="{{ route('digital_marketing') }}" class="default-btn">Explore Services <span><i class="las la-long-arrow-alt-right"></i></span></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="200ms">
            <div class="service-card">
               <div class="service-head">
                  <div class="service-icon"> <img src="{{ custom_asset('front_assets/icon/pay-per-click-icoooo.webp') }}" alt="pay-per-click" loading="lazy"></div>
                  <h3>Pay Per Click (PPC)</h3>
               </div>
               <div class="service-content">
                  <p>Pay Per Click (PPC) is a powerful advertising model where businesses pay only when users click on their ads. As a leading PPC company in India, we help you drive targeted traffic to your website or landing pages, allowing for precise audience targeting and measurable results. With PPC, you can achieve immediate visibility, increase brand awareness, and generate high-quality leads
                     efficiently. </p>
                  <a href="{{ route('ppc_expert') }}" class="default-btn">Explore Services <span><i class="las la-long-arrow-alt-right"></i></span></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="200ms">
            <div class="service-card">
               <div class="service-head">
                  <div class="service-icon"> <img src="{{ custom_asset('front_assets/icon/shopping-online-icoo.webp') }}" alt="smm" loading="lazy"></div>
                  <h3>Social Media (SMM)</h3>
               </div>
               <div class="service-content">
                  <p>Social Media Marketing (SMM) is vital for businesses, enhancing brand visibility, engaging target audiences, and driving website traffic. As a provider of the best SMM services, we foster real-time interactions, community building, and customer loyalty. With precise analytics, our SMM solutions offer insights into customer behavior and campaign effectiveness, ensuring strategic and impactful marketing efforts. </p>
                  <a href="{{ route('social_media_marketing') }}" class="default-btn">Explore Services <span><i class="las la-long-arrow-alt-right"></i></span></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="200ms">
            <div class="service-card">
               <div class="service-head">
                  <div class="service-icon"> <img src="{{ custom_asset('front_assets/icon/seo.webp') }}" alt="seo" loading="lazy"></div>
                  <h3>SEO</h3>
               </div>
               <div class="service-content">
                  <p>SEO (Search Engine Optimization) is crucial for online visibility, enhancing your website’s ranking on search engines like Google, Bing, and Yahoo. With our low cost SEO services India, we drive
                     organic traffic and boost your online presence through strategic keyword research, on-page and off-page SEO, and quality content. SEO empowers businesses to reach their target audience and
                     achieve long-term success in the digital landscape.</p>
                  <a href="{{ route('seo_company') }}" class="default-btn">Explore Services <span><i class="las la-long-arrow-alt-right"></i></span></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="300ms">
            <div class="service-card">
               <div class="service-head">
                  <div class="service-icon">
                     <img src="{{ custom_asset('front_assets/icon/app-development.webp') }}" alt="web-devlopment" loading="lazy">
                  </div>
                  <h3>Web Development</h3>
               </div>
               <div class="service-content">
                  <p>
                     Web development is the craft of creating visually appealing and functional websites, blending
                     coding, design, and database management. As a leading custom web development company, our skilled
                     developers use languages like HTML, CSS, and JavaScript to build user-friendly sites that engage
                     visitors. From e-commerce platforms to blogs, web development brings ideas to life as dynamic
                     digital experiences.
                  </p>
                  <a href="{{ route('web_development') }}" class="default-btn">Explore Services <span><i
                           class="las la-long-arrow-alt-right"></i></span></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="400ms">
            <div class="service-card">
               <div class="service-head">
                  <div class="service-icon"><img src="{{ custom_asset('front_assets/icon/programming.webp') }}"
                        alt="web-design" loading="lazy"></i></div>
                  <h3>Web Design</h3>
               </div>
               <div class="service-content">
                  <p>Web design is the creative process of conceptualizing and visualizing websites, blending
                     aesthetics, user experience, and functionality to craft visually appealing and responsive
                     interfaces. When you hire a web designer, you gain access to skilled professionals who use tools
                     and techniques to create layouts, choose colors, select typography, and optimize the user journey,
                     resulting in captivating and intuitive websites.
                  </p>
                  <a href="{{ route('web_designing') }}" class="default-btn">Explore Services <span><i
                           class="las la-long-arrow-alt-right"></i></span></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="500ms">
            <div class="service-card">
               <div class="service-head">
                  <div class="service-icon">
                     <img src="{{ custom_asset('front_assets/icon/cms.webp') }}" alt="cms" loading="lazy">
                     </i>
                  </div>
                  <h3>Content Management</h3>
               </div>
               <div class="service-content">
                  <p>
                     A CMS is software that simplifies website creation and management, allowing users to easily add,
                     modify, and organize digital content without needing advanced technical skills. Platforms like
                     WordPress, Joomla, and Drupal empower businesses and bloggers to maintain dynamic websites,
                     streamlining publishing and enhancing user experiences.
                  </p>
                  <a href="#" class="default-btn">Explore Services <span><i class="las la-long-arrow-alt-right"></i></span></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="600ms">
            <div class="service-card">
               <div class="service-head">
                  <div class="service-icon">
                     <img src="{{ custom_asset('front_assets/icon/optimizing.webp') }}" alt="web-maintenance" loading="lazy"> 
                  </i>
                  </div>
                  <h3>Web Maintenance</h3>
               </div>
               <div class="service-content">
                  <p>Website maintenance is the ongoing process of ensuring a website remains functional, secure, and
                     up-to-date. It includes regular backups, software updates, bug fixes, and content updates. Proper
                     maintenance ensures websites run smoothly, offer a seamless user experience, and stay protected
                     from security threats, ensuring their longevity and effectiveness.</p>
                  <a href="#" class="default-btn">Explore Services
                     <span><i class="las la-long-arrow-alt-right"></i></span></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="700ms">
            <div class="service-card">
               <div class="service-head">
                  <div class="service-icon"><img src="{{ custom_asset('front_assets/icon/cloud-server.webp') }}"
                        alt="web-hosting" loading="lazy"></div>
                  <h3>Web Hosting</h3>
               </div>
               <div class="service-content">
                  <p>Web hosting offers server space, enabling websites to be accessible online. It stores website files
                     on a server, ensuring 24/7 availability. Reliable providers manage servers, offer technical
                     support, and ensure security, allowing websites to operate efficiently and maintain a continuous
                     online presence for individuals and organizations.</p>
                  <a href="#" class="default-btn">Explore Services
                     <span><i class="las la-long-arrow-alt-right"></i></span></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="featured_logos">
   <div class="container text-center my-5">
  <h2 class="featured-title"><span class="">Featured On</span></h2>
  <div class="row justify-content-center mt-4">
    <!-- Row 1 -->
    <div class="col-lg-2 col-md-3 col-sm-12">
      <div class="featured-badge bg-soft-blue">
    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 405.7 115'><circle cx='299.2' cy='75.3' r='13.3' fill='#E62415'/><path fill='#17313B' d='M105.6 0h17.6v113.5h-17.6zm81.7 78.5c0 17.6-14.4 19-18.8 19-11 0-12.6-10.3-12.6-16.5V37.1h-17.7v43.8c-.1 10.9 3 19.9 9 25.9a32.1 32.1 0 0 0 40.1 2.1v4.6H205V37.1h-17.7zm55.9-67.1h-17.7v25.7h-12.3v16.7h12.3v59.7h17.7V53.8h14.5V37.1h-14.5zM315 91.8c-4 3.6-9.3 5.6-15.1 5.6a21.6 21.6 0 0 1-22.2-22.3c0-12.9 9.1-21.9 22.2-21.9 5.7 0 11.1 1.9 15.2 5.5l2.8 2.4 12.4-12.4-3.1-2.8a40.6 40.6 0 0 0-27.3-10.3c-23 0-39.7 16.6-39.7 39.4a39 39 0 0 0 39.7 39.9c10.5 0 20.3-3.7 27.5-10.4l3-2.8-12.6-12.4zm81.7-48a32.1 32.1 0 0 0-40.1-2.1V0h-17.7v113.5h17.7V72.2c0-17.6 14.4-19 18.8-19 11 0 12.6 10.3 12.6 16.5v43.9h17.7V69.7a36 36 0 0 0-9-25.9M79.5 86.3A36.7 36.7 0 0 1 53 97.4c-20.5 0-35.4-16.1-35.4-38.2C17.6 37 32.5 20.9 53 20.9c9.9 0 19.3 3.9 26.4 11l2.8 2.8 12.3-12.3-2.7-2.8A54.2 54.2 0 0 0 52.9 3.4C22.8 3.4 0 27.4 0 59.3 0 91 22.8 115 52.9 115c14.9 0 28.7-5.8 38.9-16.3l2.7-2.8-12.2-12.5z'/></svg>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-12">
      <div class="featured-badge bg-soft-pink">
      <img src="{{ custom_asset('front_assets/img/ei_logo.svg') }}" alt="hindustan times"loading="lazy">
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-12">
      <div class="featured-badge bg-soft-yellow">
      <img src="{{ custom_asset('front_assets/img/tracxn-logo.svg') }}" alt="hindustan times"loading="lazy">
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-12">
      <div class="featured-badge bg-soft-blue">
      <img src="{{ custom_asset('front_assets/img/superb_logo.png') }}" alt="hindustan times"loading="lazy">
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-12">
      <div class="featured-badge bg-soft-yellow">
    <img src="{{ custom_asset('front_assets/img/ambition_box.png') }}" alt="hindustan times"loading="lazy">
      </div>
    </div>
   
  </div>
</div>
</section>

<section class="counter-section  counting_mainn bg-grey section-2 padding">
   <div class="container">
              <div class="section-heading mb-40">
                  <span class="sub-heading">Digi Rush Solutions</span>
                  <h2>Why choose Us</h2>
               </div>
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="main_servicing_fff">
       
               <ul class="feature-lists">
                  <li class="feature-item industries_box service-item">
                     <h3 class="reting">Customized Strategies</h3>
                     <span class="our_expertise_lot"><p>We make custom online marketing strategies for your specific
                        business aims and audience, making sure they work best for your brand.</p>
                     </span>
                  </li>
                  <li class="feature-item industries_box service-item">
                     <h3 class="reting">Expert Team</h3>
                     <span class="our_expertise_lot"><p>Our experts have a lot of experience and current knowledge in
                        different digital marketing and web services areas like SEO etc.</p>
                     </span>
                  </li>
                  <li class="feature-item industries_box service-item">
                     <h3 class="reting">Innovative Solutions</h3>
                     <span class="our_expertise_lot"><p>We use the newest tools and methods to provide advanced solutions
                        that help you stay ahead of the competition and improve your online visibility.</p>
                     </span>
                  </li>
                  <li class="feature-item industries_box service-item">
                     <h3 class="reting">Proven Results</h3>
                     <span class="our_expertise_lot"> <p>Our method, based on data and clear reports, leads to real
                        improvements in how people interact, how many people take action, and how much money you make,
                        all proven by clear numbers.</p>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="row">
               <div class="col-md-6">
                  <div class="feature-img img-1"><img src="{{ custom_asset('front_assets/img/feature-2.webp') }}"
                        alt="img" loading="lazy"></div>
                  <div class="experience-item">
                     <img src="{{ custom_asset('front_assets/img/award-symbol.webp') }}" alt="img" loading="lazy">
                     <h3>10+ Years <br>Experience!</h3>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="feature-img img-2"><img src="{{ custom_asset('front_assets/img/feature-2_3.webp') }}"
                        alt="img" loading="lazy"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="counter padding">
<div class="container">
<div class="counter_heading">
      <h2><b>Digirush</b> is a healthy mixture of</h2>
</div>
  <div class="circle-container">
    <div class="circle-item">
      <div class="circle red">100%</div>
      <div class="label">Passion</div>
    </div>
    <div class="circle-item">
      <div class="circle yellow">100%</div>
      <div class="label">Creativity</div>
    </div>
    <div class="circle-item">
      <div class="circle green">100%</div>
      <div class="label">Growth</div>
    </div>
    <div class="circle-item">
      <div class="circle blue">100%</div>
      <div class="label">Trust</div>
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
         <div class="col-lg-7 col-md-6 col-12 sm-padding wow fade-in-left" data-wow-delay="200ms">
            <div class="section-heading mb-40">
               <span class="sub-heading"> Avail Our Services Now </span>
               <h2 class="white">Hire Digi Rush Solutions the Best SEO Agency in India to Make Your Online Presence
                  Better.</h2>
               <p class="whiteeee">Let us optimize your website for success, ensuring you stand
                  out in the crowded <br> digital landscape.
               </p>
            </div>
         </div>
         <div class="col-lg-5 col-md-6 col-12 sm-padding wow fade-in-right" data-wow-delay="300ms">
            <div class="main_subscription_form">
               <div class="under_form_sestion">
                  <h2>Get FREE Consultation</h2>
                  <form action="{{ route('submit_home_form') }}" method="POST" id="myForm">
                     @csrf
                     <div class="form-field">
                        <input type="text" id="fname" name="fname" placeholder="Full Name" value="{{ old('fname') }}"
                           required>
                        @error('fname')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-field">
                        <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}"
                           required>
                        @error('email')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-field">
                        <input type="text" id="city" name="city" placeholder="City" value="{{ old('city') }}" required>
                        @error('city')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-field">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <select name="countryCode" id="">
                                 <option data-countryCode="IN" value="91" {{ old('countryCode')=='91' ? 'selected' : ''
                                    }}>Ind
                                    (+91)</option>
                                 <option data-countryCode="UK" value="44" {{ old('countryCode')=='44' ? 'selected' : ''
                                    }}>UK
                                    (+44)</option>
                                 <option data-countryCode="US" value="1" {{ old('countryCode')=='1' ? 'selected' : ''
                                    }}>US (+1)
                                 </option>
                              </select>
                           </div>
                           <input type="text" id="phone" name="number" minlength="10" maxlength="10"
                              class="form-control" value="{{ old('number') }}" required>
                        </div>
                        @error('number')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-field">
                        <select name="services" id="services">
                           <option value="" disabled selected>Select Services</option>
                           <option value="Digital Marketing (complete)" {{
                              old('services')=='Digital Marketing (complete)' ? 'selected' : '' }}>
                              Digital Marketing (complete)
                           </option>
                           <option value="Content Marketing & Management" {{
                              old('services')=='Content Marketing & Management' ? 'selected' : '' }}>
                              Content Marketing & Management
                           </option>
                           <option value="Keyword Research" {{ old('services')=='Keyword Research' ? 'selected' : '' }}>
                              Keyword Research
                           </option>
                           <option value="Pay Per Click" {{ old('services')=='Pay Per Click' ? 'selected' : '' }}>
                              Pay Per Click
                           </option>
                           <option value="Search Engine Optimization (SEO)" {{
                              old('services')=='Search Engine Optimization (SEO)' ? 'selected' : '' }}>
                              Search Engine Optimization (SEO)
                           </option>
                           <option value="Social Media Marketing" {{ old('services')=='Social Media Marketing'
                              ? 'selected' : '' }}>
                              Social Media Marketing
                           </option>
                           <option value="Web Hosting" {{ old('services')=='Web Hosting' ? 'selected' : '' }}>
                              Web Hosting
                           </option>
                           <option value="Web Design & Development" {{ old('services')=='Web Design & Development'
                              ? 'selected' : '' }}>
                              Web Design & Development
                           </option>
                           <option value="Web Maintenance" {{ old('services')=='Web Maintenance' ? 'selected' : '' }}>
                              Web Maintenance
                           </option>
                        </select>
                        @error('services')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-field">
                        <button id="submit" class="default-btn" type="submit">Submit<span></span></button>
                     </div>
                  </form>
               </div>
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
         <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/ecommerce.png') }}" alt="eCommerce" loading="lazy">
                     <span>eCommerce</span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/healthcare.png') }}" alt="Healthcare" loading="lazy">
                     <span>Healthcare</span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/travel.png') }}" alt="Travel" loading="lazy">
                     <span>Travel</span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/realestate.png') }}" alt="Real State" loading="lazy">
                     <span>Real State</span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/fitness.png') }}" alt="Fitness" loading="lazy">
                     <span>Fitness</span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/resturent.png') }}" alt="Restaurant" loading="lazy">
                     <span>Restaurant</span>
                  </div>
               </div>
                  <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/education-icpn.png') }}" alt="Restaurant" loading="lazy">
                     <span>Education</span>
                  </div>
               </div>
                  <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/entertainment.png') }}" alt="Restaurant" loading="lazy">
                     <span>Entertainment</span>
                  </div>
               </div>
                  <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/banking.png') }}" alt="Restaurant" loading="lazy">
                     <span>Banking</span>
                  </div>
               </div>
                  <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/transport.png') }}" alt="Restaurant" loading="lazy">
                     <span>Transport</span>
                  </div>
               </div>
                  <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/business.png') }}" alt="Restaurant" loading="lazy">
                     <span>Business</span>
                  </div>
               </div>
                  <div class="col-lg-3 col-md-3 col-6 mb-3">
                  <div class="industries_box service-item">
                     <img src="{{ custom_asset('front_assets/icon/job-carrier.png') }}" alt="Restaurant" loading="lazy">
                     <span>Job/Career</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="main_servicing_f">
               <div class="section-heading mb-10 about_phome sub_heading_response">
                  <span class="sub-heading"> Our Service Industries </span>
                  <h2>Industries We Serve</h2>
               </div>
               <p>Digi Rush Solutions serves a broad spectrum of industries with its extensive services. Whether you are
                  in technology, healthcare, finance, e-commerce, education or manufacturing, we are here to assist you
                  anytime. Regardless of your industry, we possess the expertise and skills to develop tailored
                  solutions that address your unique requirements and drive your success.
               </p>
               <p>From innovative software solutions for tech companies to advanced marketing strategies for healthcare
                  providers <a href="{{route('ecommerce_development')}}">ecommerce website development services</a> for
                  online retailers, engaging learning platforms for educational institutions and efficient manufacturing
                  processes for industrial companies, our extensive experience enables us to develop tailored solutions
                  that elevate your business within its industry. Regardless of the complexity or uniqueness of your
                  needs, we are committed to delivering excellence and ensuring your success.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="nav_tab_new_session padding">
   <div class="container">
      <div class="section-heading text-center wow fade-in-bottom" data-wow-delay="200ms"
         style="visibility: visible; animation-delay: 200ms; animation-name: fade-in-bottom;">
         <span class="sub-heading">Our Projects</span>
      </div>
      <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
         <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
               type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
         </li>
         <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
               type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Web Services</button>
         </li>
         <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
               type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Digital Marketing</button>
         </li>
         <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
               type="button" role="tab" aria-controls="pills-contact" aria-selected="false">SEO Services</button>
         </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
         <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://greatmedia.in/"> <img
                              src="{{ custom_asset('front_assets/img/greatmedia.webp') }}" alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://babycorngroup.com/"> <img
                              src="{{ custom_asset('front_assets/img/Babycorngroup.webp') }}" alt="img"
                              loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://srishtiadmissionpoint.com/"> <img src="{{ custom_asset('front_assets/img/Srishti-Admission-Point-Get-Admission-in-Top-Indian-Universities.webp') }}" alt="img" 
                        loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://persdc.org/"> <img src="{{ custom_asset('front_assets/img/Pragyan-Educational-Research-Skill-Development-Council.webp') }}" alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://digilearnclasses.com/"><img
                              src="{{ custom_asset('front_assets/img/Computer-Course-Digital-Marketing-Course-Coding-Classes.webp') }}"
                              alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://drrichagupta.com/"> <img
                              src="{{ custom_asset('front_assets/img/Gynaecologist-Near-Me.webp') }}" alt="img"
                              loading="lazy"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://greatmedia.in/"> <img
                              src="{{ custom_asset('front_assets/img/greatmedia.webp') }}" alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://babycorngroup.com/"> <img
                              src="{{ custom_asset('front_assets/img/Babycorngroup.webp') }}" alt="img"
                              loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://srishtiadmissionpoint.com/"> <img
                              src="{{ custom_asset('front_assets/img/Srishti-Admission-Point-Get-Admission-in-Top-Indian-Universities.webp') }}"
                              alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://persdc.org/"> <img
                              src="{{ custom_asset('front_assets/img/Pragyan-Educational-Research-Skill-Development-Council.webp') }}"
                              alt="img"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://digilearnclasses.com/"><img
                              src="{{ custom_asset('front_assets/img/Computer-Course-Digital-Marketing-Course-Coding-Classes.webp') }}"
                              alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://drrichagupta.com/"> <img
                              src="{{ custom_asset('front_assets/img/Gynaecologist-Near-Me.webp') }}" alt="img"
                              loading="lazy"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://greatmedia.in/"> <img
                              src="{{ custom_asset('front_assets/img/greatmedia.webp') }}" alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://babycorngroup.com/"> <img
                              src="{{ custom_asset('front_assets/img/Babycorngroup.webp') }}" alt="img"
                              loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://srishtiadmissionpoint.com/"> <img
                              src="{{ custom_asset('front_assets/img/Srishti-Admission-Point-Get-Admission-in-Top-Indian-Universities.webp') }}"
                              alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://persdc.org/"> <img
                              src="{{ custom_asset('front_assets/img/Pragyan-Educational-Research-Skill-Development-Council.webp') }}" loading="lazy"
                              alt="img"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://digilearnclasses.com/"><img
                              src="{{ custom_asset('front_assets/img/Computer-Course-Digital-Marketing-Course-Coding-Classes.webp') }}"
                              alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://drrichagupta.com/"> <img
                              src="{{ custom_asset('front_assets/img/Gynaecologist-Near-Me.webp') }}" alt="img"
                              loading="lazy"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://greatmedia.in/"> <img
                              src="{{ custom_asset('front_assets/img/greatmedia.webp') }}" alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://babycorngroup.com/"> <img
                              src="{{ custom_asset('front_assets/img/Babycorngroup.webp') }}" alt="img"
                              loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://srishtiadmissionpoint.com/"> <img
                              src="{{ custom_asset('front_assets/img/Srishti-Admission-Point-Get-Admission-in-Top-Indian-Universities.webp') }}"
                              alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://persdc.org/"> <img
                              src="{{ custom_asset('front_assets/img/Pragyan-Educational-Research-Skill-Development-Council.webp') }}"
                              alt="img"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://digilearnclasses.com/"><img
                              src="{{ custom_asset('front_assets/img/Computer-Course-Digital-Marketing-Course-Coding-Classes.webp') }}"
                              alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://drrichagupta.com/"> <img
                              src="{{ custom_asset('front_assets/img/Gynaecologist-Near-Me.webp') }}" alt="img"
                              loading="lazy"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://greatmedia.in/"> <img
                              src="{{ custom_asset('front_assets/img/greatmedia.webp') }}" alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://babycorngroup.com/"> <img
                              src="{{ custom_asset('front_assets/img/Babycorngroup.webp') }}" alt="img"
                              loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://srishtiadmissionpoint.com/"> <img
                              src="{{ custom_asset('front_assets/img/Srishti-Admission-Point-Get-Admission-in-Top-Indian-Universities.webp') }}"
                              alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://persdc.org/"> <img
                              src="{{ custom_asset('front_assets/img/Pragyan-Educational-Research-Skill-Development-Council.webp') }}"
                              alt="img"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://digilearnclasses.com/"><img
                              src="{{ custom_asset('front_assets/img/Computer-Course-Digital-Marketing-Course-Coding-Classes.webp') }}"
                              alt="img" loading="lazy"></a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="pills_under_img">
                        <a href="https://drrichagupta.com/"> <img
                              src="{{ custom_asset('front_assets/img/Gynaecologist-Near-Me.webp') }}" alt="img"
                              loading="lazy"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="nav_tab_new_session padding">
   <div class="container">
      <div class="section-heading text-center wow fade-in-bottom" data-wow-delay="200ms"
         style="visibility: visible; animation-delay: 200ms; animation-name: fade-in-bottom;">
         <span class="sub-heading">Our Blogs</span>
      </div>
      <div class="row">
         <div class="col-lg-12 sm-padding">
            <div class="owl-carousel owl-theme" id="home_cara_main">
               @foreach($blogs as $blog)
               <div class="item">
                  <div class="post-card">
                     <div class="post-thumb">
                        <img src="{{ custom_asset($blog->banner) }}" class="img-fluid img_bloger"
                           alt="{{ $blog->title }}" loading="lazy">
                     </div>
                     <div class="post-content-wrap">
                        <ul class="post-meta">
                           <li>
                              <i class="las la-calendar"></i>{{ $blog->created_at->format('F j, Y') }}
                           </li>
                        </ul>
                        <div class="post-content">
                           <h3><a href="{{ url('blogs/' . $blog->slug) }}" class="hover">{{ $blog->title }}</a></h3>
                           <p>{{ Str::limit($blog->short_description, 135, '...') }}</p>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<section class="faq-section padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6 sm-padding wow" data-wow-delay="200ms">
            <div class="faq-content">
               <div class="section-heading mb-20">
                  <span class="sub-heading"> FAQs </span>
                  <h2>Frequently Asked Questions</h2>
                  <p>Our Frequently Asked Questions section provides clear answers to common queries about our services,
                     benefits, and processes. Explore it to understand how Digi Rush Solutions can help you achieve your
                     digital marketing and web services goals efficiently.</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 sm-padding wow" data-wow-delay="200ms">
            <div class="accordion accordion-flush" id="accordionFlushExample">
               <div class="accordion-item">
                  <h5 class="accordion-header" id="flush-headingOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What services do you offer?
                     </button>
                  </h5>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">At Digi Rush Solutions, we offer a comprehensive range of digital
                        marketing and web services including Social Media Marketing (SMM), Search Engine Optimization
                        (SEO), Pay-Per-Click (PPC) advertising, content marketing, web design and development, and more.
                        Our solutions are tailored to meet your specific business needs.</div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h5 class="accordion-header" id="flush-headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        How can Social Media Marketing benefit my business?
                     </button>
                  </h5>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                     data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">Social Media Marketing (SMM) boosts your brand's visibility, attracts
                        specific visitors to your site, and interacts with your audience instantly. It strengthens brand
                        loyalty, boosts customer engagement, and produces quantifiable leads and conversions.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h5 class="accordion-header" id="flush-headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        How do you measure the success of your campaigns?
                     </button>
                  </h5>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                     data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">We track important metrics like engagement, click rates, conversion,
                        and return on investment using various analytics tools. We offer detailed reports to keep things
                        clear and show how our strategies affect results.</div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h5 class="accordion-header" id="flush-headingfour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                        What makes Digi Rush Solutions different from other agencies?
                     </button>
                  </h5>
                  <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour"
                     data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">We stand out by using the newest tools and our team's deep knowledge to
                        make tailored plans. Our goal is to provide creative solutions based on data, making sure your
                        online marketing works best.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h5 class="accordion-header" id="flush-headingfive">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                        How do I get started with your services?
                     </button>
                  </h5>
                  <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive"
                     data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">Starting is simple! Just reach out to us on our website
                        “www.digirushsolutions.com” or call us on +919915954999 to set up a meeting. We'll talk about
                        your business goals, evaluate what you need, and create a customized plan to help you reach your
                        goals.</div>
                  </div>
               </div>
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
            <h2>What our customers tell <br>about our Business</h2>
         </div>
         <div class="carousel-navigation">
            <button class="carousel-button-prev"><i class="las la-long-arrow-alt-left"></i></button>
            <button class="carousel-button-next"><i class="las la-long-arrow-alt-right"></i></button>
         </div>
      </div>
    <div class="row align-items-center">
        <div class="testimonial-carousel-wrapper">
         <div class="testimonial-carousel-2 testimonial-card">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="testi-item">
                     <div class="quote-icon"><i class="las la-quote-right"></i></div>
                     <p>Digi Rush Solutions transformed our business with its excellent web design and development,
                        effective PPC campaigns, and smart SEO strategies. Our website is an educational-based website
                        and looks great, traffic has increased, and our search rankings have improved. I highly
                        recommend them for boosting your online presence. </p>
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
                     <p>We are a travel agency in the USA for flight tickets, hotels, and rental car booking. Digi Rush
                        Solutions did a fantastic job designing and developing our website for Royal Care Travels. They
                        also improved ranking through SEO, leading to better search rankings and more traffic. Their
                        expertise has truly enhanced our online presence. We highly recommend Digi Rush Solutions for
                        top-quality digital services.</p>
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
                     <p>Digi Rush Solutions is the best digital marketing and web development agency in Chandigarh. They
                        did their job designing and developing our eCommerce website for Adhya Bedsheet. They handled
                        everything from the initial design to the full setup with great attention to detail. The result
                        is a sleek, functional site that perfectly suits our needs. We’re thrilled with their work and
                        highly recommend Digi Rush Solutions for any eCommerce project.</p>
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
                     <p>Digi Rush Solutions worked excellently. Development work on my website is perfect. Their team
                        created a professional, user-friendly site that perfectly meets my needs as a doctor. I’m very
                        satisfied with their work and would highly recommend them to anyone.</p>
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
                     <p>Digi Rush Solutions exceeded our expectations with the development of our loan services website.
                        They provided a functional design that highlights our offerings and makes it easy for customers
                        to navigate. Their expertise and attention to detail have greatly enhanced our online presence.
                     </p>
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
                        Council). Digi Rush Solutions created a clean, professional design that perfectly represents our
                        organization and enhances user experience. We highly recommend it to anyone for development,
                        marketing or branding.</p>
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
                     <p>Digi Rush Solutions transformed our online presence with its exceptional website design and
                        development for Router Ninjas. Their work has greatly improved how we present our router support
                        services and IT solutions. The website is not only visually appealing but also highly functional
                        and easy to navigate. We’re very impressed and strongly recommend Digi Rush Solutions for anyone
                        seeking expert web development.</p>
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
                     <p>Digi Rush Solutions completely developed our website named Baby Corn Group. The site is vibrant,
                        easy to navigate, and perfectly reflects our event organising services. We’re thrilled with the
                        outcome and highly recommend their expertise.</p>
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
                     <p>Digi Rush Solutions transformed our online presence with their expert digital marketing services
                        especially Social Media Marketing and SEO. Our website traffic and engagement have significantly
                        increased. Highly recommend.
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
                     <p>We’ve seen a remarkable increase in leads since partnering with Digi Rush Solutions for Social
                        Media Marketing. Their approach is data-driven and results-oriented.
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
                        impressive results, and their insights have been incredibly valuable. I highly recommend their
                        services to anyone looking to enhance their online marketing.
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
            <!-- <div class="col-md-6">
         <div class="video_testimonial">
         <div class="owl-carousel video-carousel">
            <div class="video-item">
               <img src="{{ custom_asset('front_assets/img/new_img_main.webp') }}" alt="Project-img" loading="lazy">
               <div class="play-icon" data-video="https://www.youtube.com/watch?v=ScMzIvxBSi4">&#9658;</div>
            </div>
            <div class="video-item">
               <img src="{{ custom_asset('front_assets/img/new_img_main.webp') }}" alt="Project-img" loading="lazy">
               <div class="play-icon" data-video="https://www.youtube.com/watch?v=ysz5S6PUM-U">&#9658;</div>
            </div>
            <div class="video-item">
               <img src="{{ custom_asset('front_assets/img/new_img_main.webp') }}" alt="Project-img" loading="lazy">
               <div class="play-icon" data-video="https://www.youtube.com/watch?v=O8fKY4Mo3i8">&#9658;</div>
            </div>
            </div>

         </div>
      </div> -->
    </div>
   </div>
</section>
<section class="call-back-section padding">
   <div class="map-pattern"></div>
   <div class="container">
      <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
         <span class="sub-heading">Get In Touch</span>
         <h2>Want to know why your website isn’t <br>getting the traffic it deserves?</h2>
      </div>
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-4 d-none d-lg-block">
            <div class="callback-men"><img src="{{ custom_asset('front_assets/img/callback-men.webp') }}" alt="img"
                  loading="lazy"></div>
         </div>
         <div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
            <div class="callback-form ml-40">
               <h2>Request a Callback</h2>
               <form action="{{ route('quote.store') }}" method="post" class="form-horizontal" id="myform1">
                  @csrf
                  <div class="callback-form-group">
                     <div class="form-field">
                        <input type="text" id="contactName" name="name" class="form-control" placeholder="Name"
                           value="{{ old('name') }}">
                        @error('name')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                        @enderror
                     </div>
                     <input type="hidden" name="city_name" value="india">
                     <div class="form-field">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <select name="countryCode" id="">
                                 <option data-countryCode="IN" value="91" {{ old('countryCode')=='91' ? 'selected' : ''
                                    }}>Ind
                                    (+91)</option>
                                 <option data-countryCode="UK" value="44" {{ old('countryCode')=='44' ? 'selected' : ''
                                    }}>UK
                                    (+44)</option>
                                 <option data-countryCode="US" value="1" {{ old('countryCode')=='1' ? 'selected' : ''
                                    }}>US (+1)
                                 </option>
                              </select>
                           </div>
                           <input type="text" id="phone_fulls" name="phone" minlength="10" maxlength="10" required
                              class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '')"  value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-field">
                        <input type="email" id="contactEmail" name="email" class="form-control" placeholder="Email"
                           value="{{ old('email') }}" required>
                        @error('email')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-field">
                        <select name="service" id="service">
                           <option value="" disabled selected>Select a service</option>
                           <option value="Website Designing & Development" {{
                              old('service')=='Website Designing & Development' ? 'selected' : '' }}>
                              Website Designing & Development
                           </option>
                           <option value="Application Development" {{ old('service')=='Application Development'
                              ? 'selected' : '' }}>
                              Application Development
                           </option>
                           <option value="Software Development" {{ old('service')=='Software Development' ? 'selected'
                              : '' }}>
                              Software Development
                           </option>
                           <option value="CRM, ERP Development" {{ old('service')=='CRM, ERP Development' ? 'selected'
                              : '' }}>
                              CRM, ERP Development
                           </option>
                           <option value="All Digital Marketing Services" {{
                              old('service')=='All Digital Marketing Services' ? 'selected' : '' }}>
                              All Digital Marketing Services
                           </option>
                           <option value="SEO Services" {{ old('service')=='SEO Services' ? 'selected' : '' }}>
                              SEO Services
                           </option>
                           <option value="SMO Services" {{ old('service')=='SMO Services' ? 'selected' : '' }}>
                              SMO Services
                           </option>
                           <option value="PPC Services" {{ old('service')=='PPC Services' ? 'selected' : '' }}>
                              PPC Services
                           </option>
                           <option value="Email Marketing" {{ old('service')=='Email Marketing' ? 'selected' : '' }}>
                              Email Marketing, SMS, Whatsapp Messages, Broadcast Services
                           </option>
                           <option value="Graphic Designing, Video Editing" {{
                              old('service')=='Graphic Designing, Video Editing' ? 'selected' : '' }}>
                              Graphic Designing, Video Editing
                           </option>
                        </select>
                        @error('service')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-field">
                        <input type="text" id="text" name="city" placeholder="City" class="form-control"
                           value="{{ old('city') }}">
                     </div>
                     <div class="form-field">
                        <button id="submit" class="default-btn" type="submit">Send Message<span></span></button>
                     </div>
                  </div>
                  <div id="form-messages" class="alert" role="alert"></div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>


@endsection
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
         <div class="modal-header border-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body p-0">
            <div class="ratio ratio-16x9">
               <iframe src="https://www.youtube.com/embed/jt9REyilBl0?autoplay=1"
                  title="YouTube video" allowfullscreen></iframe>
            </div>
         </div>
      </div>
   </div>
</div>




