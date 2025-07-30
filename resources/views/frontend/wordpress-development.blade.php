
@extends('layouts.front.app')
<meta name="robots" content="noindex, nofollow">
@section('content')

    <section class="page-header" style="background-image: url({{ custom_asset('front_assets/img/digital_marketing-banner.png')}});">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 mb-4">
                    <div class="page-header-info">
                        <h1>Best Wordpress Development Agency in India</h1>
                        <p>Boost your online presence with the best digital marketing agency in India - Digi Rush Solutions. Convert your website visitors into your customers Now!</p>
                        <div class="btn_digital">
                            <a href="{{route('contact')}}" class="default-btn"> Hire Now </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="main_subscription_form  new_digital_form">
                        <div class="under_form_sestion">
                            <h2>Avail Our Digital Marketing Services Now </h2>
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
                        <span class="sub-heading">Best Digital Marketing Agency</span>
                        <h2>Best Digital Marketing Services in India: Your Top Choice</h2>
                    </div>
                    <div class="about-content">
                        <p>Looking for the best digital marketing services to grow your business? Digi Rush Solutions is the <a href="{{ route('digital_marketing') }}">best digital marketing agency in India</a> and recognized as the best digital marketer in India. Our team offers comprehensive digital marketing services in India, ensuring your brand stands out online.
                        </p>
                        <p>No matter where you are in India—from Chandigarh, Bangalore, Jaipur, Pune, Delhi (NCR), Amritsar, Shimla, Mumbai, Kolkata, Lucknow, Noida, Gurugram, and beyond—we're known as the top digital marketing agency in India. Our focus is on delivering exceptional results by providing customized solutions tailored to your needs.</p>
                        <p>Choose Digi Rush Solutions for unparalleled expertise and innovative strategies. Let us help you achieve your digital goals with the most effective marketing techniques available.</p>

                        <p>Here are the Digital Marketing Services we offer:</p>

                        <ul class="tab-list">
                            <a href="{{ route('ppc_expert') }}">
                                <li><i class="las la-hand-point-right"></i>PPC (Pay Per Click)</li>
                            </a>
                            <a href="{{ route('seo_company') }}">
                                <li><i class="las la-hand-point-right"></i>SEO (Search Engine Optimization) </li>
                            </a>
                            <a href="{{ route('social_media_marketing') }}">
                                <li><i class="las la-hand-point-right"></i>SMM (Social Media Marketing)
                                </li>
                            </a>
                            <a href="{{ route('content_management') }}">
                                <li><i class="las la-hand-point-right"></i>CMS (Content Management and Marketing) </li>
                            </a>

                        </ul>
                        <a href="{{ route('contact') }}" class="default-btn">GET STARTED</a>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="about-thumb">
                        <img src="{{ custom_asset('front_assets/img/services_img.png')}}" alt="img">
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
                <div class="col-lg-6 col-md-12 col-12 py-2">
                    <div class="section-heading mb-40">
                        <span class="sub-heading">Digital Marketing Agency in India</span>
                        <h2>Role of Best Advertising Agency in India</h2>
                    </div>
                    <p>
                    Digi Rush Solutions is a pre-eminent advertising agency in India that plays a vital role in shaping brand narratives and promoting growth within the business. We create compelling campaigns that are tuned according to the target audience while harnessing creativity and strategic insight. With an established acknowledgment as one of the best <a href="{{ route('content_management')}}">content marketing agencies in India,</a> we approach data-driven methods to optimize efforts across several platforms and get maximum reach and engagement. Our team combines innovative ideas and proven strategies from social media and digital marketing to old media. We help brands build the best presence in a market of stiff competitors, increase visibility, and continue building customer loyalty. At the end of the day, Digi Rush Solutions is your partner for navigating modern marketing.

                    </p>
                      <div class="role_get_sonsultant">
                        <a href="{{ route('contact') }}" class="default-btn">GET A FREE CONSULTATION</a>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-12 py-2">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6 ">
                            <div class="industries_box service-item">
                                <span class="reting">165%</span>
                                <p class="h_box">AVERAGE SEO TRAFFIC INCREASE AFTER 1 YEAR</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6 ">
                            <div class="industries_box service-item">
                                <span class="reting">70%</span>
                                <p class="h_box">AVERAGE ROI INCREASE FROM SEO</p>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 col-6 ">
                            <div class="industries_box service-item">
                                <span class="reting">326+</span>
                                <p class="h_box">SEO PROJECTS COMPLETED</p>
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
                <span class="sub-heading white">Our Services</span>
                <h2>Digital Marketing Services We Offer</h2>
                <p class="quality_main">Digi Rush Solutions offers various Digital Marketing Services in India to achieve your business goals.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box">
                        <h4>Search Engine Optimization</h4>
                        <p>
                            Digi Rush Solutions is the best SEO agency in India that follows, tries, and tests SEO services
                            processes to transform your website from a static online informational tool into a powerful
                            sales tool. Using both on-page and off-page SEO strategies, our SEO specialists conduct
                            extensive keyword research so that your website ranks higher in search engines.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box">

                        <h4>PPC or Google Ads</h4>
                        <p>Boom your business with the best PPC expert services agency in India - Digi Rush. We create the
                            best PPC ads and landing pages that increase traffic and sales and maximize your company’s
                            potential in a short period.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Content Marketing</h4>
                        <p>
                            Content is the king of any website. Digi Rush Solutions has a whole team of experienced content
                            creators for you if you want any blogs, press releases, website content, or anything else. Our
                            creators know how to grab the attention of users through the finest content, thus helping you in
                            generating leads.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box">

                        <h4>Social Media Marketing</h4>
                        <p>Social media marketing (SMM) is online paid marketing on social media platforms like Facebook,
                            Instagram, Twitter, YouTube and all. Its primary aim is to enhance a company's brand reputation,
                            generate leads, boost sales, and drive traffic to their website. SMM is also known as
                            e-marketing and it is a part of digital marketing. SMM involves strategic utilization of social
                            networks to engage with audiences, promote products or services, and develop relationships,
                            ultimately contributing to business growth and success.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box">

                        <h4>Local SEO</h4>
                        <p>
                        Grow your brand’s local online presence and attract more customers with our Best <a href="{{ route('local_seo_company') }}">Local SEO services in India.</a> Our expert team specializes in Local SEO strategies that will optimize your website, improve your search engine rankings, and drive targeted traffic to your business. With our tailored approach, we'll help you dominate the local search results and increase your visibility in your community.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Keyword Research</h4>
                        <p>Effective keyword research is crucial for optimizing your website content and driving organic
                            traffic. Being the top Keyword Research Agency in India, we conduct comprehensive keyword
                            research to identify relevant and high-performing keywords in your industry. By strategically
                            incorporating these keywords into your content, we ensure maximum visibility and increased
                            chances of reaching your target audience.</p>
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
                            <h5 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What is Digital Marketing?
                                </button>
                            </h5>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Digital marketing refers to the promotion of products,
                                    services, and brands using various online channels. It involves important strategies
                                    like Search Engine Optimization (SEO), Content Marketing, Social Media Marketing (SMM),
                                    and Pay-Per-Click (PPC) advertising. Digital marketing helps businesses increase online
                                    visibility, drive the direct or indirect traffic from the sources, and generate leads,
                                    ultimately leading to higher sales and revenue.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Why do I need Digital Marketing for my business?
                                </button>
                            </h5>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Digital marketing allows you to target the guests most likely
                                    to buy your goods or services and reach a wider followership than you could with
                                    conventional ways. Additionally, it always costs less than traditional advertising and
                                    enables you to adjust to changing conditions daily. </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Can digital marketing boost my online deals?
                                </button>
                            </h5>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Digital advertising can be a very effective strategy for
                                    increasing your online sales. By using targeted advertising, improving the experience,
                                    interacting with visitors, reviewing and evaluating your strategies, and increasing the
                                    number of viewers who come as paid guests, you can boost your profile, bring in more
                                    business to your website, and increase the number of viewers who come as paying guests.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    How long does digital marketing take to show results?
                                </button>
                            </h5>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Digital marketing typically carries money and expertise. To
                                    invest in the future of your business you must put further emphasis on long-term
                                    strategies than on short-term results. Before you begin to see significant results, you
                                    need to stick with a digital marketing plan for six to twelve months. However, fixing
                                    all issues, or producing high-quality material is, if you aren’t continually refining
                                    your strategies to attract consumers.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    How important does digital marketing cost?
                                </button>
                            </h5>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">The cost of digital marketing can vary mainly based on some
                                    factors, such as the size of your company, the compass of your crusade, and the specific
                                    strategies and platforms you use. For further information about our charges, telephone
                                    the number handed below. Given that digital marketing is an investment in the long-term
                                    success of your business, it is crucial to choose tactics that are consistent with your
                                    goals and financial limitations.</div>
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
                                <a href="{{ route('web_services') }}">Web Services</a>
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
