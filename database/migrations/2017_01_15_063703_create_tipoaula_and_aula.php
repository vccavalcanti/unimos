<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoaulaAndAula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tipo_aulas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->timestamps();
        });


        Schema::create('objetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('tipo_aula_id')->unsigned()->nullable();
            $table->foreign('tipo_aula_id')->references('id')->on('tipo_aulas')->onDelete('set null');
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
        Schema::dropIfExists('objetos');
        Schema::dropIfExists('tipo_aulas');
    }
}
