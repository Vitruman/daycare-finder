{{-- ═══════════════════════ READ ALSO SECTION ═══════════════════════ --}}
@php
    // Получаем последние статьи блога
    $articles = \App\Models\Blog::select('title', 'slug', 'excerpt', 'created_at')
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();
@endphp

@if($articles->count() > 0)
<section style="padding:60px 20px;background:#f8fafc;border-top:1px solid #e5e7eb;">
    <div style="max-width:1000px;margin:0 auto;">
        {{-- Section Header --}}
        <div style="text-align:center;margin-bottom:48px;">
            <h2 style="font-size:1.8rem;font-weight:800;color:#1f2937;margin:0 0 12px;">Читайте также</h2>
            <p style="font-size:1rem;color:#6b7280;margin:0;">Полезные материалы для родителей о выборе детского сада</p>
        </div>

        {{-- Articles Grid --}}
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;">
            @foreach($articles as $article)
            <article style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;transition:all .2s;box-shadow:0 1px 3px rgba(0,0,0,.05);"
                     onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(0,0,0,.1)';this.style.borderColor='#10b981'"
                     onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 1px 3px rgba(0,0,0,.05)';this.style.borderColor='#e5e7eb'">
                
                {{-- Article Image Placeholder --}}
                <div style="height:180px;background:linear-gradient(135deg,#10b981 0%,#059669 100%);display:flex;align-items:center;justify-content:center;color:#fff;position:relative;overflow:hidden;">
                    <div style="position:absolute;top:-20px;right:-20px;width:80px;height:80px;background:rgba(255,255,255,.1);border-radius:50%;"></div>
                    <div style="position:absolute;bottom:-30px;left:-30px;width:100px;height:100px;background:rgba(255,255,255,.08);border-radius:50%;"></div>
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="position:relative;z-index:1;">
                        <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                        <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                    </svg>
                </div>
                
                {{-- Article Content --}}
                <div style="padding:20px;">
                    <div style="margin-bottom:12px;">
                        <span style="display:inline-block;background:#ecfdf5;color:#059669;padding:4px 10px;border-radius:20px;font-size:.7rem;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">
                            {{ $article->created_at->format('M j, Y') }}
                        </span>
                    </div>
                    
                    <h3 style="font-size:1.1rem;font-weight:700;color:#1f2937;margin:0 0 12px;line-height:1.4;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                        {{ $article->title }}
                    </h3>
                    
                    @if($article->excerpt)
                    <p style="color:#6b7280;font-size:.9rem;line-height:1.5;margin:0 0 16px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
                        {{ $article->excerpt }}
                    </p>
                    @endif
                    
                    <a href="/blog/{{ $article->slug }}" 
                       style="display:inline-flex;align-items:center;gap:6px;color:#10b981;font-weight:600;font-size:.9rem;text-decoration:none;transition:color .2s;"
                       onmouseover="this.style.color='#059669'" 
                       onmouseout="this.style.color='#10b981'">
                        Читать далее
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9,18 15,12 9,6"/>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        {{-- View All Button --}}
        <div style="text-align:center;margin-top:40px;">
            <a href="/blog" 
               style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#fff;border:2px solid #10b981;color:#10b981;border-radius:10px;font-weight:700;text-decoration:none;transition:all .2s;box-shadow:0 2px 8px rgba(16,185,129,.1);"
               onmouseover="this.style.background='#10b981';this.style.color='#fff';this.style.transform='translateY(-1px)';this.style.boxShadow='0 6px 20px rgba(16,185,129,.25)'"
               onmouseout="this.style.background='#fff';this.style.color='#10b981';this.style.transform='translateY(0)';this.style.boxShadow='0 2px 8px rgba(16,185,129,.1)'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                    <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                </svg>
                Все статьи
            </a>
        </div>
    </div>
</section>
@endif