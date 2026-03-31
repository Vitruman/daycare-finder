@extends('layouts.app')
@section('title', 'DaycareHub — Find Licensed Daycare & Childcare Centers Near You')
@section('meta_description', 'Search 26,000+ licensed daycare and childcare centers across all 50 states. Filter by age group, program type, and ZIP code. Free, easy, and up-to-date.')
@section('content')

{{-- HERO --}}
<section style="background:linear-gradient(135deg,#065f46 0%,#047857 50%,#059669 100%);padding:80px 20px 60px;margin-top:64px;">
    <div style="max-width:1100px;margin:0 auto;text-align:center;">
        <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.15);color:#fff;padding:6px 16px;border-radius:20px;font-size:.82rem;font-weight:600;margin-bottom:20px;">
            🏫 26,000+ Licensed Centers Nationwide
        </div>
        <h1 style="font-size:clamp(1.8rem,4vw,3rem);font-weight:800;color:#fff;margin:0 0 16px;line-height:1.2;">
            Find Licensed Daycare &amp; Childcare<br>Centers Near You
        </h1>
        <p style="font-size:1.05rem;color:rgba(255,255,255,.88);max-width:580px;margin:0 auto 32px;line-height:1.65;">
            Search state-licensed childcare providers by ZIP code, city, or age group.
            Every listing is verified through official state registries.
        </p>
        <form action="/facilities" method="GET" style="display:flex;gap:10px;max-width:580px;margin:0 auto;flex-wrap:wrap;">
            <input type="text" name="search" placeholder="City, center name, or ZIP code..."
                   value="{{ request('search') }}"
                   style="flex:1;min-width:200px;padding:14px 18px;border-radius:10px;border:none;font-size:.95rem;box-shadow:0 4px 20px rgba(0,0,0,.15);">
            <select name="state" style="padding:14px 14px;border-radius:10px;border:none;font-size:.9rem;background:#fff;min-width:140px;">
                <option value="">All States</option>
                @foreach($states as $s)
                <option value="{{ $s->code }}" {{ request('state')==$s->code?'selected':'' }}>{{ $s->name }}</option>
                @endforeach
            </select>
            <button type="submit" style="padding:14px 24px;background:#f59e0b;color:#fff;border:none;border-radius:10px;font-weight:700;font-size:.95rem;cursor:pointer;">
                Search
            </button>
        </form>
        <div style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap;margin-top:18px;">
            <a href="/facilities?search=infant" style="background:rgba(255,255,255,.2);color:#fff;padding:7px 16px;border-radius:20px;text-decoration:none;font-size:.82rem;font-weight:600;">Infant Care</a>
            <a href="/facilities?search=preschool" style="background:rgba(255,255,255,.2);color:#fff;padding:7px 16px;border-radius:20px;text-decoration:none;font-size:.82rem;font-weight:600;">Preschool</a>
            <a href="/facilities?search=montessori" style="background:rgba(255,255,255,.2);color:#fff;padding:7px 16px;border-radius:20px;text-decoration:none;font-size:.82rem;font-weight:600;">Montessori</a>
            <a href="/zip" style="background:rgba(255,255,255,.2);color:#fff;padding:7px 16px;border-radius:20px;text-decoration:none;font-size:.82rem;font-weight:600;">Search by ZIP</a>
        </div>
    </div>
</section>

{{-- STATS --}}
<section style="background:#fff;padding:32px 20px;border-bottom:1px solid #e5e7eb;">
    <div style="max-width:900px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:20px;text-align:center;">
        <div><div style="font-size:2rem;font-weight:800;color:#065f46;">26,000+</div><div style="font-size:.85rem;color:#666;">Licensed Centers</div></div>
        <div><div style="font-size:2rem;font-weight:800;color:#065f46;">50</div><div style="font-size:.85rem;color:#666;">States Covered</div></div>
        <div><div style="font-size:2rem;font-weight:800;color:#065f46;">41k+</div><div style="font-size:.85rem;color:#666;">ZIP Codes Indexed</div></div>
        <div><div style="font-size:2rem;font-weight:800;color:#065f46;">100%</div><div style="font-size:.85rem;color:#666;">Free to Search</div></div>
    </div>
