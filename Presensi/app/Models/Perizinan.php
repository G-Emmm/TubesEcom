<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Perizinan extends Model
{
    //use HasFactory;
    protected $table = 'perizinan';
    protected $primaryKey = 'id_perizinan';
    public $incrementing = 'true';
    public $timestamps = false;

    protected $fillable = [
        'id_profil',
        'start_izin',
        'end_izin',
        'jenis_izin',
        'keperluan',
        'keterangan',
        'status',
        'file',
    ];

    public function profil(){
        return $this->belongsTo(User::class, 'id', 'id_profil');
    }
}
