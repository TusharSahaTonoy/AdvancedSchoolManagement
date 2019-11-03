<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSchoolInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_school_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('class');
            $table->string('section');
            $table->string('roll');
            $table->string('year');
            $table->string('student_id');
            $table->timestamps();

            $table->foreign('student_id')->references('user_id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_school_infos');
    }
}
