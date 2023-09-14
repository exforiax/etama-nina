<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'etandaterima@gmail.com',
                'role' => 1,
                'password' => bcrypt('rahasia1234'),
            ],
            [
                'name' => 'Demo',
                'email' => 'stewardyohanes29@gmail.com',
                'role' => 0,
                'password' => bcrypt('rahasia1234'),
            ],

        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
