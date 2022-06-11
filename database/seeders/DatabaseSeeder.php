<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([

        // ]);

        DB::table('users')->insert(
            [
                'name' => 'Abrar',
                'level' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('54321'),
                'remember_token' => Str::random(60),
            ]
        );
    }
}
