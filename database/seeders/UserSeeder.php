<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => 'Mohamed Said',
                'email' => 'madyrio100@gmail.com',
                'role' => 'super-admin',
                'password' => bcrypt('madyrio@100'),
            ]
        ];

        foreach ($users as $user) {
            User::firstOrCreate([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ])->assignRole($user['role']);
        }
    }
}
