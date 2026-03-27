@extends('layouts.app')
@section('title', __('page.about'))
@section('content')
@php
    $l = app()->getLocale();
@endphp

<div class="space-y-0">
    <section class="bg-[#001348] px-6 py-14 text-white sm:px-10">
        <div class="mx-auto w-full max-w-[1650px] text-center">
            <h1 class="text-4xl font-bold sm:text-6xl">O NAS</h1>
            <p class="mx-auto mt-6 max-w-4xl text-lg text-white/90">
                Zauważyliśmy, że wiele przedsiębiorców zmaga się z trudnością wyboru odpowiednich maszyn.
                Chcieliśmy to zmienić, dlatego stworzyliśmy MOTSLER.
            </p>
        </div>
    </section>

    <section class="bg-white px-6 py-14 sm:px-10">
        <div class="mx-auto grid w-full max-w-[1650px] gap-10 lg:grid-cols-2 lg:items-center">
            <div>
                <h2 class="text-4xl font-semibold text-[#001348]">Dlaczego <strong>MOTSLER?</strong></h2>
                <p class="mt-6 text-lg leading-8 text-[#003174]">
                    Naszą misją było zaprojektowanie maszyn, które łączą w sobie wszystko, co najlepsze i najnowocześniejsze, a jednocześnie eliminują wady obecne
                    w innych rozwiązaniach na rynku. Stawiamy na prostotę, niezawodność i możliwość rozbudowy.
                </p>
                <p class="mt-4 text-lg leading-8 text-[#003174]">
                    Dzięki temu każdy klient może dopasować naszą maszynę do swoich unikalnych potrzeb, bez konieczności kompromisów.
                    Skupiamy się na tworzeniu uniwersalnych rozwiązań, które łączą efektywność, trwałość i łatwość obsługi.
                </p>
            </div>
            <div class="grid gap-6 sm:grid-cols-2">
                <div class="rounded-[20px] bg-[#edf2f7] p-6 text-center">
                    <div class="text-5xl font-bold text-[#001348]">16</div>
                    <div class="mt-2 text-xl font-semibold text-[#001348]">Lat doświadczenia</div>
                </div>
                <div class="rounded-[20px] bg-[#edf2f7] p-6 text-center">
                    <div class="text-5xl font-bold text-[#001348]">100</div>
                    <div class="mt-2 text-xl font-semibold text-[#001348]">Zadowolonych klientów</div>
                </div>
                <div class="rounded-[20px] bg-[#edf2f7] p-6 text-center sm:col-span-2">
                    <div class="text-xl font-semibold text-[#001348]">Wsparcie techniczne, szkolenia i doradztwo</div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#edf2f7] px-6 py-14 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
            <h2 class="text-center text-4xl font-semibold text-[#001348]">Nasze wartości</h2>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <div class="rounded-[20px] bg-white p-6 text-center">
                    <h3 class="text-2xl font-semibold text-[#001348]">Niezawodność</h3>
                    <p class="mt-3 text-[#003174]">Projektujemy rozwiązania gotowe na codzienną, intensywną pracę.</p>
                </div>
                <div class="rounded-[20px] bg-white p-6 text-center">
                    <h3 class="text-2xl font-semibold text-[#001348]">Efektywność</h3>
                    <p class="mt-3 text-[#003174]">Dbamy, aby maszyny realnie zwiększały zyski i skracały czas pracy.</p>
                </div>
                <div class="rounded-[20px] bg-white p-6 text-center">
                    <h3 class="text-2xl font-semibold text-[#001348]">Rozwój</h3>
                    <p class="mt-3 text-[#003174]">Pomagamy klientom rozbudować ofertę usług i skalować biznes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#00264b] px-6 py-14 text-white sm:px-10">
        <div class="mx-auto w-full max-w-[1650px] text-center">
            <h2 class="text-4xl font-semibold">Rozwijaj swój biznes z nami!</h2>
            <p class="mx-auto mt-4 max-w-3xl text-lg text-white/90">
                Zostań naszym dystrybutorem i oferuj produkty, które cieszą się zaufaniem na całym świecie.
            </p>
            <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="mt-8 inline-flex rounded-full bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white">Wyślij zapytanie</a>
        </div>
    </section>
</div>
@endsection
