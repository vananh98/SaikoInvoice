<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ho_ten_nguoi_mua')->nullable();
            $table->string('ten_don_vi')->nullable();
            $table->string('ma_so_thue')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('hinh_thuc_thanh_toan')->nullable();
            $table->string('so_tai_khoan')->nullable();
            $table->string('ghi_chu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form3');
    }
}
