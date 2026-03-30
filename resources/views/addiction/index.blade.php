@extends('layouts.app')
@section('meta_title', 'Substance Childcare Guide — 8 Substances Explained | DaycareHub')
@section('meta_description', 'Evidence-based treatment guide for alcohol, opioids, fentanyl, heroin, meth, cocaine, benzodiazepines, and prescription drugs. Compare symptoms, treatments, costs, and find help.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Substances"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "MedicalWebPage",
    "name": "Substance Childcare Guide",
    "url": "https://daycarehub.us/addiction",
    "dateModified": "{{ now()->toIso8601String() }}",
    "description": "Comprehensive guide to evidence-based treatment for 8 major substance addictions.",
    "lastReviewed": "{{ date('Y-m-d') }}",
    "reviewedBy": {"@@type": "Organization", "name": "DaycareHub Editorial Team"},
    "about": {"@@type": "MedicalCondition", "name": "Substance Use Disorder"}
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "What is the most addictive substance?", "acceptedAnswer": {"@@type": "Answer", "text": "By dependence potential: heroin and fentanyl rank highest (opioid receptor binding), followed by methamphetamine (dopamine surge 12x baseline), cocaine, alcohol, and benzodiazepines. However, alcohol causes more total societal harm due to widespread legal availability, contributing to 95,000 US deaths annually."}},
        {"@@type": "Question", "name": "Can addiction be cured?", "acceptedAnswer": {"@@type": "Answer", "text": "Addiction is classified as a chronic brain disease by NIDA, SAMHSA, and the AMA. It cannot be 'cured' but can be effectively managed through evidence-based treatment, ongoing support, and lifestyle changes. Recovery success rates of 40-60% are comparable to diabetes, hypertension, and asthma management."}},
        {"@@type": "Question", "name": "What are the signs someone is addicted?", "acceptedAnswer": {"@@type": "Answer", "text": "Key signs include: inability to stop despite wanting to, tolerance (needing more for the same effect), withdrawal symptoms, neglecting responsibilities, continued use despite negative consequences, social isolation, financial problems, and changes in behavior or appearance. The DSM-5 defines 11 criteria for substance use disorder."}},
        {"@@type": "Question", "name": "How long does childcare take?", "acceptedAnswer": {"@@type": "Answer", "text": "Treatment varies by substance and severity: medical infant care 3-10 days (longer for benzos), inpatient 30-90 days, IOP 2-4 months, part-time 3-6 months, MAT ongoing. NIDA research shows 90+ days of combined treatment produces the best long-term outcomes regardless of substance."}},
        {"@@type": "Question", "name": "Does insurance cover early childhood treatment?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes. The Mental Health Parity and Addiction Equity Act (MHPAEA) and ACA require most insurance plans to cover substance use disorder treatment at the same level as physical health conditions. This includes infant care, inpatient, part-time, IOP, and MAT programs."}},
        {"@@type": "Question", "name": "What is MAT (Medication-Assisted Treatment)?", "acceptedAnswer": {"@@type": "Answer", "text": "MAT combines FDA-approved medications (buprenorphine/Suboxone, methadone, naltrexone/Vivitrol for opioids; naltrexone, acamprosate, disulfiram for alcohol) with counseling and behavioral therapies. MAT reduces opioid overdose deaths by 50%+ and improves treatment retention to 60-75%. It is the gold standard for opioid and alcohol use disorders."}},
        {"@@type": "Question", "name": "Which substances have the most dangerous withdrawal?", "acceptedAnswer": {"@@type": "Answer", "text": "Alcohol and benzodiazepine withdrawal can be life-threatening due to seizure risk and delirium tremens. Opioid withdrawal is extremely uncomfortable but rarely fatal (except in dehydrated/medically compromised individuals). Stimulant withdrawal (cocaine, meth) is psychologically intense but not medically dangerous. All require professional supervision."}},
        {"@@type": "Question", "name": "Can I work while getting treatment for addiction?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes, with part-time and IOP programs offering evening/weekend sessions. FMLA protects your job for up to 12 weeks for inpatient treatment. Many employers' EAP programs provide confidential referrals. ADA also protects individuals in recovery from discrimination."}},
        {"@@type": "Question", "name": "What happens if I relapse after treatment?", "acceptedAnswer": {"@@type": "Answer", "text": "Relapse is common (40-60% rate, similar to diabetes) and does not mean treatment failed. It signals that treatment needs adjustment — potentially a higher level of care, different therapy approach, or addition of MAT. Most successful recoveries involve multiple treatment episodes. The key is re-engaging with care quickly."}},
        {"@@type": "Question", "name": "How much does childcare cost?", "acceptedAnswer": {"@@type": "Answer", "text": "Costs vary by program: medical infant care $3,000-$10,000, inpatient $15,000-$30,000+, IOP $5,000-$12,000, part-time $5,000-$10,000, MAT $5,000-$15,000/year. Most insurance covers treatment. State-funded programs, sliding-scale fees, and scholarships are available for uninsured individuals."}}
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
        <img src="/images/addiction/hero.webp" alt="" style="width:100%;height:100%;object-fit:cover;object-position:center 40%">
        <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(127,29,29,0.87) 0%,rgba(185,28,28,0.78) 50%,rgba(239,68,68,0.68) 100%)"></div>
    </div>
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8" style="padding-top:96px;padding-bottom:48px">
        <nav class="text-sm mb-4" style="opacity:0.8">
            <a href="/" class="hover:text-white" style="color:rgba(255,255,255,0.7)">Home</a>
            <span style="color:rgba(255,255,255,0.5)" class="mx-2">/</span>
            <span class="text-white">Substance Guides</span>
        </nav>
        <h1 class="text-3xl md:text-5xl font-bold text-white mb-3" style="line-height:1.1">Understanding Addiction<br><span style="font-weight:400;font-size:0.55em;opacity:0.9">Science-Based Substance Guides</span></h1>
        <p style="color:rgba(255,255,255,0.9);max-width:600px;font-size:17px;margin-bottom:24px">8 comprehensive guides on alcohol, opioids, cocaine, meth, fentanyl and more. Brain science, withdrawal timelines, treatment options.</p>
        <div style="display:flex;flex-wrap:wrap;gap:24px">
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">8</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">substance guides</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">21.6M</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">Americans affected</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">108K</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">OD deaths/year</div></div>
            </div>
            <div style="display:flex;align-items:center;gap:8px">
                <div style="width:40px;height:40px;background:rgba(255,255,255,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center">
                    <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <div><div class="text-white font-bold text-lg">75%</div><div style="font-size:12px;color:rgba(255,255,255,0.85)">treatable</div></div>
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
            <p class="text-sm font-bold text-emerald-700 uppercase tracking-wider mb-2">Quick Answer</p>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Substance Childcare Guide</h1>
            <p class="text-gray-700 text-lg leading-relaxed">Over <strong>48.7 million Americans</strong> struggle with substance use disorders, yet only 24% receive treatment. This guide covers <strong>8 major substance types</strong> — from alcohol and opioids to fentanyl and benzodiazepines — with evidence-based treatment options, warning signs, and how to find help. Each substance requires a specific approach: some need medical infant care, others respond best to MAT, and all benefit from behavioral therapy.</p>
        </div>
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
                    <li><a href="#epidemic" class="text-emerald-700 hover:underline py-1 block">1. The Addiction Epidemic in Numbers</a></li>
                    <li><a href="#substances" class="text-emerald-700 hover:underline py-1 block">2. Substances & Treatment Options</a></li>
                    <li><a href="#how-addiction-works" class="text-emerald-700 hover:underline py-1 block">3. How Addiction Works (Brain Science)</a></li>
                    <li><a href="#danger-ranking" class="text-emerald-700 hover:underline py-1 block">4. Withdrawal Danger by Substance</a></li>
                    <li><a href="#treatment-approaches" class="text-emerald-700 hover:underline py-1 block">5. Treatment Approaches by Substance</a></li>
                    <li><a href="#signs" class="text-emerald-700 hover:underline py-1 block">6. Recognizing the Signs</a></li>
                    <li><a href="#helping-someone" class="text-emerald-700 hover:underline py-1 block">7. How to Help Someone with Addiction</a></li>
                    <li><a href="#faq" class="text-emerald-700 hover:underline py-1 block">8. Frequently Asked Questions</a></li>
                </ol>
            </div>
        </details>
    </div>
