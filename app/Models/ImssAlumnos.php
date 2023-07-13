<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImssAlumnos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nss',
        'estatus_alta',
        'alumno_id',
        'estatus'
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumnos::class, 'alumno_id');
    }
}
