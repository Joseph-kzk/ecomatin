<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->unsignedBigInteger('iduser');
            $table->foreign('iduser')->references('id')->on('users');
            $table->string('auteur');
            $table->text('titre');
            $table->string('surtitre');
            $table->text('chapeau');
            $table->text('reseau');
            $table->string('type');
            $table->string('rubrique');
            $table->binary('image')->nullable();
            $table->string('legende');
            $table->string('tag');
            $table->longText('texte');
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
