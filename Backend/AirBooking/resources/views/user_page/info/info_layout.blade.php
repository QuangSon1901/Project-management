{{View::make('user_page.header')}}

<body>
    <div class="app">
        <!-- Header -->
        {{View::make('user_page.navbar')}}

        <!-- Container -->
        <div class="container">
            {{View::make('user_page.slider')}}

            <div class="content">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-2 navbar_info">
                            <div class="navbar_info-group navbar_info-header ">
                                <img src="{{URL::to('upload/'.auth()->user()->avatar)}}" class="navbar_info-avatar" alt="">
                                <div>
                                    <h3 class="navbar_info-name">{{auth()->user()->name}}</h3>
                                    <span class="navbar_info-phone">0394062185</span>
                                </div>
                            </div>
                            <div class="navbar_info-group navbar_info-body">
                                <div id="navbar_info-click" class="navbar_info-option">
                                    <h3><i class="fa-solid fa-user"></i>Tài khoản của tôi</h3>
                                    <ul>
                                        <li data-url="/info" class="navbar_info-option--active navbar_info-click">Hồ sơ</li>
                                        <li data-url="/info/change-pass" class="navbar_info-click">Đổi mật khẩu</li>
                                    </ul>
                                </div>
                                <div id="navbar_ticket-click" class="navbar_info-option navbar_info-click" data-url="/info/order">
                                    <h3><i class="fas fa-plane-departure"></i>Vé máy bay</h3>
                                </div>
                                <div class="navbar_info-option">
                                    <h3><a href="/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i>Đăng xuất</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-10">
                            <div class="content_info" id="contentInfo">
                                @yield('content_info')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        {{View::make('user_page.footer')}}
    </div>
    <script>
        $(function() {
            $('.navbar_info-click').click(function() {
                removeActiveInfo();
                $(this).addClass('navbar_info-option--active');
                let _url = $(this).data('url');
                $.pjax({
                    type: 'get',
                    url: _url,
                    container: '#contentInfo',
                    timeout: 9000000,
                })
            })
        })

        // $(function() {
        //     $('#navbar_info-click').click(function(e) {
        //         let isopened = $(this).find('ul').css('display');
        //         if (isopened == 'none') {
        //             $(this).find('ul').slideToggle(500);
        //         }
        //     })


        //     $('#navbar_ticket-click').click(function(e) {
        //         if (!$('#navbar_info-click').is(e.target) && $('#navbar_info-click').has(e.target).length === 0) {
        //             let isopened = $('#navbar_info-click').find('ul').css('display');
        //             if (isopened == 'block') {
        //                 $('#navbar_info-click').find('ul').slideToggle(500);
        //             }
        //         }
        //     })
        // })

        $(document).on('pjax:error', function(event, data, status, xhr, options) {
            swal('Thông báo!', 'Gặp 1 chút sự cố khi tải lên dữ liệu, vui lòng tải lại trang!', 'warning')
        });

        function removeActiveInfo() {
            $('.navbar_info-option--active').removeClass('navbar_info-option--active');
        }
    </script>

    <script src="{{asset('user_asset/assets/js/input-file.js')}}"></script>
</body>

</html>