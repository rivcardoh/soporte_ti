<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_soporte extends Model
{
    use HasFactory;
    protected $table= "tipo_soporte";
    protected $fillable= ['id', 'nombre','estado', 'created_at', 'updated_at'];
}
