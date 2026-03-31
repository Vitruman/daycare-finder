@extends('layouts.app')
@section('title', 'DaycareHub — Find Licensed Daycare & Childcare Centers Near You')
@section('meta_description', 'Search 26,000+ licensed daycare centers across all 50 states. Filter by age, program type, ZIP code, and subsidy acceptance. Free, instant, no signup required.')
@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "How do I find a licensed daycare near me?", "acceptedAnswer": {"@@type": "Answer", "text": "Search by city, state, or ZIP code on DaycareHub. All 26,000+ centers are verified through official state licensing databases. Filter by age group (infant, toddler, preschool), program type, and subsidy acceptance."}},
        {"@@type": "Question", "name": "How much does daycare cost?", "acceptedAnswer": {"@@type": "Answer", "text": "Full-time infant care averages $1,230/month nationally, ranging from $650/month in Mississippi to $2,700/month in DC. Preschool averages $860/month. Use the Child and Dependent Care Tax Credit (saves $600-$2,100/year) and check CCAP eligibility to reduce costs."}},
        {"@@type": "Question", "name": "What is a good staff-to-child ratio?", "acceptedAnswer": {"@@type": "Answer", "text": "NAEYC recommends 1:3-4 for infants, 1:4-6 for toddlers, 1:8-10 for preschool. Lower ratios mean more individual attention. Always ask the ratio in your child's specific room, not the center average."}},
        {"@@type": "Question", "name": "Do I qualify for childcare financial assistance?", "acceptedAnswer": {"@@type": "Answer", "text": "Many families qualify for CCAP subsidies (income up to 85% of state median), Head Start (free for families at or below poverty level), or the Child and Dependent Care Tax Credit (available to all working parents). Check our subsidies guide to see what you qualify for."}},
        {"@@type": "Question", "name": "What should I look for when choosing a daycare?", "acceptedAnswer": {"@@type": "Answer", "text": "Check: current state license and inspection history, staff-to-child ratios, teacher tenure and qualifications, daily schedule, curriculum approach, communication with parents, and full fee schedule. Our 30-question tour checklist covers everything."}}
    ]
}
</script>
@endsection

@section('content')
<div style="margin-top:64px;">

