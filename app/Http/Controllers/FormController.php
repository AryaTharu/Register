<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function sum(Request $request){
        $name = $request->name;
        $address =$request->address;
        $contact = $request->contact;
        $email =$request->email;
        $comment=$request->comment;


        return view('form',compact('name','address','contact','email','comment'));
    }
}
