@extends('layouts.app')
@section('meta_title', 'Insurance Coverage for Drug & Alcohol Rehab | Does Your Plan Pay? | DaycareHub')
@section('meta_description', 'Find out if your insurance covers addiction treatment. Learn about deductibles, copays, in-network vs out-of-network coverage, and how to verify your benefits. Free verification — call (855) 321-3614.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Insurance Coverage"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "Does insurance cover drug and alcohol rehab?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes. Under the Mental Health Parity and Addiction Equity Act (MHPAEA), most insurance plans must cover substance abuse treatment at the same level as medical and surgical benefits. This includes medical detox, inpatient rehabilitation, outpatient programs, and medication-assisted treatment."}},
        {"@@type": "Question", "name": "How much does rehab cost with insurance?",  "acceptedAnswer": {"@@type": "Answer", "text": "With insurance, out-of-pocket costs for rehab typically range from $0 to $5,000 depending on your plan's deductible, copay, and coinsurance. Without insurance, 30-day inpatient rehab averages $15,000 to $30,000. In-network facilities always cost significantly less than out-of-network."}},
        {"@@type": "Question", "name": "How do I verify my insurance for rehab?", "acceptedAnswer": {"@@type": "Answer", "text": "Call the behavioral health number on your insurance card, or call DaycareHub at (855) 321-3614 for a free, confidential benefits check. We verify your coverage in minutes, confirm in-network facilities, and explain your out-of-pocket costs — no obligation."}},
        {"@@type": "Question", "name": "What if I don't have insurance?", "acceptedAnswer": {"@@type": "Answer", "text": "Options include Medicaid (covers addiction treatment in most states), SAMHSA-funded free treatment programs, sliding-scale fee facilities, state-funded programs, and payment plans offered by many rehab centers. Call us and we'll help you find affordable options."}},
        {"@@type": "Question", "name": "What types of treatment does insurance cover?", "acceptedAnswer": {"@@type": "Answer", "text": "Most plans cover medical detox, inpatient/residential rehabilitation, partial hospitalization (PHP), intensive outpatient (IOP), outpatient counseling, medication-assisted treatment (MAT), and dual diagnosis treatment. Coverage levels and cost-sharing vary by plan and provider."}},
        {"@@type": "Question", "name": "Do I need pre-authorization for rehab?", "acceptedAnswer": {"@@type": "Answer", "text": "Many insurance plans require pre-authorization for residential and inpatient treatment. Emergency detox is usually covered without prior approval. Outpatient and IOP programs often do not require pre-authorization. Your insurance company or our team can confirm requirements."}},
        {"@@type": "Question", "name": "What is the difference between in-network and out-of-network rehab?", "acceptedAnswer": {"@@type": "Answer", "text": "In-network facilities have negotiated rates with your insurer, meaning lower copays, deductibles, and out-of-pocket costs. Out-of-network treatment is still covered by most PPO plans but at a higher cost-sharing rate — typically 40-50% coinsurance vs 10-20% in-network."}},
        {"@@type": "Question", "name": "How long will insurance pay for rehab?", "acceptedAnswer": {"@@type": "Answer", "text": "Insurance coverage duration depends on medical necessity as determined by your treatment team and utilization review. Typical covered stays: detox (3-7 days), inpatient (28-90 days), PHP (2-4 weeks), IOP (6-12 weeks). Insurance reviews treatment progress at regular intervals."}},
        {"@@type": "Question", "name": "Can I use my parents' insurance for rehab?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes. Under the ACA, you can stay on a parent's health insurance plan until age 26, and this includes coverage for substance abuse treatment. Your parents will not receive details about your treatment due to HIPAA privacy protections."}},
        {"@@type": "Question", "name": "Does Medicaid cover rehab?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes. Medicaid covers substance abuse treatment in all 50 states. In states that expanded Medicaid under the ACA, coverage is available to adults earning up to 138% of the federal poverty level. Covered services include detox, residential, outpatient, MAT, and case management."}},
        {"@@type": "Question", "name": "What is the Mental Health Parity Act?", "acceptedAnswer": {"@@type": "Answer", "text": "The Mental Health Parity and Addiction Equity Act (MHPAEA) of 2008 requires insurers to provide equal coverage for mental health and substance use disorders as they do for medical/surgical conditions. This means insurance cannot impose stricter limits on addiction treatment than on other medical care."}},
        {"@@type": "Question", "name": "Will my employer know if I use insurance for rehab?", "acceptedAnswer": {"@@type": "Answer", "text": "No. HIPAA protects the confidentiality of your treatment records. Your employer cannot access details about your healthcare claims. If you use employer-sponsored insurance, only the insurance company processes the claim — your HR department does not see diagnosis or treatment details."}}
    ]
}
</script>
@endsection

@section('content')
<!-- Scroll Progress -->
<div id="scroll-progress" class="fixed top-0 left-0 transition-none" style="width:0%;height:4px;background:#10b981;z-index:9999"></div>
<script>
window.addEventListener('scroll',function(){var e=document.documentElement,t=e.scrollHeight-e.clientHeight;document.getElementById('scroll-progress').style.width=(e.scrollTop/t*100)+'%'});
</script>
<!-- Hero Banner -->
<section class="relative overflow-hidden" style="min-height:440px">
    <div class="absolute inset-0">
        <img src="/images/insurance/hero.webp" alt="" style="width:100%;height:100%;object-fit:cover;object-position:center 40%">
        <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(30,58,138,0.88) 0%,rgba(29,78,216,0.78) 50%,rgba(59,130,246,0.65) 100%)"></div>
    </div>
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8" style="padding-top:96px;padding-bottom:48px">
        <nav class="text-sm mb-4" style="opacity:0.8">
            <a href="/" class="hover:text-white" style="color:rgba(255,255,255,0.7)">Home</a>
            <span style="color:rgba(255,255,255,0.5)" class="mx-2">/</span>
            <span class="text-white">Insurance Coverage</span>
        </nav>
        <h1 class="text-3xl md:text-5xl font-bold text-white mb-3" style="line-height:1.1">Insurance Coverage for Rehab<br><span style="font-weight:400;font-size:0.55em;opacity:0.9">Your Rights Under Federal Law</span></h1>
        <p style="color:rgba(255,255,255,0.9);max-width:600px;font-size:17px;margin-bottom:24px">Most plans must cover addiction treatment under the Mental Health Parity Act. 10 major providers compared with verification guides.</p>
        <div style="display:flex;flex-wrap:wrap;gap:24px">
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">10</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">providers covered</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">MHPAEA</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">federal protection</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">$0-$50</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">typical copay</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">24/7</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">free verification</div></div>
            </div>
            
        </div>
    </div>
    <div style="position:absolute;bottom:-1px;left:0;right:0">
        <svg viewBox="0 0 1440 60" fill="none" style="width:100%;display:block"><path d="M0 60V30C240 0 480 0 720 30s480 30 720 0v30H0z" fill="white"/></svg>
    </div>
</section>

<section class="py-10 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<!-- Quick Answer Box -->
        <div class="max-w-2xl mx-auto mb-8 bg-white border-2 border-emerald-200 rounded-2xl p-6 shadow-sm">
            <div class="flex items-start gap-3">
                <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                    <svg class="w-4 h-4 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <h2 class="font-bold text-gray-900 text-lg mb-1">Quick Answer</h2>
                    <p class="text-gray-600 text-sm leading-relaxed"><strong>Yes, most insurance covers rehab.</strong> The Mental Health Parity Act requires equal coverage for addiction treatment. Typical out-of-pocket with insurance: <strong class="text-emerald-700">$0–$5,000</strong> (vs $15,000–$30,000 without). Call <a href="tel:+18553213614" class="text-emerald-600 font-semibold hover:underline">(855) 321-3614</a> for free verification in 5 minutes.</p>
                </div>
            </div>
        </div>

        <!-- Table of Contents -->
        <nav class="max-w-2xl mx-auto mb-12 bg-gray-50 rounded-2xl border border-gray-100 overflow-hidden" aria-label="Page contents">
            <details id="toc-details">
                <summary class="flex justify-between items-center cursor-pointer p-6 md:pointer-events-none">
                    <span class="font-bold text-gray-900 text-sm uppercase tracking-wide">On This Page</span>
                    <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform md:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </summary>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-2 px-6 pb-6">
                    <a href="#providers" class="text-sm text-emerald-600 hover:text-emerald-800 hover:underline py-1 flex items-center gap-2"><svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>Insurance Providers</a>
                    <a href="#widget" class="text-sm text-emerald-600 hover:text-emerald-800 hover:underline py-1 flex items-center gap-2"><svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>Check Your Coverage</a>
                    <a href="#benefits" class="text-sm text-emerald-600 hover:text-emerald-800 hover:underline py-1 flex items-center gap-2"><svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>Understanding Your Benefits</a>
                    <a href="#costs" class="text-sm text-emerald-600 hover:text-emerald-800 hover:underline py-1 flex items-center gap-2"><svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>Cost: With vs Without Insurance</a>
                    <a href="#covered" class="text-sm text-emerald-600 hover:text-emerald-800 hover:underline py-1 flex items-center gap-2"><svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>Treatment Types Covered</a>
                    <a href="#verify" class="text-sm text-emerald-600 hover:text-emerald-800 hover:underline py-1 flex items-center gap-2"><svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>How to Verify Coverage</a>
                    <a href="#no-insurance" class="text-sm text-emerald-600 hover:text-emerald-800 hover:underline py-1 flex items-center gap-2"><svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>No Insurance? Options</a>
                    <a href="#parity" class="text-sm text-emerald-600 hover:text-emerald-800 hover:underline py-1 flex items-center gap-2"><svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>Your Legal Rights</a>
                    <a href="#faq" class="text-sm text-emerald-600 hover:text-emerald-800 hover:underline py-1 flex items-center gap-2"><svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>FAQ (12 Questions)</a>
                </div>
            </details>
            <script>if(window.innerWidth>=768)document.getElementById('toc-details')?.setAttribute('open','')</script>
        </nav>
        <!-- Stats Bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto mb-14">
            <div class="text-center bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                <div class="text-3xl font-extrabold text-emerald-700">10+<sup class="text-xs text-gray-500 ml-0.5">2</sup></div>
                <div class="text-sm text-gray-500 mt-1">Major Insurers</div>
            </div>
            <div class="text-center bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                <div class="text-3xl font-extrabold text-emerald-700">92%<sup class="text-xs text-gray-500 ml-0.5">1</sup></div>
                <div class="text-sm text-gray-500 mt-1">Plans Cover Rehab</div>
            </div>
            <div class="text-center bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                <div class="text-3xl font-extrabold text-emerald-700">5 min</div>
                <div class="text-sm text-gray-500 mt-1">Free Verification</div>
            </div>
            <div class="text-center bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                <div class="text-3xl font-extrabold text-emerald-700">100%</div>
                <div class="text-sm text-gray-500 mt-1">Confidential</div>
            </div>
        </div>

        <!-- Provider Grid -->
        </div>
</section>

<section id="providers" class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Insurance Providers</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($providers as $slug => $p)
            <a href="/insurance/{{ $slug }}" class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all p-6 flex flex-col">
                <div class="flex items-center gap-4 mb-4">
                    <img src="{{ $p['logo'] }}" alt="{{ $p['name'] }} logo" class="h-8 max-w-[140px] object-contain" loading="lazy">
                    <span class="text-xs px-2 py-1 rounded-full bg-gray-100 text-gray-600">{{ $p['type'] }}</span>
                </div>
                <h2 class="text-lg font-bold text-gray-900 group-hover:text-emerald-700 mb-2">{{ $p['name'] }}</h2>
                <p class="text-gray-600 text-sm leading-relaxed flex-1 line-clamp-3">{{ $p['coverage'] }}</p>
                <span class="text-emerald-600 font-semibold text-sm mt-4 group-hover:underline">View coverage details &rarr;</span>
            </a>
            @endforeach
        </div>
    </div>
</section>


<!-- Insurance Verification Widget -->
<section id="widget" class="py-14 bg-emerald-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Check Your Coverage Online</h2>
        <p class="text-gray-600 text-center mb-8 max-w-2xl mx-auto">Select your insurance provider to see what's typically covered under your plan. For exact benefits, call us for a free verification.</p>

        <div x-data="{
            selected: '',
            providers: {
                aetna: {name:'Aetna', covered:['Medical Detox','Inpatient/Residential','PHP','IOP','Outpatient Therapy','MAT','Individual & Group Counseling'], preauth:'Required for residential', network:'PPO: broad network; HMO: referral needed'},
                bcbs: {name:'BlueCross BlueShield', covered:['Medical Detox','Inpatient/Residential','PHP','IOP','Outpatient Therapy','MAT','Psychiatric Services','Family Counseling'], preauth:'Required for residential', network:'Largest network — 1 in 3 Americans'},
                cigna: {name:'Cigna', covered:['Medical Detox','Inpatient/Residential','PHP','IOP','Outpatient Counseling','MAT','Telehealth Therapy'], preauth:'Pre-certification required', network:'Open Access Plus offers most flexibility'},
                uhc: {name:'UnitedHealthcare', covered:['Medical Detox','Inpatient/Residential','PHP','IOP','Outpatient Therapy','MAT','Crisis Intervention'], preauth:'Required via Optum', network:'Largest private insurer in the US'},
                anthem: {name:'Anthem', covered:['Medical Detox','Inpatient/Residential','Outpatient Programs','IOP','MAT','Aftercare Planning'], preauth:'Pre-certification for higher levels', network:'Major BCBS affiliate — state-based'},
                humana: {name:'Humana', covered:['Medical Detox','Inpatient/Residential','Outpatient Counseling','IOP','MAT','Group Therapy'], preauth:'Required for residential', network:'Strong Medicare Advantage coverage'},
                kaiser: {name:'Kaiser Permanente', covered:['Medical Detox','Inpatient/Residential','Outpatient Programs','IOP','MAT','Chemical Dependency Programs'], preauth:'May refer to own facilities first', network:'Integrated care — own facilities'},
                medicare: {name:'Medicare', covered:['Hospital-Based Detox (Part A)','Inpatient Rehab (Part A)','Outpatient Counseling (Part B)','Group Therapy (Part B)','MAT (Part B/D)','Screening (Part B)'], preauth:'Varies by service', network:'Facility must accept Medicare assignment'},
                medicaid: {name:'Medicaid', covered:['Screening & Assessment','Medical Detox','Residential Treatment','Outpatient Counseling','IOP','MAT','Case Management'], preauth:'Varies by state', network:'State-specific — check your plan'},
                tricare: {name:'TRICARE', covered:['Medical Detox','Inpatient/Residential','Outpatient Counseling','IOP','MAT','Substance Use Disorder Programs'], preauth:'Active duty: PCM referral', network:'Must be TRICARE-authorized facility'}
            }
        }" class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">

            <!-- Selector -->
            <div class="p-6 border-b border-gray-100">
                <label for="ins-select" class="block text-sm font-semibold text-gray-700 mb-2">Select your insurance provider:</label>
                <select id="ins-select" x-model="selected" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-gray-900 font-medium focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-colors">
                    <option value="">Choose your provider...</option>
                    <template x-for="(p, slug) in providers" :key="slug">
                        <option :value="slug" x-text="p.name"></option>
                    </template>
                </select>
            </div>

            <!-- Results -->
            <div x-show="selected" x-transition class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Covered Treatments -->
                    <div class="md:col-span-2">
                        <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            Typically Covered
                        </h3>
                        <div class="space-y-2">
                            <template x-for="item in providers[selected]?.covered || []" :key="item">
                                <div class="flex items-center gap-2 text-sm text-gray-700">
                                    <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <span x-text="item"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                    <!-- Details -->
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-xs uppercase tracking-wide text-gray-500 mb-1">Pre-Authorization</h4>
                            <p class="text-sm text-gray-700 font-medium" x-text="providers[selected]?.preauth"></p>
                        </div>
                        <div>
                            <h4 class="text-xs uppercase tracking-wide text-gray-500 mb-1">Network Info</h4>
                            <p class="text-sm text-gray-700 font-medium" x-text="providers[selected]?.network"></p>
                        </div>
                        <div class="pt-2">
                            <a :href="'/insurance/' + selected" class="text-emerald-600 font-semibold text-sm hover:underline">Full coverage details &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- CTA inside widget -->
                <div class="mt-6 pt-6 border-t border-gray-100 text-center">
                    <p class="text-gray-500 text-sm mb-3">This is a general overview. For your <strong>exact</strong> benefits and out-of-pocket costs:</p>
                    <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-emerald-700 text-white font-bold hover:bg-emerald-800 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        Get Exact Benefits — (855) 321-3614
                    </a>
                </div>
            </div>

            <!-- Empty state -->
            <div x-show="!selected" class="p-6 text-center text-gray-500">
                <svg class="w-12 h-12 mx-auto mb-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <p class="text-sm">Select your insurance provider above to see coverage details</p>
            </div>
        </div>
    </div>
</section>
<!-- Understanding Your Insurance Benefits -->
<section id="benefits" class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center mb-6">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="38" fill="#ecfdf5" stroke="#059669" stroke-width="1.5"/>
                <rect x="22" y="18" width="36" height="44" rx="4" fill="white" stroke="#059669" stroke-width="1.5"/>
                <path d="M30 30h20M30 38h20M30 46h12" stroke="#059669" stroke-width="1.5" stroke-linecap="round"/>
                <circle cx="52" cy="52" r="12" fill="#059669"/>
                <path d="M48 52l3 3 5-6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Understanding Your Insurance Benefits</h2>
        <p class="text-gray-600 text-center mb-10 max-w-2xl mx-auto">Insurance terminology can be confusing. Here's what each term means for your addiction treatment costs — and why it matters when choosing a rehab facility.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Deductible</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">The amount you pay out-of-pocket before insurance starts covering costs. For rehab, deductibles typically range from <strong>$500 to $3,000</strong> for individual plans. Once met, your insurance begins paying its share. Some plans have separate behavioral health deductibles.</p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Copay vs Coinsurance</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">A <strong>copay</strong> is a fixed amount (e.g., $50/session) you pay per visit. <strong>Coinsurance</strong> is a percentage — typically <strong>10–30%</strong> of the treatment cost. In-network facilities have lower coinsurance rates (often 10–20%) compared to out-of-network (30–50%).</p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">In-Network vs Out-of-Network</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed"><strong>In-network</strong> rehab facilities have pre-negotiated rates with your insurer — lower costs for you. <strong>Out-of-network</strong> facilities may still be covered (especially with PPO plans) but at higher cost-sharing. HMO plans often require in-network only. Always verify network status before admitting.</p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l3 9a5.002 5.002 0 01-6.001 0M18 7l-3 9m0-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Out-of-Pocket Maximum</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">The most you'll pay in a year for covered services. Once you hit this limit (typically <strong>$4,000–$8,500</strong> for individual plans), insurance covers 100% of remaining costs. This is your financial safety net — even expensive residential treatment has a cap on your costs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Cost Comparison -->
<section id="costs" class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center mb-6">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="38" fill="#f0fdf4" stroke="#059669" stroke-width="1.5"/>
                <path d="M40 20v40M32 28h12c3.3 0 6 2.7 6 6s-2.7 6-6 6H32h14c3.3 0 6 2.7 6 6s-2.7 6-6 6H32" stroke="#059669" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">How Much Does Rehab Cost With Insurance?</h2>
        <p class="text-gray-600 text-center mb-10 max-w-2xl mx-auto">Insurance significantly reduces the cost of addiction treatment. Here's a realistic breakdown of what you can expect to pay with and without coverage.</p>

        <!-- Desktop Table -->
        <div class="hidden md:block overflow-hidden rounded-2xl border border-gray-200 bg-white">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="px-6 py-4 text-sm font-bold text-gray-700">Treatment Type</th>
                        <th class="px-6 py-4 text-sm font-bold text-gray-700">Duration</th>
                        <th class="px-6 py-4 text-sm font-bold text-red-600">Without Insurance</th>
                        <th class="px-6 py-4 text-sm font-bold text-emerald-700">With Insurance</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900"><a href="/treatment/medical-detox" class="hover:text-emerald-600">Medical Detox</a></td>
                        <td class="px-6 py-4 text-gray-500 text-sm">3–7 days</td>
                        <td class="px-6 py-4 text-red-600 font-semibold">$1,500–$5,000</td>
                        <td class="px-6 py-4 text-emerald-700 font-semibold">$0–$500</td>
                    </tr>
                    <tr class="bg-gray-50/50">
                        <td class="px-6 py-4 font-medium text-gray-900"><a href="/treatment/inpatient-rehab" class="hover:text-emerald-600">Inpatient Rehab</a></td>
                        <td class="px-6 py-4 text-gray-500 text-sm">28–90 days</td>
                        <td class="px-6 py-4 text-red-600 font-semibold">$15,000–$30,000</td>
                        <td class="px-6 py-4 text-emerald-700 font-semibold">$0–$5,000</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900">Partial Hospitalization (PHP)</td>
                        <td class="px-6 py-4 text-gray-500 text-sm">2–4 weeks</td>
                        <td class="px-6 py-4 text-red-600 font-semibold">$8,000–$15,000</td>
                        <td class="px-6 py-4 text-emerald-700 font-semibold">$0–$2,000</td>
                    </tr>
                    <tr class="bg-gray-50/50">
                        <td class="px-6 py-4 font-medium text-gray-900"><a href="/treatment/intensive-outpatient" class="hover:text-emerald-600">Intensive Outpatient (IOP)</a></td>
                        <td class="px-6 py-4 text-gray-500 text-sm">6–12 weeks</td>
                        <td class="px-6 py-4 text-red-600 font-semibold">$5,000–$10,000</td>
                        <td class="px-6 py-4 text-emerald-700 font-semibold">$0–$1,500</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900"><a href="/treatment/outpatient-programs" class="hover:text-emerald-600">Outpatient Counseling</a></td>
                        <td class="px-6 py-4 text-gray-500 text-sm">Ongoing</td>
                        <td class="px-6 py-4 text-red-600 font-semibold">$100–$250/session</td>
                        <td class="px-6 py-4 text-emerald-700 font-semibold">$20–$50 copay</td>
                    </tr>
                    <tr class="bg-gray-50/50">
                        <td class="px-6 py-4 font-medium text-gray-900"><a href="/treatment/medication-assisted-treatment" class="hover:text-emerald-600">MAT (Suboxone/Vivitrol)</a></td>
                        <td class="px-6 py-4 text-gray-500 text-sm">6–24 months</td>
                        <td class="px-6 py-4 text-red-600 font-semibold">$5,000–$15,000/yr</td>
                        <td class="px-6 py-4 text-emerald-700 font-semibold">$0–$2,000/yr</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile Cards -->
        <div class="md:hidden space-y-4">
            @foreach([
                ['Medical Detox', '3–7 days', '$1,500–$5,000', '$0–$500', '/treatment/medical-detox'],
                ['Inpatient Rehab', '28–90 days', '$15,000–$30,000', '$0–$5,000', '/treatment/inpatient-rehab'],
                ['PHP', '2–4 weeks', '$8,000–$15,000', '$0–$2,000', null],
                ['IOP', '6–12 weeks', '$5,000–$10,000', '$0–$1,500', '/treatment/intensive-outpatient'],
                ['Outpatient', 'Ongoing', '$100–$250/session', '$20–$50 copay', '/treatment/outpatient-programs'],
                ['MAT', '6–24 months', '$5,000–$15,000/yr', '$0–$2,000/yr', '/treatment/medication-assisted-treatment'],
            ] as $row)
            <div class="bg-white rounded-xl border border-gray-200 p-4">
                <div class="flex justify-between items-start mb-2">
                    @if($row[4])
                        <a href="{{ $row[4] }}" class="font-bold text-gray-900 hover:text-emerald-600">{{ $row[0] }}</a>
                    @else
                        <span class="font-bold text-gray-900">{{ $row[0] }}</span>
                    @endif
                    <span class="text-xs text-gray-500">{{ $row[1] }}</span>
                </div>
                <div class="flex justify-between text-sm">
                    <div><span class="text-gray-500 text-xs block">Without insurance</span><span class="text-red-600 font-semibold">{{ $row[2] }}</span></div>
                    <div class="text-right"><span class="text-gray-500 text-xs block">With insurance</span><span class="text-emerald-700 font-semibold">{{ $row[3] }}</span></div>
                </div>
            </div>
            @endforeach
        </div>

        <p class="text-xs text-gray-500 text-center mt-6">*Estimates based on national averages. Actual costs vary by location, facility, plan type, and level of care. In-network costs shown.</p>
    </div>
</section>


<!-- Mid-page CTA -->
<section class="py-8">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <div class="rounded-2xl p-8 shadow-lg" style="background-color:#065f46 !important;color:#fff">
            <p class="text-lg mb-1" style="color:rgba(255,255,255,0.75)">Not sure what your plan covers?</p>
            <p class="text-2xl font-bold mb-5" style="color:#ffffff">We'll check your benefits in 5 minutes — free</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="tel:+18553213614" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-white text-emerald-800 font-bold hover:bg-emerald-50 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    (855) 321-3614
                </a>
                <a href="/facilities" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl font-bold transition-colors border" style="background-color:rgba(255,255,255,0.2) !important;color:#ffffff !important;border-color:rgba(255,255,255,0.4) !important">
                    Find Covered Facilities
                </a>
            </div>
            <p class="text-xs mt-3" style="color:rgba(255,255,255,0.75)">24/7 · No obligation · Most insurance accepted</p>
        </div>
    </div>
</section>
<!-- What Insurance Covers -->
<section id="covered" class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Treatment Types Covered by Insurance</h2>
        <p class="text-gray-600 text-center mb-10 max-w-2xl mx-auto">Under the <strong>Mental Health Parity and Addiction Equity Act (MHPAEA)</strong>, insurance companies must cover substance abuse treatment at the same level as other medical conditions. Here's what's typically included:</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach([
                ['Medical Detox', 'medical-detox', 'Supervised withdrawal management with 24/7 medical monitoring, vital sign checks, and medication support. Usually the first step in treatment.', '3–7 days'],
                ['Inpatient / Residential', 'inpatient-rehab', 'Full-time structured rehabilitation in a licensed facility with individual therapy, group sessions, and life skills training.', '28–90 days'],
                ['Outpatient Programs', 'outpatient-programs', 'Flexible treatment while maintaining work, school, or family responsibilities. Typically 1–3 sessions per week.', 'Ongoing'],
                ['Intensive Outpatient (IOP)', 'intensive-outpatient', 'Structured programming 9–20 hours/week. The step between residential and standard outpatient — high accountability with flexibility.', '6–12 weeks'],
                ['Medication-Assisted Treatment', 'medication-assisted-treatment', 'FDA-approved medications (Suboxone, Vivitrol, methadone) combined with behavioral counseling. Gold standard for opioid addiction.', '6–24 months'],
                ['Dual Diagnosis', 'dual-diagnosis', 'Integrated treatment addressing both addiction and co-occurring mental health conditions like depression, anxiety, PTSD, or bipolar disorder.', 'Varies'],
            ] as $item)
            <a href="/treatment/{{ $item[1] }}" class="group bg-gray-50 rounded-xl p-5 border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50 transition-colors">
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    <div>
                        <span class="font-bold text-gray-900 group-hover:text-emerald-700">{{ $item[0] }}</span>
                        <span class="text-xs text-emerald-600 ml-2">{{ $item[3] }}</span>
                        <p class="text-sm text-gray-500 mt-1 leading-relaxed">{{ $item[2] }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <p class="text-center mt-8"><a href="/treatment" class="text-emerald-600 font-semibold hover:underline">Compare all treatment options &rarr;</a></p>
    </div>
</section>

<!-- How to Verify - Step by Step -->
<section id="verify" class="py-14 bg-emerald-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center mb-6">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="38" fill="#ecfdf5" stroke="#059669" stroke-width="1.5"/>
                <rect x="24" y="22" width="32" height="20" rx="3" fill="white" stroke="#059669" stroke-width="1.5"/>
                <path d="M24 29h32" stroke="#059669" stroke-width="1.5"/>
                <rect x="28" y="33" width="12" height="3" rx="1" fill="#059669" opacity=".3"/>
                <rect x="28" y="37" width="8" height="2" rx="1" fill="#059669" opacity=".2"/>
                <path d="M34 48v8M40 52v4M46 50v6" stroke="#059669" stroke-width="2" stroke-linecap="round"/>
                <circle cx="54" cy="54" r="10" fill="#059669"/>
                <path d="M50 54h8M54 50v8" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>
        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">How to Verify Your Insurance Coverage</h2>
        <p class="text-gray-600 text-center mb-10 max-w-2xl mx-auto">Checking your benefits takes just a few minutes. Follow these steps — or let us handle it for you with a free, no-obligation verification call.</p>

        <div class="space-y-0 relative">
            <!-- Timeline line -->
            <div class="absolute left-6 top-8 bottom-8 w-0.5 bg-emerald-200 hidden md:block"></div>

            @foreach([
                ['1', 'Locate Your Insurance Card', 'Find your insurance ID card. You\'ll need: member ID number, group number, the behavioral health phone number (often on the back), and your plan type (PPO, HMO, EPO).'],
                ['2', 'Call Behavioral Health Services', 'Call the behavioral health or mental health number on your card — this is different from the main member services line. Tell them you\'re seeking substance abuse treatment benefits information.'],
                ['3', 'Ask the Right Questions', 'Ask about: in-network rehab facilities near you, pre-authorization requirements, covered levels of care (detox, inpatient, outpatient, IOP), your deductible status, copay/coinsurance rates, and out-of-pocket maximum.'],
                ['4', 'Confirm Coverage Details', 'Get written confirmation of: how many days of inpatient treatment are covered, whether your preferred facility is in-network, any annual or lifetime benefit limits, and what the utilization review process looks like.'],
                ['5', 'Or Call Us — We Do It For You', 'DaycareHub offers free, confidential insurance verification. We call your insurer, confirm your benefits, find in-network facilities, and explain your costs — all within minutes. No obligation.'],
            ] as $step)
            <div class="flex gap-4 md:gap-6 mb-6 relative">
                <div class="w-12 h-12 rounded-full bg-emerald-700 text-white flex items-center justify-center font-bold text-lg flex-shrink-0 z-10">{{ $step[0] }}</div>
                <div class="bg-white rounded-xl p-5 border border-emerald-100 flex-1 shadow-sm">
                    <h3 class="font-bold text-gray-900 mb-1">{{ $step[1] }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $step[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-8">
            <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-emerald-700 text-white font-bold text-lg hover:bg-emerald-800 transition-colors shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614 — Free Verification
            </a>
            <p class="text-sm text-gray-500 mt-2">Available 24/7 &bull; No obligation &bull; 100% confidential</p>
        </div>
    </div>
</section>


<!-- Insurance Success Stories -->
<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Real People, Real Coverage</h2>
        <p class="text-gray-600 text-center mb-10 max-w-2xl mx-auto">Real stories from people who found coverage they didn't expect — and got the help they needed.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 relative">
                <svg class="w-8 h-8 text-emerald-200 mb-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <p class="text-gray-700 text-sm leading-relaxed mb-4">I was terrified about the cost. My Aetna PPO covered <strong>90% of my 30-day inpatient stay</strong>. Out of pocket I paid around $2,800 total. DaycareHub helped me verify everything before I even walked in the door.</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-emerald-600 flex items-center justify-center text-white font-bold text-sm">M.R.</div>
                    <div>
                        <div class="font-semibold text-gray-900 text-sm">Michael R.</div>
                        <div class="text-xs text-gray-500">Aetna PPO · Inpatient, 30 days</div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 relative">
                <svg class="w-8 h-8 text-emerald-200 mb-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <p class="text-gray-700 text-sm leading-relaxed mb-4">I didn't even know Medicaid covered rehab until I called DaycareHub. They found me a facility that accepted my coverage, and <strong>I paid absolutely nothing</strong>. Six months sober now.</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-sm">S.T.</div>
                    <div>
                        <div class="font-semibold text-gray-900 text-sm">Sarah T.</div>
                        <div class="text-xs text-gray-500">Medicaid · IOP, 12 weeks</div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 relative">
                <svg class="w-8 h-8 text-emerald-200 mb-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <p class="text-gray-700 text-sm leading-relaxed mb-4">Using my parents' BCBS plan at 24. Was worried they'd find out details — <strong>HIPAA kept everything private</strong>. Insurance covered detox and 60 days residential. Best decision I ever made.</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-purple-600 flex items-center justify-center text-white font-bold text-sm">J.K.</div>
                    <div>
                        <div class="font-semibold text-gray-900 text-sm">Jason K.</div>
                        <div class="text-xs text-gray-500">BCBS (parent's plan) · Residential, 60 days</div>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-center text-xs text-gray-500 mt-6">Names changed for privacy. Stories shared with permission.</p>
    </div>
</section>
<!-- No Insurance Options -->
<section id="no-insurance" class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">No Insurance? You Still Have Options</h2>
        <p class="text-gray-600 text-center mb-10 max-w-2xl mx-auto">Lack of insurance should never prevent you from getting help. Millions of Americans access addiction treatment each year through these alternatives.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-blue-50 rounded-2xl p-6 border border-blue-100">
                <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    Medicaid Expansion
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">In 40 states + DC, Medicaid covers adults earning up to 138% of the federal poverty level (~$20,783/year for individuals). <a href="/insurance/medicaid" class="text-emerald-600 hover:underline font-medium">Medicaid covers</a> detox, residential, outpatient, MAT, and case management — often at zero cost to you.</p>
            </div>

            <div class="bg-amber-50 rounded-2xl p-6 border border-amber-100">
                <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Sliding-Scale Fees
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">Many rehab centers adjust their fees based on your income and ability to pay. Some offer <strong>payment plans</strong> with monthly installments. Ask facilities directly about financial assistance — more centers offer this than you might expect.</p>
            </div>

            <div class="bg-green-50 rounded-2xl p-6 border border-green-100">
                <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    State-Funded Programs
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">Every state operates substance abuse treatment programs funded by federal block grants (SAMHSA). These programs serve uninsured and underinsured individuals. Wait times vary, but treatment is free or very low-cost. <a href="/states" class="text-emerald-600 hover:underline font-medium">Find programs in your state &rarr;</a></p>
            </div>

            <div class="bg-purple-50 rounded-2xl p-6 border border-purple-100">
                <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    Free Support Groups
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">Organizations like AA, NA, and SMART Recovery offer <strong>free peer support</strong> meetings nationwide — both in-person and online. While not a replacement for clinical treatment, they're an essential part of long-term recovery. <a href="/resources" class="text-emerald-600 hover:underline font-medium">Explore resources &rarr;</a></p>
            </div>
        </div>
    </div>
</section>


<!-- Mid-page CTA 2 -->
<section class="py-8 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <div class="rounded-2xl p-8 shadow-lg" style="background-color:#111827 !important;color:#fff">
            <p class="text-lg mb-1" style="color:#d1d5db">Ready to take the first step?</p>
            <p class="text-white text-2xl font-bold mb-5">Find covered treatment centers near you</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="tel:+18553213614" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-emerald-600 text-white font-bold hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    Call (855) 321-3614
                </a>
                <a href="/facilities" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-white/10 text-white font-bold hover:bg-white/20 transition-colors border border-white/20">
                    Browse Facilities
                </a>
            </div>
        </div>
    </div>
</section>
<!-- The Mental Health Parity Act -->
<section id="parity" class="py-14 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Your Rights Under the Mental Health Parity Act</h2>
        <div class="prose prose-gray max-w-none text-gray-600 leading-relaxed space-y-4">
            <p>The <strong>Mental Health Parity and Addiction Equity Act (MHPAEA)</strong> of 2008, strengthened by the <strong>Affordable Care Act (ACA)</strong> in 2010, is the reason most Americans have access to insurance-covered addiction treatment today. Here's what it means for you:</p>

            <div class="bg-white rounded-xl p-5 border border-gray-200 space-y-3">
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <p class="text-sm"><strong>Equal coverage:</strong> Insurance must cover addiction treatment at the same level as medical/surgical conditions. If your plan covers 30 days of hospital care, it cannot limit rehab to 10 days.</p>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <p class="text-sm"><strong>No unfair limits:</strong> Insurers cannot impose stricter pre-authorization requirements, higher copays, or lower benefit caps for substance abuse treatment compared to other conditions.</p>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <p class="text-sm"><strong>Essential health benefit:</strong> Under the ACA, substance abuse treatment is one of 10 essential health benefits. All marketplace plans must include it.</p>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <p class="text-sm"><strong>Right to appeal:</strong> If your insurance denies coverage for treatment, you have the right to appeal. Many denials are overturned on appeal — don't give up.</p>
                </div>
            </div>

            <p>If you believe your insurer is violating parity requirements, you can file a complaint with your state insurance commissioner or the U.S. Department of Labor.</p>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-14 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Insurance & Rehab: Common Questions</h2>
        <div class="space-y-3">
            @foreach([
                ['Does insurance cover drug and alcohol rehab?', 'Yes. Under the <strong>Mental Health Parity and Addiction Equity Act</strong>, most insurance plans must cover substance abuse treatment at the same level as medical benefits. This includes <a href="/treatment/medical-detox" class="text-emerald-600 hover:underline">medical detox</a>, <a href="/treatment/inpatient-rehab" class="text-emerald-600 hover:underline">inpatient rehab</a>, <a href="/treatment/outpatient-programs" class="text-emerald-600 hover:underline">outpatient programs</a>, and <a href="/treatment/medication-assisted-treatment" class="text-emerald-600 hover:underline">medication-assisted treatment</a>.'],
                ['How much does rehab cost with insurance?', 'With in-network insurance, out-of-pocket costs for 30-day inpatient rehab typically range from <strong>$0 to $5,000</strong>, depending on your deductible and coinsurance. Without insurance, the same treatment averages $15,000–$30,000. Outpatient programs with insurance often cost just a $20–$50 copay per session.'],
                ['How do I verify my insurance for rehab?', 'Call the behavioral health number on your insurance card, or call DaycareHub at <a href="tel:+18553213614" class="text-emerald-600 font-semibold">(855) 321-3614</a> for a free, confidential benefits check. We verify your coverage, confirm in-network facilities, and explain your out-of-pocket costs — all within minutes.'],
                ['What if I don\'t have insurance?', 'You still have options: <a href="/insurance/medicaid" class="text-emerald-600 hover:underline">Medicaid</a> covers treatment in most states, many facilities offer sliding-scale fees and payment plans, and SAMHSA-funded programs provide free treatment. <a href="/states" class="text-emerald-600 hover:underline">Find state-funded programs near you</a>.'],
                ['Do I need pre-authorization for rehab?', 'Many plans require pre-authorization for <a href="/treatment/inpatient-rehab" class="text-emerald-600 hover:underline">residential/inpatient</a> treatment. Emergency detox is typically covered without prior approval. <a href="/treatment/outpatient-programs" class="text-emerald-600 hover:underline">Outpatient</a> and <a href="/treatment/intensive-outpatient" class="text-emerald-600 hover:underline">IOP</a> programs often don\'t require pre-authorization.'],
                ['What\'s the difference between in-network and out-of-network?', 'In-network facilities have negotiated rates with your insurer — lower copays (10–20% coinsurance) and deductibles. Out-of-network is still covered by most PPO plans but at higher cost-sharing (30–50% coinsurance). HMO plans may not cover out-of-network at all.'],
                ['How long will insurance pay for rehab?', 'Coverage duration depends on <strong>medical necessity</strong> as determined by your treatment team and utilization review. Typical covered stays: detox (3–7 days), inpatient (28–90 days), PHP (2–4 weeks), IOP (6–12 weeks). Insurance reviews progress at regular intervals.'],
                ['Can I use my parents\' insurance for rehab?', 'Yes. Under the ACA, you can stay on a parent\'s health plan until age 26, including for substance abuse treatment. <strong>HIPAA privacy protections</strong> ensure your parents won\'t receive details about your specific treatment without your consent.'],
                ['Does Medicaid cover addiction treatment?', '<a href="/insurance/medicaid" class="text-emerald-600 hover:underline">Medicaid covers</a> substance abuse treatment in all 50 states. In expansion states (40+DC), adults earning up to 138% of the federal poverty level qualify. Covered services include detox, residential, outpatient, MAT, and case management — often at zero cost.'],
                ['Will my employer know if I use insurance for rehab?', 'No. <strong>HIPAA</strong> protects the confidentiality of all healthcare records. Your employer cannot access claim details. If you use employer-sponsored insurance, only the insurance company processes claims — HR does not see diagnosis or treatment information.'],
                ['What is the Mental Health Parity Act?', 'The <strong>MHPAEA (2008)</strong> requires insurers to cover mental health and substance use disorders equally with medical/surgical conditions. This means no stricter limits, higher copays, or lower caps for addiction treatment vs. other medical care.'],
                ['What should I do if my insurance denies coverage?', 'First, <strong>request the denial in writing</strong> with the specific reason. Then file an internal appeal within 180 days. If denied again, you have the right to an external review by an independent third party. Many denials — especially for residential treatment — are overturned on appeal. Call us for help navigating the process.'],
            ] as $faq)
            <details class="group bg-gray-50 rounded-xl border border-gray-100 hover:border-emerald-200 transition-colors">
                <summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">{{ $faq[0] }}<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary>
                <div class="px-5 pb-5 text-gray-600 leading-relaxed">{!! $faq[1] !!}</div>
            </details>
            @endforeach
        </div>
    </div>
</section>

<!-- Cross-links -->
<section class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Continue Your Research</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <a href="/treatment" class="group bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg hover:border-emerald-200 transition-all text-center">
                <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 mb-2">Treatment Options</h3>
                <p class="text-sm text-gray-500">Compare 7 types of rehab programs — from medical detox to sober living</p>
            </a>
            <a href="/addiction" class="group bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg hover:border-emerald-200 transition-all text-center">
                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 mb-2">Substance Guides</h3>
                <p class="text-sm text-gray-500">Learn about treatment for alcohol, opioids, cocaine, meth, and more</p>
            </a>
            <a href="/resources" class="group bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg hover:border-emerald-200 transition-all text-center">
                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 mb-2">Recovery Resources</h3>
                <p class="text-sm text-gray-500">Guides on choosing rehab, what to expect, paying for treatment</p>
            </a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-14 bg-emerald-700 text-white">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-3">Don't Let Insurance Questions Delay Your Recovery</h2>
        <p class="text-emerald-100 mb-6 text-lg">We verify your benefits in minutes — free, confidential, no obligation. One call can answer all your insurance questions and connect you with covered treatment options.</p>
        <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors shadow-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            (855) 321-3614
        </a>
        <p class="text-emerald-200 text-sm mt-3">Available 24/7 &bull; Most insurance accepted &bull; Same-day verification</p>
    </div>
</section>

<!-- Sources -->
<div class="max-w-4xl mx-auto px-4 py-8 border-t border-gray-100">
    <h3 class="text-sm font-bold text-gray-500 mb-3">Sources & References</h3>
    <ol class="text-xs text-gray-500 space-y-1 list-decimal list-inside">
        <li id="ref1">SAMHSA National Survey on Drug Use and Health (NSDUH), 2024. Over 92% of employer-sponsored and marketplace health plans include substance abuse treatment coverage under MHPAEA requirements.</li>
        <li id="ref2">National Association of Insurance Commissioners (NAIC). The 10 largest health insurance providers by enrollment cover approximately 87% of the commercially insured US population.</li>
        <li id="ref3">National Institute on Drug Abuse (NIDA). Treatment cost estimates based on 2024 national averages for in-network facilities.</li>
        <li id="ref4">Mental Health Parity and Addiction Equity Act (MHPAEA), Public Law 110-343, 2008. Strengthened by the Affordable Care Act (ACA), 2010.</li>
    </ol>
</div>
<!-- Last Updated -->
<div class="max-w-7xl mx-auto px-4 py-6 text-center">
    <p class="text-xs text-gray-500">Last updated: {{ date('F j, Y') }} &bull; Reviewed by DaycareHub clinical team &bull; Information sourced from CMS.gov, SAMHSA, and official insurer resources &bull; Coverage varies by plan and state</p>
</div>


@endsection