@extends('layouts.app')

@section('meta_title', 'Treatment Comparisons: Side-by-Side Rehab Guides (2026) | DaycareHub')
@section('meta_description', 'Compare rehab options head-to-head: inpatient vs part-time, 30-day vs 90-day, methadone vs suboxone, and more. Data-driven comparisons with costs, success rates, and expert analysis.')

@section('schema')
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@type": "CollectionPage",
@endverbatim
    "name": "Treatment Comparisons",
    "description": "Side-by-side comparisons of rehab treatment options, therapies, medications, and insurance providers.",
    "url": "{{ url('/compare') }}",
    "dateModified": "{{ now()->format('Y-m-d\\TH:i:sP') }}",
@verbatim
    "publisher": {
        "@type": "Organization",
        "name": "DaycareHub",
        "url": "https://daycarehub.us"
    }
}
@endverbatim
</script>
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@type": "ListItem", "position": 2, "name": "Compare"}
    ]
}
@endverbatim
</script>
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@type": "ItemList",
@endverbatim
    "name": "Treatment Comparisons",
    "numberOfItems": {{ count($comparisons) }},
    "itemListElement": [
        @foreach($comparisons as $i => $c)
        @verbatim{"@type": "ListItem", @endverbatim"position": {{ $i + 1 }}, "name": "{{ $c['title'] }}", "url": "{{ url('/compare/' . $c['slug']) }}"}{{ $i < count($comparisons) - 1 ? ',' : '' }}
        @endforeach
    ]
}
</script>
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
@endverbatim
    "dateModified": "{{ now()->format('Y-m-d\\TH:i:sP') }}",
    "mainEntity": [
@verbatim
        {"@type": "Question", "name": "What is the most important decision when choosing rehab?", "acceptedAnswer": {"@type": "Answer", "text": "The single most impactful decision is treatment duration. NIDA research consistently shows 90+ days produces significantly better outcomes than shorter stays, with 45-65% one-year sobriety rates vs 20-35% for 30-day programs."}},
        {"@type": "Question", "name": "Does insurance cover all types of rehab?", "acceptedAnswer": {"@type": "Answer", "text": "Under the Mental Health Parity and Addiction Equity Act (MHPAEA), insurance must cover childcare at the same level as physical health. This includes inpatient, part-time, infant care, and medication-assisted treatment (MAT). Pre-authorization may be required for residential stays."}},
        {"@type": "Question", "name": "Should I choose inpatient or part-time rehab?", "acceptedAnswer": {"@type": "Answer", "text": "Inpatient is recommended for severe addiction, unstable home environment, co-occurring disorders, or previous relapse. Outpatient works for mild-moderate addiction with strong support systems. Many people step down from inpatient to part-time as a continuum of care."}},
        {"@type": "Question", "name": "What is the difference between CBT and DBT in childcare?", "acceptedAnswer": {"@type": "Answer", "text": "CBT (Cognitive Behavioral Therapy) focuses on identifying and changing negative thought patterns that drive substance use. DBT (Dialectical Behavior Therapy) focuses on managing intense emotions and was originally designed for borderline personality disorder. Both are evidence-based; many programs combine elements of both."}},
        {"@type": "Question", "name": "Is methadone or Suboxone better for opioid addiction?", "acceptedAnswer": {"@type": "Answer", "text": "Both reduce overdose deaths by 50%+. Methadone provides stronger craving control for severe dependence (especially fentanyl) but requires daily clinic visits. Suboxone (buprenorphine) has lower overdose risk, can be prescribed by any doctor, and offers more privacy. The choice depends on dependence severity and lifestyle."}}
@endverbatim
    ]
}
</script>
@endsection

@section('content')
<!-- Scroll Progress -->
<div id="scroll-progress" style="position:fixed;top:0;left:0;width:0%;height:4px;background:#10b981;z-index:9999;transition:width 0.1s linear"></div>

