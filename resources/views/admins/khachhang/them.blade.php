@extends ('layouts.admin')


@section('title')
    {{-- Hiển thị dữ liệu trong blade --}}
    {{ $title }}
@endsection

@section('content')
<h1 class="h1 text-center mt-3 mb-3"><?= $title ?></h1>
<form action="{{route('khach_hang.store')}}" method="POST" class="container">
    @csrf
    <div class="mb-3 mt-3">
        <label class="form-label">Mã khách hàng:</label>
        <input type="text" class="form-control" name="ma_khach_hang" placeholder="Nhập mã khách hàng">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Họ và tên:</label>
        <input type="text" class="form-control" name="ten_khach_hang" placeholder="Nhập họ và tên">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Tuổi:</label>
        <input type="number" class="form-control" name="tuoi" placeholder="Nhập tuổi">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Số điện thoại:</label>
        <input type="tel" class="form-control" name="sdt" placeholder="Nhập số điện thoại">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Ngày sinh:</label>
        <input type="date" class="form-control" name="ngay_sinh" placeholder="Nhập ngày sinh">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Địa chỉ:</label>
        <input type="text" class="form-control" name="dia_chi" placeholder="Nhập địa chỉ">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Trạng thái:</label>
        <input type="text" class="form-control" name="trang_thai" placeholder="Nhập trạng thái">
    </div>
    <div class="mb-3 d-flex justify-content-center">
        <button type="reset" class="btn btn-outline-secondary me-3">Nhập lại</button>
        <button type="submit" class="btn btn-success">Thêm mới</button>
    </div>
</form>
@endsection