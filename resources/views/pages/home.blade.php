@extends('layouts.app')
@section('title', __('page.home'))
@section('content')
@php
    $l = app()->getLocale();
    $blog = config('app.content.blog.'.$l, config('app.content.blog.pl'));
    $host = parse_url((string) config('app.url'), PHP_URL_HOST) ?: request()->getHost();
@endphp

<div class="space-y-0">
    <section class="overflow-hidden bg-[#001348] text-white" style="background-image:url('https://motsler.pl/wp-content/uploads/2024/12/tlo_www.jpg');background-size:cover;background-position:center;">
        <div class="mx-auto w-full max-w-[1650px]">
        <div class="bg-[#001348]/78 px-6 py-12 sm:px-10 lg:px-14">
            <div class="grid items-center gap-10 lg:grid-cols-2">
                <div>
                    <h1 class="text-4xl font-bold leading-tight sm:text-6xl"><strong>ZARABIAJ WIECEJ</strong><br>W SWOIM BIZNESIE</h1>
                    <p class="mt-6 text-xl font-semibold">Technologia, która oszczędza Twój czas i pieniądze</p>
                    <p class="mt-5 max-w-2xl text-base leading-7 text-white/90">Prowadzisz lub chcesz otworzyć firmę? Szukasz sposobów, by zarabiać więcej? Zainwestuj w sprawdzone maszyny i rozwiązania od Motsler. Dzięki nam szybko rozbudujesz portfolio usługowe swojej firmy i pomnożysz zyski.</p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="rounded-full bg-[#ffad03] px-8 py-4 text-sm font-semibold uppercase text-black">{{ __('nav.consultation') }}</a>
                        <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="rounded-full bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white">maszyny do czyszczenia dpf</a>
                    </div>
                </div>
                <div class="flex justify-center lg:justify-end">
                    <img src="https://motsler.pl/wp-content/uploads/2024/09/1T5A9192AB-1.png" alt="Motsler" class="w-full max-w-[560px]">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="bg-white px-6 py-10 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
        <h2 class="text-center text-4xl font-semibold text-[#001348]"><strong>Jak pomożemy Ci</strong> w biznesie?</h2>
        <p class="mt-6 text-lg leading-8">Specjalizujemy się w dostarczaniu zaawansowanych maszyn i technologii dla przemysłu, które maksymalizują zyski i usprawniają codzienną pracę. Dzięki naszym rozwiązaniom poszerzysz swoją ofertę, przyciągniesz nowych klientów i uczynisz swoje procesy szybszymi, skuteczniejszymi oraz bardziej opłacalnymi.<br>Oferujemy nie tylko profesjonalne urządzenia, ale także pełne wsparcie techniczne, szkolenia i doradztwo, abyś mógł od razu zwiększyć swoje dochody i rozwijać biznes. Sprawdź, jak możemy pomóc w osiągnięciu Twoich celów!</p>
        <div class="mt-8 flex justify-center">
            <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="inline-flex rounded-full bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white">Wyślij zapytanie</a>
        </div>
        </div>
    </section>

    <section>
        <div class="mx-auto w-full max-w-[1650px] px-6 py-12 sm:px-10">
        <h2 class="text-center text-4xl font-semibold text-[#001348]"><strong>Dla jakich branż</strong> produkujemy maszyny?</h2>
        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <article class="rounded-[20px] bg-white p-6 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2024/12/samochody1.png" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-3xl font-semibold text-[#001348]">Motoryzacja</h3><p class="mt-3 text-base leading-7">Tworzymy zaawansowane urządzenia dla branży motoryzacyjnej, wspierając warsztaty i serwisy samochodowe.</p></article>
            <article class="rounded-[20px] bg-white p-6 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2024/12/przemysl1.png" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-3xl font-semibold text-[#001348]">Przemysł</h3><p class="mt-3 text-base leading-7">Nasze maszyny znajdują zastosowanie w różnych gałęziach przemysłu, zapewniając niezawodność i efektywność procesów technologicznych.</p></article>
            <article class="rounded-[20px] bg-white p-6 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2024/12/uslugi.png" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-3xl font-semibold text-[#001348]">Firmy usługowe</h3><p class="mt-3 text-base leading-7">Oferujemy sprzęt dopasowany do firm świadczących szeroki zakres usług, od mycia i czyszczenia po regenerację kluczowych komponentów.</p></article>
        </div>
        </div>
    </section>

    <section>
        <div class="mx-auto w-full max-w-[1650px] px-6 py-12 sm:px-10">
        <h2 class="text-center text-4xl font-semibold text-[#001348]">Co znajdziesz <strong>w naszej ofercie?</strong></h2>
        <p class="mt-3 text-center text-lg">Szukasz maszyn, które są gwarantem jakości i niezawodności? <strong>W MOTSLER oferujemy:</strong></p>
        <div class="mt-8 grid gap-5 md:grid-cols-3 xl:grid-cols-5">
            <a href="{{ locale_route('offer.dpf', ['locale' => $l]) }}" class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2024/12/slr-premium_300px.png" alt="" class="mx-auto h-40 w-auto"><h3 class="mt-3 text-xl font-semibold text-[#001348]">Maszyny do czyszczenia filtrów DPF</h3></a>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2024/12/myjka.png" alt="" class="mx-auto h-40 w-auto"><h3 class="mt-3 text-xl font-semibold text-[#001348]">Myjki warsztatowe</h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2024/12/no_foto.png" alt="" class="mx-auto h-40 w-auto"><h3 class="mt-3 text-xl font-semibold text-[#001348]">Suszarki do filtrów DPF</h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2024/12/produkcja_motsler3.png" alt="" class="mx-auto h-40 w-auto"><h3 class="mt-3 text-xl font-semibold text-[#001348]">Maszyny wg. wytycznych klienta</h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2025/01/GK-530-3.0-200-P-www-1.png" alt="" class="mx-auto h-40 w-auto"><h3 class="mt-3 text-xl font-semibold text-[#001348]">Kompresory powietrza</h3></div>
        </div>
        </div>
    </section>

    <section class="bg-[#edf2f7] px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
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
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2024/12/przemysl1.png" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]">Maszyny<br><strong>do przemysłu</strong></h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2025/01/zysk.png" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]">Skupienie<br><strong>na zysku</strong></h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2025/01/wsparcie.png" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]"><strong>Wsparcie</strong><br>w razie potrzeby</h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2025/01/24h.png" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]"><strong>Bezawaryjne</strong><br>działanie</h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2025/01/szkolenie.png" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]">Profesjonalne<br><strong>szkolenie</strong></h3></div>
            <div class="rounded-[20px] bg-white p-4 text-center shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2025/01/pewnosc.png" alt="" class="mx-auto h-24 w-24 object-contain"><h3 class="mt-4 text-2xl font-semibold text-[#001348]">Pewność <br><strong>na długie lata</strong></h3></div>
        </div>
        </div>
    </section>

    <section class="bg-white px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
        <h2 class="text-center text-4xl font-semibold text-[#001348]">Technologia <strong>na najwyższym poziomie</strong></h2>
        <p class="mx-auto mt-4 max-w-4xl text-center text-lg">Nasze maszyny są gotowe sprostać nawet <strong>najcięższym wyzwaniom</strong> w codziennej pracy!<br>Współpracujemy tylko z najlepszymi.</p>
        <div class="mt-10 flex flex-wrap items-center justify-center gap-x-10 gap-y-8 border-y border-[#edf2f7] py-8">
            @foreach ([['https://motsler.pl/wp-content/uploads/2025/01/calpeda_small.png','calpeda'],['https://motsler.pl/wp-content/uploads/2025/01/ebara.png','ebara'],['https://motsler.pl/wp-content/uploads/2025/01/fatek_small.png','fatek'],['https://motsler.pl/wp-content/uploads/2025/01/weintek_small.png','weintek'],['https://motsler.pl/wp-content/uploads/2025/01/wieland_small.png','wieland'],['https://motsler.pl/wp-content/uploads/2025/01/eaton_small.png','eaton'],['https://motsler.pl/wp-content/uploads/2025/01/schneider_small.png','schneider'],['https://motsler.pl/wp-content/uploads/2025/01/siemens_small.png','siemens']] as $logo)
                <img src="{{ $logo[0] }}" alt="{{ $logo[1] }}" class="h-12 w-auto opacity-70 grayscale">
            @endforeach
        </div>
        </div>
    </section>

    <section class="bg-[#edf2f7] px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
        <div class="mb-8 flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
            <h2 class="text-3xl font-semibold text-[#001348] sm:text-4xl"><strong>Poznaj opinie</strong><br>użytkowników naszych maszyn</h2>
            <img src="https://motsler.pl/wp-content/uploads/2025/01/googl.png" alt="" class="h-10 w-auto md:mt-2">
        </div>
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2025/01/aiw_200.png" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale"><div class="text-amber-400">★★★★★</div><blockquote class="mt-6 text-sm leading-7 text-[#001348]">Używamy od kilku miesięcy maszynę typu DPF SLR Premium skonfigurowaną i skonstruowaną pod nasze indywidualne wymagania. Cały proces uzgodnień, zamówienia, dostawy i rozruchu technologicznego przebiegł bez najmniejszych problemów. Podczas eksploatacji maszyna doskonale spełnia swoją funkcję i dlatego mogę z czystym sumieniem polecić firmę MOTSLER Sp. z o.o. z Rzeszowa jako kompetentnego i wiarygodnego partnera.</blockquote><div class="mt-6 font-semibold text-[#001348]">Karol Fiołka</div><div class="text-sm text-[#003174]/80">AiW Turbo Mikstat</div></article>
            <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2025/01/auto_bodo_200-1.png" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale"><div class="text-amber-400">★★★★★</div><blockquote class="mt-6 text-sm leading-7 text-[#001348]">Szukaliśmy maszyny do czyszczenia DPF, która byłaby wydajna i przyjazna dla środowiska. Maszyna firmy Motsler spełniła wszystkie nasze oczekiwania. Jest nie tylko skuteczna w usuwaniu sadzy z filtrów DPF, ale również zużywa minimalną ilość wody i chemikaliów. Dodatkowym atutem jest profesjonalna obsługa klienta i dostęp do szkoleń z zakresu obsługi maszyny. Zdecydowanie polecam!</blockquote><div class="mt-6 font-semibold text-[#001348]">Michał Surowiński</div><div class="text-sm text-[#003174]/80">AUTO-BODO Q-Serwis CASTROL Łódź</div></article>
            <article class="rounded-[20px] bg-white p-6 shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]"><img src="https://motsler.pl/wp-content/uploads/2025/01/clean_fap_200.png" alt="" class="mb-4 h-12 w-auto opacity-60 grayscale"><div class="text-amber-400">★★★★★</div><blockquote class="mt-6 text-sm leading-7 text-[#001348]">Od jakiegoś czasu myślałem o inwestycji, badałem rynek przez parę miesięcy i ze wszystkich dostępnych maszyn do czyszczenia filtrów DPF to MOTSLER przykuł moją uwagę. Czyszczenie jest szybkie i skuteczne, a filtry wracają jak nowe. Współpraca z firmą jest bez zarzutu – pełen profesjonalizm i ogromna wiedza.</blockquote><div class="mt-6 font-semibold text-[#001348]">Krzysztof Guzda</div><div class="text-sm text-[#003174]/80">CLEANFAP Martigny Szwajcaria</div></article>
        </div>
        </div>
    </section>

    <section class="bg-[#00264b] px-6 py-12 text-white sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
        <h2 class="text-center text-3xl font-semibold sm:text-4xl">Nasi <strong>autoryzowani dystrybutorzy</strong></h2>
        <div class="mx-auto mt-10 grid max-w-3xl gap-8 md:grid-cols-2">
            <div class="flex justify-center"><img src="https://motsler.pl/wp-content/uploads/2025/01/cropped-logo512.jpg" alt="" class="max-h-32 w-auto object-contain"></div>
            <div class="flex justify-center"><img src="https://motsler.pl/wp-content/uploads/2025/01/mtuning.jpg" alt="" class="max-h-32 w-auto object-contain"></div>
        </div>
        </div>
    </section>

    <section class="bg-[#00264b] px-6 py-12 text-white sm:px-10">
        <div class="mx-auto w-full max-w-[1650px] text-center">
        <h2 class="text-3xl font-semibold sm:text-4xl"><strong>Rozwijaj swój biznes z nami!</strong></h2>
        <p class="mx-auto mt-4 max-w-3xl text-lg text-white/90">Zostań naszym dystrybutorem i oferuj produkty, które cieszą się zaufaniem na całym świecie. Napisz do nas, aby poznać szczegóły współpracy.</p>
        <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="mt-8 inline-flex rounded-full bg-[#244396] px-8 py-4 text-sm font-semibold uppercase text-white">Wyślij zapytanie</a>
        </div>
    </section>

    <section class="bg-[#edf2f7] px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
        <h2 class="text-center text-4xl font-semibold text-[#001348]"><strong>Wiedza</strong> i Innowacje</h2>
        <div class="mt-10 grid gap-8 md:grid-cols-2">
            <article class="overflow-hidden rounded-[20px] bg-white shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                <a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post1']]) }}" class="block"><img src="https://motsler.pl/wp-content/uploads/2025/08/Motsler-biznes-768x511.png" alt="" class="h-48 w-full object-cover"></a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-[#001348]"><a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post1']]) }}" class="hover:underline">Jak zacząć dochodowy biznes z Motsler?</a></h3>
                    <p class="mt-2 text-sm text-[#003174]/70">6 sierpnia, 2025</p>
                    <p class="mt-4 text-sm leading-7 text-[#001348]">Regeneracja filtrów DPF jako sposób na rozwój warsztatu lub nowy kierunek działalności. W świecie motoryzacji nie brakuje okazji do rozwoju….</p>
                    <a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post1']]) }}" class="mt-4 inline-block text-sm font-semibold text-[#244396]">Czytaj więcej</a>
                </div>
            </article>
            <article class="overflow-hidden rounded-[20px] bg-white shadow-[0_15px_15px_-10px_rgba(140,202,245,.18)]">
                <a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post2']]) }}" class="block"><img src="https://motsler.pl/wp-content/uploads/2025/07/20250718_165157a-768x1024.jpg" alt="" class="h-48 w-full object-cover"></a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-[#001348]"><a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post2']]) }}" class="hover:underline">DPF CleanX od MOTSLER – Profesjonalne i opłacalne czyszczenie filtrów DPF bez kompromisów</a></h3>
                    <p class="mt-2 text-sm text-[#003174]/70">30 lipca, 2025</p>
                    <p class="mt-4 text-sm leading-7 text-[#001348]">Czyszczenie filtrów DPF to dziś codzienność w wielu warsztatach i serwisach. Problem w tym, że wiele dostępnych na rynku płynów…</p>
                    <a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $blog['post2']]) }}" class="mt-4 inline-block text-sm font-semibold text-[#244396]">Czytaj więcej</a>
                </div>
            </article>
        </div>
        </div>
    </section>

    <section class="bg-white px-6 py-12 sm:px-10">
        <div class="mx-auto w-full max-w-[1650px]">
        <div class="grid gap-10 lg:grid-cols-[1fr_1.1fr]">
            <div>
                <h2 class="text-3xl font-semibold text-[#001348] sm:text-4xl">Zadaj nam <strong>dowolne pytanie</strong></h2>
                <p class="mt-4 text-lg">Wypełnij formularz, a my skontaktujemy się z Tobą, doradzimy i odpowiemy na wszystkie pytania.</p>
            </div>
            <form id="contact-form" class="space-y-4" method="post" action="{{ locale_route('contact.store', ['locale' => $l]) }}">
                @csrf
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="Twój adres e-mail" class="w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396]">
                @error('email')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Twój numer telefonu" class="w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396]">
                @error('phone')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                <textarea name="message" rows="4" required placeholder="Twoja wiadomość" class="w-full rounded-lg border border-[#cbd2d9] bg-white px-4 py-3 text-sm text-[#001348] outline-none focus:border-[#244396]">{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                <button type="submit" class="w-full rounded-xl bg-[#244396] px-6 py-4 text-sm font-semibold uppercase text-white hover:bg-[#001348] sm:w-auto">Wyślij wiadomość</button>
                <p class="text-sm leading-6 text-[#001348]/90">@lang('legal.consent_before', ['host' => $host])<a href="{{ locale_route('privacy', ['locale' => $l]) }}" class="text-[#244396] underline">{{ __('footer.privacy') }}</a>@lang('legal.consent_after')</p>
            </form>
        </div>
        </div>
    </section>
</div>
@endsection
