@extends('user_page.checkout.checkout_layout')
@section('content_checkout')
<div class="container_order">
    <div class="grid">
        <div class="grid__row">
            <div class="grid__column-7">
                <div class="order_info" style="padding: 0;">
                    {{View::make('user_page.checkout.checkout_flight_info')}}
                </div>
                <div class="order_info">
                    <div class="order_heading">Phương thức thanh toán
                        <span>Sau khi hoàn tất thanh toán, vé điện tử sẽ được gửi ngay qua SMS và Email của bạn.</span>
                    </div>
                    <div class="order_payment">
                        <ul class="payment_method">
                            <li>
                                <label>
                                    <div>
                                        <svg width="32" height="32" fill="none">
                                            <path d="M12 5.333H6.667c-.737 0-1.333.597-1.333 1.334V12c0 .736.596 1.333 1.333 1.333H12c.736 0 1.334-.597 1.334-1.333V6.667c0-.737-.598-1.334-1.334-1.334z" fill="url(#icon_qr_code_svg__paint0_linear)" stroke="#2D3748" stroke-width="1.5"></path>
                                            <path d="M9.334 22.667v.013" stroke="#2D3748" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M25.333 5.333H20c-.736 0-1.334.597-1.334 1.334V12c0 .736.598 1.333 1.334 1.333h5.333c.737 0 1.334-.597 1.334-1.333V6.667c0-.737-.597-1.334-1.334-1.334z" fill="url(#icon_qr_code_svg__paint1_linear)" stroke="#2D3748" stroke-width="1.5"></path>
                                            <path d="M9.334 9.333v.014" stroke="#2D3748" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12 18.667H6.667c-.737 0-1.333.597-1.333 1.333v5.333c0 .737.596 1.334 1.333 1.334H12c.736 0 1.334-.597 1.334-1.334V20c0-.736-.598-1.333-1.334-1.333z" fill="#fff" stroke="#2D3748" stroke-width="1.5"></path>
                                            <path d="M22.666 9.333v.014M18.666 18.667h4M26.666 18.667v.013M18.666 18.667v4M18.666 26.667h4M22.666 22.667h4M26.666 22.667v4" stroke="#2D3748" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <defs>
                                                <linearGradient id="icon_qr_code_svg__paint0_linear" x1="9.334" y1="5.333" x2="9.334" y2="13.333" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#E2E8F0"></stop>
                                                    <stop offset="1" stop-color="#CBD5E0"></stop>
                                                </linearGradient>
                                                <linearGradient id="icon_qr_code_svg__paint1_linear" x1="22.666" y1="5.333" x2="22.666" y2="13.333" gradientUnits="userSpaceOnUse">
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
                                            <path d="M24 6.667H8a4 4 0 00-4 4v10.666a4 4 0 004 4h16a4 4 0 004-4V10.667a4 4 0 00-4-4z" fill="#fff" stroke="#2D3748" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5.5 7h21l1.5 6H4l1.5-6z" fill="url(#icon_method_atm_card_svg__paint0_linear)"></path>
                                            <path d="M24 6.667H8a4 4 0 00-4 4v10.666a4 4 0 004 4h16a4 4 0 004-4V10.667a4 4 0 00-4-4zM4 13.333h24M9.333 20h.013M14.667 20h2.667" stroke="#2D3748" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <defs>
                                                <linearGradient id="icon_method_atm_card_svg__paint0_linear" x1="16" y1="7" x2="16" y2="13" gradientUnits="userSpaceOnUse">
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
                                            <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/vietcombank_logo.png" class="jss186" alt="" style="width: 100%; height: 100%;">
                                        </label>
                                        <label class="bank_item">
                                            <input type="radio" name="payment_method-bank">
                                            <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/vietinbank_logo.png" class="jss186" alt="" style="width: 100%; height: 100%;">
                                        </label>
                                        <label class="bank_item">
                                            <input type="radio" name="payment_method-bank">
                                            <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/bidv_logo.png" class="jss186" alt="" style="width: 100%; height: 100%;">
                                        </label>
                                        <label class="bank_item">
                                            <input type="radio" name="payment_method-bank">
                                            <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/agribank_logo.png" class="jss186" alt="" style="width: 100%; height: 100%;">
                                        </label>
                                        <label class="bank_item">
                                            <input type="radio" name="payment_method-bank">
                                            <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/sacombank_logo.png" class="jss186" alt="" style="width: 100%; height: 100%;">
                                        </label>
                                        <label class="bank_item">
                                            <input type="radio" name="payment_method-bank">
                                            <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/techcombank_logo.png" class="jss186" alt="" style="width: 100%; height: 100%;">
                                        </label>
                                        <label class="bank_item">
                                            <input type="radio" name="payment_method-bank">
                                            <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/acb_logo.png" class="jss186" alt="" style="width: 100%; height: 100%;">
                                        </label>
                                        <label class="bank_item">
                                            <input type="radio" name="payment_method-bank">
                                            <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/vpbank_logo.png" class="jss186" alt="" style="width: 100%; height: 100%;">
                                        </label>
                                        <label class="bank_item">
                                            <input type="radio" name="payment_method-bank">
                                            <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/vib_logo.png" class="jss186" alt="" style="width: 100%; height: 100%;">
                                        </label>
                                        <label class="bank_item">
                                            <input type="radio" name="payment_method-bank">
                                            <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/mbbank_logo.png" class="jss186" alt="" style="width: 100%; height: 100%;">
                                        </label>
                                        <label class="bank_item">
                                            <input type="radio" name="payment_method-bank">
                                            <img src="https://storage.googleapis.com/tripi-assets/images/payment-method-banks/scb_logo.png" class="jss186" alt="" style="width: 100%; height: 100%;">
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
            {{View::make('user_page.checkout.checkout_price_info')}}
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#checkoutPayment').addClass('navbar__step-item--active');
    })
</script>
@endsection