<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Transaction;
use App\Models\Plan;
use App\Models\User;
use App\Models\Withdrawal;


class AdminSubscriptionController extends Controller
{
    public function index()
    {
        $users = User::with(['subscription.plan', 'withdrawals'])->get();
        // $users = User::with('subscription')->get();
        return view('admin.portfolio.portfolio_index', compact('users'));
    }

    public function edit(Subscription $subscription)
    {
        $users = User::all();
        $plans = Plan::all();
        $withdrawals = Withdrawal::where('subscription_id', $subscription->id)->get(); // Fetch withdrawals related to this subscription
        return view('admin.portfolio.portfolio_edit', compact('subscription', 'users', 'plans', 'withdrawals'));
    }

    public function update(Request $request, Subscription $subscription, Withdrawal $id)
    {
        $request->validate([
            'plan_id' => 'required|exists:plans,id',
            'status' => 'required|string|in:not-subscribed,pending,processing,active-subscription',
            'withdrawal_id' => 'nullable|exists:withdrawals,id',
            'withdrawal_amount' => 'nullable|numeric',
            'withdrawal_status' => 'nullable|string|in:pending,approved,rejected',
        ]);

        $subscription->update([
            'plan_id' => $request->plan_id,
            'status' => $request->status,
        ]);

        // Update withdrawal if provided
        // if ($request->withdrawal_id) {
        //     $withdrawal = Withdrawal::find($request->id);
        //     if ($withdrawal) {
        //         $withdrawal->update([
        //             'amount' => $request->amount,
        //             'status' => $request->status,
        //         ]);
        //     }
        // }

        return redirect()->route('admin.subscriptions')->with('success', 'Subscription updated successfully.');
    }

    public function destroy(Subscription $subscription)
    {
        $subscription->delete();

        return redirect()->route('admin.subscriptions')->with('success', 'Subscription deleted successfully.');
    }
}
