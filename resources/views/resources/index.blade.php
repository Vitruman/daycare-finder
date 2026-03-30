@extends('layouts.app')
@section('meta_title', 'Recovery Resources & Guides — Free Expert-Written Guides | DaycareHub')
@section('meta_description', 'Free evidence-based guides: choosing rehab, what to expect in treatment, paying for rehab, family support, and relapse prevention. Expert-reviewed, updated monthly.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Resources"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "name": "Recovery Resources & Guides",
    "description": "Free evidence-based guides to help navigate every stage of addiction recovery.",
    "url": "https://daycarehub.us/resources",
    "dateModified": "{{ now()->toIso8601String() }}",
    "lastReviewed": "{{ date('Y-m-d') }}",
    "publisher": {"@@type": "Organization", "name": "DaycareHub"}
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "How do I choose the right daycare center?", "acceptedAnswer": {"@@type": "Answer", "text": "Evaluate 7 key factors: accreditation (JCAHO, CARF), treatment approach (evidence-based therapies), staff credentials, insurance acceptance, patient-to-staff ratio, aftercare planning, and location. Always tour the facility or request a virtual walkthrough. Our guide covers each factor in detail with red flags to watch for."}},
        {"@@type": "Question", "name": "What should I expect in rehab?", "acceptedAnswer": {"@@type": "Answer", "text": "A typical day includes: morning group therapy (1-2 hours), individual counseling (45-60 min), psychoeducation sessions, wellness activities (yoga, exercise), meals, free time, and evening meetings. The first 72 hours focus on intake assessment and medical stabilization. Programs gradually increase independence as you progress."}},
        {"@@type": "Question", "name": "How can I pay for childcare?", "acceptedAnswer": {"@@type": "Answer", "text": "5 main options: (1) Insurance — most plans cover treatment under the Mental Health Parity Act, (2) State-funded programs via SAMHSA block grants, (3) Sliding-scale fees based on income, (4) Payment plans from facilities, (5) Scholarships and grants from nonprofits. Cost should never be a barrier — free options exist in every state."}},
        {"@@type": "Question", "name": "How can I help a family member with addiction?", "acceptedAnswer": {"@@type": "Answer", "text": "Evidence-based approach: (1) Educate yourself about addiction as a brain disease, (2) Use CRAFT method for compassionate communication, (3) Set firm boundaries without enabling, (4) Offer specific help (research programs, call together), (5) Attend Al-Anon or Nar-Anon for your own support. Avoid ultimatums, shame, or covering up their behavior."}},
        {"@@type": "Question", "name": "How can I prevent relapse after treatment?", "acceptedAnswer": {"@@type": "Answer", "text": "Key strategies: (1) Complete a full continuum of care (don't skip aftercare), (2) Build a strong support network, (3) Identify and manage triggers, (4) Attend regular recovery meetings, (5) Consider MAT if appropriate, (6) Develop healthy routines and coping skills, (7) Have an emergency plan. Relapse rates (40-60%) are similar to other chronic diseases — it's a signal to adjust treatment, not a failure."}},
        {"@@type": "Question", "name": "Are these guides free?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes. All DaycareHub recovery guides are completely free, evidence-based, and reviewed by our editorial team. We believe access to quality information should never be a barrier to getting help. Guides are updated monthly to reflect current research and best practices."}}
    ]
}
</script>
@endsection

@section('content')
<!-- Scroll Progress Bar -->
<div id="scroll-progress" style="position:fixed;top:0;left:0;width:0%;height:4px;background:#10b981;z-index:9999;transition:width 0.1s linear;"></div>

