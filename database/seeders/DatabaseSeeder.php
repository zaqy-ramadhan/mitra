<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'user_test',
            'email' => 'user@user.com',
            'password' => '$2y$10$RYeU/E6hCejq5.RbQiCAvuQG7OyFd9WerTMKtRlFhDmAyE6Lea9vK',
        ]);
    }
}
