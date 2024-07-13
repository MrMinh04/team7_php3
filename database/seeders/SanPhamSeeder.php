<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sử dụgn query builder để thêm sữ liệu mẫu

        //Tìm hiểu tạo dữ liệu mẫu bằng faker trong Laravel
        
        DB::table('san_phams')->insert(
            [
                [
                    'ma_san_pham' => 'SP001',
                    'ten_san_pham' => 'iPhone 15',
                    'gia' => 10000,
                    'so_luong' => 10,
                    'ngay_nhap' => '2024-11-20',
                    'mo_ta' => 'Mô tả sản phẩm',
                    'trang_thai' => true
                ],
                [
                    'ma_san_pham' => 'SP002',
                    'ten_san_pham' => 'iPhone 14',
                    'gia' => 20000,
                    'so_luong' => 10,
                    'ngay_nhap' => '2024-11-20',
                    'mo_ta' => 'Mô tả sản phẩm',
                    'trang_thai' => true
                ]
            ]
        );
    }
}
