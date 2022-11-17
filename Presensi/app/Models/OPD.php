<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPD extends Model
{
    use HasFactory;

    protected $table = "opd";
    public $timestamps = false;
    protected $primaryKey = 'id_opd';
    public $incrementing = 'true';

    protected $fillable = [
        'nama_opd',
        'id_wilayah',
        'longitude',
        'latitude',
        'id_tenant'
    ];

    public function wilayah() {
        return $this->belongsTo(Wilayah::class, 'id_wilayah', 'id_wilayah');
    }
    public function tenant(){
        return $this->belongsTo(Tenant::class, 'id_tenant', 'id_tenant');
    }


}
