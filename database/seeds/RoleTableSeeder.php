<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();

        $role_professor = new Role();
        $role_professor->name = 'professor';
        $role_professor->description = 'Um Professor';
        $role_professor->save();

        $role_contratante = new Role();
        $role_contratante->name = 'contratante';
        $role_contratante->description = 'Um Contratante';
        $role_contratante->save();

        $role_articulador = new Role();
        $role_articulador->name = 'articulador';
        $role_articulador->description = 'Um Articulador';
        $role_articulador->save();

        $role_unidadeEnsino = new Role();
        $role_unidadeEnsino->name = 'unidadeEnsino';
        $role_unidadeEnsino->description = 'Uma Unidade de Ensino';
        $role_unidadeEnsino->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'Um Administrador';
        $role_admin->save();


    }
}
