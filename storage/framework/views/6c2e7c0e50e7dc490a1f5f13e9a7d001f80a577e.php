<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="OneCircleSoftwareDevelopmentKost - Ngambing.com">
	<meta name="author" content="Ngambing.com">
  <meta name="keyword" content="portal web kambing terbesar di indonesia">
    
  	<!-- PERHATIKAN BAGIAN INI, APAPUN YANG DIAPIT OLEH <?php $__env->startSection('TITLE'); ?> PADA VIEW YANG MENGGUNAKAN MASTER INI, MAKA AKAN ME-REPLACE CODE DIBAWAH -->
  	
    <?php echo $__env->yieldContent('title'); ?>

  <!-- UNTUK ME-LOAD ASSET DARI PUBLIC, KITA GUNAKAN HELPER ASSET() -->
	<link href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('assets/css/simple-line-icons.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('assets/vendors/pace-progress/css/pace.min.css')); ?>" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  
   
  	<!-- KENAPA HEADER DIPISAHKAN? AGAR LEBIH RAPI SAJA JADI LEBIH MUDAH MAINTENANCENYA -->
    <!-- KETIKA MELOAD FILE BLADE, MAKA EKSTENSI .BLADE.PHP TIDAK PERLU DITULISKAN -->
    <?php echo $__env->make('layouts.module.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    <div class="app-body" id="dw">
        <div class="sidebar">
          
          	<!-- SIDEBAR JUGA KITA PISAHKAN CODENYA MENJADI FILE TERSENDIRI -->
            <!-- KETIKA MELOAD FILE BLADE, MAKA EKSTENSI .BLADE.PHP TIDAK PERLU DITULISKAN -->
            <?php echo $__env->make('layouts.module.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
      
      	<!-- BAGIAN INI AKAN DI-REPLACE SESUAI ISI YANG DIAPIT DARI <?php $__env->startSection('CONTENT'); ?> -->
        <?php echo $__env->yieldContent('content'); ?>
      
    </div>

    <footer class="app-footer">
        <div>
            <a href="https://www.softwaredevelopmentkost.tech">OneCircleSoftwareDevelopmentKost</a>
            <span>&copy; 2020 creativeLabs.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://coreui.io">CoreUI</a>
        </div>
    </footer>
    
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pace.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/coreui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom-tooltips.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH F:\ngambing.com\resources\views/layouts/admin.blade.php ENDPATH**/ ?>