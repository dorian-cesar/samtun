<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paraderos extends Model
{
    use HasFactory;
    protected $fillable = ['paradero','recorrido','patente','direccion','latitud','longitud'];

}
