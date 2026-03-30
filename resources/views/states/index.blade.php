@extends('layouts.app')

@section('title', 'Find Rehab Centers by State — All 50 US States | DaycareHub')

@section('meta_description', 'Browse drug and alcohol rehabilitation centers in all 50 US states. Find verified treatment facilities, read reviews, and get free guidance.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "States"}
    ]
}
</script>
@endsection
@section('content')
    <!-- Header -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">US States</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Choose a state to find available rehabilitation centers and get detailed information
            </p>
        </div>
    </section>

    <!-- States Grid -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($states as $state)
                    <a href="{{ route('states.show', ['state' => $state->code]) }}"
                       class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow p-6 text-center">
                        @if($state->image)
                            <img src="{{ asset('storage/' . $state->image) }}" alt="{{ $state->name }}"
                                 class="w-16 h-16 rounded-full mx-auto mb-4 object-cover">
                        @else
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl font-bold text-green-600">{{ substr($state->name, 0, 1) }}</span>
                            </div>
                        @endif
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $state->name }}</h3>
                        <p class="text-gray-600">{{ $state->code }}</p>
                        @if($state->facilities_count)
                            <p class="text-sm text-green-600 mt-2">{{ $state->facilities_count }} centers</p>
                        @endif
                    </a>
                @empty
                    <div class="col-span-full text-center py-16">
                        <p class="text-gray-600">The list of states will be available soon.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection


