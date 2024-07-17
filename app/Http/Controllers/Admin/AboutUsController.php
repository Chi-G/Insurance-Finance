<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.about_index', compact('abouts'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.about.about_create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title1' => 'required|string|max:255',
            'title1_desc' => 'required|string',
            'mission_desc' => 'required|string',
            'vision_desc' => 'required|string',
            'experience_desc' => 'required|string',
            'title2' => 'required|string|max:255',
            'title2_desc' => 'required|string',
            'image1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image1Path = $request->file('image1')->store('images/about', 'public');
        $image2Path = $request->file('image2')->store('images/about', 'public');

        About::create([
            'title1' => $request->title1,
            'title1_desc' => $request->title1_desc,
            'mission_desc' => $request->mission_desc,
            'vision_desc' => $request->vision_desc,
            'experience_desc' => $request->experience_desc,
            'title2' => $request->title2,
            'title2_desc' => $request->title2_desc,
            'image1' => $image1Path,
            'image2' => $image2Path,
        ]);

        return redirect()->route('about.index')->with('success', 'About section created successfully.');
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.about_edit', compact('about'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'title1' => 'required|string|max:255',
            'title1_desc' => 'required|string',
            'mission_desc' => 'required|string',
            'vision_desc' => 'required|string',
            'experience_desc' => 'required|string',
            'title2' => 'required|string|max:255',
            'title2_desc' => 'required|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $about = About::findOrFail($id);

        if ($request->hasFile('image1')) {
            \Storage::disk('public')->delete($about->image1);
            $image1Path = $request->file('image1')->store('images/about', 'public');
            $about->image1 = $image1Path;
        }

        if ($request->hasFile('image2')) {
            \Storage::disk('public')->delete($about->image2);
            $image2Path = $request->file('image2')->store('images/about', 'public');
            $about->image2 = $image2Path;
        }

        $about->update([
            'title1' => $request->title1,
            'title1_desc' => $request->title1_desc,
            'mission_desc' => $request->mission_desc,
            'vision_desc' => $request->vision_desc,
            'experience_desc' => $request->experience_desc,
            'title2' => $request->title2,
            'title2_desc' => $request->title2_desc,
        ]);

        return redirect()->route('about.index')->with('success', 'About section updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        \Storage::disk('public')->delete($about->image1);
        \Storage::disk('public')->delete($about->image2);
        $about->delete();

        return redirect()->route('about.index')->with('success', 'About section deleted successfully.');
    }
}
