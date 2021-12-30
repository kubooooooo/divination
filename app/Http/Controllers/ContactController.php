<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function store(ContactRequest $request){
        Contact::create([
          'name' => $request->name,
          'email' => $request->email,
          'message' => $request->message,
        ]);

        return view('inquiry.finish');
    }
}
