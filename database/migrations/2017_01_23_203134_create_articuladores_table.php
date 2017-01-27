<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticuladoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articuladores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_pj');
            $table->string('nome_fantasia');
            $table->string('telefone');
            $table->string('cpf');
            $table->string('rg');
            $table->string('cnpj');
            $table->char('sexo');
            $table->date('dob');
            $table->text('descricao');
            $table->string('rua');
            $table->string('numero');
            $table->string('cep');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->integer('uf_id')->unsigned()->nullable();
            $table->foreign('uf_id')->references('id')->on('ufs')->onDelete('set null');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('articuladores');
    }
}
