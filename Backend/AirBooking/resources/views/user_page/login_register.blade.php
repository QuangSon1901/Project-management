<div class="modal" id="modal_login">
    <div class="modal__overlay" id="modal_overlay"></div>
    <div class="modal__body" id="container">
        <div class="container-login_register">
            <!-- Register-->
            <div class="form-container sign-up-container">
                <form class="form-css" id="registerForm">
                    {{csrf_field()}}
                    <h1>Tạo tài khoản</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span class="close-modal close">&#10005;</span>
                    <div class="txt_field">
                        <input type="text" name="fullnameInput" placeholder=" ">
                        <span></span>
                        <label>Họ tên</label>
                    </div>
                    <div class="txt_field">
                        <input type="text" name="emailInput" placeholder=" ">
                        <span></span>
                        <label>Email</label>
                    </div>
                    <div class="txt_field">
                        <input type="password" name="passwordInput" placeholder=" ">
                        <span></span>
                        <label>Mật khẩu</label>
                    </div>
                    <div style="margin: 6px 0; font-size: 12px;">
                        By signin up, you agree to our
                        <br>
                        <a style="color: var(--primary-color);font-size: 12px;" href="">Terms and Conditions</a>
                        &amp;
                        <a style="color: var(--primary-color);font-size: 12px;" href="">Privacy Policy</a>
                    </div>
                    <button type="submit">Đăng ký</button>
                </form>
            </div>

            <!-- Login -->
            <div class="form-container sign-in-container">
                <form class="form-css" id="loginForm">
                    {{csrf_field()}}
                    <h1>Đăng nhập</h1>
                    <div class="social-container">
                        <a class="social"><i class="fab fa-facebook-f"></i></a>
                        <a class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span class="close-modal close">&#10005;</span>
                    <span>hoặc dùng tài khoản TravelTime để đăng nhập</span>
                    <div class="txt_field">
                        <input type="text" name="emailInput" placeholder=" ">
                        <span></span>
                        <label>Email</label>
                    </div>
                    <div class="txt_field">
                        <input type="password" name="passwordInput" placeholder=" ">
                        <span></span>
                        <label>Mật khẩu</label>
                    </div>
                    <a style="cursor:pointer" id="forgotPassword" class="form-container__signin">Quên mật khẩu?</a>
                    <button type="submit">Đăng nhập</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bắt đầu cuộc hành trình mới với TravelTime</h1>
                        <p class="overlay_text">Điền đầy đủ thông tin cá để khám khá cùng TravelTime</p>
                        <button class="ghost" id="signIn">Đăng nhập</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>TravelTime xin kính chào!!</h1>
                        <p class="overlay_text">Hãy đăng nhập và tận hưởng cuộc hành trình với TravelTime</p>
                        <button class="ghost" id="signUp">Đăng ký</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#loginForm').submit(function(e) {
            e.preventDefault();
            let data = {
                '_token': $(this).find('input[name="_token"]').val(),
                'email': $(this).find('input[name="emailInput"]').val(),
                'password': $(this).find('input[name="passwordInput"]').val(),
            }

            $.ajax({
                url: 'login',
                type: 'post',
                data: data,
                success: function(res) {
                    if (res.status === 403) {
                        swal('Thông báo', res.msg, 'error');
                    }
                    if (res.status === 200) {
                        window.location.href = '/';
                    }
                }
            })
        })

        $('#registerForm').submit(function(e) {
            e.preventDefault();
            let data = {
                '_token': $(this).find('input[name="_token"]').val(),
                'fullname': $(this).find('input[name="fullnameInput"]').val(),
                'email': $(this).find('input[name="emailInput"]').val(),
                'password': $(this).find('input[name="passwordInput"]').val(),
            }

            $.ajax({
                url: 'register',
                type: 'post',
                data: data,
                success: function(res) {
                    if (res.status === 403) {
                        swal('Thông báo', res.msg, 'error');
                    }
                    if (res.status === 200) {
                        window.location.href = '/';
                    }
                }
            })
        })

        $('#forgotPassword').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Nhập email tài khoản',
                input: 'email',
                inputPlaceholder: 'Nhập email'
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