</section>

{{-- TRUST BAR --}}
<section style="background:#f0fdf4;border-top:1px solid #d1fae5;border-bottom:1px solid #d1fae5;padding:14px 20px;">
    <div style="max-width:900px;margin:0 auto;display:flex;flex-wrap:wrap;gap:16px;justify-content:center;align-items:center;">
        <div style="display:flex;align-items:center;gap:6px;font-size:.83rem;color:#065f46;font-weight:600;">
            <span>✅</span> Government-verified licensing data
        </div>
        <div style="display:flex;align-items:center;gap:6px;font-size:.83rem;color:#065f46;font-weight:600;">
            <span>✅</span> No sponsored rankings
        </div>
        <div style="display:flex;align-items:center;gap:6px;font-size:.83rem;color:#065f46;font-weight:600;">
            <span>✅</span> No registration required
        </div>
        <div style="display:flex;align-items:center;gap:6px;font-size:.83rem;color:#065f46;font-weight:600;">
            <span>✅</span> 100% free for families
        </div>
    </div>
</section>

{{-- HOW IT WORKS --}}
<section style="background:#fff;padding:48px 20px;">
    <div style="max-width:900px;margin:0 auto;text-align:center;">
        <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 8px;">How DaycareHub Works</h2>
        <p style="color:#555;margin:0 0 32px;font-size:.9rem;">Find licensed childcare in 3 simple steps — no account needed.</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:24px;text-align:left;">
            <div style="background:#f9fafb;border-radius:14px;padding:24px;">
                <div style="width:40px;height:40px;background:#065f46;color:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:1.1rem;margin-bottom:14px;">1</div>
                <h3 style="font-size:1rem;font-weight:700;color:#111;margin:0 0 8px;">Search by Location</h3>
                <p style="font-size:.87rem;color:#555;line-height:1.7;margin:0;">Enter your city, state, or ZIP code. Our directory covers all 50 states with 26,000+ licensed centers from official government databases.</p>
            </div>
            <div style="background:#f9fafb;border-radius:14px;padding:24px;">
                <div style="width:40px;height:40px;background:#065f46;color:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:1.1rem;margin-bottom:14px;">2</div>
                <h3 style="font-size:1rem;font-weight:700;color:#111;margin:0 0 8px;">Filter & Compare</h3>
                <p style="font-size:.87rem;color:#555;line-height:1.7;margin:0;">Filter by age group (infant, toddler, preschool), program type, and subsidy acceptance. Each profile shows contact info and licensing status.</p>
            </div>
            <div style="background:#f9fafb;border-radius:14px;padding:24px;">
                <div style="width:40px;height:40px;background:#065f46;color:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:1.1rem;margin-bottom:14px;">3</div>
                <h3 style="font-size:1rem;font-weight:700;color:#111;margin:0 0 8px;">Check Your Subsidies</h3>
                <p style="font-size:.87rem;color:#555;line-height:1.7;margin:0;">US families pay avg $14,760/year for childcare. CCAP, Head Start, and tax credits can dramatically cut that. <a href="/subsidies" style="color:#065f46;font-weight:600;">See if you qualify →</a></p>
            </div>
        </div>
    </div>
</section>

