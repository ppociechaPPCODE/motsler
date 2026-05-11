@extends('layouts.app')
@section('title', app()->getLocale() === 'en' ? 'New product lines – coming soon | Motsler' : 'Nowe linie produktowe – wkrótce | Motsler')
@section('meta_description', app()->getLocale() === 'en' ? 'Pressure washers, sandblasters and ultrasonic washers – new Motsler lines coming soon.' : 'Myjki ciśnieniowe, piaskarki i myjki ultradźwiękowe – nowe linie produktowe Motsler wkrótce w ofercie.')
@section('content')
@php
    $l = app()->getLocale();
@endphp
<div class="space-y-0">
    <section class="bg-primary px-6 py-14 text-white sm:px-10">
        <div class="mx-auto w-full max-w-[840px]">
            <p class="text-sm font-bold uppercase tracking-wide text-accent">{{ $l === 'en' ? 'Coming soon' : 'Wkrótce' }}</p>
            <h1 class="mt-2 text-3xl font-bold leading-tight sm:text-4xl">{{ $l === 'en' ? 'New product lines' : 'Nowe linie produktowe' }}</h1>
            <p class="mt-6 text-lg leading-8 text-white/90">{{ $l === 'en' ? 'We are expanding our range with pressure washers, sandblasters and ultrasonic washers – available soon.' : 'Rozwijamy ofertę o myjki ciśnieniowe, piaskarki oraz myjki ultradźwiękowe – już wkrótce w sprzedaży.' }}</p>
            <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="mt-8 inline-flex rounded-full border-2 border-white bg-transparent px-8 py-3.5 text-sm font-semibold text-white transition hover:bg-white/10">{{ $l === 'en' ? 'Notify me' : 'Zgłoś zainteresowanie' }}</a>
        </div>
    </section>
</div>
@endsection
