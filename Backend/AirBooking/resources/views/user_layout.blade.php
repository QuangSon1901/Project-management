{{View::make('user_page.header')}}

<body>
    <div class="app">
        <!-- Header -->
        {{View::make('user_page.navbar')}}

        <div class="container">
            <!-- With search -->
            {{View::make('user_page.search')}}

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

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        config = {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "d-m-Y",
        }
        flatpickr("input[type=datetime-local]", config);

        var double_arrow_click = document.querySelector("#double-arrow");


        double_arrow_click.addEventListener("click", function() {
            var get_rotate = document.querySelector(".rotate");
            if (get_rotate) {
                var from = $('#inputFrom').val();
                var to = $('#inputTo').val();
                $('#inputFrom').val(to);
                $('#inputTo').val(from);
                double_arrow_click.classList.remove("rotate");
            } else {
                var from = $('#inputFrom').val();
                var to = $('#inputTo').val();
                $('#inputFrom').val(to);
                $('#inputTo').val(from);
                double_arrow_click.classList.add("rotate");
            }
        });
    </script>
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

                var loginInput = document.querySelectorAll('#loginForm input');
                var registerInput = document.querySelectorAll('#registerForm input');
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

                var loginInput = document.querySelectorAll('#loginForm input');
                var registerInput = document.querySelectorAll('#registerForm input');
                loginInput.forEach(function(element, index) {
                    element.value = '';
                })
                registerInput.forEach(function(element, index) {
                    element.value = '';
                })
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#inputFrom').click(function(e) {
                e.stopPropagation();
                $('#hintArrflight').addClass('search-input__hint--hidden')
                $('#hintDepflight').removeClass('search-input__hint--hidden')
                $('#hintDepflight').not($('#hintDepflight')).addClass('search-input__hint--hidden')
                $('#hintDepflight .search-input__hint-place').click(function() {
                    var option = $(this).text();
                    $('#inputFrom').val(option);
                    $(this).addClass('search-input__hint-place--active');
                    $('.search-input__hint-place').not($(this)).removeClass('search-input__hint-place--active');
                    // Backend them value
                    $('#hintDepflight').addClass('search-input__hint--hidden')
                })
            })

            $('#inputTo').click(function(e) {
                e.stopPropagation();
                $('#hintDepflight').addClass('search-input__hint--hidden')
                $('#hintArrflight').removeClass('search-input__hint--hidden')
                $('#hintArrflight').not($('#hintArrflight')).addClass('search-input__hint--hidden')
                $('#hintArrflight .search-input__hint-place').click(function() {
                    var option = $(this).text();
                    $('#inputTo').val(option);
                    $(this).addClass('search-input__hint-place--active');
                    $('.search-input__hint-place').not($(this)).removeClass('search-input__hint-place--active');
                    // Backend them value
                    $('#hintArrflight').addClass('search-input__hint--hidden')
                })
            })

            $('#hintDepflight').click(function(e) {
                e.stopPropagation()
            })

            $('#hintArrflight').click(function(e) {
                e.stopPropagation()
            })

            $('html').click(function() {
                $('#hintDepflight').addClass('search-input__hint--hidden')
                $('#hintArrflight').addClass('search-input__hint--hidden')
            })
        })
    </script>
</body>

</html>