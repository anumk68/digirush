@extends('layouts.front.app')
@section('content')

    <section class="page-header" style="background-image: url({{ custom_asset('front_assets/img/agency_jaipur_banner.png')}});">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="page-header-info">
                        <h1>Best SEO Company in Jaipur</h1>
                        <p>Increase your website’s ranking on SERPs with the best SEO company in Jaipur - Digi Rush
                            Solutions. Get top-notch SEO services in Jaipur. Contact us today!
                        </p>
                        <div class="btn_digital">
                            <a href="{{route('contact')}}" class="default-btn">Hire Now! </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="main_subscription_form  new_digital_form">
                        <div class="under_form_sestion">
                            <h2>Get Free Website Audit</h2>
                            <form method="post" action="{{ route('seoform.submit') }}" id="contact-form">
                                @csrf
                                <input type="hidden" name="city_name" value="jaipur">
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
                        <span class="sub-heading">Start Your Journey</span>
                            <h2>Start Website's Journey with SEO Company in Jaipur</h2>
                    </div>
                    <div class="about-content">
                        <p>In today’s world, having an online presence is more than just a luxury, it’s a must for any
                            business to succeed. But just having a website won’t cut it if you don’t have the right SEO
                            company to help you stand out from the crowd.</p>
                        <p>If you’re looking to attract new customers who are searching online for your products and
                            services, you need an SEO company in Jaipur that can help you do just that. That’s where we come
                            in.</p>
                        <p>If you’re looking to attract new customers who are searching online for your products and
                            services, you need an SEO in Jaipur that can help you do just that. That’s where we come in.
                            Here’s how we can help you achieve your online marketing goals in Jaipur:</p>
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
                                        <div class="accordion-body">
                                            <ul class="fasting_times">
                                                <li>
                                                    <p>On-Page SEO is the process of optimizing your website’s content and
                                                        structure to improve your site’s ranking in search engine results
                                                        pages (SERPs). Think of it as improving your online presence.</p>
                                                </li>
                                                <li>
                                                    <p>High-quality, keyword rich content is essential, as well as clear
                                                        headings and quick load times.</p>
                                                </li>
                                                <li>
                                                    <p>Mobile-optimized design and descriptive imagery are also essential.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>Internal linking is the process of helping users navigate and telling
                                                        search engines what’s important.</p>
                                                </li>
                                                <li>
                                                    <p>When you optimize these elements, you’re sending a signal that your
                                                        site is a valuable resource to search engines, increasing organic
                                                        traffic.</p>
                                                </li>
                                            </ul>
                                        </div>
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
                                            <ul class="fasting_times">
                                                <li>
                                                    <p>Off-page SEO is all about building your website’s reputation outside
                                                        your home. It’s like building the community’s trust in your store,
                                                        product or business. Getting high-quality backlinks from reputable
                                                        sites and good online reviews are essential. Social media mentions
                                                        and mentions of your brand show you’re relevant.</p>
                                                </li>
                                                <li>
                                                    <p>By guest posting on relevant sites, you can increase your reach and
                                                        get backlinks. When you build trust and credibility outside your
                                                        home, you’re sending search engines a signal that your site is
                                                        valuable. This results in higher rankings and more organic traffic.
                                                    </p>
                                                </li>
                                            </ul>
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
                                        <div class="accordion-body">Technical SEO, also known as search engine optimization
                                            (SEO), is the process of optimizing your website for search engines (SEO) and
                                            users (SEO). It’s like optimizing your plumbing system or electrical system for
                                            your website.
                                            <ul class="fasting_times">
                                                <li>
                                                    <p>Fast loading times</p>
                                                </li>
                                                <li>
                                                    <p>Mobile-friendliness</p>
                                                </li>
                                                <li>
                                                    <p>Clean code</p>
                                                </li>
                                                <li>
                                                    <p>Clear sitemaps</p>
                                                </li>
                                                <li>
                                                    <p>Adding details to your content so search engines can understand it
                                                        better</p>
                                                </li>
                                            </ul>
                                            <p>When you focus on these technical aspects of SEO, you’re laying the
                                                groundwork for your site to rank higher in search engines and be easily
                                                discoverable by users and search engines.</p>
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
                        <img src="{{ custom_asset('front_assets/img/SEO-AGENCY-IN-JAIPUR (1).jpg')}}" alt="seo-agency-jaipur">
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
                        <span class="sub-heading">SEO Services in Jaipur</span>
                        <h2> Avail SEO Services in Jaipur with Digi Rush Solutions</h2>
                    </div>
                    <p>
                        Are you looking for an SEO agency in Jaipur that can help you dominate search results and bring in a
                        lot of new customers? Digi Rush Solutions is the right choice for you! We specialize in creating
                        results-oriented SEO strategies that will get your website to the first page of search engine
                        results for relevant Jaipur searches.
                    </p>

                    <ul class="fasting_times">
                        <h3>Why choose Digi Rush Solutions?</h3>
                        <li>
                            <p>We have local expertise in the Jaipur online market and customize our strategies to meet the
                                needs of local audiences.</p>
                        </li>
                        <li>
                            <p>Data-driven approach: We don’t just rely on guesswork when it comes to SEO. We use keyword
                                research, competitive analysis, and continuous performance monitoring to make sure your SEO
                                efforts are targeted and deliver measurable results to your Jaipur audiences.</p>
                        </li>
                        <li>
                            <p>Transparency throughout: We are committed to clear and consistent communication throughout
                                your campaign. You will receive regular updates on the progress of your campaign, and you
                                will be kept informed and involved at every step of the process.</p>
                        </li>
                        <li>
                            <p>Complete SEO Services: We provide a comprehensive suite of SEO services to help you optimize
                                your site for search engines and deliver an exceptional user experience to Jaipur visitors.
                            </p>
                        </li>
                    </ul>
                    <h3>Avail SEO Services in Jaipur Today!</h3>
                    <p>Don’t settle for an average online presence. Partner with the best SEO agency in Jaipur, Digi Rush
                        Solutions to unleash a new age of digital expansion for your business. Get in touch with us for a
                        free consultation to discuss your unique SEO strategy to succeed in Jaipur’s online market!</p>
                    <a href="{{ route('contact') }}" class="default-btn btn_response">GET FREE WEBSITE AUDIT</a>
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
                                <span class="reting">70% </span>
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
                <span class="sub-heading">Tips for Ranking </span>
                <h2>Some SEO tips and Ranking Factors </h2>
                <p class="quality_main">SEO tips and ranking factors are the secret sauce for good SEO! They work together
                    to help search engines understand your website and content, ultimately increasing your website’s
                    visibility in search results. Here’s how:</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box">
                        <h4>On-Page Optimization</h4>
                        <p> Optimize Page Titles and Metadata with Keywords. Include Internal Links to Key Pages on Your
                            Website. Use High Quality Images with Descriptive Alt Text. Title tags and meta descriptions
                            help search engines understand a webpage’s content. Internal Linking helps search engines find
                            and index all pages on your site. Image Alt Text Helps Search Engines Understand the Content of
                            Your Images.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box">
                        <h4>Technical SEO</h4>
                        <p>
                            Make sure your website loads quickly and easily on mobile devices. Build your website with a
                            well-structured structure and logical navigation Search engines prioritize websites that provide
                            a seamless user experience across all devices, particularly mobile devices. Search engine
                            crawlers prioritize websites that are easy to navigate and comprehend.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Backlinks</h4>
                        <p>
                            Create content that other sites will naturally link to. Connect with relevant sites for guest
                            blogging. Backlinks from authoritative websites give your site a boost in search engine
                            rankings.</p>
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
                <span class="sub-heading white">FAQs</span>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 sm-padding">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What SEO Means?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">Actual meaning of SEO (Search Engine Optimization) is
                                        optimizing the website according to search engine. It refers to the practice of
                                        optimizing websites and online content to improve their visibility and ranking in
                                        search engine results pages (SERPs). The main motive or goal of SEO is to increase
                                        the organic traffic (non-paid) to a website by making it more relevant and
                                        attractive to search engines like Google, Bing, Yahoo and so on. SEO involves
                                        various strategies, including keyword research, on-page optimization, technical SEO,
                                        and Off page optimization to enhancing a website’s visibility and driving more
                                        targeted traffic from search engines.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Which Off page SEO techniques are trending in 2024-2025?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">According to Digi Rush Solutions, the following are some
                                    trending off-page SEO techniques are used in 2024 – 2025:
                                    <ul>
                                        <li>
                                            <p>Voice search optimization</p>
                                        </li>
                                        <li>
                                            <p>Video content explanation</p>
                                        </li>
                                        <li>
                                            <p>Submissions of Podcast guesting</p>
                                        </li>
                                        <li>
                                            <p>Local SEO and Engagement with Community</p>
                                        </li>
                                        <li>
                                            <p>Collaborations with Influencer</p>
                                        </li>
                                        <li>
                                            <p>Social Media Engagement</p>
                                        </li>
                                        <li>
                                            <p>Driven Link Building – Artificial intelligence</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    What is an organic result?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Organic Results means unpaid results or free or natural
                                    results. Organic results are provided by organic searches or search results. It also
                                    based on relevance, quality, and other ranking factors.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    How long will it take to get my website ranked on Search Engines?
                                </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">It requires a planned SEO strategy that includes producing
                                    high-quality content, perfecting the structure and appearance of websites, constructing
                                    dependable backlinks, and more. The quality and applicability of the content, the
                                    website’s structure and design, the competitiveness of the targeted keywords, the sphere
                                    authority, and numerous other factors all play a part in the way a website performs in
                                    search engine results.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    Why pay for SEO when I can use Google Advertisements?
                                </button>
                            </h2>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">While it’s true that Google Advertisements is a potent tool for
                                    adding business to your website, it’s a paid advertising platform, and the business it
                                    generates terminates as soon as you stop paying for the announcements. However, SEO is a
                                    long-term investment that can help you bring organic business or business that you do
                                    not have to pay for directly, to your website.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular_searchs_booked padding">
        <div class="container">
            <div class="main_ahead_cn">
                <div class="ahead_hotling">
                    <h2>Popular Searches:</h2>
                </div>
                <div class="ahead_p">
                    <p>
                        <a href="{{ route('seo_agency_jaipur') }}">SEO Agency in Jaipur</a> | <a
                            href="{{ route('seo_agency_jaipur') }}">SEO Services in Jaipur</a> |
                        <a href="{{ route('seo_agency_jaipur') }}">SEO in Jaipur</a> | <a
                            href="{{ route('seo_agency_jaipur') }}"> SEO Company in Jaipur
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
