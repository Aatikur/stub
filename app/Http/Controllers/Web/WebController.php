<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Contact;

class WebController extends Controller
{
    public function gallery(){
        $gallery = Gallery::get();
        return view('web.gallery.gallery',compact('gallery'));
    }

    public function addContacts(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email' =>'required',
            'message'=>'required'
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();
        if($contact->save()){
            return redirect()->route('web.response',['status'=>1]);
        }else{
            return redirect()->route('web.response',['status'=>2]);
        }

    }

    public function response($status){
        return view('web.contact.response',compact('status'));
        

    }


}
