<?php $__env->startSection('content'); ?>
    <section class="page-header page-header-secnd"
        style="background-image: url(<?php echo e(custom_asset('front_assets/img/web_design_banner.png')); ?>);">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="page-header-info">
                    <h1>Best Web Design Company in India</h1>
                    <p>Crafting exceptional and user-friendly websites that elevate your brand and drive online success in
                        the competitive digital landscape.
                    </p>
                    <div class="btn_digital">
                        <a href="<?php echo e(route('contact')); ?>" class="default-btn"> Hire Now </a>
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
                        <span class="sub-heading"> Web Designers?</span>
                        <h2>Why Do You Need Creative Landing Page Design?</h2>
                    </div>
                    <div class="about-content">
                        <p>Having a well-designed website is crucial for every business. Your website is often the first
                            impression potential clients have of your brand. It can significantly impact their decision to
                            engage with you or move on to a competitor. While there are many DIY website builders available,
                            you still need a professional web design company in
                                India to achieve the best results.</p>
                        <p>Professional web designers possess the expertise and knowledge to create a website that not only
                            looks visually appealing but also functions optimally. They understand the importance of user
                            experience (UX) design, ensuring that your website is easy to navigate, loads quickly, and is
                            compatible with different devices and browsers. Whether you need creative landing page design or
                            eCommerce website design, a well-designed website enhances your credibility and encourages
                            visitors to explore your site further.
                        </p>
                        <a href="<?php echo e(route('contact')); ?>" class="default-btn">GET STARTED</a>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="about-thumb">
                        <img src="<?php echo e(custom_asset('front_assets/img/side_view_main.jpg')); ?>"
                            alt="web design company in india">
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
                        <h2>Responsive Web Design Company Help You Build Your Dream Website</h2>
                    </div>
                    <p>Digi Rush Solutions is the best responsive web design company in India. We have a talented team of
                        local web designers who provide outstanding custom design and development services. Our goal is to
                        offer you cost-effective solutions without compromising on quality.
                    </p>
                    <p>As an affordable web design agency, we understand the importance of delivering exceptional value.
                        Choose Digi Rush Solutions for your web design needs, and you’ll benefit from our experienced team,
                        cost-effective solutions, and a website that stands out in today’s competitive digital landscape.
                        Whether you want to hire a web designer or seek the <a href="<?php echo e(route('home')); ?>">best website design
                            and development company in India</a>, contact us to discuss how we can help your business
                        succeed online.
                    </p>
                    <a href="<?php echo e(route('contact')); ?>" class="default-btn btn_response">GET A FREE CONSULTATION</a>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
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
                                    <input type="text" id="fname" name="fname" placeholder="Full Name"
                                        value="<?php echo e(old('fname')); ?>">
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
                                    <input type="email" id="email" name="email" placeholder="Email"
                                        value="<?php echo e(old('email')); ?>">
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
                                    <small style="color: grey; font-size: 14px;">Example: www.google.com (Full Domain
                                        Name)</small>
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
    </section>
    <section class="service-section bg-grey padding marketing_service_offer">
        <div class="corner-pattern"></div>
        <div class="corner-pattern bottom"></div>
        <div class="arrow-direction"></div>
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <span class="sub-heading white"> Design Services </span>
                <h2>Our Comprehensive Web <br>Design Services</h2>
                <p class="quality_main">Your website is a business tool intended to deliver measurable results (website
                    traffic, leads and
                    sales). This is why Digi Rush web design solutions are centered around delivering on this primary
                    objective.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box best_box">
                        <h4>eCommerce Websites</h4>
                        <p>Having an eCommerce website is essential for any online retail business in order to succeed. Our
                            goal at Digi Rush is to maximize profitability through the use of the latest technology in
                            eCommerce website design. Our eCommerce developers can enhance your digital presence by
                            optimizing your services pages, creating a unique and simple design.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box best_box">
                        <h4>Landing Page Design</h4>
                        <p>When a customer opens your website, the landing page is the first thing they see. Consequently,
                            the creative landing page design should be impressive and eye-catching enough to increase lead
                            conversion rates. Digi Rush specializes in the development of SEO and PPC-friendly,
                            high-performance landing pages that capture attention and drive results.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box best_box">
                        <h4>Custom WordPress Design </h4>
                        <p>Currently, WordPress is one of the most popular platforms for web design. Why? Well, WordPress
                            stands out from other web design platforms due to its flexibility. As a WordPress website design
                            company, Digi Rush Solutions provides complete services such as WordPress theme design,
                            WordPress migration services, and more, ensuring your site meets all your business needs.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="service-item service_box best_box">
                        <h4>Shopify Website Design
                        </h4>
                        <p>Custom web design is not always the answer. Sometimes eCommerce business needs an already
                            established foundation in order to save time and money Digi Rush is a shopify website design
                            company with expertise to create custom Shopify themes and offering other services like Shopify
                            consultant, site maintenance and support. We specialize in both UX and UI shopify websites.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="service-item service_box best_box">
                        <h4>Responsive Web Designing</h4>
                        <p>Now that everyone has a mobile phone, users are not limited to only using laptops and desktop
                            computers to access information. Therefore, having a responsive design website is crucial if you
                            want to remain competitive in the market. As a leading responsive web design company, Digi
                            Rush's designers code the stylesheet of your website to ensure it automatically adjusts its
                            layout on any device, providing an optimal user experience for all visitors.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-3 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="service-item service_box best_box">
                        <h4>Website Redesign Services
                        </h4>
                        <p>Already have a website? But is it too out of date? No issues! Our team is here to assist you with
                            our website redesigning services in India. Through our custom solutions, we give your website a
                            complete makeover, making it aesthetically pleasing and ensuring that your visitors convert into
                            genuine leads. With new features such as a Click-to-Call button, Contact Forms, Downloads, and
                            more, your website will look and function like a brand new one.
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
                <span class="sub-heading white">FAQ </span>
                <h2>Frequently Asked Questions </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 sm-padding">
                    <ul class="tab-list on_page_optimization  targeted_jquery">
                        <div class="accordion">
                            <div class="accordion-section">
                                <a href="#accordion-2" class="accordion-section-title">Why
                                    do I need a website development company? <span class="plus">+</span><span
                                        class="minus">-</span></a>
                                <div id="accordion-2" class="accordion-section-content" style="display: none;">
                                    <p>The all-in-one solution to rank your website and get organic traffic is the
                                        expertise, knowledge and skills of the website development company. Come, join hands
                                        with Digi Rush, the most experienced and leading marketing team and grow your
                                        business and get more clients converted into leads.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-section">
                                <a href="#accordion-3" class="accordion-section-title">How long does it take to build a
                                    website? <span class="plus">+</span><span class="minus">-</span></a>
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
                                <a href="#accordion-4" class="accordion-section-title"> What are the sources employed to
                                    build a website? <span class="plus">+</span><span class="minus">-</span></a>
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
                                <a href="#accordion-5" class="accordion-section-title"> Can you provide responsive web
                                    development services?<span class="plus">+</span><span class="minus">-</span></a>
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
                                    <a href="<?php echo e(route('web_development')); ?>">Web Development</a>
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
<?php echo $__env->make('layouts.front.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/frontend/web_designing.blade.php ENDPATH**/ ?>