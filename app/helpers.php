<?php

use Illuminate\Support\Facades\URL;

if (! function_exists('locale_route')) {
    function locale_route(string $name, array $parameters = []): string
    {
        $locale = $parameters['locale'] ?? app()->getLocale();
        unset($parameters['locale']);

        if ($name === 'home') {
            return route('home', array_merge(['locale' => $locale], $parameters));
        }

        return route($locale.'.'.$name, array_merge(['locale' => $locale], $parameters));
    }
}

if (! function_exists('canonical_url')) {
    function canonical_url(): string
    {
        return URL::current();
    }
}

if (! function_exists('blog_slug_for_locale')) {
    function blog_slug_for_locale(string $slug, string $fromLocale, string $toLocale): string
    {
        if ($fromLocale === $toLocale) {
            return $slug;
        }

        $blog = config('app.content.blog', []);

        foreach (['post1', 'post2'] as $key) {
            if (($blog[$fromLocale][$key] ?? null) === $slug) {
                return $blog[$toLocale][$key] ?? $slug;
            }
        }

        return $slug;
    }
}

if (! function_exists('hreflang_urls')) {
    function hreflang_urls(): array
    {
        $route = request()->route();
        if ($route === null) {
            return [];
        }

        $name = $route->getName();
        if ($name === null || $name === '') {
            return [];
        }

        $locales = array_keys(config('app.supported_locales', []));
        if ($locales === []) {
            return [];
        }

        if ($name === 'home') {
            $urls = [];
            foreach ($locales as $loc) {
                $urls[$loc] = url(route('home', ['locale' => $loc]));
            }

            return $urls;
        }

        $logical = null;
        foreach ($locales as $loc) {
            $prefix = $loc.'.';
            if (str_starts_with($name, $prefix)) {
                $logical = substr($name, strlen($prefix));
                break;
            }
        }

        if ($logical === null) {
            return [];
        }

        if ($logical === 'contact.store') {
            $logical = 'contact';
        }

        $currentLocale = app()->getLocale();
        $routeParams = $route->parameters();

        $urls = [];
        foreach ($locales as $loc) {
            $params = array_merge($routeParams, ['locale' => $loc]);
            if ($logical === 'blog.show' && isset($params['slug'])) {
                $params['slug'] = blog_slug_for_locale($params['slug'], $currentLocale, $loc);
            }

            try {
                $urls[$loc] = url(locale_route($logical, $params));
            } catch (\Throwable) {
                continue;
            }
        }

        return $urls;
    }
}
