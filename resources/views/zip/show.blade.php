@extends('layouts.app')

@php $metaTotal = $stats['total']; @endphp
@section('title', "Daycare Centers Near ZIP {{ $zip }} — {{ $cityTitle }}, {{ $state }} | DaycareHub")
@section('meta_description', "Find {$metaTotal} licensed daycare & childcare centers near ZIP {$zip} in " . $cityTitle . ", {$state}. Compare programs, costs, and subsidies. Free, verified listings.")

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
    "numberOfItems": {{ $stats['total'] }},
    "itemListElement": [
        @foreach($centers->take(10) as $i => $c)
        {"@@type": "ListItem", "position": {{ $i + 1 }}, "name": "{{ addslashes(ucwords(strtolower($c->rehab_name))) }}", "url": "{{ route('facilities.show', $c) }}"}{{ $loop->last ? '' : ',' }}
        @endforeach
    ]
}
</script>
@php
$cityTitle = $cityTitle;
$faqs = [
    ["How many daycare centers are near ZIP code {$zip}?", "There are {$stats['total']} licensed childcare centers in and around ZIP {$zip} in {$cityTitle}, {$state}. All hold active state licenses sourced from official {$state} licensing databases."],
    ["What is the average cost of daycare near {$zip}?", "Daycare costs near {$zip} in {$state}: infant care \$900–\$1,800/month; toddler programs \$700–\$1,200/month; preschool \$600–\$1,100/month. CCAP subsidies can reduce costs by 50–90% for eligible families."],
    ["Are the daycare centers near {$zip} licensed?", "Yes — all {$stats['total']} centers listed for ZIP {$zip} hold active {$state} childcare licenses, sourced directly from the official state licensing database."],
    ["Does {$state} offer childcare subsidies near {$zip}?", "{$state} participates in the federal CCDF program. Families near {$zip} may qualify for CCAP assistance based on income. Visit childcare.gov or your local social services office to apply."],
    ["What age groups are served by daycares near {$zip}?", "Centers near {$zip} serve: infants (0–12 mo) — {$stats['infant']} centers; toddlers (1–3 yrs); preschool (3–5 yrs) — {$stats['preschool']} programs; school-age (5+). Call ahead to confirm openings."],
    ["How do I choose the best daycare near {$zip}?", "Visit at least 3 centers near {$zip}, check staff ratios, safety features, and curriculum. Use our free 30-point checklist at /checklist before enrolling."],
    ["What is the staff-to-child ratio at daycares near {$zip}?", "{$state} requires: 1:4 for infants, 1:6 for toddlers, 1:10 for preschoolers. Always confirm the current ratio before enrolling at any center near {$zip}."],
    ["Are there Head Start programs near ZIP {$zip}?", "Head Start offers free federally-funded programs for income-eligible families. Search 'Head Start' in our directory for {$zip} or visit headstart.gov."],
    ["Can I tour a daycare near {$zip} before enrolling?", "Yes — and you should. Call ahead to schedule a tour at any center near {$zip}. Use our 30-point checklist at /checklist to evaluate each facility."],
    ["What documents do I need to enroll in daycare near {$zip}?", "Typical requirements: birth certificate, immunization records, emergency contacts, custody docs if applicable, and proof of income for subsidies. Confirm with each center near {$zip}."],
];
@endphp
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        @foreach($faqs as $i => [$q, $a])
        {"@@type": "Question", "name": {{ json_encode($q) }}, "acceptedAnswer": {"@@type": "Answer", "text": {{ json_encode($a) }}}}{{ $i < count($faqs)-1 ? ',' : '' }}
        @endforeach
    ]
}
</script>
@include("components.read-also")
@endsection

