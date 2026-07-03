@php
    $l = app()->getLocale();
@endphp
<footer class="bg-primary text-white">
    <div class="container-grid py-12 sm:py-14 lg:py-16">
        <div class="grid gap-10 lg:grid-cols-12 lg:gap-12">
            <div class="lg:col-span-5">
                <a href="{{ locale_route('home', ['locale' => $l]) }}" class="inline-block">
                    <img src="{{ asset('media/wp-uploads/2024/02/logo_www_stopka-1.png') }}" alt="{{ __('site.name') }}" class="h-11 w-auto sm:h-12">
                </a>
                <p class="mt-5 max-w-[14rem] text-sm leading-relaxed text-white/80 sm:max-w-[16rem]">{{ __('footer.description') }}</p>
            </div>
            <div class="lg:col-span-3">
                <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-white">{{ __('footer.quick_links') }}</h3>
                <ul class="mt-5 space-y-2.5 text-sm">
                    <li><a class="text-white/85 transition hover:text-[#6bd269]" href="{{ locale_route('home', ['locale' => $l]) }}">{{ __('nav.home') }}</a></li>
                    <li><a class="text-white/85 transition hover:text-[#6bd269]" href="{{ locale_route('offer.index', ['locale' => $l]) }}">{{ __('page.offer') }}</a></li>
                    <li><a class="text-white/85 transition hover:text-[#6bd269]" href="{{ locale_route('offer.dpf', ['locale' => $l]) }}">{{ __('nav.offer_dpf') }}</a></li>
                    <li><a class="text-white/85 transition hover:text-[#6bd269]" href="{{ locale_route('contact', ['locale' => $l]) }}">{{ __('nav.contact') }}</a></li>
                </ul>
            </div>
            <div class="lg:col-span-4">
                <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-white">{{ __('footer.contact') }}</h3>
                <ul class="mt-5 space-y-4 text-sm text-white/85">
                    <li class="flex gap-3">
                        <span class="shrink-0 opacity-90" aria-hidden="true">📞</span>
                        <a href="tel:{{ __('contact.phone_href') }}" class="transition hover:text-[#6bd269]">{{ __('contact.phone_value') }}</a>
                    </li>
                    <li class="flex gap-3">
                        <span class="shrink-0 opacity-90" aria-hidden="true">✉️</span>
                        <a href="mailto:{{ __('contact.email_value') }}" class="break-all transition hover:text-[#6bd269]">{{ __('contact.email_value') }}</a>
                    </li>
                    <li class="flex gap-3">
                        <span class="shrink-0 opacity-90" aria-hidden="true">📍</span>
                        <span>ul. Reformacka 6<br>35-026 Rzeszów<br>{{ __('contact.address_country') }}</span>
                    </li>
                </ul>
                <div class="mt-6 border-t border-white/10 pt-6">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-white/90">{{ __('footer.social') }}</p>
                    <div class="mt-3 flex flex-wrap items-center gap-x-5 gap-y-3 text-sm">
                        <a class="inline-flex items-center gap-2 text-white/80 transition hover:text-[#6bd269]" href="https://www.facebook.com/motsler" target="_blank" rel="noopener noreferrer">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/10 text-white" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </span>
                            <span>{{ __('social.facebook') }}</span>
                        </a>
                        <a class="inline-flex items-center gap-2 text-white/80 transition hover:text-[#6bd269]" href="https://www.youtube.com/channel/UCY5IzZEW_VpVeDcwte-iDnw" target="_blank" rel="noopener noreferrer">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/10 text-white" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </span>
                            <span>{{ __('social.youtube') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-t border-white/10 bg-primary/90">
        <div class="container-grid flex flex-col gap-3 py-5 text-center text-sm text-white/70 sm:flex-row sm:items-center sm:justify-between sm:text-left">
            <p class="order-2 sm:order-1">© {{ date('Y') }} {{ __('footer.company_line') }}. {{ __('footer.rights') }}.</p>
            <div class="order-1 flex flex-wrap items-center justify-center gap-x-4 gap-y-2 sm:order-2 sm:justify-end">
                <a href="{{ locale_route('privacy', ['locale' => $l]) }}" class="text-white/90 underline decoration-white/30 underline-offset-2 transition hover:text-[#6bd269] hover:decoration-[#6bd269]">{{ __('footer.privacy') }}</a>
                @if (! (bool) config('app.debug') && (filled(config('services.gtm.id')) || filled(config('services.meta_pixel.id'))))
                    <button type="button" class="text-white/90 underline decoration-white/30 underline-offset-2 transition hover:text-[#6bd269] hover:decoration-[#6bd269]" data-cookie-consent-open>{{ __('cookies.settings') }}</button>
                @endif
            </div>
            <p class="order-3 text-xs font-semibold uppercase tracking-wider text-white/45">{{ __('footer.brand_line') }}</p>
        </div>
    </div>
</footer>
