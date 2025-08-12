<?php $__env->startSection("content"); ?>

    <?php $__env->startSection('heads'); ?>

        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo e($blog->meta_title); ?>" />
        <meta property="og:description" content="<?php echo e($blog->meta_description); ?>" />
        <meta property="og:url" content="https://digirushsolutions.com" />
        <meta property="og:site_name" content="Digi Rush Solutions" />
        <meta property="article:modified_time" content="2024-09-24T09:20:07+00:00" />
        <meta property="og:image" content="#" />
        <meta property="og:image:width" content="1080" />
        <meta property="og:image:height" content="1080" />
        <meta property="og:image:type" content="image/jpeg" />

    <?php $__env->stopSection(); ?>


    <section class="deatil_blog_page page-header page-header-secnd blogs-front spac"
        style="background-image: url(<?php echo e(custom_asset('front_assets/img/single_blog_deatail_img.png')); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contct_info text-center">
                        <div class="links text-center">
                            <h1 class="blog_heading_a blogssss"><?php echo e($blog->title); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-content_hero-wrapper spac">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog_inqury">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-12  col-sm-12">
                                    <div class="main_blog_under">
                                        <img class="img-fluid tips single_blog_injury single-bloged-opens"
                                            src="<?php echo e(custom_asset($blog->banner)); ?>" alt="<?php echo e($blog->banner_alt); ?>">
                                        <p class="mt-3"> <?php echo $blog->description; ?></p>
                                    </div>
                                    <div class="feedback-container">
                                        <p><strong>Was this article helpful?</strong></p>
                                        <div id="buttonGroup">
                                            <button id="yesBtn" class="default-btn feedback-btn"><i
                                                    class="fa-solid fa-check"></i> Yes</button>
                                            <button id="noBtn" class="default-btn feedback-btn">✘ No</button>
                                        </div>

                                        <div id="yesResponse" class="response-box response-success">
                                            Thanks 👍 for your feedback
                                        </div>

                                        <div id="noResponse" class="response-box response-error bg-white">
                                            Watch detailed video here (<a href="<?php echo e($blog->video_url); ?>" target="_blank"><span
                                                    style="color: black"><?php echo e($blog->video_url); ?></span></a>)
                                        </div>
                                    </div>



                                    <script>
                                        const yesBtn = document.getElementById("yesBtn");
                                        const noBtn = document.getElementById("noBtn");
                                        const yesResponse = document.getElementById("yesResponse");
                                        const noResponse = document.getElementById("noResponse");
                                        const buttonGroup = document.getElementById("buttonGroup");

                                        yesBtn.addEventListener("click", function () {
                                            yesResponse.style.display = "block";
                                            noResponse.style.display = "none";
                                            buttonGroup.style.display = "none";
                                        });

                                        noBtn.addEventListener("click", function () {
                                            noResponse.style.display = "block";
                                            yesResponse.style.display = "none";
                                            buttonGroup.style.display = "none";
                                        });
                                    </script>


                                </div>
                                <div class="col-lg-4 col-md-12  col-sm-12">
                                    <div class="fixed_right">
                                        <div class="right_recent_post">
                                            <div class="under_blog_recent">
                                                <h2><i class="fa-solid fa-bars"></i> &nbsp; Recent Blog</h2>
                                                <ul>
                                                    <li>

                                                        <?php $__currentLoopData = $allblogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="flex_recently_by">
                                                                <div class="recently">
                                                                    <a href="<?php echo e(url('blogs/' . $blogs->slug)); ?>">
                                                                        <div class="img_blog_recent">
                                                                            <img src="<?php echo e(custom_asset($blogs->banner)); ?>"
                                                                                alt="Blog Image">
                                                                        </div>
                                                                    </a>
                                                                </div>

                                                                <div class="text_recently">
                                                                    <p class="mb-0">
                                                                        <a href="<?php echo e(url('blogs/' . $blogs->slug)); ?>"><?php echo e(\Illuminate\Support\Str::limit($blogs->title, 50)); ?>


                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form_bloging_main">
                                        <div class="main_subscription_form  new_digital_form">
                                            <div class="under_form_sestion">
                                                <!-- <h2>Get Your Quote Now</h2> -->
                                                <div class="main_gif_heading">
                                                    <img src="<?php echo e(custom_asset('front_assets/img/40_GIF.gif')); ?>" alt="" style="height: 160%;width: 100%;
            max-width: 148px;
           ">
                                                    <h2>Upgrade Your Online Presence Today! </h2>
                                                </div>
                                                <form method="post" action="<?php echo e(route('seoform.submit')); ?>"
                                                    id="contact-form">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="city_name" value="company">
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
                                                                    <option data-countryCode="IN" value="91" <?php echo e(old('countryCode') == '91' ? 'selected' : ''); ?>>Ind
                                                                        (+91)</option>
                                                                    <option data-countryCode="UK" value="44" <?php echo e(old('countryCode') == '44' ? 'selected' : ''); ?>>UK
                                                                        (+44)</option>
                                                                    <option data-countryCode="US" value="1" <?php echo e(old('countryCode') == '1' ? 'selected' : ''); ?>>US (+1)
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <input type="text" id="phone" name="number" minlength="10"
                                                                maxlength="10" class="form-control"
                                                                value="<?php echo e(old('number')); ?>">
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
                                                        <input type="text" id="url" name="message"
                                                            placeholder="Your Website" value="<?php echo e(old('message')); ?>">
                                                        <small style="color: grey; font-size: 14px;">Example: www.google.com
                                                            (Full Domain
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
                                                        <button id="submit" class="default-btn"
                                                            type="submit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button_all"
                                        style="background-image: url(<?php echo e(custom_asset('front_assets/img/anout_banner_ne.png')); ?>);">
                                        <div class="flex_firstly">
                                            <div class="btn_main_downloads">
                                                <a href="<?php echo e(route('contact')); ?>" class="default-btns">Contact Us</a>
                                            </div>
                                            <div class="btn_main_downloads">
                                                <a href="#" class="default-btns">Live Chat</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.front.app", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/frontend/blogs/details.blade.php ENDPATH**/ ?>