<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('idarticle');
            $table->unsignedinteger('iduser');
            $table->foreign('iduser')->references('id')->on('users');
            $table->string('auteur');
            $table->string('titre');
            $table->text('surtitre');
            $table->string('chapeau');
            $table->string('type');
            $table->string('rubrique');
            $table->binary('image');
            $table->string('legende');
            $table->string('tag');
            $table->text('texte');
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
        Schema::dropIfExists('articles');
    }
}
