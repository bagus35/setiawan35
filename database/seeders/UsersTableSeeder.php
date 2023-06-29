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
        $users = [[
            'id'                    => 1,
            'name'                  => 'Admin 1',
            'email'                 => 'bagus@gmail.com',
            'email_verified_at'     => NULL,
            'password'              => '$2a$12$t9Q8GqJzDlfWJ8Azl3yTzOZvrXHlck1KQDbQY3EisaI.974yugcA.',
            'role_id'               => 1,
            'picture'          => 'images/users/default.jpg',
            'remember_token'        => null,
            'created_at'            => '2021-05-17 04:21:52',
            'updated_at'            => '2021-05-17 04:21:52',
            'deleted_at'            => null,
        ]];

        User::insert($users);
    }
}