{{-- ===== HERO ===== --}}
<section style="background:linear-gradient(135deg,#064e3b 0%,#065f46 50%,#047857 100%);padding:52px 16px 44px;position:relative;overflow:hidden;box-sizing:border-box;">
    {{-- Background pattern --}}
    <div style="position:absolute;inset:0;opacity:.06;" aria-hidden="true">
        <svg width="100%" height="100%"><defs><pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(#grid)"/></svg>
    </div>
    <div style="max-width:860px;margin:0 auto;text-align:center;position:relative;padding:0 4px;">
        <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.12);color:#a7f3d0;padding:6px 16px;border-radius:20px;font-size:.8rem;font-weight:700;margin-bottom:22px;letter-spacing:.03em;">
            <span style="width:6px;height:6px;background:#34d399;border-radius:50%;display:inline-block;"></span>
            26,000+ Licensed Centers · All 50 States
        </div>
        <h1 style="font-size:clamp(1.4rem,5vw,3rem);font-weight:800;color:#fff;margin:0 0 16px;line-height:1.2;letter-spacing:-.01em;word-break:break-word;overflow-wrap:break-word;">
            Find Safe, Licensed Daycare<br>
            <span style="color:#6ee7b7;">Near You — Free</span>
        </h1>
        <p style="font-size:.95rem;color:rgba(255,255,255,.82);max-width:560px;margin:0 auto 32px;line-height:1.7;overflow-wrap:break-word;">
            Every listing is verified through official state registries. Search by ZIP, city, or age group — no signup required.
        </p>

        {{-- Search form --}}
        <form action="/facilities" method="GET" style="max-width:620px;margin:0 auto 20px;padding:0 4px;">
            <style>
                .hero-search-row { display:flex; gap:8px; }
                .hero-search-input { flex:1; position:relative; }
                .hero-search-state { min-width:110px; }
                @media(max-width:600px) {
                    .hero-search-row { flex-direction:column; }
                    .hero-search-state { min-width:unset; width:100%; }
                    .hero-search-btn { width:100%; }
                }
            </style>
            <div style="background:rgba(255,255,255,.12);border-radius:14px;padding:8px;backdrop-filter:blur(10px);">
                <div class="hero-search-row">
                    <div class="hero-search-input">
                        <svg style="position:absolute;left:12px;top:50%;transform:translateY(-50%);color:#6b7280;z-index:1;" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                        <input type="text" name="search" placeholder="City, ZIP code, or center name..."
                               value="{{ request('search') }}"
                               style="width:100%;padding:12px 12px 12px 36px;background:#fff;border:none;border-radius:8px;font-size:.9rem;color:#111;outline:none;box-sizing:border-box;"
                               autocomplete="off">
                    </div>
                    <select name="state" class="hero-search-state" style="padding:12px 10px;background:#fff;border:none;border-radius:8px;font-size:.86rem;color:#111;cursor:pointer;outline:none;box-sizing:border-box;">
                        <option value="">All States</option>
                        @foreach($states as $s)
                        <option value="{{ $s->code }}" {{ request('state')==$s->code?'selected':'' }}>{{ $s->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="hero-search-btn" style="padding:12px 20px;background:#f59e0b;color:#fff;border:none;border-radius:8px;font-weight:800;font-size:.9rem;cursor:pointer;white-space:nowrap;">
                        Search →
                    </button>
                </div>
            </div>
        </form>

        {{-- Quick links --}}
        <div style="display:flex;gap:6px;justify-content:center;flex-wrap:wrap;padding:0 8px;">
            <span style="color:rgba(255,255,255,.6);font-size:.82rem;align-self:center;">Popular:</span>
            @foreach(['infant'=>'Infant Care','preschool'=>'Preschool','montessori'=>'Montessori','head+start'=>'Head Start'] as $q=>$label)
            <a href="/facilities?search={{ $q }}" style="background:rgba(255,255,255,.15);color:rgba(255,255,255,.9);padding:5px 14px;border-radius:20px;text-decoration:none;font-size:.82rem;font-weight:600;border:1px solid rgba(255,255,255,.2);transition:all .15s;" onmouseover="this.style.background='rgba(255,255,255,.25)'" onmouseout="this.style.background='rgba(255,255,255,.15)'">{{ $label }}</a>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== TRUST BAR ===== --}}
<section style="background:#fff;border-bottom:1px solid #e5e7eb;padding:0;">
    <div style="max-width:1000px;margin:0 auto;padding:0 20px;">
        <div style="display:grid;grid-template-columns:repeat(2,1fr);text-align:center;" class="stats-grid">
            <style>@media(min-width:600px){.stats-grid{grid-template-columns:repeat(4,1fr)!important}}</style>
            @foreach([
                ['26,000+','Licensed Centers'],
                ['50','States Covered'],
                ['100%','Free to Search'],
                ['Gov.','Verified Data'],
            ] as $stat)
            <div>
                <div style="font-size:1.4rem;font-weight:800;color:#065f46;">{{ $stat[0] }}</div>
                <div style="font-size:.78rem;color:#6b7280;margin-top:2px;font-weight:500;">{{ $stat[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== HOW IT WORKS ===== --}}
<section style="background:#f9fafb;padding:56px 20px;">
    <div style="max-width:1000px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:36px;">
            <h2 style="font-size:1.6rem;font-weight:800;color:#111;margin:0 0 8px;">How DaycareHub Works</h2>
            <p style="color:#6b7280;font-size:.92rem;max-width:500px;margin:0 auto;">Find, compare, and connect with licensed childcare in three steps.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px;">
            @foreach([
                ['1','🔍','Search by Location','Enter your city, ZIP code, or state. Filter by age group (infant, toddler, preschool), program type, and more.','/facilities'],
                ['2','🔎','Compare & Verify','Each profile shows licensing status, contact info, age groups served, and inspection history.','/facilities'],
                ['3','💰','Check Your Subsidies','US families pay avg $14,760/year. CCAP, Head Start, and tax credits can cut costs dramatically.','/subsidies'],
            ] as $step)
            <div style="background:#fff;border-radius:14px;padding:24px;border:1px solid #e5e7eb;position:relative;">
                <div style="position:absolute;top:-14px;left:20px;width:28px;height:28px;background:#065f46;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.85rem;">{{ $step[0] }}</div>
                <div style="font-size:2rem;margin:12px 0 10px;">{{ $step[1] }}</div>
                <h3 style="font-size:1rem;font-weight:700;color:#111;margin:0 0 8px;">{{ $step[2] }}</h3>
                <p style="font-size:.86rem;color:#6b7280;line-height:1.65;margin:0 0 14px;">{{ $step[3] }}</p>
                <a href="{{ $step[4] }}" style="color:#065f46;font-size:.83rem;font-weight:700;text-decoration:none;">Learn more →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== PROGRAM TYPES ===== --}}
