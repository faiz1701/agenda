<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert(
            [
                'namaguru' => 'ilham',
                'mapel' => 'b.indo',
                'materipelajaran' => 'majas',
                'mulaipembelajaran' => 'jam ke-1',
                'akhirpembelajaran' => 'jam ke-2',
                'siswatidakhadir' => 'rhesa, aflah',
                'namakelas' => 'XI RPL 2',
                'jenispembelajaran' => 'offline',
                'linkpembelajaran' => '-',
                'dokumentasi' => 'foto',
                'keterangan' => '2 siswa sakit'
            ]
        );
    }
}
