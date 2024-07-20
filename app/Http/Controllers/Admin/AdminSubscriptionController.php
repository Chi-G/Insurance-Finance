<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Transaction;
use App\Models\Plan;
use App\Models\User;


class AdminSubscriptionController extends Controller
{
    public function index()
    {
        $users = User::with('subscription')->get();
        return view('admin.portfolio.portfolio_index', compact('users'));
    }

    public function edit(Subscription $subscription)
    {
        $users = User::all();
        $plans = Plan::all();
        return view('admin.portfolio.portfolio_edit', compact('subscription', 'users', 'plans'));
    }

    public function update(Request $request, Subscription $subscription)
    {
        $request->validate([
            'plan_id' => 'required|exists:plans,id',
            'status' => 'required|string|in:not-subscribed,pending,processing,active-subscription',
        ]);

        $subscription->update([
            'plan_id' => $request->plan_id,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.subscriptions')->with('success', 'Subscription updated successfully.');
    }

    public function destroy(Subscription $subscription)
    {
        $subscription->delete();

        return redirect()->route('admin.subscriptions')->with('success', 'Subscription deleted successfully.');
    }
}
