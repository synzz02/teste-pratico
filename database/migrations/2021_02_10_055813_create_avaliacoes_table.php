<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nota');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('filme_id');
            $table->timestamps();
        });
    
        Schema::table('avaliacoes', function (Blueprint $table) {
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });

        Schema::table('avaliacoes', function (Blueprint $table) {
            $table->foreign('filme_id')->references('id')->on('filmes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacoes');
    }
}
