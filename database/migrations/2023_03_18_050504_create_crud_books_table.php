<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud_books', function (Blueprint $table) {
            $table->id();
            $table->string('bookstitle',100)->nullable();
            $table->string('booksauthor',100)->nullable();
            $table->string('booksimage')->nullable();
            $table->string('bookspublication',100)->nullable();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });


        Schema::create('crud_book_crud_publication', function (Blueprint $table) {
            $table->id();
           $table->bigInteger('crud_book_id')->nullable();
           $table->bigInteger('crud_publication_id')->nullable();
            $table->timestamps();
        });
        Schema::create('crud_book_crud_book_image', function (Blueprint $table) {
            $table->id();
           $table->bigInteger('crud_book_id')->nullable();
           $table->bigInteger('crud_book_image_id')->nullable();
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
        Schema::dropIfExists('crud_books');
        Schema::dropIfExists('crud_book_crud_publication');
        Schema::dropIfExists('crud_book_crud_book_image');
    }
}
