<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form4', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedDecimal('cong_tien_hang',18,3)->nullable();
            $table->unsignedInteger('thue_suat_gtgt',0,99)->nullable();
            $table->unsignedDecimal('tien_thue_gtgt',18,3)->nullable();
            $table->unsignedDecimal('tong_cong_tien_thanh_toan',18,3)->nullable();
            $table->string('so_tien_viet_bang_chu')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form4');
    }
}
