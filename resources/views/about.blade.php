@extends('layouts.app')

@section('meta_title', 'About DaycareHub — Free Addiction Treatment Directory | 17,000+ Centers')
@section('meta_description', 'DaycareHub is a free, evidence-based platform connecting people with 17,000+ verified addiction treatment centers across all 50 US states. Learn about our mission, editorial standards, data sources, and commitment to unbiased information.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "About Us"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "AboutPage",
    "name": "About DaycareHub",
    "url": "https://daycarehub.us/about",
    "description": "Free online directory connecting individuals and families with evidence-based addiction treatment centers across the United States.",
    "publisher": {
        "@@type": "Organization",
        "name": "DaycareHub",
        "url": "https://daycarehub.us",
        "foundingDate": "2024",
        "description": "Free addiction treatment directory with 17,000+ SAMHSA-verified centers across 50 US states.",
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+1-855-321-3614",
            "contactType": "customer service",
            "availableLanguage": "English",
            "areaServed": "US",
            "hoursAvailable": "Mo-Su 00:00-23:59"
        },
        "sameAs": []
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "What is DaycareHub?", "acceptedAnswer": {"@@type": "Answer", "text": "DaycareHub is a free online platform that helps people find addiction treatment centers across the United States. Our directory includes 17,000+ SAMHSA-verified facilities searchable by location, treatment type, insurance, and specialty. We also provide evidence-based educational content on treatment types, substances, insurance coverage, and recovery strategies."}},
        {"@@type": "Question", "name": "Is DaycareHub free to use?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes, DaycareHub is completely free. Our directory, educational guides, and phone support line are all available at no cost. We believe access to quality treatment information should never be a barrier to getting help."}},
        {"@@type": "Question", "name": "Where does DaycareHub get its data?", "acceptedAnswer": {"@@type": "Answer", "text": "Our treatment center data comes from SAMHSA's (Substance Abuse and Mental Health Services Administration) official National Directory of Drug and Alcohol Abuse Treatment Facilities. Medical and treatment information is sourced from NIDA, CDC, ASAM, and peer-reviewed research."}},
        {"@@type": "Question", "name": "Does DaycareHub accept payment from treatment centers?", "acceptedAnswer": {"@@type": "Answer", "text": "No. We do not accept payment from treatment centers for favorable listings, reviews, or placement in our directory. Our data comes directly from SAMHSA's public database, ensuring complete objectivity and preventing conflicts of interest."}},
        {"@@type": "Question", "name": "How can I contact DaycareHub?", "acceptedAnswer": {"@@type": "Answer", "text": "Call (855) 321-3614 for free, confidential guidance from treatment specialists, available 24/7. You can also reach us through our contact form at daycarehub.us/contact. Our team can help with treatment questions, insurance verification, and finding facilities in your area."}},
        {"@@type": "Question", "name": "Is my information kept private?", "acceptedAnswer": {"@@type": "Answer", "text": "Absolutely. All searches and interactions on DaycareHub are completely confidential. We use HTTPS encryption, do not require registration or personal information to use the site, and never share user data with third parties. Seeking help should never compromise your privacy."}}
    ]
}
</script>
@endsection

@section('content')
<!-- Scroll Progress -->
<div id="scroll-progress" style="position:fixed;top:0;left:0;width:0%;height:4px;background:#10b981;z-index:9999;transition:width 0.1s linear;"></div>

<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-2">
    <nav class="text-sm sm:text-base text-gray-500">
        <a href="/" class="hover:text-emerald-600">Home</a>
        <span class="mx-2">/</span>
        <span class="text-gray-900">About Us</span>
    </nav>
</div>

<!-- Quick Answer -->
<section class="bg-gradient-to-b from-emerald-50 to-white pt-8 pb-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border-l-4 border-emerald-500 rounded-xl shadow-sm p-6 md:p-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">About <span style="color:#065f46">DaycareHub</span></h1>
            <p class="text-gray-700 text-lg leading-relaxed">DaycareHub is a <strong>free, evidence-based platform</strong> that connects people struggling with addiction to <strong>{{ number_format(\App\Models\Organization::count()) }}+ verified treatment centers</strong> across all 50 US states. We provide unbiased information — sourced from SAMHSA, NIDA, and CDC — to help individuals and families make informed decisions about care. <strong>No fees, no registration, no judgment.</strong></p>
        </div>
    </div>
</section>

