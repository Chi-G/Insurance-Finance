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
        // Validate and store the new slider
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // other validations...
        ]);

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->image = $request->image->store('sliders', 'public');
        // other fields...

        $slider->save();

        return redirect()->route('slider.index')->with('success', 'Slider created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function update(Request $request, Slider $slider)
    {
        // Validate and update the slider
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
            // other validations...
        ]);

        $slider->title = $request->title;
        if ($request->hasFile('image')) {
            $slider->image = $request->image->store('sliders', 'public');
        }
        // other fields...

        $slider->save();

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
    public function destroy(Slider $slider)
    {
        try {
            // Delete the slider
            $slider = Slider::findOrFail($id);
            $slider->delete();

            return redirect()->route('slider.index')->with('success', 'Slider deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('slider.index')->with('error', 'Failed to delete slider.');
        }

        // $slider->delete();
        // return redirect()->route('slider.index')->with('success', 'Slider deleted successfully.');
    }
}
