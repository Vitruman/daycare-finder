@extends('layouts.app')

@section('meta_title', $blog->seo_title ?: $blog->title . ' | DaycareHub')
@section('meta_description', $blog->meta_description ?: Str::limit(strip_tags($blog->content), 155))

@section('schema')
<meta property="og:type" content="article">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="{{ $blog->title }}">
<meta name="twitter:image" content="{{ asset($blog->featured_image) }}">
<meta name="twitter:image:alt" content="{{ $blog->title }}">
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Blog", "item": "https://daycarehub.us/blog"},
        {"@@type": "ListItem", "position": 3, "name": "{{ Str::limit($blog->title, 50) }}"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "{{ $blog->title }}",
    "description": "{{ $blog->meta_description ?: Str::limit(strip_tags($blog->content), 155) }}",
    "url": "https://daycarehub.us/blog/{{ $blog->slug }}",
    "datePublished": "{{ ($blog->published_at ?: $blog->created_at)->toIso8601String() }}",
    "dateModified": "{{ $blog->updated_at->toIso8601String() }}",
    "author": {"@@type": "Organization", "name": "DaycareHub Editorial Team"},
    "publisher": {"@@type": "Organization", "name": "DaycareHub", "url": "https://daycarehub.us"},
    "mainEntityOfPage": {"@@type": "WebPage", "@@id": "https://daycarehub.us/blog/{{ $blog->slug }}"}
}
</script>
@php
    $faqItems = [];
    if (preg_match_all('/<h3[^>]*>([^<]*\?[^<]*)<\/h3>/s', $blog->content, $faqQ)) {
        $contentParts = preg_split('/<h3[^>]*>[^<]*<\/h3>/s', $blog->content);
        for ($fi = 0; $fi < count($faqQ[1]); $fi++) {
            $answer = isset($contentParts[$fi+1]) ? trim(strip_tags(explode('<h3', $contentParts[$fi+1])[0])) : '';
            $answer = trim(preg_replace('/\s+/', ' ', $answer));
            if (strlen($answer) > 20) {
                $faqItems[] = ['@type' => 'Question', 'name' => trim($faqQ[1][$fi]), 'acceptedAnswer' => ['@type' => 'Answer', 'text' => \Illuminate\Support\Str::limit($answer, 500)]];
            }
            if (count($faqItems) >= 8) break;
        }
    }
@endphp
@if(count($faqItems) >= 3)
<script type="application/ld+json">
{!! json_encode(['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $faqItems], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endif
@endsection

@php
    $readTime = $blog->content ? max(3, intval(str_word_count(strip_tags($blog->content)) / 200)) : 5;
    $wordCount = $blog->content ? str_word_count(strip_tags($blog->content)) : 0;
@endphp

@section('content')
<!-- Scroll Progress -->
<div id="scroll-progress" style="position:fixed;top:0;left:0;width:0%;height:4px;background:#10b981;z-index:9999;transition:width 0.1s linear;"></div>

<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-2">
    <nav aria-label="breadcrumb" class="text-sm text-gray-500">
        <a href="/" class="hover:text-emerald-600">Home</a>
        <span class="mx-2">/</span>
        <a href="/blog" class="hover:text-emerald-600">Blog</a>
        <span class="mx-2">/</span>
        <span class="text-gray-900">{{ Str::limit($blog->title, 40) }}</span>
    </nav>
</div>

<!-- Article Header -->
<header class="pb-8 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($blog->featured_image)
        <figure class="mb-8"><img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }} - comprehensive recovery guide overview" class="w-full rounded-2xl shadow-lg max-h-96 object-cover" width="1200" height="630" loading="lazy"></figure>
        <figure style="display:none"><img src="{{ asset('images/hero/rf-og.jpg') }}" alt="{{ $blog->title }} - DaycareHub recovery resource guide" width="1200" height="630" loading="lazy"></figure>
        @endif

        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $blog->title }}</h1>

        @if($blog->excerpt)
        <p class="text-xl text-gray-600 mb-6">{{ $blog->excerpt }}</p>
        @endif

        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 pb-6 border-b border-gray-200">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center"><span class="text-emerald-700 font-bold text-xs">RF</span></div>
                <span>DaycareHub Editorial Team</span>
            </div>
            <span>{{ $blog->published_at ? $blog->published_at->format('M j, Y') : $blog->created_at->format('M j, Y') }}</span>
            <span>{{ $readTime }} min read</span>
            <span class="text-gray-400">{{ number_format($wordCount) }} words</span>
            <span class="text-emerald-600 font-medium">Updated: {{ $blog->updated_at->format('M j, Y') }}</span>
        </div>
    </div>
</header>

<!-- Table of Contents + Article Content (2-col layout on desktop) -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-10">
    <div class="flex flex-col lg:flex-row gap-10">
        
        <!-- Sidebar: TOC + Quick Links (desktop) -->
        <aside class="lg:w-72 flex-shrink-0 order-2 lg:order-1">
            <!-- Table of Contents -->
            <div class="lg:sticky lg:top-24">
                <div class="bg-gray-50 rounded-xl p-5 border border-gray-100 mb-6" id="toc-container">
                    <h3 class="font-bold text-gray-900 text-sm mb-3 flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h10M4 18h7"/></svg>
                        In This Article
                    </h3>
                    <nav id="toc-links" class="space-y-2 text-sm">
                        <!-- Populated by JS -->
                    </nav>
                </div>
                
                <!-- Quick Help Card -->
                <div class="rounded-xl p-5 text-white" style="background:#065f46">
                    <h3 class="font-bold mb-2 text-sm">Need Help Now?</h3>
                    <p class="text-sm mb-3" style="color:rgba(255,255,255,0.85)">Free, confidential guidance available 24/7.</p>
                    <a href="tel:+18553213614" class="flex items-center gap-2 bg-white text-emerald-800 rounded-lg px-4 py-2.5 font-bold text-sm hover:bg-emerald-50 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        (855) 321-3614
                    </a>
                </div>
                
                <!-- Share -->
                <div class="mt-6 bg-gray-50 rounded-xl p-5 border border-gray-100">
                    <h3 class="font-bold text-gray-900 text-sm mb-3">Share This Article</h3>
                    <div class="flex gap-2">
                        <a href="https://twitter.com/intent/tweet?url=https://daycarehub.us/blog/{{ $blog->slug }}&text={{ urlencode($blog->title) }}" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-white border border-gray-200 flex items-center justify-center hover:bg-blue-50 hover:border-blue-200 transition-colors" title="Share on X">
                            <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://daycarehub.us/blog/{{ $blog->slug }}" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-white border border-gray-200 flex items-center justify-center hover:bg-blue-50 hover:border-blue-200 transition-colors" title="Share on Facebook">
                            <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <button onclick="navigator.clipboard.writeText(window.location.href).then(function(){this.title='Copied!'}.bind(this))" class="w-9 h-9 rounded-lg bg-white border border-gray-200 flex items-center justify-center hover:bg-gray-100 transition-colors" title="Copy link">
                            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </aside>
        
        <!-- Main Article Content -->
        <article class="flex-1 order-1 lg:order-2 min-w-0">
            <style>
