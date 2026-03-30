@extends('layouts.app')

@section('title', "Daycare Centers Near ZIP Code $zip — $city, $state | DaycareHub")
@section('meta_description', "Find $stats[total] licensed daycare and childcare centers near ZIP code $zip in $city, $state. Compare programs, safety ratings, and get free guidance.")

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ config('app.url') }}"},
        {"@@type": "ListItem", "position": 2, "name": "States", "item": "{{ route('states.index') }}"},
        {"@@type": "ListItem", "position": 3, "name": "Daycare Near {{ $zip }}"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Daycare Centers Near {{ $zip }}",
    "numberOfItems": {{ $stats['total'] }},
    "itemListElement": [
        @foreach($centers->take(10) as $i => $c)
        {"@@type": "ListItem", "position": {{ $i + 1 }}, "name": "{{ addslashes($c->rehab_name) }}", "url": "{{ route('facilities.show', $c) }}"}{{ $loop->last ? '' : ',' }}
        @endforeach
    ]
}
</script>
@endsection

@section('content')
<!-- Breadcrumb -->
<nav class="bg-gray-50 py-3 border-b">
    <div class="max-w-7xl mx-auto px-4">
        <ol class="flex items-center space-x-2 text-sm text-gray-500">
            <li><a href="{{ route('home') }}" class="hover:text-blue-600">Home</a></li>
            <li><span>/</span></li>
            <li class="text-gray-900 font-medium">Daycare Near {{ $zip }}</li>
        </ol>
    </div>
</nav>

<!-- Hero -->
<section class="bg-gradient-to-br from-blue-700 to-indigo-800 text-white py-14">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-bold mb-3">
            Daycare Centers Near <span class="text-yellow-300">{{ $zip }}</span>
        </h1>
        <p class="text-blue-100 text-lg mb-6">
            {{ $city }}{{ $state ? ", $state" : "" }} — {{ $stats['total'] }} licensed childcare programs
        </p>
        
        <!-- Stats row -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-2xl mx-auto">
            <div class="bg-white/10 rounded-xl p-3">
                <div class="text-2xl font-bold">{{ $stats['total'] }}</div>
                <div class="text-blue-200 text-xs">Total Centers</div>
            </div>
            <div class="bg-white/10 rounded-xl p-3">
                <div class="text-2xl font-bold">{{ $stats['infant'] }}</div>
                <div class="text-blue-200 text-xs">Infant Programs</div>
            </div>
            <div class="bg-white/10 rounded-xl p-3">
                <div class="text-2xl font-bold">{{ $stats['preschool'] }}</div>
                <div class="text-blue-200 text-xs">Preschool</div>
            </div>
            <div class="bg-white/10 rounded-xl p-3">
                <div class="text-2xl font-bold">
                    @if($stats['avg_safety'])
                        {{ number_format(100 - $stats['avg_safety'], 0) }}%
                    @else
                        N/A
                    @endif
                </div>
                <div class="text-blue-200 text-xs">Safety Score</div>
            </div>
        </div>
    </div>
</section>

<!-- Centers list -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        @if($centers->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($centers as $center)
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                <!-- Safety badge -->
                @if($center->violation_rate !== null)
                <div class="h-2 {{ $center->safety_rating >= 4 ? 'bg-green-500' : ($center->safety_rating >= 3 ? 'bg-yellow-400' : 'bg-red-400') }}"></div>
                @else
                <div class="h-2 bg-gray-200"></div>
                @endif
                
                <div class="p-5">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-semibold text-gray-900 text-sm leading-tight flex-1 pr-2">
                            <a href="{{ route('facilities.show', $center) }}" class="hover:text-blue-600">
                                {{ $center->rehab_name }}
                            </a>
                        </h3>
                        @if($center->safety_rating > 0)
                        <span class="text-xs px-2 py-1 rounded-full flex-shrink-0
                            {{ $center->safety_rating >= 4 ? 'bg-green-100 text-green-700' : ($center->safety_rating >= 3 ? 'bg-yellow-100 text-yellow-700' : 'bg-red-100 text-red-700') }}">
                            {{ $center->safety_label }}
                        </span>
                        @endif
                    </div>
                    
                    <p class="text-gray-500 text-xs mb-2">📍 {{ $center->street1 }}, {{ $center->city }}, {{ $center->state }} {{ $center->zip }}</p>
                    
                    @if($center->age_range)
                    <p class="text-gray-600 text-xs mb-2">👶 Ages: {{ $center->age_range_label }}</p>
                    @endif
                    
                    @if($center->max_capacity)
                    <p class="text-gray-600 text-xs mb-3">🏫 Capacity: {{ $center->max_capacity }} children</p>
                    @endif
                    
                    <div class="flex gap-2">
                        <a href="{{ route('facilities.show', $center) }}" 
                           class="flex-1 text-center text-xs bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            View Details
                        </a>
                        @if($center->phone)
                        <a href="tel:{{ $center->phone }}" 
                           class="text-xs border border-blue-600 text-blue-600 px-3 py-2 rounded-lg hover:bg-blue-50 transition-colors">
                            Call
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-16">
            <div class="text-5xl mb-4">🔍</div>
            <h2 class="text-xl font-semibold text-gray-900 mb-2">No centers found for ZIP {{ $zip }}</h2>
            <p class="text-gray-600 mb-6">Try searching nearby ZIPs or browse by state.</p>
            <a href="{{ route('facilities.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                Search All Centers
            </a>
        </div>
        @endif
    </div>
</section>

<!-- SEO content block -->
<section class="py-10 bg-white border-t">
    <div class="max-w-3xl mx-auto px-4">
        <h2 class="text-xl font-bold text-gray-900 mb-4">Finding Daycare in ZIP Code {{ $zip }}</h2>
        <p class="text-gray-600 leading-relaxed mb-4">
            ZIP code {{ $zip }} in {{ $city }}{{ $state ? ", $state" : "" }} has {{ $stats['total'] }} licensed childcare providers 
            registered with state authorities. All centers listed here hold valid operating permits and undergo regular 
            safety inspections.
        </p>
        <p class="text-gray-600 leading-relaxed">
            When choosing a daycare near {{ $zip }}, consider the age range served, program type (infant care, preschool, 
            or school-age), safety inspection history, and capacity. Our safety ratings are based on official state inspection data.
        </p>
    </div>
</section>
@endsection
