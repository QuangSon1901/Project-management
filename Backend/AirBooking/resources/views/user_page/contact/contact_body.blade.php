@extends('user_page.contact.contact_layout')
@section('contentContact')
<div class="grid__row">
    <div class="grid__column-3 navbar_info">
        <h3>Thông tin liên lạc</h3>
        <div class="contact_body">
            <ul class="contact_info">
                <li style="color:var(--primary-color) ;text-transform: uppercase;   ">Công ty du lịch Việt Nam TravelTime</li>
                <hr>
                <li>Văn phòng Hà Nội:
                    <ul class="contact_info-ul">
                        <li><i class="fa-solid fa-location-dot contact_info-icon"></i>Tầng 11, Toà Peakview, 36 Hoàng Cầu, Đống Đa</li>
                        <li><i class="fa-solid fa-phone contact_info-icon"></i>Điện thoại: 024 7109 9999.</li>
                        <li><i class="fa-solid fa-envelope contact_info-icon"></i>Email: info@traveltime.vn</li>
                    </ul>
                </li>
                <li>Văn phòng TP.Hồ Chí Minh:
                    <ul class="contact_info-ul">
                        <li><i class="fa-solid fa-location-dot contact_info-icon"></i>Tầng 81, Toà LandMark81, 208 Đ. Nguyễn Hữu Cảnh, Phường 22, Bình Thạnh</li>
                        <li><i class="fa-solid fa-phone contact_info-icon"></i>Điện thoại: 024 7109 9999.</li>
                        <li><i class="fa-solid fa-envelope contact_info-icon"></i>Email: info@traveltime.vn</li>
                    </ul>
                </li>
                <li>Liên hệ hợp tác,truyền thông:
                    <ul class="contact_info-ul">
                        <li><i class="fa-solid fa-location-dot contact_info-icon"></i>Tầng 11, Toà Peakview, 36 Hoàng Cầu, Đống Đa</li>
                        <li><i class="fa-solid fa-phone contact_info-icon"></i>Điện thoại: 024 7109 9999.</li>
                        <li><i class="fa-solid fa-envelope contact_info-icon"></i>Email: info@traveltime.vn</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="grid__column-9">
        <div class="content_info">
            <form id="infoForm">
                @csrf
                <div class="navbar_info ">
                    <h3 class="content_info-title">Liên lạc với chúng tôi qua email</h3>
                </div>
                <div class="content_info-body">
                    <div class="grid__row">
                        <div class="grid__column-12">
                            <div class="content_info-profile">
                                <div class="group_input">
                                    <span>Họ và tên:</span>
                                    <input type="text" oninput="this.value = this.value.toUpperCase()" name="nameContact" class="input_form" placeholder="Họ tên (Ví dụ: NGUYEN VAN A)">
                                </div>
                                <div class="group_input">
                                    <span>Số điện thoại:</span>
                                    <input type="text" name="phoneContact" class="input_form" placeholder="Nhập số điện thoại">
                                </div>
                                <div class="group_input">
                                    <span>Email:</span>
                                    <input type="text" name="emailContact" class="input_form" placeholder="Nhập địa chỉ email">
                                </div>
                                <div class="group_input">
                                    <span>Nội dung:</span>
                                    <textarea name="commentContact" class="textarea_input"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_info-footer">
                    <button type="submit" class="btn btn--primary">Gửi</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#infoForm').submit(function(e) {
            e.preventDefault();
            let formData = this;
            $.ajax({
                type: 'post',
                url: '/contact',
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
                }
            })
        })
    })
</script>
@endsection