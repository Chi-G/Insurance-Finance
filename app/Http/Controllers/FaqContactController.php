<?php

namespace App\Http\Controllers;
use App\Models\FaqContact;
use Illuminate\Http\Request;

class FaqContactController extends Controller
{
    public function store(Request $request) {

        // Save the form details to the database
        FaqContact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Flash a thank you message
        return redirect()->route('faq.home')->with('status', 'You are a step from being an Elite, we\'ll get in touch!');
    }

    public function faq(Request $request) {

         // Save the form details to the database
         FaqContact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Flash a thank you message
        return redirect()->route('faq')->with('status', 'You are a step from being an Elite, we\'ll get in touch!');
    }

    public function index() {
        return view('faq');
    }
}
