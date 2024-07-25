<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdrawal;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;


class WithdrawalController extends Controller
{
    public function index()
    {
        $withdrawals = Withdrawal::latest()->paginate(6);
        if (request()->ajax()) {
            return view('welcome', compact('withdrawals'))->render();
        }

        foreach ($withdrawals as $withdrawal) {
            $withdrawal->date = Carbon::parse($withdrawal->date);
        }

        return view('welcome', compact('withdrawals'));
    }

    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'wallet_address' => 'required|string',
        ]);

        // Simulate processing time (5 seconds)
        // sleep(2);

        $user = auth()->user();
        $balance = $user->subscription->transactions->sum('profit_per_month') ?? 0;

        if ($request->amount > $balance) {
            return response()->json(['success' => false, 'message' => 'Insufficient balance']);
        }

        $withdrawal = Withdrawal::create([
            'user_id'=> $user->id,
            'name' => $user->name,
            'amount' => $request->amount,
            'wallet_address' => $request->wallet_address,
            'status' => 'pending',
            'date' => Carbon::now(),
        ]);

        // Deduct the withdrawn amount from the user's balance
        $user->subscription->transactions()->create([
            'subscription_id' => $user->subscription->id,
            'user_id' => $user->id,
            'plan_id' => $user->subscription->plan_id,
            'amount' => -$request->amount,
            'percentage_rate' => 0,
            'profit_per_month' => -$request->amount,
        ]);

        // Send email to user
        // Mail::to($user->email)->send(new \App\Mail\WithdrawalRequest($withdrawal));

        // return redirect()->route('user.withdrawal')->with('success', 'Withdrawal request submitted successfully.');

         // Return a JSON response
         return response()->json(['success' => true]);
    }
}
