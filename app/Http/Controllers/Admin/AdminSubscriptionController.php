<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\User;


class AdminSubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::with('user')->get();

        return view('admin.portfolio.portfolio_index', compact('subscriptions'));
    }

    public function edit(Subscription $subscription)
    {
        $users = User::all();
        return view('admin.portfolio.porfolio_edit', compact('subscription', 'users'));
    }

    public function update(Request $request, Subscription $subscription)
    {
        $subscription->update([
            'plan' => $request->plan,
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
