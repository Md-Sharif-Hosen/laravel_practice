<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'username' => 'super_admin',
            'role_id' => 1,
            'phone_number' => '+8802323232',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'username' => 'admin',
            'role_id' => 2,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'username' => 'user1',
            'role_id' => 3,
            'email' => 'user1@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'username' => 'user2',
            'role_id' => 3,
            'email' => 'user2@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'username' => 'user3',
            'role_id' => 3,
            'email' => 'user3@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'username' => 'user4',
            'role_id' => 3,
            'email' => 'user4@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::factory()->count(50)->create();
    }
}
