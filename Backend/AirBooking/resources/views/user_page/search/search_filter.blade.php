<div class="content_filter">
    <div class="filter_header">
        <h3>Bộ lọc</h3>
        <h3 class="filter_clear" id="filterClear">Xóa lọc</h3>
    </div>
    <div class="filter_price">
        <h4 class="filter_title">Khoảng giá</h4>
        <h4 class="filter_price-about">0đ - <span id="filterPriceSpan">5.000.000</span>đ</h4>
        <input id="filterPriceInput" class="rs-range" type="range" value="5000000" min="0" max="5000000">
    </div>
    <div class="filter_brand-airline">
        <h4 class="filter_title">Hãng bay</h4>
        <ul class="filter_brand-list">
            @foreach($airlineList as $item)
            <li class="filter_brand-item">
                <label class="option-checkbox">
                    <input type="checkbox" id="search_checkbox">
                    <i class="icon-checkbox"></i>
                    <img src="{{URL::to('upload/'.$item->airline_logo)}}" alt="">
                    {{$item->airline_name}}
                </label>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="filter_time-dep">
        <h4 class="filter_title">Thời gian cất cánh</h4>
        <ul class="filter_time-list grid__row">
            <li class=" grid__column-6">
                <label for="EarlyMorningCheckbox">
                    <input type="checkbox" class="filter_time-focus" id="EarlyMorningCheckbox">
                    <div class="filter_time-item">
                        <svg width="24" height="24" fill="none">
                            <path d="M2 13h.91M4.91 5.91l.636.635M12 3v.91M19.091 5.91l-.636.635M22 13h-.909M6.546 13C6.546 10 9 7.546 12 7.546c3 0 5.455 2.454 5.455 5.454M2 16.636h20M4.727 20.273h14.546" stroke="#1A202C" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
                        </svg>
                        <h4>Buổi sáng</h4>
                        <h4 class="filter_time-item-time">00:00 - 06:00</h4>
                    </div>
                </label>
            </li>
            <li class=" grid__column-6">
                <label for="MorningCheckbox">
                    <input type="checkbox" class="filter_time-focus" id="MorningCheckbox">
                    <div class="filter_time-item">
                        <svg width="24" height="24" fill="none">
                            <path d="M6.664 13.29c-.328-.654-.573-1.472-.573-2.29C6.09 8.3 8.3 6.09 11 6.09c2.7 0 4.909 2.21 4.909 4.91 0 1.145-.41 2.209-1.064 3.027M2 11h.818M4.618 4.618l.573.573M11 2v.818M17.382 4.618l-.573.573M20 11h-.818" stroke="#1A202C" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
                            <path d="M5.273 20A3.282 3.282 0 012 16.727c0-1.8 1.473-3.273 3.273-3.273.409 0 .818.082 1.227.246.736-1.554 2.29-2.7 4.09-2.7 1.965 0 3.683 1.31 4.255 3.027.573-.409 1.146-.572 1.882-.572 1.8 0 3.273 1.472 3.273 3.272 0 1.8-1.473 3.273-3.273 3.273H5.273z" stroke="#1A202C" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
                        </svg>
                        <h4>Buổi sáng</h4>
                        <h4 class="filter_time-item-time">06:00 - 12:00</h4>
                    </div>
                </label>
            </li>
            <li class=" grid__column-6">
                <label for="EveningCheckbox">
                    <input type="checkbox" class="filter_time-focus" id="EveningCheckbox">
                    <div class="filter_time-item">
                        <svg width="24" height="24" fill="none">
                            <path d="M3 14.455h18M5.455 17.727h13.09M7.91 21h8.181M3.818 11.182C3.818 6.682 7.5 3 12 3s8.182 3.682 8.182 8.182" stroke="#1A202C" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
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
                            <path d="M16.91 15.273c-4.5 0-8.183-3.682-8.183-8.182v0c0-.912-.88-1.77-1.671-1.316A8.099 8.099 0 003 12.818C3 17.318 6.682 21 11.182 21a8.099 8.099 0 007.043-4.055c.454-.792-.404-1.672-1.316-1.672v0zM14.455 3v3.273M12.818 4.636h3.273M19.364 7.91v3.272M17.727 9.545H21" stroke="#1A202C" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
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
            @foreach($ticketClass as $item)
            <li class="filter_rank-item">
                <label class="option-checkbox">
                    <input type="checkbox" id="search_checkbox">
                    <i class="icon-checkbox"></i>
                    <img src="" alt="">
                    {{$item->ticket_class_name}}
                </label>
            </li>
            @endforeach
        </ul>
    </div>
</div>