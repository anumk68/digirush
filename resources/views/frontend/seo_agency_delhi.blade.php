@extends('layouts.front.app') @section('content')

    <section class="page-header"
        style="background-image: url({{ custom_asset('front_assets/img/agency_delhi_banner.png')}});"
        alt="Best SEO Agency in Delhi">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="page-header-info">
                        <h1>Best SEO Agency in DELHI NCR (UT)</h1>
                        <p class="boost_up_make">Hire Digi Rush Solutions - Your Best SEO Agency in Delhi NCR. Achieve Top
                            SERP Rankings and Enhance Your Online Visibility with Our Expert Strategies!</p>
                        <div class="btn_digital">
                            <a href="{{route('contact')}}" class="default-btn">Hire Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="main_subscription_form new_digital_form">
                        <div class="under_form_sestion">
                            <!-- <h2>Get Free Website Audit</h2> -->
                            <div class="main_gif_heading">
                                <img src="{{custom_asset('front_assets/img/40_GIF.gif')}}" alt=""
                                    style="height: 160%;width: 100%;
        max-width: 148px;
     ">
                                <h2>Upgrade Your Online Presence Today! </h2>
                            </div>
                            <form method="post" action="{{route('seoform.submit')}}" id="contact-form">
                                <input type="hidden" name="_token" value="LW6jQE0YKvqbpRzkB3y3qPLDMxUmcNRTefpxXogD"
                                    autocomplete="off" /> <input type="hidden" name="city_name" value="pune" />

                                <div class="form-field">
                                    <input type="text" id="fname" name="fname" placeholder="Full Name" value="" />
                                </div>
                                <div class="form-field">
                                    <input type="email" id="email" name="email" placeholder="Email" value="" />
                                </div>
                                <div class="form-field">
                                    <input type="text" id="city" name="city" placeholder="City" value="" />
                                </div>
                                <div class="form-field">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <select name="countryCode">
                                                <option data-countrycode="IN" value="91">Ind (+91)</option>
                                                <option data-countrycode="UK" value="44">UK (+44)</option>
                                                <option data-countrycode="US" value="1">US (+1) </option>
                                            </select>
                                        </div>
                                        <input type="text" id="phone" name="number" minlength="10" maxlength="10"
                                            class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="url" name="message" placeholder="Your Website" value="" />
                                    <small style="color: grey; font-size: 14px;">Example: www.google.com (Full Domain
                                        Name)</small>
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
                        <h2>Unlock Your Success with Our Best SEO Agency in Delhi!</h2>
                    </div>
                    <div class="about-content">
                        <p>
                            Looking for the <a href="{{route('seo_agency_delhi')}}">best SEO agency in Delhi</a>? We have
                            come to the right place. Looking to thrive on the Internet? Then Digi Rush Solutions is one of
                            the prime
                            <a href="{{route('seo_agency_delhi')}}">SEO agency in Delhi NCR</a> that could help your
                            business shine online. Our team of the finest experts in the field of SEO is passionate about
                            pursuing one goal: putting your
                            website on the very first page of search engines.
                        </p>

                        <p>
                            According to one of the most professional SEO company in Delhi, results are what matter. Our SEO
                            strategies are built with comprehensive data analysis, keyword research, and insights from
                            competitors. Targeting the
                            right audience means your website is likely to attract quality traffic that contributes to
                            creating a user-friendly experience keeping visitors who come there and converting them into
                            loyal customers.
                        </p>

                        <p>
                            Stop the guessing and welcome the power of counting. We continuously measure KPIs to evaluate
                            the real impact of <a href="{{route('seo_agency_delhi')}}">SEO in Delhi</a> and
                            <a href="{{route('seo_agency_jaipur')}}">Jaipur</a>, increasing traffic to your website with
                            higher conversion rate organizational leads. Join us now and let us unlock the full potential of
                            your business with the
                            best services in the SEO industry!
                        </p>
                        <ul class="tab-list on_page_optimization">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            <i class="las la-hand-point-right"></i>On-Page SEO
                                        </button>
                                    </h6>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            On-page SEO is the process of optimize the live website’s webpage according to
                                            search engines algorithms. It boost the visibility or rankng of website on
                                            search engine result pages (SERPs). It
                                            includes some steps: Meta tags (such as title tags and meta descriptions),
                                            Heading tags H1 to H6 , URL optimization, and valuable content optimization
                                            according to targeted keywords.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            <i class="las la-hand-point-right"></i>Off-Page SEO
                                        </button>
                                    </h6>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Off-page search engine optimization (or off-page SEO) is all the efforts you
                                            make to improve your website’s ranking in search engine results (SERPs). It’s
                                            all about building your site’s authority and
                                            reputation in search engine rankings.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            <i class="las la-hand-point-right"></i>Technical SEO
                                        </button>
                                    </h6>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Technical SEO is the process of optimizing your website for search engines. It’s
                                            the process of laying the groundwork for search engines to crawl, index and
                                            understand your website’s content. This
                                            improves your site’s ranking potential.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                        <a href="{{route('contact')}}" class="default-btn">GET STARTED</a>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="about-thumb">
                        <img src="{{ custom_asset('front_assets/img/SEO-in-Delhi.jpg')}}" alt="SEO Agency in Delhi" />
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
                        <h2>Partner with Digi Rush Solutions, Your Trusted SEO Agency in Delhi</h2>
                    </div>
                    <p>
                        In today’s highly competitive online landscape, having a strong website is no longer an option, it’s
                        a necessity. However, just having a website is not enough to succeed in today’s digital world. You
                        need a strong
                        <a href="https://digirushsolutions.com/blogs/how-to-index-my-website-on-google">SEO strategy</a>
                        that will take your business to the first page of search engines.
                    </p>
                    <p>
                        That’s where we come in. We’re not just another <a href="{{route('seo_agency_delhi')}}">SEO company
                            in Delhi</a>, we are a dedicated team of experts with one goal in mind: to take your website to
                        the next level and push
                        your business to the next level.
                    </p>

                    <ul class="tab-list on_page_optimization">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <i class="las la-hand-point-right"></i>More Than Just Ranking
                                    </button>
                                </h6>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        SEO success doesn’t just mean keyword rankings. It’s about providing a user-friendly
                                        experience that will keep visitors engaged and convert them into long-term
                                        customers.<br />
                                        <strong>Digi Rush Solutions</strong> understands that SEO success is not just about
                                        keyword rankings. Our strategies are based on the most recent trends in UX design.
                                        This means that your website will not
                                        only be search engine friendly but also visually appealing and user-friendly.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <i class="las la-hand-point-right"></i>Get Started Today!
                                    </button>
                                </h6>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Get in touch with us for a FREE consultation and let’s talk about your unique SEO
                                        plan. We’ll work with you to create a comprehensive plan that will catapult your
                                        website into the top of the search
                                        results and open up a new era for your business.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                    <a href="{{route('contact')}}" class="default-btn btn_response">GET FREE WEBSITE AUDIT</a>
                </div>

                <div class="col-lg-6 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="industries_box service-item">
                                <span class="reting">2.5x</span>
                                <p class="h_box">INCREASE IN SEO TRAFFIC</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="industries_box service-item">
                                <span class="reting">70%</span>
                                <p class="h_box">SALES QUALIFIED LEADS INCREASE</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="industries_box service-item">
                                <span class="reting">120%</span>
                                <p class="h_box">INCREASE IN PPC REVENUE</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6">
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
                <h2> Why Digi Rush Solutions - A SEO <br /> Agency in Delhi </h2>
                <p class="quality_main">
                    In the ever-evolving digital landscape of Delhi, many SEO agencies compete for your business. <a
                        href="{{route('home')}}">Digi Rush Solutions </a>stands out as the best SEO agency in Delhi and a
                    trusted SEO company in Delhi.
                    We provide tailored strategies to rank your website on the first page of search engine results and drive
                    your online success with effective <a href="{{route('seo_agency_delhi')}}">SEO in Delhi.</a>
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box">
                        <h4>Results Oriented</h4>
                        <p>
                            Data-driven results, not empty promises. We get rid of the gimmicks and focus on results. Our
                            SEO strategies are carefully crafted based on keyword research, competition analysis, and
                            continuous performance tracking.
                            This allows us to focus on the right people and provide a positive ROI.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box">
                        <h4>Transparency</h4>
                        <p>
                            We’re all about transparency and consistency. You’ll get regular reports on your campaign’s
                            progress, so you know exactly what’s going on at every stage of the process. Don’t worry about
                            what’s happening in the
                            background – we’ll keep you updated.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Tailored Solutions</h4>
                        <p>
                            When it comes to SEO, we know that a ‘one size doesn’t fit all’. That’s why we take the time to
                            understand your industry, your target audience, and your business objectives. That way, we can
                            create a custom SEO
                            strategy that aligns perfectly with your vision and helps you reach your online goals.
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
                                    Actual meaning of SEO (Search Engine Optimization) is optimizing the website according
                                    to search engine. It refers to the practice of optimizing websites and online content to
                                    improve their visibility and
                                    ranking in search engine results pages (SERPs). The main motive or goal of SEO is to
                                    increase the organic traffic (non-paid) to a website by making it more relevant and
                                    attractive to search engines like
                                    Google, Bing, Yahoo and so on. SEO involves various strategies, including keyword
                                    research, on-page optimization, technical SEO, and Off page optimization to enhancing a
                                    website’s visibility and driving more
                                    targeted traffic from search engines.
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
                                <div class="accordion-body">
                                    According to Digi Rush Solutions, the following are some trending off-page SEO
                                    techniques are used in 2024 – 2025:
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
                                <div class="accordion-body">
                                    Organic Results means unpaid results or free or natural results. Organic results are
                                    provided by organic searches or search results. It also based on relevance, quality, and
                                    other ranking factors.
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
                                <div class="accordion-body">
                                    It requires a planned SEO strategy that includes producing high-quality content,
                                    perfecting the structure and appearance of websites, constructing dependable backlinks,
                                    and more. The quality and applicability
                                    of the content, the website’s structure and design, the competitiveness of the targeted
                                    keywords, the sphere authority, and numerous other factors all play a part in the way a
                                    website performs in search
                                    engine results.
                                </div>
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
                                <div class="accordion-body">
                                    While it’s true that Google Advertisements is a potent tool for adding business to your
                                    website, it’s a paid advertising platform, and the business it generates terminates as
                                    soon as you stop paying for the
                                    announcements. However, SEO is a long-term investment that can help you bring organic
                                    business or business that you do not have to pay for directly, to your website.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection