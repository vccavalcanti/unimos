<?php

use Illuminate\Database\Seeder;

class ContratantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('contratantes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        factory('App\Contratante',1)->create();
    }
}
