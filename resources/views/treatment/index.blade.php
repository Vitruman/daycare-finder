@extends('layouts.app')

@section('meta_title', 'Types of Addiction Treatment Programs — Compare All Options | DaycareHub')
@section('meta_description', 'Comprehensive guide to 7 evidence-based addiction treatment types: inpatient, outpatient, detox, MAT, IOP, dual diagnosis, sober living. Compare costs, duration, success rates, and find the right program.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Treatment Programs"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "MedicalWebPage",
    "name": "Types of Addiction Treatment Programs",
    "url": "https://daycarehub.us/treatment",
    "dateModified": "{{ now()->toIso8601String() }}",
    "description": "Comprehensive guide to evidence-based addiction treatment types including inpatient, outpatient, medical detox, MAT, IOP, dual diagnosis, and sober living.",
    "lastReviewed": "{{ date('Y-m-d') }}",
    "reviewedBy": {
        "@@type": "Organization",
        "name": "DaycareHub Editorial Team"
    },
    "about": {
        "@@type": "MedicalCondition",
        "name": "Substance Use Disorder"
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "What are the main types of addiction treatment?", "acceptedAnswer": {"@@type": "Answer", "text": "The 7 main types are: inpatient/residential (24/7 supervised care, 30-90 days), outpatient programs (flexible 3-6 month sessions), medical detox (3-10 days supervised withdrawal), intensive outpatient/IOP (9-20 hrs/week), medication-assisted treatment/MAT (ongoing with FDA-approved meds), dual diagnosis (integrated mental health + addiction), and sober living homes (3-12 months transitional housing)."}},
        {"@@type": "Question", "name": "How do I choose the right treatment program?", "acceptedAnswer": {"@@type": "Answer", "text": "Consider 5 factors: (1) addiction severity and substance type, (2) co-occurring mental health conditions, (3) previous treatment history, (4) home environment stability, and (5) insurance coverage. ASAM criteria provide a standardized framework clinicians use to match patients to appropriate care levels."}},
        {"@@type": "Question", "name": "Does insurance cover addiction treatment?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes. Under the Mental Health Parity and Addiction Equity Act (MHPAEA) and the Affordable Care Act, most insurance plans must cover substance use disorder treatment at the same level as physical health conditions. This includes detox, inpatient, outpatient, and MAT programs."}},
        {"@@type": "Question", "name": "How long does addiction treatment take?", "acceptedAnswer": {"@@type": "Answer", "text": "Duration varies by program type: medical detox 3-10 days, inpatient 30-90 days, IOP 2-4 months, outpatient 3-6 months, sober living 3-12 months. NIDA research shows that 90+ days of combined treatment produces the best long-term outcomes."}},
        {"@@type": "Question", "name": "What is the success rate of addiction treatment?", "acceptedAnswer": {"@@type": "Answer", "text": "Treatment success rates range from 40-60% for sustained recovery, comparable to other chronic diseases. Inpatient programs show 40-60%, MAT achieves 60-75% retention, and IOP ranges 35-55%. Success improves significantly with treatment lasting 90+ days, aftercare, and family involvement."}},
        {"@@type": "Question", "name": "What is the difference between inpatient and outpatient rehab?", "acceptedAnswer": {"@@type": "Answer", "text": "Inpatient rehab requires living at the facility 24/7 for 30-90 days with constant medical supervision, costing $15,000-$30,000. Outpatient allows living at home while attending sessions 2-5 times per week for 3-6 months, costing $5,000-$10,000. Inpatient is better for severe addiction; outpatient suits mild-moderate cases with stable home environments."}},
        {"@@type": "Question", "name": "Can I work while in addiction treatment?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes, with outpatient programs and IOP. Outpatient offers flexible scheduling (evening and weekend sessions), and IOP provides 9-20 hours per week with morning, afternoon, or evening tracks. Inpatient and residential programs require full-time commitment. The FMLA may protect your job for up to 12 weeks for treatment."}},
        {"@@type": "Question", "name": "What is MAT and is it effective?", "acceptedAnswer": {"@@type": "Answer", "text": "Medication-Assisted Treatment combines FDA-approved medications (buprenorphine/Suboxone, methadone, naltrexone/Vivitrol) with counseling. It reduces opioid overdose deaths by 50%, improves treatment retention by 60-75%, and decreases illicit drug use. MAT is the gold standard for opioid use disorder per SAMHSA and WHO guidelines."}},
        {"@@type": "Question", "name": "What happens after treatment is complete?", "acceptedAnswer": {"@@type": "Answer", "text": "Aftercare typically includes: step-down to a lower level of care (e.g., inpatient to IOP), sober living housing, ongoing individual or group therapy, 12-step or SMART Recovery meetings, alumni programs, and regular check-ins. A strong aftercare plan reduces relapse risk by up to 50%."}},
        {"@@type": "Question", "name": "How much does addiction treatment cost without insurance?", "acceptedAnswer": {"@@type": "Answer", "text": "Costs without insurance: medical detox $3,000-$10,000, inpatient $15,000-$30,000+ for 30 days, IOP $5,000-$12,000, outpatient $5,000-$10,000, sober living $500-$3,000/month, MAT $5,000-$15,000/year. Many facilities offer sliding-scale fees, payment plans, scholarships, and state-funded programs for those without coverage."}}
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
        <img src="/images/treatment/hero.webp" alt="" style="width:100%;height:100%;object-fit:cover;object-position:center 40%">
        <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(6,95,70,0.88) 0%,rgba(4,120,87,0.78) 50%,rgba(16,185,129,0.65) 100%)"></div>
    </div>
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8" style="padding-top:96px;padding-bottom:48px">
        <nav class="text-sm mb-4" style="opacity:0.8">
            <a href="/" class="hover:text-white" style="color:rgba(255,255,255,0.7)">Home</a>
            <span style="color:rgba(255,255,255,0.5)" class="mx-2">/</span>
            <span class="text-white">Treatment Programs</span>
        </nav>
        <h1 class="text-3xl md:text-5xl font-bold text-white mb-3" style="line-height:1.1">Addiction Treatment Programs<br><span style="font-weight:400;font-size:0.55em;opacity:0.9">Evidence-Based Recovery Options</span></h1>
        <p style="color:rgba(255,255,255,0.9);max-width:600px;font-size:17px;margin-bottom:24px">7 types of treatment compared: costs, duration, success rates, insurance coverage. Find the right program for your situation.</p>
        <div style="display:flex;flex-wrap:wrap;gap:24px">
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">7</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">program types</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">90+ Days</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">optimal duration</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">40-60%</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">success rate</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">95%</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">insurance covers</div></div>
            </div>
            
        </div>
    </div>
    <div style="position:absolute;bottom:-1px;left:0;right:0">
        <svg viewBox="0 0 1440 60" fill="none" style="width:100%;display:block"><path d="M0 60V30C240 0 480 0 720 30s480 30 720 0v30H0z" fill="white"/></svg>
    </div>
