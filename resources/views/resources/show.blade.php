@extends('layouts.app')
@section('meta_title', $guide['meta_title'])
@section('meta_description', $guide['meta_desc'])

@php
$readTime = max(5, intval(array_sum(array_map(fn($s) => str_word_count($s['text']), $guide['sections'])) / 200));
$faqs = [
    ['q' => 'Is this guide free?', 'a' => 'Yes. All DaycareHub resources are 100% free and available to anyone. No registration or payment required.'],
    ['q' => 'Who wrote this guide?', 'a' => 'This guide was written by the DaycareHub Editorial Team and reviewed by childcare professionals. We follow evidence-based practices and cite authoritative sources including SAMHSA, NIDA, and NIH.'],
    ['q' => 'Can I share this with someone?', 'a' => 'Absolutely. We encourage sharing these resources with anyone who might benefit. Recovery affects entire families and communities — information is the first step.'],
];
@endphp

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Resources", "item": "https://daycarehub.us/resources"},
        {"@@type": "ListItem", "position": 3, "name": "{{ $guide['title'] }}"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "{{ $guide['title'] }}",
    "description": "{{ $guide['meta_desc'] }}",
    "url": "https://daycarehub.us/resources/{{ $slug }}",
    "datePublished": "2026-01-15",
    "dateModified": "{{ date('Y-m-d') }}",
    "author": {"@@type": "Organization", "name": "DaycareHub Editorial Team"},
    "publisher": {"@@type": "Organization", "name": "DaycareHub", "url": "https://daycarehub.us"}
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        @foreach($faqs as $i => $f)
        {"@@type": "Question", "name": "{{ $f['q'] }}", "acceptedAnswer": {"@@type": "Answer", "text": "{{ addslashes($f['a']) }}"}}@if($i < count($faqs) - 1),@endif
        @endforeach
    ]
}
</script>
@endsection

@section('content')
<!-- Hero -->
<section class="bg-gradient-to-b from-emerald-50 to-white py-14">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-500 mb-6">
            <a href="/" class="hover:text-emerald-600">Home</a>
            <span class="mx-2">/</span>
            <a href="/resources" class="hover:text-emerald-600">Resources</a>
            <span class="mx-2">/</span>
            <span class="text-gray-900">{{ $guide['title'] }}</span>
        </nav>

        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ $guide['title'] }}</h1>
        <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500 mb-6">
            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> {{ $readTime }} min read</span>
            <span>&bull;</span>
            <span>{{ count($guide['sections']) }} sections</span>
            <span>&bull;</span>
            <span>Updated {{ date('M Y') }}</span>
        </div>
        <p class="text-xl text-gray-600 leading-relaxed">{{ $guide['content'] }}</p>
    </div>
</section>

<!-- Table of Contents -->
<section class="py-8 bg-white border-b border-gray-100">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <details class="group" open>
            <summary class="font-semibold text-gray-900 cursor-pointer flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
                In this guide
                <svg class="w-4 h-4 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </summary>
            <ol class="mt-3 space-y-1.5 list-decimal list-inside text-sm">
                @foreach($guide['sections'] as $i => $section)
                <li><a href="#section-{{ $i }}" class="text-emerald-600 hover:text-emerald-700 hover:underline">{{ $section['heading'] }}</a></li>
                @endforeach
            </ol>
        </details>
    </div>
</section>

<!-- Content -->
<section class="py-14 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        @foreach($guide['sections'] as $i => $section)
        <div id="section-{{ $i }}">
            <h2 class="text-2xl font-bold text-gray-900 mb-3">{{ ($i+1) }}. {{ $section['heading'] }}</h2>
            <p class="text-gray-600 leading-relaxed text-lg">{{ $section['text'] }}</p>
        </div>
        @if($i === 2)
        <!-- Mid-article CTA -->
        <div class="bg-emerald-50 rounded-xl p-6 border border-emerald-100 flex flex-col sm:flex-row items-center gap-4">
            <div class="flex-1">
                <p class="font-semibold text-gray-900">Need personalized guidance?</p>
                <p class="text-sm text-gray-600">Our specialists can help you navigate your options — free and confidential.</p>
            </div>
            <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-emerald-600 text-white font-semibold text-sm hover:bg-emerald-700 whitespace-nowrap">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614
            </a>
        </div>
        @endif
        @endforeach
    </div>
</section>

<!-- Related Links -->
<section class="py-14 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-xl font-bold text-gray-900 mb-6">Related resources</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
            @foreach([
                ['Treatment Types', '/treatment', 'Compare inpatient, part-time, infant care, and more'],
                ['Subsidy Programs', '/insurance', 'Verify if your plan covers treatment'],
                ['Find Centers', '/facilities', 'Browse 26,000+ verified facilities'],
                ['Browse by State', '/states', 'Find treatment in your state'],
            ] as $link)
            <a href="{{ $link[1] }}" class="flex items-start gap-3 bg-white rounded-xl p-4 border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                <div>
                    <span class="font-semibold text-gray-900 text-sm">{{ $link[0] }}</span>
                    <span class="block text-xs text-gray-500">{{ $link[2] }}</span>
                </div>
            </a>
            @endforeach
        </div>

        <!-- FAQ -->
        <h2 class="text-xl font-bold text-gray-900 mb-4">FAQ</h2>
        <div class="space-y-3">
            @foreach($faqs as $faq)
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-4 font-semibold text-gray-900 text-sm">{{ $faq['q'] }}<svg class="w-4 h-4 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">{{ $faq['a'] }}</div>
            </details>
            @endforeach
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="py-14 bg-emerald-700 text-white">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to take the next step?</h2>
        <p class="text-emerald-100 mb-8 text-lg">Free, confidential guidance from childcare specialists. Available 24/7.</p>
        <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            (855) 321-3614
        </a>
    </div>
</section>

<!-- More Guides -->
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">More guides</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($allGuides as $s => $g)
                @if($s !== $slug)
                <a href="/resources/{{ $s }}" class="block p-5 bg-gray-50 rounded-xl hover:bg-emerald-50 hover:border-emerald-200 border border-gray-100 transition-colors">
                    <span class="font-semibold text-gray-900 text-sm">{{ $g['title'] }}</span>
                    <span class="block text-xs text-gray-500 mt-1">{{ count($g['sections']) }} sections</span>
                </a>
                @endif
            @endforeach
        </div>
    </div>
</section>

<!-- Last Updated -->
<div class="max-w-7xl mx-auto px-4 py-6 text-center">
    <p class="text-xs text-gray-400">Last updated: {{ date('F j, Y') }} &bull; Reviewed by DaycareHub Editorial Team &bull; Sources: SAMHSA, NIDA, NIH</p>
</div>
@endsection