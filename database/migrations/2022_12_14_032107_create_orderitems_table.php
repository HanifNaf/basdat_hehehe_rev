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
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->string('product_id');
            $table->integer('product_type_id');
            $table->string('product_name');
            $table->integer('product_price');
            $table->string('product_image');
            $table->integer('product_quantity');
            $table->string('bread')->nullable();
            $table->json('size')->nullable();
            $table->json('extras')->nullable();
            $table->json('veggies')->nullable();
            $table->json('sauces')->nullable();
            $table->date('order_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderitems');
    }
};
