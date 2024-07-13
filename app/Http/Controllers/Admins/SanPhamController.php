<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    // Sử dụng khi dùng Raw Query hoặc Query Builder
    public $san_phams;
    public function __construct()
    {
        $this->san_phams = new SanPham();
    }
    // /**
    //  * Display a listing of the resource.
    //  */
    public function index()
    {
        //Lấy dữ liệu của sản phẩm
        // $listSanPham = $this->san_phams->getList(); (Sử dụng Raw Query hoặc Query Builder)

        // Sử dụng Eloquent
        // $title = "Danh sách sản phẩm";
        $listSanPham = SanPham::get();
        $title = "Danh sách sản phẩm";
        return view('admins/sanpham/index', compact('listSanPham','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //hiển thị form nhập 
    {
        $title = "Thêm sản phẩm";
        return view('admins.sanpham.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //gửi yêu cầu của người dùng lên server
    {
        // Xem dữ liệu đẩy lên
        // $params = $request->post();
        // dd($params);

        if ($request->isMethod('POST')) {
            //Cách 1
            // $params = $request->post();
            // unset($params['_token']);
            // dd($params);

            // Cách 2:
            $params = $request->except('_token');
            $this->san_phams->createProduct($params);
            return redirect()->route('san_pham.index')->with('success', 'Thêm sản phẩm thành công');
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

    //Phương thức mới
    public function test()
    {
        dd('Đây là phương thức mới');
    }
}
