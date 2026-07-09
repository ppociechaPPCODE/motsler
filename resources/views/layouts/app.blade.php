<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-full bg-background">
<head>
    @php
        $isProductionEnv = ! (bool) config('app.debug');
        $gtmId = config('services.gtm.id');
        $metaPixelId = config('services.meta_pixel.id');
        $hasTracking = filled($gtmId) || filled($metaPixelId);
    @endphp
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (! $isProductionEnv)
        <meta name="robots" content="noindex, nofollow">
    @endif
    <title>@yield('title', __('site.name'))</title>
    @php
        $pageTitle = trim($__env->yieldContent('title')) ?: __('site.name');
        $pageDesc = trim($__env->yieldContent('meta_description'));
        if ($pageDesc === '') {
            $pageDesc = __('site.seo_default_description');
        }
        $canonical = canonical_url();
        $siteUrl = rtrim((string) config('app.url'), '/');
        if ($siteUrl === '') {
            $siteUrl = rtrim(request()->getSchemeAndHttpHost(), '/');
        }
        $supportedLocaleCodes = array_keys(config('app.supported_locales', []));
        $ogLocaleMap = [
            'pl' => 'pl_PL',
            'en' => 'en_US',
            'fr' => 'fr_FR',
            'cz' => 'cs_CZ',
            'de' => 'de_DE',
            'sk' => 'sk_SK',
            'hu' => 'hu_HU',
        ];
        $pageLangBcp47 = [
            'pl' => 'pl-PL',
            'en' => 'en-US',
            'fr' => 'fr-FR',
            'cz' => 'cs-CZ',
            'de' => 'de-DE',
            'sk' => 'sk-SK',
            'hu' => 'hu-HU',
        ];
        $currentLocaleCode = app()->getLocale();
        $ogLocale = $ogLocaleMap[$currentLocaleCode] ?? str_replace('-', '_', $currentLocaleCode).'_'.strtoupper($currentLocaleCode);
        $ogImage = url(asset('media/wp-uploads/2025/01/cropped-logo_www_2025_ciemne.png'));
        $hreflangs = hreflang_urls();
        $telHref = preg_replace('/\s+/', '', (string) __('contact.phone_href'));
        if ($telHref !== '' && ! str_starts_with($telHref, '+')) {
            $telHref = '+'.$telHref;
        }
        $ldGraph = [
            [
                '@type' => 'Organization',
                '@id' => $siteUrl.'#organization',
                'name' => __('site.name'),
                'legalName' => __('footer.company_line'),
                'url' => $siteUrl,
                'logo' => ['@type' => 'ImageObject', 'url' => $ogImage],
                'email' => __('contact.email_value'),
                'telephone' => $telHref,
                'sameAs' => [
                    'https://www.facebook.com/motsler',
                    'https://www.youtube.com/channel/UCY5IzZEW_VpVeDcwte-iDnw',
                ],
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => 'ul. Reformacka 6',
                    'postalCode' => '35-026',
                    'addressLocality' => 'Rzeszów',
                    'addressCountry' => 'PL',
                ],
                'contactPoint' => [
                    [
                        '@type' => 'ContactPoint',
                        'telephone' => $telHref,
                        'email' => __('contact.email_value'),
                        'contactType' => 'customer support',
                        'areaServed' => ['PL', 'EU'],
                        'availableLanguage' => $supportedLocaleCodes,
                    ],
                ],
            ],
            [
                '@type' => 'WebSite',
                '@id' => $siteUrl.'#website',
                'url' => $siteUrl,
                'name' => __('site.name'),
                'description' => __('site.seo_default_description'),
                'publisher' => ['@id' => $siteUrl.'#organization'],
                'inLanguage' => array_values($pageLangBcp47),
            ],
            [
                '@type' => 'WebPage',
                '@id' => $canonical.'#webpage',
                'url' => $canonical,
                'name' => $pageTitle,
                'description' => $pageDesc,
                'isPartOf' => ['@id' => $siteUrl.'#website'],
                'inLanguage' => $pageLangBcp47[$currentLocaleCode] ?? 'pl-PL',
            ],
        ];
    @endphp
    <link rel="icon" href="{{ asset('media/wp-uploads/2025/01/cropped-logo_www_2025_ciemne.png') }}" sizes="any">
    <link rel="apple-touch-icon" href="{{ asset('media/wp-uploads/2025/01/cropped-logo_www_2025_ciemne.png') }}">
    <meta name="description" content="{{ $pageDesc }}">
    <link rel="canonical" href="{{ $canonical }}">
    @foreach ($hreflangs as $hl => $href)
        <link rel="alternate" hreflang="{{ $hl }}" href="{{ $href }}">
    @endforeach
    @if ($hreflangs !== [])
        <link rel="alternate" hreflang="x-default" href="{{ $hreflangs['pl'] ?? reset($hreflangs) }}">
    @endif
    <link rel="alternate" type="text/plain" href="{{ url('/llms.txt') }}" title="llms.txt">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ __('site.name') }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDesc }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:locale" content="{{ $ogLocale }}">
    @foreach ($supportedLocaleCodes as $code)
        @if ($code !== $currentLocaleCode)
            <meta property="og:locale:alternate" content="{{ $ogLocaleMap[$code] ?? $code }}">
        @endif
    @endforeach
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:image:alt" content="{{ $pageTitle }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDesc }}">
    <meta name="twitter:image" content="{{ $ogImage }}">
    @stack('head')
    @if ($isProductionEnv && filled($gtmId))
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('consent', 'default', {
                'ad_storage': 'denied',
                'analytics_storage': 'denied',
                'ad_user_data': 'denied',
                'ad_personalization': 'denied',
                'wait_for_update': 500
            });
        </script>
        @include('partials.gtm-head', ['gtmId' => $gtmId])
    @endif
    <script type="application/ld+json">{!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => $ldGraph,
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-background font-sans text-primary antialiased">
    @if ($isProductionEnv && filled($gtmId))
        @include('partials.gtm-noscript', ['gtmId' => $gtmId])
    @endif
    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-50 focus:rounded focus:bg-white focus:px-3 focus:py-2 focus:shadow">{{ __('nav.skip') }}</a>
    @include('partials.header')
    <main id="main" class="w-full py-0">
        @yield('content')
    </main>
    @include('partials.footer')
    @if ($isProductionEnv && $hasTracking)
        @include('partials.cookie-consent', [
            'gtmId' => $gtmId,
            'metaPixelId' => $metaPixelId,
        ])
    @endif
</body>
</html>
