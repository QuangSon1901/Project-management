@extends('admin_layout')
@section('contentAdmin')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tổng quan</h3>
                <h6 class="font-weight-normal mb-0">Tất cả các hệ thống đang hoạt động trơn tru! Bạn có <span class="text-primary">3 thông báo mới!</span></h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
            <div class="card-people mt-auto" style="padding: 0;">
                <img src="{{asset('admin_asset/images/dashboard/people.svg')}}" alt="people">
                <div class="weather-info">
                    <div class="d-flex">
                        <div>
                            <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                        </div>
                        <div class="ml-2">
                            <h4 class="location font-weight-normal">Hồ Chí Minh</h4>
                            <h6 class="font-weight-normal">Việt Nam</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
        <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Số lượng đơn hàng hôm nay</p>
                        <p class="fs-30 mb-2">4.006</p>
                        <p>10.000 đơn (30 ngày gần đây)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Tổng giá đơn hàng hôm nay</p>
                        <p class="fs-30 mb-2">135.456.000đ</p>
                        <p>24.234.563.134đ (30 ngày gần đây)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Number of Meetings</p>
                        <p class="fs-30 mb-2">34040</p>
                        <p>2.00% (30 ngày gần đây)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Number of Clients</p>
                        <p class="fs-30 mb-2">47033</p>
                        <p>0.22% (30 ngày gần đây)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection