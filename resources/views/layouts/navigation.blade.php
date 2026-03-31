<header class="dh-header">
    <div class="dh-inner">
        {{-- LOGO --}}
        <a href="/" class="dh-logo">
            {{-- SVG иконка домика (встроенная, без внешнего файла) --}}
            <div class="dh-logo-box">
                <svg width="22" height="22" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 4L3 14.5V28H12V20H20V28H29V14.5Z" fill="white" opacity="0.95"/>
                    <rect x="12" y="20" width="8" height="8" rx="1.5" fill="#065f46"/>
                    <path d="M16 4L3 14.5H29L16 4Z" fill="white"/>
                </svg>
            </div>
            <div style="display:flex;flex-direction:column;gap:1px;">
                <span class="dh-logo-name">DaycareHub</span>
                <span class="dh-logo-sub">Find Licensed Childcare</span>
            </div>
        </a>

        {{-- Desktop Nav --}}
        <nav class="dh-nav-links">
            <a href="/facilities" {{ request()->is('facilities*') ? 'style=color:#065f46;font-weight:600;' : '' }}>Find Daycare</a>
            <a href="/programs" {{ request()->is('programs*') ? 'style=color:#065f46;font-weight:600;' : '' }}>Programs</a>
            <a href="/states" {{ request()->is('states*') ? 'style=color:#065f46;font-weight:600;' : '' }}>States</a>
            <a href="/subsidies" {{ request()->is('subsidies*') ? 'style=color:#065f46;font-weight:600;' : '' }}>Subsidies</a>
            <a href="/blog" {{ request()->is('blog*') ? 'style=color:#065f46;font-weight:600;' : '' }}>Blog</a>
        </nav>

        {{-- CTA + Burger --}}
        <div style="display:flex;align-items:center;gap:8px;">
            <a href="/facilities" class="dh-nav-cta dh-cta-desktop">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                Search Centers
            </a>
            <button class="dh-burger" id="dh-burger" aria-label="Open menu" onclick="var d=document.getElementById('dh-dd');d.classList.toggle('open');">
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
        <a href="/facilities">🏫 Find Daycare Centers</a>
        <a href="/programs">📚 Program Types</a>
        <a href="/states">🗺️ Browse by State</a>
        <a href="/subsidies">💰 Subsidies &amp; Aid</a>
        <a href="/blog">✍️ Parent Blog</a>
        <a href="/checklist">📋 Tour Checklist</a>
        <a href="/about">ℹ️ About</a>
        <a href="/facilities" class="dh-dd-cta">🔍 Search Centers →</a>
    </nav>
</header>

<style>
.dh-cta-desktop {
    display: none;
    align-items: center;
    gap: 6px;
}
@media (min-width: 768px) {
    .dh-cta-desktop { display: inline-flex; }
    .dh-burger { display: none !important; }
    .dh-nav-links { display: flex !important; }
}
</style>

<script>
(function(){
    var b = document.getElementById('dh-burger');
    var n = document.querySelector('.dh-nav-links');
    function checkWidth() {
        if (!b || !n) return;
        if (window.innerWidth >= 768) {
            b.style.display = 'none';
            n.style.display = 'flex';
        } else {
            b.style.display = 'flex';
            n.style.display = 'none';
        }
    }
    checkWidth();
    window.addEventListener('resize', checkWidth);
})();
</script>