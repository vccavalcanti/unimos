<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao');
            $table->integer('objeto_id')->unsigned()->nullable();
            $table->integer('professor_id')->unsigned()->nullable();
            $table->integer('espaco_id')->unsigned()->nullable();
            $table->foreign('objeto_id')->references('id')->on('objetos')->onDelete('set null');
            $table->foreign('professor_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('espaco_id')->references('id')->on('espacos')->onDelete('set null');
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
        Schema::dropIfExists('aulas');
    }
}
