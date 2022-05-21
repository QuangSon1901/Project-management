{{View::make('user_page.header')}}

<body>
    <div class="app" style="background-color: var(--background-color-2);">
        <!-- Header -->
        {{View::make('user_page.navbar')}}

        <div class="container">
            <div class="search" style="background: none; height:212px">
                <div class="grid">
                    <!-- With search -->
                    {{View::make('user_page.search')}}
                </div>
            </div>

            <div class="search_body">
                <div class="grid">
                    <div class="breadcrumb">
                        <ol class="breadcrumb_list">
                            <li class="breadcrumd_item"><a href="/" style="color:var(--text-color)">Trang chủ</a></li>
                            <li class="breadcrumd_icon"><i class="fa-solid fa-angle-right"></i></li>
                            <li class="breadcrumd_item"><a href="#" style="color:var(--text-color)">Chuyến bay từ {{old('inputFromText')}} đến {{old('inputToText')}}</a></li>
                        </ol>
                    </div>
                    <div class="search_body-place">
                        <div class="search_place-heading">{{old('inputFromText')}} - {{old('inputToText')}}: <span>{{count($ticketList)}} chuyến bay</span>
                        </div>
                        <ol class="search_place-desc">
                            <li>{{date('d', strtotime(old('dateFromInput')))}} tháng {{date('m', strtotime(old('dateFromInput')))}}</li>
                            <li>-</li>
                            <li>{{old('adultInput') + old('childrenInput') + old('infantInput')}} khách</li>
                        </ol>
                    </div>
                    <div class="search_body-content">
                        <div class="grid__row">
                            <div class="grid__column-3-default" style="padding-right:20px">
                                {{View::make('user_page.search.search_filter')}}
                            </div>
                            <div class="grid__column-9">
                                {{View::make('user_page.search.search_filter2')}}
                                <div class="content_ticket-body" id="searchBody">
                                    @yield('search_body')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $('#filterClear').click(function() {
                    $('.content_filter input[type="checkbox"]:checked').click();
                })
            </script>
        </div>

        <!-- Footer -->
        {{View::make('user_page.footer')}}
    </div>

    <!-- Login - Register -->
    {{View::make('user_page.login_register')}}

    <!-- SearchPage Js -->
    <script>
        var filterPriceInput = $('#filterPriceInput');
        var filterPriceSpan = $('#filterPriceSpan');
        filterPriceInput.on('input', function() {
            $('#filterPriceInput').val(filterPriceInput.val())
            var numberFormat = new Intl.NumberFormat().format(filterPriceInput.val());
            filterPriceSpan.html(numberFormat);
        })
        $('.ticket_date-group').click(function() {
            removeClassTicketDate();
            $(this).addClass('ticket_date--active');
        })
        function removeClassTicketDate() {
            var ticketDateActive = $('.ticket_date--active');
            ticketDateActive.removeClass('ticket_date--active');
        }
    </script>
    

    <script>
        $('.ticket_expansion').click(function() {
            if ($(this).find('input').is(':checked')) {
                $(this).find('span').html(`
                <input type="checkbox"> Xem thêm hạng ghế và giá vé<i class="fa-solid fa-angle-down"></i>
            `);
                $(this).find('input').prop('checked', false);
                let unChecked = $(this).closest('.ticket_body-item').find('.class_seat-detail').find('input[type="checkbox"]:checked');
                unChecked.prop('checked', false)
                $(this).closest('.ticket_body-item').find('.class_seat-desc-info').removeClass('show_seat-detail');
                $(this).closest('.ticket_body-item').find('.class_seat-item').css('height', '60.6px');
                $(this).closest('.ticket_body-item').find('.class_seat-list').css('height', '60.6px');
            } else {
                $(this).find('span').html(`
                <input type="checkbox"> Thu gọn<i class="fa-solid fa-angle-up"></i>
            `);
                $(this).find('input').prop('checked', true);
                let countTicket = $(this).closest('.ticket_body-item').find('.class_seat-item').length;
                let countTicketDetail = $(this).closest('.ticket_body-item').find('.show_seat-detail').length;
                $(this).closest('.ticket_body-item').find('.class_seat-list').css('height', (countTicketDetail * 406) + (countTicket * 60.6) + 'px');
            }
        })
        $('.class_seat-detail').click(function() {
            if ($(this).find('input').is(':checked')) {
                $(this).find('input').prop('checked', false);
                let ticketListHeight = $(this).closest('.ticket_body-item').find('.class_seat-list').height();
                $(this).closest('.class_seat-item').find('.class_seat-desc-info').removeClass('show_seat-detail');
                $(this).closest('.class_seat-item').css('height', '60.6px');
                $(this).closest('.ticket_body-item').find('.class_seat-list').css('height', ticketListHeight - 406 + 'px');
            } else {
                $(this).find('input').prop('checked', true);
                let ticketListHeight = $(this).closest('.ticket_body-item').find('.class_seat-list').height();
                $(this).closest('.class_seat-item').find('.class_seat-desc-info').addClass('show_seat-detail');
                $(this).closest('.class_seat-item').css('height', '466.6px');
                $(this).closest('.ticket_body-item').find('.class_seat-list').css('height', ticketListHeight + 406 + 'px');
            }
        })
    </script>
</body>

</html>