<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema_operativo extends Model
{
    use HasFactory;
    protected $table= "sistema_operativo";
    protected $fillable= ['id', 'nombre', 'estado', 'created_at', 'updated_at'];
}
