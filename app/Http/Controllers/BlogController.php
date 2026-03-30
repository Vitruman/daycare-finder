<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::published();

        if ($request->has('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $request->search . '%');
            });
        }

        $blogs = $query->latest('published_at')->paginate(12);
        $popular = Blog::published()->latest('published_at')->take(5)->get();

        return view('blog.index', compact('blogs', 'popular'));
    }

    public function show(Blog $blog)
    {
        // Ensure blog is published
        if (!$blog->is_published || ($blog->published_at && $blog->published_at->isFuture())) {
            abort(404);
        }

        // Get related blogs (same logic as in the requirement)
        $relatedBlogs = Blog::published()
            ->where('id', '!=', $blog->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        $popular = Blog::published()->latest('published_at')->take(5)->get();

        return view('blog.show', compact('blog', 'relatedBlogs', 'popular'));
    }
}
