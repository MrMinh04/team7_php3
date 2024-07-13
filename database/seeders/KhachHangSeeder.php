<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->insert(
            [
                [
                    'ma_khach_hang' => 'KH001',
                    'ten_khach_hang' => 'Nguyễn Văn Minh',
                    'tuoi' => 20,
                    'sdt' => '0395110845',
                    'dia_chi' => 'Bắc Giang',
                    'ngay_sinh' => '2004-03-17',
                    'trang_thai' => true
                ],
                [
                    'ma_khach_hang' => 'KH002',
                    'ten_khach_hang' => 'Nguyễn Văn Mạnh',
                    'tuoi' => 20,
                    'sdt' => '0395110545',
                    'dia_chi' => 'Bắc Giang',
                    'ngay_sinh' => '2004-03-20',
                    'trang_thai' => true
                ]
            ]
        );
    }
}
