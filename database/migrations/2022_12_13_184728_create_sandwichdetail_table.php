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
        Schema::create('sandwichdetail', function (Blueprint $table) {
            $table->id();
            $table->string('sandwich_id');
            $table->string('bread');
            $table->string('size');
            $table->json('extras');
            $table->json('veggies');
            $table->json('sauces');
            $table->timestamps();

            $table->foreign('sandwich_id')->references('unique_id')->on('sandwich');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sandwichdetail');
    }
};