.article-content { font-size: 18px; line-height: 1.8; color: #374151; max-width: 720px; }
.article-content h2 { font-size: 28px; font-weight: 700; color: #111827; margin-top: 48px; margin-bottom: 16px; padding-bottom: 8px; border-bottom: 2px solid #d1fae5; }
.article-content h3 { font-size: 22px; font-weight: 600; color: #1f2937; margin-top: 32px; margin-bottom: 12px; }
.article-content h4 { font-size: 18px; font-weight: 600; color: #374151; margin-top: 24px; margin-bottom: 8px; }
.article-content p { margin-bottom: 20px; }
.article-content ul, .article-content ol { margin-bottom: 20px; padding-left: 28px; }
.article-content ul { list-style-type: disc; }
.article-content ol { list-style-type: decimal; }
.article-content li { margin-bottom: 8px; padding-left: 4px; }
.article-content li strong { color: #111827; }
.article-content a { color: #059669; text-decoration: none; border-bottom: 1px solid #a7f3d0; transition: all 0.15s; }
.article-content a:hover { color: #047857; border-bottom-color: #059669; }
.article-content blockquote { border-left: 4px solid #10b981; background: #f0fdf4; padding: 16px 20px; margin: 24px 0; border-radius: 0 12px 12px 0; font-style: italic; color: #1f2937; }
.article-content img { border-radius: 12px; margin: 24px 0; max-width: 100%; height: auto; }
.article-content strong { color: #111827; }
.article-content table { width: 100%; border-collapse: collapse; margin: 24px 0; }
.article-content th, .article-content td { padding: 12px 16px; border: 1px solid #e5e7eb; text-align: left; }
.article-content th { background: #f9fafb; font-weight: 600; color: #111827; }
.article-content hr { border: none; border-top: 2px solid #e5e7eb; margin: 40px 0; }
.article-content code { background: #f3f4f6; padding: 2px 6px; border-radius: 4px; font-size: 0.9em; }
.article-stats-bar { grid-template-columns: repeat(2,1fr) !important; }
@media(min-width:769px) { .article-stats-bar { grid-template-columns: repeat(4,1fr) !important; } }
@media(max-width:768px) {
  .article-content { font-size: 16px; line-height: 1.7; }
  .article-content h2 { font-size: 24px; margin-top: 36px; }
  .article-content h3 { font-size: 20px; margin-top: 28px; }
}
</style>
<div class="article-content">
                {!! $blog->content !!}
            </div>
            
            <!-- Medical Disclaimer -->
            <div class="mt-10 p-5 bg-amber-50 border border-amber-200 rounded-xl">
                <div class="flex gap-3">
                    <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                    <div>
                        <p class="font-bold text-amber-900 text-sm mb-1">Medical Disclaimer</p>
                        <p class="text-amber-800 text-sm">This article is for educational purposes only and does not constitute medical advice. Always consult a qualified healthcare provider for diagnosis and treatment decisions. If you or someone you know is in crisis, call the <strong>988 Suicide & Crisis Lifeline</strong> or <strong>SAMHSA helpline at 1-800-662-4357</strong>.</p>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

<!-- Author Box -->
<section class="py-8 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center"><span class="text-emerald-700 font-bold">RF</span></div>
                <div>
                    <p class="font-bold text-gray-900">DaycareHub Editorial Team</p>
                    <p class="text-sm text-gray-500">Evidence-based content reviewed by addiction treatment specialists</p>
                </div>
            </div>
            <p class="text-xs text-gray-400">Last updated: {{ $blog->updated_at->format('F j, Y') }}</p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-10">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-2xl p-8 text-center text-white" style="background:#065f46">
            <h2 class="text-2xl font-bold mb-3">Need Help Finding Treatment?</h2>
            <p class="text-white mb-5" style="opacity:0.9">Our treatment specialists can help you find the right program. Free, confidential, available 24/7.</p>
            <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-8 py-3 rounded-xl bg-white text-emerald-800 font-bold text-lg hover:bg-emerald-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                (855) 321-3614
            </a>
        </div>
    </div>
</section>

<!-- Related Articles -->
@if(isset($relatedBlogs) && $relatedBlogs->count() > 0)
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Related Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedBlogs as $rel)
            <a href="{{ route('blog.show', $rel) }}" class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all overflow-hidden flex flex-col">
                @if($rel->featured_image)
                <img src="{{ asset($rel->featured_image) }}" alt="{{ $rel->title }}" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy">
                @else
                <div class="w-full h-48 bg-gradient-to-br from-emerald-400 to-blue-500 flex items-center justify-center">
                    <span class="text-white text-3xl font-bold">{{ substr($rel->title, 0, 1) }}</span>
                </div>
                @endif
                <div class="p-6 flex-1">
                    <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 transition-colors mb-2">{{ $rel->title }}</h3>
                    @if($rel->excerpt)
                    <p class="text-gray-600 text-sm" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden">{{ $rel->excerpt }}</p>
                    @endif
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Cross-links -->
<section class="py-10 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="/treatment" class="group bg-white rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Treatment Types</h3>
                <p class="text-gray-500 text-xs mt-1">7 programs compared</p>
            </a>
            <a href="/addiction" class="group bg-white rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Substances</h3>
                <p class="text-gray-500 text-xs mt-1">8 substance guides</p>
            </a>
            <a href="/insurance" class="group bg-white rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Insurance</h3>
                <p class="text-gray-500 text-xs mt-1">10 providers</p>
            </a>
            <a href="/resources" class="group bg-white rounded-xl p-4 border border-gray-100 hover:shadow-lg transition-all text-center">
                <h3 class="font-bold text-gray-900 group-hover:text-emerald-700 text-sm">Recovery Guides</h3>
                <p class="text-gray-500 text-xs mt-1">5 free guides</p>
            </a>
        </div>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 py-6 text-center">
    <p class="text-xs text-gray-500">Last updated: {{ $blog->updated_at->format('F Y') }} &bull; DaycareHub Editorial Team</p>
</div>

<script>
// Scroll progress
window.addEventListener('scroll', function() {
    var h = document.documentElement;
    document.getElementById('scroll-progress').style.width = (h.scrollTop / (h.scrollHeight - h.clientHeight)) * 100 + '%';
});

// Auto-generate TOC from H2s in article
(function() {
    var tocContainer = document.getElementById('toc-links');
    var article = document.querySelector('article .prose');
    if (!tocContainer || !article) return;
    
    var headings = article.querySelectorAll('h2, h3');
    if (headings.length === 0) {
        document.getElementById('toc-container').style.display = 'none';
        return;
    }
    
    headings.forEach(function(h, i) {
        if (!h.id) h.id = 'section-' + i;
        var a = document.createElement('a');
        a.href = '#' + h.id;
        a.textContent = h.textContent;
        a.className = h.tagName === 'H3' 
            ? 'block text-gray-500 hover:text-emerald-600 transition-colors pl-3 border-l border-gray-200'
            : 'block text-gray-700 hover:text-emerald-600 transition-colors font-medium';
        a.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById(h.id).scrollIntoView({behavior:'smooth',block:'start'});
        });
        tocContainer.appendChild(a);
    });
})();
</script>
<!-- Mobile CTA -->
<div class="rf-mobile-cta">
  <a href="tel:+18553213614" style="display:flex;align-items:center;justify-content:center;gap:8px;color:white;font-weight:700;text-decoration:none">
    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
    Call (855) 321-3614
  </a>
</div>
<style>.rf-mobile-cta{position:fixed;bottom:0;left:0;right:0;z-index:50;background:#065f46;padding:12px 16px;display:none}@media(min-width:768px){.rf-mobile-cta{display:none!important}}</style>
<script>window.addEventListener("scroll",function(){var c=document.querySelector(".rf-mobile-cta");if(c)c.style.display=window.scrollY>300?"block":"none"});</script>
@endsection