<!-- TOC -->
<section class="py-4">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <details class="group bg-gray-50 rounded-xl border border-gray-200 md:open" id="toc-details">
            <summary class="flex justify-between items-center cursor-pointer p-4 font-semibold text-gray-900 md:cursor-default">
                <span class="flex items-center gap-2"><svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg> On This Page</span>
                <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform md:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </summary>
            <div class="px-4 pb-4">
                <ol class="grid grid-cols-1 md:grid-cols-2 gap-1 text-sm">
                    <li><a href="#mission" class="text-emerald-700 hover:underline py-1 block">1. Our Mission</a></li>
                    <li><a href="#problem" class="text-emerald-700 hover:underline py-1 block">2. The Problem We're Solving</a></li>
                    <li><a href="#how-it-works" class="text-emerald-700 hover:underline py-1 block">3. How DaycareHub Works</a></li>
                    <li><a href="#different" class="text-emerald-700 hover:underline py-1 block">4. How We're Different</a></li>
                    <li><a href="#editorial" class="text-emerald-700 hover:underline py-1 block">5. Editorial Standards</a></li>
                    <li><a href="#data" class="text-emerald-700 hover:underline py-1 block">6. Our Data Sources</a></li>
                    <li><a href="#privacy" class="text-emerald-700 hover:underline py-1 block">7. Privacy & Trust</a></li>
                    <li><a href="#faq" class="text-emerald-700 hover:underline py-1 block">8. FAQ</a></li>
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
                <div class="text-3xl md:text-4xl font-bold">{{ number_format(\App\Models\Organization::count()) }}+</div>
                <div class="text-sm mt-1" style="color:rgba(255,255,255,0.8)">Verified Centers</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">50</div>
                <div class="text-sm mt-1" style="color:rgba(255,255,255,0.8)">US States</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">10+</div>
                <div class="text-sm mt-1" style="color:rgba(255,255,255,0.8)">Insurance Providers</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">100%</div>
                <div class="text-sm mt-1" style="color:rgba(255,255,255,0.8)">Free to Use</div>
            </div>
        </div>
    </div>
</section>

<!-- Mission -->
<section id="mission" class="py-14 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Mission</h2>
                <p class="text-gray-600 mb-4">Every year, <strong>48.7 million Americans</strong> struggle with substance use disorders. Yet only 24% receive any form of treatment. The gap between needing help and finding it is filled with confusion, misinformation, and predatory marketing from unscrupulous facilities.</p>
                <p class="text-gray-600 mb-4">DaycareHub exists to close that gap. We provide a comprehensive, searchable directory of SAMHSA-verified treatment centers, paired with expert-written educational content to help people make <strong>informed decisions</strong> about their care.</p>
                <p class="text-gray-600">Our platform is and always will be <strong>free to use</strong>. We believe access to quality treatment information is a right, not a privilege.</p>
            </div>
            <div class="space-y-6">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">What We Offer</h2>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Treatment Center Directory</h3>
                        <p class="text-gray-600 text-sm">Search {{ number_format(\App\Models\Organization::count()) }}+ facilities by location, treatment type, insurance, and specialty. All sourced from SAMHSA.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Educational Resources</h3>
                        <p class="text-gray-600 text-sm">In-depth guides on <a href="/treatment" class="text-emerald-600 hover:underline">7 treatment types</a>, <a href="/addiction" class="text-emerald-600 hover:underline">8 substances</a>, <a href="/insurance" class="text-emerald-600 hover:underline">10 insurance providers</a>, and <a href="/resources" class="text-emerald-600 hover:underline">5 recovery guides</a>.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Free Phone Support</h3>
                        <p class="text-gray-600 text-sm">Call <a href="tel:+18553213614" class="text-emerald-600 font-semibold">(855) 321-3614</a> for confidential guidance from treatment specialists. 24/7, no obligation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Problem We're Solving -->
<section id="problem" class="py-14 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">The Problem We're Solving</h2>
        <p class="text-gray-600 text-center max-w-3xl mx-auto mb-10">The addiction treatment landscape is broken. Here's what people face when trying to find help:</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl p-6 border border-red-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900">Information Overload</h3>
                </div>
                <p class="text-gray-600 text-sm">Searching "rehab near me" returns thousands of results — many from lead generation companies that sell your information to the highest bidder, not the best facility. It's nearly impossible to distinguish quality care from marketing hype.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-red-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900">Predatory Marketing</h3>
                </div>
                <p class="text-gray-600 text-sm">Some facilities spend millions on marketing but little on actual care. "Patient brokering" — where referral services sell patients to facilities for per-head fees — remains a serious industry problem that puts profit before recovery.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-red-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900">Cost Confusion</h3>
                </div>
                <p class="text-gray-600 text-sm">People don't know that most <a href="/insurance" class="text-emerald-600 hover:underline">insurance plans are required by law</a> to cover addiction treatment. Many pay out-of-pocket or avoid treatment entirely because they think they can't afford it.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-red-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900">Stigma & Shame</h3>
                </div>
                <p class="text-gray-600 text-sm">Many people delay seeking help due to shame, fear of judgment, or misconceptions about addiction. They need a private, judgment-free resource where they can educate themselves without exposure or pressure.</p>
            </div>
        </div>

        <div class="mt-8 bg-emerald-50 rounded-xl border border-emerald-200 p-6 text-center">
            <p class="text-emerald-800 font-semibold">DaycareHub addresses every one of these problems: <strong>unbiased data, no paid listings, clear insurance info, and complete privacy.</strong></p>
        </div>
    </div>