<!-- Hero Banner -->
<section class="relative overflow-hidden" style="min-height:440px">
    <div class="absolute inset-0">
        <img src="/images/resources/hero.webp" alt="" style="width:100%;height:100%;object-fit:cover;object-position:center 40%">
        <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(88,28,135,0.87) 0%,rgba(124,58,237,0.78) 50%,rgba(167,139,250,0.68) 100%)"></div>
    </div>
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8" style="padding-top:96px;padding-bottom:48px">
        <nav class="text-sm mb-4" style="opacity:0.8">
            <a href="/" class="hover:text-white" style="color:rgba(255,255,255,0.7)">Home</a>
            <span style="color:rgba(255,255,255,0.5)" class="mx-2">/</span>
            <span class="text-white">Recovery Resources</span>
        </nav>
        <h1 class="text-3xl md:text-5xl font-bold text-white mb-3" style="line-height:1.1">Recovery Resources<br><span style="font-weight:400;font-size:0.55em;opacity:0.9">Guides, Tools & Support</span></h1>
        <p style="color:rgba(255,255,255,0.9);max-width:600px;font-size:17px;margin-bottom:24px">Practical guides for every stage of recovery: choosing rehab, what to expect, paying for treatment, family support, relapse prevention.</p>
        <div style="display:flex;flex-wrap:wrap;gap:24px">
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">5</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">in-depth guides</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">24/7</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">crisis hotlines</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">100%</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">evidence-based</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">Free</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">always free</div></div>
            </div>
            
        </div>
    </div>
    <div style="position:absolute;bottom:-1px;left:0;right:0">
        <svg viewBox="0 0 1440 60" fill="none" style="width:100%;display:block"><path d="M0 60V30C240 0 480 0 720 30s480 30 720 0v30H0z" fill="white"/></svg>
    </div>
</section>

<!-- Quick Answer -->
<section class="bg-gradient-to-b from-emerald-50 to-white pt-8 pb-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border-l-4 border-emerald-500 rounded-xl shadow-sm p-6 md:p-8">
            <p class="text-sm font-bold text-emerald-700 uppercase tracking-wider mb-2">Free Guides</p>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Recovery Resources & Guides</h1>
            <p class="text-gray-700 text-lg leading-relaxed">Navigating addiction recovery is overwhelming. These <strong>{{ count($guides) }} expert-written guides</strong> cover every stage — from <strong>choosing the right rehab</strong> and <strong>understanding what treatment looks like</strong>, to <strong>paying for care</strong>, <strong>supporting a loved one</strong>, and <strong>preventing relapse</strong>. All guides are free, evidence-based, and reviewed monthly.</p>
        </div>
    </div>
</section>

<!-- TOC / Quick Links -->
<section class="py-4">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <details class="group bg-gray-50 rounded-xl border border-gray-200 md:open" id="toc-details">
            <summary class="flex justify-between items-center cursor-pointer p-4 font-semibold text-gray-900 md:cursor-default">
                <span class="flex items-center gap-2"><svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg> On This Page</span>
                <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform md:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </summary>
            <div class="px-4 pb-4">
                <ol class="grid grid-cols-1 md:grid-cols-2 gap-1 text-sm">
                    <li><a href="#guides" class="text-emerald-700 hover:underline py-1 block">1. Recovery Guides</a></li>
                    <li><a href="#journey" class="text-emerald-700 hover:underline py-1 block">2. The Recovery Journey (5 Stages)</a></li>
                    <li><a href="#quick-reference" class="text-emerald-700 hover:underline py-1 block">3. Quick Reference Cards</a></li>
                    <li><a href="#hotlines" class="text-emerald-700 hover:underline py-1 block">4. Crisis Hotlines & Helplines</a></li>
                    <li><a href="#external" class="text-emerald-700 hover:underline py-1 block">5. Trusted External Resources</a></li>
                    <li><a href="#faq" class="text-emerald-700 hover:underline py-1 block">6. Frequently Asked Questions</a></li>
                </ol>
            </div>
        </details>
    </div>
</section>

<!-- Stats Bar -->
<section class="py-8" style="background:#065f46">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-white">
            <div>
                <div class="text-3xl md:text-4xl font-bold">{{ count($guides) }}</div>
                <div class="text-emerald-200 text-sm mt-1">Expert-Written Guides</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">100%</div>
                <div class="text-emerald-200 text-sm mt-1">Free & Evidence-Based</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">Monthly</div>
                <div class="text-emerald-200 text-sm mt-1">Updated & Reviewed</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">24/7</div>
                <div class="text-emerald-200 text-sm mt-1">Phone Support Available</div>
            </div>
        </div>
    </div>
</section>

