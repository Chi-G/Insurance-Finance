<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Deposit;
use App\Models\Withdrawal;

class InvestmentController extends Controller
{
    public function index()
    {
        $deposits = Deposit::paginate(6);
        $withdrawals = Withdrawal::paginate(6);

        return view('investment', compact('deposits', 'withdrawals'));
    }
}