</section>

<!-- How DaycareHub Works -->
<section id="how-it-works" class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">How DaycareHub Works</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-10">Three steps to finding the right treatment — all free, all confidential.</p>

        <div class="space-y-0">
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 rounded-full text-white flex items-center justify-center font-bold flex-shrink-0" style="background:#065f46">1</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900 text-lg">Search & Filter</h3>
                    <p class="text-gray-600 text-sm mt-1">Browse our <a href="/facilities" class="text-emerald-600 hover:underline">directory of {{ number_format(\App\Models\Organization::count()) }}+ centers</a> by state, city, treatment type, insurance accepted, and specialty. Or <a href="/states" class="text-emerald-600 hover:underline">find by state</a> for a geographic overview. All data comes directly from SAMHSA's verified national database.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 rounded-full text-white flex items-center justify-center font-bold flex-shrink-0" style="background:#065f46">2</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900 text-lg">Educate Yourself</h3>
                    <p class="text-gray-600 text-sm mt-1">Read our in-depth guides on <a href="/treatment" class="text-emerald-600 hover:underline">treatment types</a> (inpatient, outpatient, detox, MAT, IOP, dual diagnosis, sober living), <a href="/addiction" class="text-emerald-600 hover:underline">substance-specific treatment</a>, and <a href="/insurance" class="text-emerald-600 hover:underline">insurance coverage</a>. Understand your options before making decisions.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 rounded-full text-white flex items-center justify-center font-bold flex-shrink-0" style="background:#065f46">3</div>
                </div>
                <div class="pb-2">
                    <h3 class="font-bold text-gray-900 text-lg">Get Personalized Help</h3>
                    <p class="text-gray-600 text-sm mt-1">Call <a href="tel:+18553213614" class="text-emerald-600 font-semibold">(855) 321-3614</a> to speak with a treatment specialist who can assess your situation, verify your insurance, and recommend specific facilities. Available 24/7, free, no obligation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mid-page CTA -->
<section class="py-10">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-2xl p-8 text-center text-white" style="background:#065f46">
            <h2 class="text-2xl font-bold mb-3">Ready to Find Treatment?</h2>
            <p class="text-white mb-5 text-lg" style="opacity:0.9">Whether you're researching options or ready to start today, we're here to help. Free, confidential, 24/7.</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="tel:+18553213614" class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    (855) 321-3614
                </a>
                <a href="/facilities" class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-xl border-2 border-white text-white font-bold text-lg hover:bg-white hover:text-emerald-800 transition-colors">
                    Browse Centers
                </a>
            </div>
        </div>
    </div>
</section>

