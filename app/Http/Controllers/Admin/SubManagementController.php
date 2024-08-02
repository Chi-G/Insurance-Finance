<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;

class SubManagementController extends Controller
{
    // Display a listing of the users with their investments
    public function index()
    {
        $users = User::with('investment')->get();
        return view('admin.submanagement.index', compact('users'));
    }

    // Show the form for editing the specified investment for a specific user
    public function edit($user_id, $investment_id)
    {
        $investment = Investment::findOrFail($investment_id);
        return view('admin.submanagement.edit', compact('investment', 'user_id'));
    }

    // Update the specified investment for a specific user
    public function update(Request $request, $user_id, $investment_id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'daily_percent' => 'required|numeric|min:0',
            'per_day' => 'required|numeric|min:0',
            'min_invest' => 'required|numeric|min:0',
            'max_invest' => 'required|numeric|min:0',
            'average_month' => 'required|numeric|min:0',
        ]);

        $investment = Investment::findOrFail($investment_id);

        $investment->update($request->all());

        return redirect()->route('sub_management.index')->with('success', 'Investment updated successfully for user.');
    }

    // Remove the specified investment for a specific user
    public function destroy($user_id, $investment_id)
    {
        $investment = Investment::findOrFail($investment_id);
        $investment->delete();

        return redirect()->route('sub_management.index')->with('success', 'Investment deleted successfully for user.');
    }
}
