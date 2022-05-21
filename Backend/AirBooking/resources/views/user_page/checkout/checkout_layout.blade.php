{{View::make('user_page.header')}}

<body>
    <div class="app" style="background-color: #F4F8FA;">
        <!-- Header -->
        {{View::make('user_page.checkout.checkout_layout')}}

        <div class="container">
            <!-- <div class="container_order">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-7">
                            <div class="order_info" style="padding: 0;">
                                <div class="order_place">
                                    <div class="order_place-heading">Hà Nội (HN) - Sài Gòn (SG)
                                    </div>
                                    <ol class="order_place-desc">
                                        <li>Thứ 4, 11 tháng 05</li>
                                        <li>-</li>
                                        <li>1 khách</li>
                                        <li>-</li>
                                        <li>Phổ thông</li>
                                    </ol>
                                </div>
                                <div class="class_seat-desc-info-column order_tour">
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
                                                    <path id="icon_location_svg__a" d="M0 0h16v16H0z"></path>
                                                </defs>
                                                <g transform="translate(.5 1)" fill="#FF3366">
                                                    <mask id="icon_location_svg__b" fill="#FF3366">
                                                        <use xlink:href="#icon_location_svg__a">
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
                                                <div class="seat_desc-info-place-brandfly-air">
                                                    <div class="seat_desc-info-place-brandfly-air-name">
                                                        Vietjet Air</div>
                                                    <div class="seat_desc-info-place-brandfly-air-id">
                                                        VJ779 . Airbus A321</div>
                                                </div>
                                            </div>
                                            <div class="seat_desc-info-place-seat">
                                                <svg width="16" height="16" fill="none" style="margin-right: 4px;">
                                                    <g clip-path="url(#ic_seat_svg__clip0)" fill="#4A5568">
                                                        <path
                                                            d="M11.766 0a2.753 2.753 0 00-2.75 2.75V4.5a2.753 2.753 0 002.75 2.75 2.753 2.753 0 002.75-2.75V2.75A2.753 2.753 0 0011.766 0zm0 .938c.837 0 1.543.57 1.75 1.343h-3.501a1.816 1.816 0 011.75-1.344zm0 5.374c-1 0-1.813-.813-1.813-1.812V3.219h3.625V4.5c0 1-.813 1.812-1.812 1.812zM8.813 9.875H4.828V4.813c0-.922-.75-1.672-1.672-1.672-.922 0-1.672.75-1.672 1.672v7c0 .775.631 1.406 1.407 1.406h1.218v1.844h-.468a.469.469 0 100 .937h4.375a.469.469 0 000-.937h-.47v-1.844h2.47c.258 0 .468-.21.468-.469v-1.203c0-.922-.75-1.672-1.671-1.672zm-2.204 5.188H5.047v-1.844h1.562v1.844zm2.938-2.782H2.89a.47.47 0 01-.47-.469v-7a.735.735 0 011.47 0v5.532c0 .259.21.469.468.469h4.454c.404 0 .734.329.734.734v.734z">
                                                        </path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="ic_seat_svg__clip0">
                                                            <path fill="#fff" d="M0 0h16v16H0z">
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
                            </div>
                            <div class="order_info">
                                <div class="order_heading">Thông tin khách hàng
                                </div>
                                <div class="order_note">
                                    <span>Nhập tiếng Việt không dấu, không có ký tự đặc biệt.</span>
                                    <span>Nhập họ tên trùng khớp trên giấy tờ tùy thân.</span>
                                </div>
                                <div class="order_customer">
                                    <div class="order_customer-heading">
                                        <div class="order_customer-svg">
                                            <svg width="10" height="20" fill="none">
                                                <path
                                                    d="M4.616 7.096A4.303 4.303 0 001.89 8.589 4.478 4.478 0 00.834 11.56v2.536c0 .103.04.203.112.276a.378.378 0 00.27.114H2.6c.048 0 .094.018.129.051a.197.197 0 01.061.128l.337 4.145a.393.393 0 00.122.254c.071.067.164.103.26.103h3.055a.377.377 0 00.26-.103.393.393 0 00.122-.255l.339-4.144a.197.197 0 01.06-.128.189.189 0 01.13-.051h1.381a.378.378 0 00.27-.114.394.394 0 00.112-.276v-2.73c0-.6-.124-1.193-.363-1.74a4.293 4.293 0 00-1.021-1.441 4.187 4.187 0 00-1.506-.894 4.123 4.123 0 00-1.73-.195zM5.036 6.295c1.476 0 2.673-1.223 2.673-2.731 0-1.508-1.197-2.73-2.673-2.73-1.477 0-2.674 1.222-2.674 2.73s1.197 2.73 2.674 2.73z"
                                                    fill="#4A5568"></path>
                                            </svg>
                                        </div>
                                        Khách hàng 1
                                    </div>
                                    <div class="order_customer-info">
                                        <div class="customer_info-gender">
                                            <h4>Giới tính</h4>
                                            <select name="" id="" class="input_form">
                                                <option value="0" selected>Nam</option>
                                                <option value="1">Nữ</option>
                                            </select>
                                        </div>
                                        <div class="customer_info-name">
                                            <h4>Họ tên</h4>
                                            <input oninput="this.value = this.value.toUpperCase()" type="text"
                                                class="input_form" placeholder="Họ tên (Ví dụ: NGUYEN VAN A)">
                                        </div>
                                    </div>
                                </div>
                                <label class="option-checkbox">
                                    <input type="checkbox" id="search_checkbox">
                                    <i class="icon-checkbox"></i>
                                    Thông tin hành khách là thông tin liên hệ
                                </label>
                            </div>
                            <div class="order_info">
                                <div class="order_heading">Thông tin liên hệ
                                    <span>Mã đặt chỗ sẽ được gửi theo thông tin liên hệ dưới đây</span>
                                </div>
                                <div class="order_customer">
                                    <div class="order_customer-info">
                                        <div class="customer_info-gender">
                                            <h4>Giới tính</h4>
                                            <select name="" id="" class="input_form">
                                                <option value="0" selected>Nam</option>
                                                <option value="1">Nữ</option>
                                            </select>
                                        </div>
                                        <div class="customer_info-name">
                                            <h4>Họ tên</h4>
                                            <input oninput="this.value = this.value.toUpperCase()" type="text"
                                                class="input_form" placeholder="Họ tên (Ví dụ: NGUYEN VAN A)">
                                        </div>
                                    </div>
                                    <div class="order_customer-info">
                                        <div class="customer_info-phone">
                                            <h4>Số điện thoại</h4>
                                            <input oninput="this.value = this.value.toUpperCase()" type="text"
                                                class="input_form" placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="customer_info-email">
                                            <h4>Email</h4>
                                            <input oninput="this.value = this.value.toUpperCase()" type="text"
                                                class="input_form" placeholder="Nhập địa chỉ email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit_order_info">
                                <button class="btn btn--primary">Tiếp tục</button>
                            </div>
                        </div>
                        <div class="grid__column-5">
                            <div class="order_info" style="position: fixed; width: 35%;">
                                <div class="order_heading">Chi tiết giá
                                </div>
                                <ul class="order_price">
                                    <li>
                                        <h4>Người lớn x1</h4>
                                        <h4>2.200.200đ</h4>
                                    </li>
                                    <li>
                                        <h4>Thuế và phí sân bay</h4>
                                        <h4>2.200.200đ</h4>
                                    </li>
                                    <li>
                                        <h4>Phí dịch vụ</h4>
                                        <h4>2.200.200đ</h4>
                                    </li>
                                    <li>
                                        <h4 style="font-weight: bold;">Tổng giá chiều đi</h4>
                                        <h4 style="font-weight: bold;">2.200.200đ</h4>
                                    </li>
                                </ul>
                                <div class="order_total">
                                    <h4 style="font-weight: bold;">Tổng giá vé</h4>
                                    <h4 style="font-weight: bold;">2.200.200đ</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="container_order">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-7">
                            <div class="order_info" style="padding: 0;">
                                <div class="order_info-payment">
                                    <div class="order_place" style="border:none">
                                        <div class="order_place-heading">Hà Nội (HN) - Sài Gòn (SG)
                                        </div>
                                        <ol class="order_place-desc">
                                            <li>Thứ 4, 11 tháng 05</li>
                                            <li>-</li>
                                            <li>1 khách</li>
                                            <li>-</li>
                                            <li>Phổ thông</li>
                                        </ol>
                                    </div>
                                    <div class="order_place-icon">
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="class_seat-desc-info-column order_info-tour">
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
                                                    <path id="icon_location_svg__a" d="M0 0h16v16H0z"></path>
                                                </defs>
                                                <g transform="translate(.5 1)" fill="#FF3366">
                                                    <mask id="icon_location_svg__b" fill="#FF3366">
                                                        <use xlink:href="#icon_location_svg__a">
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
                                                <div class="seat_desc-info-place-brandfly-air">
                                                    <div class="seat_desc-info-place-brandfly-air-name">
                                                        Vietjet Air</div>
                                                    <div class="seat_desc-info-place-brandfly-air-id">
                                                        VJ779 . Airbus A321</div>
                                                </div>
                                            </div>
                                            <div class="seat_desc-info-place-seat">
                                                <svg width="16" height="16" fill="none" style="margin-right: 4px;">
                                                    <g clip-path="url(#ic_seat_svg__clip0)" fill="#4A5568">
                                                        <path
                                                            d="M11.766 0a2.753 2.753 0 00-2.75 2.75V4.5a2.753 2.753 0 002.75 2.75 2.753 2.753 0 002.75-2.75V2.75A2.753 2.753 0 0011.766 0zm0 .938c.837 0 1.543.57 1.75 1.343h-3.501a1.816 1.816 0 011.75-1.344zm0 5.374c-1 0-1.813-.813-1.813-1.812V3.219h3.625V4.5c0 1-.813 1.812-1.812 1.812zM8.813 9.875H4.828V4.813c0-.922-.75-1.672-1.672-1.672-.922 0-1.672.75-1.672 1.672v7c0 .775.631 1.406 1.407 1.406h1.218v1.844h-.468a.469.469 0 100 .937h4.375a.469.469 0 000-.937h-.47v-1.844h2.47c.258 0 .468-.21.468-.469v-1.203c0-.922-.75-1.672-1.671-1.672zm-2.204 5.188H5.047v-1.844h1.562v1.844zm2.938-2.782H2.89a.47.47 0 01-.47-.469v-7a.735.735 0 011.47 0v5.532c0 .259.21.469.468.469h4.454c.404 0 .734.329.734.734v.734z">
                                                        </path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="ic_seat_svg__clip0">
                                                            <path fill="#fff" d="M0 0h16v16H0z">
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
                            </div>
                            <div class="order_info">
                                <div class="order_heading">Thông tin liên hệ
                                    <span>Mã đặt chỗ sẽ được gửi theo thông tin liên hệ dưới đây</span>
                                </div>
                                <div class="order_payment">
                                    <ul class="payment_method">
                                        <li>
                                            <label>
                                                <div>
                                                    <svg width="32" height="32" fill="none">
                                                        <path
                                                            d="M12 5.333H6.667c-.737 0-1.333.597-1.333 1.334V12c0 .736.596 1.333 1.333 1.333H12c.736 0 1.334-.597 1.334-1.333V6.667c0-.737-.598-1.334-1.334-1.334z"
                                                            fill="url(#icon_qr_code_svg__paint0_linear)"
                                                            stroke="#2D3748" stroke-width="1.5"></path>
                                                        <path d="M9.334 22.667v.013" stroke="#2D3748" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M25.333 5.333H20c-.736 0-1.334.597-1.334 1.334V12c0 .736.598 1.333 1.334 1.333h5.333c.737 0 1.334-.597 1.334-1.333V6.667c0-.737-.597-1.334-1.334-1.334z"
                                                            fill="url(#icon_qr_code_svg__paint1_linear)"
                                                            stroke="#2D3748" stroke-width="1.5"></path>
                                                        <path d="M9.334 9.333v.014" stroke="#2D3748" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M12 18.667H6.667c-.737 0-1.333.597-1.333 1.333v5.333c0 .737.596 1.334 1.333 1.334H12c.736 0 1.334-.597 1.334-1.334V20c0-.736-.598-1.333-1.334-1.333z"
                                                            fill="#fff" stroke="#2D3748" stroke-width="1.5"></path>
                                                        <path
                                                            d="M22.666 9.333v.014M18.666 18.667h4M26.666 18.667v.013M18.666 18.667v4M18.666 26.667h4M22.666 22.667h4M26.666 22.667v4"
                                                            stroke="#2D3748" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <defs>
                                                            <linearGradient id="icon_qr_code_svg__paint0_linear"
                                                                x1="9.334" y1="5.333" x2="9.334" y2="13.333"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#E2E8F0"></stop>
                                                                <stop offset="1" stop-color="#CBD5E0"></stop>
                                                            </linearGradient>
                                                            <linearGradient id="icon_qr_code_svg__paint1_linear"
                                                                x1="22.666" y1="5.333" x2="22.666" y2="13.333"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#E2E8F0"></stop>
                                                                <stop offset="1" stop-color="#CBD5E0"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <h4>Thanh toán QR-PAY</h4>
                                                </div>
                                                <input checked type="radio" name="payment_method">
                                                <i class="icon-radio"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <div>
                                                    <svg width="32" height="32" fill="none">
                                                        <path
                                                            d="M24 6.667H8a4 4 0 00-4 4v10.666a4 4 0 004 4h16a4 4 0 004-4V10.667a4 4 0 00-4-4z"
                                                            fill="#fff" stroke="#2D3748" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M5.5 7h21l1.5 6H4l1.5-6z"
                                                            fill="url(#icon_method_atm_card_svg__paint0_linear)"></path>
                                                        <path
                                                            d="M24 6.667H8a4 4 0 00-4 4v10.666a4 4 0 004 4h16a4 4 0 004-4V10.667a4 4 0 00-4-4zM4 13.333h24M9.333 20h.013M14.667 20h2.667"
                                                            stroke="#2D3748" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <defs>
                                                            <linearGradient id="icon_method_atm_card_svg__paint0_linear"
                                                                x1="16" y1="7" x2="16" y2="13"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#E2E8F0"></stop>
                                                                <stop offset="1" stop-color="#CBD5E0"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <h4>Thẻ ATM/Tài khoản ngân hàng</h4>
                                                </div>
                                                <input type="radio" name="payment_method">
                                                <i class="icon-radio"></i>
                                            </label>
                                            <div class="payment_select">
                                                <div class="bank_heading">Chọn ngân hàng</div>
                                                <div class="bank_list">
                                                    <label class="bank_item">
                                                        <input type="radio" name="payment_method-bank">
                                                        <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/vietcombank_logo.png"
                                                            class="jss186" alt="" style="width: 100%; height: 100%;">
                                                    </label>
                                                    <label class="bank_item">
                                                        <input type="radio" name="payment_method-bank">
                                                        <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/vietinbank_logo.png"
                                                            class="jss186" alt="" style="width: 100%; height: 100%;">
                                                    </label>
                                                    <label class="bank_item">
                                                        <input type="radio" name="payment_method-bank">
                                                        <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/bidv_logo.png"
                                                            class="jss186" alt="" style="width: 100%; height: 100%;">
                                                    </label>
                                                    <label class="bank_item">
                                                        <input type="radio" name="payment_method-bank">
                                                        <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/agribank_logo.png"
                                                            class="jss186" alt="" style="width: 100%; height: 100%;">
                                                    </label>
                                                    <label class="bank_item">
                                                        <input type="radio" name="payment_method-bank">
                                                        <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/sacombank_logo.png"
                                                            class="jss186" alt="" style="width: 100%; height: 100%;">
                                                    </label>
                                                    <label class="bank_item">
                                                        <input type="radio" name="payment_method-bank">
                                                        <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/techcombank_logo.png"
                                                            class="jss186" alt="" style="width: 100%; height: 100%;">
                                                    </label>
                                                    <label class="bank_item">
                                                        <input type="radio" name="payment_method-bank">
                                                        <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/acb_logo.png"
                                                            class="jss186" alt="" style="width: 100%; height: 100%;">
                                                    </label>
                                                    <label class="bank_item">
                                                        <input type="radio" name="payment_method-bank">
                                                        <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/vpbank_logo.png"
                                                            class="jss186" alt="" style="width: 100%; height: 100%;">
                                                    </label>
                                                    <label class="bank_item">
                                                        <input type="radio" name="payment_method-bank">
                                                        <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/vib_logo.png"
                                                            class="jss186" alt="" style="width: 100%; height: 100%;">
                                                    </label>
                                                    <label class="bank_item">
                                                        <input type="radio" name="payment_method-bank">
                                                        <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/mbbank_logo.png"
                                                            class="jss186" alt="" style="width: 100%; height: 100%;">
                                                    </label>
                                                    <label class="bank_item">
                                                        <input type="radio" name="payment_method-bank">
                                                        <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/scb_logo.png"
                                                            class="jss186" alt="" style="width: 100%; height: 100%;">
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="submit_order_info" style="margin-top:20px">
                                        <button class="btn btn--primary">Thanh toán</button>
                                    </div>
                                    <div class="submit_order_info" style="margin-top:10px">
                                        <span style="font-size: 1.2rem;">Bằng cách nhấn nút Thanh toán, bạn đồng ý
                                            với</span>
                                    </div>
                                    <div class="submit_order_info">
                                        <a style="font-size: 1.2rem; color: var(--primary-color); cursor: pointer;">
                                            <span class="MuiTypography-root MuiTypography-body2">Điều kiện và Điều
                                                khoản</span>&nbsp;
                                        </a>
                                        <span style="font-size: 1.2rem;">của chúng tôi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-5">
                            <div class="order_info" style="position: fixed; width: 35%;">
                                <div class="order_heading">Chi tiết giá
                                </div>
                                <ul class="order_price">
                                    <li>
                                        <h4>Người lớn x1</h4>
                                        <h4>2.200.200đ</h4>
                                    </li>
                                    <li>
                                        <h4>Thuế và phí sân bay</h4>
                                        <h4>2.200.200đ</h4>
                                    </li>
                                    <li>
                                        <h4>Phí dịch vụ</h4>
                                        <h4>2.200.200đ</h4>
                                    </li>
                                    <li>
                                        <h4 style="font-weight: bold;">Tổng giá chiều đi</h4>
                                        <h4 style="font-weight: bold;">2.200.200đ</h4>
                                    </li>
                                </ul>
                                <div class="order_total">
                                    <h4 style="font-weight: bold;">Tổng giá vé</h4>
                                    <h4 style="font-weight: bold;">2.200.200đ</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        {{View::make('user_page.footer')}}
    </div>
</body>
<script>
    $('.order_info-payment').click(function () {
        $(this).closest('.order_info').find('.order_info-tour').slideToggle(200);
    })

    $('input[name="payment_method"]').change(function () {
        toggleBlock($(this).closest('ul').find('.payment_select-show'));
        $(this).closest('ul').find('input[name="payment_method-bank"]:checked').prop('checked', false);
        $(this).closest('ul').find('.bank_item-show').removeClass('bank_item-show');

        let inputPayment = $(this).closest('li').find('.payment_select');

        inputPayment.slideToggle(200);
        inputPayment.addClass('payment_select-show')
    })

    $('input[name="payment_method-bank"]').change(function () {
        $(this).closest('.bank_list').find('.bank_item-show').removeClass('bank_item-show');

        let inputPayment = $(this).closest('.bank_item')
        inputPayment.addClass('bank_item-show')
    })

    function toggleBlock(thisToggle) {
        thisToggle.slideToggle(200);
        thisToggle.removeClass('payment_select-show');
    }
</script>

</html>