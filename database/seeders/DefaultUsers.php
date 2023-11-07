<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'     => 'Juan Felipe',
                'email'    => 'felipe@gmail.com',
                'password' => 'password1'
            ],
            [
                'name'     => 'Ricardo',
                'email'    => 'ricardo@gmail.com',
                'password' => 'password1'
            ],
            [
                'name'     => 'Hiram',
                'email'    => 'hiram@gmail.com',
                'password' => 'password1'
            ],
            [
                'name'     => 'Javier',
                'email'    => 'javier@gmail.com',
                'password' => 'password1'
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
