@extends('layouts.app')
@section('title', __('page.offer_dpf'))
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
@endphp
<div class="space-y-0">
    <section>
        <div class="relative min-h-[min(72vh,820px)] overflow-hidden">
            <div class="absolute inset-0 overflow-hidden" aria-hidden="true">
                <iframe
                    class="pointer-events-none absolute left-1/2 top-1/2 h-[56.25vw] min-h-[125%] w-[177.77vh] min-w-[125%] -translate-x-1/2 -translate-y-1/2 border-0"
                    src="{{ $offerDpfVideoEmbed }}"
                    title="{{ __('offer_dpf.hero_video_aria') }}"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                ></iframe>
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-[#001348]/90 via-[#001348]/82 to-[#001348]/92"></div>
            <!--<div class="relative z-10 flex min-h-[min(72vh,820px)] flex-col items-center justify-center px-6 py-16 text-center text-white sm:px-10">
                <p class="text-sm font-semibold uppercase tracking-wide text-white/85">{{ __('offer_dpf.hero_kicker') }}</p>
                <h1 class="mt-4 max-w-4xl text-4xl font-bold leading-tight sm:text-5xl lg:text-6xl">{{ __('offer_dpf.hero_title') }}</h1>
                <p class="mx-auto mt-6 max-w-3xl text-lg leading-8 text-white/95 sm:text-xl">{{ __('offer_dpf.hero_subtitle') }}</p>
            </div>-->
        </div>
        <div class="bg-white px-6 py-14 sm:px-10">
            <div class="mx-auto w-full max-w-[900px] space-y-6 text-lg leading-8 text-[#003174]">
                <p>{{ __('offer_dpf.s1_p1') }}</p>
                <p>{{ __('offer_dpf.s1_p2') }}</p>
                <p>{{ __('offer_dpf.s1_p3') }}</p>
            </div>
        </div>
    </section>
    <section class="relative overflow-hidden bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="pointer-events-none absolute -left-24 top-1/2 h-72 w-72 -translate-y-1/2 rounded-full bg-[#244396]/15 blur-3xl"></div>
        <div class="pointer-events-none absolute -right-16 bottom-0 h-56 w-56 rounded-full bg-[#ffad03]/10 blur-3xl"></div>
        <div class="relative mx-auto grid max-w-[1650px] gap-12 lg:grid-cols-2 lg:items-center lg:gap-16">
            <div class="order-2 space-y-6 text-lg leading-8 text-[#001348] lg:order-1">
                <h2 class="text-2xl font-semibold leading-tight text-[#001348] sm:text-3xl">{{ __('offer_dpf.s2_heading') }}</h2>
                <p>{{ __('offer_dpf.s2_p1') }}</p>
                <p>{{ __('offer_dpf.s2_p2') }}</p>
                <p>{{ __('offer_dpf.s2_p3') }}</p>
            </div>
            <div class="order-1 lg:order-2">
                <div class="relative mx-auto max-w-lg lg:max-w-none">
                    <div class="absolute -inset-3 rounded-[28px] bg-gradient-to-br from-[#244396]/20 to-[#001348]/10 blur-sm"></div>
                    <figure class="relative overflow-hidden rounded-[24px] border border-white/80 bg-white shadow-[0_24px_50px_-12px_rgba(36,67,150,.25)]">
                        <div class="aspect-[4/3] bg-gradient-to-br from-[#f8fafc] to-[#edf2f7] p-8 sm:p-10">
                            <img src="https://motsler.pl/wp-content/uploads/2024/12/slr-premium_300px.png" alt="{{ __('offer_dpf.s2_img_alt') }}" class="mx-auto h-full max-h-[320px] w-auto object-contain sm:max-h-[380px]">
                        </div>
                        <figcaption class="border-t border-[#e2e8f0] bg-white/95 px-4 py-3 text-center text-xs font-medium uppercase tracking-wide text-[#244396]">{{ __('page.offer_dpf') }}</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white px-6 pb-0 pt-14 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s3_intro') }}</h2>
            <div class="mt-12 grid gap-10 lg:grid-cols-2 lg:gap-12">
                <div class="rounded-[20px] border border-[#cbd2d9] bg-[#f8fafc] p-8 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <h3 class="text-2xl font-bold text-[#001348]">{{ __('offer_dpf.s3_premium_title') }}</h3>
                    <ul class="mt-6 space-y-3 text-[#003174]">
                        @for ($i = 1; $i <= 7; $i++)
                            <li class="flex gap-3 text-sm leading-7 sm:text-base">
                                <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#244396]" aria-hidden="true"></span>
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
                            <li class="flex gap-3 text-sm leading-7 sm:text-base">
                                <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#ffad03]" aria-hidden="true"></span>
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
            <div class="mx-auto w-full max-w-[1650px]">
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
                <div class="mx-auto mt-14 max-w-3xl space-y-4 text-center text-lg leading-8 text-white/95">
                    <p>{{ __('offer_dpf.s3_materials') }}</p>
                    <p class="font-semibold text-[#6bd269]">{{ __('offer_dpf.s3_service') }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1650px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s4_title') }}</h2>
            <p class="mx-auto mt-6 max-w-[900px] text-center text-lg leading-8 text-[#003174]">{{ __('offer_dpf.s4_lead') }}</p>
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
    <section class="bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1650px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s41_title') }}</h2>
            <p class="mx-auto mt-6 max-w-[900px] text-center text-lg leading-8 text-[#003174]">{{ __('offer_dpf.s41_body') }}</p>
            <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @for ($g = 1; $g <= 4; $g++)
                    <div class="flex aspect-[4/3] items-center justify-center rounded-[20px] border border-dashed border-[#94a3b8] bg-white p-4 text-center text-sm text-[#64748b] shadow-sm">{{ __('offer_dpf.s3_img_placeholder') }}</div>
                @endfor
            </div>
            <div class="mx-auto mt-12 max-w-4xl">
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
    <section class="border-t border-[#d8e0ea] bg-[#edf2f7] px-6 py-16 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
            <div class="mb-10 flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
                <div>
                    <h2 class="text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s5_opinions_title') }}</h2>
                    <p class="mt-2 text-lg text-[#003174]">{{ __('offer_dpf.s5_opinions_sub') }}</p>
                </div>
                <img src="https://motsler.pl/wp-content/uploads/2025/01/googl.png" alt="" class="h-10 w-auto md:mt-2" width="120" height="40">
            </div>
            <div class="grid gap-6 lg:grid-cols-3">
                <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <img src="https://motsler.pl/wp-content/uploads/2025/01/aiw_200.png" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale" width="120" height="48">
                    <div class="text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-6 text-sm leading-7 text-[#001348]">{{ __('offer_dpf.s5_t1_quote') }}</blockquote>
                    <div class="mt-6 font-semibold text-[#001348]">{{ __('offer_dpf.s5_t1_name') }}</div>
                    <div class="text-sm text-[#003174]/80">{{ __('offer_dpf.s5_t1_company') }}</div>
                </article>
                <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <img src="https://motsler.pl/wp-content/uploads/2025/01/auto_bodo_200-1.png" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale" width="120" height="48">
                    <div class="text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-6 text-sm leading-7 text-[#001348]">{{ __('offer_dpf.s5_t2_quote') }}</blockquote>
                    <div class="mt-6 font-semibold text-[#001348]">{{ __('offer_dpf.s5_t2_name') }}</div>
                    <div class="text-sm text-[#003174]/80">{{ __('offer_dpf.s5_t2_company') }}</div>
                </article>
                <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                    <img src="https://motsler.pl/wp-content/uploads/2025/01/clean_fap_200.png" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale" width="120" height="48">
                    <div class="text-amber-400" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-6 text-sm leading-7 text-[#001348]">{{ __('offer_dpf.s5_t3_quote') }}</blockquote>
                    <div class="mt-6 font-semibold text-[#001348]">{{ __('offer_dpf.s5_t3_name') }}</div>
                    <div class="text-sm text-[#003174]/80">{{ __('offer_dpf.s5_t3_company') }}</div>
                </article>
            </div>
        </div>
    </section>
    <section class="border-y border-[#e2e8f0] bg-white px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
            <h2 class="mb-8 text-center text-xl font-semibold text-[#001348]">{{ __('offer_dpf.s5_logos_title') }}</h2>
            <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-8">
                @foreach ([['https://motsler.pl/wp-content/uploads/2025/01/calpeda_small.png','calpeda'],['https://motsler.pl/wp-content/uploads/2025/01/ebara.png','ebara'],['https://motsler.pl/wp-content/uploads/2025/01/fatek_small.png','fatek'],['https://motsler.pl/wp-content/uploads/2025/01/weintek_small.png','weintek'],['https://motsler.pl/wp-content/uploads/2025/01/wieland_small.png','wieland'],['https://motsler.pl/wp-content/uploads/2025/01/eaton_small.png','eaton'],['https://motsler.pl/wp-content/uploads/2025/01/schneider_small.png','schneider'],['https://motsler.pl/wp-content/uploads/2025/01/siemens_small.png','siemens']] as $logo)
                    <img src="{{ $logo[0] }}" alt="{{ $logo[1] }}" class="h-12 w-auto opacity-70 grayscale" width="120" height="48">
                @endforeach
            </div>
        </div>
    </section>
    <section class="bg-[#00264b] px-6 py-16 text-white sm:px-10">
        <div class="mx-auto grid w-full max-w-[1650px] gap-10 lg:grid-cols-2 lg:items-stretch lg:gap-12">
            <div class="flex flex-col justify-center">
                <h2 class="text-3xl font-semibold sm:text-4xl">{{ __('offer_dpf.s5_map_title') }}</h2>
                <p class="mt-4 text-lg text-white/90">{{ __('offer_dpf.s5_map_lead') }}</p>
                <p class="mt-8 text-xl font-bold">{{ __('footer.company_line') }}</p>
                <p class="mt-2 text-lg text-white/95">{{ __('contact.address_value') }}</p>
                <a href="{{ $offerDpfMapLink }}" target="_blank" rel="noopener noreferrer" class="mt-8 inline-flex w-fit rounded-full border border-white/40 px-6 py-3 text-sm font-semibold text-white hover:bg-white/10">{{ __('offer_dpf.s5_map_open') }}</a>
            </div>
            <div class="min-h-[280px] overflow-hidden rounded-[20px] bg-white/10 shadow-xl lg:min-h-[360px]">
                <iframe class="h-full min-h-[280px] w-full border-0 lg:min-h-[360px]" src="{{ $offerDpfMapEmbed }}" title="{{ __('offer_dpf.s5_map_title') }}" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <section class="bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[900px]">
            <h2 class="text-center text-3xl font-semibold leading-tight text-[#001348] sm:text-4xl">{{ __('offer_dpf.s6_title') }}</h2>
            <p class="mt-6 text-center text-xl font-medium text-[#244396]">{{ __('offer_dpf.s6_lead') }}</p>
            <ul class="mt-10 space-y-5 text-lg leading-8 text-[#003174]">
                @for ($b = 1; $b <= 7; $b++)
                    <li class="flex gap-4">
                        <span class="mt-2 h-2.5 w-2.5 shrink-0 rounded-full bg-[#ffad03]" aria-hidden="true"></span>
                        <span>{{ __('offer_dpf.s6_b'.$b) }}</span>
                    </li>
                @endfor
            </ul>
            <div class="mt-12 text-center">
                <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="inline-flex rounded-full bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white hover:bg-[#001348]">{{ __('offer_dpf.s6_cta') }}</a>
            </div>
        </div>
    </section>
    <section class="border-t border-[#e2e8f0] bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[960px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s7_title') }}</h2>
            <p class="mx-auto mt-4 max-w-2xl text-center text-lg text-[#003174]">{{ __('offer_dpf.s7_lead') }}</p>
            <div class="mt-10">
                @if ($offerDpfStoryVideoId)
                    <div class="aspect-video overflow-hidden rounded-[20px] bg-black shadow-[0_24px_50px_-12px_rgba(36,67,150,.2)]">
                        <iframe class="h-full w-full border-0" src="https://www.youtube.com/embed/{{ $offerDpfStoryVideoId }}?rel=0&modestbranding=1" title="{{ __('offer_dpf.s7_title') }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @else
                    <div class="flex aspect-video items-center justify-center rounded-[20px] border border-dashed border-[#94a3b8] bg-white px-6 text-center text-[#64748b] shadow-sm">{{ __('offer_dpf.s7_video_placeholder') }}</div>
                @endif
            </div>
        </div>
    </section>
    <section class="border-t border-[#e2e8f0] bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[960px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s8_title') }}</h2>
            <p class="mx-auto mt-4 max-w-2xl text-center text-lg text-[#003174]">{{ __('offer_dpf.s8_subtitle') }}</p>
            <div class="mt-10 overflow-x-auto rounded-[20px] border border-[#e2e8f0] shadow-sm">
                <table class="w-full min-w-[520px] border-collapse text-left text-sm sm:text-base">
                    <thead>
                        <tr class="bg-[#001348] text-white">
                            <th class="px-4 py-4 font-semibold sm:px-6">{{ __('offer_dpf.s8_th_feature') }}</th>
                            <th class="px-4 py-4 font-semibold sm:px-6">{{ __('offer_dpf.s8_th_premium') }}</th>
                            <th class="px-4 py-4 font-semibold sm:px-6">{{ __('offer_dpf.s8_th_plus') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-[#003174]">
                        <tr class="border-t border-[#e2e8f0]">
                            <td class="px-4 py-4 font-medium text-[#001348] sm:px-6">{{ __('offer_dpf.s8_row_chamber') }}</td>
                            <td class="px-4 py-4 sm:px-6">{{ __('offer_dpf.s8_v_p_chamber') }}</td>
                            <td class="px-4 py-4 font-medium text-[#244396] sm:px-6">{{ __('offer_dpf.s8_v_plus_chamber') }}</td>
                        </tr>
                        <tr class="border-t border-[#e2e8f0] bg-[#f8fafc]">
                            <td class="px-4 py-4 font-medium text-[#001348] sm:px-6">{{ __('offer_dpf.s8_row_filters') }}</td>
                            <td class="px-4 py-4 sm:px-6">{{ __('offer_dpf.s8_v_p_filters') }}</td>
                            <td class="px-4 py-4 font-medium text-[#244396] sm:px-6">{{ __('offer_dpf.s8_v_plus_filters') }}</td>
                        </tr>
                        <tr class="border-t border-[#e2e8f0]">
                            <td class="px-4 py-4 font-medium text-[#001348] sm:px-6">{{ __('offer_dpf.s8_row_pumps') }}</td>
                            <td class="px-4 py-4 sm:px-6">{{ __('offer_dpf.s8_v_p_pumps') }}</td>
                            <td class="px-4 py-4 font-medium text-[#244396] sm:px-6">{{ __('offer_dpf.s8_v_plus_pumps') }}</td>
                        </tr>
                        <tr class="border-t border-[#e2e8f0] bg-[#f8fafc]">
                            <td class="px-4 py-4 font-medium text-[#001348] sm:px-6">{{ __('offer_dpf.s8_row_turbines') }}</td>
                            <td class="px-4 py-4 sm:px-6">{{ __('offer_dpf.s8_v_p_turbines') }}</td>
                            <td class="px-4 py-4 font-medium text-[#244396] sm:px-6">{{ __('offer_dpf.s8_v_plus_turbines') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="{{ locale_route('contact', ['locale' => $l]) }}#contact-form" class="inline-flex w-full justify-center rounded-full bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white hover:bg-[#001348] sm:w-auto">{{ __('offer_dpf.s8_cta_product') }}</a>
                <a href="{{ locale_route('contact', ['locale' => $l]) }}#contact-form" class="inline-flex w-full justify-center rounded-full border-2 border-[#244396] bg-white px-8 py-4 text-sm font-semibold uppercase text-[#244396] hover:bg-[#f8fafc] sm:w-auto">{{ __('offer_dpf.s8_cta_quote') }}</a>
            </div>
        </div>
    </section>
    <section class="bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[1650px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s9_title') }}</h2>
            <p class="mx-auto mt-4 max-w-3xl text-center text-lg text-[#003174]">{{ __('offer_dpf.s9_subtitle') }}</p>
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
    <section class="border-t border-[#e2e8f0] bg-white px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[900px]">
            <h2 class="text-center text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s10_title') }}</h2>
            <ul class="mt-10 space-y-5 text-lg leading-8 text-[#003174]">
                @for ($w = 1; $w <= 4; $w++)
                    <li class="flex gap-4">
                        <span class="mt-2 h-2.5 w-2.5 shrink-0 rounded-full bg-[#6bd269]" aria-hidden="true"></span>
                        <span>{{ __('offer_dpf.s10_b'.$w) }}</span>
                    </li>
                @endfor
            </ul>
        </div>
    </section>
    <section class="border-t border-[#e2e8f0] bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto w-full max-w-[900px]">
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
    <section class="bg-white px-6 py-16 sm:px-10 sm:py-20" id="offer-dpf-form">
        <div class="mx-auto w-full max-w-[640px] text-center">
            <h2 class="text-3xl font-semibold text-[#001348] sm:text-4xl">{{ __('offer_dpf.s12_title') }}</h2>
            <p class="mt-4 text-lg text-[#003174]">{{ __('offer_dpf.s12_subtitle') }}</p>
            @if (session('contact_sent'))
                <div class="mt-8 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-900">{{ __('form.sent') }}</div>
            @endif
            <form class="mt-10 space-y-5 text-left" method="post" action="{{ locale_route('contact.store', ['locale' => $l]) }}">
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
    <section class="border-t border-[#e2e8f0] bg-[#edf2f7] px-6 py-16 sm:px-10 sm:py-20">
        <div class="mx-auto flex w-full max-w-[1100px] flex-col gap-10 lg:flex-row lg:items-center lg:gap-14">
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
    </section>
</div>
@endsection
