@extends('layouts.app')
@section('title', __('offer_dpf.seo_title'))
@section('meta_description', __('offer_dpf.seo_description'))
@push('head')
    <meta name="keywords" content="{{ __('offer_dpf.seo_keywords') }}">
@endpush
@section('content')
@php
    $l = app()->getLocale();
    $blog = config('app.content.blog.'.$l, config('app.content.blog.pl'));
    $host = parse_url((string) config('app.url'), PHP_URL_HOST) ?: request()->getHost();
    $homeHeroVideoEmbed = 'https://www.youtube.com/embed/lvkEzHiBAoo?autoplay=1&mute=1&loop=1&playlist=lvkEzHiBAoo&controls=0&rel=0&modestbranding=1&playsinline=1';
    $homeHeroPoster = 'https://i.ytimg.com/vi/lvkEzHiBAoo/maxresdefault.jpg';
    $homeDpfModelsUrl = locale_route('offer.dpf', ['locale' => $l]).'#offer-dpf-modele';
    $homeOfferDpfFormUrl = locale_route('offer.dpf', ['locale' => $l]).'#offer-dpf-form';
    $homeModelCardImgPath = public_path('images/offer/1t5a9183ab.png');
    $homeModelCardImgSrc = file_exists($homeModelCardImgPath) ? asset('images/offer/1t5a9183ab.png') : null;
    $homeContactOfferUrl = '#home-contact-expert';
    $homeExpertPhotoPath = public_path('images/foto.png');
    $homeExpertPhotoSrc = file_exists($homeExpertPhotoPath) ? asset('images/foto.png') : null;
@endphp

