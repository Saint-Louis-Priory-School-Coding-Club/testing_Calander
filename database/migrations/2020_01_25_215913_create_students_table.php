<?php

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('student_id');
            $table->json('schedule')->default('{"day1":{"class1":"math","class2":"science","class3":"english","class4":"language","class5":"worldHistory","class6":"doctrine","class7":"art"},"day2":{"class1":"math","class2":"science","class3":"english","class4":"language","class5":"worldHistory","class6":"doctrine","class7":"art"},"day3":{"class1":"math","class2":"science","class3":"english","class4":"language","class5":"worldHistory","class6":"doctrine","class7":"art"},"day4":{"class1":"math","class2":"science","class3":"english","class4":"language","class5":"worldHistory","class6":"doctrine","class7":"art"},"day5":{"class1":"math","class2":"science","class3":"english","class4":"language","class5":"worldHistory","class6":"doctrine","class7":"art"}}');
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
