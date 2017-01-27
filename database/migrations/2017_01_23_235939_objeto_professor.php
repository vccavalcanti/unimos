<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ObjetoProfessor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('objeto_professor', function (Blueprint $table) {
            $table->integer('objeto_id')->unsigned();
            $table->foreign('objeto_id')->references('id')->on('objetos')->onDelete('cascade');
            $table->integer('professor_id')->unsigned();
            $table->foreign('professor_id')->references('id')->on('professores')->onDelete('cascade');
            
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
        Schema::dropIfExists('objeto_professor');
    }
}
