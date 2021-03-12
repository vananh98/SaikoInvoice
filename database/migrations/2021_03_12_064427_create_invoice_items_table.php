<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form4_id')->nullable();
            $table->string('ten_hang_hoa_dich_vu')->nullable();
            $table->string('don_vi_tinh')->nullable();
            $table->unsignedInteger('so_luong')->nullable();
            $table->unsignedDecimal('don_gia',18,3)->nullable();
            $table->unsignedDecimal('thanh_tien',18,3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_items');
    }
}
