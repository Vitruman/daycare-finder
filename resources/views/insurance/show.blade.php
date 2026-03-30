@extends('layouts.app')
@section('meta_title', $provider['name'] . ' Coverage for Rehab Treatment | DaycareHub')
@section('meta_description', 'Does ' . $provider['name'] . ' cover addiction treatment? Learn what\'s covered, accepted plans, how to verify benefits, and find ' . $provider['name'] . '-accepting facilities.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Insurance", "item": "https://daycarehub.us/insurance"},
        {"@@type": "ListItem", "position": 3, "name": "{{ $provider['name'] }}"}
    ]
}
</script>
@php
$faqs = [
    ['q' => "Does {$provider['name']} cover drug and alcohol rehab?", 'a' => $provider['coverage']],
    ['q' => "What types of treatment does {$provider['name']} cover?", 'a' => "{$provider['name']} typically covers: " . implode(', ', $provider['covered_treatments'] ?? []) . ". Coverage details vary by specific plan. Call (855) 321-3614 to verify your exact benefits."],
    ['q' => "How do I verify my {$provider['name']} benefits for rehab?", 'a' => implode(' ', $provider['how_to_verify'] ?? [])],
    ['q' => "Which {$provider['name']} plans cover addiction treatment?", 'a' => "Plans that typically cover treatment include: " . implode(', ', $provider['plans']) . ". Most plans provide behavioral health benefits that include substance abuse treatment under the Mental Health Parity Act."],
    ['q' => "Do I need pre-authorization from {$provider['name']} for rehab?", 'a' => "Many {$provider['name']} plans require pre-authorization for residential and inpatient treatment. Outpatient and IOP programs typically do not need prior approval. Contact {$provider['name']} behavioral health services or call DaycareHub at (855) 321-3614 to confirm."],
];
@endphp
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        @foreach($faqs as $i => $faq)
        {"@@type": "Question", "name": "{{ addslashes($faq['q']) }}", "acceptedAnswer": {"@@type": "Answer", "text": "{{ addslashes($faq['a']) }}"}}@if($i < count($faqs) - 1),@endif
        @endforeach
    ]
}
</script>
@endsection

@section('content')
<!-- Hero -->
<section class="bg-gradient-to-b from-emerald-50 to-white py-14">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-500 mb-6">
            <a href="/" class="hover:text-emerald-600">Home</a>
            <span class="mx-2">/</span>
            <a href="/insurance" class="hover:text-emerald-600">Insurance</a>
            <span class="mx-2">/</span>
            <span class="text-gray-900">{{ $provider['name'] }}</span>
        </nav>

        <div class="flex items-center gap-4 mb-6">
            <img src="{{ $provider['logo'] }}" alt="{{ $provider['name'] }}" class="h-10">
            <span class="text-xs px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 font-semibold">{{ $provider['type'] }}</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Does {{ $provider['name'] }} Cover Rehab?</h1>
        <p class="text-xl text-gray-600 leading-relaxed">{{ $provider['coverage'] }}</p>
    </div>
</section>

<!-- What's Covered -->
<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Treatment covered by {{ $provider['name'] }}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            @foreach($provider['covered_treatments'] ?? [] as $ct)
            <div class="flex items-center gap-3 bg-emerald-50 rounded-xl p-4 border border-emerald-100">
                <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                <span class="text-gray-800 font-medium">{{ $ct }}</span>
            </div>
            @endforeach
        </div>
        <p class="mt-4 text-sm text-gray-500">Coverage levels and cost-sharing vary by plan. <a href="tel:+18553213614" class="text-emerald-600 font-semibold hover:underline">Call (855) 321-3614</a> to verify your specific benefits.</p>
    </div>
</section>

<!-- Plans -->
<section class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">{{ $provider['name'] }} plans that cover treatment</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            @foreach($provider['plans'] as $plan)
            <div class="flex items-center gap-3 bg-white rounded-xl p-4 border border-gray-100">
                <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <span class="text-gray-700 font-medium">{{ $plan }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- How to Verify -->
<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">How to verify your {{ $provider['name'] }} benefits</h2>
        <div class="space-y-4">
            @foreach($provider['how_to_verify'] ?? [] as $i => $step)
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 font-bold text-sm flex items-center justify-center">{{ $i + 1 }}</div>
                <p class="text-gray-700 pt-1">{{ $step }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Mid CTA -->
<section class="py-10 bg-emerald-50">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <p class="text-gray-700 mb-3">Skip the phone menu — <strong>we'll verify your {{ $provider['name'] }} benefits for free</strong></p>
        <a href="tel:+18553213614" class="inline-flex items-center gap-2 text-emerald-700 font-bold text-lg hover:text-emerald-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Call (855) 321-3614 — Free & Confidential
        </a>
    </div>
</section>

<!-- Treatment Types cross-link -->
<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Treatment programs covered</h2>
        <p class="text-gray-600 mb-6">Learn more about the types of treatment your {{ $provider['name'] }} plan may cover:</p>
        <div class="flex flex-wrap gap-3">
            @foreach([
                'inpatient-rehab' => 'Inpatient Rehab',
                'outpatient-programs' => 'Outpatient Programs',
                'medical-detox' => 'Medical Detox',
                'intensive-outpatient' => 'Intensive Outpatient (IOP)',
                'medication-assisted-treatment' => 'MAT',
                'dual-diagnosis' => 'Dual Diagnosis',
                'sober-living' => 'Sober Living',
            ] as $tSlug => $tName)
            <a href="/treatment/{{ $tSlug }}" class="px-4 py-2 rounded-lg bg-gray-50 border border-gray-200 text-sm text-gray-700 hover:border-emerald-300 hover:text-emerald-700 hover:bg-emerald-50 transition-colors">{{ $tName }}</a>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-14 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">{{ $provider['name'] }} & Rehab FAQ</h2>
        <div class="space-y-3">
            @foreach($faqs as $faq)
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">{{ $faq['q'] }}<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600 leading-relaxed">{{ $faq['a'] }}</div>
            </details>
            @endforeach
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="py-14 bg-emerald-700 text-white">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Verify your {{ $provider['name'] }} benefits now</h2>
        <p class="text-emerald-100 mb-8 text-lg">Free, confidential benefits check. We'll tell you exactly what your plan covers.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:+18553213614" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614
            </a>
            <a href="{{ route('facilities.index') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-xl border-2 border-white/50 font-bold text-lg hover:bg-white/10 transition-colors">
                Find {{ $provider['name'] }} Centers
            </a>
        </div>
    </div>
</section>

<!-- Other Providers -->
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Other insurance providers</h2>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            @foreach($allProviders as $s => $p)
                @if($s !== $slug)
                <a href="/insurance/{{ $s }}" class="flex items-center gap-3 p-4 bg-gray-50 rounded-xl hover:bg-emerald-50 border border-gray-100 transition-colors">
                    <img src="{{ $p['logo'] }}" alt="{{ $p['name'] }}" class="h-5 max-w-[80px] object-contain">
                    <span class="text-xs font-semibold text-gray-700">{{ $p['name'] }}</span>
                </a>
                @endif
            @endforeach
        </div>
    </div>
</section>

<!-- Last Updated -->
<div class="max-w-7xl mx-auto px-4 py-6 text-center">
    <p class="text-xs text-gray-400">Last updated: {{ date('F j, Y') }} &bull; Coverage information may change — verify with your insurer &bull; Reviewed by DaycareHub Editorial Team</p>
</div>
@endsection