</section>

<!-- Stats Bar -->
<section id="epidemic" class="py-8" style="background:#065f46">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-white">
            <div>
                <div class="text-3xl md:text-4xl font-bold">48.7M</div>
                <div class="text-emerald-200 text-sm mt-1">Americans with SUD<sup class="cursor-help" title="SAMHSA 2023 NSDUH">1</sup></div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">107,000+</div>
                <div class="text-emerald-200 text-sm mt-1">Overdose deaths in 2023<sup class="cursor-help" title="CDC WONDER">2</sup></div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">73%</div>
                <div class="text-emerald-200 text-sm mt-1">Involve fentanyl/opioids<sup class="cursor-help" title="CDC Vital Signs">2</sup></div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">Only 24%</div>
                <div class="text-emerald-200 text-sm mt-1">Received any treatment<sup class="cursor-help" title="SAMHSA NSDUH">1</sup></div>
            </div>
        </div>
    </div>
</section>

<!-- Substance Cards -->
<section id="substances" class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">8 Major Substances & Treatment</h2>
            <p class="mt-3 text-gray-600 max-w-2xl mx-auto">Each substance affects the brain differently and requires a tailored treatment approach. Click on any substance for a detailed treatment guide.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($substances as $slug => $s)
            <a href="/addiction/{{ $slug }}" class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all p-6 flex flex-col">
                <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px">
                    <div style="flex-shrink:0;width:48px;height:48px;background:linear-gradient(135deg,#fef2f2,#fee2e2);border-radius:12px;display:flex;align-items:center;justify-content:center" class="group-hover:scale-110 transition-transform">
                        <img src="/images/addiction/icon-{{ $slug }}.svg" alt="" style="width:32px;height:32px" onerror="this.style.display='none'">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-emerald-700">{{ $s['substance'] }}</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-3 flex-1">{{ Str::limit($s['overview'], 120) }}</p>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xs text-gray-400">{{ count($s['treatments']) }} treatments</span>
                    <span class="text-emerald-600 font-semibold text-sm">Learn more &rarr;</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- How Addiction Works -->
<section id="how-addiction-works" class="py-14 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">How Addiction Changes the Brain</h2>
        <p class="text-gray-600 text-center max-w-3xl mx-auto mb-10">Addiction is a chronic brain disease, not a moral failing. Understanding the neuroscience helps explain why willpower alone is rarely enough.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-6 border border-gray-100">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">1. The Dopamine Surge</h3>
                <p class="text-gray-600 text-sm">Substances hijack the brain's reward system, releasing 2-10x more dopamine than natural rewards. <a href="/addiction/methamphetamine" class="text-emerald-600 hover:underline">Meth</a> releases 12x baseline levels. This creates an overwhelming drive to repeat the behavior that no natural activity can match.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-100">
                <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">2. Tolerance & Dependence</h3>
                <p class="text-gray-600 text-sm">The brain adapts by reducing dopamine receptors and natural production. The person needs more substance for the same effect (tolerance) and feels terrible without it (dependence). This is physical, not psychological — the brain has literally rewired itself.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-100">
                <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">3. Impaired Decision-Making</h3>
                <p class="text-gray-600 text-sm">Chronic substance use damages the prefrontal cortex — the brain region responsible for judgment, impulse control, and planning. This is why people continue using despite devastating consequences. <a href="/treatment" class="text-emerald-600 hover:underline">Treatment</a> helps restore these pathways over time.</p>
            </div>
        </div>

        <div class="mt-8 bg-white rounded-xl border border-gray-200 p-5">
            <p class="text-gray-700 text-sm"><strong>Why this matters for treatment:</strong> Because addiction changes brain structure and function, treatment must include both medical and behavioral components. <a href="/treatment/medication-assisted-treatment" class="text-emerald-600 hover:underline">MAT</a> helps normalize brain chemistry while <a href="/treatment/inpatient-rehab" class="text-emerald-600 hover:underline">behavioral therapies</a> rebuild decision-making pathways. Recovery is possible — the brain can heal with time and proper care.</p>
        </div>
    </div>
</section>

