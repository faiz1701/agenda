<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Abrar',
                'level' => 'user',
                'email' => 'guru@gmail.com',
                'password' => bcrypt('54321'),
                'remember_token' => Str::random(60),
            ]
        );
    }
}