</section>

<!-- TOC -->
<section class="py-4">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <details class="group bg-gray-50 rounded-xl border border-gray-200 md:open" id="toc-details">
            <summary class="flex justify-between items-center cursor-pointer p-4 font-semibold text-gray-900 md:cursor-default">
                <span class="flex items-center gap-2"><svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg> Table of Contents</span>
                <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform md:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </summary>
            <div class="px-4 pb-4">
                <ol class="grid grid-cols-1 md:grid-cols-2 gap-1 text-sm">
                    <li><a href="#programs" class="text-emerald-700 hover:underline py-1 block">1. Treatment Programs Overview</a></li>
                    <li><a href="#stats" class="text-emerald-700 hover:underline py-1 block">2. Addiction Treatment Statistics</a></li>
                    <li><a href="#levels-of-care" class="text-emerald-700 hover:underline py-1 block">3. Understanding Levels of Care (ASAM)</a></li>
                    <li><a href="#comparison" class="text-emerald-700 hover:underline py-1 block">4. Side-by-Side Comparison</a></li>
                    <li><a href="#choosing" class="text-emerald-700 hover:underline py-1 block">5. How to Choose the Right Program</a></li>
                    <li><a href="#cost" class="text-emerald-700 hover:underline py-1 block">6. Treatment Costs & Financial Options</a></li>
                    <li><a href="#what-to-expect" class="text-emerald-700 hover:underline py-1 block">7. What to Expect in Treatment</a></li>
                    <li><a href="#insurance" class="text-emerald-700 hover:underline py-1 block">8. Insurance & Payment</a></li>
                    <li><a href="#faq" class="text-emerald-700 hover:underline py-1 block">9. Frequently Asked Questions</a></li>
                    <li><a href="#find-help" class="text-emerald-700 hover:underline py-1 block">10. Find Help Now</a></li>
                </ol>
            </div>
        </details>
    </div>
</section>

<!-- Stats Bar -->
<section id="stats" class="py-8" style="background:#065f46">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-white">
            <div>
                <div class="text-3xl md:text-4xl font-bold">48.7M</div>
                <div class="text-emerald-200 text-sm mt-1">Americans with SUD<sup class="cursor-help" title="SAMHSA 2023 NSDUH">1</sup></div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">Only 24%</div>
                <div class="text-emerald-200 text-sm mt-1">Received any treatment<sup class="cursor-help" title="SAMHSA 2023 NSDUH">1</sup></div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">40-60%</div>
                <div class="text-emerald-200 text-sm mt-1">Recovery success rate<sup class="cursor-help" title="NIDA Principles of Drug Addiction Treatment">2</sup></div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">17,000+</div>
                <div class="text-emerald-200 text-sm mt-1">Treatment centers in US<sup class="cursor-help" title="SAMHSA National Directory">3</sup></div>
            </div>
        </div>
    </div>
</section>

