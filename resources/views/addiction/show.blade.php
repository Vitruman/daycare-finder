@extends('layouts.app')
@section('meta_title', $substance['meta_title'])
@section('meta_description', $substance['meta_desc'])

@php
$faqs = [
    ['q' => "What are the signs of {$substance['substance']} addiction?", 'a' => "Common signs include: " . implode('; ', array_slice($substance['signs'], 0, 4)) . ". If you recognize these signs in yourself or a loved one, professional help is available."],
    ['q' => "What is the best treatment for {$substance['substance']} addiction?", 'a' => "The most effective approach combines medical care with behavioral therapy. Options include: " . implode(', ', array_slice($substance['treatments'], 0, 4)) . ". The right treatment depends on addiction severity, health history, and individual needs."],
    ['q' => "How long does {$substance['substance']} treatment take?", 'a' => "Treatment typically involves infant care (3-10 days), followed by full-time daycare (30-90 days) or part-time programs (3-6 months). Research consistently shows that longer treatment (90+ days) leads to better long-term outcomes."],
    ['q' => "Does insurance cover {$substance['substance']} childcare?", 'a' => "Yes. Under the Mental Health Parity Act, most insurance plans must cover early childhood treatment including infant care, inpatient, part-time, and medication-assisted treatment. Call (855) 321-3614 to verify your coverage."],
    ['q' => "Can you recover from {$substance['substance']} addiction?", 'a' => "Yes. With proper treatment and ongoing support, lasting recovery is achievable. Treatment success rates are 40-60%, comparable to other chronic conditions. Many people maintain long-term sobriety after completing evidence-based treatment programs."],
];
@endphp

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Substances", "item": "https://daycarehub.us/addiction"},
        {"@@type": "ListItem", "position": 3, "name": "{{ $substance['substance'] }}"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "MedicalWebPage",
    "name": "{{ $substance['title'] }}",
    "description": "{{ $substance['meta_desc'] }}",
    "url": "https://daycarehub.us/addiction/{{ $slug }}",
    "lastReviewed": "{{ date('Y-m-d') }}",
    "reviewedBy": {"@@type": "Organization", "name": "DaycareHub Editorial Team"}
}
</script>
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
<section class="bg-gradient-to-b from-emerald-50 to-white py-14">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-500 mb-6"><a href="/" class="hover:text-emerald-600">Home</a> <span class="mx-2">/</span> <a href="/addiction" class="hover:text-emerald-600">Substances</a> <span class="mx-2">/</span> <span class="text-gray-900">{{ $substance['substance'] }}</span></nav>
        <div class="flex items-center gap-3 mb-4">
            <span class="text-xs text-gray-400">Reviewed by DaycareHub Editorial Team &bull; {{ date('F j, Y') }}</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ $substance['title'] }}</h1>
        <p class="text-xl text-gray-600 leading-relaxed">{{ $substance['overview'] }}</p>
    </div>
</section>

<!-- Stats -->
<section class="py-10 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach($substance['stats'] as $stat)
        <div class="bg-emerald-50 rounded-xl p-4 text-center"><p class="text-sm font-semibold text-emerald-800">{{ $stat }}</p></div>
        @endforeach
    </div>
</section>

<!-- Warning Signs -->
<section class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Warning signs of {{ strtolower($substance['substance']) }} addiction</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            @foreach($substance['signs'] as $sign)
            <div class="flex items-start gap-3 bg-white rounded-xl p-4 border border-gray-100"><svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg><span class="text-gray-700">{{ $sign }}</span></div>
            @endforeach
        </div>
    </div>
</section>

<!-- Treatment Options -->
<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Treatment options for {{ strtolower($substance['substance']) }} addiction</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            @foreach($substance['treatments'] as $t)
            <div class="flex items-start gap-3 bg-gray-50 rounded-xl p-4 border border-gray-100"><svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-700">{{ $t }}</span></div>
            @endforeach
        </div>
    </div>
</section>

<!-- Cross-links: Treatment Types + Insurance -->
<section class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Explore treatment types</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach(['inpatient-rehab' => 'Inpatient', 'part-time-programs' => 'Outpatient', 'medical-infant care' => 'Infant Care', 'medication-assisted-treatment' => 'MAT', 'dual-diagnosis' => 'Dual Diagnosis', 'intensive-part-time' => 'IOP', 'sober-living' => 'Sober Living'] as $ts => $tn)
                    <a href="/treatment/{{ $ts }}" class="px-3 py-1.5 rounded-lg bg-white border border-gray-200 text-sm text-gray-700 hover:border-emerald-300 hover:text-emerald-700 transition-colors">{{ $tn }}</a>
                    @endforeach
                </div>
            </div>
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Check subsidy programs</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach(['aetna' => 'Aetna', 'bcbs' => 'BCBS', 'cigna' => 'Cigna', 'uhc' => 'UHC', 'medicaid' => 'Medicaid', 'medicare' => 'Medicare'] as $is => $in)
                    <a href="/insurance/{{ $is }}" class="px-3 py-1.5 rounded-lg bg-white border border-gray-200 text-sm text-gray-700 hover:border-emerald-300 hover:text-emerald-700 transition-colors">{{ $in }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-14 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">{{ $substance['substance'] }} Addiction FAQ</h2>
        <div class="space-y-3">
            @foreach($faqs as $faq)
            <details class="group bg-gray-50 rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">{{ $faq['q'] }}<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600 leading-relaxed">{{ $faq['a'] }}</div>
            </details>
            @endforeach
        </div>
    </div>
</section>

<!-- Related Resources -->
<section class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-lg font-bold text-gray-900 mb-4">Helpful resources</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            @foreach([
                ['How to Choose a Daycare Center', '/resources/how-to-choose-rehab'],
                ['What to Expect in Rehab', '/resources/what-to-expect-in-rehab'],
                ['Paying for Treatment', '/resources/paying-for-treatment'],
                ['Relapse Prevention Guide', '/resources/relapse-prevention'],
            ] as $r)
            <a href="{{ $r[1] }}" class="flex items-center gap-3 bg-white rounded-xl p-4 border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                <span class="text-sm font-medium text-gray-700">{{ $r[0] }}</span>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-14 bg-emerald-700 text-white">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Get help for {{ strtolower($substance['substance']) }} addiction today</h2>
        <p class="text-emerald-100 mb-8 text-lg">Free, confidential guidance to find the right treatment program. 26,000+ verified centers.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:+18553213614" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614
            </a>
            <a href="{{ route('facilities.index') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-xl border-2 border-white/50 font-bold text-lg hover:bg-white/10 transition-colors">Browse Centers</a>
        </div>
    </div>
</section>

<!-- Other Substances -->
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4"><h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Other substances</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($allSubstances as $s => $sub) @if($s !== $slug)
            <a href="/addiction/{{ $s }}" class="block p-4 bg-gray-50 rounded-xl hover:bg-emerald-50 border border-gray-100 transition-colors"><span class="text-sm font-semibold text-gray-900">{{ $sub['substance'] }}</span><span class="block text-xs text-gray-500 mt-1">{{ count($sub['treatments']) }} treatments</span></a>
            @endif @endforeach
        </div>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 py-6 text-center"><p class="text-xs text-gray-400">Last updated: {{ date('F j, Y') }} &bull; Sources: SAMHSA, NIDA, CDC &bull; Reviewed by DaycareHub Editorial Team</p></div>
@endsection