@extends('layouts.app')

@section('title', 'Find Daycare Centers by State — All 50 US States | DaycareHub')
@section('meta_description', 'Browse licensed daycare and childcare centers in all 50 US states. Find programs by age group, compare subsidies, and check licensing requirements for your state.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Browse by State"}
    ]
}
</script>
@endsection

@section('content')
<div style="margin-top:64px;">

<div style="max-width:1100px;margin:0 auto;padding:14px 20px 0;font-size:.85rem;color:#666;">
    <a href="/" style="color:#065f46;text-decoration:none;">Home</a>
    <span style="margin:0 8px;color:#ccc;">/</span>
    <span style="color:#333;">Browse by State</span>
</div>

<section style="background:#fff;padding:28px 20px 20px;border-bottom:1px solid #e5e7eb;">
    <div style="max-width:1100px;margin:0 auto;">
        <h1 style="font-size:1.8rem;font-weight:800;color:#111;margin:0 0 8px;">Find Daycare Centers by State</h1>
        <p style="color:#555;font-size:.92rem;line-height:1.7;max-width:700px;margin:0 0 18px;">Every US state licenses childcare centers separately through its own database. Click your state to browse verified licensed centers, local subsidy programs, and CCAP-certified providers.</p>

        <div style="display:flex;flex-wrap:wrap;gap:5px;margin-bottom:4px;">
            @foreach(range('A','Z') as $letter)
            <a href="#letter-{{ $letter }}" style="width:30px;height:30px;display:flex;align-items:center;justify-content:center;background:#f3f4f6;border-radius:6px;color:#333;font-weight:700;font-size:.82rem;text-decoration:none;transition:all .15s;" onmouseover="this.style.background='#065f46';this.style.color='#fff'" onmouseout="this.style.background='#f3f4f6';this.style.color='#333'">{{ $letter }}</a>
            @endforeach
        </div>
    </div>
</section>

<section style="background:#f9fafb;padding:28px 20px 48px;">
    <div style="max-width:1100px;margin:0 auto;">
        @php
        $grouped = $states->groupBy(function($s) { return strtoupper(substr($s->name, 0, 1)); })->sortKeys();
        @endphp

        @foreach($grouped as $letter => $group)
        <div id="letter-{{ $letter }}" style="margin-bottom:28px;">
            <div style="font-size:1.1rem;font-weight:800;color:#065f46;margin-bottom:10px;padding-bottom:5px;border-bottom:2px solid #d1fae5;">{{ $letter }}</div>
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(210px,1fr));gap:8px;">
                @foreach($group as $state)
                <a href="/states/{{ strtolower(str_replace(' ', '-', $state->name)) }}"
                   style="display:flex;justify-content:space-between;align-items:center;background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:12px 14px;text-decoration:none;color:#111;font-weight:600;font-size:.88rem;transition:all .15s;"
                   onmouseover="this.style.borderColor='#065f46';this.style.color='#065f46';this.style.background='#f0fdf4'"
                   onmouseout="this.style.borderColor='#e5e7eb';this.style.color='#111';this.style.background='#fff'">
                    <span>{{ $state->name }}</span>
                    @php $cnt = $state->facilities_count ?? $state->count ?? 0; @endphp
                    @if($cnt > 0)
                    <span style="background:#f0fdf4;color:#065f46;padding:2px 9px;border-radius:10px;font-size:.75rem;font-weight:700;white-space:nowrap;margin-left:6px;">{{ number_format($cnt) }}</span>
                    @endif
                </a>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

<section style="background:#065f46;padding:36px 20px;text-align:center;">
    <div style="max-width:700px;margin:0 auto;">
        <h2 style="font-size:1.2rem;font-weight:700;color:#fff;margin:0 0 8px;">Search All 26,000+ Centers Nationwide</h2>
        <p style="color:rgba(255,255,255,.88);margin:0 0 18px;font-size:.9rem;">Search by name, city, or ZIP code. Filter by age group and program type.</p>
        <div style="display:flex;flex-wrap:wrap;gap:10px;justify-content:center;">
            <a href="/facilities" style="background:#fff;color:#065f46;padding:11px 22px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.9rem;">Browse All Centers</a>
            <a href="/subsidies" style="background:rgba(255,255,255,.15);color:#fff;padding:11px 22px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.9rem;border:1px solid rgba(255,255,255,.3);">Check Subsidies</a>
        </div>
    </div>
</section>

<div style="max-width:1100px;margin:0 auto;padding:10px 20px;text-align:right;">
    <p style="font-size:.75rem;color:#aaa;">Last updated: {{ date('F j, Y') }} · Source: State licensing databases</p>
</div>

</div>
@endsection
