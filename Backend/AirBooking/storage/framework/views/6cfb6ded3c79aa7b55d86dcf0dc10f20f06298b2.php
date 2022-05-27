
<?php $__env->startSection('content_info'); ?>
<form id="infoForm" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <div class="content_info-header ">
        <h3 class="content_info-title">Hồ Sơ Của Tôi</h3>
        <span class="content_info-desc">Quản lý thông tin hồ sơ để bảo mật tài
            khoản</span>
    </div>
    <div class="content_info-body">
        <div class="grid__row">
            <div class="grid__column-8">
                <div class="content_info-profile">
                    <div class="group_input">
                        <span>Họ và tên:</span>
                        <input type="text" name="name" class="input_form is" value="<?php echo e(auth()->user()->name); ?>">
                    </div>
                    <div class="group_input">
                        <span>Số điện thoại:</span>
                        <input type="text" name="phone" class="input_form" value="<?php echo e(auth()->user()->phone); ?>">
                    </div>
                    <div class="group_input">
                        <span>Email:</span>
                        <input type="text" name="email" class="input_form" value="<?php echo e(auth()->user()->email); ?>">
                    </div>
                    <div class="group_input">
                        <span>Địa chỉ:</span>
                        <input type="text" name="address" class="input_form" value="<?php echo e(auth()->user()->address); ?>">
                    </div>
                    <div class="group_input">
                        <span>Giới tính:</span>
                        <div class="radio_select_form">
                            <label style="vertical-align: middle;">
                                <input type="radio" value="nam" <?php if(auth()->user()->gender == 'nam'): ?> checked <?php endif; ?> name="gender">
                                <i class="icon-radio" style="transform: translateY(28%);"></i>
                                <span>Nam</span>
                            </label>
                            <label style="vertical-align: middle;">
                                <input type="radio" value="nữ" <?php if(auth()->user()->gender == 'nữ'): ?> checked <?php endif; ?> name="gender">
                                <i class="icon-radio" style="transform: translateY(28%);"></i>
                                <span>Nữ</span>
                            </label>
                            <label style="vertical-align: middle;">
                                <input type="radio" value="khác" <?php if(auth()->user()->gender == 'khác'): ?> checked <?php endif; ?> name="gender">
                                <i class="icon-radio" style="transform: translateY(28%);"></i>
                                <span>Khác</span>
                            </label>
                        </div>
                    </div>
                    <div class="group_input">
                        <span>Ngày sinh:</span>
                        <input type="datetime-local" name="birthday" value="<?php echo e(date('d-m-Y', strtotime(auth()->user()->birthday))); ?>" class="input_form-date">
                    </div>
                </div>
            </div>
            <div class="grid__column-4">
                <div class="content_info-avt">
                    <?php if(isset(auth()->user()->avatar)): ?>
                    <img src="<?php echo e(URL::to('upload/'.auth()->user()->avatar)); ?>" id="imagePreview" class="content_info-avatar">
                    <?php else: ?>
                    <img src="<?php echo e(Avatar::create(auth()->user()->name)->toBase64()); ?>" id="imagePreview" class="content_info-avatar" />
                    <?php endif; ?>
                    <input accept="image/*" name="avatar" type="file" id="inputFile">
                    <button id="btnFile" type="button" class="btn btn--hollow">Chọn ảnh</button>
                    <div class="content_info-desc">
                        <span>Dụng lượng file tối đa 1 MB</span>
                        <span>Định dạng: .JPEG, .PNG</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content_info-footer">
        <button type="submit" id="btnInfoChange" class="btn btn--primary">Cập nhật</button>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    config = {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "d-m-Y"
    }
    flatpickr("input[type=datetime-local]", config);
</script>
<script>
    $(document).ready(function() {
        $('#btnFile').click(function(e) {
            e.preventDefault();
            $('#inputFile').click();
        })

        $('#inputFile').change(function(e) {
            e.preventDefault();
            var imageData = '';
            var fileTypes = ['image/png', 'image/jpeg'];
            var maxSize = 1024 * 1024; // 1MB
            var imgDefault = "<?php echo e(asset('user_asset/assets/img/lanlan.jpg')); ?>";
            onChangeInput(e, '#imagePreview', imageData, fileTypes, maxSize, imgDefault);
        })
    })
</script>
<script>
    $(document).ready(function() {
        $('#infoForm').submit(function(e) {
            $('#btnInfoChange').html('Đang xử lý...').prop('disabled',
                true);
            e.preventDefault();
            let formData = this;
            $.ajax({
                url: '/info',
                type: 'post',
                data: new FormData(formData),
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function(res) {
                    if (res.status === 403) {
                        swal('Thông báo', res.msg, 'error');
                    }
                    if (res.status === 200) {
                        swal('Thông báo', res.msg, 'success');
                    }
                    $('#btnInfoChange').html('Cập nhật').prop('disabled',
                        false);
                }
            });
        })
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user_page.info.info_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/info/info_form.blade.php ENDPATH**/ ?>