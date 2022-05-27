<?php echo e(View::make('user_page.header')); ?>


<body>
    <div class="app" style="background-color: #F4F8FA;">
        <!-- Header -->
        <?php echo e(View::make('user_page.checkout.checkout_navbar')); ?>


        <div class="container" id="content_checkout">
            <?php echo $__env->yieldContent('content_checkout'); ?>
        </div>

        <!-- Footer -->
        <?php echo e(View::make('user_page.footer')); ?>

    </div>
</body>
<script>
    $('.order_info-payment').click(function() {
        $(this).closest('.order_info').find('.order_info-tour').slideToggle(200);
    })

    $('input[name="payment_method"]').change(function() {
        toggleBlock($(this).closest('ul').find('.payment_select-show'));
        $(this).closest('ul').find('input[name="payment_method-bank"]:checked').prop('checked', false);
        $(this).closest('ul').find('.bank_item-show').removeClass('bank_item-show');

        let inputPayment = $(this).closest('li').find('.payment_select');

        inputPayment.slideToggle(200);
        inputPayment.addClass('payment_select-show')
    })

    $('input[name="payment_method-bank"]').change(function() {
        $(this).closest('.bank_list').find('.bank_item-show').removeClass('bank_item-show');

        let inputPayment = $(this).closest('.bank_item')
        inputPayment.addClass('bank_item-show')
    })

    function toggleBlock(thisToggle) {
        thisToggle.slideToggle(200);
        thisToggle.removeClass('payment_select-show');
    }
</script>

</html><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/checkout/checkout_layout.blade.php ENDPATH**/ ?>