@php
    $ticketItem = Session::get('ticketItem');
@endphp
<div class="grid__column-5">
    <div class="order_info" style="position: fixed; width: 35%;">
        <div class="order_heading">Chi tiết giá
        </div>
        <ul class="order_price">
            <li>
                <h4>Người lớn x1</h4>
                <h4>{{number_format($ticketItem['ticket']->ticket_price)}}đ</h4>
            </li>
            <li>
                <h4>Thuế và phí sân bay</h4>
                <h4>0đ</h4>
            </li>
            <li>
                <h4>Phí dịch vụ</h4>
                <h4>0đ</h4>
            </li>
            <li>
                <h4 style="font-weight: bold;">Tổng giá chiều đi</h4>
                <h4 style="font-weight: bold;">{{number_format($ticketItem['ticket']->ticket_price)}}đ</h4>
            </li>
        </ul>
        <div class="order_total">
            <h4 style="font-weight: bold;">Tổng giá vé</h4>
            <h4 style="font-weight: bold;">{{number_format($ticketItem['ticket']->ticket_price)}}đ</h4>
        </div>
    </div>
</div>