@section('content')
@include("components.breadcrumbs")
<style>
/* Скрыть горизонтальный скролл */
body { overflow-x: hidden; }
/* Монетизационные блоки */
.mono-banner { background: linear-gradient(135deg,#1d4ed8,#3b82f6); border-radius: 16px; padding: 24px; color: #fff; display: flex; align-items: center; gap: 20px; margin: 24px 0; }
.mono-banner__icon { width: 56px; height: 56px; background: rgba(255,255,255,.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; }
.mono-banner__btn { padding: 11px 22px; background: #fff; color: #1d4ed8; border-radius: 10px; font-size: .88rem; font-weight: 800; text-decoration: none; white-space: nowrap; transition: all .15s; display: inline-block; }
.mono-banner__btn:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,.15); }
/* FAQ accordion */
details[open] .faq-chevron { transform: rotate(180deg); }
details summary::-webkit-details-marker { display: none; }
/* Card hover */
.center-card { background: #fff; border: 1.5px solid #e5e7eb; border-radius: 16px; padding: 20px; display: flex; gap: 16px; align-items: flex-start; transition: all .2s; cursor: default; }
.center-card:hover { border-color: #065f46; box-shadow: 0 6px 20px rgba(6,95,70,.1); transform: translateY(-2px); }
/* Sponsored badge */
.sponsored { font-size: .68rem; font-weight: 700; color: #9ca3af; letter-spacing: .5px; text-transform: uppercase; }
</style>

<div style="margin-top:64px;">

{{-- ═══════════════════════ HERO ═══════════════════════ --}}
<section style="background:linear-gradient(135deg,#064e3b 0%,#065f46 60%,#047857 100%);padding:36px 20px 32px;color:#fff;position:relative;overflow:hidden;">
    <div style="position:absolute;top:-100px;right:-100px;width:400px;height:400px;background:rgba(255,255,255,.03);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-60px;left:-40px;width:220px;height:220px;background:rgba(255,255,255,.03);border-radius:50%;pointer-events:none;"></div>

    <div style="max-width:1000px;margin:0 auto;position:relative;">
        {{-- Breadcrumb --}}
        

        {{-- Main row: title left, stats right --}}
        <div style="display:flex;align-items:center;justify-content:space-between;gap:32px;flex-wrap:wrap;">
            <div style="flex:1;min-width:260px;">
                <h1 style="font-size:1.8rem;font-weight:800;margin:0 0 8px;line-height:1.2;">
                    Daycare Centers Near ZIP <span style="color:#6ee7b7;">{{ $zip }}</span>
                </h1>
                <p style="font-size:.9rem;color:rgba(255,255,255,.78);margin:0 0 20px;line-height:1.5;">
                    {{ $cityTitle }}, {{ $state }} · {{ $stats["total"] }} licensed centers · Free, no signup
                </p>
                {{-- CTA Button - акцент --}}
                <a href="/facilities?search={{ $zip }}"
                   style="display:inline-flex;align-items:center;gap:8px;padding:13px 28px;background:#fff;color:#065f46;border-radius:10px;font-size:.92rem;font-weight:800;text-decoration:none;box-shadow:0 6px 20px rgba(0,0,0,.25),0 2px 6px rgba(0,0,0,.15);transition:all .2s;letter-spacing:-.2px;"
                   onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 24px rgba(0,0,0,.3)'"
                   onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 16px rgba(0,0,0,.2)'" >
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#065f46" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                    Search & Filter Centers
                </a>
            </div>

            {{-- Stats — горизонтально, компактно --}}
            <div style="display:flex;gap:16px;flex-wrap:wrap;">
                <div style="text-align:center;padding:16px 20px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.15);border-radius:14px;min-width:90px;">
                    <div style="font-size:1.8rem;font-weight:800;line-height:1;">{{ $stats['total'] }}</div>
                    <div style="font-size:.7rem;color:rgba(255,255,255,.65);margin-top:4px;font-weight:500;">Centers</div>
                </div>
                <div style="text-align:center;padding:16px 20px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.15);border-radius:14px;min-width:90px;">
                    <div style="font-size:1.8rem;font-weight:800;line-height:1;">{{ $stats['infant'] }}</div>
                    <div style="font-size:.7rem;color:rgba(255,255,255,.65);margin-top:4px;font-weight:500;">Infant Care</div>
                </div>
                <div style="text-align:center;padding:16px 20px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.15);border-radius:14px;min-width:90px;">
                    <div style="font-size:1.8rem;font-weight:800;line-height:1;">{{ $stats['preschool'] }}</div>
                    <div style="font-size:.7rem;color:rgba(255,255,255,.65);margin-top:4px;font-weight:500;">Preschool</div>
                </div>
                <div style="text-align:center;padding:16px 20px;background:rgba(16,185,129,.2);border:1px solid rgba(16,185,129,.35);border-radius:14px;min-width:90px;">
                    <div style="font-size:1.3rem;font-weight:800;line-height:1;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#6ee7b7" stroke-width="2.8"><polyline points="20,6 9,17 4,12"/></svg>
                    </div>
                    <div style="font-size:.7rem;color:rgba(255,255,255,.75);margin-top:4px;font-weight:600;">Verified</div>
                </div>
            </div>
        </div>

        {{-- Care.com монетизация --}}
        <div style="margin-top:20px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:12px;padding:12px 18px;display:flex;align-items:center;justify-content:space-between;gap:14px;flex-wrap:wrap;">
            <div style="display:flex;align-items:center;gap:10px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.8)" stroke-width="2"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2a7 7 0 00-4 12.74V17h8v-2.26A7 7 0 0012 2z"/></svg>
                <span style="font-size:.82rem;color:rgba(255,255,255,.8);"><strong style="color:#fff;">Need a backup plan?</strong> Background-checked sitters & home daycares near {{ $zip }}</span>
            </div>
            <a href="https://www.care.com/childcare" target="_blank" rel="nofollow"
               style="padding:8px 18px;background:#fff;color:#065f46;border-radius:8px;font-size:.82rem;font-weight:800;text-decoration:none;white-space:nowrap;flex-shrink:0;transition:all .15s;"
               onmouseover="this.style.transform='translateY(-1px)'" onmouseout="this.style.transform='none'" >
                Browse Care.com →
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════ TRUST BAR ═══════════════════════ --}}
<div style="background:#f0fdf4;border-bottom:1px solid #d1fae5;padding:12px 20px;">
    <div style="max-width:1000px;margin:0 auto;display:flex;gap:20px;align-items:center;flex-wrap:wrap;justify-content:center;">
        @foreach(['<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 10v11M12 10v11M16 10v11"/></svg> Official state registry data', '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5" style="display:inline;vertical-align:middle;"><polyline points="20,6 9,17 4,12"/></svg> Active licenses only', '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 9.9-1"/></svg> Free to search', '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><polyline points="23,4 23,10 17,10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg> Updated regularly'] as $item)
        <span style="font-size:.8rem;color:#065f46;font-weight:600;display:flex;align-items:center;gap:5px;">{!! $item !!}</span>
        @endforeach
    </div>
</div>

{{-- ═══════════════════════ MAIN CONTENT ═══════════════════════ --}}
<section style="background:#f9fafb;padding:32px 20px 48px;">
    <div style="max-width:1000px;margin:0 auto;">

        {{-- Section header --}}
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;flex-wrap:wrap;gap:10px;">
            <div>
                <h2 style="font-size:1.15rem;font-weight:800;color:#111;margin:0 0 2px;">{{ $stats['total'] }} Licensed Centers Near {{ $zip }}</h2>
                <p style="font-size:.8rem;color:#6b7280;margin:0;">{{ $cityTitle }}{{ $state ? ", $state" : "" }} · Verified from official state registry</p>
            </div>
            <a href="/facilities?search={{ $zip }}" style="font-size:.82rem;color:#065f46;font-weight:700;text-decoration:none;display:flex;align-items:center;gap:4px;padding:8px 14px;border:1.5px solid #065f46;border-radius:8px;" onmouseover="this.style.background='#065f46';this.style.color='#fff'" onmouseout="this.style.background='transparent';this.style.color='#065f46'">
                Search & Filter
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg>
            </a>
        </div>

        @if($centers->count() > 0)
        <div style="display:flex;flex-direction:column;gap:10px;">
            @foreach($centers as $idx => $facility)

            {{-- Care.com affiliate banner после 3-й карточки --}}
            @if($idx === 3)
            <div style="background:linear-gradient(135deg,#1d4ed8 0%,#3b82f6 100%);border-radius:16px;padding:20px 24px;display:flex;align-items:center;gap:20px;flex-wrap:wrap;">
                <div style="width:52px;height:52px;background:rgba(255,255,255,.15);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.6rem;flex-shrink:0;">👶</div>
                <div style="flex:1;min-width:200px;">
                    <div style="font-size:.7rem;font-weight:700;color:rgba(255,255,255,.6);text-transform:uppercase;letter-spacing:.5px;margin-bottom:4px;">Sponsored</div>
                    <div style="font-size:.95rem;font-weight:700;color:#fff;margin-bottom:4px;">Need a backup childcare plan?</div>
                    <div style="font-size:.82rem;color:rgba(255,255,255,.8);">Find trusted babysitters & nannies near {{ $zip }} on Care.com — background-checked, reviewed by parents.</div>
                </div>
                <a href="https://www.care.com/childcare" target="_blank" rel="nofollow" style="padding:12px 22px;background:#fff;color:#1d4ed8;border-radius:10px;font-size:.88rem;font-weight:800;text-decoration:none;white-space:nowrap;transition:all .15s;flex-shrink:0;" onmouseover="this.style.transform='translateY(-1px)';this.style.boxShadow='0 4px 12px rgba(0,0,0,.2)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                    Find on Care.com →
                </a>
            </div>
            @endif

            <div class="center-card">
                {{-- Avatar с цветовым разнообразием --}}
                @php
                    $letter = strtoupper(substr($facility->rehab_name ?? 'D', 0, 1));
                    $avatarColors = [
                        'A'=>'135deg,#065f46,#059669','B'=>'135deg,#1d4ed8,#3b82f6',
                        'C'=>'135deg,#7c3aed,#a855f7','D'=>'135deg,#c2410c,#f97316',
                        'E'=>'135deg,#0e7490,#06b6d4','F'=>'135deg,#be185d,#ec4899',
                        'G'=>'135deg,#065f46,#059669','H'=>'135deg,#1d4ed8,#3b82f6',
                        'I'=>'135deg,#7c3aed,#a855f7','J'=>'135deg,#c2410c,#f97316',
                        'K'=>'135deg,#0e7490,#06b6d4','L'=>'135deg,#be185d,#ec4899',
                        'M'=>'135deg,#065f46,#059669','N'=>'135deg,#1d4ed8,#3b82f6',
                        'O'=>'135deg,#7c3aed,#a855f7','P'=>'135deg,#c2410c,#f97316',
                        'Q'=>'135deg,#0e7490,#06b6d4','R'=>'135deg,#be185d,#ec4899',
                        'S'=>'135deg,#065f46,#059669','T'=>'135deg,#1d4ed8,#3b82f6',
                        'U'=>'135deg,#7c3aed,#a855f7','V'=>'135deg,#c2410c,#f97316',
                        'W'=>'135deg,#0e7490,#06b6d4','X'=>'135deg,#be185d,#ec4899',
                        'Y'=>'135deg,#065f46,#059669','Z'=>'135deg,#1d4ed8,#3b82f6',
                    ];
                    $grad = $avatarColors[$letter] ?? '135deg,#065f46,#059669';
                @endphp
                <div style="width:52px;height:52px;background:linear-gradient({{ $grad }});border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#fff;font-size:1.3rem;font-weight:800;box-shadow:0 4px 12px rgba(0,0,0,.18);">
                    {{ $letter }}
                </div>
                {{-- Info --}}
                <div style="flex:1;min-width:0;">
                    <h3 style="font-size:.95rem;font-weight:700;color:#111;margin:0 0 5px;">
                        <a href="{{ route('facilities.show', $facility) }}" style="color:inherit;text-decoration:none;" onmouseover="this.style.color='#065f46'" onmouseout="this.style.color='#111'">
                            {{ ucwords(strtolower($facility->rehab_name)) }}
                        </a>
                    </h3>
                    <div style="font-size:.8rem;color:#6b7280;display:flex;align-items:center;gap:4px;margin-bottom:10px;flex-wrap:wrap;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        {{ ucwords(strtolower($facility->city)) }}, {{ $facility->state }}
                        @if($facility->zip) · {{ $facility->zip }}@endif
                        @if($facility->street1) · {{ ucwords(strtolower($facility->street1)) }}@endif
                    </div>
                    <div style="display:flex;gap:6px;flex-wrap:wrap;">
                        @if($facility->age_range)
                        <span style="background:#f0fdf4;color:#065f46;padding:4px 10px;border-radius:20px;font-size:.72rem;font-weight:700;">
                            👶 {{ $facility->age_range }}
                        </span>
                        @endif
                        @if($facility->program_type)
                        <span style="background:#eff6ff;color:#2563eb;padding:4px 10px;border-radius:20px;font-size:.72rem;font-weight:700;">
                            {{ ucwords(strtolower($facility->program_type)) }}
                        </span>
                        @endif
                        @if($facility->max_capacity)
                        <span style="background:#faf5ff;color:#7c3aed;padding:4px 10px;border-radius:20px;font-size:.72rem;font-weight:700;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg> Cap: {{ $facility->max_capacity }}
                        </span>
                        @endif
                        <span style="background:#f0fdf4;color:#059669;padding:4px 10px;border-radius:20px;font-size:.72rem;font-weight:700;display:inline-flex;align-items:center;gap:3px;">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20,6 9,17 4,12"/></svg>
                            Licensed
                        </span>
                    </div>
                </div>
                {{-- Action --}}
                <div style="flex-shrink:0;">
                    <a href="{{ route('facilities.show', $facility) }}" style="padding:9px 20px;background:#065f46;color:#fff;border-radius:10px;font-size:.82rem;font-weight:700;text-decoration:none;display:inline-block;transition:all .15s;white-space:nowrap;" onmouseover="this.style.background='#047857';this.style.transform='translateY(-1px)'" onmouseout="this.style.background='#065f46';this.style.transform='none'">
                        View Profile →
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        @else
        <div style="background:#fff;border:1.5px solid #e5e7eb;border-radius:20px;padding:56px 20px;text-align:center;">
            <div style="font-size:3.5rem;margin-bottom:16px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg></div>
            <h3 style="font-size:1.15rem;font-weight:700;color:#111;margin:0 0 8px;">No centers found for ZIP {{ $zip }}</h3>
            <p style="color:#6b7280;font-size:.9rem;margin:0 0 24px;">Try searching nearby ZIPs or browse by state.</p>
            <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
                <a href="/facilities" style="padding:11px 24px;background:#065f46;color:#fff;border-radius:10px;font-size:.88rem;font-weight:700;text-decoration:none;">Browse All Centers</a>
                <a href="/states" style="padding:11px 24px;background:#fff;color:#065f46;border:1.5px solid #065f46;border-radius:10px;font-size:.88rem;font-weight:700;text-decoration:none;">Browse by State</a>
            </div>
        </div>
        @endif

        {{-- Care.com banner после списка если мало центров --}}
        @if($centers->count() < 4)
        <div style="background:linear-gradient(135deg,#1d4ed8 0%,#3b82f6 100%);border-radius:16px;padding:20px 24px;display:flex;align-items:center;gap:20px;margin-top:16px;flex-wrap:wrap;">
            <div style="width:52px;height:52px;background:rgba(255,255,255,.15);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.6rem;flex-shrink:0;">👶</div>
            <div style="flex:1;min-width:200px;">
                <div style="font-size:.7rem;font-weight:700;color:rgba(255,255,255,.6);text-transform:uppercase;letter-spacing:.5px;margin-bottom:4px;">Sponsored</div>
                <div style="font-size:.95rem;font-weight:700;color:#fff;margin-bottom:4px;">Not enough options near {{ $zip }}?</div>
                <div style="font-size:.82rem;color:rgba(255,255,255,.8);">Find trusted babysitters & home daycares on Care.com — background-checked, reviewed by parents.</div>
            </div>
            <a href="https://www.care.com/childcare" target="_blank" rel="nofollow" style="padding:12px 22px;background:#fff;color:#1d4ed8;border-radius:10px;font-size:.88rem;font-weight:800;text-decoration:none;white-space:nowrap;flex-shrink:0;">Find on Care.com →</a>
        </div>
        @endif

    </div>
</section>

{{-- ═══════════════════════ AGE GROUPS ═══════════════════════ --}}
<section style="background:#fff;padding:40px 20px;border-top:1px solid #e5e7eb;">
    <div style="max-width:1000px;margin:0 auto;">
        <h2 style="font-size:1.2rem;font-weight:800;color:#111;margin:0 0 6px;">Programs Near {{ $zip }} by Age Group</h2>
        <p style="color:#6b7280;font-size:.88rem;margin:0 0 20px;">{{ $state }} licensing requirements and what to expect at each stage</p>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(210px,1fr));gap:14px;">
            @foreach([
                ['<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M10 2h4"/><path d="M12 14v4"/><path d="M8 6h8l1 8a5 5 0 01-10 0z"/></svg>','infant','Infant Care','0–12 months','1:4 staff ratio required','$900–$1,600/month','background:#f0fdf4;border:1.5px solid #d1fae5;','color:#065f46;'],
                ['<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg>','toddler','Toddler','1–3 years','1:6 staff ratio required','$700–$1,200/month','background:#eff6ff;border:1.5px solid #dbeafe;','color:#2563eb;'],
                ['<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M16 20V10a4 4 0 00-8 0v10"/><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M9 4h6"/></svg>','preschool','Preschool','3–5 years','1:10 staff ratio','$600–$1,100/month','background:#faf5ff;border:1.5px solid #ede9fe;','color:#7c3aed;'],
                ['<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg>','school','School-Age','5+ years','Before/after school','$300–$700/month','background:#fff7ed;border:1.5px solid #fed7aa;','color:#c2410c;'],
            ] as [$emoji,$type,$label,$ages,$ratio,$cost,$bg,$textColor])
            <div style="{{ $bg }} border-radius:14px;padding:18px;transition:transform .15s;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='none'">
                <div style="font-size:1.6rem;margin-bottom:10px;">{!! $emoji !!}</div>
                <h3 style="font-size:.9rem;font-weight:700;{{ $textColor }} margin:0 0 8px;">{!! $label !!}</h3>
                <div style="font-size:.78rem;color:#6b7280;line-height:1.8;">
                    <div>📅 Ages: <strong style="color:#374151;">{{ $ages }}</strong></div>
                    <div>👥 {{ $ratio }}</div>
                    <div><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg> Avg: <strong style="color:#374151;">{{ $cost }}</strong></div>
                </div>
                @php $count = $type === 'infant' ? $stats['infant'] : ($type === 'preschool' ? $stats['preschool'] : '?'); @endphp
                @if(is_numeric($count))
                <div style="margin-top:10px;font-size:.75rem;font-weight:700;{{ $textColor }}">
                    {{ $count }} centers near {{ $zip }}
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════ SUBSIDIES ═══════════════════════ --}}
<section style="background:#f0fdf4;padding:36px 20px;border-top:1px solid #d1fae5;">
    <div style="max-width:1000px;margin:0 auto;">
        <div style="display:flex;gap:32px;flex-wrap:wrap;align-items:flex-start;">
            <div style="flex:1;min-width:280px;">
                <div style="display:inline-flex;align-items:center;gap:8px;background:#065f46;color:#fff;border-radius:60px;padding:6px 14px;font-size:.75rem;font-weight:700;margin-bottom:14px;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg> Free Money Available
                </div>
                <h2 style="font-size:1.2rem;font-weight:800;color:#111;margin:0 0 10px;">Childcare Subsidies Near {{ $zip }}</h2>
                <p style="color:#374151;font-size:.9rem;line-height:1.7;margin:0 0 16px;">
                    <strong>{{ $state }} participates in CCAP</strong> — families near {{ $zip }} may get up to 90% of childcare costs covered based on income.
                </p>
                <a href="/subsidies" style="display:inline-flex;align-items:center;gap:6px;padding:11px 20px;background:#065f46;color:#fff;border-radius:10px;font-size:.85rem;font-weight:700;text-decoration:none;transition:all .15s;" onmouseover="this.style.background='#047857'" onmouseout="this.style.background='#065f46'">
                    Check Your Eligibility →
                </a>
            </div>
            <div style="flex:1;min-width:240px;display:flex;flex-direction:column;gap:10px;">
                @foreach([
                    ['<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 10v11M12 10v11M16 10v11"/></svg>','CCAP / CCDF','Federal block grant — up to 90% coverage'],
                    ['<svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>','Head Start','Free care for income-eligible families'],
                    ['💼','Dependent Care FSA','Pre-tax savings — up to $5,000/yr'],
                    ['<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/></svg>','Child Tax Credit','Up to $3,000/year federal credit'],
                    ['🎓','State Pre-K','Free half or full-day preschool (4–5 yrs)'],
                ] as [$ico,$name,$desc])
                <div style="background:#fff;border:1px solid #d1fae5;border-radius:12px;padding:12px 16px;display:flex;gap:12px;align-items:center;">
                    <span style="font-size:1.2rem;flex-shrink:0;">{!! $ico !!}</span>
                    <div>
                        <div style="font-size:.85rem;font-weight:700;color:#065f46;">{{ $name }}</div>
                        <div style="font-size:.78rem;color:#6b7280;">{{ $desc }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════ COST CALCULATOR CTA ═══════════════════════ --}}
<section style="background:#fff;padding:32px 20px;border-top:1px solid #e5e7eb;">
    <div style="max-width:1000px;margin:0 auto;">
        <div style="background:linear-gradient(135deg,#064e3b,#065f46);border-radius:20px;padding:32px;display:flex;gap:24px;align-items:center;flex-wrap:wrap;">
            <div style="font-size:3rem;"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.9)" stroke-width="2" style="display:inline;vertical-align:middle;"><rect x="2" y="3" width="20" height="18" rx="2"/><line x1="8" y1="9" x2="8" y2="9"/><line x1="12" y1="9" x2="12" y2="9"/><line x1="16" y1="9" x2="16" y2="9"/><line x1="8" y1="13" x2="8" y2="13"/><line x1="12" y1="13" x2="12" y2="13"/><line x1="16" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="16" y2="17"/></svg></div>
            <div style="flex:1;min-width:220px;">
                <h3 style="font-size:1.05rem;font-weight:800;color:#fff;margin:0 0 6px;">Estimate Your Childcare Cost Near {{ $zip }}</h3>
                <p style="font-size:.85rem;color:rgba(255,255,255,.8);margin:0;line-height:1.6;">See average daycare costs in {{ $state }} by age group + estimate how much CCAP can save you.</p>
            </div>
            <a href="/childcare-cost" style="padding:12px 24px;background:#fff;color:#065f46;border-radius:12px;font-size:.9rem;font-weight:800;text-decoration:none;white-space:nowrap;transition:all .15s;flex-shrink:0;" onmouseover="this.style.transform='translateY(-1px)';this.style.boxShadow='0 6px 20px rgba(0,0,0,.2)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                Open Calculator →
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════ AFFILIATE — WINNIE ═══════════════════════ --}}
<section style="background:#faf5ff;padding:32px 20px;border-top:1px solid #ede9fe;">
    <div style="max-width:1000px;margin:0 auto;">
        <div style="background:#fff;border:1.5px solid #ede9fe;border-radius:20px;padding:28px;display:flex;gap:24px;align-items:center;flex-wrap:wrap;">
            <div style="width:60px;height:60px;background:linear-gradient(135deg,#7c3aed,#a855f7);border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:1.6rem;flex-shrink:0;"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.9)" stroke-width="2" style="display:inline;vertical-align:middle;"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></div>
            <div style="flex:1;min-width:220px;">
                <div style="font-size:.7rem;font-weight:700;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:4px;">Sponsored · Partner</div>
                <h3 style="font-size:1rem;font-weight:800;color:#111;margin:0 0 6px;">Compare Daycare Waitlists on Winnie</h3>
                <p style="font-size:.84rem;color:#6b7280;margin:0;line-height:1.5;">See real prices, availability, and join waitlists at top daycares near {{ $zip }} on Winnie — the most detailed childcare search platform.</p>
            </div>
            <a href="https://winnie.com" target="_blank" rel="nofollow" style="padding:12px 22px;background:#7c3aed;color:#fff;border-radius:10px;font-size:.88rem;font-weight:800;text-decoration:none;white-space:nowrap;transition:all .15s;flex-shrink:0;" onmouseover="this.style.background='#6d28d9'" onmouseout="this.style.background='#7c3aed'">
                View on Winnie →
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════ SEO CONTENT ═══════════════════════ --}}
<section style="background:#fff;padding:40px 20px;border-top:1px solid #e5e7eb;">
    <div style="max-width:780px;margin:0 auto;">
        <h2 style="font-size:1.25rem;font-weight:800;color:#111;margin:0 0 12px;">Finding Daycare Near ZIP {{ $zip }} in {{ $cityTitle }}, {{ $state }}</h2>
        <p style="color:#374151;font-size:.94rem;line-height:1.75;margin:0 0 16px;">
            ZIP code {{ $zip }} has <strong>{{ $stats['total'] }} licensed childcare providers</strong> registered with {{ $state }} state authorities — infant care, toddler programs, preschools, and school-age centers. All listings are sourced from official state licensing databases with active permits.
        </p>
        <p style="color:#374151;font-size:.94rem;line-height:1.75;margin:0 0 28px;">
            When comparing daycare centers near {{ $zip }}, focus on: staff-to-child ratio, curriculum approach, safety inspection history, and whether the center accepts CCAP subsidies. Use our <a href="/checklist" style="color:#065f46;font-weight:600;">30-point tour checklist</a> before making a decision.
        </p>

        <h2 style="font-size:1.1rem;font-weight:800;color:#111;margin:0 0 16px;">How to Choose Daycare Near {{ $zip }}</h2>
        <ol style="color:#374151;font-size:.9rem;line-height:2;margin:0 0 28px;padding-left:20px;">
            <li><strong>Define your needs</strong> — age of child, full-time vs part-time, budget, schedule</li>
            <li><strong>Search and shortlist</strong> — all {{ $stats['total'] }} licensed centers near {{ $zip }} are listed above</li>
            <li><strong>Call ahead</strong> — confirm openings, subsidy acceptance, and tour availability</li>
            <li><strong>Tour at least 3 centers</strong> — use our <a href="/checklist" style="color:#065f46;font-weight:600;">30-point checklist</a></li>
            <li><strong>Verify license status</strong> — confirm on {{ $state }}'s official licensing portal</li>
        </ol>

        {{-- Cross-links --}}
        <div style="border-top:1px solid #e5e7eb;padding-top:24px;margin-top:24px;">
            <h3 style="font-size:.95rem;font-weight:700;color:#111;margin:0 0 14px;">Related Resources</h3>
            <div style="display:flex;gap:10px;flex-wrap:wrap;">
                @foreach([
                    ["/states/{$state}","All Centers in {$state}"],
                    ['/subsidies','Childcare Subsidies'],
                    ['/checklist','Tour Checklist (30 Q)'],
                    ['/childcare-cost','Cost Calculator'],
                    ['/childcare-safety','Safety Guide'],
                    ['/facilities','Search All Centers'],
                ] as [$url,$label])
                <a href="{{ str_replace('{$state}',strtolower($state),$url) }}" style="padding:9px 16px;background:#f9fafb;border:1.5px solid #e5e7eb;border-radius:10px;font-size:.82rem;font-weight:600;color:#065f46;text-decoration:none;transition:all .15s;white-space:nowrap;" onmouseover="this.style.borderColor='#065f46';this.style.background='#f0fdf4'" onmouseout="this.style.borderColor='#e5e7eb';this.style.background='#f9fafb'">{!! $label !!} →</a>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════ FAQ ═══════════════════════ --}}
<section style="background:#f9fafb;padding:40px 20px;border-top:1px solid #e5e7eb;">
    <div style="max-width:780px;margin:0 auto;">
        <h2 style="font-size:1.2rem;font-weight:800;color:#111;margin:0 0 24px;">Frequently Asked Questions — Daycare Near {{ $zip }}</h2>

        @foreach($faqs as [$q, $a])
        <details style="background:#fff;border:1.5px solid #e5e7eb;border-radius:12px;margin-bottom:8px;overflow:hidden;transition:border-color .15s;" onmouseover="this.style.borderColor='#065f46'" onmouseout="this.style.borderColor='#e5e7eb'">
            <summary style="font-size:.92rem;font-weight:700;color:#111;cursor:pointer;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;gap:12px;list-style:none;">
                {{ $q }}
                <svg class="faq-chevron" style="width:18px;height:18px;flex-shrink:0;color:#065f46;transition:transform .2s;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6,9 12,15 18,9"/></svg>
            </summary>
            <p style="font-size:.88rem;color:#374151;line-height:1.75;margin:0;padding:0 20px 18px;">{{ $a }}</p>
        </details>
        @endforeach
    </div>
</section>

{{-- ═══════════════════════ BOTTOM AFFILIATE ═══════════════════════ --}}
<section style="background:#fff;padding:32px 20px;border-top:1px solid #e5e7eb;">
    <div style="max-width:1000px;margin:0 auto;">
        <div style="background:linear-gradient(135deg,#1d4ed8,#0ea5e9);border-radius:20px;padding:32px;display:flex;gap:24px;align-items:center;flex-wrap:wrap;text-align:center;">
            <div style="flex:1;min-width:240px;">
                <div style="font-size:2rem;margin-bottom:10px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div>
                <h3 style="font-size:1rem;font-weight:800;color:#fff;margin:0 0 8px;">Need In-Home Childcare Near {{ $zip }}?</h3>
                <p style="font-size:.84rem;color:rgba(255,255,255,.85);margin:0 0 16px;line-height:1.5;">Care.com has 1M+ background-checked sitters, nannies, and home daycare providers near you.</p>
                <a href="https://www.care.com/childcare" target="_blank" rel="nofollow" style="display:inline-block;padding:12px 26px;background:#fff;color:#1d4ed8;border-radius:10px;font-size:.9rem;font-weight:800;text-decoration:none;transition:all .15s;" onmouseover="this.style.transform='translateY(-1px)';this.style.boxShadow='0 6px 20px rgba(0,0,0,.2)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                    Find a Sitter on Care.com →
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Last updated --}}
<div style="background:#f9fafb;border-top:1px solid #e5e7eb;padding:14px 20px;text-align:center;">
    <p style="font-size:.76rem;color:#9ca3af;margin:0;">
        Last updated: {{ date('F j, Y') }} · Sourced from {{ $state }} official childcare licensing database ·
        <a href="/privacy-policy" style="color:#9ca3af;">Privacy Policy</a>
    </p>
</div>

</div>
@include("components.read-also")
@endsection