@extends('layouts.app')
@section('title', app()->getLocale() === 'en' ? 'Industrial chemicals for workshops | Motsler' : 'Chemia przemysłowa i środki do warsztatów | Motsler')
@push('head')
    <meta name="description" content="{{ app()->getLocale() === 'en' ? 'Industrial chemicals and workshop cleaning agents from Motsler – effective support for automotive and industrial processes.' : 'Chemia przemysłowa oraz środki chemiczne do warsztatów Motsler – skuteczne wsparcie procesów w motoryzacji i przemyśle.' }}">
@endpush
@section('content')
@php
    $l = app()->getLocale();
@endphp
<div class="space-y-0">
    <section class="bg-primary px-6 py-14 text-white sm:px-10">
        <div class="mx-auto w-full max-w-[840px]">
            <h1 class="text-3xl font-bold leading-tight sm:text-4xl">{{ $l === 'en' ? 'Industrial chemicals for workshops' : 'Chemia dla przemysłu i warsztatów' }}</h1>
            <p class="mt-6 text-lg leading-8 text-white/90">{{ $l === 'en' ? 'Effective industrial chemistry and workshop agents for cleaning and process support in automotive and industry.' : 'Chemia przemysłowa oraz środki chemiczne do warsztatów – skuteczne produkty do czyszczenia i wsparcia procesów technologicznych w motoryzacji i przemyśle.' }}</p>
            <a href="{{ locale_route('contact', ['locale' => $l]) }}" class="mt-8 inline-flex rounded-full bg-accent px-8 py-3.5 text-sm font-bold uppercase tracking-wide text-white transition hover:bg-accent/88">{{ $l === 'en' ? 'Request offer' : 'Poproś o ofertę' }}</a>
        </div>
    </section>
</div>
@endsection
