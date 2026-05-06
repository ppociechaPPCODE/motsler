@extends('layouts.app')
@section('title', __('page.offer_hub'))
@push('head')
    <meta name="description" content="{{ __('offer_hub.seo_description') }}">
@endpush
@section('content')
@php
    $l = app()->getLocale();
    $contactFormUrl = locale_route('contact', ['locale' => $l]).'#contact-form';
@endphp
<div class="w-full">
    <section class="scroll-mt-24 border-b border-[#e2e8f0] bg-[linear-gradient(165deg,#fafbfc_0%,#eef2f7_45%,#f8fafc_100%)]" aria-labelledby="offer-hub-hero-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-14 text-center sm:px-8 sm:py-16 md:py-20">
            <h1 id="offer-hub-hero-heading" class="mx-auto max-w-[40rem] text-balance text-3xl font-semibold leading-tight tracking-tight text-primary sm:text-4xl md:text-[2.35rem]">{{ __('offer_hub.hero_title') }}</h1>
            <p class="mx-auto mt-6 max-w-[44rem] text-pretty text-base leading-relaxed text-zinc-600 sm:text-lg sm:leading-8">{{ __('offer_hub.hero_lead') }}</p>
            <a href="#offer-hub-categories" class="mt-10 inline-flex min-h-[3rem] items-center justify-center rounded-full bg-accent px-8 py-3.5 text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:text-base">{{ __('offer_hub.hero_cta') }}</a>
        </div>
    </section>

    <section id="offer-hub-categories" class="scroll-mt-24 w-full border-b border-[#e2e8f0] bg-white" aria-labelledby="offer-hub-cat-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-8 sm:py-16">
            <h2 id="offer-hub-cat-heading" class="sr-only">{{ __('page.offer') }}</h2>
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 xl:grid-cols-3 xl:gap-6">
                <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="group flex min-h-[11rem] flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:min-h-[12rem] sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('offer_hub.cat1_title') }}</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('offer_hub.cat1_desc') }}</p>
                    <span class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-accent group-hover:underline">{{ __('offer_hub.cat1_cta') }} <span aria-hidden="true">→</span></span>
                </a>
                <a href="{{ locale_route('offer.workshop_washers', ['locale' => $l]) }}" class="group flex min-h-[11rem] flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:min-h-[12rem] sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('offer_hub.cat2_title') }}</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('offer_hub.cat2_desc') }}</p>
                    <span class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-accent group-hover:underline">{{ __('offer_hub.cat2_cta') }} <span aria-hidden="true">→</span></span>
                </a>
                <a href="{{ locale_route('offer.pressure_washers', ['locale' => $l]) }}" class="group flex min-h-[11rem] flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:min-h-[12rem] sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('offer_hub.cat3_title') }}</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('offer_hub.cat3_desc') }}</p>
                    <span class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-accent group-hover:underline">{{ __('offer_hub.cat3_cta') }} <span aria-hidden="true">→</span></span>
                </a>
                <a href="{{ locale_route('solutions.chemia', ['locale' => $l]) }}" class="group flex min-h-[11rem] flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:min-h-[12rem] sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('offer_hub.cat4_title') }}</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('offer_hub.cat4_desc') }}</p>
                    <span class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-accent group-hover:underline">{{ __('offer_hub.cat4_cta') }} <span aria-hidden="true">→</span></span>
                </a>
                <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="group flex min-h-[11rem] flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:min-h-[12rem] sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('offer_hub.cat5_title') }}</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('offer_hub.cat5_desc') }}</p>
                    <span class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-accent group-hover:underline">{{ __('offer_hub.cat5_cta') }} <span aria-hidden="true">→</span></span>
                </a>
            </div>
        </div>
    </section>

    <section class="scroll-mt-24 w-full border-b border-[#e2e8f0] bg-[#f1f5f9]" aria-labelledby="offer-hub-advisory-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-8 sm:py-16">
            <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 lg:items-center lg:gap-12">
                <div>
                    <h2 id="offer-hub-advisory-heading" class="text-balance text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('offer_hub.advisory_h2') }}</h2>
                    <p class="mt-5 text-pretty text-base leading-relaxed text-zinc-700 sm:text-lg sm:leading-8">{{ __('offer_hub.advisory_lead') }}</p>
                </div>
                <div class="rounded-2xl border border-[#e2e8f0] bg-white p-6 shadow-sm sm:p-8">
                    <p class="text-pretty text-base leading-relaxed text-zinc-700">{{ __('offer_hub.advisory_box') }}</p>
                    <a href="{{ $contactFormUrl }}" class="mt-6 inline-flex min-h-[3rem] w-full items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/10 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:w-auto">{{ __('offer_hub.advisory_cta') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="scroll-mt-24 w-full bg-white" aria-labelledby="offer-hub-final-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-14 text-center sm:px-8 sm:py-16">
            <h2 id="offer-hub-final-heading" class="mx-auto max-w-[36rem] text-balance text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('offer_hub.final_h2') }}</h2>
            <a href="{{ $contactFormUrl }}" class="mt-10 inline-flex min-h-[3rem] items-center justify-center rounded-full border-2 border-accent bg-transparent px-10 py-3.5 text-sm font-bold uppercase tracking-wide text-primary transition hover:bg-accent/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:text-base">{{ __('offer_hub.final_cta') }}</a>
        </div>
    </section>
</div>
@endsection
