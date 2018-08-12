<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('student_name');
            $table->string('email');
            $table->string('password');
            $table->string('reg_no');
            $table->string('image');

            $table->integer('levels_id')->unsigned();
            $table->foreign('levels_id')->references('id')->on('levels');

            $table->integer('level_id')->unsigned();
            // $table->foreign('levels_id')->references('id')->on('levels');

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
        Schema::dropIfExists('students');
    }
}
