<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulosAlumnos extends Model
{
    use HasFactory;

    protected $fillable = [
        'alumno_id',
        'modulo_archivo_id',
        'estatus',
        'link_carpeta',
        'estatus'
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function moduloArchivo()
    {
        return $this->belongsTo(ModuloArchivo::class);
    }
}
