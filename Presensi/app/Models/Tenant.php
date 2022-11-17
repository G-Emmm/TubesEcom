<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $table = "tenant";
    public $timestamps = false;
    protected $primaryKey = 'id_tenant';
    public $incrementing = 'true';

    protected $fillable = [
        'id_wilayah',
        'alamat_tent',
        'no_telptent'
    ];
    public function wilayah() {
        return $this->belongsTo(Wilayah::class, 'id_wilayah', 'id_wilayah');
    }
}
