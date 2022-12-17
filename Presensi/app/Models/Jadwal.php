<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = "jadwal";
    public $timestamps = false;
    protected $primaryKey = 'id_jadwal';
    public $incrementing = 'true';

    protected $fillable = [
        'id_opd',
        'hari_presensi',
        'jam_awal_presensi',
        'jam_akhir_presensi'
    ];

    public static function getTodayjadwal($id_opd){
        // get day from date
        $hari = date('w');
        $jadwal = Jadwal::where('id_opd', $id_opd)->where('hari_presensi', $hari)->first();
        return $jadwal;
    }

    public function opd() {
        return $this->belongsTo(OPD::class, 'id_opd', 'id_opd');
    }
}
