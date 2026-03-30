@extends('layouts.app')

@section('title', 'Drug & Alcohol Rehabilitation Centers — 21,000+ Verified | DaycareHub')

@section('meta_description', 'Search 21,000+ verified drug and alcohol rehab centers across the US. Filter by state, treatment type, and insurance accepted.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Find Centers"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Rehabilitation Centers Directory",
    "description": "Browse 21,000+ verified drug and alcohol rehabilitation centers across all 50 US states.",
    "numberOfItems": {{ $facilities->total() ?? 0 }},
    "dateModified": "{{ now()->toIso8601String() }}",
    "itemListElement": [
        @foreach($facilities->take(20) as $i => $fac)
        {"@@type": "ListItem", "position": {{ $i + 1 }}, "url": "https://daycarehub.us/facilities/{{ $fac->id }}", "name": "{{ addslashes($fac->rehab_name) }}"}{{ $loop->last ? '' : ',' }}
        @endforeach
    ]
}
</script>
@endsection
@section('content')
    <!-- Breadcrumb -->
    <nav class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <ol class="flex items-center space-x-2 text-sm text-gray-500">
                <li><a href="{{ route('home') }}" class="hover:text-green-600">Home</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-medium">Facilities</li>
            </ol>
        </div>
    </nav>

    <!-- Header -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Rehabilitation Centers</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
                Find the right rehabilitation center in your region.
                All facilities are verified and provide quality services.
            </p>

            <!-- Search and Filter -->
            <div class="max-w-6xl mx-auto">
                <form action="{{ route('facilities.index') }}" method="GET" class="space-y-6">
                    <!-- Main search -->
                    <div class="flex flex-col lg:flex-row gap-4">
                        <div class="flex-1">
                            <input type="text" name="search" value="{{ request('search') }}"
                                   placeholder="Search by name, city..."
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                        <div class="lg:w-48">
                            <select name="state" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="">All states</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->code }}" {{ request('state') == $state->code ? 'selected' : '' }}>
                                        {{ $state->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="bg-green-600 text-white px-8 py-3 rounded-lg hover:bg-green-700 transition-colors font-medium">
                            Find Centers
                        </button>
                    </div>

                    <!-- Additional filters -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 bg-gray-50 p-4 rounded-lg">
                        <!-- Sorting -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Sort by</label>
                            <select name="sort" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="latest" {{ request('sort', 'latest') == 'latest' ? 'selected' : '' }}>Newest</option>
                                <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>By name</option>
                            </select>
                        </div>
                    </div>

                    <!-- Reset filters -->
                    @if(request()->hasAny(['search', 'state', 'sort']))
                        <div class="text-center">
                            <a href="{{ route('facilities.index') }}" class="text-green-600 hover:text-green-700 text-sm font-medium">
                                Reset all filters
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($facilities->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($facilities as $facility)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            @php
                                $cardImage = $facility->logo ?? $facility->image ?? null;
                            @endphp
                            @if($cardImage)
                                <img src="{{ asset('storage/' . $cardImage) }}" alt="{{ $facility->rehab_name }}"
                                     class="w-full h-48 object-contain bg-white">
                            @else
                                <div class="w-full h-48 bg-gradient-to-br from-emerald-800 to-teal-600 flex flex-col items-center justify-center gap-3">
                                    <svg class="w-12 h-12 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                    <span class="text-white/80 text-sm font-medium px-3 text-center">{{ Str::limit($facility->rehab_name, 30) }}</span>
                                </div>
                            @endif

                            <div class="p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">
                                    <a href="{{ route('facilities.show', $facility) }}" class="hover:text-green-600">
                                        {{ Str::limit($facility->rehab_name, 45) }}
                                    </a>
                                </h3>

                                <p class="text-gray-500 text-sm mb-3 flex items-center gap-1">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    {{ $facility->city }}, {{ $facility->state }}
                                </p>

                                <div class="flex justify-between items-center">
                                    <a href="{{ route('facilities.show', $facility) }}"
                                       class="text-green-600 hover:text-green-700 font-medium">
                                        Learn More
                                    </a>
                                    <a href="tel:{{ $facility->phone }}"
                                       class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors text-sm">
                                        Call
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    {{ $facilities->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">No facilities found</h3>
                    <p class="text-gray-600">Try adjusting the filters or choose another state.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
