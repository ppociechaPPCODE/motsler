@php
    $l = app()->getLocale();
@endphp
<footer class="bg-[#0c1929] text-white">
    <div class="mx-auto w-full max-w-[1200px] px-6 py-12 sm:px-10 sm:py-14 lg:py-16">
        <div class="grid gap-10 lg:grid-cols-12 lg:gap-12">
            <div class="lg:col-span-5">
                <a href="{{ locale_route('home', ['locale' => $l]) }}" class="inline-block">
                    <img src="{{ asset('media/wp-uploads/2024/02/logo_www_stopka-1.png') }}" alt="{{ __('site.name') }}" class="h-11 w-auto sm:h-12">
                </a>
                <p class="mt-5 max-w-md text-sm leading-relaxed text-white/80">{{ __('footer.description') }}</p>
            </div>
            <div class="lg:col-span-3">
                <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-white">{{ __('footer.quick_links') }}</h3>
                <ul class="mt-5 space-y-2.5 text-sm">
                    <li><a class="text-white/85 transition hover:text-[#6bd269]" href="{{ locale_route('home', ['locale' => $l]) }}">{{ __('nav.home') }}</a></li>
                    <li><a class="text-white/85 transition hover:text-[#6bd269]" href="{{ locale_route('offer.dpf', ['locale' => $l]) }}">{{ __('nav.offer_dpf') }}</a></li>
                    <li><a class="text-white/85 transition hover:text-[#6bd269]" href="https://motsler24.pl/" target="_blank" rel="noopener noreferrer">{{ __('nav.shop') }}</a></li>
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
                    <div class="mt-3 flex flex-wrap gap-x-4 gap-y-2 text-sm">
                        <a class="text-white/80 transition hover:text-[#6bd269]" href="#" rel="noopener noreferrer">{{ __('social.facebook') }}</a>
                        <a class="text-white/80 transition hover:text-[#6bd269]" href="#" rel="noopener noreferrer">{{ __('social.youtube') }}</a>
                        <a class="text-white/80 transition hover:text-[#6bd269]" href="#" rel="noopener noreferrer">{{ __('social.linkedin') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-t border-white/10 bg-[#08121f]">
        <div class="mx-auto flex w-full max-w-[1200px] flex-col gap-3 px-6 py-5 text-center text-sm text-white/70 sm:flex-row sm:items-center sm:justify-between sm:px-10 sm:text-left">
            <p class="order-2 sm:order-1">© {{ date('Y') }} {{ __('footer.company_line') }}. {{ __('footer.rights') }}.</p>
            <a href="{{ locale_route('privacy', ['locale' => $l]) }}" class="order-1 text-white/90 underline decoration-white/30 underline-offset-2 transition hover:text-[#6bd269] hover:decoration-[#6bd269] sm:order-2">{{ __('footer.privacy') }}</a>
            <p class="order-3 text-xs font-semibold uppercase tracking-wider text-white/45">{{ __('footer.brand_line') }}</p>
        </div>
    </div>
</footer>
