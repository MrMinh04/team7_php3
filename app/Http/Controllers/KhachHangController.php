<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    //Danh sách khách hàng
    public function admin_danh_sach(){
        $data = [];
        $data['title'] = "Danh sách khách hàng";
        return view('admins.khachhang.danh_sach', $data);
    }

    //Thêm khách hàng
    public function admin_them(){
        $data = [];
        $data['title'] = "Thêm khách hàng";
        return view('admins.khachhang.them', $data);
    }

    //Chỉnh sửa khách hàng
    public function admin_sua(){
        $data = [];
        $data['title'] = "Chỉnh sửa khách hàng";
        return view('admins.khachhang.sua', $data);
    }
}
