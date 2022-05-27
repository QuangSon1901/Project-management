
<?php $__env->startSection('contentAdmin'); ?>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách tài khoản người dùng</h4>
                <div class="form-inline" style="justify-content: end;">
                    <div class="input-group ml-2" id="searchUserForm">
                        <input type="text" class="form-control" style="height: 40px;" name="search" id="searchUserInput" placeholder="Tìm kiếm mọi thứ">
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-primary" id="searchUserBtn" type="buttom"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">
                                    Avatar
                                </th>
                                <th>
                                    Họ tên
                                </th>
                                <th>
                                    Email
                                </th>
                                <th style="text-align: center;">
                                    Hiện trạng
                                </th>
                                <th style="text-align: center;">
                                    Thao tác
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="py-1" style="text-align: center;">
                                    <?php if(isset($item->avatar)): ?>
                                    <img src="<?php echo e(URL::to('/upload/'.$item->avatar)); ?>" />
                                    <?php else: ?>
                                    <img src="<?php echo e(Avatar::create($item->name)->toBase64()); ?>" />
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo e($item->name); ?>

                                </td>
                                <td>
                                    <?php echo e($item->email); ?>

                                </td>
                                <td style="text-align: center;" class="statusUser" id="status" data-id="<?php echo e($item->id); ?>">
                                    <b style="cursor: pointer;" class="text-primary <?php if($item->status != 1): ?> hidden <?php endif; ?>">Đang hoạt động</b>
                                    <b style="cursor: pointer;" class="text-danger <?php if($item->status != 0): ?> hidden <?php endif; ?>">Đã khóa</b>
                                </td>
                                <td style="text-align: center;">
                                    <button type="button" class="btn-sm btn-warning btn-icon-text reset_pass" data-id="<?php echo e($item->id); ?>">
                                        <i class="ti-reload btn-icon-prepend"></i>
                                        Reset Pass
                                    </button>
                                    <button type="button" class="btn-sm btn-danger btn-icon-text del_user" data-id="<?php echo e($item->id); ?>">
                                        <i class="ti-trash btn-icon-prepend"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="paginate_class">
                    <?php echo $userList->links(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Paginate
    $('.pagination a').unbind('click').on('click', function(e) {
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        getPosts(page);
    });

    function getPosts(page) {
        $.pjax({
            type: 'get',
            url: 'user?page=' + page,
            container: '#contentAdmin',
            timeout: 9000000,
        })
    }

    // Change status
    $(document).ready(function() {
        $('.statusUser').click(function() {
            let row = this;
            let id = $(this).data('id');

            $.ajax({
                url: 'user/change-status-user',
                type: 'get',
                data: {
                    id: id
                },
                success: function(res) {
                    if (res.status === 403) {
                        swal('Thông báo', res.msg, 'error');
                    }
                    if (res.status === 1) {
                        let data = $(row).parents('tr').find('td');
                        data.eq(3).html(`
                            <b style="cursor: pointer;" class="text-primary">Đang hoạt động</b>
                            `);
                    }
                    if (res.status === 0) {
                        let data = $(row).parents('tr').find('td');
                        data.eq(3).html(`
                            <b style="cursor: pointer;" class="text-danger">Đã khóa</b>
                            `);
                    }
                }
            });
        });
    });

    // Reset pass
    $(document).ready(function() {
        $('.reset_pass').click(function() {
            var id = $(this).data('id');

            Swal.fire({
                title: 'Thông báo',
                text: "Bạn có chắc chắn muốn cài lại mật khẩu ban đầu?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'user/reset-pass',
                        type: 'get',
                        data: {
                            id: id
                        },
                        success: function(res) {
                            if (res.status === 403) {
                                swal('Thông báo', res.msg, 'error');
                            }
                            if (res.status === 200) {
                                swal('Thông báo', res.msg + ' Mật khẩu mới là ' + res.newpass, 'success');
                            }
                        }
                    });
                }
            })
        });
    });

    // Del
    $(document).ready(function() {
        $('.del_user').click(function() {
            var row = this;
            var id = $(this).data('id');

            Swal.fire({
                title: 'Thông báo',
                text: "Bạn có chắc chẵn muốn xóa người dùng này?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'user/del-user',
                        type: 'get',
                        data: {
                            id: id
                        },
                        success: function(res) {
                            if (res.status === 403) {
                                swal('Thông báo', res.msg, 'error');
                            }
                            if (res.status === 200) {
                                swal('Thông báo', res.msg, 'success');
                                $(row).closest('tr').css('background', 'tomato');
                                $(row).closest('tr').fadeOut(800, function() {
                                    $(this).remove();
                                });
                            }
                        }
                    });
                }
            })
        });
    });

    // Search
    $(document).ready(function() {
        $('#searchUserBtn').click(function() {
            $.pjax({
                type: 'get',
                url: '/admin/user/search',
                data: {
                    search: $('#searchUserInput').val(),
                },
                container: '#contentAdmin',
                timeout: 9000000,
            })
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/admin_page/account/user.blade.php ENDPATH**/ ?>