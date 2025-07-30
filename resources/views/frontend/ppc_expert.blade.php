@extends("layouts.front.app")
@section('content')

    <section class="page-header page-header-secnd" style="background-image: url({{ custom_asset('front_assets/img/ppc_bannner.png')}});">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="page-header-info">
                        <h1>Best PPC Agency In India</h1>
                        <p>Maximize your online visibility and conversions with India’s leading PPC strategies tailored for your business needs.
                        </p>
                        <div class="btn_digital">
                        <a href="{{ route('contact') }}" class="default-btn"> Hire Now </a>
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
                        <h2>What is PPC Management?</h2>
                    </div>
                    <div class="about-content">
                        <p>Achieving online traffic is often a challenge, particularly for those who are not accustomed to the field. An ideal solution in such a situation would be to use PPC services from the <a href="{{ route('ppc_expert') }}">best PPC agency in India</a>. In the world of internet marketing, pay-per-click marketing is one of the most common methods of getting better leads. It drives traffic to websites when users visit them, and when a user clicks on an advertisement, the customer pays for these paid ads to the owner of the website.</p>
                        <p> PPC in digital marketing is both a short-term strategy and a long-term strategy that can give
                            your business a boost and provide you with a profitable return on investment (ROI). It is a
                            remarkable instrument that enables you to increase sales and thereby grow your business at the
                            same time.</p>
                        <a href="{{route('contact')}}" class="default-btn">GET STARTED</a>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="about-thumb">
                        <img src="{{ custom_asset('front_assets/img/businesswoman-working-laptop.jpg')}}" alt="pay per click advertising india">
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
                        <h2>Why Digi Rush Solutions For Best PPC Advertising Services?</h2>
                    </div>
                    <p>Digi Rush is a smart PPC company in India with years of experience in this industry. Our PPC experts have helped hundreds of clients achieve their ROAs (Return on Ad Spends) by applying strong strategies and using them effectively. </p>

                    <p>As a leading <a href="{{ route('content_management') }}">content marketing agency in India,</a> we offer comprehensive PPC services in India that provide valuable opportunities to businesses on various platforms, such as Facebook, Instagram, local service ads, Google Ads, and others. With our <a href="https://digirushsolutions.com/blogs/what-are-the-3-phases-of-ppc">PPC campaigns,</a> you can expect instant success and a high level of visibility that will increase your exposure.</p>
                    <a href="{{route('contact')}}" class="default-btn btn_response">GET A FREE CONSULTATION</a>
                </div>

                <div class="col-lg-6 col-md-12 col-12">

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
    </section>
    <!-- <section class="service-section bg-grey padding marketing_service_offer">
        <div class="corner-pattern"></div>
        <div class="corner-pattern bottom"></div>
        <div class="arrow-direction"></div>
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4 class="sub-heading white">PPC Ads</h4>
                <h2>Types Of PPC Ads <br>We Offer</h2>
                <p class="quality_main">As ought to be the situation with any promoting drive, Digi Rush guarantees that
                    each choice we make
                    lines up with our client’s objectives alongside information backing the move.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box">

                        <h4>Search Ads</h4>
                        <p>
                            Advertising on popular search engines such as google, bing is the most common form of paid
                            search marketing. It increases your chances for maximum rate of investment. Our experts create
                            PPC advertisements that are relevant, targeted and optimized and aimed at acquiring strong,
                            high-quality leads from new customers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box">

                        <h4>Sponsored Ads</h4>
                        <p>Typically, sponsored ads appear at the end or above the search engine results when a user
                            searches for a product or service.
                            They appear either in Google Play, shopping apps, Google Maps, etc. For better results, you may
                            also wish to target your
                            campaigns according to the languages spoken by your prospective customers.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Social Media Campaign</h4>
                        <p>By paying for advertising on social media platforms such as Twitter, Facebook, YouTube, Instagram, LinkedIn, etc., you can capture leads and drive sales on these platforms. In terms of cost-effectiveness, this is one of the most effective investment strategies that offers a favorable return on investment, making it essential to consider the best PPC advertising service available.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box">

                        <h4>Google Local Services Management Ads</h4>
                        <p>
                            When a user searches for local services on a platform such as Google, they will generate a list
                            of local businesses that are available in their area as results. A paid advertisement in Local
                            Search is focused on the location of your business. It is based on a pay-per-lead business
                            model. Let the years of experience Digi Rush has to offer help you in growing your business.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box">

                        <h4>Remarketing Ads</h4>
                        <p>
                            In some cases, you might think it strange that you have seen the exact ad of the company/
                            product that you have searched earlier in Google. All thanks to remarking advertisements. This
                            form of paid advertising offers the advantage of keeping your brand top in the minds of
                            potential clients since they have seen it before.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Display Ads</h4>
                        <p>
                            In the world of online marketing, display ads or banner ads are a form of paid advertising that
                            enables marketers to enable campaigns to promote their brands/ products using text, images and
                            videos. These ads can also appear across a number of channels including websites, apps, search
                            results, etc.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="bg-half-color">
            <div class="shape-pattern"></div>
        </div>
    </section> -->
    <!-- <section class="blog-section faq-page bg-grey padding">
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4 class="sub-heading white">FAQ</h4>
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
                                    What is PPC?
                                </button>
                            </h5>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Pay-Per-Click is a term used to describe a specific kind of
                                    online advertising service in which advertisers are charged a fee each time an ad is
                                    clicked. Advertisers can make ads for display on search engine results pages (SERPs) or
                                    on other websites by bidding on specific keywords and phrases that are relevant to their
                                    target audience.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What do PPC services include?
                                </button>
                            </h5>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A PPC service, offered by Digi Rush are keyword research,
                                    creating ads, optimizing landing pages, managing bids, tracking conversions, reporting
                                    and analysis, and campaign optimization which ultimately improve their return on
                                    investment (ROI), and achieve their desired outcomes, such as increased website traffic,
                                    leads, or sales. </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Why is PPC important as a part of marketing strategy?
                                </button>
                            </h5>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">PPC is important for a marketing strategy for the companies
                                    seeking to increase website traffic, generate leads, and increase sales. Businesses can
                                    more effectively accomplish their marketing objectives by maximizing their PPC efforts,
                                    targeting particular audiences, and measuring the results of their campaigns.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    Why advertise with PPC ads?
                                </button>
                            </h5>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">PPC is a well-known digital marketing tool that allows
                                    companies to advertise on a variety of websites, social media networks, and search
                                    engines. It is a useful tool for companies looking for a cost-effective and measurable
                                    method to increase traffic, improve conversions, and generate leads.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    What factors decide my PPC cost?
                                </button>
                            </h5>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">The cost of PPC is based on a number of variables, including
                                    the bid amount, ad quality score, targeting choice, level of competition, ad relevance,
                                    etc. You can enhance the performance of your ad and maximize your return on investment
                                    by keeping the various variables in mind and optimizing your ad targeting, bid amount,
                                    and ad quality (ROI).</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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
                                <a href="{{ route('web_services') }}">Web Services</a>
                                </li>
                            
                                <li>
                                    <a href="{{ route('web_development') }}">Web Development</a>
                                </li>
                                <li>
                                    <a href="{{ route('web_designing') }}">Web Design </a>
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
                                    <a href="{{ route('digital_marketing') }}">Digital Marketing</a>
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
