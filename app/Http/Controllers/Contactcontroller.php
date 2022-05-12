<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Contactcontroller extends Controller
{
    public function form_contact(){
        return view('form');
    }
    public function creat_form(Request $request){
        $contact = new Contact;
 
        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->content = $request->content;
 
        $contact->save();
        Session::put('message','thêm liên hệ thành công');
        return Redirect::to('/');
    }
}
