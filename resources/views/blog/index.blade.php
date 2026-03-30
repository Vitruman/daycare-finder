@extends('layouts.app')

@section('title', 'DaycareHub Blog — Childcare Tips, Guides & Resources | DaycareHub')
@section('meta_description', 'Evidence-based articles on addiction recovery, treatment options, subsidy programs, and family support. Written by recovery specialists, updated weekly.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Blog"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "name": "DaycareHub DaycareHub Blog",
    "description": "Evidence-based articles on addiction recovery, treatment, and family support.",
    "url": "https://daycarehub.us/blog",
    "dateModified": "{{ now()->toIso8601String() }}",
    "publisher": {"@@type": "Organization", "name": "DaycareHub", "url": "https://daycarehub.us"},
    "mainEntity": {
        "@@type": "ItemList",
        "numberOfItems": {{ $blogs->total() }},
        "itemListElement": [
            @foreach($blogs as $i => $blog)
            {"@@type": "ListItem", "position": {{ $i + 1 }}, "url": "https://daycarehub.us/blog/{{ $blog->slug }}", "name": "{{ addslashes($blog->title) }}"}{{ $loop->last ? '' : ',' }}
            @endforeach
        ]
    }
}
</script>

<style>
@media(min-width:768px){
  #featured-card{flex-direction:row!important}
  #featured-card>img,#featured-card>div:first-child{width:40%!important;height:auto!important;min-height:280px}
  #featured-card>.feat-text{flex:1;min-width:0}
}
</style>
@endsection

@section('content')
<!-- Scroll Progress -->
<div id="scroll-progress" style="position:fixed;top:0;left:0;width:0%;height:4px;background:#10b981;z-index:9999;transition:width 0.1s linear;"></div>

<!-- Hero Banner -->
<section class="relative overflow-hidden" style="min-height:420px">
    <div class="absolute inset-0">
        <img src="/images/blog/hero.webp" alt="" style="width:100%;height:100%;object-fit:cover;object-position:center 40%">
        <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(6,95,70,0.88) 0%,rgba(4,120,87,0.78) 50%,rgba(16,185,129,0.65) 100%)"></div>
    </div>
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8" style="padding-top:72px;padding-bottom:56px">
        <nav class="text-sm mb-4" style="opacity:0.8">
            <a href="/" class="hover:text-white" style="color:rgba(255,255,255,0.7)">Home</a>
            <span style="color:rgba(255,255,255,0.5)" class="mx-2">/</span>
            <span class="text-white">Blog</span>
        </nav>
        <h1 class="text-3xl md:text-5xl font-bold text-white mb-3" style="line-height:1.1">DaycareHub Blog<br><span style="font-weight:400;font-size:0.55em;opacity:0.9">Expert Articles on Childcare</span></h1>
        <p style="color:rgba(255,255,255,0.9);max-width:600px;font-size:17px;margin-bottom:24px">Evidence-based articles on treatment, recovery, insurance, and family support. Reviewed by our editorial team, updated regularly.</p>
        <div style="display:flex;flex-wrap:wrap;gap:24px">
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">{{ $blogs->total() }}</div><div style="font-size:12px;color:rgba(255,255,255,0.75)">articles</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">5</div><div style="font-size:12px;color:rgba(255,255,255,0.75)">categories</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">100%</div><div style="font-size:12px;color:rgba(255,255,255,0.75)">evidence-based</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">Weekly</div><div style="font-size:12px;color:rgba(255,255,255,0.75)">updates</div></div>
            </div>
        </div>
    </div>
    <div style="position:absolute;bottom:-1px;left:0;right:0">
        <svg viewBox="0 0 1440 60" fill="none" style="width:100%;display:block"><path d="M0 60V30C240 0 480 0 720 30s480 30 720 0v30H0z" fill="white"/></svg>
    </div>
</section>

