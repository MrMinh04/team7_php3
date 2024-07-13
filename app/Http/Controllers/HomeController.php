<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // dd(12345);
        // $title = "Trang chủ";
        // return view('clients.index',['title' => $title]);
        $data = [];
        $data['title'] = "Trang chủ";
        $data['text'] = "Đây là trang client";
        $data['content'] = "<u>Lớp WD18316</u>";
        $data['dataArr'] = [
            'Item1',
            'Item2',
            'Item3',
        ];
        return view('clients.index', $data);
    }
}
