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
{{-- ПОИСК В СТИЛЕ REHABHIVE --}}
<section style="background:#f8fafc;padding:24px 20px;border-bottom:1px solid #e5e7eb;">
    <div style="max-width:1000px;margin:0 auto;">
        {{-- Заголовок и breadcrumbs --}}
        <nav style="font-size:.85rem;color:#6b7280;margin-bottom:12px;">
            <a href="/" style="color:#059669;text-decoration:none;">Home</a>
            <span style="margin:0 6px;color:#d1d5db;">›</span>
            <span style="color:#374151;">Find Centers</span>
        </nav>

        <h1 style="font-size:1.8rem;font-weight:800;color:#111827;margin:0 0 6px;">Licensed Childcare Centers</h1>
        <p style="color:#6b7280;margin:0 0 24px;font-size:.95rem;">Licensed centers from official state registries — free, no signup required</p>

        {{-- ПРОСТОЙ ПОИСК КАК В REHABHIVE --}}
        <form action="{{ route('facilities.index') }}" method="GET" style="display:flex;gap:12px;flex-wrap:wrap;align-items:end;">
            {{-- Главное поле поиска --}}
            <div style="flex:1;min-width:300px;">
                <label style="display:block;font-size:.85rem;font-weight:600;color:#374151;margin-bottom:6px;">Search by name, city, or ZIP</label>
                <input type="text" 
                       name="search" 
                       value="{{ request('search') }}" 
                       placeholder="e.g., Bright Horizons, Manhattan, 10001"
                       style="width:100%;padding:12px 16px;border:1px solid #d1d5db;border-radius:8px;font-size:.95rem;outline:none;transition:border-color .2s;"
                       onfocus="this.style.borderColor='#059669'" 
                       onblur="this.style.borderColor='#d1d5db'">
            </div>

            {{-- State Filter --}}
            <div style="min-width:140px;">
                <label style="display:block;font-size:.85rem;font-weight:600;color:#374151;margin-bottom:6px;">State</label>
                <select name="state" 
                        style="width:100%;padding:12px 16px;border:1px solid #d1d5db;border-radius:8px;font-size:.95rem;background:#fff;cursor:pointer;outline:none;">
                    <option value="">All States</option>
                    @foreach($states as $stateOption)
                    <option value="{{ $stateOption->code }}" {{ request('state') == $stateOption->code ? 'selected' : '' }}>
                        {{ $stateOption->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            {{-- Age Filter --}}
            <div style="min-width:140px;">
                <label style="display:block;font-size:.85rem;font-weight:600;color:#374151;margin-bottom:6px;">Age Group</label>
                <select name="age" 
                        style="width:100%;padding:12px 16px;border:1px solid #d1d5db;border-radius:8px;font-size:.95rem;background:#fff;cursor:pointer;outline:none;">
                    <option value="">All Ages</option>
                    <option value="infant" {{ request('age') == 'infant' ? 'selected' : '' }}>Infant (0-12m)</option>
                    <option value="toddler" {{ request('age') == 'toddler' ? 'selected' : '' }}>Toddler (1-3y)</option>
                    <option value="preschool" {{ request('age') == 'preschool' ? 'selected' : '' }}>Preschool (3-5y)</option>
                    <option value="school" {{ request('age') == 'school' ? 'selected' : '' }}>School Age (5+)</option>
                </select>
            </div>

            {{-- Search Button --}}
            <button type="submit" 
                    style="padding:12px 24px;background:#059669;color:#fff;border:none;border-radius:8px;font-weight:600;cursor:pointer;transition:background .2s;white-space:nowrap;"
                    onmouseover="this.style.background='#047857'" 
                    onmouseout="this.style.background='#059669'">
                Search
            </button>
        </form>

        {{-- Results Count --}}
        @if(isset($facilities) && $facilities->total() > 0)
        <div style="margin-top:20px;padding-top:16px;border-top:1px solid #e5e7eb;">
            <p style="color:#6b7280;font-size:.9rem;margin:0;display:flex;justify-content:space-between;align-items:center;">
                <span>
                    Showing <strong style="color:#374151;">{{ number_format($facilities->firstItem() ?? 0) }}-{{ number_format($facilities->lastItem() ?? 0) }}</strong> 
                    of <strong style="color:#374151;">{{ number_format($facilities->total()) }}</strong> centers
                    @if(request('search'))
                    for "<strong style="color:#059669;">{{ request('search') }}</strong>"
                    @endif
                </span>
                
                {{-- Sort Options --}}
                <select name="sort" onchange="this.form.submit()" form="search-form"
                        style="padding:6px 12px;border:1px solid #d1d5db;border-radius:6px;font-size:.85rem;background:#fff;">
                    <option value="name" {{ request('sort', 'name') == 'name' ? 'selected' : '' }}>A-Z</option>
                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Newest</option>
                </select>
            </p>
        </div>
        @endif
    </div>
</section>

{{-- Auto-submit при изменении фильтров --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const selects = document.querySelectorAll('select[name="state"], select[name="age"]');
    selects.forEach(select => {
        select.addEventListener('change', function() {
            this.form.submit();
        });
    });
    
    // Debounced search
    let searchTimeout;
    const searchInput = document.querySelector('input[name="search"]');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                if (this.value.length >= 2 || this.value.length === 0) {
                    this.form.submit();
                }
            }, 600);
        });
    }
});
</script>

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