<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdrawal;
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
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'wallet_address' => 'required|string',
        ]);

        $withdrawal = Withdrawal::create([
            'user_id' => auth()->id(),
            'amount' => $request->amount,
            'wallet_address' => $request->wallet_address,
            'status' => 'pending',
        ]);

        dd($withdrawal);

        $user = auth()->user();
        $user->withdrawal_status = 'pending';
        $user->save();

        // Send email to user
        // Mail::to($user->email)->send(new \App\Mail\WithdrawalRequest($withdrawal));

        return redirect()->route('user.withdrawal')->with('success', 'Withdrawal request submitted successfully.');
    }
}
