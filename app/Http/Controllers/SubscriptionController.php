<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function index()
    {
        $plans = [
            'PRIME PROFIT ELITE | Min Investment $1000 | Max Investment $5000 | Average Monthly 50%',
            'PRESTIGE ELITE | Min Investment $2000 | Max Investment $15000 | Average Monthly 100%',
            'IMPERIAL INCOME ELITE | Min Investment $3000 | Max Investment $20000 | Average Monthly 200%',
            'TERRA ELITE | Min Investment $4000 | Max Investment $25000 | Average Monthly 250%',
            'PRESTIGE PORTFOLIO ELITE | Min Investment $5000 | Max Investment $30000 | Average Monthly 300%',
            'NEXUS ELITE | Min Investment $6000 | Max Investment $35000 | Average Monthly 325%',
            'ECHELON EQUITY ELITE | Min Investment $7000 | Max Investment Plan $40000 | Average Monthly 350%',
            'ZENITH YIELD ELITE | Min Investment $10000 | Max Investment $50000 | Average Monthly 400%',
        ]; // Define your subscription plans

        $user = Auth::user();
        $subscription = Subscription::where('user_id', $user->id)->first();

        return view('user.portfolio', compact('plans', 'user', 'subscription'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan' => 'required|string|in:PRIME PROFIT ELITE,PRESTIGE ELITE,IMPERIAL INCOME ELITE,TERRA ELITE,PRESTIGE PORTFOLIO ELITE,NEXUS ELITE,ECHELON EQUITY ELITE,ZENITH YIELD ELITE',
        ]);

        $user = Auth::user();

        // Create a new subscription
        Subscription::updateOrCreate(
            ['user_id' => $user->id],
            ['plan' => $request->plan, 'status' => 'pending'] // Default to pending until admin updates
        );

        return redirect()->route('user.portfolio')->with('success', 'Your subscription request is pending.');
    }

    public function show()
    {
        $user = Auth::user();
        $subscription = Subscription::where('user_id', $user->id)->first();

        return view('user.portfolio', compact('user', 'subscription'));
    }
}
