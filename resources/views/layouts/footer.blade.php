{{-- ═══════════════════════ FOOTER ═══════════════════════ --}}
<style>
    .dh-footer{background:#1f2937;color:#d1d5db;padding:48px 20px 20px;}
    .dh-footer-inner{max-width:1200px;margin:0 auto;}
    .dh-footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:40px;margin-bottom:40px;}
    .dh-footer-brand{color:#fff;}
    .dh-footer-logo{display:flex;align-items:center;gap:10px;margin-bottom:16px;}
    .dh-footer-logo-icon{width:32px;height:32px;background:linear-gradient(135deg,#10b981,#059669);border-radius:8px;display:flex;align-items:center;justify-content:center;}
    .dh-footer-brand h3{font-size:1.2rem;font-weight:800;margin:0;color:#fff;}
    .dh-footer-brand p{font-size:.9rem;color:#9ca3af;line-height:1.6;margin:12px 0 20px;}
    .dh-footer-stats{display:flex;gap:20px;margin-top:16px;}
    .dh-footer-stat{text-align:center;}
    .dh-footer-stat-num{font-size:1.1rem;font-weight:800;color:#10b981;}
    .dh-footer-stat-label{font-size:.7rem;color:#6b7280;margin-top:2px;}
    
    .dh-footer-section h4{font-size:.9rem;font-weight:700;color:#fff;margin:0 0 16px;text-transform:uppercase;letter-spacing:.5px;}
    .dh-footer-links{list-style:none;margin:0;padding:0;}
    .dh-footer-links li{margin-bottom:8px;}
    .dh-footer-links a{color:#9ca3af;text-decoration:none;font-size:.85rem;transition:color .2s;display:flex;align-items:center;gap:6px;}
    .dh-footer-links a:hover{color:#10b981;}
    .dh-footer-links svg{width:12px;height:12px;opacity:.6;}
    
    .dh-footer-bottom{border-top:1px solid #374151;padding-top:20px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;}
    .dh-footer-bottom-left{display:flex;align-items:center;gap:20px;flex-wrap:wrap;}
    .dh-footer-copyright{font-size:.8rem;color:#6b7280;}
    .dh-footer-bottom-links{display:flex;gap:16px;}
    .dh-footer-bottom-links a{color:#6b7280;text-decoration:none;font-size:.8rem;transition:color .2s;}
    .dh-footer-bottom-links a:hover{color:#10b981;}
    
    .dh-footer-social{display:flex;gap:12px;}
    .dh-footer-social a{width:32px;height:32px;background:#374151;border-radius:6px;display:flex;align-items:center;justify-content:center;transition:all .2s;text-decoration:none;}
    .dh-footer-social a:hover{background:#10b981;transform:translateY(-1px);}
    .dh-footer-social svg{width:14px;height:14px;color:#9ca3af;}
    .dh-footer-social a:hover svg{color:#fff;}
    
    @media(max-width:1024px){.dh-footer-grid{grid-template-columns:1fr 1fr;gap:32px;}}
    @media(max-width:640px){
        .dh-footer{padding:32px 20px 16px;}
        .dh-footer-grid{grid-template-columns:1fr;gap:24px;text-align:center;}
        .dh-footer-bottom{flex-direction:column;text-align:center;}
        .dh-footer-stats{justify-content:center;}
    }
</style>

<footer class="dh-footer">
    <div class="dh-footer-inner">
        <div class="dh-footer-grid">
            {{-- Brand Section --}}
            <div class="dh-footer-brand">
                <div class="dh-footer-logo">
                    <div class="dh-footer-logo-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                            <polyline points="9 22 9 12 15 12 15 22"/>
                        </svg>
                    </div>
                    <h3>DaycareHub</h3>
                </div>
                <p>The most comprehensive directory of licensed daycare centers, preschools, and childcare facilities across all 50 US states. Find quality childcare near you with our free, easy-to-use search platform.</p>
                
                <div class="dh-footer-stats">
                    <div class="dh-footer-stat">
                        <div class="dh-footer-stat-num">26,000+</div>
                        <div class="dh-footer-stat-label">Centers</div>
                    </div>
                    <div class="dh-footer-stat">
                        <div class="dh-footer-stat-num">50</div>
                        <div class="dh-footer-stat-label">States</div>
                    </div>
                    <div class="dh-footer-stat">
                        <div class="dh-footer-stat-num">100%</div>
                        <div class="dh-footer-stat-label">Licensed</div>
                    </div>
                </div>
            </div>
            
            {{-- Search Section --}}
            <div class="dh-footer-section">
                <h4>Find Childcare</h4>
                <ul class="dh-footer-links">
                    <li><a href="/facilities">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
                        </svg>
                        Search All Centers
                    </a></li>
                    <li><a href="/zip">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        By ZIP Code
                    </a></li>
                    <li><a href="/states">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="1,6 1,22 8,18 16,22 23,18 23,2 16,6 8,2"/>
                        </svg>
                        By State
                    </a></li>
                    <li><a href="/programs">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 19.5A2.5 2.5 0 016.5 17H20"/>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/>
                        </svg>
                        Programs & Ages
                    </a></li>
                </ul>
            </div>
            
            {{-- Resources Section --}}
            <div class="dh-footer-section">
                <h4>Resources</h4>
                <ul class="dh-footer-links">
                    <li><a href="/subsidies">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="1" x2="12" y2="23"/>
                            <path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                        </svg>
                        Childcare Subsidies
                    </a></li>
                    <li><a href="/blog">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                            <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                        </svg>
                        Parent Guides
                    </a></li>
                    <li><a href="/cost-calculator">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="18" rx="2"/>
                            <line x1="8" y1="9" x2="8" y2="9"/>
                            <line x1="12" y1="9" x2="12" y2="9"/>
                        </svg>
                        Cost Calculator
                    </a></li>
                    <li><a href="/checklist">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/>
                            <rect x="9" y="3" width="6" height="4" rx="1"/>
                        </svg>
                        Parent Checklist
                    </a></li>
                </ul>
            </div>
            
            {{-- Company Section --}}
            <div class="dh-footer-section">
                <h4>Company</h4>
                <ul class="dh-footer-links">
                    <li><a href="/about">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="16" x2="12" y2="12"/>
                            <line x1="12" y1="8" x2="12" y2="8"/>
                        </svg>
                        About Us
                    </a></li>
                    <li><a href="/contact">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        Contact
                    </a></li>
                    <li><a href="/sitemap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M8 6h13"/>
                            <path d="M8 12h13"/>
                            <path d="M8 18h13"/>
                            <path d="M3 6h.01"/>
                            <path d="M3 12h.01"/>
                            <path d="M3 18h.01"/>
                        </svg>
                        Sitemap
                    </a></li>
                </ul>
            </div>
        </div>
        
        {{-- Bottom Bar --}}
        <div class="dh-footer-bottom">
            <div class="dh-footer-bottom-left">
                <div class="dh-footer-copyright">
                    © {{ date('Y') }} DaycareHub. All rights reserved.
                </div>
                <div class="dh-footer-bottom-links">
                    <a href="/privacy">Privacy Policy</a>
                    <a href="/terms">Terms of Service</a>
                    <a href="/safety">Safety Guidelines</a>
                </div>
            </div>
            
            <div class="dh-footer-social">
                <a href="#" aria-label="Facebook">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Twitter">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                </a>
                <a href="#" aria-label="LinkedIn">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.017 0C8.396 0 7.989.013 7.041.048 5.51.131 4.831.33 4.245.557a6.585 6.585 0 00-2.378 1.548A6.615 6.615 0 00.309 4.483C.082 5.07-.117 5.749-.034 7.28.013 8.228 0 8.636 0 12.017c0 3.382.013 3.789.048 4.738.117 1.53.316 2.209.543 2.798.285.868.66 1.484 1.238 2.062.577.577 1.194.952 2.062 1.238.589.227 1.268.426 2.798.543.949.035 1.356.048 4.738.048 3.381 0 3.789-.013 4.737-.048 1.53-.117 2.209-.316 2.798-.543a6.58 6.58 0 002.062-1.238 6.58 6.58 0 001.238-2.062c.227-.589.426-1.268.543-2.798.035-.949.048-1.356.048-4.737 0-3.381-.013-3.789-.048-4.738-.117-1.53-.316-2.209-.543-2.798a6.614 6.614 0 00-1.238-2.062A6.58 6.58 0 0019.515.557C18.928.33 18.249.131 16.719.048 15.77.013 15.362 0 12.017 0zm0 2.162c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0 3.653a6.202 6.202 0 100 12.404 6.202 6.202 0 000-12.404zm0 10.242a4.04 4.04 0 110-8.08 4.04 4.04 0 010 8.08zm7.846-10.405a1.441 1.441 0 11-2.883 0 1.441 1.441 0 012.883 0z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>