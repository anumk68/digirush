<!-- <form  action="<?php echo e(route('hireform.store')); ?>" method="POST" id="hireForm"> -->
<form  action="<?php echo e(route('hire.submit')); ?>" method="POST" id="hireForm">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="type" value="digital-web-services">
    <div class="txt_form landing_page_txxt">
        <img src="<?php echo e(custom_asset('front_assets/img/GET-4.gif')); ?>" alt="">
        <h2>Need Help with Web Design & Development Project?</h2>
        <p>Let’s making your project in reality</p>
      
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="fname">First name*</label>
            <input type="text" id="fname" name="fname" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '');" placeholder="First Name" value="<?php echo e(old('fname')); ?>">
            <div class="text-danger"></div>
            <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6">
            <label for="lname">Last name</label>
            <input type="text" id="lname" name="lname" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '');" placeholder="Last name" value="<?php echo e(old('lname')); ?>">
            <div class="text-danger"></div>
            <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6">
            <label for="phone_no">Phone No*</label>
            <!-- <input type="tel" id="phone_no" name="phone_no" placeholder="Phone No" value="<?php echo e(old('phone_no')); ?>" pattern="^\d{10}$" maxlength="10"> -->
            <input type="tel" id="phone_no" name="number" oninput="this.value = this.value.replace(/[^0-9]/g, '');" placeholder="Phone No" value="<?php echo e(old('phone_no')); ?>" pattern="^\d{10}$" maxlength="10">
            <div class="text-danger"></div>
            <?php $__errorArgs = ['phone_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6">
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" placeholder="Email Address" value="<?php echo e(old('email')); ?>">
            <div class="text-danger"></div>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6 ">
            <label for="services">Services*</label>
            <select name="services" id="services" required>
                <option value="">Select Service</option>
                <option value="Website Design & Development" <?php echo e(old('services') == 'Website Design & Development' ? 'selected' : ''); ?>>Website Design & Development</option>
                <option value="Application Development" <?php echo e(old('services') == 'Application Development' ? 'selected' : ''); ?>>Application Development</option>
                <option value="Software Development" <?php echo e(old('services') == 'Software Development' ? 'selected' : ''); ?>>Software Development</option>
                <option value="Digital Marketing Services" <?php echo e(old('services') == 'Digital Marketing Services' ? 'selected' : ''); ?>>All Digital Marketing Services</option>
                <option value="SEO Services" <?php echo e(old('services') == 'SEO Services' ? 'selected' : ''); ?>>SEO Services</option>
                <option value="SMO Services" <?php echo e(old('services') == 'SMO Services' ? 'selected' : ''); ?>>SMO Services</option>
                <option value="PPC Services" <?php echo e(old('services') == 'PPC Services' ? 'selected' : ''); ?>>PPC Services</option>
                <option value="Graphic Designing" <?php echo e(old('services') == 'Graphic Designing' ? 'selected' : ''); ?>>Graphic Designing</option>
                <option value="Video Editing" <?php echo e(old('services') == 'Video Editing' ? 'selected' : ''); ?>>Video Editing</option>
                <option value="Email Marketing" <?php echo e(old('services') == 'Email Marketing' ? 'selected' : ''); ?>>Email Marketing</option>
            </select>
            <div class="text-danger"></div>
            <?php $__errorArgs = ['services'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6">
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="City" value="<?php echo e(old('city')); ?>">
            <div class="text-danger"></div>
            <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="btn_submit">
            <button type="submit">Submit</button>
        </div>
    </div>
</form>

<?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/frontend/commonform/hireform.blade.php ENDPATH**/ ?>