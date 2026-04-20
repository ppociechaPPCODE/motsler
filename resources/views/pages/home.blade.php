@extends('layouts.app')
@section('title', __('page.home'))
@section('content')
@php
    $l = app()->getLocale();
    $blog = config('app.content.blog.'.$l, config('app.content.blog.pl'));
    $host = parse_url((string) config('app.url'), PHP_URL_HOST) ?: request()->getHost();
    $homeHeroVideoEmbed = 'https://www.youtube.com/embed/lvkEzHiBAoo?autoplay=1&mute=1&loop=1&playlist=lvkEzHiBAoo&controls=0&rel=0&modestbranding=1&playsinline=1';
    $homeHeroPoster = 'https://i.ytimg.com/vi/lvkEzHiBAoo/maxresdefault.jpg';
    $homeDpfTechUrl = locale_route('offer.dpf', ['locale' => $l]).'#offer-dpf-tech';
    $homeDpfModelsUrl = locale_route('offer.dpf', ['locale' => $l]).'#offer-dpf-modele';
    $homeModelCardImg = asset('media/wp-uploads/2024/12/slr-premium_300px.png');
    $homeContactOfferUrl = locale_route('contact', ['locale' => $l]);
    $homeSebastianPhotoExists = file_exists(public_path('images/offer/sebastian-tkacz.jpg'));
    $homeModelInquiries = ['slr-premium', 'slr-premium-plus', 'slr-premium-dual'];
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
            <div class="relative z-[2] flex min-h-[100vh] w-full items-center px-5 py-12 sm:px-8 sm:py-14 lg:px-14">
                <div class="w-full max-w-[600px] text-left">
                    <h1 class="home-hero-reveal home-hero-reveal-d1 text-balance text-2xl font-bold leading-[1.12] tracking-tight text-white drop-shadow-[0_2px_12px_rgba(0,0,0,.45)] sm:text-3xl md:text-4xl">Producent maszyn przemysłowych i urządzeń dla warsztatów samochodowych</h1>
                    <h2 class="home-hero-reveal home-hero-reveal-d2 mt-4 text-balance text-base font-semibold leading-snug text-white/95 sm:text-lg md:text-xl">Projektujemy i budujemy maszyny do czyszczenia, regeneracji i automatyzacji procesów w motoryzacji i przemyśle</h2>
                    <p class="home-hero-reveal home-hero-reveal-d3 mt-4 text-pretty text-sm font-medium leading-relaxed text-white/95 sm:text-base md:text-[1.0625rem]">Dostarczamy rozwiązania dla warsztatów samochodowych, punktów regeneracji oraz firm przemysłowych. Specjalizujemy się w maszynach do DPF, myjkach warsztatowych, systemach czyszczenia oraz urządzeniach automatyzujących procesy techniczne.</p>
                    <ul class="home-hero-reveal home-hero-reveal-d4 mt-6 list-none space-y-2.5 p-0 text-sm leading-snug text-white sm:text-[0.9375rem]" role="list">
                        <li class="flex gap-2.5"><span class="shrink-0 text-emerald-400" aria-hidden="true">✔</span><span>Maszyny dla warsztatów, przemysłu i flot pojazdów</span></li>
                        <li class="flex gap-2.5"><span class="shrink-0 text-emerald-400" aria-hidden="true">✔</span><span>Automatyzacja procesów i redukcja kosztów pracy</span></li>
                        <li class="flex gap-2.5"><span class="shrink-0 text-emerald-400" aria-hidden="true">✔</span><span>Produkcja i wdrożenia w Polsce i Europie</span></li>
                    </ul>
                    <div class="home-hero-reveal home-hero-reveal-d5 mt-8 flex w-full flex-col gap-3 sm:flex-row sm:flex-wrap sm:gap-3">
                        <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="btn btn-primary inline-flex min-h-[3rem] w-full flex-1 items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/25 transition hover:bg-accent/88 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:min-w-0 sm:flex-1">Zobacz maszyny</a>
                        <a href="{{ $homeContactOfferUrl }}" class="btn btn-outline inline-flex min-h-[3rem] w-full flex-1 items-center justify-center rounded-full border-2 border-white bg-transparent px-6 py-3.5 text-center text-sm font-semibold text-white transition hover:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:min-w-0 sm:flex-1">Porozmawiaj z ekspertem</a>
                    </div>
                    <ul class="home-hero-reveal home-hero-reveal-d6 mt-8 list-none space-y-2 p-0 text-xs leading-snug text-white/75 sm:text-sm" role="list">
                        <li class="flex gap-2.5"><span class="shrink-0 text-white/80" aria-hidden="true">✔</span><span>1000+ przeszkolonych operatorów</span></li>
                        <li class="flex gap-2.5"><span class="shrink-0 text-white/80" aria-hidden="true">✔</span><span>wdrożenia w Europie</span></li>
                        <li class="flex gap-2.5"><span class="shrink-0 text-white/80" aria-hidden="true">✔</span><span>produkcja premium w Polsce</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="home-areas" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-white" aria-labelledby="home-areas-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-10 sm:py-16">
            <p class="text-center text-xs font-bold uppercase tracking-[0.2em] text-accent sm:text-sm">{{ __('home.areas_kicker') }}</p>
            <h2 id="home-areas-heading" class="mx-auto mt-3 max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-4xl">{{ __('home.areas_title') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:text-lg sm:leading-8">{{ __('home.areas_lead') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 lg:mt-12 lg:grid-cols-4 lg:gap-6">
                <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="group flex h-full min-h-0 flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.areas_c1_title') }}</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.areas_c1_text') }}</p>
                    <span class="mt-8 inline-flex items-center gap-1.5 text-sm font-semibold text-accent group-hover:underline">{{ __('home.areas_link_solutions') }} <span aria-hidden="true">→</span></span>
                </a>
                <a href="{{ locale_route('solutions.custom_machines', ['locale' => $l]) }}" class="group flex h-full min-h-0 flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.areas_c2_title') }}</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.areas_c2_text') }}</p>
                    <span class="mt-8 inline-flex items-center gap-1.5 text-sm font-semibold text-accent group-hover:underline">{{ __('home.areas_link_solutions') }} <span aria-hidden="true">→</span></span>
                </a>
                <a href="{{ locale_route('solutions.new_products', ['locale' => $l]) }}" class="group flex h-full min-h-0 flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.areas_c3_title') }}</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.areas_c3_text') }}</p>
                    <span class="mt-8 inline-flex items-center gap-1.5 text-sm font-semibold text-accent group-hover:underline">{{ __('home.areas_link_solutions') }} <span aria-hidden="true">→</span></span>
                </a>
                <a href="{{ locale_route('solutions.chemia', ['locale' => $l]) }}" class="group flex h-full min-h-0 flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-lg hover:shadow-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:p-7">
                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.areas_c4_title') }}</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.areas_c4_text') }}</p>
                    <span class="mt-8 inline-flex items-center gap-1.5 text-sm font-semibold text-accent group-hover:underline">{{ __('home.areas_link_products') }} <span aria-hidden="true">→</span></span>
                </a>
            </div>
            <div class="mx-auto mt-14 flex justify-center sm:mt-16">
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3rem] items-center justify-center rounded-full bg-accent px-10 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-h-[3.5rem] sm:text-base">{{ __('nav.consultation') }}</a>
            </div>
        </div>
    </section>

    <section id="home-sws-pfs" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-[#eef2f6]" aria-labelledby="home-sws-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-10 sm:py-16 lg:py-20">
            <div class="grid grid-cols-1 items-start gap-10 lg:grid-cols-2 lg:gap-14 xl:gap-16">
                <div class="order-1 min-w-0">
                    <p class="inline-flex rounded-full border border-zinc-300/80 bg-white/90 px-3 py-1 text-xs font-bold uppercase tracking-[0.12em] text-primary shadow-sm sm:text-sm">{{ __('home.sws_badge') }}</p>
                    <h2 id="home-sws-heading" class="mt-4 text-balance text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-[2rem] md:leading-[1.2]">{{ __('home.sws_title') }}</h2>
                    <p class="mt-5 text-pretty text-base leading-7 text-zinc-600 sm:text-lg sm:leading-8">{{ __('home.sws_lead') }}</p>
                    <div class="mt-8 space-y-5 sm:mt-10 sm:space-y-6">
                        <div class="rounded-2xl border border-white/80 bg-white p-5 shadow-[0_1px_0_0_rgba(15,23,42,.06)] sm:p-6">
                            <div class="flex items-start gap-2.5 sm:gap-3">
                                <span class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-[#244396]/12 text-[#244396]" title="{{ __('offer_dpf.models_tip_sws') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 7H8M8 7l2.25-2.25M8 7l2.25 2.25"/><path d="M8 17h8M16 17l-2.25-2.25M16 17l-2.25 2.25"/></svg>
                                </span>
                                <div class="min-w-0 flex-1">
                                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.sws_sws_heading') }}</h3>
                                </div>
                            </div>
                            <p class="mt-3 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.sws_sws_desc') }}</p>
                            <ul class="mt-4 space-y-2.5 text-sm leading-snug text-zinc-700 sm:text-[0.9375rem]" role="list">
                                @foreach ([1, 2, 3, 4] as $bi)
                                    <li class="flex gap-2.5"><span class="shrink-0 text-emerald-600" aria-hidden="true">✔</span><span>{{ __('home.sws_sws_b'.$bi) }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="rounded-2xl border border-white/80 bg-white p-5 shadow-[0_1px_0_0_rgba(15,23,42,.06)] sm:p-6">
                            <div class="flex items-start gap-2.5 sm:gap-3">
                                <span class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-[#244396]/12 text-[#244396]" title="{{ __('offer_dpf.models_tip_pfs') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" aria-hidden="true"><path d="M12 2.5c-3.5 4.5-7 8.2-7 11.5a7 7 0 1014 0c0-3.3-3.5-7-7-11.5zM8 18h8v2H8v-2z"/></svg>
                                </span>
                                <div class="min-w-0 flex-1">
                                    <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.sws_pfs_heading') }}</h3>
                                </div>
                            </div>
                            <p class="mt-3 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.sws_pfs_desc') }}</p>
                            <ul class="mt-4 space-y-2.5 text-sm leading-snug text-zinc-700 sm:text-[0.9375rem]" role="list">
                                @foreach ([1, 2, 3, 4] as $bi)
                                    <li class="flex gap-2.5"><span class="shrink-0 text-sky-600" aria-hidden="true">✔</span><span>{{ __('home.sws_pfs_b'.$bi) }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="mt-14 flex w-full flex-col gap-3 sm:mt-16 sm:flex-row sm:flex-wrap">
                        <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full bg-accent px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/20 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.sws_cta_primary') }}</a>
                        <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full border-2 border-primary bg-white px-8 py-3.5 text-center text-sm font-semibold text-primary transition hover:bg-zinc-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.sws_cta_secondary') }}</a>
                    </div>
                    <ul class="mt-8 space-y-2 border-t border-zinc-300/60 pt-6 text-xs leading-snug text-zinc-600 sm:mt-10 sm:text-sm" role="list">
                        @foreach ([1, 2, 3] as $ti)
                            <li class="flex gap-2.5"><span class="shrink-0 text-zinc-500" aria-hidden="true">✔</span><span>{{ __('home.sws_trust'.$ti) }}</span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="order-2 lg:sticky lg:top-28">
                    <figure class="relative mx-auto w-full max-w-lg lg:max-w-none">
                        <div class="absolute -inset-1 -z-10 rounded-[24px] bg-gradient-to-br from-white via-[#eef2f6] to-zinc-200/90 sm:-inset-2 sm:rounded-[28px]"></div>
                        <div class="overflow-hidden rounded-[20px] ring-1 ring-zinc-200/90 shadow-[0_28px_70px_-28px_rgba(15,23,42,0.35)] sm:rounded-[22px]">
                            <img src="{{ asset('images/offer/lewy_bok.png') }}" alt="{{ __('home.sws_image_alt') }}" class="h-auto w-full object-cover object-center" width="1247" height="1020" loading="lazy" decoding="async">
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="home-models" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-[#f8fafc]" aria-labelledby="home-models-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-10 sm:py-16 lg:py-20">
            <h2 id="home-models-heading" class="mx-auto max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-[2rem] md:leading-[1.25]">{{ __('home.models_heading') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:mt-6 sm:text-lg sm:leading-8">{{ __('home.models_lead') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:mt-12 lg:grid-cols-3 lg:gap-8">
                @foreach ([1, 2, 3] as $mi)
                    <article class="flex h-full flex-col rounded-2xl border-2 border-zinc-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-zinc-300 hover:shadow-xl hover:shadow-zinc-900/10 sm:p-7">
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
                                @foreach ([1, 2, 3, 4] as $ti)
                                    <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('home.models_m'.$mi.'_tech'.$ti) }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mt-auto shrink-0 pt-10 sm:pt-12">
                            <a href="{{ locale_route('contact', ['locale' => $l]) }}?inquiry={{ $homeModelInquiries[$mi - 1] }}#contact-form" class="inline-flex min-h-[3rem] w-full items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/10 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ __('offer_dpf.s8_cta_quote') }}</a>
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
                <div class="pointer-events-none absolute left-[6%] right-[6%] top-[2.125rem] h-px bg-zinc-300" aria-hidden="true"></div>
                <ol class="relative m-0 grid list-none grid-cols-5 gap-4 p-0 text-center" role="list">
                    @foreach ([1, 2, 3, 4, 5] as $step)
                        <li class="flex flex-col items-center px-1">
                            <span class="relative z-[1] mb-4 inline-flex h-9 min-w-[2.25rem] items-center justify-center bg-white font-mono text-xs font-semibold tabular-nums text-primary ring-1 ring-zinc-200">{{ sprintf('%02d', $step) }}</span>
                            <h3 class="text-sm font-semibold leading-snug text-primary">{{ __('home.proc_step_'.$step.'_title') }}</h3>
                            <p class="mt-3 text-left text-xs leading-relaxed text-zinc-600 lg:text-center">{{ __('home.proc_step_'.$step.'_desc') }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>

            <ol class="mt-12 divide-y divide-zinc-200 border-t border-zinc-200 lg:hidden" role="list">
                @foreach ([1, 2, 3, 4, 5] as $step)
                    <li class="flex gap-4 py-8 first:pt-8 last:pb-0 sm:gap-5">
                        <span class="w-10 shrink-0 pt-0.5 font-mono text-sm font-semibold tabular-nums text-zinc-500">{{ sprintf('%02d', $step) }}</span>
                        <div class="min-w-0 flex-1">
                            <h3 class="text-base font-semibold text-primary">{{ __('home.proc_step_'.$step.'_title') }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-zinc-600">{{ __('home.proc_step_'.$step.'_desc') }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>

            <div class="mx-auto mt-14 flex max-w-2xl flex-col items-stretch justify-center gap-3 sm:mt-16 sm:flex-row sm:items-center sm:justify-center sm:gap-4">
                <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full bg-accent px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.sws_cta_primary') }}</a>
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full border-2 border-primary bg-white px-8 py-3.5 text-center text-sm font-semibold text-primary transition hover:bg-zinc-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.proc_cta_secondary') }}</a>
            </div>
        </div>
    </section>

    <section id="home-roi" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-[#f8fafc]" aria-labelledby="home-roi-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-10 sm:py-16 lg:py-20">
            <h2 id="home-roi-heading" class="mx-auto max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-[2rem] md:leading-[1.25]">{{ __('home.roi_heading') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:mt-6 sm:text-lg sm:leading-8">{{ __('home.roi_lead') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-6 md:grid-cols-2 lg:mt-12 lg:grid-cols-3 lg:gap-8">
                @foreach ([1, 2, 3] as $ci)
                    <article class="flex h-full flex-col rounded-2xl border border-[#e2e8f0] bg-white p-6 shadow-sm sm:p-7">
                        <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.roi_c'.$ci.'_title') }}</h3>
                        <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.roi_c'.$ci.'_desc') }}</p>
                        <p class="mt-6 text-xs font-bold uppercase tracking-wide text-zinc-500">{{ __('home.roi_effects_label') }}</p>
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
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full border-2 border-primary bg-white px-8 py-3.5 text-center text-sm font-semibold text-primary transition hover:bg-zinc-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.sws_cta_secondary') }}</a>
            </div>
        </div>
    </section>

    <section id="home-cases" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-white" aria-labelledby="home-cases-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-10 sm:py-16 lg:py-20">
            <h2 id="home-cases-heading" class="mx-auto max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-[2rem] md:leading-[1.25]">{{ __('home.cs_heading') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:mt-6 sm:text-lg sm:leading-8">{{ __('home.cs_lead') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-8 lg:mt-12 lg:grid-cols-3 lg:gap-8">
                @foreach ([1, 2, 3] as $ci)
                    <article class="flex h-full flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm sm:p-8">
                        <h3 class="text-lg font-bold leading-snug text-primary sm:text-xl">{{ __('home.cs_c'.$ci.'_title') }}</h3>
                        <div class="mt-5 flex flex-1 flex-col gap-5 text-sm leading-relaxed text-zinc-700">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-wide text-zinc-500">{{ __('home.cs_label_context') }}</p>
                                <p class="mt-1.5 text-pretty">{{ __('home.cs_c'.$ci.'_context') }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-wide text-zinc-500">{{ __('home.cs_label_problem') }}</p>
                                <p class="mt-1.5 text-pretty">{{ __('home.cs_c'.$ci.'_problem') }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-wide text-zinc-500">{{ __('home.cs_label_solution') }}</p>
                                <p class="mt-1.5 text-pretty font-medium text-primary">{{ __('home.cs_c'.$ci.'_solution') }}</p>
                            </div>
                        </div>
                        <div class="mt-6 border-t border-[#e2e8f0] pt-6">
                            <p class="text-xs font-bold uppercase tracking-wide text-primary">{{ __('home.cs_label_results') }}</p>
                            <ul class="mt-3 space-y-2.5 text-sm leading-snug text-zinc-800" role="list">
                                @foreach ([1, 2, 3] as $ri)
                                    <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('home.cs_c'.$ci.'_r'.$ri) }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="mx-auto mt-12 flex max-w-2xl flex-col items-stretch justify-center gap-3 sm:mt-14 sm:flex-row sm:items-center sm:justify-center sm:gap-4">
                <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full bg-accent px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.sws_cta_primary') }}</a>
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full border-2 border-primary bg-white px-8 py-3.5 text-center text-sm font-semibold text-primary transition hover:bg-zinc-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.sws_cta_secondary') }}</a>
            </div>
        </div>
    </section>

    <section id="home-engineering" class="scroll-mt-24 w-full border-t border-[#e2e8f0] bg-white" aria-labelledby="home-eng-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-10 sm:py-16 lg:py-20">
            <h2 id="home-eng-heading" class="mx-auto max-w-[52rem] text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl md:text-[2rem] md:leading-[1.25]">{{ __('home.eng_heading') }}</h2>
            <p class="mx-auto mt-5 max-w-[52rem] text-pretty text-center text-base leading-7 text-zinc-600 sm:mt-6 sm:text-lg sm:leading-8">{{ __('home.eng_lead') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-6 sm:mt-12 md:grid-cols-2 md:gap-7 lg:gap-8">
                @foreach ([1, 2, 3, 4] as $bi)
                    <article class="flex h-full flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm sm:p-7">
                        <h3 class="text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('home.eng_b'.$bi.'_title') }}</h3>
                        <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-zinc-600 sm:text-[0.9375rem]">{{ __('home.eng_b'.$bi.'_desc') }}</p>
                        <p class="mt-6 text-xs font-bold uppercase tracking-[0.14em] text-zinc-500">{{ __('home.eng_effect_label') }}</p>
                        <ul class="mt-3 space-y-2.5 text-sm leading-snug text-zinc-800" role="list">
                            @foreach ([1, 2, 3] as $ei)
                                <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('home.eng_b'.$bi.'_e'.$ei) }}</span></li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
            <div class="mx-auto mt-12 flex max-w-2xl flex-col items-stretch justify-center gap-3 sm:mt-14 sm:flex-row sm:items-center sm:justify-center sm:gap-4">
                <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full bg-accent px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md shadow-black/15 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.sws_cta_primary') }}</a>
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full border-2 border-primary bg-white px-8 py-3.5 text-center text-sm font-semibold text-primary transition hover:bg-zinc-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:min-w-[12rem] sm:flex-none">{{ __('home.proc_cta_secondary') }}</a>
            </div>
        </div>
    </section>

</div>
@endsection
