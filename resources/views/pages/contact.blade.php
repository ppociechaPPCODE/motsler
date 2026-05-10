@extends('layouts.app')
@section('title', __('page.contact'))
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
    <section class="scroll-mt-24 border-b border-[#e2e8f0] bg-[#f4f7fa]" aria-labelledby="contact-hero-h1">
        <div class="mx-auto grid w-full max-w-[1200px] gap-8 px-5 py-10 sm:px-8 sm:py-12 lg:grid-cols-2 lg:items-start lg:gap-12 lg:py-14">
            @if ($contactHeroSrc)
                <div class="order-1 mx-auto w-full max-w-md lg:order-2 lg:mx-0 lg:max-w-none">
                    <figure class="overflow-hidden rounded-2xl border border-[#e2e8f0] bg-[#f4f7fa] shadow-md">
                        <img src="{{ $contactHeroSrc }}" alt="{{ __('contact_page.hero_img_alt') }}" class="max-h-[13rem] w-full object-cover object-center sm:max-h-[16rem] lg:aspect-[4/5] lg:max-h-[min(28rem,70vh)] lg:min-h-[20rem]" width="800" height="1000" decoding="async" fetchpriority="high">
                    </figure>
                    <div class="mt-4 hidden text-center lg:block lg:text-left">
                        <p class="text-sm font-semibold text-primary">{{ __('contact_page.hero_caption') }}</p>
                        <p class="mt-2 inline-flex rounded-full border border-accent/30 bg-white px-3 py-1 text-xs font-bold uppercase tracking-wide text-accent shadow-sm">{{ __('contact_page.hero_badge') }}</p>
                    </div>
                </div>
            @endif
            <div class="order-2 min-w-0 lg:order-1">
                <h1 id="contact-hero-h1" class="text-balance text-2xl font-semibold leading-tight tracking-tight text-primary sm:text-3xl md:text-[1.85rem] md:leading-snug">{{ __('contact_page.hero_h1') }}</h1>
                <p class="mt-3 text-pretty text-base leading-relaxed text-zinc-700 sm:text-lg">{{ __('contact_page.hero_sub') }}</p>
                <ul class="mt-4 space-y-2 text-sm font-medium leading-snug text-zinc-800 sm:text-[0.9375rem]" role="list">
                    @foreach (range(1, 3) as $i)
                        <li class="flex gap-2.5"><span class="shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('contact_page.hero_li_'.$i) }}</span></li>
                    @endforeach
                </ul>
                <a href="#contact-callback-form" class="mt-5 inline-flex min-h-[3rem] w-full items-center justify-center rounded-full bg-accent px-6 py-3.5 text-center text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/20 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:w-auto">{{ __('contact_page.hero_cta') }}</a>
                @if ($contactHeroSrc)
                    <div class="mt-5 text-center lg:hidden">
                        <p class="text-sm font-semibold text-primary">{{ __('contact_page.hero_caption') }}</p>
                        <p class="mt-2 inline-flex rounded-full border border-accent/30 bg-white px-3 py-1 text-xs font-bold uppercase tracking-wide text-accent shadow-sm">{{ __('contact_page.hero_badge') }}</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="border-b border-[#e2e8f0] bg-white py-10 sm:py-12" aria-label="{{ __('contact_page.quick_section_aria') }}">
        <div class="mx-auto w-full max-w-[1200px] px-5 sm:px-8">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-5">
                <a href="tel:{{ __('contact.phone_href') }}" class="flex flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-5 shadow-sm transition hover:border-accent hover:shadow-md sm:p-6">
                    <span class="text-2xl" aria-hidden="true">📞</span>
                    <span class="mt-2 text-xs font-bold uppercase tracking-wide text-zinc-500">{{ __('contact_page.quick_phone_label') }}</span>
                    <span class="mt-1 text-lg font-bold tabular-nums text-primary">{{ __('contact.phone_value') }}</span>
                </a>
                <a href="mailto:{{ __('contact.email_value') }}" class="flex flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-5 shadow-sm transition hover:border-accent hover:shadow-md sm:p-6">
                    <span class="text-2xl" aria-hidden="true">📧</span>
                    <span class="mt-2 text-xs font-bold uppercase tracking-wide text-zinc-500">{{ __('contact_page.quick_email_label') }}</span>
                    <span class="mt-1 break-all text-sm font-semibold text-primary">{{ __('contact.email_value') }}</span>
                </a>
                <a href="#contact-callback-form" class="flex flex-col rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-5 shadow-sm transition hover:border-accent hover:shadow-md sm:p-6">
                    <span class="text-2xl" aria-hidden="true">⏱</span>
                    <span class="mt-2 text-xs font-bold uppercase tracking-wide text-zinc-500">{{ __('contact_page.quick_consult_label') }}</span>
                    <span class="mt-1 text-sm font-medium leading-snug text-zinc-700">{{ __('contact_page.quick_consult_body') }}</span>
                </a>
            </div>
        </div>
    </section>

    <section id="contact-callback-form" class="scroll-mt-24 border-b border-[#e2e8f0] bg-[#f1f5f9] py-12 sm:py-16" aria-labelledby="contact-form-h2">
        <div class="mx-auto w-full max-w-[36rem] px-5 sm:px-8">
            <h2 id="contact-form-h2" class="text-balance text-center text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('contact_page.form_h2') }}</h2>
            @if (session('contact_sent'))
                <div class="mt-6 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-center text-sm text-emerald-900">{{ __('form.sent') }}</div>
            @endif
            @if (session('contact_error'))
                <div class="mt-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-center text-sm text-red-900">{{ __('contact.mail_failed') }}</div>
            @endif
            <form class="mt-8 space-y-4" method="post" action="{{ locale_route('contact.store', ['locale' => $l]) }}">
                @csrf
                <input type="hidden" name="form_context" value="callback">
                <label class="sr-only" for="cb-phone">{{ __('contact_page.form_phone_label') }}</label>
                <input class="w-full rounded-xl border-2 border-[#cbd2d9] bg-white px-4 py-4 text-lg text-primary outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20" id="cb-phone" name="phone" type="tel" value="{{ old('phone') }}" required autocomplete="tel" maxlength="50" placeholder="{{ __('contact_page.form_phone_placeholder') }}" inputmode="tel">
                @error('phone')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                <label class="sr-only" for="cb-name">{{ __('form.name') }}</label>
                <input class="w-full rounded-xl border border-[#cbd2d9] bg-white px-4 py-3.5 text-sm text-primary outline-none focus:border-primary focus:ring-2 focus:ring-primary/20" id="cb-name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" maxlength="200" placeholder="{{ __('contact_page.form_name_placeholder') }}">
                @error('name')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                <label class="sr-only" for="cb-email">{{ __('form.email') }}</label>
                <input class="w-full rounded-xl border border-[#cbd2d9] bg-white px-4 py-3.5 text-sm text-primary outline-none focus:border-primary focus:ring-2 focus:ring-primary/20" id="cb-email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" placeholder="{{ __('contact_page.form_email_placeholder') }}">
                @error('email')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                <label class="sr-only" for="cb-message">{{ __('form.message') }}</label>
                <textarea class="min-h-[6rem] w-full rounded-xl border border-[#cbd2d9] bg-white px-4 py-3.5 text-sm text-primary outline-none focus:border-primary focus:ring-2 focus:ring-primary/20" id="cb-message" name="message" maxlength="5000" placeholder="{{ __('contact_page.form_message_placeholder') }}">{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                <div class="flex items-start gap-3 pt-1">
                    <input class="mt-1 h-4 w-4 shrink-0 rounded border-[#cbd2d9] text-primary focus:ring-primary" id="cb-privacy" name="privacy_accept" type="checkbox" value="1" {{ old('privacy_accept') ? 'checked' : '' }} required>
                    <label class="text-sm leading-snug text-zinc-800" for="cb-privacy">{{ __('form.privacy_accept') }}. <a href="{{ locale_route('privacy', ['locale' => $l]) }}" class="font-medium text-primary underline">{{ __('footer.privacy') }}</a>.</label>
                </div>
                @error('privacy_accept')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                <button class="w-full rounded-full bg-accent py-4 text-center text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-black/20 transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" type="submit">{{ __('contact_page.form_submit') }}</button>
                <p class="text-center text-xs leading-relaxed text-zinc-600">{{ __('contact_page.form_micro') }}</p>
            </form>
        </div>
    </section>

    <section class="border-b border-[#e2e8f0] bg-white py-12 sm:py-16" aria-labelledby="contact-usp-heading">
        <div class="mx-auto w-full max-w-[1200px] px-5 sm:px-8">
            <h2 id="contact-usp-heading" class="sr-only">{{ __('contact_page.usp_heading') }}</h2>
            <div class="hidden gap-4 sm:grid sm:grid-cols-2 lg:gap-6">
                @foreach (range(1, 4) as $ui)
                    <div class="flex gap-4 rounded-2xl border border-[#e2e8f0] bg-[#f8fafc] p-5 sm:p-6">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary/10 text-lg text-accent" aria-hidden="true">✔</span>
                        <p class="min-w-0 text-sm font-medium leading-relaxed text-zinc-800 sm:text-[0.9375rem]">{{ __('contact_page.usp_'.$ui) }}</p>
                    </div>
                @endforeach
            </div>
            <ul class="space-y-3 sm:hidden" role="list">
                @foreach (range(1, 4) as $ui)
                    <li class="flex gap-2.5 text-sm leading-snug text-zinc-800"><span class="shrink-0 text-accent" aria-hidden="true">✔</span><span>{{ __('contact_page.usp_'.$ui) }}</span></li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="border-b border-[#e2e8f0] bg-[#f1f5f9] py-12 sm:py-16" aria-labelledby="contact-expert-h2">
        <div class="mx-auto grid w-full max-w-[1200px] gap-10 px-5 sm:px-8 lg:grid-cols-2 lg:items-center lg:gap-14">
            @if ($contactExpertSrc)
                <figure class="mx-auto w-full max-w-md overflow-hidden rounded-2xl border border-[#e2e8f0] bg-[#f1f5f9] shadow-md lg:mx-0 lg:max-w-lg">
                    <img src="{{ $contactExpertSrc }}" alt="{{ __('contact_page.expert_img_alt') }}" class="w-full object-cover object-center lg:aspect-[4/5] lg:min-h-[20rem]" width="720" height="900" loading="lazy" decoding="async">
                </figure>
            @endif
            <div class="min-w-0 text-center lg:text-left">
                <h2 id="contact-expert-h2" class="text-balance text-2xl font-semibold leading-tight text-primary sm:text-3xl">{{ __('contact_page.expert_h2') }}</h2>
                <p class="mt-3 text-sm font-semibold text-primary sm:text-base">{{ __('contact_page.hero_caption') }}</p>
                @foreach (range(1, 4) as $ei)
                    <p class="{{ $ei === 1 ? 'mt-5' : 'mt-3' }} text-pretty text-sm leading-relaxed text-zinc-700 sm:text-base sm:leading-7">{{ __('contact_page.expert_p'.$ei) }}</p>
                @endforeach
                <p class="mt-6 inline-flex rounded-full border border-accent/35 bg-white px-4 py-2 text-xs font-bold uppercase tracking-wide text-accent shadow-sm">{{ __('contact_page.expert_badge') }}</p>
            </div>
        </div>
    </section>

    <section class="bg-white py-10 sm:py-12">
        <div class="mx-auto w-full max-w-[1200px] px-5 sm:px-8">
            <div class="rounded-2xl border border-[#e2e8f0] bg-white p-5 shadow-sm sm:p-6">
                <h2 class="text-lg font-semibold text-primary">{{ __('contact_page.company_summary') }}</h2>
                <div class="mt-6 grid gap-8 border-t border-[#e8edf2] pt-6 text-sm leading-relaxed text-zinc-800 sm:grid-cols-2 sm:text-[0.9375rem]">
                    <div class="space-y-3">
                        <p class="whitespace-pre-line font-semibold text-primary">{{ __('contact_page.company_col_left') }}</p>
                    </div>
                    <div class="space-y-3">
                        <p class="whitespace-pre-line">{{ __('contact_page.company_col_right') }}</p>
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
