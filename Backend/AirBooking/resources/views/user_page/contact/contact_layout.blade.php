{{View::make('user_page.header')}}

<body>
    <div class="app">
        <!-- Header -->
        {{View::make('user_page.navbar')}}

        <!-- Container -->
        <div class="container">
            {{View::make('user_page.slider')}}

            <div class="grid">
                <div class="inhapt_content">
                    <div class="breadcrumb">
                        <ol class="breadcrumb_list">
                            <li class="breadcrumd_item"><a href="/" style="color:var(--text-color)">Trang chủ</a></li>
                            <li class="breadcrumd_icon"><i class="fa-solid fa-angle-right"></i></li>
                            <li class="breadcrumd_item"><a href="#" style="color:var(--text-color)">Trang liên hệ</a></li>
                        </ol>
                    </div>
                </div>
                <div class="content">
                    @yield('contentContact')
                </div>
            </div>

        </div>

        <!-- Footer -->
        {{View::make('user_page.footer')}}
    </div>

    <!-- Login - Register -->
    {{View::make('user_page.login_register')}}
</body>
</html>