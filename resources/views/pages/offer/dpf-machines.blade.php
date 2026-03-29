@extends('layouts.app')
@section('title', __('offer_dpf.seo_title'))
@push('head')
    <meta name="description" content="{{ __('offer_dpf.seo_description') }}">
    <meta name="keywords" content="{{ __('offer_dpf.seo_keywords') }}">
@endpush
@section('content')
@php
    $offerDpfVideoEmbed = 'https://www.youtube.com/embed/lvkEzHiBAoo?autoplay=1&mute=1&loop=1&playlist=lvkEzHiBAoo&controls=0&rel=0&modestbranding=1&playsinline=1';
    $offerDpfProofVideoId = null;
    $offerDpfMapEmbed = 'https://maps.google.com/maps?q='.rawurlencode('ul. Reformacka 6, 35-026 Rzeszów, Polska').'&hl='.(app()->getLocale() === 'pl' ? 'pl' : 'en').'&z=16&output=embed';
    $offerDpfMapLink = 'https://www.google.com/maps/search/?api=1&query='.rawurlencode('Reformacka 6, 35-026 Rzeszów');
    $offerDpfStoryVideoId = null;
    $l = app()->getLocale();
    $host = parse_url((string) config('app.url'), PHP_URL_HOST) ?: request()->getHost();
    $offerDpfSebastianPhoto = public_path('images/offer/sebastian-tkacz.jpg');
    $offerDpfImgPremium = public_path('images/offer/slr-premium.jpg');
    $offerDpfImgPlus = public_path('images/offer/slr-premium-plus.jpg');
    $offerDpfImgDual = public_path('images/offer/slr-premium-dual.jpg');
@endphp
<div class="space-y-0">
    <section id="offer-dpf-hero" class="scroll-mt-24 flex flex-col">
        <div class="relative min-h-[calc(100dvh-5.25rem)] overflow-hidden">
            <div class="absolute inset-0 overflow-hidden" aria-hidden="true">
                <iframe
                    class="pointer-events-none absolute left-1/2 top-1/2 h-[56.25vw] min-h-[125%] w-[177.77vh] min-w-[125%] -translate-x-1/2 -translate-y-1/2 border-0"
                    src="{{ $offerDpfVideoEmbed }}"
                    title="{{ __('offer_dpf.hero_video_aria') }}"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                ></iframe>
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-[#001348]/90 via-[#001348]/82 to-[#001348]/92"></div>
            <div class="relative z-10 flex min-h-[min(72vh,820px)] flex-col items-center justify-center px-6 py-16 text-center text-white sm:px-10">
                
                <div class="offer-dpf-hero-caption-track mt-3 text-white drop-shadow-[0_2px_12px_rgba(0,0,0,.35)]" aria-hidden="true">
                    <p class="offer-dpf-hero-caption-line">{{ __('offer_dpf.hero_overlay_1') }}</p>
                    <p class="offer-dpf-hero-caption-line">{{ __('offer_dpf.hero_overlay_2') }}</p>
                    <p class="offer-dpf-hero-caption-line">{{ __('offer_dpf.hero_overlay_3') }}</p>
                </div>
                <h1 class="mt-8 max-w-5xl text-2xl font-bold leading-snug sm:text-3xl md:text-4xl lg:text-[2.65rem] lg:leading-tight">{{ __('offer_dpf.hero_title') }}</h1>
                <p class="mx-auto mt-6 max-w-3xl text-base leading-7 text-white/95 sm:text-lg sm:leading-8">{{ __('offer_dpf.hero_subtitle') }}</p>
                <div class="mt-10 flex w-full max-w-lg flex-col items-center justify-center gap-3 sm:max-w-none">
                    <a href="#offer-dpf-form" class="inline-flex w-full min-h-[3.25rem] max-w-md items-center justify-center rounded-full bg-[#ffad03] px-10 py-4 text-base font-bold uppercase tracking-wide text-[#001348] shadow-lg shadow-black/25 transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:min-h-[3.5rem] sm:text-lg">{{ __('offer_dpf.hero_cta_offer') }}</a>
                    <a href="#offer-dpf-modele" class="inline-flex items-center justify-center rounded-full border border-white/70 bg-transparent px-6 py-2.5 text-sm font-semibold text-white/95 transition hover:border-white hover:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:text-base">{{ __('offer_dpf.hero_cta_models') }}</a>
                </div>
                <p class="mt-6 max-w-md text-sm leading-6 text-white/75 sm:max-w-lg sm:text-[0.9375rem]">{{ __('offer_dpf.hero_micro') }}</p>
            </div>
        </div>
        <!--<div class="flex min-h-dvh flex-col justify-center bg-white px-6 py-14 sm:px-10">
            <div class="mx-auto w-full max-w-[1200px] space-y-6 text-lg leading-8 text-[#003174]">
                <img src="{{ asset('media/wp-uploads/2025/01/cropped-logo_www_2025_ciemne.png') }}" alt="{{ __('site.name') }}" class="mx-auto block h-11 w-auto sm:h-14" width="180" height="56">
                <p>{{ __('offer_dpf.s1_p1') }}</p>
                <p>{{ __('offer_dpf.s1_p2') }}</p>
                <p>{{ __('offer_dpf.s1_p3') }}</p>
            </div>
        </div>-->
    </section>
    <section class="relative flex min-h-dvh flex-col justify-center overflow-hidden bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="pointer-events-none absolute -left-24 top-1/2 h-72 w-72 -translate-y-1/2 rounded-full bg-[#244396]/15 blur-3xl"></div>
        <div class="pointer-events-none absolute -right-16 bottom-0 h-56 w-56 rounded-full bg-[#ffad03]/10 blur-3xl"></div>
        <div class="relative mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold leading-tight text-[#001348] sm:text-4xl">{{ __('offer_dpf.s2_heading') }}</h2>
            <div class="mt-12 grid gap-8 sm:grid-cols-2 xl:grid-cols-4 xl:gap-6">
                <div class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-6 shadow-[0_12px_40px_-20px_rgba(36,67,150,.15)] sm:p-7">
                    <div class="mb-5 flex h-[4.5rem] items-center justify-center rounded-2xl bg-[#244396]/10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="h-14 w-14 shrink-0" fill="none" aria-hidden="true">
                            <rect x="10" y="8" width="30" height="48" rx="6" stroke="#244396" stroke-width="2.25"/>
                            <path stroke="#244396" stroke-width="2" stroke-linecap="round" d="M14 18h22M14 26h22M14 34h22"/>
                            <circle cx="46" cy="44" r="12" fill="#6bd269"/>
                            <path stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M41 44l3.5 3.5L51 39"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold leading-snug text-[#001348]">{{ __('offer_dpf.s2_c1_title') }}</h3>
                    <p class="mt-3 text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">{{ __('offer_dpf.s2_c1_text') }}</p>
                </div>
                <div class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-6 shadow-[0_12px_40px_-20px_rgba(36,67,150,.15)] sm:p-7">
                    <div class="mb-5 flex h-[4.5rem] items-center justify-center rounded-2xl bg-[#244396]/10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="h-14 w-14 shrink-0" fill="none" aria-hidden="true">
                            <path stroke="#244396" stroke-width="2" stroke-linejoin="round" d="M16 14h32l-6 14H22L16 14z"/>
                            <path stroke="#244396" stroke-width="2" d="M22 28v6M32 28v6M42 28v6"/>
                            <rect x="24" y="34" width="16" height="14" rx="2" stroke="#244396" stroke-width="2"/>
                            <circle cx="16" cy="50" r="3" fill="#244396" fill-opacity=".45"/>
                            <circle cx="32" cy="53" r="3.5" fill="#244396" fill-opacity=".6"/>
                            <circle cx="48" cy="50" r="3" fill="#244396" fill-opacity=".45"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold leading-snug text-[#001348]">{{ __('offer_dpf.s2_c2_title') }}</h3>
                    <p class="mt-3 text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">{{ __('offer_dpf.s2_c2_text') }}</p>
                </div>
                <div class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-6 shadow-[0_12px_40px_-20px_rgba(36,67,150,.15)] sm:p-7">
                    <div class="mb-5 flex h-[4.5rem] items-center justify-center rounded-2xl bg-[#244396]/10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="h-14 w-14 shrink-0" aria-hidden="true">
                            <g transform="translate(32 32)">
                                <circle r="22" fill="none" stroke="#244396" stroke-width="2" stroke-dasharray="8 6" stroke-linecap="round"/>
                                <g fill="#244396">
                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5"/>
                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5" transform="rotate(60)"/>
                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5" transform="rotate(120)"/>
                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5" transform="rotate(180)"/>
                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5" transform="rotate(240)"/>
                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5" transform="rotate(300)"/>
                                </g>
                                <circle r="9" fill="#244396"/>
                                <circle r="4.5" fill="#fff"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold leading-snug text-[#001348]">{{ __('offer_dpf.s2_c3_title') }}</h3>
                    <p class="mt-3 text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">{{ __('offer_dpf.s2_c3_text') }}</p>
                </div>
                <div class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-6 shadow-[0_12px_40px_-20px_rgba(36,67,150,.15)] sm:p-7">
                    <div class="mb-5 flex h-[4.5rem] items-center justify-center rounded-2xl bg-[#244396]/10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="h-14 w-14 shrink-0" fill="none" aria-hidden="true">
                            <path stroke="#244396" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M8 48h48M14 48V36h10v12M28 48V24h10v24M42 48V32h10v16"/>
                            <path stroke="#6bd269" stroke-width="2.5" stroke-linecap="round" d="M10 30c8-10 20-14 34-10"/>
                            <ellipse cx="48" cy="44" rx="10" ry="3.5" fill="#ffad03" stroke="#001348" stroke-width="1.25"/>
                            <ellipse cx="48" cy="38" rx="10" ry="3.5" fill="#ffc94d" stroke="#001348" stroke-width="1.25"/>
                            <ellipse cx="48" cy="32" rx="10" ry="3.5" fill="#ffad03" stroke="#001348" stroke-width="1.25"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold leading-snug text-[#001348]">{{ __('offer_dpf.s2_c4_title') }}</h3>
                    <p class="mt-3 text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">{{ __('offer_dpf.s2_c4_text') }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="border-t border-[#e2e8f0] bg-gradient-to-b from-white to-[#f8fafc] px-0 py-16 sm:py-20 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px] px-6 sm:px-0">
            <h2 class="text-center text-3xl font-semibold leading-tight text-[#001348] sm:text-4xl">{{ __('offer_dpf.tech_heading') }}</h2>
            <p class="mx-auto mt-6 max-w-[52rem] text-center text-base leading-7 text-[#003174] sm:text-lg sm:leading-8">{{ __('offer_dpf.tech_intro') }}</p>
        </div>
        <div class="mx-auto mt-12 w-full max-w-[1200px] lg:px-0">
            <div class="flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth scroll-pl-6 scroll-pr-6 px-6 pb-4 [scrollbar-width:none] [-ms-overflow-style:none] sm:scroll-pl-10 sm:scroll-pr-10 sm:px-10 lg:mx-auto lg:grid lg:max-w-[1200px] lg:grid-cols-4 lg:gap-6 lg:overflow-visible lg:scroll-pl-0 lg:scroll-pr-0 lg:px-0 lg:pb-0 lg:snap-none [&::-webkit-scrollbar]:hidden">
                <article class="flex w-[min(100%,calc(100vw-3rem))] max-w-[22rem] shrink-0 snap-center flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-6 shadow-[0_12px_40px_-24px_rgba(36,67,150,.2)] sm:max-w-[20rem] lg:max-w-none lg:w-auto">
                    <h3 class="text-lg font-semibold leading-snug text-[#001348]">{{ __('offer_dpf.tech_c1_title') }}</h3>
                    <div class="mt-4 space-y-3 text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">
                        <p><span class="font-semibold text-[#001348]">{{ __('offer_dpf.tech_label_desc') }}:</span> {{ __('offer_dpf.tech_c1_desc') }}</p>
                        <p><span class="font-semibold text-[#001348]">{{ __('offer_dpf.tech_label_benefit') }}:</span> {{ __('offer_dpf.tech_c1_benefit') }}</p>
                    </div>
                    <p class="mt-4 border-l-4 border-[#ffad03] bg-[#fff9eb] px-3 py-2 text-xs font-medium italic leading-relaxed text-[#5c4a1a] sm:text-sm">{{ __('offer_dpf.tech_c1_micro') }}</p>
                </article>
                <article class="flex w-[min(100%,calc(100vw-3rem))] max-w-[22rem] shrink-0 snap-center flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-6 shadow-[0_12px_40px_-24px_rgba(36,67,150,.2)] sm:max-w-[20rem] lg:max-w-none lg:w-auto">
                    <h3 class="text-lg font-semibold leading-snug text-[#001348]">{{ __('offer_dpf.tech_c2_title') }}</h3>
                    <div class="mt-4 space-y-3 text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">
                        <p><span class="font-semibold text-[#001348]">{{ __('offer_dpf.tech_label_desc') }}:</span> {{ __('offer_dpf.tech_c2_desc') }}</p>
                        <p><span class="font-semibold text-[#001348]">{{ __('offer_dpf.tech_label_benefit') }}:</span> {{ __('offer_dpf.tech_c2_benefit') }}</p>
                        <p><span class="font-semibold text-[#001348]">{{ __('offer_dpf.tech_label_specs') }}:</span> {{ __('offer_dpf.tech_c2_specs') }}</p>
                    </div>
                </article>
                <article class="flex w-[min(100%,calc(100vw-3rem))] max-w-[22rem] shrink-0 snap-center flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-6 shadow-[0_12px_40px_-24px_rgba(36,67,150,.2)] sm:max-w-[20rem] lg:max-w-none lg:w-auto">
                    <h3 class="text-lg font-semibold leading-snug text-[#001348]">{{ __('offer_dpf.tech_c3_title') }}</h3>
                    <div class="mt-4 space-y-3 text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">
                        <p><span class="font-semibold text-[#001348]">{{ __('offer_dpf.tech_label_desc') }}:</span> {{ __('offer_dpf.tech_c3_desc') }}</p>
                        <p><span class="font-semibold text-[#001348]">{{ __('offer_dpf.tech_label_benefit') }}:</span> {{ __('offer_dpf.tech_c3_benefit') }}</p>
                    </div>
                </article>
                <article class="flex w-[min(100%,calc(100vw-3rem))] max-w-[22rem] shrink-0 snap-center flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-6 shadow-[0_12px_40px_-24px_rgba(36,67,150,.2)] sm:max-w-[20rem] lg:max-w-none lg:w-auto">
                    <h3 class="text-lg font-semibold leading-snug text-[#001348]">{{ __('offer_dpf.tech_c4_title') }}</h3>
                    <div class="mt-4 space-y-3 text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">
                        <p><span class="font-semibold text-[#001348]">{{ __('offer_dpf.tech_label_desc') }}:</span> {{ __('offer_dpf.tech_c4_desc') }}</p>
                        <p><span class="font-semibold text-[#001348]">{{ __('offer_dpf.tech_label_benefit') }}:</span> {{ __('offer_dpf.tech_c4_benefit') }}</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="mx-auto mt-12 max-w-[1200px] px-6 text-center sm:px-10 lg:px-6 xl:px-0">
            <a href="#offer-dpf-modele" class="inline-flex max-w-full items-center justify-center rounded-full bg-[#244396] px-6 py-3.5 text-center text-sm font-semibold text-white transition hover:bg-[#001348] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#244396] sm:px-8 sm:text-base">{{ __('offer_dpf.tech_cta') }}</a>
        </div>
    </section>
    <section id="offer-dpf-modele" class="scroll-mt-24 border-t border-[#e2e8f0] bg-[#f1f5f9] px-0 py-16 sm:py-20 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px] px-6 sm:px-0">
            <h2 class="text-center text-3xl font-semibold leading-tight text-[#001348] sm:text-4xl">{{ __('offer_dpf.models_heading') }}</h2>
        </div>
        <div class="mx-auto mt-12 w-full max-w-[1200px] lg:px-0">
            <div class="flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth scroll-pl-6 scroll-pr-6 px-6 pb-4 [scrollbar-width:none] [-ms-overflow-style:none] sm:scroll-pl-10 sm:scroll-pr-10 sm:px-10 lg:mx-auto lg:grid lg:max-w-[1200px] lg:grid-cols-3 lg:items-stretch lg:gap-8 lg:overflow-visible lg:scroll-pl-0 lg:scroll-pr-0 lg:px-6 lg:pb-0 lg:snap-none xl:px-0 [&::-webkit-scrollbar]:hidden">
                @foreach ([1, 2, 3] as $mi)
                    @php
                        $techN = $mi === 3 ? 5 : 4;
                        $isDual = $mi === 3;
                        $imgSrc = $mi === 1
                            ? (file_exists($offerDpfImgPremium) ? asset('images/offer/slr-premium.jpg') : null)
                            : ($mi === 2
                                ? (file_exists($offerDpfImgPlus) ? asset('images/offer/slr-premium-plus.jpg') : null)
                                : (file_exists($offerDpfImgDual) ? asset('images/offer/slr-premium-dual.jpg') : (file_exists($offerDpfImgPlus) ? asset('images/offer/slr-premium-plus.jpg') : null)));
                    @endphp
                    <article class="flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[24rem] shrink-0 snap-center flex-col overflow-hidden rounded-[22px] border bg-white shadow-[0_16px_48px_-28px_rgba(36,67,150,.28)] sm:max-w-[22rem] lg:max-w-none lg:w-auto {{ $isDual ? 'border-[#ffad03] ring-2 ring-[#ffad03]/55 ring-offset-2 ring-offset-[#f1f5f9]' : 'border-[#e2e8f0]' }}">
                        <div class="relative aspect-[4/3] bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]">
                            @if ($imgSrc)
                                <img src="{{ $imgSrc }}" alt="{{ __('offer_dpf.models_m'.$mi.'_img_alt') }}" class="h-full w-full object-cover object-center" width="480" height="360">
                            @else
                                <div class="flex h-full w-full items-center justify-center p-4 text-center text-sm text-[#64748b]">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                            @endif
                            @if ($isDual)
                                <span class="absolute right-3 top-3 rounded-full bg-[#ffad03] px-3 py-1 text-xs font-bold uppercase tracking-wide text-[#001348] shadow-md">{{ __('offer_dpf.models_dual_badge') }}</span>
                            @endif
                        </div>
                        <div class="flex min-h-0 flex-1 flex-col p-6 sm:p-7">
                            <div class="flex justify-center gap-2.5" role="group" aria-label="{{ __('offer_dpf.models_icons_group_aria') }}">
                                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396]" title="{{ __('offer_dpf.models_tip_sws') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                                </span>
                                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396]" title="{{ __('offer_dpf.models_tip_pfs') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor" aria-hidden="true"><path d="M12 2.5c-3.5 4.5-7 8.2-7 11.5a7 7 0 1014 0c0-3.3-3.5-7-7-11.5zM8 18h8v2H8v-2z"/></svg>
                                </span>
                                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396]" title="{{ __('offer_dpf.models_tip_auto') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor" aria-hidden="true"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4c-.48 0-.89.2-1.18.52l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06A1.65 1.65 0 004.6 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06A1.65 1.65 0 009 4.6V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9c0 .48.2.89.52 1.18l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06A1.65 1.65 0 0015 14.4a1.65 1.65 0 00-1.51 1H13a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
                                </span>
                            </div>
                            <h3 class="mt-5 text-center text-xl font-bold text-[#001348] sm:text-2xl">{{ __('offer_dpf.models_m'.$mi.'_title') }}</h3>
                            <p class="mt-3 text-balance text-center text-sm leading-7 text-[#003174] sm:text-[0.9375rem] lg:min-h-[11rem]">{{ __('offer_dpf.models_m'.$mi.'_desc') }}</p>
                            <dl class="mt-5 space-y-2.5 border-t border-[#e2e8f0] pt-5 text-sm leading-6 text-[#003174]">
                                <div><dt class="font-semibold text-[#001348]">{{ __('offer_dpf.models_label_dims') }}</dt><dd>{{ __('offer_dpf.models_m'.$mi.'_dims') }}</dd></div>
                                <div><dt class="font-semibold text-[#001348]">{{ __('offer_dpf.models_label_throughput') }}</dt><dd>{{ __('offer_dpf.models_m'.$mi.'_throughput') }}</dd></div>
                                <div><dt class="font-semibold text-[#001348]">{{ __('offer_dpf.models_label_cleaning') }}</dt><dd>{{ __('offer_dpf.models_m'.$mi.'_cleaning') }}</dd></div>
                            </dl>
                            <p class="mt-5 text-xs font-bold uppercase tracking-wide text-[#244396]">{{ __('offer_dpf.models_tech_heading') }}</p>
                            <ul class="mt-3 space-y-2.5 text-sm leading-6 text-[#003174] lg:min-h-[13rem]">
                                @for ($ti = 1; $ti <= $techN; $ti++)
                                    <li class="flex items-start gap-2.5">
                                        <span class="mt-[calc((1lh-0.5rem)/2)] h-2 w-2 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span>
                                        <span class="min-w-0">{{ __('offer_dpf.models_m'.$mi.'_tech_'.$ti) }}</span>
                                    </li>
                                @endfor
                            </ul>
                            <div class="min-h-0 flex-1" aria-hidden="true"></div>
                            <div class="mt-6">
                                <a href="#offer-dpf-form" class="inline-flex w-full items-center justify-center rounded-full bg-[#ffad03] px-5 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348]">{{ __('offer_dpf.hero_cta_offer') }}</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <section class="border-t border-[#e2e8f0] bg-[#edf2f7] px-0 py-16 sm:py-20 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px] px-6 sm:px-0">
            <h2 class="text-center text-3xl font-semibold leading-tight text-[#001348] sm:text-4xl">{{ __('offer_dpf.proc_heading') }}</h2>
            <div class="mx-auto mt-6 max-w-[52rem] space-y-4 text-center text-base leading-7 text-[#003174] sm:text-lg sm:leading-8">
                <p>{{ __('offer_dpf.proc_intro_p1') }}</p>
                <p>{{ __('offer_dpf.proc_intro_p2') }}</p>
            </div>
            <div class="mx-auto mt-8 max-w-[52rem] rounded-[16px] border border-[#244396]/25 bg-white px-5 py-4 text-sm leading-7 text-[#003174] shadow-sm sm:px-6 sm:text-[0.9375rem]">
                <p class="font-semibold text-[#001348]">{{ __('offer_dpf.proc_highlight_label') }}</p>
                <p class="mt-2">{{ __('offer_dpf.proc_highlight') }}</p>
            </div>
        </div>
        <div class="mx-auto mt-14 hidden w-full max-w-[1200px] px-6 lg:block xl:px-0">
            <div class="relative pb-4">
                <div class="absolute left-[10%] right-[10%] top-10 h-0.5 bg-[#cbd5e1]" aria-hidden="true"></div>
                <div class="relative grid grid-cols-5 gap-3">
                    @for ($ps = 1; $ps <= 5; $ps++)
                        <div class="flex flex-col items-center text-center">
                            <div class="relative z-[1] mb-4 flex h-[4.25rem] w-[4.25rem] items-center justify-center rounded-full border-2 border-[#244396] bg-white shadow-md">
                                @if ($ps === 1 || $ps === 4)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><circle cx="11" cy="11" r="6"/><path stroke-linecap="round" d="M20 20l-4.2-4.2M8 11h6"/></svg>
                                @elseif ($ps === 2)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path d="M12 3c-2 3-5 5.5-5 9a5 5 0 1010 0c0-3.5-3-6-5-9z"/><path stroke-linecap="round" d="M8 18h8M9 14h6"/></svg>
                                @elseif ($ps === 3)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path stroke-linecap="round" d="M8 16c2 2 6 2 8 0M12 4v10"/><path d="M9 7h6l-1 5h-4L9 7z"/></svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path d="M7 4h10v16H7V4z"/><path stroke-linecap="round" d="M10 8h4M10 12h4M10 16h3"/><path stroke-linecap="round" d="M14 20l3 2v-6"/></svg>
                                @endif
                            </div>
                            <span class="text-xs font-bold text-[#244396]">{{ $ps }}/5</span>
                            <h3 class="mt-2 text-sm font-semibold leading-snug text-[#001348] sm:text-base">{{ __('offer_dpf.proc_step_'.$ps.'_title') }}</h3>
                            <p class="mt-2 text-left text-xs leading-6 text-[#003174] sm:text-sm lg:text-center">{{ __('offer_dpf.proc_step_'.$ps.'_text') }}</p>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="mt-12 flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth px-6 pb-2 [scrollbar-width:none] [-ms-overflow-style:none] sm:px-10 lg:hidden [&::-webkit-scrollbar]:hidden">
            @for ($ps = 1; $ps <= 5; $ps++)
                <article class="w-[min(100%,calc(100vw-3.5rem))] max-w-[22rem] shrink-0 snap-center rounded-[20px] border border-[#e2e8f0] bg-white p-6 shadow-[0_12px_40px_-24px_rgba(36,67,150,.15)]">
                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full border-2 border-[#244396] bg-[#f8fafc]">
                        @if ($ps === 1 || $ps === 4)
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><circle cx="11" cy="11" r="6"/><path stroke-linecap="round" d="M20 20l-4.2-4.2M8 11h6"/></svg>
                        @elseif ($ps === 2)
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path d="M12 3c-2 3-5 5.5-5 9a5 5 0 1010 0c0-3.5-3-6-5-9z"/><path stroke-linecap="round" d="M8 18h8M9 14h6"/></svg>
                        @elseif ($ps === 3)
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path stroke-linecap="round" d="M8 16c2 2 6 2 8 0M12 4v10"/><path d="M9 7h6l-1 5h-4L9 7z"/></svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path d="M7 4h10v16H7V4z"/><path stroke-linecap="round" d="M10 8h4M10 12h4M10 16h3"/><path stroke-linecap="round" d="M14 20l3 2v-6"/></svg>
                        @endif
                    </div>
                    <p class="mt-4 text-center text-xs font-bold text-[#244396]">{{ $ps }}/5</p>
                    <h3 class="mt-2 text-center text-lg font-semibold text-[#001348]">{{ __('offer_dpf.proc_step_'.$ps.'_title') }}</h3>
                    <p class="mt-3 text-sm leading-7 text-[#003174]">{{ __('offer_dpf.proc_step_'.$ps.'_text') }}</p>
                </article>
            @endfor
        </div>
        <div class="mx-auto mt-12 flex max-w-[1200px] flex-col items-center justify-center gap-3 px-6 sm:flex-row sm:px-10 lg:px-6 xl:px-0">
            <a href="#offer-dpf-hero" class="inline-flex w-full max-w-sm items-center justify-center rounded-full bg-[#244396] px-6 py-3.5 text-center text-sm font-semibold text-white transition hover:bg-[#001348] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#244396] sm:w-auto sm:px-8">{{ __('offer_dpf.proc_cta_demo') }}</a>
            <a href="#offer-dpf-modele" class="inline-flex w-full max-w-sm items-center justify-center rounded-full border-2 border-[#244396] bg-white px-6 py-3.5 text-center text-sm font-semibold text-[#244396] transition hover:bg-[#244396]/5 sm:w-auto sm:px-8">{{ __('offer_dpf.proc_cta_models') }}</a>
        </div>
    </section>
    <section class="border-t border-[#e2e8f0] bg-white px-0 py-16 sm:py-20 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px] px-6 sm:px-0">
            <h2 class="text-center text-3xl font-semibold leading-tight text-[#001348] sm:text-4xl">{{ __('offer_dpf.benefits_heading') }}</h2>
            <div class="mx-auto mt-6 max-w-[52rem] space-y-4 text-center text-base leading-7 text-[#003174] sm:text-lg sm:leading-8">
                <p>{{ __('offer_dpf.benefits_intro_p1') }}</p>
                <p>{{ __('offer_dpf.benefits_intro_p2') }}</p>
            </div>
        </div>
        <div class="mx-auto mt-12 w-full max-w-[1200px] lg:px-0">
            <div class="flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth px-6 pb-2 [scrollbar-width:none] [-ms-overflow-style:none] sm:px-10 lg:mx-auto lg:grid lg:max-w-[1200px] lg:grid-cols-3 lg:items-stretch lg:gap-8 lg:overflow-visible lg:px-6 lg:pb-0 lg:snap-none xl:px-0 [&::-webkit-scrollbar]:hidden">
                @for ($bi = 1; $bi <= 3; $bi++)
                    <article class="flex h-full w-[min(100%,calc(100vw-3rem))] max-w-[24rem] shrink-0 snap-center flex-col rounded-[22px] border border-[#e2e8f0] bg-gradient-to-b from-[#f8fafc] to-white p-6 shadow-[0_14px_44px_-28px_rgba(36,67,150,.2)] sm:max-w-[22rem] lg:max-w-none lg:w-auto">
                        <div class="flex items-center justify-center gap-3">
                            <span class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-[#244396]/12 text-[#244396]">
                                @if ($bi === 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path stroke-linecap="round" d="M4 19V5M8 13v6M12 9v10M16 6v13M20 10v9"/></svg>
                                @elseif ($bi === 2)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" d="M12 7v5l4 2"/></svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M14.7 6.3a4 4 0 10-8.4 1.8L4 14l3-1 1.8-3.1a4 4 0 001.9-3.6z"/><path stroke-linecap="round" d="M10 12l4 4"/></svg>
                                @endif
                            </span>
                            <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-[#e2e8f0] bg-white text-[#244396]" title="{{ __('offer_dpf.benefits_client_'.$bi.'_aria') }}">
                                @if ($bi === 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path d="M4 10h4v10H4zM10 6h4v14h-4zM16 14h4v6h-4z"/></svg>
                                @elseif ($bi === 2)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path d="M3 17h18v2H3zM5 17l2-8h10l2 8"/><circle cx="8" cy="19" r="1.5"/><circle cx="16" cy="19" r="1.5"/></svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path stroke-linecap="round" d="M12 3v18M8 8h8M6 14h12"/></svg>
                                @endif
                            </span>
                        </div>
                        <p class="mt-5 text-center text-xs font-bold uppercase tracking-wide text-[#244396]">{{ __('offer_dpf.benefits_c'.$bi.'_sub') }}</p>
                        <h3 class="mt-2 text-center text-xl font-bold text-[#001348] sm:text-2xl">{{ __('offer_dpf.benefits_c'.$bi.'_title') }}</h3>
                        <p class="mt-4 text-center text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">{{ __('offer_dpf.benefits_c'.$bi.'_text') }}</p>
                        <div class="mt-6 flex flex-1 flex-col justify-end">
                            <a href="#offer-dpf-form" class="inline-flex w-full items-center justify-center rounded-full border-2 border-[#244396] bg-white px-5 py-3 text-center text-sm font-semibold text-[#244396] transition hover:bg-[#244396]/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#244396]">{{ __('offer_dpf.benefits_cta') }}</a>
                        </div>
                    </article>
                @endfor
            </div>
        </div>
    </section>
    <section id="offer-dpf-vs-competitors" class="scroll-mt-24 border-t border-[#e2e8f0] bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold leading-tight text-[#001348] sm:text-4xl">{{ __('offer_dpf.cmp_heading') }}</h2>
            <div class="mt-10 overflow-x-auto rounded-[20px] border border-[#e2e8f0] shadow-[0_12px_48px_-28px_rgba(36,67,150,.15)]">
                <table class="w-full min-w-[min(100%,640px)] border-collapse text-left text-sm sm:text-base">
                    <thead>
                        <tr class="bg-[#001348] text-white">
                            <th class="min-w-[min(42vw,220px)] px-3 py-4 font-semibold sm:px-5 sm:py-5">{{ __('offer_dpf.cmp_th_feature') }}</th>
                            <th class="min-w-[min(38vw,260px)] px-3 py-4 font-semibold sm:px-5 sm:py-5">{{ __('offer_dpf.cmp_th_motsler') }}</th>
                            <th class="min-w-[min(38vw,260px)] px-3 py-4 font-semibold sm:px-5 sm:py-5">{{ __('offer_dpf.cmp_th_competitor') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-[#003174]">
                        @for ($cr = 1; $cr <= 6; $cr++)
                            <tr class="border-t border-[#e2e8f0] {{ $cr % 2 === 0 ? 'bg-[#f8fafc]' : 'bg-white' }}">
                                <td class="px-3 py-4 align-top font-medium text-[#001348] sm:px-5 sm:py-5">
                                    <span class="flex items-start gap-3">
                                        @if ($cr === 1)
                                            <span class="mt-0.5 inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-[#244396]/12 text-[#244396]" aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                                            </span>
                                        @elseif ($cr === 2)
                                            <span class="mt-0.5 inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-[#244396]/12 text-[#244396]" aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor"><path d="M12 2.5c-3.5 4.5-7 8.2-7 11.5a7 7 0 1014 0c0-3.3-3.5-7-7-11.5zM8 18h8v2H8v-2z"/></svg>
                                            </span>
                                        @elseif ($cr === 3)
                                            <span class="mt-0.5 inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-[#244396]/12 text-[#244396]" aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M8 9L5 12l3 3M16 15l3-3-3-3"/><path d="M5 12h14"/></svg>
                                            </span>
                                        @endif
                                        <span class="min-w-0 pt-0.5 leading-snug">{{ __('offer_dpf.cmp_r'.$cr.'_feature') }}</span>
                                    </span>
                                </td>
                                <td class="px-3 py-4 align-top sm:px-5 sm:py-5">
                                    <span class="flex gap-2.5">
                                        <span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white" aria-hidden="true">✓</span>
                                        <span class="min-w-0 leading-relaxed">{{ __('offer_dpf.cmp_r'.$cr.'_motsler') }}</span>
                                    </span>
                                </td>
                                <td class="px-3 py-4 align-top sm:px-5 sm:py-5">
                                    <span class="flex gap-2.5">
                                        <span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-red-500 text-sm font-bold text-white" aria-hidden="true">✗</span>
                                        <span class="min-w-0 leading-relaxed">{{ __('offer_dpf.cmp_r'.$cr.'_competitor') }}</span>
                                    </span>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            <div class="mx-auto mt-10 max-w-3xl text-center text-sm leading-7 text-[#003174] sm:text-base">
                <p>{{ __('offer_dpf.cmp_summary') }}</p>
            </div>
            <div class="mt-10 text-center">
                <a href="#offer-dpf-modele" class="inline-flex max-w-full items-center justify-center rounded-full bg-[#ffad03] px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:px-10 sm:text-base">{{ __('offer_dpf.cmp_cta') }}</a>
            </div>
        </div>
    </section>
    <!--<section class="min-h-dvh bg-white px-6 pb-0 pt-14 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s3_intro') }}</h2>
            <div class="mt-12 grid gap-10 lg:grid-cols-2 lg:gap-12">
                <div class="rounded-[20px] border border-[#cbd2d9] bg-[#f8fafc] p-8 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <h3 class="text-2xl font-bold text-[#001348]">{{ __('offer_dpf.s3_premium_title') }}</h3>
                    <ul class="mt-6 space-y-3 text-[#003174]">
                        @for ($i = 1; $i <= 7; $i++)
                            <li class="flex items-start gap-3 text-sm leading-7 sm:text-base">
                                <span class="mt-[calc((1lh-0.5rem)/2)] h-2 w-2 shrink-0 rounded-full bg-[#244396]" aria-hidden="true"></span>
                                <span>{{ __('offer_dpf.s3_feature_'.$i) }}</span>
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="rounded-[20px] border border-[#244396]/30 bg-white p-8 shadow-[0_15px_15px_-10px_rgba(36,67,150,.15)]">
                    <h3 class="text-2xl font-bold text-[#001348]">{{ __('offer_dpf.s3_premium_plus_title') }}</h3>
                    <p class="mt-4 text-sm font-semibold uppercase tracking-wide text-[#244396]">{{ __('offer_dpf.s3_premium_plus_lead') }}</p>
                    <ul class="mt-4 space-y-3 text-[#003174]">
                        @for ($i = 1; $i <= 4; $i++)
                            <li class="flex items-start gap-3 text-sm leading-7 sm:text-base">
                                <span class="mt-[calc((1lh-0.5rem)/2)] h-2 w-2 shrink-0 rounded-full bg-[#ffad03]" aria-hidden="true"></span>
                                <span>{{ __('offer_dpf.s3_pp_'.$i) }}</span>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="#" class="inline-flex rounded-full bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white hover:bg-[#001348]">{{ __('offer_dpf.s3_cta') }}</a>
            </div>
        </div>
        <div class="mt-16 bg-[#00264b] px-6 py-14 text-white sm:px-10">
            <div class="mx-auto w-full max-w-[1200px]">
                <h2 class="text-center text-3xl font-semibold sm:text-4xl">{{ __('offer_dpf.s3_systems_title') }}</h2>
                <div class="mt-12 grid gap-10 lg:grid-cols-2 lg:gap-12">
                    <div>
                        <div class="aspect-[4/3] overflow-hidden rounded-[16px] bg-white/10">
                            <div class="flex h-full w-full items-center justify-center px-6 text-center text-sm text-white/70">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold">{{ __('offer_dpf.s3_sws_title') }}</h3>
                        <p class="mt-3 text-base leading-7 text-white/90">{{ __('offer_dpf.s3_sws_desc') }}</p>
                    </div>
                    <div>
                        <div class="aspect-[4/3] overflow-hidden rounded-[16px] bg-white/10">
                            <div class="flex h-full w-full items-center justify-center px-6 text-center text-sm text-white/70">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold">{{ __('offer_dpf.s3_pfs_title') }}</h3>
                        <p class="mt-3 text-base leading-7 text-white/90">{{ __('offer_dpf.s3_pfs_desc') }}</p>
                    </div>
                </div>
                <div class="mx-auto mt-14 max-w-[1200px] space-y-4 text-center text-lg leading-8 text-white/95">
                    <p>{{ __('offer_dpf.s3_materials') }}</p>
                    <p class="font-semibold text-[#6bd269]">{{ __('offer_dpf.s3_service') }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s4_title') }}</h2>
            <p class="mx-auto mt-6 max-w-[1200px] text-center text-lg leading-8 text-[#003174]">{{ __('offer_dpf.s4_lead') }}</p>
            <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="flex gap-4 rounded-[18px] border border-[#e2e8f0] bg-[#f8fafc] p-5 shadow-sm">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#244396] text-sm font-bold text-white">{{ $i }}</span>
                        <p class="text-sm leading-6 text-[#001348]">{{ __('offer_dpf.s4_step_'.$i) }}</p>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s41_title') }}</h2>
            <p class="mx-auto mt-6 max-w-[1200px] text-center text-lg leading-8 text-[#003174]">{{ __('offer_dpf.s41_body') }}</p>
            <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @for ($g = 1; $g <= 4; $g++)
                    <div class="flex aspect-[4/3] items-center justify-center rounded-[20px] border border-dashed border-[#94a3b8] bg-white p-4 text-center text-sm text-[#64748b] shadow-sm">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                @endfor
            </div>
            <div class="mx-auto mt-12 max-w-[1200px]">
                <p class="mb-4 text-center text-sm font-semibold uppercase tracking-wide text-[#244396]">{{ __('offer_dpf.s41_video_title') }}</p>
                @if ($offerDpfProofVideoId)
                    <div class="aspect-video overflow-hidden rounded-[20px] bg-black shadow-lg">
                        <iframe class="h-full w-full border-0" src="https://www.youtube.com/embed/{{ $offerDpfProofVideoId }}?rel=0&modestbranding=1" title="{{ __('offer_dpf.s41_video_title') }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @else
                    <div class="flex aspect-video items-center justify-center rounded-[20px] border border-[#cbd2d9] bg-[#f1f5f9] px-6 text-center text-[#64748b]">{{ __('offer_dpf.s41_video_placeholder') }}</div>
                @endif
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center border-t border-[#d8e0ea] bg-[#edf2f7] px-6 py-16 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
            <div class="mb-10 flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
                <div>
                    <h2 class="text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s5_opinions_title') }}</h2>
                    <p class="mt-2 text-lg text-[#003174]">{{ __('offer_dpf.s5_opinions_sub') }}</p>
                </div>
                <img src="{{ asset('media/wp-uploads/2025/01/googl.png') }}" alt="" class="h-auto max-h-10 w-auto max-w-[min(140px,100%)] shrink-0 self-start object-contain object-left md:mt-2" width="120" height="40">
            </div>
            <div class="grid gap-6 lg:grid-cols-3">
                <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <img src="{{ asset('media/wp-uploads/2025/01/aiw_200.png') }}" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale" width="120" height="48">
                    <div class="text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-6 text-sm leading-7 text-[#001348]">{{ __('offer_dpf.s5_t1_quote') }}</blockquote>
                    <div class="mt-6 font-semibold text-[#001348]">{{ __('offer_dpf.s5_t1_name') }}</div>
                    <div class="text-sm text-[#003174]/80">{{ __('offer_dpf.s5_t1_company') }}</div>
                </article>
                <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <img src="{{ asset('media/wp-uploads/2025/01/auto_bodo_200-1.png') }}" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale" width="120" height="48">
                    <div class="text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-6 text-sm leading-7 text-[#001348]">{{ __('offer_dpf.s5_t2_quote') }}</blockquote>
                    <div class="mt-6 font-semibold text-[#001348]">{{ __('offer_dpf.s5_t2_name') }}</div>
                    <div class="text-sm text-[#003174]/80">{{ __('offer_dpf.s5_t2_company') }}</div>
                </article>
                <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <img src="{{ asset('media/wp-uploads/2025/01/clean_fap_200.png') }}" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale" width="120" height="48">
                    <div class="text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-6 text-sm leading-7 text-[#001348]">{{ __('offer_dpf.s5_t3_quote') }}</blockquote>
                    <div class="mt-6 font-semibold text-[#001348]">{{ __('offer_dpf.s5_t3_name') }}</div>
                    <div class="text-sm text-[#003174]/80">{{ __('offer_dpf.s5_t3_company') }}</div>
                </article>
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center border-y border-[#e2e8f0] bg-white px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="mb-8 text-center text-xl font-semibold text-[#001348]">{{ __('offer_dpf.s5_logos_title') }}</h2>
            <div class="mx-auto grid max-w-[280px] grid-cols-2 place-items-center gap-x-6 gap-y-5 md:mx-0 md:flex md:max-w-none md:flex-wrap md:items-center md:justify-center md:gap-x-10 md:gap-y-8">
                @foreach ([['2025/01/calpeda_small.png','calpeda'],['2025/01/ebara.png','ebara'],['2025/01/fatek_small.png','fatek'],['2025/01/weintek_small.png','weintek'],['2025/01/wieland_small.png','wieland'],['2025/01/eaton_small.png','eaton'],['2025/01/schneider_small.png','schneider'],['2025/01/siemens_small.png','siemens']] as $logo)
                    <img src="{{ asset('media/wp-uploads/'.$logo[0]) }}" alt="{{ $logo[1] }}" class="h-9 w-auto max-w-full object-contain opacity-70 grayscale md:h-12" width="120" height="48">
                @endforeach
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center bg-[#00264b] px-6 py-16 text-white sm:px-10">
        <div class="mx-auto grid w-full max-w-[1200px] gap-10 lg:grid-cols-2 lg:items-center lg:gap-12">
            <div class="flex flex-col justify-center">
                <h2 class="text-3xl font-semibold sm:text-4xl">{{ __('offer_dpf.s5_map_title') }}</h2>
                <p class="mt-4 text-lg text-white/90">{{ __('offer_dpf.s5_map_lead') }}</p>
                <p class="mt-8 text-xl font-bold">{{ __('footer.company_line') }}</p>
                <p class="mt-2 text-lg text-white/95">{{ __('contact.address_value') }}</p>
                <a href="{{ $offerDpfMapLink }}" target="_blank" rel="noopener noreferrer" class="mt-8 inline-flex w-fit rounded-full border border-white/40 px-6 py-3 text-sm font-semibold text-white hover:bg-white/10">{{ __('offer_dpf.s5_map_open') }}</a>
            </div>
            <div class="relative aspect-[4/3] w-full overflow-hidden rounded-[20px] bg-white/10 shadow-xl sm:aspect-[16/10] lg:aspect-auto lg:min-h-[min(50dvh,420px)]">
                <iframe class="absolute inset-0 h-full w-full border-0" src="{{ $offerDpfMapEmbed }}" title="{{ __('offer_dpf.s5_map_title') }}" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold leading-tight text-[#001348] sm:text-4xl">{{ __('offer_dpf.s6_title') }}</h2>
            <p class="mt-6 text-center text-xl font-medium text-[#244396]">{{ __('offer_dpf.s6_lead') }}</p>
            <ul class="mt-10 space-y-5 text-lg leading-8 text-[#003174]">
                @for ($b = 1; $b <= 7; $b++)
                    <li class="flex items-start gap-4">
                        <span class="mt-[calc((1lh-0.625rem)/2)] h-2.5 w-2.5 shrink-0 rounded-full bg-[#ffad03]" aria-hidden="true"></span>
                        <span>{{ __('offer_dpf.s6_b'.$b) }}</span>
                    </li>
                @endfor
            </ul>
            <div class="mt-12 text-center">
                <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="inline-flex rounded-full bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white hover:bg-[#001348]">{{ __('offer_dpf.s6_cta') }}</a>
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center border-t border-[#e2e8f0] bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            @if ($offerDpfStoryVideoId)
                <div class="aspect-video overflow-hidden rounded-[20px] bg-black shadow-[0_24px_50px_-12px_rgba(36,67,150,.2)]">
                    <iframe class="h-full w-full border-0" src="https://www.youtube.com/embed/{{ $offerDpfStoryVideoId }}?rel=0&modestbranding=1" title="{{ __('offer_dpf.s7_title') }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            @else
                <div class="aspect-video rounded-[20px] border border-dashed border-[#94a3b8] bg-white shadow-sm" aria-hidden="true"></div>
            @endif
        </div>
    </section>
    <section id="offer-dpf-porownanie" class="min-h-dvh scroll-mt-24 border-t border-[#e2e8f0] bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s8_title') }}</h2>
            <div class="mt-10 overflow-x-auto rounded-[20px] border border-[#e2e8f0] shadow-[0_8px_40px_-20px_rgba(36,67,150,.12)]">
                <table class="w-full min-w-[min(100%,720px)] border-collapse text-left text-sm sm:text-base">
                    <thead>
                        <tr class="bg-[#001348] text-white">
                            <th class="min-w-[min(40vw,200px)] px-3 py-4 font-semibold sm:px-6">{{ __('offer_dpf.s8_th_feature') }}</th>
                            <th class="min-w-[min(30vw,220px)] px-3 py-4 font-semibold sm:px-6">{{ __('offer_dpf.s8_th_premium') }}</th>
                            <th class="min-w-[min(30vw,220px)] px-3 py-4 font-semibold sm:px-6">{{ __('offer_dpf.s8_th_plus') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-[#003174]">
                        <tr class="border-b border-[#e2e8f0] bg-[#f8fafc]">
                            <td class="align-top bg-[#f8fafc]"></td>
                            <td class="p-3 align-top sm:p-4 sm:pt-5">
                                <div class="overflow-hidden rounded-xl border border-[#e2e8f0] bg-white shadow-sm">
                                    @if (file_exists($offerDpfImgPremium))
                                        <img class="h-36 w-full object-cover sm:h-44" src="{{ asset('images/offer/slr-premium.jpg') }}" width="400" height="300" alt="{{ __('offer_dpf.s8_img_alt_premium') }}">
                                    @else
                                        <div class="flex h-36 w-full items-center justify-center border border-dashed border-[#cbd2d9] bg-[#fafbfc] p-3 text-center text-xs text-[#64748b] sm:h-44 sm:text-sm">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                                    @endif
                                </div>
                            </td>
                            <td class="p-3 align-top sm:p-4 sm:pt-5">
                                <div class="overflow-hidden rounded-xl border border-[#e2e8f0] bg-white shadow-sm">
                                    @if (file_exists($offerDpfImgPlus))
                                        <img class="h-36 w-full object-cover sm:h-44" src="{{ asset('images/offer/slr-premium-plus.jpg') }}" width="400" height="300" alt="{{ __('offer_dpf.s8_img_alt_plus') }}">
                                    @else
                                        <div class="flex h-36 w-full items-center justify-center border border-dashed border-[#cbd2d9] bg-[#fafbfc] p-3 text-center text-xs text-[#64748b] sm:h-44 sm:text-sm">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @for ($r = 1; $r <= 18; $r++)
                            <tr class="border-t border-[#e2e8f0] {{ $r % 2 === 0 ? 'bg-[#f8fafc]' : 'bg-white' }}">
                                <td class="px-3 py-3 font-medium text-[#001348] sm:px-6">{{ __('offer_dpf.s8_r'.$r.'_label') }}</td>
                                <td class="px-3 py-3 align-top sm:px-6">{{ __('offer_dpf.s8_r'.$r.'_p') }}</td>
                                <td class="px-3 py-3 align-top sm:px-6">{{ __('offer_dpf.s8_r'.$r.'_p') }}</td>
                            </tr>
                        @endfor
                    </tbody>
                    <tfoot>
                        <tr class="border-t-2 border-[#e2e8f0] bg-[#edf2f7]">
                            <td class="bg-[#edf2f7]"></td>
                            <td class="p-3 align-top sm:p-5">
                                <a href="{{ locale_route('contact', ['locale' => $l]) }}?inquiry=slr-premium#contact-form" class="inline-flex w-full min-w-0 justify-center rounded-full bg-[#244396] px-4 py-3.5 text-center text-xs font-semibold uppercase leading-tight text-white hover:bg-[#001348] sm:px-6 sm:py-4 sm:text-sm">{{ __('offer_dpf.s8_cta_quote') }}</a>
                            </td>
                            <td class="p-3 align-top sm:p-5">
                                <a href="{{ locale_route('contact', ['locale' => $l]) }}?inquiry=slr-premium-plus#contact-form" class="inline-flex w-full min-w-0 justify-center rounded-full bg-[#244396] px-4 py-3.5 text-center text-xs font-semibold uppercase leading-tight text-white hover:bg-[#001348] sm:px-6 sm:py-4 sm:text-sm">{{ __('offer_dpf.s8_cta_quote') }}</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s9_title') }}</h2>
            <p class="mx-auto mt-4 max-w-[1200px] text-center text-lg text-[#003174]">{{ __('offer_dpf.s9_subtitle') }}</p>
            <div class="mt-12 grid gap-6 lg:grid-cols-2">
                <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-8 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#244396]">{{ __('offer_dpf.s9_cs1_tag') }}</span>
                    <h3 class="mt-3 text-xl font-bold text-[#001348]">{{ __('offer_dpf.s9_cs1_title') }}</h3>
                    <p class="mt-1 text-sm font-medium text-[#64748b]">{{ __('offer_dpf.s9_cs1_place') }}</p>
                    <p class="mt-4 text-sm leading-7 text-[#003174]">{{ __('offer_dpf.s9_cs1_body') }}</p>
                </article>
                <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-8 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#244396]">{{ __('offer_dpf.s9_cs2_tag') }}</span>
                    <h3 class="mt-3 text-xl font-bold text-[#001348]">{{ __('offer_dpf.s9_cs2_title') }}</h3>
                    <p class="mt-4 text-sm leading-7 text-[#003174]">{{ __('offer_dpf.s9_cs2_body') }}</p>
                </article>
                <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-8 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#244396]">{{ __('offer_dpf.s9_cs3_tag') }}</span>
                    <h3 class="mt-3 text-xl font-bold text-[#001348]">{{ __('offer_dpf.s9_cs3_title') }}</h3>
                    <p class="mt-1 text-sm font-medium text-[#64748b]">{{ __('offer_dpf.s9_cs3_place') }}</p>
                    <p class="mt-4 text-sm leading-7 text-[#003174]">{{ __('offer_dpf.s9_cs3_body') }}</p>
                </article>
                <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-8 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#244396]">{{ __('offer_dpf.s9_cs4_tag') }}</span>
                    <h3 class="mt-3 text-xl font-bold text-[#001348]">{{ __('offer_dpf.s9_cs4_title') }}</h3>
                    <p class="mt-4 text-sm leading-7 text-[#003174]">{{ __('offer_dpf.s9_cs4_body') }}</p>
                </article>
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center border-t border-[#e2e8f0] bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s10_title') }}</h2>
            <ul class="mt-10 space-y-5 text-lg leading-8 text-[#003174]">
                @for ($w = 1; $w <= 4; $w++)
                    <li class="flex items-start gap-4">
                        <span class="mt-[calc((1lh-0.625rem)/2)] h-2.5 w-2.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span>
                        <span>{{ __('offer_dpf.s10_b'.$w) }}</span>
                    </li>
                @endfor
            </ul>
        </div>
    </section>
    <section class="min-h-dvh border-t border-[#e2e8f0] bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s11_title') }}</h2>
            <div class="mt-10 space-y-3">
                @foreach (trans('offer_dpf_faq.items') as $faq)
                    <details class="group rounded-[16px] border border-[#e2e8f0] bg-white px-5 py-4 shadow-[0_8px_24px_-12px_rgba(36,67,150,.12)] open:shadow-[0_12px_32px_-12px_rgba(36,67,150,.18)]">
                        <summary class="flex cursor-pointer list-none items-start justify-between gap-3 text-base font-semibold text-[#001348] marker:content-none [&::-webkit-details-marker]:hidden">
                            <span class="text-left">{{ $faq['q'] }}</span>
                            <span class="mt-0.5 inline-block shrink-0 text-[#244396] transition-transform group-open:rotate-180" aria-hidden="true">▼</span>
                        </summary>
                        <p class="mt-4 text-sm leading-7 text-[#003174]">{{ $faq['a'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>
  
    <section id="offer-dpf-form" class="scroll-mt-24 flex min-h-dvh flex-col justify-center bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px] text-center">
            <h2 class="text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s12_title') }}</h2>
            <p class="mt-4 text-lg text-[#003174]">{{ __('offer_dpf.s12_subtitle') }}</p>
            @if (session('contact_sent'))
                <div class="mx-auto mt-8 max-w-[640px] rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-900">{{ __('form.sent') }}</div>
            @endif
            @if (session('contact_error'))
                <div class="mx-auto mt-8 max-w-[640px] rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-900">{{ __('contact.mail_failed') }}</div>
            @endif
            <form class="mx-auto mt-10 w-full max-w-[640px] space-y-5 text-left" method="post" action="{{ locale_route('contact.store', ['locale' => $l]) }}">
                @csrf
                <input class="w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396]" id="offer-dpf-email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('form.email') }}">
                @error('email')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                <input class="w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396]" id="offer-dpf-phone" name="phone" type="text" value="{{ old('phone') }}" autocomplete="tel" placeholder="{{ __('offer_dpf.s12_phone_placeholder') }}">
                @error('phone')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                <textarea class="min-h-[10rem] w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396]" id="offer-dpf-message" name="message" required placeholder="{{ __('form.message') }}">{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                <button class="inline-flex w-full items-center justify-center rounded-xl bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white hover:bg-[#001348] sm:w-auto" type="submit">{{ __('offer_dpf.s12_submit') }}</button>
                <p class="text-sm leading-6 text-[#003174]">@lang('legal.consent_before', ['host' => $host])<a href="{{ locale_route('privacy', ['locale' => $l]) }}" class="text-[#244396] underline">{{ __('footer.privacy') }}</a>@lang('legal.consent_after')</p>
            </form>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center border-t border-[#e2e8f0] bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto flex w-full max-w-[1200px] flex-col gap-10 lg:flex-row lg:items-center lg:gap-14">
            <div class="mx-auto w-full max-w-[320px] shrink-0 lg:mx-0">
                @if (file_exists($offerDpfSebastianPhoto))
                    <img class="aspect-[4/5] w-full rounded-[20px] object-cover shadow-[0_20px_40px_-20px_rgba(0,19,72,.35)]" src="{{ asset('images/offer/sebastian-tkacz.jpg') }}" width="640" height="800" alt="{{ __('offer_dpf.s13_img_alt') }}">
                @else
                    <div class="flex aspect-[4/5] w-full items-center justify-center rounded-[20px] border border-dashed border-[#cbd2d9] bg-[#f8fafc] p-6 text-center text-sm text-[#64748b]">{{ __('offer_dpf.s13_photo_placeholder') }}</div>
                @endif
            </div>
            <div class="min-w-0 flex-1">
                <h2 class="text-2xl font-semibold text-[#001348] sm:text-3xl">{{ __('offer_dpf.s13_title') }}</h2>
                <p class="mt-2 text-sm font-medium uppercase tracking-wide text-[#244396]">{{ __('offer_dpf.s13_role') }}</p>
                <p class="mt-6 text-sm leading-7 text-[#003174] sm:text-base sm:leading-8">{{ __('offer_dpf.s13_body') }}</p>
            </div>
        </div>
    </section>-->
</div>
@endsection