<section style="background:#fff;padding:56px 20px;">
    <div style="max-width:1100px;margin:0 auto;">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:28px;flex-wrap:wrap;gap:10px;">
            <div>
                <h2 style="font-size:1.5rem;font-weight:800;color:#111;margin:0 0 4px;">Browse by Program Type</h2>
                <p style="color:#6b7280;font-size:.9rem;margin:0;">Find programs that match your child's age and your family's needs.</p>
            </div>
            <a href="/programs" style="color:#065f46;font-weight:700;font-size:.88rem;text-decoration:none;white-space:nowrap;">Full guide →</a>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(165px,1fr));gap:10px;">
            @foreach([
                ['🍼','Infant Care','0–12 months','infant','$1,000–$2,500/mo'],
                ['🧒','Toddler','1–3 years','toddler','$900–$2,000/mo'],
                ['🎒','Preschool','3–5 years','preschool','$700–$1,500/mo'],
                ['📚','After School','5–12 years','school','$200–$700/mo'],
                ['⭐','Head Start','0–5 years','head+start','Free (eligible)'],
                ['🌱','Montessori','2–6 years','montessori','Varies'],
            ] as $p)
            <a href="/facilities?search={{ $p[3] }}" style="display:flex;flex-direction:column;align-items:center;text-align:center;padding:18px 12px;background:#f9fafb;border:1.5px solid #e5e7eb;border-radius:12px;text-decoration:none;transition:all .15s;gap:4px;" onmouseover="this.style.borderColor='#065f46';this.style.background='#f0fdf4'" onmouseout="this.style.borderColor='#e5e7eb';this.style.background='#f9fafb'">
                <span style="font-size:1.8rem;line-height:1;">{{ $p[0] }}</span>
                <span style="font-weight:700;font-size:.87rem;color:#111;margin-top:6px;">{{ $p[1] }}</span>
                <span style="font-size:.73rem;color:#9ca3af;">{{ $p[2] }}</span>
                <span style="font-size:.73rem;color:#065f46;font-weight:600;margin-top:4px;">{{ $p[4] }}</span>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== FEATURED CENTERS ===== --}}
@if(isset($featuredCenters) && $featuredCenters->isNotEmpty())
<section style="background:#f9fafb;padding:56px 20px;border-top:1px solid #e5e7eb;">
    <div style="max-width:1100px;margin:0 auto;">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:24px;flex-wrap:wrap;gap:10px;">
            <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0;">Recently Verified Centers</h2>
            <a href="/facilities" style="color:#065f46;font-weight:700;font-size:.88rem;text-decoration:none;">View all 26,000+ →</a>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:14px;">
            @foreach($featuredCenters as $center)
            <a href="/facilities/{{ $center->name_id }}" style="display:flex;gap:14px;background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:16px;text-decoration:none;transition:all .15s;color:inherit;" onmouseover="this.style.borderColor='#065f46';this.style.boxShadow='0 4px 12px rgba(6,95,70,.1)'" onmouseout="this.style.borderColor='#e5e7eb';this.style.boxShadow='none'">
                <div style="width:48px;height:48px;background:linear-gradient(135deg,#065f46,#059669);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#fff;font-size:1.2rem;font-weight:800;">
                    {{ strtoupper(substr($center->rehab_name ?? 'D', 0, 1)) }}
                </div>
                <div style="min-width:0;">
                    <div style="font-weight:700;font-size:.9rem;color:#111;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ ucwords(strtolower($center->rehab_name)) }}</div>
                    <div style="font-size:.8rem;color:#6b7280;margin-top:2px;">📍 {{ $center->city }}, {{ $center->state }} {{ $center->zip }}</div>
                    @if($center->age_range)
                    <span style="display:inline-block;background:#f0fdf4;color:#065f46;padding:2px 8px;border-radius:10px;font-size:.72rem;font-weight:600;margin-top:5px;">{{ $center->age_range }}</span>
                    @endif
                </div>
            </a>
            @endforeach
        </div>
        <div style="text-align:center;margin-top:24px;">
            <a href="/facilities" style="display:inline-block;background:#065f46;color:#fff;padding:12px 32px;border-radius:10px;font-weight:700;text-decoration:none;font-size:.92rem;">Browse All Licensed Centers</a>
        </div>
    </div>
