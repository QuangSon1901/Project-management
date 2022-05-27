<?php
$dateList = Session::get('dateList');
?>
<div class="content_ticket-date">
    <div class="ticket_date swiper mySwiper">
        <div class="arrow ticket_date-arrow-left swiper-button-prev">
            <i class="fa-solid fa-angle-left"></i>
        </div>
        <div class="arrow ticket_date-arrow-right swiper-button-next">
            <i class="fa-solid fa-angle-right"></i>
        </div>
        <div class="ticket_slider swiper-wrapper">
            <?php $__currentLoopData = $dateList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="text-align: center;" data-filter="<?php echo e($item); ?>" class="ticket_date-group swiper-slide <?php if($item == $_GET['dateFromInput']): ?> ticket_date--active <?php endif; ?>">
                <h3 class="ticket_date-date"><?php echo e(date('d', strtotime($item))); ?> tháng <?php echo e(date('m', strtotime($item))); ?></h3>
                <h3 class="ticket_date-price">1000.000đ</h3>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="content_ticket-sort">
    <div class="ticket_sort-list">
        <label> <input type="radio" name="ticket_sort-input" checked class="ticket_sort-input">
            <div class="ticket_sort-item">Đề xuất<i class="fa-solid fa-sort"></i>
            </div>
        </label>
        <label> <input type="radio" name="ticket_sort-input" class="ticket_sort-input">
            <div class="ticket_sort-item">Giá tăng dần<i class="fa-solid fa-sort"></i>
            </div>
        </label>
        <label> <input type="radio" name="ticket_sort-input" class="ticket_sort-input">
            <div class="ticket_sort-item">Thời gian cất cánh<i class="fa-solid fa-sort"></i></div>
        </label>
        <label> <input type="radio" name="ticket_sort-input" class="ticket_sort-input">
            <div class="ticket_sort-item">Thời gian bay<i class="fa-solid fa-sort"></i>
            </div>
        </label>
    </div>
</div>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        slidesPerGroup: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    $('.ticket_date-group').click(function() {
        removeClassTicketDate();
        $(this).addClass('ticket_date--active');
    })

    function removeClassTicketDate() {
        var ticketDateActive = $('.ticket_date--active');
        ticketDateActive.removeClass('ticket_date--active');
    }
</script>

<?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/search/search_filter2.blade.php ENDPATH**/ ?>