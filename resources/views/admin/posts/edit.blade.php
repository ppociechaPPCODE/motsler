@extends('admin.layout')
@section('title', 'Edycja wpisu')
@section('content')
    <h1 class="mb-6 text-2xl font-bold text-primary">Edycja wpisu</h1>
    <form method="post" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data" class="admin-post-form max-w-4xl space-y-6 rounded-xl border border-zinc-200 bg-white p-6 shadow-sm">
        @csrf
        @method('PUT')
        @include('admin.posts._form', ['post' => $post, 'categories' => $categories])
        <div class="flex flex-wrap items-center gap-3">
            <button type="submit" class="rounded-lg bg-zinc-800 px-4 py-2 text-sm font-bold text-white hover:bg-zinc-700">Zapisz</button>
            <button type="submit" name="publish_now" value="1" class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-bold text-white hover:bg-emerald-500">Publikuj teraz</button>
            @if ($post->published_at)
                <button type="submit" name="unpublish" value="1" class="rounded-lg border border-zinc-300 bg-white px-4 py-2 text-sm font-semibold text-zinc-800 hover:bg-zinc-50">Wycofaj publikację</button>
            @endif
            <a href="{{ route('admin.posts.index') }}" class="rounded-lg border border-zinc-300 px-4 py-2 text-sm font-medium hover:bg-zinc-50">Anuluj</a>
        </div>
    </form>
@endsection
@include('admin.posts.tinymce')