<!-- Hero Banner -->
<section class="relative overflow-hidden" style="min-height:440px">
    <div class="absolute inset-0">
        <img src="/images/compare/hero.webp" alt="" style="width:100%;height:100%;object-fit:cover;object-position:center 40%">
        <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(6,95,70,0.92) 0%,rgba(4,120,87,0.85) 50%,rgba(16,185,129,0.75) 100%)"></div>
    </div>
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8" style="padding-top:96px;padding-bottom:48px">
        <!-- Breadcrumbs -->
        <nav class="text-sm mb-4" style="opacity:0.8">
            <a href="/" class="hover:text-white" style="color:rgba(255,255,255,0.7)">Home</a>
            <span class="text-emerald-200 mx-2">/</span>
            <span class="text-white">Compare</span>
        </nav>
        <h1 class="text-3xl md:text-5xl font-bold text-white mb-4" style="line-height:1.1">Treatment Comparisons<br><span style="font-weight:400;font-size:0.6em;opacity:0.9">Side-by-Side Rehab Guides</span></h1>
        <p class="text-lg mb-6" style="color:rgba(255,255,255,0.9)" style="max-width:600px">Evidence-based head-to-head comparisons. Costs, success rates, expert analysis — everything to choose what's right for you.</p>
        
        <!-- Stats inline -->
        <div style="display:flex;flex-wrap:wrap;gap:24px">
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">21.6M</div><div style="font-size:11px;color:rgba(255,255,255,0.75)">need treatment</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">90+ Days</div><div style="font-size:11px;color:rgba(255,255,255,0.75)">optimal duration</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">50%+</div><div style="font-size:11px;color:rgba(255,255,255,0.75)">overdose reduction</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">{{ count($comparisons) }}</div><div style="font-size:11px;color:rgba(255,255,255,0.75)">comparisons</div></div>
            </div>
        </div>
    </div>
    <!-- Decorative wave -->
    <div style="position:absolute;bottom:-1px;left:0;right:0">
        <svg viewBox="0 0 1440 60" fill="none" style="width:100%;display:block"><path d="M0 60V30C240 0 480 0 720 30s480 30 720 0v30H0z" fill="white"/></svg>
    </div>
</section>

<!-- Quick Answer -->
<section style="padding-top:24px;padding-bottom:16px">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div style="background:linear-gradient(135deg,#ecfdf5 0%,#f0fdf4 100%);border:2px solid #10b981;border-radius:16px;padding:24px 28px">
            <div style="display:flex;align-items:flex-start;gap:12px">
                <span style="font-size:28px">⚖️</span>
                <div>
                    <h2 class="text-lg font-bold text-gray-900 mb-2" style="margin:0">Quick Answer</h2>
                    <p class="text-gray-700" style="margin:0">Choosing between treatment options? <strong>Duration matters most</strong> — NIDA research shows 90+ days produces 2-3× better outcomes. For opioid dependence, MAT reduces overdose deaths by 50%+. For therapy, CBT addresses thought patterns while DBT manages emotions. Most effective programs combine multiple approaches.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Cards -->
