@php
    use App\Models\Setting;

    $headerLinks = json_decode((string) Setting::getValue('header_links', '[]'), true);
    $headerLinks = is_array($headerLinks) ? $headerLinks : [];
    if ($headerLinks === []) {
        $headerLinks = [
            ['label' => 'Find Centers', 'url' => url('/facilities'), 'new_tab' => false],
            ['label' => 'Treatment', 'url' => url('/treatment'), 'new_tab' => false],
            ['label' => 'Insurance', 'url' => url('/insurance'), 'new_tab' => false],
            ['label' => 'Resources', 'url' => url('/resources'), 'new_tab' => false],
            ['label' => 'Compare', 'url' => url('/compare'), 'new_tab' => false],
            ['label' => 'Blog', 'url' => url('/blog'), 'new_tab' => false],
            ['label' => 'About', 'url' => url('/about'), 'new_tab' => false],
        ];
    }

    $isActive = function (string $url): bool {
        $path = parse_url($url, PHP_URL_PATH);
        $path = is_string($path) ? trim($path) : '';
        if ($path === '') {
            return false;
        }
        $path = ltrim($path, '/');
        return $path === '' ? request()->path() === '/' : request()->is($path . '*');
    };
@endphp

<nav class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0">
                        <img src="/images/logo/rf-logo.svg" alt="DaycareHub" style="height:36px;width:auto">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                @foreach($headerLinks as $link)
                    @php
                        $label = trim((string) ($link['label'] ?? ''));
                        $url = trim((string) ($link['url'] ?? ''));
                        $newTab = (bool) ($link['new_tab'] ?? false);
                        if ($label === '' || $url === '') continue;
                        $active = $isActive($url);
                    @endphp
                    <a
                        href="{{ $url }}"
                        @if($newTab) target="_blank" rel="noopener noreferrer" @endif
                        class="text-gray-700 hover:text-green-600 px-3 py-2 text-sm font-medium {{ $active ? 'text-green-600' : '' }}"
                    >
                        {{ $label }}
                    </a>
                @endforeach

                <!-- Facilities Dropdown -->
                <div class="relative group">
                    <button type="button"
                            class="text-gray-700 hover:text-green-600 px-3 py-2 text-sm font-medium flex items-center">
                        Facilities
                        <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div class="absolute left-0 top-full w-[420px] bg-white rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 z-50
                                opacity-0 pointer-events-none transform transition ease-out duration-150 translate-y-1
                                group-hover:opacity-100 group-hover:pointer-events-auto group-hover:translate-y-0">
                        <div class="p-4 space-y-4">
                            <div class="flex items-center justify-between">
                                <a href="{{ route('facilities.index') }}" class="text-sm font-semibold text-green-700 hover:text-green-800">
                                    All Daycare Centers
                                </a>
                                <a href="{{ route('states.index') }}" class="text-xs text-green-600 hover:text-green-700">
                                    View All →
                                </a>
                            </div>

                            <div class="grid grid-cols-2 gap-6 text-sm">
                                <div class="space-y-3">
                                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Popular Cities</p>
                                    @foreach([
                                        'New York, NY' => 'New York',
                                        'Chicago, IL' => 'Chicago',
                                        'Phoenix, AZ' => 'Phoenix',
                                        'Los Angeles, CA' => 'Los Angeles',
                                        'Houston, TX' => 'Houston',
                                        'Philadelphia, PA' => 'Philadelphia',
                                    ] as $label => $citySearch)
                                        <a href="{{ route('facilities.index', ['search' => $citySearch]) }}" class="text-gray-900 hover:text-green-600 block">
                                            {{ $label }}
                                        </a>
                                    @endforeach
                                </div>
                                <div class="space-y-3">
                                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">States</p>
                                    <div class="grid grid-cols-3 gap-2 max-h-48 overflow-y-auto pr-1 text-gray-900 text-xs">
                                        @foreach(\App\Models\Organization::query()->whereNotNull('state')->select('state')->distinct()->orderBy('state')->pluck('state') as $stateCode)
                                            <a href="{{ route('facilities.index', ['state' => $stateCode]) }}" class="hover:text-green-600">
                                                {{ strtoupper($stateCode) }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="pt-2 border-t border-gray-100">
                                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide mb-2">Popular Centers</p>
                                <div class="grid grid-cols-1 gap-2">
                                    @foreach(\App\Models\Organization::query()->orderByDesc('created_at')->take(4)->get() as $facility)
                                        <a href="{{ route('facilities.show', $facility) }}"
                                           class="flex items-center gap-3 rounded-md border border-gray-100 px-3 py-2 hover:border-green-200 hover:bg-green-50 transition">
                                            <div class="w-10 h-10 rounded-md bg-gray-100 overflow-hidden">
                                                @php $img = $facility->logo ?? $facility->image; @endphp
                                                @if($img)
                                                    <img src="{{ asset('storage/' . $img) }}" alt="{{ $facility->rehab_name }}" class="w-full h-full object-cover">
                                                @else
                                                    <div class="w-full h-full flex items-center justify-center text-green-600 font-semibold">{{ substr($facility->rehab_name, 0, 1) }}</div>
                                                @endif
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-gray-900">{{ Str::limit($facility->rehab_name, 28) }}</div>
                                                <div class="text-xs text-gray-500">{{ $facility->city }}, {{ $facility->state }}</div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CTA Button -->
            <div class="flex items-center">
                <a href="tel:{{ \App\Models\Setting::getValue('phone', '+1 (555) 123-4567') }}"
                   class="text-green-700 font-semibold text-sm hover:text-green-800 transition-colors flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    (855) 321-3614
                </a>

                <!-- Mobile menu button -->
                <div class="lg:hidden ml-4">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
