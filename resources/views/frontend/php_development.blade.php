
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
<section class="page-header">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
           
            <h1>PHP <span>Development</span></h1>
            <p>CUSTOM PHP WEB DEVELOPMENT AGENCY</p>
        </div>
    </div>
</section>
<section class="about-section padding digitalmarketing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 sm-padding">
                <div class="section-heading mb-20">
                    <h4 class="sub-heading">PHP developers</h4>
                    <h2>Hire PHP developers now!</h2>
                </div>
                <div class="about-content">
                    <p>Digi Rush provides robust and tailor-made PHP web development solutions that meet the requirements of our clients. By utilizing our talented resources and our understanding of the client, we are able to provide our clients with the most effective PHP web development experience.</p>
                    <p>As one of the most reputable web development companies in the industry, we have the ability to code websites within a very short period of time, in keeping with the latest technologies that are available.</p>

                    <h5>Our suite of PHP web development solutions includes :</h5>
                    <ul class="tab-list">
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Custom PHP Web development</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>PHP based CMS development</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Cake PHP development</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Web Portals development services</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>PHP Consultation Services</li>
                        </a>
                    </ul>
                    <a href="contact.php" class="default-btn">GET STARTED</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="about-thumb">
                    <img src="front_assets/img/php.jpg" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="progress-section bg-grey padding">
    <div class="corner-pattern"></div>
    <div class="corner-pattern bottom"></div>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="section-heading mb-40">
                    <h4 class="sub-heading"></h4>
                    <h2>Our PHP Development Tech Stack </h2>
                </div>
                <p>1. BACKEND Frameworks:<br>Laravel</p>
                <p>CMS: eCommerce, WordPress, Shopify, WooCommerce</p>

                <p>2. FRONTEND<br> React JS</p>
                <p>3. DATA MANAGEMENT<br> MySQL</p>
                <p>4. HTTP SERVERS<br>Apache</p>

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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTow" aria-expanded="false" aria-controls="collapseTow">What is PHP?</button>
                        </h2>
                        <div id="collapseTow" class="accordion-collapse collapse show" aria-labelledby="headingTow" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>PHP is a popular server-side scripting language used for web development and is open-source and runs on various platforms, including Windows, Linux, and macOS. It is used to create dynamic web pages and applications and can interact with databases to store and retrieve data.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded=" true" aria-controls="collapseThree">How can I choose the right PHP development company?</button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion" >
                            <div class="accordion-body">
                                <p>Checking the company’s expertise in popular PHP frameworks and their experience in providing different PHP web development services are the factors to be considered while choosing a PHP development company. Choose Digi Rush as we provide the proper methodologies and also affordable plans to meet the client’s requirements.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">What does a PHP developer do?</button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>A PHP developer is responsible for designing, developing, and maintaining web-based applications using the PHP programming language. They work with clients or project managers to identify business requirements and develop solutions that meet those requirements and must have the combination of technical skills, creativity, and attention to detail.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Is PHP good for eCommerce?</button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Yes, as it is a widely adopted coding language by developers around the world. The benefits of using PHP include compatibility and integration, performance efficiency, cost-effectiveness and flexibility which Digi rush aims to provide by rendering their services. PHP can be an excellent tool for CMS and eCommerce websites.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">Why should I choose Digi Rush for PHP development services?</button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>By choosing Digi Rush, having the vast experience and expertise in PHP portfolio, best customer reviews and affordable prices can help you build your website. While choosing us, you can have a look at the work done by us on similar projects and their rating and reviews for the work done by us. Have a look at the case studies and choose us!

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection