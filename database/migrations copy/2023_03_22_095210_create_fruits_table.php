<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fruits', function (Blueprint $table) {
            $table->id();
            $table->string('fruits_name',100)->nullable();
            $table->integer('price')->nullable();
            $table->string('image')->nullable();
            $table->string('description',100)->nullable();

            $table->timestamps();
        });

        Schema::create('fruits_shop', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fruits_id')->nullable();
            $table->bigInteger('shop_id')->nullable();

           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fruits');
        Schema::dropIfExists('fruits_shop');
    }
}
