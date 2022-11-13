<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusBayar extends Model
{
    // use HasFactory;
    protected $table = 'status_bayar';
    protected $primaryKey = 'id_status';
    public $incrementing = 'true';
    public $timestamps = false;

    protected $fillable = [
        'nama_status',
    ];
}