<!-- Withdrawal Danger Ranking -->
<section id="danger-ranking" class="py-14 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">Withdrawal Danger by Substance</h2>
        <p class="text-gray-600 text-center max-w-3xl mx-auto mb-10">Not all withdrawals are equal. Some are life-threatening without medical supervision. This ranking helps you understand the urgency of professional help.</p>

        <div class="space-y-4">
            <!-- Severe / Life-threatening -->
            <div class="bg-red-50 rounded-xl border border-red-200 p-5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="px-3 py-1 rounded-full bg-red-600 text-white text-xs font-bold">SEVERE — Medical Infant Care Required</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <h4 class="font-bold text-gray-900"><a href="/addiction/alcohol" class="hover:text-emerald-700">Alcohol</a></h4>
                        <p class="text-gray-600 text-sm">Seizures, delirium tremens (DT), death possible. Onset: 6-24 hrs. Duration: 5-7 days. <strong>Never quit cold turkey.</strong></p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900"><a href="/addiction/benzodiazepines" class="hover:text-emerald-700">Benzodiazepines</a></h4>
                        <p class="text-gray-600 text-sm">Seizures, psychosis, death possible. Requires gradual medical taper over weeks-months. Abrupt cessation is dangerous.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Barbiturates</h4>
                        <p class="text-gray-600 text-sm">Similar to alcohol/benzo withdrawal. Seizures, hyperthermia, cardiovascular collapse. Rare today but extremely dangerous.</p>
                    </div>
                </div>
            </div>

            <!-- Moderate / Very uncomfortable -->
            <div class="bg-orange-50 rounded-xl border border-orange-200 p-5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="px-3 py-1 rounded-full bg-orange-500 text-white text-xs font-bold">MODERATE — Medical Supervision Recommended</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <h4 class="font-bold text-gray-900"><a href="/addiction/opioids" class="hover:text-emerald-700">Opioids</a></h4>
                        <p class="text-gray-600 text-sm">Intensely uncomfortable (flu-like). Rarely fatal but risk of dehydration. Onset: 8-24 hrs. MAT greatly reduces symptoms.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900"><a href="/addiction/heroin" class="hover:text-emerald-700">Heroin</a></h4>
                        <p class="text-gray-600 text-sm">Same as opioids. Muscle pain, vomiting, diarrhea, insomnia. Peak at 48-72 hrs. Duration: 5-10 days.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900"><a href="/addiction/fentanyl" class="hover:text-emerald-700">Fentanyl</a></h4>
                        <p class="text-gray-600 text-sm">More intense than heroin withdrawal due to higher potency. Longer duration. MAT is essential for management.</p>
                    </div>
                </div>
            </div>

            <!-- Mild-Moderate / Psychological -->
            <div class="bg-yellow-50 rounded-xl border border-yellow-200 p-5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="px-3 py-1 rounded-full bg-yellow-600 text-white text-xs font-bold">PSYCHOLOGICAL — Support Recommended</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <h4 class="font-bold text-gray-900"><a href="/addiction/methamphetamine" class="hover:text-emerald-700">Methamphetamine</a></h4>
                        <p class="text-gray-600 text-sm">Severe depression, fatigue, hypersomnia, intense cravings. Not medically dangerous but high suicide risk during crash.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900"><a href="/addiction/cocaine" class="hover:text-emerald-700">Cocaine</a></h4>
                        <p class="text-gray-600 text-sm">Depression, fatigue, increased appetite, vivid dreams. Psychological cravings can be intense. Duration: 1-2 weeks.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900"><a href="/addiction/prescription-drugs" class="hover:text-emerald-700">Stimulants (Rx)</a></h4>
                        <p class="text-gray-600 text-sm">Similar to cocaine. Fatigue, depression, cognitive fog. Not physically dangerous but monitoring helps prevent relapse.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mid-page CTA -->
<section class="py-10">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-2xl p-8 text-center text-white" style="background:#065f46">
            <h2 class="text-2xl font-bold mb-3">Need Help With a Substance Problem?</h2>
            <p class="text-white mb-5 text-lg" style="opacity:0.9">Our specialists can recommend the right treatment approach based on the substance, severity, and your situation. Free, confidential, 24/7.</p>
            <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-3 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614
            </a>
        </div>
    </div>
</section>

