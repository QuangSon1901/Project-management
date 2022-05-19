@extends('user_page.info.info_layout')
@section('content_info')
<form id="infoForm" enctype="multipart/form-data">
    {{csrf_field()}}
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
                        <input type="text" name="name" class="input_form is" value="{{auth()->user()->name}}">
                    </div>
                    <div class="group_input">
                        <span>Số điện thoại:</span>
                        <input type="text" name="phone" class="input_form" value="{{auth()->user()->phone}}">
                    </div>
                    <div class="group_input">
                        <span>Email:</span>
                        <input type="text" name="email" class="input_form" value="{{auth()->user()->email}}">
                    </div>
                    <div class="group_input">
                        <span>Địa chỉ:</span>
                        <input type="text" name="address" class="input_form" value="{{auth()->user()->address}}">
                    </div>
                    <div class="group_input">
                        <span>Giới tính:</span>
                        <div class="radio_select_form">
                            <label style="vertical-align: middle;">
                                <input type="radio" value="nam" @if(auth()->user()->gender == 'nam') checked @endif name="gender">
                                <i class="icon-radio" style="transform: translateY(28%);"></i>
                                <span>Nam</span>
                            </label>
                            <label style="vertical-align: middle;">
                                <input type="radio" value="nữ" @if(auth()->user()->gender == 'nữ') checked @endif name="gender">
                                <i class="icon-radio" style="transform: translateY(28%);"></i>
                                <span>Nữ</span>
                            </label>
                            <label style="vertical-align: middle;">
                                <input type="radio" value="khác" @if(auth()->user()->gender == 'khác') checked @endif name="gender">
                                <i class="icon-radio" style="transform: translateY(28%);"></i>
                                <span>Khác</span>
                            </label>
                        </div>
                    </div>
                    <div class="group_input">
                        <span>Ngày sinh:</span>
                        <input type="datetime-local" name="birthday" value="{{date('d-m-Y', strtotime(auth()->user()->birthday))}}" class="input_form-date">
                    </div>
                </div>
            </div>
            <div class="grid__column-4">
                <div class="content_info-avt">
                    <img src="{{URL::to('upload/'.auth()->user()->avatar)}}" id="imagePreview" class="content_info-avatar">
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
            var imgDefault = "{{asset('user_asset/assets/img/lanlan.jpg')}}";
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
@endsection