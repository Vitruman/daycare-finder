<header style="position:fixed;top:0;left:0;right:0;z-index:100;background:#fff;border-bottom:1px solid #e5e7eb;box-shadow:0 1px 3px rgba(0,0,0,.06);">
    <div style="max-width:1200px;margin:0 auto;padding:0 20px;height:64px;display:flex;align-items:center;justify-content:space-between;gap:16px;">

        <!-- Logo -->
        <a href="/" style="display:flex;align-items:center;gap:10px;text-decoration:none;flex-shrink:0;">
            <div style="width:36px;height:36px;background:#065f46;border-radius:10px;display:flex;align-items:center;justify-content:center;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
            </div>
            <div>
                <div style="font-size:1rem;font-weight:800;color:#065f46;line-height:1;">DaycareHub</div>
                <div style="font-size:.65rem;color:#888;font-weight:500;line-height:1;margin-top:1px;">Find Licensed Childcare</div>
            </div>
        </a>

        <!-- Desktop Nav -->
        <nav style="display:none;" class="desktop-nav">
            <div style="display:flex;align-items:center;gap:2px;">
                <a href="/facilities" style="padding:7px 14px;border-radius:8px;font-size:.88rem;font-weight:500;color:#374151;text-decoration:none;transition:all .15s;" onmouseover="this.style.background='#f0fdf4';this.style.color='#065f46'" onmouseout="this.style.background='';this.style.color='#374151'">Find Daycare</a>
                <a href="/programs" style="padding:7px 14px;border-radius:8px;font-size:.88rem;font-weight:500;color:#374151;text-decoration:none;" onmouseover="this.style.background='#f0fdf4';this.style.color='#065f46'" onmouseout="this.style.background='';this.style.color='#374151'">Programs</a>
                <a href="/states" style="padding:7px 14px;border-radius:8px;font-size:.88rem;font-weight:500;color:#374151;text-decoration:none;" onmouseover="this.style.background='#f0fdf4';this.style.color='#065f46'" onmouseout="this.style.background='';this.style.color='#374151'">States</a>
                <a href="/subsidies" style="padding:7px 14px;border-radius:8px;font-size:.88rem;font-weight:500;color:#374151;text-decoration:none;" onmouseover="this.style.background='#f0fdf4';this.style.color='#065f46'" onmouseout="this.style.background='';this.style.color='#374151'">Subsidies</a>
                <a href="/blog" style="padding:7px 14px;border-radius:8px;font-size:.88rem;font-weight:500;color:#374151;text-decoration:none;" onmouseover="this.style.background='#f0fdf4';this.style.color='#065f46'" onmouseout="this.style.background='';this.style.color='#374151'">Blog</a>
            </div>
        </nav>

        <!-- Right Side CTA + Mobile Toggle -->
        <div style="display:flex;align-items:center;gap:10px;">
            <a href="/facilities" style="display:none;padding:8px 18px;background:#065f46;color:#fff;border-radius:8px;font-size:.85rem;font-weight:700;text-decoration:none;" class="nav-cta">Search Centers</a>

            <!-- Mobile hamburger -->
            <button onclick="document.getElementById('mobile-nav').style.display=document.getElementById('mobile-nav').style.display==='flex'?'none':'flex'"
                    style="display:flex;align-items:center;justify-content:center;width:40px;height:40px;border:1px solid #e5e7eb;border-radius:8px;background:#fff;cursor:pointer;"
                    class="mobile-toggle" aria-label="Menu">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#374151" stroke-width="2" stroke-linecap="round">
                    <line x1="3" y1="6" x2="21" y2="6"/>
                    <line x1="3" y1="12" x2="21" y2="12"/>
                    <line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Nav Dropdown -->
    <div id="mobile-nav" style="display:none;flex-direction:column;background:#fff;border-top:1px solid #f3f4f6;padding:12px 20px 16px;">
        <a href="/facilities" style="padding:11px 0;font-size:.92rem;font-weight:600;color:#111;text-decoration:none;border-bottom:1px solid #f3f4f6;">🏫 Find Daycare Centers</a>
        <a href="/programs" style="padding:11px 0;font-size:.92rem;font-weight:600;color:#111;text-decoration:none;border-bottom:1px solid #f3f4f6;">📚 Program Types</a>
        <a href="/states" style="padding:11px 0;font-size:.92rem;font-weight:600;color:#111;text-decoration:none;border-bottom:1px solid #f3f4f6;">🗺️ Browse by State</a>
        <a href="/subsidies" style="padding:11px 0;font-size:.92rem;font-weight:600;color:#111;text-decoration:none;border-bottom:1px solid #f3f4f6;">💰 Subsidies & Aid</a>
        <a href="/blog" style="padding:11px 0;font-size:.92rem;font-weight:600;color:#111;text-decoration:none;border-bottom:1px solid #f3f4f6;">✍️ Parent Blog</a>
        <a href="/about" style="padding:11px 0;font-size:.92rem;font-weight:600;color:#111;text-decoration:none;border-bottom:1px solid #f3f4f6;">ℹ️ About</a>
        <a href="/facilities" style="margin-top:12px;display:block;text-align:center;padding:12px;background:#065f46;color:#fff;border-radius:10px;font-weight:700;text-decoration:none;font-size:.92rem;">Search Centers →</a>
    </div>
</header>

<style>
@media (min-width: 768px) {
    .desktop-nav { display:flex !important; }
    .nav-cta { display:inline-flex !important; align-items:center; }
    .mobile-toggle { display:none !important; }
}
</style>
