<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'id_paket';
    public $incrementing = 'true';
    public $timestamps = false;

    protected $fillable = [
        'nama_paket',
    ];
    // use HasFactory;
}