<!-- How We're Different -->
<section id="different" class="py-14 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">How We're Different</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-10">Not all treatment directories are created equal. Here's what sets DaycareHub apart:</p>

        <!-- Comparison table -->
        <div class="hidden md:block overflow-x-auto rounded-xl border border-gray-200">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="text-left py-3 px-5 font-semibold text-gray-700"></th>
                        <th class="text-center py-3 px-5 font-bold" style="color:#065f46">DaycareHub</th>
                        <th class="text-center py-3 px-5 font-semibold text-gray-500">Lead Gen Sites</th>
                        <th class="text-center py-3 px-5 font-semibold text-gray-500">Paid Directories</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-100"><td class="py-3 px-5 text-gray-700">Free to use</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-gray-400">✓</td><td class="py-3 px-5 text-center text-gray-400">✓</td></tr>
                    <tr class="border-t border-gray-100 bg-emerald-50"><td class="py-3 px-5 text-gray-700 font-medium">No paid listings or rankings</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-red-400">✗</td><td class="py-3 px-5 text-center text-red-400">✗</td></tr>
                    <tr class="border-t border-gray-100"><td class="py-3 px-5 text-gray-700">SAMHSA-verified data</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-gray-400">Varies</td><td class="py-3 px-5 text-center text-gray-400">Varies</td></tr>
                    <tr class="border-t border-gray-100 bg-emerald-50"><td class="py-3 px-5 text-gray-700 font-medium">Won't sell your information</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-red-400">✗</td><td class="py-3 px-5 text-center text-gray-400">Varies</td></tr>
                    <tr class="border-t border-gray-100"><td class="py-3 px-5 text-gray-700">Evidence-based content</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-red-400">✗</td><td class="py-3 px-5 text-center text-gray-400">Limited</td></tr>
                    <tr class="border-t border-gray-100 bg-emerald-50"><td class="py-3 px-5 text-gray-700 font-medium">Insurance verification guides</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-red-400">✗</td><td class="py-3 px-5 text-center text-red-400">✗</td></tr>
                    <tr class="border-t border-gray-100"><td class="py-3 px-5 text-gray-700">No registration required</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-red-400">✗</td><td class="py-3 px-5 text-center text-emerald-600">✓</td></tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile cards version -->
        <div class="md:hidden space-y-4">
            <div class="bg-white rounded-xl p-5 border border-emerald-200">
                <h3 class="font-bold text-emerald-800 mb-3">DaycareHub</h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> No paid listings — pure SAMHSA data</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Won't sell your information</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Evidence-based educational content</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Insurance verification guides</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> No registration, no fees</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Editorial Standards -->
<section id="editorial" class="py-14 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">Our Editorial Standards</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-10">Every piece of content on DaycareHub is held to rigorous standards. Here's our commitment to accuracy and integrity:</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Evidence-Based Content
                </h3>
                <p class="text-gray-600 text-sm">All medical and treatment information is sourced from peer-reviewed research, SAMHSA, NIDA, CDC, and ASAM clinical guidelines. We cite sources and link to primary research throughout our content.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                    Editorial Review Process
                </h3>
                <p class="text-gray-600 text-sm">Content is written by specialists with backgrounds in addiction treatment, behavioral health, and public health. All articles undergo editorial review before publication and are updated monthly to reflect current research.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                    Zero Bias Policy
                </h3>
                <p class="text-gray-600 text-sm">We do not accept payment from treatment centers for favorable listings, reviews, or placement. Our directory data comes directly from SAMHSA's public database. We have no financial relationships that could compromise our objectivity.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    Regular Updates
                </h3>
                <p class="text-gray-600 text-sm">Treatment data and statistics are updated monthly. Each page displays its last review date. When research or clinical guidelines change, we update affected content promptly and transparently note what changed.</p>
            </div>
        </div>
    </div>
</section>

<!-- Data Sources -->
<section id="data" class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Our Data Sources</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl p-5 border border-gray-100 flex gap-4 items-start">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0"><span class="font-bold text-blue-700 text-xs">SAMHSA</span></div>
                <div><h3 class="font-bold text-gray-900">SAMHSA National Directory</h3><p class="text-gray-600 text-sm">Treatment center data from the official Substance Abuse and Mental Health Services Administration database of licensed facilities.</p></div>
            </div>
            <div class="bg-white rounded-xl p-5 border border-gray-100 flex gap-4 items-start">
                <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center flex-shrink-0"><span class="font-bold text-green-700 text-xs">NIDA</span></div>
                <div><h3 class="font-bold text-gray-900">National Institute on Drug Abuse</h3><p class="text-gray-600 text-sm">Treatment effectiveness data, success rates, and research-based guidelines from NIDA's publications and clinical studies.</p></div>
            </div>
            <div class="bg-white rounded-xl p-5 border border-gray-100 flex gap-4 items-start">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center flex-shrink-0"><span class="font-bold text-red-700 text-xs">CDC</span></div>
                <div><h3 class="font-bold text-gray-900">Centers for Disease Control</h3><p class="text-gray-600 text-sm">Overdose statistics, substance use prevalence, and public health data from CDC's WONDER database and Vital Signs reports.</p></div>
            </div>
            <div class="bg-white rounded-xl p-5 border border-gray-100 flex gap-4 items-start">
                <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center flex-shrink-0"><span class="font-bold text-purple-700 text-xs">CMS</span></div>
                <div><h3 class="font-bold text-gray-900">Centers for Medicare & Medicaid</h3><p class="text-gray-600 text-sm">Insurance coverage information, parity law details, and Medicaid/Medicare treatment coverage guidelines.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- Privacy & Trust -->
