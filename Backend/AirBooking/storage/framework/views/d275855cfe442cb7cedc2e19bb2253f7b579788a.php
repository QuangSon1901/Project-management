<?php echo e(View::make('user_page.header')); ?>


<body>
    <div class="app" style="background-color: var(--background-color-2);">
        <!-- Header -->
        <?php echo e(View::make('user_page.navbar')); ?>


        <div class="container">
            <div class="search" style="background: none; height:212px">
                <div class="grid">
                    <!-- With search -->
                    <?php echo e(View::make('user_page.search')); ?>

                </div>
            </div>

            <div class="search_body">
                <div class="grid">
                    <div class="breadcrumb">
                        <ol class="breadcrumb_list">
                            <li class="breadcrumd_item">Trang chủ</li>
                            <li class="breadcrumd_icon"><i class="fa-solid fa-angle-right"></i></li>
                            <li class="breadcrumd_item">Chuyến bay từ Hà Nội đến Sài Gòn</li>
                        </ol>
                    </div>
                    <div class="search_body-place">
                        <div class="search_place-heading">Hà Nội (HN) - Sài Gòn (SG): <span>15 chuyến bay</span>
                        </div>
                        <ol class="search_place-desc">
                            <li>Thứ 4, 11 tháng 05</li>
                            <li>-</li>
                            <li>1 khách</li>
                            <li>-</li>
                            <li>Phổ thông</li>
                        </ol>
                    </div>
                    <div class="search_body-content">
                        <div class="grid__row">
                            <div class="grid__column-3-default" style="padding-right:20px">
                                <div class="content_filter">
                                    <div class="filter_header">
                                        <h3>Bộ lọc</h3>
                                        <h3 class="filter_clear" id="filterClear">Xóa lọc</h3>
                                    </div>
                                    <div class="filter_price">
                                        <h4 class="filter_title">Khoảng giá</h4>
                                        <h4 class="filter_price-about">0đ - <span id="filterPriceSpan">5.000.000</span>đ</h4>
                                        <input id="filterPriceInput" class="rs-range" type="range" value="5000000" min="0"
                                            max="5000000">
                                    </div>
                                    <div class="filter_brand-airline">
                                        <h4 class="filter_title">Hãng bay</h4>
                                        <ul class="filter_brand-list">
                                            <li class="filter_brand-item">
                                                <label class="option-checkbox">
                                                    <input type="checkbox" id="search_checkbox">
                                                    <i class="icon-checkbox"></i>
                                                    <img src="https://storage.googleapis.com/tripi-flights/agenticons/VNA_logo_notext.png"
                                                        alt="">
                                                    Vietnam Airline
                                                </label>
                                            </li>
                                            <li class="filter_brand-item">
                                                <label class="option-checkbox">
                                                    <input type="checkbox" id="search_checkbox">
                                                    <i class="icon-checkbox"></i>
                                                    <img src="https://storage.googleapis.com/tripi-flights/agenticons/bamboo_airway.png"
                                                        alt="">
                                                    Bamboo Airways
                                                </label>
                                            </li>
                                            <li class="filter_brand-item">
                                                <label class="option-checkbox">
                                                    <input type="checkbox" id="search_checkbox">
                                                    <i class="icon-checkbox"></i>
                                                    <img src="https://storage.googleapis.com/tripi-flights/agenticons/Vietjet_Air_logo_transparent.png"
                                                        alt="">
                                                    Vietjet Air
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter_time-dep">
                                        <h4 class="filter_title">Thời gian cất cánh</h4>
                                        <ul class="filter_time-list grid__row">
                                            <li class=" grid__column-6">
                                                <label for="EarlyMorningCheckbox">
                                                    <input type="checkbox" class="filter_time-focus"
                                                        id="EarlyMorningCheckbox">
                                                    <div class="filter_time-item">
                                                        <svg width="24" height="24" fill="none">
                                                            <path
                                                                d="M2 13h.91M4.91 5.91l.636.635M12 3v.91M19.091 5.91l-.636.635M22 13h-.909M6.546 13C6.546 10 9 7.546 12 7.546c3 0 5.455 2.454 5.455 5.454M2 16.636h20M4.727 20.273h14.546"
                                                                stroke="#1A202C" stroke-width="1.2"
                                                                stroke-miterlimit="10" stroke-linecap="round"></path>
                                                        </svg>
                                                        <h4>Buổi sáng</h4>
                                                        <h4 class="filter_time-item-time">00:00 - 06:00</h4>
                                                    </div>
                                                </label>
                                            </li>
                                            <li class=" grid__column-6">
                                                <label for="MorningCheckbox">
                                                    <input type="checkbox" class="filter_time-focus"
                                                        id="MorningCheckbox">
                                                    <div class="filter_time-item">
                                                        <svg width="24" height="24" fill="none">
                                                            <path
                                                                d="M6.664 13.29c-.328-.654-.573-1.472-.573-2.29C6.09 8.3 8.3 6.09 11 6.09c2.7 0 4.909 2.21 4.909 4.91 0 1.145-.41 2.209-1.064 3.027M2 11h.818M4.618 4.618l.573.573M11 2v.818M17.382 4.618l-.573.573M20 11h-.818"
                                                                stroke="#1A202C" stroke-width="1.2"
                                                                stroke-miterlimit="10" stroke-linecap="round"></path>
                                                            <path
                                                                d="M5.273 20A3.282 3.282 0 012 16.727c0-1.8 1.473-3.273 3.273-3.273.409 0 .818.082 1.227.246.736-1.554 2.29-2.7 4.09-2.7 1.965 0 3.683 1.31 4.255 3.027.573-.409 1.146-.572 1.882-.572 1.8 0 3.273 1.472 3.273 3.272 0 1.8-1.473 3.273-3.273 3.273H5.273z"
                                                                stroke="#1A202C" stroke-width="1.2"
                                                                stroke-miterlimit="10" stroke-linecap="round"></path>
                                                        </svg>
                                                        <h4>Buổi sáng</h4>
                                                        <h4 class="filter_time-item-time">06:00 - 12:00</h4>
                                                    </div>
                                                </label>
                                            </li>
                                            <li class=" grid__column-6">
                                                <label for="EveningCheckbox">
                                                    <input type="checkbox" class="filter_time-focus"
                                                        id="EveningCheckbox">
                                                    <div class="filter_time-item">
                                                        <svg width="24" height="24" fill="none">
                                                            <path
                                                                d="M3 14.455h18M5.455 17.727h13.09M7.91 21h8.181M3.818 11.182C3.818 6.682 7.5 3 12 3s8.182 3.682 8.182 8.182"
                                                                stroke="#1A202C" stroke-width="1.2"
                                                                stroke-miterlimit="10" stroke-linecap="round"></path>
                                                        </svg>
                                                        <h4>Buổi chiều</h4>
                                                        <h4 class="filter_time-item-time">12:00 - 18:00</h4>
                                                    </div>
                                                </label>
                                            </li>
                                            <li class=" grid__column-6">
                                                <label for="NightCheckbox">
                                                    <input type="checkbox" class="filter_time-focus" id="NightCheckbox">
                                                    <div class="filter_time-item">
                                                        <svg width="24" height="24" fill="none">
                                                            <path
                                                                d="M16.91 15.273c-4.5 0-8.183-3.682-8.183-8.182v0c0-.912-.88-1.77-1.671-1.316A8.099 8.099 0 003 12.818C3 17.318 6.682 21 11.182 21a8.099 8.099 0 007.043-4.055c.454-.792-.404-1.672-1.316-1.672v0zM14.455 3v3.273M12.818 4.636h3.273M19.364 7.91v3.272M17.727 9.545H21"
                                                                stroke="#1A202C" stroke-width="1.2"
                                                                stroke-miterlimit="10" stroke-linecap="round"></path>
                                                        </svg>
                                                        <h4>Buổi tối</h4>
                                                        <h4 class="filter_time-item-time">18:00 - 24:00</h4>
                                                    </div>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter_rank-ticket">
                                        <h4 class="filter_title">Hạng vé</h4>
                                        <ul class="filter_rank-list">
                                            <li class="filter_rank-item">
                                                <label class="option-checkbox">
                                                    <input type="checkbox" id="search_checkbox">
                                                    <i class="icon-checkbox"></i>
                                                    <img src="" alt="">
                                                    Phổ thông
                                                </label>
                                            </li>
                                            <li class="filter_rank-item">
                                                <label class="option-checkbox">
                                                    <input type="checkbox" id="search_checkbox">
                                                    <i class="icon-checkbox"></i>
                                                    <img src="" alt="">
                                                    Thương gia
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-9">
                                <div class="content_ticket-date">
                                    <div class="ticket_date swiper mySwiper">
                                        <div class="arrow ticket_date-arrow-left swiper-button-prev">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </div>
                                        <div class="arrow ticket_date-arrow-right swiper-button-next">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </div>
                                        <div class="ticket_slider swiper-wrapper">
                                            <div style="text-align: center;" class="ticket_date-group swiper-slide">
                                                <h3 class="ticket_date-date">T7, 07 tháng 5</h3>
                                                <h3 class="ticket_date-price">1000.000đ</h3>
                                            </div>
                                            <div style="text-align: center;"
                                                class="ticket_date-group ticket_date--active">
                                                <h3 class="ticket_date-date">T7, 07 tháng 5</h3>
                                                <h3 class="ticket_date-price">2000.000đ</h3>
                                            </div>
                                            <div style="text-align: center;" class="ticket_date-group swiper-slide">
                                                <h3 class="ticket_date-date">T7, 07 tháng 5</h3>
                                                <h3 class="ticket_date-price">3000.000đ</h3>
                                            </div>
                                            <div style="text-align: center;" class="ticket_date-group swiper-slide">
                                                <h3 class="ticket_date-date">T7, 07 tháng 5</h3>
                                                <h3 class="ticket_date-price">4000.000đ</h3>
                                            </div>
                                            <div style="text-align: center;" class="ticket_date-group swiper-slide">
                                                <h3 class="ticket_date-date">T7, 07 tháng 5</h3>
                                                <h3 class="ticket_date-price">5000.000đ</h3>
                                            </div>
                                            <div style="text-align: center;" class="ticket_date-group swiper-slide">
                                                <h3 class="ticket_date-date">T7, 07 tháng 5</h3>
                                                <h3 class="ticket_date-price">6000.000đ</h3>
                                            </div>
                                            <div style="text-align: center;" class="ticket_date-group swiper-slide">
                                                <h3 class="ticket_date-date">T7, 07 tháng 5</h3>
                                                <h3 class="ticket_date-price">7000.000đ</h3>
                                            </div>
                                            <div style="text-align: center;" class="ticket_date-group swiper-slide">
                                                <h3 class="ticket_date-date">T7, 07 tháng 5</h3>
                                                <h3 class="ticket_date-price">8000.000đ</h3>
                                            </div>
                                            <div style="text-align: center;" class="ticket_date-group swiper-slide">
                                                <h3 class="ticket_date-date">T7, 07 tháng 5</h3>
                                                <h3 class="ticket_date-price">9000.000đ</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content_ticket-sort">
                                    <div class="ticket_sort-list">
                                        <label> <input type="radio" name="ticket_sort-input" checked
                                                class="ticket_sort-input">
                                            <div class="ticket_sort-item">Đề xuất<i class="fa-solid fa-sort"></i>
                                            </div>
                                        </label>
                                        <label> <input type="radio" name="ticket_sort-input" class="ticket_sort-input">
                                            <div class="ticket_sort-item">Giá tăng dần<i class="fa-solid fa-sort"></i>
                                            </div>
                                        </label>
                                        <label> <input type="radio" name="ticket_sort-input" class="ticket_sort-input">
                                            <div class="ticket_sort-item">Thời gian cất cánh<i
                                                    class="fa-solid fa-sort"></i></div>
                                        </label>
                                        <label> <input type="radio" name="ticket_sort-input" class="ticket_sort-input">
                                            <div class="ticket_sort-item">Thời gian bay<i class="fa-solid fa-sort"></i>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="content_ticket-body">
                                    <ul class="ticket_body-list">
                                        <li class="ticket_body-item">
                                            <div class="ticket_info">
                                                <div class="ticket_info-name">
                                                    <img src="https://storage.googleapis.com/tripi-flights/agenticons/Vietjet_Air_logo_transparent.png"
                                                        alt="">
                                                    <div class="ticket_info-brand-airline">
                                                        <h4 class="ticket_info-brand-name">Vietjet Air</h4>
                                                        <h4 class="ticket_info-brand-id">VJ785/ Airbus A321 NEO</h4>
                                                    </div>
                                                </div>
                                                <div class="ticket_info-time-dep">
                                                    <div class="ticket_info-time-start">
                                                        <h4>20:05</h4>
                                                        <h4 class="ticket_info-place">HN</h4>
                                                    </div>
                                                    <svg width="40" height="20" fill="none">
                                                        <g clip-path="url(#icon_arrow_flight_long_svg__clip0)"
                                                            stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M33.5 8.5L36 11M4 11h32"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="icon_arrow_flight_long_svg__clip0">
                                                                <path fill="#fff" d="M0 0h40v20H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <div class="ticket_info-time-end">
                                                        <h4>21:55</h4>
                                                        <h4 class="ticket_info-place">SG</h4>
                                                    </div>
                                                </div>
                                                <div class="ticket_info-time-fly">
                                                    <h4>1h50'</h4>
                                                    <h4 class="ticket_info-fly-route">Bay thẳng</h4>
                                                </div>
                                            </div>
                                            <div class="ticket_class-seat">
                                                <ul class="class_seat-list">
                                                    <li class="class_seat-item">
                                                        <div class="class_seat-body">
                                                            <div class="class_seat-name">
                                                                <h4>Phổ thông</h4>
                                                                <h4 class="class_seat-it">EB</h4>
                                                            </div>
                                                            <div class="class_seat-desc">
                                                                <div class="class_seat-package-heft tooltip">
                                                                    <svg width="20" height="20" fill="none"
                                                                        class="MuiChip-icon svgFillAll"
                                                                        style="width: 20px; stroke: rgb(74, 85, 104); height: 20px;">
                                                                        <path
                                                                            d="M4.884 17.17v1.163M15.737 17.17v1.163M7.985 12.519h4.651"
                                                                            stroke="#1A202C" stroke-miterlimit="10"
                                                                            stroke-linecap="round"></path>
                                                                        <path
                                                                            d="M17.287 15.17a2 2 0 01-2 2H5.333a2 2 0 01-2-2V6.317c0-.852.698-1.55 1.55-1.55h10.854c.852 0 1.55.698 1.55 1.55v8.853zM12.636 4.767v-2.1a1 1 0 00-1-1H8.985a1 1 0 00-1 1v2.1M3.333 9.418h13.954"
                                                                            stroke="#1A202C" stroke-miterlimit="10"
                                                                            stroke-linecap="square"></path>
                                                                    </svg>
                                                                    <h4>7 kg</h4>
                                                                    <span class="tooltip_text">Hành lý xách tay
                                                                        7kg</span>
                                                                </div>
                                                                <div class="class_seat-detail">
                                                                    <input type="checkbox">
                                                                    <svg width="20" height="20" fill="none"
                                                                        class="MuiChip-icon svgFillAll"
                                                                        style="width: auto; stroke: rgb(74, 85, 104);">
                                                                        <path
                                                                            d="M10 17.5a7.5 7.5 0 100-15 7.5 7.5 0 000 15zM10 6.667h.008"
                                                                            stroke="#1A202C" stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                        <path d="M9.166 10H10v3.333h.833"
                                                                            stroke="#1A202C" stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                    <h4>Chi tiết</h4>
                                                                </div>
                                                            </div>
                                                            <div class="class_seat-order">
                                                                <div class="class_seat-price">
                                                                    <h5 class="class_seat-cost">909.000đ</h5>
                                                                    <h4 class="class_seat-sale">909.000đ</h4>
                                                                </div>
                                                                <button class=" btn--primary">Chọn</button>
                                                            </div>
                                                        </div>
                                                        <div class="class_seat-desc-info">
                                                            <div class="class_seat-desc-info-column">
                                                                <div class="class_seat-desc-info-title">Thông tin
                                                                    chuyến bay</div>
                                                                <div class="class_seat-desc-info-body">
                                                                    <div class="seat_desc-info-time">
                                                                        <div class="seat_desc-info-time-start">
                                                                            <h4>23:10</h4>
                                                                            <h4 class="seat_desc-info-time-date">
                                                                                05/05/2022</h4>
                                                                        </div>
                                                                        <div class="seat_desc-info-time-dep">1h 50m
                                                                        </div>
                                                                        <div class="seat_desc-info-time-end">
                                                                            <h4>01:00</h4>
                                                                            <h4 class="seat_desc-info-time-date">
                                                                                06/05/2022</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="seat_desc-info-icon">
                                                                        <svg width="16" height="16" fill="none"
                                                                            style="height: 32px; width: 16px; fill: #FF3366; margin-bottom: 4px;">
                                                                            <path
                                                                                d="M9.333 10.667v2.666a1.333 1.333 0 01-2.666 0v-2.666L2 8V6l4.667 1.333V4.667L5.333 3.333v-2L8 2.667l2.667-1.334v2L9.333 4.667v2.666L14 6v2l-4.667 2.667z"
                                                                                fill="#FF3366"></path>
                                                                        </svg>
                                                                        <span></span>
                                                                        <svg class="sjsjsj" width="17" height="18"
                                                                            style="height: 32px; width: 16px; fill: #FF3366;">
                                                                            <defs>
                                                                                <path id="icon_location_svg__a"
                                                                                    d="M0 0h16v16H0z"></path>
                                                                            </defs>
                                                                            <g transform="translate(.5 1)"
                                                                                fill="#FF3366">
                                                                                <mask id="icon_location_svg__b"
                                                                                    fill="#FF3366">
                                                                                    <use
                                                                                        xlink:href="#icon_location_svg__a">
                                                                                    </use>
                                                                                </mask>
                                                                                <path fill="#FF3366"
                                                                                    d="M7.538 13.758C4.132 8.82 3.5 8.314 3.5 6.5a4.5 4.5 0 019 0c0 1.814-.632 2.321-4.038 7.258a.562.562 0 01-.924 0zM8 8.375a1.875 1.875 0 100-3.75 1.875 1.875 0 000 3.75z">
                                                                                </path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="seat_desc-info-place">
                                                                        <div class="seat_desc-info-place-start">
                                                                            <h4>Hà Nội (HN)</h4>
                                                                            <h4 class="seat_desc-info-place-airplane">
                                                                                Nội bài</h4>
                                                                        </div>
                                                                        <div class="seat_desc-info-place-brandfly">
                                                                            <img alt=""
                                                                                src="https://storage.googleapis.com/tripi-flights/agenticons/Vietjet_Air_logo_transparent.png"
                                                                                style="width: 32px;">
                                                                            <div
                                                                                class="seat_desc-info-place-brandfly-air">
                                                                                <div
                                                                                    class="seat_desc-info-place-brandfly-air-name">
                                                                                    Vietjet Air</div>
                                                                                <div
                                                                                    class="seat_desc-info-place-brandfly-air-id">
                                                                                    VJ779 . Airbus A321</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="seat_desc-info-place-seat">
                                                                            <svg width="16" height="16" fill="none"
                                                                                style="margin-right: 4px;">
                                                                                <g clip-path="url(#ic_seat_svg__clip0)"
                                                                                    fill="#4A5568">
                                                                                    <path
                                                                                        d="M11.766 0a2.753 2.753 0 00-2.75 2.75V4.5a2.753 2.753 0 002.75 2.75 2.753 2.753 0 002.75-2.75V2.75A2.753 2.753 0 0011.766 0zm0 .938c.837 0 1.543.57 1.75 1.343h-3.501a1.816 1.816 0 011.75-1.344zm0 5.374c-1 0-1.813-.813-1.813-1.812V3.219h3.625V4.5c0 1-.813 1.812-1.812 1.812zM8.813 9.875H4.828V4.813c0-.922-.75-1.672-1.672-1.672-.922 0-1.672.75-1.672 1.672v7c0 .775.631 1.406 1.407 1.406h1.218v1.844h-.468a.469.469 0 100 .937h4.375a.469.469 0 000-.937h-.47v-1.844h2.47c.258 0 .468-.21.468-.469v-1.203c0-.922-.75-1.672-1.671-1.672zm-2.204 5.188H5.047v-1.844h1.562v1.844zm2.938-2.782H2.89a.47.47 0 01-.47-.469v-7a.735.735 0 011.47 0v5.532c0 .259.21.469.468.469h4.454c.404 0 .734.329.734.734v.734z">
                                                                                    </path>
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="ic_seat_svg__clip0">
                                                                                        <path fill="#fff"
                                                                                            d="M0 0h16v16H0z">
                                                                                        </path>
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            <h4>Phổ thông</h4>
                                                                            <h4 class="class_seat-it">EB</h4>
                                                                        </div>
                                                                        <div class="seat_desc-info-place-end">
                                                                            <h4>Nha Trang (NT)</h4>
                                                                            <h4 class="seat_desc-info-place-airplane">
                                                                                Cam Ranh</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="class_seat-desc-info-column">
                                                                <div class="class_seat-desc-info-title">Thông tin vé
                                                                </div>
                                                                <div class="class_seat-desc-info-body body_2">
                                                                    <div class="class_seat-desc-info-body-type-price">
                                                                        <h4>Người lớn x1</h4>
                                                                        <h4>Thuế và phí</h4>
                                                                        <h4>Phí dịch vụ <svg width="20" height="20"
                                                                                fill="none" class="svgFillAll"
                                                                                style="stroke: #ff3366; margin-left: 6px; cursor: pointer;">
                                                                                <path
                                                                                    d="M10 17.5a7.5 7.5 0 100-15 7.5 7.5 0 000 15zM10 6.667h.008"
                                                                                    stroke="#ff3366"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path d="M9.166 10H10v3.333h.833"
                                                                                    stroke="#ff3366"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </svg></h4>
                                                                        <h4 style="font-weight: 500;">Tổng tiền</h4>
                                                                    </div>
                                                                    <div class="class_seat-desc-info-body-price">
                                                                        <h4>700.000đ</h4>
                                                                        <h4>500.000đ</h4>
                                                                        <h4>35.000đ</h4>
                                                                        <h4 style="font-weight: 500;">1.235.000đ</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="class_seat-desc-info-title">Thông tin khác
                                                                </div>
                                                                <div class="class_seat-desc-info-body body_3">
                                                                    <ul>
                                                                        <li><svg width="20" height="20" fill="none"
                                                                                class="svgFillAll"
                                                                                style="height: 20px; width: 20px; stroke: rgb(74, 85, 104); margin-top: 2px;">
                                                                                <path
                                                                                    d="M4.884 17.17v1.163M15.737 17.17v1.163M7.985 12.519h4.651"
                                                                                    stroke="#1A202C"
                                                                                    stroke-miterlimit="10"
                                                                                    stroke-linecap="round"></path>
                                                                                <path
                                                                                    d="M17.287 15.17a2 2 0 01-2 2H5.333a2 2 0 01-2-2V6.317c0-.852.698-1.55 1.55-1.55h10.854c.852 0 1.55.698 1.55 1.55v8.853zM12.636 4.767v-2.1a1 1 0 00-1-1H8.985a1 1 0 00-1 1v2.1M3.333 9.418h13.954"
                                                                                    stroke="#1A202C"
                                                                                    stroke-miterlimit="10"
                                                                                    stroke-linecap="square"></path>
                                                                            </svg>
                                                                            <h4>Hành lý xách tay 7kg.</h4>
                                                                        </li>
                                                                        <li><svg width="20" height="20" fill="none"
                                                                                class="svgFillAll"
                                                                                style="height: 20px; width: 20px; margin-right: 4px; stroke: rgb(74, 85, 104); margin-top: 3px;">
                                                                                <path
                                                                                    d="M10 3.333v1.334M10 7.333v1.334M10 11.333v1.334M3.333 3.333h9.334A1.333 1.333 0 0114 4.667v2a1.333 1.333 0 100 2.666v2a1.334 1.334 0 01-1.333 1.334H3.333A1.334 1.334 0 012 11.333v-2a1.333 1.333 0 100-2.666v-2a1.333 1.333 0 011.333-1.334"
                                                                                    stroke="#4A5568"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </svg>
                                                                            <h4>Phí đổi vé 360.000VND và chênh lệch giá
                                                                                vé
                                                                                (nếu có)</h4>
                                                                        </li>
                                                                        <li><svg width="20" height="20" fill="none"
                                                                                class="svgFillAll"
                                                                                style="height: 20px; width: 20px; margin-right: 4px; stroke: rgb(74, 85, 104); margin-top: 3px;">
                                                                                <path
                                                                                    d="M10 7.333v1.334M10 11.333v1.334M12.5 3.333H3.333A1.333 1.333 0 002 4.667v2a1.333 1.333 0 110 2.666v2a1.333 1.333 0 001.333 1.334h9.334A1.334 1.334 0 0014 11.333v-2a1.333 1.333 0 110-2.666V5.5"
                                                                                    stroke="#4A5568"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path d="M15 1.5L2.5 12"
                                                                                    stroke="#4A5568"
                                                                                    stroke-linecap="round"></path>
                                                                            </svg>
                                                                            <h4>Không hoàn vé</h4>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="class_seat-item">
                                                        <div class="class_seat-body">
                                                            <div class="class_seat-name">
                                                                <h4>Phổ thông</h4>
                                                                <h4 class="class_seat-it">EB</h4>
                                                            </div>
                                                            <div class="class_seat-desc">
                                                                <div class="class_seat-package-heft tooltip">
                                                                    <svg width="20" height="20" fill="none"
                                                                        class="MuiChip-icon svgFillAll"
                                                                        style="width: 20px; stroke: rgb(74, 85, 104); height: 20px;">
                                                                        <path
                                                                            d="M4.884 17.17v1.163M15.737 17.17v1.163M7.985 12.519h4.651"
                                                                            stroke="#1A202C" stroke-miterlimit="10"
                                                                            stroke-linecap="round"></path>
                                                                        <path
                                                                            d="M17.287 15.17a2 2 0 01-2 2H5.333a2 2 0 01-2-2V6.317c0-.852.698-1.55 1.55-1.55h10.854c.852 0 1.55.698 1.55 1.55v8.853zM12.636 4.767v-2.1a1 1 0 00-1-1H8.985a1 1 0 00-1 1v2.1M3.333 9.418h13.954"
                                                                            stroke="#1A202C" stroke-miterlimit="10"
                                                                            stroke-linecap="square"></path>
                                                                    </svg>
                                                                    <h4>7 kg</h4>
                                                                    <span class="tooltip_text">Hành lý xách tay
                                                                        7kg</span>
                                                                </div>
                                                                <div class="class_seat-detail">
                                                                    <input type="checkbox">
                                                                    <svg width="20" height="20" fill="none"
                                                                        class="MuiChip-icon svgFillAll"
                                                                        style="width: auto; stroke: rgb(74, 85, 104);">
                                                                        <path
                                                                            d="M10 17.5a7.5 7.5 0 100-15 7.5 7.5 0 000 15zM10 6.667h.008"
                                                                            stroke="#1A202C" stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                        <path d="M9.166 10H10v3.333h.833"
                                                                            stroke="#1A202C" stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                    <h4>Chi tiết</h4>
                                                                </div>
                                                            </div>
                                                            <div class="class_seat-order">
                                                                <div class="class_seat-price">
                                                                    <h5 class="class_seat-cost">909.000đ</h5>
                                                                    <h4 class="class_seat-sale">909.000đ</h4>
                                                                </div>
                                                                <button class=" btn--primary">Chọn</button>
                                                            </div>
                                                        </div>
                                                        <div class="class_seat-desc-info">
                                                            <div class="class_seat-desc-info-column">
                                                                <div class="class_seat-desc-info-title">Thông tin
                                                                    chuyến bay</div>
                                                                <div class="class_seat-desc-info-body">
                                                                    <div class="seat_desc-info-time">
                                                                        <div class="seat_desc-info-time-start">
                                                                            <h4>23:10</h4>
                                                                            <h4 class="seat_desc-info-time-date">
                                                                                05/05/2022</h4>
                                                                        </div>
                                                                        <div class="seat_desc-info-time-dep">1h 50m
                                                                        </div>
                                                                        <div class="seat_desc-info-time-end">
                                                                            <h4>01:00</h4>
                                                                            <h4 class="seat_desc-info-time-date">
                                                                                06/05/2022</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="seat_desc-info-icon">
                                                                        <svg width="16" height="16" fill="none"
                                                                            style="height: 32px; width: 16px; fill: #FF3366; margin-bottom: 4px;">
                                                                            <path
                                                                                d="M9.333 10.667v2.666a1.333 1.333 0 01-2.666 0v-2.666L2 8V6l4.667 1.333V4.667L5.333 3.333v-2L8 2.667l2.667-1.334v2L9.333 4.667v2.666L14 6v2l-4.667 2.667z"
                                                                                fill="#FF3366"></path>
                                                                        </svg>
                                                                        <span></span>
                                                                        <svg class="sjsjsj" width="17" height="18"
                                                                            style="height: 32px; width: 16px; fill: #FF3366;">
                                                                            <defs>
                                                                                <path id="icon_location_svg__a"
                                                                                    d="M0 0h16v16H0z"></path>
                                                                            </defs>
                                                                            <g transform="translate(.5 1)"
                                                                                fill="#FF3366">
                                                                                <mask id="icon_location_svg__b"
                                                                                    fill="#FF3366">
                                                                                    <use
                                                                                        xlink:href="#icon_location_svg__a">
                                                                                    </use>
                                                                                </mask>
                                                                                <path fill="#FF3366"
                                                                                    d="M7.538 13.758C4.132 8.82 3.5 8.314 3.5 6.5a4.5 4.5 0 019 0c0 1.814-.632 2.321-4.038 7.258a.562.562 0 01-.924 0zM8 8.375a1.875 1.875 0 100-3.75 1.875 1.875 0 000 3.75z">
                                                                                </path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="seat_desc-info-place">
                                                                        <div class="seat_desc-info-place-start">
                                                                            <h4>Hà Nội (HN)</h4>
                                                                            <h4 class="seat_desc-info-place-airplane">
                                                                                Nội bài</h4>
                                                                        </div>
                                                                        <div class="seat_desc-info-place-brandfly">
                                                                            <img alt=""
                                                                                src="https://storage.googleapis.com/tripi-flights/agenticons/Vietjet_Air_logo_transparent.png"
                                                                                style="width: 32px;">
                                                                            <div
                                                                                class="seat_desc-info-place-brandfly-air">
                                                                                <div
                                                                                    class="seat_desc-info-place-brandfly-air-name">
                                                                                    Vietjet Air</div>
                                                                                <div
                                                                                    class="seat_desc-info-place-brandfly-air-id">
                                                                                    VJ779 . Airbus A321</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="seat_desc-info-place-seat">
                                                                            <svg width="16" height="16" fill="none"
                                                                                style="margin-right: 4px;">
                                                                                <g clip-path="url(#ic_seat_svg__clip0)"
                                                                                    fill="#4A5568">
                                                                                    <path
                                                                                        d="M11.766 0a2.753 2.753 0 00-2.75 2.75V4.5a2.753 2.753 0 002.75 2.75 2.753 2.753 0 002.75-2.75V2.75A2.753 2.753 0 0011.766 0zm0 .938c.837 0 1.543.57 1.75 1.343h-3.501a1.816 1.816 0 011.75-1.344zm0 5.374c-1 0-1.813-.813-1.813-1.812V3.219h3.625V4.5c0 1-.813 1.812-1.812 1.812zM8.813 9.875H4.828V4.813c0-.922-.75-1.672-1.672-1.672-.922 0-1.672.75-1.672 1.672v7c0 .775.631 1.406 1.407 1.406h1.218v1.844h-.468a.469.469 0 100 .937h4.375a.469.469 0 000-.937h-.47v-1.844h2.47c.258 0 .468-.21.468-.469v-1.203c0-.922-.75-1.672-1.671-1.672zm-2.204 5.188H5.047v-1.844h1.562v1.844zm2.938-2.782H2.89a.47.47 0 01-.47-.469v-7a.735.735 0 011.47 0v5.532c0 .259.21.469.468.469h4.454c.404 0 .734.329.734.734v.734z">
                                                                                    </path>
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="ic_seat_svg__clip0">
                                                                                        <path fill="#fff"
                                                                                            d="M0 0h16v16H0z">
                                                                                        </path>
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            <h4>Phổ thông</h4>
                                                                            <h4 class="class_seat-it">EB</h4>
                                                                        </div>
                                                                        <div class="seat_desc-info-place-end">
                                                                            <h4>Nha Trang (NT)</h4>
                                                                            <h4 class="seat_desc-info-place-airplane">
                                                                                Cam Ranh</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="class_seat-desc-info-column">
                                                                <div class="class_seat-desc-info-title">Thông tin vé
                                                                </div>
                                                                <div class="class_seat-desc-info-body body_2">
                                                                    <div class="class_seat-desc-info-body-type-price">
                                                                        <h4>Người lớn x1</h4>
                                                                        <h4>Thuế và phí</h4>
                                                                        <h4>Phí dịch vụ <svg width="20" height="20"
                                                                                fill="none" class="svgFillAll"
                                                                                style="stroke: #ff3366; margin-left: 6px; cursor: pointer;">
                                                                                <path
                                                                                    d="M10 17.5a7.5 7.5 0 100-15 7.5 7.5 0 000 15zM10 6.667h.008"
                                                                                    stroke="#ff3366"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path d="M9.166 10H10v3.333h.833"
                                                                                    stroke="#ff3366"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </svg></h4>
                                                                        <h4 style="font-weight: 500;">Tổng tiền</h4>
                                                                    </div>
                                                                    <div class="class_seat-desc-info-body-price">
                                                                        <h4>700.000đ</h4>
                                                                        <h4>500.000đ</h4>
                                                                        <h4>35.000đ</h4>
                                                                        <h4 style="font-weight: 500;">1.235.000đ</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="class_seat-desc-info-title">Thông tin khác
                                                                </div>
                                                                <div class="class_seat-desc-info-body body_3">
                                                                    <ul>
                                                                        <li><svg width="20" height="20" fill="none"
                                                                                class="svgFillAll"
                                                                                style="height: 20px; width: 20px; stroke: rgb(74, 85, 104); margin-top: 2px;">
                                                                                <path
                                                                                    d="M4.884 17.17v1.163M15.737 17.17v1.163M7.985 12.519h4.651"
                                                                                    stroke="#1A202C"
                                                                                    stroke-miterlimit="10"
                                                                                    stroke-linecap="round"></path>
                                                                                <path
                                                                                    d="M17.287 15.17a2 2 0 01-2 2H5.333a2 2 0 01-2-2V6.317c0-.852.698-1.55 1.55-1.55h10.854c.852 0 1.55.698 1.55 1.55v8.853zM12.636 4.767v-2.1a1 1 0 00-1-1H8.985a1 1 0 00-1 1v2.1M3.333 9.418h13.954"
                                                                                    stroke="#1A202C"
                                                                                    stroke-miterlimit="10"
                                                                                    stroke-linecap="square"></path>
                                                                            </svg>
                                                                            <h4>Hành lý xách tay 7kg.</h4>
                                                                        </li>
                                                                        <li><svg width="20" height="20" fill="none"
                                                                                class="svgFillAll"
                                                                                style="height: 20px; width: 20px; margin-right: 4px; stroke: rgb(74, 85, 104); margin-top: 3px;">
                                                                                <path
                                                                                    d="M10 3.333v1.334M10 7.333v1.334M10 11.333v1.334M3.333 3.333h9.334A1.333 1.333 0 0114 4.667v2a1.333 1.333 0 100 2.666v2a1.334 1.334 0 01-1.333 1.334H3.333A1.334 1.334 0 012 11.333v-2a1.333 1.333 0 100-2.666v-2a1.333 1.333 0 011.333-1.334"
                                                                                    stroke="#4A5568"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </svg>
                                                                            <h4>Phí đổi vé 360.000VND và chênh lệch giá
                                                                                vé
                                                                                (nếu có)</h4>
                                                                        </li>
                                                                        <li><svg width="20" height="20" fill="none"
                                                                                class="svgFillAll"
                                                                                style="height: 20px; width: 20px; margin-right: 4px; stroke: rgb(74, 85, 104); margin-top: 3px;">
                                                                                <path
                                                                                    d="M10 7.333v1.334M10 11.333v1.334M12.5 3.333H3.333A1.333 1.333 0 002 4.667v2a1.333 1.333 0 110 2.666v2a1.333 1.333 0 001.333 1.334h9.334A1.334 1.334 0 0014 11.333v-2a1.333 1.333 0 110-2.666V5.5"
                                                                                    stroke="#4A5568"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path d="M15 1.5L2.5 12"
                                                                                    stroke="#4A5568"
                                                                                    stroke-linecap="round"></path>
                                                                            </svg>
                                                                            <h4>Không hoàn vé</h4>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="class_seat-item">
                                                        <div class="class_seat-body">
                                                            <div class="class_seat-name">
                                                                <h4>Phổ thông</h4>
                                                                <h4 class="class_seat-it">EB</h4>
                                                            </div>
                                                            <div class="class_seat-desc">
                                                                <div class="class_seat-package-heft tooltip">
                                                                    <svg width="20" height="20" fill="none"
                                                                        class="MuiChip-icon svgFillAll"
                                                                        style="width: 20px; stroke: rgb(74, 85, 104); height: 20px;">
                                                                        <path
                                                                            d="M4.884 17.17v1.163M15.737 17.17v1.163M7.985 12.519h4.651"
                                                                            stroke="#1A202C" stroke-miterlimit="10"
                                                                            stroke-linecap="round"></path>
                                                                        <path
                                                                            d="M17.287 15.17a2 2 0 01-2 2H5.333a2 2 0 01-2-2V6.317c0-.852.698-1.55 1.55-1.55h10.854c.852 0 1.55.698 1.55 1.55v8.853zM12.636 4.767v-2.1a1 1 0 00-1-1H8.985a1 1 0 00-1 1v2.1M3.333 9.418h13.954"
                                                                            stroke="#1A202C" stroke-miterlimit="10"
                                                                            stroke-linecap="square"></path>
                                                                    </svg>
                                                                    <h4>7 kg</h4>
                                                                    <span class="tooltip_text">Hành lý xách tay
                                                                        7kg</span>
                                                                </div>
                                                                <div class="class_seat-detail">
                                                                    <input type="checkbox">
                                                                    <svg width="20" height="20" fill="none"
                                                                        class="MuiChip-icon svgFillAll"
                                                                        style="width: auto; stroke: rgb(74, 85, 104);">
                                                                        <path
                                                                            d="M10 17.5a7.5 7.5 0 100-15 7.5 7.5 0 000 15zM10 6.667h.008"
                                                                            stroke="#1A202C" stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                        <path d="M9.166 10H10v3.333h.833"
                                                                            stroke="#1A202C" stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                    <h4>Chi tiết</h4>
                                                                </div>
                                                            </div>
                                                            <div class="class_seat-order">
                                                                <div class="class_seat-price">
                                                                    <h5 class="class_seat-cost">909.000đ</h5>
                                                                    <h4 class="class_seat-sale">909.000đ</h4>
                                                                </div>
                                                                <button class=" btn--primary">Chọn</button>
                                                            </div>
                                                        </div>
                                                        <div class="class_seat-desc-info">
                                                            <div class="class_seat-desc-info-column">
                                                                <div class="class_seat-desc-info-title">Thông tin
                                                                    chuyến bay</div>
                                                                <div class="class_seat-desc-info-body">
                                                                    <div class="seat_desc-info-time">
                                                                        <div class="seat_desc-info-time-start">
                                                                            <h4>23:10</h4>
                                                                            <h4 class="seat_desc-info-time-date">
                                                                                05/05/2022</h4>
                                                                        </div>
                                                                        <div class="seat_desc-info-time-dep">1h 50m
                                                                        </div>
                                                                        <div class="seat_desc-info-time-end">
                                                                            <h4>01:00</h4>
                                                                            <h4 class="seat_desc-info-time-date">
                                                                                06/05/2022</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="seat_desc-info-icon">
                                                                        <svg width="16" height="16" fill="none"
                                                                            style="height: 32px; width: 16px; fill: #FF3366; margin-bottom: 4px;">
                                                                            <path
                                                                                d="M9.333 10.667v2.666a1.333 1.333 0 01-2.666 0v-2.666L2 8V6l4.667 1.333V4.667L5.333 3.333v-2L8 2.667l2.667-1.334v2L9.333 4.667v2.666L14 6v2l-4.667 2.667z"
                                                                                fill="#FF3366"></path>
                                                                        </svg>
                                                                        <span></span>
                                                                        <svg class="sjsjsj" width="17" height="18"
                                                                            style="height: 32px; width: 16px; fill: #FF3366;">
                                                                            <defs>
                                                                                <path id="icon_location_svg__a"
                                                                                    d="M0 0h16v16H0z"></path>
                                                                            </defs>
                                                                            <g transform="translate(.5 1)"
                                                                                fill="#FF3366">
                                                                                <mask id="icon_location_svg__b"
                                                                                    fill="#FF3366">
                                                                                    <use
                                                                                        xlink:href="#icon_location_svg__a">
                                                                                    </use>
                                                                                </mask>
                                                                                <path fill="#FF3366"
                                                                                    d="M7.538 13.758C4.132 8.82 3.5 8.314 3.5 6.5a4.5 4.5 0 019 0c0 1.814-.632 2.321-4.038 7.258a.562.562 0 01-.924 0zM8 8.375a1.875 1.875 0 100-3.75 1.875 1.875 0 000 3.75z">
                                                                                </path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="seat_desc-info-place">
                                                                        <div class="seat_desc-info-place-start">
                                                                            <h4>Hà Nội (HN)</h4>
                                                                            <h4 class="seat_desc-info-place-airplane">
                                                                                Nội bài</h4>
                                                                        </div>
                                                                        <div class="seat_desc-info-place-brandfly">
                                                                            <img alt=""
                                                                                src="https://storage.googleapis.com/tripi-flights/agenticons/Vietjet_Air_logo_transparent.png"
                                                                                style="width: 32px;">
                                                                            <div
                                                                                class="seat_desc-info-place-brandfly-air">
                                                                                <div
                                                                                    class="seat_desc-info-place-brandfly-air-name">
                                                                                    Vietjet Air</div>
                                                                                <div
                                                                                    class="seat_desc-info-place-brandfly-air-id">
                                                                                    VJ779 . Airbus A321</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="seat_desc-info-place-seat">
                                                                            <svg width="16" height="16" fill="none"
                                                                                style="margin-right: 4px;">
                                                                                <g clip-path="url(#ic_seat_svg__clip0)"
                                                                                    fill="#4A5568">
                                                                                    <path
                                                                                        d="M11.766 0a2.753 2.753 0 00-2.75 2.75V4.5a2.753 2.753 0 002.75 2.75 2.753 2.753 0 002.75-2.75V2.75A2.753 2.753 0 0011.766 0zm0 .938c.837 0 1.543.57 1.75 1.343h-3.501a1.816 1.816 0 011.75-1.344zm0 5.374c-1 0-1.813-.813-1.813-1.812V3.219h3.625V4.5c0 1-.813 1.812-1.812 1.812zM8.813 9.875H4.828V4.813c0-.922-.75-1.672-1.672-1.672-.922 0-1.672.75-1.672 1.672v7c0 .775.631 1.406 1.407 1.406h1.218v1.844h-.468a.469.469 0 100 .937h4.375a.469.469 0 000-.937h-.47v-1.844h2.47c.258 0 .468-.21.468-.469v-1.203c0-.922-.75-1.672-1.671-1.672zm-2.204 5.188H5.047v-1.844h1.562v1.844zm2.938-2.782H2.89a.47.47 0 01-.47-.469v-7a.735.735 0 011.47 0v5.532c0 .259.21.469.468.469h4.454c.404 0 .734.329.734.734v.734z">
                                                                                    </path>
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="ic_seat_svg__clip0">
                                                                                        <path fill="#fff"
                                                                                            d="M0 0h16v16H0z">
                                                                                        </path>
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            <h4>Phổ thông</h4>
                                                                            <h4 class="class_seat-it">EB</h4>
                                                                        </div>
                                                                        <div class="seat_desc-info-place-end">
                                                                            <h4>Nha Trang (NT)</h4>
                                                                            <h4 class="seat_desc-info-place-airplane">
                                                                                Cam Ranh</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="class_seat-desc-info-column">
                                                                <div class="class_seat-desc-info-title">Thông tin vé
                                                                </div>
                                                                <div class="class_seat-desc-info-body body_2">
                                                                    <div class="class_seat-desc-info-body-type-price">
                                                                        <h4>Người lớn x1</h4>
                                                                        <h4>Thuế và phí</h4>
                                                                        <h4>Phí dịch vụ <svg width="20" height="20"
                                                                                fill="none" class="svgFillAll"
                                                                                style="stroke: #ff3366; margin-left: 6px; cursor: pointer;">
                                                                                <path
                                                                                    d="M10 17.5a7.5 7.5 0 100-15 7.5 7.5 0 000 15zM10 6.667h.008"
                                                                                    stroke="#ff3366"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path d="M9.166 10H10v3.333h.833"
                                                                                    stroke="#ff3366"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </svg></h4>
                                                                        <h4 style="font-weight: 500;">Tổng tiền</h4>
                                                                    </div>
                                                                    <div class="class_seat-desc-info-body-price">
                                                                        <h4>700.000đ</h4>
                                                                        <h4>500.000đ</h4>
                                                                        <h4>35.000đ</h4>
                                                                        <h4 style="font-weight: 500;">1.235.000đ</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="class_seat-desc-info-title">Thông tin khác
                                                                </div>
                                                                <div class="class_seat-desc-info-body body_3">
                                                                    <ul>
                                                                        <li><svg width="20" height="20" fill="none"
                                                                                class="svgFillAll"
                                                                                style="height: 20px; width: 20px; stroke: rgb(74, 85, 104); margin-top: 2px;">
                                                                                <path
                                                                                    d="M4.884 17.17v1.163M15.737 17.17v1.163M7.985 12.519h4.651"
                                                                                    stroke="#1A202C"
                                                                                    stroke-miterlimit="10"
                                                                                    stroke-linecap="round"></path>
                                                                                <path
                                                                                    d="M17.287 15.17a2 2 0 01-2 2H5.333a2 2 0 01-2-2V6.317c0-.852.698-1.55 1.55-1.55h10.854c.852 0 1.55.698 1.55 1.55v8.853zM12.636 4.767v-2.1a1 1 0 00-1-1H8.985a1 1 0 00-1 1v2.1M3.333 9.418h13.954"
                                                                                    stroke="#1A202C"
                                                                                    stroke-miterlimit="10"
                                                                                    stroke-linecap="square"></path>
                                                                            </svg>
                                                                            <h4>Hành lý xách tay 7kg.</h4>
                                                                        </li>
                                                                        <li><svg width="20" height="20" fill="none"
                                                                                class="svgFillAll"
                                                                                style="height: 20px; width: 20px; margin-right: 4px; stroke: rgb(74, 85, 104); margin-top: 3px;">
                                                                                <path
                                                                                    d="M10 3.333v1.334M10 7.333v1.334M10 11.333v1.334M3.333 3.333h9.334A1.333 1.333 0 0114 4.667v2a1.333 1.333 0 100 2.666v2a1.334 1.334 0 01-1.333 1.334H3.333A1.334 1.334 0 012 11.333v-2a1.333 1.333 0 100-2.666v-2a1.333 1.333 0 011.333-1.334"
                                                                                    stroke="#4A5568"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </svg>
                                                                            <h4>Phí đổi vé 360.000VND và chênh lệch giá
                                                                                vé
                                                                                (nếu có)</h4>
                                                                        </li>
                                                                        <li><svg width="20" height="20" fill="none"
                                                                                class="svgFillAll"
                                                                                style="height: 20px; width: 20px; margin-right: 4px; stroke: rgb(74, 85, 104); margin-top: 3px;">
                                                                                <path
                                                                                    d="M10 7.333v1.334M10 11.333v1.334M12.5 3.333H3.333A1.333 1.333 0 002 4.667v2a1.333 1.333 0 110 2.666v2a1.333 1.333 0 001.333 1.334h9.334A1.334 1.334 0 0014 11.333v-2a1.333 1.333 0 110-2.666V5.5"
                                                                                    stroke="#4A5568"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path d="M15 1.5L2.5 12"
                                                                                    stroke="#4A5568"
                                                                                    stroke-linecap="round"></path>
                                                                            </svg>
                                                                            <h4>Không hoàn vé</h4>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ticket_expansion">
                                                <span><input type="checkbox">Xem thêm hạng ghế và giá vé<i
                                                        class="fa-solid fa-angle-down"></i></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $('#filterClear').click(function () {
                    $('.content_filter input[type="checkbox"]:checked').click();
                })
            </script>
        </div>

        <!-- Footer -->
        <?php echo e(View::make('user_page.footer')); ?>

    </div>

    <!-- Login - Register -->
    <?php echo e(View::make('user_page.login_register')); ?>


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

</html><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/search/show_search.blade.php ENDPATH**/ ?>