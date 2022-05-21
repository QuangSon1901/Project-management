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

    <script>
        // Get the modal
        var modal_login = document.getElementById("modal_login");
        var modal_overlay = document.getElementById("modal_overlay");
        var body = document.querySelector("body");
        // Get the button that opens the modal
        var btn_login = document.getElementById("btn_login");
        // Get the <span> element that closes the modal
        var btn_close = document.querySelectorAll(".close");
        // When the user clicks the button, open the modal 
        $('#btn_login').click(function() {
            $('#modal_login').css('display', 'flex');
            $('body').addClass('lock-overlay');
        })
        var signUpButton = document.getElementById('signUp');
        var signInButton = document.getElementById('signIn');
        var container = document.getElementById('container');
        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
        // When the user clicks on <btn_close> (x), close the modal
        btn_close.forEach(function(element, index) {
            element.addEventListener('click', function() {
                modal_login.style.display = "none";
                body.classList.remove("lock-overlay");
                container.classList.remove("right-panel-active");
                var loginInput = document.querySelectorAll('#loginForm .inputForm');
                var registerInput = document.querySelectorAll('#registerForm .inputForm');
                loginInput.forEach(function(element, index) {
                    element.value = '';
                })
                registerInput.forEach(function(element, index) {
                    element.value = '';
                })
            })
        });
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal_login || event.target == modal_overlay) {
                modal_login.style.display = "none";
                body.classList.remove("lock-overlay");
                container.classList.remove("right-panel-active");
                var loginInput = document.querySelectorAll('#loginForm .inputForm');
                var registerInput = document.querySelectorAll('#registerForm .inputForm');
                loginInput.forEach(function(element, index) {
                    element.value = '';
                })
                registerInput.forEach(function(element, index) {
                    element.value = '';
                })
            }
        }
    </script>
</body>

</html>