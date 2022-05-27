<?php
    $ticketItem = Session::get('ticketItem');
?>
<div class="order_info-payment">
    <div class="order_place" style="border:none">
        <div class="order_place-heading"><?php echo e($ticketItem['nameFrom']); ?> - <?php echo e($ticketItem['nameTo']); ?>

        </div>
        <ol class="order_place-desc">
            <li>Ngày <?php echo e(date('d', strtotime($ticketItem['ticket']->flight_time_departure))); ?> tháng <?php echo e(date('m', strtotime($ticketItem['ticket']->flight_time_departure))); ?></li>
            <li>-</li>
            <li>1 khách</li>
            <li>-</li>
            <li><?php echo e($ticketItem['ticket']->ticket_class_name); ?></li>
        </ol>
    </div>
    <div class="order_place-icon">
        <i class="fa-solid fa-angle-down"></i>
    </div>
</div>
<div class="class_seat-desc-info-column order_info-tour">
    <div class="class_seat-desc-info-body">
        <div class="seat_desc-info-time">
            <div class="seat_desc-info-time-start">
                <h4><?php echo e(date('H:i', strtotime($ticketItem['ticket']->flight_time_departure))); ?></h4>
                <h4 class="seat_desc-info-time-date">
                    <?php echo e(date('d/m/Y', strtotime($ticketItem['ticket']->flight_time_departure))); ?>

                </h4>
            </div>
            <div class="seat_desc-info-time-dep">
                <?php if(date('H', strtotime($ticketItem['ticket']->flight_time_fly)) != 0): ?>
                <?php echo e(date('H', strtotime($ticketItem['ticket']->flight_time_fly))); ?>h
                <?php endif; ?>
                <?php echo e(date('i', strtotime($ticketItem['ticket']->flight_time_fly))); ?>'
            </div>
            <div class="seat_desc-info-time-end">
                <h4><?php echo e(date('H:i', $ticketItem['timeArr'])); ?></h4>
                <h4 class="seat_desc-info-time-date">
                    <?php echo e(date('d/m/Y', $ticketItem['timeArr'])); ?>

                </h4>
            </div>
        </div>
        <div class="seat_desc-info-icon">
            <svg width="16" height="16" fill="none" style="height: 32px; width: 16px; fill: #FF3366; margin-bottom: 4px;">
                <path d="M9.333 10.667v2.666a1.333 1.333 0 01-2.666 0v-2.666L2 8V6l4.667 1.333V4.667L5.333 3.333v-2L8 2.667l2.667-1.334v2L9.333 4.667v2.666L14 6v2l-4.667 2.667z" fill="#FF3366"></path>
            </svg>
            <span></span>
            <svg class="sjsjsj" width="17" height="18" style="height: 32px; width: 16px; fill: #FF3366;">
                <defs>
                    <path id="icon_location_svg__a" d="M0 0h16v16H0z"></path>
                </defs>
                <g transform="translate(.5 1)" fill="#FF3366">
                    <mask id="icon_location_svg__b" fill="#FF3366">
                        <use xlink:href="#icon_location_svg__a">
                        </use>
                    </mask>
                    <path fill="#FF3366" d="M7.538 13.758C4.132 8.82 3.5 8.314 3.5 6.5a4.5 4.5 0 019 0c0 1.814-.632 2.321-4.038 7.258a.562.562 0 01-.924 0zM8 8.375a1.875 1.875 0 100-3.75 1.875 1.875 0 000 3.75z">
                    </path>
                </g>
            </svg>
        </div>
        <div class="seat_desc-info-place">
            <div class="seat_desc-info-place-start">
                <h4><?php echo e($ticketItem['nameFrom']); ?></h4>
                <h4 class="seat_desc-info-place-airplane">
                    <?php echo e($ticketItem['aliasFrom']->airport_name); ?>

                </h4>
            </div>
            <div class="seat_desc-info-place-brandfly">
                <img alt="" src="<?php echo e(URL::to('upload/'.$ticketItem['ticket']->airline_logo)); ?>" style="width: 32px;">
                <div class="seat_desc-info-place-brandfly-air">
                    <div class="seat_desc-info-place-brandfly-air-name">
                        <?php echo e($ticketItem['ticket']->airline_name); ?>

                    </div>
                    <div class="seat_desc-info-place-brandfly-air-id">
                        <?php echo e($ticketItem['ticket']->airplane_name); ?> . <?php echo e($ticketItem['ticket']->airplane_number); ?>

                    </div>
                </div>
            </div>
            <div class="seat_desc-info-place-seat">
                <svg width="16" height="16" fill="none" style="margin-right: 4px;">
                    <g clip-path="url(#ic_seat_svg__clip0)" fill="#4A5568">
                        <path d="M11.766 0a2.753 2.753 0 00-2.75 2.75V4.5a2.753 2.753 0 002.75 2.75 2.753 2.753 0 002.75-2.75V2.75A2.753 2.753 0 0011.766 0zm0 .938c.837 0 1.543.57 1.75 1.343h-3.501a1.816 1.816 0 011.75-1.344zm0 5.374c-1 0-1.813-.813-1.813-1.812V3.219h3.625V4.5c0 1-.813 1.812-1.812 1.812zM8.813 9.875H4.828V4.813c0-.922-.75-1.672-1.672-1.672-.922 0-1.672.75-1.672 1.672v7c0 .775.631 1.406 1.407 1.406h1.218v1.844h-.468a.469.469 0 100 .937h4.375a.469.469 0 000-.937h-.47v-1.844h2.47c.258 0 .468-.21.468-.469v-1.203c0-.922-.75-1.672-1.671-1.672zm-2.204 5.188H5.047v-1.844h1.562v1.844zm2.938-2.782H2.89a.47.47 0 01-.47-.469v-7a.735.735 0 011.47 0v5.532c0 .259.21.469.468.469h4.454c.404 0 .734.329.734.734v.734z">
                        </path>
                    </g>
                    <defs>
                        <clipPath id="ic_seat_svg__clip0">
                            <path fill="#fff" d="M0 0h16v16H0z">
                            </path>
                        </clipPath>
                    </defs>
                </svg>
                <h4><?php echo e($ticketItem['ticket']->ticket_class_name); ?></h4>
                <h4 class="class_seat-it">EB</h4>
            </div>
            <div class="seat_desc-info-place-end">
                <h4><?php echo e($ticketItem['nameTo']); ?></h4>
                <h4 class="seat_desc-info-place-airplane">
                    <?php echo e($ticketItem['aliasTo']->airport_name); ?>

                </h4>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/checkout/checkout_flight_info.blade.php ENDPATH**/ ?>