@extends('layouts.app')
@section('title', __('page.offer_workshop'))
@section('meta_description', __('offer_workshop.seo_description'))
@section('content')
@php
    $l = app()->getLocale();
@endphp
<div class="space-y-0">
    <section class="border-b border-[#e2e8f0] bg-[linear-gradient(165deg,#fafbfc_0%,#eef2f7_45%,#f8fafc_100%)] px-5 py-14 sm:px-8">
        <div class="mx-auto w-full max-w-[1200px] text-center md:text-left">
            <h1 class="text-balance text-3xl font-semibold leading-tight text-primary sm:text-4xl">{{ __('offer_workshop.h1') }}</h1>
            <p class="mx-auto mt-6 max-w-[40rem] text-pretty text-base leading-relaxed text-zinc-600 md:mx-0 md:max-w-[32rem] sm:text-lg">{{ __('offer_workshop.lead') }}</p>
            <a href="{{ locale_route('contact', ['locale' => $l]).'#contact-form' }}" class="mt-10 inline-flex min-h-[3rem] items-center justify-center rounded-full bg-accent px-8 py-3.5 text-sm font-bold uppercase tracking-wide text-white shadow-md transition hover:bg-accent/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:text-base">{{ __('offer_workshop.cta') }}</a>
        </div>
    </section>
</div>
@endsection
