<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title', config('app.name')); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	<!-- Log on to codeastro.com for more projects -->
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php echo $__env->yieldContent('css'); ?>
    <script>
        window.APP = <?php echo json_encode([
                            'currency_symbol' => config('settings.currency_symbol'),
                            'warning_quantity' => config('settings.warning_quantity')
                        ]) ?>
    </script>
    <link href="<?php echo url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .float-right {
        float: right;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?php echo url('assets/css/app.css'); ?>" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <script defer>
        window.userID = "<?php echo e(Auth::user()->userId()); ?>";
        console.log('Value of userID:', window.userID);
    </script>
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?php echo $__env->yieldContent('content-header'); ?></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <?php echo $__env->yieldContent('content-actions'); ?>
                        </div><!-- /.col -->
                    </div>
                </div><!-- /.container-fluid -->
            </section><!-- Log on to codeastro.com for more projects -->

            <!-- Main content -->
            <section class="content">
                <?php echo $__env->make('layouts.partials.alert.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('layouts.partials.alert.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </section>

        </div>
        <!-- /.content-wrapper -->

        <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div><!-- Log on to codeastro.com for more projects -->
    <!-- ./wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    
    <?php $__env->startSection("scripts"); ?>
    <?php echo $__env->yieldSection(); ?>

    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH C:\Users\Natnael\Desktop\POS-Laravel\resources\views/layouts/admin.blade.php ENDPATH**/ ?>