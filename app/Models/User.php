<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Profile;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected function name(): Attribute {

        return new Attribute(

            get: function ($value){

                return ucwords($value); //accesores
            },

            set: function($value){
                return strtolower($value); //mutadores
            }

        );

    }

    //realacion 1:1
   public function profile()
   {
       return $this->hasOne(Profile::class);
      //$profile=Profile::where('user_id', $this->id)->first();

      //return $profile;
   }
}
