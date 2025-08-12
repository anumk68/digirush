@extends('layouts.front.app')
@section('content')

    <section class="page-header" style="background-image: url({{ custom_asset('front_assets/img/agency_pune_banner.png')}});">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="page-header-info">
                        <h1>Best SEO Agency in Pune </h1>
                        <p>Discover the best SEO company in Pune! Our top SEO agency in Pune delivers effective strategies
                            to boost your online presence and drive traffic. Hire Now!
                        </p>
                        <div class="btn_digital">
                            <a href="{{route('contact')}}" class="default-btn">Hire Now! </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="main_subscription_form  new_digital_form">
                        <div class="under_form_sestion">
                            <!-- <h2>Get Free Website Audit</h2> -->
                            <div class="main_gif_heading">
          <img src="{{custom_asset('front_assets/img/40_GIF.gif')}}" alt="" style="height: 160%;width: 100%;
    max-width: 148px;
 ">
          <h2>Upgrade Your Online Presence Today! </h2>
        </div>
                            <form method="post" action="{{ route('seoform.submit') }}" id="contact-form">
                                @csrf
                                <input type="hidden" name="city_name" value="pune">
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
                        <h4 class="sub-heading">Hire SEO Agency in Pune</h4>
                        <h2>Grow Your Business with Our Powerful SEO Services in Pune</h2>
                    </div>
                    <div class="about-content">
                        <p>Unlock the potential of Search Engine Optimization (SEO) and take your Pune based business to the next level! We are the best SEO Agency in Pune that offers complete SEO services to improve your online presence and attract qualified leads. In addition to our comprehensive SEO strategies, we offer specialized <a href="{{ route('local_seo_company') }}">local SEO services </a>to upgrade the visibility of your website in local search results. By targeting local keywords and optimizing your Google My Business profile, we help you connect with nearby customers and drive foot traffic to your business.</p>
                        <p>Our team of SEO experts in Pune will create a tailored strategy to control search results,
                            whether you are looking for the best SEO Company in Pune. We will optimize your website, create
                            quality content, and create a powerful online presence to generate organic traffic and convert
                            leads.</p>
                        <h3>With our top-notch SEO solutions, you’ll see</h3>
                        <ul class="fasting_timessss">
                            <li>
                                <p>Increase your website’s visibility and organic search traffic</p>
                            </li>
                            <li>
                                <p>Improve your brand’s online visibility and brand reputation</p>
                            </li>
                            <li>
                                <p>Generate a new generation of quality leads and conversions</p>
                            </li>
                            <li>
                                <p>Achieve measurable results with a clear ROI</p>
                            </li>
                        </ul>
                        <ul class="tab-list on_page_optimization">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <i class="las la-hand-point-right"></i>On-Page SEO
                                        </button>
                                    </h6>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Our professionals will carefully design your site
                                            architecture, meta descriptions and content to make sure search engines can see
                                            what you have to offer and rank you high in relevant searches.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <i class="las la-hand-point-right"></i>Off-Page SEO
                                        </button>
                                    </h6>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            We will create a good backlink profile by obtaining high-quality backlinks from
                                            well-known websites in your field. This will send signals to search engines
                                            regarding the trustworthiness and authority of your website.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            <i class="las la-hand-point-right"></i>Technical SEO
                                        </button>
                                    </h6>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">We’ll assess your site’s technical condition and fix
                                            any bottlenecks that could prevent search engines from crawling and indexing
                                            your site. We’ll also optimize page loading speed and make your site
                                            mobile-friendly.
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
                        <img src="{{ custom_asset('front_assets/img/SEO-Agency-in-Pune.jpg')}}" alt="Best SEO Agency in Pune">
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
                        <h4 class="sub-heading"> Why Digi Rush Solutions </h4>
                        <h2> Why Digi Rush Solutions for SEO in Pune</h2>
                    </div>
                    <ul class="fasting_timessssgg">
                        <li>
                            <p>SEO Specialist: Digi Rush Solutions is not just another SEO company in Pune. We are a team of
                                pune based SEO experts who are well-versed in the local digital environment and search
                                trends. </p>
                        </li>
                        <li>
                            <p>Best Results: We know what you need to do to get your Pune business to the top of the search
                                engine rankings. We have years of experience in helping local businesses reach their online
                                marketing objectives. </p>
                        </li>
                        <li>
                            <p>Customized Strategies: We don’t believe in one size fits all SEO. We’ll create an SEO plan
                                tailored to your Pune business based on your industry, target market, and local competition.
                            </p>
                        </li>

                    </ul>
                    <ul class="fasting_timessssgg">
                        <h3>Results-Oriented Transparent</h3>
                        <li>
                            <p>Data-driven approach: As the Best <a href="#">SEO Agency in Pune</a>, we don’t rely on guesswork; we rely on data to back up our <a href="#">SEO strategies</a>. We’ll use cutting-edge tools and data analytics to monitor your progress and ensure you’re achieving the results you’re looking for. </p>
                        </li>
                        <li>
                            <p>Open & transparent communication: We’re committed to open communication with you. You’ll
                                always know what we’re doing and how it’s affecting your ranking and traffic on your
                                website. </p>
                        </li>
                        <li>
                            <p>Return on Investment (ROI): We recognize that SEO is a long-term investment. That’s why we’re
                                focused on providing you with a strong ROI by generating organic traffic and leads and
                                converting them into conversions for your business in Pune.</p>
                        </li>
                    </ul>
                    <h3>Ready to unlock the true potential of your online presence in Pune?</h3>
                    <p>Contact us today to discuss your SEO goals and let our team craft a customized strategy to propel
                        your business growth!</p>
                    <a href="{{ route('contact') }}" class="default-btn btn_response">GET FREE WEBSITE AUDIT</a>
                </div>

                <div class="col-lg-6 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6 ">
                            <div class="industries_box service-item">
                                <span class="reting">2.5x </span>
                                <p class="h_box">INCREASE IN SEO TRAFFIC </p>
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
                <h4 class="sub-heading">SEO Benefits</h4>
                <h2>Key Points & SEO Benefits</h2>
                <p class="quality_main">Unlock the power of organic growth! Search Engine Optimization (SEO) generates
                    qualified leads, increases brand awareness, and increases sales at a fraction of the cost.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box">
                        <h4>Increased Website Traffic</h4>
                        <p>Search Engine Optimization (SEO) is the process of optimizing your website to rank higher in
                            search engine results. When your website ranks higher in search results, users are more likely
                            to click on it, resulting in a significant increase in organic traffic, which means more
                            potential customers discovering your products and services.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box">
                        <h4>Cost-Effective Strategy</h4>
                        <p>In comparison to paid advertising, SEO provides a long-lasting, low-cost marketing solution. Once
                            your site and content are optimized, you’ll be able to reap the benefits of long-lasting organic
                            traffic without the need for a steady cash flow.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Long-Term Growth Potential</h4>
                        <p>Search engine optimization (SEO) is a continuous process, but the advantages increase with time.
                            With consistent efforts and optimization, you’ll create a solid foundation for organic growth
                            over the long term. As your site authority increases in search engines, your qualified traffic
                            will continue to grow and you’ll experience sustainable business growth.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Credibility and Trust</h4>
                        <p> The fact that your website appears at the top of search results means that search engines
                            consider your website valuable and reliable. This increases user trust and establishes you as a
                            trusted source of information in your field.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Measurable Results</h4>
                        <p>What’s great about SEO? It’s based on data. You can use analytics tools to track your website’s
                            ranking, sources of traffic, and conversions. This way, you can see how well your SEO efforts
                            are working and make informed decisions for future optimization.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Improved Lead and Sales</h4>
                        <p>By increasing website traffic and reaching your target audience, SEO automatically places your
                            business in a position to create more leads. When users discover your website through SEO, they
                            already have an interest in your niche, which makes them more likely to engage with your
                            products and services and convert them into leads and sales.</p>
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
                <span class="sub-heading white">FAQs </span>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 sm-padding">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    How Much Does SEO Normally Cost?
                                </button>
                            </h5>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">SEO costs in India typically range from ₹5,000 to ₹20,000
                                        per month. Most businesses spend between ₹15,000 and ₹20,000 monthly. On average,
                                        agencies charge ₹12000, while freelancers charge ₹20,000.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Is SEO a Monthly Fee?
                                </button>
                            </h5>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Yes, SEO typically involves a monthly fee. Since SEO is an
                                    ongoing process, you'll need to pay regularly for maintenance and updates. Investing in
                                    a monthly SEO package can significantly benefit your business’s success. </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Why SEO is a Slow Process?
                                </button>
                            </h5>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">SEO is a slow process because it involves gradual improvements
                                    to your website’s ranking on search engines (SERPs). It takes time to build authority
                                    (DA, PA), gain quality backlinks, and see the effects of optimization efforts. Search
                                    engines need time to index and rank your site, so results often appear gradually.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    How to Start SEO?
                                </button>
                            </h5>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">To start SEO, begin by researching relevant keywords that your
                                    target audience is searching for. Next, optimize your website by improving on-page
                                    elements like titles, meta descriptions, and content with these keywords. Build quality
                                    backlinks from reputable sites (who have high DA, PA and low spam scores) to enhance
                                    your site’s authority. Finally, use analytics tools to monitor performance and make
                                    necessary adjustments to improve your SEO strategy over time.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    How to Create Quality Backlinks?
                                </button>
                            </h5>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">To create quality backlinks, start by producing high-value
                                    content that attracts natural links. Guest post on reputable sites in your industry to
                                    gain authoritative links. Build relationships with influencers and experts who might
                                    link to your content. List your site in trusted directories and actively engage in
                                    relevant online communities, contributing valuable insights and linking back when
                                    appropriate.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
