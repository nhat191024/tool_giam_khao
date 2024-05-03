@extends('admin/master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Quản lý user</h1>
        <a href="{{ route('admin.add') }}" class="btn btn-success mb-3">Thêm user</a>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách user</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Họ tên</th>
                                <th>Tài khoản</th>
                                <th>Hình ảnh</th>
                                <th>Quyền</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Họ tên</th>
                                <th>Tài khoản</th>
                                <th>Hình ảnh</th>
                                <th>Quyền</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $item['ho_ten'] }}</td>
                                    <td>{{ $item['tai_khoan'] }}</td>
                                    <td>{{ $item['hinh_anh'] }}</td>
                                    <td>{{ $item['quyen'] }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