<!-- Guide Cards -->
<section id="guides" class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Recovery Guides</h2>
            <p class="mt-3 text-gray-600 max-w-2xl mx-auto">Each guide is written by recovery specialists, backed by research from SAMHSA, NIDA, and clinical best practices. Click any guide to read the full article.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($guides as $slug => $g)
            @php $readTime = max(5, intval(array_sum(array_map(fn($s) => str_word_count($s['text']), $g['sections'])) / 200)); @endphp
            <a href="/resources/{{ $slug }}" class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all overflow-hidden flex flex-col">
                <div class="p-6 flex-1">
                    <div style="display:flex;align-items:flex-start;gap:12px;margin-bottom:12px">
                        <div style="flex-shrink:0;width:48px;height:48px;background:linear-gradient(135deg,#faf5ff,#f3e8ff);border-radius:12px;display:flex;align-items:center;justify-content:center" class="group-hover:scale-110 transition-transform">
                            <img src="/images/resources/icon-{{ $slug }}.svg" alt="" style="width:32px;height:32px" onerror="this.style.display='none'">
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-xs text-gray-400">{{ $readTime }} min</span>
                                <span class="text-xs text-gray-300">&bull;</span>
                                <span class="text-xs text-gray-400">{{ count($g['sections']) }} sections</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 group-hover:text-emerald-700 transition-colors">{{ $g['title'] }}</h3>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ $g['content'] }}</p>
                    <div class="flex flex-wrap gap-1.5">
                        @foreach(array_slice($g['sections'], 0, 3) as $sec)
                        <span class="text-xs px-2 py-0.5 rounded bg-gray-100 text-gray-500">{{ Str::limit($sec['heading'], 20) }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
                    <span class="text-emerald-600 font-semibold text-sm group-hover:text-emerald-700">Read full guide &rarr;</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- The Recovery Journey — 5 Stages -->
<section id="journey" class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">The Recovery Journey: 5 Stages</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-10">Recovery isn't linear, but research identifies 5 stages most people move through. Understanding where you are helps you know what to expect next.</p>

        <div class="space-y-0">
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-400 text-white flex items-center justify-center font-bold text-sm flex-shrink-0">1</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900">Pre-contemplation</h3>
                    <p class="text-gray-600 text-sm mt-1">Not yet recognizing the problem or considering change. The person may minimize consequences, deny the issue, or blame external factors. <strong>For loved ones:</strong> Plant seeds without pressure. Share information. Express concern using "I" statements. Our <a href="/resources/family-guide" class="text-emerald-600 hover:underline">Family Guide</a> covers this stage in depth.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-yellow-500 text-white flex items-center justify-center font-bold text-sm flex-shrink-0">2</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900">Contemplation</h3>
                    <p class="text-gray-600 text-sm mt-1">Acknowledging the problem but ambivalent about change. Weighing pros and cons. This is the critical window where information matters most — <a href="/resources/how-to-choose-rehab" class="text-emerald-600 hover:underline">understanding treatment options</a> and <a href="/resources/what-to-expect-in-rehab" class="text-emerald-600 hover:underline">what rehab actually looks like</a> can tip the balance.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-orange-500 text-white flex items-center justify-center font-bold text-sm flex-shrink-0">3</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900">Preparation</h3>
                    <p class="text-gray-600 text-sm mt-1">Ready to take action. This is when practical resources matter: <a href="/resources/how-to-choose-rehab" class="text-emerald-600 hover:underline">choosing a program</a>, <a href="/insurance" class="text-emerald-600 hover:underline">verifying insurance</a>, <a href="/resources/paying-for-treatment" class="text-emerald-600 hover:underline">understanding costs</a>, and making arrangements for work/family. Having a plan dramatically increases follow-through.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-sm flex-shrink-0">4</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900">Action</h3>
                    <p class="text-gray-600 text-sm mt-1">Actively engaged in treatment. This includes <a href="/treatment/medical-infant care" class="text-emerald-600 hover:underline">infant care</a>, <a href="/treatment/inpatient-rehab" class="text-emerald-600 hover:underline">inpatient care</a>, <a href="/treatment/part-time-programs" class="text-emerald-600 hover:underline">part-time therapy</a>, and building new coping skills. The first 90 days are critical — longer treatment produces better outcomes.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold text-sm flex-shrink-0">5</div>
                </div>
                <div class="pb-2">
                    <h3 class="font-bold text-gray-900">Maintenance</h3>
                    <p class="text-gray-600 text-sm mt-1">Ongoing recovery through aftercare, support groups, and lifestyle changes. <a href="/resources/relapse-prevention" class="text-emerald-600 hover:underline">Relapse prevention</a> strategies become the focus. Recovery is a lifelong journey — but it gets easier with time, support, and practice.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Reference Cards -->
<section id="quick-reference" class="py-14 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Quick Reference</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- What to Pack for Rehab -->
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    What to Pack for Rehab
                </h3>
                <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                    <div>
                        <p class="font-semibold text-gray-800 mb-1">Essentials</p>
                        <ul class="space-y-0.5">
                            <li>&bull; Photo ID & insurance card</li>
                            <li>&bull; Prescription medications (in original bottles)</li>
                            <li>&bull; Comfortable clothing (7+ days)</li>
                            <li>&bull; Toiletries (no alcohol-based)</li>
                            <li>&bull; Journal and pen</li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800 mb-1">Leave at Home</p>
                        <ul class="space-y-0.5">
                            <li>&bull; Valuables & large cash</li>
                            <li>&bull; Weapons or sharp objects</li>
                            <li>&bull; OTC meds (facility provides)</li>
                            <li>&bull; Electronics (most facilities)</li>
                            <li>&bull; Revealing clothing</li>
                        </ul>
                    </div>
                </div>
                <p class="text-xs text-gray-400 mt-3"><a href="/resources/what-to-expect-in-rehab" class="text-emerald-600 hover:underline">Full guide: What to Expect in Rehab &rarr;</a></p>
            </div>

            <!-- Red Flags When Choosing a Rehab -->
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                    Red Flags When Choosing a Rehab
                </h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-start gap-2"><span class="text-red-500 flex-shrink-0">&bull;</span> Guarantees a "cure" or specific success rate</li>
                    <li class="flex items-start gap-2"><span class="text-red-500 flex-shrink-0">&bull;</span> No licensed clinical staff (LPC, LCSW, MD)</li>
                    <li class="flex items-start gap-2"><span class="text-red-500 flex-shrink-0">&bull;</span> Refuses to provide treatment approach details</li>
                    <li class="flex items-start gap-2"><span class="text-red-500 flex-shrink-0">&bull;</span> Pressure to sign immediately / "last bed" tactics</li>
                    <li class="flex items-start gap-2"><span class="text-red-500 flex-shrink-0">&bull;</span> No accreditation (JCAHO, CARF, or state license)</li>
                    <li class="flex items-start gap-2"><span class="text-red-500 flex-shrink-0">&bull;</span> Against MAT for opioid use disorder</li>
                </ul>
                <p class="text-xs text-gray-400 mt-3"><a href="/resources/how-to-choose-rehab" class="text-emerald-600 hover:underline">Full guide: How to Choose a Rehab &rarr;</a></p>
            </div>

            <!-- Questions to Ask a Treatment Center -->
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    10 Questions to Ask a Treatment Center
                </h3>
                <ol class="space-y-1 text-sm text-gray-600 list-decimal list-inside">
                    <li>What accreditations and licenses do you hold?</li>
                    <li>What evidence-based therapies do you use?</li>
                    <li>What is the staff-to-patient ratio?</li>
                    <li>Do you offer MAT for opioid/alcohol disorders?</li>
                    <li>What does a typical day look like?</li>
                    <li>How do you handle co-occurring mental health?</li>
                    <li>What does your aftercare plan include?</li>
                    <li>What insurance do you accept?</li>
                    <li>What is the average length of stay?</li>
                    <li>Can family participate in treatment?</li>
                </ol>
                <p class="text-xs text-gray-400 mt-3"><a href="/resources/how-to-choose-rehab" class="text-emerald-600 hover:underline">Full guide: How to Choose a Rehab &rarr;</a></p>
            </div>

            <!-- Financial Assistance Options -->
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Financial Assistance Options
                </h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> <strong><a href="/insurance" class="text-emerald-600 hover:underline">Insurance</a></strong> — Most plans cover treatment under federal law</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> <strong><a href="/insurance/medicaid" class="text-emerald-600 hover:underline">Medicaid</a></strong> — Free or low-cost for qualifying individuals</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> <strong>State-funded programs</strong> — SAMHSA block grants fund free treatment in every state</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> <strong>Sliding-scale</strong> — Income-based fees at many nonprofit centers</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> <strong>Scholarships</strong> — Foundations and nonprofits offer treatment grants</li>
                </ul>
                <p class="text-xs text-gray-400 mt-3"><a href="/resources/paying-for-treatment" class="text-emerald-600 hover:underline">Full guide: Paying for Treatment &rarr;</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Mid-page CTA -->
<section class="py-10">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-2xl p-8 text-center text-white" style="background:#065f46">
            <h2 class="text-2xl font-bold mb-3">Need Personalized Guidance?</h2>
            <p class="text-white mb-5 text-lg" style="opacity:0.9">Our treatment specialists can help you navigate the options and find the right path. Free, confidential, available 24/7.</p>
            <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-3 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614
            </a>
        </div>
    </div>
</section>

<!-- Crisis Hotlines -->
<section id="hotlines" class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Crisis Hotlines & Helplines</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <h3 class="font-bold text-gray-900 mb-1">SAMHSA National Helpline</h3>
                <a href="tel:1-800-662-4357" class="text-emerald-700 font-bold text-lg">1-800-662-HELP (4357)</a>
                <p class="text-gray-600 text-sm mt-1">Free, confidential, 24/7 treatment referrals and information in English and Spanish.</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <h3 class="font-bold text-gray-900 mb-1">988 Suicide & Crisis Lifeline</h3>
                <a href="tel:988" class="text-emerald-700 font-bold text-lg">Call or Text 988</a>
                <p class="text-gray-600 text-sm mt-1">24/7 support for mental health crisis, suicidal thoughts, or emotional distress.</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <h3 class="font-bold text-gray-900 mb-1">Crisis Text Line</h3>
                <p class="text-emerald-700 font-bold text-lg">Text HOME to 741741</p>
                <p class="text-gray-600 text-sm mt-1">Free 24/7 crisis counseling via text message. Trained crisis counselors respond within minutes.</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <h3 class="font-bold text-gray-900 mb-1">Veterans Crisis Line</h3>
                <a href="tel:988" class="text-emerald-700 font-bold text-lg">Call 988, Press 1</a>
                <p class="text-gray-600 text-sm mt-1">24/7 support for veterans and service members. Also available via text: 838255.</p>
            </div>
        </div>
    </div>
</section>

<!-- Trusted External Resources -->
<section id="external" class="py-14 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Trusted External Resources</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 rounded-xl p-5 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3">Government Resources</h3>
                <div class="space-y-2 text-sm">
                    <a href="https://findtreatment.gov" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">FindTreatment.gov — SAMHSA Locator</a>
                    <a href="https://www.samhsa.gov" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">SAMHSA — Official Resources</a>
                    <a href="https://nida.nih.gov" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">NIDA — Research & Education</a>
                    <a href="https://www.cdc.gov/drugoverdose/" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">CDC — Overdose Prevention</a>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3">Support Groups</h3>
                <div class="space-y-2 text-sm">
                    <a href="https://www.aa.org" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">Alcoholics Anonymous (AA)</a>
                    <a href="https://na.org" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">Narcotics Anonymous (NA)</a>
                    <a href="https://www.smartrecovery.org" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">SMART Recovery</a>
                    <a href="https://al-anon.org" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">Al-Anon (for families)</a>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3">Research & Education</h3>
                <div class="space-y-2 text-sm">
                    <a href="https://www.asam.org" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">ASAM — Treatment Standards</a>
                    <a href="https://www.drugabuse.gov/publications/principles-drug-addiction-treatment" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">NIDA — Treatment Principles</a>
                    <a href="https://www.mentalhealth.gov" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">MentalHealth.gov</a>
                    <a href="https://store.samhsa.gov" target="_blank" rel="noopener" class="block text-emerald-600 hover:underline">SAMHSA Publications (free)</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cross-links to site sections -->
<section class="py-14 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Explore More on DaycareHub</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <a href="/treatment" class="group bg-white rounded-xl p-5 border border-gray-100 hover:shadow-lg transition-all text-center">
                <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Treatment Programs</h3>
                <p class="text-gray-500 text-xs mt-1">Compare 7 treatment types</p>
            </a>
            <a href="/addiction" class="group bg-white rounded-xl p-5 border border-gray-100 hover:shadow-lg transition-all text-center">
                <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Substances</h3>
                <p class="text-gray-500 text-xs mt-1">8 substance guides</p>
            </a>
            <a href="/insurance" class="group bg-white rounded-xl p-5 border border-gray-100 hover:shadow-lg transition-all text-center">
                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Insurance</h3>
                <p class="text-gray-500 text-xs mt-1">Verify your coverage</p>
            </a>
            <a href="/states" class="group bg-white rounded-xl p-5 border border-gray-100 hover:shadow-lg transition-all text-center">
                <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Find by State</h3>
                <p class="text-gray-500 text-xs mt-1">17,000+ centers in 50 states</p>
            </a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-14 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
        <div class="space-y-3">
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How do I choose the right daycare center?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Evaluate 7 key factors: accreditation, treatment approach, staff credentials, insurance acceptance, patient-to-staff ratio, aftercare planning, and location. Always verify licenses and ask about evidence-based therapies. <a href="/resources/how-to-choose-rehab" class="text-emerald-600 hover:underline">Read our full guide &rarr;</a></div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What should I expect in rehab?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Typical days include group therapy, individual counseling, psychoeducation, wellness activities, and recovery meetings. The first 72 hours focus on intake and medical stabilization. Programs gradually increase independence. <a href="/resources/what-to-expect-in-rehab" class="text-emerald-600 hover:underline">Read our full guide &rarr;</a></div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How can I pay for childcare?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">5 main options: <a href="/insurance" class="text-emerald-600 hover:underline">insurance</a> (most plans cover treatment), state-funded programs, sliding-scale fees, payment plans, and scholarships/grants. Cost should never prevent you from getting help. <a href="/resources/paying-for-treatment" class="text-emerald-600 hover:underline">Read our full guide &rarr;</a></div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How can I help a family member with addiction?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Educate yourself, use CRAFT communication method, set firm boundaries without enabling, offer specific help (not just "let me know"), and get support for yourself (Al-Anon, Nar-Anon). <a href="/resources/family-guide" class="text-emerald-600 hover:underline">Read our full guide &rarr;</a></div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How can I prevent relapse?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Key strategies: complete the full continuum of care, build a strong support network, identify triggers, attend recovery meetings, consider <a href="/treatment/medication-assisted-treatment" class="text-emerald-600 hover:underline">MAT</a>, develop healthy routines, and have an emergency plan. Relapse rates (40-60%) are normal for chronic diseases. <a href="/resources/relapse-prevention" class="text-emerald-600 hover:underline">Read our full guide &rarr;</a></div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Are these guides free?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Yes — all DaycareHub guides are completely free and always will be. We believe access to quality recovery information should never be a barrier. All guides are evidence-based, reviewed by our editorial team, and updated monthly.</div></details>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-14 text-white" style="background:#065f46">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-3">Ready to Take the Next Step?</h2>
        <p class="mb-6 text-lg" style="color:rgba(255,255,255,0.9)">Whether you're exploring options or ready to start treatment, our specialists are here to help. Free assessment, confidential, available 24/7.</p>
        <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Call (855) 321-3614
        </a>
        <p class="mt-4 text-sm" style="color:rgba(255,255,255,0.7)">Or <a href="/contact" class="underline" style="color:rgba(255,255,255,0.9)">send a message</a> &bull; <a href="/facilities" class="underline" style="color:rgba(255,255,255,0.9)">Browse centers</a> &bull; <a href="/states" class="underline" style="color:rgba(255,255,255,0.9)">Find by state</a></p>
    </div>
</section>

<!-- Last Updated -->
<div class="max-w-7xl mx-auto px-4 py-6 text-center">
    <p class="text-xs text-gray-500">Last updated: {{ date('F j, Y') }} &bull; Reviewed by DaycareHub Editorial Team</p>
</div>

<script>
window.addEventListener('scroll', function() {
    var h = document.documentElement;
    var pct = (h.scrollTop / (h.scrollHeight - h.clientHeight)) * 100;
    document.getElementById('scroll-progress').style.width = pct + '%';
});
if (window.innerWidth >= 768) {
    var toc = document.getElementById('toc-details');
    if (toc) toc.open = true;
}
</script>
@endsection