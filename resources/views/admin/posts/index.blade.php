@extends('admin.layout')
@section('title', 'Wpisy bloga')
@section('content')
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
        <h1 class="text-2xl font-bold text-primary">Wpisy</h1>
        <a href="{{ route('admin.posts.create') }}" class="rounded-lg bg-accent px-4 py-2 text-sm font-bold text-white hover:bg-accent/90">Dodaj wpis</a>
    </div>
    <form method="get" action="{{ route('admin.posts.index') }}" class="mb-6 flex flex-wrap items-end gap-4 rounded-xl border border-zinc-200 bg-white p-4 shadow-sm">
        <div>
            <label for="filter-category" class="block text-xs font-semibold uppercase tracking-wide text-zinc-500">Kategoria</label>
            <select id="filter-category" name="blog_category_id" class="mt-1 min-w-[14rem] rounded-lg border border-zinc-300 px-3 py-2 text-sm">
                <option value="">Wszystkie</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" @selected(($filters['blog_category_id'] ?? null) == $cat->id)>{{ $cat->locale }} — {{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="min-w-[12rem] flex-1">
            <label for="filter-title" class="block text-xs font-semibold uppercase tracking-wide text-zinc-500">Tytuł</label>
            <input id="filter-title" type="search" name="title" value="{{ $filters['title'] ?? '' }}" placeholder="Szukaj w tytule…" class="mt-1 w-full max-w-md rounded-lg border border-zinc-300 px-3 py-2 text-sm">
        </div>
        <div class="flex flex-wrap gap-2">
            <button type="submit" class="rounded-lg bg-zinc-800 px-4 py-2 text-sm font-bold text-white hover:bg-zinc-700">Szukaj</button>
            <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center rounded-lg border border-zinc-300 px-4 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-50">Wyczyść</a>
        </div>
    </form>
    <div class="overflow-x-auto rounded-xl border border-zinc-200 bg-white shadow-sm">
        <table class="min-w-full divide-y divide-zinc-200 text-sm">
            <thead class="bg-zinc-50 text-left text-xs font-semibold uppercase tracking-wide text-zinc-600">
                <tr>
                    <th class="px-4 py-3">Data</th>
                    <th class="px-4 py-3">Język</th>
                    <th class="px-4 py-3">Tytuł</th>
                    <th class="px-4 py-3">Kategoria</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3 text-center">Publikacja</th>
                    <th class="px-4 py-3 text-right">Akcje</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-100">
                @forelse ($posts as $post)
                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap text-zinc-600">{{ $post->published_at?->format('Y-m-d H:i') ?? '—' }}</td>
                        <td class="px-4 py-3 font-medium">{{ $post->locale }}</td>
                        <td class="px-4 py-3 font-medium text-primary">{{ Str::limit($post->title, 60) }}</td>
                        <td class="px-4 py-3">{{ $post->category?->name ?? '—' }}</td>
                        <td class="px-4 py-3">
                            @if ($post->published_at === null)
                                Szkic
                            @elseif ($post->published_at->isFuture())
                                Zaplanowany
                            @else
                                Opublikowany
                            @endif
                        </td>
                        <td class="px-4 py-3 text-center">
                            <form method="post" action="{{ route('admin.posts.publication', $post) }}" class="inline-flex items-center justify-center">
                                @csrf
                                <input type="hidden" name="published" value="0">
                                <input type="checkbox" name="published" value="1" class="h-4 w-4 rounded border-zinc-300 text-emerald-600 focus:ring-emerald-500" @checked($post->published_at !== null) onchange="this.form.submit()" aria-label="Publikacja na stronie">
                            </form>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="font-semibold text-accent hover:underline">Edytuj</a>
                            <form method="post" action="{{ route('admin.posts.destroy', $post) }}" class="inline" onsubmit="return confirm('Usunąć wpis?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-3 font-semibold text-red-600 hover:underline">Usuń</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-8 text-center text-zinc-500">Brak wpisów.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $posts->links() }}</div>
@endsection
