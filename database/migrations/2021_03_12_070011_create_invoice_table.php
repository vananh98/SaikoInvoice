<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form1_id')->nullable();
            $table->unsignedBigInteger('form2_id')->nullable();
            $table->unsignedBigInteger('form3_id')->nullable();
            $table->unsignedBigInteger('form4_id')->nullable();
            $table->unsignedBigInteger('form5_id')->nullable();
            $table->string('path_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}
