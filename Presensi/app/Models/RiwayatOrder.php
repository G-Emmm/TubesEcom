<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatOrder extends Model
{
    // use HasFactory;
    protected $table = 'riwayat_order';
    protected $primaryKey = 'id_order';
    public $incrementing = 'true';
    public $timestamps = false;

    protected $fillable = [
        'id_wilayah',
        'id_paket',
        'tgl_awal',
        'tgl_akhir',
        'status_bayar',
        'tgl_bayar',
    ];

    public function wilayah() {
        return $this->belongsTo(Wilayah::class, 'id_wilayah', 'id_wilayah');
    }
    public function paket() {
        return $this->belongsTo(Paket::class, 'id_paket', 'id_paket');
    }
    public function status() {
        return $this->belongsTo(StatusBayar::class, 'id_status', 'id_status');
    }
}
