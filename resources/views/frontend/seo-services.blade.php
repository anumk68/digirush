@extends('layouts.front.app')
<meta name="robots" content="noindex, nofollow">
@section('content')

<section class="page-header" style="background-image: url({{ custom_asset('front_assets/img/seo_banner.png')}});">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="page-header-info">
                    <h1>Best SEO Company in India</h1>
                    <p>Digi Rush Solutions is the best SEO company in India, offering expert services to boost your
                        rankings, drive traffic, and grow your online presence.</p>
                    <div class="btn_digital">
                        <a href="{{route('contact')}}" class="default-btn">Hire Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="main_subscription_form  new_digital_form new_digital_formpd">
                    <div class="under_form_sestion">
                        <h2>Get FREE Website Audit</h2>
                        <form method="post" action="{{ route('seoform.submit') }}" id="contact-form">
                            @csrf
                            <input type="hidden" name="city_name" value="company">
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
                                <input type="text" id="city" name="city" placeholder="City" value="{{ old('city') }}">
                                @error('city')
                                <div class="error-message" style="color:red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-field">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <select name="countryCode">
                                            <option data-countryCode="IN" value="91" {{ old('countryCode')=='91'
                                                ? 'selected' : '' }}>Ind
                                                (+91)</option>
                                            <option data-countryCode="UK" value="44" {{ old('countryCode')=='44'
                                                ? 'selected' : '' }}>UK
                                                (+44)</option>
                                            <option data-countryCode="US" value="1" {{ old('countryCode')=='1'
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
                            <div class="form-field">
                                <button id="submit" class="default-btn" type="submit">Submit</button>
                            </div>
                        </form>

                    </div>
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
                    <span class="sub-heading">Best SEO Agency</span>
                    <h2>Hire best seo expert in india to Increase your Visibility and Ranking</h2>
                </div>
                <div class="about-content">
                    <p>Welcome to Digi Rush Solutions, <a href="{{ route('seo_company') }}">affordable seo company in
                            india.</a> Our professional SEO services are tailored to elevate your online presence, drive
                        targeted traffic and maximize your business’s visibility on search engine results.</p>
                    <p>SEO is the practice of optimizing a website’s web pages according to search engine algorithms or
                        web content to improve its visibility and ranking on search engine results pages (SERPs). SEO
                        involves a combination of techniques and strategies. We can say that SEO is to attract organic
                        (non-paid) traffic to a website through targeted keywords. Our Top SEO Services Include: </p>
                    <ul class="tab-list on_page_optimization  targeted_jquery">
                        <div class="accordion">
                            <div class="accordion-section">
                                <a href="#accordion-2" class="accordion-section-title"><i
                                        class="las la-hand-point-right"></i> On-Page Optimization <span
                                        class="plus">+</span><span class="minus">-</span></a>

                                <div id="accordion-2" class="accordion-section-content" style="display: none;">

                                    <p>On-page optimization (On-page SEO) means optimising the
                                        live webpage according to search engines. In other words, it improves visibility
                                        in search engine results. It includes optimizing meta tags (such as title tags
                                        and meta descriptions), heading tags, URL structures, and content quality.</p>
                                </div>
                            </div>
                            <div class="accordion-section">
                                <a href="#accordion-3" class="accordion-section-title"><i
                                        class="las la-hand-point-right"></i>Off-Page Optimization <span
                                        class="plus">+</span><span class="minus">-</span></a>

                                <div id="accordion-3" class="accordion-section-content" style="display: none;">

                                    <p>Off-page optimization (Off-page SEO) is a set of
                                        techniques that improve a website’s search engine rankings without changing the
                                        website itself. It’s also known as off-site SEO. The goal of off-page SEO is to
                                        make users and search engines view a website as more trustworthy.</p>

                                </div>
                            </div>
                            <div class="accordion-section">
                                <a href="#accordion-4" class="accordion-section-title"> <i
                                        class="las la-hand-point-right"></i>Technical SEO <span
                                        class="plus">+</span><span class="minus">-</span></a>

                                <div id="accordion-4" class="accordion-section-content" style="display: none;">

                                    <p>Technical SEO is important because if pages on a site
                                        aren’t accessible to search engines, they won’t appear in search results or
                                        search result pages (SERPs). This can result in a loss of traffic to a website
                                        and potential revenue.</p>

                                </div>
                            </div>
                        </div>
                    </ul>
                    <a href="{{ route('contact') }}" class="default-btn">GET STARTED</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="about-thumb">
                    <img src="{{ custom_asset('front_assets/img/seo_optimization_r.jpg')}}" alt="img">
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
                    When it comes to selecting a top SEO agency in India, Digi Rush Solutions stands out as an excellent
                    choice. We offer <a href="{{ route('contact') }}">low-cost SEO services in India</a> without
                    compromising on quality. Our comprehensive approach to SEO covers all aspects of optimization. From
                    thorough keyword research and on-page SEO to off-page SEO link building and technical analysis, we
                    leave no stone unturned to boost your website’s visibility and organic rankings. Our team is
                    dedicated to delivering effective strategies that drive results, making us a reliable partner for
                    your digital marketing needs.
                </p>
                <p>Additionally, we have: </p>
                <ul class="tab-list">

                    <li><i class="las la-hand-point-right"></i>Expertise</li>

                    <li><i class="las la-hand-point-right"></i>Customised Approach
                    </li>

                    <li><i class="las la-hand-point-right"></i>Proven Track Record
                    </li>

                    <li><i class="las la-hand-point-right"></i>Transparent Reporting
                    </li>

                    <li><i class="las la-hand-point-right"></i>Customer Satisfaction
                    </li>
                </ul>
                <h4 class="mt-3 get_main_started">Get Started Today!</h4>
                <p>Ready to take your online presence to the next level? Contact Digi Rush Solutions today to discuss
                    your SEO needs and explore how our expert <a href="{{ route('shopify_seo') }}">ecommerce SEO
                        services in India</a> can help you achieve your business objectives. With our expertise,
                    customized strategies, and dedicated support, we’re committed to driving measurable results and
                    maximizing your ROI in the competitive digital landscape. Let us help you optimize your online store
                    for better visibility and higher conversions, ensuring you stand out in the bustling e-commerce
                    market.</p>

                <a href="{{ route('contact') }}" class="default-btn btn_response">GET A FREE CONSULTATION</a>
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
            <span class="sub-heading white"> Mistakes To Avoid</span>
            <h2>3 Costly SEO Mistakes <br> to Avoid</h2>
            <p class="quality_main">A quality approach can boost conversion rates, social media shares, and brand
                reputation. Ideally, that perfect piece of content would help reach your brand’s millions of potential
                customers if it were to become viral. However, it will not unless your website is with some errors that
                derail its SEO success. These can be the following :</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-item service_box">

                    <h4>Keyword Stuffing</h4>
                    <p>
                        If you think every sentence with a keyword on your website’s page results in a higher page
                        ranking, you are wrong. Keyword stuffing not only provides poor user experience but also runs
                        the risk of penalty from search engines. Keyword stuffing makes the content unnatural to read
                        and does not match the intention of the user. Instead, focus on incorporating keywords naturally
                        within high-quality content that provides real value. Remember, effective SEO prioritizes user
                        experience and relevance over mere keyword frequency for long-term success.</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="400ms">
                <div class="service-item service_box">

                    <h4>Non Responsive Design</h4>
                    <p>
                        The responsiveness of a website is a crucial part of SEO services. It is because approximately
                        63% of Google searches are conducted on mobile devices, and search engines favor and rank
                        responsive websites higher in search results. So, if your website lacks this feature, it will
                        never reach the number one position in search results. Ensuring your site is mobile-friendly not
                        only enhances user experience but also significantly boosts your visibility, driving more
                        traffic and potential customers to your business. Embrace responsive design to stay competitive
                        in today’s digital landscape.</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
                <div class="service-item service_box">
                    <h4>Plagiarised Content</h4>
                    <p>
                        Plagiarized content within the context of a content marketing agency refers to the unauthorized
                        use of someone else's work, ideas, or words without proper attribution or permission. It
                        involves presenting the plagiarized content as original and using it for marketing purposes.
                        Plagiarism in content marketing can lead to legal issues, damage to the image's reputation, loss
                        of credibility, and a negative impact on client relationships. It is crucial for content
                        marketing agencies to create original and valuable content, while properly crediting and
                        respecting the intellectual property of others.</p>
                </div>
            </div>
        </div>

    </div>
    <div class="bg-half-color">
        <div class="shape-pattern"></div>
    </div>
</section>

<section class="popular_searchs_booked padding">
    <div class="container">
        <div class="main_ahead_cn">
            <div class="ahead_hotling ahead_hotlinghd">
                <h4>Related Searches:</h4>
            </div>
            <div class="ahead_p">
                <p><a href="{{route('seo_company')}}">Best SEO Services in India</a> | <a
                        href="{{route('seo_company')}}">Best SEO Expert in India</a> |
                    <a href="{{route('seo_company')}}">Affordable SEO Company India</a> | <a
                        href="{{route('seo_company')}}">Top SEO Experts in India </a> | <a
                        href="{{route('seo_company')}}">Low Cost SEO Services India </a>
                </p>
            </div>
        </div>
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
                        <h5 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                What's SEO?
                            </button>
                        </h5>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Search Engine Optimization ( SEO), is the process of enhancing
                                your website’s content and placing it so that it appears advanced on organic search
                                engine results sites ( SERPs).You can increase your website’s visibility and position in
                                search engine results by making changes to it and creating material that will assist
                                search engines in understanding your website and the data it offers.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Why is SEO so important for your business?
                            </button>
                        </h5>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">SEO is important because it increases the visibility of your
                                website, which results in the growth of your business and openings to convert leads into
                                paying guests. Additionally, it’s a useful tool for promoting your business, developing
                                client relationships, and establishing your reputation as a better leader in your field.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What do your SEO services include?
                            </button>
                        </h5>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We provide SEO services to improve your website for search
                                engines so you can get more business and deals through searches. On-page, off-page,
                                Keyword research, Link building, and Content marketing are all a part of our SEO plans,
                                which could be a great booster to have organic traffic to your website. All in all, our
                                services could assist you in creating and carrying out an SEO strategy as well as
                                monitoring and evaluating the outcomes of your organic search campaign.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsefour" aria-expanded="false"
                                aria-controls="flush-collapsefour">
                                How long will it take to get my website ranked on Search Engines?
                            </button>
                        </h5>
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
                        <h5 class="accordion-header" id="flush-headingfive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsefive" aria-expanded="false"
                                aria-controls="flush-collapsefive">
                                Why pay for SEO when I can use Google Advertisements?
                            </button>
                        </h5>
                        <div id="flush-collapsefive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">While it’s true that Google Advertisements is a potent tool for
                                adding business to your website, it’s a paid advertising platform, and the business it
                                generates terminates as soon as you stop paying for the announcements. However, SEO is a
                                long-term investment that can help you bring organic business or business that you do
                                not have to pay for directly, to your website.</div>
                        </div>
                    </div>


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