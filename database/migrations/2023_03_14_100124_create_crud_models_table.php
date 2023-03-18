<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud_models', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->text('description')->nullable();
            $table->text('hobby')->nullable();
            $table->string('gender',100)->nullable();
            $table->bigInteger('role')->nullable();
            $table->string('image',100)->nullable();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });


        Schema::create('crud_hobby_crud_model', function (Blueprint $table) {
            $table->id();
           $table->bigInteger('crud_hobby_id')->nullable();
           $table->bigInteger('crud_model_id')->nullable();
            $table->timestamps();
        });
        Schema::create('crud_model_user_role', function (Blueprint $table) {
            $table->id();
           $table->bigInteger('crud_model_id')->nullable();
           $table->bigInteger('user_role_id')->nullable();
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
        Schema::dropIfExists('crud_models');
        Schema::dropIfExists('crud_hobby_crud_model');
        Schema::dropIfExists('crud_model_user_role');
    }
}