<!-- Treatment Programs Grid -->
<section id="programs" class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">7 Evidence-Based Treatment Programs</h2>
            <p class="mt-3 text-gray-600 max-w-2xl mx-auto">Each program serves a specific need in the recovery journey. Many people progress through multiple levels of care — starting with detox and stepping down through less intensive programs.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($treatments as $slug => $t)
            <a href="/treatment/{{ $slug }}" class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col">
                <div class="p-6 flex-1">
                    <div style="display:flex;align-items:flex-start;gap:14px;margin-bottom:12px">
                        <div style="flex-shrink:0;width:52px;height:52px;background:linear-gradient(135deg,#ecfdf5,#d1fae5);border-radius:14px;display:flex;align-items:center;justify-content:center" class="group-hover:scale-110 transition-transform">
                            <img src="/images/treatment/icon-{{ $slug }}.svg" alt="" style="width:32px;height:32px" onerror="this.style.display='none'">
                        </div>
                        <div>
                            <span class="inline-block px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold mb-1">{{ $t['hero_label'] }}</span>
                            <h3 class="text-lg font-bold text-gray-900 group-hover:text-emerald-700 transition-colors">{{ $t['title'] }}</h3>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ Str::limit($t['overview'], 150) }}</p>
                    <div class="flex flex-wrap gap-3 text-xs text-gray-500">
                        <span class="flex items-center gap-1"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> {{ $t['duration'] }}</span>
                        <span class="flex items-center gap-1"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> {{ $t['cost'] }}</span>
                    </div>
                </div>
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-between">
                    <span class="text-emerald-600 font-semibold text-sm group-hover:text-emerald-700">Learn more &rarr;</span>
                    @if(isset($t['success_rate']))
                    <span class="text-xs text-gray-500">{{ $t['success_rate'] }} success rate</span>
                    @endif
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Levels of Care (ASAM) — Educational Section -->
<section id="levels-of-care" class="py-14 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">Understanding Levels of Care</h2>
        <p class="text-gray-600 text-center max-w-3xl mx-auto mb-10">The American Society of Addiction Medicine (ASAM) defines a continuum of care from least to most intensive. Your clinical assessment determines which level is appropriate.</p>

        <div class="relative">
            <!-- Vertical connector line (desktop) -->
            <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-0.5 bg-emerald-200 -translate-x-1/2"></div>

            <div class="space-y-8 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-16 md:gap-y-10">
                <!-- Level 0.5 -->
                <div class="md:text-right md:pr-8">
                    <div class="inline-block px-2 py-0.5 rounded bg-emerald-100 text-emerald-800 text-xs font-bold mb-2">Level 0.5</div>
                    <h3 class="font-bold text-gray-900">Early Intervention</h3>
                    <p class="text-gray-600 text-sm mt-1">Assessment and education for at-risk individuals. Brief interventions, screening, and referral to services (SBIRT). No formal treatment program required.</p>
                </div>
                <div class="hidden md:block"></div>

                <div class="hidden md:block"></div>
                <!-- Level 1 -->
                <div class="md:pl-8">
                    <div class="inline-block px-2 py-0.5 rounded bg-emerald-100 text-emerald-800 text-xs font-bold mb-2">Level 1</div>
                    <h3 class="font-bold text-gray-900"><a href="/treatment/outpatient-programs" class="hover:text-emerald-700">Outpatient Treatment</a></h3>
                    <p class="text-gray-600 text-sm mt-1">Less than 9 hours/week of structured programming. Individual and group therapy while maintaining daily life. Suitable for mild substance use disorders with strong social support.</p>
                </div>

                <!-- Level 2.1 -->
                <div class="md:text-right md:pr-8">
                    <div class="inline-block px-2 py-0.5 rounded bg-emerald-200 text-emerald-800 text-xs font-bold mb-2">Level 2.1</div>
                    <h3 class="font-bold text-gray-900"><a href="/treatment/intensive-outpatient" class="hover:text-emerald-700">Intensive Outpatient (IOP)</a></h3>
                    <p class="text-gray-600 text-sm mt-1">9-20 hours/week of structured programming. Group therapy 3-5 days per week plus individual sessions. Step-down from residential or step-up from standard outpatient.</p>
                </div>
                <div class="hidden md:block"></div>

                <div class="hidden md:block"></div>
                <!-- Level 2.5 -->
                <div class="md:pl-8">
                    <div class="inline-block px-2 py-0.5 rounded bg-yellow-100 text-yellow-800 text-xs font-bold mb-2">Level 2.5</div>
                    <h3 class="font-bold text-gray-900">Partial Hospitalization (PHP)</h3>
                    <p class="text-gray-600 text-sm mt-1">20+ hours/week of structured programming. Full-day sessions while living at home or in sober housing. Provides near-residential intensity with more independence.</p>
                </div>

                <!-- Level 3.1-3.5 -->
                <div class="md:text-right md:pr-8">
                    <div class="inline-block px-2 py-0.5 rounded bg-orange-100 text-orange-800 text-xs font-bold mb-2">Level 3.1-3.5</div>
                    <h3 class="font-bold text-gray-900"><a href="/treatment/inpatient-rehab" class="hover:text-emerald-700">Residential / Inpatient</a></h3>
                    <p class="text-gray-600 text-sm mt-1">24/7 supervised care in a structured facility. Individual therapy, group counseling, medical monitoring, and life skills training. 30-90 day programs with full immersion in recovery.</p>
                </div>
                <div class="hidden md:block"></div>

                <div class="hidden md:block"></div>
                <!-- Level 3.7-4 -->
                <div class="md:pl-8">
                    <div class="inline-block px-2 py-0.5 rounded bg-red-100 text-red-800 text-xs font-bold mb-2">Level 3.7-4</div>
                    <h3 class="font-bold text-gray-900"><a href="/treatment/medical-detox" class="hover:text-emerald-700">Medically Managed Intensive</a></h3>
                    <p class="text-gray-600 text-sm mt-1">Hospital-level care for severe withdrawal and acute medical conditions. 24-hour nursing, physician-directed care, medication management. Required for alcohol, benzodiazepine, and severe opioid withdrawal.</p>
                </div>
            </div>
        </div>

        <div class="mt-10 bg-white rounded-xl border border-gray-200 p-5 text-center">
            <p class="text-sm text-gray-600"><strong>Not sure which level you need?</strong> A free clinical assessment can determine the right ASAM level of care for your situation.</p>
            <a href="tel:+18553213614" class="mt-3 inline-flex items-center gap-2 px-6 py-2.5 rounded-lg text-white font-semibold text-sm" style="background:#065f46">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Free Assessment: (855) 321-3614
            </a>
        </div>
    </div>
</section>

<!-- Comparison Table (Desktop) + Cards (Mobile) -->
<section id="comparison" class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Side-by-Side Comparison</h2>

        <!-- Desktop Table -->
        <div class="hidden md:block overflow-x-auto rounded-xl border border-gray-200">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Program</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700">ASAM Level</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700">Duration</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700">Cost</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700">Setting</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700">Success</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4"><a href="/treatment/medical-detox" class="text-emerald-700 font-medium hover:underline">Medical Detox</a></td>
                        <td class="py-3 px-4 text-center"><span class="px-2 py-0.5 bg-red-50 text-red-700 rounded text-xs font-bold">3.7-4</span></td>
                        <td class="py-3 px-4 text-center text-gray-600">3-10 days</td>
                        <td class="py-3 px-4 text-center text-gray-600">$3K-$10K</td>
                        <td class="py-3 px-4 text-center text-gray-600">Hospital/Clinic</td>
                        <td class="py-3 px-4 text-center font-medium text-emerald-700">70-80%</td>
                    </tr>
                    <tr class="border-t border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4"><a href="/treatment/inpatient-rehab" class="text-emerald-700 font-medium hover:underline">Inpatient Rehab</a></td>
                        <td class="py-3 px-4 text-center"><span class="px-2 py-0.5 bg-orange-50 text-orange-700 rounded text-xs font-bold">3.1-3.5</span></td>
                        <td class="py-3 px-4 text-center text-gray-600">30-90 days</td>
                        <td class="py-3 px-4 text-center text-gray-600">$15K-$30K</td>
                        <td class="py-3 px-4 text-center text-gray-600">Residential</td>
                        <td class="py-3 px-4 text-center font-medium text-emerald-700">40-60%</td>
                    </tr>
                    <tr class="border-t border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4"><a href="/treatment/dual-diagnosis" class="text-emerald-700 font-medium hover:underline">Dual Diagnosis</a></td>
                        <td class="py-3 px-4 text-center"><span class="px-2 py-0.5 bg-orange-50 text-orange-700 rounded text-xs font-bold">3.1-3.5</span></td>
                        <td class="py-3 px-4 text-center text-gray-600">60-90 days</td>
                        <td class="py-3 px-4 text-center text-gray-600">$20K-$50K</td>
                        <td class="py-3 px-4 text-center text-gray-600">Residential</td>
                        <td class="py-3 px-4 text-center font-medium text-emerald-700">45-65%</td>
                    </tr>
                    <tr class="border-t border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4"><a href="/treatment/intensive-outpatient" class="text-emerald-700 font-medium hover:underline">IOP</a></td>
                        <td class="py-3 px-4 text-center"><span class="px-2 py-0.5 bg-emerald-50 text-emerald-700 rounded text-xs font-bold">2.1</span></td>
                        <td class="py-3 px-4 text-center text-gray-600">2-4 months</td>
                        <td class="py-3 px-4 text-center text-gray-600">$5K-$12K</td>
                        <td class="py-3 px-4 text-center text-gray-600">Clinic/Home</td>
                        <td class="py-3 px-4 text-center font-medium text-emerald-700">35-55%</td>
                    </tr>
                    <tr class="border-t border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4"><a href="/treatment/outpatient-programs" class="text-emerald-700 font-medium hover:underline">Outpatient</a></td>
                        <td class="py-3 px-4 text-center"><span class="px-2 py-0.5 bg-emerald-50 text-emerald-700 rounded text-xs font-bold">1</span></td>
                        <td class="py-3 px-4 text-center text-gray-600">3-6 months</td>
                        <td class="py-3 px-4 text-center text-gray-600">$5K-$10K</td>
                        <td class="py-3 px-4 text-center text-gray-600">Clinic/Home</td>
                        <td class="py-3 px-4 text-center font-medium text-emerald-700">30-50%</td>
                    </tr>
                    <tr class="border-t border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4"><a href="/treatment/medication-assisted-treatment" class="text-emerald-700 font-medium hover:underline">MAT</a></td>
                        <td class="py-3 px-4 text-center"><span class="px-2 py-0.5 bg-blue-50 text-blue-700 rounded text-xs font-bold">OTP</span></td>
                        <td class="py-3 px-4 text-center text-gray-600">12+ months</td>
                        <td class="py-3 px-4 text-center text-gray-600">$5K-$15K/yr</td>
                        <td class="py-3 px-4 text-center text-gray-600">Clinic/Home</td>
                        <td class="py-3 px-4 text-center font-medium text-emerald-700">60-75%</td>
                    </tr>
                    <tr class="border-t border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4"><a href="/treatment/sober-living" class="text-emerald-700 font-medium hover:underline">Sober Living</a></td>
                        <td class="py-3 px-4 text-center"><span class="px-2 py-0.5 bg-gray-100 text-gray-700 rounded text-xs font-bold">N/A</span></td>
                        <td class="py-3 px-4 text-center text-gray-600">3-12 months</td>
                        <td class="py-3 px-4 text-center text-gray-600">$500-$3K/mo</td>
                        <td class="py-3 px-4 text-center text-gray-600">Community</td>
                        <td class="py-3 px-4 text-center text-gray-500">Supportive</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile Cards -->
        <div class="md:hidden space-y-4">
            @foreach($treatments as $slug => $t)
            <a href="/treatment/{{ $slug }}" class="block bg-white rounded-xl border border-gray-200 p-4 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-gray-900">{{ $t['title'] }}</h3>
                    <span class="text-emerald-700 font-bold text-sm">{{ $t['success_rate'] }}</span>
                </div>
                <div class="grid grid-cols-3 gap-2 text-xs text-gray-500">
                    <div><span class="block text-gray-400">Duration</span>{{ $t['duration'] }}</div>
                    <div><span class="block text-gray-400">Cost</span>{{ $t['cost'] }}</div>
                    <div><span class="block text-gray-400">Insurance</span>{{ Str::limit($t['insurance'], 20) }}</div>
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
            <h2 class="text-2xl font-bold mb-3">Overwhelmed by Options?</h2>
            <p class="text-white mb-5 text-lg" style="opacity:0.9">A treatment specialist can assess your situation and recommend the right program in under 5 minutes. Free, confidential, available 24/7.</p>
            <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-3 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614
            </a>
        </div>
    </div>
</section>

<!-- How to Choose the Right Program -->
<section id="choosing" class="py-14 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">How to Choose the Right Program</h2>
        <p class="text-gray-600 text-center max-w-3xl mx-auto mb-10">Five key factors determine which treatment type is most appropriate for your situation. A clinical assessment evaluates all of these.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Addiction Severity</h3>
                <p class="text-gray-600 text-sm">Mild use disorders may respond well to outpatient care. Severe physical dependence (especially alcohol, benzodiazepines, opioids) typically requires medical detox followed by residential treatment.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Mental Health</h3>
                <p class="text-gray-600 text-sm">Co-occurring conditions like depression, anxiety, PTSD, or bipolar disorder require <a href="/treatment/dual-diagnosis" class="text-emerald-600 hover:underline">dual diagnosis treatment</a> that addresses both issues simultaneously for best outcomes.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Treatment History</h3>
                <p class="text-gray-600 text-sm">Previous attempts that didn't work signal that a higher level of care may be needed. Someone who relapsed after outpatient may benefit from inpatient or a longer treatment duration (90+ days).</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <div class="w-10 h-10 rounded-lg bg-yellow-100 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Home Environment</h3>
                <p class="text-gray-600 text-sm">If your living situation involves active substance use, enabling relationships, or high-stress triggers, residential treatment or <a href="/treatment/sober-living" class="text-emerald-600 hover:underline">sober living</a> removes you from those environments during early recovery.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Insurance & Finances</h3>
                <p class="text-gray-600 text-sm">Most plans cover all levels of care under <a href="/insurance" class="text-emerald-600 hover:underline">federal parity laws</a>. For those without insurance: state-funded programs, sliding-scale facilities, and nonprofit organizations offer affordable options.</p>
            </div>
            <div class="bg-emerald-50 rounded-xl p-6 border border-emerald-200">
                <div class="w-10 h-10 rounded-lg bg-emerald-200 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <h3 class="font-bold text-emerald-800 mb-2">The Continuum Approach</h3>
                <p class="text-emerald-700 text-sm">Most successful recoveries involve <strong>multiple levels of care</strong>: Detox → Inpatient → IOP → Outpatient → Sober Living. Each step down maintains support while building independence. 90+ days total produces the best outcomes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Treatment Costs & Financial Options -->
<section id="cost" class="py-14 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">Treatment Costs & Financial Options</h2>
        <p class="text-gray-600 text-center max-w-3xl mx-auto mb-10">Cost should never be a barrier to treatment. Multiple financial pathways make recovery accessible regardless of budget.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="font-bold text-gray-900 mb-4">Average Costs by Program Type</h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center py-2 border-b border-gray-200">
                        <span class="text-gray-700">Medical Detox</span>
                        <span class="font-semibold text-gray-900">$3,000 - $10,000</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-gray-200">
                        <span class="text-gray-700">Inpatient (30 days)</span>
                        <span class="font-semibold text-gray-900">$15,000 - $30,000</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-gray-200">
                        <span class="text-gray-700">Dual Diagnosis</span>
                        <span class="font-semibold text-gray-900">$20,000 - $50,000</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-gray-200">
                        <span class="text-gray-700">IOP (full program)</span>
                        <span class="font-semibold text-gray-900">$5,000 - $12,000</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-gray-200">
                        <span class="text-gray-700">Outpatient</span>
                        <span class="font-semibold text-gray-900">$5,000 - $10,000</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-gray-200">
                        <span class="text-gray-700">MAT (annual)</span>
                        <span class="font-semibold text-gray-900">$5,000 - $15,000</span>
                    </div>
                    <div class="flex justify-between items-center py-2">
                        <span class="text-gray-700">Sober Living (monthly)</span>
                        <span class="font-semibold text-gray-900">$500 - $3,000</span>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="font-bold text-gray-900 mb-4">Ways to Pay for Treatment</h3>
                <div class="space-y-4">
                    <div class="flex gap-3">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Insurance Coverage</p>
                            <p class="text-gray-600 text-sm">Most plans cover treatment under the Mental Health Parity Act. <a href="/insurance" class="text-emerald-600 hover:underline">Verify your benefits &rarr;</a></p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">State-Funded Programs</p>
                            <p class="text-gray-600 text-sm">Every state offers publicly funded treatment through SAMHSA block grants. Often free or very low cost.</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Sliding Scale Fees</p>
                            <p class="text-gray-600 text-sm">Many facilities adjust costs based on income. Nonprofit centers often provide reduced rates.</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Payment Plans & Scholarships</p>
                            <p class="text-gray-600 text-sm">Many private facilities offer monthly payment plans, financing, or treatment scholarships.</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Medicaid & Medicare</p>
                            <p class="text-gray-600 text-sm">Both programs cover substance abuse treatment. <a href="/insurance/medicaid" class="text-emerald-600 hover:underline">Medicaid</a> and <a href="/insurance/medicare" class="text-emerald-600 hover:underline">Medicare</a> information.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What to Expect Timeline -->
<section id="what-to-expect" class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">What to Expect in Treatment</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-10">The treatment journey follows a proven progression from crisis stabilization to independent recovery.</p>

        <div class="space-y-0">
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-red-500 text-white flex items-center justify-center font-bold text-sm flex-shrink-0">1</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900">Assessment & Intake (Day 1)</h3>
                    <p class="text-gray-600 text-sm mt-1">Clinical evaluation using ASAM criteria to determine appropriate level of care. Includes medical history, substance use assessment, mental health screening, and insurance verification. This creates your individualized treatment plan.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-orange-500 text-white flex items-center justify-center font-bold text-sm flex-shrink-0">2</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900"><a href="/treatment/medical-detox" class="hover:text-emerald-700">Detoxification (Days 1-10)</a></h3>
                    <p class="text-gray-600 text-sm mt-1">Medically supervised withdrawal management with FDA-approved medications for comfort and safety. 24/7 monitoring of vital signs. Critical for alcohol, opioids, and benzodiazepines where withdrawal can be life-threatening. <em>Detox alone is not treatment — it is preparation for treatment.</em></p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-yellow-500 text-white flex items-center justify-center font-bold text-sm flex-shrink-0">3</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900"><a href="/treatment/inpatient-rehab" class="hover:text-emerald-700">Primary Treatment (Weeks 2-12)</a></h3>
                    <p class="text-gray-600 text-sm mt-1">The core therapeutic phase. Daily schedule includes individual therapy (CBT, DBT, EMDR), group counseling, psychoeducation, family sessions, and wellness activities. Residential programs provide 24/7 structure; outpatient programs offer similar therapies while living at home.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-sm flex-shrink-0">4</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900"><a href="/treatment/intensive-outpatient" class="hover:text-emerald-700">Step-Down Care (Months 3-6)</a></h3>
                    <p class="text-gray-600 text-sm mt-1">Transition to IOP or outpatient programming. 9-20 hours/week stepping down to 2-5 sessions. Focus shifts to relapse prevention skills, real-world coping strategies, and rebuilding daily routines. Many individuals move to sober living during this phase.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold text-sm flex-shrink-0">5</div>
                </div>
                <div class="pb-2">
                    <h3 class="font-bold text-gray-900">Ongoing Recovery (Lifetime)</h3>
                    <p class="text-gray-600 text-sm mt-1">Alumni programs, recovery meetings (12-step, SMART Recovery), ongoing therapy, peer support, and <a href="/treatment/medication-assisted-treatment" class="text-emerald-600 hover:underline">MAT</a> when appropriate. A strong aftercare plan reduces relapse risk by up to 50%. Recovery is a lifelong journey, not a destination.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Insurance & Payment -->
<section id="insurance" class="py-14 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div>
                <h2 class="text-xl font-bold text-gray-900 mb-4">Insurance Coverage for Treatment</h2>
                <p class="text-gray-600 text-sm mb-2">Under federal parity laws, insurance must cover substance abuse treatment at the same level as physical health conditions. Most plans cover all levels of care from detox through outpatient.</p>
                <p class="text-gray-600 text-sm mb-4"><a href="/insurance" class="text-emerald-600 font-semibold hover:underline">Verify your insurance coverage &rarr;</a></p>
                <div class="flex flex-wrap gap-2">
                    @foreach(['aetna', 'bcbs', 'cigna', 'uhc', 'anthem', 'humana', 'kaiser', 'medicaid', 'medicare', 'tricare'] as $ins)
                    <a href="{{ route('insurance.show', $ins) }}" class="px-3 py-1.5 rounded-lg bg-white border border-gray-200 text-sm text-gray-700 hover:border-emerald-300 hover:text-emerald-700 transition-colors">{{ ucfirst($ins) }}</a>
                    @endforeach
                </div>
            </div>
            <div>
                <h2 class="text-xl font-bold text-gray-900 mb-4">Find Treatment by State</h2>
                <p class="text-gray-600 text-sm mb-4">Browse SAMHSA-certified treatment centers in your state. Our directory includes 17,000+ verified facilities across all 50 states.</p>
                <div class="flex flex-wrap gap-2">
                    @foreach(['CA', 'TX', 'FL', 'NY', 'PA', 'IL', 'OH', 'GA', 'NC', 'MI', 'NJ', 'AZ'] as $st)
                    <a href="{{ route('states.show', strtolower($st)) }}" class="px-3 py-1.5 rounded-lg bg-white border border-gray-200 text-sm text-gray-700 hover:border-emerald-300 hover:text-emerald-700 transition-colors">{{ $st }}</a>
                    @endforeach
                    <a href="{{ route('states.index') }}" class="px-3 py-1.5 rounded-lg bg-emerald-100 text-sm text-emerald-700 font-medium hover:bg-emerald-200 transition-colors">All 50 States &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cross-links to Related Content -->
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Related Resources</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="/resources/how-to-choose-rehab" class="group bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 transition-colors">How to Choose a Rehab Center</h3>
                <p class="text-gray-600 text-sm mt-2">Step-by-step guide to evaluating facilities, asking the right questions, and finding quality care.</p>
            </a>
            <a href="/resources/what-to-expect-in-rehab" class="group bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 transition-colors">What to Expect in Rehab</h3>
                <p class="text-gray-600 text-sm mt-2">Detailed overview of a typical day in treatment, from daily schedules to therapy types.</p>
            </a>
            <a href="/resources/paying-for-treatment" class="group bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 transition-colors">Paying for Treatment</h3>
                <p class="text-gray-600 text-sm mt-2">Complete guide to insurance, state-funded programs, scholarships, and other financial assistance.</p>
            </a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-14 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
        <div class="space-y-3">
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What are the main types of addiction treatment?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600">The 7 main types are: <a href="/treatment/inpatient-rehab" class="text-emerald-600 hover:underline">inpatient/residential</a> (24/7 supervised care), <a href="/treatment/outpatient-programs" class="text-emerald-600 hover:underline">outpatient</a> (flexible scheduling), <a href="/treatment/medical-detox" class="text-emerald-600 hover:underline">medical detox</a> (supervised withdrawal), <a href="/treatment/intensive-outpatient" class="text-emerald-600 hover:underline">intensive outpatient (IOP)</a>, <a href="/treatment/medication-assisted-treatment" class="text-emerald-600 hover:underline">medication-assisted treatment (MAT)</a>, <a href="/treatment/dual-diagnosis" class="text-emerald-600 hover:underline">dual diagnosis</a>, and <a href="/treatment/sober-living" class="text-emerald-600 hover:underline">sober living homes</a>.</div>
            </details>
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How do I choose the right treatment program?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600">Consider 5 key factors: (1) addiction severity and substance type, (2) co-occurring mental health conditions, (3) previous treatment history, (4) home environment stability, and (5) <a href="/insurance" class="text-emerald-600 hover:underline">insurance coverage</a>. ASAM criteria provide a standardized framework clinicians use to match patients to the appropriate level of care. Call <a href="tel:+18553213614" class="text-emerald-600 font-semibold">(855) 321-3614</a> for a free assessment.</div>
            </details>
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What is the difference between inpatient and outpatient rehab?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600"><a href="/treatment/inpatient-rehab" class="text-emerald-600 hover:underline">Inpatient rehab</a> requires living at the facility 24/7 for 30-90 days ($15,000-$30,000) with constant medical supervision. <a href="/treatment/outpatient-programs" class="text-emerald-600 hover:underline">Outpatient</a> allows living at home while attending sessions 2-5 times per week ($5,000-$10,000). Inpatient is better for severe addiction or unstable home environments; outpatient suits mild-moderate cases with strong support systems.</div>
            </details>
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Does insurance cover addiction treatment?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600">Yes. Under the <a href="/insurance" class="text-emerald-600 hover:underline">Mental Health Parity and Addiction Equity Act</a>, most insurance plans must cover substance use disorder treatment at the same level as physical health conditions. This includes detox, inpatient, outpatient, IOP, and MAT. Verify your specific coverage with our <a href="/insurance" class="text-emerald-600 hover:underline">insurance guide</a>.</div>
            </details>
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Can I work while in addiction treatment?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600">Yes, with <a href="/treatment/outpatient-programs" class="text-emerald-600 hover:underline">outpatient</a> and <a href="/treatment/intensive-outpatient" class="text-emerald-600 hover:underline">IOP programs</a>. Both offer evening and weekend sessions designed for working adults. The Family and Medical Leave Act (FMLA) also protects your job for up to 12 weeks if you need inpatient treatment. Many employers' EAP programs also provide confidential referrals.</div>
            </details>
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How long does addiction treatment take?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600">Duration varies: detox 3-10 days, inpatient 30-90 days, IOP 2-4 months, outpatient 3-6 months, sober living 3-12 months. NIDA research shows that <strong>90+ days of combined treatment</strong> significantly improves long-term outcomes. Most successful recoveries involve multiple levels of care in sequence.</div>
            </details>
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What is MAT and is it effective?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600"><a href="/treatment/medication-assisted-treatment" class="text-emerald-600 hover:underline">Medication-Assisted Treatment</a> combines FDA-approved medications (buprenorphine, methadone, naltrexone) with counseling. It reduces opioid overdose deaths by 50%, improves treatment retention to 60-75%, and is the gold standard for opioid use disorder per SAMHSA and WHO guidelines. It is <em>not</em> "replacing one drug with another."</div>
            </details>
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What happens after treatment?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600">Aftercare typically includes stepping down to a lower level of care, <a href="/treatment/sober-living" class="text-emerald-600 hover:underline">sober living housing</a>, ongoing therapy, recovery meetings (12-step, SMART Recovery), alumni programs, and regular check-ins. A strong aftercare plan reduces relapse risk by up to 50%. <a href="/resources/relapse-prevention" class="text-emerald-600 hover:underline">Read our relapse prevention guide &rarr;</a></div>
            </details>
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How much does treatment cost without insurance?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600">Costs vary widely: detox $3,000-$10,000, inpatient $15,000-$30,000+ for 30 days, IOP $5,000-$12,000, outpatient $5,000-$10,000, sober living $500-$3,000/month. Many facilities offer sliding-scale fees, payment plans, and scholarships. State-funded programs through SAMHSA provide free or low-cost treatment. <a href="/resources/paying-for-treatment" class="text-emerald-600 hover:underline">See all financial options &rarr;</a></div>
            </details>
            <details class="group bg-white rounded-xl border border-gray-100">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What is the success rate of addiction treatment?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600">Success rates range from 40-60% for sustained recovery — comparable to other chronic conditions like diabetes (40-60%) and hypertension (50-70%). MAT achieves 60-75% retention rates. Key factors that improve outcomes: treatment duration 90+ days, aftercare participation, family involvement, addressing co-occurring mental health conditions, and choosing the appropriate level of care.</div>
            </details>
        </div>
    </div>
</section>

<!-- CTA -->
<section id="find-help" class="py-14 text-white" style="background:#065f46">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-3">Ready to Start Treatment?</h2>
        <p class="mb-6 text-lg" style="color:rgba(255,255,255,0.9)">Our treatment specialists can match you with the right program based on your specific needs, insurance, and goals. Free assessment, confidential, available 24/7.</p>
        <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Call (855) 321-3614
        </a>
        <p class="mt-4 text-sm" style="color:rgba(255,255,255,0.7)">Or <a href="/contact" class="underline" style="color:rgba(255,255,255,0.9)">send us a message</a> &bull; <a href="/facilities" class="underline" style="color:rgba(255,255,255,0.9)">Browse centers</a></p>
    </div>
</section>

<!-- Sources -->
<section class="py-8 bg-white border-t border-gray-100">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <details class="text-xs text-gray-500">
            <summary class="cursor-pointer font-semibold hover:text-gray-700">Sources & References</summary>
            <ol class="mt-3 space-y-1 list-decimal list-inside">
                <li>SAMHSA. (2023). <em>National Survey on Drug Use and Health (NSDUH).</em> <a href="https://www.samhsa.gov/data/nsduh" class="text-emerald-600 hover:underline" target="_blank" rel="noopener">samhsa.gov/data/nsduh</a></li>
                <li>NIDA. (2018). <em>Principles of Drug Addiction Treatment: A Research-Based Guide.</em> <a href="https://nida.nih.gov/publications/principles-drug-addiction-treatment" class="text-emerald-600 hover:underline" target="_blank" rel="noopener">nida.nih.gov</a></li>
                <li>SAMHSA. (2024). <em>National Directory of Drug and Alcohol Abuse Treatment Facilities.</em> <a href="https://findtreatment.gov" class="text-emerald-600 hover:underline" target="_blank" rel="noopener">findtreatment.gov</a></li>
                <li>ASAM. (2013). <em>The ASAM Criteria: Treatment Criteria for Addictive, Substance-Related, and Co-Occurring Conditions.</em></li>
                <li>CMS. (2008). <em>Mental Health Parity and Addiction Equity Act.</em></li>
            </ol>
        </details>
    </div>
</section>

<!-- Last Updated + Reviewed By -->
<div class="max-w-7xl mx-auto px-4 py-6 text-center">
    <p class="text-xs text-gray-500">Last updated: {{ date('F j, Y') }} &bull; Reviewed by DaycareHub Editorial Team &bull; Data sourced from SAMHSA &amp; NIDA</p>
</div>

<script>
// Scroll progress bar
window.addEventListener('scroll', function() {
    var h = document.documentElement;
    var pct = (h.scrollTop / (h.scrollHeight - h.clientHeight)) * 100;
    document.getElementById('scroll-progress').style.width = pct + '%';
});
// Auto-open TOC on desktop
if (window.innerWidth >= 768) {
    var toc = document.getElementById('toc-details');
    if (toc) toc.open = true;
}
</script>
@endsection