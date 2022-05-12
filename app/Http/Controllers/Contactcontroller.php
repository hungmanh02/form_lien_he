<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
    public function form_contact(){
        return view('form');
    }
    public function creat_form(Request $request){
        
    }
}
