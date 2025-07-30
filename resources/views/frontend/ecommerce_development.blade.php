@extends('layouts.front.app')

@if (!empty($metaTitle->value))
    @section('title', $metaTitle->value)
@else
    @section('title', 'Digi Rush Solutions | A Complete Web Solutions Agency in India')
@endif
@if (!empty($metaDesc->value))
    @section('description', $metaDesc->value)
@else
    @section('description', 'Digi Rush Solutions | Find The Perfect Solution For Your Business')
@endif
@if (!empty($metaKey->value))
    @section('keywords', $metaKey->value)
@else
    @section('keywords', 'Business, marketing, seo')
@endif

@section('content')

    <section class="page-header page-header-secnd">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h1> eCommerce Development</h1>
                <p>CUSTOMER eCOMMERCE WEBSITE DEVELOPMENT SERVICES</p>
            </div>
        </div>
    </section>
    <section class="about-section padding digitalmarketing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 sm-padding">
                    <div class="section-heading mb-20">
                        <h4 class="sub-heading">eCommerce developers</h4>
                        <h2>Hire eCommerce developers now!
                        </h2>
                    </div>
                    <div class="about-content">
                        <p>Digi Rush is a ROI focused eCommerce website development company that helps your business to give
                            it wings. We offer user-centric solutions, and customer-centric tools designed to help your
                            e-commerce business grow and reach more customers.</p>
                        <p>In collaboration with our designers, developers, and digital marketers, we develop preplanned
                            eCommerce websites and present them in wireframes, development and design guidelines.
                            Ultimately, our designers aim to provide users with a clear message and strong calls-to-action
                            that encourage them to take action.</p>

                        <h5>Our suite of eCommerce development services :</h5>
                        <ul class="tab-list">
                            <a href="">
                                <li><i class="las la-hand-point-right"></i>eCommerce website design</li>
                            </a>
                            <a href="">
                                <li><i class="las la-hand-point-right"></i>M-Commerce app development</li>
                            </a>
                            <a href="">
                                <li><i class="las la-hand-point-right"></i>eCommerce website development</li>
                            </a>
                            <a href="">
                                <li><i class="las la-hand-point-right"></i>eCommerce audit</li>
                            </a>
                            <a href="">
                                <li><i class="las la-hand-point-right"></i>eCommerce support and evaluation</li>
                            </a>

                        </ul>
                        <a href="contact.php" class="default-btn">GET STARTED</a>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="about-thumb">
                        <img src="public/front_assets/img/ecommerse_dev.jpg" alt="best ecommerce seo services in india ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.about-section-->

    <section class="progress-section bg-grey padding">
        <div class="corner-pattern"></div>
        <div class="corner-pattern bottom"></div>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="section-heading mb-40">
                        <h2>Our eCommerce Tech : </h2>
                    </div>
                    <p>1. DATABASE <br>MySQL</p>
                    <p>2.CMS <br>WooCommerce, Shopify</p>

                    <p>3. FRONTEND/BACKEND <br>React JS</p>

                    <p>4. SERVER SIDE SCRIPTING <br> PHP </p>

                    <a href="contact.php" class="default-btn btn_response">GET A FREE CONSULTATION</a>
                </div>

                <div class="col-lg-6 col-md-12 col-12">

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
                    <!-- //// -->
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
    </section>
    <!--/.progress-section-->


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
                            <h4 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What are eCommerce SEO services?
                                </button>
                            </h4>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">eCommerce SEO services refer to the process of optimizing an
                                    online store’s website and product pages to rank higher in search engine results pages
                                    (SERPs). These services typically include keyword research, on-page optimization,
                                    technical SEO, link building, and content creation. The goal of eCommerce SEO is to
                                    increase organic traffic to the online store, improve its visibility, and ultimately
                                    drive more sales.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    How is eCommerce SEO different from normal SEO?
                                </button>
                            </h4>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Search engine optimization (SEO) for e-commerce websites is a
                                    specialized branch of general SEO that concentrates on improving the websites’ online
                                    visibility. SEO drives more organic traffic to your website because it requires a more
                                    professional and targeted approach than Ecommerce SEO. An E-commerce SEO is all about
                                    maximizing conversions from leads and brand awareness. </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Why do eCommerce sites require SEO?
                                </button>
                            </h4>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">SEO is necessary for e-commerce websites to succeed in the
                                    jammed online market. It can be challenging to stand out and attract customers in an
                                    online marketplace where there are so many companies offering the same product/service.
                                    eCommerce sites can benefit from SEO by appearing higher in SERPs for pertinent search
                                    terms. This can increase inbound traffic to the site and, in turn, increase sales.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    How will eCommerce SEO help businesses?
                                </button>
                            </h4>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Being with Digi Rush, eCommerce SEO can benefit businesses in
                                    several ways, including greater brand recognition, higher conversion rates, increased
                                    traffic, and enhanced user experience. Businesses can increase their possibilities of
                                    being discovered by prospective consumers when they look for pertinent terms by
                                    optimizing their online stores for search engines like Google. This can lead to
                                    increased traffic to their website, which can eventually result in more purchases and
                                    income.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    How do you develop an eCommerce SEO strategy?
                                </button>
                            </h4>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Our efficient eCommerce SEO strategy entails some vital stages,
                                    beginning with keyword research and ending with the identification of the keywords and
                                    phrases that prospective consumers are using in their searches. Developing high-quality
                                    backlinks to their website and optimizing the product sites for those terms, is another
                                    step.</div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>




@endsection
