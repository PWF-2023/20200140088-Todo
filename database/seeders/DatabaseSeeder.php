<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
       User::create(
        [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$921XUNpkjo0rOQ5byMi.Ye4oKoEa3Ro911c/.og/at2.uheWG/igi', //pasword
            'remember_token' => Str::random(10),
            'is_admin' => true
        ]
        );
        User::factory(100)->create();
        Todo::factory(500)->create();
    }
}