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
                    <th>Stt</th>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Tuổi</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ngày sinh</th>
                    <th>Trạng thái</th>
                    <th style="width: 1px;" class="text-nowrap">
                        <a style="width: 100%;" class="btn btn-success btn-sm" href="{{route('khach_hang.create')}}">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listKhachHang as $index => $item) 
                <tr>
                    <th>{{$index +1}}</th>
                    <td>{{$item->ma_khach_hang}}</td>
                    <td>{{$item->ten_khach_hang}}</td>
                    <td>{{$item->tuoi}}</td>
                    <td>{{$item->sdt}}</td>
                    <td>{{$item->dia_chi}}</td>
                    <td>{{$item->ngay_sinh}}</td>
                    <td>{{$item->trang_thai == 1 ? 'Hoạt động' : 'Tạm dừng'}}</td>
                    <td style="width: 1px;" class="text-nowrap">
                        <a class="btn btn-primary btn-sm" href="">Xem</a>
                        <a class="btn btn-warning btn-sm" href="">Sửa</a>
                        <a class="btn btn-danger btn-sm" href="">Xoá</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
