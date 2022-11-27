<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    //use HasFactory;
    protected $table = 'perizinan';
    protected $primaryKey = 'id_presensi';
    public $incrementing = 'true';
    public $timestamps = false;

    protected $fillable = [
        'id_profil',
        'tanggal',
        'jam_datang',
        'jam_pulang',
        'longitude',
        'latitude',
        'keterangan'
    ];

    public function profil(){
        return $this->belongsTo(User::class, 'id', 'id_profil');
    }
}
