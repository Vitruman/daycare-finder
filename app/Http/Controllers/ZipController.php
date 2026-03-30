<?php

namespace App\Http\Controllers;

use App\Models\Organization;

class ZipController extends Controller
{
    public function show($zip)
    {
        $zip = preg_replace('/[^0-9]/', '', $zip);
        if (strlen($zip) !== 5) abort(404);

        $centers = Organization::query()
            ->where(function($q) use ($zip) {
                $q->where('zip', $zip)->orWhere('zip_code', $zip);
            })
            ->where(function($q) {
                $q->where('permit_status', '!=', 'Expired')
                   ->orWhereNull('permit_status');
            })
            ->orderByDesc('created_at')
            ->limit(50)
            ->get();

        if ($centers->isEmpty()) {
            $nearbyZip = substr($zip, 0, 4);
            $centers = Organization::where('zip', 'like', $nearbyZip . '%')
                ->limit(12)
                ->get();
        }

        $stats = [
            'total'     => $centers->count(),
            'infant'    => $centers->filter(fn($c) => str_contains($c->age_range ?? '', '0'))->count(),
            'preschool' => $centers->filter(fn($c) => str_contains($c->program_type ?? '', 'PRESCHOOL'))->count(),
            'avg_safety' => round($centers->whereNotNull('violation_rate')->avg('violation_rate') ?? 0, 1),
        ];

        $city  = $centers->first()?->city ?? 'This Area';
        $state = $centers->first()?->state ?? '';

        return view('zip.show', compact('centers', 'zip', 'city', 'state', 'stats'));
    }
}
