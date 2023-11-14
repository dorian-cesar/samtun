<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{


    public function user(){

        //$user=User::find($this->user_id);

        //return $user;

        return $this->belongsTo(User::class);

    }
}
