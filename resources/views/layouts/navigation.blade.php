@push('styles')
<style>
/* ============ NAVIGATION STYLES ============ */
.dh-header { position:fixed; top:0; left:0; right:0; z-index:200; background:#fff; border-bottom:1px solid #e5e7eb; box-shadow:0 1px 4px rgba(0,0,0,.06); }
.dh-inner { max-width:1200px; margin:0 auto; padding:0 16px; height:64px; display:flex; align-items:center; justify-content:space-between; gap:12px; }
.dh-logo { display:flex; align-items:center; gap:9px; text-decoration:none; flex-shrink:0; }
.dh-logo-box { width:34px; height:34px; background:#065f46; border-radius:9px; display:flex; align-items:center; justify-content:center; }
.dh-logo-name { font-size:.95rem; font-weight:800; color:#065f46; line-height:1; }
.dh-logo-sub { font-size:.6rem; color:#9ca3af; line-height:1; margin-top:2px; font-weight:500; }
.dh-nav-links a { padding:7px 11px; border-radius:7px; font-size:.84rem; font-weight:500; color:#374151; text-decoration:none; }
.dh-nav-links a:hover { background:#f0fdf4; color:#065f46; }
.dh-nav-cta { padding:8px 16px; background:#065f46; color:#fff !important; border-radius:8px; font-weight:700; font-size:.84rem; text-decoration:none; }
.dh-nav-cta:hover { background:#047857 !important; }
/* ---- MOBILE: burger always visible, desktop nav hidden ---- */
.dh-nav-links { display:none; align-items:center; }
.dh-burger { display:flex; cursor:pointer; background:#fff; border:1.5px solid #e5e7eb; border-radius:8px; width:40px; height:40px; align-items:center; justify-content:center; flex-shrink:0; padding:0; }
/* ---- DESKTOP: show nav, hide burger ---- */
@media (min-width: 768px) {
    .dh-nav-links { display:flex !important; }
    .dh-burger { display:none !important; }
}
/* Mobile dropdown */
.dh-dropdown { background:#fff; border-top:1px solid #f0f0f0; overflow:hidden; max-height:0; transition:max-height .3s ease; }
.dh-dropdown.open { max-height:500px; }
.dh-dropdown a { display:flex; align-items:center; gap:10px; padding:13px 16px; font-size:.9rem; font-weight:600; color:#111; text-decoration:none; border-bottom:1px solid #f9f9f9; }
.dh-dropdown a:hover { background:#f0fdf4; color:#065f46; }
.dh-dropdown-cta { margin:8px 16px 14px !important; display:block; text-align:center; padding:12px !important; background:#065f46 !important; color:#fff !important; border-radius:10px; font-weight:800 !important; font-size:.9rem; text-decoration:none; border-bottom:none !important; }
</style>
@endpush

<header class="dh-header">
    <div class="dh-inner">
        <a href="/" class="dh-logo">
            <div class="dh-logo-box">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <div style="display:flex;flex-direction:column;">
                <span class="dh-logo-name">DaycareHub</span>
                <span class="dh-logo-sub">Find Licensed Childcare</span>
            </div>
        </a>

        <nav class="dh-nav-links">
            <a href="/facilities">Find Daycare</a>
            <a href="/programs">Programs</a>
            <a href="/states">States</a>
            <a href="/subsidies">Subsidies</a>
            <a href="/blog">Blog</a>
            <a href="/facilities" class="dh-nav-cta" style="margin-left:6px;">Search Centers</a>
        </nav>

        <button class="dh-burger" id="dh-burger" aria-label="Open menu" onclick="var d=document.getElementById('dh-dd');d.classList.toggle('open');">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#374151" stroke-width="2.5" stroke-linecap="round">
                <line x1="3" y1="7" x2="21" y2="7"/>
                <line x1="3" y1="12" x2="21" y2="12"/>
                <line x1="3" y1="17" x2="21" y2="17"/>
            </svg>
        </button>
    </div>

    <nav class="dh-dropdown" id="dh-dd">
        <a href="/facilities">🏫 Find Daycare Centers</a>
        <a href="/programs">📚 Program Types</a>
        <a href="/states">🗺️ Browse by State</a>
        <a href="/subsidies">💰 Subsidies &amp; Aid</a>
        <a href="/blog">✍️ Parent Blog</a>
        <a href="/checklist">📋 Tour Checklist</a>
        <a href="/about">ℹ️ About</a>
        <a href="/facilities" class="dh-dropdown-cta">Search Centers →</a>
    </nav>
</header>
