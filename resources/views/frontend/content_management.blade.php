@extends('layouts.front.app')

@section('content')


    <section class="page-header page-header-secnd" style="background-image: url({{ custom_asset('front_assets/img/content_banner.png')}});">
        <div class="page-header-shape"></div>
        <div class="container">
      <div class="row align-items-center">
            <div class="col-md-7">
                <div class="page-header-info">
                    <h1>Content Marketing Agency In India</h1>
                     <p >Transform Your Brand's Story with Engaging Content That Captivates and Converts  </p>
                    <div class="btn_digital">
                     <a href="{{ route('contact') }}" class="default-btn"> Hire Now </a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
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
        </div>
    </section>

    <section class="about-section padding digitalmarketing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 sm-padding">
                    <div class="section-heading mb-20">
                        <span class="sub-heading"> Your Business Grow?</span>
                        <h2>How Content Creation Services Help Your Business Grow?</h2>
                    </div>
                    <div class="about-content">
                        <p>In the world of business, you may think that it helps to spend hours laboring over long blogs in order to grow your business. Despite what you may think, content is the only king of your website that builds trust and is the basis for brand recognition.
                        </p>
                        <p>As a leading <a href="{{ route('content_management') }}">Content Marketing Agency in India,</a> we understand that content marketing is the process of mapping out ideas and developing content that is aligned with SEO guidelines and works with the goals of the business. It is for this reason that <a href="https://digirushsolutions.com/blogs/dont-get-left-behind-how-content-updating-can-keep-you-ahead-in-2023-2">content writing</a> has grown so much in prominence over the last few years.</p>
                        <p>Our content creation services ensure that your website provides original and search engine-friendly content to demonstrate your brand’s positive image and achieve sales growth.
                        </p>
                        <a href="{{route('contact')}}" class="default-btn">GET STARTED</a>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="about-thumb">
                        <img src="{{ custom_asset('front_assets/img/medi_global_mainn.jpg')}}" alt="content marketing services">
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
                        <h2>How Does Digi Rush Solutions Help You With Content Marketing Services?</h2>
                    </div>
                    <p>Digi Rush is a leading Content Marketing Agency in India with a team of content writers who have extensive knowledge of Content Management Systems (CMS). By following a comprehensive content marketing strategy, we are able to deliver high-quality articles that have been fully researched and are free of errors. As the <a href="{{ route('ppc_expert') }}">best PPC agency in India,</a> we also leverage keyword research and competitor analysis to assist hundreds of businesses around the world in uncovering audience demand for their products and services.</p>
                    <p>We assure :</p>
                    <ul class="tab-list">

                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Plagiarism free & unique content</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Organic rankings</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Rich and highly effective writing </li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>SEO friendly</li>
                        </a>

                    </ul>

                    <a href="{{route('contact')}}" class="default-btn btn_response">GET A FREE CONSULTATION</a>
                </div>

                <div class="col-lg-6 col-md-12 col-12">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6 ">
                            <div class="industries_box service-item">
                                <span class="reting">165%</span>
                                <p class="h_box">AVERAGE SEO TRAFFIC INCREASE AFTER 1 YEAR </p>
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
                                <span class="reting">35% </span>
                                <p class="h_box">CONVERSION RATE INCREASE </p>
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
                <h4 class="sub-heading white">Content Services</h4>
                <h2>Popular Content Services We Offer</h2>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box">

                        <h4>Blogs and Articles</h4>
                        <p>
                            Digi Rush is a content writing agency in the world that offers the services of writing blogs and
                            articles for your website as a part of our content writing services. We have an experienced team
                            of writers who can create SEO-friendly, compelling content for your blog that will capture the
                            attention of your readers. As we always use advanced keyword research tools, we are able to
                            promote the visibility of your brand more effectively.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box">

                        <h4>Technical Writing</h4>
                        <p>In case you are looking for skilled technical writers, you have come to the right place. As part
                            of Digi Rush's team, there is also a team of technical writers who remain up-to-date with the
                            latest technology updates at all times. Get in touch with us today!
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Web Content Development
                        </h4>
                        <p>
                            The content on your website determines whether your customer stays on your website or leaves it.
                            Yes, right? We have a professional, in-house content team that includes experienced writers and
                            editors who have worked on various web content writing projects. Consequently, by writing
                            SEO-friendly content, we have the ability to convert the leads you generate into customers and
                            turn them into sales.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box">

                        <h4>Social Media Content
                        </h4>
                        <p>
                            Nowadays, social media is a platform where everyone lives and interacts with each other. If you
                            do not understand how to promote your product correctly and are not following the right
                            strategies to get it noticed, you must hire us. Using Digi Rush's social media content services
                            you will be able to build a loyal community that will promote your brand. By using appropriate
                            hashtags, content formats, and graphic dimensions, we cater to your specific audiences.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box">

                        <h4>Ghost Writing Content</h4>
                        <p>
                            Is there a story about your life and achievements that you would like to share with our readers?
                            Would you like your readers to be drawn into a world of fantasy if you could be compelled to
                            capture their attention? The Digi Rush team is here to help you out. We provide ghostwriting
                            services for press releases, business letters, or even case studies without taking credit for
                            the content.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box">
                        <h4>Product Descriptions, FAQs, and more
                        </h4>
                        <p>
                            In ranking your website, each of the products and services that you offer plays an equally
                            substantial role. With our product descriptions and FAQ writing services, we can help you create
                            website pages that are concise and clearly describe all of the features of your business'
                            product or service. We provide these services for online shops, product guides, online catalogs,
                            and more.
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
                            <h5 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Why do you need a content marketing strategy?
                                </button>
                            </h5>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Content marketing strategy can help you build a strong brand,
                                    attract and retain customers, improve search engine rankings, support other marketing
                                    efforts, and measure and optimize performance.
                                    As content marketing provides the information that your followers want, it is crucial
                                    for improving outcomes and generating leads.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        How does happy marketing benefit your business?
                                    </button>
                                </h5>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Content marketing is a crucial marketing strategy that
                                        could benefit your business because it can improve brand awareness and search engine
                                        ranking, both of which could boost website traffic and improve customer engagement.
                                        Likewise, it’s possible that content marketing will spark additional changes that
                                        will improve customer engagement. </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Why should I look for a content marketing company?
                                    </button>
                                </h5>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">You can save time, acquire confidence, and get better
                                        results from your content marketing efforts by working with a content marketing
                                        company. As the business could provide good content, it can be a valuable investment
                                        for companies looking to expand and succeed in the current digital geography.</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="flush-headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefour" aria-expanded="false"
                                        aria-controls="flush-collapsefour">
                                        How does SEO content work for the business?
                                    </button>
                                </h5>
                                <div id="flush-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">SEO content is a powerful tool for businesses looking to
                                        improve their visibility in search engines, attract more organic traffic, build
                                        trust and credibility with their audience, and support their other marketing
                                        efforts. All in all, the SEO content should have a set of keywords that are commonly
                                        used by the people in their searches that could ultimately drive more traffic to
                                        your website and could help to grow the business.</div>
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
                                <a href="{{ route('ppc_expert') }}">PPC Service</a>
                                </li>
                                <li>
                                <a href="{{ route('digital_marketing') }}">Digital Marketing</a>
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
