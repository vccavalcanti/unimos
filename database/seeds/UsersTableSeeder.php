<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //DB::table('users')->truncate(); //exclui de forma eficiente todas as linhas da tabela

        $role_professor = Role::where('name', 'professor')->first(); // select * from roles where name = professor limit 1
        $role_contratante = Role::where('name', 'contratante')->first();
        $role_articulador = Role::where('name', 'articulador')->first();
        $role_unidadeEnsino = Role::where('name', 'unidadeEnsino')->first();
        $role_superadministrator = Role::where('name', 'superadministrator')->first();

        $professor1 = new User();
        $professor1->name = 'Prof Girafales';
        $professor1->email = 'girafales@mail.com';
        $professor1->password = bcrypt('girafales');
        $professor1->save();
        $professor1->roles()->attach($role_professor);

        $professor2 = new User();
        $professor2->name = 'Professor Linguica';
        $professor2->email = 'linguica@mail.com';
        $professor2->password = bcrypt('linguica');
        $professor2->save();
        $professor2->roles()->attach($role_professor);

        $contratante1 = new User();
        $contratante1->name = 'Contratante 1';
        $contratante1->email = 'contratante@mail.com';
        $contratante1->password = bcrypt('contratante');
        $contratante1->save();
        $contratante1->roles()->attach($role_contratante);

        $contratante2 = new User();
        $contratante2->name = 'Contratante 2';
        $contratante2->email = 'contratante2@mail.com';
        $contratante2->password = bcrypt('contratante2');
        $contratante2->save();
        $contratante2->roles()->attach($role_contratante);

        $unidadeEnsino = new User();
        $unidadeEnsino->name = 'Unidade de Ensino 1';
        $unidadeEnsino->email = 'unidadeensino@mail.com';
        $unidadeEnsino->password = bcrypt('unidade');
        $unidadeEnsino->save();
        $unidadeEnsino->roles()->attach($role_unidadeEnsino);

        $unidadeEnsino2 = new User();
        $unidadeEnsino2->name = 'Unidade de Ensino 2';
        $unidadeEnsino2->email = 'unidadeensino2@mail.com';
        $unidadeEnsino2->password = bcrypt('unidade2');
        $unidadeEnsino2->save();
        $unidadeEnsino2->roles()->attach($role_unidadeEnsino);

        $articulador = new User();
        $articulador->name = 'Articulador 1';
        $articulador->email = 'articulador1@mail.com';
        $articulador->password = bcrypt('articulador');
        $articulador->save();
        $articulador->roles()->attach($role_articulador);

        $articulador2 = new User();
        $articulador2->name = 'Articulador 2';
        $articulador2->email = 'articulador2@mail.com';
        $articulador2->password = bcrypt('articulador2');
        $articulador2->save();
        $articulador2->roles()->attach($role_articulador);

        $admin = new User();
        $admin->name = 'superadministrator';
        $admin->email = 'superadministrator@mail.com';
        $admin->password = bcrypt('superadministrator');
        $admin->save();
        $admin->roles()->attach($role_superadministrator);


    }


}


