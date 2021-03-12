<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignAllAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice', function (Blueprint $table) {
            $table->foreign('form1_id')->references('id')->on('form1');
            $table->foreign('form2_id')->references('id')->on('form2');
            $table->foreign('form3_id')->references('id')->on('form3');
            $table->foreign('form4_id')->references('id')->on('form4');
            $table->foreign('form5_id')->references('id')->on('form5');
        });
        Schema::table('invoice_items', function (Blueprint $table) {
            $table->foreign('form4_id')->references('id')->on('form4');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_all_add');
    }
}
