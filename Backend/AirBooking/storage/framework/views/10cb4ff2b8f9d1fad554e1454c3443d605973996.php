<?php echo e(View::make('admin_page.header')); ?>


<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo" style="text-align: center;">
                <img src="<?php echo e(asset('admin_asset/images/logo-bus-qsc.png')); ?>" alt="logo">
              </div>
              <h4 style="text-align: center;">Đăng nhập</h4>
              <h6 class="font-weight-light" style="text-align: center;">Đăng nhập để tiếp tục.</h6>
              <form class="pt-3" id="adminLoginForm">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="inputEmail" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="inputPassword" id="inputPassword" placeholder="Mật khẩu">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <!-- <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Nhớ mật khẩu
                    </label> -->
                  </div>
                  <a href="#" class="auth-link text-black">Quên mật khẩu?</a>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Đăng nhập</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script>
    $(document).ready(function() {
      $('#adminLoginForm').submit(function(e) {
        e.preventDefault();
        let data = {
          '_token': $(this).find('input[name="_token"]').val(),
          'email': $(this).find('input[name="inputEmail"]').val(),
          'password': $(this).find('input[name="inputPassword"]').val(),
        }
        $.ajax({
          url: '/admin/login',
          type: 'post',
          data: data,
          success: function(res) {
            if (res.status === 403) {
              swal('Thông báo', res.msg, 'error');
            }
            if (res.status === 200) {
              swal('Thông báo', res.msg, 'success');
              setTimeout(function() {
                window.location.reload();
              }, 500);
            }
          }
        })
      })
    })
  </script>



  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo e(asset('admin_asset/vendors/js/vendor.bundle.base.js')); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo e(asset('admin_asset/js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('admin_asset/js/hoverable-collapse.js')); ?>"></script>
  <script src="<?php echo e(asset('admin_asset/js/template.js')); ?>"></script>
  <script src="<?php echo e(asset('admin_asset/js/settings.js')); ?>"></script>
  <script src="<?php echo e(asset('admin_asset/js/todolist.js')); ?>"></script>
  <!-- endinject -->

</body>

</html><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/admin_page/login/login_layout.blade.php ENDPATH**/ ?>