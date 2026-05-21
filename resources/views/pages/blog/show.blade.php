@extends('layouts.app')
@php
    $desc = $post->meta_description;
    if (blank($desc)) {
        $src = $post->excerpt ?: strip_tags($post->body);
        $desc = \Illuminate\Support\Str::limit(trim(preg_replace('/\s+/', ' ', $src)), 160);
    }
@endphp
@section('title', $post->title)
@section('meta_description', $desc)
@section('content')
@php
    $l = app()->getLocale();
@endphp
<article class="blog-index w-full">
    <div class="blog-wrap py-10">
        <header class="mb-8 border-b border-zinc-200 pb-8">
            @if ($post->category)
                <p class="mb-2 text-sm font-bold uppercase tracking-wide text-accent">{{ $post->category->name }}</p>
            @endif
            <h1 class="text-3xl font-bold text-primary sm:text-4xl">{{ $post->title }}</h1>
            @if ($post->published_at)
                <p class="mt-3 text-sm text-zinc-500">{{ $post->published_at->translatedFormat('j F Y') }}</p>
            @endif
        </header>
        @if ($post->featured_image)
            <figure class="mb-10 overflow-hidden rounded-2xl border border-zinc-200 shadow-sm">
                <img src="{{ asset('storage/'.$post->featured_image) }}" alt="" class="max-h-[28rem] w-full object-cover">
            </figure>
        @endif
        <div class="blog-prose mx-auto max-w-3xl">
            {!! $post->body !!}
        </div>
        <p class="mt-12 text-center">
            <a href="{{ locale_route('blog.index', ['locale' => $l]) }}" class="font-semibold text-accent hover:underline">← {{ __('page.blog') }}</a>
        </p>
    </div>
</article>
@endsection
