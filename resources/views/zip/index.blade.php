@extends('layouts.app')

@section('title', 'Find Daycare by ZIP Code - Licensed Centers Near You')
@section('description', 'Search licensed daycare centers by ZIP code. Browse 26,000+ verified childcare facilities across all 50 US states. Free, no signup required.')

@section('content')
{{-- ═══════════════════════ HERO ═══════════════════════ --}}
<section style="background:linear-gradient(135deg,#064e3b 0%,#065f46 60%,#047857 100%);padding:48px 20px 42px;color:#fff;position:relative;overflow:hidden;">
    <div style="position:absolute;top:-120px;right:-120px;width:500px;height:500px;background:rgba(255,255,255,.025);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-80px;left:-60px;width:320px;height:320px;background:rgba(255,255,255,.03);border-radius:50%;pointer-events:none;"></div>

    <div style="max-width:1000px;margin:0 auto;text-align:center;position:relative;">
        <h1 style="font-size:2.4rem;font-weight:800;margin:0 0 16px;line-height:1.15;text-shadow:0 2px 8px rgba(0,0,0,.15);">
            Find Daycare by <span style="color:#6ee7b7;">ZIP Code</span>
        </h1>
        
        <p style="font-size:1.1rem;color:rgba(255,255,255,.82);margin:0 0 32px;max-width:600px;margin:0 auto 32px;line-height:1.6;">
            Search 26,000+ licensed childcare centers across all 50 US states. 
            Enter any ZIP code to find verified facilities near you.
        </p>

        {{-- Search Form --}}
        <div style="max-width:480px;margin:0 auto 32px;">
            <form action="/zip" method="GET" style="display:flex;gap:12px;background:rgba(255,255,255,.12);backdrop-filter:blur(8px);border:1px solid rgba(255,255,255,.2);border-radius:16px;padding:8px;">
                <input type="text" name="code" placeholder="Enter ZIP code (e.g., 10001)" 
                       style="flex:1;border:none;background:rgba(255,255,255,.1);color:#fff;padding:16px 20px;border-radius:12px;font-size:.95rem;outline:none;"
                       oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,5)" required>
                <button type="submit" 
                        style="padding:16px 24px;background:#fff;color:#065f46;border:none;border-radius:12px;font-weight:800;cursor:pointer;font-size:.95rem;transition:all .2s;box-shadow:0 4px 12px rgba(0,0,0,.15);"
                        onmouseover="this.style.transform='translateY(-1px)';this.style.boxShadow='0 6px 20px rgba(0,0,0,.25)'"
                        onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 12px rgba(0,0,0,.15)'">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right:6px;vertical-align:middle;">
                        <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
                    </svg>
                    Search
                </button>
            </form>
        </div>

        {{-- Trust indicators --}}
        <div style="display:flex;justify-content:center;gap:32px;flex-wrap:wrap;font-size:.85rem;opacity:.8;">
            <div style="display:flex;align-items:center;gap:6px;">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <polyline points="20,6 9,17 4,12"/>
                </svg>
                Licensed Centers Only
            </div>
            <div style="display:flex;align-items:center;gap:6px;">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                    <path d="M7 11V7a5 5 0 0 1 9.9-1"/>
                </svg>
                Free to Search
            </div>
            <div style="display:flex;align-items:center;gap:6px;">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="23,4 23,10 17,10"/>
                    <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/>
                </svg>
                Updated Daily
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════ POPULAR ZIPS ═══════════════════════ --}}
<section style="padding:60px 20px;background:#f8fafc;">
    <div style="max-width:1000px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:48px;">
            <h2 style="font-size:1.8rem;font-weight:800;color:#1f2937;margin:0 0 12px;">Popular ZIP Codes</h2>
            <p style="font-size:1rem;color:#6b7280;margin:0;">Browse frequently searched areas</p>
        </div>

        {{-- Grid of popular ZIP codes --}}
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;">
            @php
            $popularZips = [
                ['10001', 'Manhattan, NY', '14 centers'],
                ['90210', 'Beverly Hills, CA', '8 centers'],
                ['33101', 'Miami Beach, FL', '12 centers'],
                ['60601', 'Chicago, IL', '22 centers'],
                ['02101', 'Boston, MA', '18 centers'],
                ['30301', 'Atlanta, GA', '16 centers'],
                ['10005', 'Financial District, NY', '6 centers'],
                ['90401', 'Santa Monica, CA', '11 centers'],
                ['33139', 'South Beach, FL', '9 centers'],
            ];
            @endphp

            @foreach($popularZips as [$zip, $location, $count])
            <a href="/zip/{{ $zip }}" 
               style="display:block;background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:20px;text-decoration:none;transition:all .2s;box-shadow:0 1px 3px rgba(0,0,0,.05);"
               onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 25px rgba(0,0,0,.1)';this.style.borderColor='#10b981'"
               onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 1px 3px rgba(0,0,0,.05)';this.style.borderColor='#e5e7eb'">
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                    <span style="font-size:1.3rem;font-weight:800;color:#1f2937;">{{ $zip }}</span>
                    <span style="font-size:.8rem;color:#10b981;font-weight:600;background:#ecfdf5;padding:4px 8px;border-radius:6px;">{{ $count }}</span>
                </div>
                <p style="color:#6b7280;font-size:.9rem;margin:0;line-height:1.4;">{{ $location }}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════ FEATURES ═══════════════════════ --}}
