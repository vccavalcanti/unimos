<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UFsTableSeeder::class);
        $this->call(Tipo_Aula_and_ObjetosTableSeeder::class);
        $this->call(UnidadesEnsinoTableSeeder::class);
        $this->call(ArticuladoresTableSeeder::class);
        $this->call(ContratantesTableSeeder::class);
        $this->call(ProfessoresTableSeeder::class);
        $this->call(AulasTableSeeder::class);
    }
}
