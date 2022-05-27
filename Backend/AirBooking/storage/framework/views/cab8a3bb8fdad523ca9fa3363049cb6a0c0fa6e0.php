
<?php $__env->startSection('content_info'); ?>
<div id="ticketForm">
    <div class="content_info-header ">
        <h3 class="content_info-title">Vé máy bay</h3>
        <span class="content_info-desc">Vé máy bay của bạn sẽ hiện ở đây</span>
    </div>
    <div class="content_info-body">
        <div class="grid__row">
            <div class="grid__column-12">
                <?php $__empty_1 = true; $__currentLoopData = $orderList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="content_info-ticket">
                    <div class="ticker_info">
                        <div class="id_ticker">
                            <div class="id_ticker__info">Mã đơn hàng:
                                <span><?php echo e($item['billOrder']->bill_id); ?></span>
                            </div>
                            <div class="show_detail_ticket detail_order" data-url="/info/order-detail/<?php echo e($item['billOrder']->bill_id); ?>">
                                <i class="fa fa-arrow-right"></i>
                                <span>Xem chi tiết</span>
                            </div>
                        </div>
                        <div class="detail_ticker">
                            <div class="detail_ticker_info">
                                <div class="title_ticker_info">
                                    <p style="line-height: 2rem;"><?php echo e($item['aliasFrom']->airport_name); ?> (<?php echo e($item['aliasFrom']->airport_alias); ?>)</p>
                                    <div class="icon_ticket_info">
                                        <div style="background: linear-gradient(270deg, rgb(160, 174, 192) 0%, rgba(160, 174, 192, 0) 100%); width: 24px; height: 1px; margin-right: 10px;">
                                        </div>
                                        <svg width="18" height="16" fill="none">
                                            <path d="M12.19 6.081a.5.5 0 00.434.252h3.043a1.666 1.666 0 110 3.334h-3.043a.5.5 0 00-.435.252l-3.045 5.33a.5.5 0 01-.434.251H7.163a.5.5 0 01-.48-.637l1.302-4.559a.5.5 0 00-.481-.637H5.04a.5.5 0 00-.353.146l-1.374 1.374a.5.5 0 01-.353.146H1.476a.5.5 0 01-.448-.723l1.193-2.386a.5.5 0 000-.448L1.028 5.39a.5.5 0 01.448-.723H2.96a.5.5 0 01.353.146l1.374 1.374a.5.5 0 00.353.146h2.464a.5.5 0 00.48-.637L6.683 1.137A.5.5 0 017.162.5H8.71a.5.5 0 01.434.252l3.045 5.33z" fill="#718096"></path>
                                        </svg>
                                        <div style="background: linear-gradient(270deg, rgb(160, 174, 192) 0%, rgba(160, 174, 192, 0) 100%); width: 24px; height: 1px; margin-right: 10px;">
                                        </div>
                                    </div>
                                    <p style="line-height: 2rem; text-align:right"><?php echo e($item['aliasTo']->airport_name); ?> (<?php echo e($item['aliasTo']->airport_alias); ?>)</p>
                                </div>
                                <div class="sub_ticker_info">
                                    <p><?php echo e($item['aliasFrom']->cities_name); ?></p>
                                    <p><?php echo e($item['aliasTo']->cities_name); ?></p>
                                </div>
                                <div class="time_ticker_info">
                                    <p><?php echo e(date('H:i', strtotime($item['billOrder']->flight_time_departure))); ?>, <?php echo e(date('d', strtotime($item['billOrder']->flight_time_departure))); ?> tháng <?php echo e(date('m', strtotime($item['billOrder']->flight_time_departure))); ?></p>
                                    <p><?php echo e(date('H:i', $item['timeArr'])); ?>, <?php echo e(date('d', $item['timeArr'])); ?> tháng <?php echo e(date('m', $item['timeArr'])); ?></p>
                                </div>
                            </div>
                            <div class="detail_ticker_price">
                                <div class="ticker_plane__logo">
                                    <div class="plane__logo">
                                        <img class="jss767 jss929" width="40px" style="background:cover; margin-right: 10px;" alt="" src="<?php echo e(URL::to('upload/'.$item['billOrder']->airline_logo)); ?>">
                                    </div>
                                    <div class="Plane__name">
                                        <span style="margin-bottom: 8px;"><?php echo e($item['billOrder']->airline_name); ?></span>
                                        <span style="color: #555;font-size: 1.4rem; font-weight: 400;"><?php echo e($item['billOrder']->airplane_name); ?> . <?php echo e($item['billOrder']->airplane_number); ?></span>
                                    </div>
                                </div>
                                <div class="ticker_price">
                                    <div class="total_ticker__price">
                                        <span style="font-size: 1.4rem;  font-weight: 400; margin-bottom: 8px;">Tổng
                                            Tiền</span>
                                        <span style="color: #555;font-size: 1.8rem; font-weight: 500;"><?php echo e(number_format($item['billOrder']->bill_total_price)); ?>

                                            đ</span>
                                    </div>
                                    <h6>Đang giữ chỗ</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="content_info-hollow content_hollow">
                    <img src="<?php echo e(asset('user_asset/assets/img/empty-box.jpg')); ?>" class="content_hollow-img" alt="">
                    <span>Bạn chưa có vé máy bay nào</span>
                    <button type="button" id="btnfile" class="btn btn--primary">Tìm chuyến bay</button>
                </div>
                <?php endif; ?>
                <div class="paginate_class">
                    <?php echo $orderList->links(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        removeActiveInfo();
        $('#navbar_ticket-click').addClass('navbar_info-option--active');
    })

    $(function() {
        $('.detail_order').click(function() {
            let _url = $(this).data('url');
            $.pjax({
                type: 'get',
                url: _url,
                container: '#contentInfo',
                timeout: 9000000,
            })
        })
    })

    $('.pagination a').unbind('click').on('click', function(e) {
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        getPosts(page);
    });

    function getPosts(page) {
        $.pjax({
            type: 'get',
            url: '/info/order?page=' + page,
            container: '#contentInfo',
            timeout: 9000000,
        })
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user_page.info.info_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/info/ticket_form.blade.php ENDPATH**/ ?>