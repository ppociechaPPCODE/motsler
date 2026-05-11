@extends('layouts.app')
@section('title', __('page.offer_hub'))
@section('meta_description', __('offer_hub.seo_description'))
@section('content')
@php
    $l = app()->getLocale();
    $contactFormUrl = locale_route('contact', ['locale' => $l]).'#contact-form';
@endphp
<div class="w-full">
    <section class="relative scroll-mt-24 min-h-[20rem] overflow-hidden border-b border-[#e2e8f0] sm:min-h-[24rem] md:min-h-[26rem]" aria-labelledby="offer-hub-hero-heading">
        <div class="pointer-events-none absolute inset-0 hidden sm:block" aria-hidden="true">
            <div class="absolute inset-y-0 right-0 w-[min(56rem,62%)] max-w-full">
                <img src="{{ asset('images/offer/1t5a9183ab.png') }}" alt="" class="h-full w-full object-cover object-[78%_center] md:object-[72%_center]" width="955" height="781" decoding="async" fetchpriority="high">
            </div>
        </div>
        <div class="pointer-events-none absolute inset-0 bg-[#f4f7fa] sm:bg-gradient-to-r sm:from-[#f4f7fa] sm:via-[#f4f7fa]/92 sm:to-transparent" aria-hidden="true"></div>
        <div class="relative z-[1] mx-auto flex min-h-[inherit] w-full max-w-[1200px] items-center px-5 py-14 text-left sm:px-8 sm:py-16 md:py-20">
            <div class="max-w-[40rem]">
                <h1 id="offer-hub-hero-heading" class="text-balance text-3xl font-semibold leading-tight tracking-tight text-primary sm:text-4xl md:text-[2.35rem]">{{ __('offer_hub.hero_title') }}</h1>
                <p class="mt-6 max-w-[44rem] text-pretty text-base leading-relaxed text-zinc-600 sm:text-lg sm:leading-8">{{ __('offer_hub.hero_lead') }}</p>
                <a href="#offer-hub-categories" class="mt-10 inline-flex min-h-[3rem] items-center justify-center rounded-full bg-accent px-8 py-3.5 text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:text-base">{{ __('offer_hub.hero_cta') }}</a>
            </div>
        </div>
    </section>

    <section id="offer-hub-categories" class="scroll-mt-24 w-full border-b border-[#e2e8f0] bg-white" aria-labelledby="offer-hub-cat-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-8 sm:py-16">
            <h2 id="offer-hub-cat-heading" class="text-balance text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('offer_hub.categories_h2') }}</h2>
            <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-7 xl:grid-cols-3">
                <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="group flex min-h-0 flex-col overflow-hidden rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                    <figure class="relative aspect-[16/10] w-full shrink-0 bg-white">
                        <img src="{{ asset('images/offer/1T5A9192AB-1.png') }}" alt="{{ __('home.areas_old_photo_machine_alt') }}" class="absolute inset-0 h-full w-full object-contain object-center p-3 sm:p-4" width="955" height="781" loading="lazy" decoding="async">
                    </figure>
                    <div class="flex min-h-0 flex-1 flex-col p-6 sm:p-7">
                        <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('offer_hub.cat1_title') }}</h3>
                        <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('offer_hub.cat1_desc') }}</p>
                        <span class="mt-6 inline-flex min-h-[2.75rem] w-full items-center justify-center rounded-full bg-accent px-5 py-2.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition group-hover:bg-accent/90 sm:w-auto sm:self-start">{{ __('offer_hub.cat1_cta') }}</span>
                    </div>
                </a>
                <a href="{{ locale_route('solutions.chemia', ['locale' => $l]) }}" class="group flex min-h-0 flex-col overflow-hidden rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                    <figure class="relative aspect-[16/10] w-full shrink-0 bg-white">
                        <img src="{{ asset('media/wp-uploads/2025/07/20250718_165157a-768x1024.jpg') }}" alt="{{ __('home.areas_old_photo_chem_alt') }}" class="absolute inset-0 h-full w-full object-contain object-center p-7 sm:p-9 md:p-10" width="768" height="1024" loading="lazy" decoding="async">
                    </figure>
                    <div class="flex min-h-0 flex-1 flex-col p-6 sm:p-7">
                        <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('offer_hub.cat4_title') }}</h3>
                        <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('offer_hub.cat4_desc') }}</p>
                        <span class="mt-6 inline-flex min-h-[2.75rem] w-full items-center justify-center rounded-full bg-accent px-5 py-2.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition group-hover:bg-accent/90 sm:w-auto sm:self-start">{{ __('offer_hub.cat4_cta') }}</span>
                    </div>
                </a>
                <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="group flex min-h-0 flex-col overflow-hidden rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:col-span-2 sm:mx-auto sm:w-full sm:max-w-[24rem] xl:col-span-1 xl:mx-0 xl:max-w-none">
                    <figure class="relative aspect-[16/10] w-full shrink-0 bg-white">
                        <img src="{{ asset('images/offer/lewy_bok.png') }}" alt="{{ __('offer_hub.cat5_title') }}" class="absolute inset-0 h-full w-full object-contain object-center p-3 sm:p-4" width="1247" height="1020" loading="lazy" decoding="async">
                    </figure>
                    <div class="flex min-h-0 flex-1 flex-col p-6 sm:p-7">
                        <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('offer_hub.cat5_title') }}</h3>
                        <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('offer_hub.cat5_desc') }}</p>
                        <span class="mt-6 inline-flex min-h-[2.75rem] w-full items-center justify-center rounded-full bg-accent px-5 py-2.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition group-hover:bg-accent/90 sm:w-auto sm:self-start">{{ __('offer_hub.cat5_cta') }}</span>
                    </div>
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
