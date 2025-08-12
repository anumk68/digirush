@extends('layouts.front.app')
@section('content')
    
    <section class="page-header" style="background-image: url({{ custom_asset('front_assets/img/agency_banglore_banner.png')}});">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="page-header-info">
                        <h1>Top SEO Agency in Bangalore (Bengaluru)</h1>
                        <p>Are you looking for the best SEO company in Bangalore? Our top SEO agency in Bangalore offers
                            expert SEO services to boost your online presence. Hire us now!
                        </p>
                        <div class="btn_digital">
                            <a href="{{route('contact')}}" class="default-btn">Hire Now! </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="main_subscription_form  new_digital_form">
                        <div class="under_form_sestion">
                            <!-- <h2>GET FREE WEBSITE AUDIT</h2> -->
                            <div class="main_gif_heading">
          <img src="{{custom_asset('front_assets/img/40_GIF.gif')}}" alt="" style="height: 160%;width: 100%;
    max-width: 148px;
 ">
          <h2>Upgrade Your Online Presence Today! </h2>
        </div>
                            <form method="post" action="{{ route('seoform.submit') }}" id="contact-form">
                                @csrf
                                <input type="hidden" name="city_name" value="bangalore">
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
                        <span class="sub-heading">SEO Services in Bangalore (Bengaluru)</span>
                        <h2>Are you looking for the best SEO Services in Bangalore?</h2>
                    </div>
                    <div class="about-content">
                        <p>Well, your search ends here. We are the best SEO Agency in Bangalore. As your trusted SEO
                            Partner, we provide you with high-quality services that are designed to increase your online
                            presence and attract targeted traffic directly to your website.</p>
                        <p>Search Engine Optimization (SEO) is the process of bringing your website into line with search
                            engines’ algorithms. Our strategic approach is designed to improve your website’s ranking
                            through a combination of advanced methods and strategies.</p>
                        <p>With our experienced team, we will help you to improve your ranking on search engine results
                            pages (SERPs) and bring in organic traffic using well-chosen keywords. Our SEO Services in
                            Bangalore include: </p>
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
                                        <div class="accordion-body">On Page SEO, we help you to optimize your live web
                                            pages to get the most visibility in search engines. This includes perfecting
                                            your meta tags like title tag and meta description, heading tag, URL structure,
                                            and content quality.</div>
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
                                            Off Page SEO, we work with you to improve your site’s ranking on search engine
                                            results pages without changing the core structure of your site. The main goal is
                                            to make your website more credible and reliable in search engine’s eyes. If you
                                            don’t do this, search engines won’t be able to index your pages and you’ll lose
                                            traffic and money.
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
                                        <div class="accordion-body">Technical SEO, on the other hand, is a comprehensive
                                            approach to optimize your website’s online presence.

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
                        <img src="{{ custom_asset('front_assets/img/SEO-Ranking-Factors-Bangalore-SEO-Agency.jpg')}}" alt="SEO Services in Bangalore">
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
                        <span class="sub-heading">Hire the SEO Company in Bangalore</span>
                        <h2>Why Choose us as an SEO Company in Bangalore (Bengaluru)</h2>
                    </div>
                    <p>If you’re looking for the top SEO company in Bangalore that can help you navigate the ever-changing
                        digital landscape, <a href="{{route('home')}}">Digi Rush Solutions</a> is the right choice for you. Our Expertise:</p>

                    <ul class="fasting_times">
                        <h3>Why choose us:</h3>
                        <li>
                            <p>We have over 10+ years of experience in the industry and are committed to delivering
                                exceptional results.</p>
                        </li>
                        <li>
                            <p>Our expertise in website optimization and fixing any issues to increase visibility and
                                engagement.</p>
                        </li>
                        <li>
                            <p>Our team is committed to providing customized solutions that meet your specific needs and
                                objectives, and we go the extra mile to keep you informed of the strategies we use and the
                                results we achieve.</p>
                                
                        </li>
                        <li>
                            <p>In addition to our services in Bangalore, we extend our expertise in the form of a leading <a href="{{route('seo_agency_chandigarh')}}">SEO Agency in Chandigarh</a>. Our team is dedicated to helping businesses in Chandigarh meet their digital marketing objectives through proper SEO strategies.</p>
                        </li>
                    </ul>
                    <h3>Get Started Today!</h3>
                    <p>When you choose Digi Rush Solutions, you’re choosing a digital partner that’s committed to your
                        brand’s success. Let us help your brand succeed in the digital world. Contact us today to start your
                        journey to unmatched online visibility and growth.</p>
                    <a href="{{ route('contact') }}" class="default-btn btn_response">GET FREE WEBSITE AUDIT</a>
                </div>

                <div class="col-lg-6 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6 ">
                            <div class="industries_box service-item">
                                <span class="reting">2.5x </span>
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

                <span class="sub-heading">SEO Activities</span>
                <h2>What we do in SEO? </h2>
                <p class="quality_main">In SEO, we employ various techniques and strategies to enhance a website’s
                    visibility and ranking on search engine result pages (SERPs). Here’s what we do:</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box">

                        <h4>Keywords Research</h4>
                        <p>Keyword research is the process of finding and analyzing search terms or that words which people
                            use in search engines. This term is mainly used in SEO (Search Engine Optimization), means
                            keyword research is the foundation of SEO, and helps you find what people are searching for
                            online on google, yahoo, Bing and more search engines. Some popular keyword research tools
                            include: Google Keyword Planner, SEMrush, Ahrefs, Moz Keyword Explorer, Ubersuggest,
                            smallseotools, and more.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-padding py-2 wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box">

                        <h4>On-Page Optimization</h4>
                        <p>On-page SEO is the process of optimizing web pages and their content for search engines and users
                            alike. It involves optimizing on-page elements such as the title tag, meta description, heading
                            tag, and URL structure, as well as the overall quality of the content. This can help to improve
                            the ranking of pages on Google and increase organic traffic. Common on-page SEO tasks include
                            search intent optimization, title tag optimization, internal link optimization, and URL
                            optimization.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Off-Page Optimization</h4>
                        <p> Off-page Search Engine Optimization (SEO) is a marketing technique that involves activities that
                            are done outside of your website to improve your search engine ranking. The aim is to make your
                            site appear more authoritative to search engines and to users. Some examples of off-page search
                            engine optimization include link building, guest posting, and social media marketing. Steps of
                            Off Page SEO is: Link building, Guest posting, Social media marketing, and more.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Technical SEO</h4>
                        <p> Technical SEO focuses on improving the technical aspects of a website to make it easier for
                            search engines to crawl, index, and interpret. Some of the technical SEO tasks include improving
                            site speed, fixing crawl errors, using Schema markup, sitemap.xml issues file, robots.file
                            issues, and improving mobile responsiveness. All of these tasks improve the site’s performance,
                            making it more visible and user-friendly, which helps improve its ranking on Search Engine
                            Result Pages (SERPs).</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Quality Content Creation</h4>
                        <p>We produce high-quality, valuable, engaging and relevant content based on your audience’s needs.
                            Our content is SEO-compliant and optimized for search engines (SERPs). Whether you’re creating a
                            blog post, article, infographic, a video or any other kind of content, our aim is to give you
                            valuable information that is pertinent to your audience while adhering to SEO guidelines. When
                            you do this, you’ll be able to improve your search engine visibility and engagement, which will
                            in turn drive traffic and boost your online presence.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sm-padding py-2 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Monitoring and Analysis</h4>
                        <p>We keep track of SEO campaign performance through various analytics tools. This allows us to
                            track keyword ranking, website traffic, and user engagement, among other important metrics. We
                            use data-driven insights to refine our strategies to achieve better results. This proactive
                            approach allows us to keep up with changing trends and user behavior, so we can stay ahead of
                            the game in today’s ever-changing digital world. Continuous monitoring and analysis allow us to
                            maximize the impact of our SEO campaigns and drive long-term growth for our clients.</p>
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What should I look for in an SEO agency in Bangalore?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">When choosing an SEO agency in Bangalore, prioritise those
                                        with proven experience in your industry, a comprehensive range of SEO services, and
                                        a strong reputation backed by client reviews. Ensure their strategies align with
                                        your business goals, they offer clear communication, and their pricing fits your
                                        budget while delivering value.</div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    How can an SEO agency in Bangalore help my business?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">An SEO agency in Bangalore can elevate your business by
                                    improving search rankings, driving targeted traffic through keyword optimization, and
                                    enhancing user experience with better site structure and speed. They also build your
                                    site's authority through link-building and content marketing while analyzing performance
                                    metrics to refine strategies for ongoing success.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    What are the benefits of hiring a local SEO agency in Bangalore?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Hiring a local SEO agency in Bangalore offers several
                                    advantages, including expertise in the local market and consumer behavior, personalized
                                    service with the convenience of face-to-face meetings, and valuable local networking
                                    opportunities. Additionally, they can craft strategies specifically designed to enhance
                                    your visibility in local searches and optimize your Google My Business listings.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    How long does it take to see results from an SEO campaign?
                                </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">SEO is a long-term strategy, often taking several months to
                                    show significant results. The timeline depends on factors like industry competition, the
                                    current status of your website, the scope of SEO work required, and the consistency of
                                    optimization efforts. Regular and ongoing strategies are key to achieving and
                                    maintaining top rankings.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    What are the common SEO mistakes to avoid?
                                </button>
                            </h2>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Common SEO mistakes to avoid include keyword stuffing,
                                    neglecting mobile optimization, and ignoring performance analytics. Also, avoid using
                                    low-quality links and duplicate content, as these can harm your site's search rankings.
                                    Being aware of these pitfalls will help you make informed decisions when selecting the
                                    right SEO agency in Bangalore.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
