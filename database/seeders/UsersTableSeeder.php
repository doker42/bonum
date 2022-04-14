<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'role_id' =>1,
            'name'=> 'admin',
            'login'=>'admin',
            'email'=>'admin@test.com',
            'password'=> bcrypt('admin1234'),
        ]);

        User::create([
            'role_id' =>2,
            'name'=> 'user',
            'login'=>'user',
            'email'=>'user@test.com',
            'password'=> bcrypt('user1234'),
        ]);
    }
}
