<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@kabosi.com',
                'is_admin'=>'1',
                'password'=>bcrypt('123456'),
            ],
            [
                'name'=>'User',
                'email'=>'user@kabosi.com',
                'is_admin'=>'0',
                'password'=>bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
