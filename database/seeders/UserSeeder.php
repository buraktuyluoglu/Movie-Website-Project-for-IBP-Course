<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('test1234'),
            'role' => "ADMIN"
        ]);

        User::create([
            'name' => 'User',
            'email' =>'user@gmail.com',
            'password' => Hash::make('test1234'),
            'role' => "USER"
        ]);

    }
}
