@extends('layouts.app')

@section('title', $facility->rehab_name . ' - Childcare Center')

@section("meta_description", strip_tags($facility->description ? Str::limit($facility->description, 155) : "Learn about " . $facility->rehab_name . " childcare center in " . $facility->city . ", " . $facility->state . ". Services, contact info, and childcare programs."))

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Find Centers", "item": "https://daycarehub.us/facilities"},
        {"@@type": "ListItem", "position": 3, "name": "{{ Str::limit($facility->rehab_name, 50) }}"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "MedicalBusiness",
    "name": "{{ addslashes($facility->rehab_name) }}",
    "url": "https://daycarehub.us/facilities/{{ $facility->id }}",
    "telephone": "{{ $facility->phone ?? '' }}",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "{{ addslashes($facility->street1 ?? '') }}",
        "addressLocality": "{{ addslashes($facility->city ?? '') }}",
        "addressRegion": "{{ $facility->state ?? '' }}",
        "postalCode": "{{ $facility->zip ?? '' }}",
        "addressCountry": "US"
    },
    @if($facility->latitude && $facility->longitude)
    "geo": {
        "@@type": "GeoCoordinates",
        "latitude": {{ $facility->latitude }},
        "longitude": {{ $facility->longitude }}
    },
    @endif
    "medicalSpecialty": "Addiction Medicine",
    "priceRange": "$$-$$$$",
    "openingHours": "Mo-Su 00:00-24:00",
    "dateModified": "{{ now()->toIso8601String() }}"
}
</script>
@endsection
@section('content')
    @php
        $gallery = collect($facility->images ?? [])
            ->map(fn($img) => is_string($img) ? $img : null)
            ->filter()
            ->values();
    @endphp
    <!-- Breadcrumb -->
    <nav class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <ol class="flex items-center space-x-2 text-sm text-gray-500">
                <li><a href="{{ route('home') }}" class="hover:text-green-600">Home</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li><a href="{{ route('facilities.index') }}" class="hover:text-green-600">Facilities</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-medium">{{ Str::limit($facility->rehab_name, 30) }}</li>
            </ol>
        </div>
    </nav>

    <!-- Header -->
    <section class="py-12 bg-gradient-to-br from-green-50 via-white to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white/80 backdrop-blur-sm border border-gray-100 shadow-xl rounded-2xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                    <div class="relative">
                        @php
                            $mainImage = $facility->logo ?? $facility->image ?? null;
                        @endphp
                        @if($mainImage)
                            <img src="{{ asset('storage/' . $mainImage) }}" alt="{{ $facility->rehab_name }}"
                                 class="w-full h-full object-contain lg:h-full max-h-[420px]">
                        @else
                            <div class="w-full h-full min-h-[260px] bg-gradient-to-br from-emerald-800 to-teal-600 flex flex-col items-center justify-center gap-3">
                                <span class="text-white/80 text-2xl font-medium text-center px-4">{{ Str::limit($facility->rehab_name, 40) }}</span>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                            @if($facility->city || $facility->state)
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-white/90 text-gray-800 text-sm font-semibold shadow">
                                    <svg class="w-4 h-4 mr-1 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.38 0 2.5-1.12 2.5-2.5S13.38 6 12 6s-2.5 1.12-2.5 2.5S10.62 11 12 11z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s7-5.33 7-12a7 7 0 10-14 0c0 6.67 7 12 7 12z"></path>
                                    </svg>
                                    {{ trim($facility->city . ', ' . $facility->state, ', ') }}
                                </span>
                            @endif
                            @if($facility->accreditation)
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-white/90 text-gray-800 text-sm font-semibold shadow">
                                    {{ $facility->accreditation }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="p-8 lg:p-10 flex flex-col gap-6">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">{{ $facility->rehab_name }}</h1>
                                @if($facility->phone || $facility->website)
                                    <div class="flex flex-wrap gap-3">
                                        @if($facility->phone)
                                            <a href="tel:{{ $facility->phone }}" class="inline-flex items-center px-4 py-2 rounded-full bg-green-600 text-white text-sm font-semibold shadow hover:bg-green-700 transition">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.69l1.22 4.08a1 1 0 01-.54 1.17l-2.1 1.05a11.05 11.05 0 005.05 5.05l1.05-2.1a1 1 0 011.17-.54l4.08 1.22a1 1 0 01.69.95V19a2 2 0 01-2 2h-1C9.72 21 3 14.28 3 6V5z"></path>
                                                </svg>
                                                Call {{ $facility->phone }}
                                            </a>
                                        @endif
                                        @if($facility->website)
                                            <a href="{{ $facility->website }}" target="_blank" rel="noopener"
                                               class="inline-flex items-center px-4 py-2 rounded-full border border-green-600 text-green-700 text-sm font-semibold hover:bg-green-50 transition">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3h7v7m0-7L10 14m-4 7h7v-7m-7 7L21 7"></path>
                                                </svg>
                                                Visit website
                                            </a>
                                        @endif
                                        @if($facility->email)
                                            <a href="mailto:{{ $facility->email }}" class="inline-flex items-center px-4 py-2 rounded-full border border-gray-300 text-gray-700 text-sm font-semibold hover:bg-gray-50 transition">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                                Email
                                            </a>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                            @if($facility->founded)
                                <div class="bg-green-50 border border-green-100 rounded-xl px-4 py-3">
                                    <p class="text-xs text-green-700 font-semibold uppercase tracking-wide">Founded</p>
                                    <p class="text-lg font-bold text-gray-900">{{ $facility->founded }}</p>
                                </div>
                            @endif
                            @if($facility->typical_program_length)
                                <div class="bg-blue-50 border border-blue-100 rounded-xl px-4 py-3">
                                    <p class="text-xs text-blue-700 font-semibold uppercase tracking-wide">Program Length</p>
                                    <p class="text-lg font-bold text-gray-900">{{ $facility->typical_program_length }}</p>
                                </div>
                            @endif
                            @if($facility->occupancy)
                                <div class="bg-emerald-50 border border-emerald-100 rounded-xl px-4 py-3">
                                    <p class="text-xs text-emerald-700 font-semibold uppercase tracking-wide">Occupancy</p>
                                    <p class="text-lg font-bold text-gray-900">{{ $facility->occupancy }}</p>
                                </div>
                            @endif
                            @if($facility->treatment_focus)
                                <div class="bg-purple-50 border border-purple-100 rounded-xl px-4 py-3">
                                    <p class="text-xs text-purple-700 font-semibold uppercase tracking-wide">Focus</p>
                                    <p class="text-sm font-semibold text-gray-900 line-clamp-2">{{ $facility->treatment_focus ?: "General Childcare" }}</p>
                                </div>
                            @endif
                        </div>

                        @if($facility->about)
                            <div class="bg-gray-50 border border-gray-100 rounded-xl p-4">
                                <p class="text-sm text-gray-700 leading-relaxed">
                                    {{ strip_tags($facility->about) }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($gallery->count() > 0)
        <section class="bg-white py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                    @foreach($gallery->take(8) as $img)
                        <div class="rounded-xl overflow-hidden border border-gray-100 shadow-sm">
                            <img src="{{ asset('storage/' . $img) }}" alt="{{ $facility->rehab_name }}"
                                 class="w-full h-40 object-cover">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Content -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-12">
                    <!-- Description -->
                    @if($facility->description)
                        <div class="bg-white rounded-lg shadow-sm p-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">About the Center</h2>
                            <div class="prose max-w-none">
                                {!! nl2br(e($facility->description)) !!}
                            </div>
                        </div>
                    @endif

                    <!-- Services -->
                    @if(is_iterable($facility->services) && count($facility->services) > 0)
                        <div class="bg-white rounded-2xl shadow-sm p-8 border border-gray-100">
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div>
                                    <h2 class="text-2xl font-bold text-gray-900">Services</h2>
                                    <p class="text-sm text-gray-600 mt-1">Key offerings grouped by category</p>
                                </div>
                            </div>

                            <div class="space-y-6">
                                @foreach($facility->services as $service)
                                    @php
                                        $title = $service['f1'] ?? $service['title'] ?? 'Services';
                                        $itemsRaw = $service['f3'] ?? $service['value'] ?? '';
                                        $items = collect(explode(';', $itemsRaw))
                                            ->map(fn ($item) => trim($item))
                                            ->filter()
                                            ->values();
                                    @endphp
                                    @if($items->count() > 0)
                                        <div class="bg-green-50/70 border border-green-100 rounded-xl p-4">
                                            <h3 class="text-sm font-semibold text-green-900 mb-3">{{ $title }}</h3>
                                            <div class="flex flex-wrap gap-2">
                                                @foreach($items as $item)
                                                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-white text-green-800 text-sm font-semibold border border-green-100 shadow-sm">
                                                        {{ $item }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Contact Info -->
                    <div class="bg-white rounded-lg shadow-sm p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h2>
                        <div class="space-y-4">
                            @if($facility->full_address)
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-gray-400 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-medium text-gray-900">Address</p>
                                        <p class="text-gray-600">{{ $facility->full_address }}</p>
                                    </div>
                                </div>
                            @endif

                            @if($facility->phone)
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-medium text-gray-900">Phone</p>
                                        <a href="tel:{{ $facility->phone }}" class="text-green-600 hover:text-green-700">
                                            {{ $facility->phone }}
                                        </a>
                                    </div>
                                </div>
                            @endif

                            @if($facility->email)
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-medium text-gray-900">Email</p>
                                        <a href="mailto:{{ $facility->email }}" class="text-green-600 hover:text-green-700">
                                            {{ $facility->email }}
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Quick Actions -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Contact</h3>
                        <div class="space-y-3">
                            <a href="tel:{{ $facility->phone }}"
                               class="block w-full bg-green-600 text-white text-center px-4 py-3 rounded-md hover:bg-green-700 transition-colors font-medium">
                                Call
                            </a>
                            @if($facility->email)
                                <a href="mailto:{{ $facility->email }}"
                                   class="block w-full border border-green-600 text-green-600 text-center px-4 py-3 rounded-md hover:bg-green-50 transition-colors font-medium">
                                    Write
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Related Facilities -->
                    @if($relatedFacilities->count() > 0)
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Similar Centers</h3>
                            <div class="space-y-4">
                                @foreach($relatedFacilities as $related)
                                    <div class="border-b border-gray-200 pb-4 last:border-b-0">
                                        <h4 class="font-medium text-gray-900 mb-2">
                                    <a href="{{ route('facilities.show', $related) }}" class="hover:text-green-600">
                                        {{ $related->rehab_name }}
                                    </a>
                                        </h4>
                                        <p class="text-sm text-gray-600">{{ $related->city }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection


