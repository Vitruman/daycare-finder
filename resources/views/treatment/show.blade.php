@extends('layouts.app')

@section('meta_title', $treatment['meta_title'])
@section('meta_description', $treatment['meta_desc'])

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Treatment", "item": "https://daycarehub.us/treatment"},
        {"@@type": "ListItem", "position": 3, "name": "{{ $treatment['title'] }}"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "MedicalWebPage",
    "name": "{{ $treatment['title'] }}",
    "description": "{{ $treatment['meta_desc'] }}",
    "url": "https://daycarehub.us/treatment/{{ $slug }}",
    "lastReviewed": "{{ date('Y-m-d') }}",
    "reviewedBy": {
        "@@type": "Organization",
        "name": "DaycareHub Editorial Team"
    },
    "about": {
        "@@type": "MedicalTherapy",
        "name": "{{ $treatment['title'] }}"
    }
}
</script>
@php
$faqs = [
    ['q' => "What is " . strtolower($treatment['title']) . "?", 'a' => $treatment['overview']],
    ['q' => "Who should consider " . strtolower($treatment['title']) . "?", 'a' => $treatment['who']],
    ['q' => "How long does " . strtolower($treatment['title']) . " last?", 'a' => "Typical duration for " . strtolower($treatment['title']) . " is " . $treatment['duration'] . ". However, treatment length should be individualized based on clinical assessment, progress, and subsidy programs."],
    ['q' => "How much does " . strtolower($treatment['title']) . " cost?", 'a' => "The average cost is " . $treatment['cost'] . ". " . $treatment['insurance'] . ". Many facilities offer sliding-scale fees and payment plans. Call (855) 321-3614 to verify your specific coverage."],
    ['q' => "What is the success rate of " . strtolower($treatment['title']) . "?", 'a' => "Success rates for " . strtolower($treatment['title']) . " are approximately " . $treatment['success_rate'] . " for sustained recovery. Success improves with longer treatment duration, aftercare participation, and addressing co-occurring disorders."],
];
@endphp
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        @foreach($faqs as $i => $faq)
        {"@@type": "Question", "name": "{{ $faq['q'] }}", "acceptedAnswer": {"@@type": "Answer", "text": "{{ addslashes($faq['a']) }}"}}@if($i < count($faqs) - 1),@endif
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
            <a href="/treatment" class="hover:text-emerald-600">Treatment</a>
            <span class="mx-2">/</span>
            <span class="text-gray-900">{{ $treatment['title'] }}</span>
        </nav>

        <div class="flex items-center gap-3 mb-4">
            <span class="inline-block px-4 py-1.5 rounded-full bg-emerald-100 text-emerald-700 text-sm font-bold">{{ $treatment['hero_label'] }}</span>
            <span class="text-xs text-gray-400">Reviewed by DaycareHub Editorial Team &bull; {{ date('F j, Y') }}</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ $treatment['title'] }}</h1>

        <!-- Quick stats pills -->
        <div class="flex flex-wrap gap-3 mt-6">
            <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-xl shadow-sm border border-gray-100">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="text-sm"><strong>Duration:</strong> {{ $treatment['duration'] }}</span>
            </div>
            <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-xl shadow-sm border border-gray-100">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 8v1"/></svg>
                <span class="text-sm"><strong>Cost:</strong> {{ $treatment['cost'] }}</span>
            </div>
            <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-xl shadow-sm border border-gray-100">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <span class="text-sm"><strong>Insurance:</strong> {{ $treatment['insurance'] }}</span>
            </div>
            <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-xl shadow-sm border border-gray-100">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                <span class="text-sm"><strong>Success Rate:</strong> {{ $treatment['success_rate'] }}</span>
            </div>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Overview</h2>
        <p class="text-gray-600 leading-relaxed text-lg">{{ $treatment['overview'] }}</p>
    </div>
</section>

<!-- Who Is It For -->
<section class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Who is this treatment for?</h2>
        <p class="text-gray-600 leading-relaxed text-lg">{{ $treatment['who'] }}</p>
    </div>
</section>

<!-- What's Included -->
<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">What does {{ strtolower($treatment['title']) }} include?</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach($treatment['what_includes'] as $item)
            <div class="flex items-start gap-3 bg-gray-50 rounded-xl p-4 border border-gray-100">
                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                <span class="text-gray-700">{{ $item }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Mid-page CTA -->
<section class="py-10 bg-emerald-50">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <p class="text-gray-700 mb-3">Need help finding <strong>{{ strtolower($treatment['title']) }}</strong> near you?</p>
        <a href="tel:+18553213614" class="inline-flex items-center gap-2 text-emerald-700 font-bold text-lg hover:text-emerald-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Call (855) 321-3614 — Free & Confidential
        </a>
    </div>
</section>

<!-- Subsidy Programs -->
<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Insurance coverage for {{ strtolower($treatment['title']) }}</h2>
        <p class="text-gray-600 mb-6">{{ $treatment['insurance'] }}. Verify your specific benefits:</p>
        <div class="flex flex-wrap gap-3">
            @foreach(['aetna' => 'Aetna', 'bcbs' => 'BlueCross BlueShield', 'cigna' => 'Cigna', 'uhc' => 'UnitedHealthcare', 'anthem' => 'Anthem', 'humana' => 'Humana', 'kaiser' => 'Kaiser Permanente', 'medicaid' => 'Medicaid', 'medicare' => 'Medicare', 'tricare' => 'TRICARE'] as $insSlug => $insName)
            <a href="{{ route('insurance.show', $insSlug) }}" class="flex items-center gap-2 px-3 py-2 rounded-lg bg-gray-50 border border-gray-200 hover:border-emerald-300 hover:bg-emerald-50 transition-colors">
                <img src="/images/insurance/{{ $insSlug }}.svg" alt="{{ $insName }}" class="h-5 w-auto">
                <span class="text-sm text-gray-700">{{ $insName }}</span>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-14 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
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

<!-- Find by State -->
<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Find {{ strtolower($treatment['title']) }} by state</h2>
        <div class="flex flex-wrap gap-2">
            @foreach(['CA', 'TX', 'FL', 'NY', 'PA', 'IL', 'OH', 'GA', 'NC', 'MI', 'NJ', 'AZ', 'WA', 'MA', 'CO', 'TN'] as $st)
            <a href="{{ route('states.show', strtolower($st)) }}" class="px-3 py-1.5 rounded-lg bg-gray-50 border border-gray-200 text-sm text-gray-700 hover:border-emerald-300 hover:text-emerald-700 transition-colors">{{ $st }}</a>
            @endforeach
            <a href="{{ route('states.index') }}" class="px-3 py-1.5 rounded-lg bg-emerald-100 text-sm text-emerald-700 font-medium hover:bg-emerald-200 transition-colors">All 50 States &rarr;</a>
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="py-14 bg-emerald-700 text-white">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Find {{ strtolower($treatment['title']) }} near you</h2>
        <p class="text-emerald-100 mb-8 text-lg">We have 26,000+ verified facilities across all 50 states. Call for a free, confidential consultation.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:+18553213614" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614
            </a>
            <a href="{{ route('facilities.index') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-xl border-2 border-white/50 font-bold text-lg hover:bg-white/10 transition-colors">
                Browse All Centers
            </a>
        </div>
    </div>
</section>

<!-- Other Treatments -->
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Explore other treatment types</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($allTreatments as $s => $t)
                @if($s !== $slug)
                <a href="/treatment/{{ $s }}" class="block p-4 bg-gray-50 rounded-xl hover:bg-emerald-50 hover:border-emerald-200 border border-gray-100 transition-colors">
                    <span class="text-sm font-semibold text-gray-900">{{ $t['title'] }}</span>
                    <span class="block text-xs text-gray-500 mt-1">{{ $t['duration'] }} &bull; {{ $t['success_rate'] }}</span>
                </a>
                @endif
            @endforeach
        </div>
    </div>
</section>

<!-- Last Updated -->
<div class="max-w-7xl mx-auto px-4 py-6 text-center">
    <p class="text-xs text-gray-400">Last updated: {{ date('F j, Y') }} &bull; Reviewed by DaycareHub Editorial Team &bull; Data sourced from SAMHSA</p>
</div>
@endsection