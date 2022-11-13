<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfil extends Model
{
    // use HasFactory;
    protected $table = 'user_profile';
    protected $primaryKey = 'id_profil';
    public $incrementing = 'true';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'alamat_user',
        'id_opd',
    ];

    public function opd() {
        return $this->belongsTo(OPD::class, 'id_opd', 'id_opd');
    }
}
