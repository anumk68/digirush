
<style>
    .ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline.ck-blurred {
        height: 150px;
    }
</style>
<?php $__env->startSection('content'); ?>

    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dynamic Header</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.new_dashboard')); ?>"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">New Page</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <h6 class="mb-0 text-uppercase">Dynamic Header Create</h6>
            <hr />

            <div class="card">

                <div class="card-body">
                    <form id="add_form" class="form-horizontal" action="<?php echo e(route('header.store')); ?>"
                        enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Type</label>
                            <div class="col-md-9 d-flex align-items-center">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="type" id="header" value="header"
                                        required checked>
                                    <label class="form-check-label" for="header">Header</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" id="sub-header"
                                        value="sub-header">
                                    <label class="form-check-label" for="sub-header">Sub-header</label>
                                </div>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Slug<small>(https://digirushsolutions.com/blogs)</small>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Slug" name="slug" id="slug" class="form-control"
                                    value="<?php echo e(old('slug')); ?>" required>
                                <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Title<small>(Digital Marketing,Web Development
                                    etc.)</small>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Title" name="title" id="slug" class="form-control" required>
                                <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div><br>

                        <!-- Select Header Dropdown -->
                        <div class="form-group row" id="select-header-group" style="display: none;">
                            <label class="col-md-3 col-form-label">Select Parent Header</label>
                            <div class="col-md-9">
                                <select class="form-control aiz-selectpicker" name="header_drop" id="category_id"
                                    data-live-search="true">
                                    <option value="">Select One</option>
                                    <?php if($headers && $headers->count()): ?>
                                        <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($header); ?>"><?php echo e($header); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <option value="">No Parent Header Available*</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group row" id="header-input-group">
                            <label class="col-md-3 col-form-label">Header</label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Header" name="header" class="form-control"
                                    value="<?php echo e(old('header')); ?>">
                                <?php $__errorArgs = ['header'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">
                                Icon
                            </label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            <input type="file" id="fancy-file-upload" name="icon" class="selected-files"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div><br>

                        <div class="form-group row" id="category">
                            <label class="col-md-3 col-from-label">
                                Status
                            </label>
                            <div class="col-md-9">
                                <select class="form-control aiz-selectpicker" name="status" id="category_id"
                                    data-live-search="true" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php $__env->startSection('scripts'); ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const headerRadio = document.getElementById('header');
                const subHeaderRadio = document.getElementById('sub-header');
                // const headerInputGroup = document.getElementById('header-input-group');
                const selectHeaderGroup = document.getElementById('select-header-group');

                function toggleFields() {
                    if (headerRadio.checked) {
                        // headerInputGroup.style.display = 'flex';
                        selectHeaderGroup.style.display = 'none';
                    } else {
                        // headerInputGroup.style.display = 'none';
                        selectHeaderGroup.style.display = 'flex';
                    }
                }

                // Initial toggle
                toggleFields();

                // Event listeners
                headerRadio.addEventListener('change', toggleFields);
                subHeaderRadio.addEventListener('change', toggleFields);
            });
        </script>
    <?php $__env->stopSection(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.new-admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/admin/header/create.blade.php ENDPATH**/ ?>