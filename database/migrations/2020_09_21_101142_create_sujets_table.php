<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSujetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sujets', function (Blueprint $table) {
            $table->increments('idsujet');
            $table->unsignedinteger('idmenu');
            $table->foreign('idmenu')->references('idmenu')->on('menus');
            $table->string('titre');
            $table->string('rubrique');
            $table->string('responsable');
            $table->integer('encombrement');
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
        Schema::dropIfExists('sujets');
    }
}
