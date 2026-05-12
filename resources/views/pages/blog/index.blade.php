@extends('layouts.app')
@section('title', __('page.blog'))
@section('meta_description', __('page.seo_description_blog'))
@section('content')
@php
    $tagMod = fn (?string $key) => match ($key) {
        'tech' => 'blog-card__tag--tech',
        'guide' => 'blog-card__tag--guide',
        'case' => 'blog-card__tag--case',
        default => 'blog-card__tag--biz',
    };
@endphp
<div class="blog-index w-full">
    <section class="blog-hero" aria-labelledby="blog-hero-heading">
        <div class="blog-hero__text">
            <h1 id="blog-hero-heading">Cześć, tu Sebastian Tkacz</h1>
            <p>Projektuję maszyny Motsler i pomagam serwisom w całej Europie zarabiać na regeneracji DPF. Na tym blogu dzielę się konkretną wiedzą techniczną i biznesową, której nie znajdziesz nigdzie indziej.</p>
            <a href="{{ $contactUrl }}" class="blog-btn-contact blog-btn-contact--hero">DARMOWA KONSULTACJA</a>
        </div>
        <div class="blog-hero__photo" role="presentation">TWOJE ZDJĘCIE<br>(Sebastian przy maszynie)</div>
    </section>
    <nav class="blog-cat-nav" aria-label="Kategorie bloga">
        @forelse ($categories as $category)
            <a href="#" class="blog-cat-link">{{ mb_strtoupper($category->name) }}</a>
        @empty
        @endforelse
    </nav>
    <div class="blog-wrap">
        @if ($posts->isEmpty())
            <p class="rounded-xl border border-zinc-200 bg-white py-12 text-center text-zinc-600 shadow-sm">Brak opublikowanych wpisów.</p>
        @else
            <div class="blog-grid">
                @foreach ($posts as $i => $post)
                    @if ($posts->onFirstPage() && $i === 3)
                        <div class="blog-cta-banner">
                            <div class="blog-cta-banner__text">
                                <h2>Nie szukaj po omacku.</h2>
                                <p>Dobiorę maszynę pod Twój budżet i planowaną ilość filtrów.</p>
                            </div>
                            <a href="{{ $contactUrl }}" class="blog-btn-contact">ZAPYTAJ MNIE OSOBIŚCIE</a>
                        </div>
                    @endif
                    <a href="{{ locale_route('blog.show', ['locale' => $l, 'slug' => $post->slug]) }}" class="blog-card blog-card--link">
                        <div class="blog-card__thumb">
                            <div class="blog-card__thumb-author">
                                @if ($post->featured_image)
                                    <img src="{{ asset('storage/'.$post->featured_image) }}" alt="" class="h-full w-full object-cover">
                                @else
                                    FOTO
                                @endif
                            </div>
                            <div class="blog-card__thumb-title">{{ mb_strtoupper(\Illuminate\Support\Str::limit($post->title, 52)) }}</div>
                        </div>
                        <div class="blog-card__body">
                            @if ($post->category)
                                <span class="blog-card__tag {{ $tagMod($post->category->style_key) }}">{{ $post->category->name }}</span>
                            @endif
                            <h3>{{ $post->title }}</h3>
                            <p>{{ $post->excerpt ? \Illuminate\Support\Str::limit(strip_tags($post->excerpt), 180) : \Illuminate\Support\Str::limit(strip_tags($post->body), 180) }}</p>
                        </div>
                    </a>
                @endforeach
                @if ($posts->onFirstPage() && $posts->count() < 4)
                    <div class="blog-cta-banner">
                        <div class="blog-cta-banner__text">
                            <h2>Nie szukaj po omacku.</h2>
                            <p>Dobiorę maszynę pod Twój budżet i planowaną ilość filtrów.</p>
                        </div>
                        <a href="{{ $contactUrl }}" class="blog-btn-contact">ZAPYTAJ MNIE OSOBIŚCIE</a>
                    </div>
                @endif
            </div>
            <div class="mt-10">{{ $posts->links() }}</div>
        @endif
    </div>
</div>
@endsection
