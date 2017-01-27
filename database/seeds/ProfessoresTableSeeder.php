<?php

use Illuminate\Database\Seeder;

class ProfessoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('professores')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        factory('App\Professor',1)->create();
    }
}
