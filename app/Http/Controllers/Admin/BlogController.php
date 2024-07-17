<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.blog_index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.blog_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image_sm' => 'required|string|max:255',
            'image_bg' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'desc1' => 'required',
            'desc2' => 'required',
            'excert' => 'required',
        ]);

        Blog::create($request->all());

        return redirect()->route('blog.index')->with('success', 'Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.blog_edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'image_sm' => 'required|string|max:255',
            'image_bg' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'desc1' => 'required',
            'desc2' => 'required',
            'excert' => 'required',
        ]);

        $blog->update($request->all());

        return redirect()->route('blog.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
