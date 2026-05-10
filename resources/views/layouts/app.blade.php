<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-full bg-background">
<head>
    @php
        $isProductionEnv = ! (bool) config('app.debug');
        $gtagId = config('services.gtag.id') ?: env('GTAG_ID');

    @endphp
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (! $isProductionEnv)
        <meta name="robots" content="noindex, nofollow">
    @endif
    <title>@yield('title', __('site.name'))</title>
    @stack('head')
    <link rel="canonical" href="{{ canonical_url() }}">
    @php
        $hreflangs = hreflang_urls();
    @endphp
    @foreach ($hreflangs as $hl => $href)
        <link rel="alternate" hreflang="{{ $hl }}" href="{{ $href }}">
    @endforeach
    @if ($hreflangs !== [])
        <link rel="alternate" hreflang="x-default" href="{{ $hreflangs['pl'] ?? reset($hreflangs) }}">
    @endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if ($isProductionEnv && filled($gtagId))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $gtagId }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ $gtagId }}');
        </script>
    @endif
</head>
<body class="min-h-screen bg-background font-sans text-primary antialiased">
    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-50 focus:rounded focus:bg-white focus:px-3 focus:py-2 focus:shadow">{{ __('nav.skip') }}</a>
    @include('partials.header')
    <main id="main" class="w-full py-0">
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
