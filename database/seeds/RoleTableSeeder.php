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
        $role_user = new \App\Role();
        $role_user->name = 'User';
        $role_user->Apraksts = 'Parasts lietotājs';
        $role_user->save();
        
        $role_admin = new \App\Role();
        $role_admin->name = 'Admin';
        $role_admin->Apraksts = 'Administrātors';
        $role_admin->save();
    }   
}
