<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    
	protected $fillable = [
		'matricula',
		'nombre',
		'ap_pat',
		'ap_mat',
		'estatus_inscripcion',
		'grupo_id',
		'estatus'
	];

	public function grupo()
	{
		return $this->belongsTo(Grupo::class);
	}
}
