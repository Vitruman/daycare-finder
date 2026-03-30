@extends('layouts.app')

@section('meta_title', $comparison['title'] . ': Side-by-Side Comparison (2026) | DaycareHub')
@section('meta_description', 'Compare ' . $comparison['a']['name'] . ' vs ' . $comparison['b']['name'] . ': costs, duration, success rates, and insurance coverage. Find which is right for your situation.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Compare", "item": "https://daycarehub.us/compare"},
        {"@@type": "ListItem", "position": 3, "name": "{{ $comparison['title'] }}"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "dateModified": "{{ now()->toIso8601String() }}",
    "mainEntity": [
        @foreach($comparison['faqs'] as $i => $faq)
        {"@@type": "Question", "name": "{{ addslashes($faq['q']) }}", "acceptedAnswer": {"@@type": "Answer", "text": "{{ addslashes($faq['a']) }}"}}{{ $i < count($comparison['faqs']) - 1 ? ',' : '' }}
        @endforeach
    ]
}
</script>
@endsection

@section('content')
<!-- Scroll Progress -->
<div id="scroll-progress" style="position:fixed;top:0;left:0;width:0%;height:4px;background:#10b981;z-index:9999;transition:width 0.1s linear"></div>

<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-2">
    <nav class="text-sm text-gray-500">
        <a href="/" class="hover:text-emerald-600">Home</a>
        <span class="mx-2">/</span>
        <a href="/compare" class="hover:text-emerald-600">Compare</a>
        <span class="mx-2">/</span>
        <span class="text-gray-900">{{ $comparison['title'] }}</span>
    </nav>
</div>

<!-- Hero -->
<section class="pb-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $comparison['title'] }}: Side-by-Side Comparison <span class="text-lg font-normal text-gray-400">(2026)</span></h1>
        <p class="text-lg text-gray-600 mb-6">An evidence-based comparison to help you choose the right treatment approach. Data sourced from SAMHSA, NIDA, and published research.</p>
        <div class="flex items-center gap-3 text-sm text-gray-500">
            <div class="w-7 h-7 rounded-full bg-emerald-100 flex items-center justify-center"><span class="text-emerald-700 font-bold text-xs">RF</span></div>
            <span>DaycareHub Editorial Team</span>
            <span>&bull;</span>
            <span class="text-emerald-600 font-medium">Updated: {{ date('M j, Y') }}</span>
        </div>
    </div>
</section>

<!-- Quick Verdict -->
<section class="pb-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div style="background:#f0fdf4;border:2px solid #10b981;border-radius:16px;padding:24px 28px">
            <h2 class="text-xl font-bold text-gray-900 mb-4" style="margin:0">Quick Verdict</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div style="background:white;border-radius:12px;padding:16px 20px;border:1px solid #d1fae5">
                    <div class="font-bold text-gray-900 mb-1">Choose <a href="{{ $comparison['a']['slug'] }}" class="text-emerald-600">{{ $comparison['a']['name'] }}</a> if:</div>
                    <p class="text-gray-600 text-sm">You have {{ $comparison['verdict_a'] }}.</p>
                </div>
                <div style="background:white;border-radius:12px;padding:16px 20px;border:1px solid #dbeafe">
                    <div class="font-bold text-gray-900 mb-1">Choose <a href="{{ $comparison['b']['slug'] }}" class="text-emerald-600">{{ $comparison['b']['name'] }}</a> if:</div>
                    <p class="text-gray-600 text-sm">You have {{ $comparison['verdict_b'] }}.</p>
                </div>
            </div>
            <p class="text-sm text-gray-500 mt-3">Not sure? Call <a href="tel:+18553213614" class="text-emerald-600 font-bold">(855) 321-3614</a> for a free clinical assessment.</p>
        </div>
    </div>
</section>

<!-- Comparison Table -->
<section class="pb-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Head-to-Head Comparison</h2>
        
        <!-- Desktop Table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full border-collapse" style="border:1px solid #e5e7eb;border-radius:12px;overflow:hidden">
                <thead>
                    <tr>
                        <th class="text-left px-5 py-4 text-sm font-semibold text-gray-500 uppercase tracking-wide" style="background:#f9fafb;border-bottom:2px solid #e5e7eb">Feature</th>
                        <th class="text-left px-5 py-4 text-sm font-semibold uppercase tracking-wide" style="background:#f0fdf4;border-bottom:2px solid #d1fae5;color:#065f46">{{ $comparison['a']['name'] }}</th>
                        <th class="text-left px-5 py-4 text-sm font-semibold uppercase tracking-wide" style="background:#eff6ff;border-bottom:2px solid #bfdbfe;color:#1e40af">{{ $comparison['b']['name'] }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comparison['rows'] as $i => $row)
                    <tr style="{{ $i % 2 ? 'background:#f9fafb' : 'background:white' }}">
                        <td class="px-5 py-3 text-sm font-medium text-gray-900" style="border-bottom:1px solid #f3f4f6">{{ $row['feature'] }}</td>
                        <td class="px-5 py-3 text-sm text-gray-700" style="border-bottom:1px solid #f3f4f6">{{ $row['a'] }}</td>
                        <td class="px-5 py-3 text-sm text-gray-700" style="border-bottom:1px solid #f3f4f6">{{ $row['b'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Mobile Cards -->
        <div class="md:hidden space-y-4">
            @foreach($comparison['rows'] as $row)
            <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:12px;padding:16px">
                <div class="font-bold text-gray-900 text-sm mb-2">{{ $row['feature'] }}</div>
                <div class="grid grid-cols-2 gap-3 text-sm">
                    <div>
                        <div class="text-xs font-semibold uppercase mb-1" style="color:#065f46">{{ $comparison['a']['name'] }}</div>
                        <div class="text-gray-700">{{ $row['a'] }}</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase mb-1" style="color:#1e40af">{{ $comparison['b']['name'] }}</div>
                        <div class="text-gray-700">{{ $row['b'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Content -->
<section class="pb-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <style>
        .vs-content { font-size: 18px; line-height: 1.8; color: #374151; }
        .vs-content h2 { font-size: 26px; font-weight: 700; color: #111827; margin-top: 40px; margin-bottom: 14px; padding-bottom: 6px; border-bottom: 2px solid #d1fae5; }
        .vs-content h3 { font-size: 20px; font-weight: 600; color: #1f2937; margin-top: 28px; margin-bottom: 10px; }
        .vs-content p { margin-bottom: 18px; }
        .vs-content ul { margin-bottom: 18px; padding-left: 28px; list-style-type: disc; }
        .vs-content li { margin-bottom: 6px; }
        .vs-content a { color: #059669; border-bottom: 1px solid #a7f3d0; text-decoration: none; }
        .vs-content a:hover { color: #047857; border-bottom-color: #059669; }
        .vs-content strong { color: #111827; }
        @media(max-width:768px) { .vs-content { font-size: 16px; line-height: 1.7; } .vs-content h2 { font-size: 22px; } }
        </style>
        <div class="vs-content">
            {!! $comparison['content'] !!}
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-10">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-2xl p-8 text-center text-white" style="background:#065f46">
            <h2 class="text-2xl font-bold mb-3">Not Sure Which Is Right for You?</h2>
            <p class="text-white mb-5" style="opacity:0.9">Our treatment specialists can assess your situation and recommend the right level of care. Free, confidential, 24/7.</p>
            <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-3 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614
            </a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-10 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
        <div class="space-y-3">
            @foreach($comparison['faqs'] as $faq)
            <details class="group bg-white rounded-xl border border-gray-200" style="overflow:hidden">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">
                    {{ $faq['q'] }}
                    <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </summary>
                <div class="px-5 pb-5 text-gray-600 leading-relaxed">{{ $faq['a'] }}</div>
            </details>
            @endforeach
        </div>
    </div>
</section>

<!-- Cross-links -->
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-xl font-bold text-gray-900 mb-6 text-center">Explore Treatment Options</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="/treatment" class="group bg-gray-50 rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">All Treatment Types</h3>
                <p class="text-gray-500 text-xs mt-1">7 programs compared</p>
            </a>
            <a href="/insurance" class="group bg-gray-50 rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Insurance Coverage</h3>
                <p class="text-gray-500 text-xs mt-1">10 providers</p>
            </a>
            <a href="/facilities" class="group bg-gray-50 rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Find Centers</h3>
                <p class="text-gray-500 text-xs mt-1">21,000+ facilities</p>
            </a>
            <a href="/blog" class="group bg-gray-50 rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Recovery Blog</h3>
                <p class="text-gray-500 text-xs mt-1">Expert articles</p>
            </a>
        </div>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 py-6 text-center">
    <p class="text-xs text-gray-500">Last updated: {{ date('F j, Y') }} &bull; Sources: SAMHSA, NIDA, ASAM &bull; DaycareHub Editorial Team</p>
</div>

<script>
window.addEventListener('scroll', function() {
    var h = document.documentElement;
    document.getElementById('scroll-progress').style.width = (h.scrollTop / (h.scrollHeight - h.clientHeight)) * 100 + '%';
});
</script>
@endsection