<!-- Search + Category Filter -->
<section class="py-8" style="padding-bottom:3rem">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Search -->
        <form action="{{ route('blog.index') }}" method="GET" class="flex mb-4">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search articles..."
                class="flex-1 px-4 py-3 border border-gray-300 rounded-l-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-sm">
            <button type="submit" class="px-5 py-3 rounded-r-xl text-white font-semibold" style="background:#065f46">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </button>
        </form>
        <!-- Category Pills -->
        <div class="flex flex-wrap gap-2" id="cat-filter">
            <button data-cat="all" class="cat-pill px-4 py-2 rounded-full text-sm font-medium transition-colors" style="background:#065f46;color:white">All</button>
            <button data-cat="treatment" class="cat-pill px-4 py-2 rounded-full bg-white border border-gray-200 text-sm text-gray-700 hover:border-emerald-300 hover:text-emerald-700 transition-colors">Treatment</button>
            <button data-cat="recovery" class="cat-pill px-4 py-2 rounded-full bg-white border border-gray-200 text-sm text-gray-700 hover:border-emerald-300 hover:text-emerald-700 transition-colors">Recovery</button>
            <button data-cat="family" class="cat-pill px-4 py-2 rounded-full bg-white border border-gray-200 text-sm text-gray-700 hover:border-emerald-300 hover:text-emerald-700 transition-colors">Family</button>
            <button data-cat="education" class="cat-pill px-4 py-2 rounded-full bg-white border border-gray-200 text-sm text-gray-700 hover:border-emerald-300 hover:text-emerald-700 transition-colors">Education</button>
            <button data-cat="industry" class="cat-pill px-4 py-2 rounded-full bg-white border border-gray-200 text-sm text-gray-700 hover:border-emerald-300 hover:text-emerald-700 transition-colors">Industry</button>
        </div>
    </div>
</section>

<!-- Featured Article (newest) -->
@if($blogs->count() > 0)
@php $featured = $blogs->first(); @endphp
<section class="pb-6">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('blog.show', $featured) }}" class="group block bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all overflow-hidden" style="display:flex;flex-direction:column" id="featured-card">
            @if($featured->featured_image)
            <img src="{{ asset($featured->featured_image) }}" alt="{{ $featured->title }}" class="group-hover:scale-105 transition-transform duration-300" style="width:100%;height:260px;object-fit:cover;flex-shrink:0">
            @else
            <div style="width:100%;height:260px;background:linear-gradient(135deg,#34d399,#3b82f6);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                <span class="text-white text-4xl font-bold">{{ substr($featured->title, 0, 1) }}</span>
            </div>
            @endif
            <div class="p-5 feat-text" style="flex:1;min-width:0">
                <div class="flex items-center gap-2 mb-3">
                    <span class="px-2.5 py-0.5 rounded-full text-xs font-bold" style="background:#d1fae5;color:#065f46">Editor's Pick</span>
                    <span class="text-xs text-gray-400">{{ $featured->published_at ? $featured->published_at->format('M j, Y') : $featured->created_at->format('M j, Y') }}</span>
                    @if($featured->content)
                    <span class="text-xs text-gray-400">&bull; {{ max(3, intval(str_word_count(strip_tags($featured->content)) / 200)) }} min read</span>
                    @endif
                </div>
                <h2 class="text-lg md:text-xl font-bold text-gray-900 group-hover:text-emerald-700 transition-colors mb-3">{{ $featured->title }}</h2>
                @if($featured->excerpt)
                <p class="text-gray-600 text-sm leading-relaxed mb-4" style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden">{{ $featured->excerpt }}</p>
                @endif
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center"><span class="text-emerald-700 font-bold text-xs">RF</span></div>
                    <span class="text-sm text-gray-500">DaycareHub Editorial Team</span>
                </div>
            </div>
        </a>
    </div>
</section>
@endif

