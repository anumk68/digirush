<?php $__env->startSection('content'); ?>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
            <div class="container">

            <div class="card setting_class">
                    <div class="card-body flex flex-col p-6">
                        <header
                            class="mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                            <div class="flex-1">
                                <div class="card-title text-slate-900 dark:text-white">Setting</div>
                            </div>
                            
                        </header>
                        <div class="card-text h-full  nav_tab_Dashboard">
                            <div>
                                <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4"
                                    id="tabs-tab" role="tablist">
                                    
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-profile"
                                            class="nav-link w-full block font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent active dark:text-slate-300"
                                            id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile"
                                            role="tab" aria-controls="tabs-profile" aria-selected="false">Contact Details</a>
                                    </li>
                                    
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-settings"
                                            class="nav-link w-full block font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300"
                                            id="tabs-settings-tab" data-bs-toggle="pill" data-bs-target="#tabs-settings"
                                            role="tab" aria-controls="tabs-settings" aria-selected="false">Meta</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tabs-tabContent">
                                    <div class="tab-pane fade" id="tabs-home" role="tabpanel"
                                        aria-labelledby="tabs-home-tab">

                                        <!--Header setting start here-->

                                        <div class="col-md-8">
                                            <form action="<?php echo e(route('setting.update')); ?>" method="POST"
                                                enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group row">

                                                    <label class="col-md-2 col-from-label" for="avatar">Add Image</label>
                                                    
                                                    <div class="col-md-10">
                                                        <input type="hidden" name="types[]" value="header_logo">
                                                        <input type="file" name="header_logo" accept="image/*" id="avatar" class="form-control" required>
                                                    </div>

                                                    <div class="col-sm-auto col-4">
                                                        <div class="avatar avatar-xl position-relative">
                                                            <div>
                                                                <label for="file-input"
                                                                    class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                                                    <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Image" aria-label="Edit Image"></i>
                                                                    
                                                                </label>

                                                                <span
                                                                    class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="text-right btn_bcnd-updte">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>

                                        <!--Header setting end here-->

                                    </div>
                                    <div class="tab-pane fade show active" id="tabs-profile" role="tabpanel"
                                        aria-labelledby="tabs-profile-tab">

                                        <!--Contact setting start here-->

                                        <form action="<?php echo e(route('setting.update')); ?>" method="post" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                   <h5>Contact Page</h5>
                                                </div>
                                            </div>
                                        </form>

                                        <!--Contact setting end here-->

                                    </div>
                                    <div class="tab-pane fade" id="tabs-messages" role="tabpanel"
                                        aria-labelledby="tabs-messages-tab">

                                        <!--Footer setting start here-->
                                        
                                            
                                        <!--Footer setting end here-->

                                    </div>

                                    <div class="tab-pane fade" id="tabs-settings" role="tabpanel"
                                        aria-labelledby="tabs-settings-tab">
                                        
                                        <div class="container">
                                        <div class="row">
                                            <form action="<?php echo e(route('settings.new_meta')); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                            
                                                        <div class="col-md-12 mt-3">
                                                            <div>
                                                                <label class="form-label" for="selectmeta">Select Meta Type :</label>
                                                                <select name="metaselect" class="form-select" required id="">
                                                                    <option value="" selected>Select your meta type</option>
                                                                    <option value="description_">Description</option>
                                                                    <option value="title_">Title</option>
                                                                    <option value="keyword_">Keyword</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-12 mt-2">
                                                            <div>
                                                                <label class="form-label" for="type">Name :</label>
                                                                <input class="form-control" type="text" name="type" required>
                                                            </div>
                                                        </div>

                                                        
                                                        <div class="col-md-12 mt-2">
                                                            <div>
                                                                <label class="form-label" for="value">Value To Display :</label>
                                                                <input class="form-control" type="text" name="value" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <button class="btn btn-success btn-sm mt-4 mb-3" type="submit">Add Value</button>
                                                        </div>
                                            
                                            </form>
                                        </div>
                                        </div>
                                        
                                        <div class="container">
                    <ul class="nav nav-tabs mt-4 mb-5" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Keyword</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Title</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table table-success table-bordered table-striped text-center mt-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Meta Name</th>
                                    <th>Meta Value</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                                <?php $__currentLoopData = $descriptionsettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $description): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($description->type); ?></td>
                                    <td><?php echo e($description->value); ?></td>
                                    <td><a href="<?php echo e(route('settings.edit_meta', ['id' => $description->id])); ?>" class="btn btn-primary btn-sm ">Edit</a>
                                    
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-success table-bordered table-stripped text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Meta Name</th>
                                    <th>Meta Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <?php $__currentLoopData = $keywordsettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($keyword->type); ?></td>
                                    <td><?php echo e($keyword->value); ?></td>
                                    <td><a href="<?php echo e(route('settings.edit_meta', ['id' => $keyword->id])); ?>" class="btn btn-primary btn-sm ">Edit</a>
                                    
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <table class="table table-success table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Meta Name</th>
                                    <th>Meta Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <?php $__currentLoopData = $titlesettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($title->type); ?></td>
                                    <td><?php echo e($title->value); ?></td>
                                    <td><a href="<?php echo e(route('settings.edit_meta', ['id' => $title->id])); ?>" class="btn btn-primary btn-sm ">Edit</a>
                                    
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <!-- Displaying Existing Settings -->
    
</div>
            </div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	
	</div>
	<!--end wrapper-->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.new-admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/admin/settings/index.blade.php ENDPATH**/ ?>