{{-- PROGRAM TYPES --}}
<section style="background:#fff;padding:48px 20px;">
    <div style="max-width:1000px;margin:0 auto;">
        <h2 style="text-align:center;font-size:1.5rem;font-weight:700;color:#1e3a5f;margin-bottom:8px;">Browse by Program Type</h2>
        <p style="text-align:center;color:#666;margin-bottom:28px;">Find childcare programs that match your child age and needs.</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(150px,1fr));gap:12px;">
            <a href="/facilities?search=infant" style="display:block;padding:16px 12px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;text-decoration:none;text-align:center;">
                <div style="font-size:1.8rem;margin-bottom:6px;">🍼</div>
                <div style="font-weight:700;font-size:.88rem;color:#1e3a5f;">Infant Care</div>
                <div style="font-size:.75rem;color:#888;margin-top:2px;">0-18 months</div>
            </a>
            <a href="/facilities?search=toddler" style="display:block;padding:16px 12px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;text-decoration:none;text-align:center;">
                <div style="font-size:1.8rem;margin-bottom:6px;">🧒</div>
                <div style="font-weight:700;font-size:.88rem;color:#1e3a5f;">Toddler</div>
                <div style="font-size:.75rem;color:#888;margin-top:2px;">18 mo - 3 yrs</div>
            </a>
            <a href="/facilities?search=preschool" style="display:block;padding:16px 12px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;text-decoration:none;text-align:center;">
                <div style="font-size:1.8rem;margin-bottom:6px;">🎒</div>
                <div style="font-weight:700;font-size:.88rem;color:#1e3a5f;">Preschool</div>
                <div style="font-size:.75rem;color:#888;margin-top:2px;">3-5 years</div>
            </a>
            <a href="/facilities?search=full" style="display:block;padding:16px 12px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;text-decoration:none;text-align:center;">
                <div style="font-size:1.8rem;margin-bottom:6px;">🏫</div>
                <div style="font-weight:700;font-size:.88rem;color:#1e3a5f;">Full-Day</div>
                <div style="font-size:.75rem;color:#888;margin-top:2px;">6+ hours/day</div>
            </a>
            <a href="/facilities?search=montessori" style="display:block;padding:16px 12px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;text-decoration:none;text-align:center;">
                <div style="font-size:1.8rem;margin-bottom:6px;">🌱</div>
                <div style="font-weight:700;font-size:.88rem;color:#1e3a5f;">Montessori</div>
                <div style="font-size:.75rem;color:#888;margin-top:2px;">Child-led</div>
            </a>
            <a href="/facilities?search=school" style="display:block;padding:16px 12px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;text-decoration:none;text-align:center;">
                <div style="font-size:1.8rem;margin-bottom:6px;">📚</div>
                <div style="font-weight:700;font-size:.88rem;color:#1e3a5f;">After School</div>
                <div style="font-size:.75rem;color:#888;margin-top:2px;">5-12 years</div>
            </a>
        </div>
    </div>
</section>

{{-- FEATURED CENTERS --}}
@if(isset($featuredCenters) && $featuredCenters->isNotEmpty())
<section style="background:#f8fafc;padding:48px 20px;">
    <div style="max-width:1100px;margin:0 auto;">
        <h2 style="font-size:1.5rem;font-weight:700;color:#1e3a5f;margin-bottom:8px;">Recently Verified Centers</h2>
        <p style="color:#666;margin-bottom:24px;">Licensed and verified daycare centers from our database.</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:16px;">
            @foreach($featuredCenters as $center)
            <a href="/facilities/{{ $center->name_id }}" style="display:block;background:#fff;border-radius:12px;border:1px solid #e5e7eb;padding:18px;text-decoration:none;color:inherit;">
                <h3 style="font-size:.95rem;font-weight:700;color:#1e3a5f;margin:0 0 6px;">{{ $center->rehab_name }}</h3>

                <p style="font-size:.82rem;color:#666;margin:0 0 8px;">📍 {{ $center->city }}, {{ $center->state }} {{ $center->zip }}</p>
                @if($center->age_range)
                <span style="background:#eff6ff;color:#2563eb;padding:3px 10px;border-radius:12px;font-size:.75rem;">{{ $center->age_range }}</span>
                @endif
                @if($center->max_capacity)
                <span style="background:#f0fdf4;color:#166534;padding:3px 10px;border-radius:12px;font-size:.75rem;margin-left:4px;">Cap: {{ $center->max_capacity }}</span>
                @endif
            </a>
            @endforeach
        </div>
        <div style="text-align:center;margin-top:24px;">
            <a href="/facilities" style="display:inline-block;background:#065f46;color:#fff;padding:13px 28px;border-radius:8px;font-weight:700;text-decoration:none;">Browse All Centers</a>
        </div>
    </div>
</section>
@endif

{{-- STATES --}}
<section style="background:#fff;padding:48px 20px;">
    <div style="max-width:1100px;margin:0 auto;">
        <h2 style="font-size:1.5rem;font-weight:700;color:#1e3a5f;margin-bottom:8px;">Find Daycare by State</h2>
        <p style="color:#666;margin-bottom:24px;font-size:.9rem;">All 50 states covered. Click your state for licensed centers and local subsidy programs.</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:10px;">
            @foreach($states as $s)
            <a href="/states/{{ strtolower(str_replace(' ', '-', $s->name)) }}"
               style="display:flex;justify-content:space-between;align-items:center;padding:12px 14px;background:#f8fafc;border:1px solid #e5e7eb;border-radius:8px;text-decoration:none;color:#1e3a5f;font-size:.88rem;font-weight:600;">
                {{ $s->name }}
                <span style="background:#dbeafe;color:#1d4ed8;padding:2px 8px;border-radius:10px;font-size:.75rem;">{{ $s->count }}</span>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- SUBSIDY BANNER --}}
<section style="background:linear-gradient(135deg,#065f46 0%,#059669 100%);padding:48px 20px;text-align:center;">
    <div style="max-width:700px;margin:0 auto;">
        <h2 style="font-size:1.5rem;font-weight:700;color:#fff;margin-bottom:10px;">Childcare May Be Free or Subsidized</h2>
        <p style="color:rgba(255,255,255,.88);margin-bottom:24px;line-height:1.65;">
            Federal and state programs help millions of families afford quality childcare. Programs like CCAP, Head Start, and Child Care Tax Credits may cover part or all costs.
        </p>
        <a href="/subsidies" style="display:inline-block;background:#fff;color:#065f46;padding:13px 28px;border-radius:8px;font-weight:700;text-decoration:none;">
            Learn About Subsidies
        </a>
    </div>
</section>

