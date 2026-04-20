@extends('layouts.app')
@section('title', app()->getLocale() === 'en' ? 'Custom industrial machine production | Motsler' : 'Produkcja maszyn przemysłowych na zamówienie | Motsler')
@push('head')
    <meta name="description" content="{{ app()->getLocale() === 'en' ? 'Motsler designs and builds industrial machines to order – from concept to commissioning.' : 'Motsler – produkcja maszyn przemysłowych i maszyny na zamówienie: od koncepcji po wdrożenie.' }}">
@endpush
@section('content')
@php
    $l = app()->getLocale();
@endphp
<div class="space-y-0">
    <section class="bg-primary px-6 py-14 text-white sm:px-10">
        <div class="mx-auto w-full max-w-[840px]">
            <h1 class="text-3xl font-bold leading-tight sm:text-4xl">{{ $l === 'en' ? 'Machine design and production' : 'Projektowanie i produkcja maszyn' }}</h1>
            <p class="mt-6 text-lg leading-8 text-white/90">{{ $l === 'en' ? 'We build industrial machines tailored to your needs – from concept to a complete solution.' : 'Tworzymy urządzenia dopasowane do potrzeb klientów – produkcja maszyn przemysłowych i maszyny na zamówienie, od koncepcji po gotowe rozwiązanie.' }}</p>
            <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="mt-8 inline-flex rounded-full bg-accent px-8 py-3.5 text-sm font-bold uppercase tracking-wide text-white transition hover:bg-accent/88">{{ $l === 'en' ? 'Request offer' : 'Poproś o ofertę' }}</a>
        </div>
    </section>
</div>
@endsection
