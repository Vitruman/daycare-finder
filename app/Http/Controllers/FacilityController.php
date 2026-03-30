<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FacilityController extends Controller
{
    public function index(Request $request)
    {
        $query = Organization::query();

        // State filter
        if ($request->filled('state')) {
            $query->where('state', $request->state);
        }

        // City filter
        if ($request->filled('city')) {
            $query->where('city', 'like', '%' . $request->city . '%');
        }

        // ZIP filter
        if ($request->filled('zip')) {
            $query->where(function($q) use ($request) {
                $q->where('zip', $request->zip)->orWhere('zip_code', $request->zip);
            });
        }

        // Age filter
        if ($request->filled('age')) {
            $query->where(function($q) use ($request) {
                $q->where('age_range', 'like', '%' . $request->age . '%')
                  ->orWhere('program_type', 'like', '%' . $request->age . '%');
            });
        }

        // Program type filter
        if ($request->filled('type')) {
            $query->where('program_type', 'like', '%' . $request->type . '%');
        }

        // Text search
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('rehab_name', 'like', '%' . $request->search . '%')
                    ->orWhere('city', 'like', '%' . $request->search . '%')
                    ->orWhere('zip', $request->search)
                    ->orWhere('zip_code', $request->search);
            });
        }

        // Safety filter
        if ($request->filled('safety')) {
            if ($request->safety === 'good') {
                $query->where('violation_rate', '<=', 20)->orWhereNull('violation_rate');
            } elseif ($request->safety === 'rated') {
                $query->whereNotNull('violation_rate');
            }
        }

        // Sort
        $sortBy = $request->get('sort', 'latest');
        match($sortBy) {
            'name'   => $query->orderBy('rehab_name'),
            'safety' => $query->orderBy('violation_rate'),
            default  => $query->orderByDesc('created_at'),
        };

        $facilities = $query->paginate(15)->withQueryString();

        // State list for dropdown
        $states = Organization::query()
            ->whereNotNull('state')
            ->select('state')
            ->distinct()
            ->orderBy('state')
            ->pluck('state')
            ->map(fn($s) => (object)['code' => $s, 'name' => $s]);

        return view('facilities.index', compact('facilities', 'states'));
    }

    public function show(Organization $facility)
    {
        $relatedFacilities = Organization::query()
            ->where('state', $facility->state)
            ->where('city', $facility->city)
            ->where('id', '!=', $facility->id)
            ->limit(6)
            ->get();

        // Same ZIP centers
        $nearbyByZip = Organization::query()
            ->where('zip', $facility->zip)
            ->where('id', '!=', $facility->id)
            ->limit(4)
            ->get();

        return view('facilities.show', compact('facility', 'relatedFacilities', 'nearbyByZip'));
    }
}
