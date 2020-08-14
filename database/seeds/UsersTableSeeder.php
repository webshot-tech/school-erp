<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();
        $userRole = Role::where('name', 'student')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin') 
        ]);

        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@author.com',
            'password' => Hash::make('authorauthor') 
        ]);

        $user = User::create([
            'name' => 'Genetic User',
            'email' => 'user@user.com',
            'password' => Hash::make('useruser') 
        ]);

        $admin = User::create([
            'name' => 'Student User',
            'email' => 'student@student.com',
            'password' => Hash::make('adminadmin') 
        ]);


        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);


    }
}
