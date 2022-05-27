<?php echo e(View::make('admin_page.header')); ?>


<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php echo e(View::make('admin_page.navbar')); ?>

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <?php echo e(View::make('admin_page.theme_setting')); ?>

            <!-- partial -->

            <!-- partial:partials/_sidebar.html -->
            <?php echo e(View::make('admin_page.sidebar')); ?>

            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper" id="contentAdmin">
                    <?php echo $__env->yieldContent('contentAdmin'); ?>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php echo e(View::make('admin_page.footer')); ?>

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script>
        $(function() {
            $('.nav_item-click').click(function() {
                let _url = $(this).data('url');
                $.pjax({
                    type: 'get',
                    url: _url,
                    container: '#contentAdmin',
                    timeout: 9000000,
                })
            })
        })
    </script>

    <!-- plugins:js -->
    <script src="<?php echo e(asset('admin_asset/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo e(asset('admin_asset/vendors/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/vendors/datatables.net/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/js/dataTables.select.min.js')); ?>"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('admin_asset/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/js/template.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/js/settings.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/js/todolist.js')); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?php echo e(asset('admin_asset/js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/js/Chart.roundedBarCharts.js')); ?>"></script>
    <!-- End custom js for this page-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js" integrity="sha512-7G7ueVi8m7Ldo2APeWMCoGjs4EjXDhJ20DrPglDQqy8fnxsFQZeJNtuQlTT0xoBQJzWRFp4+ikyMdzDOcW36kQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/admin_layout.blade.php ENDPATH**/ ?>