<section id="privacy" class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Your Privacy Matters</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 text-center">
                <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">100% Confidential</h3>
                <p class="text-gray-600 text-sm">All searches and interactions are private. We never share personal information with treatment centers or third parties.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 text-center">
                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">HTTPS Encrypted</h3>
                <p class="text-gray-600 text-sm">Your connection is encrypted. No account or personal data required to use any feature on the site.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 text-center">
                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Zero Judgment</h3>
                <p class="text-gray-600 text-sm">Seeking help is courageous. We provide information without stigma, pressure, or moral judgment. Your journey, your pace.</p>
            </div>
        </div>
    </div>
</section>

<!-- Cross-links -->
<section class="py-14 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Start Exploring</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="/facilities" class="group bg-white rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 mb-2">Find Treatment Centers</h3>
                <p class="text-gray-600 text-sm">Search {{ number_format(\App\Models\Organization::count()) }}+ verified facilities across all 50 states by location, type, and insurance.</p>
            </a>
            <a href="/treatment" class="group bg-white rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 mb-2">Compare Treatment Types</h3>
                <p class="text-gray-600 text-sm">Understand the 7 levels of care: inpatient, outpatient, detox, MAT, IOP, dual diagnosis, and sober living.</p>
            </a>
            <a href="/insurance" class="group bg-white rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 mb-2">Check Insurance Coverage</h3>
                <p class="text-gray-600 text-sm">Verify benefits with 10 major providers. Learn about the Mental Health Parity Act and your rights.</p>
            </a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-14 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
        <div class="space-y-3">
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What is DaycareHub?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">DaycareHub is a free online platform that helps people find addiction treatment centers across the United States. Our <a href="/facilities" class="text-emerald-600 hover:underline">directory</a> includes {{ number_format(\App\Models\Organization::count()) }}+ SAMHSA-verified facilities searchable by location, treatment type, insurance, and specialty. We also provide evidence-based <a href="/resources" class="text-emerald-600 hover:underline">educational content</a> on treatment, substances, insurance, and recovery.</div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Is DaycareHub really free?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Yes — 100% free. Our directory, educational guides, <a href="/blog" class="text-emerald-600 hover:underline">blog</a>, and phone support line are all available at no cost with no registration required. We believe access to quality treatment information should never have a paywall.</div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Where does DaycareHub get its data?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Treatment center data comes from SAMHSA's official National Directory. Medical information is sourced from NIDA, CDC, ASAM, and peer-reviewed research. <a href="/insurance" class="text-emerald-600 hover:underline">Insurance coverage</a> information comes from CMS and individual provider documentation.</div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Do treatment centers pay to be listed?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">No. We do not accept payment from treatment centers for listings, reviews, or placement. Our data comes directly from SAMHSA's public database. This ensures complete objectivity and prevents the conflicts of interest common in the treatment referral industry.</div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Is my information kept private?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Absolutely. All searches and interactions are confidential. We use HTTPS encryption, don't require registration or personal data, and never share information with third parties. Unlike many referral sites, we don't sell leads or user data.</div></details>
            <details class="group bg-gray-50 rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How can I contact DaycareHub?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Call <a href="tel:+18553213614" class="text-emerald-600 font-semibold">(855) 321-3614</a> for free, confidential guidance from treatment specialists (available 24/7). You can also use our <a href="/contact" class="text-emerald-600 hover:underline">contact form</a>. Our team helps with treatment questions, insurance verification, and finding facilities.</div></details>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-14 text-white" style="background:#065f46">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-3">Ready to Get Started?</h2>
        <p class="mb-6 text-lg" style="color:rgba(255,255,255,0.9)">Whether you're exploring options or ready to start treatment today, we're here to help. Free, confidential, available around the clock.</p>
        <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Call (855) 321-3614
        </a>
        <p class="mt-4 text-sm" style="color:rgba(255,255,255,0.7)"><a href="/contact" class="underline" style="color:rgba(255,255,255,0.9)">Contact form</a> &bull; <a href="/facilities" class="underline" style="color:rgba(255,255,255,0.9)">Browse centers</a> &bull; <a href="/states" class="underline" style="color:rgba(255,255,255,0.9)">Find by state</a></p>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 py-6 text-center">
    <p class="text-xs text-gray-500">Last updated: {{ date('F j, Y') }} &bull; DaycareHub</p>
</div>

<script>
window.addEventListener('scroll', function() {
    var h = document.documentElement;
    document.getElementById('scroll-progress').style.width = (h.scrollTop / (h.scrollHeight - h.clientHeight)) * 100 + '%';
});
if (window.innerWidth >= 768) {
    var toc = document.getElementById('toc-details');
    if (toc) toc.open = true;
}
</script>
@endsection