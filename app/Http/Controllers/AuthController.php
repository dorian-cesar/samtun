<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


use App\Models\User;


class AuthController extends Controller
{
    //
    public function register(Request $request){

        $validator = Validator::make ($request->all(),[
            'name' =>'required',
            'email'=>'required | email | unique:users',
            'password'=>'required | min:8 '
        ]);
            if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user=User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
        ]);
        $token =$user->createToken('auth_token')->plainTextToken;
       // $token =$user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'data'=>$user,
            'access_token'=>$token,
            'token_type'=>'Bearer'
        ]);
    }

    public function Login(Request $request){

        if(!Auth::attempt($request->only('email','password')))
        {
            return response()->json(
                [
                    'message'=>'No autorizado'

                ]
                );
        }else{

            $user= User::where('email', $request['email'])->firstOrFail();
            $token =$user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message'=> 'Wellcome  '.$user->name,
                'Token'=>$token,
                'Token type'=>'Bearer',
                'user'=>$user
            ]);
        }
    }
     public function logout(Request $request){

       echo $user = Auth::user();

       $user->tokens()->delete();

     // auth()->user()->tokens()->delete();

        //Auth::logout();

        return [

            'message'=>'Sesiones borradas ok '

        ];
     }



}
