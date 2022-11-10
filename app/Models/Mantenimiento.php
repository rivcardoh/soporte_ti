<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;
    protected $table= "mantenimiento";
    protected $fillable= ['id', 'equipo_id', 'negocio_id','fecha_inicio', 'fecha_final', 'descripcion', 'recomendacion', 'estado', 'created_at', 'updated_at'];
}
