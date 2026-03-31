<style>
.dh-header { position:fixed; top:0; left:0; right:0; z-index:200; background:#fff; border-bottom:1px solid #e5e7eb; box-shadow:0 1px 4px rgba(0,0,0,.06); }
.dh-header-inner { max-width:1200px; margin:0 auto; padding:0 16px; height:64px; display:flex; align-items:center; justify-content:space-between; gap:12px; }
.dh-logo { display:flex; align-items:center; gap:9px; text-decoration:none; flex-shrink:0; }
.dh-logo-box { width:34px; height:34px; background:#065f46; border-radius:9px; display:flex; align-items:center; justify-content:center; }
.dh-logo-text { display:flex; flex-direction:column; }
.dh-logo-name { font-size:.95rem; font-weight:800; color:#065f46; line-height:1; }
.dh-logo-sub { font-size:.6rem; color:#9ca3af; line-height:1; margin-top:2px; font-weight:500; }
.dh-nav { display:flex; align-items:center; gap:0; }
.dh-nav a { padding:7px 12px; border-radius:7px; font-size:.84rem; font-weight:500; color:#374151; text-decoration:none; white-space:nowrap; }
.dh-nav a:hover { background:#f0fdf4; color:#065f46; }
.dh-nav-cta { padding:8px 16px !important; background:#065f46 !important; color:#fff !important; border-radius:8px !important; font-weight:700 !important; font-size:.84rem !important; }
.dh-nav-cta:hover { background:#047857 !important; color:#fff !important; }
.dh-burger { display:none; cursor:pointer; background:none; border:1px solid #e5e7eb; border-radius:8px; width:40px; height:40px; align-items:center; justify-content:center; flex-shrink:0; }
.dh-mobile-menu { display:none; flex-direction:column; background:#fff; border-top:1px solid #f0f0f0; }
.dh-mobile-menu.open { display:flex; }
.dh-mobile-menu a { display:flex; align-items:center; gap:10px; padding:13px 16px; font-size:.9rem; font-weight:600; color:#111; text-decoration:none; border-bottom:1px solid #f9fafb; }
.dh-mobile-menu a:hover { background:#f0fdf4; color:#065f46; }
.dh-mobile-menu-cta { margin:10px 16px 14px; display:block; text-align:center; padding:12px; background:#065f46; color:#fff !important; border-radius:10px; font-weight:800 !important; font-size:.9rem; text-decoration:none; border-bottom:none !important; }
@media (max-width: 767px) {
    .dh-nav { display:none; }
    .dh-burger { display:flex; }
}
</style>

<header class="dh-header">
    <div class="dh-header-inner">
        <a href="/" class="dh-logo">
            <div class="dh-logo-box">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <div class="dh-logo-text">
                <span class="dh-logo-name">DaycareHub</span>
                <span class="dh-logo-sub">Find Licensed Childcare</span>
            </div>
        </a>

        <nav class="dh-nav">
            <a href="/facilities">Find Daycare</a>
            <a href="/programs">Programs</a>
            <a href="/states">States</a>
            <a href="/subsidies">Subsidies</a>
            <a href="/blog">Blog</a>
            <a href="/facilities" class="dh-nav-cta">Search Centers</a>
        </nav>

        <button class="dh-burger" id="dh-burger-btn" aria-label="Open menu" onclick="
            var m = document.getElementById('dh-mobile-menu');
            m.classList.toggle('open');
            var icon = document.getElementById('dh-burger-icon');
            icon.innerHTML = m.classList.contains('open')
                ? '<line x1=\'18\' y1=\'6\' x2=\'6\' y2=\'18\'/><line x1=\'6\' y1=\'6\' x2=\'18\' y2=\'18\'/>'
                : '<line x1=\'3\' y1=\'6\' x2=\'21\' y2=\'6\'/><line x1=\'3\' y1=\'12\' x2=\'21\' y2=\'12\'/><line x1=\'3\' y1=\'18\' x2=\'21\' y2=\'18\'/>';
        ">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#374151" stroke-width="2.5" stroke-linecap="round">
                <g id="dh-burger-icon">
                    <line x1="3" y1="6" x2="21" y2="6"/>
                    <line x1="3" y1="12" x2="21" y2="12"/>
                    <line x1="3" y1="18" x2="21" y2="18"/>
                </g>
            </svg>
        </button>
    </div>

    <div class="dh-mobile-menu" id="dh-mobile-menu">
        <a href="/facilities">🏫 Find Daycare Centers</a>
        <a href="/programs">📚 Program Types</a>
        <a href="/states">🗺️ Browse by State</a>
        <a href="/subsidies">💰 Subsidies & Aid</a>
        <a href="/blog">✍️ Parent Blog</a>
        <a href="/checklist">📋 Tour Checklist</a>
        <a href="/about">ℹ️ About</a>
        <a href="/facilities" class="dh-mobile-menu-cta">Search Centers →</a>
    </div>
</header>
