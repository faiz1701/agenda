<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'guru_id', 'mapel_id', 'materipelajaran',
    //     'mulaipembelajaran', 'akhirpembelajaran', 'siswatidakhadir',
    //     'kelas_id', 'jenispembelajaran', 'linkpembelajaran', 'dokumentasi', 'keterangan'
    // ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
