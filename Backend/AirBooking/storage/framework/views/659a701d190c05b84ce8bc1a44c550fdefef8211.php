<?php echo e(View::make('user_page.header')); ?>


<body>
    <div class="app">
        <!-- Header -->
        <?php echo e(View::make('user_page.navbar')); ?>


        <div class="container">
            <!-- With search -->
            <div class="search">
                <div class="grid">
                    <div class="search__heading">
                        <i class="search__heading-icon fas fa-route"></i>
                        <h1 class="search__heading-title">Bạn đã sẵn sàng cho chuyến đi chưa?</h1>
                    </div>

                    <?php echo e(View::make('user_page.search')); ?>

                </div>
            </div>

            <!-- Category muibox -->
            <?php echo e(View::make('user_page.category_muibox')); ?>


            <!-- Category deal -->
            <?php echo e(View::make('user_page.category_deal')); ?>


            <!-- Category statistic -->
            <?php echo e(View::make('user_page.category_statistic')); ?>

        </div>

        <!-- Footer -->
        <?php echo e(View::make('user_page.footer')); ?>

    </div>

    <!-- Login - Register -->
    <?php echo e(View::make('user_page.login_register')); ?>

</body>
<?php if(!empty(Session::get('openLogin')) && Session::get('openLogin') == 403): ?>
<script>
    $('#btn_login').click();
</script>
<?php endif; ?>

</html><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_layout.blade.php ENDPATH**/ ?>