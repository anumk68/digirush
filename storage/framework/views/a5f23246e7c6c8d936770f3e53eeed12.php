
<meta name="robots" content="noindex, nofollow">
<?php $__env->startSection('meta_title', $data->meta_title ?? 'Digi Rush Solutions | A Complete Web Solutions Agency in India'); ?>
<?php $__env->startSection('meta_description', $data->meta_description ?? 'Digi Rush Solutions offers expert digital marketing, web design, and development services for online success with customized solutions.'); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword ?? 'default'); ?>
<?php $__env->startSection('content'); ?>

    <section class="page-header page-header-secnd" style="background-image: url('<?php echo e(custom_asset($data->banner)); ?>');">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="page-header-info">
                        <?php echo $data->banner_description; ?>

                                             
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section padding digitalmarketing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 sm-padding">

                   
                    <div class="about-content">
                        <?php echo $data->first_section_description; ?>

                        <a href="<?php echo e(route('contact')); ?>" class="default-btn">GET STARTED</a>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="about-thumb">
                        <img src="<?php echo e(custom_asset($data->first_section_image)); ?>" alt="pay per click advertising india">
               
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
                    <?php echo $data->second_section_description; ?>

                    <a href="<?php echo e(route('contact')); ?>" class="default-btn btn_response">GET A FREE CONSULTATION</a>
                </div>

                <div class="col-lg-6 col-md-12 col-12">

                 <div class="main_subscription_form  new_digital_form">
                        <div class="under_form_sestion">
                            <div class="main_gif_heading">
          <img src="<?php echo e(custom_asset('front_assets/img/40_GIF.gif')); ?>" alt="" style="height: 160%;width: 100%;
    max-width: 148px;
 ">
          <h2>Upgrade Your Online Presence Today!</h2>
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
                                    <button id="submit" class="default-btn" type="submit">Submit</button>
                                </div>
                            </form>
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
                                <a href="<?php echo e(route('web_services')); ?>">Web Services</a>
                                </li>
                            
                                <li>
                                    <a href="<?php echo e(route('web_development')); ?>">Web Development</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('web_designing')); ?>">Web Design </a>
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
                                    <a href="<?php echo e(route('digital_marketing')); ?>">Digital Marketing</a>
                                </li>
                                <li>
                                <a href="<?php echo e(route('content_management')); ?>">Content Management Marketing</a>
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
                                <a href="<?php echo e(route('local_seo_company')); ?>">Local SEO</a></li>
                                </li>
                                <li>
                                <a href="<?php echo e(route('shopify_seo')); ?>">eCommerce SEO</a>
                                </li>
                                <li>
                                <a href="<?php echo e(route('social_media_marketing')); ?>">Social Media Marketing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.front.app", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\digirush_coderemove\resources\views/frontend/dynamic_page.blade.php ENDPATH**/ ?>