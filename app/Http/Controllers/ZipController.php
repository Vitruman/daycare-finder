<?php

namespace App\Http\Controllers;

use App\Models\Organization;

class ZipController extends Controller
{
    public function index()
    {
        return view('zip.index');
    }

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
            ->orderBy('organization_name')
            ->get();

        if ($centers->isEmpty()) {
            return view('zip.not-found', ['zip' => $zip]);
        }

        $stats = [
            'total' => $centers->count(),
            'infant' => $centers->filter(fn($c) => str_contains(strtolower($c->ages_served_desc ?? ''), 'infant'))->count(),
            'preschool' => $centers->filter(fn($c) => str_contains(strtolower($c->ages_served_desc ?? ''), 'preschool'))->count(),
        ];

        $firstCenter = $centers->first();
        $cityTitle = $firstCenter->city ?? 'Unknown City';
        $state = $firstCenter->state;

        return view('zip.show', compact('zip', 'centers', 'stats', 'cityTitle', 'state'));
    }
}
