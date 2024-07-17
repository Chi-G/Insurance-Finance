<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment;

class InvestmentController extends Controller
{
    public function index()
    {
        $investments = Investment::all();
        return view('admin.investment.investment_index', compact('investments'));
    }

    public function create()
    {
        return view('admin.investment.investment_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'daily_percent' => 'required|numeric',
            'per_day' => 'required|numeric',
            'min_invest' => 'required|numeric',
            'max_invest' => 'nullable|numeric',
            'average_month' => 'required|numeric',
        ]);

        Investment::create($request->all());
        return redirect()->route('investment.index')->with('success', 'Investment created successfully.');
    }

    public function edit(Investment $investment)
    {
        return view('admin.investment.investment_edit', compact('investment'));
    }

    public function update(Request $request, Investment $investment)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'daily_percent' => 'required|numeric',
            'per_day' => 'required|numeric',
            'min_invest' => 'required|numeric',
            'max_invest' => 'nullable|numeric',
            'average_month' => 'required|numeric',
        ]);

        $investment->update($request->all());
        return redirect()->route('investment.index')->with('success', 'Investment updated successfully.');
    }

    public function destroy(Investment $investment)
    {
        $investment->delete();
        return redirect()->route('investment.index')->with('success', 'Investment deleted successfully.');
    }
}
