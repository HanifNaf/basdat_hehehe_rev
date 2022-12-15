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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('total_price');
            $table->string('payment_type');
            $table->string('person_name');
            $table->integer('age');
            $table->string('gender');
            $table->string('city');
            $table->string('email');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            
            // $table->foreign('order_id')->references('order_id')->on('orderitems')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
};
