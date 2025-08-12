<?php $__env->startSection("content"); ?>
    <section class="page-header page-header-secnd"
        style="background-image: url(<?php echo e(custom_asset('front_assets/img/blog_banner.png')); ?>);">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="page-header-info">
                        <h1>Get the updated news from our <br>redias blog</h1>
                        <p>Everything your digital consulting business needs is already here</p>
                        <div class="btn_digital">
                            <a href="<?php echo e(route('contact')); ?>" class="default-btn"> Hire Now </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="main_subscription_form  new_digital_form">
                        <div class="under_form_sestion">
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
        </div>
    </section>

    <section class="blog-section blog-page bg-grey padding all_blogs_spacing">
        <div class="container">
            <div class="studying_banner_heading">
                <h2>Insights for the Digital Age</h2>
                <p>Welcome to our blog page. Stay up to date with the latest in the world of digital marketing and web
                    development, it is always shifting and this is the scoop. Here you will find expert advice, case studies
                    and industry news for you to use in keeping well informed and making timely business decisions. Whether
                    you want to enhance your web presence, upgrade your web site performance or be in the know with the most
                    current tactics of digital marketing, web development and web designing, our articles are written for
                    you. Let us join the conversation about topics that matter, enabling you to confidently tackle the ever
                    evolving digital space.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-12 sm-padding">
                    <div class="row grid-post">
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-6 col-12 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <a href="<?php echo e(url('blogs') . '/' . $blog->slug); ?>" class="hover"><img
                                                src="<?php echo e(custom_asset($blog->banner)); ?>" class="img-fluid img_bloger"></a>

                                    </div>
                                    <div class="post-content-wrap">
                                        <ul class="post-meta">
                                            <li>
                                                <i class="las la-calendar"></i><?php echo e($blog->created_at); ?>

                                            </li>
                                        </ul>
                                        <div class="post-content main_post_blog_cntnt">
                                            <h3><a href="<?php echo e(url('blogs') . '/' . $blog->slug); ?>" class="hover">
                                                    <?php echo e(strlen($blog->title) > 80 ? Str::limit($blog->title, 80) : $blog->title); ?></a>
                                            </h3>
                                            <p><a href="<?php echo e(url('blogs') . '/' . $blog->slug); ?>"
                                                    class="hover"><?php echo e(substr($blog->short_description, 0, 80)); ?> ... </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <div class="pagination-wrapper">
                <?php echo e($blogs->onEachSide(1)->links('pagination::bootstrap-5')); ?>

            </div>


            <!-- <div class="pagination">
                                                <a href="#">&laquo;</a>
                                                <a href="#" class="active">1</a>
                                                <a href="#">2</a>
                                                <a href="#">3</a>
                                                <a href="#">4</a>
                                                <a href="#">5</a>
                                                <a href="#">6</a>
                                                <a href="#">&raquo;</a>
                                           </div> -->

        </div>
    </section>
    <?php $__env->startSection('scripts'); ?>
        <script>
            $(document).ready(function () {
                // Remove the "Showing X to Y of Z entries" text
                $('.pagination-wrapper .pagination-info').remove();

                // AJAX pagination
                $(document).on('click', '.pagination a', function (e) {
                    e.preventDefault();
                    var url = $(this).attr('href');

                    // Show loading state
                    $('#blog-container').css('opacity', '0.5');
                    $('.pagination-wrapper').html('<div class="text-center py-3">Loading...</div>');

                    $.ajax({
                        url: url,
                        type: 'get',
                        success: function (data) {
                            // Parse the full response
                            var $response = $(data);

                            // Update blog container
                            var newBlogs = $response.find('#blog-container').html();
                            $('#blog-container').html(newBlogs).css('opacity', '1');

                            // Update pagination
                            var newPagination = $response.find('.pagination-wrapper').html();
                            $('.pagination-wrapper').html(newPagination);

                            // Remove the info text again (in case it comes back)
                            $('.pagination-wrapper .pagination-info').remove();

                            // Smooth scroll to blog section
                            $('html, body').animate({
                                scrollTop: $('.blog-section').offset().top - 100
                            }, 300);
                        },
                        error: function () {
                            $('#blog-container').css('opacity', '1');
                            $('.pagination-wrapper').html('<?php echo e($blogs->links("pagination::bootstrap-5")); ?>');
                            $('.pagination-wrapper .pagination-info').remove();
                        }
                    });
                });
            });
        </script>
    <?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.front.app", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/frontend/blogs/index.blade.php ENDPATH**/ ?>