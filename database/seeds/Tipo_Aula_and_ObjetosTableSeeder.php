<?php

use Illuminate\Database\Seeder;
use App\Tipo_aula;
use App\Objeto;

class Tipo_Aula_and_ObjetosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //DB::table('tipo_aulas')->delete();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('objetos')->truncate();
        DB::table('tipo_aulas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
            $tipo_aula = [
                ['id' => 1, 'nome' => 'teoria', 'created_at' => new DateTime],
                ['id' => 2, 'nome' => 'percussão', 'created_at' => new DateTime],
                ['id' => 3, 'nome' => 'corda', 'created_at' => new DateTime],
                ['id' => 4, 'nome' => 'sopro', 'created_at' => new DateTime],

            ];

            DB::table('tipo_aulas')->insert($tipo_aula);

        $tipo_teoria =      Tipo_aula::where('nome', 'teoria')->first(); // select * from roles where name = professor limit 1
        $tipo_percussao =   Tipo_aula::where('nome', 'percussão')->first();
        $tipo_corda =       Tipo_aula::where('nome', 'corda')->first();
        $tipo_sopro =       Tipo_aula::where('nome', 'sopro')->first();


        $guitarra = new Objeto();
        $guitarra->nome = 'Guitarra';
        $guitarra->Tipo_aula()->associate($tipo_corda);
        $guitarra->save();

        $violao = new Objeto();
        $violao->nome = 'Violão';
        $violao->Tipo_aula()->associate($tipo_corda);
        $violao->save();

        $violino = new Objeto();
        $violino->nome = 'Violino';
        $violino->Tipo_aula()->associate($tipo_corda);
        $violino->save();

        $bateria = new Objeto();
        $bateria->nome = 'Bateria';
        $bateria->Tipo_aula()->associate($tipo_percussao);
        $bateria->save();

        $flauta_doce = new Objeto();
        $flauta_doce->nome = 'Flauta Doce';
        $flauta_doce->Tipo_aula()->associate($tipo_sopro);
        $flauta_doce->save();

        $Sax = new Objeto();
        $Sax->nome = 'Saxofone';
        $Sax->Tipo_aula()->associate($tipo_sopro);
        $Sax->save();

        $teoria = new Objeto();
        $teoria->nome = 'Teoria';
        $teoria->Tipo_aula()->associate($tipo_teoria);
        $teoria->save();

    }
}
