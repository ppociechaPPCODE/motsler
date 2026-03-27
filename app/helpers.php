<?php

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
