
<style>
    .ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline.ck-blurred {
        height: 150px;
    }
</style>
<?php $__env->startSection('content'); ?>

    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Case Studies</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.new_dashboard')); ?>"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Update</li>
                        </ol>
                    </nav>
                </div>

            </div>

            <h6 class="mb-0 text-uppercase">Case Study</h6>
            <hr />

            <div class="card">

                <div class="card-body">
                    <form id="add_form" class="form-horizontal" action="<?php echo e(route('case.update',$case->id)); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                Title
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" value="<?php echo e($case->title); ?>" placeholder="Title"
                                    onkeyup="makeSlug(this.value)" id="title" name="title" class="form-control"
                                    value="<?php echo e(old('title')); ?>" readonly>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                Slug
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" value="<?php echo e($case->slug); ?>" placeholder="slug" id="slug" name="slug" class="form-control"
                                    value="<?php echo e(old('slug')); ?>" required>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">
                                Banner
                            </label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            <input type="file" id="fancy-file-upload" name="banner" class="selected-files"
                                                >
                                        </div>
                                    </div>
                                </div>
                                <div class="file-preview box sm">
                                    <img src="<?php echo e(asset('public/' . $case->banner)); ?>" alt="digirush"
                                        style="height:100px;width:100px;">
                                </div>
                            </div>

                        </div>
                        <br>

                        <div class="form-group row" id="category">
                            <label class="col-md-3 col-from-label">
                                Status
                            </label>
                            <div class="col-md-9">
                                <select class="form-control aiz-selectpicker" name="status" id="category_id"
                                    data-live-search="true" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">
                                Description
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="editor" rows="3"
                                    name="description"><?php echo e($case->description); ?></textarea>
                            </div>
                        </div><br>

                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.new-admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/admin/case/edit.blade.php ENDPATH**/ ?>