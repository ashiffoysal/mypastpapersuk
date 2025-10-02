<?php

namespace Database\Seeders;

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
            'name' => 'ADMIn User', // change to your preferred name
            'email' => 'admin@gmail.com', // specify your email
            'password' => Hash::make('123'), // specify your password
        ]);
    }
}
