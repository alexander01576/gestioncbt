<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulosArchivos extends Model
{
    use HasFactory;

    protected $fillable = [
        'modulo_id',
        'nombre_archivo',
        'estatus'
    ];

    public function modulo()
    {
        return $this->belongsTo(Modulo::class, 'modulo_id');
    }
}
