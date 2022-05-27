<?php echo e(View::make('user_page.header')); ?>


<body>
    <div class="app" style="background-color: var(--background-color-2);">
        <!-- Header -->
        <?php echo e(View::make('user_page.navbar')); ?>


        <div class="container">
            <div class="search" style="background: none; height:212px">
                <div class="grid">
                    <!-- With search -->
                    <?php echo e(View::make('user_page.search')); ?>

                </div>
            </div>

            <div class="search_body">
                <div class="grid">
                    <div class="breadcrumb">
                        <ol class="breadcrumb_list">
                            <li class="breadcrumd_item"><a href="/" style="color:var(--text-color)">Trang chủ</a></li>
                            <li class="breadcrumd_icon"><i class="fa-solid fa-angle-right"></i></li>
                            <li class="breadcrumd_item"><a href="#" style="color:var(--text-color)">Chuyến bay từ <?php echo e(old('inputFromText')); ?> đến <?php echo e(old('inputToText')); ?></a></li>
                        </ol>
                    </div>
                    <div class="search_body-place">
                        <div class="search_place-heading"><?php echo e(old('inputFromText')); ?> - <?php echo e(old('inputToText')); ?>: <span><?php echo e(count($ticketList)); ?> chuyến bay</span>
                        </div>
                        <ol class="search_place-desc">
                            <li><?php echo e(date('d', strtotime(old('dateFromInput')))); ?> tháng <?php echo e(date('m', strtotime(old('dateFromInput')))); ?></li>
                            <li>-</li>
                            <li><?php echo e(old('adultInput') + old('childrenInput') + old('infantInput')); ?> khách</li>
                        </ol>
                    </div>
                    <div class="search_body-content">
                        <div class="grid__row">
                            <div class="grid__column-3-default" style="padding-right:20px">
                                <?php echo e(View::make('user_page.search.search_filter')); ?>

                            </div>
                            <div class="grid__column-9">
                                <?php echo e(View::make('user_page.search.search_filter2')); ?>

                                <div class="content_ticket-body" id="searchBody">
                                    <?php echo $__env->yieldContent('search_body'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php echo e(View::make('user_page.footer')); ?>

    </div>

    <!-- Login - Register -->
    <?php echo e(View::make('user_page.login_register')); ?>

    <script>
        $(document).ready(function() {
            $(".ticket_date-group").each(function(index, elem) {
                $(elem).click(function() {
                    $.pjax({
                        type: 'get',
                        url: '/search',
                        data: {
                            inputFromText: $('#searchForm input[name="inputFromText"]').val(),
                            inputFromID: $('#searchForm input[name="inputFromID"]').val(),
                            inputToText: $('#searchForm input[name="inputToText"]').val(),
                            inputToID: $('#searchForm input[name="inputToID"]').val(),
                            dateFromInput: $(this).data('filter'),
                            dateToInput: $('#searchForm input[name="dateToInput"]').val(),
                            adultInput: $('#searchForm select[name="adultInput"] :selected').val(),
                            childrenInput: $('#searchForm select[name="childrenInput"] :selected').val(),
                            infantInput: $('#searchForm select[name="infantInput"] :selected').val(),
                        },
                        container: '#searchBody',
                        timeout: 9000000,
                    })
                })
            })
        });
    </script>
    <script>
        $('#filterClear').click(function() {
            $('.content_filter input[type="checkbox"]:checked').click();
        })
    </script>
</body>

</html><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/search/search_layout.blade.php ENDPATH**/ ?>