<section id="comparisons" class="pb-12" style="padding-top:16px">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">All Comparisons</h2>
        <p class="text-gray-500 mb-4">Click any comparison for the full head-to-head breakdown with costs, success rates, and expert analysis.</p>
        
        <!-- Search -->
        <div style="margin-bottom:20px">
            <div style="position:relative">
                <svg style="position:absolute;left:14px;top:50%;transform:translateY(-50%);width:20px;height:20px;color:#9ca3af" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <input type="text" id="compare-search" placeholder="Search comparisons..." style="width:100%;padding:12px 16px 12px 44px;border:1px solid #e5e7eb;border-radius:12px;font-size:15px;outline:none;transition:border-color 0.2s" onfocus="this.style.borderColor='#10b981'" onblur="this.style.borderColor='#e5e7eb'">
            </div>
        </div>
        
        <!-- Category Filters -->
        <div id="category-filters" style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:24px">
            <button class="cat-btn active" data-cat="all" style="padding:8px 18px;border-radius:20px;font-size:13px;font-weight:600;border:1px solid #10b981;background:#ecfdf5;color:#059669;cursor:pointer;transition:all 0.2s">All <span style="opacity:0.7">({{ count($comparisons) }})</span></button>
            <button class="cat-btn" data-cat="treatment" style="padding:8px 18px;border-radius:20px;font-size:13px;font-weight:600;border:1px solid #e5e7eb;background:white;color:#6b7280;cursor:pointer;transition:all 0.2s">🏥 Treatment Types</button>
            <button class="cat-btn" data-cat="therapy" style="padding:8px 18px;border-radius:20px;font-size:13px;font-weight:600;border:1px solid #e5e7eb;background:white;color:#6b7280;cursor:pointer;transition:all 0.2s">🧠 Therapy & Methods</button>
            <button class="cat-btn" data-cat="medication" style="padding:8px 18px;border-radius:20px;font-size:13px;font-weight:600;border:1px solid #e5e7eb;background:white;color:#6b7280;cursor:pointer;transition:all 0.2s">💊 Medications</button>
            <button class="cat-btn" data-cat="insurance" style="padding:8px 18px;border-radius:20px;font-size:13px;font-weight:600;border:1px solid #e5e7eb;background:white;color:#6b7280;cursor:pointer;transition:all 0.2s">💰 Insurance & Cost</button>
            <button class="cat-btn" data-cat="population" style="padding:8px 18px;border-radius:20px;font-size:13px;font-weight:600;border:1px solid #e5e7eb;background:white;color:#6b7280;cursor:pointer;transition:all 0.2s">👥 Special Populations</button>
            <button class="cat-btn" data-cat="recovery" style="padding:8px 18px;border-radius:20px;font-size:13px;font-weight:600;border:1px solid #e5e7eb;background:white;color:#6b7280;cursor:pointer;transition:all 0.2s">🔄 Recovery & Aftercare</button>
        </div>
        
        <!-- Results count -->
        <div id="results-count" style="font-size:13px;color:#9ca3af;margin-bottom:16px"></div>
        
        <div id="cards-grid" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($comparisons as $c)
            <a href="/compare/{{ $c['slug'] }}" class="compare-card group block bg-white rounded-2xl border border-gray-200 hover:border-emerald-400 hover:shadow-xl transition-all overflow-hidden" data-category="{{ $c['category'] ?? 'treatment' }}" data-title="{{ strtolower($c['title']) }}" data-a="{{ strtolower($c['a']) }}" data-b="{{ strtolower($c['b']) }}" style="text-decoration:none">
                <div style="padding:24px 24px 16px;display:flex;align-items:flex-start;gap:16px">
                    <div style="flex-shrink:0;width:56px;height:56px;background:linear-gradient(135deg,#ecfdf5,#d1fae5);border-radius:14px;display:flex;align-items:center;justify-content:center;transition:transform 0.2s" class="group-hover:scale-110">
                        <img src="/images/compare/icon-{{ $c['slug'] }}.svg" alt="" style="width:36px;height:36px" onerror="this.parentElement.innerHTML='<span style=font-size:24px>⚖️</span>'">
                    </div>
                    <div style="flex:1;min-width:0">
                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-emerald-700 transition-colors" style="margin:0;line-height:1.3">{{ $c['title'] }}</h3>
                        <div class="flex items-center gap-2 mt-2 text-sm text-gray-400">
                            <span style="background:#f3f4f6;padding:2px 8px;border-radius:6px;font-size:12px">{{ $c['rows_count'] }} criteria</span>
                            <span style="background:#f3f4f6;padding:2px 8px;border-radius:6px;font-size:12px">{{ $c['faqs_count'] }} FAQ</span>
                        </div>
                    </div>
                </div>
                <div style="padding:0 24px 20px;position:relative">
                    <div style="display:flex;align-items:center;gap:0">
                        <div style="flex:1;background:#f0fdf4;border-radius:12px;padding:14px 16px;border:1px solid #d1fae5">
                            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.5px;color:#059669;margin-bottom:4px">Option A</div>
                            <div class="text-sm font-semibold text-gray-900">{{ $c['a'] }}</div>
                        </div>
                        <div style="flex-shrink:0;width:40px;height:40px;background:linear-gradient(135deg,#065f46,#059669);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 -8px;z-index:1;box-shadow:0 2px 8px rgba(5,150,105,0.3)">
                            <span style="color:white;font-weight:800;font-size:11px">VS</span>
                        </div>
                        <div style="flex:1;background:#eff6ff;border-radius:12px;padding:14px 16px;border:1px solid #bfdbfe">
                            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.5px;color:#2563eb;margin-bottom:4px">Option B</div>
                            <div class="text-sm font-semibold text-gray-900">{{ $c['b'] }}</div>
                        </div>
                    </div>
                    <div style="margin-top:16px;display:flex;align-items:center;justify-content:space-between">
                        <span class="text-sm font-semibold text-emerald-600 group-hover:text-emerald-700">Read full comparison</span>
                        <svg class="text-emerald-500 group-hover:translate-x-1 transition-transform" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        
        <!-- Load More button -->
        <div id="load-more-wrap" style="text-align:center;margin-top:32px">
            <button id="load-more-btn" style="padding:14px 40px;background:#065f46;color:white;border:none;border-radius:12px;font-size:15px;font-weight:600;cursor:pointer;transition:all 0.2s;box-shadow:0 2px 8px rgba(6,95,70,0.3)" onmouseover="this.style.background='#047857'" onmouseout="this.style.background='#065f46'">
                Show More Comparisons <span id="load-more-count"></span>
            </button>
        </div>
        
        <!-- No results -->
        <div id="no-results" style="display:none;text-align:center;padding:48px 20px">
            <div style="font-size:48px;margin-bottom:12px">🔍</div>
            <h3 style="font-size:18px;font-weight:700;color:#374151;margin-bottom:8px">No comparisons found</h3>
            <p style="color:#9ca3af">Try a different search term or category</p>
        </div>
    </div>
