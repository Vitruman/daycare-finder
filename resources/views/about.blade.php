@extends('layouts.app')

@section('meta_title', 'About DaycareHub — Free Childcare Directory for US Families')
@section('meta_description', 'DaycareHub is a free platform helping families find licensed daycare centers, preschools, and childcare programs across all 50 US states. Learn about our mission, data sources, and editorial standards.')

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
    "description": "Free online directory helping families find licensed daycare centers and childcare programs across the United States.",
    "publisher": {
        "@@type": "Organization",
        "name": "DaycareHub",
        "url": "https://daycarehub.us",
        "foundingDate": "2024",
        "description": "Free childcare directory with 26,000+ licensed centers across 50 US states.",
        "contactPoint": {
            "@@type": "ContactPoint",
            "contactType": "customer service",
            "availableLanguage": "English",
            "areaServed": "US"
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
        {"@@type": "Question", "name": "What is DaycareHub?", "acceptedAnswer": {"@@type": "Answer", "text": "DaycareHub is a free online platform that helps parents and families find licensed daycare centers, preschools, and childcare programs across all 50 US states. Our directory includes 26,000+ facilities searchable by location, program type, age group, and subsidy acceptance."}},
        {"@@type": "Question", "name": "Is DaycareHub free to use?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes, DaycareHub is completely free for families. Our directory, guides, and subsidy information are all available at no cost. We believe finding quality childcare should be simple and affordable."}},
        {"@@type": "Question", "name": "Where does DaycareHub get its data?", "acceptedAnswer": {"@@type": "Answer", "text": "Our childcare center data comes from state licensing databases, Child Care Aware of America, and HHS/ACF (Administration for Children and Families). We update data regularly to ensure accuracy."}},
        {"@@type": "Question", "name": "Does DaycareHub accept payment from childcare centers?", "acceptedAnswer": {"@@type": "Answer", "text": "No. We do not accept payment from childcare centers for favorable listings, reviews, or placement in our directory. Our listings are based solely on licensing and location data from government sources."}},
        {"@@type": "Question", "name": "How can I find daycare near me?", "acceptedAnswer": {"@@type": "Answer", "text": "You can search by city, state, or ZIP code on our homepage. Browse by state at /states, or search by ZIP code for hyperlocal results. Filters let you narrow by age group, program type, and subsidy acceptance."}},
        {"@@type": "Question", "name": "Does DaycareHub help with childcare subsidies?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes. Our subsidies section covers CCAP (Child Care Assistance Program), Head Start, Early Head Start, and the Child and Dependent Care Tax Credit. We explain eligibility, income limits, and how to apply in each state."}}
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
            <p class="text-gray-700 text-lg leading-relaxed">DaycareHub is a <strong>free platform for US families</strong> searching for licensed daycare centers, preschools, and childcare programs. We index <strong>{{ number_format(\App\Models\Organization::count()) }}+ verified facilities</strong> across all 50 states, with filters by age group, program type, and subsidy acceptance. <strong>No registration, no fees, no sponsored rankings.</strong></p>
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
                    <li><a href="#data" class="text-emerald-700 hover:underline py-1 block">5. Our Data Sources</a></li>
                    <li><a href="#privacy" class="text-emerald-700 hover:underline py-1 block">6. Privacy & Trust</a></li>
                    <li><a href="#faq" class="text-emerald-700 hover:underline py-1 block">7. FAQ</a></li>
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
                <div class="text-sm mt-1" style="color:rgba(255,255,255,0.8)">Licensed Centers</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">50</div>
                <div class="text-sm mt-1" style="color:rgba(255,255,255,0.8)">US States</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">41k+</div>
                <div class="text-sm mt-1" style="color:rgba(255,255,255,0.8)">ZIP Codes Covered</div>
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
                <p class="text-gray-600 mb-4">In the US, <strong>over 11 million children under age 5</strong> are in some form of childcare every week. For working parents, finding a licensed, affordable, quality program is one of the most stressful decisions they face.</p>
                <p class="text-gray-600 mb-4">DaycareHub exists to simplify that search. We aggregate data from state licensing databases and federal sources into one searchable directory — so parents can compare programs by location, age group, type, and subsidy eligibility in minutes.</p>
                <p class="text-gray-600">Our platform is and always will be <strong>free to use</strong>. We believe finding safe, licensed childcare should never be harder than it has to be.</p>
            </div>
            <div class="space-y-6">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">What We Offer</h2>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Childcare Directory</h3>
                        <p class="text-gray-600 text-sm">Search {{ number_format(\App\Models\Organization::count()) }}+ licensed facilities by city, state, or ZIP code. Filter by age group (infant, toddler, preschool, school-age), program type, and more.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Subsidy & Financial Aid Guides</h3>
                        <p class="text-gray-600 text-sm">Clear guides on <a href="/subsidies" class="text-emerald-600 hover:underline">CCAP, Head Start, Early Head Start</a>, and the Child and Dependent Care Tax Credit — including state-by-state eligibility.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Parent Resources & Blog</h3>
                        <p class="text-gray-600 text-sm">Practical guides on choosing the right program, what questions to ask during tours, understanding licensing standards, and more.</p>
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
        <p class="text-gray-600 text-center max-w-3xl mx-auto mb-10">Finding childcare in the US is harder than it should be. Here's what parents are up against:</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl p-6 border border-red-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900">Fragmented Data</h3>
                </div>
                <p class="text-gray-600 text-sm">Childcare licensing data is spread across 50 different state databases with different formats. There's no single national directory — until now.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-red-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900">Confusing Subsidy Programs</h3>
                </div>
                <p class="text-gray-600 text-sm">CCAP, Head Start, CCDF — acronyms vary by state and income rules change yearly. Most parents don't know what they qualify for or how to apply.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-red-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900">No Easy Comparison</h3>
                </div>
                <p class="text-gray-600 text-sm">Parents can't quickly compare infant programs vs. preschool vs. home daycare in their ZIP code. DaycareHub lets you filter and compare in one place.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-red-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900">Outdated or Incomplete Listings</h3>
                </div>
                <p class="text-gray-600 text-sm">Many online directories show closed centers or missing phone numbers. We regularly sync with state licensing data to keep listings accurate.</p>
            </div>
        </div>

        <div class="mt-8 bg-emerald-50 rounded-xl border border-emerald-200 p-6 text-center">
            <p class="text-emerald-800 font-semibold">DaycareHub addresses all of these: <strong>unified data, plain-language subsidy guides, powerful filters, and regularly updated listings.</strong></p>
        </div>
    </div>
</section>

<!-- How DaycareHub Works -->
<section id="how-it-works" class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">How DaycareHub Works</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-10">Three steps to finding the right childcare — all free.</p>

        <div class="space-y-0">
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 rounded-full text-white flex items-center justify-center font-bold flex-shrink-0" style="background:#065f46">1</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900 text-lg">Search by Location</h3>
                    <p class="text-gray-600 text-sm mt-1">Enter your city, state, or ZIP code on the <a href="/" class="text-emerald-600 hover:underline">homepage</a>. Browse <a href="/facilities" class="text-emerald-600 hover:underline">all {{ number_format(\App\Models\Organization::count()) }}+ centers</a>, or go directly to your <a href="/states" class="text-emerald-600 hover:underline">state page</a> for a regional overview.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 rounded-full text-white flex items-center justify-center font-bold flex-shrink-0" style="background:#065f46">2</div>
                    <div class="w-0.5 bg-gray-200 flex-1 mt-1"></div>
                </div>
                <div class="pb-8">
                    <h3 class="font-bold text-gray-900 text-lg">Filter & Compare</h3>
                    <p class="text-gray-600 text-sm mt-1">Narrow results by <a href="/programs" class="text-emerald-600 hover:underline">program type</a> (infant care, toddler, preschool, school-age), facility type (center-based, home daycare, Head Start), and subsidy acceptance. Each profile shows contact info, licensing status, and age groups served.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 rounded-full text-white flex items-center justify-center font-bold flex-shrink-0" style="background:#065f46">3</div>
                </div>
                <div class="pb-2">
                    <h3 class="font-bold text-gray-900 text-lg">Check Financial Aid</h3>
                    <p class="text-gray-600 text-sm mt-1">Visit our <a href="/subsidies" class="text-emerald-600 hover:underline">subsidies page</a> to learn about CCAP, Head Start, and tax credits. Use the state filters to find programs that accept assistance in your area.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mid-page CTA -->
<section class="py-10">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-2xl p-8 text-center text-white" style="background:#065f46">
            <h2 class="text-2xl font-bold mb-3">Find Daycare Near You</h2>
            <p class="text-white mb-5 text-lg" style="opacity:0.9">Search licensed childcare centers in your area — free, instant, no registration required.</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="/facilities" class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                    Browse All Centers
                </a>
                <a href="/subsidies" class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-xl border-2 border-white text-white font-bold text-lg hover:bg-white hover:text-emerald-800 transition-colors">
                    Check Subsidies
                </a>
            </div>
        </div>
    </div>
</section>

<!-- How We're Different -->
<section id="different" class="py-14 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-3 text-center">How We're Different</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-10">Not all childcare directories are equal. Here's what sets DaycareHub apart:</p>

        <div class="hidden md:block overflow-x-auto rounded-xl border border-gray-200">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="text-left py-3 px-5 font-semibold text-gray-700"></th>
                        <th class="text-center py-3 px-5 font-bold" style="color:#065f46">DaycareHub</th>
                        <th class="text-center py-3 px-5 font-semibold text-gray-500">Generic Listings Sites</th>
                        <th class="text-center py-3 px-5 font-semibold text-gray-500">Paid Directories</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-100"><td class="py-3 px-5 text-gray-700">Free to use</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-gray-400">✓</td><td class="py-3 px-5 text-center text-gray-400">✓</td></tr>
                    <tr class="border-t border-gray-100 bg-emerald-50"><td class="py-3 px-5 text-gray-700 font-medium">No paid rankings</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-red-400">✗</td><td class="py-3 px-5 text-center text-red-400">✗</td></tr>
                    <tr class="border-t border-gray-100"><td class="py-3 px-5 text-gray-700">Government-verified licensing data</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-gray-400">Varies</td><td class="py-3 px-5 text-center text-gray-400">Varies</td></tr>
                    <tr class="border-t border-gray-100 bg-emerald-50"><td class="py-3 px-5 text-gray-700 font-medium">Subsidy eligibility guides</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-red-400">✗</td><td class="py-3 px-5 text-center text-red-400">✗</td></tr>
                    <tr class="border-t border-gray-100"><td class="py-3 px-5 text-gray-700">ZIP code search (41k+ ZIPs)</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-red-400">✗</td><td class="py-3 px-5 text-center text-gray-400">Limited</td></tr>
                    <tr class="border-t border-gray-100 bg-emerald-50"><td class="py-3 px-5 text-gray-700 font-medium">No registration required</td><td class="py-3 px-5 text-center text-emerald-600 font-bold">✓</td><td class="py-3 px-5 text-center text-gray-400">Varies</td><td class="py-3 px-5 text-center text-red-400">✗</td></tr>
                </tbody>
            </table>
        </div>

        <div class="md:hidden space-y-4">
            <div class="bg-white rounded-xl p-5 border border-emerald-200">
                <h3 class="font-bold text-emerald-800 mb-3">DaycareHub Advantages</h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> No paid rankings — pure licensing data</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Subsidy eligibility guides by state</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> ZIP code search (41k+ ZIPs)</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Government-verified licensing data</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> No registration, no fees</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Data Sources -->
<section id="data" class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Our Data Sources</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-50 rounded-xl p-5 border border-gray-100 flex gap-4 items-start">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0"><span class="font-bold text-blue-700 text-xs text-center leading-tight">HHS / ACF</span></div>
                <div><h3 class="font-bold text-gray-900">HHS Administration for Children & Families</h3><p class="text-gray-600 text-sm">Federal childcare licensing and subsidy program data from the Office of Child Care under ACF/HHS.</p></div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5 border border-gray-100 flex gap-4 items-start">
                <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center flex-shrink-0"><span class="font-bold text-green-700 text-xs text-center leading-tight">Child Care Aware</span></div>
                <div><h3 class="font-bold text-gray-900">Child Care Aware of America</h3><p class="text-gray-600 text-sm">National childcare statistics, affordability data, and state-by-state licensing standards from the country's leading childcare advocacy organization.</p></div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5 border border-gray-100 flex gap-4 items-start">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center flex-shrink-0"><span class="font-bold text-red-700 text-xs text-center leading-tight">State DBs</span></div>
                <div><h3 class="font-bold text-gray-900">State Licensing Databases</h3><p class="text-gray-600 text-sm">Direct data from all 50 state childcare licensing agencies, including facility name, address, license status, and capacity.</p></div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5 border border-gray-100 flex gap-4 items-start">
                <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center flex-shrink-0"><span class="font-bold text-purple-700 text-xs text-center leading-tight">IRS / CMS</span></div>
                <div><h3 class="font-bold text-gray-900">IRS & CMS</h3><p class="text-gray-600 text-sm">Child and Dependent Care Tax Credit rules, Medicaid childcare provisions, and CHIP eligibility information.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- Privacy & Trust -->
<section id="privacy" class="py-14 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Your Privacy Matters</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 border border-gray-100 text-center">
                <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">No Account Required</h3>
                <p class="text-gray-600 text-sm">Search and browse the entire directory without creating an account or sharing any personal information.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-100 text-center">
                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">HTTPS Encrypted</h3>
                <p class="text-gray-600 text-sm">Your connection is fully encrypted. We never sell or share user data with third parties.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-100 text-center">
                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">No Sponsored Rankings</h3>
                <p class="text-gray-600 text-sm">Centers cannot pay to rank higher. All listings are ordered by location relevance, not advertising budget.</p>
            </div>
        </div>
    </div>
</section>

<!-- Cross-links -->
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Start Exploring</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="/facilities" class="group bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 mb-2">Find Daycare Centers</h3>
                <p class="text-gray-600 text-sm">Search {{ number_format(\App\Models\Organization::count()) }}+ licensed facilities across all 50 states by location, age group, and type.</p>
            </a>
            <a href="/programs" class="group bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 mb-2">Compare Program Types</h3>
                <p class="text-gray-600 text-sm">Understand the difference between infant care, toddler programs, preschool, school-age care, Montessori, and more.</p>
            </a>
            <a href="/subsidies" class="group bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-all">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 mb-2">Check Financial Aid</h3>
                <p class="text-gray-600 text-sm">Learn about CCAP, Head Start, and tax credits. Find out if you qualify for childcare assistance in your state.</p>
            </a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-14 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
        <div class="space-y-3">
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What is DaycareHub?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">DaycareHub is a free online platform that helps families find licensed daycare centers, preschools, and childcare programs across all 50 US states. Our <a href="/facilities" class="text-emerald-600 hover:underline">directory</a> includes {{ number_format(\App\Models\Organization::count()) }}+ facilities searchable by location, program type, age group, and subsidy acceptance.</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Is DaycareHub really free?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Yes — 100% free. Our directory, guides, and <a href="/blog" class="text-emerald-600 hover:underline">blog</a> are available at no cost with no registration required.</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Where does DaycareHub get its data?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Childcare center data comes from state licensing databases, Child Care Aware of America, and HHS/ACF. Subsidy and financial aid information is sourced from IRS guidelines and CMS.</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">Do childcare centers pay to be listed?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">No. We do not accept payment from childcare centers for listings or rankings. All listings come directly from government licensing data and are ordered by location relevance only.</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">How do I find daycare near me?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">Search by city, state, or ZIP code on our <a href="/" class="text-emerald-600 hover:underline">homepage</a>. You can also browse <a href="/states" class="text-emerald-600 hover:underline">by state</a> or use our <a href="/facilities" class="text-emerald-600 hover:underline">full directory</a> with filters for age group, program type, and subsidy acceptance.</div></details>
            <details class="group bg-white rounded-xl border border-gray-100"><summary class="flex justify-between items-center cursor-pointer p-5 font-semibold text-gray-900">What childcare subsidies are available?<svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></summary><div class="px-5 pb-5 text-gray-600">The main federal programs are CCAP (Child Care Assistance Program), Head Start, Early Head Start, and the Child and Dependent Care Tax Credit. Eligibility and income limits vary by state — visit our <a href="/subsidies" class="text-emerald-600 hover:underline">subsidies page</a> for a full breakdown.</div></details>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-14 text-white" style="background:#065f46">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-3">Ready to Find Childcare?</h2>
        <p class="mb-6 text-lg" style="color:rgba(255,255,255,0.9)">Search licensed daycare centers and preschools near you — free and instant.</p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="/facilities" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                Browse Centers
            </a>
            <a href="/subsidies" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl border-2 border-white text-white font-bold text-lg hover:bg-white hover:text-emerald-800 transition-colors">
                Check Subsidies
            </a>
        </div>
        <p class="mt-4 text-sm" style="color:rgba(255,255,255,0.7)"><a href="/states" class="underline" style="color:rgba(255,255,255,0.9)">Browse by state</a> &bull; <a href="/programs" class="underline" style="color:rgba(255,255,255,0.9)">Program types</a> &bull; <a href="/blog" class="underline" style="color:rgba(255,255,255,0.9)">Parent guides</a></p>
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
