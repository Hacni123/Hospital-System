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