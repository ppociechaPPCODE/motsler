@extends('layouts.app')

@section('title', __('page.privacy'))

@section('content')

<div class="space-y-0">

    <section class="bg-[#001348] px-6 py-14 text-white sm:px-10">

        <div class="mx-auto w-full max-w-[1650px] text-center">

            <h1 class="text-4xl font-bold sm:text-6xl">{{ __('page.privacy') }}</h1>

        </div>

    </section>

    <section class="bg-white px-6 py-14 sm:px-10">

        <div class="mx-auto w-full max-w-[900px] text-lg leading-8 text-[#003174]">

            <p>{{ __('page.privacy_body') }}</p>

        </div>

    </section>

</div>

@endsection

