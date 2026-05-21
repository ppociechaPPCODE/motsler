@extends('admin.layout')
@section('title', 'Kategorie bloga')
@section('content')
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
        <h1 class="text-2xl font-bold text-primary">Kategorie</h1>
        <a href="{{ route('admin.categories.create') }}" class="rounded-lg bg-accent px-4 py-2 text-sm font-bold text-white hover:bg-accent/90">Dodaj kategorię</a>
    </div>
    <div class="overflow-x-auto rounded-xl border border-zinc-200 bg-white shadow-sm">
        <table class="min-w-full divide-y divide-zinc-200 text-sm">
            <thead class="bg-zinc-50 text-left text-xs font-semibold uppercase tracking-wide text-zinc-600">
                <tr>
                    <th class="px-4 py-3">Język</th>
                    <th class="px-4 py-3">Nazwa</th>
                    <th class="px-4 py-3">Slug</th>
                    <th class="px-4 py-3">Kolejność</th>
                    <th class="px-4 py-3">Styl</th>
                    <th class="px-4 py-3 text-right">Akcje</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-100">
                @forelse ($categories as $category)
                    <tr>
                        <td class="px-4 py-3 font-medium">{{ $category->locale }}</td>
                        <td class="px-4 py-3">{{ $category->name }}</td>
                        <td class="px-4 py-3 text-zinc-600">{{ $category->slug }}</td>
                        <td class="px-4 py-3">{{ $category->sort_order }}</td>
                        <td class="px-4 py-3">{{ $category->style_key }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.categories.edit', $category) }}" class="font-semibold text-accent hover:underline">Edytuj</a>
                            <form method="post" action="{{ route('admin.categories.destroy', $category) }}" class="inline" onsubmit="return confirm('Usunąć kategorię?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-3 font-semibold text-red-600 hover:underline">Usuń</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-8 text-center text-zinc-500">Brak kategorii.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $categories->links() }}</div>
@endsection
