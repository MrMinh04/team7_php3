<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KhachHang extends Model
{
    use HasFactory;
    public function getList(){
        $listKhachHang = DB::table('khach_hangs')
        ->orderBy('id', 'ASC')
        ->get();
        return $listKhachHang;
    }
    public function createKhachHang($data){
        DB::table('khach_hangs')->insert($data);
    }
}
