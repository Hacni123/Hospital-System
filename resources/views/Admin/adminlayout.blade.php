<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Life Care - Admin</title>

    <!-- Fontfaces CSS-->
    <link href="assets/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/admin/css/theme.css" rel="stylesheet" media="all">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('assetshos/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('assetshos/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetshos/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assetshos/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetshos/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('assetshos/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{asset('assetshos/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>
<body>

<!-- Left Panel -->

@include ('Admin.sidebar');

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    @include ('Admin.adminnewheader');
    <!-- Header-->

    @yield('content')
<!-- Right Panel -->


<!-- Jquery JS-->
<script src="assets/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/admin/vendor/slick/slick.min.js">
    </script>
    <script src="assets/admin/vendor/wow/wow.min.js"></script>
    <script src="assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="assets/admin/js/main.js"></script>

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
<!-- end document-->