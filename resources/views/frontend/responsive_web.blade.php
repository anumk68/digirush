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
            <h1><span>Responsive</span> Web Design</h1>
            <p>MOBILE FIRST RESPONSIVE WEB DESIGN SERVICES  </p>
        </div>
    </div>
</section>
<section class="about-section padding digitalmarketing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 sm-padding">
                <div class="section-heading mb-20">
                    <h4 class="sub-heading">RESPONSIVE WEB DESIGN COMPANY</h4>
                    <h2>LEADING RESPONSIVE WEB DESIGN COMPANY</h2>
                </div>
                <div class="about-content">
                    <p>Mobile phones are used primarily for searching the internet these days. Therefore, your business should consider responsive web design services if you wish to optimize its website presence on tablets, mobile devices, etc.</p>
                    <p>Digi Rush ensures that your business website will run smoothly across all kinds of devices and screens with varying screen sizes regardless of the device. We can provide unmatched responsive web design services to you to get the best possible experience for your viewers.</p>
                    <a href="contact.php" class="default-btn">GET STARTED</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="about-thumb">
                    <img src="front_assets/img/responsive.jpg" alt="img">
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
                    <h2>Our suite of Responsive web designs layouts includes:</h2>
                </div>
                <ul class="tab-list">
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>App development services with responsive layouts</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Migration of fixed web apps to responsive layouts</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Responsive UI development with fluid responsive layout</li>
                        </a>
                        <a href="">
                            <li><i class="las la-hand-point-right"></i>Consulting services for responsive design implementation </li>
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
<section class="service-section bg-grey padding">
    <div class="corner-pattern"></div>
    <div class="corner-pattern bottom"></div>
    <div class="arrow-direction"></div>
    <div class="container">
        <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
           
            <h2>Why hire us?</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 py-2 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-item service_box">

                    <h3>Market centric offerings</h3>
                    <p>We are a leading responsive web design company that complements your business with the right strategies, technical tools, and a market-centric approach.
                    </p>
                 
                </div>
            </div>
            <div class="col-lg-4 col-md-6 py-2 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                <div class="service-item service_box">

                    <h3>Ensured results</h3>
                  <p>Having the most technical knowledge in the industry will ensure that your results will be 100% guaranteed.
                  </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 py-2 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                <div class="service-item service_box">
                    <h3>No multiple URS</h3>
                   <p>We use a single URL to present your website to all the devices, ensuring that your website looks aesthetically pleasing on all of them.
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTow" aria-expanded="false" aria-controls="collapseTow">What is a responsive design?</button>
                        </h2>
                        <div id="collapseTow" class="accordion-collapse collapse show" aria-labelledby="headingTow" data-bs-parent="#faq-accordion" >
                            <div class="accordion-body">
                               <p>Responsive design is an approach to web design that aims to create websites that provide an optimal viewing experience across a wide range of devices and screen sizes. This means that a website with a responsive design will automatically adjust its layout, content, and functionality to suit the screen size of the device it is being viewed on, whether it’s a laptop, tablet, desktop, or smartphone.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded=" true" aria-controls="collapseThree">Why is responsive web design important?</button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion" >
                            <div class="accordion-body">
                               <p>Responsive web design is important because it ensures that a website can be easily viewed and navigated on any device, regardless of the screen size or resolution, and provides a consistent user experience accessing the internet through mobile devices. A responsive design also helps with search engine optimization (SEO) and can save time and resources by eliminating the need for multiple versions of a website for different devices.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Why does my business need a responsive web design?</button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                               <p>A responsive web design is crucial for every business as it ensures that your website is optimized for all devices, providing an excellent user experience regardless of the screen size. This results in improved search engine rankings, increased website traffic and conversions, and ultimately, higher revenue. A responsive web design is necessary to stay competitive in today’s digital landscape and meet the needs and expectations of your customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What is the difference between responsive and mobile-friendly designs?</button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Mobile-friendly design is a simplified version of a website that is specifically designed for mobile devices as it offers limited features and content whereas Responsive design adjusts the layout of a website according to the screen size of the device it is being viewed on as it offers the same content and features as the desktop version but is optimized for different devices and screen sizes, ensuring an excellent user experience across all platforms.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsevin">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesevin" aria-expanded="false" aria-controls="collapsesevin">How do I optimize images for responsive web design?</button>
                        </h2>
                        <div id="collapsesevin" class="accordion-collapse collapse" aria-labelledby="headingsevin" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                               <p>To optimize images for responsive web design, you need to ensure that your images are of appropriate size and format, compressed to reduce the file size, and use responsive images that adapt to the screen size of the device they are viewed on by using lazy loading and consider image dimensions for different screen sizes. By following these techniques, you can significantly improve the page loading times and enhance the user experience on your website, making it more accessible to all devices and platforms.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection