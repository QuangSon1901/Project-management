@extends('user_page.info.info_layout')
@section('content_info')
<form id="passwordForm">
    {{csrf_field()}}
    <div class="content_info-header ">
        <h3 class="content_info-title">Đổi mật khẩu</h3>
        <span class="content_info-desc">Thường xuyên thay đổi mật khẩu để bảo mật
            được tốt hơn</span>
    </div>
    <div class="content_info-body">
        <div class="grid__row">
            <div class="grid__column-12">
                <div class="content_info-profile">
                    <div class="group_input">
                        <span style="width:250px">Mật khẩu hiện tại:</span>
                        <input type="password" name="oldPassword" class="input_form">
                    </div>
                    <div class="group_input">
                        <span style="width:250px">Mật khẩu mới:</span>
                        <input type="password" name="newPassword" class="input_form">
                    </div>
                    <div class="group_input">
                        <span style="width:250px">Xác nhận mật khẩu:</span>
                        <input type="password" name="comfirmPassword" class="input_form">
                    </div>
                    <span class="pass_forget ml-220" id="forgotPassword"><a>Quên mật khẩu?</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="content_info-footer">
        <button type="submit" class="btn btn--primary">Xác nhận</button>
    </div>
</form>
<script>
    $(document).ready(function() {
        $('#passwordForm').submit(function(e) {
            e.preventDefault();
            let data = {
                '_token': $('input[name="_token"]').val(),
                'oldPassword': $(this).find('input[name="oldPassword"]').val(),
                'newPassword': $(this).find('input[name="newPassword"]').val(),
                'comfirmPassword': $(this).find('input[name="comfirmPassword"]').val(),
            }

            $.ajax({
                url: '/info/change-pass',
                type: 'post',
                data: data,
                success: function(res) {
                    if (res.status === 403) {
                        swal('Thông báo', res.msg, 'error');
                    }
                    if (res.status === 200) {
                        swal('Thông báo', res.msg, 'success');
                        setTimeout(function() {
                            window.location.href = '/logout';
                        }, 2000);
                    }
                }
            })
        })

        $('#forgotPassword').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Nhập email tài khoản',
                input: 'email',
                inputPlaceholder: 'Enter email'
            }).then((result) => {
                if (result.isConfirmed) {
                    loadingFlight('show', 'Đang xử lý...');
                    $.ajax({
                        url: '/forgot-password\/' + result.value,
                        type: 'get',
                        success: function(res) {
                            if (res.status === 403) {
                                Swal.fire({
                                    title: res.msg,
                                })
                            }
                            if (res.status === 200) {
                                Swal.fire({
                                    title: res.msg,
                                })
                            }
                            loadingFlight('hide');
                        }
                    })
                }
            })
        })
    })
</script>
@endsection