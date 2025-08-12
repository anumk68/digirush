<meta name="robots" content="noindex, nofollow">
<?php $__env->startSection('content'); ?>
   <section class="page-header page-header-secnd"
      style="background-image: url(<?php echo e(custom_asset('front_assets/img/web_devlopment_banner.png')); ?>);">
      <div class="page-header-shape"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7">
            <div class="page-header-info">
               <h1>Best Mobile SEO in India​</h1>
               <p>Delivering innovative and customized web solutions to elevate your business in the digital landscape.
               </p>
               <div class="btn_digital">
                 <a href="<?php echo e(route('contact')); ?>" class="default-btn"> Hire Now </a>
               </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="main_subscription_form  new_digital_form">
               <div class="under_form_sestion">
                 <!-- <h2>Get Your Quote Now</h2> -->
                 <div class="main_gif_heading">
                   <img src="<?php echo e(custom_asset('front_assets/img/40_GIF.gif')); ?>" alt="" style="height: 160%;width: 100%;
      max-width: 148px;
      ">
                   <h2>Upgrade Your Online Presence Today! </h2>
                 </div>
                 <form method="post" action="<?php echo e(route('seoform.submit')); ?>" id="contact-form">
                   <?php echo csrf_field(); ?>
                   <input type="hidden" name="city_name" value="digital_marketing">
                   <div class="form-field">
                     <input type="text" id="fname" name="fname" placeholder="Full Name" value="<?php echo e(old('fname')); ?>">
                     <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <div class="error-message" style="color:red;"><?php echo e($message); ?></div>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   </div>
                   <div class="form-field">
                     <input type="email" id="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
                     <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <div class="error-message" style="color:red;"><?php echo e($message); ?></div>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   </div>
                   <div class="form-field">
                     <input type="text" id="city" name="city" placeholder="City" value="<?php echo e(old('city')); ?>">
                     <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <div class="error-message" style="color:red;"><?php echo e($message); ?></div>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   </div>
                   <div class="form-field">
                     <div class="input-group">
                        <div class="input-group-prepend">
                          <select name="countryCode">
                            <option data-countryCode="IN" value="91" <?php echo e(old('countryCode') == '91' ? 'selected' : ''); ?>>Ind
                              (+91)</option>
                            <option data-countryCode="UK" value="44" <?php echo e(old('countryCode') == '44' ? 'selected' : ''); ?>>UK
                              (+44)</option>
                            <option data-countryCode="US" value="1" <?php echo e(old('countryCode') == '1' ? 'selected' : ''); ?>>US (+1)
                            </option>
                          </select>
                        </div>
                        <input type="text" id="phone" name="number" minlength="10" maxlength="10"
                          class="form-control" value="<?php echo e(old('number')); ?>">
                     </div>
                     <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <div class="error-message" style="color:red;"><?php echo e($message); ?></div>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   </div>
                   <div class="form-field">
                     <input type="text" id="url" name="message" placeholder="Your Website"
                        value="<?php echo e(old('message')); ?>">
                     <small style="color: grey; font-size: 14px;">Example: www.google.com (Full Domain Name)</small>
                     <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <div class="error-message" style="color:red;"><?php echo e($message); ?></div>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   </div>
                   <div id="otp-group4" style="display:none;">
                     <label for="otp">Enter OTP</label>
                     <input type="text" name="otp" class="form-control" />
                   </div>
                   <p id="message" style="color:red; margin-top: 10px;"></p>
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
               <span class="sub-heading">Best SEO Agency</span>
               <h2>Hire best seo expert in india to Increase your Visibility and Ranking</h2>
            </div>
            <div class="about-content">
               <p>Welcome to Digi Rush Solutions, <a href="<?php echo e(route('seo_company')); ?>">affordable seo company in
                   india.</a> Our professional SEO services are tailored to elevate your online presence, drive
                 targeted traffic and maximize your business’s visibility on search engine results.</p>
               <p>SEO is the practice of optimizing a website’s web pages according to search engine algorithms or
                 web content to improve its visibility and ranking on search engine results pages (SERPs). SEO
                 involves a combination of techniques and strategies. We can say that SEO is to attract organic
                 (non-paid) traffic to a website through targeted keywords. Our Top SEO Services Include: </p>
               <ul class="tab-list on_page_optimization  targeted_jquery">
                 <div class="accordion">
                   <div class="accordion-section">
                     <a href="#accordion-2" class="accordion-section-title"><i class="las la-hand-point-right"></i>
                        On-Page Optimization <span class="plus">+</span><span class="minus">-</span></a>

                     <div id="accordion-2" class="accordion-section-content" style="display: none;">

                        <p>On-page optimization (On-page SEO) means optimising the
                          live webpage according to search engines. In other words, it improves visibility
                          in search engine results. It includes optimizing meta tags (such as title tags
                          and meta descriptions), heading tags, URL structures, and content quality.</p>
                     </div>
                   </div>
                   <div class="accordion-section">
                     <a href="#accordion-3" class="accordion-section-title"><i
                          class="las la-hand-point-right"></i>Off-Page Optimization <span class="plus">+</span><span
                          class="minus">-</span></a>

                     <div id="accordion-3" class="accordion-section-content" style="display: none;">

                        <p>Off-page optimization (Off-page SEO) is a set of
                          techniques that improve a website’s search engine rankings without changing the
                          website itself. It’s also known as off-site SEO. The goal of off-page SEO is to
                          make users and search engines view a website as more trustworthy.</p>

                     </div>
                   </div>
                   <div class="accordion-section">
                     <a href="#accordion-4" class="accordion-section-title"> <i
                          class="las la-hand-point-right"></i>Technical SEO <span class="plus">+</span><span
                          class="minus">-</span></a>

                     <div id="accordion-4" class="accordion-section-content" style="display: none;">

                        <p>Technical SEO is important because if pages on a site
                          aren’t accessible to search engines, they won’t appear in search results or
                          search result pages (SERPs). This can result in a loss of traffic to a website
                          and potential revenue.</p>

                     </div>
                   </div>
                 </div>
               </ul>
               <a href="<?php echo e(route('contact')); ?>" class="default-btn">GET STARTED</a>
            </div>
          </div>
          <div class="col-lg-6 sm-padding">
            <div class="about-thumb">
               <img src="<?php echo e(custom_asset('front_assets/img/seo_optimization_r.jpg')); ?>" alt="img">
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
               <h2>We Are Transforming Ideas Into Reality</h2>
            </div>
            <p>Digi Rush Solutions, a web development company in India, has excelled in creating advanced web portals
               for various industries, including eCommerce. We also offer internship programs for aspiring web
               developers. Our front-end web developer agency utilizes up-to-date technologies like Laravel and
               CodeIgniter to deliver tailored, adaptable, and contemporary websites at affordable prices.
            </p>
            <p>Digi Rush Solutions, the best agency for web development, believes in providing comprehensive solutions
               that cover all aspects of <a
                 href="https://digirushsolutions.com/blogs/which-are-the-best-trends-in-web-development-for-2023">web
                 development</a>. When you choose us, you’ll have access to customized development processes and
               scalable web applications that deliver clear and impressive results. As a full stack developer company,
               our team of professionals ensures your website operates smoothly and efficiently, keeping a close eye on
               its performance to safeguard your business’s reputation. For specialized projects, you can also hire a
               core PHP developer from our expert team. Benefit from our extensive expertise today as one of the <a
                 href="<?php echo e(route('web_services')); ?>">best web service providers</a>!
            </p>
            <a href="<?php echo e(route('contact')); ?>" class="default-btn btn_response">GET A FREE CONSULTATION</a>
          </div>
          <div class="col-lg-6 col-md-12 col-12">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-6 ">
                 <div class="industries_box service-item">
                   <span class="reting">95+</span>
                   <p class="h_box">CUSTOM WORDPRESS DELIVERED</p>
                 </div>
               </div>
               <div class="col-lg-6 col-md-6 col-6 ">
                 <div class="industries_box service-item">
                   <span class="reting">80+ </span>
                   <p class="h_box">WORDPRESS CORE WEB VITALS FIXED </p>
                 </div>
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-lg-6 col-md-6 col-6 ">
                 <div class="industries_box service-item">
                   <span class="reting">150+ </span>
                   <p class="h_box">SHOPIFY PROJECTS</p>
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
          <span class="sub-heading white"> Web Development</span>
          <h2>Our Core Web Development <br>Services</h2>
          <p class="quality_main">Your website is a business tool intended to deliver measurable results (website
            traffic, leads and sales). This is why Digi Rush web design solutions are centered around delivering on
            this primary objective.
          </p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
            <div class="service-item service_box best_box">
               <h4>eCommerce Development</h4>
               <p>As a leading eCommerce website development company, Dish Rush ensures complete success for your
                 eCommerce endeavors by ensuring complete adherence to your requirements. As a result of our extensive
                 experience, we design websites that are unique and engaging, providing your customers with a seamless
                 online shopping experience.
               </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
            <div class="service-item service_box best_box">
               <h4>WordPress Development</h4>
               <p>As a WordPress website development company, we highlight the wide range of benefits that WordPress
                 offers to its users. With it, developers can create the perfect platform for you using the extensive
                 options available. With our customized WordPress development services, companies can gain complete
                 control over their business processes and functions. Using CMS development features, we build a
                 website that is easy to maintain and meets all industry standards.
               </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
            <div class="service-item service_box best_box">
               <h4>PHP Core Development
               </h4>
               <p>
                 Among the most useful programming languages, PHP offers excellent compatibility with other
                 technologies. Digi Rush is an organization committed to the development of top-quality PHP websites
                 that are tailored according to each customer's project requirements. From us, you can hire core PHP
                 developers who adhere to SEO guidelines and optimize the website and PHP applications so they are more
                 visible in search engine results.
               </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
            <div class="service-item service_box best_box">
               <h4>Shopify Development
               </h4>
               <p>
                 Looking for a Shopify website development company that can build robust, next-generation, and
                 customizable online stores? With our Shopify developers, we are here to tailor our services to
                 your needs and take your business to the next level. Hire us and take advantage of our Shopify
                 expertise.
               </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
            <div class="service-item service_box best_box">
               <h4>Laravel Development</h4>
               <p>
                 As a most reputed Laravel Development Company, we unleash the power of the Laravel Framework and
                 help your business to reach new heights. We have Laravel Developers that have extensive
                 experience as they work with a variety of industries to deliver robust solutions. Hire us now!
               </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
            <div class="service-item service_box best_box">
               <h4>Full Stack Web Development
               </h4>
               <p>Hiring a full stack developer company offers many advantages—from quicker development time to lower
                 development costs, making them a popular choice for many companies. From our global talent network,
                 Digi Rush has a team of full-stack web developers, designers, and product managers tailored to meet
                 your business requirements.
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
          <h2>Frequently Asked Questions
          </h2>
        </div>
        <div class="row">
          <div class="col-lg-12 sm-padding">
            <ul class="tab-list on_page_optimization  targeted_jquery">
               <div class="accordion">
                 <div class="accordion-section">
                   <a href="#accordion-2" class="accordion-section-title"> Why do I need a website development
                     company? <span class="plus">+</span><span class="minus">-</span></a>
                   <div id="accordion-2" class="accordion-section-content" style="display: none;">
                     <p>The all-in-one solution to rank your website and get organic traffic is the
                        expertise, knowledge and skills of the website development company. Come, join hands
                        with Digi Rush, the most experienced and leading marketing team and grow your
                        business and get more clients converted into leads.
                     </p>
                   </div>
                 </div>
                 <div class="accordion-section">
                   <a href="#accordion-3" class="accordion-section-title">How long does it take to build a website?
                     <span class="plus">+</span><span class="minus">-</span></a>
                   <div id="accordion-3" class="accordion-section-content" style="display: none;">
                     <p>Depending on various factors such as the complexity of the website, the number of
                        pages, the functionality required and the expertise of the person, the duration of
                        the website depends. Digi Rush generally provides the delivery of the website based
                        on the factors such as the availability of content, the quality of the design and
                        the responsiveness of the client in approvals and decisions.
                     </p>
                   </div>
                 </div>
                 <div class="accordion-section">
                   <a href="#accordion-4" class="accordion-section-title"> What are the sources employed to build a
                     website? <span class="plus">+</span><span class="minus">-</span></a>
                   <div id="accordion-4" class="accordion-section-content" style="display: none;">
                     <p>The most important source is a web hosting service, which provides the space where
                        the website will be stored and made available to the public. Some other important
                        sources are domain name registrars, Content management systems (CMS) such as
                        WordPress. Web development tools like HTML, CSS, and JavaScript are used to design
                        and develop the website’s visual appearance and functionality.
                     </p>
                   </div>
                 </div>
                 <div class="accordion-section">
                   <a href="#accordion-5" class="accordion-section-title"> Can you provide responsive web development
                     services?<span class="plus">+</span><span class="minus">-</span></a>
                   <div id="accordion-5" class="accordion-section-content" style="display: none;">
                     <p>Yes, our website development services do involve the process of creating websites
                        that are optimized for different devices and screen sizes which ensures that a
                        website is easy to use and navigate on any device. Digi Rush ensures to provide you
                        with the best responsive website services, as it is an essential aspect of modern
                        web design and development.
                     </p>
                   </div>
                 </div>
                 <div class="accordion-section">
                   <a href="#accordion-6" class="accordion-section-title">Is
                     it possible for me to edit my website on my own?<span class="plus">+</span><span
                        class="minus">-</span></a>
                   <div id="accordion-6" class="accordion-section-content" style="display: none;">
                     <p>Yes, you can edit your website on your own, if your website was created using a CMS
                        such as WordPress.If your website was custom-built, you may need to have some
                        knowledge of HTML, CSS, and JavaScript to make changes to the code.
                     </p>
                   </div>
                 </div>
               </div>
            </ul>
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
                     <a href="<?php echo e(route('social_media_marketing')); ?>">Social Media Marketing</a>
                   </li>
                   <li>
                     <a href="<?php echo e(route('web_designing')); ?>">Web Design </a>
                   </li>
                   <li>
                     <a href="<?php echo e(route('web_services')); ?>">Web Services</a>
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
                     <a href="<?php echo e(route('seo_company')); ?>">SEO Services</a>
                   </li>
                   <li>
                     <a href="<?php echo e(route('ppc_expert')); ?>">PPC Service</a>
                   </li>
                   <li>
                     <a href="<?php echo e(route('digital_marketing')); ?>">Digital Marketing</a>
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
                     <a href="<?php echo e(route('content_management')); ?>">Content Management Marketing</a>
                   </li>
                   <li>
                     <a href="<?php echo e(route('local_seo_company')); ?>">Local SEO</a>
                   </li>
                   <li>
                     <a href="<?php echo e(route('shopify_seo')); ?>">eCommerce SEO</a>
                   </li>
                 </ul>
               </div>
            </div>
          </div>

        </div>
      </div>
   </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\rahul\resources\views/frontend/mobile_seo.blade.php ENDPATH**/ ?>