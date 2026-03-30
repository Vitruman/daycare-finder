<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Facility;
use App\Models\State;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredStates = \App\Models\Organization::query()
            ->selectRaw('state, COUNT(*) as facilities_count')
            ->whereNotNull('state')
            ->groupBy('state')
            ->orderByDesc('facilities_count')
            ->take(6)
            ->get()
            ->map(function ($row) {
                $row->name = $row->state;
                $row->code = $row->state;
                $row->slug = \Illuminate\Support\Str::slug($row->state);
                return $row;
            });

        $featuredFacilities = \App\Models\Organization::query()
            ->latest('created_at')
            ->take(6)
            ->get();

        $recentBlogs = \App\Models\Blog::published()->latest('published_at')->take(5)->get();

        return view('home', compact('featuredStates', 'featuredFacilities', 'recentBlogs'));
    }
}
