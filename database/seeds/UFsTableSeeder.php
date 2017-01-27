<?php

use Illuminate\Database\Seeder;

class UFsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('ufs')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $ufs = [
            ['id' => 1, 'nome' => 'Acre', 'sigla' => 'AC', 'created_at' => new DateTime],
            ['id' => 2, 'nome' => 'Alagoas', 'sigla' => 'AS', 'created_at' => new DateTime],
            ['id' => 3, 'nome' => 'Amapa', 'sigla' => 'AP', 'created_at' => new DateTime],
            ['id' => 4, 'nome' => 'Amazonas', 'sigla' => 'AM', 'created_at' => new DateTime],
            ['id' => 5, 'nome' => 'Bahia', 'sigla' => 'BA', 'created_at' => new DateTime],
            ['id' => 6, 'nome' => 'Ceara', 'sigla' => 'CE', 'created_at' => new DateTime],
            ['id' => 7, 'nome' => 'Distrito Federal', 'sigla' => 'DF', 'created_at' => new DateTime],
            ['id' => 8, 'nome' => 'Espirito Santo', 'sigla' => 'ES', 'created_at' => new DateTime],
            ['id' => 9, 'nome' => 'Goias', 'sigla' => 'GO', 'created_at' => new DateTime],
            ['id' => 10, 'nome' => 'Maranhao', 'sigla' => 'MA', 'created_at' => new DateTime],
            ['id' => 11, 'nome' => 'Mato Grosso', 'sigla' => 'MT', 'created_at' => new DateTime],
            ['id' => 12, 'nome' => 'Mato Grosso do Sul', 'sigla' => 'MS', 'created_at' => new DateTime],
            ['id' => 13, 'nome' => 'Minas Gerais', 'sigla' => 'MG', 'created_at' => new DateTime],
            ['id' => 14, 'nome' => 'Para', 'sigla' => 'PA', 'created_at' => new DateTime],
            ['id' => 15, 'nome' => 'Paraiba', 'sigla' => 'PB', 'created_at' => new DateTime],
            ['id' => 16, 'nome' => 'Parana', 'sigla' => 'PR', 'created_at' => new DateTime],
            ['id' => 17, 'nome' => 'Pernambuco', 'sigla' => 'PE', 'created_at' => new DateTime],
            ['id' => 18, 'nome' => 'Piaui', 'sigla' => 'PI', 'created_at' => new DateTime],
            ['id' => 19, 'nome' => 'Rio de Janeiro', 'sigla' => 'RJ', 'created_at' => new DateTime],
            ['id' => 20, 'nome' => 'Rio Grande do Norte', 'sigla' => 'RN', 'created_at' => new DateTime],
            ['id' => 21, 'nome' => 'Rio Grande do Sul', 'sigla' => 'RS', 'created_at' => new DateTime],
            ['id' => 22, 'nome' => 'Rondonia', 'sigla' => 'RO', 'created_at' => new DateTime],
            ['id' => 23, 'nome' => 'Roraima', 'sigla' => 'RR', 'created_at' => new DateTime],
            ['id' => 24, 'nome' => 'Santa Catarina', 'sigla' => 'SC', 'created_at' => new DateTime],
            ['id' => 25, 'nome' => 'Sao Paulo', 'sigla' => 'SP', 'created_at' => new DateTime],
            ['id' => 26, 'nome' => 'Sergipe', 'sigla' => 'SE', 'created_at' => new DateTime],
            ['id' => 27, 'nome' => 'Tocantins', 'sigla' => 'TO', 'created_at' => new DateTime],

        ];

        DB::table('ufs')->insert($ufs);
    }
}
