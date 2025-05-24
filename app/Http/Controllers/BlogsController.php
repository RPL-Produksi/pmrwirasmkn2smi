<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::where('status', 'published')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('blogs.index')->with($data);
    }

    public function detail(Request $request, $slug)
    {
        $data['blog'] = Blog::where('slug', $slug)
            ->where('status', 'published')
            ->where('published_at', '<=', now())
            ->firstOrFail();

        return view('blogs.detail')->with($data);
    }
}
