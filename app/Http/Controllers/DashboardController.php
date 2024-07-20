<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $subscription = Subscription::where('user_id', $user->id)->first();
        $transactions = Transaction::where('user_id', $user->id)->get(); // Fetch user's transactions

        return view('user.dashboard', compact('user', 'subscription', 'transactions'));
    }
}
