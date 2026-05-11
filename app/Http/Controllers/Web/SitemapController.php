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

        $suffixes = [
            'offer.index',
            'offer.dpf',
            'solutions.chemia',
            'about',
            'contact',
            'privacy',
        ];

        $urls = [route('home')];

        foreach ($locales as $locale) {
            if ($locale === 'pl') {
                continue;
            }
            $urls[] = route("{$locale}.home");
        }

        foreach ($locales as $locale) {
            foreach ($suffixes as $suffix) {
                $name = "{$locale}.{$suffix}";
                $urls[] = route($name);
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