<div class="space-y-0">
    <section id="home-hero" class="scroll-mt-24 overflow-hidden text-white" aria-label="Hero">
        <div class="relative isolate min-h-[100vh] w-full overflow-hidden">
            <div class="absolute inset-0 z-0 overflow-hidden" aria-hidden="true">
                <img src="{{ $homeHeroPoster }}" alt="Maszyna do czyszczenia filtrów DPF – Motsler" width="1280" height="720" class="h-full w-full object-cover md:hidden" fetchpriority="high" decoding="async">
                <iframe
                    class="pointer-events-none absolute left-1/2 top-1/2 hidden h-[56.25vw] min-h-[125%] w-[177.77vh] min-w-[125%] -translate-x-1/2 -translate-y-1/2 border-0 md:block"
                    src="{{ $homeHeroVideoEmbed }}"
                    title="Film prezentacyjny maszyny do czyszczenia filtrów DPF Motsler"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                ></iframe>
            </div>
            <div class="absolute inset-0 z-[1] bg-[linear-gradient(90deg,rgba(11,31,58,0.78)_0%,rgba(11,31,58,0.68)_38%,rgba(11,31,58,0.42)_72%,rgba(11,31,58,0.22)_100%)]" aria-hidden="true"></div>
            <div class="relative z-[2] flex min-h-[100vh] w-full items-center py-12 sm:py-14">
                <div class="mx-auto w-full max-w-[1200px] px-5 sm:px-10">
                    <div class="w-full max-w-[600px] text-left">
                    <h1 class="home-hero-reveal home-hero-reveal-d1 text-balance text-2xl font-bold leading-[1.12] tracking-tight text-white drop-shadow-[0_2px_12px_rgba(0,0,0,.45)] sm:text-3xl md:text-4xl">{{ __('home.hero_h1') }}</h1>
                    <h2 class="home-hero-reveal home-hero-reveal-d2 mt-4 text-balance text-base font-semibold leading-snug text-white/95 sm:text-lg md:text-xl">{{ __('home.hero_subheadline') }}</h2>
                    <ul class="home-hero-reveal home-hero-reveal-d4 mt-6 list-none space-y-2.5 p-0 text-sm leading-snug text-white sm:text-[0.9375rem]" role="list">
                        <li class="flex gap-2.5"><span class="shrink-0 text-emerald-400" aria-hidden="true">✔</span><span>{{ __('home.hero_value_1') }}</span></li>
                        <li class="flex gap-2.5"><span class="shrink-0 text-emerald-400" aria-hidden="true">✔</span><span>{{ __('home.hero_value_2') }}</span></li>
                        <li class="flex gap-2.5"><span class="shrink-0 text-emerald-400" aria-hidden="true">✔</span><span>{{ __('home.hero_value_3') }}</span></li>
                    </ul>
                    <div class="home-hero-reveal home-hero-reveal-d5 mt-8 flex w-full flex-col gap-3 sm:flex-row sm:flex-wrap sm:gap-3">
                        <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="btn btn-primary inline-flex min-h-[3rem] w-full flex-1 items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/25 transition hover:bg-accent/88 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:min-w-0 sm:flex-1">{{ __('home.hero_cta_primary') }}</a>
                        <a href="{{ $homeContactOfferUrl }}" class="btn btn-outline inline-flex min-h-[3rem] w-full flex-1 items-center justify-center rounded-full border-2 border-white bg-transparent px-6 py-3.5 text-center text-sm font-semibold text-white transition hover:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:min-w-0 sm:flex-1">{{ __('home.hero_cta_secondary') }}</a>
                    </div>
                  <!--  <ul class="home-hero-reveal home-hero-reveal-d6 mt-8 list-none space-y-2 p-0 text-xs leading-snug text-white/75 sm:text-sm" role="list">
                        <li class="flex gap-2.5"><span class="shrink-0 text-white/80" aria-hidden="true">✔</span><span>{{ __('home.hero_trust_1') }}</span></li>
                        <li class="flex gap-2.5"><span class="shrink-0 text-white/80" aria-hidden="true">✔</span><span>{{ __('home.hero_trust_2') }}</span></li>
                        <li class="flex gap-2.5"><span class="shrink-0 text-white/80" aria-hidden="true">✔</span><span>{{ __('home.hero_trust_3') }}</span></li>
                    </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section id="home-areas-intro" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-white" aria-labelledby="home-areas-intro-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-10 sm:py-16">
            <h2 id="home-areas-intro-heading" class="mx-auto max-w-[58rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-4xl">{{ __('home.areas_title') }}</h2>
            <p class="mx-auto mt-5 max-w-[62rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:text-lg sm:leading-8">{{ __('home.areas_lead') }}</p>

            <article class="mx-auto mt-10 max-w-[62rem] rounded-3xl border border-accent/25 bg-gradient-to-br from-[#fff8f2] via-[#fffdfb] to-white p-6 shadow-[0_20px_50px_-35px_rgba(255,107,0,0.55)] sm:p-8 lg:p-10">
                <h3 class="text-balance text-center text-xl font-semibold leading-tight text-primary sm:text-2xl">{{ __('home.areas_system_title') }}</h3>
                <p class="mt-3 text-sm leading-7 text-zinc-700 sm:text-base sm:leading-8">{{ __('home.areas_system_text') }}</p>
            </article>

            <div class="mt-10 grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 lg:grid-cols-3 lg:gap-7">
                <article class="rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.areas_c1_title') }}</h3>
                    <p class="mt-3 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.areas_c1_text') }}</p>
                </article>
                <article class="rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.areas_c2_title') }}</h3>
                    <p class="mt-3 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.areas_c2_text') }}</p>
                </article>
                <article class="rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.areas_c3_title') }}</h3>
                    <p class="mt-3 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.areas_c3_text') }}</p>
                </article>
            </div>

            <div class="mx-auto mt-10 max-w-[62rem] rounded-2xl border border-emerald-200 bg-gradient-to-br from-emerald-50 to-white p-6 shadow-[0_18px_50px_-35px_rgba(5,150,105,0.55)] sm:p-8">
                <ul class="list-none space-y-2.5 p-0 text-sm font-medium leading-relaxed text-zinc-800 sm:text-base" role="list">
                    <li class="flex gap-2.5"><span class="shrink-0 text-emerald-600" aria-hidden="true">✔</span><span>{{ __('home.areas_value_1') }}</span></li>
                    <li class="flex gap-2.5"><span class="shrink-0 text-emerald-600" aria-hidden="true">✔</span><span>{{ __('home.areas_value_2') }}</span></li>
                    <li class="flex gap-2.5"><span class="shrink-0 text-emerald-600" aria-hidden="true">✔</span><span>{{ __('home.areas_value_3') }}</span></li>
                </ul>
            </div>
        </div>
    </section>-->

    <section id="home-areas" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-[#f1f5f9]" aria-labelledby="home-areas-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-10 sm:py-16">
            <p class="text-center text-xs font-bold uppercase tracking-[0.2em] text-accent sm:text-sm">{{ __('home.areas_old_kicker') }}</p>
            <h2 id="home-areas-heading" class="mx-auto mt-3 max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-4xl">{{ __('home.areas_old_title') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:text-lg sm:leading-8">{{ __('home.areas_old_lead') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 lg:mt-12 lg:grid-cols-2 lg:gap-6">
                <article class="flex h-full min-h-0 flex-col overflow-hidden rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] shadow-sm">
                    <figure class="relative aspect-[16/10] w-full shrink-0 bg-white">
                        <img src="{{ asset('images/offer/1T5A9192AB-1.png') }}" alt="{{ __('home.areas_old_photo_machine_alt') }}" class="absolute inset-0 h-full w-full object-contain object-center p-3 sm:p-4" width="955" height="781" loading="lazy" decoding="async">
                    </figure>
                    <div class="flex flex-1 flex-col p-6 sm:p-7 sm:pt-6">
                        <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.areas_old_c1_title') }}</h3>
                        <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.areas_old_c1_text') }}</p>
                        <div class="mt-8 shrink-0">
                            <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="inline-flex min-h-[3rem] w-full items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ __('home.areas_old_link_solutions') }}</a>
                        </div>
                    </div>
                </article>
                {{--
                <a href="{{ locale_route('solutions.custom_machines', ['locale' => $l]) }}" class="group flex h-full min-h-0 flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.areas_old_c2_title') }}</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.areas_old_c2_text') }}</p>
                    <span class="mt-8 inline-flex items-center gap-1.5 text-sm font-semibold text-accent group-hover:underline">{{ __('home.areas_old_link_solutions') }} <span aria-hidden="true">→</span></span>
                </a>
                <a href="{{ locale_route('solutions.new_products', ['locale' => $l]) }}" class="group flex h-full min-h-0 flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.areas_old_c3_title') }}</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.areas_old_c3_text') }}</p>
                    <span class="mt-8 inline-flex items-center gap-1.5 text-sm font-semibold text-accent group-hover:underline">{{ __('home.areas_old_link_solutions') }} <span aria-hidden="true">→</span></span>
                </a>
                --}}
                <article class="flex h-full min-h-0 flex-col overflow-hidden rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] shadow-sm">
                    <figure class="relative aspect-[16/10] w-full shrink-0 bg-white">
                        <img src="{{ asset('media/wp-uploads/2025/07/20250718_165157a-768x1024.jpg') }}" alt="{{ __('home.areas_old_photo_chem_alt') }}" class="absolute inset-0 h-full w-full object-contain object-center p-7 sm:p-9 md:p-10" width="768" height="1024" loading="lazy" decoding="async">
                    </figure>
                    <div class="flex flex-1 flex-col p-6 sm:p-7 sm:pt-6">
                        <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.areas_old_c4_title') }}</h3>
                        <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.areas_old_c4_text') }}</p>
                        <div class="mt-8 shrink-0">
                            <a href="{{ locale_route('solutions.chemia', ['locale' => $l]) }}" class="inline-flex min-h-[3rem] w-full items-center justify-center rounded-full border-2 border-accent bg-white px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-primary transition hover:bg-accent/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ __('home.areas_old_link_products') }}</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="mx-auto mt-14 flex justify-center sm:mt-16">
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3rem] items-center justify-center rounded-full bg-accent px-10 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-h-[3.5rem] sm:text-base">{{ __('nav.consultation') }}</a>
            </div>
        </div>
    </section>

    <section id="home-dpf-system" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-white" aria-labelledby="home-dpf-system-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-10 sm:py-16 lg:py-20">
            <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 lg:items-start lg:gap-12 xl:gap-14">
                <div class="order-2 min-w-0 lg:order-2 lg:sticky lg:top-28 lg:self-start">
                    <figure class="relative mx-auto w-full max-w-lg lg:max-w-none">
                        <div class="absolute -inset-1 -z-10 rounded-[24px] bg-gradient-to-br from-white via-[#f1f5f9] to-zinc-200/80 sm:-inset-2 sm:rounded-[28px]"></div>
                        <div id="home-dpf-visual" class="relative overflow-hidden rounded-[20px] bg-white ring-1 ring-[#e2e8f0] shadow-[0_24px_60px_-28px_rgba(0,19,72,.22)] sm:rounded-[22px]">
                            <div class="relative aspect-[1247/1020] w-full">
                                <div class="absolute inset-0 z-[1] flex items-center justify-center">
                                    <img id="home-dpf-blend-a" src="{{ asset('images/offer/1T5A9192AB-1.png') }}" alt="{{ __('home.dpf_system_image_alt') }}" class="max-h-full max-w-full object-contain will-change-[opacity]" width="1247" height="1020" loading="eager" fetchpriority="high" decoding="async">
                                </div>
                                <div class="pointer-events-none absolute inset-0 z-[2] flex items-center justify-center">
                                    <img id="home-dpf-blend-b" src="{{ asset('images/offer/lewy_bok.png') }}" alt="" class="max-h-full max-w-full object-contain will-change-[opacity]" width="1247" height="1020" loading="eager" decoding="async" aria-hidden="true" style="opacity:0">
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="order-1 min-w-0 lg:order-1">
                    <p class="inline-flex rounded-full border border-primary/15 bg-white px-3 py-1 text-xs font-semibold uppercase tracking-wide text-primary">{{ __('home.dpf_system_badge') }}</p>
                    <h2 id="home-dpf-system-heading" class="mt-4 text-balance text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('home.dpf_system_heading') }}</h2>
                    <p class="mt-5 max-w-xl text-base leading-7 text-zinc-700 sm:text-lg sm:leading-8">{{ __('home.dpf_system_intro') }}</p>
                    <div id="home-dpf-tiles" class="mt-8 grid grid-cols-1 gap-4 sm:gap-5">
                        @foreach ([1, 2, 5, 6] as $ti)
                            <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-white p-5 shadow-[0_12px_40px_-24px_rgba(36,67,150,.12)] sm:p-6">
                                <div class="flex items-center gap-3">
                                    <span class="inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-primary/15 bg-primary/10 text-primary" aria-hidden="true">
                                        @if ($ti === 1)
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 7H8M8 7l2.25-2.25M8 7l2.25 2.25"/><path d="M8 17h8M16 17l-2.25-2.25M16 17l-2.25 2.25"/></svg>
                                        @elseif ($ti === 2)
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor"><path d="M12 2.5c-3.5 4.5-7 8.2-7 11.5a7 7 0 1014 0c0-3.3-3.5-7-7-11.5zM8 18h8v2H8v-2z"/></svg>
                                        @elseif ($ti === 5)
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 9L5 12l3 3M16 15l3-3-3-3"/><path d="M5 12h14"/></svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="7" height="14" rx="1.5"/><rect x="14" y="5" width="7" height="14" rx="1.5"/></svg>
                                        @endif
                                    </span>
                                    <h3 class="text-balance text-base font-semibold leading-snug text-primary sm:text-lg">{{ __('home.dpf_system_c'.$ti.'_title') }}</h3>
                                </div>
                                <p class="mt-2.5 text-sm leading-relaxed text-zinc-700 sm:text-[0.9375rem] sm:leading-7">{{ __('home.dpf_system_c'.$ti.'_desc') }}</p>
                                <ul class="mt-3 flex flex-wrap gap-2 text-xs leading-snug text-zinc-700 sm:text-sm" role="list">
                                    @foreach ([1, 2, 3] as $ei)
                                        <li class="inline-flex items-center gap-1.5 rounded-full border border-zinc-200 bg-zinc-50 px-2.5 py-1"><span class="shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('home.dpf_system_c'.$ti.'_effect_'.$ei) }}</span></li>
                                    @endforeach
                                </ul>
                            </article>
                        @endforeach
                    </div>
                    <div class="mt-8 flex w-full max-w-xl flex-col gap-3 sm:flex-row sm:items-center">
                        <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}#offer-dpf-modele" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ __('home.dpf_system_cta_primary') }}</a>
                        <a href="{{ $homeOfferDpfFormUrl }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full border-2 border-accent bg-white px-6 py-3.5 text-center text-sm font-semibold text-primary transition hover:bg-accent/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ __('home.dpf_system_cta_secondary') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-models" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-[#f1f5f9]" aria-labelledby="home-models-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-10 sm:py-16 lg:py-20">
            <h2 id="home-models-heading" class="mx-auto max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-[2rem] md:leading-[1.25]">{{ __('home.models_heading') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:mt-6 sm:text-lg sm:leading-8">{{ __('home.models_lead') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:mt-12 lg:grid-cols-3 lg:gap-8">
                @foreach ([1, 2, 3] as $mi)
                    @php
                        $homeIsDualModel = $mi === 3;
                    @endphp
                    <article class="flex h-full flex-col rounded-2xl border-2 border-zinc-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-zinc-300 hover:shadow-xl hover:shadow-zinc-900/10 sm:p-7">
                        <div class="-mx-6 -mt-6 mb-5 overflow-hidden rounded-t-xl sm:-mx-7 sm:-mt-7">
                            <div class="relative aspect-[4/3] bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]">
                                @if ($homeModelCardImgSrc)
                                    <img src="{{ $homeModelCardImgSrc }}" alt="{{ __('offer_dpf.models_m'.$mi.'_img_alt') }}" class="h-full w-full object-cover object-center" width="480" height="360" loading="lazy" decoding="async">
                                @else
                                    <div class="flex h-full w-full items-center justify-center p-4 text-center text-sm text-zinc-500">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                                @endif
                                @if ($mi === 1)
                                    <span class="absolute right-3 top-3 rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wide text-white shadow-md">{{ __('offer_dpf.models_m1_badge') }}</span>
                                @elseif ($homeIsDualModel)
                                    <span class="absolute right-3 top-3 rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wide text-white shadow-md">{{ __('offer_dpf.models_dual_badge') }}</span>
                                @endif
                            </div>
                        </div>
                        <h3 class="text-xl font-bold leading-snug text-primary">{{ __('home.models_m'.$mi.'_name') }}</h3>
                        <p class="mt-3 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.models_m'.$mi.'_desc') }}</p>
                        <div class="mt-5 border-t border-zinc-200 pt-5">
                            <p class="text-xs font-bold uppercase tracking-wide text-zinc-500">{{ __('home.models_spec_label') }}</p>
                            <ul class="mt-3 space-y-2 text-sm leading-snug text-zinc-700" role="list">
                                @foreach ([1, 2, 3] as $si)
                                    <li class="flex gap-2"><span class="text-zinc-400" aria-hidden="true">·</span><span>{{ __('home.models_m'.$mi.'_spec'.$si) }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mt-5 rounded-xl border border-accent/25 bg-gradient-to-b from-[#fff9f5] to-white p-4 shadow-sm">
                            <p class="text-xs font-bold uppercase tracking-wide text-primary">{{ __('home.models_tech_label') }}</p>
                            <ul class="mt-3 space-y-2 text-sm leading-snug text-zinc-800" role="list">
                                @php
                                    $homeModelTechCounts = [1 => 4, 2 => 4, 3 => 4];
                                @endphp
                                @foreach (range(1, $homeModelTechCounts[$mi] ?? 4) as $ti)
                                    <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('home.models_m'.$mi.'_tech'.$ti) }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mt-auto shrink-0 pt-10 sm:pt-12">
                            <a href="#home-contact-form" class="inline-flex min-h-[3rem] w-full items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/10 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ __('offer_dpf.s8_cta_quote') }}</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="home-dpf-process" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-white" aria-labelledby="home-proc-heading">
        <div class="mx-auto w-full max-w-[1180px] px-5 py-12 sm:px-10 sm:py-16 lg:py-20">
            <h2 id="home-proc-heading" class="mx-auto max-w-[48rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('home.proc_heading') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:text-lg sm:leading-8">{{ __('home.proc_lead') }}</p>

            <div class="relative mt-14 hidden lg:block">
                <div class="pointer-events-none absolute left-[10%] right-[10%] top-[1.375rem] z-0 h-[3px] rounded-full bg-[linear-gradient(90deg,#e2e8f0_0%,rgba(255,107,0,0.35)_50%,#e2e8f0_100%)]" aria-hidden="true"></div>
                <ol class="relative m-0 grid list-none grid-cols-5 gap-0 p-0" role="list">
                    @foreach ([1, 2, 3, 4, 5] as $step)
                        <li class="relative z-[1] flex min-w-0 flex-col items-center px-1.5">
                            <span class="mb-5 flex h-11 w-11 shrink-0 items-center justify-center rounded-full border-[3px] border-white bg-white text-sm font-bold tabular-nums text-primary shadow-[0_4px_14px_-4px_rgba(11,31,58,0.35),0_0_0_2px_rgba(255,107,0,0.55)] ring-1 ring-zinc-200/80">{{ $step }}</span>
                            <div class="flex min-h-[12.5rem] w-full flex-col rounded-xl border border-[#e2e8f0] bg-white p-4 text-center shadow-[0_12px_36px_-28px_rgba(15,23,42,0.28)]">
                                <h3 class="text-sm font-semibold leading-snug text-primary">{{ __('home.proc_step_'.$step.'_title') }}</h3>
                                <p class="mt-3 flex-1 text-pretty text-xs leading-relaxed text-zinc-600">{{ __('home.proc_step_'.$step.'_desc') }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>

            <div class="relative mx-auto mt-12 max-w-xl lg:hidden">
                <div class="pointer-events-none absolute bottom-3 left-[1.125rem] top-3 w-px bg-[linear-gradient(180deg,#cbd5e1_0%,rgba(255,107,0,0.35)_50%,#cbd5e1_100%)] sm:left-[1.25rem]" aria-hidden="true"></div>
                <ol class="relative m-0 list-none p-0" role="list">
                    @foreach ([1, 2, 3, 4, 5] as $step)
                    <li class="relative flex gap-5 pb-10 pl-0 last:pb-0 sm:gap-6">
                        <span class="relative z-[1] flex h-9 w-9 shrink-0 items-center justify-center rounded-full border-2 border-white bg-primary text-xs font-bold tabular-nums text-white shadow-md sm:h-10 sm:w-10 sm:text-sm">{{ sprintf('%02d', $step) }}</span>
                        <div class="min-w-0 flex-1 rounded-xl border border-[#e2e8f0] bg-white p-4 shadow-sm sm:p-5">
                            <h3 class="text-base font-semibold leading-snug text-primary">{{ __('home.proc_step_'.$step.'_title') }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-zinc-600">{{ __('home.proc_step_'.$step.'_desc') }}</p>
                        </div>
                    </li>
                    @endforeach
                </ol>
            </div>

            <div class="mx-auto mt-14 flex max-w-2xl flex-col items-stretch justify-center gap-3 sm:mt-16 sm:flex-row sm:items-center sm:justify-center sm:gap-4">
                <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full bg-accent px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.sws_cta_primary') }}</a>
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full border-2 border-accent bg-white px-8 py-3.5 text-center text-sm font-semibold text-primary transition hover:bg-accent/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:min-w-[12rem] sm:flex-none">{{ __('home.proc_cta_secondary') }}</a>
            </div>
        </div>
    </section>

    <section id="home-roi" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-[#f1f5f9]" aria-labelledby="home-roi-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-10 sm:py-16 lg:py-20">
            <h2 id="home-roi-heading" class="mx-auto max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-[2rem] md:leading-[1.25]">{{ __('home.roi_heading') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:mt-6 sm:text-lg sm:leading-8">{{ __('home.roi_lead') }}</p>
            @php
                $homeRoiIconFiles = [1 => 'ikona warsztaty.png', 2 => 'przemysł.png', 3 => 'floty.png'];
            @endphp
            <div class="mt-10 grid grid-cols-1 gap-6 md:grid-cols-2 lg:mt-12 lg:grid-cols-3 lg:gap-8">
                @foreach ([1, 2, 3] as $ci)
                    <article class="flex h-full flex-col rounded-2xl border border-[#e2e8f0] bg-white p-6 shadow-sm sm:p-7">
                        <div class="flex items-start justify-between gap-3">
                            <h3 class="min-w-0 flex-1 text-pretty text-base font-semibold leading-snug text-primary sm:text-lg">{{ __('home.roi_c'.$ci.'_title') }}</h3>
                            <span class="inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-lg border border-primary/10 bg-primary/5 p-1 sm:h-10 sm:w-10 sm:p-1.5">
                                <img src="{{ asset('images/ico/'.rawurlencode($homeRoiIconFiles[$ci])) }}" alt="" class="h-6 w-6 object-contain sm:h-7 sm:w-7" width="28" height="28" loading="lazy" decoding="async">
                            </span>
                        </div>
                        <p class="mt-2 min-h-0 flex-1 text-pretty text-sm leading-relaxed text-zinc-600 sm:text-[0.9375rem] sm:leading-7">{{ __('home.roi_c'.$ci.'_desc') }}</p>
                        <p class="mt-5 text-xs font-bold uppercase tracking-wide text-zinc-500">{{ __('home.roi_effects_label') }}</p>
                        <ul class="mt-3 space-y-2.5 text-sm leading-snug text-zinc-800" role="list">
                            @foreach ([1, 2, 3] as $ei)
                                <li class="flex gap-2.5"><span class="shrink-0 text-emerald-600" aria-hidden="true">✔</span><span>{{ __('home.roi_c'.$ci.'_e'.$ei) }}</span></li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
            <div class="mx-auto mt-12 flex max-w-2xl flex-col items-stretch justify-center gap-3 sm:mt-14 sm:flex-row sm:items-center sm:justify-center sm:gap-4">
                <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full bg-accent px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.roi_cta_primary') }}</a>
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full border-2 border-accent bg-white px-8 py-3.5 text-center text-sm font-semibold text-primary transition hover:bg-accent/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:min-w-[12rem] sm:flex-none">{{ __('home.sws_cta_secondary') }}</a>
            </div>
        </div>
    </section>

    <section id="home-dpf-ecosystem" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-white" aria-labelledby="home-ecosystem-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-14 sm:px-10 sm:py-16 lg:py-20">
            <p class="text-center text-xs font-bold uppercase tracking-[0.18em] text-accent sm:text-sm">{{ __('home.ecosystem_kicker') }}</p>
            <h2 id="home-ecosystem-heading" class="mx-auto mt-3 max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-[2rem] md:leading-[1.25]">{{ __('home.ecosystem_heading') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:mt-6 sm:text-lg sm:leading-8">{{ __('home.ecosystem_lead') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-6 sm:mt-12 lg:grid-cols-2 lg:gap-8">
                <article class="flex h-full min-h-0 flex-col rounded-[1.25rem] border border-[#e2e8f0] bg-white/90 p-7 shadow-[0_18px_50px_-32px_rgba(15,23,42,0.35)] backdrop-blur-sm sm:p-8 lg:p-9">
                    <h3 class="text-xl font-bold leading-snug text-primary sm:text-2xl">{{ __('home.eco_m_title') }}</h3>
                    <p class="mt-4 flex-1 text-pretty text-sm leading-relaxed text-zinc-600 sm:text-base">{{ __('home.eco_m_desc') }}</p>
                    <p class="mt-6 text-[0.6875rem] font-bold uppercase tracking-[0.14em] text-zinc-500">{{ __('home.ecosystem_val_label') }}</p>
                    <ul class="mt-3 space-y-2.5 text-sm leading-snug text-zinc-800 sm:text-[0.9375rem]" role="list">
                        @foreach (['1', '2', '3'] as $vi)
                            <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('home.eco_m_v'.$vi) }}</span></li>
                        @endforeach
                    </ul>
                    <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="mt-8 inline-flex min-h-[3rem] w-full items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ __('home.eco_m_cta') }}</a>
                </article>
                <article class="flex h-full min-h-0 flex-col rounded-[1.25rem] border border-[#e2e8f0] bg-white/90 p-7 shadow-[0_18px_50px_-32px_rgba(15,23,42,0.35)] backdrop-blur-sm sm:p-8 lg:p-9">
                    <h3 class="text-xl font-bold leading-snug text-primary sm:text-2xl">{{ __('home.eco_c_title') }}</h3>
                    <p class="mt-4 flex-1 text-pretty text-sm leading-relaxed text-zinc-600 sm:text-base">{{ __('home.eco_c_desc') }}</p>
                    <p class="mt-6 text-[0.6875rem] font-bold uppercase tracking-[0.14em] text-zinc-500">{{ __('home.ecosystem_val_label') }}</p>
                    <ul class="mt-3 space-y-2.5 text-sm leading-snug text-zinc-800 sm:text-[0.9375rem]" role="list">
                        @foreach (['1', '2', '3'] as $vi)
                            <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('home.eco_c_v'.$vi) }}</span></li>
                        @endforeach
                    </ul>
                    <a href="{{ locale_route('solutions.chemia', ['locale' => $l]) }}" class="mt-8 inline-flex min-h-[3rem] w-full items-center justify-center rounded-full border-2 border-accent bg-white px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-primary transition hover:bg-accent/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ __('home.eco_c_cta') }}</a>
                </article>
            </div>
        </div>
    </section>

    <section id="home-cases" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-[#f1f5f9]" aria-labelledby="home-cases-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-14 sm:px-10 sm:py-16 lg:py-20">
            <p class="text-center text-xs font-bold uppercase tracking-[0.18em] text-accent sm:text-sm">{{ __('home.cs_kicker') }}</p>
            <h2 id="home-cases-heading" class="mx-auto mt-3 max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-[2rem] md:leading-[1.25]">{{ __('home.cs_heading') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:mt-6 sm:text-lg sm:leading-8">{{ __('home.cs_lead') }}</p>
            <div class="mt-12 grid grid-cols-1 gap-8 lg:mt-14 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-0 xl:gap-x-10">
                @foreach ([1, 2, 3] as $ci)
                    <article class="flex flex-col gap-6 rounded-3xl border border-[#e2e8f0] bg-white p-8 shadow-[0_20px_50px_-28px_rgba(15,23,42,0.2)] sm:p-9 lg:row-span-5 lg:grid lg:min-h-0 lg:grid-rows-[subgrid] lg:gap-6 lg:p-10">
                        <h3 class="text-xl font-bold leading-snug text-primary sm:text-[1.35rem] sm:leading-tight">{{ __('home.cs_c'.$ci.'_title') }}</h3>
                        <div class="text-[0.9375rem] leading-relaxed text-zinc-700 sm:text-base sm:leading-relaxed">
                            <p class="text-[0.6875rem] font-bold uppercase tracking-[0.14em] text-zinc-500">{{ __('home.cs_label_context') }}</p>
                            <p class="mt-2 text-pretty">{{ __('home.cs_c'.$ci.'_context') }}</p>
                        </div>
                        <div class="text-[0.9375rem] leading-relaxed text-zinc-700 sm:text-base sm:leading-relaxed">
                            <p class="text-[0.6875rem] font-bold uppercase tracking-[0.14em] text-zinc-500">{{ __('home.cs_label_problem') }}</p>
                            <p class="mt-2 text-pretty">{{ __('home.cs_c'.$ci.'_problem') }}</p>
                        </div>
                        <div class="text-[0.9375rem] leading-relaxed text-zinc-700 sm:text-base sm:leading-relaxed">
                            <p class="text-[0.6875rem] font-bold uppercase tracking-[0.14em] text-zinc-500">{{ __('home.cs_label_solution') }}</p>
                            <p class="mt-2 text-pretty font-semibold text-primary">{{ __('home.cs_c'.$ci.'_solution') }}</p>
                        </div>
                        <div class="rounded-2xl border border-primary/15 bg-[#f8fafc] p-6">
                            <p class="text-[0.6875rem] font-bold uppercase tracking-[0.16em] text-primary">{{ __('home.cs_label_results') }}</p>
                            <ul class="mt-4 space-y-3 text-[0.9375rem] font-medium leading-snug text-zinc-900 sm:text-base" role="list">
                                @foreach ([1, 2, 3] as $ri)
                                    <li class="flex gap-3"><span class="mt-0.5 shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('home.cs_c'.$ci.'_r'.$ri) }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="mx-auto mt-14 flex max-w-2xl flex-col items-stretch justify-center gap-3 sm:mt-16 sm:flex-row sm:items-center sm:justify-center sm:gap-4">
                <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="inline-flex min-h-[3.25rem] flex-1 items-center justify-center rounded-full bg-accent px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.cs_cta_primary') }}</a>
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3.25rem] flex-1 items-center justify-center rounded-full border-2 border-accent bg-white px-8 py-3.5 text-center text-sm font-semibold text-primary transition hover:bg-accent/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:min-w-[12rem] sm:flex-none">{{ __('home.cs_cta_secondary') }}</a>
            </div>
        </div>
    </section>

    <section id="home-engineering" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-white" aria-labelledby="home-eng-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-14 sm:px-10 sm:py-16 lg:py-20">
            <h2 id="home-eng-heading" class="mx-auto max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-[2rem] md:leading-[1.25]">{{ __('home.eng_heading') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:mt-6 sm:text-lg sm:leading-8">{{ __('home.eng_lead') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-6 sm:mt-12 md:grid-cols-2 md:gap-6 lg:gap-8">
                @foreach ([1, 2, 3, 4] as $bi)
                    <article class="flex h-full flex-col rounded-2xl border border-[#e2e8f0] bg-white p-6 shadow-sm sm:p-7">
                        <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.eng_b'.$bi.'_title') }}</h3>
                        <p class="mt-2 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.eng_b'.$bi.'_desc') }}</p>
                        <p class="mt-5 text-[0.6875rem] font-bold uppercase tracking-[0.14em] text-accent">{{ __('home.eng_effect_label') }}</p>
                        <ul class="mt-2 space-y-2.5 text-sm leading-snug text-zinc-800" role="list">
                            @foreach ([1, 2, 3] as $ei)
                                <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('home.eng_b'.$bi.'_e'.$ei) }}</span></li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
            <div class="mx-auto mt-14 flex max-w-2xl flex-col items-stretch justify-center gap-3 sm:mt-16 sm:flex-row sm:items-center sm:justify-center sm:gap-4">
                <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="inline-flex min-h-[3.25rem] flex-1 items-center justify-center rounded-full bg-accent px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.eng_cta_primary') }}</a>
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3.25rem] flex-1 items-center justify-center rounded-full border-2 border-accent bg-white px-8 py-3.5 text-center text-sm font-semibold text-primary transition hover:bg-accent/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:min-w-[12rem] sm:flex-none">{{ __('home.eng_cta_secondary') }}</a>
            </div>
        </div>
    </section>

    <section id="home-contact-expert" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-[#f1f5f9]" aria-labelledby="home-ce-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-14 sm:px-10 sm:py-16 lg:py-20">
            <h2 id="home-ce-heading" class="mx-auto max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-[2rem] md:leading-[1.25]">{{ __('home.ce_heading') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:mt-5 sm:text-lg sm:leading-8">{{ __('home.ce_lead') }}</p>
            <p class="mx-auto mt-4 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:mt-4 sm:text-lg sm:leading-8">{{ __('home.ce_lead_2') }}</p>
            @if (session('contact_sent'))
                <div class="mx-auto mt-6 max-w-2xl rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-center text-sm text-emerald-900">{{ __('form.sent') }}</div>
            @endif
            @if (session('contact_error'))
                <div class="mx-auto mt-6 max-w-2xl rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-center text-sm text-red-900">{{ __('contact.mail_failed') }}</div>
            @endif
            <div class="mt-10 grid grid-cols-1 gap-10 lg:mt-12 lg:grid-cols-2 lg:items-start lg:gap-12 xl:gap-14">
                <div>
                    <form id="home-contact-form" class="rounded-2xl border border-[#e2e8f0] bg-white p-6 shadow-md shadow-black/5 sm:p-8" method="post" action="{{ locale_route('contact.store', ['locale' => $l]) }}" novalidate data-ce-msg-summary="{{ __('form.validation_summary') }}" data-ce-msg-required="{{ __('form.validation_required_field') }}" data-ce-msg-email-invalid="{{ __('form.validation_email_invalid') }}" data-ce-msg-privacy="{{ __('form.validation_privacy_required') }}" data-ce-msg-message-max="{{ __('form.validation_message_max') }}">
                        @csrf
                        <p id="home-ce-js-summary" class="mb-4 hidden rounded-lg border border-red-200 bg-red-50 px-3 py-2.5 text-sm leading-snug text-red-800" role="alert"></p>
                        <label class="sr-only" for="home-ce-name">{{ __('form.name') }}</label>
                        <input class="home-ce-input w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3.5 text-sm text-primary outline-none focus:border-primary focus:ring-2 focus:ring-primary/20" id="home-ce-name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name" maxlength="200" placeholder="{{ __('form.name') }}" aria-describedby="home-ce-js-err-name">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p id="home-ce-js-err-name" class="mt-1 hidden text-sm text-red-600" role="status"></p>
                        <label class="sr-only" for="home-ce-email">{{ __('form.email') }}</label>
                        <input class="home-ce-input mt-4 w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3.5 text-sm text-primary outline-none focus:border-primary focus:ring-2 focus:ring-primary/20" id="home-ce-email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('form.email') }}" aria-describedby="home-ce-js-err-email">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p id="home-ce-js-err-email" class="mt-1 hidden text-sm text-red-600" role="status"></p>
                        <label class="sr-only" for="home-ce-phone">{{ __('home.ce_placeholder_phone') }}</label>
                        <input class="home-ce-input mt-4 w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3.5 text-sm text-primary outline-none focus:border-primary focus:ring-2 focus:ring-primary/20" id="home-ce-phone" name="phone" type="tel" value="{{ old('phone') }}" autocomplete="tel" maxlength="50" placeholder="{{ __('home.ce_placeholder_phone') }}">
                        @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <label class="sr-only" for="home-ce-message">{{ __('home.ce_placeholder_message') }}</label>
                        <textarea class="home-ce-input mt-4 min-h-[8rem] w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3.5 text-sm text-primary outline-none focus:border-primary focus:ring-2 focus:ring-primary/20" id="home-ce-message" name="message" required maxlength="5000" placeholder="{{ __('home.ce_placeholder_message') }}" aria-describedby="home-ce-js-err-message">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p id="home-ce-js-err-message" class="mt-1 hidden text-sm text-red-600" role="status"></p>
                        <div class="mt-5 flex items-start gap-3">
                            <input class="home-ce-input mt-1 h-4 w-4 shrink-0 rounded border-[#cbd2d9] text-primary focus:ring-primary" id="home-ce-privacy" name="privacy_accept" type="checkbox" value="1" {{ old('privacy_accept') ? 'checked' : '' }} required aria-describedby="home-ce-js-err-privacy">
                            <label class="text-sm leading-snug text-zinc-800" for="home-ce-privacy">{{ __('home.ce_privacy_before') }} <a href="{{ locale_route('privacy', ['locale' => $l]) }}" class="font-medium text-primary underline">{{ __('footer.privacy') }}</a>.</label>
                        </div>
                        @error('privacy_accept')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p id="home-ce-js-err-privacy" class="mt-1 hidden text-sm text-red-600" role="status"></p>
                        <button class="mt-6 inline-flex min-h-[3rem] w-full items-center justify-center rounded-full bg-accent px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/20 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" type="submit">{{ __('home.ce_submit') }}</button>
                    </form>
                    <p class="mt-5 text-center text-sm font-medium text-zinc-600 sm:text-left">{{ __('home.ce_form_note') }}</p>
                    <ul class="mt-6 space-y-2.5 text-sm leading-relaxed text-zinc-700 sm:text-[0.9375rem]" role="list">
                        @foreach ([1, 2, 3, 4] as $ti)
                            <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('home.ce_trust_'.$ti) }}</span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="lg:sticky lg:top-28">
                    <div class="overflow-hidden rounded-2xl border border-[#e2e8f0] bg-gradient-to-b from-white to-[#f8fafc] p-5 shadow-md shadow-black/5 sm:p-7">
                        <div class="min-w-0">
                            @if ($homeExpertPhotoSrc)
                                <img src="{{ $homeExpertPhotoSrc }}" alt="{{ __('contact_page.expert_img_alt') }}" class="float-right ml-4 mb-3 h-40 w-40 rounded-xl object-cover object-center sm:ml-5 sm:h-48 sm:w-48" width="192" height="192" loading="lazy" decoding="async">
                            @endif
                            <h3 class="min-w-0 text-balance text-lg font-semibold leading-snug tracking-tight text-primary sm:text-xl md:text-2xl">{{ __('home.ce_expert_title') }}</h3>
                            <p class="mt-3 text-pretty text-sm leading-relaxed text-zinc-600 sm:mt-3.5 sm:text-[0.9375rem]">{{ __('home.ce_expert_p1') }}</p>
                            <p class="mt-2.5 text-pretty text-sm leading-relaxed text-zinc-600 sm:text-[0.9375rem]">{{ __('home.ce_expert_p2') }}</p>
                            <div class="clear-both"></div>
                            <div class="mt-5 rounded-xl border border-zinc-200/80 bg-white/80 px-3.5 py-3 sm:px-4 sm:py-3.5">
                                <p class="text-[0.6875rem] font-bold uppercase tracking-[0.12em] text-accent">{{ __('home.ce_experience_label') }}</p>
                                <ul class="mt-2 space-y-2 text-[0.8125rem] leading-snug text-zinc-700 sm:text-sm" role="list">
                                    @foreach ([1, 2, 3] as $ei)
                                        <li class="flex gap-2"><span class="mt-0.5 shrink-0 text-accent" aria-hidden="true">✔</span><span class="min-w-0">{{ __('home.ce_exp_'.$ei) }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <p class="mt-6 border-t border-zinc-200/70 pt-5">
                                <span class="block text-xs font-semibold uppercase tracking-wide text-zinc-500">{{ __('home.ce_call_prefix') }}</span>
                                <a href="tel:{{ __('contact.phone_href') }}" class="mt-1 inline-block text-lg font-bold tabular-nums tracking-tight text-accent underline-offset-4 transition hover:underline sm:text-xl">{{ __('contact.phone_value') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
