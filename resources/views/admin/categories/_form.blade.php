@php
    $locales = array_keys(config('app.supported_locales', []));
@endphp
<div class="space-y-4">
    <div>
        <label for="locale" class="block text-sm font-medium text-zinc-700">Język</label>
        <select id="locale" name="locale" required class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm">
            @foreach ($locales as $loc)
                <option value="{{ $loc }}" @selected(old('locale', $category->locale ?? 'pl') === $loc)>{{ $loc }}</option>
            @endforeach
        </select>
        @error('locale')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="name" class="block text-sm font-medium text-zinc-700">Nazwa</label>
        <input id="name" type="text" name="name" value="{{ old('name', $category->name) }}" required class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm">
        @error('name')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="slug" class="block text-sm font-medium text-zinc-700">Slug (opcjonalnie)</label>
        <input id="slug" type="text" name="slug" value="{{ old('slug', $category->slug) }}" placeholder="auto z nazwy" class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm">
        @error('slug')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="sort_order" class="block text-sm font-medium text-zinc-700">Kolejność</label>
        <input id="sort_order" type="number" name="sort_order" min="0" max="65535" value="{{ old('sort_order', $category->sort_order ?? 0) }}" class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm">
        @error('sort_order')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="style_key" class="block text-sm font-medium text-zinc-700">Styl karty</label>
        <select id="style_key" name="style_key" required class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm">
            @foreach (['biz' => 'Biznes', 'tech' => 'Technologia', 'guide' => 'Poradnik', 'case' => 'Case study'] as $key => $label)
                <option value="{{ $key }}" @selected(old('style_key', $category->style_key ?? 'biz') === $key)>{{ $label }}</option>
            @endforeach
        </select>
        @error('style_key')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>
