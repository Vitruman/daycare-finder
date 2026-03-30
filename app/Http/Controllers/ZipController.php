<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZipController extends Controller
{
    public function show(string $zip)
    {
        $zip = preg_replace('/[^0-9]/', '', $zip);

        if (strlen($zip) !== 5) {
            abort(404);
        }

        $centers = Organization::query()
            ->where(function($q) use ($zip) {
                $q->where('zip', $zip)->orWhere('zip_code', $zip);
            })
            ->where('permit_status', '!=', 'Expired')
            ->orWhereNull('permit_status')
            ->orderByDesc('created_at')
            ->get();

        if ($centers->isEmpty()) {
            // Try nearby ZIPs or show empty state
            $nearbyZip = substr($zip, 0, 4);
            $centers = Organization::query()
                ->where(function($q) use ($nearbyZip) {
                    $q->where('zip', 'like', $nearbyZip . '%')
                      ->orWhere('zip_code', 'like', $nearbyZip . '%');
                })
                ->limit(12)
                ->get();
        }

        // Stats for this ZIP
        $stats = [
            'total' => $centers->count(),
            'infant' => $centers->filter(fn($c) => str_contains($c->age_range ?? '', '0'))->count(),
            'preschool' => $centers->filter(fn($c) => str_contains($c->age_range ?? '', 'PRE') || str_contains($c->program_type ?? '', 'PRESCHOOL'))->count(),
            'avg_capacity' => $centers->whereNotNull('max_capacity')->avg('max_capacity'),
            'avg_safety' => $centers->whereNotNull('violation_rate')->avg('violation_rate'),
        ];

        $city = $centers->first()?->city ?? 'This Area';
        $state = $centers->first()?->state ?? '';

        return view('zip.show', compact('centers', 'zip', 'city', 'state', 'stats'));
    }
}
