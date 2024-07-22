<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public  function show(){
        return view('contact');
    }

    public function store(Request $request) {
        return redirect()->route('contact')->with('message', 'Thanks for reaching out, we\'ll get in touch');
    }
}
