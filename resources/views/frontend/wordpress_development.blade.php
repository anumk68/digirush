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
            <!-- <h4>About Us!</h4> -->
            <h1>WordPress <span>Development</span></h1>
            <p>BEST WORDPRESS DEVELOPMENT AGENCY</p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="about-section padding digitalmarketing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 sm-padding">
                <div class="section-heading mb-20">
                    <h4 class="sub-heading">WordPress developers</h4>
                    <h2>Hire WordPress developers now!
                    </h2>
                </div>
                <div class="about-content">
                    <p>When it comes to building a website, WordPress is almost always the first choice that you come across. It is one of the few CMS that is easy to install, deploy, and upgrade. As a leading WordPress development agency, Digi Rush is dedicated to offering top-notch, professional WordPress design and development services.
                    </p>
                    <p>As a team of developers, we have built WordPress websites with fast load times, eye-catching UI/UI design, and minimal downtime.</p>

                    <h5>Our suite of WordPress development services include :</h5>
                    <ul class="tab-list">
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>WordPress Installation and Configuration</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>WordPress Theme development</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>WordPress Blog development </li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>WordPress Integration and Migration</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>WordPress Plugin development</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>WordPress eCommerce Solutions</li>
                        </a>
                    </ul>
                    <a href="contact.php" class="default-btn">GET STARTED</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="about-thumb">
                    <img src="front_assets/img/wordpress.jpg" alt="img">
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

                    <h2>Page Speed Optimization : </h2>
                </div>
                <p>1. PAGE SPEED ANALYSIS<br>Using google page speed, Gtmetrix( if we use )</p>
                <p>2. SERVER LEVEL OPTIMIZATION <br>Apache, MySQL</p>

                <p>3. FRONTEND LEVEL OPTIMIZATION <br>Image Optimization – new image & format \ Fix 404 errors</p>

                <p>4. BACKEND LEVEL OPTIMIZATION<br> Upgrades all plugins</p>

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
                <!-- //// -->
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
<!--/.progress-section-->


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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTow" aria-expanded="false" aria-controls="collapseTow">Why is WordPress the best CMS for web development?</button>
                        </h2>
                        <div id="collapseTow" class="accordion-collapse collapse show" aria-labelledby="headingTow" data-bs-parent="#faq-accordion" >
                            <div class="accordion-body">
                                <p>WordPress is considered one of the best CMS for web development for several reasons as it is easy to use and requires no coding experience. The platform offers a user-friendly interface, making it accessible to beginners and professionals alike. WordPress is versatile and can be used to create a wide range of websites, including blogs, e-commerce sites, and portfolios.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded=" true" aria-controls="collapseThree">Is WordPress secure?</button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion" >
                            <div class="accordion-body">
                                <p>WordPress is open-source software and is generally considered a secure platform for web development. However, WordPress’s security is continually being improved, and the platform has a solid track record of responding to security threats promptly. This makes it easier for developers to find and fix security vulnerabilities quickly.

                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How long does it take to develop a WordPress website?</button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>The time taken to develop a WordPress website can vary depending on several factors such as the complexity of the site, the functionality required, the number of pages etc. For a basic WordPress site with a premade theme, it may take only a few hours to set up, add content, and launch whereas a custom site with a unique design and functionality can take several weeks or even months to develop.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How much does it cost to develop a WordPress website?</button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>The cost of developing a WordPress website can vary widely based on several factors, including the website’s complexity, functionality, design, and the developer’s skill level. A simple WordPress website with a premade theme can cost you less expensive while a custom WordPress website with unique features and design can be costly.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">Can I easily edit everything on WordPress?</button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Yes, one of the benefits of using WordPress as a content management system (CMS) is that it is designed to be user-friendly and easy to edit. You can easily update and manage your website’s content, including pages, posts, images, and other media, without requiring any technical knowledge or coding skills.

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