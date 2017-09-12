<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciptsdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciptsdetail', function (Blueprint $table) {
            $table->increments('reciptsdetail_id');
            $table->integer('recipt_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('transact_id')->unsigned();
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
        Schema::dropIfExists('reciptsdetail');
    }
}
