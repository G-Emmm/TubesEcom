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
    const KETERANGAN = [
        'Hadir',
        'Sakit',
        'Izin',
        'Cuti'
    ];

    protected $fillable = [
        'id_profil',
        'tanggal',
        'jam_datang',
        'jam_pulang',
        'longitude',
        'latitude',
        'keterangan'
    ];

    public static function getTodayPresensi($id_profil){
        $tanggal = date('Y-m-d');
        $presensi = Presensi::where('id_profil', $id_profil)->where('tanggal', $tanggal)->first();
        return $presensi;
    }

    public static function getPresensi($id_profil){
        $presensi = Presensi::where('id_profil', $id_profil)->get();
        return $presensi;
    }

    public function profil() {
        return $this->belongsTo(UserProfil::class, 'id_profil', 'id_profil');
    }
}
