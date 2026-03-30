@php
    use App\Models\Setting;

    $headerLinks = json_decode((string) Setting::getValue('header_links', '[]'), true);
    $headerLinks = is_array($headerLinks) ? $headerLinks : [];
    if ($headerLinks === []) {
        $headerLinks = [
            ['label' => 'Home', 'url' => url('/'), 'new_tab' => false],
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

<div class="px-2 pt-2 pb-3 space-y-1">
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
            class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 rounded-md {{ $active ? 'text-green-600 bg-gray-50' : '' }}"
        >
            {{ $label }}
        </a>
    @endforeach

    <div class="space-y-1">
        <div class="px-3 py-2 text-base font-medium text-gray-900">Facilities</div>
        <a href="{{ route('facilities.index') }}" class="block px-6 py-2 text-sm text-gray-700 hover:text-green-600 hover:bg-gray-50">
            All Facilities
        </a>
        <a href="{{ route('states.index') }}" class="block px-6 py-2 text-sm text-gray-700 hover:text-green-600 hover:bg-gray-50">
            By State
        </a>
    </div>

    <div class="pt-4 pb-3 border-t border-gray-200">
        <a href="tel:{{ \App\Models\Setting::getValue('phone', '+1 (555) 123-4567') }}"
           class="block w-full bg-green-600 text-white px-3 py-2 rounded-md text-base font-medium text-center hover:bg-green-700 transition-colors">
            Call Now
        </a>
    </div>
</div>