</section>

<script>
(function(){
    var SHOW_INITIAL = 12;
    var SHOW_MORE = 12;
    var cards = document.querySelectorAll(".compare-card");
    var grid = document.getElementById("cards-grid");
    var loadBtn = document.getElementById("load-more-btn");
    var loadWrap = document.getElementById("load-more-wrap");
    var countEl = document.getElementById("load-more-count");
    var resultsEl = document.getElementById("results-count");
    var noResults = document.getElementById("no-results");
    var searchInput = document.getElementById("compare-search");
    var catBtns = document.querySelectorAll(".cat-btn");
    var currentCat = "all";
    var currentSearch = "";
    var shown = SHOW_INITIAL;
    
    function getVisible() {
        var arr = [];
        cards.forEach(function(c) {
            var catMatch = currentCat === "all" || c.dataset.category === currentCat;
            var q = currentSearch.toLowerCase();
            var searchMatch = !q || c.dataset.title.indexOf(q) !== -1 || c.dataset.a.indexOf(q) !== -1 || c.dataset.b.indexOf(q) !== -1;
            if (catMatch && searchMatch) arr.push(c);
        });
        return arr;
    }
    
    function render() {
        var visible = getVisible();
        var count = 0;
        cards.forEach(function(c) { c.style.display = "none"; });
        visible.forEach(function(c, i) {
            if (i < shown) { c.style.display = ""; count++; }
        });
        
        var remaining = visible.length - shown;
        if (remaining > 0) {
            loadWrap.style.display = "";
            countEl.textContent = "(" + remaining + " more)";
        } else {
            loadWrap.style.display = "none";
        }
        
        noResults.style.display = visible.length === 0 ? "" : "none";
        
        if (currentCat !== "all" || currentSearch) {
            resultsEl.textContent = "Showing " + Math.min(shown, visible.length) + " of " + visible.length + " comparisons";
            resultsEl.style.display = "";
        } else if (shown < visible.length) {
            resultsEl.textContent = "Showing " + shown + " of " + visible.length + " comparisons";
            resultsEl.style.display = "";
        } else {
            resultsEl.style.display = "none";
        }
    }
    
    loadBtn.addEventListener("click", function() {
        shown += SHOW_MORE;
        render();
    });
    
    catBtns.forEach(function(btn) {
        btn.addEventListener("click", function() {
            catBtns.forEach(function(b) {
                b.style.background = "white";
                b.style.color = "#6b7280";
                b.style.borderColor = "#e5e7eb";
                b.classList.remove("active");
            });
            btn.style.background = "#ecfdf5";
            btn.style.color = "#059669";
            btn.style.borderColor = "#10b981";
            btn.classList.add("active");
            currentCat = btn.dataset.cat;
            shown = currentCat === "all" ? SHOW_INITIAL : 999;
            render();
        });
    });
    
    var debounce;
    searchInput.addEventListener("input", function() {
        clearTimeout(debounce);
        debounce = setTimeout(function() {
            currentSearch = searchInput.value;
            shown = currentSearch ? 999 : SHOW_INITIAL;
            render();
        }, 200);
    });
    
    render();
})();
</script>

