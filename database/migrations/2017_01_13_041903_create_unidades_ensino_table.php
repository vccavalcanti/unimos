<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadesEnsinoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades_ensino', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_fantasia');
            $table->string('nome_pj');
            $table->string('rua');
            $table->string('numero');
            $table->string('cep');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->integer('uf_id')->unsigned()->nullable();
            $table->foreign('uf_id')->references('id')->on('ufs')->onDelete('set null');
            $table->string('telefone');
            $table->string('cnpj');
            $table->string('tipo');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('articulador_id')->unsigned()->nullable();
            $table->foreign('articulador_id')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('unidades_ensino');
    }
}
