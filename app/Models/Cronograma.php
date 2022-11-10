<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
    use HasFactory;
    protected $table= "cronograma";
    protected $fillable= ['id', 'regional_id', 'negocio_id','fecha', 'estado', 'created_at', 'updated_at'];
}
