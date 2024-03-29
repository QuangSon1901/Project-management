<?php echo e(View::make('user_page.header')); ?>


<body>
    <div class="app">
        <div class="checkout_success">
            <div class="checkout_success-body">
                <img src="/Frontend/assets/img/success.png" alt="">
                <h2>Đặt vé thành công</h2>
                <h3>Đơn hàng của bạn đã được đăng ký thành công.</h3>
                <h3>Bạn có thể xem lại nội dung chi tiết đơn hàng.</h3>
                <div class="view_detail-order">
                    <h2 onclick="location.href = '/info/order'">Chi tiết đơn hàng</h2>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                <div class="checkout_success-info">
                    <div class="grid__row">
                        <div class="grid__column-6">
                            <div class="id_order">
                                <h3>Mã đơn hàng:</h3>
                                <h2><?php echo e($billID); ?></h2>
                            </div>
                            <div class="info_contact">
                                <h3>Thông tin liên hệ:</h3>
                                <ul class="info_contact-list">
                                    <li class="info_contact-item">
                                        <h3>Họ tên:</h3>
                                        <h3 class="info_contact-input"><?php echo e($checkoutInfo['contactName']); ?></h3>
                                    </li>
                                    <li class="info_contact-item">
                                        <h3>Số điện thoại:</h3>
                                        <h3 class="info_contact-input"><?php echo e($checkoutInfo['contactPhone']); ?></h3>
                                    </li>
                                    <li class="info_contact-item">
                                        <h3>Email:</h3>
                                        <h3 class="info_contact-input"><?php echo e($checkoutInfo['contactEmail']); ?></h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid__column-6">
                            <div class="id_order">
                                <h3>Mã đặt chỗ:</h3>
                                <h2 class="id_seat">...</h2>
                            </div>
                            <div class="info_contact">
                                <h3>Thông tin hành khách: <span>(1 khách)</span></h3>
                                <ul class="info_contact-list">
                                    <li class="info_contact-item">
                                        <h3>Họ tên:</h3>
                                        <h3 class="info_contact-input"><?php echo e($checkoutInfo['customerName']); ?></h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout_success-place">
                    <div>
                        <h3 class="success_place-name"><?php echo e($ticketItem['nameFrom']); ?></h3>
                        <h4 class="success_place-date"><?php echo e(date('H:i', strtotime($ticketItem['ticket']->flight_time_departure))); ?>, <?php echo e(date('d', strtotime($ticketItem['ticket']->flight_time_departure))); ?> tháng <?php echo e(date('m', strtotime($ticketItem['ticket']->flight_time_departure))); ?></h4>
                        <div class="success_place-air">
                            <img alt="" src="<?php echo e(URL::to('upload/'.$ticketItem['ticket']->airline_logo)); ?>" style="width: 32px;">
                            <div class="success_place-air-name">
                                <?php echo e($ticketItem['ticket']->airline_name); ?>

                            </div>
                            <div class="success_place-air-id">
                                <?php echo e($ticketItem['ticket']->airplane_name); ?> . <?php echo e($ticketItem['ticket']->airplane_number); ?>

                            </div>
                        </div>
                    </div>
                    <div class="checkout_success-place-icon">
                        <div>
                            <span></span>
                            <i class="fa-solid fa-plane"></i>
                            <span></span>
                        </div>
                    </div>
                    <div>
                        <h3 class="success_place-name"><?php echo e($ticketItem['nameTo']); ?></h3>
                        <h4 class="success_place-date"><?php echo e(date('H:i', $ticketItem['timeArr'])); ?>, <?php echo e(date('d', $ticketItem['timeArr'])); ?> tháng <?php echo e(date('m', $ticketItem['timeArr'])); ?></h4>
                        <div class="success_place-air">
                            <img alt="" src="https://storage.googleapis.com/tripi-flights/agenticons/Vietjet_Air_logo_transparent.png" style="width: 32px;">
                            <div class="success_place-air-name">
                                <?php echo e($ticketItem['ticket']->airline_name); ?>

                            </div>
                            <div class="success_place-air-id">
                                <?php echo e($ticketItem['ticket']->airplane_name); ?> . <?php echo e($ticketItem['ticket']->airplane_number); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="back_home">
                    <button onclick="location.href = '/home'" class="btn btn--primary">Trở về trang chủ</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/checkout/checkout_completed.blade.php ENDPATH**/ ?>