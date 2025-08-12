<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="JgGUf8Zekt05bkRfz8v8KfEGcQjGR67efwDu_JuA6Js" />

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-XBHGHYYWWZ"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-XBHGHYYWWZ');
	</script>

	<!--favicon-->
	<link rel="icon" href="<?php echo e(asset('assets/images/favicon-32x32.png')); ?>" type="image/png" />
	<!--plugins-->
	<link href="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet"/>
	<link href="<?php echo e(asset('assets/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />
	
	<link href="<?php echo e(asset('assets/plugins/metismenu/css/metisMenu.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('assets/plugins/highcharts/css/highcharts.css')); ?>" rel="stylesheet" />
	<!-- loader-->
	<link href="<?php echo e(asset('assets/css/pace.min.css')); ?>" rel="stylesheet" />
	<script src="<?php echo e(asset('assets/js/pace.min.js')); ?>"></script>
	<!-- Bootstrap CSS -->
	<link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('assets/css/bootstrap-extended.css')); ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="<?php echo e(asset('assets/css/app.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/dark-theme.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/semi-dark.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/header-colors.css')); ?>" />
	<link rel="canonical" href="<?php echo e(url()->current()); ?>" />
	

	<title>Syndron - Bootstrap 5 Admin Dashboard Template</title>

	<?php echo $__env->yieldContent('heads'); ?>

</head>

<body>

	    <!--wrapper-->
	
		
        <?php echo $__env->make('layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
            <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	    <?php echo $__env->yieldContent('content'); ?>
	    

        <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	
	<!--end wrapper-->

    <!-- search modal -->
	<div class="modal" id="SearchModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
			<div class="modal-content">
				<div class="modal-header gap-2">
					<div class="position-relative popup-search w-100">
						<input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
						<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i class='bx bx-search'></i></span>
					</div>
					<button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				</div>
			</div>
		</div>
	</div>
    <!-- end search modal -->

	<!-- Bootstrap JS -->
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script> 
	<!--plugins-->
	<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
	<!-- Vector map JavaScript -->
	<script src="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
	<!-- highcharts js -->
	
	
	<script src="<?php echo e(asset('assets/js/index2.js')); ?>"></script>
	<!--app JS-->
	<script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    
	
    <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/layouts/app.blade.php ENDPATH**/ ?>