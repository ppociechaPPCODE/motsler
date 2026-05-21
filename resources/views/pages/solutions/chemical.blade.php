@extends('layouts.app')
@section('title', __('page.chem_cleanx'))
@section('meta_description', __('chem_cleanx.seo_description'))
@section('content')
@php
    $l = app()->getLocale();
    $contactUrl = locale_route('contact', ['locale' => $l]).'#contact-form';
@endphp
<div class="w-full">
    <section class="relative scroll-mt-24 overflow-hidden border-b border-[#1e3a5f]/30 bg-[linear-gradient(135deg,#0b1f3a_0%,#132946_40%,#1a3554_100%)] text-white" aria-labelledby="chem-cleanx-hero-h1">
        <div class="pointer-events-none absolute inset-0 opacity-[0.12]" style="background-image:linear-gradient(90deg,transparent 0%,rgba(255,255,255,.03) 50%,transparent 100%),repeating-linear-gradient(-45deg,transparent,transparent 8px,rgba(255,255,255,.02) 8px,rgba(255,255,255,.02) 9px)" aria-hidden="true"></div>
        <div class="relative mx-auto flex w-full max-w-[1200px] flex-col gap-12 px-5 py-14 sm:px-8 sm:py-16 lg:flex-row lg:items-stretch lg:gap-14 lg:py-20">
            <div class="flex min-w-0 flex-1 flex-col justify-center text-left">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-emerald-400/95 sm:text-sm">DPF CleanX</p>
                <h1 id="chem-cleanx-hero-h1" class="mt-4 text-balance text-3xl font-semibold leading-[1.15] tracking-tight text-white sm:text-4xl lg:text-[2.125rem]">{{ __('chem_cleanx.hero_h1') }}</h1>
                <p class="mt-6 max-w-xl whitespace-pre-line text-base leading-relaxed text-white/88 sm:text-lg">{{ __('chem_cleanx.hero_lead') }}</p>
                <ul class="mt-8 space-y-2.5 text-sm leading-snug text-white/90 sm:text-[0.9375rem]" role="list">
                    <li class="flex gap-2.5"><span class="shrink-0 text-emerald-400" aria-hidden="true">✔</span><span>{{ __('chem_cleanx.stat1') }}</span></li>
                    <li class="flex gap-2.5"><span class="shrink-0 text-emerald-400" aria-hidden="true">✔</span><span>{{ __('chem_cleanx.stat2') }}</span></li>
                    <li class="flex gap-2.5"><span class="shrink-0 text-emerald-400" aria-hidden="true">✔</span><span>{{ __('chem_cleanx.stat3') }}</span></li>
                </ul>
                <a href="#cleanx-modes" class="mt-10 inline-flex min-h-[3rem] w-fit items-center justify-center rounded-full bg-accent px-8 py-3.5 text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/30 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">{{ __('chem_cleanx.hero_cta') }}</a>
            </div>
            <div class="relative flex min-h-[280px] w-full shrink-0 flex-col justify-center lg:w-[min(100%,380px)] lg:max-w-[380px]">
                <div class="absolute -right-6 -top-6 h-40 w-40 rounded-full bg-emerald-500/10 blur-3xl" aria-hidden="true"></div>
                <div class="absolute -bottom-8 left-1/4 h-32 w-32 rounded-full bg-sky-400/10 blur-2xl" aria-hidden="true"></div>
                <div class="relative flex flex-1 flex-col justify-center gap-4 rounded-2xl border border-white/10 bg-white/[0.06] p-6 backdrop-blur-sm sm:p-8">
                    <p class="text-center text-[10px] font-bold uppercase tracking-[0.25em] text-white/55">{{ __('page.chem_cleanx') }}</p>
                    <div class="flex items-end justify-center gap-3 sm:gap-4">
                        <div class="flex w-[28%] max-w-[6.5rem] flex-col items-center">
                            <div class="flex h-36 w-full max-w-[6rem] flex-col items-center justify-end rounded-t-xl border border-amber-400/35 bg-[linear-gradient(180deg,rgba(251,191,36,.25)_0%,rgba(15,23,42,.4)_100%)] px-2 pb-3 pt-6 shadow-[inset_0_1px_0_rgba(255,255,255,.15)] sm:h-44">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-amber-200/90 sm:text-xs">{{ __('chem_cleanx.visual_ready') }}</span>
                            </div>
                            <div class="h-2 w-[85%] rounded-b-md bg-zinc-700/80"></div>
                        </div>
                        <div class="flex w-[32%] max-w-[7rem] flex-col items-center">
                            <div class="flex h-44 w-full max-w-[6.75rem] flex-col items-center justify-end rounded-t-xl border border-emerald-400/35 bg-[linear-gradient(180deg,rgba(52,211,153,.28)_0%,rgba(15,23,42,.45)_100%)] px-2 pb-3 pt-6 shadow-[inset_0_1px_0_rgba(255,255,255,.15)] sm:h-52">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-200/90 sm:text-xs">{{ __('chem_cleanx.visual_pro') }}</span>
                            </div>
                            <div class="h-2 w-[85%] rounded-b-md bg-zinc-700/80"></div>
                        </div>
                        <div class="flex w-[28%] max-w-[6.5rem] flex-col items-center">
                            <div class="flex h-40 w-full max-w-[6rem] flex-col items-center justify-end rounded-t-xl border border-rose-400/35 bg-[linear-gradient(180deg,rgba(251,113,133,.22)_0%,rgba(15,23,42,.45)_100%)] px-2 pb-3 pt-6 shadow-[inset_0_1px_0_rgba(255,255,255,.12)] sm:h-48">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-rose-200/90 sm:text-xs">{{ __('chem_cleanx.visual_ultra') }}</span>
                            </div>
                            <div class="h-2 w-[85%] rounded-b-md bg-zinc-700/80"></div>
                        </div>
                    </div>
                    <div class="mt-2 h-px w-full bg-gradient-to-r from-transparent via-white/20 to-transparent" aria-hidden="true"></div>
                    <p class="text-center text-xs leading-relaxed text-white/55">READY · PRO · ULTRA ACTIVE</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cleanx-modes" class="scroll-mt-24 w-full border-b border-[#e2e8f0] bg-white" aria-labelledby="cleanx-modes-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-8 sm:py-16">
            <h2 id="cleanx-modes-heading" class="sr-only">{{ __('page.chem_cleanx') }}</h2>
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 lg:gap-8">
                <article class="flex flex-col rounded-2xl border border-amber-200/80 bg-[linear-gradient(180deg,#fffbeb_0%,#ffffff_55%)] p-6 shadow-sm sm:p-7">
                    <p class="text-[11px] font-bold uppercase tracking-[0.14em] text-amber-700">{{ __('chem_cleanx.mode_label_fast') }}</p>
                    <h3 class="mt-3 text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('chem_cleanx.mode_fast_name') }}</h3>
                    <p class="mt-3 text-pretty text-sm leading-relaxed text-zinc-600">{{ __('chem_cleanx.mode_fast_desc') }}</p>
                    <p class="mt-5 text-xs font-semibold uppercase tracking-wide text-zinc-500">{{ __('chem_cleanx.applications_label') }}</p>
                    <ul class="mt-2 space-y-1.5 text-sm leading-relaxed text-zinc-700" role="list">
                        <li class="flex gap-2"><span class="text-amber-600" aria-hidden="true">✔</span>{{ __('chem_cleanx.mode_fast_app1') }}</li>
                        <li class="flex gap-2"><span class="text-amber-600" aria-hidden="true">✔</span>{{ __('chem_cleanx.mode_fast_app2') }}</li>
                        <li class="flex gap-2"><span class="text-amber-600" aria-hidden="true">✔</span>{{ __('chem_cleanx.mode_fast_app3') }}</li>
                    </ul>
                    <p class="mt-5 text-xs font-semibold uppercase tracking-wide text-zinc-500">{{ __('chem_cleanx.mode_fast_prod_title') }}</p>
                    <ul class="mt-2 space-y-1 text-sm font-medium text-primary" role="list">
                        <li>{{ __('chem_cleanx.mode_fast_p1') }}</li>
                        <li>{{ __('chem_cleanx.mode_fast_p2') }}</li>
                    </ul>
                </article>
                <article class="flex flex-col rounded-2xl border border-emerald-200/80 bg-[linear-gradient(180deg,#ecfdf5_0%,#ffffff_55%)] p-6 shadow-sm sm:p-7">
                    <p class="text-[11px] font-bold uppercase tracking-[0.14em] text-emerald-800">{{ __('chem_cleanx.mode_label_eff') }}</p>
                    <h3 class="mt-3 text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('chem_cleanx.mode_eff_name') }}</h3>
                    <p class="mt-3 text-pretty text-sm leading-relaxed text-zinc-600">{{ __('chem_cleanx.mode_eff_desc') }}</p>
                    <p class="mt-5 text-xs font-semibold uppercase tracking-wide text-zinc-500">{{ __('chem_cleanx.applications_label') }}</p>
                    <ul class="mt-2 space-y-1.5 text-sm leading-relaxed text-zinc-700" role="list">
                        <li class="flex gap-2"><span class="text-emerald-600" aria-hidden="true">✔</span>{{ __('chem_cleanx.mode_eff_app1') }}</li>
                        <li class="flex gap-2"><span class="text-emerald-600" aria-hidden="true">✔</span>{{ __('chem_cleanx.mode_eff_app2') }}</li>
                        <li class="flex gap-2"><span class="text-emerald-600" aria-hidden="true">✔</span>{{ __('chem_cleanx.mode_eff_app3') }}</li>
                    </ul>
                    <p class="mt-5 text-xs font-semibold uppercase tracking-wide text-zinc-500">{{ __('chem_cleanx.mode_eff_prod_title') }}</p>
                    <ul class="mt-2 space-y-1 text-sm font-medium text-primary" role="list">
                        <li>{{ __('chem_cleanx.mode_eff_p1') }}</li>
                        <li>{{ __('chem_cleanx.mode_eff_p2') }}</li>
                    </ul>
                </article>
                <article class="flex flex-col rounded-2xl border border-rose-200/80 bg-[linear-gradient(180deg,#fff1f2_0%,#ffffff_55%)] p-6 shadow-sm sm:p-7">
                    <p class="text-[11px] font-bold uppercase tracking-[0.14em] text-rose-800">{{ __('chem_cleanx.mode_label_hd') }}</p>
                    <h3 class="mt-3 text-lg font-semibold leading-snug text-primary sm:text-xl">{{ __('chem_cleanx.mode_hd_name') }}</h3>
                    <p class="mt-3 text-pretty text-sm leading-relaxed text-zinc-600">{{ __('chem_cleanx.mode_hd_desc') }}</p>
                    <p class="mt-5 text-xs font-semibold uppercase tracking-wide text-zinc-500">{{ __('chem_cleanx.applications_label') }}</p>
                    <ul class="mt-2 space-y-1.5 text-sm leading-relaxed text-zinc-700" role="list">
                        <li class="flex gap-2"><span class="text-rose-600" aria-hidden="true">✔</span>{{ __('chem_cleanx.mode_hd_app1') }}</li>
                        <li class="flex gap-2"><span class="text-rose-600" aria-hidden="true">✔</span>{{ __('chem_cleanx.mode_hd_app2') }}</li>
                        <li class="flex gap-2"><span class="text-rose-600" aria-hidden="true">✔</span>{{ __('chem_cleanx.mode_hd_app3') }}</li>
                    </ul>
                    <p class="mt-5 text-xs font-semibold uppercase tracking-wide text-zinc-500">{{ __('chem_cleanx.mode_hd_prod_title') }}</p>
                    <ul class="mt-2 space-y-1 text-sm font-medium text-primary" role="list">
                        <li>{{ __('chem_cleanx.mode_hd_p1') }}</li>
                        <li>{{ __('chem_cleanx.mode_hd_p2') }}</li>
                        <li>{{ __('chem_cleanx.mode_hd_p3') }}</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="scroll-mt-24 w-full border-b border-[#e2e8f0] bg-[#f8fafc]" aria-labelledby="chem-cleanx-how-h2">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-8 sm:py-16">
            <h2 id="chem-cleanx-how-h2" class="max-w-[52rem] text-balance text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('chem_cleanx.how_h2') }}</h2>
            <p class="mt-6 max-w-[52rem] whitespace-pre-line text-pretty text-base leading-relaxed text-zinc-700 sm:text-lg">{{ __('chem_cleanx.how_lead') }}</p>
            <p class="mt-8 text-xs font-bold uppercase tracking-[0.15em] text-primary">{{ __('chem_cleanx.how_params_title') }}</p>
            <ul class="mt-4 max-w-xl space-y-2 text-sm leading-relaxed text-zinc-700 sm:text-[0.9375rem]" role="list">
                <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span>{{ __('chem_cleanx.how_param1') }}</li>
                <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span>{{ __('chem_cleanx.how_param2') }}</li>
                <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span>{{ __('chem_cleanx.how_param3') }}</li>
            </ul>
        </div>
    </section>

    <section class="scroll-mt-24 w-full border-b border-[#e2e8f0] bg-white" aria-labelledby="chem-cleanx-pick-h2">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-8 sm:py-16">
            <h2 id="chem-cleanx-pick-h2" class="text-balance text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('chem_cleanx.pick_h2') }}</h2>
            <p class="mt-5 max-w-[52rem] text-pretty text-base leading-relaxed text-zinc-600 sm:text-lg">{{ __('chem_cleanx.pick_lead') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-5">
                <div class="rounded-xl border border-amber-200 bg-amber-50/80 px-5 py-5">
                    <p class="text-xs font-bold uppercase tracking-wide text-amber-800">{{ __('chem_cleanx.pick_fast_title') }}</p>
                    <p class="mt-2 text-sm leading-relaxed text-zinc-800">{{ __('chem_cleanx.pick_fast_line') }}</p>
                </div>
                <div class="rounded-xl border border-emerald-200 bg-emerald-50/80 px-5 py-5">
                    <p class="text-xs font-bold uppercase tracking-wide text-emerald-800">{{ __('chem_cleanx.pick_eff_title') }}</p>
                    <p class="mt-2 text-sm leading-relaxed text-zinc-800">{{ __('chem_cleanx.pick_eff_line') }}</p>
                </div>
                <div class="rounded-xl border border-rose-200 bg-rose-50/80 px-5 py-5">
                    <p class="text-xs font-bold uppercase tracking-wide text-rose-800">{{ __('chem_cleanx.pick_hd_title') }}</p>
                    <p class="mt-2 text-sm leading-relaxed text-zinc-800">{{ __('chem_cleanx.pick_hd_line') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="scroll-mt-24 w-full border-b border-[#e2e8f0] bg-[#f1f5f9]" aria-labelledby="chem-cleanx-lead-h2">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-8 sm:py-16">
            <h2 id="chem-cleanx-lead-h2" class="text-balance text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('chem_cleanx.lead_h2') }}</h2>
            <p class="mt-5 max-w-[40rem] text-pretty text-base leading-relaxed text-zinc-700 sm:text-lg">{{ __('chem_cleanx.lead_desc') }}</p>
            <div class="mt-10 max-w-xl rounded-2xl border border-[#e2e8f0] bg-white p-6 shadow-sm sm:p-8">
                <p class="text-pretty text-base leading-relaxed text-zinc-800">{{ __('chem_cleanx.lead_box') }}</p>
                <a href="{{ $contactUrl }}" class="mt-6 inline-flex min-h-[3rem] w-full items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-md transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:w-auto">{{ __('chem_cleanx.lead_cta') }}</a>
            </div>
        </div>
    </section>

    <section class="scroll-mt-24 w-full bg-[linear-gradient(180deg,#0b1f3a_0%,#132946_100%)] text-white" aria-labelledby="chem-cleanx-final-h2">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-14 text-center sm:px-8 sm:py-20">
            <h2 id="chem-cleanx-final-h2" class="mx-auto max-w-[40rem] text-balance text-2xl font-semibold leading-tight text-white sm:text-3xl">{{ __('chem_cleanx.final_h2') }}</h2>
            <p class="mx-auto mt-6 max-w-[42rem] text-pretty text-base leading-relaxed text-white/85 sm:text-lg">{{ __('chem_cleanx.final_lead') }}</p>
            <a href="#cleanx-modes" class="mt-10 inline-flex min-h-[3rem] items-center justify-center rounded-full border-2 border-white/90 bg-transparent px-10 py-3.5 text-sm font-bold uppercase tracking-wide text-white transition hover:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">{{ __('chem_cleanx.final_cta') }}</a>
        </div>
    </section>
</div>
@endsection
