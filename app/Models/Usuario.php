<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table= "usuario";
    protected $fillable= ['id', 'persona_id', 'rol_id','usuario', 'contraseña', 'estado', 'created_at', 'updated_at'];
}