<!-- Treatment Approaches by Substance Type -->
<section id="treatment-approaches" class="py-14 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">Treatment Approaches by Substance</h2>
        <p class="text-gray-600 text-center max-w-3xl mx-auto mb-10">Different substances require different treatment strategies. Here's what works best for each category.</p>

        <div class="space-y-6">
            <!-- Depressants -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <div class="bg-blue-50 px-6 py-4 border-b border-gray-200">
                    <h3 class="font-bold text-gray-900">Depressants: <a href="/addiction/alcohol" class="text-emerald-600 hover:underline">Alcohol</a> &bull; <a href="/addiction/benzodiazepines" class="text-emerald-600 hover:underline">Benzodiazepines</a></h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Primary Treatment</h4>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> <a href="/treatment/medical-infant care" class="text-emerald-600 hover:underline">Medical infant care</a> (mandatory — withdrawal can be fatal)</li>
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> <a href="/treatment/medication-assisted-treatment" class="text-emerald-600 hover:underline">MAT</a>: naltrexone, acamprosate (alcohol); medical taper (benzos)</li>
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> CBT + motivational interviewing</li>
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 12-step programs (AA)</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Key Facts</h4>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li>&bull; Alcohol: 28.3M Americans affected, 95K deaths/year</li>
                                <li>&bull; Benzo infant care requires <strong>gradual taper</strong> over weeks-months</li>
                                <li>&bull; Combined with opioids, benzos increase overdose risk 10x</li>
                                <li>&bull; 90-day treatment produces best long-term outcomes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Opioids -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <div class="bg-red-50 px-6 py-4 border-b border-gray-200">
                    <h3 class="font-bold text-gray-900">Opioids: <a href="/addiction/opioids" class="text-emerald-600 hover:underline">Rx Painkillers</a> &bull; <a href="/addiction/heroin" class="text-emerald-600 hover:underline">Heroin</a> &bull; <a href="/addiction/fentanyl" class="text-emerald-600 hover:underline">Fentanyl</a></h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Primary Treatment</h4>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> <a href="/treatment/medication-assisted-treatment" class="text-emerald-600 hover:underline">MAT is the gold standard</a> (buprenorphine, methadone, naltrexone)</li>
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Medical infant care for initial stabilization</li>
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> <a href="/treatment/inpatient-rehab" class="text-emerald-600 hover:underline">Residential treatment</a> + behavioral therapy</li>
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Naloxone (Narcan) for overdose reversal</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Key Facts</h4>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li>&bull; Fentanyl involved in 73% of opioid deaths</li>
                                <li>&bull; MAT reduces overdose deaths by <strong>50%+</strong></li>
                                <li>&bull; Long-term MAT (12+ months) recommended</li>
                                <li>&bull; 80% of heroin users started with Rx painkillers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stimulants -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <div class="bg-yellow-50 px-6 py-4 border-b border-gray-200">
                    <h3 class="font-bold text-gray-900">Stimulants: <a href="/addiction/cocaine" class="text-emerald-600 hover:underline">Cocaine</a> &bull; <a href="/addiction/methamphetamine" class="text-emerald-600 hover:underline">Methamphetamine</a></h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Primary Treatment</h4>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Behavioral therapies are primary (no FDA-approved meds)</li>
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Matrix Model (meth) — 16-week structured program</li>
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Contingency management (incentive-based)</li>
                                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> <a href="/treatment/dual-diagnosis" class="text-emerald-600 hover:underline">Dual diagnosis</a> for depression (very common)</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Key Facts</h4>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li>&bull; Meth releases 12x normal dopamine levels</li>
                                <li>&bull; 90+ day treatment strongly recommended for meth</li>
                                <li>&bull; Cocaine increasingly mixed with fentanyl unknowingly</li>
                                <li>&bull; Contingency management shows 60%+ improvement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recognizing the Signs -->
<section id="signs" class="py-14 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">Recognizing the Signs of Addiction</h2>
        <p class="text-gray-600 text-center max-w-3xl mx-auto mb-10">The DSM-5 defines 11 criteria for substance use disorder. Meeting 2-3 indicates mild SUD, 4-5 moderate, and 6+ severe. Look for these warning patterns:</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                    Behavioral Signs
                </h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li>&bull; Using more than intended or for longer periods</li>
                    <li>&bull; Failed attempts to cut back or stop</li>
                    <li>&bull; Spending excessive time obtaining, using, or recovering</li>
                    <li>&bull; Neglecting work, school, or family responsibilities</li>
                    <li>&bull; Continued use despite relationship problems</li>
                    <li>&bull; Giving up important activities</li>
                    <li>&bull; Secretive behavior and lying</li>
                </ul>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    Physical Signs
                </h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li>&bull; Tolerance — needing more for the same effect</li>
                    <li>&bull; Withdrawal symptoms when stopping</li>
                    <li>&bull; Significant weight changes</li>
                    <li>&bull; Changes in sleep patterns</li>
                    <li>&bull; Deteriorating physical appearance</li>
                    <li>&bull; Using in physically hazardous situations</li>
                    <li>&bull; Continued use despite health problems</li>
                </ul>
            </div>
        </div>

        <div class="mt-8 bg-emerald-50 rounded-xl border border-emerald-200 p-6 text-center">
            <p class="text-emerald-800 font-semibold mb-2">Recognize these signs in yourself or someone you love?</p>
            <p class="text-emerald-700 text-sm mb-4">Early intervention dramatically improves outcomes. A confidential assessment can help determine the best course of action.</p>
            <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg text-white font-semibold text-sm" style="background:#065f46">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Free Assessment: (855) 321-3614
            </a>
        </div>
    </div>
</section>

<!-- How to Help Someone -->
<section id="helping-someone" class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">How to Help Someone with Addiction</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-10">Watching someone you love struggle with addiction is painful. Here are evidence-based approaches that actually help.</p>

        <div class="space-y-4">
            <div class="bg-white rounded-xl border border-gray-100 p-5 flex gap-4">
                <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                    <span class="text-emerald-700 font-bold text-sm">1</span>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">Educate Yourself First</h3>
                    <p class="text-gray-600 text-sm mt-1">Understanding addiction as a brain disease — not a character flaw — changes how you approach conversations. Read our <a href="/resources/family-guide" class="text-emerald-600 hover:underline">Family Guide</a> for comprehensive education on the science of addiction and recovery.</p>
                </div>
            </div>
            <div class="bg-white rounded-xl border border-gray-100 p-5 flex gap-4">
                <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                    <span class="text-emerald-700 font-bold text-sm">2</span>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">Have a Compassionate Conversation</h3>
                    <p class="text-gray-600 text-sm mt-1">Choose a time when they're sober. Use "I" statements ("I'm worried about you") rather than accusations. Express concern without judgment. Listen more than you talk. Don't expect immediate acceptance.</p>
                </div>
            </div>
            <div class="bg-white rounded-xl border border-gray-100 p-5 flex gap-4">
                <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                    <span class="text-emerald-700 font-bold text-sm">3</span>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">Set Healthy Boundaries</h3>
                    <p class="text-gray-600 text-sm mt-1">Stop enabling behaviors: don't cover for them, don't provide money, don't make excuses. Boundaries protect both of you. You can love someone and refuse to fund their addiction at the same time.</p>
                </div>
            </div>
            <div class="bg-white rounded-xl border border-gray-100 p-5 flex gap-4">
                <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                    <span class="text-emerald-700 font-bold text-sm">4</span>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">Offer Specific Help</h3>
                    <p class="text-gray-600 text-sm mt-1">Instead of "let me know if you need anything," offer concrete steps: "I've researched <a href="/treatment" class="text-emerald-600 hover:underline">treatment programs</a>, I can call with you right now." Remove barriers to action. Offer to drive them, help with childcare, or handle logistics.</p>
                </div>
            </div>
            <div class="bg-white rounded-xl border border-gray-100 p-5 flex gap-4">
                <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                    <span class="text-emerald-700 font-bold text-sm">5</span>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">Get Support for Yourself</h3>
                    <p class="text-gray-600 text-sm mt-1">Al-Anon, Nar-Anon, and CRAFT (Community Reinforcement and Family Training) help families cope. You can't pour from an empty cup — your wellbeing matters too.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cross-links -->
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Explore Treatment Options</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Treatment Programs</h3>
                <div class="space-y-2">
                    @foreach(['inpatient-rehab' => 'Inpatient Rehab', 'part-time-programs' => 'Outpatient', 'medical-infant care' => 'Medical Infant Care', 'medication-assisted-treatment' => 'MAT', 'dual-diagnosis' => 'Dual Diagnosis', 'intensive-part-time' => 'IOP', 'sober-living' => 'Sober Living'] as $ts => $tn)
                    <a href="/treatment/{{ $ts }}" class="block text-sm text-gray-600 hover:text-emerald-600">{{ $tn }} &rarr;</a>
                    @endforeach
                    <a href="/treatment" class="block text-sm text-emerald-600 font-medium mt-2">Compare all programs &rarr;</a>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Subsidy Programs</h3>
                <div class="space-y-2">
                    @foreach(['aetna' => 'Aetna', 'bcbs' => 'BCBS', 'cigna' => 'Cigna', 'uhc' => 'UnitedHealthcare', 'anthem' => 'Anthem', 'humana' => 'Humana', 'medicaid' => 'Medicaid'] as $is => $in)
                    <a href="/insurance/{{ $is }}" class="block text-sm text-gray-600 hover:text-emerald-600">{{ $in }} &rarr;</a>
                    @endforeach
                    <a href="/insurance" class="block text-sm text-emerald-600 font-medium mt-2">All insurance providers &rarr;</a>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Recovery Resources</h3>
                <div class="space-y-2">
                    <a href="/resources/how-to-choose-rehab" class="block text-sm text-gray-600 hover:text-emerald-600">How to Choose a Daycare Center &rarr;</a>
                    <a href="/resources/what-to-expect-in-rehab" class="block text-sm text-gray-600 hover:text-emerald-600">What to Expect in Rehab &rarr;</a>
                    <a href="/resources/paying-for-treatment" class="block text-sm text-gray-600 hover:text-emerald-600">Paying for Treatment &rarr;</a>
                    <a href="/resources/family-guide" class="block text-sm text-gray-600 hover:text-emerald-600">Family Guide &rarr;</a>
                    <a href="/resources/relapse-prevention" class="block text-sm text-gray-600 hover:text-emerald-600">Relapse Prevention &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-14 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
        <div class="space-y-3">
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What is the most addictive substance?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">By dependence potential, <a href="/addiction/heroin" class="text-emerald-600 hover:underline">heroin</a> and <a href="/addiction/fentanyl" class="text-emerald-600 hover:underline">fentanyl</a> rank highest, followed by <a href="/addiction/methamphetamine" class="text-emerald-600 hover:underline">methamphetamine</a> (12x dopamine surge), <a href="/addiction/cocaine" class="text-emerald-600 hover:underline">cocaine</a>, and <a href="/addiction/alcohol" class="text-emerald-600 hover:underline">alcohol</a>. However, alcohol causes more total societal harm due to widespread availability (95,000 deaths/year vs 80,000 opioid deaths).</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Can addiction be cured?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Addiction is classified as a chronic brain disease by NIDA, SAMHSA, and the AMA. It can be effectively managed through <a href="/treatment" class="text-emerald-600 hover:underline">evidence-based treatment</a>, ongoing support, and lifestyle changes. Recovery success rates (40-60%) are comparable to other chronic conditions like diabetes and hypertension.</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What are the signs someone is addicted?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">The DSM-5 defines 11 criteria. Key signs include: inability to stop despite wanting to, tolerance (needing more), withdrawal symptoms, neglecting responsibilities, continued use despite consequences, social isolation, and financial problems. Meeting 2-3 criteria indicates mild SUD, 4-5 moderate, and 6+ severe.</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Which substances have the most dangerous withdrawal?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600"><a href="/addiction/alcohol" class="text-emerald-600 hover:underline">Alcohol</a> and <a href="/addiction/benzodiazepines" class="text-emerald-600 hover:underline">benzodiazepine</a> withdrawal can be <strong>life-threatening</strong> (seizures, delirium tremens). <a href="/treatment/medical-infant care" class="text-emerald-600 hover:underline">Medical infant care</a> is mandatory. Opioid withdrawal is intensely uncomfortable but rarely fatal. Stimulant withdrawal is psychological, not physically dangerous.</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What is MAT and does it work?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600"><a href="/treatment/medication-assisted-treatment" class="text-emerald-600 hover:underline">MAT</a> combines FDA-approved medications with counseling. For opioids: buprenorphine, methadone, naltrexone. For alcohol: naltrexone, acamprosate, disulfiram. MAT reduces overdose deaths by 50%+ and improves retention to 60-75%. It is the gold standard per SAMHSA and WHO.</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How long does treatment take?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Infant Care: 3-10 days. <a href="/treatment/inpatient-rehab" class="text-emerald-600 hover:underline">Inpatient</a>: 30-90 days. <a href="/treatment/intensive-part-time" class="text-emerald-600 hover:underline">IOP</a>: 2-4 months. <a href="/treatment/part-time-programs" class="text-emerald-600 hover:underline">Outpatient</a>: 3-6 months. MAT: 12+ months. Research shows <strong>90+ days total</strong> significantly improves long-term outcomes.</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Does insurance cover treatment?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Yes. The <a href="/insurance" class="text-emerald-600 hover:underline">Mental Health Parity Act</a> requires coverage at the same level as physical health. Most plans cover infant care, inpatient, part-time, IOP, and MAT. <a href="/insurance" class="text-emerald-600 hover:underline">Verify your coverage &rarr;</a></div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Can I work while getting treatment?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Yes, with <a href="/treatment/part-time-programs" class="text-emerald-600 hover:underline">part-time</a> and <a href="/treatment/intensive-part-time" class="text-emerald-600 hover:underline">IOP</a> (evening/weekend sessions). FMLA protects your job for up to 12 weeks for inpatient care. ADA also protects individuals in recovery from workplace discrimination.</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What if I relapse after treatment?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Relapse is common (40-60% rate, similar to diabetes) and doesn't mean treatment failed — it means treatment needs adjustment. Re-engage with care quickly: a higher level of care, different therapy approach, or adding MAT may help. <a href="/resources/relapse-prevention" class="text-emerald-600 hover:underline">Read our relapse prevention guide &rarr;</a></div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How much does treatment cost?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Infant Care: $3K-$10K. Inpatient: $15K-$30K+. IOP: $5K-$12K. Outpatient: $5K-$10K. MAT: $5K-$15K/year. Most insurance covers treatment. State-funded programs, sliding-scale fees, and scholarships available. <a href="/resources/paying-for-treatment" class="text-emerald-600 hover:underline">See all financial options &rarr;</a></div></details>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-14 text-white" style="background:#065f46">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-3">Get Help Today</h2>
        <p class="mb-6 text-lg" style="color:rgba(255,255,255,0.9)">Our addiction specialists can recommend the right treatment based on your substance, severity, and insurance. Free, confidential, available 24/7.</p>
        <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            (855) 321-3614
        </a>
        <p class="mt-4 text-sm" style="color:rgba(255,255,255,0.7)">Or <a href="/contact" class="underline" style="color:rgba(255,255,255,0.9)">send a message</a> &bull; <a href="/facilities" class="underline" style="color:rgba(255,255,255,0.9)">Browse centers</a> &bull; <a href="/states" class="underline" style="color:rgba(255,255,255,0.9)">Find by state</a></p>
    </div>
</section>

<!-- Sources -->
<section class="py-8 bg-white border-t border-gray-100">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <details class="text-xs text-gray-500">
            <summary class="cursor-pointer font-semibold hover:text-gray-700">Sources & References</summary>
            <ol class="mt-3 space-y-1 list-decimal list-inside">
                <li>SAMHSA. (2023). <em>National Survey on Drug Use and Health (NSDUH).</em> <a href="https://www.samhsa.gov/data/nsduh" class="text-emerald-600 hover:underline" target="_blank" rel="noopener">samhsa.gov</a></li>
                <li>CDC. (2024). <em>Drug Overdose Deaths in the United States.</em> <a href="https://www.cdc.gov/drugoverdose/" class="text-emerald-600 hover:underline" target="_blank" rel="noopener">cdc.gov</a></li>
                <li>NIDA. (2020). <em>Drugs, Brains, and Behavior: The Science of Addiction.</em> <a href="https://nida.nih.gov/publications/drugs-brains-behavior-science-addiction" class="text-emerald-600 hover:underline" target="_blank" rel="noopener">nida.nih.gov</a></li>
                <li>APA. (2013). <em>Diagnostic and Statistical Manual of Mental Disorders (DSM-5).</em></li>
                <li>WHO. (2021). <em>Guidelines for the Management of Substance Use Disorders.</em></li>
            </ol>
        </details>
    </div>
</section>

<!-- Last Updated -->
<div class="max-w-7xl mx-auto px-4 py-6 text-center">
    <p class="text-xs text-gray-500">Last updated: {{ date('F j, Y') }} &bull; Reviewed by DaycareHub Editorial Team &bull; Sources: SAMHSA, CDC, NIDA, APA</p>
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