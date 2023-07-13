<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_modulo',
        'estatus'
    ];

    public function modulosArchivos()
    {
        return $this->hasMany(ModuloArchivo::class, 'modulo_id');
    }

    
}
