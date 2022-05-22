@extends('user_page.checkout.checkout_layout')
@section('content_checkout')
<div class="container_order">
    <div class="grid">
        <div class="grid__row">
            <div class="grid__column-7">
                <form action="/checkout/checkout-completed" method="get" id="paymentMethodForm">
                    <div class="order_info" style="padding: 0;">
                        {{View::make('user_page.checkout.checkout_flight_info')}}
                    </div>
                    <div class="order_info">
                        <div class="order_heading">Phương thức thanh toán
                            <span>Sau khi hoàn tất thanh toán, vé điện tử sẽ được gửi ngay qua SMS và Email của bạn.</span>
                            @error('payment_method')
                            <span class="textError">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="order_payment">
                            <ul class="payment_method">
                                @foreach($paymentMethodList as $item)
                                <li>
                                    <label>
                                        <div>
                                            {!! $item->payment_method_svg !!}
                                            <h4>{{$item->payment_method_name}}</h4>
                                        </div>
                                        <input type="radio" value="{{$item->payment_method_id}}" name="payment_method">
                                        <i class="icon-radio"></i>
                                    </label>
                                    @if($item->payment_method_html != null)
                                    {!! $item->payment_method_html !!}
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            <div class="submit_order_info" style="margin-top:20px">
                                <button type="submit" class="btn btn--primary">Thanh toán</button>
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
                </form>
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