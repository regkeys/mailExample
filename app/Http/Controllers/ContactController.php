<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }

    public function send(){
        $data = request()->validate([
            'name' => 'required|min:3',
            'address' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:2',
        ]);

        Mail::to('regkeys75@gmail.com')->send(new ContactUs($data));

        //dd('sent');
        return redirect()->back()->with('success', 'Your Message was sent successfully');
    }

}
