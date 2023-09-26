<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request){
        return view('formHtml');
    }

    public function guardar (Request $request){

        $request->validate([
            'nombre'=>'required',
            'email'=>'required | email | unique:forms',
            'edad'=>'required | numeric',
            'pass'=>'required | confirmed',
            'pass_confirmation'=>'required'
            ]);

        $form = new Form ;
        $form->nombre =$request->nombre;
        $form->email =$request->email;
        $form->edad =$request->edad;
        $form->password =$request->pass;
        $form->pass_confirmation =$request->pass_confirmation;

        $form->save();
        echo "ok";

        //return back()->with('success','Formalrio Ok');



    }
}
