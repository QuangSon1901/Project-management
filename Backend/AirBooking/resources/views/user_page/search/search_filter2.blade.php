@php
$dateList = Session::get('dateList');
@endphp
<div class="content_ticket-date">
    <div class="ticket_date swiper mySwiper">
        <div class="arrow ticket_date-arrow-left swiper-button-prev">
            <i class="fa-solid fa-angle-left"></i>
        </div>
        <div class="arrow ticket_date-arrow-right swiper-button-next">
            <i class="fa-solid fa-angle-right"></i>
        </div>
        <div class="ticket_slider swiper-wrapper">
            @foreach($dateList as $item)
            <div style="text-align: center;" data-filter="{{$item}}" class="ticket_date-group swiper-slide @if($item == $_GET['dateFromInput']) ticket_date--active @endif">
                <h3 class="ticket_date-date">{{date('d', strtotime($item))}} tháng {{date('m', strtotime($item))}}</h3>
                <h3 class="ticket_date-price">1000.000đ</h3>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="content_ticket-sort">
    <div class="ticket_sort-list">
        <label> <input type="radio" name="ticket_sort-input" checked class="ticket_sort-input">
            <div class="ticket_sort-item">Đề xuất<i class="fa-solid fa-sort"></i>
            </div>
        </label>
        <label> <input type="radio" name="ticket_sort-input" class="ticket_sort-input">
            <div class="ticket_sort-item">Giá tăng dần<i class="fa-solid fa-sort"></i>
            </div>
        </label>
        <label> <input type="radio" name="ticket_sort-input" class="ticket_sort-input">
            <div class="ticket_sort-item">Thời gian cất cánh<i class="fa-solid fa-sort"></i></div>
        </label>
        <label> <input type="radio" name="ticket_sort-input" class="ticket_sort-input">
            <div class="ticket_sort-item">Thời gian bay<i class="fa-solid fa-sort"></i>
            </div>
        </label>
    </div>
</div>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        slidesPerGroup: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>