<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;
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
}
