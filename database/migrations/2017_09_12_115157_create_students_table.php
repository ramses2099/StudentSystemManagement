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
            $table->increments('student_id');
            $table->string('first_name',250);
            $table->string('last_name',250);
            $table->boolean('sex');
            $table->date('dob');
            $table->string('email',250);
            $table->string('rac',250);
            $table->boolean('status');
            $table->string('nationality',250)->nullable();
            $table->string('national_card',250)->nullable();
            $table->string('passport',250)->nullable();
            $table->string('phone',250)->nullable();
            $table->string('village',50)->nullable();
            $table->string('commune',50)->nullable();
            $table->string('district',50)->nullable();
            $table->string('province',50)->nullable();
            $table->string('current_address',250)->nullable();
            $table->date('dateregistered');
            $table->integer('user_id')->unsigned();
            $table->string('photo',250)->nullable();
            $table->foreign('user_id')->references('role_id')->on('users');
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
