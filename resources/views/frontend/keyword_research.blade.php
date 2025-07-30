@extends('layouts.front.app')

@section('title', $metatitle)
@section('description', $metaDescription)

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

<section class="page-header page-header-secnd" style="background-image: url({{ custom_asset('front_assets/img/keyboard_banner.png')}});">
    <div class="page-header-shape"></div>
    <div class="container">
   <div class="row align-items-center">
        <div class="col-md-7">
               <div class="page-header-info">
                        <h1>Keyword Research</h1>
                    <p>STAND OUT BY FOCUSING ON THE RIGHT KEYWORDS</p>

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
                            <small style="color: grey; font-size: 14px;">Example: www.google.com (Full Domain Name)</small> <!-- Add this line -->
                            @error('message')
                                <div class="error-message" style="color:red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-field">
                            <button id="submit" class="default-btn" type="submit">Submit<span></span></button>
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
                    <h2>Why Keyword Research Essential For Your SEO ?</h2>
                </div>
                <div class="about-content">
                    <p>If we talk about Keyword Research, this is the most commonly asked question. It is important to understand that Keywords are the foundation of your search marketing campaigns. In layman’s terms, keyword research in SEO helps you rank your website for the searches that are most relevant to the type of business you are in.</p>
                    <p>To increase the visibility of any website, this is the basic first step that should be taken. Since it is your business, you need to use keywords that are being sought by people so that they can easily find you online. This can be done with the help of keyword research tools, you need to use high competition keywords. Your content may not even be found in organic search results if incorrect keywords are implemented on your page.</p>

                    <p>Finally, search engines like Google take a look at your website’s content to determine what the right keywords are and rate you for those terms according to your website’s content.</p>
                    <a href="{{route('contact')}}" class="default-btn">GET STARTED</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="about-thumb">
                    <img src="{{ custom_asset('front_assets/img/keyword_rese.jpg')}}" alt="img">
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
                    <h2>
                      Make Your Website Visible With Our Keyword Research Strategies</h2>
                </div>
                <p>As a digital marketing agency, we have a team of experienced SEO executives who conduct keyword research  to identify valuable opportunities to drive organic traffic. We offer effective keyword research strategies rooted in data and analytics to make you visible in SERPs and take your keyword performance to the next level.</p>

                <p>It is our policy to provide different keywords for different purposes and intents. Among these queries are long-tail information for your blog posts, purchase-intent queries for your sales-driven landing pages, and your core terms that you want to rank for on your homepage. Once the keywords have been classified and cleaned up with the help of keyword planner, we send you a comprehensive list  to help you scale your SEO efforts.</p>


                <a href="{{route('contact')}}" class="default-btn btn_response">GET A FREE CONSULTATION</a>
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
<section class="service-section bg-grey padding marketing_service_offer">
    <div class="corner-pattern"></div>
    <div class="corner-pattern bottom"></div>
    <div class="arrow-direction"></div>
    <div class="container">
        <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
            <h2>What do we do? </h2>
            <p class="quality_main">Digi Rush Solutions is a UK nearby Search engine optimization organization, and we incorporate various administrations that can help your mission, including:</p>

        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 py-2 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-item service_box best_box">
                  
                    <h4>Keyword categorization
                    </h4>
                    <p>By categorizing, grouping, and filtering keywords, Digi Rush makes keyword research more effective. By understanding category-based search behavior, you can make your SEO and PPC campaigns significantly more effective.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 py-2 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                <div class="service-item service_box best_box">
                  
                    <h4>PPC Keyword Research

                    </h4>
                    <p>We cannot overestimate the power of the internet when it comes to reaching audiences. When you begin your PPC campaign, you may assume that any random keyword will make your ad click, but this is probably not the case. Your campaign will not be successful unless your audience is aware of it. With Digital Rush, your website is targeted with the right PPC keywords to reach your target audience and bring engaged traffic to it.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 py-2 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                <div class="service-item service_box best_box">
                  
                    <h4>Keyword analysis

                    </h4>
                    <p>As soon as we have completed keyword research, we proceed to keyword analysis. The on-site process of selecting and assigning keywords to specific web pages on a website is known as keyword mapping. It is important to set up your digital campaigns for success by developing a keyword map.

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
                                Why is keyword research important?
                            </button>
                        </h5>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Every digital marketing strategy must include keyword research since it may help you better understand your target market, boost your SEO, develop compelling content, increase website traffic and lead generation. This can provide an accurate representation of the results that Google believes are most relevant to your search query and goal keywords.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                How can I use my keyword research to increase my traffic?
                            </button>
                        </h5>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">To produce high-quality content that will be used for search engine optimization and can quickly help you to increase the organic traffic to your website, you must select the best collection of keywords. Use long-tail keywords, keep a close eye on your ranking, and adjust your content or keyword selection appropriately. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Why is keyword research essential for SEO?
                            </button>
                        </h5>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">You can have a chance to rank well for the particular service by doing your research, choosing the appropriate set of keywords and phrases, producing relevant content, and optimizing your website for search engines. Additionally, this might enhance your visibility, draw more visitors, and raise your chance of showing up at the top of search results. </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsefour" aria-expanded="false"
                                aria-controls="flush-collapsefour">
                                Why can’t I just do keyword research on my own?
                            </button>
                        </h5>
                        <div id="flush-collapsefour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">While conducting keyword research independently is feasible, it might not be the best strategy. Utilizing keyword research tools or working with an agency, can help you make sure you’re receiving the most precise and pertinent information to guide your SEO strategy. By working with Digi Rush, achieve better outcomes as we have more expertise and experience. </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-headingfive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsefive" aria-expanded="false"
                                aria-controls="flush-collapsefive">
                                Why should I work with Digi Rush for my business keyword research needs?
                            </button>
                        </h5>
                        <div id="flush-collapsefive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Working with the Digi Rush marketing team with the expert knowledge and experience that takes a comprehensive approach to keyword research, uses data analysis, provides transparent reporting and is results-driven can help ensure that you get the most out of your SEO efforts and drive more traffic and conversions for your business.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection