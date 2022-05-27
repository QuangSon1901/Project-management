
<?php $__env->startSection('content_checkout'); ?>
<div class="container_order">
    <div class="grid">
        <div class="grid__row">
            <div class="grid__column-7">
                <form action="/checkout/payment" method="get">
                    <input type="hidden" name="ticketID" value="<?php echo e($_GET['ticket_id']); ?>">
                    <div class="order_info" style="padding: 0;">
                        <?php echo e(View::make('user_page.checkout.checkout_flight_info')); ?>

                    </div>
                    <div class="order_info">
                        <div class="order_heading">Thông tin khách hàng
                        </div>
                        <div class="order_note">
                            <span>Nhập tiếng Việt không dấu, không có ký tự đặc biệt.</span>
                            <span>Nhập họ tên trùng khớp trên giấy tờ tùy thân.</span>
                        </div>
                        <div class="order_customer">
                            <div class="order_customer-heading">
                                <div class="order_customer-svg">
                                    <svg width="10" height="20" fill="none">
                                        <path d="M4.616 7.096A4.303 4.303 0 001.89 8.589 4.478 4.478 0 00.834 11.56v2.536c0 .103.04.203.112.276a.378.378 0 00.27.114H2.6c.048 0 .094.018.129.051a.197.197 0 01.061.128l.337 4.145a.393.393 0 00.122.254c.071.067.164.103.26.103h3.055a.377.377 0 00.26-.103.393.393 0 00.122-.255l.339-4.144a.197.197 0 01.06-.128.189.189 0 01.13-.051h1.381a.378.378 0 00.27-.114.394.394 0 00.112-.276v-2.73c0-.6-.124-1.193-.363-1.74a4.293 4.293 0 00-1.021-1.441 4.187 4.187 0 00-1.506-.894 4.123 4.123 0 00-1.73-.195zM5.036 6.295c1.476 0 2.673-1.223 2.673-2.731 0-1.508-1.197-2.73-2.673-2.73-1.477 0-2.674 1.222-2.674 2.73s1.197 2.73 2.674 2.73z" fill="#4A5568"></path>
                                    </svg>
                                </div>
                                Khách hàng 1
                            </div>
                            <div class="order_customer-info">
                                <div class="customer_info-gender">
                                    <h4>Giới tính</h4>
                                    <select name="customerGender" id="customerGender" class="input_form <?php $__errorArgs = ['customerGender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <option value="0" <?php echo e(old('customerGender') == '0' ? "selected" : ""); ?>>Nam</option>
                                        <option value="1" <?php echo e(old('customerGender') == '1' ? "selected" : ""); ?>>Nữ</option>
                                    </select>
                                    <?php $__errorArgs = ['customerGender'];
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
                                <div class="customer_info-name">
                                    <h4>Họ tên</h4>
                                    <input oninput="this.value = this.value.toUpperCase()" id="customerName" name="customerName" value="<?php echo e(old('customerName')); ?>" type="text" class="input_form <?php $__errorArgs = ['customerName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Họ tên (Ví dụ: NGUYEN VAN A)">
                                    <?php $__errorArgs = ['customerName'];
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
                            </div>
                        </div>
                        <label class="option-checkbox">
                            <input type="checkbox" id="search_checkbox">
                            <i class="icon-checkbox"></i>
                            Thông tin hành khách là thông tin liên hệ
                        </label>
                    </div>
                    <div class="order_info">
                        <div class="order_heading">Thông tin liên hệ
                            <span>Mã đặt chỗ sẽ được gửi theo thông tin liên hệ dưới đây</span>
                        </div>
                        <div class="order_customer">
                            <div class="order_customer-info">
                                <div class="customer_info-gender">
                                    <h4>Giới tính</h4>
                                    <select name="contactGender" id="contactGender" class="input_form  <?php $__errorArgs = ['contactGender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <option value="0" <?php echo e(old('contactGender') == '0' ? "selected" : ""); ?>>Nam</option>
                                        <option value="1" <?php echo e(old('contactGender') == '0' ? "selected" : ""); ?>>Nữ</option>
                                    </select>
                                    <?php $__errorArgs = ['contactGender'];
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
                                <div class="customer_info-name">
                                    <h4>Họ tên</h4>
                                    <input oninput="this.value = this.value.toUpperCase()" name="contactName" value="<?php echo e(old('contactName')); ?>" id="contactName" type="text" class="input_form <?php $__errorArgs = ['contactName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Họ tên (Ví dụ: NGUYEN VAN A)">
                                    <?php $__errorArgs = ['contactName'];
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
                            </div>
                            <div class="order_customer-info">
                                <div class="customer_info-phone">
                                    <h4>Số điện thoại</h4>
                                    <input name="contactPhone" id="contactPhone" type="text" value="<?php echo e(old('contactPhone')); ?>" class="input_form <?php $__errorArgs = ['contactPhone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nhập số điện thoại">
                                    <?php $__errorArgs = ['contactPhone'];
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
                                <div class="customer_info-email">
                                    <h4>Email</h4>
                                    <input name="contactEmail" id="contactEmail" type="text" value="<?php echo e(old('contactEmail')); ?>" class="input_form <?php $__errorArgs = ['contactEmail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nhập địa chỉ email">
                                    <?php $__errorArgs = ['contactEmail'];
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
                            </div>
                        </div>
                    </div>
                    <div class="submit_order_info">
                        <button type="submit" class="btn btn--primary">Tiếp tục</button>
                    </div>
                </form>
            </div>
            <?php echo e(View::make('user_page.checkout.checkout_price_info')); ?>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#search_checkbox').click(function() {
            if ($(this).is(':checked')) {
                $('#contactName').val($('#customerName').val());
            }
        })

        $('#customerName').keyup(function() {
            if ($('#search_checkbox').is(':checked')) {
                $('#contactName').val($(this).val());
            }
        })

        $('#customerName').change(function() {
            if ($('#search_checkbox').is(':checked')) {
                $('#contactName').val($(this).val());
            }
        })

        $('#contactName').keyup(function() {
            if ($('#search_checkbox').is(':checked')) {
                $('#search_checkbox').prop('checked', false);
            }
        })

        $('#contactName').change(function() {
            if ($('#search_checkbox').is(':checked')) {
                $('#search_checkbox').prop('checked', false);
            }
        })
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user_page.checkout.checkout_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/checkout/checkout_body_info.blade.php ENDPATH**/ ?>