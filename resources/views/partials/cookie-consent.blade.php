@php
    $l = app()->getLocale();
    $privacyHref = locale_route('privacy', ['locale' => $l]);
@endphp
<div
    id="cookie-consent"
    class="fixed inset-x-0 bottom-0 z-[200] hidden translate-y-3 opacity-0 transition-[opacity,transform] duration-300 ease-out"
    data-gtag-id="{{ $gtagId }}"
    role="region"
    aria-label="{{ __('cookies.region_label') }}"
>
    <div class="border-t border-white/15 bg-primary shadow-[0_-12px_40px_rgba(7,15,28,0.45)]">
        <div class="container-grid py-5 sm:py-6">
            <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between lg:gap-10">
                <div class="max-w-3xl">
                    <p id="cookie-consent-title" class="font-heading text-xs font-bold uppercase tracking-[0.2em] text-[#6bd269]">{{ __('cookies.title') }}</p>
                    <p class="mt-2 text-sm leading-relaxed text-white/90 sm:text-[0.9375rem]">
                        {{ __('cookies.lead') }}
                        <a href="{{ $privacyHref }}" class="font-medium text-[#6bd269] underline decoration-[#6bd269]/50 underline-offset-2 transition hover:text-white hover:decoration-white">{{ __('cookies.privacy_link') }}</a>
                    </p>
                </div>
                <div class="flex flex-shrink-0 flex-wrap items-center gap-3 sm:justify-end">
                    <button type="button" id="cookie-consent-reject" class="rounded-lg border-2 border-accent bg-transparent px-4 py-2.5 text-sm font-semibold text-accent transition hover:bg-accent/15 focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-primary">{{ __('cookies.reject') }}</button>
                    <button type="button" id="cookie-consent-accept" class="rounded-lg bg-accent px-5 py-2.5 text-sm font-bold text-white shadow-sm shadow-black/20 transition hover:bg-accent/90 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-primary">{{ __('cookies.accept') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
