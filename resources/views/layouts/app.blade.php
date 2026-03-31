<?php header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $defaultTitle = \App\Models\Setting::getValue('meta_title', 'DaycareHub - Find Childcare Centers');
        $defaultDescription = \App\Models\Setting::getValue('meta_description', 'Find licensed daycare centers and childcare programs near you. Free directory for US families.');
        $defaultKeywords = \App\Models\Setting::getValue('meta_keywords', '');

        $metaTitle = trim($__env->yieldContent('meta_title')) ?: trim($__env->yieldContent('title')) ?: $defaultTitle;
        $metaDescription = trim($__env->yieldContent('meta_description')) ?: $defaultDescription;
        $metaKeywords = trim($__env->yieldContent('meta_keywords')) ?: $defaultKeywords;
    @endphp

    <title>{!! $metaTitle !!}</title>

    <meta name="description" content="{{ $metaDescription }}">
    @if(!empty($metaKeywords))
        <meta name="keywords" content="{{ $metaKeywords }}">
    @endif


    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{!! $metaTitle !!}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="DaycareHub">
    <meta property="og:locale" content="en_US">
    @hasSection("og_image")
        <meta property="og:image" content="@yield('og_image')">
    @else
        <meta property="og:image" content="{{ asset('images/logo/dh_og.png') }}">
    @endif

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{!! $metaTitle !!}">
    <meta name="twitter:description" content="{{ $metaDescription }}">

    <!-- Schema.org Organization -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "DaycareHub",
        "url": "https://daycarehub.us",
        "description": "Free directory of 26,000+ licensed daycare and childcare centers across all 50 US states.",
        "telephone": "{{ \App\Models\Setting::getValue('phone', '+1(855) 321-3614') }}",
        "areaServed": "US",
        "sameAs": []
    }
    </script>

    <!-- Schema.org WebSite + SearchAction -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebSite",
        "name": "DaycareHub",
        "url": "https://daycarehub.us",
        "potentialAction": {
            "@@type": "SearchAction",
            "target": "https://daycarehub.us/facilities?search={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    <style>
        /* Nav responsive */
        .desktop-nav { display: none; }
        .nav-cta { display: none !important; }
        @media (min-width: 768px) {
            .desktop-nav { display: flex !important; }
            .nav-cta { display: inline-flex !important; align-items: center; }
        }
        /* Stats grid */
        .stats-grid { display: grid; grid-template-columns: repeat(2,1fr); text-align: center; }
        @media (min-width: 600px) { .stats-grid { grid-template-columns: repeat(4,1fr) !important; } }
        .stats-grid > div { padding: 18px 10px; border-right: 1px solid #f3f4f6; }
        .stats-grid > div:nth-child(2n) { border-right: none; }
        @media (min-width: 600px) {
            .stats-grid > div:nth-child(2n) { border-right: 1px solid #f3f4f6; }
            .stats-grid > div:last-child { border-right: none; }
        }
        /* Hero search */
        .hero-search-row { display: flex; gap: 8px; }
        .hero-search-state { min-width: 110px; }
        @media (max-width: 600px) {
            .hero-search-row { flex-direction: column; }
            .hero-search-state { min-width: unset; width: 100% !important; box-sizing: border-box; }
            .hero-search-btn { width: 100% !important; text-align: center; box-sizing: border-box; }
            .hero-search-input { width: 100% !important; }
        }
    </style>

    @yield('schema')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Heroicons -->
    <script src="https://unpkg.com/heroicons@2.0.18/24/outline/index.js" type="module"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
    </style>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/images/logo/dh_favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/logo/dh_favicon_32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/logo/dh_favicon_180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/logo/dh_logo_192.png">
    <script defer src="https://cloud.umami.is/script.js" data-website-id="b095d633-3489-40e6-8d76-727705dab912"></script>
    <style id="dh-nav-css">
        /* Logo */
        .dh-logo{display:flex;align-items:center;gap:10px;text-decoration:none;flex-shrink:0;}
        .dh-logo-box{width:38px;height:38px;background:linear-gradient(135deg,#065f46,#059669);border-radius:10px;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 8px rgba(6,95,70,.25);}
        .dh-logo-name{font-size:1rem;font-weight:800;color:#065f46;line-height:1;letter-spacing:-.3px;}
        .dh-logo-sub{font-size:.62rem;color:#9ca3af;line-height:1;margin-top:2px;font-weight:500;}
        /* Nav links */
        .dh-nav-links{display:none;align-items:center;gap:2px;}
        .dh-nav-links a{padding:7px 12px;border-radius:8px;font-size:.85rem;font-weight:500;color:#374151;text-decoration:none;transition:all .15s;}
        .dh-nav-links a:hover{background:#f0fdf4;color:#065f46;}
        /* CTA Button */
        .dh-nav-cta{display:inline-flex!important;align-items:center;gap:6px;padding:9px 18px!important;background:#065f46;color:#fff!important;border-radius:10px;font-weight:700;font-size:.85rem!important;text-decoration:none;transition:all .15s!important;box-shadow:0 2px 8px rgba(6,95,70,.2);}
        .dh-nav-cta:hover{background:#047857!important;transform:translateY(-1px);box-shadow:0 4px 14px rgba(6,95,70,.3)!important;}
        /* Burger */
        .dh-burger{display:flex;cursor:pointer;background:#fff;border:1.5px solid #e5e7eb;border-radius:9px;width:40px;height:40px;align-items:center;justify-content:center;flex-shrink:0;padding:0;transition:border-color .15s;}
        .dh-burger:hover{border-color:#065f46;}
        /* Mobile Dropdown */
        .dh-dropdown{background:#fff;border-top:1px solid #f3f4f6;overflow:hidden;max-height:0;transition:max-height .3s ease;box-shadow:0 8px 20px rgba(0,0,0,.08);}
        .dh-dropdown.open{max-height:600px;}
        .dh-dropdown a{display:flex;align-items:center;gap:10px;padding:13px 20px;font-size:.9rem;font-weight:600;color:#374151;text-decoration:none;border-bottom:1px solid #f9fafb;transition:background .1s;}
        .dh-dropdown a:hover{background:#f0fdf4;color:#065f46;}
        .dh-dd-cta{margin:10px 16px 16px!important;display:block;text-align:center;padding:13px!important;background:#065f46!important;color:#fff!important;border-radius:12px;font-weight:800!important;font-size:.9rem;border-bottom:none!important;box-shadow:0 2px 8px rgba(6,95,70,.2);}
        @media(min-width:768px){
            .dh-nav-links{display:flex!important;}
            .dh-burger{display:none!important;}
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50" style="overflow-x:hidden;">
    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Main Content -->
    <main class="min-h-screen" style="margin-top:0">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')
    <!-- Unified Sticky Mobile CTA (glassmorphism) -->
    <div id="unified-cta" style="position:fixed;bottom:0;left:0;right:0;z-index:55;display:none">
        <div style="margin:0 12px 12px;padding:10px 16px;background:rgba(255,255,255,0.82);backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px);border-radius:18px;box-shadow:0 4px 24px rgba(0,0,0,0.12),0 0 0 1px rgba(0,0,0,0.05);display:flex;align-items:center;justify-content:space-between;gap:12px">
            <div style="display:flex;flex-direction:column;gap:1px">
                <span style="font-size:13px;font-weight:600;color:#111">Find Daycare Near You</span>
                <span style="font-size:11px;color:#666">26,000+ licensed centers · Free search</span>
            </div>
            <a href="/facilities"
               style="display:inline-flex;align-items:center;gap:6px;padding:10px 20px;background:#065f46;color:#fff;font-weight:700;font-size:13px;border-radius:50px;text-decoration:none;white-space:nowrap">
                Search Now
            </a>
        </div>
    </div>
    <style>
        @media (max-width: 1023px) { footer { padding-bottom: 80px !important; } }
        @media (min-width: 1024px) { #unified-cta { display:none !important; } }
    </style>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var cta = document.getElementById("unified-cta");
            if (cta) {
                // Show after scroll on all pages
                var shown = false;
                window.addEventListener("scroll", function() {
                    if (window.scrollY > 200 && !shown) { cta.style.display = "block"; shown = true; }
                });
                // Show immediately after 2s even without scroll
                setTimeout(function() { if (!shown) { cta.style.display = "block"; shown = true; } }, 2000);
            }
        });
    </script>

    <!-- Back to Top -->
    <button id="btt" onclick="window.scrollTo({top:0,behavior:'smooth'})" 
            style="position:fixed;bottom:96px;right:16px;z-index:60;width:44px;height:44px;background:rgba(21,128,61,0.9);color:#fff;border-radius:50%;box-shadow:0 4px 12px rgba(0,0,0,0.3);display:flex;align-items:center;justify-content:center;cursor:pointer;opacity:0;transform:translateY(16px);transition:all 0.3s;pointer-events:none;border:none;"
            aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
    </button>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var btn = document.getElementById("btt");
            if (!btn) return;
            window.addEventListener("scroll", function() {
                if (window.scrollY > 600) {
                    btn.style.opacity=1;btn.style.transform="translateY(0)";btn.style.pointerEvents="auto";
                } else {
                    btn.style.opacity=0;btn.style.transform="translateY(16px)";btn.style.pointerEvents="none";
                }
            });
        });
    </script>
</body>
</html>
