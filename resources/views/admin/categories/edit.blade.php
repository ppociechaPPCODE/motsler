@extends('admin.layout')
@section('title', 'Edycja kategorii')
@section('content')
    <h1 class="mb-6 text-2xl font-bold text-primary">Edycja kategorii</h1>
    <form method="post" action="{{ route('admin.categories.update', $category) }}" class="max-w-xl space-y-6 rounded-xl border border-zinc-200 bg-white p-6 shadow-sm">
        @csrf
        @method('PUT')
        @include('admin.categories._form', ['category' => $category])
        <div class="flex gap-3">
            <button type="submit" class="rounded-lg bg-accent px-4 py-2 text-sm font-bold text-white hover:bg-accent/90">Zapisz</button>
            <a href="{{ route('admin.categories.index') }}" class="rounded-lg border border-zinc-300 px-4 py-2 text-sm font-medium hover:bg-zinc-50">Anuluj</a>
        </div>
    </form>
@endsection
