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
    $offerDpfSebastianPhoto = public_path('images/foto.png');
    $offerDpfImgModels = public_path('images/offer/1t5a9183ab.png');
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
            <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(11,31,58,0.78)_0%,rgba(11,31,58,0.68)_38%,rgba(11,31,58,0.42)_72%,rgba(11,31,58,0.22)_100%)]"></div>
            <div class="relative z-10 flex min-h-[min(72vh,820px)] w-full items-center py-16 text-white">
                <div class="mx-auto w-full max-w-[1200px] px-5 sm:px-10">
                    <div class="w-full max-w-[600px] text-left">
                    <p class="text-sm font-semibold leading-snug text-white/90 sm:text-base">{{ __('offer_dpf.hero_kicker') }}</p>
                    <p class="mt-1 text-xs leading-snug text-white/70 sm:text-sm">{{ __('offer_dpf.hero_seo_line') }}</p>
                    <h1 class="mt-4 text-balance text-2xl font-bold leading-[1.12] tracking-tight text-white drop-shadow-[0_2px_12px_rgba(0,0,0,.45)] sm:mt-5 sm:text-3xl md:text-4xl">
                        <span class="block">{{ __('offer_dpf.hero_title_l1') }}</span>
                        <span class="block">{{ __('offer_dpf.hero_title_l2') }}</span>
                    </h1>
                    <p class="mt-4 text-pretty text-base font-medium leading-relaxed text-white/95 sm:mt-5 sm:text-lg md:text-[1.0625rem]">{{ __('offer_dpf.hero_subtitle') }}</p>
                    <div class="mt-8 flex w-full flex-col gap-3 sm:flex-row sm:flex-wrap sm:gap-3">
                        <a href="#offer-dpf-form" class="inline-flex min-h-[3rem] w-full flex-1 items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/25 transition hover:bg-accent/88 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:min-w-0 sm:flex-1">{{ __('offer_dpf.hero_cta_offer') }}</a>
                        <a href="#offer-dpf-modele" class="inline-flex min-h-[3rem] w-full flex-1 items-center justify-center rounded-full border-2 border-white bg-transparent px-6 py-3.5 text-center text-sm font-semibold text-white transition hover:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:min-w-0 sm:flex-1">{{ __('offer_dpf.hero_cta_models') }}</a>
                    </div>
                    <p class="mt-6 text-sm leading-relaxed text-white/75 sm:mt-8 sm:text-[0.9375rem]">{{ __('offer_dpf.hero_micro') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="flex min-h-dvh flex-col justify-center bg-white px-6 py-14 sm:px-10">
            <div class="mx-auto w-full max-w-[1200px] space-y-6 text-lg leading-8 text-zinc-700">
                <img src="{{ asset('media/wp-uploads/2025/01/cropped-logo_www_2025_ciemne.png') }}" alt="{{ __('site.name') }}" class="mx-auto block h-11 w-auto sm:h-14" width="180" height="56">
                <p>{{ __('offer_dpf.s1_p1') }}</p>
                <p>{{ __('offer_dpf.s1_p2') }}</p>
                <p>{{ __('offer_dpf.s1_p3') }}</p>
            </div>
        </div>-->
    </section>
    <section id="offer-dpf-pitch" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-white" aria-labelledby="offer-dpf-pitch-heading">
        <div class="w-full px-5 py-12 sm:px-10 sm:py-16">
            <div class="mx-auto w-full max-w-[1200px]">
                <h2 id="offer-dpf-pitch-heading" class="mx-auto w-full max-w-none text-center text-2xl font-semibold leading-tight text-primary text-balance sm:text-3xl md:text-4xl">{{ __('offer_dpf.posthero_heading') }}</h2>
                <p class="mx-auto mt-6 max-w-[52rem] text-center text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">{{ __('offer_dpf.posthero_lead') }}</p>
                <div class="relative mt-10 md:mt-12">
                    <div class="-mx-5 flex snap-x snap-mandatory gap-4 overflow-x-auto scroll-smooth scroll-pl-5 scroll-pr-5 px-5 pb-1 [scrollbar-width:none] [-ms-overflow-style:none] md:mx-0 md:grid md:grid-cols-3 md:gap-6 md:overflow-visible md:px-0 md:pb-0 md:snap-none [&::-webkit-scrollbar]:hidden">
                        @foreach ([1, 2, 3] as $ai)
                            <article class="flex w-[min(100%,calc(100vw-2.5rem))] max-w-[20rem] shrink-0 snap-center flex-col rounded-[20px] border border-[#e2e8f0] bg-[#f8fafc] p-6 text-center sm:max-w-[22rem] md:w-auto md:max-w-none sm:p-7">
                                <div class="mb-5 flex items-center justify-center">
                                    @if ($ai === 1)
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-14 w-14 shrink-0 text-primary" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 7H8M8 7l2.25-2.25M8 7l2.25 2.25"/><path d="M8 17h8M16 17l-2.25-2.25M16 17l-2.25 2.25"/></svg>
                                    @elseif ($ai === 2)
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="h-14 w-14 shrink-0 text-primary" fill="none" aria-hidden="true">
                                            <path stroke="currentColor" stroke-width="2" stroke-linejoin="round" d="M16 14h32l-6 14H22L16 14z"/>
                                            <path stroke="currentColor" stroke-width="2" d="M22 28v6M32 28v6M42 28v6"/>
                                            <rect x="24" y="34" width="16" height="14" rx="2" stroke="currentColor" stroke-width="2"/>
                                            <circle cx="16" cy="50" r="3" fill="currentColor" fill-opacity=".45"/>
                                            <circle cx="32" cy="53" r="3.5" fill="currentColor" fill-opacity=".6"/>
                                            <circle cx="48" cy="50" r="3" fill="currentColor" fill-opacity=".45"/>
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="h-14 w-14 shrink-0 text-primary" fill="none" aria-hidden="true">
                                            <g transform="translate(32 32)">
                                                <circle r="22" fill="none" stroke="currentColor" stroke-width="2" stroke-dasharray="8 6" stroke-linecap="round"/>
                                                <g fill="currentColor">
                                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5"/>
                                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5" transform="rotate(60)"/>
                                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5" transform="rotate(120)"/>
                                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5" transform="rotate(180)"/>
                                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5" transform="rotate(240)"/>
                                                    <rect x="-2.5" y="-21" width="5" height="11" rx="1.5" transform="rotate(300)"/>
                                                </g>
                                                <circle r="9" fill="currentColor"/>
                                                <circle r="4.5" fill="#fff"/>
                                            </g>
                                        </svg>
                                    @endif
                                </div>
                                <h3 class="text-lg font-semibold leading-snug text-primary">{{ __('offer_dpf.posthero_a'.$ai.'_title') }}</h3>
                                <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-700 sm:text-[0.9375rem]">{{ __('offer_dpf.posthero_a'.$ai.'_text') }}</p>
                                <p class="mt-4 border-t border-[#e2e8f0] pt-4 text-base font-bold leading-snug text-primary">{{ __('offer_dpf.posthero_a'.$ai.'_stat') }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="mx-auto mt-10 w-full max-w-md sm:mt-12">
                    <a href="#offer-dpf-form" class="inline-flex w-full min-h-[3.25rem] items-center justify-center rounded-full bg-accent px-10 py-4 text-center text-base font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-h-[3.5rem] sm:text-lg">{{ __('offer_dpf.hero_cta_offer') }}</a>
                </div>
                <p class="mx-auto mt-10 max-w-[48rem] text-center text-sm font-semibold leading-snug text-primary sm:mt-12 sm:text-base">{{ __('offer_dpf.posthero_credibility_question') }}</p>
                <ul class="mx-auto mt-5 grid max-w-[48rem] list-none gap-3 sm:mt-6 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-3" role="list">
                    @foreach ([1, 2, 3, 4] as $ci)
                        <li class="relative min-h-0 pl-10 text-left text-[0.9375rem] font-semibold leading-normal text-primary sm:text-base">
                            <span class="pointer-events-none absolute left-0 top-[max(0px,calc(0.52lh-0.875rem))] flex h-7 w-7 items-center justify-center rounded-full bg-primary text-[0.65rem] font-bold leading-none text-white shadow-sm" aria-hidden="true">✔</span>
                            <span class="block min-w-0">{{ __('offer_dpf.posthero_credibility_'.$ci) }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section id="offer-dpf-why" class="relative overflow-hidden border-t border-[#e2e8f0] bg-[#edf2f7] px-5 py-14 sm:px-10 sm:py-20" aria-labelledby="offer-dpf-s2-heading">
        <div class="pointer-events-none absolute -left-24 top-1/3 h-72 w-72 rounded-full bg-primary/12 blur-3xl"></div>
        <div class="pointer-events-none absolute -right-20 bottom-1/4 h-64 w-64 rounded-full bg-accent/10 blur-3xl"></div>
        <div class="relative mx-auto w-full max-w-[1200px]">
            <h2 id="offer-dpf-s2-heading" class="w-full text-balance text-center text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('offer_dpf.s2_heading') }}</h2>
            <div class="mt-10 grid items-start gap-10 lg:mt-14 lg:grid-cols-[1fr_min(42%,480px)] lg:gap-12 xl:gap-16">
                <div class="order-2 min-w-0 lg:order-1">
                    <div class="relative">
                        <div class="absolute bottom-3 left-[1.125rem] top-3 z-0 w-px bg-gradient-to-b from-primary/45 via-primary/15 to-transparent" aria-hidden="true"></div>
                        <ol class="relative z-[1] m-0 list-none space-y-0 p-0" role="list">
                            @foreach ([1, 2, 3, 4] as $si)
                                <li class="relative pb-10 pl-14 last:pb-0 sm:pb-12 sm:pl-16">
                                    <span class="absolute left-0 top-0 z-[1] flex h-9 w-9 items-center justify-center rounded-full border-2 border-primary bg-white text-xs font-bold tabular-nums text-primary shadow-sm" aria-hidden="true">{{ sprintf('%02d', $si) }}</span>
                                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('offer_dpf.s2_c'.$si.'_title') }}</h3>
                                    <p class="mt-2 max-w-[36rem] text-pretty text-sm leading-7 text-zinc-700 sm:mt-3 sm:text-[0.9375rem] sm:leading-8">{{ __('offer_dpf.s2_c'.$si.'_text') }}</p>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
                <div class="order-1 flex justify-center lg:order-2 lg:sticky lg:top-28 lg:justify-end lg:self-start">
                    <figure class="relative w-full max-w-[min(100%,20rem)] sm:max-w-sm lg:max-w-none">
                        <div class="absolute -inset-2 -z-10 rounded-[24px] bg-gradient-to-br from-primary/8 via-white to-accent/12 sm:-inset-3 sm:rounded-[28px]"></div>
                        <img src="{{ asset('images/offer/lewy_bok.png') }}" alt="{{ __('offer_dpf.s2_image_alt') }}" class="relative w-full rounded-[18px] object-contain shadow-[0_24px_60px_-24px_rgba(0,19,72,.32)] ring-1 ring-[#e2e8f0] sm:rounded-[20px]" width="1247" height="1020" loading="lazy" decoding="async" fetchpriority="low">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section id="offer-dpf-tech" class="scroll-mt-24 border-t border-[#e2e8f0] bg-white px-0 py-16 sm:py-20 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px] px-6 sm:px-0">
            <h2 class="text-center text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('offer_dpf.tech_heading') }}</h2>
            <p class="mx-auto mt-6 max-w-[52rem] text-center text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">{{ __('offer_dpf.tech_intro') }}</p>
        </div>
        <div class="mx-auto mt-12 w-full max-w-[1200px] lg:px-0">
            <div class="flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth scroll-pl-6 scroll-pr-6 px-6 pb-4 [scrollbar-width:none] [-ms-overflow-style:none] sm:scroll-pl-10 sm:scroll-pr-10 sm:px-10 lg:mx-auto lg:grid lg:max-w-[1200px] lg:grid-cols-4 lg:gap-6 lg:overflow-visible lg:scroll-pl-0 lg:scroll-pr-0 lg:px-0 lg:pb-0 lg:snap-none [&::-webkit-scrollbar]:hidden">
                <article class="flex w-[min(100%,calc(100vw-3rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_12px_40px_-24px_rgba(36,67,150,.14)] sm:max-w-[20rem] lg:max-w-none lg:w-auto">
                    <div class="flex flex-1 flex-col p-6">
                        <div class="flex shrink-0 justify-center" aria-hidden="true">
                            <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-primary/20 bg-primary/10 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 7H8M8 7l2.25-2.25M8 7l2.25 2.25"/><path d="M8 17h8M16 17l-2.25-2.25M16 17l-2.25 2.25"/></svg>
                            </span>
                        </div>
                        <div class="mt-3 text-center">
                            <h3 class="text-balance text-lg font-semibold leading-snug text-primary">{{ __('offer_dpf.tech_c1_title') }}</h3>
                        </div>
                        <div class="mt-3 min-h-0 flex-1 space-y-3 text-sm leading-7 text-zinc-700 sm:text-[0.9375rem]">
                            <p>{{ __('offer_dpf.tech_c1_desc') }}</p>
                            <p><span class="font-semibold text-primary">{{ __('offer_dpf.tech_label_benefit') }}:</span> {{ __('offer_dpf.tech_c1_benefit') }}</p>
                        </div>
                        <p class="mt-4 border-l-4 border-accent bg-[#fff9eb] px-3 py-2 text-xs font-medium italic leading-relaxed text-[#5c4a1a] sm:text-sm">{{ __('offer_dpf.tech_c1_micro') }}</p>
                    </div>
                </article>
                <article class="flex w-[min(100%,calc(100vw-3rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_12px_40px_-24px_rgba(36,67,150,.14)] sm:max-w-[20rem] lg:max-w-none lg:w-auto">
                    <div class="flex flex-1 flex-col p-6">
                        <div class="flex shrink-0 justify-center" aria-hidden="true">
                            <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-primary/20 bg-primary/10 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" aria-hidden="true"><path d="M12 2.5c-3.5 4.5-7 8.2-7 11.5a7 7 0 1014 0c0-3.3-3.5-7-7-11.5zM8 18h8v2H8v-2z"/></svg>
                            </span>
                        </div>
                        <div class="mt-3 text-center">
                            <h3 class="text-balance text-lg font-semibold leading-snug text-primary">{{ __('offer_dpf.tech_c2_title') }}</h3>
                        </div>
                        <div class="mt-3 min-h-0 flex-1 space-y-3 text-sm leading-7 text-zinc-700 sm:text-[0.9375rem]">
                            <p>{{ __('offer_dpf.tech_c2_desc') }}</p>
                            <p><span class="font-semibold text-primary">{{ __('offer_dpf.tech_label_benefit') }}:</span> {{ __('offer_dpf.tech_c2_benefit') }}</p>
                        </div>
                        <p class="mt-4 border-l-4 border-accent bg-[#fff9eb] px-3 py-2 text-xs font-medium italic leading-relaxed text-[#5c4a1a] sm:text-sm">{{ __('offer_dpf.tech_c2_specs') }}</p>
                    </div>
                </article>
                <article class="flex w-[min(100%,calc(100vw-3rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_12px_40px_-24px_rgba(36,67,150,.14)] sm:max-w-[20rem] lg:max-w-none lg:w-auto">
                    <div class="flex flex-1 flex-col p-6">
                        <div class="flex shrink-0 justify-center" aria-hidden="true">
                            <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-primary/20 bg-primary/10 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 9L5 12l3 3M16 15l3-3-3-3"/><path d="M5 12h14"/></svg>
                            </span>
                        </div>
                        <div class="mt-3 text-center">
                            <h3 class="text-balance text-lg font-semibold leading-snug text-primary">{{ __('offer_dpf.tech_c3_title') }}</h3>
                        </div>
                        <div class="mt-3 min-h-0 flex-1 space-y-3 text-sm leading-7 text-zinc-700 sm:text-[0.9375rem]">
                            <p>{{ __('offer_dpf.tech_c3_desc') }}</p>
                            <p><span class="font-semibold text-primary">{{ __('offer_dpf.tech_label_benefit') }}:</span> {{ __('offer_dpf.tech_c3_benefit') }}</p>
                        </div>
                    </div>
                </article>
                <article class="flex w-[min(100%,calc(100vw-3rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_12px_40px_-24px_rgba(36,67,150,.14)] sm:max-w-[20rem] lg:max-w-none lg:w-auto">
                    <div class="flex flex-1 flex-col p-6">
                        <div class="flex shrink-0 justify-center" aria-hidden="true">
                            <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-primary/20 bg-primary/10 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="7" height="14" rx="1.5"/><rect x="14" y="5" width="7" height="14" rx="1.5"/></svg>
                            </span>
                        </div>
                        <div class="mt-3 text-center">
                            <h3 class="text-balance text-lg font-semibold leading-snug text-primary">{{ __('offer_dpf.tech_c4_title') }}</h3>
                        </div>
                        <div class="mt-3 min-h-0 flex-1 space-y-3 text-sm leading-7 text-zinc-700 sm:text-[0.9375rem]">
                            <p>{{ __('offer_dpf.tech_c4_desc') }}</p>
                            <p><span class="font-semibold text-primary">{{ __('offer_dpf.tech_label_benefit') }}:</span> {{ __('offer_dpf.tech_c4_benefit') }}</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="mx-auto mt-12 max-w-[1200px] px-6 text-center sm:px-10 lg:px-6 xl:px-0">
            <a href="#offer-dpf-modele" class="inline-flex max-w-full items-center justify-center rounded-full bg-accent px-5 py-2.5 text-center text-xs font-bold uppercase tracking-wide text-white shadow-md transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:px-6 sm:py-3 sm:text-sm">{{ __('offer_dpf.tech_cta') }}</a>
        </div>
    </section>
    <section id="offer-dpf-modele" class="scroll-mt-24 border-t border-[#e2e8f0] bg-[#edf2f7] px-0 py-16 sm:py-20 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px] px-6 sm:px-0">
            <h2 class="text-center text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('offer_dpf.models_heading') }}</h2>
        </div>
        <div class="mx-auto mt-12 w-full max-w-[1200px] lg:px-0">
            <div class="flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth scroll-pl-6 scroll-pr-6 px-6 pb-4 [scrollbar-width:none] [-ms-overflow-style:none] sm:scroll-pl-10 sm:scroll-pr-10 sm:px-10 lg:mx-auto lg:grid lg:max-w-[1200px] lg:grid-cols-3 lg:items-stretch lg:gap-8 lg:overflow-visible lg:scroll-pl-0 lg:scroll-pr-0 lg:px-6 lg:pb-0 lg:snap-none xl:px-0 [&::-webkit-scrollbar]:hidden">
                @foreach ([1, 2, 3] as $mi)
                    @php
                        $techN = in_array($mi, [2, 3], true) ? 5 : 4;
                        $isDual = $mi === 3;
                        $imgSrc = file_exists($offerDpfImgModels) ? asset('images/offer/1t5a9183ab.png') : null;
                    @endphp
                    <article class="flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[24rem] shrink-0 snap-center flex-col overflow-hidden rounded-[22px] border bg-white shadow-[0_16px_48px_-28px_rgba(36,67,150,.28)] sm:max-w-[22rem] lg:max-w-none lg:w-auto {{ $isDual ? 'border-accent ring-2 ring-accent/55 ring-offset-2 ring-offset-white' : 'border-[#e2e8f0]' }}">
                        <div class="relative aspect-[4/3] bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]">
                            @if ($imgSrc)
                                <img src="{{ $imgSrc }}" alt="{{ __('offer_dpf.models_m'.$mi.'_img_alt') }}" class="h-full w-full object-cover object-center" width="480" height="360">
                            @else
                                <div class="flex h-full w-full items-center justify-center p-4 text-center text-sm text-zinc-500">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                            @endif
                            @if ($mi === 1)
                                <span class="absolute right-3 top-3 rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wide text-white shadow-md">{{ __('offer_dpf.models_m1_badge') }}</span>
                            @elseif ($isDual)
                                <span class="absolute right-3 top-3 rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wide text-white shadow-md">{{ __('offer_dpf.models_dual_badge') }}</span>
                            @endif
                        </div>
                        <div class="flex min-h-0 flex-1 flex-col p-6 sm:p-7">
                            <h3 class="text-center text-xl font-bold text-primary sm:text-2xl">{{ __('offer_dpf.models_m'.$mi.'_title') }}</h3>
                            <p class="mt-3 text-balance text-center text-sm leading-7 text-zinc-700 sm:text-[0.9375rem]">{{ __('offer_dpf.models_m'.$mi.'_desc') }}</p>
                            <dl class="mt-6 space-y-1 border-t border-[#e2e8f0] pt-2.5 text-sm leading-5.5 text-zinc-700 sm:mt-7">
                                <div><dt class="font-semibold text-primary">{{ __('offer_dpf.models_label_dims') }}</dt><dd>{{ __('offer_dpf.models_m'.$mi.'_dims') }}</dd></div>
                                @if (in_array($mi, [1, 2, 3], true))
                                    <div><dt class="font-semibold text-primary">{{ __('offer_dpf.models_label_chamber_dims') }}</dt><dd>{{ __('offer_dpf.models_m'.$mi.'_chamber_dims') }}</dd></div>
                                @endif
                                <div><dt class="font-semibold text-primary">{{ __('offer_dpf.models_label_throughput') }}</dt><dd>{{ __('offer_dpf.models_m'.$mi.'_throughput') }}</dd></div>
                                <div><dt class="font-semibold text-primary">{{ __('offer_dpf.models_label_cleaning') }}</dt><dd>{{ __('offer_dpf.models_m'.$mi.'_cleaning') }}</dd></div>
                            </dl>
                            <p class="mt-3 text-xs font-bold uppercase tracking-wide text-primary">{{ __('offer_dpf.models_tech_heading') }}</p>
                            <ul class="mt-2.5 space-y-2 text-sm leading-6 text-zinc-700 lg:min-h-[13rem]">
                                @for ($ti = 1; $ti <= $techN; $ti++)
                                    <li class="flex items-start gap-2.5 leading-6">
                                        <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span>
                                        <span class="min-w-0">{{ __('offer_dpf.models_m'.$mi.'_tech_'.$ti) }}</span>
                                    </li>
                                @endfor
                            </ul>
                            <div class="min-h-0 flex-1" aria-hidden="true"></div>
                            <div class="mt-6">
                                <a href="#offer-dpf-form" class="inline-flex w-full items-center justify-center rounded-full bg-accent px-5 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ __('offer_dpf.hero_cta_offer') }}</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <section class="border-t border-[#e2e8f0] bg-white px-0 py-16 sm:py-20 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px] px-6 sm:px-0">
            <h2 class="text-center text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('offer_dpf.proc_heading') }}</h2>
            <div class="mt-6 w-full space-y-4 text-center text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">
                <p>{{ __('offer_dpf.proc_intro_p1') }}</p>
                <p>{{ __('offer_dpf.proc_intro_p2') }}</p>
            </div>
            <div class="mt-8 w-full rounded-[16px] border border-primary/25 bg-white px-5 py-4 text-sm leading-7 text-zinc-700 shadow-sm sm:px-6 sm:text-[0.9375rem]">
                <p class="font-semibold text-primary">{{ __('offer_dpf.proc_highlight_label') }}</p>
                <p class="mt-2">{{ __('offer_dpf.proc_highlight') }}</p>
            </div>
        </div>
        <div class="mx-auto mt-14 hidden w-full max-w-[1200px] px-6 lg:block xl:px-0">
            <div class="relative pb-4">
                <div class="absolute left-[10%] right-[10%] top-10 h-0.5 bg-[#cbd5e1]" aria-hidden="true"></div>
                <div class="relative grid grid-cols-5 gap-3">
                    @for ($ps = 1; $ps <= 5; $ps++)
                        <div class="flex flex-col items-center text-center">
                            <div class="relative z-[1] mb-4 flex h-[4.25rem] w-[4.25rem] items-center justify-center rounded-full border-2 border-primary bg-white shadow-md">
                                @if ($ps === 1 || $ps === 4)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-primary" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 16.5h16"/><path d="M4 16.5v-4M7 16.5v-2M10 16.5v-3.5M13 16.5v-2M16 16.5v-3.5M19 16.5v-2M20 16.5v-4"/></svg>
                                @elseif ($ps === 2)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-primary" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path d="M12 3c-2 3-5 5.5-5 9a5 5 0 1010 0c0-3.5-3-6-5-9z"/><path stroke-linecap="round" d="M8 18h8M9 14h6"/></svg>
                                @elseif ($ps === 3)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-primary" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="9.5" width="5.5" height="5" rx="1"/><path d="M11.5 11.25h2.4l2.1 1.55v2.4l-2.1 1.55H11.5"/><path d="M16.8 9.25c2.2 1 4.3 1 6.4 0M16.8 12H22M16.8 14.75c2.2-1 4.3-1 6.4 0"/></svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-primary" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path d="M7 4h10v16H7V4z"/><path stroke-linecap="round" d="M10 8h4M10 12h4M10 16h3"/><path stroke-linecap="round" d="M14 20l3 2v-6"/></svg>
                                @endif
                            </div>
                            <span class="text-xs font-bold text-primary">{{ $ps }}/5</span>
                            <h3 class="mt-2 text-sm font-semibold leading-snug text-primary sm:text-base">{{ __('offer_dpf.proc_step_'.$ps.'_title') }}</h3>
                            <p class="mt-2 text-left text-xs leading-6 text-zinc-700 sm:text-sm lg:text-center">{{ __('offer_dpf.proc_step_'.$ps.'_text') }}</p>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="mt-12 flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth px-6 pb-2 [scrollbar-width:none] [-ms-overflow-style:none] sm:px-10 lg:hidden [&::-webkit-scrollbar]:hidden">
            @for ($ps = 1; $ps <= 5; $ps++)
                <article class="w-[min(100%,calc(100vw-3.5rem))] max-w-[22rem] shrink-0 snap-center rounded-[20px] border border-[#e2e8f0] bg-white p-6 shadow-[0_12px_40px_-24px_rgba(36,67,150,.15)]">
                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full border-2 border-primary bg-[#f8fafc]">
                        @if ($ps === 1 || $ps === 4)
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 text-primary" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 16.5h16"/><path d="M4 16.5v-4M7 16.5v-2M10 16.5v-3.5M13 16.5v-2M16 16.5v-3.5M19 16.5v-2M20 16.5v-4"/></svg>
                        @elseif ($ps === 2)
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 text-primary" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path d="M12 3c-2 3-5 5.5-5 9a5 5 0 1010 0c0-3.5-3-6-5-9z"/><path stroke-linecap="round" d="M8 18h8M9 14h6"/></svg>
                        @elseif ($ps === 3)
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 text-primary" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="9.5" width="5.5" height="5" rx="1"/><path d="M11.5 11.25h2.4l2.1 1.55v2.4l-2.1 1.55H11.5"/><path d="M16.8 9.25c2.2 1 4.3 1 6.4 0M16.8 12H22M16.8 14.75c2.2-1 4.3-1 6.4 0"/></svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 text-primary" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true"><path d="M7 4h10v16H7V4z"/><path stroke-linecap="round" d="M10 8h4M10 12h4M10 16h3"/><path stroke-linecap="round" d="M14 20l3 2v-6"/></svg>
                        @endif
                    </div>
                    <p class="mt-4 text-center text-xs font-bold text-primary">{{ $ps }}/5</p>
                    <h3 class="mt-2 text-center text-lg font-semibold text-primary">{{ __('offer_dpf.proc_step_'.$ps.'_title') }}</h3>
                    <p class="mt-3 text-sm leading-7 text-zinc-700">{{ __('offer_dpf.proc_step_'.$ps.'_text') }}</p>
                </article>
            @endfor
        </div>
        <div class="mx-auto mt-12 flex max-w-[1200px] flex-col items-center justify-center gap-3 px-6 sm:flex-row sm:px-10 lg:px-6 xl:px-0">
            <a href="#offer-dpf-hero" class="inline-flex w-full max-w-sm items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:w-auto sm:px-8">{{ __('offer_dpf.proc_cta_demo') }}</a>
            <a href="#offer-dpf-modele" class="inline-flex w-full max-w-sm items-center justify-center rounded-full border-2 border-accent bg-white px-6 py-3.5 text-center text-sm font-semibold text-primary transition hover:bg-accent/10 sm:w-auto sm:px-8">{{ __('offer_dpf.proc_cta_models') }}</a>
        </div>
    </section>
    <section class="border-t border-[#e2e8f0] bg-[#edf2f7] px-0 py-16 sm:py-20 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px] px-6 sm:px-0">
            <h2 class="text-center text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('offer_dpf.benefits_heading') }}</h2>
            <div class="mt-6 w-full space-y-4 text-center text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">
                <p>{{ __('offer_dpf.benefits_intro_p1') }}</p>
                <p>{{ __('offer_dpf.benefits_intro_p2') }}</p>
            </div>
        </div>
        <div class="mx-auto mt-12 w-full max-w-[1200px] lg:px-0">
            @php
                $offerDpfBenefitsIconFiles = [1 => 'przemysł.png', 2 => 'floty.png', 3 => 'ikona warsztaty.png'];
            @endphp
            <div class="flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth px-6 pb-2 [scrollbar-width:none] [-ms-overflow-style:none] sm:px-10 lg:mx-auto lg:grid lg:max-w-[1200px] lg:grid-cols-3 lg:items-stretch lg:gap-8 lg:overflow-visible lg:px-6 lg:pb-0 lg:snap-none xl:px-0 [&::-webkit-scrollbar]:hidden">
                @for ($bi = 1; $bi <= 3; $bi++)
                    <article class="flex h-full w-[min(100%,calc(100vw-3rem))] max-w-[24rem] shrink-0 snap-center flex-col rounded-[22px] border border-[#e2e8f0] bg-gradient-to-b from-[#f8fafc] to-white p-6 shadow-[0_14px_44px_-28px_rgba(36,67,150,.2)] sm:max-w-[22rem] lg:max-w-none lg:w-auto">
                        <div class="flex items-center justify-center">
                            <span class="inline-flex h-14 w-14 items-center justify-center rounded-2xl border border-primary/10 bg-primary/5 p-2.5">
                                <img src="{{ asset('images/ico/'.rawurlencode($offerDpfBenefitsIconFiles[$bi])) }}" alt="" class="max-h-10 max-w-10 object-contain" width="40" height="40" loading="lazy" decoding="async">
                            </span>
                        </div>
                        <p class="mt-5 text-center text-sm font-bold uppercase tracking-wide text-primary">{{ __('offer_dpf.benefits_c'.$bi.'_sub') }}</p>
                        
                        <p class="mt-4 text-center text-sm leading-7 text-zinc-700 sm:text-[0.9375rem]">{{ __('offer_dpf.benefits_c'.$bi.'_text') }}</p>
                        <div class="mt-6 flex flex-1 flex-col justify-end">
                            <a href="#offer-dpf-form" class="inline-flex w-full items-center justify-center rounded-full bg-accent px-5 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ __('offer_dpf.benefits_cta') }}</a>
                        </div>
                    </article>
                @endfor
            </div>
        </div>
    </section>
    <section id="offer-dpf-vs-competitors" class="scroll-mt-24 border-t border-[#e2e8f0] bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('offer_dpf.cmp_heading') }}</h2>
            <div class="mt-10 overflow-x-auto rounded-[20px] border border-[#e2e8f0] shadow-[0_12px_48px_-28px_rgba(36,67,150,.15)]">
                <table class="w-full min-w-[min(100%,640px)] border-collapse text-left text-sm sm:text-base">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th class="min-w-[min(42vw,220px)] px-3 py-4 font-semibold sm:px-5 sm:py-5">{{ __('offer_dpf.cmp_th_feature') }}</th>
                            <th class="min-w-[min(38vw,260px)] px-3 py-4 font-semibold sm:px-5 sm:py-5">{{ __('offer_dpf.cmp_th_motsler') }}</th>
                            <th class="min-w-[min(38vw,260px)] px-3 py-4 font-semibold sm:px-5 sm:py-5">{{ __('offer_dpf.cmp_th_competitor') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-zinc-700">
                        @for ($cr = 1; $cr <= 6; $cr++)
                            <tr class="border-t border-[#e2e8f0] {{ $cr % 2 === 0 ? 'bg-[#f8fafc]' : 'bg-white' }}">
                                <td class="px-3 py-4 align-top font-medium text-primary sm:px-5 sm:py-5">
                                    <span class="min-w-0 leading-snug">{{ __('offer_dpf.cmp_r'.$cr.'_feature') }}</span>
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
            <div class="mt-10 w-full text-center text-sm leading-7 text-zinc-700 sm:text-base">
                <p class="text-pretty">{{ __('offer_dpf.cmp_summary') }}</p>
            </div>
            <div class="mt-10 text-center">
                <a href="#offer-dpf-modele" class="inline-flex max-w-full items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:px-10 sm:text-base">{{ __('offer_dpf.cmp_cta') }}</a>
            </div>
        </div>
    </section>
    <section id="offer-dpf-testimonials" class="scroll-mt-24 border-t border-[#e2e8f0] bg-[#edf2f7] px-0 py-16 sm:py-20 sm:px-10" aria-labelledby="offer-dpf-testimonials-heading">
        <div class="mx-auto w-full max-w-[1200px] px-6 sm:px-0">
            <h2 id="offer-dpf-testimonials-heading" class="text-center text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('offer_dpf.testimonials_heading') }}</h2>
            <p class="mx-auto mt-4 max-w-[42rem] text-center text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">{{ __('offer_dpf.testimonials_sub') }}</p>
        </div>
        <div class="mx-auto mt-12 w-full max-w-[1200px] lg:px-0">
            <div id="offer-dpf-testimonials-track" class="flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth scroll-pl-6 scroll-pr-6 px-6 pb-2 pt-1 [scrollbar-width:thin] [scrollbar-color:#94a3b8_transparent] sm:scroll-pl-10 sm:scroll-pr-10 sm:px-10 lg:mx-auto lg:max-w-[1200px] lg:gap-8 lg:overflow-x-auto lg:scroll-pl-6 lg:scroll-pr-6 lg:px-6 xl:scroll-pl-0 xl:scroll-pr-0 xl:px-0 [&::-webkit-scrollbar]:h-1.5 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-[#cbd5e1]" role="region" aria-roledescription="carousel" aria-label="{{ __('offer_dpf.testimonials_aria') }}" tabindex="0">
                @foreach (range(1, 3) as $tn)
                    @php
                        $logo = match ($tn) {
                            1 => '2025/01/aiw_200.png',
                            2 => '2025/01/auto_bodo_200-1.png',
                            default => null,
                        };
                        $initials = $tn === 3 ? 'G' : null;
                    @endphp
                    <article data-testimonial-slide class="flex w-[min(100%,calc(100vw-3rem))] max-w-[24rem] shrink-0 snap-center flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-6 text-left shadow-[0_14px_44px_-28px_rgba(36,67,150,.18)] sm:max-w-[22rem]">
                        @if ($logo)
                            <img src="{{ asset('media/wp-uploads/'.$logo) }}" alt="{{ __('offer_dpf.s5_t'.$tn.'_name') }}" class="mb-4 h-12 w-auto object-contain object-left opacity-80 grayscale sm:h-14" width="140" height="56" loading="lazy" decoding="async">
                        @else
                            <div class="mb-4 flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/12 text-sm font-bold tracking-tight text-primary sm:h-14 sm:w-14 sm:text-base" aria-hidden="true">{{ $initials }}</div>
                        @endif
                        <div class="text-amber-500" aria-hidden="true">★★★★★</div>
                        <blockquote class="mt-4 text-sm leading-7 text-primary sm:text-[0.9375rem] sm:leading-7">
                            <p>“{{ __('offer_dpf.s5_t'.$tn.'_quote') }}”</p>
                        </blockquote>
                        <footer class="mt-6 border-t border-[#e2e8f0] pt-4">
                            <div class="font-semibold text-primary">{{ __('offer_dpf.s5_t'.$tn.'_name') }}</div>
                        </footer>
                    </article>
                @endforeach
            </div>
            <div class="mt-5 flex justify-center px-6 sm:px-10 lg:px-6 xl:px-0">
                <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-2.5" role="group" aria-label="{{ __('offer_dpf.testimonials_dots_aria') }}">
                    @foreach (range(1, 3) as $dn)
                        <button type="button" data-testimonial-dot="{{ $dn - 1 }}" aria-label="{{ __('offer_dpf.testimonials_dot_aria', ['num' => $dn, 'total' => 3]) }}" aria-current="{{ $dn === 1 ? 'true' : 'false' }}" class="testimonial-dot-btn flex h-11 min-w-[2.75rem] items-center justify-center rounded-full text-primary transition hover:bg-[#f1f5f9] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                            <span class="testimonial-dot-inner block h-2 rounded-full transition-all duration-300 {{ $dn === 1 ? 'w-6 bg-primary' : 'w-2 bg-slate-300' }}" aria-hidden="true"></span>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
        <script>
            (function () {
                var track = document.getElementById('offer-dpf-testimonials-track');
                if (!track) return;
                var slides = track.querySelectorAll('[data-testimonial-slide]');
                var dots = document.querySelectorAll('[data-testimonial-dot]');
                if (!slides.length || !dots.length) return;
                function setDot(i) {
                    dots.forEach(function (btn, j) {
                        var on = j === i;
                        btn.setAttribute('aria-current', on ? 'true' : 'false');
                        var inner = btn.querySelector('.testimonial-dot-inner');
                        if (inner) {
                            inner.classList.toggle('w-6', on);
                            inner.classList.toggle('w-2', !on);
                            inner.classList.toggle('bg-primary', on);
                            inner.classList.toggle('bg-slate-300', !on);
                        }
                    });
                }
                function activeFromScroll() {
                    var t = track.getBoundingClientRect();
                    var mid = t.left + t.width * 0.35;
                    var best = 0;
                    var bestD = Infinity;
                    slides.forEach(function (el, j) {
                        var r = el.getBoundingClientRect();
                        var c = r.left + r.width / 2;
                        var d = Math.abs(c - mid);
                        if (d < bestD) {
                            bestD = d;
                            best = j;
                        }
                    });
                    setDot(best);
                }
                dots.forEach(function (btn) {
                    btn.addEventListener('click', function () {
                        var i = parseInt(btn.getAttribute('data-testimonial-dot'), 10);
                        var el = slides[i];
                        if (el) {
                            el.scrollIntoView({ behavior: 'smooth', inline: 'start', block: 'nearest' });
                            setDot(i);
                        }
                    });
                });
                var scrollTimer;
                track.addEventListener('scroll', function () {
                    clearTimeout(scrollTimer);
                    scrollTimer = setTimeout(activeFromScroll, 80);
                }, { passive: true });
                activeFromScroll();
                window.addEventListener('resize', function () {
                    clearTimeout(scrollTimer);
                    scrollTimer = setTimeout(activeFromScroll, 120);
                });
            })();
        </script>
    </section>
    <section id="offer-dpf-successes" class="scroll-mt-24 border-t border-[#e2e8f0] bg-white px-0 py-16 sm:py-20 sm:px-10" aria-labelledby="offer-dpf-successes-heading">
        <div class="mx-auto w-full max-w-[1200px] px-6 text-center sm:px-0">
            <h2 id="offer-dpf-successes-heading" class="text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('offer_dpf.successes_heading') }}</h2>
            <p class="mx-auto mt-4 max-w-[46rem] text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">{{ __('offer_dpf.successes_sub') }}</p>
        </div>
        <div class="relative mx-auto mt-12 w-full max-w-[1200px] lg:px-0">
            <div id="offer-dpf-successes-track" class="flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth scroll-pl-6 scroll-pr-6 px-6 pb-2 pt-1 [scrollbar-width:thin] [scrollbar-color:#94a3b8_transparent] sm:scroll-pl-10 sm:scroll-pr-10 sm:px-10 lg:mx-auto lg:max-w-[1200px] lg:gap-8 lg:overflow-x-auto lg:scroll-pl-6 lg:scroll-pr-6 lg:px-6 xl:scroll-pl-0 xl:scroll-pr-0 xl:px-0 [&::-webkit-scrollbar]:h-1.5 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-[#cbd5e1]" role="region" aria-roledescription="carousel" aria-label="{{ __('offer_dpf.successes_aria') }}" tabindex="0">
                @foreach (range(1, 4) as $ci)
                    <article data-success-slide class="flex w-[min(100%,calc(100vw-3rem))] max-w-[24rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border bg-white text-left shadow-[0_14px_44px_-28px_rgba(36,67,150,.15)] sm:max-w-[22rem] {{ $ci === 4 ? 'border-accent ring-2 ring-accent/45 ring-offset-2 ring-offset-white' : 'border-[#e2e8f0]' }}">
                        <div class="h-1 bg-gradient-to-r from-primary via-primary/80 to-accent"></div>
                        <div class="flex flex-col p-5 sm:p-6">
                            <span class="inline-flex w-fit rounded-full px-2.5 py-0.5 text-[0.6875rem] font-bold uppercase tracking-wide {{ $ci === 4 ? 'bg-accent/15 text-accent ring-1 ring-accent/35' : 'bg-primary/12 text-primary' }}">{{ __('offer_dpf.s9_cs'.$ci.'_tag') }}</span>
                            <h3 class="mt-3 text-base font-bold leading-snug text-primary sm:text-lg">{{ __('offer_dpf.success_cs'.$ci.'_h3') }}</h3>
                            <dl class="mt-4 space-y-3 text-sm leading-snug text-zinc-700">
                                <div class="rounded-xl border border-[#e2e8f0] bg-[#f8fafc] px-3 py-2.5">
                                    <dt class="flex items-center gap-2 text-[0.6875rem] font-bold uppercase tracking-wide text-primary">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-white text-primary shadow-sm" aria-hidden="true">
                                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                        </span>
                                        {{ __('offer_dpf.successes_label_client') }}
                                    </dt>
                                    <dd class="mt-1.5 pl-8">{{ __('offer_dpf.success_cs'.$ci.'_client') }}</dd>
                                </div>
                                <div class="rounded-xl border border-[#e2e8f0] bg-white px-3 py-2.5">
                                    <dt class="flex items-center gap-2 text-[0.6875rem] font-bold uppercase tracking-wide text-primary">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary" aria-hidden="true">
                                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                                        </span>
                                        {{ __('offer_dpf.successes_label_challenge') }}
                                    </dt>
                                    <dd class="mt-1.5 pl-8">{{ __('offer_dpf.success_cs'.$ci.'_challenge') }}</dd>
                                </div>
                                <div class="rounded-xl border border-[#e2e8f0] bg-white px-3 py-2.5">
                                    <dt class="flex items-center gap-2 text-[0.6875rem] font-bold uppercase tracking-wide text-primary">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary" aria-hidden="true">
                                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                                        </span>
                                        {{ __('offer_dpf.successes_label_solution') }}
                                    </dt>
                                    <dd class="mt-1.5 pl-8">{{ __('offer_dpf.success_cs'.$ci.'_solution') }}</dd>
                                </div>
                                <div class="rounded-xl border border-accent/40 bg-[#fff9eb] px-3 py-2.5">
                                    <dt class="flex items-center gap-2 text-[0.6875rem] font-bold uppercase tracking-wide text-[#b45309]">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-white text-[#b45309] shadow-sm" aria-hidden="true">
                                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                                        </span>
                                        {{ __('offer_dpf.successes_label_result') }}
                                    </dt>
                                    <dd class="mt-1.5 pl-8 font-medium text-primary">{{ __('offer_dpf.success_cs'.$ci.'_result') }}</dd>
                                </div>
                            </dl>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="mt-5 flex justify-center px-6 sm:px-10 lg:px-6 xl:px-0">
                <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-2.5" role="group" aria-label="{{ __('offer_dpf.successes_dots_aria') }}">
                    @foreach (range(1, 4) as $sn)
                        <button type="button" data-success-dot="{{ $sn - 1 }}" aria-label="{{ __('offer_dpf.successes_dot_aria', ['num' => $sn, 'total' => 4]) }}" aria-current="{{ $sn === 1 ? 'true' : 'false' }}" class="success-dot-btn flex h-11 min-w-[2.75rem] items-center justify-center rounded-full text-primary transition hover:bg-[#f1f5f9] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                            <span class="success-dot-inner block h-2 rounded-full transition-all duration-300 {{ $sn === 1 ? 'w-6 bg-primary' : 'w-2 bg-slate-300' }}" aria-hidden="true"></span>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
        <script>
            (function () {
                var track = document.getElementById('offer-dpf-successes-track');
                if (!track) return;
                var slides = track.querySelectorAll('[data-success-slide]');
                var dots = document.querySelectorAll('[data-success-dot]');
                if (!slides.length || !dots.length) return;
                function setDot(i) {
                    dots.forEach(function (btn, j) {
                        var on = j === i;
                        btn.setAttribute('aria-current', on ? 'true' : 'false');
                        var inner = btn.querySelector('.success-dot-inner');
                        if (inner) {
                            inner.classList.toggle('w-6', on);
                            inner.classList.toggle('w-2', !on);
                            inner.classList.toggle('bg-primary', on);
                            inner.classList.toggle('bg-slate-300', !on);
                        }
                    });
                }
                function activeFromScroll() {
                    var t = track.getBoundingClientRect();
                    var mid = t.left + t.width * 0.35;
                    var best = 0;
                    var bestD = Infinity;
                    slides.forEach(function (el, j) {
                        var r = el.getBoundingClientRect();
                        var c = r.left + r.width / 2;
                        var d = Math.abs(c - mid);
                        if (d < bestD) {
                            bestD = d;
                            best = j;
                        }
                    });
                    setDot(best);
                }
                dots.forEach(function (btn) {
                    btn.addEventListener('click', function () {
                        var i = parseInt(btn.getAttribute('data-success-dot'), 10);
                        var el = slides[i];
                        if (el) {
                            el.scrollIntoView({ behavior: 'smooth', inline: 'start', block: 'nearest' });
                            setDot(i);
                        }
                    });
                });
                var scrollTimer;
                track.addEventListener('scroll', function () {
                    clearTimeout(scrollTimer);
                    scrollTimer = setTimeout(activeFromScroll, 80);
                }, { passive: true });
                activeFromScroll();
                window.addEventListener('resize', function () {
                    clearTimeout(scrollTimer);
                    scrollTimer = setTimeout(activeFromScroll, 120);
                });
            })();
        </script>
    </section>
    <section id="offer-dpf-form" class="scroll-mt-24 border-t border-[#e2e8f0] bg-[#eef2f6] px-0 py-16 sm:py-24 sm:px-10" aria-labelledby="offer-dpf-cta-heading">
        <div class="mx-auto w-full max-w-[1200px] px-6 lg:px-8 xl:px-0">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-start lg:gap-16 xl:gap-20">
                <div class="flex flex-col gap-8 lg:max-w-xl lg:pt-1">
                    <header class="space-y-4">
                        <h2 id="offer-dpf-cta-heading" class="text-balance text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('offer_dpf.cta_h2') }}</h2>
                        <p class="text-lg font-medium leading-snug text-primary sm:text-xl">{{ __('offer_dpf.cta_sub') }}</p>
                        <p class="text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">{{ __('offer_dpf.cta_lead') }}</p>
                    </header>
                    <ul class="flex flex-col gap-4" role="list">
                        @foreach (range(1, 3) as $cb)
                            <li class="flex gap-4 rounded-2xl border border-[#e2e8f0] bg-white p-5 shadow-[0_8px_30px_-18px_rgba(36,67,150,.2)] sm:p-6">
                                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/[0.09] text-primary" aria-hidden="true">
                                    @if ($cb === 1)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                                    @elseif ($cb === 2)
                                        <span class="text-[1.35rem] leading-none" aria-hidden="true">🔧</span>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    @endif
                                </span>
                                <span class="min-w-0 pt-0.5 text-base font-medium leading-snug text-zinc-800 sm:text-[1.0625rem] sm:leading-snug">{{ __('offer_dpf.cta_bullet_'.$cb) }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="rounded-2xl border border-primary/15 bg-white/90 p-6 shadow-[0_10px_36px_-20px_rgba(36,67,150,.25)] sm:p-7">
                        <p class="text-sm font-semibold leading-relaxed text-zinc-800 sm:text-base">{{ __('offer_dpf.cta_trust_intro') }}</p>
                        <ul class="mt-4 space-y-2.5 text-sm leading-relaxed text-zinc-700 sm:text-[0.9375rem]" role="list">
                            @foreach (range(1, 3) as $ti)
                                <li class="flex gap-2.5"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span><span>{{ __('offer_dpf.cta_trust_li_'.$ti) }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="rounded-2xl border-2 border-accent/35 bg-white px-6 py-5 text-center shadow-md sm:px-8 sm:py-6 lg:text-left">
                        <p class="text-sm font-semibold uppercase tracking-wide text-zinc-600">{{ __('offer_dpf.cta_phone_intro') }}</p>
                        <a href="tel:{{ __('offer_dpf.cta_phone_href') }}" class="mt-2 inline-flex items-center justify-center gap-2 text-2xl font-bold tabular-nums text-primary transition hover:text-accent lg:justify-start sm:text-[1.65rem]"><span class="select-none text-lg leading-none sm:text-xl" aria-hidden="true">📞</span><span>{{ __('offer_dpf.cta_phone_display') }}</span></a>
                    </div>
                </div>
                <div class="rounded-[1.35rem] border border-[#dce3eb] bg-white p-7 shadow-[0_20px_50px_-28px_rgba(36,67,150,.28)] sm:p-9 lg:sticky lg:top-28">
                    @if (session('contact_sent'))
                        <div class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-center text-sm text-emerald-900">{{ __('form.sent') }}</div>
                    @endif
                    @if (session('contact_error'))
                        <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-center text-sm text-red-900">{{ __('contact.mail_failed') }}</div>
                    @endif
                    <form class="space-y-4 text-left" method="post" action="{{ locale_route('contact.store', ['locale' => $l]) }}">
                        @csrf
                        <label class="sr-only" for="offer-dpf-name">{{ __('form.name') }}</label>
                        <input class="w-full rounded-xl border border-[#cbd2d9] bg-[#fafbfc] px-4 py-3.5 text-sm text-primary outline-none transition placeholder:text-zinc-400 focus:border-primary focus:bg-white focus:ring-2 focus:ring-primary/15" id="offer-dpf-name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name" maxlength="200" placeholder="{{ __('form.name') }}">
                        @error('name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <label class="sr-only" for="offer-dpf-email">{{ __('form.email') }}</label>
                        <input class="w-full rounded-xl border border-[#cbd2d9] bg-[#fafbfc] px-4 py-3.5 text-sm text-primary outline-none transition placeholder:text-zinc-400 focus:border-primary focus:bg-white focus:ring-2 focus:ring-primary/15" id="offer-dpf-email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('form.email') }}">
                        @error('email')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <label class="sr-only" for="offer-dpf-phone">{{ __('offer_dpf.s12_phone_placeholder') }}</label>
                        <input class="w-full rounded-xl border border-[#cbd2d9] bg-[#fafbfc] px-4 py-3.5 text-sm text-primary outline-none transition placeholder:text-zinc-400 focus:border-primary focus:bg-white focus:ring-2 focus:ring-primary/15" id="offer-dpf-phone" name="phone" type="tel" value="{{ old('phone') }}" autocomplete="tel" placeholder="{{ __('offer_dpf.s12_phone_placeholder') }}">
                        @error('phone')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <label class="sr-only" for="offer-dpf-message">{{ __('offer_dpf.cta_message_placeholder') }}</label>
                        <textarea class="min-h-[9.5rem] w-full rounded-xl border border-[#cbd2d9] bg-[#fafbfc] px-4 py-3.5 text-sm text-primary outline-none transition placeholder:text-zinc-400 focus:border-primary focus:bg-white focus:ring-2 focus:ring-primary/15" id="offer-dpf-message" name="message" required maxlength="5000" placeholder="{{ __('offer_dpf.cta_message_placeholder') }}">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <div class="flex items-start gap-3 rounded-xl border border-[#e8edf2] bg-[#f4f7fa] px-4 py-3.5">
                            <input class="mt-1 h-4 w-4 shrink-0 rounded border-[#cbd2d9] text-primary focus:ring-primary" id="offer-dpf-privacy" name="privacy_accept" type="checkbox" value="1" {{ old('privacy_accept') ? 'checked' : '' }} required>
                            <label class="text-sm leading-snug text-zinc-700" for="offer-dpf-privacy">{{ __('form.privacy_accept') }}. <span class="text-zinc-500">{{ __('offer_dpf.cta_consent_hint') }}</span> <a href="{{ locale_route('privacy', ['locale' => $l]) }}" class="font-medium text-primary underline">{{ __('footer.privacy') }}</a>.</label>
                        </div>
                        @error('privacy_accept')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <button class="mt-2 inline-flex w-full min-h-[3.25rem] items-center justify-center rounded-full bg-accent px-8 py-4 text-base font-bold uppercase tracking-wide text-white shadow-lg shadow-accent/25 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-h-[3.5rem] sm:text-lg" type="submit" aria-label="{{ __('offer_dpf.cta_submit_aria') }}">{{ __('offer_dpf.cta_submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--<section id="offer-dpf-expert" class="scroll-mt-24 border-t border-[#e2e8f0] bg-white px-6 py-14 sm:px-10 sm:py-20" aria-labelledby="offer-dpf-expert-heading">
        <div class="mx-auto grid w-full max-w-[1100px] gap-8 sm:gap-10 lg:grid-cols-12 lg:items-start lg:gap-12">
            <div class="mx-auto w-full max-w-[220px] sm:max-w-[260px] lg:col-span-4 lg:mx-0 lg:max-w-[280px] lg:justify-self-start">
                <figure class="w-full overflow-hidden rounded-[18px] border border-[#3f454d] bg-[#2f343b] shadow-[0_14px_40px_-28px_rgba(36,67,150,.22)]">
                @if (file_exists($offerDpfSebastianPhoto))
                    <img class="aspect-[3/4] w-full object-cover object-center" src="{{ asset('images/offer/sebastian-tkacz.jpg') }}" width="520" height="693" alt="{{ __('offer_dpf.s13_img_alt') }}" loading="lazy" decoding="async">
                @else
                    <div class="flex aspect-[3/4] w-full items-center justify-center bg-[#2f343b] p-5 text-center text-xs leading-snug text-zinc-200 sm:text-sm">{{ __('offer_dpf.s13_photo_placeholder') }}</div>
                @endif
                </figure>
            </div>
            <div class="min-w-0 max-w-[40rem] lg:col-span-8 lg:max-w-none">
                <h2 id="offer-dpf-expert-heading" class="text-balance text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('offer_dpf.s13_title') }}</h2>
                <p class="mt-2 text-sm font-medium uppercase tracking-wide text-primary">{{ __('offer_dpf.s13_role') }}</p>
                <p class="mt-6 text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">{{ __('offer_dpf.s13_body') }}</p>
                <h3 class="mt-8 text-lg font-semibold text-primary">{{ __('offer_dpf.s13_stats_h3') }}</h3>
                <ul class="mt-4 space-y-3 text-sm leading-6 text-zinc-700 sm:text-base sm:leading-7">
                    @foreach (range(1, 3) as $si)
                        <li class="flex gap-3">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center text-base leading-none" aria-hidden="true">✅</span>
                            <span class="min-w-0 flex-1">{{ __('offer_dpf.s13_stat_'.$si) }}</span>
                        </li>
                    @endforeach
                </ul>
                <h3 class="mt-8 text-lg font-semibold text-primary">{{ __('offer_dpf.s13_approach_h3') }}</h3>
                <ul class="mt-4 space-y-3 text-sm leading-6 text-zinc-700 sm:text-base sm:leading-7">
                    @foreach (range(1, 4) as $ai)
                        <li class="flex gap-3">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center text-base leading-none" aria-hidden="true">💡</span>
                            <span class="min-w-0 flex-1">{{ __('offer_dpf.s13_approach_'.$ai) }}</span>
                        </li>
                    @endforeach
                </ul>
                <h3 class="mt-8 text-lg font-semibold text-primary">{{ __('offer_dpf.s13_why_h3') }}</h3>
                <p class="mt-4 text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">{{ __('offer_dpf.s13_why_body') }}</p>
                <a href="#offer-dpf-form" class="mt-8 inline-flex w-full min-h-[3.25rem] items-center justify-center rounded-full bg-accent px-8 py-4 text-center text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:w-auto sm:min-h-[3.5rem] sm:text-base" aria-label="{{ __('offer_dpf.s13_cta_aria') }}">{{ __('offer_dpf.s13_cta') }}</a>
            </div>
        </div>
    </section>-->
    <!--<section class="min-h-dvh bg-white px-6 pb-0 pt-14 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-primary sm:text-4xl">{{ __('offer_dpf.s3_intro') }}</h2>
            <div class="mt-12 grid gap-10 lg:grid-cols-2 lg:gap-12">
                <div class="rounded-[20px] border border-[#cbd2d9] bg-[#f8fafc] p-8 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <h3 class="text-2xl font-bold text-primary">{{ __('offer_dpf.s3_premium_title') }}</h3>
                    <ul class="mt-6 space-y-3 text-zinc-700">
                        @for ($i = 1; $i <= 7; $i++)
                            <li class="flex items-start gap-3 text-sm leading-7 sm:text-base">
                                <span class="mt-[calc((1lh-0.5rem)/2)] h-2 w-2 shrink-0 rounded-full bg-primary" aria-hidden="true"></span>
                                <span>{{ __('offer_dpf.s3_feature_'.$i) }}</span>
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="rounded-[20px] border border-primary/30 bg-white p-8 shadow-[0_15px_15px_-10px_rgba(36,67,150,.15)]">
                    <h3 class="text-2xl font-bold text-primary">{{ __('offer_dpf.s3_premium_plus_title') }}</h3>
                    <p class="mt-4 text-sm font-semibold uppercase tracking-wide text-primary">{{ __('offer_dpf.s3_premium_plus_lead') }}</p>
                    <ul class="mt-4 space-y-3 text-zinc-700">
                        @for ($i = 1; $i <= 4; $i++)
                            <li class="flex items-start gap-3 text-sm leading-7 sm:text-base">
                                <span class="mt-[calc((1lh-0.5rem)/2)] h-2 w-2 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
                                <span>{{ __('offer_dpf.s3_pp_'.$i) }}</span>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="#" class="inline-flex rounded-full bg-accent px-8 py-4 text-sm font-semibold uppercase text-white shadow-md transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ __('offer_dpf.s3_cta') }}</a>
            </div>
        </div>
        <div class="mt-16 bg-primary px-6 py-14 text-white sm:px-10">
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
    <section class="flex min-h-dvh flex-col justify-center bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-primary sm:text-4xl">{{ __('offer_dpf.s4_title') }}</h2>
            <p class="mx-auto mt-6 max-w-[1200px] text-center text-lg leading-8 text-zinc-700">{{ __('offer_dpf.s4_lead') }}</p>
            <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="flex gap-4 rounded-[18px] border border-[#e2e8f0] bg-[#f8fafc] p-5 shadow-sm">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white">{{ $i }}</span>
                        <p class="text-sm leading-6 text-primary">{{ __('offer_dpf.s4_step_'.$i) }}</p>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-primary sm:text-4xl">{{ __('offer_dpf.s41_title') }}</h2>
            <p class="mx-auto mt-6 max-w-[1200px] text-center text-lg leading-8 text-zinc-700">{{ __('offer_dpf.s41_body') }}</p>
            <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @for ($g = 1; $g <= 4; $g++)
                    <div class="flex aspect-[4/3] items-center justify-center rounded-[20px] border border-dashed border-[#94a3b8] bg-white p-4 text-center text-sm text-zinc-500 shadow-sm">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                @endfor
            </div>
            <div class="mx-auto mt-12 max-w-[1200px]">
                <p class="mb-4 text-center text-sm font-semibold uppercase tracking-wide text-primary">{{ __('offer_dpf.s41_video_title') }}</p>
                @if ($offerDpfProofVideoId)
                    <div class="aspect-video overflow-hidden rounded-[20px] bg-black shadow-lg">
                        <iframe class="h-full w-full border-0" src="https://www.youtube.com/embed/{{ $offerDpfProofVideoId }}?rel=0&modestbranding=1" title="{{ __('offer_dpf.s41_video_title') }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @else
                    <div class="flex aspect-video items-center justify-center rounded-[20px] border border-[#cbd2d9] bg-[#f1f5f9] px-6 text-center text-zinc-500">{{ __('offer_dpf.s41_video_placeholder') }}</div>
                @endif
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center border-t border-[#d8e0ea] bg-[#edf2f7] px-6 py-16 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
            <div class="mb-10 flex flex-col gap-4">
                <div>
                    <h2 class="text-3xl font-semibold text-primary sm:text-4xl">{{ __('offer_dpf.s5_opinions_title') }}</h2>
                    <p class="mt-2 text-lg text-zinc-700">{{ __('offer_dpf.s5_opinions_sub') }}</p>
                </div>
            </div>
            <div class="grid gap-6 lg:grid-cols-3">
                <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <img src="{{ asset('media/wp-uploads/2025/01/aiw_200.png') }}" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale" width="120" height="48">
                    <div class="text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-6 text-sm leading-7 text-primary">{{ __('offer_dpf.s5_t1_quote') }}</blockquote>
                    <div class="mt-6 font-semibold text-primary">{{ __('offer_dpf.s5_t1_name') }}</div>
                </article>
                <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <img src="{{ asset('media/wp-uploads/2025/01/auto_bodo_200-1.png') }}" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale" width="120" height="48">
                    <div class="text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-6 text-sm leading-7 text-primary">{{ __('offer_dpf.s5_t2_quote') }}</blockquote>
                    <div class="mt-6 font-semibold text-primary">{{ __('offer_dpf.s5_t2_name') }}</div>
                </article>
                <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/12 text-sm font-bold text-primary opacity-90" aria-hidden="true">G</div>
                    <div class="text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-6 text-sm leading-7 text-primary">{{ __('offer_dpf.s5_t3_quote') }}</blockquote>
                    <div class="mt-6 font-semibold text-primary">{{ __('offer_dpf.s5_t3_name') }}</div>
                </article>
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center border-y border-[#e2e8f0] bg-white px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="mb-8 text-center text-xl font-semibold text-primary">{{ __('offer_dpf.s5_logos_title') }}</h2>
            <div class="mx-auto grid max-w-[280px] grid-cols-2 place-items-center gap-x-6 gap-y-5 md:mx-0 md:flex md:max-w-none md:flex-wrap md:items-center md:justify-center md:gap-x-10 md:gap-y-8">
                @foreach ([['2025/01/calpeda_small.png','calpeda'],['2025/01/ebara.png','ebara'],['2025/01/fatek_small.png','fatek'],['2025/01/weintek_small.png','weintek'],['2025/01/wieland_small.png','wieland'],['2025/01/eaton_small.png','eaton'],['2025/01/schneider_small.png','schneider'],['2025/01/siemens_small.png','siemens']] as $logo)
                    <img src="{{ asset('media/wp-uploads/'.$logo[0]) }}" alt="{{ $logo[1] }}" class="h-9 w-auto max-w-full object-contain opacity-70 grayscale md:h-12" width="120" height="48">
                @endforeach
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center bg-primary px-6 py-16 text-white sm:px-10">
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
            <h2 class="text-center text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('offer_dpf.s6_title') }}</h2>
            <p class="mt-6 text-center text-xl font-medium text-primary">{{ __('offer_dpf.s6_lead') }}</p>
            <ul class="mt-10 space-y-5 text-lg leading-8 text-zinc-700">
                @for ($b = 1; $b <= 7; $b++)
                    <li class="flex items-start gap-4">
                        <span class="mt-[calc((1lh-0.625rem)/2)] h-2.5 w-2.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
                        <span>{{ __('offer_dpf.s6_b'.$b) }}</span>
                    </li>
                @endfor
            </ul>
            <div class="mt-12 text-center">
                <a href="#offer-dpf-form" class="inline-flex rounded-full bg-accent px-8 py-4 text-sm font-semibold uppercase text-white shadow-md transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ __('offer_dpf.s6_cta') }}</a>
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
            <h2 class="text-center text-3xl font-semibold text-primary sm:text-4xl">{{ __('offer_dpf.s8_title') }}</h2>
            <div class="mt-10 overflow-x-auto rounded-[20px] border border-[#e2e8f0] shadow-[0_8px_40px_-20px_rgba(36,67,150,.12)]">
                <table class="w-full min-w-[min(100%,720px)] border-collapse text-left text-sm sm:text-base">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th class="min-w-[min(40vw,200px)] px-3 py-4 font-semibold sm:px-6">{{ __('offer_dpf.s8_th_feature') }}</th>
                            <th class="min-w-[min(30vw,220px)] px-3 py-4 font-semibold sm:px-6">{{ __('offer_dpf.s8_th_premium') }}</th>
                            <th class="min-w-[min(30vw,220px)] px-3 py-4 font-semibold sm:px-6">{{ __('offer_dpf.s8_th_plus') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-zinc-700">
                        <tr class="border-b border-[#e2e8f0] bg-[#f8fafc]">
                            <td class="align-top bg-[#f8fafc]"></td>
                            <td class="p-3 align-top sm:p-4 sm:pt-5">
                                <div class="overflow-hidden rounded-xl border border-[#e2e8f0] bg-white shadow-sm">
                                    @if (file_exists($offerDpfImgModels))
                                        <img class="h-36 w-full object-cover sm:h-44" src="{{ asset('images/offer/1t5a9183ab.png') }}" width="400" height="300" alt="{{ __('offer_dpf.s8_img_alt_premium') }}">
                                    @else
                                        <div class="flex h-36 w-full items-center justify-center border border-dashed border-[#cbd2d9] bg-[#fafbfc] p-3 text-center text-xs text-zinc-500 sm:h-44 sm:text-sm">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                                    @endif
                                </div>
                            </td>
                            <td class="p-3 align-top sm:p-4 sm:pt-5">
                                <div class="overflow-hidden rounded-xl border border-[#e2e8f0] bg-white shadow-sm">
                                    @if (file_exists($offerDpfImgModels))
                                        <img class="h-36 w-full object-cover sm:h-44" src="{{ asset('images/offer/1t5a9183ab.png') }}" width="400" height="300" alt="{{ __('offer_dpf.s8_img_alt_plus') }}">
                                    @else
                                        <div class="flex h-36 w-full items-center justify-center border border-dashed border-[#cbd2d9] bg-[#fafbfc] p-3 text-center text-xs text-zinc-500 sm:h-44 sm:text-sm">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @for ($r = 1; $r <= 18; $r++)
                            <tr class="border-t border-[#e2e8f0] {{ $r % 2 === 0 ? 'bg-[#f8fafc]' : 'bg-white' }}">
                                <td class="px-3 py-3 font-medium text-primary sm:px-6">{{ __('offer_dpf.s8_r'.$r.'_label') }}</td>
                                <td class="px-3 py-3 align-top sm:px-6">{{ __('offer_dpf.s8_r'.$r.'_p') }}</td>
                                <td class="px-3 py-3 align-top sm:px-6">{{ __('offer_dpf.s8_r'.$r.'_p') }}</td>
                            </tr>
                        @endfor
                    </tbody>
                    <tfoot>
                        <tr class="border-t-2 border-[#e2e8f0] bg-[#edf2f7]">
                            <td class="bg-[#edf2f7]"></td>
                            <td class="p-3 align-top sm:p-5">
                                <a href="#offer-dpf-form" class="inline-flex w-full min-w-0 justify-center rounded-full bg-accent px-4 py-3.5 text-center text-xs font-semibold uppercase leading-tight text-white shadow-md transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:px-6 sm:py-4 sm:text-sm">{{ __('offer_dpf.s8_cta_quote') }}</a>
                            </td>
                            <td class="p-3 align-top sm:p-5">
                                <a href="#offer-dpf-form" class="inline-flex w-full min-w-0 justify-center rounded-full bg-accent px-4 py-3.5 text-center text-xs font-semibold uppercase leading-tight text-white shadow-md transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:px-6 sm:py-4 sm:text-sm">{{ __('offer_dpf.s8_cta_quote') }}</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-primary sm:text-4xl">{{ __('offer_dpf.s9_title') }}</h2>
            <p class="mx-auto mt-4 max-w-[1200px] text-center text-lg text-zinc-700">{{ __('offer_dpf.s9_subtitle') }}</p>
            <div class="mt-12 grid gap-6 lg:grid-cols-2">
                <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-8 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <span class="text-xs font-bold uppercase tracking-wider text-primary">{{ __('offer_dpf.s9_cs1_tag') }}</span>
                    <h3 class="mt-3 text-xl font-bold text-primary">{{ __('offer_dpf.s9_cs1_title') }}</h3>
                    <p class="mt-1 text-sm font-medium text-zinc-500">{{ __('offer_dpf.s9_cs1_place') }}</p>
                    <p class="mt-4 text-sm leading-7 text-zinc-700">{{ __('offer_dpf.s9_cs1_body') }}</p>
                </article>
                <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-8 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <span class="text-xs font-bold uppercase tracking-wider text-primary">{{ __('offer_dpf.s9_cs2_tag') }}</span>
                    <h3 class="mt-3 text-xl font-bold text-primary">{{ __('offer_dpf.s9_cs2_title') }}</h3>
                    <p class="mt-4 text-sm leading-7 text-zinc-700">{{ __('offer_dpf.s9_cs2_body') }}</p>
                </article>
                <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-8 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <span class="text-xs font-bold uppercase tracking-wider text-primary">{{ __('offer_dpf.s9_cs3_tag') }}</span>
                    <h3 class="mt-3 text-xl font-bold text-primary">{{ __('offer_dpf.s9_cs3_title') }}</h3>
                    <p class="mt-1 text-sm font-medium text-zinc-500">{{ __('offer_dpf.s9_cs3_place') }}</p>
                    <p class="mt-4 text-sm leading-7 text-zinc-700">{{ __('offer_dpf.s9_cs3_body') }}</p>
                </article>
                <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-8 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <span class="text-xs font-bold uppercase tracking-wider text-primary">{{ __('offer_dpf.s9_cs4_tag') }}</span>
                    <h3 class="mt-3 text-xl font-bold text-primary">{{ __('offer_dpf.s9_cs4_title') }}</h3>
                    <p class="mt-4 text-sm leading-7 text-zinc-700">{{ __('offer_dpf.s9_cs4_body') }}</p>
                </article>
            </div>
        </div>
    </section>
    <section class="flex min-h-dvh flex-col justify-center border-t border-[#e2e8f0] bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 class="text-center text-3xl font-semibold text-primary sm:text-4xl">{{ __('offer_dpf.s10_title') }}</h2>
            <ul class="mt-10 space-y-5 text-lg leading-8 text-zinc-700">
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
            <h2 class="text-center text-3xl font-semibold text-primary sm:text-4xl">{{ __('offer_dpf.s11_title') }}</h2>
            <div class="mt-10 space-y-3">
                @foreach (trans('offer_dpf_faq.items') as $faq)
                    <details class="group rounded-[16px] border border-[#e2e8f0] bg-white px-5 py-4 shadow-[0_8px_24px_-12px_rgba(36,67,150,.12)] open:shadow-[0_12px_32px_-12px_rgba(36,67,150,.18)]">
                        <summary class="flex cursor-pointer list-none items-start justify-between gap-3 text-base font-semibold text-primary marker:content-none [&::-webkit-details-marker]:hidden">
                            <span class="text-left">{{ $faq['q'] }}</span>
                            <span class="mt-0.5 inline-block shrink-0 text-primary transition-transform group-open:rotate-180" aria-hidden="true">▼</span>
                        </summary>
                        <p class="mt-4 text-sm leading-7 text-zinc-700">{{ $faq['a'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>-->
    <section class="flex min-h-dvh flex-col justify-center border-t border-[#e2e8f0] bg-[#edf2f7] px-6 py-14 sm:px-10 sm:py-20">
        <div class="mx-auto grid w-full max-w-[1100px] gap-8 sm:gap-10 lg:grid-cols-12 lg:items-start lg:gap-12">
            <div class="mx-auto w-full max-w-[220px] sm:max-w-[260px] lg:col-span-4 lg:mx-0 lg:max-w-[280px] lg:justify-self-start">
                <figure class="w-full overflow-hidden rounded-[18px] border border-[#3f454d] bg-[#2f343b] shadow-[0_14px_40px_-28px_rgba(36,67,150,.22)]">
                @if (file_exists($offerDpfSebastianPhoto))
                    <img class="aspect-[3/4] w-full object-cover object-center" src="{{ asset('images/foto.png') }}" width="520" height="693" alt="{{ __('offer_dpf.s13_img_alt') }}">
                @elseif (file_exists($offerDpfImgModels))
                    <img class="aspect-[3/4] w-full object-cover object-center" src="{{ asset('images/offer/1t5a9183ab.png') }}" width="520" height="693" alt="{{ __('offer_dpf.s13_img_alt') }}">
                @else
                    <div class="flex aspect-[3/4] w-full items-center justify-center bg-[#2f343b] p-5 text-center text-xs leading-snug text-zinc-200 sm:text-sm">{{ __('offer_dpf.s13_photo_placeholder') }}</div>
                @endif
                </figure>
            </div>
            <div class="min-w-0 max-w-[40rem] lg:col-span-8 lg:max-w-none">
                <h2 class="text-balance text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('offer_dpf.s13_title') }}</h2>
                <p class="mt-2 text-sm font-medium uppercase tracking-wide text-primary">{{ __('offer_dpf.s13_role') }}</p>
                <p class="mt-6 text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">{{ __('offer_dpf.s13_body') }}</p>
                <h3 class="mt-8 text-lg font-semibold text-primary">{{ __('offer_dpf.s13_stats_h3') }}</h3>
                <ul class="mt-4 space-y-3 text-sm leading-6 text-zinc-700 sm:text-base sm:leading-7">
                    @foreach (range(1, 3) as $si)
                        <li class="flex gap-3">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center text-base leading-none" aria-hidden="true">✅</span>
                            <span class="min-w-0 flex-1">{{ __('offer_dpf.s13_stat_'.$si) }}</span>
                        </li>
                    @endforeach
                </ul>
                <h3 class="mt-8 text-lg font-semibold text-primary">{{ __('offer_dpf.s13_approach_h3') }}</h3>
                <ul class="mt-4 space-y-3 text-sm leading-6 text-zinc-700 sm:text-base sm:leading-7">
                    @foreach (range(1, 4) as $ai)
                        <li class="flex gap-3">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center text-base leading-none" aria-hidden="true">💡</span>
                            <span class="min-w-0 flex-1">{{ __('offer_dpf.s13_approach_'.$ai) }}</span>
                        </li>
                    @endforeach
                </ul>
                <h3 class="mt-8 text-lg font-semibold text-primary">{{ __('offer_dpf.s13_why_h3') }}</h3>
                <p class="mt-4 text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">{{ __('offer_dpf.s13_why_body') }}</p>
                <a href="#offer-dpf-form" class="mt-8 inline-flex w-full min-h-[3.25rem] items-center justify-center rounded-full bg-accent px-8 py-4 text-center text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:w-auto sm:min-h-[3.5rem] sm:text-base" aria-label="{{ __('offer_dpf.s13_cta_aria') }}">{{ __('offer_dpf.s13_cta') }}</a>
            </div>
        </div>
    </section>
</div>
@endsection
