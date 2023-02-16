<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create user
        User::create([
            'name' => 'Andrew',
            'email' => 'flysandwings@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Bill',
            'email' => 'az19agent@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Joel',
            'email' => 'atc1512@rit.edu',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'remember_token' => Str::random(10)
        ]);
    }
}
