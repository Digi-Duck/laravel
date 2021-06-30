<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->integer('user_id')->nullable();
            $table->string('order_no');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('county');
            $table->string('district');
            $table->string('zipcode');
            $table->string('address');
            $table->integer('price');
            $table->string('pay_type');
            $table->integer('is_paid')->default(0);
            $table->string('shipping');
            $table->integer('shipping_fee');
            $table->integer('shipping_status_id');
            $table->integer('order_status_id');
            $table->longText('remark')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
