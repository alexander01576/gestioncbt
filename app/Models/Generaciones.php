<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generaciones extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre_gen',
        'estatus'
    ];

    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }
}
