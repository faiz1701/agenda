<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert(
            [
                'username' => 'sonny@gmail.com',
                'password' => 'guru',
                'namaguru' => 'sonny',
                'nikguru' => '098717',
                'mapel' => 'b.indo',
            ]
        );
    }
}
