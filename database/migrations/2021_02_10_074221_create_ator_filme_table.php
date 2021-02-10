<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtorFilmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ator_filme', function (Blueprint $table) {
            $table->unsignedBigInteger('ator_id');
            $table->unsignedBigInteger('filme_id');
            $table->timestamps();
        });

        Schema::table('ator_filme', function (Blueprint $table) {
            $table->foreign('ator_id')->references('id')->on('atores');
        });

        Schema::table('ator_filme', function (Blueprint $table) {
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
        Schema::dropIfExists('ator_filme');
    }
}
