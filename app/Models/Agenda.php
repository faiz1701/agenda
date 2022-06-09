<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaguru', 'mapel', 'materipelajaran',
        'mulaipembelajaran', 'akhirpembelajaran', 'siswatidakhadir',
        'namakelas', 'jenispembelajaran', 'linkpembelajaran', 'dokumentasi', 'keterangan'
    ];
}
