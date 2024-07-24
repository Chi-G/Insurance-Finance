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

        $imagePath = $request->file('image')->store('images/review', 'public');

        Review::create([
            'name' => $request->name,
            'position' => $request->position,
            'status' => $request->status,
            'image' => $imagePath->image,
            'description' => $request->description,
        ]);

        return redirect()->route('review.index')->with('success', 'Review created successfully.');
    }

    public function edit(Review $review)
    {
        return view('admin.reviews.review_edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $advert = Review::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($advert->image);
            $imagePath = $request->file('image')->store('images/review', 'public');
        } else {
            $imagePath = $advert->image;
        }

        $advert->update([
            'name' => $request->name,
            'position' => $request->position,
            'status' => $request->status,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('review.index')->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('review.index')->with('success', 'Review deleted successfully.');
    }
}
