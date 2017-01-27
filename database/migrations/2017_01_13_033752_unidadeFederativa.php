<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UnidadeFederativa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ufs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sigla');
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
        //DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('ufs');
        //DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
