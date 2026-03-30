<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show(string $state, string $city, Request $request)
    {
        $cityName = str_replace('-', ' ', $city);
        $stateName = strtoupper($state);

        $query = Organization::query()
            ->whereRaw('LOWER(state) = ?', [strtolower($stateName)])
            ->whereRaw('LOWER(city) LIKE ?', ['%' . strtolower($cityName) . '%']);

        // Age filter
        if ($request->filled('age')) {
            $query->where('age_range', 'like', '%' . $request->age . '%')
                  ->orWhere('program_type', 'like', '%' . $request->age . '%');
        }

        // Type filter
        if ($request->filled('type')) {
            $query->where('program_type', 'like', '%' . $request->type . '%');
        }

        $centers = $query->paginate(15)->withQueryString();

        $stats = [
            'total' => Organization::whereRaw('LOWER(state) = ?', [strtolower($stateName)])
                ->whereRaw('LOWER(city) LIKE ?', ['%' . strtolower($cityName) . '%'])
                ->count(),
        ];

        return view('cities.show', compact('centers', 'cityName', 'stateName', 'stats'));
    }
}
