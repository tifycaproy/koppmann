<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $user = new User();
        $user->name = 'Anthoni Rodriguez';
        $user->email = 'yosec.cervino@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_admin);
        $user = new User();
        $user->name = 'Carlos Palacios';
        $user->email = 'carlosspf24@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_admin);
        $user = new User();
        $user->name = 'Yoelis Mendoza';
        $user->email = 'yoe318@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_admin);
        $user = new User();
        $user->name = 'Freddie Martinez';
        $user->email = 'freddiemartinez@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
