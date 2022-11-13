<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPD extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_opd',
        'id_wilayah',
        'longitude',
        'latitude',
        'id_tenant'
    ];

    protected $table = "opd";
    public $timestamps = false;
}
