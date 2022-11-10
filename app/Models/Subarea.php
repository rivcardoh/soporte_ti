<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subarea extends Model
{
    use HasFactory;
    protected $table= "subarea";
    protected $fillable= ['id', 'nombre','estado', 'created_at', 'updated_at'];
}
