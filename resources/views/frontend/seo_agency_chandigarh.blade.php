@extends('layouts.front.app')
@section('content')

<section class="page-header" style="background-image: url({{ custom_asset('front_assets/img/agency_banglore_banner.png')}});">
   <div class="page-header-shape"></div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-7">
            <div class="page-header-info">
               <h1>Best SEO Agency in Chandigarh</h1>
               <p>Transform your digital presence with Digi Rush Solutions the best SEO agency in Chandigarh. Our tailored SEO solutions are designed to drive organic traffic and enhance search engine rankings.
               </p>
               <div class="btn_digital">
                  <a href="{{route('contact')}}" class="default-btn">Hire Now! </a>
               </div>
            </div>
         </div>
         <div class="col-md-5">
                <div class="main_subscription_form  new_digital_form">
                    <div class="under_form_sestion">
                        <h2>GET FREE WEBSITE AUDIT</h2>
                        <form method="post" action="{{ route('seoform.submit') }}" id="contact-form">
                            @csrf
                            <input type="hidden" name="city_name" value="chandigarh">
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
                                    <option data-countryCode="IN" value="91" {{ old('countryCode') == '91' ? 'selected' : '' }}>
                                    Ind (+91)</option>
                                    <option data-countryCode="UK" value="44" {{ old('countryCode') == '44' ? 'selected' : '' }}>
                                    UK (+44)</option>
                                    <option data-countryCode="US" value="1" {{ old('countryCode') == '1' ? 'selected' : '' }}>
                                    US (+1)</option>
                                    </select>
                                </div>
                                <input type="text" id="phone" name="number" minlength="10" maxlength="10" class="form-control" value="{{ old('number') }}">
                                </div>
                                @error('number')
                                <div class="error-message" style="color:red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-field">
                                <input type="text" id="url" name="message" placeholder="Your Website" value="{{ old('message') }}">
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
                    <span class="sub-heading">SEO Experts Services</span>
                    <h2>Avail Best SEO Services in Chandigarh - Mohali (Tricity)</h2>
                    </div>
                    <div class="about-content">
                    <p>SEO means optimizing your website for search engines, a process vital for improving rankings. It involves a combination of techniques and strategies to boost your website’s position on SERPs and attract organic (non-paid) traffic through targeted keywords. If you're looking to compete with competitors, generate organic leads, and increase traffic, the <a href="{{route('seo_agency_in_pune')}}">best SEO agency in Pune</a> can help you achieve business growth and online visibility.
                    </p>
                    <p> Avail our top <a href="{{route('seo_agency_chandigarh')}}"> SEO services in Chandigarh</a> and Mohali with Digi Rush Solutions, the leading provider in the region. We offer a full range of SEO services, including Keyword Research, Local SEO, On-Page SEO, Off-Page SEO, Technical SEO, and more. Our dedicated SEO experts in Chandigarh and Mohali are committed to delivering results that align with the latest Google algorithms, helping your business achieve higher rankings and increased visibility. Our best SEO services include:
                    </p>
                    <ul class="tab-list on_page_optimization">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <i class="las la-hand-point-right"></i>On-Page SEO
                                </button>
                                </h6>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">On-page SEO means optimize the live
                                        webpage according to search engines. In other words, it improves
                                        visibility in search engine results. It includes optimizing meta
                                        tags (such as title tags and meta descriptions), heading tags,
                                        URL structures, and content quality.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <i class="las la-hand-point-right"></i>Off-Page SEO
                                </button>
                                </h6>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Off-page SEO is a combination of
                                    techniques and stretegies to improve a website ranking from
                                    SERPs without changing the website itself. The main purpose of
                                    goal of off-page SEO is to make users and search engines view a
                                    website as more trustworthy.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                    <h6 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <i class="las la-hand-point-right"></i>Technical SEO
                                        </button>
                                    </h6>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Technical SEO is important because if
                                            pages on a site aren’t accessible to search engines, they won’t
                                            appear in search results or search result pages (SERPs). This
                                            can result in a loss of traffic to a website and potential
                                            revenue.
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </ul>
                    <a href="{{ route('contact') }}" class="default-btn">GET STARTED</a>
                </div>
         </div>
         <div class="col-lg-6 sm-padding">
            <div class="about-thumb">
               <img src="{{ custom_asset('front_assets/img/Best-SEO-Agency-in-Chandigarh (1).jpg')}}" alt="img">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="about-section padding digitalmarketing pt-0">
   <div class="container">
      <div class="row align-items-center">
            <div class="col-lg-6 sm-padding">
                <div class="about-thumb abouuuttttt">
                <img src="{{ custom_asset('front_assets/img/expert-chandigarh-process.png')}}" alt="img">
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                    <div class="section-heading mb-20">
                    <span class="sub-heading">Hire Best SEO Expert With Us</span>
                    <h2>Expert SEO Agency in Chandigarh for Your Online Success</h2>
                    </div>
                    <div class="about-content">
                    <p>The strategy to be successful online is strategic, and the difference can really be made by an expert <a href="{{route('seo_agency_chandigarh')}}">Best SEO agency in Chandigarh</a>. Here at Digi Rush Solutions, we have specialized experience in offering customized SEO solutions designed to favor your business's goals. We make use of the three techniques: keyword research, on-page optimization, and quality link-building to enhance the search engine visibility of your website.
                    </p>
                    <p>Coupled with years of experience as well as the deep understanding of this digital landscape, we ensure to implement all the latest SEO techniques on your website for driving organic traffic and more ranking to your site. Our all-inclusive services will include technical SEO audits, content optimization, and competitor analysis, ensuring that your business will not fall behind in such a competitive space of the online market.
                    </p>
                    <p>We guarantee that whether you have just launched a new venture or are a well-established business organization, through our expert SEO strategies, our established results help in quantifying them. Let us help you grow your business with sustainable growth today. Reach out to us today and start your journey to winning at online success.</p>
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
               <span class="sub-heading">Why Digi Rush Solutions</span>
               <h2>Why Choose Us?</h2>
            </div>
            <p>
               When it comes to selecting a top SEO agency in India, Digi Rush Solutions stands out
               as an excellent choice.
            </p>
            <p>
               We take a comprehensive approach to SEO, covering all aspects of optimization. From
               thorough keyword research and on-page SEO to off-page SEO link building and
               technical analysis, we leave no stone unturned to boost your website’s visibility
               and organic rankings.
            </p>
            <p>Additionally, we have: </p>
            <ul class="tab-list chnage_tab_listing">
               <a href="#">
                  <li><i class="las la-hand-point-right"></i>Expertise </li>
               </a>
               <a href="#">
                  <li><i class="las la-hand-point-right"></i>Customized Approach </li>
               </a>
               <a href="#">
                  <li><i class="las la-hand-point-right"></i>Proven Track Record </li>
               </a>
               <a href="#">
                  <li><i class="las la-hand-point-right"></i>Transparent Reporting </li>
               </a>
               <a href="#">
                  <li><i class="las la-hand-point-right"></i>Customer Satisfaction </li>
               </a>
            </ul>
            <h4 class="mt-3">Get Started Today!</h4>
            <p>Ready to take your online presence to the next level? Contact Digi Rush Solutions
               today to discuss your SEO needs and explore how our expert services can help you
               achieve your business objectives or goals. With our expertise, customized
               strategies, and dedicated support, we’re committed to driving measurable results and
               maximizing your ROI in the competitive digital landscape
            </p>
            <a href="{{ route('contact') }}" class="default-btn btn_response">GET A FREE
            CONSULTATION</a>
         </div>
         <div class="col-lg-6 col-md-12 col-12">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-6 ">
                    <div class="industries_box service-item">
                        <span class="reting">2.5x</span>
                        <p class="h_box">INCREASE IN SEO TRAFFIC</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-6 ">
                    <div class="industries_box service-item">
                        <span class="reting">70%</span>
                        <p class="h_box">SALES QUALIFIED LEADS INCREASE</p>
                    </div>
                </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 col-6 ">
                        <div class="industries_box service-item">
                            <span class="reting">120%</span>
                            <p class="h_box">INCREASE IN PPC REVENUE</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-6 ">
                        <div class="industries_box service-item">
                            <span class="reting">35%</span>
                            <p class="h_box">CONVERSION RATE INCREASE</p>
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
         <span class="sub-heading">SEO Services in Tricity</span>
         <h2>Best SEO Services in 3 Cities</h2>
         <p class="quality_main">Get the best SEO services in Chandigarh, Mohali, and Panchkula.
            Boost rankings, drive traffic, and generate leads with our expert SEO solutions.
         </p>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="300ms">
            <div class="service-item service_box">
               <h4>SEO Services in Chandigarh</h4>
               <p>
                  Boost your business with our expert SEO services in Chandigarh. We offer
                  tailored strategies to enhance your online visibility, attract more customers,
                  and increase organic traffic. Our comprehensive services include Keyword
                  Research, Local SEO, On-Page SEO, Off-Page SEO, and Technical SEO, all designed
                  to improve your website’s ranking and drive growth. Whether you’re a small
                  business or a large enterprise, our dedicated team ensures your site excels in
                  the competitive Chandigarh market. Partner with us for proven results.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="400ms">
            <div class="service-item service_box">
               <h4>SEO Services in Mohali</h4>
               <p>
                  Elevate your online presence with our expert SEO services in Mohali. We offer
                  top strategies to boost your business website’s ranking, visibility and traffic.
                  Our services include Keyword Research, Local SEO, On-Page SEO, Off-Page SEO, and
                  Technical SEO, specially designed for SERP ranking improvement. Our SEO expert
                  in Mohali team is here to help you thrive in the competitive Mohali market.
                  Partner with us for effective SEO solutions.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
            <div class="service-item service_box">
               <h4>SEO Services in Panchkula</h4>
               <p>
                  Transform your Panchkula business with our premier SEO services. We offer
                  personalised strategies to boost your website’s visibility and more traffic. Our
                  expertise includes Keyword Research, On-Page SEO, Off-Page SEO, and Technical
                  SEO, all focused on improving your branding and ranking. Our team is committed
                  to helping you excel in the Panchkula market. Hire Digi Rush Solutions Now!
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
         <span class="sub-heading">FAQs</span>
         <h2>Frequently Asked Questions</h2>
      </div>
      <div class="row">
         <div class="col-lg-12 sm-padding">
            <div class="accordion accordion-flush" id="accordionFlushExample">
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                     Is SEO in high demand?
                     </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">Yes, SEO is in high demand 2024-2025. As
                        businesses increasingly recognize the importance of a strong online
                        presence, the need for effective SEO strategies continues to grow. SEO
                        helps improve website visibility, drive organic traffic, and enhance
                        user experience, making it a crucial component of digital marketing.
                        With the constant evolution of search engine algorithms and the
                        competitive nature of online markets, skilled SEO professionals are
                        essential for businesses aiming to stand out and succeed online.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                     How to rank number 1 in SEO?
                     </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">1.Identify high-volume, low-competition
                        keywords relevant to your business.<br>
                        2. Optimize content, meta tags, headings, and images for target
                        keywords.<br>
                        3. Create valuable, engaging, and regularly updated content.<br>
                        4. Improve site speed, mobile friendly, and ensure secure HTTPS
                        connections.<br>
                        5. Build high-quality backlinks from reputable sources.<br>
                        6. Optimize your Google My Business listing and ensure consistent NAP
                        details.<br>
                        7. Enhance navigation, responsive design, and loading times.<br>
                        8. Use analytics tools to track performance and adjust strategies based
                        on data.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                     What is SEO Ranking?
                     </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">SEO ranking refers to the position a website or
                        webpage holds in search engine results pages (SERPs) for specific
                        keywords or queries. Higher rankings indicate that a website is more
                        likely to be seen by users when they search for relevant terms.
                        Achieving a high SEO ranking involves optimizing various elements of a
                        website, such as content, technical aspects, and backlinks, to improve
                        its visibility and relevance to search engines like Google. The goal is
                        to appear at the top of SERPs to attract more organic traffic and
                        improve overall online presence.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingfour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                     Which is the best SEO Company in Chandigarh?
                     </button>
                  </h2>
                  <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">Digi Rush Solutions is the best SEO company in
                        Chandigarh - Mohali, offering expert services like Keyword Research,
                        On-Page, Off-Page, and Technical SEO. Their tailored strategies boost
                        visibility and drive targeted traffic, making them a leading choice for
                        enhancing online presence.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingfive">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                     How to start SEO?
                     </button>
                  </h2>
                  <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">To start SEO, set clear goals and conduct
                        keyword research to identify relevant terms. Optimize your website by
                        enhancing meta tags, headings, and content with these keywords. Create
                        valuable content that engages your audience, and ensure your site is
                        technically sound with fast load times and mobile-friendliness. Build
                        high-quality backlinks to boost your site’s authority, monitor your
                        performance with tools like Google Analytics, and stay updated on SEO
                        trends to continually refine your strategy.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection