<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form5', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nguoi_chuyen_doi')->nullable();
            $table->string('nguoi_mua_hang')->nullable();
            $table->string('nguoi_ban_hang')->nullable();
            $table->string('ngay_chuyen_doi')->nullable();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form5');
    }
}
