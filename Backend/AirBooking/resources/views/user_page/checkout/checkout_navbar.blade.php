<header class="header" style="border: 1px solid var(--border-color);">
    <div class="grid">
        <div class="navbar">
            <div class="navbar__logo">
                <a href="#" class="navbar__logo-link">
                    <img src="assets/img/logo-bus-qsc.png" class="navbar__logo-img" alt="Logo Bus">
                </a>
            </div>
            <div class="navbar__select">
                <ul class="navbar__category" style="flex: 1; justify-content:center">
                    <li style="pointer-events: none;" class="navbar__category-item navbar__step-item--active">
                        <a href="#" class="navbar__category-link">
                            <span class="checkout-step-icon">1</span>
                            Thông tin hành khách
                        </a>
                    </li>
                    <li style="pointer-events: none;" class="navbar__category-item">
                        <a href="#" class="navbar__category-link">
                            <span class="checkout-step-icon">2</span>
                            Thanh toán
                        </a>
                    </li>
                    <li style="pointer-events: none;" class="navbar__category-item">
                        <a href="#" class="navbar__category-link">
                            <span class="checkout-step-icon">3</span>
                            Hoàn thành
                        </a>
                    </li>
                </ul>

                <ul class="navbar__category">
                    <li class="navbar__category-item">
                        <a href="#" class="navbar__category-link">
                            <i class="navbar__category-icon fas fa-headset"></i>
                            Liên hệ
                        </a>
                    </li>
                    @auth
                    <li class="navbar__category-item navbar__category-info">
                        <div class="navbar__category-link navbar__category-info-link">
                            <img src="{{URL::to('upload/'.auth()->user()->avatar)}}" class="navbar__category-info-img" alt="">
                            {{ auth()->user()->name }}
                        </div>
                        <div class="navbar__category-info-dropdown" style="min-width: 200px;">
                            <ul>
                                <li>
                                    <a href="/info">
                                        <i class="fa-solid fa-user"></i>
                                        Hồ sơ
                                    </a>
                                </li>
                                <li>
                                    <a href="/info/order">
                                        <i class="fas fa-plane-departure"></i>
                                        Vé máy bay
                                    </a>
                                </li>
                                <li>
                                    <a href="/logout">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        Đăng xuất
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @else
                    <li class="navbar__category-item" id="btn_login">
                        <a class="navbar__category-link">
                            <i class="navbar__category-icon fas fa-user"></i>
                            Đăng nhập / Đăng ký
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</header>