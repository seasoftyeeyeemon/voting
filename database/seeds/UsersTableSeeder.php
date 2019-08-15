<?php

use Illuminate\Database\Seeder;
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
        User::create([
            'name'=>'Admin1',
            'email'=>'admin1@example.com',
            'password'=>bcrypt('password'),
            'role'=>'1'
        ]);
        User::create([
            'name'=>'Admin2',
            'email'=>'admin2@example.com',
            'password'=>bcrypt('password'),
            'role'=>'1'
        ]);
    }
}
