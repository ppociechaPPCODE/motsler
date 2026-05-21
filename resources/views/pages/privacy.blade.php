@extends('layouts.app')

@section('title', __('page.privacy'))
@section('meta_description', __('page.seo_description_privacy'))

@section('content')

<div class="space-y-0">

    <section class="border-b border-[#e2e8f0] bg-[#f4f7fa] px-6 py-10 sm:px-10 sm:py-12" aria-labelledby="privacy-page-h1">

        <div class="mx-auto w-full max-w-[900px]">

            <h1 id="privacy-page-h1" class="text-balance text-3xl font-bold tracking-tight text-primary sm:text-4xl">{{ __('page.privacy') }}</h1>

        </div>

    </section>

    <section class="bg-white px-6 py-12 sm:px-10 sm:py-16">

        <div class="mx-auto w-full max-w-[900px] space-y-10 text-lg leading-relaxed text-zinc-800">

            <p class="text-pretty">{{ __('page.privacy_intro') }}</p>

            <div class="space-y-3">
                <h2 class="text-2xl font-bold text-primary">{{ __('page.privacy_s1_title') }}</h2>
                <p class="font-semibold">{{ __('page.privacy_s1_company') }}</p>
                <p>{{ __('page.privacy_s1_address') }}</p>
                <p>{{ __('page.privacy_s1_identifiers') }}</p>
                <p>{{ __('page.privacy_s1_court') }}</p>
                <p>{{ __('page.privacy_s1_email') }}</p>
                <p>{{ __('page.privacy_s1_phone') }}</p>
            </div>

            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-primary">{{ __('page.privacy_s2_title') }}</h2>

                <div class="space-y-3">
                    <h3 class="text-xl font-bold text-primary">{{ __('page.privacy_s2_a_heading') }}</h3>
                    <p>{{ __('page.privacy_s2_a_lead') }}</p>
                    <ul class="list-disc space-y-2 pl-6">
                        <li>{{ __('page.privacy_s2_a_li1') }}</li>
                        <li>{{ __('page.privacy_s2_a_li2') }}</li>
                        <li>{{ __('page.privacy_s2_a_li3') }}</li>
                    </ul>
                    <p>{{ __('page.privacy_s2_a_legal') }}</p>
                </div>

                <div class="space-y-3">
                    <h3 class="text-xl font-bold text-primary">{{ __('page.privacy_s2_b_heading') }}</h3>
                    <p>{{ __('page.privacy_s2_b_body') }}</p>
                </div>

                <div class="space-y-3">
                    <h3 class="text-xl font-bold text-primary">{{ __('page.privacy_s2_c_heading') }}</h3>
                    <p>{{ __('page.privacy_s2_c_body') }}</p>
                </div>
            </div>

            <div class="space-y-3">
                <h2 class="text-2xl font-bold text-primary">{{ __('page.privacy_s3_title') }}</h2>
                <p>{{ __('page.privacy_s3_p1') }}</p>
                <p>{{ __('page.privacy_s3_p2') }}</p>
                <p>{{ __('page.privacy_s3_p3') }}</p>
            </div>

            <div class="space-y-3">
                <h2 class="text-2xl font-bold text-primary">{{ __('page.privacy_s4_title') }}</h2>
                <p>{{ __('page.privacy_s4_lead') }}</p>
                <ul class="list-disc space-y-2 pl-6">
                    <li>{{ __('page.privacy_s4_li1') }}</li>
                    <li>{{ __('page.privacy_s4_li2') }}</li>
                    <li>{{ __('page.privacy_s4_li3') }}</li>
                    <li>{{ __('page.privacy_s4_li4') }}</li>
                    <li>{{ __('page.privacy_s4_li5') }}</li>
                </ul>
            </div>

            <div class="space-y-3">
                <h2 class="text-2xl font-bold text-primary">{{ __('page.privacy_s5_title') }}</h2>
                <p>{{ __('page.privacy_s5_p1') }}</p>
                <p>{{ __('page.privacy_s5_p2') }}</p>
            </div>

        </div>

    </section>

</div>

@endsection

