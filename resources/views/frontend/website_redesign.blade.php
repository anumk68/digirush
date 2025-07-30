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
            <h1>Website <span> Redesign</span></h1>
            <p>UPGRADE YOUR WEBSITE WITH WEBSITE REDESIGN SERVICES  </p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="about-section padding digitalmarketing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 sm-padding">
                <div class="section-heading mb-20">
                    <h4 class="sub-heading">WEB REDESIGN COMPANY</h4>
                    <h2>TOP RATED WEB REDESIGN COMPANY</h2>
                </div>
                <div class="about-content">
                    <p>Keeping your website up to date or upgrading it on a regular basis is extremely important. It offers excellent exposure to digital marketing, as well as resulting in an increase in the number of social signals and traffic to our websites.</p>
                    <p>From creating stunning graphics to constructing site architecture that is designed to inspire, interest, engage, and convert your target audience, Digi Rush covers all bases.</p>
                    <a href="contact.php" class="default-btn">GET STARTED</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="about-thumb">
                    <img src="front_front_assets/img/redesing.jpg" alt="img">
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
                    <h4 class="sub-heading"></h4>
                    <h2>Our suite of Web redesigning services includes :</h2>
                </div>
                <ul class="tab-list">
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Redesigning Conventional websites</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Landing page redesign and optimization</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Content Migration </li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Redesigning theme/ template</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Custom WordPress redesigning </li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>eCommerce Website redesign  </li>
                        </a>
                    </ul>


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
                            <h5 class="h_box">AVERAGE ROI INCREASE FROM SEO</h5>
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
    </div>
</section>
<!--/.progress-section-->
<section class="service-section bg-grey padding">
    <div class="corner-pattern"></div>
    <div class="corner-pattern bottom"></div>
    <div class="arrow-direction"></div>
    <div class="container">
        <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
           
            <h2>Why would you redesign your<br> website with Digi Rush?</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 py-2 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-item service_box">

                    <h3>Optimized for SEO</h3>
                    <p>The design and layout of your website need to be revamped, but it also needs search engine optimization. Almost every aspect of the website is optimized for search engines, including your images, CSS, and code.
                    </p>
                    <!-- <a href="service-details.html">Explore Services <i class="las la-long-arrow-alt-right"></i></a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 py-2 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                <div class="service-item service_box">

                    <h3>Ingenious graphics & animations
                    </h3>
                    <p>To ensure that more and more visitors to our website can engage with the content, our developers use professional graphics and animation.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 py-2 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                <div class="service-item service_box">
                    <h3>Gives fresh looks
                    </h3>
                    <p>
                    Our website redesigning services transform your outdated and not generating leads websites into up-to-date ones that are more effective.
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
            <h4 class="sub-heading white">Frequently</h4>
            <h2>Frequently Asked Questions
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 sm-padding">
                <div class="faq-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTow">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTow" aria-expanded="false" aria-controls="collapseTow">Why should one consider redesigning a website?</button>
                        </h2>
                        <div id="collapseTow" class="accordion-collapse collapse show" aria-labelledby="headingTow" data-bs-parent="#faq-accordion" >
                            <div class="accordion-body">
                               <p>One should consider redesigning the website if the current website is outdated, the user experience is poor, the website is not mobile friendly, or if the website is not meeting business aims. By redesigning you can improve the website’s visual appeal, and functionality and could also make it easier for visitors to navigate and find the information they need for their requirements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded=" true" aria-controls="collapseThree">How to improve website performance through a website redesign?</button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion" >
                            <div class="accordion-body">
                               <p>To improve website performance through a website redesign, you need to take certain actions such as optimizing the website speed that could help to load quickly, need to simplify the website design and make it mobile friendly and you also need to use clear call-to-action buttons. Moreover, you should always ensure that the website is SEO optimized to attract clients.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How often should one redesign a website?</button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                               <p>As such, there is no set time frame for when a website should be redesigned. However, website redesigns are typically done every 2-3 years to keep up with changing design trends, and technology updates, and to ensure the website is meeting the needs of your users. It’s important to regularly assess the performance of the website and make updates as needed to improve the user experience and achieve business goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What are a few redesigning tips to increase leads and sales?</button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Tips for redesigning a website generally involve the use of call-to-action buttons, simple navigations, optimize for mobile, use of high-quality images, easy checkout process while payment and creating high-quality content for engaging the targeted audience. By implementing these, you can create a website that is user-friendly and helps to increase leads and sales for the business.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">How do you plan a website redesign project?</button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                               <p>For the website redesign, we mainly start with proper analysis and research of the current website, knowing the goals and objectives of the business, creating a plan considering all the factors, implementing all plans for the redesign and lastly doing testing before launching the main website to ensure that it is functioning properly or not. Once the testing is done we launch the main website to target the right audience.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



@endsection