<section style="padding:60px 20px;background:#fff;">
    <div style="max-width:1000px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:48px;">
            <h2 style="font-size:1.8rem;font-weight:800;color:#1f2937;margin:0 0 12px;">Why Search by ZIP Code?</h2>
            <p style="font-size:1rem;color:#6b7280;margin:0;">Get accurate, location-specific childcare information</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:32px;">
            @foreach([
                ['<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>', 'Precise Location', 'Find centers within walking distance or your daily commute route'],
                ['<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="m22 21-3-3"/></svg>', 'Local Licensing', 'State-specific requirements and regulations for your area'],
                ['<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>', 'Cost Insights', 'Average pricing data specific to your ZIP code and region'],
                ['<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M9 11H1l4-4"/><path d="M1 7h8"/><path d="m15 13 4-4"/><path d="M23 17h-8"/></svg>', 'Easy Comparison', 'Compare multiple centers in the same neighborhood quickly'],
            ] as [$icon, $title, $desc])
            <div style="text-align:center;">
                <div style="margin-bottom:16px;">{!! $icon !!}</div>
                <h3 style="font-size:1.2rem;font-weight:700;color:#1f2937;margin:0 0 8px;">{{ $title }}</h3>
                <p style="color:#6b7280;line-height:1.5;margin:0;">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════ CTA ═══════════════════════ --}}
<section style="padding:60px 20px;background:linear-gradient(135deg,#10b981 0%,#059669 100%);color:#fff;">
    <div style="max-width:600px;margin:0 auto;text-align:center;">
        <h2 style="font-size:1.9rem;font-weight:800;margin:0 0 16px;line-height:1.2;">
            Ready to Find Your Perfect Daycare?
        </h2>
        <p style="font-size:1.1rem;margin:0 0 28px;opacity:.9;line-height:1.5;">
            Join thousands of parents who trust DaycareHub to find quality childcare in their neighborhood.
        </p>
        <a href="#" onclick="document.querySelector('input[name=code]').focus(); return false;"
           style="display:inline-flex;align-items:center;gap:8px;padding:16px 32px;background:#fff;color:#059669;border-radius:12px;font-weight:800;text-decoration:none;font-size:1rem;transition:all .2s;box-shadow:0 4px 16px rgba(0,0,0,.2);"
           onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 24px rgba(0,0,0,.3)'"
           onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 16px rgba(0,0,0,.2)'">
            Start Your Search
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="9,18 15,12 9,6"/>
            </svg>
        </a>
    </div>
</section>
@endsection