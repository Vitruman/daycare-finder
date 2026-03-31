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
@include("components.read-also")
@endsection

@section('content')
<div>
@include("components.breadcrumbs")

{{-- Modern Search Section --}}
{{-- ИСПРАВЛЕННЫЙ ПОИСК КАК В REHABHIVE --}}

{{-- Hero with Clean Search --}}
<section style="background:#f8fafc;border-bottom:1px solid #e5e7eb;padding:32px 20px;">
    <div style="max-width:1000px;margin:0 auto;">
        {{-- Breadcrumbs --}}
        

        <h1 style="font-size:1.9rem;font-weight:800;color:#111827;margin:0 0 8px;line-height:1.2;">Licensed Childcare Centers</h1>
        <p style="color:#6b7280;font-size:.95rem;margin:0 0 32px;line-height:1.5;">Licensed centers from official state registries. Verify status on your state's licensing database.</p>

        {{-- CLEAN SEARCH INPUT - like RehabHive --}}
        <form action="{{ route('facilities.index') }}" method="GET" class="search-form">
            <div style="position:relative;margin-bottom:20px;">
                <svg style="position:absolute;left:16px;top:50%;transform:translateY(-50%);color:#9ca3af;width:20px;height:20px;pointer-events:none;" 
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="m21 21-4.35-4.35"/>
                </svg>
                <input type="text" 
                       name="search" 
                       value="{{ request('search') }}" 
                       placeholder="Search by name, city, ZIP code..."
                       style="width:100%;padding:16px 20px 16px 50px;border:2px solid #e5e7eb;border-radius:12px;background:#fff;font-size:1rem;outline:none;transition:border-color .2s,box-shadow .2s;"
                       onfocus="this.style.borderColor='#059669';this.style.boxShadow='0 0 0 3px rgba(5,150,105,0.1)'"
                       onblur="this.style.borderColor='#e5e7eb';this.style.boxShadow='none'"
                       autocomplete="off">
            </div>

            {{-- Filter Pills - Clean Style --}}
            <div style="display:flex;gap:12px;flex-wrap:wrap;">
                {{-- State Filter --}}
                <div style="position:relative;">
                    <select name="state" 
                            onchange="this.form.submit()"
                            style="appearance:none;padding:10px 32px 10px 16px;border:1px solid #d1d5db;border-radius:8px;background:#fff url('data:image/svg+xml;charset=utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"%236b7280\"><path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"/></svg>') no-repeat right 8px center;background-size:20px;font-size:.9rem;color:#374151;outline:none;cursor:pointer;min-width:120px;">
                        <option value="">All States</option>
                        @foreach($states as $stateOption)
                        <option value="{{ $stateOption->code }}" {{ request('state') == $stateOption->code ? 'selected' : '' }}>
                            {{ $stateOption->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                {{-- Age Filter --}}
                <div style="position:relative;">
                    <select name="age" 
                            onchange="this.form.submit()"
                            style="appearance:none;padding:10px 32px 10px 16px;border:1px solid #d1d5db;border-radius:8px;background:#fff url('data:image/svg+xml;charset=utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"%236b7280\"><path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"/></svg>') no-repeat right 8px center;background-size:20px;font-size:.9rem;color:#374151;outline:none;cursor:pointer;min-width:130px;">
                        <option value="">All Ages</option>
                        <option value="infant" {{ request('age') == 'infant' ? 'selected' : '' }}>Infant (0-12m)</option>
                        <option value="toddler" {{ request('age') == 'toddler' ? 'selected' : '' }}>Toddler (1-3y)</option>
                        <option value="preschool" {{ request('age') == 'preschool' ? 'selected' : '' }}>Preschool (3-5y)</option>
                        <option value="school" {{ request('age') == 'school' ? 'selected' : '' }}>School Age (5+)</option>
                    </select>
                </div>

                {{-- Sort Filter --}}
                <div style="position:relative;">
                    <select name="sort" 
                            onchange="this.form.submit()"
                            style="appearance:none;padding:10px 32px 10px 16px;border:1px solid #d1d5db;border-radius:8px;background:#fff url('data:image/svg+xml;charset=utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"%236b7280\"><path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"/></svg>') no-repeat right 8px center;background-size:20px;font-size:.9rem;color:#374151;outline:none;cursor:pointer;min-width:120px;">
                        <option value="name">A-Z</option>
                        <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Newest</option>
                    </select>
                </div>

                {{-- Clear Filters --}}
                @if(request()->hasAny(['search', 'state', 'age', 'sort']))
                <a href="{{ route('facilities.index') }}" 
                   style="display:inline-flex;align-items:center;padding:10px 16px;border:1px solid #d1d5db;border-radius:8px;background:#f9fafb;color:#6b7280;text-decoration:none;font-size:.9rem;transition:all .2s;"
                   onmouseover="this.style.background='#f3f4f6'" 
                   onmouseout="this.style.background='#f9fafb'">
                    Clear All
                </a>
                @endif
            </div>
        </form>

        {{-- Results Count --}}
        @if(isset($facilities))
        <div style="margin-top:20px;padding-top:20px;border-top:1px solid #e5e7eb;">
            <p style="color:#6b7280;font-size:.9rem;margin:0;">
                Showing <strong style="color:#374151;">{{ $facilities->firstItem() ?? 0 }}-{{ $facilities->lastItem() ?? 0 }}</strong> 
                of <strong style="color:#374151;">{{ number_format($facilities->total()) }}</strong> 
                licensed centers
                @if(request('search'))
                for "<strong style="color:#059669;">{{ request('search') }}</strong>"
                @endif
                @if(request('state'))
                in <strong>{{ $states->where('code', request('state'))->first()->name ?? request('state') }}</strong>
                @endif
            </p>
        </div>
        @endif
    </div>
</section>

<script>
// Auto-submit search with debounce - like RehabHive
let searchTimeout;
document.querySelector('input[name="search"]').addEventListener('input', function(e) {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(() => {
        if (this.value.length >= 2 || this.value.length === 0) {
            this.form.submit();
        }
    }, 500);
});
</script>

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
                @foreach(['infant'=>'<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M10 2h4"/><path d="M12 14v4"/><path d="M8 6h8l1 8a5 5 0 01-10 0z"/></svg> Infant','toddler'=>'<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg> Toddler','preschool'=>'<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M16 20V10a4 4 0 00-8 0v10"/><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M9 4h6"/></svg> Preschool','head+start'=>'<svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg> Head Start'] as $v=>$label)
                <a href="/facilities?search={{ $v }}" style="padding:4px 12px;background:{{ request('search')==$v?'#065f46':'#fff' }};color:{{ request('search')==$v?'#fff':'#374151' }};border:1px solid {{ request('search')==$v?'#065f46':'#e5e7eb' }};border-radius:20px;font-size:.78rem;font-weight:600;text-decoration:none;">{!! $label !!}</a>
                @endforeach
            </div>
        </div>

        @if($facilities->count() > 0)
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(320px,1fr));gap:12px;">
            @foreach($facilities as $facility)
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;transition:all .15s;display:flex;flex-direction:column;" onmouseover="this.style.borderColor='#065f46';this.style.boxShadow='0 4px 16px rgba(6,95,70,.1)'" onmouseout="this.style.borderColor='#e5e7eb';this.style.boxShadow='none'">
                <div style="display:flex;gap:14px;padding:16px;flex:1;">
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
                            {{ ucwords(strtolower($facility->city)) }}, {{ $facility->state }}
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
            <div style="font-size:3rem;margin-bottom:14px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg></div>
            <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:0 0 8px;">No centers found</h3>
            <p style="color:#6b7280;font-size:.9rem;margin:0 0 20px;">Try a different search term, state, or <a href="{{ route('facilities.index') }}" style="color:#065f46;font-weight:600;">browse all centers</a>.</p>
        </div>
        @endif
    </div>
</section>

</div>

{{-- JavaScript --}}
<script>
let searchTimeout;

function toggleDropdown(type) {
    const dropdown = document.getElementById(type + 'Dropdown');
    // Закрыть остальные
    ['state', 'age', 'sort'].forEach(t => {
        if (t !== type) document.getElementById(t + 'Dropdown').style.display = 'none';
    });
    // Переключить текущий
    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
}

function setFilter(name, value) {
    document.getElementById('hidden' + name.charAt(0).toUpperCase() + name.slice(1)).value = value;
    document.getElementById('searchForm').submit();
}

function delayedSubmit() {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(() => {
        document.getElementById('searchForm').submit();
    }, 500);
}

// Закрыть dropdown при клике вне
document.addEventListener('click', function(e) {
    if (!e.target.closest('[onclick*="toggleDropdown"]') && !e.target.closest('[id$="Dropdown"]')) {
        ['state', 'age', 'sort'].forEach(type => {
            document.getElementById(type + 'Dropdown').style.display = 'none';
        });
    }
});
</script>
@include("components.read-also")
@endsection