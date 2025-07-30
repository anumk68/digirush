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
            <h1><span>Laravel  </span>Development</h1>
            <p>BEST LARAVEL DEVELOPMENT SERVICES COMPANY</p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="about-section padding digitalmarketing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 sm-padding">
                <div class="section-heading mb-20">
                    <h4 class="sub-heading">Laravel developers</h4>
                    <h2>Hire Laravel developers now!</h2>
                </div>
                <div class="about-content">
                   <p>Digi Rush is a leading Laravel Development Company in the world (India, UK, Canada and more) that uses Agile methodologies to build enterprise-grade solutions. As Laravel experts, we offer a wide range of web applications including content management , POS systems, CRMs, personal music streaming servers, rapid API generator tools, and so on.</p>
                   <p>It has proven to be one of the most powerful and effective frameworks to build feature-rich and flawless websites that can help you scale your business.</p>

                    <h5>Our suite of Laravel development services includes :</h5>
                    <ul class="tab-list">
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Laravel Web development</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Laravel Portal development</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Laravel Theme design</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Laravel Extension development</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Laravel Eloquent ORM</li>
                        </a>
                       
                    </ul>
                    <a href="contact.php" class="default-btn">GET STARTED</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="about-thumb">
                    <img src="front_assets/img/laravel.jpg" alt="img">
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
                    <h2>How can we be the right choice for your Laravel development needs?</h2>
                </div>
                <p><span class="strong_text">1. Full stack development Capability :</span>With pixel-perfect designs, simplicity, responsive user interfaces, and high-quality Laravel development tools, we guarantee quick turnarounds, smooth iterations, and cost-effective delivery.</p>
                <p><span class="strong_text">2. Skills :</span>Our developers are experienced in PHPDesigner 8, Netbeans Expert in PHP Debug Bar</p>
                <p><span class="strong_text">3. Comprehensive QA & Testing :</span>Our business layer modules are built on back-end technologies and frameworks with robust QA methods, ensuring high-quality websites.</p>
                <p><span class="strong_text">4. Best-in-class support :</span> Our Laravel web developers can handle authentication, caching, sessions, RESTful resources, and Laravel data migrations when required.</p>
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTow" aria-expanded="false" aria-controls="collapseTow">What is Laravel?</button>
                        </h2>
                        <div id="collapseTow" class="accordion-collapse collapse show" aria-labelledby="headingTow" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                               <p>Laravel is a free, open-source PHP web application framework and is known for its elegant syntax and simplicity, making it easy for developers to create and maintain high-quality web applications. It also has a large and active community of developers who contribute to the framework and provide support through forums, chat rooms, and other online resources.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded=" true" aria-controls="collapseThree">Why choose Laravel for your project?</button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Laravel is a popular PHP web application as it follows the Model-View-Controller architectural pattern, which helps to organize your code into separate components, making it easier to maintain and scale your website. Moreover, it provides a range of useful features and tools that can help to streamline the development process and make it easier to create the complex website</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How do I install Laravel?</button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>To install Laravel, firstly your system needs to meet the requirements, which include PHP and once you’ve confirmed that, you can install Laravel using Composer, which is a dependency manager for PHP. Simply run the command “composer create-project –prefer-dist laravel/laravel ” in your terminal or command prompt, replacing it with the name of your project. This will download and install Laravel and all its dependencies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What is the difference between Laravel and other PHP frameworks?</button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Laravel is a PHP web application framework known for its elegant syntax, robust features, and developer-friendly approach. Compared to other PHP frameworks, Laravel has a clean and readable syntax, offers a wider range of built-in features such as routing, caching, and authentication, and has a powerful ORM system that simplifies database operations. Other PHP frameworks may have a more traditional syntax and offer a more limited range of features.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">Is the Laravel web application framework for frontend or backend development?</button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                               <p>Laravel is a framework for building backends for websites. It is a popular PHP framework used for building websites. Laravel provides a wide range of tools and features for backend developers. Also, Laravel does provide some frontend functionality, such as Blade templating engine and frontend asset compilation, but its primary focus is on backend development.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection