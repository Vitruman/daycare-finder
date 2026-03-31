@extends('layouts.app')

@section('title', "Daycare Centers Near ZIP {{ $zip }} — {{ $city }}, {{ $state }} | DaycareHub")
@php $metaTotal = $stats['total']; @endphp
@section('meta_description', "Find {$metaTotal} licensed daycare & childcare centers near ZIP code {$zip} in {$city}, {$state}. Compare programs, ages served, and get free guidance. All listings verified.")

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ config('app.url') }}"},
        {"@@type": "ListItem", "position": 2, "name": "States", "item": "{{ route('states.index') }}"},
        {"@@type": "ListItem", "position": 3, "name": "{{ $state }}", "item": "{{ url('/states/' . strtolower($state)) }}"},
        {"@@type": "ListItem", "position": 4, "name": "Daycare Near {{ $zip }}"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Daycare Centers Near ZIP {{ $zip }}",
    "description": "Licensed childcare providers near ZIP code {{ $zip }} in {{ $city }}, {{ $state }}",
    "numberOfItems": {{ $stats['total'] }},
    "itemListElement": [
        @foreach($centers->take(10) as $i => $c)
        {"@@type": "ListItem", "position": {{ $i + 1 }}, "name": "{{ addslashes(ucwords(strtolower($c->rehab_name))) }}", "url": "{{ route('facilities.show', $c) }}"}{{ $loop->last ? '' : ',' }}
        @endforeach
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "How many daycare centers are near ZIP code {{ $zip }}?", "acceptedAnswer": {"@@type": "Answer", "text": "There are {{ $stats['total'] }} licensed childcare centers in and around ZIP code {{ $zip }} in {{ $city }}, {{ $state }}. All are registered with state licensing authorities."}},
        {"@@type": "Question", "name": "What is the average cost of daycare near {{ $zip }}?", "acceptedAnswer": {"@@type": "Answer", "text": "Daycare costs near {{ $zip }} in {{ $state }} vary by program type. Full-time infant care typically runs $900–$1,800/month. Preschool programs average $600–$1,200/month. Many centers accept CCAP subsidies."}},
        {"@@type": "Question", "name": "Are the daycare centers near {{ $zip }} licensed?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes. All {{ $stats['total'] }} centers listed for ZIP {{ $zip }} hold active state childcare licenses. Listings are sourced directly from {{ $state }} state licensing databases."}},
        {"@@type": "Question", "name": "Does {{ $state }} offer childcare subsidies near {{ $zip }}?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes. {{ $state }} participates in the federal Child Care and Development Fund (CCDF). Families near {{ $zip }} may qualify for CCAP assistance based on income. Contact your local social services office or visit childcare.gov to apply."}},
        {"@@type": "Question", "name": "What age groups are served by daycares near {{ $zip }}?", "acceptedAnswer": {"@@type": "Answer", "text": "Centers near ZIP {{ $zip }} serve all age groups: infants (0–12 months), toddlers (1–3 years), preschool (3–5 years), and school-age (5+). {{ $stats['infant'] }} centers accept infants under 12 months."}},
        {"@@type": "Question", "name": "How do I choose the best daycare near {{ $zip }}?", "acceptedAnswer": {"@@type": "Answer", "text": "Visit at least 3 centers in person near {{ $zip }}. Check the staff-to-child ratio, inspect safety features, ask about curriculum, and verify their license is current. Download our free 30-point checklist at daycarehub.us/checklist."}},
        {"@@type": "Question", "name": "What is the staff-to-child ratio at daycares near {{ $zip }}?", "acceptedAnswer": {"@@type": "Answer", "text": "{{ $state }} requires specific staff-to-child ratios: 1:4 for infants, 1:6 for toddlers, 1:10 for preschoolers. Ask any center near {{ $zip }} for their current ratio before enrolling."}},
        {"@@type": "Question", "name": "Are there Head Start programs near ZIP {{ $zip }}?", "acceptedAnswer": {"@@type": "Answer", "text": "Head Start offers free, federally-funded early childhood programs for income-eligible families. Search our directory for Head Start centers near {{ $zip }} or visit headstart.gov to find local programs."}},
        {"@@type": "Question", "name": "Can I tour a daycare near {{ $zip }} before enrolling?", "acceptedAnswer": {"@@type": "Answer", "text": "Absolutely — and you should. Call ahead to schedule a tour at any center near {{ $zip }}. Use our 30-point tour checklist at daycarehub.us/checklist to evaluate each facility."}},
        {"@@type": "Question", "name": "What documents do I need to enroll in daycare near {{ $zip }}?", "acceptedAnswer": {"@@type": "Answer", "text": "Typical enrollment documents include: child's birth certificate, immunization records, emergency contact form, custody documentation (if applicable), and proof of income if applying for subsidies. Requirements vary by center."}}
    ]
}
</script>
@endsection

@section('content')
<div style="margin-top:64px;">

{{-- ═══════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════ --}}
<section style="background:linear-gradient(135deg,#065f46 0%,#047857 60%,#059669 100%);padding:48px 20px 40px;color:#fff;position:relative;overflow:hidden;">
    {{-- Background decoration --}}
    <div style="position:absolute;top:-60px;right:-60px;width:300px;height:300px;background:rgba(255,255,255,.04);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-40px;left:-40px;width:200px;height:200px;background:rgba(255,255,255,.04);border-radius:50%;pointer-events:none;"></div>

    <div style="max-width:1000px;margin:0 auto;position:relative;">
        {{-- Breadcrumb --}}
        <nav style="font-size:.8rem;color:rgba(255,255,255,.65);margin-bottom:20px;display:flex;align-items:center;gap:6px;flex-wrap:wrap;">
            <a href="/" style="color:rgba(255,255,255,.75);text-decoration:none;">Home</a>
            <span>›</span>
            <a href="/states" style="color:rgba(255,255,255,.75);text-decoration:none;">States</a>
            @if($state)
            <span>›</span>
            <a href="/states/{{ strtolower($state) }}" style="color:rgba(255,255,255,.75);text-decoration:none;">{{ $state }}</a>
            @endif
            <span>›</span>
            <span>ZIP {{ $zip }}</span>
        </nav>

        <h1 style="font-size:2rem;font-weight:800;margin:0 0 10px;line-height:1.2;">
            Daycare Centers Near ZIP <span style="background:rgba(255,255,255,.15);padding:2px 10px;border-radius:8px;">{{ $zip }}</span>
        </h1>
        <p style="font-size:1.05rem;color:rgba(255,255,255,.85);margin:0 0 28px;max-width:580px;">
            {{ ucwords(strtolower($city)) }}{{ $state ? ", $state" : "" }} — all licensed childcare centers, verified from official state registries.
        </p>

        {{-- Stats Row --}}
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(130px,1fr));gap:12px;max-width:600px;">
            <div style="background:rgba(255,255,255,.12);border-radius:14px;padding:14px 16px;text-align:center;backdrop-filter:blur(4px);">
                <div style="font-size:1.8rem;font-weight:800;line-height:1;">{{ $stats['total'] }}</div>
                <div style="font-size:.75rem;color:rgba(255,255,255,.75);margin-top:4px;">Total Centers</div>
            </div>
            <div style="background:rgba(255,255,255,.12);border-radius:14px;padding:14px 16px;text-align:center;backdrop-filter:blur(4px);">
                <div style="font-size:1.8rem;font-weight:800;line-height:1;">{{ $stats['infant'] }}</div>
                <div style="font-size:.75rem;color:rgba(255,255,255,.75);margin-top:4px;">Infant Programs</div>
            </div>
            <div style="background:rgba(255,255,255,.12);border-radius:14px;padding:14px 16px;text-align:center;backdrop-filter:blur(4px);">
                <div style="font-size:1.8rem;font-weight:800;line-height:1;">{{ $stats['preschool'] }}</div>
                <div style="font-size:.75rem;color:rgba(255,255,255,.75);margin-top:4px;">Preschool</div>
            </div>
            <div style="background:rgba(255,255,255,.12);border-radius:14px;padding:14px 16px;text-align:center;backdrop-filter:blur(4px);">
                <div style="font-size:1.8rem;font-weight:800;line-height:1;">✓</div>
                <div style="font-size:.75rem;color:rgba(255,255,255,.75);margin-top:4px;">State Licensed</div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     TRUST BAR
═══════════════════════════════════════════ --}}
<div style="background:#fff;border-bottom:1px solid #e5e7eb;padding:12px 20px;">
    <div style="max-width:1000px;margin:0 auto;display:flex;gap:24px;align-items:center;flex-wrap:wrap;justify-content:center;">
        <span style="font-size:.8rem;color:#6b7280;display:flex;align-items:center;gap:6px;">
            <span style="color:#059669;">✓</span> Official state registry data
        </span>
        <span style="font-size:.8rem;color:#6b7280;display:flex;align-items:center;gap:6px;">
            <span style="color:#059669;">✓</span> Active licenses only
        </span>
        <span style="font-size:.8rem;color:#6b7280;display:flex;align-items:center;gap:6px;">
            <span style="color:#059669;">✓</span> Free to search
        </span>
        <span style="font-size:.8rem;color:#6b7280;display:flex;align-items:center;gap:6px;">
            <span style="color:#059669;">✓</span> Updated regularly
        </span>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     CENTERS LIST
═══════════════════════════════════════════ --}}
<section style="background:#f9fafb;padding:32px 20px 48px;">
    <div style="max-width:1000px;margin:0 auto;">

        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;flex-wrap:wrap;gap:8px;">
            <h2 style="font-size:1.1rem;font-weight:700;color:#111;margin:0;">
                {{ $stats['total'] }} Licensed Centers Near {{ $zip }}
            </h2>
            <a href="/facilities?search={{ $zip }}" style="font-size:.82rem;color:#065f46;font-weight:600;text-decoration:none;">
                View all in search →
            </a>
        </div>

        @if($centers->count() > 0)
        <div style="display:flex;flex-direction:column;gap:12px;">
            @foreach($centers as $facility)
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:14px;padding:18px 20px;display:flex;gap:16px;align-items:flex-start;transition:all .15s;" onmouseover="this.style.borderColor='#065f46';this.style.boxShadow='0 4px 16px rgba(6,95,70,.08)'" onmouseout="this.style.borderColor='#e5e7eb';this.style.boxShadow='none'">
                {{-- Avatar --}}
                <div style="width:48px;height:48px;background:linear-gradient(135deg,#065f46,#059669);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#fff;font-size:1.2rem;font-weight:800;">
                    {{ strtoupper(substr($facility->rehab_name ?? 'D', 0, 1)) }}
                </div>
                {{-- Info --}}
                <div style="flex:1;min-width:0;">
                    <h3 style="font-size:.95rem;font-weight:700;color:#111;margin:0 0 4px;">
                        <a href="{{ route('facilities.show', $facility) }}" style="color:inherit;text-decoration:none;" onmouseover="this.style.color='#065f46'" onmouseout="this.style.color='#111'">
                            {{ ucwords(strtolower($facility->rehab_name)) }}
                        </a>
                    </h3>
                    <div style="font-size:.8rem;color:#6b7280;display:flex;align-items:center;gap:4px;margin-bottom:8px;flex-wrap:wrap;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        {{ ucwords(strtolower($facility->city)) }}, {{ $facility->state }}
                        @if($facility->zip) · {{ $facility->zip }}@endif
                        @if($facility->street1) · {{ ucwords(strtolower($facility->street1)) }}@endif
                    </div>
                    <div style="display:flex;gap:6px;flex-wrap:wrap;">
                        @if($facility->age_range)
                        <span style="background:#f0fdf4;color:#065f46;padding:3px 8px;border-radius:8px;font-size:.72rem;font-weight:600;">{{ $facility->age_range }}</span>
                        @endif
                        @if($facility->program_type)
                        <span style="background:#f3f4f6;color:#374151;padding:3px 8px;border-radius:8px;font-size:.72rem;font-weight:600;">{{ $facility->program_type }}</span>
                        @endif
                        @if($facility->max_capacity)
                        <span style="background:#eff6ff;color:#2563eb;padding:3px 8px;border-radius:8px;font-size:.72rem;font-weight:600;">Cap: {{ $facility->max_capacity }}</span>
                        @endif
                        <span style="background:#f0fdf4;color:#065f46;padding:3px 8px;border-radius:8px;font-size:.72rem;font-weight:600;">✓ Licensed</span>
                    </div>
                </div>
                {{-- Actions --}}
                <div style="display:flex;gap:8px;flex-shrink:0;flex-wrap:wrap;">
                    <a href="{{ route('facilities.show', $facility) }}" style="padding:8px 18px;background:#065f46;color:#fff;border-radius:8px;font-size:.8rem;font-weight:700;text-decoration:none;white-space:nowrap;">View Profile</a>
                    @if($facility->phone)
                    <a href="tel:{{ $facility->phone }}" style="padding:8px 14px;background:#fff;color:#065f46;border:1px solid #065f46;border-radius:8px;font-size:.8rem;font-weight:700;text-decoration:none;display:flex;align-items:center;gap:4px;white-space:nowrap;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81 19.79 19.79 0 01.22 2.18 2 2 0 012.18 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.16 6.16l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        Call
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        @else
        {{-- Empty State --}}
        <div style="background:#fff;border:1px solid #e5e7eb;border-radius:16px;padding:48px 20px;text-align:center;">
            <div style="font-size:3rem;margin-bottom:14px;">🔍</div>
            <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:0 0 8px;">No centers found for ZIP {{ $zip }}</h3>
            <p style="color:#6b7280;font-size:.9rem;margin:0 0 20px;">Try searching nearby ZIPs or browse by state.</p>
            <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
                <a href="/facilities" style="padding:10px 22px;background:#065f46;color:#fff;border-radius:10px;font-size:.88rem;font-weight:700;text-decoration:none;">Browse All Centers</a>
                <a href="/states" style="padding:10px 22px;background:#fff;color:#065f46;border:1px solid #065f46;border-radius:10px;font-size:.88rem;font-weight:700;text-decoration:none;">Browse by State</a>
            </div>
        </div>
        @endif

    </div>
</section>

{{-- ═══════════════════════════════════════════
     CONTENT SECTION (SEO — Матрёшка)
═══════════════════════════════════════════ --}}
<section style="background:#fff;padding:40px 20px;border-top:1px solid #e5e7eb;">
    <div style="max-width:780px;margin:0 auto;">

        <h2 style="font-size:1.35rem;font-weight:800;color:#111;margin:0 0 12px;">Finding Daycare Near ZIP {{ $zip }} in {{ ucwords(strtolower($city)) }}, {{ $state }}</h2>
        <p style="color:#374151;font-size:.95rem;line-height:1.7;margin:0 0 16px;">
            ZIP code {{ $zip }} has <strong>{{ $stats['total'] }} licensed childcare providers</strong> registered with {{ $state }} state authorities — including infant care, toddler programs, preschools, and school-age centers. All listings are sourced directly from official state licensing databases and hold active permits.
        </p>
        <p style="color:#374151;font-size:.95rem;line-height:1.7;margin:0 0 32px;">
            When comparing daycare centers near {{ $zip }}, focus on four key factors: staff-to-child ratio, curriculum approach, safety inspection history, and whether the center accepts your subsidy or insurance. Use our <a href="/checklist" style="color:#065f46;font-weight:600;">30-point tour checklist</a> before making a decision.
        </p>

        {{-- What to Expect Section --}}
        <h2 style="font-size:1.2rem;font-weight:800;color:#111;margin:0 0 16px;">What to Expect from Daycare in {{ $state }} Near {{ $zip }}</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px;margin-bottom:32px;">
            <div style="background:#f0fdf4;border-radius:12px;padding:18px;">
                <div style="font-size:1.5rem;margin-bottom:8px;">🍼</div>
                <h3 style="font-size:.9rem;font-weight:700;color:#065f46;margin:0 0 6px;">Infant Care (0–12 mo)</h3>
                <p style="font-size:.82rem;color:#374151;margin:0;line-height:1.6;">{{ $state }} requires a 1:4 ratio for infants. {{ $stats['infant'] }} centers near {{ $zip }} accept infants under 12 months. Expect $900–$1,600/month.</p>
            </div>
            <div style="background:#f0fdf4;border-radius:12px;padding:18px;">
                <div style="font-size:1.5rem;margin-bottom:8px;">🧒</div>
                <h3 style="font-size:.9rem;font-weight:700;color:#065f46;margin:0 0 6px;">Toddler Programs (1–3 yrs)</h3>
                <p style="font-size:.82rem;color:#374151;margin:0;line-height:1.6;">1:6 staff ratio required in {{ $state }}. Focus on language development, motor skills, and socialization. Average cost: $700–$1,200/month.</p>
            </div>
            <div style="background:#f0fdf4;border-radius:12px;padding:18px;">
                <div style="font-size:1.5rem;margin-bottom:8px;">🎒</div>
                <h3 style="font-size:.9rem;font-weight:700;color:#065f46;margin:0 0 6px;">Preschool (3–5 yrs)</h3>
                <p style="font-size:.82rem;color:#374151;margin:0;line-height:1.6;">{{ $stats['preschool'] }} preschool programs near {{ $zip }}. Look for kindergarten-readiness curriculum. Many qualify for Head Start or state Pre-K funding.</p>
            </div>
            <div style="background:#f0fdf4;border-radius:12px;padding:18px;">
                <div style="font-size:1.5rem;margin-bottom:8px;">📚</div>
                <h3 style="font-size:.9rem;font-weight:700;color:#065f46;margin:0 0 6px;">School-Age (5+)</h3>
                <p style="font-size:.82rem;color:#374151;margin:0;line-height:1.6;">Before/after school and summer programs. Often cheaper than full-day care. Check if centers near {{ $zip }} offer transportation from local schools.</p>
            </div>
        </div>

        {{-- Subsidies Section --}}
        <div style="background:#f0fdf4;border:1px solid #d1fae5;border-radius:14px;padding:24px;margin-bottom:32px;">
            <h2 style="font-size:1.1rem;font-weight:800;color:#065f46;margin:0 0 12px;">💰 Childcare Subsidies Near {{ $zip }}</h2>
            <p style="color:#374151;font-size:.88rem;line-height:1.7;margin:0 0 12px;">
                <strong>{{ $state }} participates in the federal CCAP program</strong> (Child Care Assistance Program), which can cover up to 90% of childcare costs for eligible families near {{ $zip }}. Income limits and waitlists vary by county.
            </p>
            <ul style="color:#374151;font-size:.88rem;line-height:1.8;margin:0 0 16px;padding-left:20px;">
                <li><strong>CCAP / CCDF</strong> — Federal block grant, applied through {{ $state }} social services</li>
                <li><strong>Head Start</strong> — Free federally-funded program for income-eligible families</li>
                <li><strong>Child & Dependent Care Tax Credit</strong> — Up to $3,000/year federal credit</li>
                <li><strong>Dependent Care FSA</strong> — Pre-tax savings, up to $5,000/year through employer</li>
                <li><strong>State Pre-K</strong> — Free half-day or full-day preschool (ages 4–5)</li>
            </ul>
            <a href="/subsidies" style="display:inline-block;padding:10px 20px;background:#065f46;color:#fff;border-radius:8px;font-size:.85rem;font-weight:700;text-decoration:none;">Learn About Subsidies →</a>
        </div>

        {{-- How to Choose --}}
        <h2 style="font-size:1.2rem;font-weight:800;color:#111;margin:0 0 16px;">How to Choose Daycare Near {{ $zip }} — 5 Steps</h2>
        <ol style="color:#374151;font-size:.9rem;line-height:1.9;margin:0 0 32px;padding-left:20px;">
            <li><strong>Define your needs</strong> — Age of child, full-time vs part-time, budget, schedule</li>
            <li><strong>Search and shortlist</strong> — Use this directory to find all {{ $stats['total'] }} licensed centers near {{ $zip }}</li>
            <li><strong>Call ahead</strong> — Confirm openings, tour availability, and whether they accept your subsidy</li>
            <li><strong>Tour at least 3 centers</strong> — Use our <a href="/checklist" style="color:#065f46;font-weight:600;">30-point checklist</a> to evaluate each one</li>
            <li><strong>Check license status</strong> — Verify on {{ $state }}'s official licensing portal before enrolling</li>
        </ol>

        {{-- Cost Calculator CTA --}}
        <div style="background:linear-gradient(135deg,#065f46,#059669);border-radius:14px;padding:24px;margin-bottom:40px;color:#fff;">
            <h3 style="font-size:1rem;font-weight:800;margin:0 0 8px;">🧮 Estimate Your Childcare Cost Near {{ $zip }}</h3>
            <p style="font-size:.85rem;color:rgba(255,255,255,.85);margin:0 0 16px;line-height:1.6;">Use our free calculator to see average daycare costs in {{ $state }} by age group and program type — plus estimate your subsidy savings.</p>
            <a href="/childcare-cost" style="display:inline-block;padding:10px 22px;background:#fff;color:#065f46;border-radius:8px;font-size:.85rem;font-weight:800;text-decoration:none;">Open Cost Calculator →</a>
        </div>

        {{-- Cross-links --}}
        <div style="border-top:1px solid #e5e7eb;padding-top:28px;">
            <h3 style="font-size:1rem;font-weight:700;color:#111;margin:0 0 14px;">Related Resources</h3>
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:10px;">
                <a href="/states/{{ strtolower($state) }}" style="padding:12px 16px;background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;font-size:.84rem;font-weight:600;color:#065f46;text-decoration:none;" onmouseover="this.style.borderColor='#065f46'" onmouseout="this.style.borderColor='#e5e7eb'">All Centers in {{ $state }} →</a>
                <a href="/subsidies" style="padding:12px 16px;background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;font-size:.84rem;font-weight:600;color:#065f46;text-decoration:none;" onmouseover="this.style.borderColor='#065f46'" onmouseout="this.style.borderColor='#e5e7eb'">Childcare Subsidies →</a>
                <a href="/checklist" style="padding:12px 16px;background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;font-size:.84rem;font-weight:600;color:#065f46;text-decoration:none;" onmouseover="this.style.borderColor='#065f46'" onmouseout="this.style.borderColor='#e5e7eb'">Tour Checklist (30 Q) →</a>
                <a href="/childcare-cost" style="padding:12px 16px;background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;font-size:.84rem;font-weight:600;color:#065f46;text-decoration:none;" onmouseover="this.style.borderColor='#065f46'" onmouseout="this.style.borderColor='#e5e7eb'">Cost Calculator →</a>
                <a href="/childcare-safety" style="padding:12px 16px;background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;font-size:.84rem;font-weight:600;color:#065f46;text-decoration:none;" onmouseover="this.style.borderColor='#065f46'" onmouseout="this.style.borderColor='#e5e7eb'">Safety Guide →</a>
                <a href="/facilities" style="padding:12px 16px;background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;font-size:.84rem;font-weight:600;color:#065f46;text-decoration:none;" onmouseover="this.style.borderColor='#065f46'" onmouseout="this.style.borderColor='#e5e7eb'">Search All Centers →</a>
            </div>
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════
     FAQ SECTION
═══════════════════════════════════════════ --}}
<section style="background:#f9fafb;padding:40px 20px;border-top:1px solid #e5e7eb;">
    <div style="max-width:780px;margin:0 auto;">
        <h2 style="font-size:1.25rem;font-weight:800;color:#111;margin:0 0 24px;">Frequently Asked Questions — Daycare Near {{ $zip }}</h2>

        @php
        $cityTitle = ucwords(strtolower($city));
        $faqs = [
            ["How many daycare centers are near ZIP code {$zip}?", "There are {$stats['total']} licensed childcare centers in and around ZIP code {$zip} in {$cityTitle}, {$state}. All hold active state licenses and are sourced from official {$state} licensing databases."],
            ["What is the average cost of daycare near {$zip}?", "Daycare costs near {$zip} in {$state} vary by age group: infant care runs \$900–\$1,800/month, toddler programs \$700–\$1,200/month, and preschool \$600–\$1,100/month. Many centers accept CCAP subsidies that can reduce costs by 50–90% for eligible families."],
            ["Are the daycare centers near {$zip} licensed?", "Yes. All {$stats['total']} centers listed for ZIP {$zip} hold active {$state} childcare licenses. Listings are sourced directly from the {$state} state licensing database. You can verify any center's license at your state's childcare licensing portal."],
            ["Does {$state} offer childcare subsidies near {$zip}?", "{$state} participates in the federal Child Care and Development Fund (CCDF). Families near {$zip} may qualify for CCAP assistance based on income. Contact your local social services office or visit childcare.gov to apply. Head Start offers free care for income-eligible families."],
            ["What age groups are served by daycares near {$zip}?", "Centers near ZIP {$zip} serve all age groups: infants (0–12 months) — {$stats['infant']} centers; toddlers (1–3 years); preschool (3–5 years) — {$stats['preschool']} programs; and school-age (5+). Call each center to confirm current openings."],
            ["How do I choose the best daycare near {$zip}?", "Visit at least 3 centers in person near {$zip}. Check staff-to-child ratios, safety features, curriculum, and verify the license is current. Download our free 30-point tour checklist at daycarehub.us/checklist to evaluate each facility systematically."],
            ["What is the staff-to-child ratio at daycares near {$zip}?", "{$state} requires specific ratios: 1:4 for infants, 1:6 for toddlers, 1:10 for preschoolers. Always ask any center near {$zip} for their current ratio before enrolling — lower ratios mean more individual attention for your child."],
            ["Are there Head Start programs near ZIP {$zip}?", "Head Start offers free, federally-funded early childhood programs for income-eligible families. Use our search to find Head Start centers near {$zip}, or visit headstart.gov to find and apply for local programs."],
            ["Can I tour a daycare near {$zip} before enrolling?", "Yes — and you should always tour before enrolling. Call ahead to schedule a visit at any center near {$zip}. Use our 30-point checklist at daycarehub.us/checklist to ask the right questions during your tour."],
            ["What documents do I need to enroll in daycare near {$zip}?", "Typical enrollment requirements: child's birth certificate, up-to-date immunization records, emergency contact form, custody documentation if applicable, and proof of income if applying for CCAP subsidies. Requirements vary by center — call ahead to confirm."],
        ];
        @endphp
        @foreach($faqs as [$q, $a])
        <details style="border-bottom:1px solid #e5e7eb;padding:16px 0;" onopen="this.style.paddingBottom='20px'" onclose="this.style.paddingBottom='16px'">
            <summary style="font-size:.95rem;font-weight:700;color:#111;cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;gap:12px;">
                {{ $q }}
                <svg style="width:18px;height:18px;flex-shrink:0;color:#065f46;transition:transform .2s;" class="seo-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6,9 12,15 18,9"/></svg>
            </summary>
            <p style="font-size:.9rem;color:#374151;line-height:1.7;margin:12px 0 0;padding-right:30px;">{{ $a }}</p>
        </details>
        <style>details[open] .seo-chevron{transform:rotate(180deg)} details summary::-webkit-details-marker{display:none}</style>
        @endforeach
    </div>
</section>

{{-- ═══════════════════════════════════════════
     LAST UPDATED
═══════════════════════════════════════════ --}}
<div style="background:#fff;border-top:1px solid #e5e7eb;padding:14px 20px;text-align:center;">
    <p style="font-size:.78rem;color:#9ca3af;margin:0;">
        Last updated: {{ date('F j, Y') }} · Data sourced from official {{ $state }} childcare licensing database · 
        <a href="/privacy-policy" style="color:#9ca3af;">Privacy Policy</a>
    </p>
</div>

</div>
@endsection