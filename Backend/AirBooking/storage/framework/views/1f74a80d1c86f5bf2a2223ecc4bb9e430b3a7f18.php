<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="<?php echo e(asset('admin_asset/images/logo.svg')); ?>" style="height: 50px;" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo e(asset('admin_asset/images/logo-mini.svg')); ?>" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="icon-bell mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Thông báo</p>
          <?php $__currentLoopData = $notifyList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Tin nhắn hỗ trợ</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                <?php echo e($item->contact_comment); ?>

              </p>
            </div>
          </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="<?php echo e(asset('admin_asset/images/faces/face28.jpg')); ?>" alt="profile" />
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-user text-primary"></i>
            Hồ sơ
          </a>
          <a class="dropdown-item">
            <i class="ti-settings text-primary"></i>
            Cài đặt
          </a>
          <a class="dropdown-item" href="/admin/logout">
            <i class="ti-power-off text-primary"></i>
            Đăng xuất
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/admin_page/navbar.blade.php ENDPATH**/ ?>