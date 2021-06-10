<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hospital-System</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assetshos/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetshos/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assetshos/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assetshos/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assetshos/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assetshos/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assetshos/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <?php echo $__env->make('layouts.sidebarhos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php echo $__env->make('layouts.headerhos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        <!-- Header-->

        <?php echo $__env->make('layouts.dashboardcontenthos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <!-- Right Panel -->

    <script src="assetshos/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assetshos/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="assetshos/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assetshos/assets/js/main.js"></script>


    <script src="assetshos/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assetshos/assets/js/dashboard.js"></script>
    <script src="assetshos/assets/js/widgets.js"></script>
    <script src="assetshos/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="assetshos/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="assetshos/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\hospital-system\resources\views/layouts/mainhos.blade.php ENDPATH**/ ?>