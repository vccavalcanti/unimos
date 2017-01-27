<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AulaContratante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aula_contratante', function (Blueprint $table) {
            $table->integer('aula_id')->unsigned();
            $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
            $table->integer('contratante_id')->unsigned();
            $table->foreign('contratante_id')->references('id')->on('contratantes')->onDelete('cascade');

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
        Schema::dropIfExists('aula_contratante');
    }
}
