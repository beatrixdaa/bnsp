<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'beatrixdevanti21@gmail.com',
            'password' => bcrypt('password') ,
            'email_verified_at' => now(),
            // 'remember_token' => Str::random(length:10),
            'created_at' => now(),
            'updated_at' => now(),

       ]) ;

    }
}
