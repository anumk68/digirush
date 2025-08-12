<style>
	    p.ck-placeholder {
            height: 150px !important;
        }
        img.w-100.border-radius-lg.shadow-sm {
            height: 78px;
            width: 15% !important;
        }
</style>
<?php $__env->startSection('content'); ?>

		<div class="page-wrapper">
			<div class="page-content">
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Blogs</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="<?php echo e(route('admin.new_dashboard')); ?>"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Blog Update</li>
							</ol>
						</nav>
					</div>
					
				</div>

				<h6 class="mb-0 text-uppercase">Blog Update</h6>
				<hr/>

                <div class="card">
                
                    <div class="card-body">
                        <form id="add_form" class="form-horizontal" action="<?php echo e(route('blog.update',$blog->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">
                                    Blog Title
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Blog Title" onkeyup="makeSlug(this.value)" id="title" name="title" value="<?php echo e($blog->title); ?>" class="form-control" required>
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Slug
                                <small>(https://digirushsolutions.com/blogs)</small></label>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Slug" name="slug" id="slug" class="form-control" value="<?php echo e($blog->slug); ?>" required>
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
                                <label class="col-md-3 col-form-label">Video Link</label>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Video Link" name="video_url" id="video_url" class="form-control" value="<?php echo e($blog->video_url); ?>" required>
                                    <?php $__errorArgs = ['video_url'];
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
                            <div class="form-group row" id="category">
                                <label class="col-md-3 col-from-label">
                                    Category
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-9">
                                    <select class="form-control aiz-selectpicker" name="category_id" id="category_id" data-live-search="true" required>
                                        <option value="">Select One</option>
                                        <?php $__currentLoopData = $blog_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if($blog->category_id == $category->id): ?> <?php echo e('selected'); ?> <?php endif; ?> value="<?php echo e($category->id); ?>">
                                            <?php echo e($category->category_name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Banner Alt
                                    <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Banner Alt" name="banner_alt" value="<?php echo e($blog->banner_alt); ?>" id="slug" class="form-control" >
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
                                                <input id="fancy-file-upload" type="file" name="banner" value="<?php echo e(asset($blog->banner)); ?>"
                                                class="selected-files" > 
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="file-preview box sm">
                                            <img src="<?php echo e(asset('public/' . $blog->banner)); ?>" alt="bruce" class="w-100 border-radius-lg shadow-sm">

                                    </div>
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">
                                    Short Description
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-9">
                                    <textarea name="short_description" rows="5" class="form-control" required=""><?php echo e($blog->short_description); ?></textarea>
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">
                                    Description
                                </label>
                                <div class="col-md-9">
                                   <textarea class="form-control" id="editor" rows="3" name="description"><?php echo e($blog->description); ?></textarea> 
                                    
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Meta Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="meta_title" value="<?php echo e($blog->meta_title); ?>" placeholder="Meta Title">
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="signinSrEmail">
                                    Meta Image
                                    <small>(824*324)</small>
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                <input id="fancy-file-uploadd" type="file" name="meta_img" class="selected-files">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="file-preview box sm">
                                        <?php if(('header_logo') != null): ?>
                                            <img src="<?php echo e(asset('public/' . $blog->meta_img)); ?>"  alt="bruce" width="150px" height="150px" class="border-radius-lg shadow-sm">

                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Meta Description</label>
                                <div class="col-md-9">
                                    <textarea name="meta_description" rows="5" class="form-control"><?php echo e($blog->meta_description); ?></textarea>
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">
                                    Meta Keywords
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="<?php echo e($blog->meta_keywords); ?>" placeholder="Meta Keywords">
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
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.new-admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/admin/blog/edit.blade.php ENDPATH**/ ?>