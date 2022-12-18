<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = "setting";
    public $timestamps = false;
    protected $primaryKey = 'id_setting';
    public $incrementing = 'true';

    protected $fillable = [
        'id_opd',
        'batas_jarak_presensi'
    ];

    public function opd() {
        return $this->belongsTo(OPD::class, 'id_opd', 'id_opd');
    }
}
