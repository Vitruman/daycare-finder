<?php header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $defaultTitle = \App\Models\Setting::getValue('meta_title', 'DaycareHub - Find Childcare Centers');
        $defaultDescription = \App\Models\Setting::getValue('meta_description', 'Find rehabilitation support, facilities, and helpful resources.');
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
        <meta property="og:image" content="{{ asset('images/hero/rf-og.jpg') }}">
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
        "description": "Find daycare and childcare childcare centers near you across the United States",
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
    <link rel="icon" type="image/svg+xml" href="/images/logo/rf-favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/logo/rf-favicon-32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/logo/rf-favicon-180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/logo/rf-logo-192.png">
    <script defer src="https://cloud.umami.is/script.js" data-website-id="b095d633-3489-40e6-8d76-727705dab912"></script>
</head>
<body x-data="{ mobileMenuOpen: false }" x-on:keydown.escape.window="mobileMenuOpen = false" class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Main Content -->
    <main class="min-h-screen" style="margin-top:0">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Mobile Menu Overlay -->
    <div x-show="mobileMenuOpen" @click="mobileMenuOpen = false" x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-40 bg-black bg-opacity-50 lg:hidden"
         x-cloak>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-in-out duration-300 transform"
         x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in-out duration-300 transform"
         x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
         class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-xl lg:hidden"
         x-cloak>
        @include('layouts.mobile-navigation')
    </div>

    <!-- Unified Sticky Mobile CTA (glassmorphism) -->
    <div id="unified-cta" style="position:fixed;bottom:0;left:0;right:0;z-index:55;display:none">
        <div style="margin:0 12px 12px;padding:10px 16px;background:rgba(255,255,255,0.82);backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px);border-radius:18px;box-shadow:0 4px 24px rgba(0,0,0,0.12),0 0 0 1px rgba(0,0,0,0.05);display:flex;align-items:center;justify-content:space-between;gap:12px">
            <div style="display:flex;flex-direction:column;gap:1px">
                <span style="font-size:13px;font-weight:600;color:#111">Free &amp; Confidential</span>
                <span style="font-size:11px;color:#666">24/7 Helpline &bull; No obligation</span>
            </div>
            <a href="tel:{{ \App\Models\Setting::getValue('phone', '+1(855) 321-3614') }}"
               style="display:inline-flex;align-items:center;gap:6px;padding:10px 20px;background:linear-gradient(135deg,#059669,#047857);color:#fff;font-weight:700;font-size:13px;border-radius:50px;text-decoration:none;box-shadow:0 2px 8px rgba(5,150,105,0.35);white-space:nowrap">
                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                Call Now
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
