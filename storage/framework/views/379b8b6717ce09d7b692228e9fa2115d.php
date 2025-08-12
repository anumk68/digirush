<?php $__env->startSection('content'); ?>

<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h5 class="mb-0">Seo Details</h5>
                    <a href="<?php echo e(route('seo-index')); ?>" class="btn btn-primary ms-auto">Back to List</a>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-1"><strong>Name:</strong></h6>
                        <p><?php echo e($data->fname); ?></p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-1"><strong>Email:</strong></h6>
                        <p><?php echo e($data->email); ?></p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-1"><strong>City:</strong></h6>
                        <p><?php echo e($data->city); ?></p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-1"><strong>Mobile No.:</strong></h6>
                        <p><?php echo e($data->mobile_number); ?></p>
                    </div>
                    <div class="col-md-12">
                        <h6 class="mb-1"><strong>Website URL:</strong></h6>
                        <p><a href="<?php echo e($data->url); ?>" target="_blank"><?php echo e($data->url); ?></a></p>
                    </div>
                    <div class="col-md-12">
                        <h6 class="mb-1"><strong>Created Date:</strong></h6>
                        <p><?php echo e($data->created_at->format('d M Y, h:i A')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.new-admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/admin/seo/view.blade.php ENDPATH**/ ?>