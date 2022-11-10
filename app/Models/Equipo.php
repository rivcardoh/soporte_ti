<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table= "equipo";
    protected $fillable= ['id', 'nombre', 'tipo_ordenador','caracteristicas', 'marca', 'so_id', 'ups', 'caracteristicas_ups', 
    'licencia', 'version_office' ,'estado', 'created_at', 'updated_at'];
}
