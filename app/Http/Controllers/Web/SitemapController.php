<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $lastmod = now()->toAtomString();
        $locales = array_keys(config('app.supported_locales', []));
        $blog = config('app.content.blog', []);

        $suffixes = [
            'offer.index',
            'offer.dpf',
            'offer.workshop_washers',
            'offer.pressure_washers',
            'solutions.chemia',
            'solutions.custom_machines',
            'solutions.new_products',
            'about',
            'contact',
            'privacy',
            'blog.index',
        ];

        $urls = [route('home')];

        foreach ($locales as $locale) {
            if ($locale === 'pl') {
                continue;
            }
            $urls[] = route("{$locale}.home", ['locale' => $locale]);
        }

        foreach ($locales as $locale) {
            foreach ($suffixes as $suffix) {
                $name = "{$locale}.{$suffix}";
                $urls[] = $locale === 'en'
                    ? route($name, ['locale' => 'en'])
                    : route($name);
            }
        }

        foreach ($locales as $locale) {
            foreach (array_values($blog[$locale] ?? []) as $slug) {
                $urls[] = $locale === 'en'
                    ? route("{$locale}.blog.show", ['locale' => 'en', 'slug' => $slug])
                    : route("{$locale}.blog.show", ['slug' => $slug]);
            }
        }

        $urls = array_values(array_unique($urls));
        sort($urls);

        $lines = ['<?xml version="1.0" encoding="UTF-8"?>', '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'];
        foreach ($urls as $loc) {
            $lines[] = '  <url>';
            $lines[] = '    <loc>'.htmlspecialchars($loc, ENT_XML1 | ENT_COMPAT, 'UTF-8').'</loc>';
            $lines[] = '    <lastmod>'.$lastmod.'</lastmod>';
            $lines[] = '  </url>';
        }
        $lines[] = '</urlset>';
        $body = implode("\n", $lines)."\n";

        return response($body, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
