{{-- ═══════════════════════ NAVIGATION ═══════════════════════ --}}
<style>
    .dh-header{background:#fff;border-bottom:1px solid #e5e7eb;position:sticky;top:0;z-index:100;transition:box-shadow .2s;}
    .dh-header.scrolled{box-shadow:0 4px 16px rgba(0,0,0,.08);}
    .dh-inner{max-width:1200px;margin:0 auto;padding:0 20px;height:64px;display:flex;align-items:center;justify-content:space-between;gap:16px;}
    
    .dh-logo{display:flex;align-items:center;gap:10px;text-decoration:none;flex-shrink:0;}
    .dh-logo-icon{width:36px;height:36px;background:linear-gradient(135deg,#10b981,#059669);border-radius:10px;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 8px rgba(16,185,129,.25);}
    .dh-logo-text{display:flex;flex-direction:column;}
    .dh-logo-name{font-size:1rem;font-weight:800;color:#1f2937;line-height:1;}
    .dh-logo-sub{font-size:.65rem;color:#6b7280;line-height:1;margin-top:2px;font-weight:500;}
    
    .dh-badge{display:inline-flex;align-items:center;gap:6px;background:linear-gradient(135deg,#10b981,#059669);color:#fff;padding:4px 10px;border-radius:20px;font-size:.7rem;font-weight:700;margin-left:12px;}
    .dh-badge-dot{width:4px;height:4px;background:#6ee7b7;border-radius:50%;}
    
    .dh-nav-links{display:none;align-items:center;gap:8px;}
    .dh-nav-link{display:flex;align-items:center;gap:6px;padding:10px 16px;color:#4b5563;font-size:.9rem;font-weight:600;text-decoration:none;border-radius:8px;transition:all .15s;white-space:nowrap;}
    .dh-nav-link:hover{background:#f3f4f6;color:#1f2937;}
    .dh-nav-link.active{background:#ecfdf5;color:#059669;}
    
    .dh-cta{display:none;align-items:center;gap:6px;padding:11px 20px;background:linear-gradient(135deg,#10b981,#059669);color:#fff;font-size:.9rem;font-weight:800;text-decoration:none;border-radius:10px;transition:all .2s;box-shadow:0 2px 8px rgba(16,185,129,.2);}
    .dh-cta:hover{transform:translateY(-1px);box-shadow:0 6px 20px rgba(16,185,129,.35);}
    
    .dh-mobile-toggle{display:flex;flex-direction:column;gap:4px;width:24px;height:24px;cursor:pointer;align-items:center;justify-content:center;}
    .dh-mobile-toggle span{width:18px;height:2px;background:#4b5563;border-radius:1px;transition:all .3s;}
    .dh-mobile-toggle.open span:nth-child(1){transform:rotate(45deg) translate(5px,5px);}
    .dh-mobile-toggle.open span:nth-child(2){opacity:0;}
    .dh-mobile-toggle.open span:nth-child(3){transform:rotate(-45deg) translate(7px,-6px);}
    
    .dh-mobile-nav{display:none;position:absolute;top:100%;left:0;right:0;background:#fff;border-top:1px solid #e5e7eb;box-shadow:0 4px 16px rgba(0,0,0,.1);padding:20px;animation:slideDown .2s ease-out;}
    .dh-mobile-nav.open{display:block;}
    .dh-mobile-nav-link{display:flex;align-items:center;gap:8px;padding:12px 0;color:#4b5563;font-size:.95rem;font-weight:600;text-decoration:none;border-bottom:1px solid #f3f4f6;}
    .dh-mobile-nav-link:last-child{border-bottom:none;}
    .dh-mobile-nav-link:hover{color:#059669;}
    
    @keyframes slideDown{from{opacity:0;transform:translateY(-10px);} to{opacity:1;transform:translateY(0);}}
    @media(min-width:768px){.dh-nav-links{display:flex;} .dh-cta{display:flex;} .dh-mobile-toggle{display:none;}}
    @media(min-width:1024px){.dh-inner{padding:0 32px;}}
</style>

<header class="dh-header" id="header">
    <div class="dh-inner">
        {{-- Logo --}}
        <a href="/" class="dh-logo">
            <div class="dh-logo-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
            </div>
            <div class="dh-logo-text">
                <span class="dh-logo-name">DaycareHub</span>
                <span class="dh-logo-sub">Find Licensed Childcare</span>
            </div>
            <div class="dh-badge">
                <span class="dh-badge-dot"></span>
                26,000+ Centers
            </div>
        </a>

        {{-- Desktop Navigation --}}
        <nav class="dh-nav-links">
            <a href="/facilities" class="dh-nav-link {{ request()->is('facilities*') ? 'active' : '' }}">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
                </svg>
                Find Daycare
            </a>
            
            <a href="/zip" class="dh-nav-link {{ request()->is('zip*') ? 'active' : '' }}">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                By ZIP Code
            </a>
            
            <a href="/programs" class="dh-nav-link {{ request()->is('programs*') ? 'active' : '' }}">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 19.5A2.5 2.5 0 016.5 17H20"/>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/>
                </svg>
                Programs
            </a>
            
            <a href="/states" class="dh-nav-link {{ request()->is('states*') ? 'active' : '' }}">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polygon points="1,6 1,22 8,18 16,22 23,18 23,2 16,6 8,2"/>
                </svg>
                States
            </a>
            
            <a href="/subsidies" class="dh-nav-link {{ request()->is('subsidies*') ? 'active' : '' }}">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="12" y1="1" x2="12" y2="23"/>
                    <path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                </svg>
                Subsidies
            </a>
            
            <a href="/blog" class="dh-nav-link {{ request()->is('blog*') ? 'active' : '' }}">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                    <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                </svg>
                Blog
            </a>
        </nav>

        {{-- Desktop CTA --}}
        <a href="/facilities" class="dh-cta">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
            </svg>
            Search Centers
        </a>

        {{-- Mobile Toggle --}}
        <button class="dh-mobile-toggle" onclick="toggleMobileNav()">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    {{-- Mobile Navigation --}}
    <nav class="dh-mobile-nav" id="mobileNav">
        <a href="/facilities" class="dh-mobile-nav-link">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
            </svg>
            Find Daycare
        </a>
        
        <a href="/zip" class="dh-mobile-nav-link">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                <circle cx="12" cy="10" r="3"/>
            </svg>
            Search by ZIP Code
        </a>
        
        <a href="/programs" class="dh-mobile-nav-link">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 19.5A2.5 2.5 0 016.5 17H20"/>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/>
            </svg>
            Programs & Age Groups
        </a>
        
        <a href="/states" class="dh-mobile-nav-link">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polygon points="1,6 1,22 8,18 16,22 23,18 23,2 16,6 8,2"/>
            </svg>
            Browse by States
        </a>
        
        <a href="/subsidies" class="dh-mobile-nav-link">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="12" y1="1" x2="12" y2="23"/>
                <path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
            </svg>
            Financial Assistance
        </a>
        
        <a href="/blog" class="dh-mobile-nav-link">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                <path d="M18.5 2.5a2.121 2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
            </svg>
            Resources & Guides
        </a>
        
        <div style="margin-top:16px;padding-top:16px;border-top:1px solid #e5e7eb;">
            <a href="/facilities" class="dh-mobile-nav-link" style="background:#10b981;color:#fff;border-radius:8px;margin:0;padding:12px 16px;text-align:center;border:none;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
                </svg>
                Search All Centers
            </a>
        </div>
    </nav>
</header>

<script>
function toggleMobileNav() {
    const toggle = document.querySelector('.dh-mobile-toggle');
    const nav = document.getElementById('mobileNav');
    toggle.classList.toggle('open');
    nav.classList.toggle('open');
}

// Add shadow on scroll
let lastScrollY = 0;
window.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    if (window.scrollY > 10) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Close mobile nav when clicking outside
document.addEventListener('click', (e) => {
    const nav = document.getElementById('mobileNav');
    const toggle = document.querySelector('.dh-mobile-toggle');
    if (!nav.contains(e.target) && !toggle.contains(e.target) && nav.classList.contains('open')) {
        toggle.classList.remove('open');
        nav.classList.remove('open');
    }
});
</script>