</section>
@endif

{{-- ===== STATES GRID ===== --}}
<section style="background:#fff;padding:56px 20px;">
    <div style="max-width:1100px;margin:0 auto;">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:24px;flex-wrap:wrap;gap:10px;">
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 4px;">Find Daycare by State</h2>
                <p style="color:#6b7280;font-size:.88rem;margin:0;">All 50 states covered — government-verified licensing data.</p>
            </div>
            <a href="/states" style="color:#065f46;font-weight:700;font-size:.88rem;text-decoration:none;">All states →</a>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:8px;">
            @foreach($states as $s)
            <a href="/states/{{ strtolower(str_replace(' ', '-', $s->name)) }}"
               style="display:flex;justify-content:space-between;align-items:center;padding:11px 14px;background:#f9fafb;border:1px solid #e5e7eb;border-radius:9px;text-decoration:none;font-size:.86rem;font-weight:600;color:#374151;transition:all .15s;"
               onmouseover="this.style.borderColor='#065f46';this.style.color='#065f46';this.style.background='#f0fdf4'"
               onmouseout="this.style.borderColor='#e5e7eb';this.style.color='#374151';this.style.background='#f9fafb'">
                {{ $s->name }}
                <span style="background:#e5e7eb;color:#6b7280;padding:2px 8px;border-radius:10px;font-size:.72rem;font-weight:600;">{{ $s->count }}</span>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== SUBSIDY BANNER ===== --}}
<section style="background:linear-gradient(135deg,#065f46 0%,#047857 100%);padding:56px 20px;">
    <div style="max-width:900px;margin:0 auto;display:grid;grid-template-columns:1fr auto;gap:40px;align-items:center;flex-wrap:wrap;">
        <div>
            <div style="display:inline-block;background:rgba(255,255,255,.15);color:#a7f3d0;padding:4px 12px;border-radius:20px;font-size:.78rem;font-weight:700;margin-bottom:14px;">FINANCIAL ASSISTANCE</div>
            <h2 style="font-size:1.5rem;font-weight:800;color:#fff;margin:0 0 10px;line-height:1.3;">Childcare May Cost You<br><span style="color:#6ee7b7;">Much Less Than You Think</span></h2>
            <p style="color:rgba(255,255,255,.82);margin:0 0 20px;line-height:1.65;font-size:.92rem;">CCAP, Head Start, and tax credits help millions of US families afford quality childcare. Many families earning up to $80,000+ qualify for assistance.</p>
            <div style="display:flex;flex-wrap:wrap;gap:8px;">
                @foreach(['CCAP Subsidies','Head Start (Free)','Tax Credit','Dep. Care FSA'] as $prog)
                <span style="background:rgba(255,255,255,.15);color:#d1fae5;padding:5px 12px;border-radius:20px;font-size:.8rem;font-weight:600;border:1px solid rgba(255,255,255,.2);">✓ {{ $prog }}</span>
                @endforeach
            </div>
        </div>
        <div style="text-align:center;flex-shrink:0;">
            <a href="/subsidies" style="display:block;background:#fff;color:#065f46;padding:14px 32px;border-radius:10px;font-weight:800;text-decoration:none;font-size:.95rem;margin-bottom:10px;white-space:nowrap;">Check If You Qualify</a>
            <div style="color:rgba(255,255,255,.6);font-size:.78rem;">Free · No signup required</div>
        </div>
    </div>
</section>

