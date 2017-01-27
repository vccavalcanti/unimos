<?php

use Illuminate\Database\Seeder;

class ArticuladoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('articuladores')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        factory('App\Articulador',1)->create();

    }
}
