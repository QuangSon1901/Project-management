{{View::make('user_page.header')}}
<style>
    .send_mail-success {
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        position: absolute;
        display: flex;
        background-color: var(--background-color-2);
    }
</style>

<body>
    <div class="send_mail-success">
        <div class="ticketFormDetail" style="background-color: var(--white-color); margin: auto; width:83.3334%;box-shadow: 1px 0 0 #e6e6e6, -1px 0 0 #e6e6e6, 0 1px 0 #e6e6e6, 0 -1px 0 #e6e6e6, 0 3px 13px rgb(0 0 0 / 8%);">
            <div class="detail_ticker">
                <div class="ticker_status">
                    <div class="ticker_status-item">
                        <span class="ticker_status-title">Mã đơn hàng</span>
                        <span class="ticker_status-value">{{$orderList['billOrder']->bill_id}}</span>
                    </div>
                    <div class="ticker_status-item">
                        <span class="ticker_status-title">Mã đặt chỗ</span>
                        <span class="ticker_status-value">...</span>
                    </div>
                    <div class="ticker_status-item">
                        <span class="ticker_status-title">Trạng thái</span>
                        <span class="on_way">Đang giữ chỗ</span>
                    </div>
                    <div class="ticker_status-item">
                        <span class="ticker_status-title">Ngày đặt</span>
                        <span class="ticker_status-value" style="color:black; font-weight:400; font-size:1.4rem">
                            {{date('d/m/Y', strtotime($orderList['billOrder']->bill_created_at))}}, {{date('H:i:s', strtotime($orderList['billOrder']->bill_created_at))}}</span>
                    </div>
                </div>
            </div>
            <div class="grid__row">
                <div class="grid__column-2" style="display: flex;">
                    <img src="{{asset('user_asset/assets/img/order_flight.png')}}" style="width: 100px; height: 70px; margin: 0 auto;" alt="">
                </div>
                <div class="grid__column-10">
                    <div style="display: flex; padding-bottom: 20px; border-bottom: 1px solid var(--border-color);">
                        <div class="detail_ticker_info">
                            <div class="title_ticker_info">
                                <p style="line-height: 2rem;">{{$orderList['aliasFrom']->airport_name}} ({{$orderList['aliasFrom']->airport_alias}})</p>
                                <div class="icon_ticket_info">
                                    <div style="background: linear-gradient(270deg, rgb(160, 174, 192) 0%, rgba(160, 174, 192, 0) 100%); width: 24px; height: 1px; margin-right: 10px;">
                                    </div>
                                    <svg width="18" height="16" fill="none">
                                        <path d="M12.19 6.081a.5.5 0 00.434.252h3.043a1.666 1.666 0 110 3.334h-3.043a.5.5 0 00-.435.252l-3.045 5.33a.5.5 0 01-.434.251H7.163a.5.5 0 01-.48-.637l1.302-4.559a.5.5 0 00-.481-.637H5.04a.5.5 0 00-.353.146l-1.374 1.374a.5.5 0 01-.353.146H1.476a.5.5 0 01-.448-.723l1.193-2.386a.5.5 0 000-.448L1.028 5.39a.5.5 0 01.448-.723H2.96a.5.5 0 01.353.146l1.374 1.374a.5.5 0 00.353.146h2.464a.5.5 0 00.48-.637L6.683 1.137A.5.5 0 017.162.5H8.71a.5.5 0 01.434.252l3.045 5.33z" fill="#718096"></path>
                                    </svg>
                                    <div style="background: linear-gradient(270deg, rgb(160, 174, 192) 0%, rgba(160, 174, 192, 0) 100%); width: 24px; height: 1px; margin-right: 10px;">
                                    </div>
                                </div>
                                <p style="line-height: 2rem; text-align:right">{{$orderList['aliasTo']->airport_name}} ({{$orderList['aliasTo']->airport_alias}})</p>
                            </div>
                            <div class="sub_ticker_info">
                                <p>{{$orderList['aliasFrom']->cities_name}}</p>
                                <p>{{$orderList['aliasTo']->cities_name}}</p>
                            </div>
                            <div class="time_ticker_info">
                                <p>{{date('H:i', strtotime($orderList['billOrder']->flight_time_departure))}}, {{date('d', strtotime($orderList['billOrder']->flight_time_departure))}} tháng {{date('m', strtotime($orderList['billOrder']->flight_time_departure))}}</p>
                                <p>{{date('H:i', $orderList['timeArr'])}}, {{date('d', $orderList['timeArr'])}} tháng {{date('m', $orderList['timeArr'])}}</p>
                            </div>
                        </div>
                        <div class="ticker_plane__logo" style="padding-left: 40px; align-items: center;">
                            <div class="plane__logo">
                                <img class="jss767 jss929" width="40px" style="background:cover; margin-right: 10px;" alt="" src="https://storage.googleapis.com/tripi-assets/flight_services/agent_icons/VietjetAir_transpng.png">
                            </div>
                            <div class="Plane__name">
                                <span style="margin-bottom: 10px;">{{$orderList['billOrder']->airline_name}}</span>

                                <span style="color: #555;font-size: 1.4rem; font-weight: 400;">{{$orderList['billOrder']->airplane_name}} . {{$orderList['billOrder']->airplane_number}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="ticket_info">
                        <div class="ticket_info-body">
                            <h3>Thông tin liên hệ</h3>
                            <div class="ticket_info-group">
                                <h4>Họ tên:</h4>
                                <h4 class="ticket_info-input">{{$orderList['billOrder']->customer_name}}</h4>
                            </div>
                            <div class="ticket_info-group">
                                <h4>Số điện thoại:</h4>
                                <h4 class="ticket_info-input">{{$orderList['billOrder']->customer_phone}}</h4>
                            </div>
                            <div class="ticket_info-group">
                                <h4>Email:</h4>
                                <h4 class="ticket_info-input">{{$orderList['billOrder']->customer_email}}</h4>
                            </div>
                        </div>
                        <div class="ticket_info-body">
                            <h3>Thông tin hành khách: <span style="font-weight: 400;">({{count($orderList['ownTicket'])}} khách)</span></h3>
                            @foreach($orderList['ownTicket'] as $item)
                            <div class="ticket_info-group">
                                <h4>Họ tên:</h4>
                                <h4 class="ticket_info-input">{{$item->own_ticket_name}}</h4>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="payment_info">
                        <h3>Thông tin thanh toán</h3>
                        <div class="ticket_info-group">
                            <h4>Tổng giá:</h4>
                            <h4 class="ticket_info-input">{{number_format($orderList['billOrder']->bill_total_price)}}đ</h4>
                        </div>
                        <div class="ticket_info-group">
                            <h4>Phương thức thanh toán:</h4>
                            <h4 class="ticket_info-input">{{$orderList['billOrder']->payment_method_name}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>