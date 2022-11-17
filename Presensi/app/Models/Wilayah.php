<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $table="wilayah";
    public $timestamps = false;
    protected $primaryKey = 'id_wilayah';
    public $incrementing = 'true';

    protected $fillable = [
        'kode',
        'nama',
        'level',
        'id_parent'
    ];

    public function wilayah() {
        return $this->belongsTo(Wilayah::class, 'id_wilayah', 'id_parent');
    }
}
