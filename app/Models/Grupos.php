<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    use HasFactory;

    protected $fillable = [
        'generacion_id',
        'nombre_grupo',
        'estatus'
    ];

    public function generacion()
    {
        return $this->belongsTo(Generaciones::class);
    }

    public function alumnos()
    {
        return $this->hasMany(Alumnos::class);
    }
}
