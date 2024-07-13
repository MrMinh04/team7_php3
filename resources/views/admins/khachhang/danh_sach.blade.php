@extends ('layouts.admin')


@section('css')

@endsection

@section('title')
    {{-- Hiển thị dữ liệu trong blade --}}
    {{ $title }}
@endsection

@section('content')
    <h1 class="h1 text-center mt-3 mb-3">{{ $title }}</h1>
    <div class="container mt-3">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Tuổi</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ngày sinh</th>
                    <th style="width: 1px;" class="text-nowrap">
                        <a style="width: 100%;" class="btn btn-success btn-sm" href="them_khach_hang">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>KH001</td>
                    <td>Nguyễn Văn Minh</td>
                    <td>20</td>
                    <td>0395110845</td>
                    <td>Bắc Giang</td>
                    <td>17/03/2004</td>
                    <td style="width: 1px;" class="text-nowrap">
                        <a class="btn btn-primary btn-sm" href="">Xem</a>
                        <a class="btn btn-warning btn-sm" href="">Sửa</a>
                        <a class="btn btn-danger btn-sm" href="">Xoá</a>
                    </td>
                </tr>
                <tr>
                    <td>KH002</td>
                    <td>Nguyễn Đinh Thuỳ Linh</td>
                    <td>20</td>
                    <td>0395110845</td>
                    <td>Bắc Giang</td>
                    <td>17/03/2004</td>
                    <td style="width: 1px;" class="text-nowrap">
                        <a class="btn btn-primary btn-sm" href="">Xem</a>
                        <a class="btn btn-warning btn-sm" href="">Sửa</a>
                        <a class="btn btn-danger btn-sm" href="">Xoá</a>
                    </td>
                </tr>
                <tr>
                    <td>KH003</td>
                    <td>Nguyễn Văn Mạnh</td>
                    <td>20</td>
                    <td>0395110845</td>
                    <td>Bắc Giang</td>
                    <td>17/03/2004</td>
                    <td style="width: 1px;" class="text-nowrap">
                        <a class="btn btn-primary btn-sm" href="">Xem</a>
                        <a class="btn btn-warning btn-sm" href="">Sửa</a>
                        <a class="btn btn-danger btn-sm" href="">Xoá</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
