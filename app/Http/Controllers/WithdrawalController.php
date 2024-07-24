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

        $user = auth()->user();

        $withdrawal = Withdrawal::create([
            'user_id'=> $user->id,
            'name' => $user->name,
            'amount' => $request->amount,
            'wallet_address' => $request->wallet_address,
            'status' => 'pending',
            'date' => Carbon::now(),
        ]);

        dd($withdrawal);

        // Send email to user
        // Mail::to($user->email)->send(new \App\Mail\WithdrawalRequest($withdrawal));

        return redirect()->route('user.withdrawal')->with('success', 'Withdrawal request submitted successfully.');
    }
}
