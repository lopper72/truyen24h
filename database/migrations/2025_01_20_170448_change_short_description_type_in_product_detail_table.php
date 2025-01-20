<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('product_detail', function (Blueprint $table) {
            $table->text('short_description')->change(); // Thay đổi kiểu dữ liệu cột
        });
    }

    public function down()
    {
        Schema::table('product_detail', function (Blueprint $table) {
            $table->string('short_description')->change(); // Khôi phục kiểu dữ liệu cũ nếu cần
        });
    }
};
