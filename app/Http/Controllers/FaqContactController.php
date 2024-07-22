<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqContactController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'msg_subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Flash a thank you message
        return redirect()->route('/')->with('status', 'Thanks for reaching out, we\'ll get in touch.');
    }

    public function faq(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'msg_subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Flash a thank you message
        return redirect()->route('faq')->with('status', 'Thanks for reaching out, we\'ll get in touch.');
    }

    public function index() {
        return view('faq');
    }
}
