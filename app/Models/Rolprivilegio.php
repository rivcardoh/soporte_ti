<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rolprivilegio extends Model
{
    use HasFactory;
    protected $table= "rolprivilegio";
    protected $fillable= ['id', 'rol_id', 'privilegio_id'];
}
