<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorAlumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'ap_pat',
        'ap_mat',
        'correo',
        'telefono',
        'alumno_id'
    ];

    // public function alumno (){
    //     return
    // }
}
