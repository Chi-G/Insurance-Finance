<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $subscription = $user->subscription; // Assuming there's a relationship set up

        return view('user.dashboard', compact('user', 'subscription'));
    }
}