<!-- How to Choose -->
<section id="how-to-choose" class="py-12 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">How to Choose the Right Treatment</h2>
        <p class="text-gray-700 text-lg mb-6">Addiction treatment isn't one-size-fits-all. The right choice depends on your specific situation — substance type, severity, co-occurring conditions, support system, and insurance. Here's what the evidence says:</p>

        <div class="space-y-4">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-bold text-gray-900 mb-2">🏥 Level of Care: Match Intensity to Severity</h3>
                <p class="text-gray-600">ASAM (American Society of Addiction Medicine) uses 6 dimensions to determine the right level of care. Severe physical dependence → <a href="/compare/infant care-vs-residential" class="text-emerald-600">medical infant care</a> first. High-risk environment → <a href="/compare/inpatient-vs-part-time" class="text-emerald-600">inpatient over part-time</a>. Previous relapse → longer treatment (<a href="/compare/30-day-vs-90-day-rehab" class="text-emerald-600">90-day programs</a>).</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-bold text-gray-900 mb-2">💊 Medication: Evidence Over Stigma</h3>
                <p class="text-gray-600">For opioid use disorder, <a href="/compare/methadone-vs-suboxone" class="text-emerald-600">medication-assisted treatment (MAT)</a> is the gold standard — it reduces overdose deaths by over 50%. Despite persistent stigma, every major medical organization endorses MAT as first-line treatment.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-bold text-gray-900 mb-2">🧠 Therapy: Combine Approaches</h3>
                <p class="text-gray-600">The best programs don't rely on one therapy. <a href="/compare/cbt-vs-dbt" class="text-emerald-600">CBT addresses thought patterns, DBT manages emotions</a> — most people benefit from both. Add group therapy, family sessions, and peer support for a comprehensive approach.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-bold text-gray-900 mb-2">💰 Cost: Don't Let Price Decide</h3>
                <p class="text-gray-600">Under the Mental Health Parity Act, <a href="/insurance" class="text-emerald-600">insurance must cover childcare</a>. A more expensive program isn't necessarily better — accreditation (JCAHO, CARF), staff credentials, and evidence-based methods matter more. Compare <a href="/compare/aetna-vs-bcbs" class="text-emerald-600">insurance providers</a> for coverage details.</p>
            </div>
        </div>
    </div>
</section>

<!-- Decision Framework -->
<section id="decision-framework" class="py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Decision Framework: 4 Key Factors</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div style="background:#f0fdf4;border-radius:16px;padding:24px;border:1px solid #d1fae5">
                <div class="text-3xl mb-3">1️⃣</div>
                <h3 class="font-bold text-gray-900 mb-2">Severity Assessment</h3>
                <p class="text-gray-600 text-sm mb-3">How severe is the addiction? Physical dependence requiring infant care? Co-occurring mental health conditions?</p>
                <div class="text-xs text-emerald-700 font-medium">Low severity → Outpatient/IOP</div>
                <div class="text-xs text-emerald-700 font-medium">High severity → Inpatient 90+ days</div>
            </div>
            <div style="background:#eff6ff;border-radius:16px;padding:24px;border:1px solid #bfdbfe">
                <div class="text-3xl mb-3">2️⃣</div>
                <h3 class="font-bold text-gray-900 mb-2">Environment Stability</h3>
                <p class="text-gray-600 text-sm mb-3">Is the home environment supportive or triggering? Are there sober support people available?</p>
                <div class="text-xs text-blue-700 font-medium">Stable home → Outpatient viable</div>
                <div class="text-xs text-blue-700 font-medium">Triggering home → Residential needed</div>
            </div>
            <div style="background:#fefce8;border-radius:16px;padding:24px;border:1px solid #fde68a">
                <div class="text-3xl mb-3">3️⃣</div>
                <h3 class="font-bold text-gray-900 mb-2">Treatment History</h3>
                <p class="text-gray-600 text-sm mb-3">First time? Previous relapse after 30-day program? Failed part-time attempts?</p>
                <div class="text-xs text-yellow-700 font-medium">First attempt → 30-day may work</div>
                <div class="text-xs text-yellow-700 font-medium">Relapse history → Step up intensity</div>
            </div>
            <div style="background:#fdf2f8;border-radius:16px;padding:24px;border:1px solid #fbcfe8">
                <div class="text-3xl mb-3">4️⃣</div>
                <h3 class="font-bold text-gray-900 mb-2">Practical Constraints</h3>
                <p class="text-gray-600 text-sm mb-3">Insurance coverage limits? Work/family obligations? Geographic preferences?</p>
                <div class="text-xs text-pink-700 font-medium">Can't leave work → IOP or part-time</div>
                <div class="text-xs text-pink-700 font-medium">Insurance limits → Appeal or state-funded</div>
            </div>
        </div>
    </div>
