<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;

use Illuminate\Http\Request;

class AdminDepositController extends Controller
{
    public function index() {
        $deposits = Deposit::all();
        return view('admin.deposit.deposit_index', compact('deposits'));
    }

    public function create()
    {
        return view('admin.deposit.deposit_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'amount' => 'required',
            'currency' => 'required',
        ]);

        Deposit::create($request->all());
        return redirect()->route('admin_deposits.index')->with('success', 'Deposit created successfully.');
    }

    public function edit($id) {
        $deposit = Deposit::findOrFail($id);
        return view('admin.deposit.deposit_edit', compact('deposit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'currency' => 'required',
        ]);

        $deposit = Deposit::findOrFail($id);
        $deposit->update($request->all());
        return redirect()->route('admin_deposits.index')->with('success', 'Deposit updated successfully.');
    }

    public function destroy($id) {
        $deposit = Deposit::findOrFail($id);
        if ($deposit) {
            \Log::info("Deleting deposit with ID: {$id}");
            $deposit->delete();
            \Log::info("Deposit deleted successfully.");
        } else {
            \Log::error("Deposit with ID: {$id} not found.");
        }

        $deposit->delete();
        return redirect()->route('admin_deposits.index')->with('success', 'Deposit deleted successfully.');
    }
}
