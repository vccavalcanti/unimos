<?php

use Illuminate\Database\Seeder;

class AulasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('aulas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        factory('App\Aula',10)->create();
    }
}