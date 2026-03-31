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
<div style="margin-top:64px;">

{{-- Modern Search Section --}}
<section style="background:#f0fdf4;border-bottom:1px solid #d1fae5;padding:28px 20px;">
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

        <form action="{{ route('facilities.index') }}" method="GET" id="searchForm">
            {{-- Main Search Input --}}
            <div style="margin-bottom:16px;">
                <div style="position:relative;">
                    <svg style="position:absolute;left:18px;top:50%;transform:translateY(-50%);color:#999;pointer-events:none;width:18px;height:18px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.35-4.35"/>
                    </svg>
                    <input type="text" name="search" value="{{ request('search') }}" 
                           placeholder="Search by name, city, ZIP code..."
                           style="width:100%;padding:14px 18px 14px 48px;border-radius:60px;border:1.5px solid #c4d8e4;background:#fff;font-size:15px;outline:none;transition:border .2s,box-shadow .2s;"
                           onfocus="this.style.borderColor='#065f46';this.style.boxShadow='0 0 0 4px rgba(6,95,70,.08)'" 
                           onblur="this.style.borderColor='#c4d8e4';this.style.boxShadow='none'"
                           onkeyup="delayedSubmit()">
                </div>
            </div>
            
            {{-- Filter Pills --}}
            <div style="display:flex;gap:8px;overflow-x:auto;margin-bottom:16px;padding:2px 0;scrollbar-width:none;-webkit-overflow-scrolling:touch;">
                <style>.filter-row::-webkit-scrollbar{display:none;}</style>
                
                {{-- State --}}
                <div style="position:relative;">
                    <button type="button" onclick="toggleDropdown('state')" 
                            style="display:inline-flex;align-items:center;gap:6px;padding:9px 18px;border-radius:60px;border:1.5px solid {{ request('state') ? '#065f46' : '#c4d8e4' }};background:{{ request('state') ? '#065f46' : '#f0f6fa' }};font-size:13.5px;font-weight:500;color:{{ request('state') ? '#fff' : '#3a6f8c' }};cursor:pointer;white-space:nowrap;transition:all .15s;flex-shrink:0;">
                        🌎 {{ request('state') ? request('state') : 'State' }} ▾
                    </button>
                    <div id="stateDropdown" style="display:none;position:absolute;top:100%;left:0;margin-top:4px;width:200px;max-height:300px;overflow-y:auto;background:#fff;border:1px solid #d1fae5;border-radius:12px;box-shadow:0 8px 25px rgba(0,0,0,.15);z-index:50;">
                        <div onclick="setFilter('state', '')" style="padding:10px 14px;cursor:pointer;font-size:13.5px;color:#444;transition:background .1s;" onmouseover="this.style.background='#f5f3f0'" onmouseout="this.style.background='transparent'">All States</div>
                        @foreach($states as $state)
                        <div onclick="setFilter('state', '{{ $state->code }}')" style="padding:10px 14px;cursor:pointer;font-size:13.5px;color:#444;{{ request('state')==$state->code ? 'background:#065f46;color:#fff;' : '' }}transition:background .1s;" onmouseover="if(!this.classList.contains('active')) this.style.background='#f5f3f0'" onmouseout="if(!this.classList.contains('active')) this.style.background='transparent'">{{ $state->name }}</div>
                        @endforeach
                    </div>
                </div>

                {{-- Age --}}
                <div style="position:relative;">
                    <button type="button" onclick="toggleDropdown('age')"
                            style="display:inline-flex;align-items:center;gap:6px;padding:9px 18px;border-radius:60px;border:1.5px solid {{ request('age') ? '#065f46' : '#c4d8e4' }};background:{{ request('age') ? '#065f46' : '#f0f6fa' }};font-size:13.5px;font-weight:500;color:{{ request('age') ? '#fff' : '#3a6f8c' }};cursor:pointer;white-space:nowrap;transition:all .15s;flex-shrink:0;">
                        👶 {{ ['infant'=>'Infant','toddler'=>'Toddler','preschool'=>'Preschool','school'=>'School'][request('age')] ?? 'Age Group' }} ▾
                    </button>
                    <div id="ageDropdown" style="display:none;position:absolute;top:100%;left:0;margin-top:4px;width:180px;background:#fff;border:1px solid #d1fae5;border-radius:12px;box-shadow:0 8px 25px rgba(0,0,0,.15);z-index:50;">
                        <div onclick="setFilter('age', '')" style="padding:10px 14px;cursor:pointer;font-size:13.5px;color:#444;transition:background .1s;" onmouseover="this.style.background='#f5f3f0'" onmouseout="this.style.background='transparent'">Any Age</div>
                        <div onclick="setFilter('age', 'infant')" style="padding:10px 14px;cursor:pointer;font-size:13.5px;color:#444;{{ request('age')=='infant' ? 'background:#065f46;color:#fff;' : '' }}transition:background .1s;" onmouseover="if(!this.classList.contains('active')) this.style.background='#f5f3f0'" onmouseout="if(!this.classList.contains('active')) this.style.background='transparent'"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M10 2h4"/><path d="M12 14v4"/><path d="M8 6h8l1 8a5 5 0 01-10 0z"/></svg> Infant (0–12 mo)</div>
                        <div onclick="setFilter('age', 'toddler')" style="padding:10px 14px;cursor:pointer;font-size:13.5px;color:#444;{{ request('age')=='toddler' ? 'background:#065f46;color:#fff;' : '' }}transition:background .1s;" onmouseover="if(!this.classList.contains('active')) this.style.background='#f5f3f0'" onmouseout="if(!this.classList.contains('active')) this.style.background='transparent'"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg> Toddler (1–3 yrs)</div>
                        <div onclick="setFilter('age', 'preschool')" style="padding:10px 14px;cursor:pointer;font-size:13.5px;color:#444;{{ request('age')=='preschool' ? 'background:#065f46;color:#fff;' : '' }}transition:background .1s;" onmouseover="if(!this.classList.contains('active')) this.style.background='#f5f3f0'" onmouseout="if(!this.classList.contains('active')) this.style.background='transparent'"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M16 20V10a4 4 0 00-8 0v10"/><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M9 4h6"/></svg> Preschool (3–5)</div>
                        <div onclick="setFilter('age', 'school')" style="padding:10px 14px;cursor:pointer;font-size:13.5px;color:#444;{{ request('age')=='school' ? 'background:#065f46;color:#fff;' : '' }}transition:background .1s;" onmouseover="if(!this.classList.contains('active')) this.style.background='#f5f3f0'" onmouseout="if(!this.classList.contains('active')) this.style.background='transparent'"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg> School-Age (5+)</div>
                    </div>
                </div>

                {{-- Sort --}}
                <div style="position:relative;">
                    <button type="button" onclick="toggleDropdown('sort')"
                            style="display:inline-flex;align-items:center;gap:6px;padding:9px 18px;border-radius:60px;border:1.5px solid #c4d8e4;background:#f0f6fa;font-size:13.5px;font-weight:500;color:#3a6f8c;cursor:pointer;white-space:nowrap;transition:all .15s;flex-shrink:0;">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><polyline points="23,4 23,10 17,10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg> {{ ['latest'=>'Newest','name'=>'A–Z'][request('sort', 'latest')] }} ▾
                    </button>
                    <div id="sortDropdown" style="display:none;position:absolute;top:100%;left:0;margin-top:4px;width:120px;background:#fff;border:1px solid #d1fae5;border-radius:12px;box-shadow:0 8px 25px rgba(0,0,0,.15);z-index:50;">
                        <div onclick="setFilter('sort', 'latest')" style="padding:10px 14px;cursor:pointer;font-size:13.5px;color:#444;{{ request('sort','latest')=='latest' ? 'background:#065f46;color:#fff;' : '' }}transition:background .1s;" onmouseover="if(!this.classList.contains('active')) this.style.background='#f5f3f0'" onmouseout="if(!this.classList.contains('active')) this.style.background='transparent'">Newest</div>
                        <div onclick="setFilter('sort', 'name')" style="padding:10px 14px;cursor:pointer;font-size:13.5px;color:#444;{{ request('sort')=='name' ? 'background:#065f46;color:#fff;' : '' }}transition:background .1s;" onmouseover="if(!this.classList.contains('active')) this.style.background='#f5f3f0'" onmouseout="if(!this.classList.contains('active')) this.style.background='transparent'">Name A–Z</div>
                    </div>
                </div>

                {{-- Clear --}}
                @if(request()->hasAny(['search','state','age']))
                <a href="{{ route('facilities.index') }}" 
                   style="display:inline-flex;align-items:center;gap:6px;padding:9px 18px;border-radius:60px;border:1.5px solid #e4c0c0;background:#fef2f2;font-size:13.5px;font-weight:500;color:#b44;cursor:pointer;white-space:nowrap;transition:all .15s;flex-shrink:0;text-decoration:none;" 
                   onmouseover="this.style.borderColor='#b44'" onmouseout="this.style.borderColor='#e4c0c0'">
                    ✕ Clear All
                </a>
                @endif
            </div>
            
            {{-- Quick Tags --}}
            <div style="display:flex;gap:8px;overflow-x:auto;padding:14px 0 2px;border-top:1px solid #d1fae5;scrollbar-width:none;-webkit-overflow-scrolling:touch;">
                @foreach([
                    'head start' => '<svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg> Head Start',
                    'montessori' => '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22V12"/><path d="M5 12C5 7.029 9.029 3 14 3s9 4.029 9 9-4 9-9 9H5V12z"/></svg> Montessori',
                    'bilingual' => '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg> Bilingual',
                    'subsidized' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg> Subsidized',
                    'pre-k' => '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg> Pre-K'
                ] as $term => $label)
                <a href="?search={{ $term }}" style="padding:8px 16px;border-radius:60px;font-size:13px;font-weight:500;color:{{ request('search')==$term ? '#fff' : '#3a6f8c' }};background:{{ request('search')==$term ? '#065f46' : '#e4eef3' }};border:none;cursor:pointer;text-decoration:none;transition:all .15s;flex-shrink:0;white-space:nowrap;" onmouseover="if('{{ request('search') }}'!='{{ $term }}'){this.style.background='#065f46';this.style.color='#fff'}" onmouseout="if('{{ request('search') }}'!='{{ $term }}'){this.style.background='#e4eef3';this.style.color='#3a6f8c'}">{{ $label }}</a>
                @endforeach
            </div>

            {{-- Hidden inputs --}}
            <input type="hidden" name="state" id="hiddenState" value="{{ request('state') }}">
            <input type="hidden" name="age" id="hiddenAge" value="{{ request('age') }}">
            <input type="hidden" name="sort" id="hiddenSort" value="{{ request('sort', 'latest') }}">
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