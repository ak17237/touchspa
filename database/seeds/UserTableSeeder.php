<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','User')->first();
        $role_admin = Role::where('name','Admin')->first();
        
        $user = new \App\User();
        $user->name = 'Artjoms';
        $user->email = 'xxtremegamesx@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        $user->roles()->attach($role_user);
        
        $admin = new \App\User();
        $admin->name = 'Alex';
        $admin->email = 'sasuke134@inbox.lv';
        $admin->password = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