{{-- FAQ --}}
<section style="background:#fff;padding:48px 20px;">
    <div style="max-width:760px;margin:0 auto;">
        <h2 style="font-size:1.5rem;font-weight:700;color:#111;margin-bottom:6px;text-align:center;">Frequently Asked Questions</h2>
        <p style="color:#555;text-align:center;margin-bottom:24px;font-size:.9rem;">Common questions about finding and choosing childcare in the US.</p>
        <div style="border:1px solid #e5e7eb;border-radius:10px;margin-bottom:10px;overflow:hidden;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display=='none'?'block':'none'"
                    style="width:100%;text-align:left;padding:16px 18px;background:#fff;border:none;cursor:pointer;font-weight:600;font-size:.92rem;color:#111;display:flex;justify-content:space-between;font-family:inherit;">
                What makes a daycare licensed? <span style="color:#065f46;">+</span>
            </button>
            <div style="display:none;padding:14px 18px 16px;font-size:.88rem;color:#444;line-height:1.7;background:#f8fafc;">
                A licensed daycare has met all state requirements for safety, staff qualifications, child-to-caregiver ratios, facility standards, and health codes. All centers on DaycareHub are verified through official state licensing databases.
            </div>
        </div>
        <div style="border:1px solid #e5e7eb;border-radius:10px;margin-bottom:10px;overflow:hidden;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display=='none'?'block':'none'"
                    style="width:100%;text-align:left;padding:16px 18px;background:#fff;border:none;cursor:pointer;font-weight:600;font-size:.92rem;color:#111;display:flex;justify-content:space-between;font-family:inherit;">
                What is a good child-to-caregiver ratio? <span style="color:#065f46;">+</span>
            </button>
            <div style="display:none;padding:14px 18px 16px;font-size:.88rem;color:#444;line-height:1.7;background:#f8fafc;">
                Infants: 1 per 3-4 babies. Toddlers: 1 per 4-6. Preschoolers: 1 per 8-10. Many states mandate these ratios by law.
            </div>
        </div>
        <div style="border:1px solid #e5e7eb;border-radius:10px;margin-bottom:10px;overflow:hidden;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display=='none'?'block':'none'"
                    style="width:100%;text-align:left;padding:16px 18px;background:#fff;border:none;cursor:pointer;font-weight:600;font-size:.92rem;color:#111;display:flex;justify-content:space-between;font-family:inherit;">
                How do I find affordable daycare? <span style="color:#065f46;">+</span>
            </button>
            <div style="display:none;padding:14px 18px 16px;font-size:.88rem;color:#444;line-height:1.7;background:#f8fafc;">
                Start with your state CCAP (Child Care Assistance Program) for income-based subsidies. Head Start offers free programs for qualifying families. The federal Child and Dependent Care Tax Credit can also significantly offset costs.
            </div>
        </div>
        <div style="border:1px solid #e5e7eb;border-radius:10px;margin-bottom:10px;overflow:hidden;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display=='none'?'block':'none'"
                    style="width:100%;text-align:left;padding:16px 18px;background:#fff;border:none;cursor:pointer;font-weight:600;font-size:.92rem;color:#111;display:flex;justify-content:space-between;font-family:inherit;">
                Is home daycare safe? <span style="color:#065f46;">+</span>
            </button>
            <div style="display:none;padding:14px 18px 16px;font-size:.88rem;color:#444;line-height:1.7;background:#f8fafc;">
                Licensed home daycares are inspected by the state just like center-based care. Always verify the provider holds a current license before enrolling. Check your state's childcare licensing database for inspection history.
            </div>
        </div>
        <div style="border:1px solid #e5e7eb;border-radius:10px;margin-bottom:10px;overflow:hidden;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display=='none'?'block':'none'"
                    style="width:100%;text-align:left;padding:16px 18px;background:#fff;border:none;cursor:pointer;font-weight:600;font-size:.92rem;color:#111;display:flex;justify-content:space-between;font-family:inherit;">
                How much does daycare cost? <span style="color:#065f46;">+</span>
            </button>
            <div style="display:none;padding:14px 18px 16px;font-size:.88rem;color:#444;line-height:1.7;background:#f8fafc;">
                The national average for full-time center-based childcare is $1,230/month. Infant care is the most expensive ($1,000–$2,500/month). School-age before/after care averages $200–$700/month. Costs vary significantly by state — Massachusetts averages $2,400/month for infant care, while Mississippi averages $650/month. See our <a href="/blog/childcare-costs-us-2026-what-to-expect" style="color:#065f46;font-weight:600;">full cost guide →</a>
            </div>
        </div>
        <div style="border:1px solid #e5e7eb;border-radius:10px;margin-bottom:10px;overflow:hidden;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display=='none'?'block':'none'"
                    style="width:100%;text-align:left;padding:16px 18px;background:#fff;border:none;cursor:pointer;font-weight:600;font-size:.92rem;color:#111;display:flex;justify-content:space-between;font-family:inherit;">
                What is Head Start? <span style="color:#065f46;">+</span>
            </button>
            <div style="display:none;padding:14px 18px 16px;font-size:.88rem;color:#444;line-height:1.7;background:#f8fafc;">
                Head Start is a free federal program for income-eligible families with children ages 3-5. Early Head Start serves pregnant women and children 0-3. It includes not just childcare but health screenings, nutrition, and family support services. Over 1.3 million children participate annually. Income must be at or below the federal poverty level. <a href="/subsidies#head-start" style="color:#065f46;font-weight:600;">Learn more →</a>
            </div>
        </div>
        <div style="border:1px solid #e5e7eb;border-radius:10px;margin-bottom:10px;overflow:hidden;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display=='none'?'block':'none'"
                    style="width:100%;text-align:left;padding:16px 18px;background:#fff;border:none;cursor:pointer;font-weight:600;font-size:.92rem;color:#111;display:flex;justify-content:space-between;font-family:inherit;">
                When should I start looking for daycare? <span style="color:#065f46;">+</span>
            </button>
            <div style="display:none;padding:14px 18px 16px;font-size:.88rem;color:#444;line-height:1.7;background:#f8fafc;">
                Start as early as possible — ideally during the second trimester of pregnancy for infant care. Quality infant care programs in most cities have waitlists of 3–12 months. For preschool, start touring 9–12 months before your desired start date. For Head Start, apply during pregnancy for Early Head Start or when your child turns 2 for Head Start.
            </div>
        </div>
    </div>
</section>

<section style="padding:16px 20px 24px;background:#fff;border-top:1px solid #e5e7eb;">
    <div style="max-width:760px;margin:0 auto;text-align:center;">
        <p style="font-size:.78rem;color:#888;">Last updated: {{ date('F j, Y') }} · Data: State licensing databases, Child Care Aware of America, HHS/ACF</p>
    </div>
</section>

@endsection
