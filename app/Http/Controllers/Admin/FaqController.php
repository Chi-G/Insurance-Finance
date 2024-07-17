<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faq.faq_index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faq.faq_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'faq1_title' => 'required|string|max:255',
            'faq1_desc' => 'required|string',
            'faq2_title' => 'nullable|string|max:255',
            'faq2_desc' => 'nullable|string',
            'faq3_title' => 'nullable|string|max:255',
            'faq3_desc' => 'nullable|string',
            'faq4_title' => 'nullable|string|max:255',
            'faq4_desc' => 'nullable|string',
            'faq5_title' => 'nullable|string|max:255',
            'faq5_desc' => 'nullable|string',
        ]);

        Faq::create($request->all());

        return redirect()->route('faq.index')->with('success', 'FAQ created successfully.');
    }

    public function edit(Faq $faq)
    {
        return view('admin.faq.faq_edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'faq1_title' => 'required|string|max:255',
            'faq1_desc' => 'required|string',
            'faq2_title' => 'nullable|string|max:255',
            'faq2_desc' => 'nullable|string',
            'faq3_title' => 'nullable|string|max:255',
            'faq3_desc' => 'nullable|string',
            'faq4_title' => 'nullable|string|max:255',
            'faq4_desc' => 'nullable|string',
            'faq5_title' => 'nullable|string|max:255',
            'faq5_desc' => 'nullable|string',
        ]);

        $faq->update($request->all());

        return redirect()->route('faq.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faq.index')->with('success', 'FAQ deleted successfully.');
    }
}
