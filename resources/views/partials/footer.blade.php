@php
    $l = app()->getLocale();
@endphp
<footer class="bg-[#00264b] text-white">
    <div class="mx-auto grid w-full max-w-[1650px] gap-10 px-6 py-10 text-center sm:px-10 lg:grid-cols-3 lg:items-start lg:text-left">
        <div class="lg:justify-self-start">
            <img src="{{ asset('media/wp-uploads/2024/02/logo_www_stopka-1.png') }}" alt="{{ __('site.name') }}" class="mx-auto h-12 w-auto lg:mx-0">
            <p class="mt-4 text-sm text-white/90">{{ __('footer.company_line') }}</p>
            <p class="mt-1 text-sm text-white/90">{{ __('contact.address_value') }}</p>
            <div class="mt-5 space-y-2 text-sm">
                <a href="tel:{{ __('contact.phone_href') }}" class="block text-white/90 hover:text-[#6bd269]">{{ __('contact.phone_value') }}</a>
                <a href="mailto:{{ __('contact.email_value') }}" class="block text-white/90 hover:text-[#6bd269]">{{ __('contact.email_value') }}</a>
            </div>
        </div>
        <div class="lg:justify-self-center">
            <div class="text-lg font-semibold uppercase">{{ __('footer.products') }}</div>
            <ul class="mt-4 space-y-2 text-sm">
                <li><a class="text-white/90 hover:text-[#6bd269]" href="{{ locale_route('offer.dpf', ['locale' => $l]) }}">{{ __('nav.offer_dpf') }}</a></li>
            </ul>
        </div>
        <div class="lg:justify-self-end">
            <div class="text-lg font-semibold uppercase">{{ __('footer.social') }}</div>
            <div class="mt-4 flex flex-wrap justify-center gap-4 text-sm lg:justify-end">
                <a class="text-white/90 hover:text-[#6bd269]" href="#" rel="noopener noreferrer">{{ __('social.facebook') }}</a>
                <a class="text-white/90 hover:text-[#6bd269]" href="#" rel="noopener noreferrer">{{ __('social.youtube') }}</a>
                <a class="text-white/90 hover:text-[#6bd269]" href="#" rel="noopener noreferrer">{{ __('social.linkedin') }}</a>
            </div>
        </div>
    </div>
    <div class="border-t border-white/20 px-6 py-3 text-center text-sm text-white/85 sm:px-10">
        <a href="{{ locale_route('privacy', ['locale' => $l]) }}" class="text-white/90 underline hover:text-[#6bd269]">{{ __('footer.privacy') }}</a>
        <span class="mx-2">·</span>
        MOTSLER Sp. z o.o. {{ __('footer.rights') }} {{ date('Y') }}
    </div>
</footer>
