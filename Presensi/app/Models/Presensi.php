<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    protected $table = "presensi";
    public $timestamps = false;
    protected $primaryKey = 'id_presensi';
    public $incrementing = 'true';

    protected $fillable = [
        'id_profil',
        'tanggal',
        'jam_datang',
        'jam_pulang',
        'longitude',
        'latitude',
    ];

    public function profil() {
        return $this->belongsTo(UserProfil::class, 'id_profil', 'id_profil');
    }
}
