<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class DepositController extends Controller
{
    public function index()
    {
        $deposits = Deposit::latest()->paginate(6);
        if (request()->ajax()) {
            return view('welcome', compact('deposits'));
        }

        foreach ($deposits as $deposits) {
            $deposits->date = Carbon::parse($deposits->date);
        }

        return view('welcome', compact('deposits'));
    }
}
