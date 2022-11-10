<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_ti extends Model
{
    use HasFactory;
    protected $table= "solicitud_ti";
    protected $fillable= ['id', 'usurio_id', 'regional_id','area_id', 'subarea_id', 'tipo_soporte_id',
    'tipo_mantenimiento_id', 'descripcion', 'estado', 'created_at', 'updated_at'];
}
