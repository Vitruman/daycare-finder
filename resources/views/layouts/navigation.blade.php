<style>
/* ── Header ── */
.dh-header {
    position: fixed; top: 0; left: 0; right: 0; z-index: 200;
    background: #fff;
    border-bottom: 1px solid #e5e7eb;
    transition: box-shadow .2s;
}
.dh-header.scrolled { box-shadow: 0 4px 20px rgba(0,0,0,.1); }
.dh-inner {
    max-width: 1200px; margin: 0 auto;
    padding: 0 20px; height: 68px;
    display: flex; align-items: center; justify-content: space-between; gap: 16px;
}
/* Logo */
.dh-logo { display: flex; align-items: center; gap: 12px; text-decoration: none; flex-shrink: 0; }
.dh-logo-icon {
    width: 42px; height: 42px; flex-shrink: 0;
    background: linear-gradient(135deg, #065f46 0%, #059669 100%);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 4px 12px rgba(6,95,70,.3);
}
.dh-logo-text { display: flex; flex-direction: column; gap: 1px; }
.dh-logo-name {
    font-size: 1.05rem; font-weight: 800; color: #111; line-height: 1;
    letter-spacing: -.4px;
}
.dh-logo-sub { font-size: .62rem; color: #9ca3af; line-height: 1; font-weight: 500; }
.dh-logo-badge {
    display: none;
    align-items: center; gap: 4px;
    padding: 3px 10px; background: #f0fdf4; border: 1px solid #d1fae5;
    border-radius: 60px; font-size: .7rem; font-weight: 700; color: #065f46;
    white-space: nowrap;
}
/* Nav */
.dh-nav-links { display: none; align-items: center; gap: 0; }
.dh-nav-links a {
    padding: 8px 13px; border-radius: 8px;
    font-size: .86rem; font-weight: 500; color: #4b5563;
    text-decoration: none; transition: all .15s; position: relative;
}
.dh-nav-links a:hover { background: #f0fdf4; color: #065f46; }
.dh-nav-links a.active { color: #065f46; font-weight: 700; }
.dh-nav-links a.active::after {
    content: ''; position: absolute; bottom: -2px; left: 13px; right: 13px;
    height: 2px; background: #065f46; border-radius: 2px;
}
/* CTA */
.dh-nav-cta {
    display: inline-flex; align-items: center; gap: 7px;
    padding: 10px 20px;
    background: linear-gradient(135deg, #065f46, #059669);
    color: #fff !important;
    border-radius: 10px; font-weight: 700; font-size: .86rem;
    text-decoration: none; transition: all .2s;
    box-shadow: 0 3px 10px rgba(6,95,70,.25);
    white-space: nowrap;
}
.dh-nav-cta:hover {
    background: linear-gradient(135deg, #047857, #065f46);
    transform: translateY(-1px);
    box-shadow: 0 6px 18px rgba(6,95,70,.35);
}
/* Burger */
.dh-burger {
    display: flex; cursor: pointer;
    background: #fff; border: 1.5px solid #e5e7eb;
    border-radius: 9px; width: 40px; height: 40px;
    align-items: center; justify-content: center;
    flex-shrink: 0; padding: 0; transition: border-color .15s;
}
.dh-burger:hover { border-color: #065f46; }
/* Mobile dropdown */
.dh-dropdown {
    background: #fff; border-top: 1px solid #f3f4f6;
    overflow: hidden; max-height: 0; transition: max-height .3s ease;
    box-shadow: 0 8px 24px rgba(0,0,0,.1);
}
.dh-dropdown.open { max-height: 600px; }
.dh-dropdown a {
    display: flex; align-items: center; gap: 10px;
    padding: 13px 20px; font-size: .9rem; font-weight: 600;
    color: #374151; text-decoration: none;
    border-bottom: 1px solid #f9fafb; transition: background .1s;
}
.dh-dropdown a:hover { background: #f0fdf4; color: #065f46; }
.dh-dd-cta {
    margin: 10px 16px 16px !important; display: block;
    text-align: center; padding: 13px !important;
    background: linear-gradient(135deg, #065f46, #059669) !important;
    color: #fff !important; border-radius: 12px;
    font-weight: 800 !important; font-size: .9rem;
    border-bottom: none !important;
    box-shadow: 0 3px 10px rgba(6,95,70,.25);
}
@media (min-width: 768px) {
    .dh-nav-links { display: flex !important; }
    .dh-burger { display: none !important; }
    .dh-logo-badge { display: inline-flex !important; }
}
</style>

<header class="dh-header" id="dh-header">
    <div class="dh-inner">
        {{-- LOGO --}}
        <a href="/" class="dh-logo">
            <div class="dh-logo-icon">
                <svg width="24" height="24" viewBox="0 0 32 32" fill="none">
                    <path d="M16 5L4 14v13h7v-8h10v8h7V14z" fill="white" opacity=".95"/>
                    <rect x="12.5" y="19" width="7" height="8" rx="1.5" fill="#065f46"/>
                    <polygon points="16,5 4,14 28,14" fill="white"/>
                </svg>
            </div>
            <div class="dh-logo-text">
                <span class="dh-logo-name">DaycareHub</span>
                <span class="dh-logo-sub">Find Licensed Childcare</span>
            </div>
            <div class="dh-logo-badge">
                <span style="width:6px;height:6px;background:#22c55e;border-radius:50%;flex-shrink:0;"></span>
                26,000+ Centers
            </div>
        </a>

        {{-- Desktop Nav --}}
        <nav class="dh-nav-links">
            <a href="/facilities" class="{{ request()->is('facilities*') ? 'active' : '' }}">Find Daycare</a>
            <a href="/programs" class="{{ request()->is('programs*') ? 'active' : '' }}">Programs</a>
            <a href="/states" class="{{ request()->is('states*') ? 'active' : '' }}">States</a>
            <a href="/subsidies" class="{{ request()->is('subsidies*') ? 'active' : '' }}">Subsidies</a>
            <a href="/blog" class="{{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
        </nav>

        {{-- Right side --}}
        <div style="display:flex;align-items:center;gap:10px;">
            <a href="/facilities" class="dh-nav-cta dh-cta-desktop">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                Search Centers
            </a>
            <button class="dh-burger" id="dh-burger" aria-label="Menu"
                    onclick="document.getElementById('dh-dd').classList.toggle('open')">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#374151" stroke-width="2.5" stroke-linecap="round">
                    <line x1="3" y1="7" x2="21" y2="7"/>
                    <line x1="3" y1="12" x2="21" y2="12"/>
                    <line x1="3" y1="17" x2="21" y2="17"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Dropdown --}}
    <nav class="dh-dropdown" id="dh-dd">
        <a href="/facilities"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg> Find Daycare Centers</a>
        <a href="/programs"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg> Program Types</a>
        <a href="/states"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><polygon points="1,6 1,22 8,18 16,22 23,18 23,2 16,6 8,2"/></svg> Browse by State</a>
        <a href="/subsidies"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg> Subsidies &amp; Aid</a>
        <a href="/blog"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg> Parent Blog</a>
        <a href="/checklist"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/></svg> Tour Checklist</a>
        <a href="/about"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="8"/></svg> About</a>
        <a href="/facilities" class="dh-dd-cta"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg> Search Centers →</a>
    </nav>
</header>

<style>
.dh-cta-desktop { display: none; }
@media (min-width: 768px) {
    .dh-cta-desktop { display: inline-flex !important; }
}
</style>

<script>
(function(){
    var b = document.getElementById('dh-burger');
    var n = document.querySelector('.dh-nav-links');
    var h = document.getElementById('dh-header');
    function checkW() {
        if (!b || !n) return;
        if (window.innerWidth >= 768) { b.style.display='none'; n.style.display='flex'; }
        else { b.style.display='flex'; n.style.display='none'; }
    }
    checkW();
    window.addEventListener('resize', checkW);
    // Scroll shadow
    window.addEventListener('scroll', function() {
        if (h) h.classList.toggle('scrolled', window.scrollY > 10);
    });
})();
</script>
