@php
    $locales = array_keys(config('app.supported_locales', []));
    $logicalRoutes = [
        'home' => 'home',
        'offer_index' => 'offer.index',
        'offer_dpf' => 'offer.dpf',
        'solutions_chemia' => 'solutions.chemia',
        'contact' => 'contact',
        'privacy' => 'privacy',
    ];
@endphp
# {{ __('site.name') }}

> {{ __('site.seo_default_description') }}

{{ __('llms.purpose') }}

## {{ __('llms.section_entity') }}

- {{ __('footer.company_line') }}
- ul. Reformacka 6, 35-026 Rzeszów, Poland
- {{ __('contact.email_value') }}
- {{ __('contact.phone_value') }}

## {{ __('llms.section_urls') }}

@foreach ($locales as $lc)
@php App::setLocale($lc); @endphp
### {{ strtoupper($lc) }} ({{ __('lang.'.$lc) }})
@foreach ($logicalRoutes as $label => $routeName)
@if ($routeName === 'home')
- {{ __('llms.url_'.$label) }}: {{ url(locale_route('home', ['locale' => $lc])) }}
@else
- {{ __('llms.url_'.$label) }}: {{ url(locale_route($routeName, ['locale' => $lc])) }}
@endif
@endforeach

@endforeach
@php App::setLocale($savedLocale); @endphp

## {{ __('llms.section_crawl') }}

- {{ __('llms.crawl_sitemap') }}: {{ url('/sitemap.xml') }}
@foreach ($locales as $lc)
- {{ __('llms.crawl_privacy') }} ({{ $lc }}): {{ url(locale_route('privacy', ['locale' => $lc])) }}
@endforeach

## {{ __('llms.section_ai') }}

{{ __('llms.ai_instructions') }}