{{-- ===== PARENT GUIDES ===== --}}
<section style="background:#f9fafb;padding:56px 20px;border-top:1px solid #e5e7eb;">
    <div style="max-width:1000px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:32px;">
            <h2 style="font-size:1.5rem;font-weight:800;color:#111;margin:0 0 8px;">Parent Guides & Resources</h2>
            <p style="color:#6b7280;font-size:.9rem;margin:0;">Everything you need to find, evaluate, and afford quality childcare.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;">
            @foreach([
                ['📋','Daycare Tour Checklist','/checklist','30 questions to ask before enrolling — safety, staff, curriculum, costs, and more.'],
                ['💵','Childcare Cost Calculator','/childcare-cost','See average costs for all 50 states + how to cut your bill with subsidies.'],
                ['🔒','Childcare Safety Guide','/childcare-safety','How to check licenses, read inspection reports, and verify background checks.'],
                ['✍️','Parent Blog','/blog','Guides on choosing daycare, CCAP applications, Head Start vs daycare, and more.'],
            ] as $guide)
            <a href="{{ $guide[2] }}" style="display:flex;gap:14px;background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:18px;text-decoration:none;transition:all .15s;" onmouseover="this.style.borderColor='#065f46';this.style.boxShadow='0 4px 12px rgba(0,0,0,.06)'" onmouseout="this.style.borderColor='#e5e7eb';this.style.boxShadow='none'">
                <div style="font-size:1.8rem;flex-shrink:0;line-height:1;margin-top:2px;">{{ $guide[0] }}</div>
                <div>
                    <div style="font-weight:700;font-size:.92rem;color:#111;margin-bottom:4px;">{{ $guide[1] }}</div>
                    <p style="font-size:.83rem;color:#6b7280;line-height:1.6;margin:0;">{{ $guide[3] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== FAQ ===== --}}
<section style="background:#fff;padding:56px 20px;">
    <div style="max-width:760px;margin:0 auto;">
        <h2 style="font-size:1.5rem;font-weight:800;color:#111;margin:0 0 6px;text-align:center;">Frequently Asked Questions</h2>
        <p style="color:#6b7280;text-align:center;margin:0 0 28px;font-size:.9rem;">Common questions from parents searching for childcare.</p>
        <div style="display:grid;gap:8px;">
            @foreach([
                ['How do I find a licensed daycare near me?','Search by city, ZIP code, or state on DaycareHub. All 26,000+ listings are verified through official state licensing databases. Filter by age group, program type, and subsidy acceptance. No account required.'],
                ['How much does daycare cost per month?','National average for full-time infant care: $1,230/month. Toddler programs: $1,050/month. Preschool: $860/month. Costs range from $650/month in Mississippi to $2,700/month in DC. Use our <a href="/childcare-cost" style="color:#065f46;font-weight:600;">cost calculator</a> to estimate your state.'],
                ['Do I qualify for financial assistance?','Many families qualify. CCAP subsidies are available to families earning up to 85% of state median income (up to $80,000+ in some states). Head Start is free for families at or below poverty level. The Child and Dependent Care Tax Credit is available to all working parents. <a href="/subsidies" style="color:#065f46;font-weight:600;">Check what you qualify for →</a>'],
                ['What should I look for when choosing a daycare?','Verify current state license and inspection history. Ask the ratio in your child\'s specific room (not center average). Ask how long the lead teacher has been there. Request the written sick child policy and full fee schedule. Use our <a href="/checklist" style="color:#065f46;font-weight:600;">30-question tour checklist →</a>'],
                ['How early should I start looking for daycare?','For infant care, start during pregnancy — quality programs have 3–12 month waitlists. For preschool, start 9–12 months before your desired start date. For Head Start, apply during pregnancy for Early Head Start, and when your child turns 2 for Head Start (ages 3–5).'],
            ] as $qa)
            <details style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;" onmouseover="this.style.borderColor='#d1fae5'" onmouseout="this.style.borderColor='#e5e7eb'">
                <summary style="padding:15px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;display:flex;justify-content:space-between;align-items:center;">
                    {{ $qa[0] }}<span style="color:#065f46;font-size:1.2rem;flex-shrink:0;margin-left:10px;transition:.2s;">+</span>
                </summary>
                <div style="padding:2px 18px 16px;color:#555;font-size:.88rem;line-height:1.75;">{!! $qa[1] !!}</div>
            </details>
            @endforeach
        </div>
    </div>
</section>

<div style="background:#fff;border-top:1px solid #f3f4f6;padding:14px 20px;text-align:center;">
    <p style="font-size:.75rem;color:#9ca3af;margin:0;">Last updated: {{ date('F j, Y') }} · Data: State licensing databases, Child Care Aware of America, HHS/ACF</p>
</div>

</div>
@endsection
