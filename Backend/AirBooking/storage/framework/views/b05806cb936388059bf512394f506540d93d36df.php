
<?php $__env->startSection('content_checkout'); ?>
<div class="container_order">
    <div class="grid">
        <div class="grid__row">
            <div class="grid__column-7">
                <form action="/checkout/checkout-completed" method="get" id="paymentMethodForm">
                    <div class="order_info" style="padding: 0;">
                        <?php echo e(View::make('user_page.checkout.checkout_flight_info')); ?>

                    </div>
                    <div class="order_info">
                        <div class="order_heading">Phương thức thanh toán
                            <span>Sau khi hoàn tất thanh toán, vé điện tử sẽ được gửi ngay qua SMS và Email của bạn.</span>
                            <?php $__errorArgs = ['payment_method'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="textError">
                                <?php echo e($message); ?>

                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="textError">
                                <?php echo e($message); ?>

                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="order_payment">
                            <ul class="payment_method">
                                <?php $__currentLoopData = $paymentMethodList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <label>
                                        <div>
                                            <?php echo $item->payment_method_svg; ?>

                                            <h4><?php echo e($item->payment_method_name); ?></h4>
                                        </div>
                                        <input type="radio" value="<?php echo e($item->payment_method_id); ?>" <?php echo e(old('payment_method') == $item->payment_method_id ? "checked" : ""); ?> name="payment_method">
                                        <i class="icon-radio"></i>
                                    </label>
                                    <?php if($item->payment_method_html != null): ?>
                                    <?php echo $item->payment_method_html; ?>

                                    <?php endif; ?>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="submit_order_info" style="margin-top:20px">
                                <button type="submit" class="btn btn--primary">Thanh toán</button>
                            </div>
                            <div class="submit_order_info" style="margin-top:10px">
                                <span style="font-size: 1.2rem;">Bằng cách nhấn nút Thanh toán, bạn đồng ý
                                    với</span>
                            </div>
                            <div class="submit_order_info">
                                <a style="font-size: 1.2rem; color: var(--primary-color); cursor: pointer;">
                                    <span class="MuiTypography-root MuiTypography-body2">Điều kiện và Điều
                                        khoản</span>&nbsp;
                                </a>
                                <span style="font-size: 1.2rem;">của chúng tôi</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php echo e(View::make('user_page.checkout.checkout_price_info')); ?>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#checkoutPayment').addClass('navbar__step-item--active');
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user_page.checkout.checkout_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/checkout/checkout_body_payment.blade.php ENDPATH**/ ?>