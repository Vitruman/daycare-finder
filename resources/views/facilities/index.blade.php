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

{{-- Custom styles для нового поиска --}}
@section('head')
<style>
:root {--dh:#065f46;--dh-light:#10b981;--dh-bg:#f0fdf4;--dh-border:#d1fae5}
/* Filter Bar */
.fbar{background:var(--dh-bg);border-bottom:1px solid var(--dh-border);padding:20px 0}
.fbar__inner{max-width:1200px;margin:0 auto;padding:0 20px;display:flex;flex-direction:column;gap:14px}
.fbar__header{margin-bottom:8px}
.fbar__breadcrumb{font-size:.82rem;color:#9ca3af;margin-bottom:8px}
.fbar__breadcrumb a{color:var(--dh);text-decoration:none}
.fbar__title{font-size:1.6rem;font-weight:800;color:#111;margin:0 0 4px}
.fbar__subtitle{color:#6b7280;font-size:.9rem;margin:0}

/* Search Input */
.fbar__search{position:relative}
.fbar__search input{width:100%;padding:14px 18px 14px 48px;border-radius:60px;border:1.5px solid #c4d8e4;background:#fff;font-size:15px;outline:none;transition:border .2s,box-shadow .2s}
.fbar__search input:focus{border-color:var(--dh);box-shadow:0 0 0 4px rgba(6,95,70,.08)}
.fbar__search svg{position:absolute;left:18px;top:50%;transform:translateY(-50%);color:#999;pointer-events:none;width:18px;height:18px}

/* Filter Pills Row */
.fbar__row{display:flex;gap:8px;overflow-x:auto;max-width:100%;-webkit-overflow-scrolling:touch;scrollbar-width:none;padding:2px 0}
.fbar__row::-webkit-scrollbar{display:none}
.fpill{display:inline-flex;align-items:center;gap:6px;padding:9px 18px;border-radius:60px;border:1.5px solid #c4d8e4;background:#f0f6fa;font-size:13.5px;font-weight:500;color:#3a6f8c;cursor:pointer;white-space:nowrap;transition:all .15s;flex-shrink:0;position:relative;text-decoration:none;-webkit-tap-highlight-color:transparent}
.fpill:hover{border-color:var(--dh);color:var(--dh)}
.fpill.active{background:var(--dh);color:#fff;border-color:var(--dh)}
.fpill svg{width:15px;height:15px;flex-shrink:0}
.fpill--clear{color:#b44;border-color:#e4c0c0}
.fpill--clear:hover{background:#fef2f2;border-color:#b44}

/* Tags row */
.ftags{display:flex;gap:8px;overflow-x:auto;max-width:100%;-webkit-overflow-scrolling:touch;scrollbar-width:none;padding:2px 0;border-top:1px solid var(--dh-border);padding-top:14px}
.ftags::-webkit-scrollbar{display:none}
.ftag{padding:8px 16px;border-radius:60px;font-size:13px;font-weight:500;color:#3a6f8c;background:#e4eef3;border:none;cursor:pointer;text-decoration:none;transition:all .15s;flex-shrink:0;white-space:nowrap;-webkit-tap-highlight-color:transparent}
.ftag:hover,.ftag.active{background:var(--dh);color:#fff}

/* View Toggle */
.view-toggle{display:flex;gap:4px;background:#deeaf2;border-radius:12px;padding:3px}
.view-toggle__btn{display:flex;align-items:center;gap:6px;padding:8px 16px;border-radius:10px;border:none;background:transparent;font-size:13px;font-weight:600;color:#888;cursor:pointer;transition:all .15s}
.view-toggle__btn.active{background:#fff;color:var(--dh);box-shadow:0 2px 8px rgba(0,0,0,.06)}
.view-toggle__btn svg{width:16px;height:16px}

/* Mobile responsive */
@media (max-width:640px){
    .fbar__inner{padding:0 16px}
    .fbar__row{gap:6px}
    .fpill{padding:7px 14px;font-size:12.5px}
    .ftag{padding:6px 12px;font-size:12px}
    .view-toggle{margin-top:8px}
}
</style>
@endsection

@section('content')
<div style="margin-top:64px;">

{{-- Modern Filter Bar --}}
<section class="fbar">
    <div class="fbar__inner">
        {{-- Header --}}
        <div class="fbar__header">
            <nav class="fbar__breadcrumb">
                <a href="/">Home</a>
                <span style="margin:0 6px;">›</span>
                <span>Find Centers</span>
            </nav>
            <h1 class="fbar__title">Licensed Childcare Centers</h1>
            <p class="fbar__subtitle">Licensed centers from official state registries. Verify status on your state's licensing database.</p>
        </div>

        {{-- Search Input --}}
        <form action="{{ route('facilities.index') }}" method="GET" id="searchForm">
            <div class="fbar__search">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="m21 21-4.35-4.35"/>
                </svg>
                <input type="text" name="search" value="{{ request('search') }}" 
                       placeholder="Search by name, city, ZIP code..." 
                       onchange="document.getElementById('searchForm').submit()">
                
                {{-- Hidden inputs для сохранения других фильтров --}}
                @if(request('state'))<input type="hidden" name="state" value="{{ request('state') }}">@endif
                @if(request('age'))<input type="hidden" name="age" value="{{ request('age') }}">@endif
                @if(request('sort'))<input type="hidden" name="sort" value="{{ request('sort') }}">@endif
            </div>
        </form>

        {{-- Filter Pills Row --}}
        <div class="fbar__row">
            {{-- State Filter --}}
            <div style="position:relative;">
                <a href="#" class="fpill {{ request('state') ? 'active' : '' }}" onclick="toggleDropdown('stateDropdown')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    {{ request('state') ? request('state') : 'State' }}
                </a>
                <div id="stateDropdown" class="fdrop">
                    <div class="fdrop__item" onclick="setFilter('state', '')">All States</div>
                    @foreach($states as $state)
                    <div class="fdrop__item {{ request('state')==$state->code ? 'sel' : '' }}" onclick="setFilter('state', '{{ $state->code }}')">{{ $state->name }}</div>
                    @endforeach
                </div>
            </div>

            {{-- Age Filter --}}
            <div style="position:relative;">
                <a href="#" class="fpill {{ request('age') ? 'active' : '' }}" onclick="toggleDropdown('ageDropdown')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                    {{ ['infant'=>'Infant','toddler'=>'Toddler','preschool'=>'Preschool','school'=>'School-Age'][request('age')] ?? 'Age Group' }}
                </a>
                <div id="ageDropdown" class="fdrop">
                    <div class="fdrop__item" onclick="setFilter('age', '')">Any Age</div>
                    <div class="fdrop__item {{ request('age')=='infant' ? 'sel' : '' }}" onclick="setFilter('age', 'infant')">🍼 Infant (0–12 mo)</div>
                    <div class="fdrop__item {{ request('age')=='toddler' ? 'sel' : '' }}" onclick="setFilter('age', 'toddler')">🧒 Toddler (1–3 yrs)</div>
                    <div class="fdrop__item {{ request('age')=='preschool' ? 'sel' : '' }}" onclick="setFilter('age', 'preschool')">🎒 Preschool (3–5)</div>
                    <div class="fdrop__item {{ request('age')=='school' ? 'sel' : '' }}" onclick="setFilter('age', 'school')">📚 School-Age (5+)</div>
                </div>
            </div>

            {{-- Sort Filter --}}
            <div style="position:relative;">
                <a href="#" class="fpill" onclick="toggleDropdown('sortDropdown')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 6h18"/>
                        <path d="M7 12h10"/>
                        <path d="M10 18h4"/>
                    </svg>
                    {{ ['latest'=>'Newest','name'=>'A–Z'][request('sort', 'latest')] }}
                </a>
                <div id="sortDropdown" class="fdrop">
                    <div class="fdrop__item {{ request('sort','latest')=='latest' ? 'sel' : '' }}" onclick="setFilter('sort', 'latest')">Newest</div>
                    <div class="fdrop__item {{ request('sort')=='name' ? 'sel' : '' }}" onclick="setFilter('sort', 'name')">Name A–Z</div>
                </div>
            </div>

            {{-- Clear Filters --}}
            @if(request()->hasAny(['search','state','age']))
            <a href="{{ route('facilities.index') }}" class="fpill fpill--clear">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
                Clear All
            </a>
            @endif
        </div>

        {{-- Quick Tags --}}
        <div class="ftags">
            <a href="?search=head start" class="ftag {{ request('search')=='head start' ? 'active' : '' }}">⭐ Head Start</a>
            <a href="?search=montessori" class="ftag {{ request('search')=='montessori' ? 'active' : '' }}">🌱 Montessori</a>
            <a href="?search=bilingual" class="ftag {{ request('search')=='bilingual' ? 'active' : '' }}">🌍 Bilingual</a>
            <a href="?search=subsidized" class="ftag {{ request('search')=='subsidized' ? 'active' : '' }}">💰 Subsidized</a>
            <a href="?search=pre-k" class="ftag {{ request('search')=='pre-k' ? 'active' : '' }}">📖 Pre-K</a>
        </div>
    </div>
</section>

{{-- Results Section --}}
<section style="background:#f9fafb;padding:24px 20px 48px;">
    <div style="max-width:1200px;margin:0 auto;">

        {{-- Result count + view toggle --}}
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;flex-wrap:wrap;gap:12px;">
            @if($facilities->count() > 0)
            <p style="font-size:.85rem;color:#6b7280;margin:0;">
                Showing <strong style="color:#111;">{{ ($facilities->currentPage()-1)*$facilities->perPage()+1 }}–{{ min($facilities->currentPage()*$facilities->perPage(),$facilities->total()) }}</strong>
                of <strong style="color:#111;">{{ number_format($facilities->total()) }}</strong> licensed centers
                @if(request('search')) matching "<strong>{{ request('search') }}</strong>"@endif
                @if(request('state')) in <strong>{{ request('state') }}</strong>@endif
            </p>
            
            <div class="view-toggle">
                <button class="view-toggle__btn active">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7"/>
                        <rect x="14" y="3" width="7" height="7"/>
                        <rect x="14" y="14" width="7" height="7"/>
                        <rect x="3" y="14" width="7" height="7"/>
                    </svg>
                    Grid
                </button>
                <button class="view-toggle__btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.35-4.35"/>
                    </svg>
                    Map
                </button>
            </div>
            @endif
        </div>

        {{-- Existing cards display... --}}
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
            <div style="font-size:3rem;margin-bottom:14px;">🔍</div>
            <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:0 0 8px;">No centers found</h3>
            <p style="color:#6b7280;font-size:.9rem;margin:0 0 20px;">Try a different search term, state, or <a href="{{ route('facilities.index') }}" style="color:#065f46;font-weight:600;">browse all centers</a>.</p>
        </div>
        @endif
    </div>
</section>

</div>

{{-- JavaScript для dropdown функциональности --}}
<script>
// Dropdown styles
const dropdownStyles = `
.fdrop{display:none;position:fixed;top:auto;left:50%;transform:translateX(-50%);width:90vw;max-width:340px;background:#fff;border:1px solid #d1fae5;border-radius:16px;box-shadow:0 12px 40px rgba(0,0,0,.12);padding:6px;z-index:60;max-height:340px;overflow-y:auto}
.fdrop.open{display:block}
.fdrop__item{display:flex;align-items:center;justify-content:space-between;padding:10px 14px;border-radius:12px;font-size:13.5px;color:#444;cursor:pointer;transition:background .1s}
.fdrop__item:hover{background:#f5f3f0}
.fdrop__item.sel{background:#065f46;color:#fff}
`;
const style = document.createElement('style');
style.textContent = dropdownStyles;
document.head.appendChild(style);

function toggleDropdown(id) {
    // Закрыть все другие dropdown
    document.querySelectorAll('.fdrop').forEach(d => {
        if (d.id !== id) d.classList.remove('open');
    });
    
    // Переключить текущий
    const dropdown = document.getElementById(id);
    dropdown.classList.toggle('open');
    
    // Позиционирование
    if (dropdown.classList.contains('open')) {
        const rect = event.target.getBoundingClientRect();
        dropdown.style.top = (rect.bottom + 8) + 'px';
        dropdown.style.left = rect.left + 'px';
        dropdown.style.transform = 'none';
        
        // Проверка границ экрана
        const dropdownRect = dropdown.getBoundingClientRect();
        if (dropdownRect.right > window.innerWidth) {
            dropdown.style.left = (window.innerWidth - dropdownRect.width - 20) + 'px';
        }
    }
}

function setFilter(name, value) {
    const url = new URL(window.location);
    if (value) {
        url.searchParams.set(name, value);
    } else {
        url.searchParams.delete(name);
    }
    url.searchParams.delete('page'); // Сброс пагинации при смене фильтра
    window.location.href = url.toString();
}

// Закрыть dropdown при клике вне
document.addEventListener('click', function(e) {
    if (!e.target.closest('.fpill') && !e.target.closest('.fdrop')) {
        document.querySelectorAll('.fdrop').forEach(d => d.classList.remove('open'));
    }
});
</script>
@endsection