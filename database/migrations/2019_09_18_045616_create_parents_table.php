<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('father_name');
            $table->string('father_occu');
            $table->string('father_mobile');
            $table->string('father_image');

            $table->string('mother_name');
            $table->string('mother_occu');
            $table->string('mother_mobile');
            $table->string('mother_image');

            $table->string('user_id');
            $table->string('student_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('parents');
    }
}
