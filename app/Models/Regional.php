<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    use HasFactory;
    protected $table= "regional";
    protected $fillable= ['id', 'nombre', 'estado', 'created_at', 'updated_at'];
}
