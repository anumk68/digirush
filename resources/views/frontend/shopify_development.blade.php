@extends('layouts.front.app')

@if(!empty($metaTitle->value))
  @section("title", $metaTitle->value)
@else
  @section("title", "Digi Rush Solutions | A Complete Web Solutions Agency in India")
@endif
@if(!empty($metaDesc->value))
  @section("description", $metaDesc->value)
@else
  @section("description", "Digi Rush Solutions | Find The Perfect Solution For Your Business")
@endif
@if(!empty($metaKey->value))
  @section("keywords", $metaKey->value)
@else
  @section("keywords", "Business, marketing, seo")
@endif

@section('content')

<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
            <button id="popup-search-button" type="submit" name="submit">
                <i class="las la-search"></i>
            </button>
        </form>
        <div class="search-close"><i class="las la-times"></i></div>
    </div>
</div>

<div id="searchbox-overlay"></div>
<section class="page-header page-header-secnd">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h1><span>Shopify </span>Development</h1>
            <p>CUSTOM SHOPIFY DEVELOPMENT AGENCY</p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="about-section padding digitalmarketing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 sm-padding">
                <div class="section-heading mb-20">
                    <h4 class="sub-heading">dedicated Shopify developers</h4>
                    <h2>Hire dedicated Shopify developers now!
                    </h2>
                </div>
                <div class="about-content">
                   <p>Enhance user engagement through high website performance, stellar functional efficiency, and user-friendly interface design. Digi Rush offers tailored Shopify development services that help your business stand out in the eCommerce market and on search engines.</p>
                   <p>We develop eye-catching, unique, and responsive Shopify sites at an affordable price to maximize your brand’s visibility.</p>

                    <h5>Our suite of Shopify development services includes :</h5>
                    <ul class="tab-list">
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Shopify SEO implementation</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Shopify theme development</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Shopify Store setup & configuration</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Shopify Plus development</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Custom Shopify web development</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Shopify apps integration & Configuration</li>
                        </a>
                    </ul>
                    <a href="contact.php" class="default-btn">GET STARTED</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="about-thumb">
                    <img src="front_assets/img/shopify_dev.jpg" alt="img">
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
                    <h2>
                    How do we make Shopify work for you?</h2>
                </div>
                <p><span class="strong_text">1. Quality Standards:</span>As part of Digi Rush’s Shopify store development process, our developers adhere to refined coding practices and follow superior quality standards.</p>
                <p><span class="strong_text">2. Performance and Speed :</span>It is our goal to ensure maximum conversions by creating shopify websites that are unique, smooth, and visually appealing so that you do not have to compromise.</p>
                <p><span class="strong_text">3. Mobile friendly and response :</span>Every aspect of the store is carefully considered and we create a mobile-first, fully-responsive store that is search engine friendly.</p>
                <p><span class="strong_text">4. Clear Call to Action :</span>Shopify stores designed by our developers feature clear call-to-action buttons to provide clear indications of the next step.</p>
                <a href="contact.php" class="default-btn btn_response">GET A FREE CONSULTATION</a>
            </div>

            <div class="col-lg-6 col-md-12 col-12">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6 ">
                        <div class="industries_box service-item">
                            <h3 class="reting">165%</h3>
                            <h5 class="h_box">AVERAGE SEO TRAFFIC INCREASE AFTER 1 YEAR</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-6 ">
                        <div class="industries_box service-item">
                            <h3 class="reting">70%</h3>
                            <h5 class="h_box">AVERAGE ROI INCREASE FROM SEO
                        </div>

                    </div>
                </div>
                <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 col-6 ">
                            <div class="industries_box service-item">
                                <h3 class="reting">326+</h3>
                                <h5 class="h_box">SEO PROJECTS COMPLETED</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6 ">
                            <div class="industries_box service-item">
                                <h3 class="reting">35%</h3>
                                <h5 class="h_box">CONVERSION RATE INCREASE</h5>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</section>
<section class="blog-section faq-page bg-grey padding">
    <div class="container">
        <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
            <h4 class="sub-heading white">Frequently</h4>
            <h2>Frequently Asked Questions
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 sm-padding">
                <div class="faq-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTow">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTow" aria-expanded="false" aria-controls="collapseTow">What is Shopify development?</button>
                        </h2>
                        <div id="collapseTow" class="accordion-collapse collapse show" aria-labelledby="headingTow" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                               <p>Shopify development refers to the process of building and customizing online stores using the Shopify platform. It is an e-commerce platform that allows businesses to create and manage online stores, sell products, and process payments. Moreover, it offers a range of features and tools for building and customizing online stores, including a variety of templates, themes, and plugins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded=" true" aria-controls="collapseThree">Why do I need to hire a Shopify development agency to start a store?</button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Expertise, experience, customization and optimization are the several benefits to hire a Shopify development agency to start a store. Hire Digi Rush who can help you create a store that is tailored to your business needs and goals, and can help you stand out from the competition in the crowded online marketplace.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How long does it take for a Shopify web development agency to deliver the live project?</button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>For a basic Shopify store with a pre-designed theme and a small number of products, the development time can be relatively short, typically taking a few weeks to complete. However, for a more complex store with custom functionality, integrations, and design, the development time can be longer, taking a few months or more to complete.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How is Shopify better than other eCommerce stores?</button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Shopify is known for its ease of use and user-friendly interface, which makes it accessible to those without technical skills. Additionally, Shopify offers a wide range of customization options, including pre-designed templates, themes, and plugins, as well as the ability to create custom themes and plugins to meet specific business needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">Why choose Digi Rush as a Shopify development company?</button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                               <p>Choosing Digi Rush, as a Shopify development company, all factors such as expertise and experience, portfolio, communication and collaboration, support and maintenance, and pricing can be a right fit for your business needs and goals. Moreover, the support and maintenance and affordable pricing plans attract a lot of viewers to our services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection