@php
    $locales = array_keys(config('app.supported_locales', []));
@endphp
<div class="space-y-4">
    <div class="rounded-lg border border-zinc-200 bg-zinc-50 px-4 py-3 text-sm">
        @if ($post->published_at)
            <p class="m-0">
                <span class="font-semibold text-emerald-800">Opublikowano:</span>
                <time datetime="{{ $post->published_at->toIso8601String() }}">{{ $post->published_at->translatedFormat('j F Y, H:i') }}</time>
            </p>
        @else
            <p class="m-0">
                <span class="font-semibold text-zinc-700">Szkic</span>
                <span class="text-zinc-500"> — przycisk „Publikuj teraz” ustawia datę publikacji na bieżący moment.</span>
            </p>
        @endif
    </div>
    <div>
        <label for="locale" class="block text-sm font-medium text-zinc-700">Język wpisu</label>
        <select id="locale" name="locale" required class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm">
            @foreach ($locales as $loc)
                <option value="{{ $loc }}" @selected(old('locale', $post->locale ?? 'pl') === $loc)>{{ $loc }}</option>
            @endforeach
        </select>
        @error('locale')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="blog_category_id" class="block text-sm font-medium text-zinc-700">Kategoria</label>
        <select id="blog_category_id" name="blog_category_id" required class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm">
            @foreach ($locales as $loc)
                @php $groupCats = $categories->where('locale', $loc); @endphp
                @if ($groupCats->isNotEmpty())
                    <optgroup label="{{ strtoupper($loc) }}">
                        @foreach ($groupCats as $cat)
                            <option value="{{ $cat->id }}" @selected((int) old('blog_category_id', $post->blog_category_id) === $cat->id)>{{ $cat->name }}</option>
                        @endforeach
                    </optgroup>
                @endif
            @endforeach
        </select>
        @error('blog_category_id')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="title" class="block text-sm font-medium text-zinc-700">Tytuł</label>
        <input id="title" type="text" name="title" value="{{ old('title', $post->title) }}" required class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm">
        @error('title')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="slug" class="block text-sm font-medium text-zinc-700">Slug (opcjonalnie)</label>
        <input id="slug" type="text" name="slug" value="{{ old('slug', $post->slug) }}" placeholder="auto z tytułu" class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm">
        @error('slug')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="excerpt" class="block text-sm font-medium text-zinc-700">Lead / skrót</label>
        <textarea id="excerpt" name="excerpt" rows="3" class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm">{{ old('excerpt', $post->excerpt) }}</textarea>
        @error('excerpt')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="post_body" class="block text-sm font-medium text-zinc-700">Treść</label>
        <textarea id="post_body" name="body" rows="28" class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm font-mono text-xs">{{ old('body', $post->body ?? '') }}</textarea>
        @error('body')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="featured_image" class="block text-sm font-medium text-zinc-700">Miniatura (lista)</label>
        <input id="featured_image" type="file" name="featured_image" accept="image/jpeg,image/png,image/webp,image/gif" class="mt-1 w-full text-sm">
        @error('featured_image')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
        @if (! empty($post->featured_image))
            <p class="mt-2 text-xs text-zinc-500">Aktualny plik: {{ $post->featured_image }}</p>
            <img src="{{ asset('storage/'.$post->featured_image) }}" alt="" class="mt-2 max-h-32 rounded border border-zinc-200">
            @if ($post->exists)
                <label class="mt-3 flex cursor-pointer items-center gap-2 text-sm text-zinc-700">
                    <input type="checkbox" name="remove_featured_image" value="1" class="h-4 w-4 rounded border-zinc-300 text-red-600 focus:ring-red-500" @checked(old('remove_featured_image'))>
                    Usuń miniaturę
                </label>
            @endif
        @endif
    </div>
    <div>
        <label for="meta_description" class="block text-sm font-medium text-zinc-700">Meta description (SEO)</label>
        <textarea id="meta_description" name="meta_description" rows="2" maxlength="500" class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm">{{ old('meta_description', $post->meta_description) }}</textarea>
        @error('meta_description')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>
