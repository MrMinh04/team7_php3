<?php

use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhachHangController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Sử dụgn Route để trỏ đến view
// Route::get('/hello', function () {
//     return view('xinchao');
// });


// 
// Route::view('/hello', 'xinchao mày');

// Truyền dữ liệu sang view
// Route::get('/hello', function () {
//     $title = "Nguyễn Văn Minh";
//     $text = "đẹp trai";
//     return view('xinchao', ['title' => $title, 'text' => $text]);
// });

// Route:: view('/hello', 'xinchao', [
//     'title' => 'Hi HI xin chào',
//     'text' => 'Chào mày'
// ]);

//Tạo 1 route trỏ đến 1 hàm trong controller

Route::get('/admin/khach_hang', [KhachHangController::class, 'admin_danh_sach']);

Route::get('/admin/them_khach_hang', [KhachHangController::class, 'admin_them']);

Route::get('/admin/sua_khach_hang', [KhachHangController::class, 'admin_sua']);

Route::get('/home', [HomeController::class, 'index']);

// Route resource
Route::get('san_pham/test', [SanPhamController::class, 'test'])->name('sanpham.test');//(Phải đặt bên trên resource)
Route::resource('san_pham', SanPhamController::class);
