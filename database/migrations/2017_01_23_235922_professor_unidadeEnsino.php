<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfessorUnidadeEnsino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor_unidadeEnsino', function (Blueprint $table) {
            $table->integer('professor_id')->unsigned();
            $table->foreign('professor_id')->references('id')->on('professores')->onDelete('cascade');
            $table->integer('unidadeEnsino_id')->unsigned();
            $table->foreign('unidadeEnsino_id')->references('id')->on('unidades_ensino')->onDelete('cascade');
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
        Schema::dropIfExists('professor_unidadeEnsino');
    }
}
