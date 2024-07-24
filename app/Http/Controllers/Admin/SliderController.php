<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.slider_index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin.sliders.slider_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images/sliders', 'public');

        Slider::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function update(Request $request, $id)
    {
            // Validate and update the slider
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slider = Slider::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($slider->image);
            $imagePath = $request->file('image')->store('images/sliders', 'public');
        } else {
            $imagePath = $slider->image;
        }

        $slider->update([
            'title' => $request->title,
            'image' => $imagePath,
        ]);


        return redirect()->route('slider.index')->with('success', 'Slider updated successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.slider_edit', compact('slider'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $id)
    {
        try {
            // Delete the slider
            $slider = Slider::findOrFail($id);
            Storage::disk('public')->delete($slider->image);
            $slider->delete();

            return redirect()->route('slider.index')->with('success', 'Slider deleted successfully.');

        } catch (\Exception $e) {

            return redirect()->route('slider.index')->with('error', 'Failed to delete slider.');
        }

        // $slider->delete();
        // return redirect()->route('slider.index')->with('success', 'Slider deleted successfully.');
    }
}
