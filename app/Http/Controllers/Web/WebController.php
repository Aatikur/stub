<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\ProductImages;
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

    public function LithoImages(){
        $litho_data = ProductImages::where('product_category_id',1)->get();
        return view('web.product.product-portfolio1',compact('litho_data'));
    }

    public function corporateImages(){
        $corporate_data = ProductImages::where('product_category_id',2)->get();
        return view('web.product.product-portfolio2',compact('corporate_data'));
    }

    public function flexoImages(){
        $flexo_data = ProductImages::where('product_category_id',3)->get();
        return view('web.product.product-portfolio3',compact('flexo_data'));
    }

    public function promoImages(){
        $promo_data = ProductImages::where('product_category_id',4)->get();
        return view('web.product.product-portfolio4',compact('promo_data'));
    }


}
