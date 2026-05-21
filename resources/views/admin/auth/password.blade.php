@extends('admin.layout')
@section('title', 'Zmiana hasła')
@section('content')
    <div class="mx-auto max-w-md rounded-2xl border border-zinc-200 bg-white p-8 shadow-sm">
        <h1 class="text-xl font-bold text-primary">Zmiana hasła</h1>
        <form method="post" action="{{ route('admin.password.update') }}" class="mt-6 space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="current_password" class="block text-sm font-medium text-zinc-700">Obecne hasło</label>
                <input id="current_password" type="password" name="current_password" required autocomplete="current-password" class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent">
                @error('current_password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-zinc-700">Nowe hasło</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent">
                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-zinc-700">Powtórz nowe hasło</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent">
            </div>
            <button type="submit" class="w-full rounded-lg bg-accent py-2.5 text-sm font-bold text-white shadow hover:bg-accent/90">Zapisz nowe hasło</button>
            <p class="text-center text-sm">
                <a href="{{ route('admin.posts.index') }}" class="font-medium text-accent hover:underline">Wróć do wpisów</a>
            </p>
        </form>
    </div>
@endsection
