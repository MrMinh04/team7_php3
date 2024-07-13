<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_khach_hang', 10)->unique();
            //unique: dữ liệu không được phép trùng nhau 
            $table->string('ten_khach_hang', 30);
            $table->tinyInteger('tuoi');
            $table->string('sdt');
            $table->text('dia_chi');
            $table->date('ngay_sinh');
            $table->boolean('trang_thai')->default(0);
            //defaul xét các giá trị mặc định
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
