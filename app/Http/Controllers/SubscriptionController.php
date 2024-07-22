<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Plan;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        $user = Auth::user();
        $subscription = Subscription::where('user_id', $user->id)->first();
        $transactions = Transaction::where('user_id', $user->id)->get();

        return view('user.portfolio', compact('plans', 'user', 'subscription', 'transactions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan' => 'required|exists:plans,id',
        ]);

        $user = Auth::user();
        $plan = Plan::findOrFail($request->input('plan'));

        try {
            // Create or update the subscription with a default status of 'pending'
            $subscription = Subscription::updateOrCreate(
                ['user_id' => $user->id],
                ['plan_id' => $plan->id, 'status' => 'pending']
            );

            // Create a transaction record
            $transaction = Transaction::create([
                'subscription_id' => $subscription->id,
                'user_id' => $user->id,
                'plan_id' => $plan->id,
                'amount' => $plan->min_investment, // Assuming you have min_investment in plans table
                'percentage_rate' => $plan->average_monthly,
                'profit_per_month' => ($plan->min_investment * $plan->average_monthly) / 100,
            ]);

            return redirect()->route('user.portfolio')->with('success', 'Your subscription request is pending.');
        } catch (\Exception $e) {
            // Log the error or display an error message
            \Log::error('Failed to update or create subscription: ' . $e->getMessage());
            return redirect()->route('user.portfolio')->with('error', 'Failed to select subscription plan.');
        }
    }

    public function show()
    {
        $user = Auth::user();
        $subscription = Subscription::where('user_id', $user->id)->first();

        return view('user.portfolio', compact('user', 'subscription'));
    }

    public function payment() {
        $user = Auth::user();
        $subscriptionPlans = Plan::all();
        return view('user.payment', compact('subscriptionPlans', 'user'));
    }

    public function withdrawal() {
        $plans = Plan::all();
        $user = Auth::user();
        $subscription = Subscription::where('user_id', $user->id)->first();
        $transactions = Transaction::where('user_id', $user->id)->get();
        return view('user.withdrawal',  compact('plans', 'user', 'subscription', 'transactions'));
    }
}
