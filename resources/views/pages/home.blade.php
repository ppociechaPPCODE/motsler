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
@endphp

<div class="space-y-0">
    <section id="home-hero" class="scroll-mt-24 overflow-hidden text-white" aria-label="Hero">
        <div class="relative min-h-[100dvh] w-full overflow-hidden md:min-h-[calc(100dvh-5.25rem)]">
            <div class="absolute inset-0 overflow-hidden" aria-hidden="true">
                <img src="{{ $homeHeroPoster }}" alt="Maszyna do czyszczenia filtrów DPF – Motsler" width="1280" height="720" class="h-full w-full object-cover md:hidden" fetchpriority="high" decoding="async">
                <iframe
                    class="pointer-events-none absolute left-1/2 top-1/2 hidden h-[56.25vw] min-h-[125%] w-[177.77vh] min-w-[125%] -translate-x-1/2 -translate-y-1/2 border-0 md:block"
                    src="{{ $homeHeroVideoEmbed }}"
                    title="Film prezentacyjny maszyny do czyszczenia filtrów DPF Motsler"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                ></iframe>
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-[#001348]/90 via-[#001348]/82 to-[#001348]/92" aria-hidden="true"></div>
            <div class="relative z-10 mx-auto flex min-h-[100dvh] w-full max-w-[1200px] flex-col justify-start px-5 pb-14 pt-10 sm:px-8 md:min-h-[calc(100dvh-5.25rem)] md:py-12 lg:justify-center lg:px-14">
                <div class="grid w-full flex-1 grid-cols-1 items-start gap-8 lg:grid-cols-5 lg:items-center lg:gap-10">
                    <div class="order-1 flex flex-col justify-start lg:order-none lg:col-span-3 lg:max-w-none">
                        <h1 class="home-hero-reveal home-hero-reveal-d1 max-w-[22ch] text-balance text-2xl font-bold leading-[1.12] tracking-tight sm:max-w-[28ch] sm:text-3xl md:text-4xl lg:text-[2.35rem] xl:text-4xl">Producent maszyn dla motoryzacji i przemysłu – Motsler</h1>
                        <p class="home-hero-reveal home-hero-reveal-d2 mt-5 max-w-xl text-pretty text-sm font-medium leading-snug text-white sm:text-lg md:max-w-2xl md:text-xl">Projektujemy maszyny do czyszczenia filtrów DPF i tworzymy rozwiązania, które zwiększają wydajność warsztatów oraz zakładów przemysłowych.</p>
                        <p class="home-hero-reveal home-hero-reveal-d2 mt-4 flex flex-wrap items-center gap-x-3 gap-y-1 text-sm text-white/95 sm:text-base"><span class="inline-flex items-center gap-1"><span aria-hidden="true">✔</span> Szybciej.</span> <span class="inline-flex items-center gap-1"><span aria-hidden="true">✔</span> Prościej.</span> <span class="inline-flex items-center gap-1"><span aria-hidden="true">✔</span> Bardziej opłacalnie.</span></p>
                        <div class="home-hero-reveal home-hero-reveal-d3 mt-8 flex w-full max-w-md flex-col gap-3 sm:max-w-lg lg:max-w-none lg:flex-row lg:flex-wrap lg:gap-2.5">
                            <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="btn btn-primary inline-flex min-h-[3rem] w-full items-center justify-center rounded-full bg-[#ffad03] px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-[#001348] shadow-lg shadow-black/25 transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white lg:min-h-0 lg:w-auto lg:px-5 lg:py-2.5 lg:text-xs lg:shadow-md">Zobacz maszyny do DPF</a>
                            <a href="#contact" class="btn btn-outline inline-flex min-h-[3rem] w-full items-center justify-center rounded-full border-2 border-white bg-transparent px-8 py-3.5 text-center text-sm font-semibold text-white transition hover:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white lg:min-h-0 lg:w-auto lg:px-5 lg:py-2.5 lg:text-xs">Poproś o ofertę</a>
                        </div>
                        <ul class="hero-benefits home-hero-reveal home-hero-reveal-d4 mt-8 flex max-w-3xl list-none flex-col gap-3 p-0 text-sm leading-snug text-white/95 sm:text-[0.9375rem] md:flex-row md:flex-wrap md:gap-x-6 md:gap-y-2" role="list">
                            <li class="flex items-start gap-2"><span aria-hidden="true" class="shrink-0 text-emerald-300">✔</span> System SWS – bez przepinania filtra między etapami</li>
                            <li class="flex items-start gap-2"><span aria-hidden="true" class="shrink-0 text-emerald-300">✔</span> Automatyzacja procesu</li>
                            <li class="flex items-start gap-2"><span aria-hidden="true" class="shrink-0 text-emerald-300">✔</span> Wyższa wydajność i szybszy zwrot inwestycji</li>
                        </ul>
                    </div>
                    <div class="order-2 hidden min-h-[12rem] lg:order-none lg:col-span-2 lg:block lg:min-h-0" aria-hidden="true"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-solutions" class="scroll-mt-24 border-t border-[#e8eef4] bg-[#f8fafc] px-5 py-12 sm:px-8 sm:py-14 lg:px-14" aria-labelledby="home-solutions-heading">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 id="home-solutions-heading" class="text-center text-xl font-semibold leading-tight tracking-tight text-[#001348] text-balance sm:text-2xl md:text-[1.375rem] lg:text-[1.75rem] xl:text-[2rem]">Nasze rozwiązania dla motoryzacji i przemysłu</h2>
            <div class="-mx-5 mt-10 flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth scroll-pl-5 scroll-pr-5 px-5 pb-1 [scrollbar-width:none] [-ms-overflow-style:none] md:mx-0 md:mt-12 md:grid md:grid-cols-2 md:gap-6 md:overflow-visible md:px-0 md:pb-0 md:snap-none lg:grid-cols-4 lg:items-stretch lg:gap-6 [&::-webkit-scrollbar]:hidden">
                <article class="product-card group flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_16px_40px_-28px_rgba(36,67,150,.2)] transition-[box-shadow,transform] duration-300 hover:-translate-y-0.5 hover:shadow-[0_24px_48px_-24px_rgba(36,67,150,.28)] sm:max-w-[24rem] md:max-w-none md:w-auto">
                    <div class="relative aspect-[4/3] overflow-hidden bg-[#edf2f7]">
                        <img src="{{ asset('media/wp-uploads/2024/12/slr-premium_300px.png') }}" alt="Maszyny do czyszczenia filtrów DPF Motsler" width="480" height="360" class="h-full w-full object-contain object-center transition duration-500 ease-out group-hover:scale-105" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-5 sm:p-6">
                        <h3 class="text-lg font-semibold leading-snug text-[#001348] sm:text-xl">Maszyny do czyszczenia DPF</h3>
                        <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">Profesjonalne <strong class="font-semibold text-[#001348]">maszyny do czyszczenia DPF</strong> oraz <strong class="font-semibold text-[#001348]">regeneracja filtrów DPF</strong>, FAP i GPF – szybciej, skuteczniej i bezpieczniej.</p>
                        <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="btn btn-primary mt-5 inline-flex min-h-[2.75rem] w-full items-center justify-center gap-2 rounded-full bg-[#ffad03] px-5 py-2.5 text-center text-xs font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:text-sm">Zobacz maszyny<span class="transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">→</span></a>
                    </div>
                </article>
                <article class="product-card group flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_16px_40px_-28px_rgba(36,67,150,.2)] transition-[box-shadow,transform] duration-300 hover:-translate-y-0.5 hover:shadow-[0_24px_48px_-24px_rgba(36,67,150,.28)] sm:max-w-[24rem] md:max-w-none md:w-auto">
                    <div class="relative aspect-[4/3] overflow-hidden bg-[#edf2f7]">
                        <img src="{{ asset('media/wp-uploads/2025/07/20250718_165157a-768x1024.jpg') }}" alt="Środki chemiczne dla przemysłu i motoryzacji Motsler" width="768" height="1024" class="h-full w-full object-cover object-center transition duration-500 ease-out group-hover:scale-105" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-5 sm:p-6">
                        <h3 class="text-lg font-semibold leading-snug text-[#001348] sm:text-xl">Chemia dla przemysłu i warsztatów</h3>
                        <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-[#003174] sm:text-[0.9375rem]"><strong class="font-semibold text-[#001348]">Chemia przemysłowa</strong> i <strong class="font-semibold text-[#001348]">środki chemiczne do warsztatów</strong> – skuteczne produkty do czyszczenia i wsparcia procesów technologicznych w motoryzacji i przemyśle.</p>
                        <a href="{{ locale_route('solutions.chemia', ['locale' => $l]) }}" class="btn btn-primary mt-5 inline-flex min-h-[2.75rem] w-full items-center justify-center gap-2 rounded-full bg-[#ffad03] px-5 py-2.5 text-center text-xs font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:text-sm">Zobacz ofertę<span class="transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">→</span></a>
                    </div>
                </article>
                <article class="product-card group flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_16px_40px_-28px_rgba(36,67,150,.2)] transition-[box-shadow,transform] duration-300 hover:-translate-y-0.5 hover:shadow-[0_24px_48px_-24px_rgba(36,67,150,.28)] sm:max-w-[24rem] md:max-w-none md:w-auto">
                    <div class="relative aspect-[4/3] overflow-hidden bg-[#edf2f7]">
                        <img src="{{ asset('media/wp-uploads/2024/12/produkcja_motsler3.png') }}" alt="Produkcja maszyn przemysłowych Motsler" width="640" height="480" class="h-full w-full object-contain object-center transition duration-500 ease-out group-hover:scale-105" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-5 sm:p-6">
                        <h3 class="text-lg font-semibold leading-snug text-[#001348] sm:text-xl">Projektowanie i produkcja maszyn</h3>
                        <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-[#003174] sm:text-[0.9375rem]"><strong class="font-semibold text-[#001348]">Produkcja maszyn przemysłowych</strong> i <strong class="font-semibold text-[#001348]">maszyny na zamówienie</strong> – od koncepcji po urządzenie dopasowane do Twoich procesów.</p>
                        <a href="{{ locale_route('solutions.custom_machines', ['locale' => $l]) }}" class="btn btn-primary mt-5 inline-flex min-h-[2.75rem] w-full items-center justify-center gap-2 rounded-full bg-[#ffad03] px-5 py-2.5 text-center text-xs font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:text-sm">Dowiedz się więcej<span class="transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">→</span></a>
                    </div>
                </article>
                <article class="product-card group relative flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_16px_40px_-28px_rgba(36,67,150,.2)] transition-[box-shadow,transform] duration-300 hover:-translate-y-0.5 hover:shadow-[0_24px_48px_-24px_rgba(36,67,150,.28)] sm:max-w-[24rem] md:max-w-none md:w-auto">
                    <span class="absolute right-3 top-3 z-10 rounded-full bg-[#ffad03] px-3 py-1 text-[0.6875rem] font-bold uppercase tracking-wide text-[#001348] shadow-md">Wkrótce</span>
                    <div class="relative aspect-[4/3] overflow-hidden bg-[#edf2f7]">
                        <img src="{{ asset('media/wp-uploads/2024/12/myjka.png') }}" alt="Nowe maszyny Motsler – myjki, piaskarki, ultradźwięki" width="480" height="360" class="h-full w-full object-contain object-center transition duration-500 ease-out group-hover:scale-105" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-5 sm:p-6">
                        <h3 class="text-lg font-semibold leading-snug text-[#001348] sm:text-xl">Nowe linie produktowe</h3>
                        <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">Rozwijamy ofertę o <strong class="font-semibold text-[#001348]">myjki ciśnieniowe</strong>, <strong class="font-semibold text-[#001348]">piaskarki</strong> oraz <strong class="font-semibold text-[#001348]">myjki ultradźwiękowe</strong> – już wkrótce dostępne.</p>
                        <a href="{{ locale_route('solutions.new_products', ['locale' => $l]) }}" rel="nofollow" class="btn btn-primary mt-5 inline-flex min-h-[2.75rem] w-full items-center justify-center gap-2 rounded-full bg-[#ffad03] px-5 py-2.5 text-center text-xs font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:text-sm">Zobacz więcej<span class="transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">→</span></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="technologie-motsler" class="scroll-mt-24 border-t border-[#e8eef4] bg-gradient-to-b from-white via-[#fafbfc] to-[#eef2f7] px-5 py-16 sm:px-8 sm:py-20 lg:px-14" aria-labelledby="technologie-motsler-heading">
        <div class="mx-auto w-full max-w-[1200px]">
            <div class="tech-motsler-reveal tech-motsler-reveal-d0 w-full text-center">
                <h2 id="technologie-motsler-heading" class="text-xl font-semibold leading-tight tracking-tight text-[#001348] text-balance sm:text-2xl md:text-[1.375rem] lg:text-[1.75rem] xl:text-[2rem]">Technologie, które wyznaczają standard regeneracji filtrów DPF</h2>
                <p class="mt-5 text-pretty text-base leading-7 text-[#475569] sm:text-[1.0625rem]">Maszyny Motsler zostały zaprojektowane z myślą o maksymalnej skuteczności, bezpieczeństwie i wygodzie obsługi. Dzięki autorskim rozwiązaniom technologicznym zapewniamy wydajność i powtarzalność procesów, której nie dają standardowe urządzenia dostępne na rynku.</p>
            </div>
            <div class="-mx-5 mt-12 flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth scroll-pl-5 scroll-pr-5 px-5 pb-2 [scrollbar-width:none] [-ms-overflow-style:none] md:mx-0 md:grid md:grid-cols-3 md:gap-6 md:overflow-visible md:px-0 md:pb-0 md:snap-none lg:grid-cols-5 lg:items-stretch lg:gap-5 [&::-webkit-scrollbar]:hidden">
                <a href="{{ $homeDpfTechUrl }}" class="tech-card tech-motsler-reveal tech-motsler-reveal-d1 group flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_14px_36px_-26px_rgba(36,67,150,.22)] transition-[box-shadow,transform] duration-300 ease-out hover:-translate-y-1 hover:shadow-[0_22px_44px_-22px_rgba(36,67,150,.3)] sm:max-w-[24rem] md:max-w-none md:w-auto">
                    <div class="relative aspect-[5/4] overflow-hidden bg-[#edf2f7]">
                        <img src="{{ asset('images/offer/lewy_bok.png') }}" alt="System SWS Motsler – pełna regeneracja filtra DPF" width="1247" height="1020" class="h-full w-full object-contain object-center transition duration-500 ease-out group-hover:scale-105 group-hover:translate-x-0.5" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-4 sm:p-5">
                        <p class="mb-2 mx-auto inline-flex w-fit items-center gap-1 rounded-full bg-[#244396]/12 px-2.5 py-1 text-[0.6875rem] font-bold uppercase tracking-wide text-[#244396]"><span aria-hidden="true">✔</span> SWS</p>
                        <h3 class="text-base font-semibold leading-snug text-[#001348] sm:text-lg">System SWS – pełna regeneracja w jednym cyklu</h3>
                        <p class="mt-2 flex-1 text-pretty text-sm leading-6 text-[#003174]"><strong class="font-semibold text-[#001348]">System SWS</strong> eliminuje konieczność przepinania filtra przy <strong class="font-semibold text-[#001348]">czyszczeniu DPF</strong> między etapami czyszczenia i suszenia.</p>
                        <p class="benefit mt-3 border-l-[3px] border-[#ffad03] bg-[#fffbeb] px-3 py-2 text-xs font-medium leading-snug text-[#5c4a1a]">Oszczędność czasu, brak ryzyka błędów operatora, proces prosty i powtarzalny.</p>
                        <p class="tooltip mt-3 border-t border-[#e2e8f0] pt-3 text-xs italic leading-snug text-[#64748b]">Jedno podłączenie – pełny cykl regeneracji filtra DPF.</p>
                    </div>
                </a>
                <a href="{{ $homeDpfTechUrl }}" class="tech-card tech-motsler-reveal tech-motsler-reveal-d2 group flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_14px_36px_-26px_rgba(36,67,150,.22)] transition-[box-shadow,transform] duration-300 ease-out hover:-translate-y-1 hover:shadow-[0_22px_44px_-22px_rgba(36,67,150,.3)] sm:max-w-[24rem] md:max-w-none md:w-auto">
                    <div class="relative aspect-[5/4] overflow-hidden bg-[#edf2f7]">
                        <img src="{{ asset('media/wp-uploads/2024/09/1T5A9192AB-1.png') }}" alt="Zaawansowany system filtracji wody Motsler" width="800" height="600" class="h-full w-full object-contain object-center transition duration-500 ease-out group-hover:scale-105 group-hover:translate-x-0.5" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-4 sm:p-5">
                        <p class="mb-2 mx-auto inline-flex w-fit items-center gap-1 rounded-full bg-[#244396]/12 px-2.5 py-1 text-[0.6875rem] font-bold uppercase tracking-wide text-[#244396]"><span aria-hidden="true">✔</span> Filtracja</p>
                        <h3 class="text-base font-semibold leading-snug text-[#001348] sm:text-lg">Zaawansowany system filtracji wody</h3>
                        <p class="mt-2 flex-1 text-pretty text-sm leading-6 text-[#003174]">Wieloetapowy <strong class="font-semibold text-[#001348]">system filtracji DPF</strong> usuwa zanieczyszczenia i pozwala na ponowne wykorzystanie medium.</p>
                        <p class="benefit mt-3 border-l-[3px] border-[#ffad03] bg-[#fffbeb] px-3 py-2 text-xs font-medium leading-snug text-[#5c4a1a]">Niższe koszty eksploatacji, stabilna jakość czyszczenia, ekologiczne rozwiązanie – realna <strong class="font-semibold text-[#5c4a1a]">oszczędność kosztów czyszczenia</strong>.</p>
                        <p class="tech-data mt-3 border-t border-[#e2e8f0] pt-3 text-xs font-medium leading-snug text-[#475569]">Powierzchnia filtracji 4,8&nbsp;m², obsługuje ok.&nbsp;100 filtrów DPF przed wymianą.</p>
                    </div>
                </a>
                <a href="{{ $homeDpfTechUrl }}" class="tech-card tech-motsler-reveal tech-motsler-reveal-d3 group flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_14px_36px_-26px_rgba(36,67,150,.22)] transition-[box-shadow,transform] duration-300 ease-out hover:-translate-y-1 hover:shadow-[0_22px_44px_-22px_rgba(36,67,150,.3)] sm:max-w-[24rem] md:max-w-none md:w-auto">
                    <div class="relative aspect-[5/4] overflow-hidden bg-[#edf2f7]">
                        <img src="{{ asset('media/wp-uploads/2024/12/produkcja_motsler3.png') }}" alt="Automatyzacja procesu regeneracji DPF Motsler" width="800" height="600" class="h-full w-full object-contain object-center transition duration-500 ease-out group-hover:scale-105 group-hover:translate-x-0.5" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-4 sm:p-5">
                        <p class="mb-2 mx-auto inline-flex w-fit items-center gap-1 rounded-full bg-[#244396]/12 px-2.5 py-1 text-[0.6875rem] font-bold uppercase tracking-wide text-[#244396]"><span aria-hidden="true">✔</span> Automatyzacja</p>
                        <h3 class="text-base font-semibold leading-snug text-[#001348] sm:text-lg">Automatyzacja procesu</h3>
                        <p class="mt-2 flex-1 text-pretty text-sm leading-6 text-[#003174]"><strong class="font-semibold text-[#001348]">Automatyzacja procesu regeneracji DPF</strong> – maszyna prowadzi użytkownika przez cały proces krok po kroku.</p>
                        <p class="benefit mt-3 border-l-[3px] border-[#ffad03] bg-[#fffbeb] px-3 py-2 text-xs font-medium leading-snug text-[#5c4a1a]">Minimalizacja błędów operatora, zwiększona wydajność i łatwa obsługa.</p>
                    </div>
                </a>
                <a href="{{ $homeDpfTechUrl }}" class="tech-card tech-motsler-reveal tech-motsler-reveal-d4 group flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_14px_36px_-26px_rgba(36,67,150,.22)] transition-[box-shadow,transform] duration-300 ease-out hover:-translate-y-1 hover:shadow-[0_22px_44px_-22px_rgba(36,67,150,.3)] sm:max-w-[24rem] md:max-w-none md:w-auto">
                    <div class="relative aspect-[5/4] overflow-hidden bg-[#edf2f7]">
                        <img src="{{ asset('media/wp-uploads/2024/12/slr-premium_300px.png') }}" alt="Pełne czyszczenie struktury filtra DPF Motsler" width="480" height="360" class="h-full w-full object-contain object-center transition duration-500 ease-out group-hover:scale-105 group-hover:translate-x-0.5" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-4 sm:p-5">
                        <p class="mb-2 mx-auto inline-flex w-fit items-center gap-1 rounded-full bg-[#244396]/12 px-2.5 py-1 text-[0.6875rem] font-bold uppercase tracking-wide text-[#244396]"><span aria-hidden="true">✔</span> Pełne czyszczenie</p>
                        <h3 class="text-base font-semibold leading-snug text-[#001348] sm:text-lg">Pełne czyszczenie struktury filtra</h3>
                        <p class="mt-2 flex-1 text-pretty text-sm leading-6 text-[#003174]">System usuwa sadzę i popiół z całej struktury – <strong class="font-semibold text-[#001348]">pełne czyszczenie filtra DPF</strong>, nie tylko powierzchni.</p>
                        <p class="benefit mt-3 border-l-[3px] border-[#ffad03] bg-[#fffbeb] px-3 py-2 text-xs font-medium leading-snug text-[#5c4a1a]">Przywrócenie <strong class="font-semibold text-[#5c4a1a]">maksymalnej drożności filtra</strong>, lepsze osiągi pojazdu, dłuższa żywotność filtra.</p>
                    </div>
                </a>
                <a href="{{ $homeDpfTechUrl }}" class="tech-card tech-motsler-reveal tech-motsler-reveal-d5 group flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col overflow-hidden rounded-[20px] border border-[#e2e8f0] bg-white shadow-[0_14px_36px_-26px_rgba(36,67,150,.22)] transition-[box-shadow,transform] duration-300 ease-out hover:-translate-y-1 hover:shadow-[0_22px_44px_-22px_rgba(36,67,150,.3)] sm:max-w-[24rem] md:max-w-none md:w-auto md:col-span-3 md:max-w-[28rem] md:justify-self-center lg:col-span-1 lg:max-w-none lg:justify-self-stretch">
                    <div class="relative aspect-[5/4] overflow-hidden bg-[#edf2f7]">
                        <img src="{{ asset('media/wp-uploads/2024/12/myjka.png') }}" alt="Hydrodynamiczna technologia czyszczenia Motsler z kawitacją" width="480" height="360" class="h-full w-full object-contain object-center transition duration-500 ease-out group-hover:scale-105 group-hover:translate-x-0.5" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-4 sm:p-5">
                        <p class="mb-2 mx-auto inline-flex w-fit items-center gap-1 rounded-full bg-[#244396]/12 px-2.5 py-1 text-[0.6875rem] font-bold uppercase tracking-wide text-[#244396]"><span aria-hidden="true">✔</span> Hydrodynamiczna</p>
                        <h3 class="text-base font-semibold leading-snug text-[#001348] sm:text-lg">Hydrodynamiczna technologia czyszczenia z kawitacją</h3>
                        <p class="mt-2 flex-1 text-pretty text-sm leading-6 text-[#003174]"><strong class="font-semibold text-[#001348]">Technologia hydrodynamiczna DPF</strong> z kawitacją i turbulentnym przepływem skutecznie usuwa sadzę i popiół – <strong class="font-semibold text-[#001348]">czyszczenie filtrów DPF kawitacją</strong> w praktyce.</p>
                        <p class="benefit mt-3 border-l-[3px] border-[#ffad03] bg-[#fffbeb] px-3 py-2 text-xs font-medium leading-snug text-[#5c4a1a]">Maksymalna skuteczność, krótszy czas regeneracji, wydłużona żywotność filtra.</p>
                    </div>
                </a>
            </div>
            <div class="tech-motsler-reveal tech-motsler-reveal-d6 mt-12 flex justify-center px-1">
                <a href="{{ $homeDpfModelsUrl }}" class="btn btn-primary inline-flex min-h-[3rem] w-full max-w-md items-center justify-center rounded-full bg-[#ffad03] px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-[#001348] shadow-lg shadow-black/20 transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:w-auto sm:min-w-[16rem]">Zobacz modele maszyn Motsler</a>
            </div>
        </div>
    </section>

    <section id="modele-maszyn-motsler" class="scroll-mt-24 border-t border-[#e2e8f0] bg-[#edf2f7] px-5 py-14 sm:px-8 sm:py-16 lg:px-10 lg:py-20" aria-labelledby="home-models-heading">
        <div class="mx-auto w-full max-w-[1200px]">
            <div class="text-center">
                <h2 id="home-models-heading" class="text-xl font-semibold leading-tight tracking-tight text-[#001348] text-balance sm:text-2xl md:text-[1.375rem] lg:text-[1.75rem] xl:text-[2rem]">Wybierz maszynę idealną dla Twojej działalności</h2>
                <p class="mx-auto mt-4 max-w-[48rem] text-pretty text-base leading-7 text-[#475569] sm:text-[1.0625rem]">Pełna gama <strong class="font-semibold text-[#001348]">maszyn do DPF</strong> Motsler – od kompaktowej <strong class="font-semibold text-[#001348]">maszyny idealnej dla Twojej działalności</strong> po modele z <strong class="font-semibold text-[#001348]">systemem SWS</strong> i profesjonalnym <strong class="font-semibold text-[#001348]">czyszczeniem filtrów DPF</strong>.</p>
            </div>
            <div class="-mx-5 mt-10 flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth scroll-pl-5 scroll-pr-5 px-5 pb-2 [scrollbar-width:none] [-ms-overflow-style:none] md:mx-0 md:mt-12 md:grid md:grid-cols-2 md:gap-6 md:overflow-visible md:px-0 md:pb-0 md:snap-none lg:grid-cols-3 lg:items-stretch [&::-webkit-scrollbar]:hidden">
                <article class="product-card group flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[24rem] shrink-0 snap-center flex-col overflow-hidden rounded-[22px] border border-[#e2e8f0] bg-white shadow-[0_16px_48px_-28px_rgba(36,67,150,.26)] transition-[box-shadow,transform] duration-300 hover:-translate-y-0.5 hover:shadow-[0_22px_52px_-26px_rgba(36,67,150,.32)] sm:max-w-[22rem] md:max-w-none md:w-auto lg:max-w-none">
                    <div class="relative aspect-[4/3] overflow-hidden bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]">
                        <img src="{{ $homeModelCardImg }}" alt="SLR Premium – maszyna do DPF Motsler" width="480" height="360" class="h-full w-full object-contain object-center transition duration-500 ease-out group-hover:scale-105" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-5 sm:p-6">
                        <div class="flex flex-wrap items-center justify-center gap-2.5" role="group" aria-label="Technologie modelu">
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396] ring-1 ring-[#244396]/20" title="System SWS"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 7H8M8 7l2.25-2.25M8 7l2.25 2.25"/><path d="M8 17h8M16 17l-2.25-2.25M16 17l-2.25 2.25"/></svg></span>
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396] ring-1 ring-[#244396]/20" title="Filtracja"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true"><path d="M12 2.5c-3.5 4.5-7 8.2-7 11.5a7 7 0 1014 0c0-3.3-3.5-7-7-11.5zM8 18h8v2H8v-2z"/></svg></span>
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396] ring-1 ring-[#244396]/20" title="Automatyzacja"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.18.52l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06A1.65 1.65 0 004.6 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06A1.65 1.65 0 009 4.6V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9c0 .48.2.89.52 1.18l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06A1.65 1.65 0 0015 14.4a1.65 1.65 0 00-1.51 1H13a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg></span>
                        </div>
                        <h3 class="mt-4 text-center text-lg font-bold text-[#001348] sm:text-xl">SLR Premium</h3>
                        <p class="mt-3 flex-1 text-pretty text-center text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">Podstawowa wersja dla punktów czyszczenia i warsztatów – <strong class="font-semibold text-[#001348]">maszyny do DPF</strong> pod pojedyncze filtry.</p>
                        <ul class="tech-list mt-4 space-y-2 border-t border-[#e2e8f0] pt-4 text-left text-sm leading-6 text-[#003174]" role="list">
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span><strong class="font-semibold text-[#001348]">System SWS</strong> – brak przepinania filtra</span></li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span>System filtracji PFS 4,8&nbsp;m² – ok.&nbsp;100 filtrów przed wymianą</span></li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span><strong class="font-semibold text-[#001348]">Automatyzacja</strong> procesu krok po kroku</span></li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span>Pełne czyszczenie struktury filtra</span></li>
                        </ul>
                        <a href="{{ $homeContactOfferUrl }}" class="btn btn-primary mt-6 inline-flex min-h-[2.75rem] w-full items-center justify-center gap-2 rounded-full bg-[#ffad03] px-5 py-2.5 text-center text-xs font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:text-sm">Poproś o ofertę<span class="transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">→</span></a>
                    </div>
                </article>
                <article class="product-card group flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[24rem] shrink-0 snap-center flex-col overflow-hidden rounded-[22px] border border-[#e2e8f0] bg-white shadow-[0_16px_48px_-28px_rgba(36,67,150,.26)] transition-[box-shadow,transform] duration-300 hover:-translate-y-0.5 hover:shadow-[0_22px_52px_-26px_rgba(36,67,150,.32)] sm:max-w-[22rem] md:max-w-none md:w-auto lg:max-w-none">
                    <div class="relative aspect-[4/3] overflow-hidden bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]">
                        <img src="{{ $homeModelCardImg }}" alt="SLR Premium PLUS – wydajna maszyna do DPF Motsler" width="480" height="360" class="h-full w-full object-contain object-center transition duration-500 ease-out group-hover:scale-105" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-5 sm:p-6">
                        <div class="flex flex-wrap items-center justify-center gap-2.5" role="group" aria-label="Technologie modelu">
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396] ring-1 ring-[#244396]/20" title="System SWS"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 7H8M8 7l2.25-2.25M8 7l2.25 2.25"/><path d="M8 17h8M16 17l-2.25-2.25M16 17l-2.25 2.25"/></svg></span>
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396] ring-1 ring-[#244396]/20" title="Filtracja"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true"><path d="M12 2.5c-3.5 4.5-7 8.2-7 11.5a7 7 0 1014 0c0-3.3-3.5-7-7-11.5zM8 18h8v2H8v-2z"/></svg></span>
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396] ring-1 ring-[#244396]/20" title="Automatyzacja"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.18.52l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06A1.65 1.65 0 004.6 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06A1.65 1.65 0 009 4.6V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9c0 .48.2.89.52 1.18l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06A1.65 1.65 0 0015 14.4a1.65 1.65 0 00-1.51 1H13a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg></span>
                        </div>
                        <h3 class="mt-4 text-center text-lg font-bold text-[#001348] sm:text-xl">SLR Premium PLUS</h3>
                        <p class="mt-3 flex-1 text-pretty text-center text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">Rozszerzona wersja dla warsztatów z większą liczbą filtrów – wyższa wydajność i <strong class="font-semibold text-[#001348]">czyszczenie filtrów DPF</strong> w skali.</p>
                        <ul class="tech-list mt-4 space-y-2 border-t border-[#e2e8f0] pt-4 text-left text-sm leading-6 text-[#003174]" role="list">
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span><strong class="font-semibold text-[#001348]">System SWS</strong> – pełny cykl regeneracji bez przepinania filtra</span></li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span>System filtracji PFS 4,8&nbsp;m² – ok.&nbsp;200 filtrów przed wymianą</span></li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span><strong class="font-semibold text-[#001348]">Automatyzacja</strong> procesu krok po kroku</span></li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span>Pełne czyszczenie struktury filtra</span></li>
                        </ul>
                        <a href="{{ $homeContactOfferUrl }}" class="btn btn-primary mt-6 inline-flex min-h-[2.75rem] w-full items-center justify-center gap-2 rounded-full bg-[#ffad03] px-5 py-2.5 text-center text-xs font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:text-sm">Poproś o ofertę<span class="transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">→</span></a>
                    </div>
                </article>
                <article class="product-card group relative flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[24rem] shrink-0 snap-center flex-col overflow-hidden rounded-[22px] border border-[#ffad03] bg-white shadow-[0_16px_48px_-28px_rgba(36,67,150,.26)] ring-2 ring-[#ffad03]/50 ring-offset-2 ring-offset-[#edf2f7] transition-[box-shadow,transform] duration-300 hover:-translate-y-0.5 hover:shadow-[0_22px_52px_-26px_rgba(36,67,150,.32)] sm:max-w-[22rem] md:col-span-2 md:mx-auto md:max-w-[24rem] lg:col-span-1 lg:mx-0 lg:max-w-none">
                    <span class="absolute right-3 top-3 z-10 rounded-full bg-[#ffad03] px-3 py-1 text-[0.6875rem] font-bold uppercase tracking-wide text-[#001348] shadow-md">Topowy model</span>
                    <div class="relative aspect-[4/3] overflow-hidden bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]">
                        <img src="{{ $homeModelCardImg }}" alt="SLR Premium DUAL – topowa maszyna do DPF Motsler" width="480" height="360" class="h-full w-full object-contain object-center transition duration-500 ease-out group-hover:scale-105" loading="lazy" decoding="async">
                    </div>
                    <div class="flex min-h-0 flex-1 flex-col p-5 sm:p-6">
                        <div class="flex flex-wrap items-center justify-center gap-2.5" role="group" aria-label="Technologie modelu">
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396] ring-1 ring-[#244396]/20" title="System SWS"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 7H8M8 7l2.25-2.25M8 7l2.25 2.25"/><path d="M8 17h8M16 17l-2.25-2.25M16 17l-2.25 2.25"/></svg></span>
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396] ring-1 ring-[#244396]/20" title="Filtracja"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true"><path d="M12 2.5c-3.5 4.5-7 8.2-7 11.5a7 7 0 1014 0c0-3.3-3.5-7-7-11.5zM8 18h8v2H8v-2z"/></svg></span>
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396] ring-1 ring-[#244396]/20" title="Automatyzacja"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.18.52l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06A1.65 1.65 0 004.6 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06A1.65 1.65 0 009 4.6V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9c0 .48.2.89.52 1.18l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06A1.65 1.65 0 0015 14.4a1.65 1.65 0 00-1.51 1H13a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg></span>
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#244396]/12 text-[#244396] ring-1 ring-[#244396]/20" title="Dual"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="6" width="6" height="12" rx="1.5"/><rect x="14" y="6" width="6" height="12" rx="1.5"/></svg></span>
                        </div>
                        <h3 class="mt-4 text-center text-lg font-bold text-[#001348] sm:text-xl">SLR Premium DUAL</h3>
                        <p class="mt-3 flex-1 text-pretty text-center text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">Topowy model <strong class="font-semibold text-[#001348]">maszyn do DPF</strong> – jednoczesne czyszczenie lub suszenie dwóch filtrów, maksymalna wydajność.</p>
                        <ul class="tech-list mt-4 space-y-2 border-t border-[#e2e8f0] pt-4 text-left text-sm leading-6 text-[#003174]" role="list">
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span><strong class="font-semibold text-[#001348]">System SWS</strong> – brak przepinania filtra</span></li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span>System filtracji PFS 4,8&nbsp;m² – ok.&nbsp;200 filtrów przed wymianą</span></li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span><strong class="font-semibold text-[#001348]">Automatyzacja</strong> procesu krok po kroku</span></li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span>Pełne czyszczenie struktury filtra</span></li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span><span>Jednoczesne czyszczenie / suszenie dwóch filtrów</span></li>
                        </ul>
                        <a href="{{ $homeContactOfferUrl }}" class="btn btn-primary mt-6 inline-flex min-h-[2.75rem] w-full items-center justify-center gap-2 rounded-full bg-[#ffad03] px-5 py-2.5 text-center text-xs font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:text-sm">Poproś o ofertę<span class="transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">→</span></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="proces-regeneracji-dpf" class="scroll-mt-24 border-t border-[#e2e8f0] bg-white px-5 py-14 sm:px-8 sm:py-16 lg:px-10 lg:py-20" aria-labelledby="home-proc-heading">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 id="home-proc-heading" class="text-center text-xl font-semibold leading-tight tracking-tight text-[#001348] text-balance sm:text-2xl md:text-[1.375rem] lg:text-[1.75rem] xl:text-[2rem]">Proces regeneracji i czyszczenia filtrów DPF</h2>
            <p class="intro mx-auto mt-5 max-w-[48rem] text-pretty text-center text-base leading-7 text-[#475569] sm:text-[1.0625rem]">Poznaj krok po kroku, jak maszyny Motsler przeprowadzają <strong class="font-semibold text-[#001348]">regenerację filtrów DPF</strong> – skutecznie, bezpiecznie i w pełnej strukturze filtra. Profesjonalne <strong class="font-semibold text-[#001348]">czyszczenie DPF</strong> w jednym, powtarzalnym cyklu.</p>
            <div class="relative mt-14 hidden pb-4 lg:block">
                <div class="absolute left-[10%] right-[10%] top-10 h-0.5 bg-[#cbd5e1]" aria-hidden="true"></div>
                <div class="relative grid grid-cols-5 gap-3">
                    <div class="flex flex-col items-center text-center">
                        <div class="relative z-[1] mb-4 flex h-[4.25rem] w-[4.25rem] items-center justify-center rounded-full border-2 border-[#244396] bg-white shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="6"/><path d="M16 16l4.5 4.5"/></svg>
                        </div>
                        <span class="text-xs font-bold text-[#244396]">1/5</span>
                        <h3 class="mt-2 text-sm font-semibold leading-snug text-[#001348] sm:text-base">Pomiar filtra – diagnostyka</h3>
                        <p class="mt-2 text-xs leading-6 text-[#003174] sm:text-sm">Maszyna automatycznie mierzy stopień zabrudzenia filtra.</p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="relative z-[1] mb-4 flex h-[4.25rem] w-[4.25rem] items-center justify-center rounded-full border-2 border-[#244396] bg-white shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" aria-hidden="true"><path d="M12 3c-2 3-5 5.5-5 9a5 5 0 1010 0c0-3.5-3-6-5-9z"/><path d="M8 18h8M9 14h6"/><path d="M6 8c2 1.5 4 1.5 6 0M7 6c1.5 1 3.5 1 5 0"/></svg>
                        </div>
                        <span class="text-xs font-bold text-[#244396]">2/5</span>
                        <h3 class="mt-2 text-sm font-semibold leading-snug text-[#001348] sm:text-base">Czyszczenie / regeneracja</h3>
                        <p class="mt-2 text-xs leading-6 text-[#003174] sm:text-sm">Filtr jest czyszczony w pełnej strukturze – SWS eliminuje przepinanie filtra.</p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="relative z-[1] mb-4 flex h-[4.25rem] w-[4.25rem] items-center justify-center rounded-full border-2 border-[#244396] bg-white shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 18c2-5 4-5 6 0M8 14c2-4 4-4 6 0M8 10c2-3 4-3 6 0"/><circle cx="12" cy="6" r="2" fill="currentColor" stroke="none"/></svg>
                        </div>
                        <span class="text-xs font-bold text-[#244396]">3/5</span>
                        <h3 class="mt-2 text-sm font-semibold leading-snug text-[#001348] sm:text-base">Suszenie filtra</h3>
                        <p class="mt-2 text-xs leading-6 text-[#003174] sm:text-sm">Dokładne suszenie przy zachowaniu bezpieczeństwa i jakości regeneracji.</p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="relative z-[1] mb-4 flex h-[4.25rem] w-[4.25rem] items-center justify-center rounded-full border-2 border-[#244396] bg-white shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="6"/><path d="M16 16l4.5 4.5"/><path d="M11 8v6l3 2" stroke-linecap="round"/></svg>
                        </div>
                        <span class="text-xs font-bold text-[#244396]">4/5</span>
                        <h3 class="mt-2 text-sm font-semibold leading-snug text-[#001348] sm:text-base">Pomiar po regeneracji</h3>
                        <p class="mt-2 text-xs leading-6 text-[#003174] sm:text-sm">Potwierdzenie skuteczności czyszczenia i przywrócenie maksymalnej drożności.</p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="relative z-[1] mb-4 flex h-[4.25rem] w-[4.25rem] items-center justify-center rounded-full border-2 border-[#244396] bg-white shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-9 w-9 text-[#244396]" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" aria-hidden="true"><path d="M7 4h8l2 4v12H7V4z"/><path d="M9 12h6M9 16h4"/><path d="M10 8h4"/></svg>
                        </div>
                        <span class="text-xs font-bold text-[#244396]">5/5</span>
                        <h3 class="mt-2 text-sm font-semibold leading-snug text-[#001348] sm:text-base">Raport końcowy</h3>
                        <p class="mt-2 text-xs leading-6 text-[#003174] sm:text-sm">Profesjonalny raport dla klienta dokumentujący proces i efekty.</p>
                    </div>
                </div>
            </div>
            <ol class="relative mt-10 space-y-0 lg:hidden" role="list">
                <li class="relative flex gap-5 border-l-2 border-[#cbd5e1] pb-10 pl-8 last:pb-0 sm:pl-10">
                    <div class="absolute left-0 top-0 z-[1] flex h-11 w-11 -translate-x-[calc(50%+1px)] items-center justify-center rounded-full border-2 border-[#244396] bg-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-[#244396]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="6"/><path d="M16 16l4.5 4.5"/></svg>
                    </div>
                    <div class="min-w-0 pt-0.5">
                        <span class="text-xs font-bold text-[#244396]">1/5</span>
                        <h3 class="mt-1 text-lg font-semibold text-[#001348]">Pomiar filtra – diagnostyka</h3>
                        <p class="mt-2 text-sm leading-7 text-[#003174]">Maszyna automatycznie mierzy stopień zabrudzenia filtra.</p>
                    </div>
                </li>
                <li class="relative flex gap-5 border-l-2 border-[#cbd5e1] pb-10 pl-8 last:pb-0 sm:pl-10">
                    <div class="absolute left-0 top-0 z-[1] flex h-11 w-11 -translate-x-[calc(50%+1px)] items-center justify-center rounded-full border-2 border-[#244396] bg-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-[#244396]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M12 3c-2 3-5 5.5-5 9a5 5 0 1010 0c0-3.5-3-6-5-9z"/><path d="M8 18h8M9 14h6"/><path d="M6 8c2 1.5 4 1.5 6 0M7 6c1.5 1 3.5 1 5 0"/></svg>
                    </div>
                    <div class="min-w-0 pt-0.5">
                        <span class="text-xs font-bold text-[#244396]">2/5</span>
                        <h3 class="mt-1 text-lg font-semibold text-[#001348]">Czyszczenie / regeneracja</h3>
                        <p class="mt-2 text-sm leading-7 text-[#003174]">Filtr jest czyszczony w pełnej strukturze – SWS eliminuje przepinanie filtra.</p>
                    </div>
                </li>
                <li class="relative flex gap-5 border-l-2 border-[#cbd5e1] pb-10 pl-8 last:pb-0 sm:pl-10">
                    <div class="absolute left-0 top-0 z-[1] flex h-11 w-11 -translate-x-[calc(50%+1px)] items-center justify-center rounded-full border-2 border-[#244396] bg-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-[#244396]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 18c2-5 4-5 6 0M8 14c2-4 4-4 6 0M8 10c2-3 4-3 6 0"/><circle cx="12" cy="6" r="2" fill="currentColor" stroke="none"/></svg>
                    </div>
                    <div class="min-w-0 pt-0.5">
                        <span class="text-xs font-bold text-[#244396]">3/5</span>
                        <h3 class="mt-1 text-lg font-semibold text-[#001348]">Suszenie filtra</h3>
                        <p class="mt-2 text-sm leading-7 text-[#003174]">Dokładne suszenie przy zachowaniu bezpieczeństwa i jakości regeneracji.</p>
                    </div>
                </li>
                <li class="relative flex gap-5 border-l-2 border-[#cbd5e1] pb-10 pl-8 last:pb-0 sm:pl-10">
                    <div class="absolute left-0 top-0 z-[1] flex h-11 w-11 -translate-x-[calc(50%+1px)] items-center justify-center rounded-full border-2 border-[#244396] bg-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-[#244396]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="6"/><path d="M16 16l4.5 4.5"/><path d="M11 8v6l3 2" stroke-linecap="round"/></svg>
                    </div>
                    <div class="min-w-0 pt-0.5">
                        <span class="text-xs font-bold text-[#244396]">4/5</span>
                        <h3 class="mt-1 text-lg font-semibold text-[#001348]">Pomiar filtra po regeneracji</h3>
                        <p class="mt-2 text-sm leading-7 text-[#003174]">Potwierdzenie skuteczności czyszczenia i przywrócenie maksymalnej drożności.</p>
                    </div>
                </li>
                <li class="relative flex gap-5 border-l-2 border-[#cbd5e1] pb-10 pl-8 last:pb-0 sm:pl-10">
                    <div class="absolute left-0 top-0 z-[1] flex h-11 w-11 -translate-x-[calc(50%+1px)] items-center justify-center rounded-full border-2 border-[#244396] bg-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-[#244396]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M7 4h8l2 4v12H7V4z"/><path d="M9 12h6M9 16h4"/><path d="M10 8h4"/></svg>
                    </div>
                    <div class="min-w-0 pt-0.5">
                        <span class="text-xs font-bold text-[#244396]">5/5</span>
                        <h3 class="mt-1 text-lg font-semibold text-[#001348]">Raport końcowy</h3>
                        <p class="mt-2 text-sm leading-7 text-[#003174]">Profesjonalny raport dla klienta dokumentujący proces i efekty.</p>
                    </div>
                </li>
            </ol>
            <div class="mx-auto mt-12 flex max-w-[1200px] flex-col items-stretch justify-center gap-3 sm:flex-row sm:items-center sm:justify-center">
                <a href="#home-hero" class="inline-flex min-h-[3rem] w-full max-w-sm items-center justify-center rounded-full bg-[#ffad03] px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:w-auto sm:px-8">Zobacz jak działa maszyna</a>
                <a href="#modele-maszyn-motsler" class="inline-flex min-h-[3rem] w-full max-w-sm items-center justify-center rounded-full border-2 border-[#ffad03] bg-white px-6 py-3.5 text-center text-sm font-semibold text-[#001348] transition hover:bg-[#ffad03]/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#ffad03] sm:w-auto sm:px-8">Zobacz modele maszyn</a>
            </div>
        </div>
    </section>

    <section id="korzysci-biznesowe" class="scroll-mt-24 border-t border-[#e2e8f0] bg-[#edf2f7] px-5 py-14 sm:px-8 sm:py-16 lg:px-10 lg:py-20" aria-labelledby="home-benefits-heading">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 id="home-benefits-heading" class="text-center text-xl font-semibold leading-tight tracking-tight text-[#001348] text-balance sm:text-2xl md:text-[1.375rem] lg:text-[1.75rem] xl:text-[2rem]">Maszyny Motsler – inwestycja, która się zwraca</h2>
            <p class="intro mx-auto mt-5 max-w-[48rem] text-pretty text-center text-base leading-7 text-[#475569] sm:text-[1.0625rem]">Niezależnie od tego, czy prowadzisz punkt czyszczenia filtrów, zarządzasz flotą samochodową, czy warsztatem – nasze maszyny zwiększają przychody, oszczędzają czas i poprawiają efektywność.</p>
            <div class="mt-10 grid gap-6 md:grid-cols-3 md:items-stretch">
                <article class="flex h-full flex-col items-center rounded-[22px] border border-[#e2e8f0] bg-white p-6 text-center shadow-[0_14px_40px_-28px_rgba(36,67,150,.18)] transition-shadow duration-300 hover:shadow-[0_20px_48px_-24px_rgba(36,67,150,.22)] sm:p-7">
                    <div class="flex h-[3.75rem] w-[3.75rem] shrink-0 items-center justify-center rounded-2xl bg-[#244396]/12 text-[#244396] ring-2 ring-[#244396]/10" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19V5M8 13v6M12 9v10M16 6v13M20 10v9"/></svg>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold leading-snug text-[#001348] sm:text-xl">Punkty czyszczenia filtrów / nowe biznesy</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">Większa liczba obsłużonych filtrów dziennie → wyższe przychody i szybszy zwrot z inwestycji w <strong class="font-semibold text-[#001348]">maszyny do regeneracji DPF</strong>.</p>
                </article>
                <article class="flex h-full flex-col items-center rounded-[22px] border border-[#e2e8f0] bg-white p-6 text-center shadow-[0_14px_40px_-28px_rgba(36,67,150,.18)] transition-shadow duration-300 hover:shadow-[0_20px_48px_-24px_rgba(36,67,150,.22)] sm:p-7">
                    <div class="flex h-[3.75rem] w-[3.75rem] shrink-0 items-center justify-center rounded-2xl bg-[#244396]/12 text-[#244396] ring-2 ring-[#244396]/10" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17m-2 0a2 2 0 104 0 2 2 0 10-4 0"/><path d="M17 17m-2 0a2 2 0 104 0 2 2 0 10-4 0"/><path d="M5 17H3V9l2-3h8l3 3h3v8h-2M9 17h6"/><path d="M3 9h16"/></svg>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold leading-snug text-[#001348] sm:text-xl">Floty samochodowe</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">Oszczędność dzięki samodzielnemu czyszczeniu filtrów, redukcja kosztów outsourcingu i pełna kontrola nad kosztami eksploatacji floty.</p>
                </article>
                <article class="flex h-full flex-col items-center rounded-[22px] border border-[#e2e8f0] bg-white p-6 text-center shadow-[0_14px_40px_-28px_rgba(36,67,150,.18)] transition-shadow duration-300 hover:shadow-[0_20px_48px_-24px_rgba(36,67,150,.22)] sm:p-7">
                    <div class="flex h-[3.75rem] w-[3.75rem] shrink-0 items-center justify-center rounded-2xl bg-[#244396]/12 text-[#244396] ring-2 ring-[#244396]/10" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a4 4 0 10-8.4 1.8L4 14l3-1 1.8-3.1a4 4 0 001.9-3.6z"/><path d="M10 12l4 4"/></svg>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold leading-snug text-[#001348] sm:text-xl">Warsztaty samochodowe</h3>
                    <p class="mt-3 flex-1 text-pretty text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">Dodatkowa usługa przyciąga klientów, możliwość upsellingu innych usług i wyższa marża na serwisie filtrów DPF.</p>
                </article>
            </div>
            <div class="mt-10 flex justify-center">
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3rem] w-full max-w-sm items-center justify-center rounded-full bg-[#ffad03] px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:w-auto">Dowiedz się więcej</a>
            </div>
        </div>
    </section>

    <section id="opinie-sukcesy-motsler" class="scroll-mt-24 border-t border-[#e2e8f0] bg-white px-5 py-14 sm:px-8 sm:py-16 lg:px-10 lg:py-20" aria-labelledby="home-testimonials-heading">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 id="home-testimonials-heading" class="text-center text-xl font-semibold leading-tight tracking-tight text-[#001348] text-balance sm:text-2xl md:text-[1.375rem] lg:text-[1.75rem] xl:text-[2rem]">Opinie i Sukcesy klientów Motsler</h2>
            <p class="mx-auto mt-5 max-w-[48rem] text-pretty text-center text-base leading-7 text-[#475569] sm:text-[1.0625rem]">Poznaj doświadczenia naszych klientów – warsztatów, flot samochodowych i punktów czyszczenia filtrów – oraz efekty, które osiągnęli dzięki naszym maszynom.</p>
            <div class="-mx-5 mt-10 flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth scroll-pl-5 scroll-pr-5 px-5 pb-2 [scrollbar-width:none] [-ms-overflow-style:none] md:mx-0 md:grid md:grid-cols-3 md:gap-6 md:overflow-visible md:px-0 md:pb-0 md:snap-none [&::-webkit-scrollbar]:hidden" role="region" aria-roledescription="Karuzela" aria-label="Opinie klientów Motsler" tabindex="0">
                <article class="flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col items-center rounded-[22px] border border-[#e2e8f0] bg-[#f8fafc] p-6 text-center shadow-[0_14px_40px_-28px_rgba(36,67,150,.16)] sm:max-w-[24rem] md:max-w-none md:w-auto">
                    <div class="flex h-[3.75rem] w-[3.75rem] shrink-0 items-center justify-center rounded-xl bg-white text-lg font-bold tracking-tight text-[#244396] shadow-sm ring-2 ring-[#244396]/12" aria-hidden="true">ABC</div>
                    <div class="mt-4 text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-4 flex-1 text-pretty text-sm leading-7 text-[#001348] sm:text-[0.9375rem]"><p>„Maszyna Motsler zwiększyła naszą wydajność o 40% i pozwoliła obsłużyć więcej filtrów dziennie.”</p></blockquote>
                    <footer class="mt-5 border-t border-[#e2e8f0] pt-4 text-sm">
                        <div class="font-semibold text-[#001348]">Jan Kowalski</div>
                        <div class="mt-0.5 text-[#003174]/85">właściciel warsztatu ABC</div>
                    </footer>
                </article>
                <article class="flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col items-center rounded-[22px] border border-[#e2e8f0] bg-[#f8fafc] p-6 text-center shadow-[0_14px_40px_-28px_rgba(36,67,150,.16)] sm:max-w-[24rem] md:max-w-none md:w-auto">
                    <div class="flex h-[3.75rem] w-[3.75rem] shrink-0 items-center justify-center rounded-xl bg-white text-lg font-bold tracking-tight text-[#244396] shadow-sm ring-2 ring-[#244396]/12" aria-hidden="true">XYZ</div>
                    <div class="mt-4 text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-4 flex-1 text-pretty text-sm leading-7 text-[#001348] sm:text-[0.9375rem]"><p>„Dzięki regeneracji filtrów na miejscu oszczędzamy czas i koszty outsourcingu.”</p></blockquote>
                    <footer class="mt-5 border-t border-[#e2e8f0] pt-4 text-sm">
                        <div class="font-semibold text-[#001348]">Anna Nowak</div>
                        <div class="mt-0.5 text-[#003174]/85">manager floty XYZ</div>
                    </footer>
                </article>
                <article class="flex h-full w-[min(100%,calc(100vw-2.5rem))] max-w-[22rem] shrink-0 snap-center flex-col items-center rounded-[22px] border border-[#e2e8f0] bg-[#f8fafc] p-6 text-center shadow-[0_14px_40px_-28px_rgba(36,67,150,.16)] sm:max-w-[24rem] md:max-w-none md:w-auto">
                    <div class="flex h-[3.75rem] w-[3.75rem] shrink-0 items-center justify-center rounded-xl bg-white text-lg font-bold tracking-tight text-[#244396] shadow-sm ring-2 ring-[#244396]/12" aria-hidden="true">DEF</div>
                    <div class="mt-4 text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-4 flex-1 text-pretty text-sm leading-7 text-[#001348] sm:text-[0.9375rem]"><p>„Dodanie usługi czyszczenia filtrów przyciągnęło nowych klientów i zwiększyło przychody.”</p></blockquote>
                    <footer class="mt-5 border-t border-[#e2e8f0] pt-4 text-sm">
                        <div class="font-semibold text-[#001348]">Piotr Wiśniewski</div>
                        <div class="mt-0.5 text-[#003174]/85">właściciel warsztatu DEF</div>
                    </footer>
                </article>
            </div>
            <h3 class="mt-14 text-center text-lg font-semibold text-[#001348] sm:text-xl">Przykłady sukcesów klientów</h3>
            <div class="mt-8 grid gap-6 md:grid-cols-3 md:items-stretch">
                <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-gradient-to-b from-white to-[#f8fafc] p-6 text-center shadow-sm sm:p-7">
                    <div class="text-sm font-semibold uppercase tracking-wide text-[#244396]">Warsztat ABC</div>
                    <p class="mt-4 flex-1 text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">Obsłużono <strong class="text-2xl font-bold tabular-nums text-[#001348] sm:text-3xl">120</strong> filtrów miesięcznie → wzrost przychodów o <strong class="text-xl font-bold tabular-nums text-[#ffad03] sm:text-2xl">25%</strong></p>
                </article>
                <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-gradient-to-b from-white to-[#f8fafc] p-6 text-center shadow-sm sm:p-7">
                    <div class="text-sm font-semibold uppercase tracking-wide text-[#244396]">Flota XYZ</div>
                    <p class="mt-4 flex-1 text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">Samodzielne czyszczenie filtrów → oszczędność <strong class="text-2xl font-bold tabular-nums text-[#001348] sm:text-3xl">15&nbsp;000&nbsp;zł</strong> rocznie</p>
                </article>
                <article class="flex flex-col rounded-[20px] border border-[#e2e8f0] bg-gradient-to-b from-white to-[#f8fafc] p-6 text-center shadow-sm sm:p-7">
                    <div class="text-sm font-semibold uppercase tracking-wide text-[#244396]">Punkt DEF</div>
                    <p class="mt-4 flex-1 text-sm leading-7 text-[#003174] sm:text-[0.9375rem]">Dodatkowa usługa przyciągnęła <strong class="text-2xl font-bold tabular-nums text-[#ffad03] sm:text-3xl">30%</strong> nowych klientów</p>
                </article>
            </div>
            <div class="mt-10 flex justify-center px-1">
                <a href="{{ $homeContactOfferUrl }}" class="inline-flex min-h-[3rem] w-full max-w-md items-center justify-center rounded-full bg-[#ffad03] px-8 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-[#001348] shadow-lg shadow-black/15 transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:w-auto">Zobacz więcej</a>
            </div>
        </div>
    </section>

    

    <!--
    <section class="bg-white px-6 py-10 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
        <h2 class="text-center text-4xl font-semibold text-[#001348]"><strong>Jak pomożemy Ci</strong> w biznesie?</h2>
        <p class="mt-6 text-lg leading-8">Specjalizujemy się w dostarczaniu zaawansowanych maszyn i technologii dla przemysłu, które maksymalizują zyski i usprawniają codzienną pracę. Dzięki naszym rozwiązaniom poszerzysz swoją ofertę, przyciągniesz nowych klientów i uczynisz swoje procesy szybszymi, skuteczniejszymi oraz bardziej opłacalnymi.<br>Oferujemy nie tylko profesjonalne urządzenia, ale także pełne wsparcie techniczne, szkolenia i doradztwo, abyś mógł od razu zwiększyć swoje dochody i rozwijać biznes. Sprawdź, jak możemy pomóc w osiągnięciu Twoich celów!</p>
        <div class="mt-8 flex justify-center">
            <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="inline-flex rounded-full bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white">Wyślij zapytanie</a>
        </div>
        </div>
    </section>


    <section>
        <div class="mx-auto w-full max-w-[1200px] px-6 py-12 sm:px-10">
        <h2 class="text-center text-4xl font-semibold text-[#001348]"><strong>Dla jakich branż</strong> produkujemy maszyny?</h2>
        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <article class="rounded-[20px] bg-white p-6 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2024/12/samochody1.png') }}" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-3xl font-semibold text-[#001348]">Motoryzacja</h3><p class="mt-3 text-base leading-7">Tworzymy zaawansowane urządzenia dla branży motoryzacyjnej, wspierając warsztaty i serwisy samochodowe.</p></article>
            <article class="rounded-[20px] bg-white p-6 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2024/12/przemysl1.png') }}" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-3xl font-semibold text-[#001348]">Przemysł</h3><p class="mt-3 text-base leading-7">Nasze maszyny znajdują zastosowanie w różnych gałęziach przemysłu, zapewniając niezawodność i efektywność procesów technologicznych.</p></article>
            <article class="rounded-[20px] bg-white p-6 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2024/12/uslugi.png') }}" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-3xl font-semibold text-[#001348]">Firmy usługowe</h3><p class="mt-3 text-base leading-7">Oferujemy sprzęt dopasowany do firm świadczących szeroki zakres usług, od mycia i czyszczenia po regenerację kluczowych komponentów.</p></article>
        </div>
        </div>
    </section>

    <section>
        <div class="mx-auto w-full max-w-[1200px] px-6 py-12 sm:px-10">
        <h2 class="text-center text-4xl font-semibold text-[#001348]">Co znajdziesz <strong>w naszej ofercie?</strong></h2>
        <p class="mt-3 text-center text-lg">Szukasz maszyn, które są gwarantem jakości i niezawodności? <strong>W MOTSLER oferujemy:</strong></p>
        <div class="mt-8 grid gap-5 md:grid-cols-3 xl:grid-cols-5">
            <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2024/12/slr-premium_300px.png') }}" alt="" class="mx-auto h-40 w-auto"><h3 class="mt-3 text-xl font-semibold text-[#001348]">Maszyny do czyszczenia filtrów DPF</h3></a>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2024/12/myjka.png') }}" alt="" class="mx-auto h-40 w-auto"><h3 class="mt-3 text-xl font-semibold text-[#001348]">Myjki warsztatowe</h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2024/12/no_foto.png') }}" alt="" class="mx-auto h-40 w-auto"><h3 class="mt-3 text-xl font-semibold text-[#001348]">Suszarki do filtrów DPF</h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2024/12/produkcja_motsler3.png') }}" alt="" class="mx-auto h-40 w-auto"><h3 class="mt-3 text-xl font-semibold text-[#001348]">Maszyny wg. wytycznych klienta</h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2025/01/GK-530-3.0-200-P-www-1.png') }}" alt="" class="mx-auto h-40 w-auto"><h3 class="mt-3 text-xl font-semibold text-[#001348]">Kompresory powietrza</h3></div>
        </div>
        </div>
    </section>

    <section class="bg-[#edf2f7] px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
        <div class="grid items-center gap-8 lg:grid-cols-[1.2fr_1fr_1fr]">
            <h2 class="text-3xl font-semibold leading-tight text-[#001348] sm:text-4xl lg:text-left">Dlaczego<br><strong>MOTSLER?</strong></h2>
            <div class="text-center">
                <div class="text-5xl font-bold text-[#001348]">16</div>
                <div class="mt-2 text-2xl font-semibold text-[#001348]">Lat doświadczenia</div>
            </div>
            <div class="text-center lg:justify-self-end">
                <div class="text-5xl font-bold text-[#001348]">100</div>
                <div class="mt-2 text-2xl font-semibold text-[#001348]">Zadowolonych klientów</div>
            </div>
        </div>
        <p class="mx-auto mt-8 max-w-5xl text-center text-lg leading-8">Zauważyliśmy, że wiele przedsiębiorców zmaga się z trudnością wyboru odpowiednich maszyn. Rynek oferuje ogromną liczbę urządzeń, które często są skomplikowane, niekompatybilne lub obarczone wadami, utrudniając podjęcie właściwej decyzji. Chcieliśmy to zmienić, dlatego stworzyliśmy firmę MOTSLER.<br><br>Naszą misją było zaprojektowanie maszyn, które łączą w sobie wszystko, co najlepsze i najnowocześniejsze, a jednocześnie eliminują wady obecne w innych rozwiązaniach na rynku. Stawiamy na prostotę, niezawodność i możliwość rozbudowy. Dzięki temu każdy klient może dopasować naszą maszynę do swoich unikalnych potrzeb, bez konieczności kompromisów. Nasze maszyny i urządzenia, to wynik dogłębnej analizy rynku i realnych potrzeb użytkowników. Skupiamy się na tworzeniu uniwersalnych rozwiązań, które łączą efektywność, trwałość i łatwość obsługi.<br>Postanowiliśmy wyeliminować chaos wyboru, oferując naszym klientom maszyny, które są nie tylko wszechstronne, ale również niezawodne i proste w użytkowaniu.</p>
        <div class="mx-auto mt-10 grid max-w-6xl gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2024/12/przemysl1.png') }}" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]">Maszyny<br><strong>do przemysłu</strong></h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2025/01/zysk.png') }}" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]">Skupienie<br><strong>na zysku</strong></h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2025/01/wsparcie.png') }}" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]"><strong>Wsparcie</strong><br>w razie potrzeby</h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2025/01/24h.png') }}" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]"><strong>Bezawaryjne</strong><br>działanie</h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2025/01/szkolenie.png') }}" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]">Profesjonalne<br><strong>szkolenie</strong></h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2025/01/pewnosc.png') }}" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]">Pewność <br><strong>na długie lata</strong></h3></div>
        </div>
        </div>
    </section>

    <section class="bg-white px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
        <h2 class="text-center text-4xl font-semibold text-[#001348]">Technologia <strong>na najwyższym poziomie</strong></h2>
        <p class="mx-auto mt-4 max-w-4xl text-center text-lg">Nasze maszyny są gotowe sprostać nawet <strong>najcięższym wyzwaniom</strong> w codziennej pracy!<br>Współpracujemy tylko z najlepszymi.</p>
        <div class="mt-10 flex flex-wrap items-center justify-center gap-x-10 gap-y-8 border-y border-[#edf2f7] py-8">
            @foreach ([['2025/01/calpeda_small.png','calpeda'],['2025/01/ebara.png','ebara'],['2025/01/fatek_small.png','fatek'],['2025/01/weintek_small.png','weintek'],['2025/01/wieland_small.png','wieland'],['2025/01/eaton_small.png','eaton'],['2025/01/schneider_small.png','schneider'],['2025/01/siemens_small.png','siemens']] as $logo)
                <img src="{{ asset('media/wp-uploads/'.$logo[0]) }}" alt="{{ $logo[1] }}" class="h-12 w-auto opacity-70 grayscale">
            @endforeach
        </div>
        </div>
    </section>

    <section class="bg-[#edf2f7] px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
        <div class="mb-8 flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
            <h2 class="text-3xl font-semibold text-[#001348] sm:text-4xl"><strong>Poznaj opinie</strong><br>użytkowników naszych maszyn</h2>
            <img src="{{ asset('media/wp-uploads/2025/01/googl.png') }}" alt="" class="h-10 w-auto md:mt-2">
        </div>
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2025/01/aiw_200.png') }}" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale"><div class="text-amber-400">★★★★★</div><blockquote class="mt-6 text-sm leading-7 text-[#001348]">Używamy od kilku miesięcy maszynę typu DPF SLR Premium skonfigurowaną i skonstruowaną pod nasze indywidualne wymagania. Cały proces uzgodnień, zamówienia, dostawy i rozruchu technologicznego przebiegł bez najmniejszych problemów. Podczas eksploatacji maszyna doskonale spełnia swoją funkcję i dlatego mogę z czystym sumieniem polecić firmę MOTSLER Sp. z o.o. z Rzeszowa jako kompetentnego i wiarygodnego partnera.</blockquote><div class="mt-6 font-semibold text-[#001348]">Karol Fiołka</div><div class="text-sm text-[#003174]/80">AiW Turbo Mikstat</div></article>
            <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2025/01/auto_bodo_200-1.png') }}" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale"><div class="text-amber-400">★★★★★</div><blockquote class="mt-6 text-sm leading-7 text-[#001348]">Szukaliśmy maszyny do czyszczenia DPF, która byłaby wydajna i przyjazna dla środowiska. Maszyna firmy Motsler spełniła wszystkie nasze oczekiwania. Jest nie tylko skuteczna w usuwaniu sadzy z filtrów DPF, ale również zużywa minimalną ilość wody i chemikaliów. Dodatkowym atutem jest profesjonalna obsługa klienta i dostęp do szkoleń z zakresu obsługi maszyny. Zdecydowanie polecam!</blockquote><div class="mt-6 font-semibold text-[#001348]">Michał Surowiński</div><div class="text-sm text-[#003174]/80">AUTO-BODO Q-Serwis CASTROL Łódź</div></article>
            <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="{{ asset('media/wp-uploads/2025/01/clean_fap_200.png') }}" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale"><div class="text-amber-400">★★★★★</div><blockquote class="mt-6 text-sm leading-7 text-[#001348]">Od jakiegoś czasu myślałem o inwestycji, badałem rynek przez parę miesięcy i ze wszystkich dostępnych maszyn do czyszczenia filtrów DPF to MOTSLER przykuł moją uwagę. Czyszczenie jest szybkie i skuteczne, a filtry wracają jak nowe. Współpraca z firmą jest bez zarzutu – pełen profesjonalizm i ogromna wiedza.</blockquote><div class="mt-6 font-semibold text-[#001348]">Krzysztof Guzda</div><div class="text-sm text-[#003174]/80">CLEANFAP Martigny Szwajcaria</div></article>
        </div>
        </div>
    </section>

    <section class="bg-[#00264b] px-6 py-12 text-white sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
        <h2 class="text-center text-3xl font-semibold sm:text-4xl">Nasi <strong>autoryzowani dystrybutorzy</strong></h2>
        <div class="mx-auto mt-10 grid max-w-3xl gap-8 md:grid-cols-2">
            <div class="flex justify-center"><img src="{{ asset('media/wp-uploads/2025/01/cropped-logo512.jpg') }}" alt="" class="max-h-32 w-auto object-contain"></div>
            <div class="flex justify-center"><img src="{{ asset('media/wp-uploads/2025/01/mtuning.jpg') }}" alt="" class="max-h-32 w-auto object-contain"></div>
        </div>
        </div>
    </section>

    <section class="bg-[#00264b] px-6 py-12 text-white sm:px-10">
        <div class="mx-auto w-full max-w-[1200px] text-center">
        <h2 class="text-3xl font-semibold sm:text-4xl"><strong>Rozwijaj swój biznes z nami!</strong></h2>
        <p class="mx-auto mt-4 max-w-3xl text-lg text-white/90">Zostań naszym dystrybutorem i oferuj produkty, które cieszą się zaufaniem na całym świecie. Napisz do nas, aby poznać szczegóły współpracy.</p>
        <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="mt-8 inline-flex rounded-full bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white">Wyślij zapytanie</a>
        </div>
    </section>

    <section class="bg-[#edf2f7] px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1200px]">
        <h2 class="text-center text-4xl font-semibold text-[#001348]"><strong>Wiedza</strong> i Innowacje</h2>
        <div class="mt-10 grid gap-8 md:grid-cols-2">
            <article class="overflow-hidden rounded-[20px] bg-white shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                <a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post1']]) }}" class="block"><img src="{{ asset('media/wp-uploads/2025/08/Motsler-biznes-768x511.png') }}" alt="" class="h-48 w-full object-cover"></a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-[#001348]"><a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post1']]) }}" class="hover:underline">Jak zacząć dochodowy biznes z Motsler?</a></h3>
                    <p class="mt-2 text-sm text-[#003174]/70">6 sierpnia, 2025</p>
                    <p class="mt-4 text-sm leading-7 text-[#001348]">Regeneracja filtrów DPF jako sposób na rozwój warsztatu lub nowy kierunek działalności. W świecie motoryzacji nie brakuje okazji do rozwoju….</p>
                    <a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post1']]) }}" class="mt-4 inline-block text-sm font-semibold text-[#244396]">Czytaj więcej</a>
                </div>
            </article>
            <article class="overflow-hidden rounded-[20px] bg-white shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                <a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post2']]) }}" class="block"><img src="{{ asset('media/wp-uploads/2025/07/20250718_165157a-768x1024.jpg') }}" alt="" class="h-48 w-full object-cover"></a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-[#001348]"><a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post2']]) }}" class="hover:underline">DPF CleanX od MOTSLER – Profesjonalne i opłacalne czyszczenie filtrów DPF bez kompromisów</a></h3>
                    <p class="mt-2 text-sm text-[#003174]/70">30 lipca, 2025</p>
                    <p class="mt-4 text-sm leading-7 text-[#001348]">Czyszczenie filtrów DPF to dziś codzienność w wielu warsztatach i serwisach. Problem w tym, że wiele dostępnych na rynku płynów…</p>
                    <a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post2']]) }}" class="mt-4 inline-block text-sm font-semibold text-[#244396]">Czytaj więcej</a>
                </div>
            </article>
        </div>
        </div>
    </section>-->

    <section id="contact" class="scroll-mt-24 border-t border-[#e2e8f0] bg-gradient-to-b from-[#f8fafc] to-white px-5 py-14 sm:px-8 sm:py-16 lg:px-10 lg:py-20" aria-labelledby="home-contact-cta-heading">
        <div class="mx-auto w-full max-w-[1200px]">
            <h2 id="home-contact-cta-heading" class="text-center text-xl font-semibold leading-tight tracking-tight text-[#001348] text-balance sm:text-2xl md:text-[1.375rem] lg:text-[1.75rem] xl:text-[2rem]">Skontaktuj się i zwiększ zysk swojego biznesu już dziś</h2>
            <div class="mt-10 grid items-start gap-10 lg:grid-cols-[minmax(0,17rem)_minmax(0,1fr)] lg:gap-12 xl:grid-cols-[minmax(0,18.5rem)_minmax(0,1fr)]">
                <aside class="order-2 mx-auto w-full max-w-[16rem] overflow-hidden rounded-[24px] border border-[#e2e8f0] bg-white shadow-[0_20px_50px_-28px_rgba(36,67,150,.2)] sm:max-w-[17rem] lg:order-1 lg:mx-0 lg:max-w-none">
                    @if ($homeSebastianPhotoExists)
                        <img src="{{ asset('images/offer/sebastian-tkacz.jpg') }}" alt="Sebastian Tkacz – ekspert Motsler ds. maszyn DPF" width="520" height="693" class="h-44 w-full object-cover object-[center_18%] sm:h-48 lg:h-44 xl:h-48" loading="lazy" decoding="async">
                    @else
                        <div class="flex h-44 w-full items-center justify-center bg-[#edf2f7] text-sm text-[#64748b] sm:h-48 lg:h-44 xl:h-48">Foto</div>
                    @endif
                    <div class="border-t border-[#e2e8f0] bg-gradient-to-br from-[#001348] to-[#0a2463] p-6 text-white sm:p-7">
                        <p class="text-sm font-semibold uppercase tracking-wide text-[#ffad03]">Ekspert Motsler</p>
                        <p class="mt-1 text-lg font-semibold">Sebastian Tkacz</p>
                        <p class="mt-4 text-sm leading-7 text-white/92">Cześć! Od 2018 roku zajmuję się maszynami DPF. Pomogę Ci dobrać rozwiązanie idealne dla Twojej działalności.</p>
                    </div>
                </aside>
                <div class="order-1 lg:order-2">
                    @if (session('contact_sent'))
                        <div class="mb-6 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-900">{{ __('form.sent') }}</div>
                    @endif
                    @if (session('contact_error'))
                        <div class="mb-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-900">{{ __('contact.mail_failed') }}</div>
                    @endif
                    <form id="contact-form" class="space-y-4 rounded-[20px] border border-[#e2e8f0] bg-white p-6 shadow-[0_12px_40px_-28px_rgba(36,67,150,.12)] sm:p-7" method="post" action="{{ locale_route('contact.store', ['locale' => $l]) }}">
                        @csrf
                        <input type="text" name="name" value="{{ old('name') }}" required autocomplete="name" maxlength="200" placeholder="{{ __('form.name') }}" class="w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396] focus:ring-2 focus:ring-[#244396]/15">
                        @error('name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Twój adres e-mail" class="w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396] focus:ring-2 focus:ring-[#244396]/15">
                        @error('email')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <input type="tel" name="phone" value="{{ old('phone') }}" autocomplete="tel" placeholder="Twój numer telefonu" class="w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396] focus:ring-2 focus:ring-[#244396]/15">
                        @error('phone')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <textarea name="message" rows="4" required maxlength="5000" placeholder="Twoja wiadomość" class="min-h-[8rem] w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396] focus:ring-2 focus:ring-[#244396]/15">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <div class="flex items-start gap-3">
                            <input class="mt-1 h-4 w-4 shrink-0 rounded border-[#cbd2d9] text-[#244396] focus:ring-[#244396]" id="home-privacy" name="privacy_accept" type="checkbox" value="1" {{ old('privacy_accept') ? 'checked' : '' }} required>
                            <label class="text-sm text-[#001348]/90" for="home-privacy">{{ __('form.privacy_accept') }}. <a href="{{ locale_route('privacy', ['locale' => $l]) }}" class="text-[#244396] underline">{{ __('footer.privacy') }}</a>.</label>
                        </div>
                        @error('privacy_accept')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <div class="flex flex-col gap-3 pt-2 sm:flex-row sm:flex-wrap sm:items-center">
                            <button type="submit" class="inline-flex min-h-[3rem] w-full items-center justify-center rounded-full bg-[#ffad03] px-8 py-3.5 text-sm font-bold uppercase tracking-wide text-[#001348] shadow-md transition hover:bg-[#ffc94d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#001348] sm:w-auto sm:min-w-[12rem]">Poproś o ofertę</button>
                            <a href="tel:+48781700800" class="inline-flex min-h-[3rem] w-full items-center justify-center rounded-full border-2 border-[#244396] bg-transparent px-6 py-3.5 text-center text-sm font-semibold text-[#001348] transition hover:bg-[#244396]/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#244396] sm:w-auto">781 700 800</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
