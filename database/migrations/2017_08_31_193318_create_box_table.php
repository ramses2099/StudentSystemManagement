<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('box', function (Blueprint $table) {
            $table->increments('idbox');
            $table->string('modelo', 800);
            $table->string('color',300);
            $table->integer('quantity');            
            $table->integer('serialnodesde');
            $table->integer('serialnohasta');
            $table->integer('idboxstate');
            $table->integer('idstaterow');
            $table->integer('hostname');
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
        Schema::dropIfExists('Box');
    }
}
