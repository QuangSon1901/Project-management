@extends('admin_layout')
@section('contentAdmin')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách tài khoản người dùng</h4>
                <div class="form-inline" style="justify-content: end;">
                    <div class="input-group ml-2">
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-primary" type="button"><i class="ti-plus"></i></button>
                        </div>
                        <input type="text" class="form-control" style="height: 40px;" id="inlineFormInputGroupUsername2" placeholder="Username">
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-primary" type="button"><i class="ti-search"></i></button>
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
                            @foreach($userList as $item)
                            <tr>
                                <td class="py-1" style="text-align: center;">
                                    <img src="{{URL::to('/upload/'.$item->avatar)}}" />
                                </td>
                                <td>
                                    {{$item->name}}
                                </td>
                                <td>
                                    {{$item->email}}
                                </td>
                                <td style="text-align: center;" class="statusUser" id="status" data-id="{{$item->id}}">
                                    <b style="cursor: pointer;" class="text-primary @if($item->status != 1) hidden @endif">Đang hoạt động</b>
                                    <b style="cursor: pointer;" class="text-danger @if($item->status != 0) hidden @endif">Đã khóa</b>
                                </td>
                                <td style="text-align: center;">
                                    <button type="button" class="btn-sm btn-warning btn-icon-text reset_pass" data-id="{{$item->id}}">
                                        <i class="ti-reload btn-icon-prepend"></i>
                                        Reset Pass
                                    </button>
                                    <button type="button" class="btn-sm btn-dark btn-icon-text">
                                        <i class="ti-file btn-icon-append"></i>
                                        Review
                                    </button>
                                    <button type="button" class="btn-sm btn-danger btn-icon-text del_user" data-id="{{$item->id}}">
                                        <i class="ti-trash btn-icon-prepend"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            {!! $userList->links() !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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

    // Del pass
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
</script>
@endsection