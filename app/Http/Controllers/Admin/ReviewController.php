<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('admin.reviews.review_index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.reviews.review_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'description' => 'required',
        ]);

        Review::create($request->all());

        return redirect()->route('review.index')->with('success', 'Review created successfully.');
    }

    public function edit(Review $review)
    {
        return view('admin.reviews.review_edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $review->update($request->all());

        return redirect()->route('review.index')->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('review.index')->with('success', 'Review deleted successfully.');
    }
}
