{{View::make('user_page.header')}}

<body>
    <div class="app">
        <!-- Header -->
        {{View::make('user_page.navbar')}}

        <div class="container">
            <!-- With search -->
            <div class="search">
                <div class="grid">
                    <div class="search__heading">
                        <i class="search__heading-icon fas fa-route"></i>
                        <h1 class="search__heading-title">Bạn đã sẵn sàng cho chuyến đi chưa?</h1>
                    </div>

                    {{View::make('user_page.search')}}
                </div>
            </div>

            <!-- Category muibox -->
            {{View::make('user_page.category_muibox')}}

            <!-- Category deal -->
            {{View::make('user_page.category_deal')}}

            <!-- Category statistic -->
            {{View::make('user_page.category_statistic')}}
        </div>

        <!-- Footer -->
        {{View::make('user_page.footer')}}
    </div>

    <!-- Login - Register -->
    {{View::make('user_page.login_register')}}
</body>
@if(!empty(Session::get('openLogin')) && Session::get('openLogin') == 403)
<script>
    $('#btn_login').click();
</script>
@endif

</html>