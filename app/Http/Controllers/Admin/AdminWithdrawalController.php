<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Withdrawal;
use App\Models\User;

use Illuminate\Http\Request;

class AdminWithdrawalController extends Controller
{
    public function index() {
        // $withdrawals = Withdrawal::all();
        $withdrawals = Withdrawal::with('user')->get();
        return view('admin.withdrawal.withdrawal_index', compact('withdrawals'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.withdrawal.withdrawal_create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'name' => 'required',
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'currency' => 'required',
        ]);

        Withdrawal::create($request->all());
        return redirect()->route('admin_withdrawals.index')->with('success', 'Withdrawal created successfully.');
    }

    public function edit($id) {
        $withdrawal = Withdrawal::findOrFail($id);
        $users = User::all();
        return view('admin.withdrawal.withdrawal_edit', compact('withdrawal', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'name' => 'required',
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'currency' => 'required',
        ]);

        $withdrawals = Withdrawal::findOrFail($id);
        $withdrawals->update($request->all());
        return redirect()->route('admin_withdrawals.index')->with('success', 'Withdrawal updated successfully.');
    }

    public function destroy($id) {
        $withdrawals = Withdrawal::findOrFail($id);
        $withdrawals->delete();
        return redirect()->route('admin_withdrawals.index')->with('success', 'Withdrawal deleted successfully.');
    }
}