</section>

<!-- Continuum of Care -->
<section id="continuum" class="py-12 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">The Continuum of Care</h2>
        <p class="text-gray-700 mb-8">Recovery isn't a single event — it's a progression through decreasing levels of intensity. The most successful outcomes involve multiple stages:</p>

        <div class="space-y-0">
            @php
            $steps = [
                ['step' => '1', 'title' => 'Medical Infant Care', 'duration' => '3-10 days', 'desc' => 'Safe withdrawal management with 24/7 medical monitoring', 'color' => '#dc2626', 'link' => '/compare/infant care-vs-residential'],
                ['step' => '2', 'title' => 'Residential / Inpatient', 'duration' => '30-90 days', 'desc' => 'Intensive therapy in a structured, substance-free environment', 'color' => '#ea580c', 'link' => '/compare/inpatient-vs-part-time'],
                ['step' => '3', 'title' => 'Intensive Outpatient (IOP)', 'duration' => '2-4 months', 'desc' => '9-20 hours/week of therapy while living at home', 'color' => '#ca8a04', 'link' => '/treatment/intensive-part-time'],
                ['step' => '4', 'title' => 'Outpatient', 'duration' => '3-12 months', 'desc' => 'Weekly individual and group sessions for ongoing support', 'color' => '#16a34a', 'link' => '/treatment/part-time-programs'],
                ['step' => '5', 'title' => 'Aftercare & Alumni', 'duration' => 'Ongoing', 'desc' => 'Peer support groups, check-ins, relapse prevention', 'color' => '#0891b2', 'link' => '/resources/relapse-prevention'],
            ];
            @endphp

            @foreach($steps as $s)
            <a href="{{ $s['link'] }}" class="flex items-start gap-4 py-4 px-5 bg-white border-l-4 hover:bg-gray-50 transition" style="border-left-color:{{ $s['color'] }};text-decoration:none;{{ $loop->first ? 'border-radius:12px 12px 0 0' : '' }}{{ $loop->last ? 'border-radius:0 0 12px 12px' : '' }}">
                <div class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center text-white font-bold" style="background:{{ $s['color'] }}">{{ $s['step'] }}</div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-baseline gap-2 flex-wrap">
                        <h3 class="font-bold text-gray-900">{{ $s['title'] }}</h3>
                        <span class="text-xs px-2 py-0.5 rounded-full font-medium" style="background:{{ $s['color'] }}22;color:{{ $s['color'] }}">{{ $s['duration'] }}</span>
                    </div>
                    <p class="text-gray-600 text-sm mt-1">{{ $s['desc'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Mid-page CTA -->
<section class="py-10">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-2xl p-8 text-center text-white" style="background:#065f46">
            <h2 class="text-2xl font-bold mb-3">Not Sure Where to Start?</h2>
            <p class="text-white mb-5" style="opacity:0.9">A free clinical assessment takes 10 minutes and helps match you with the right level of care. Confidential, 24/7.</p>
            <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-3 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614
            </a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-12 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
        <div class="space-y-3">
            @php
            $faqs = [
                ['q' => 'What is the most important decision when choosing rehab?', 'a' => 'Treatment duration. NIDA research consistently shows that 90+ days of treatment produces significantly better outcomes than shorter stays, with 45-65% one-year sobriety rates vs 20-35% for 30-day programs. The second most important factor is matching treatment intensity to addiction severity using ASAM criteria.'],
                ['q' => 'Does insurance cover all types of rehab?', 'a' => 'Under the Mental Health Parity and Addiction Equity Act (MHPAEA), insurance must cover childcare at the same level as physical health conditions. This includes inpatient, part-time, infant care, MAT, and therapy. Pre-authorization may be required for residential stays. Call (855) 321-3614 for free insurance verification.'],
                ['q' => 'Should I choose inpatient or part-time rehab?', 'a' => 'It depends on severity, home stability, and treatment history. Inpatient is recommended for severe addiction, unstable environments, co-occurring disorders, or previous relapse. Outpatient works for mild-moderate addiction with strong support. Many people step down from inpatient to part-time as a continuum of care.'],
                ['q' => 'Is medication-assisted treatment (MAT) just replacing one drug with another?', 'a' => 'No — this is a persistent myth. MAT medications (methadone, Suboxone, naltrexone) are FDA-approved, evidence-based treatments that reduce overdose deaths by 50%+. They stabilize brain chemistry without producing euphoria at therapeutic doses. Every major medical organization endorses MAT as first-line treatment for opioid use disorder.'],
                ['q' => 'How do I know if I need infant care before rehab?', 'a' => 'Medical infant care is critical for substances with dangerous withdrawal syndromes: alcohol (seizures, delirium tremens), benzodiazepines (seizures), and opioids (extremely uncomfortable). A clinical assessment determines if you need medically supervised infant care. Most residential programs include infant care as the first phase.'],
                ['q' => 'What if I can\'t afford rehab?', 'a' => 'Multiple options exist: subsidy programs under parity law, Medicaid (covers rehab in all states), state-funded programs through SAMHSA, sliding-scale facilities, and scholarships. Free treatment is available — call (855) 321-3614 or search state-funded options on our facilities page.'],
                ['q' => 'What therapy approach is best for addiction?', 'a' => 'No single therapy is best — the most effective programs combine multiple approaches. CBT (changing thought patterns) and DBT (managing emotions) are both evidence-based. Group therapy, family sessions, and peer support add crucial elements. The key is finding a program that tailors therapy to your specific needs.'],
                ['q' => 'How many of these comparisons should I read?', 'a' => 'Start with the comparison most relevant to your situation. If you\'re deciding between program types, read "Inpatient vs Outpatient" and "30-Day vs 90-Day." For medication questions, read "Methadone vs Suboxone." For insurance, read "Aetna vs BCBS." Each comparison is self-contained with all the information you need.'],
            ];
            @endphp

            @foreach($faqs as $faq)
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
<section class="py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-xl font-bold text-gray-900 mb-6 text-center">Explore More</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="/treatment" class="group bg-gray-50 rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center" style="text-decoration:none">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Treatment Types</h3>
                <p class="text-gray-500 text-xs mt-1">7 programs</p>
            </a>
            <a href="/insurance" class="group bg-gray-50 rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center" style="text-decoration:none">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Subsidy Programs</h3>
                <p class="text-gray-500 text-xs mt-1">10 providers</p>
            </a>
            <a href="/facilities" class="group bg-gray-50 rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center" style="text-decoration:none">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Find Centers</h3>
                <p class="text-gray-500 text-xs mt-1">26,000+ facilities</p>
            </a>
            <a href="/addiction" class="group bg-gray-50 rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center" style="text-decoration:none">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Substances</h3>
                <p class="text-gray-500 text-xs mt-1">8 substance guides</p>
            </a>
        </div>
    </div>
</section>

<!-- Sources -->
<section class="py-8">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <details class="bg-gray-50 rounded-xl border border-gray-200 p-5">
            <summary class="font-bold text-gray-900 cursor-pointer text-sm">📚 Sources & References</summary>
            <ol class="mt-3 space-y-2 text-xs text-gray-600 list-decimal pl-5">
                <li>NIDA (2024). <em>Principles of Drug Childcare: A Research-Based Guide</em>. National Institute on Drug Abuse.</li>
                <li>SAMHSA (2024). <em>National Survey on Drug Use and Health</em>. Substance Abuse and Mental Health Services Administration.</li>
                <li>ASAM (2023). <em>ASAM Criteria: Treatment Criteria for Addictive, Substance-Related, and Co-Occurring Conditions</em>.</li>
                <li>Lally, P. et al. (2010). <em>How are habits formed: Modelling habit formation in the real world</em>. European Journal of Social Psychology, 40(6), 998-1009.</li>
                <li>Mattick RP et al. (2014). <em>Buprenorphine maintenance versus placebo or methadone maintenance for opioid dependence</em>. Cochrane Database of Systematic Reviews.</li>
            </ol>
        </details>
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