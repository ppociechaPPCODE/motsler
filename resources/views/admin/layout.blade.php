<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Panel') — Motsler</title>
    @vite(['resources/css/app.css'])
    @stack('head')
</head>
<body class="min-h-screen bg-zinc-100 text-zinc-900 antialiased">
    @auth
        <header class="border-b border-zinc-200 bg-white shadow-sm">
            <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-4 px-4 py-3">
                <nav class="flex flex-wrap items-center gap-4 text-sm font-semibold">
                    <a href="{{ route('admin.posts.index') }}" class="text-primary hover:text-accent">Wpisy</a>
                    <a href="{{ route('admin.categories.index') }}" class="text-primary hover:text-accent">Kategorie</a>
                    <a href="{{ route('admin.password.edit') }}" class="text-primary hover:text-accent">Zmiana hasła</a>
                </nav>
                <form method="post" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="rounded border border-zinc-300 bg-white px-3 py-1.5 text-sm font-medium hover:bg-zinc-50">Wyloguj</button>
                </form>
            </div>
        </header>
    @endauth
    <main class="mx-auto max-w-6xl px-4 py-8">
        @if (session('status'))
            <p class="mb-4 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-900">{{ session('status') }}</p>
        @endif
        @if (session('error'))
            <p class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-900">{{ session('error') }}</p>
        @endif
        @yield('content')
    </main>
    @stack('scripts')
</body>
</html>
