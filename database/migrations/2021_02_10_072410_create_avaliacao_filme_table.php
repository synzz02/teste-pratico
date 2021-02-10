<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoFilmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_filme', function (Blueprint $table) {
            $table->unsignedBigInteger('avaliacao_id');
            $table->unsignedBigInteger('filme_id');
            $table->timestamps();
        });

        Schema::table('avaliacao_filme', function (Blueprint $table) {
            $table->foreign('avaliacao_id')->references('id')->on('avaliacoes');
        });

        Schema::table('avaliacao_filme', function (Blueprint $table) {
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
        Schema::dropIfExists('avaliacao_filme');
    }
}
