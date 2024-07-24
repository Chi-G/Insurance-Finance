<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvertController extends Controller
{
    public function index()
    {
        $adverts = Advert::all();
        return view('admin.advert.advert_index', compact('adverts'));
    }

    public function create()
    {
        return view('admin.advert.advert_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images/advert', 'public');

        Advert::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('advert.index')->with('success', 'Advert created successfully.');
    }

    public function edit($id)
    {
        $advert = Advert::findOrFail($id);
        return view('admin.advert.advert_edit', compact('advert'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $advert = Advert::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($advert->image);
            $imagePath = $request->file('image')->store('images/advert', 'public');
        } else {
            $imagePath = $advert->image;
        }

        $advert->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('advert.index')->with('success', 'Advert updated successfully.');
    }

    public function destroy($id)
    {
        $advert = Advert::findOrFail($id);
        Storage::disk('public')->delete($advert->image);
        $advert->delete();
        return redirect()->route('advert.index')->with('success', 'Advert deleted successfully.');
    }
}
