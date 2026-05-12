@extends('admin.layout')
@section('title', 'Logowanie')
@section('content')
    <div class="mx-auto max-w-md rounded-2xl border border-zinc-200 bg-white p-8 shadow-sm">
        <h1 class="text-xl font-bold text-primary">Panel administratora</h1>
        <form method="post" action="{{ route('admin.login.attempt') }}" class="mt-6 space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-zinc-700">E-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-zinc-700">Hasło</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent">
            </div>
            <label class="flex items-center gap-2 text-sm text-zinc-700">
                <input type="checkbox" name="remember" value="1" class="rounded border-zinc-300">
                Zapamiętaj mnie
            </label>
            <button type="submit" class="w-full rounded-lg bg-accent py-2.5 text-sm font-bold text-white shadow hover:bg-accent/90">Zaloguj</button>
        </form>
    </div>
@endsection
