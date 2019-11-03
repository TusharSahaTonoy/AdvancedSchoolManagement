<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGuideTeacherToStudentSchoolInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_school_infos', function (Blueprint $table) {
            $table->string('guide_teacher')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_school_infos', function (Blueprint $table) {
            $table->dropColumn(['guide_teacher']);
        });
    }
}
