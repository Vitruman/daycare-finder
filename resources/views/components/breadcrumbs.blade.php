{{-- ═══════════════════════ UNIVERSAL BREADCRUMBS COMPONENT ═══════════════════════ --}}
@php
    // Автоматически определяем breadcrumbs на основе URL и переданных параметров
    $segments = request()->segments();
    $breadcrumbs = [];
    
    // Всегда начинаем с Home
    $breadcrumbs[] = ['label' => 'Home', 'url' => '/'];
    
    // Определяем путь на основе текущего роута
    $routeName = request()->route()->getName();
    
    switch(true) {
        case str_starts_with($routeName, 'facilities'):
            $breadcrumbs[] = ['label' => 'Find Centers', 'url' => '/facilities'];
            break;
            
        case str_starts_with($routeName, 'zip'):
            if($routeName === 'zip.index') {
                $breadcrumbs[] = ['label' => 'Search by ZIP', 'url' => null];
            } else {
                $breadcrumbs[] = ['label' => 'Search by ZIP', 'url' => '/zip'];
                if(isset($zip)) {
                    $state = isset($state) ? $state : '';
                    $breadcrumbs[] = ['label' => "ZIP {$zip}", 'url' => null];
                }
            }
            break;
            
        case str_starts_with($routeName, 'states'):
            $breadcrumbs[] = ['label' => 'States', 'url' => '/states'];
            if(isset($state) && $routeName !== 'states.index') {
                $stateName = is_object($state) ? $state->name : $state;
                $breadcrumbs[] = ['label' => $stateName, 'url' => null];
            }
            break;
            
        case str_starts_with($routeName, 'programs'):
            $breadcrumbs[] = ['label' => 'Programs', 'url' => null];
            break;
            
        case str_starts_with($routeName, 'subsidies'):
            $breadcrumbs[] = ['label' => 'Financial Assistance', 'url' => null];
            break;
            
        case str_starts_with($routeName, 'blog'):
            if($routeName === 'blog.index') {
                $breadcrumbs[] = ['label' => 'Resources & Guides', 'url' => null];
            } else {
                $breadcrumbs[] = ['label' => 'Resources & Guides', 'url' => '/blog'];
                if(isset($blog)) {
                    $title = is_object($blog) ? $blog->title : $blog;
                    $breadcrumbs[] = ['label' => Str::limit($title, 40), 'url' => null];
                }
            }
            break;
            
        case in_array($routeName, ['pages.safety', 'pages.cost-calculator', 'pages.checklist']):
            $pageMap = [
                'pages.safety' => 'Safety Guidelines',
                'pages.cost-calculator' => 'Cost Calculator', 
                'pages.checklist' => 'Parent Checklist'
            ];
            $breadcrumbs[] = ['label' => $pageMap[$routeName], 'url' => null];
            break;
            
        case $routeName === 'about':
            $breadcrumbs[] = ['label' => 'About Us', 'url' => null];
            break;
            
        case $routeName === 'contact':
            $breadcrumbs[] = ['label' => 'Contact', 'url' => null];
            break;
            
        default:
            // Fallback: используем сегменты URL
            if(!empty($segments)) {
                $breadcrumbs[] = ['label' => ucwords(str_replace(['-', '_'], ' ', end($segments))), 'url' => null];
            }
    }
@endphp

{{-- RENDER BREADCRUMBS --}}
<nav style="background:#f8fafc;border-bottom:1px solid #e5e7eb;padding:12px 20px;margin:0;">
    <div style="max-width:1000px;margin:0 auto;">
        <ol style="display:flex;align-items:center;gap:8px;margin:0;padding:0;list-style:none;font-size:.85rem;">
            @foreach($breadcrumbs as $index => $crumb)
                <li style="display:flex;align-items:center;gap:8px;">
                    @if($crumb['url'])
                        <a href="{{ $crumb['url'] }}" 
                           style="color:#059669;text-decoration:none;transition:color .2s;"
                           onmouseover="this.style.color='#047857'" 
                           onmouseout="this.style.color='#059669'">
                            {{ $crumb['label'] }}
                        </a>
                    @else
                        <span style="color:#6b7280;font-weight:500;">{{ $crumb['label'] }}</span>
                    @endif
                    
                    @if(!$loop->last)
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#d1d5db" stroke-width="2" style="flex-shrink:0;">
                            <polyline points="9,18 15,12 9,6"/>
                        </svg>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</nav>