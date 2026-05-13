@extends('layouts.app')
@section('title', __('page.contact'))
@section('meta_description', __('page.seo_description_contact'))
@section('content')
@php
    $l = app()->getLocale();
    $hasZdj = file_exists(public_path('images/zdjecie.jpg'));
    $hasSeb = file_exists(public_path('images/offer/sebastian-tkacz.jpg'));
    $hasFoto = file_exists(public_path('images/foto.png'));
    $contactHeroSrc = $hasZdj ? asset('images/zdjecie.jpg') : ($hasSeb ? asset('images/offer/sebastian-tkacz.jpg') : null);
    $contactExpertSrc = $hasFoto ? asset('images/foto.png') : (($hasSeb && $hasZdj) ? asset('images/offer/sebastian-tkacz.jpg') : $contactHeroSrc);
@endphp
<div class="pb-28 lg:pb-0">
    <section class="scroll-mt-24 bg-gradient-to-b from-[#0b1f3a] via-[#0b1f3a] to-[#0e2546] text-white" aria-labelledby="contact-hero-h1">
        <div class="mx-auto w-full max-w-[1200px] px-5 py-12 sm:px-8 sm:py-16 lg:py-20">
            <div class="grid gap-10 lg:grid-cols-[1.05fr_1fr] lg:items-start lg:gap-14">
                <div class="min-w-0">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-accent">{{ __('contact_page.hero_badge') }}</p>
                    <h1 id="contact-hero-h1" class="mt-3 text-balance text-3xl font-semibold leading-tight tracking-tight text-white sm:text-4xl lg:text-[2.5rem]">{{ __('contact_page.hero_h1') }}</h1>
                    <p class="mt-4 text-pretty text-base leading-relaxed text-white/85 sm:text-lg">{{ __('contact_page.hero_sub') }}</p>
                    <ul class="mt-6 grid gap-2.5 text-sm font-medium leading-snug text-white sm:text-[0.9375rem]" role="list">
                        @foreach (range(1, 3) as $i)
                            <li class="flex items-start gap-2.5"><span class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-accent/20 text-accent" aria-hidden="true">✔</span><span>{{ __('contact_page.hero_li_'.$i) }}</span></li>
                        @endforeach
                    </ul>
                    <dl class="mt-8 grid gap-3 sm:grid-cols-2">
                        <a href="tel:{{ __('contact.phone_href') }}" class="group flex items-center gap-3 rounded-xl border border-white/15 bg-white/5 px-4 py-3 transition hover:border-accent hover:bg-white/10">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-accent/20 text-lg text-accent" aria-hidden="true">📞</span>
                            <span class="min-w-0">
                                <dt class="text-[0.7rem] font-bold uppercase tracking-wider text-white/60">{{ __('contact_page.quick_phone_label') }}</dt>
                                <dd class="text-sm font-bold tabular-nums text-white">{{ __('contact.phone_value') }}</dd>
                            </span>
                        </a>
                        <a href="mailto:{{ __('contact.email_value') }}" class="group flex items-center gap-3 rounded-xl border border-white/15 bg-white/5 px-4 py-3 transition hover:border-accent hover:bg-white/10">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-accent/20 text-lg text-accent" aria-hidden="true">📧</span>
                            <span class="min-w-0">
                                <dt class="text-[0.7rem] font-bold uppercase tracking-wider text-white/60">{{ __('contact_page.quick_email_label') }}</dt>
                                <dd class="break-all text-sm font-semibold text-white">{{ __('contact.email_value') }}</dd>
                            </span>
                        </a>
                    </dl>
                </div>

                <div id="contact-callback-form" class="scroll-mt-24 min-w-0">
                    <div class="rounded-2xl border border-white/10 bg-white p-5 text-primary shadow-2xl shadow-black/40 sm:p-7">
                        <h2 class="text-balance text-xl font-semibold leading-tight text-primary sm:text-2xl">{{ __('contact_page.form_h2') }}</h2>
                        <p class="mt-2 text-sm text-zinc-600">{{ __('contact_page.quick_consult_body') }}</p>
                        @if (session('contact_sent'))
                            <div class="mt-5 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-center text-sm text-emerald-900">{{ __('form.sent') }}</div>
                        @endif
                        @if (session('contact_error'))
                            <div class="mt-5 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-center text-sm text-red-900">{{ __('contact.mail_failed') }}</div>
                        @endif
                        <form class="mt-6 space-y-4" method="post" action="{{ locale_route('contact.store', ['locale' => $l]) }}">
                            @csrf
                            <input type="hidden" name="form_context" value="callback">
                            <div>
                                <label class="sr-only" for="cb-phone">{{ __('contact_page.form_phone_label') }}</label>
                                <input class="w-full rounded-xl border-2 border-[#cbd2d9] bg-white px-4 py-3.5 text-base text-primary outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20" id="cb-phone" name="phone" type="tel" value="{{ old('phone') }}" required autocomplete="tel" maxlength="50" placeholder="{{ __('contact_page.form_phone_placeholder') }}" inputmode="tel">
                                @error('phone')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
                            <div class="grid gap-4 sm:grid-cols-2">
                                <div>
                                    <label class="sr-only" for="cb-name">{{ __('form.name') }}</label>
                                    <input class="w-full rounded-xl border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-primary outline-none focus:border-primary focus:ring-2 focus:ring-primary/20" id="cb-name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" maxlength="200" placeholder="{{ __('contact_page.form_name_placeholder') }}">
                                    @error('name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>
                                <div>
                                    <label class="sr-only" for="cb-email">{{ __('form.email') }}</label>
                                    <input class="w-full rounded-xl border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-primary outline-none focus:border-primary focus:ring-2 focus:ring-primary/20" id="cb-email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" placeholder="{{ __('contact_page.form_email_placeholder') }}">
                                    @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div>
                                <label class="sr-only" for="cb-message">{{ __('form.message') }}</label>
                                <textarea class="min-h-[6rem] w-full rounded-xl border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-primary outline-none focus:border-primary focus:ring-2 focus:ring-primary/20" id="cb-message" name="message" maxlength="5000" placeholder="{{ __('contact_page.form_message_placeholder') }}">{{ old('message') }}</textarea>
                                @error('message')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
                            <div class="flex items-start gap-3">
                                <input class="mt-1 h-4 w-4 shrink-0 rounded border-[#cbd2d9] text-primary focus:ring-primary" id="cb-privacy" name="privacy_accept" type="checkbox" value="1" {{ old('privacy_accept') ? 'checked' : '' }} required>
                                <label class="text-xs leading-snug text-zinc-700" for="cb-privacy">{{ __('form.privacy_accept') }}. <a href="{{ locale_route('privacy', ['locale' => $l]) }}" class="font-medium text-primary underline">{{ __('footer.privacy') }}</a>.</label>
                            </div>
                            @error('privacy_accept')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                            <button class="w-full rounded-full bg-accent py-4 text-center text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/20 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" type="submit">{{ __('contact_page.form_submit') }}</button>
                            <p class="text-center text-[0.7rem] leading-relaxed text-zinc-500">{{ __('contact_page.form_micro') }}</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="border-b border-[#e2e8f0] bg-white py-14 sm:py-20" aria-labelledby="contact-usp-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 sm:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-accent">{{ __('contact_page.usp_heading') }}</p>
                <h2 id="contact-usp-heading" class="mt-3 text-balance text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('contact_page.expert_h2') }}</h2>
            </div>
            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4 lg:gap-5">
                @foreach (range(1, 4) as $ui)
                    <div class="flex h-full flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-5 transition hover:border-accent/40 hover:shadow-md sm:p-6">
                        <span class="flex h-11 w-11 items-center justify-center rounded-full bg-accent/10 text-lg font-bold text-accent" aria-hidden="true">{{ $ui }}</span>
                        <p class="mt-4 text-sm font-medium leading-relaxed text-zinc-800 sm:text-[0.9375rem]">{{ __('contact_page.usp_'.$ui) }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="border-b border-[#e2e8f0] bg-[#f1f5f9] py-14 sm:py-20" aria-labelledby="contact-expert-h2">
        <div class="mx-auto grid w-full max-w-[1200px] gap-10 px-5 sm:px-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-center lg:gap-14">
            @if ($contactExpertSrc)
                <figure class="mx-auto w-full max-w-md overflow-hidden rounded-3xl border border-[#e2e8f0] bg-white shadow-xl shadow-primary/10 lg:mx-0 lg:max-w-none">
                    <img src="{{ $contactExpertSrc }}" alt="{{ __('contact_page.expert_img_alt') }}" class="aspect-[4/5] w-full object-cover object-center" width="720" height="900" loading="lazy" decoding="async">
                </figure>
            @endif
            <div class="min-w-0">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-accent">{{ __('contact_page.expert_badge') }}</p>
                <p class="mt-2 text-balance text-2xl font-bold leading-tight text-primary sm:text-3xl lg:text-[2rem]">{{ __('contact_page.hero_caption') }}</p>
                <h2 id="contact-expert-h2" class="mt-4 text-balance text-lg font-semibold leading-snug text-zinc-700 sm:text-xl">{{ __('contact_page.expert_h2') }}</h2>
                <div class="mt-5 space-y-3 text-sm leading-relaxed text-zinc-700 sm:text-base sm:leading-7">
                    @foreach (range(1, 4) as $ei)
                        <p class="text-pretty">{{ __('contact_page.expert_p'.$ei) }}</p>
                    @endforeach
                </div>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="tel:{{ __('contact.phone_href') }}" class="inline-flex min-h-[3rem] items-center justify-center gap-2 rounded-full border-2 border-primary bg-white px-6 py-3 text-sm font-bold uppercase tracking-wide text-primary shadow-sm transition hover:bg-primary hover:text-white">
                        <span aria-hidden="true">📞</span><span>{{ __('contact.phone_value') }}</span>
                    </a>
                    <a href="#contact-callback-form" class="inline-flex min-h-[3rem] items-center justify-center rounded-full bg-accent px-6 py-3 text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/15 transition hover:bg-accent/90">{{ __('contact_page.hero_cta') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-14 sm:py-20" aria-labelledby="contact-company-h2">
        <div class="mx-auto w-full max-w-[1200px] px-5 sm:px-8">
            <div class="overflow-hidden rounded-3xl border border-[#e2e8f0] bg-gradient-to-br from-[#f8fafc] via-white to-[#f8fafc] shadow-sm">
                <div class="border-b border-[#e8edf2] px-6 py-5 sm:px-8 sm:py-6">
                    <h2 id="contact-company-h2" class="text-lg font-semibold text-primary sm:text-xl">{{ __('contact_page.company_summary') }}</h2>
                </div>
                <div class="grid gap-0 sm:grid-cols-2">
                    <div class="border-b border-[#e8edf2] px-6 py-6 sm:border-b-0 sm:border-r sm:px-8 sm:py-7">
                        <p class="whitespace-pre-line text-sm font-semibold leading-relaxed text-primary sm:text-[0.9375rem] sm:leading-7">{{ __('contact_page.company_col_left') }}</p>
                    </div>
                    <div class="px-6 py-6 sm:px-8 sm:py-7">
                        <p class="whitespace-pre-line text-sm leading-relaxed text-zinc-700 sm:text-[0.9375rem] sm:leading-7">{{ __('contact_page.company_col_right') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="fixed inset-x-0 bottom-0 z-50 flex gap-2 border-t border-zinc-200 bg-white/95 p-3 shadow-[0_-10px_40px_-16px_rgba(0,0,0,0.18)] backdrop-blur-sm pb-[max(0.75rem,env(safe-area-inset-bottom))] lg:hidden" role="navigation" aria-label="{{ __('contact_page.sticky_aria') }}">
        <a href="tel:{{ __('contact.phone_href') }}" class="inline-flex min-h-[3rem] flex-1 items-center justify-center rounded-full border-2 border-primary bg-white px-3 text-center text-xs font-bold uppercase tracking-wide text-primary transition hover:bg-primary/5">{{ __('contact_page.sticky_call') }}</a>
        <a href="#contact-callback-form" class="inline-flex min-h-[3rem] flex-[1.15] items-center justify-center rounded-full bg-accent px-3 text-center text-xs font-bold uppercase tracking-wide text-white shadow-md transition hover:bg-accent/90">{{ __('contact_page.sticky_callback') }}</a>
    </div>
</div>
@endsection
