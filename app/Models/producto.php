<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class producto extends Model
{
    use HasFactory;

    protected $fillable=['nombre','cantidad','precio'];

    protected $rules=[
        'nombre'=>'required',
        'cantidad'=>'required',
        'precio'=>'required'
    ];



}
