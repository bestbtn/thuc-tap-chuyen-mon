<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends FrontendController
{
    public function getContact(){

        return view('contact');
    }
    public function saveContact(Request $request){
        $contact = new Contact();
        $contact->c_name = $request->name;
        $contact->c_email = $request->email;
        $contact->c_title = $request->title;
        $contact->c_content = $request->c_content;
        $contact->save();
        return redirect()->back();
    }
}
