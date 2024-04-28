<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('order_code');
            $table->integer('subtotal');
            $table->string('payment_method');
            $table->string('shipping_method');
            $table->bigInteger('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('user_address')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('buyer_name');
            $table->string('buyer_email');
            $table->string('buyer_telp');
            $table->string('bukti_bayar');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};
