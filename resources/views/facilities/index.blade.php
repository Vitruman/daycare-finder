@extends('layouts.app')

@section('title', 'Licensed Daycare & Childcare Centers — Search 26,000+ Verified | DaycareHub')
@section('meta_description', 'Search 26,000+ licensed daycare and childcare centers across the US. Filter by state, age group, and program type. All listings from official state licensing databases.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Find Centers"}
    ]
}
</script>
@endsection

@section('content')
<div style="margin-top:64px;">

{{-- Header + Search --}}
<section style="background:#fff;border-bottom:1px solid #e5e7eb;padding:28px 20px;">
    <div style="max-width:1200px;margin:0 auto;">
        <div style="margin-bottom:20px;">
            <nav style="font-size:.82rem;color:#9ca3af;margin-bottom:8px;">
                <a href="/" style="color:#065f46;text-decoration:none;">Home</a>
                <span style="margin:0 6px;">›</span>
                <span>Find Centers</span>
            </nav>
            <h1 style="font-size:1.6rem;font-weight:800;color:#111;margin:0 0 4px;">Licensed Childcare Centers</h1>
            <p style="color:#6b7280;font-size:.9rem;margin:0;">Licensed centers from official state registries. Verify status on your state's licensing database.</p>
        </div>

        <form action="{{ route('facilities.index') }}" method="GET">
            <div style="display:flex;flex-wrap:wrap;gap:10px;align-items:flex-end;">
                <div style="flex:1;min-width:220px;">
                    <label style="display:block;font-size:.78rem;font-weight:600;color:#374151;margin-bottom:4px;">Search</label>
                    <div style="position:relative;">
                        <svg style="position:absolute;left:10px;top:50%;transform:translateY(-50%);color:#9ca3af;" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Name, city, or ZIP..."
                               style="width:100%;padding:9px 12px 9px 34px;border:1px solid #d1d5db;border-radius:8px;font-size:.88rem;color:#111;box-sizing:border-box;outline:none;" onfocus="this.style.borderColor='#065f46'" onblur="this.style.borderColor='#d1d5db'">
                    </div>
                </div>
                <div style="min-width:150px;">
                    <label style="display:block;font-size:.78rem;font-weight:600;color:#374151;margin-bottom:4px;">State</label>
                    <select name="state" style="width:100%;padding:9px 10px;border:1px solid #d1d5db;border-radius:8px;font-size:.88rem;color:#111;background:#fff;outline:none;" onfocus="this.style.borderColor='#065f46'" onblur="this.style.borderColor='#d1d5db'">
                        <option value="">All States</option>
                        @foreach($states as $state)
                        <option value="{{ $state->code }}" {{ request('state') == $state->code ? 'selected' : '' }}>{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div style="min-width:130px;">
                    <label style="display:block;font-size:.78rem;font-weight:600;color:#374151;margin-bottom:4px;">Age Group</label>
                    <select name="age" style="width:100%;padding:9px 10px;border:1px solid #d1d5db;border-radius:8px;font-size:.88rem;color:#111;background:#fff;outline:none;">
                        <option value="">Any Age</option>
                        <option value="infant" {{ request('age')=='infant'?'selected':'' }}>Infant (0–12 mo)</option>
                        <option value="toddler" {{ request('age')=='toddler'?'selected':'' }}>Toddler (1–3 yrs)</option>
                        <option value="preschool" {{ request('age')=='preschool'?'selected':'' }}>Preschool (3–5)</option>
                        <option value="school" {{ request('age')=='school'?'selected':'' }}>School-Age (5+)</option>
                    </select>
                </div>
                <div style="min-width:120px;">
                    <label style="display:block;font-size:.78rem;font-weight:600;color:#374151;margin-bottom:4px;">Sort By</label>
                    <select name="sort" style="width:100%;padding:9px 10px;border:1px solid #d1d5db;border-radius:8px;font-size:.88rem;color:#111;background:#fff;outline:none;">
                        <option value="latest" {{ request('sort','latest')=='latest'?'selected':'' }}>Newest</option>
                        <option value="name" {{ request('sort')=='name'?'selected':'' }}>Name A–Z</option>
                    </select>
                </div>
                <button type="submit" style="padding:9px 22px;background:#065f46;color:#fff;border:none;border-radius:8px;font-weight:700;font-size:.88rem;cursor:pointer;white-space:nowrap;">Search</button>
                @if(request()->hasAny(['search','state','sort','age']))
                <a href="{{ route('facilities.index') }}" style="padding:9px 14px;background:#f9fafb;color:#6b7280;border:1px solid #e5e7eb;border-radius:8px;font-size:.85rem;font-weight:600;text-decoration:none;">Clear</a>
                @endif
            </div>
        </form>
    </div>
</section>

{{-- Results --}}
<section style="background:#f9fafb;padding:24px 20px 48px;">
    <div style="max-width:1200px;margin:0 auto;">

        {{-- Result count + filters summary --}}
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;flex-wrap:wrap;gap:8px;">
            @if($facilities->count() > 0)
            <p style="font-size:.85rem;color:#6b7280;margin:0;">
                Showing <strong style="color:#111;">{{ ($facilities->currentPage()-1)*$facilities->perPage()+1 }}–{{ min($facilities->currentPage()*$facilities->perPage(),$facilities->total()) }}</strong>
                of <strong style="color:#111;">{{ number_format($facilities->total()) }}</strong> licensed centers
                @if(request('search')) matching "<strong>{{ request('search') }}</strong>"@endif
                @if(request('state')) in <strong>{{ request('state') }}</strong>@endif
            </p>
            @endif
            <div style="display:flex;gap:8px;flex-wrap:wrap;">
                @foreach(['infant'=>'🍼 Infant','toddler'=>'🧒 Toddler','preschool'=>'🎒 Preschool','head+start'=>'⭐ Head Start'] as $v=>$label)
                <a href="/facilities?search={{ $v }}" style="padding:4px 12px;background:{{ request('search')==$v?'#065f46':'#fff' }};color:{{ request('search')==$v?'#fff':'#374151' }};border:1px solid {{ request('search')==$v?'#065f46':'#e5e7eb' }};border-radius:20px;font-size:.78rem;font-weight:600;text-decoration:none;">{{ $label }}</a>
                @endforeach
            </div>
        </div>

        @if($facilities->count() > 0)
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(320px,1fr));gap:12px;">
            @foreach($facilities as $facility)
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;transition:all .15s;" onmouseover="this.style.borderColor='#065f46';this.style.boxShadow='0 4px 16px rgba(6,95,70,.1)'" onmouseout="this.style.borderColor='#e5e7eb';this.style.boxShadow='none'">
                <div style="display:flex;gap:14px;padding:16px;">
                    {{-- Avatar --}}
                    <div style="width:52px;height:52px;background:linear-gradient(135deg,#065f46,#059669);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#fff;font-size:1.3rem;font-weight:800;">
                        {{ strtoupper(substr($facility->rehab_name ?? 'D', 0, 1)) }}
                    </div>
                    <div style="min-width:0;flex:1;">
                        <h3 style="font-size:.9rem;font-weight:700;color:#111;margin:0 0 4px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
                            <a href="{{ route('facilities.show', $facility) }}" style="color:inherit;text-decoration:none;">{{ ucwords(strtolower($facility->rehab_name)) }}</a>
                        </h3>
                        <div style="font-size:.8rem;color:#6b7280;display:flex;align-items:center;gap:4px;margin-bottom:6px;">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            {{ $facility->city }}, {{ $facility->state }}
                            @if($facility->zip) · {{ $facility->zip }}@endif
                        </div>
                        <div style="display:flex;gap:6px;flex-wrap:wrap;">
                            @if($facility->age_range)
                            <span style="background:#f0fdf4;color:#065f46;padding:2px 8px;border-radius:10px;font-size:.72rem;font-weight:600;">{{ $facility->age_range }}</span>
                            @endif
                            @if($facility->program_type)
                            <span style="background:#f3f4f6;color:#374151;padding:2px 8px;border-radius:10px;font-size:.72rem;font-weight:600;">{{ $facility->program_type }}</span>
                            @endif
                            <span style="background:#f0fdf4;color:#065f46;padding:2px 8px;border-radius:10px;font-size:.72rem;font-weight:600;">✓ Licensed</span>
                        </div>
                    </div>
                </div>
                <div style="border-top:1px solid #f3f4f6;padding:10px 16px;display:flex;gap:8px;background:#fafafa;">
                    <a href="{{ route('facilities.show', $facility) }}" style="flex:1;text-align:center;padding:7px;background:#065f46;color:#fff;border-radius:7px;font-size:.8rem;font-weight:700;text-decoration:none;">View Profile</a>
                    @if($facility->phone)
                    <a href="tel:{{ $facility->phone }}" style="padding:7px 14px;background:#fff;color:#065f46;border:1px solid #065f46;border-radius:7px;font-size:.8rem;font-weight:700;text-decoration:none;display:flex;align-items:center;gap:4px;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81 19.79 19.79 0 01.22 2.18 2 2 0 012.18 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.16 6.16l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        Call
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        <div style="margin-top:28px;">{{ $facilities->links() }}</div>

        @else
        <div style="background:#fff;border:1px solid #e5e7eb;border-radius:14px;padding:56px 20px;text-align:center;">
            <div style="font-size:3rem;margin-bottom:14px;">🔍</div>
            <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:0 0 8px;">No centers found</h3>
            <p style="color:#6b7280;font-size:.9rem;margin:0 0 20px;">Try a different search term, state, or <a href="{{ route('facilities.index') }}" style="color:#065f46;font-weight:600;">browse all centers</a>.</p>
        </div>
        @endif
    </div>
</section>

</div>
@endsection
