<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tieu_de')->nullable();
            $table->string('noi_dung')->nullable();
            $table->string('mau_so')->nullable();
            $table->string('ky_hieu')->nullable();
            $table->string('so')->nullable();
            $table->string('ngay_thang_nam')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form1');
    }
}
