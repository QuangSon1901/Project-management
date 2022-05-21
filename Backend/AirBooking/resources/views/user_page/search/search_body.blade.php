@extends('user_page.search.search_layout')
@section('search_body')

<ul class="ticket_body-list">
    @foreach($ticketList as $row)
    <li class="ticket_body-item">
        <div class="ticket_info">
            <div class="ticket_info-name">
                <img src="{{URL::to('upload/'.$row['flight']->airline_logo)}}" alt="">
                <div class="ticket_info-brand-airline">
                    <h4 class="ticket_info-brand-name">{{$row['flight']->airline_name}}</h4>
                    <h4 class="ticket_info-brand-id">{{$row['flight']->airplane_name}}/ {{$row['flight']->airplane_number}}</h4>
                </div>
            </div>
            <div class="ticket_info-time-dep">
                <div class="ticket_info-time-start">
                    <h4>{{date('H:i', strtotime($row['flight']->flight_time_departure))}}</h4>
                    <h4 class="ticket_info-place">{{$row['aliasFrom']->airport_alias}}</h4>
                </div>
                <svg width="40" height="20" fill="none">
                    <g clip-path="url(#icon_arrow_flight_long_svg__clip0)" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M33.5 8.5L36 11M4 11h32"></path>
                    </g>
                    <defs>
                        <clipPath id="icon_arrow_flight_long_svg__clip0">
                            <path fill="#fff" d="M0 0h40v20H0z"></path>
                        </clipPath>
                    </defs>
                </svg>
                <div class="ticket_info-time-end">
                    <h4>{{date('H:i', $row['timeArr'])}}</h4>
                    <h4 class="ticket_info-place">{{$row['aliasTo']->airport_alias}}</h4>
                </div>
            </div>
            <div class="ticket_info-time-fly">
                <h4>@if(date('H', strtotime($row['flight']->flight_time_fly)) != 0)
                    {{date('H', strtotime($row['flight']->flight_time_fly))}}h
                    @endif
                    {{date('i', strtotime($row['flight']->flight_time_fly))}}'
                </h4>
                <h4 class="ticket_info-fly-route">Bay thẳng</h4>
            </div>
        </div>
        <div class="ticket_class-seat">
            <ul class="class_seat-list">
                @foreach($row['ticket'] as $item)
                <li class="class_seat-item">
                    <div class="class_seat-body">
                        <div class="class_seat-name">
                            <h4>{{$item['ticket_class_name']}}</h4>
                            <h4 class="class_seat-it">EB</h4>
                        </div>
                        <div class="class_seat-desc">
                            <div class="class_seat-package-heft tooltip">
                                <svg width="20" height="20" fill="none" class="MuiChip-icon svgFillAll" style="width: 20px; stroke: rgb(74, 85, 104); height: 20px;">
                                    <path d="M4.884 17.17v1.163M15.737 17.17v1.163M7.985 12.519h4.651" stroke="#1A202C" stroke-miterlimit="10" stroke-linecap="round"></path>
                                    <path d="M17.287 15.17a2 2 0 01-2 2H5.333a2 2 0 01-2-2V6.317c0-.852.698-1.55 1.55-1.55h10.854c.852 0 1.55.698 1.55 1.55v8.853zM12.636 4.767v-2.1a1 1 0 00-1-1H8.985a1 1 0 00-1 1v2.1M3.333 9.418h13.954" stroke="#1A202C" stroke-miterlimit="10" stroke-linecap="square"></path>
                                </svg>
                                <h4>7 kg</h4>
                                <span class="tooltip_text">Hành lý xách tay
                                    7kg</span>
                            </div>
                            <div class="class_seat-detail">
                                <input type="checkbox">
                                <svg width="20" height="20" fill="none" class="MuiChip-icon svgFillAll" style="width: auto; stroke: rgb(74, 85, 104);">
                                    <path d="M10 17.5a7.5 7.5 0 100-15 7.5 7.5 0 000 15zM10 6.667h.008" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M9.166 10H10v3.333h.833" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                                <h4>Chi tiết</h4>
                            </div>
                        </div>
                        <div class="class_seat-order">
                            <div class="class_seat-price">
                                <h5 class="class_seat-cost">{{number_format($item['ticket_price'])}}đ</h5>
                                <h4 class="class_seat-sale">{{number_format($item['ticket_price'])}}đ</h4>
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
                                        <h4>{{date('H:i', strtotime($row['flight']->flight_time_departure))}}</h4>
                                        <h4 class="seat_desc-info-time-date">
                                            {{date('d-m-Y', strtotime($row['flight']->flight_time_departure))}}
                                        </h4>
                                    </div>
                                    <div class="seat_desc-info-time-dep">
                                        @if(date('H', strtotime($row['flight']->flight_time_fly)) != 0)
                                        {{date('H', strtotime($row['flight']->flight_time_fly))}}h
                                        @endif
                                        {{date('i', strtotime($row['flight']->flight_time_fly))}}m
                                    </div>
                                    <div class="seat_desc-info-time-end">
                                        <h4>{{date('H:i', $row['timeArr'])}}</h4>
                                        <h4 class="seat_desc-info-time-date">
                                            {{date('d-m-Y', $row['timeArr'])}}
                                        </h4>
                                    </div>
                                </div>
                                <div class="seat_desc-info-icon">
                                    <svg width="16" height="16" fill="none" style="height: 32px; width: 16px; fill: #FF3366; margin-bottom: 4px;">
                                        <path d="M9.333 10.667v2.666a1.333 1.333 0 01-2.666 0v-2.666L2 8V6l4.667 1.333V4.667L5.333 3.333v-2L8 2.667l2.667-1.334v2L9.333 4.667v2.666L14 6v2l-4.667 2.667z" fill="#FF3366"></path>
                                    </svg>
                                    <span></span>
                                    <svg class="sjsjsj" width="17" height="18" style="height: 32px; width: 16px; fill: #FF3366;">
                                        <defs>
                                            <path id="icon_location_svg__a" d="M0 0h16v16H0z"></path>
                                        </defs>
                                        <g transform="translate(.5 1)" fill="#FF3366">
                                            <mask id="icon_location_svg__b" fill="#FF3366">
                                                <use xlink:href="#icon_location_svg__a">
                                                </use>
                                            </mask>
                                            <path fill="#FF3366" d="M7.538 13.758C4.132 8.82 3.5 8.314 3.5 6.5a4.5 4.5 0 019 0c0 1.814-.632 2.321-4.038 7.258a.562.562 0 01-.924 0zM8 8.375a1.875 1.875 0 100-3.75 1.875 1.875 0 000 3.75z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="seat_desc-info-place">
                                    <div class="seat_desc-info-place-start">
                                        <h4>{{$row['nameFrom']}}</h4>
                                        <h4 class="seat_desc-info-place-airplane">
                                            {{$row['aliasFrom']->airport_name}}
                                        </h4>
                                    </div>
                                    <div class="seat_desc-info-place-brandfly">
                                        <img alt="" src="{{URL::to('upload/'.$row['flight']->airline_logo)}}">
                                        <div class="seat_desc-info-place-brandfly-air">
                                            <div class="seat_desc-info-place-brandfly-air-name">
                                                {{$row['flight']->airline_name}}
                                            </div>
                                            <div class="seat_desc-info-place-brandfly-air-id">
                                                {{$row['flight']->airplane_name}} . {{$row['flight']->airplane_number}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="seat_desc-info-place-seat">
                                        <svg width="16" height="16" fill="none" style="margin-right: 4px;">
                                            <g clip-path="url(#ic_seat_svg__clip0)" fill="#4A5568">
                                                <path d="M11.766 0a2.753 2.753 0 00-2.75 2.75V4.5a2.753 2.753 0 002.75 2.75 2.753 2.753 0 002.75-2.75V2.75A2.753 2.753 0 0011.766 0zm0 .938c.837 0 1.543.57 1.75 1.343h-3.501a1.816 1.816 0 011.75-1.344zm0 5.374c-1 0-1.813-.813-1.813-1.812V3.219h3.625V4.5c0 1-.813 1.812-1.812 1.812zM8.813 9.875H4.828V4.813c0-.922-.75-1.672-1.672-1.672-.922 0-1.672.75-1.672 1.672v7c0 .775.631 1.406 1.407 1.406h1.218v1.844h-.468a.469.469 0 100 .937h4.375a.469.469 0 000-.937h-.47v-1.844h2.47c.258 0 .468-.21.468-.469v-1.203c0-.922-.75-1.672-1.671-1.672zm-2.204 5.188H5.047v-1.844h1.562v1.844zm2.938-2.782H2.89a.47.47 0 01-.47-.469v-7a.735.735 0 011.47 0v5.532c0 .259.21.469.468.469h4.454c.404 0 .734.329.734.734v.734z">
                                                </path>
                                            </g>
                                            <defs>
                                                <clipPath id="ic_seat_svg__clip0">
                                                    <path fill="#fff" d="M0 0h16v16H0z">
                                                    </path>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <h4>{{$item['ticket_class_name']}}</h4>
                                        <h4 class="class_seat-it">EB</h4>
                                    </div>
                                    <div class="seat_desc-info-place-end">
                                        <h4>{{$row['nameTo']}}</h4>
                                        <h4 class="seat_desc-info-place-airplane">
                                            {{$row['aliasTo']->airport_name}}
                                        </h4>
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
                                    <h4>Phí dịch vụ <svg width="20" height="20" fill="none" class="svgFillAll" style="stroke: #ff3366; margin-left: 6px; cursor: pointer;">
                                            <path d="M10 17.5a7.5 7.5 0 100-15 7.5 7.5 0 000 15zM10 6.667h.008" stroke="#ff3366" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M9.166 10H10v3.333h.833" stroke="#ff3366" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></h4>
                                    <h4 style="font-weight: 500;">Tổng tiền</h4>
                                </div>
                                <div class="class_seat-desc-info-body-price">
                                    <h4>{{number_format($item['ticket_price'])}}đ</h4>
                                    <h4>0đ</h4>
                                    <h4>0đ</h4>
                                    <h4 style="font-weight: 500;">{{number_format($item['ticket_price'])}}đ</h4>
                                </div>
                            </div>
                            <div class="class_seat-desc-info-title">Thông tin khác
                            </div>
                            <div class="class_seat-desc-info-body body_3">
                                <ul>
                                    <li><svg width="20" height="20" fill="none" class="svgFillAll" style="height: 20px; width: 20px; stroke: rgb(74, 85, 104); margin-top: 2px;">
                                            <path d="M4.884 17.17v1.163M15.737 17.17v1.163M7.985 12.519h4.651" stroke="#1A202C" stroke-miterlimit="10" stroke-linecap="round"></path>
                                            <path d="M17.287 15.17a2 2 0 01-2 2H5.333a2 2 0 01-2-2V6.317c0-.852.698-1.55 1.55-1.55h10.854c.852 0 1.55.698 1.55 1.55v8.853zM12.636 4.767v-2.1a1 1 0 00-1-1H8.985a1 1 0 00-1 1v2.1M3.333 9.418h13.954" stroke="#1A202C" stroke-miterlimit="10" stroke-linecap="square"></path>
                                        </svg>
                                        <h4>Hành lý xách tay 7kg.</h4>
                                    </li>
                                    <li><svg width="20" height="20" fill="none" class="svgFillAll" style="height: 20px; width: 20px; margin-right: 4px; stroke: rgb(74, 85, 104); margin-top: 3px;">
                                            <path d="M10 3.333v1.334M10 7.333v1.334M10 11.333v1.334M3.333 3.333h9.334A1.333 1.333 0 0114 4.667v2a1.333 1.333 0 100 2.666v2a1.334 1.334 0 01-1.333 1.334H3.333A1.334 1.334 0 012 11.333v-2a1.333 1.333 0 100-2.666v-2a1.333 1.333 0 011.333-1.334" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <h4>Phí đổi vé 360.000VND và chênh lệch giá
                                            vé
                                            (nếu có)</h4>
                                    </li>
                                    <li><svg width="20" height="20" fill="none" class="svgFillAll" style="height: 20px; width: 20px; margin-right: 4px; stroke: rgb(74, 85, 104); margin-top: 3px;">
                                            <path d="M10 7.333v1.334M10 11.333v1.334M12.5 3.333H3.333A1.333 1.333 0 002 4.667v2a1.333 1.333 0 110 2.666v2a1.333 1.333 0 001.333 1.334h9.334A1.334 1.334 0 0014 11.333v-2a1.333 1.333 0 110-2.666V5.5" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M15 1.5L2.5 12" stroke="#4A5568" stroke-linecap="round"></path>
                                        </svg>
                                        <h4>Không hoàn vé</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="ticket_expansion">
            <span><input type="checkbox">Xem thêm hạng ghế và giá vé<i class="fa-solid fa-angle-down"></i></span>
        </div>
    </li>
    @endforeach
</ul>
@endsection