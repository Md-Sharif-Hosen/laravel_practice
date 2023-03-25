<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Name',100)->nullable();
            $table->string('Email',100)->nullable();
            $table->string('Department',100)->nullable();
            $table->bigInteger('RegId')->nullable();
            $table->integer('Contact_Number')->nullable();
            $table->string('Photo',100)->nullable();
            $table->timestamps();
        });

        Schema::create('department_student', function (Blueprint $table)
        {
            $table->id();
            $table->bigInteger('department_id')->nullable();
            $table->bigInteger('student_id')->nullable();
        });

       Schema::create('exam_student',function(Blueprint $table)
       {
          $table->id();
          $table->bigInteger('exam_id')->nullable();
          $table->bigInteger('student_id')->nullable();
       });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
