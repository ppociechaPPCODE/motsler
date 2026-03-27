@php
    $l = app()->getLocale();
@endphp
<header class="sticky top-0 z-40 border-b border-zinc-200/80 bg-white/90 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
        <a href="{{ locale_route('home', ['locale' => $l]) }}" aria-label="{{ __('site.name') }}">
            <img src="https://motsler.pl/wp-content/uploads/2025/01/cropped-logo_www_2025_ciemne.png" alt="{{ __('site.name') }}" class="h-10 w-auto sm:h-12">
        </a>
        <nav class="hidden items-baseline gap-6 lg:flex" aria-label="{{ __('aria.menu') }}">
            <a class="text-base font-semibold text-[#003174] hover:text-[#001348]" href="{{ locale_route('home', ['locale' => $l]) }}">{{ __('nav.home') }}</a>
            <div class="relative group">
                <span class="cursor-default text-base font-semibold text-[#003174]">{{ __('nav.offer') }}</span>
                <div class="absolute left-0 top-full z-50 hidden pt-2 group-hover:block" role="navigation" aria-label="{{ __('aria.offer_submenu') }}">
                    <div class="min-w-[16rem] rounded-lg border border-zinc-200 bg-white p-2 shadow-lg">
                        <a class="block rounded-md px-3 py-2 text-base text-[#003174] hover:bg-zinc-50" href="{{ locale_route('offer.dpf', ['locale' => $l]) }}">{{ __('nav.offer_dpf') }}</a>
                    </div>
                </div>
            </div>
            <a class="text-base font-semibold text-[#003174] hover:text-[#001348]" href="{{ locale_route('about', ['locale' => $l]) }}">{{ __('nav.about') }}</a>
            <a class="text-base font-semibold text-[#003174] hover:text-[#001348]" href="{{ locale_route('contact', ['locale' => $l]) }}">{{ __('nav.contact') }}</a>
            <a class="text-base font-semibold text-[#003174] hover:text-[#001348]" href="{{ locale_route('blog.index', ['locale' => $l]) }}">{{ __('nav.blog') }}</a>
        </nav>
        <div class="flex items-center gap-3">
            <a class="hidden rounded-full bg-zinc-900 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-zinc-800 sm:inline-flex" href="{{ locale_route('contact', ['locale' => $l]) }}">{{ __('nav.consultation') }}</a>
            @include('partials.language-switcher')
            <details class="relative lg:hidden">
                <summary class="list-none cursor-pointer rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-medium text-zinc-800 shadow-sm [&::-webkit-details-marker]:hidden">
                    <span class="sr-only">{{ __('aria.menu_open') }}</span>
                    <span aria-hidden="true">☰</span>
                </summary>
                <div class="absolute right-0 mt-2 w-56 rounded-lg border border-zinc-200 bg-white p-2 shadow-lg">
                    <a class="mb-2 block rounded-md bg-zinc-900 px-3 py-2 text-center text-sm font-semibold text-white" href="{{ locale_route('contact', ['locale' => $l]) }}">{{ __('nav.consultation') }}</a>
                    <a class="block rounded-md px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-50" href="{{ locale_route('home', ['locale' => $l]) }}">{{ __('nav.home') }}</a>
                    <span class="block px-3 py-2 text-xs font-semibold uppercase tracking-wide text-zinc-500">{{ __('nav.offer') }}</span>
                    <a class="block rounded-md px-3 py-2 pl-6 text-sm text-zinc-600 hover:bg-zinc-50" href="{{ locale_route('offer.dpf', ['locale' => $l]) }}">{{ __('nav.offer_dpf') }}</a>
                    <a class="block rounded-md px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-50" href="{{ locale_route('about', ['locale' => $l]) }}">{{ __('nav.about') }}</a>
                    <a class="block rounded-md px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-50" href="{{ locale_route('contact', ['locale' => $l]) }}">{{ __('nav.contact') }}</a>
                    <a class="block rounded-md px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-50" href="{{ locale_route('blog.index', ['locale' => $l]) }}">{{ __('nav.blog') }}</a>
                </div>
            </details>
        </div>
    </div>
</header>
