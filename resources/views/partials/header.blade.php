@php
    $l = app()->getLocale();
@endphp
<header class="sticky top-0 z-40 w-full border-b border-zinc-200 bg-white shadow-[0_1px_0_0_rgba(15,23,42,.06)]">
    <div class="container-grid flex items-center justify-between gap-4 py-4">
        <a href="{{ locale_route('home', ['locale' => $l]) }}" aria-label="{{ __('site.name') }}">
            <img src="{{ asset('media/wp-uploads/2025/01/cropped-logo_www_2025_ciemne.png') }}" alt="{{ __('site.name') }}" class="h-10 w-auto sm:h-12">
        </a>
        <nav class="hidden items-baseline gap-6 lg:flex" aria-label="{{ __('aria.menu') }}">
            <div class="relative group">
                <a class="inline-flex items-center gap-1 text-base font-semibold text-primary hover:text-accent" href="{{ locale_route('offer.index', ['locale' => $l]) }}">
                    {{ __('page.offer') }}
                    <span aria-hidden="true">▾</span>
                </a>
                <div class="absolute left-0 top-full z-50 hidden pt-2 group-hover:block" role="navigation" aria-label="{{ __('aria.offer_submenu') }}">
                    <div class="min-w-[16rem] rounded-lg border border-zinc-200 bg-white p-2 shadow-lg">
                        <a class="block rounded-md px-3 py-2 text-base text-primary hover:bg-zinc-50" href="{{ locale_route('offer.dpf', ['locale' => $l]) }}">{{ __('nav.offer_dpf') }}</a>
                        <a class="block rounded-md px-3 py-2 text-base text-primary hover:bg-zinc-50" href="{{ locale_route('solutions.chemia', ['locale' => $l]) }}">{{ __('nav.offer_cleaning_agents') }}</a>
                    </div>
                </div>
            </div>
            {{-- <a class="text-base font-semibold text-primary hover:text-accent" href="https://motsler24.pl/" target="_blank" rel="noopener noreferrer">{{ __('nav.shop') }}</a> --}}
            <a class="text-base font-semibold text-primary hover:text-accent" href="{{ locale_route('contact', ['locale' => $l]) }}">{{ __('nav.contact') }}</a>
        </nav>
        <div class="flex items-center gap-3">
            <a class="hidden rounded-full bg-accent px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-accent/90 sm:inline-flex" href="{{ locale_route('contact', ['locale' => $l]) }}">{{ __('nav.consultation') }}</a>
            @include('partials.language-switcher')
            <details class="relative lg:hidden">
                <summary class="list-none cursor-pointer rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-medium text-zinc-800 shadow-sm [&::-webkit-details-marker]:hidden">
                    <span class="sr-only">{{ __('aria.menu_open') }}</span>
                    <span aria-hidden="true">☰</span>
                </summary>
                <div class="absolute right-0 mt-2 w-56 rounded-lg border border-zinc-200 bg-white p-2 shadow-lg">
                    <a class="mb-2 block rounded-full bg-accent px-3 py-2 text-center text-sm font-semibold text-white transition hover:bg-accent/90" href="{{ locale_route('contact', ['locale' => $l]) }}">{{ __('nav.consultation') }}</a>
                    <a class="block rounded-md px-3 py-2 text-sm font-semibold text-zinc-700 hover:bg-zinc-50" href="{{ locale_route('offer.index', ['locale' => $l]) }}">{{ __('page.offer') }}</a>
                    <a class="block rounded-md px-3 py-2 pl-6 text-sm text-zinc-600 hover:bg-zinc-50" href="{{ locale_route('offer.dpf', ['locale' => $l]) }}">{{ __('nav.offer_dpf') }}</a>
                    <a class="block rounded-md px-3 py-2 pl-6 text-sm text-zinc-600 hover:bg-zinc-50" href="{{ locale_route('solutions.chemia', ['locale' => $l]) }}">{{ __('nav.offer_cleaning_agents') }}</a>
                    {{-- <a class="block rounded-md px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-50" href="https://motsler24.pl/" target="_blank" rel="noopener noreferrer">{{ __('nav.shop') }}</a> --}}
                    <a class="block rounded-md px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-50" href="{{ locale_route('contact', ['locale' => $l]) }}">{{ __('nav.contact') }}</a>
                </div>
            </details>
        </div>
    </div>
</header>
