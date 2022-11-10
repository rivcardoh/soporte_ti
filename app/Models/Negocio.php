<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;
    protected $table= "negocio";
    protected $fillable= ['id', 'nombre','estado', 'created_at', 'updated_at'];
}
