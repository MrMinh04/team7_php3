<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public $khach_hangs;
    public function __construct()
    {
        $this->khach_hangs = new KhachHang();
    }
    public function index()
    {
        $listKhachHang = $this->khach_hangs->getList();
        $title = "Danh sách khách hàng";
        return view('admins/khachhang/danh_sach', compact('listKhachHang', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm khách hàng";
        return view('admins.khachhang.them', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            //Cách 1
            // $params = $request->post();
            // unset($params['_token']);
            // dd($params);

            // Cách 2:
            $params = $request->except('_token');
            $this->khach_hangs->createKhachHang($params);
            return redirect()->route('khach_hang.index')->with('success', 'Thêm sản phẩm thành công');
            // dd($params);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