<!-- Blog Posts Grid -->
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($blogs->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="blog-grid">
            @foreach($blogs as $blog)
            @if($loop->first) @continue @endif
            @php
                $cats = ['treatment','recovery','family','education','industry'];
                $catMap = [
                    'how-to-choose' => 'treatment',
                    'stages-of-recovery' => 'recovery',
                    'family-therapy' => 'family',
                    'myths' => 'education',
                    '12-step' => 'education',
                    'rising-demand' => 'industry',
                    'evolving-landscape' => 'industry',
                    'how-long-does-rehab' => 'treatment',
                    'medication-assisted-treatment' => 'treatment',
                    'signs-of-drug-addiction' => 'education',
                    'how-long-does-rehab' => 'treatment',
                    'what-is-medication-assisted-treatment' => 'treatment',
                ];
                $blogCat = 'education';
                foreach($catMap as $k => $v) { if(str_contains($blog->slug, $k)) { $blogCat = $v; break; } }
                $readMin = $blog->content ? max(3, intval(str_word_count(strip_tags($blog->content)) / 200)) : 5;
                $catColors = ['treatment' => ['#d1fae5','#065f46'], 'recovery' => ['#dbeafe','#1e40af'], 'family' => ['#fce7f3','#9d174d'], 'education' => ['#fef3c7','#92400e'], 'industry' => ['#e0e7ff','#3730a3']];
                $cc = $catColors[$blogCat] ?? ['#f3f4f6','#374151'];
            @endphp
            <article class="blog-card group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all overflow-hidden flex flex-col" data-category="{{ $blogCat }}" style="transform:translateY(0);transition:all .3s">
                <a href="{{ route('blog.show', $blog) }}" class="block">
                    @if($blog->featured_image)
                    <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy">
                    @else
                    <div class="w-full h-48 bg-gradient-to-br from-emerald-400 to-blue-500 flex items-center justify-center">
                        <span class="text-white text-3xl font-bold">{{ substr($blog->title, 0, 1) }}</span>
                    </div>
                    @endif
                </a>
                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-2.5 py-0.5 rounded-full text-xs font-bold" style="background:{{ $cc[0] }};color:{{ $cc[1] }}">{{ ucfirst($blogCat) }}</span>
                        <span class="text-xs text-gray-400">{{ $readMin }} min read</span>
                    </div>
                    <h2 class="text-lg font-bold text-gray-900 group-hover:text-emerald-700 transition-colors mb-2">
                        <a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a>
                    </h2>
                    @if($blog->excerpt)
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 flex-1" style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden">{{ $blog->excerpt }}</p>
                    @endif
                    <div class="flex items-center justify-between mt-auto pt-3 border-t border-gray-100">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-emerald-100 flex items-center justify-center"><span class="text-emerald-700 font-bold" style="font-size:9px">RF</span></div>
                            <span class="text-xs text-gray-500">Editorial Team</span>
                        </div>
                        <span class="text-xs text-gray-400">{{ $blog->published_at ? $blog->published_at->format('M j, Y') : $blog->created_at->format('M j, Y') }}</span>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <div class="mt-12">{{ $blogs->links() }}</div>
        @else
        <div class="text-center py-16">
            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">No articles found</h3>
            <p class="text-gray-600">Try adjusting your search or check back later.</p>
        </div>
        @endif
    </div>
</section>

<!-- Mid-page CTA -->
<section class="py-10">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-2xl p-8 text-center text-white" style="background:#065f46">
            <h2 class="text-2xl font-bold mb-3">Need Help Finding Treatment?</h2>
            <p class="text-white mb-5 text-lg" style="opacity:0.9">Our specialists can assess your situation and recommend the right program. Free, confidential, available 24/7.</p>
            <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-3 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614
            </a>
        </div>
    </div>
</section>

<!-- Start Here — For People New to Recovery -->
<section class="py-14 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">New to Recovery? Start Here</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-10">If you or a loved one is considering treatment for the first time, these resources provide the foundation you need.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="/resources/how-to-choose-rehab" class="group bg-white rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center mb-3">
                    <span class="text-emerald-700 font-bold text-lg">1</span>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 transition-colors mb-2">Choose a Daycare Center</h3>
                <p class="text-gray-600 text-sm">7 factors to evaluate, red flags to avoid, and questions to ask before committing.</p>
            </a>
            <a href="/resources/what-to-expect-in-rehab" class="group bg-white rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mb-3">
                    <span class="text-blue-700 font-bold text-lg">2</span>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 transition-colors mb-2">What to Expect in Rehab</h3>
                <p class="text-gray-600 text-sm">Daily schedules, therapy types, what to pack, and how the first 72 hours work.</p>
            </a>
            <a href="/resources/paying-for-treatment" class="group bg-white rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center mb-3">
                    <span class="text-purple-700 font-bold text-lg">3</span>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 transition-colors mb-2">Paying for Treatment</h3>
                <p class="text-gray-600 text-sm">Insurance, Medicaid, state-funded programs, sliding-scale fees, and scholarships.</p>
            </a>
        </div>
    </div>
</section>

<!-- Topic Deep Dives — Cross-links -->
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Explore by Topic</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-gray-50 rounded-xl p-5 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3 text-sm">Treatment Types</h3>
                <div class="space-y-1.5 text-sm">
                    <a href="/treatment/inpatient-rehab" class="block text-gray-600 hover:text-emerald-600">Inpatient Rehab &rarr;</a>
                    <a href="/treatment/part-time-programs" class="block text-gray-600 hover:text-emerald-600">Outpatient &rarr;</a>
                    <a href="/treatment/medical-infant care" class="block text-gray-600 hover:text-emerald-600">Medical Infant Care &rarr;</a>
                    <a href="/treatment/medication-assisted-treatment" class="block text-gray-600 hover:text-emerald-600">MAT &rarr;</a>
                    <a href="/treatment" class="block text-emerald-600 font-medium mt-1">All 7 programs &rarr;</a>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3 text-sm">Substances</h3>
                <div class="space-y-1.5 text-sm">
                    <a href="/addiction/alcohol" class="block text-gray-600 hover:text-emerald-600">Alcohol &rarr;</a>
                    <a href="/addiction/opioids" class="block text-gray-600 hover:text-emerald-600">Opioids &rarr;</a>
                    <a href="/addiction/fentanyl" class="block text-gray-600 hover:text-emerald-600">Fentanyl &rarr;</a>
                    <a href="/addiction/methamphetamine" class="block text-gray-600 hover:text-emerald-600">Meth &rarr;</a>
                    <a href="/addiction" class="block text-emerald-600 font-medium mt-1">All 8 substances &rarr;</a>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3 text-sm">Insurance</h3>
                <div class="space-y-1.5 text-sm">
                    <a href="/insurance/aetna" class="block text-gray-600 hover:text-emerald-600">Aetna &rarr;</a>
                    <a href="/insurance/bcbs" class="block text-gray-600 hover:text-emerald-600">BCBS &rarr;</a>
                    <a href="/insurance/cigna" class="block text-gray-600 hover:text-emerald-600">Cigna &rarr;</a>
                    <a href="/insurance/uhc" class="block text-gray-600 hover:text-emerald-600">UnitedHealthcare &rarr;</a>
                    <a href="/insurance" class="block text-emerald-600 font-medium mt-1">All 10 providers &rarr;</a>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3 text-sm">Recovery Guides</h3>
                <div class="space-y-1.5 text-sm">
                    <a href="/resources/how-to-choose-rehab" class="block text-gray-600 hover:text-emerald-600">Choosing Rehab &rarr;</a>
                    <a href="/resources/family-guide" class="block text-gray-600 hover:text-emerald-600">Family Guide &rarr;</a>
                    <a href="/resources/relapse-prevention" class="block text-gray-600 hover:text-emerald-600">Relapse Prevention &rarr;</a>
                    <a href="/resources" class="block text-emerald-600 font-medium mt-1">All 5 guides &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Articles -->
@if(isset($popular) && $popular->count() > 0)
<section class="py-10 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Most Popular</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($popular->take(4) as $pop)
            <a href="{{ route('blog.show', $pop) }}" class="group bg-white rounded-xl border border-gray-100 p-5 hover:shadow-lg transition-all">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 transition-colors mb-2 text-sm">{{ $pop->title }}</h3>
                <p class="text-gray-500 text-xs" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden">{{ Str::limit($pop->excerpt ?? strip_tags($pop->content), 80) }}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- FAQ -->
<section class="py-14 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
        <div class="space-y-3">
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Who writes these articles?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">All articles are written by our editorial team with backgrounds in childcare, behavioral health, and public health. Content is reviewed for accuracy before publication and updated regularly based on the latest research from SAMHSA, NIDA, and peer-reviewed sources.</div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How often is the blog updated?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">We publish new articles weekly and review existing content monthly. All articles display their publication and last-updated dates. If research or guidelines change, we update affected articles promptly.</div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Can I use this information to make treatment decisions?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Our articles are educational and should supplement — not replace — professional medical advice. For personalized treatment recommendations, we encourage speaking with a licensed professional or calling our helpline at <a href="tel:+18553213614" class="text-emerald-600 font-semibold">(855) 321-3614</a> for a free assessment.</div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Is the blog free to read?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Yes — 100% free, no registration required. We believe access to quality recovery information should never have a paywall.</div></details>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-14 text-white" style="background:#065f46">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-3">Ready to Take the First Step?</h2>
        <p class="mb-6 text-lg" style="color:rgba(255,255,255,0.9)">Our treatment specialists are available around the clock to help you find the right program. Free, confidential, no obligation.</p>
        <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            (855) 321-3614
        </a>
        <p class="mt-4 text-sm" style="color:rgba(255,255,255,0.7)"><a href="/facilities" class="underline" style="color:rgba(255,255,255,0.9)">Browse centers</a> &bull; <a href="/states" class="underline" style="color:rgba(255,255,255,0.9)">Find by state</a> &bull; <a href="/insurance" class="underline" style="color:rgba(255,255,255,0.9)">Check insurance</a></p>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 py-6 text-center">
    <p class="text-xs text-gray-500">Last updated: {{ date('F j, Y') }} &bull; DaycareHub Editorial Team</p>
</div>

<script>
// Scroll progress
window.addEventListener('scroll', function() {
    var h = document.documentElement;
    document.getElementById('scroll-progress').style.width = (h.scrollTop / (h.scrollHeight - h.clientHeight)) * 100 + '%';
});
// Category filter
document.querySelectorAll('.cat-pill').forEach(function(pill) {
    pill.addEventListener('click', function() {
        var cat = this.dataset.cat;
        document.querySelectorAll('.cat-pill').forEach(function(p) {
            p.style.background = ''; p.style.color = ''; p.className = p.className.replace('border-emerald-500','border-gray-200');
        });
        this.style.background = '#065f46'; this.style.color = 'white';
        document.querySelectorAll('.blog-card').forEach(function(card) {
            card.style.display = (cat === 'all' || card.dataset.category === cat) ? '' : 'none';
        });
    });
});
</script>
@endsection