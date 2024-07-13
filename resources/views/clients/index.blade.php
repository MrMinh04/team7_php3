{{-- extends dùng để kế thừa master layout --}}
@extends('layouts.client')
{{-- -------------------------------------------------------------- --}}



{{-- @section('title')
    Trang chủ
@endsection --}}

@section('title')
    {{-- Hiển thị dữ liệu trong blade --}}
    {{ $title }}
@endsection


@section('css')
    {{-- Những thư viện hoặc file dùng riêng được đặt ở đây --}}
    <link rel="stylesheet" href="{{ asset('assets/clients/css/index.css') }}">
@endsection


{{-- @section để định nghĩa nội dung của section --}}
@section('content')
    <h1 class="text-danger">{{ $text }}</h1>
    <p>Chào mừng đến với bình nguyên vô tận</p>
    {{-- Phiên dịch mã html --}}
    <h1>{!! $content !!}</h1>
    <button onclick="onSubmit()">Submit</button>

    {{-- CÁC CẤU TRÚC TRONG BLADE --}}
        {{-- Viết 1 đoạn php --}}
        @php
            $flag = true;
        @endphp
        {{-- Viết 1 đoạn vòng lặp for --}}
        @for ($i = 1; $i < 3; $i++)
            <p>Phần tử: {{ $i }}</p>
        @endfor
        {{-- Vòng lặp foreach --}}
        @foreach ($dataArr as $item)
            <p>Phần tử: {{ $item }}</p>
        @endforeach
        <hr>
        {{-- forelse trong blade --}}
        @forelse ($dataArr as $item)
            <p>Phần tử: {{ $item }}</p>
        @empty
            <p>Không có phần tử nào trong mảng thì sẽ chạy phần này</p>
        @endforelse
        {{-- Cấu trúc rẽ nhánh --}}
            {{-- Câu điều kiện if --}}
            @if ($flag)
                <p>Điều kiện đúng</p>
            @endif
            {{-- Câu điều kiện if-else --}}
            @if ($flag)
                <p>Điều kiện đúng</p>
            @else
                <p>Điều kiện sai</p>
            @endif
@endsection


@section('js')
    <script>
        function onSubmit() {
            alert(12345);
        }
    </script>
@endsection
