<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = ['user_id', 'namaguru', 'nikguru', 'mapel_id'];

    public function guruagenda()
    {
        return $this->hasMany(Agenda::class);
    }

    public function gurukelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function guruuser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function gurumapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
    }
}
