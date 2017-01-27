<?php

use Illuminate\Database\Seeder;

class UnidadesEnsinoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('unidades_ensino')->truncate();
        DB::table('espacos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        factory('App\UnidadeEnsino',5)->create();
        factory('App\Espaco',5)->create();
    }
}
