<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('don_vi_ban_hang')->nullable();
            $table->string('ma_so_thue')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('dien_thoai')->nullable();
            $table->string('so_tai_khoan')->nullable();
            $table->string('ngan_hang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form2');
    }
}
