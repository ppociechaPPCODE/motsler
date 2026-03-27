@php
    $locale = app()->getLocale();
    $name = Route::currentRouteName();
    $params = $name ? request()->route()->parameters() : [];
    $supportedLocales = config('app.supported_locales', []);
    $flags = [
        'pl' => '🇵🇱',
        'en' => '🇬🇧',
        'de' => '🇩🇪',
        'fr' => '🇫🇷',
        'es' => '🇪🇸',
        'it' => '🇮🇹',
        'ua' => '🇺🇦',
        'ru' => '🇷🇺',
    ];
@endphp
<details class="relative text-xs font-medium">
    <summary class="list-none cursor-pointer rounded-lg border border-zinc-200 bg-white px-3 py-2 text-zinc-800 shadow-sm">
        @php
            $currentLabelKey = $supportedLocales[$locale] ?? null;
            $currentLabel = $currentLabelKey ? __($currentLabelKey) : strtoupper($locale);
            $currentFlag = $flags[$locale] ?? '🌐';
        @endphp
        <span class="inline-flex items-center gap-2">
            <span>{{ $currentFlag }}</span>
            <span>{{ $currentLabel === $currentLabelKey ? strtoupper($locale) : $currentLabel }}</span>
        </span>
    </summary>
    <ul class="absolute right-0 z-50 mt-2 min-w-[9rem] rounded-lg border border-zinc-200 bg-white p-2 shadow-lg" aria-label="{{ __('lang.switch') }}">
        @foreach($supportedLocales as $code => $labelKey)
            @php
                $href = url('/'.$code);
                if ($name === 'home') {
                    $href = route('home', array_merge($params, ['locale' => $code]));
                } elseif ($name && str_contains((string) $name, '.')) {
                    [$prefix, $logical] = explode('.', (string) $name, 2);
                    if (isset($supportedLocales[$prefix])) {
                        $href = route($code.'.'.$logical, array_merge($params, ['locale' => $code]));
                    }
                }
                $label = __($labelKey);
                $flag = $flags[$code] ?? '🌐';
            @endphp
            <li>
                <a href="{{ $href }}" class="block rounded-md px-3 py-2 {{ $locale === $code ? 'bg-zinc-100 text-zinc-900' : 'text-zinc-700 hover:bg-zinc-50 hover:text-zinc-900' }}" hreflang="{{ $code }}" lang="{{ $code }}">
                    <span class="inline-flex items-center gap-2">
                        <span>{{ $flag }}</span>
                        <span>{{ $label === $labelKey ? strtoupper($code) : $label }}</span>
                    </span>
                </a>
            </li>
        @endforeach
    </ul>
</details>
