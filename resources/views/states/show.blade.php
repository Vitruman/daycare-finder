@extends('layouts.app')

@section('title', 'Daycare Centers in ' . $state->name . ' — Find Daycare Near You | DaycareHub')

@section('meta_description', 'Find licensed daycare and childcare centers in ' . $state->name . '. Browse all centers and filter by age group, program type, and subsidy acceptance.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "States", "item": "https://daycarehub.us/states"},
        {"@@type": "ListItem", "position": 3, "name": "{{ $state->name ?? $stateCode }}"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Daycare Centers in {{ $state->name ?? $stateCode }}",
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
@include("components.breadcrumbs")

    <!-- Header -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $state->name }}</h1>
                    @if($state->description)
                        <p class="text-xl text-gray-600">{{ $state->description }}</p>
                    @endif
                </div>
                @if($state->image)
                    <img src="{{ asset('storage/' . $state->image) }}" alt="{{ $state->name }}"
                         class="w-24 h-24 rounded-full object-cover">
                @endif
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Childcare Centers in {{ $state->name }}</h2>

            @if($facilities->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($facilities as $facility)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            @if($facility->image)
                                <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->rehab_name }} childcare center"
                                     class="w-full h-48 object-contain bg-white">
                            @else
                                <div class="w-full h-48 bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center">
                                    <span class="text-white text-2xl font-bold">{{ substr($facility->rehab_name, 0, 1) }}</span>
                                </div>
                            @endif

                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                    <a href="{{ route('facilities.show', $facility) }}" class="hover:text-green-600">
                                        {{ $facility->rehab_name }}
                                    </a>
                                </h3>

                                <p class="text-gray-600 mb-3">{{ $facility->city }}, {{ $facility->state }}</p>

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
                    <p class="text-gray-600 mb-6">There are no childcare centers added in this state yet.</p>
                    <a href="{{ route('facilities.index') }}"
                       class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                        Find centers in other states
                    </a>
                </div>
            @endif
        </div>
    </section>
@endsection


