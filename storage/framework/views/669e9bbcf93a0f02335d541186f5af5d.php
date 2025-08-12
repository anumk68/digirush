<?php $__env->startSection('content'); ?>


<section class="page-header page-header-secnd" style="background-image: url(<?php echo e(custom_asset('front_assets/img/social_media_banner.png')); ?>);">
    <div class="page-header-shape"></div>
    <div class="container">
     <div class="row align-items-center">
        <div class="page-header-info">
         <h1>Best Social Media Marketing Agency in India</h1>
         <p>Transform your online presence with strategic social media marketing that engages your audience and boosts brand awareness.</p>
         <div class="btn_digital">
                        <a href="<?php echo e(route('contact')); ?>" class="default-btn">Hire Now</a>
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
                    <h2>Build Better Online Presence With Our social media management services</h2>
                </div>
                <div class="about-content">
                   <p>Anybody can purchase followers, but the true test of any brand is organic growth that engages with you and generates quality leads. Digi Rush is a leading <a href="<?php echo e(route('social_media_marketing')); ?>">social media marketing agency in India</a> that assists you in achieving this by offering a wide range of social media optimization services that help your business grow its online presence.</p>
                    
                   <p>We employ our social media marketing strategy to promote your brands on various social media platforms, including Instagram, Facebook, Twitter, LinkedIn, etc to increase your search engine visibility.</p>
                    <a href="<?php echo e(route('contact')); ?>" class="default-btn">GET STARTED</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="about-thumb">
                    <img src="<?php echo e(custom_asset('front_assets/img/smm_shoppingg.jpg')); ?>" alt="social media marketing agency in india">
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
                    <h2>Why Do You Need Best SMM Services?</h2>
                </div>
                <p>
                Why Do You Need <a href="https://digirushsolutions.com/blogs/how-social-media-marketing-works-and-how-it-helps-in-all-business-growth">Social Media Marketing</a>? If you believe that having more friends and followers on social media will also result in higher engagement, you are probably mistaken. It’s not the numbers that matter, but the interaction between you and your followers that is valued the most. An experienced social media marketing agency in India enhances your company’s branding and generates qualified leads for your business using social media management skills. As a top social media management company and a reliable <a href="<?php echo e(route('web_development')); ?>">website development company in India</a>, we ensure your brand stands out.</p>

                <p>Don’t delay! Gain competitive advantages by establishing a new relationship with the best social media marketing agency – Digi Rush.</p>

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
                            <input type="text" id="city" name="city" placeholder="City"
                                value="<?php echo e(old('city')); ?>">
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
                                        <option data-countryCode="IN"
                                            value="91"<?php echo e(old('countryCode') == '91' ? 'selected' : ''); ?>>Ind
                                            (+91)</option>
                                        <option data-countryCode="UK"
                                            value="44"<?php echo e(old('countryCode') == '44' ? 'selected' : ''); ?>>UK
                                            (+44)</option>
                                        <option data-countryCode="US"
                                            value="1"<?php echo e(old('countryCode') == '1' ? 'selected' : ''); ?>>US (+1)
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
                            <button id="submit" class="default-btn" type="submit">Submit<span></span></button>
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
            <h2>Optimizing Your Profiles</h2>
            <p class="quality_main">This is likely the absolute most significant thing that you want to complete to successfully utilize web-based entertainment channels. Each stage in these SMM services is unique however you can in any case be certain that the essentials are a minor departure from the components given underneath.
            </p>

        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 py-2 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-item service_box best_box">
                       <img src="<?php echo e(custom_asset('front_assets/img/profile-picture.webp')); ?>" alt="profile-picture">
                    <h4>Profile Picture</h4>
                  <p>It should be steady across all stages to make it more straightforward for you to fabricate brand mindfulness.</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 py-2 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                <div class="service-item service_box best_box">
                    <img src="<?php echo e(custom_asset('front_assets/img/Profile-Description.webp')); ?>" alt="Profile-Description">
                    <h4>Profile Description
                    </h4>
                   <p>Your current and future supporters need to have reasonable thoughts about what they are relating themselves with.</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 py-2 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                <div class="service-item service_box best_box">
                    <img src="<?php echo e(custom_asset('front_assets/img/Provide-Complete-Information.webp')); ?>" alt="Provide-Complete-Information">
                    <h4>Complete Information
                    </h4>
                    <p>Void fields are a warning that you ought to stay away from no matter what. It could turn out to be a game changer for a possible client.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 col-md-6 py-2 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-item service_box best_box">
                  <img src="<?php echo e(custom_asset('front_assets/img/Keywords-Are-Important.webp')); ?>" alt="Keywords-Are-Important">
                    <h4>Important Keywords</h4>
                   <p>You do not need to stuff them. Simply guarantee that you have the right words set up to depict your items/administrations.
                </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 py-2 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                <div class="service-item service_box best_box">
                    <img src="<?php echo e(custom_asset('front_assets/img/do-location.webp')); ?>" alt="do-location">
                    <h4>Do Add Location & Hours</h4>
                  <p>
                  It is a crucial part of SMO services. You must add the right area and hours as it constructs your validity in the advanced space.
                </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 py-2 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                <div class="service-item service_box best_box">
                    <img src="<?php echo e(custom_asset('front_assets/img/updated.webp')); ?>" alt="Profile Updated">
                    <h4>Keep Profile Updated</h4>
                   <p>At the point when your profiles are unfilled new clients are more averse to following. Thus, an evergreen substance needs to be updated on your page consistently.
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
                                What's the difference between social media marketing and social media optimization?
                            </button>
                        </h5>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Social media marketing is the process of producing and participating in content on social media platforms to interact with people, reach out to new clients, and raise brand recognition and includes promoting goods or services, generating leads, and driving business to websites. On the other hand, social media optimization concentrates on perfecting social media accounts and content for increased exposure, commerce, and search machine results.  </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Why is social media important for marketing strategies?
                            </button>
                        </h5>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Social media is important for marketing strategies as it gives companies an important platform to connect with their target followership, develop brand mindfulness, and increase engagement and deals. Businesses also have the chance to increase brand recognition by participating in perceptive content, interacting with their followership, and selling their goods and services. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                How is social media marketing different from digital marketing?
                            </button>
                        </h5>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">SMM is a part of Digital marketing, which is concentrated on flashing a company product/ service on social media spots like Facebook, Instagram, Twitter, LinkedIn, and others. On the other hand, digital marketing includes any marketing enterprise that connects with consumers through digital channels like hunt machines, websites, dispatch, social media, mobile apps, and other digital technologies.  </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsefour" aria-expanded="false"
                                aria-controls="flush-collapsefour">
                                How does social media marketing help your business?
                            </button>
                        </h5>
                        <div id="flush-collapsefour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Social media platforms give an awful occasion for expanding your brand’s visibility and reach. It’s extremely effective at erecting connections with your guests. Social media can greatly increase website business. Share links to your website or blog posts on social media to increase the chance that viewers will come as guests.   </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h5 class="accordion-header" id="flush-headingfive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsefive" aria-expanded="false"
                                aria-controls="flush-collapsefive">
                                What are the benefits of social media marketing?
                            </button>
                        </h5>
                        <div id="flush-collapsefive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Social media marketing offers numerous benefits for businesses, including increased brand awareness, better client engagement, cost-effective marketing, increased website business, enhanced client targeting, and better brand integrity . Social media platforms allow businesses to reach a large followership and increase brand visibility. It can also be used to drive business to your website by participating in links to your content and elevations.</div>
                        </div>
                    </div>

                </div>
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
                                    <a href="<?php echo e(route('web_development')); ?>">Web Development</a>
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
<?php echo $__env->make('layouts.front.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/frontend/social_media_marketing.blade.php ENDPATH**/ ?>