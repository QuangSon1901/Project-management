<header class="header" style="border: 1px solid var(--border-color);">
    <div class="grid">
        <div class="navbar">
            <div class="navbar__logo">
                <a href="/" class="navbar__logo-link">
                    <img src="<?php echo e(asset('user_asset/assets/img/logo-bus-qsc.png')); ?>" class="navbar__logo-img" alt="Logo Bus">
                </a>
            </div>
            <div class="navbar__select">
                <ul class="navbar__category">
                    <li class="navbar__category-item navbar__category-item--active">
                        <a href="#" class="navbar__category-link">
                            <i class="navbar__category-icon fas fa-plane-departure"></i>
                            Máy bay
                        </a>
                    </li>
                    <li class="navbar__category-item">
                        <a href="#" class="navbar__category-link">
                            <i class="navbar__category-icon fas fa-subway"></i>
                            Tàu hỏa
                        </a>
                    </li>
                    <li class="navbar__category-item">
                        <a href="#" class="navbar__category-link">
                            <i class="navbar__category-icon fas fa-bus-alt"></i>
                            Xe khách
                        </a>
                    </li>
                    <li class="navbar__category-item ">
                        <a href="#" class="navbar__category-link">
                            <i class="navbar__category-icon fas fa-hotel"></i>
                            Khách sạn
                        </a>
                    </li>
                </ul>

                <ul class="navbar__category">
                    <li class="navbar__category-item">
                        <a href="#" class="navbar__category-link">
                            <i class="navbar__category-icon fab fa-buffer"></i>
                            Dịch vụ
                        </a>
                    </li>
                    <li class="navbar__category-item">
                        <a href="#" class="navbar__category-link">
                            <i class="navbar__category-icon fas fa-headset"></i>
                            Liên hệ
                        </a>
                    </li>
                    <?php if(auth()->guard()->check()): ?>
                    <li class="navbar__category-item navbar__category-info">
                        <div class="navbar__category-link navbar__category-info-link">
                            <?php if(isset(auth()->user()->avatar)): ?>
                            <img src="<?php echo e(URL::to('upload/'.auth()->user()->avatar)); ?>" class="navbar__category-info-img">
                            <?php else: ?>
                            <img src="<?php echo e(Avatar::create(auth()->user()->name)->toBase64()); ?>" class="navbar__category-info-img"/>
                            <?php endif; ?>
                            <?php echo e(auth()->user()->name); ?>

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
                    <?php else: ?>
                    <li class="navbar__category-item" id="btn_login">
                        <a class="navbar__category-link">
                            <i class="navbar__category-icon fas fa-user"></i>
                            Đăng nhập / Đăng ký
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</header><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/navbar.blade.php ENDPATH**/ ?>