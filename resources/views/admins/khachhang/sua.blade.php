@extends ('layouts.admin')


@section('title')
    {{-- Hiển thị dữ liệu trong blade --}}
    {{ $title }}
@endsection

@section('content')
<h1 class="h1 text-center mt-3 mb-3"><?= $title ?></h1>
<form class="container">
    <div class="mb-3 mt-3">
        <label class="form-label">Họ và tên:</label>
        <input type="text" class="form-control" placeholder="Nhập họ và tên">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Tuổi:</label>
        <input type="text" class="form-control" placeholder="Nhập tuổi">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Số điện thoại:</label>
        <input type="text" class="form-control" placeholder="Nhập số điện thoại">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Ngày sinh:</label>
        <input type="text" class="form-control" placeholder="Nhập ngày sinh">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Địa chỉ:</label>
        <input type="text" class="form-control" placeholder="Nhập địa chỉ">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Trạng thái:</label>
        <input type="text" class="form-control" placeholder="Nhập trạng thái">
    </div>
</form>
@endsection