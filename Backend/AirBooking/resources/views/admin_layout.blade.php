{{View::make('admin_page.header')}}

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        {{View::make('admin_page.navbar')}}
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            {{View::make('admin_page.theme_setting')}}
            <!-- partial -->

            <!-- partial:partials/_sidebar.html -->
            {{View::make('admin_page.sidebar')}}
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                {{View::make('admin_page.footer')}}
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('admin_asset/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin_asset/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin_asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('admin_asset/js/dataTables.select.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin_asset/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin_asset/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin_asset/js/template.js')}}"></script>
    <script src="{{asset('admin_asset/js/settings.js')}}"></script>
    <script src="{{asset('admin_asset/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin_asset/js/dashboard.js')}}"></script>
    <script src="{{asset('admin_asset/js/Chart.roundedBarCharts.js')}}"></script>
    <!-- End custom js for this page-->
</body>

</html>