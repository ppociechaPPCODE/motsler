@extends('layouts.app')
@section('title', __('page.contact'))
@section('content')
@php
    $l = app()->getLocale();
    $host = parse_url((string) config('app.url'), PHP_URL_HOST) ?: request()->getHost();
@endphp
<div class="space-y-0">
    <section class="bg-[#001348] px-6 py-14 text-white sm:px-10">
        <div class="mx-auto w-full max-w-[1650px] text-center">
            <h1 class="text-4xl font-bold sm:text-6xl">KONTAKT</h1>
        </div>
    </section>

    <section class="bg-white px-6 py-14 sm:px-10">
        <div class="mx-auto grid w-full max-w-[1650px] gap-10 lg:grid-cols-2">
            <div class="rounded-[20px] bg-[#edf2f7] p-8 text-[#001348]">
                <h2 class="text-3xl font-semibold">MOTSLER Sp. z o.o.</h2>
                <p class="mt-5 leading-8">
                    ul. Reformacka 6<br>
                    35-026 Rzeszów, POLAND<br><br>
                    KRS: 998020<br>
                    REGON: 523448566<br>
                    VAT UE: PL 8133887288<br><br>
                    IBAN PLN: 96 1870 1045 2083 1074 7718 0001<br>
                    IBAN EUR: 56 1870 1045 2078 1074 7718 0001<br>
                    NEST BANK SWIFT: NESBPLPW
                </p>
                <div class="mt-6 space-y-2">
                    <a class="block text-lg font-semibold text-[#244396]" href="mailto:{{ __('contact.email_value') }}">{{ __('contact.email_value') }}</a>
                    <a class="block text-lg font-semibold text-[#244396]" href="tel:{{ __('contact.phone_href') }}">{{ __('contact.phone_value') }}</a>
                </div>
            </div>

            <div>
                <h2 class="text-3xl font-semibold text-[#001348]">Formularz kontaktowy</h2>
                @if (session('contact_sent'))
                    <div class="mt-6 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-900">{{ __('form.sent') }}</div>
                @endif
                @if (session('contact_error'))
                    <div class="mt-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-900">{{ __('contact.mail_failed') }}</div>
                @endif
                <form id="contact-form" class="mt-6 space-y-5" method="post" action="{{ locale_route('contact.store', ['locale' => $l]) }}">
                    @csrf
                    <input class="w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396]" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <input class="w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396]" name="phone" type="text" value="{{ old('phone') }}" placeholder="Twój numer telefonu">
                    @error('phone')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <textarea class="min-h-[10rem] w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396]" id="message" name="message" required placeholder="Twoja wiadomość">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <button class="inline-flex items-center justify-center rounded-xl bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white hover:bg-[#001348]" type="submit">Wyślij wiadomość</button>
                    <p class="text-sm leading-6 text-[#003174]">@lang('legal.consent_before', ['host' => $host])<a href="{{ locale_route('privacy', ['locale' => $l]) }}" class="text-[#244396] underline">{{ __('footer.privacy') }}</a>@lang('legal.consent_after')</p>
                </form>
            </div>
        </div>
    </section>

    <section class="bg-[#edf2f7] px-6 py-14 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
            <h2 class="text-center text-4xl font-semibold text-[#001348]"><strong>Skontaktuj</strong> się ze mną</h2>
            <div class="mx-auto mt-10 grid max-w-4xl gap-6 sm:grid-cols-3">
                <div class="rounded-[18px] bg-white p-6 text-center">
                    <div class="text-xl font-semibold text-[#001348]">Damian Bieniasz</div>
                    <a class="mt-3 block text-[#244396]" href="mailto:{{ __('contact.email_value') }}">{{ __('contact.email_value') }}</a>
                </div>
                <div class="rounded-[18px] bg-white p-6 text-center">
                    <div class="text-xl font-semibold text-[#001348]">Yurii Lokotskyi</div>
                    <a class="mt-3 block text-[#244396]" href="mailto:{{ __('contact.email_ua_value') }}">{{ __('contact.email_ua_value') }}</a>
                </div>
                <div class="rounded-[18px] bg-white p-6 text-center">
                    <div class="text-xl font-semibold text-[#001348]">Sebastian Tkacz</div>
                    <a class="mt-3 block text-[#244396]" href="mailto:{{ __('contact.email_value') }}">{{ __('contact.email_value') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#00264b] px-6 py-14 text-white sm:px-10">
        <div class="mx-auto w-full max-w-[1650px] text-center">
            <h2 class="text-4xl font-semibold">Bezpłatna konsultacja</h2>
            <p class="mx-auto mt-6 max-w-5xl text-lg text-white/90">
                Zastanawiasz się którą maszynę wybrać, która będzie odpowiednia dla Ciebie, która spełni twoje oczekiwania i która będzie dostosowana do twoich potrzeb?
                A może potrzebujesz maszyny której nie mamy w ofercie i chciałbyś ją sam skonfigurować?
            </p>
            <p class="mx-auto mt-4 max-w-4xl text-lg text-white/90">Kliknij poniższy przycisk – zostaw numer telefonu, a my oddzwonimy i pomożemy Ci w doborze odpowiedniej maszyny.</p>
            <a href="{{ locale_route('contact', ['locale' => $l]) }}#contact-form" class="mt-8 inline-flex rounded-full bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white">Wypełnij formularz</a>
        </div>
    </section>

    <section class="bg-white px-6 py-14 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px] text-center">
            <h2 class="text-4xl font-semibold text-[#001348]">Kontakt bezpośredni</h2>
            <a class="mt-6 block text-3xl font-semibold text-[#244396]" href="tel:{{ __('contact.phone_href') }}">{{ __('contact.phone_value') }}</a>
            <a class="mt-3 block text-2xl text-[#244396]" href="mailto:{{ __('contact.email_value') }}">{{ __('contact.email_value') }}</a>
        </div>
    </section>
</div>
@endsection
