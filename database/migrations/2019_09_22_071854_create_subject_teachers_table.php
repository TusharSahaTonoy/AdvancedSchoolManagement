<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('class');
            $table->string('section');
            $table->string('subject_id');
            $table->string('teacher_id');
            $table->timestamps();

            $table->foreign('subject_id')->references('subject_id')->on('class_subjects')->onDelete('cascade');
            $table->foreign('teacher_id')->references('user_id')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_teachers');
    }
}
