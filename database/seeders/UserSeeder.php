<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('1234'),
            'role_id' => 1,
        ]);
        User::create([
            'name' => 'Client 1',
            'email' => 'client1@email.com',
            'password' => bcrypt('1234'),
            'role_id' => 2
        ]);
    }
}
