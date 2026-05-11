<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $supportedLocales = array_keys(config('app.supported_locales', []));
        $defaultLocale = config('app.locale', 'pl');

        $locale = $request->route()?->parameter('locale');
        if ($locale === null) {
            $first = $request->segment(1);
            if (in_array($first, $supportedLocales, true) && $first !== $defaultLocale) {
                $locale = $first;
            }
        }
        if ($locale === null) {
            $locale = $defaultLocale;
        }

        if (in_array($locale, $supportedLocales, true)) {
            App::setLocale($locale);
            session(['locale' => $locale]);
        }

        return $next($request);
    }
}
