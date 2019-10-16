<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_marks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('class');
            $table->string('subject_id');
            $table->string('teacher_id');
            $table->string('student_id');
            $table->float('quiz1')->default(0);;
            $table->float('quiz2')->default(0);
            $table->float('mid')->default(0);
            $table->float('final')->default(0);
            $table->timestamps();

            $table->foreign('teacher_id')->references('user_id')->on('teachers')->onDelete('cascade');
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
        Schema::dropIfExists('subject_marks');
    }
}
