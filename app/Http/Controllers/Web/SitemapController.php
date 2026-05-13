<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
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
            'blog.index',
        ];

        $byLoc = [];

        $merge = function (string $loc, string $lm) use (&$byLoc): void {
            if (! isset($byLoc[$loc]) || strcmp($lm, $byLoc[$loc]) > 0) {
                $byLoc[$loc] = $lm;
            }
        };

        $merge(route('home'), $lastmod);

        foreach ($locales as $locale) {
            if ($locale === 'pl') {
                continue;
            }
            $merge(route("{$locale}.home"), $lastmod);
        }

        foreach ($locales as $locale) {
            foreach ($suffixes as $suffix) {
                $merge(route("{$locale}.{$suffix}"), $lastmod);
            }
        }

        $posts = BlogPost::query()
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderBy('id')
            ->get(['locale', 'slug', 'published_at']);

        foreach ($posts as $post) {
            $loc = locale_route('blog.show', ['locale' => $post->locale, 'slug' => $post->slug]);
            $lm = $post->published_at?->toAtomString() ?? $lastmod;
            $merge($loc, $lm);
        }

        ksort($byLoc);

        $lines = ['<?xml version="1.0" encoding="UTF-8"?>', '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'];
        foreach ($byLoc as $loc => $lm) {
            $lines[] = '  <url>';
            $lines[] = '    <loc>'.htmlspecialchars($loc, ENT_XML1 | ENT_COMPAT, 'UTF-8').'</loc>';
            $lines[] = '    <lastmod>'.htmlspecialchars($lm, ENT_XML1 | ENT_COMPAT, 'UTF-8').'</lastmod>';
            $lines[] = '  </url>';
        }
        $lines[] = '</urlset>';
        $body = implode("\n", $lines)."\n";

        return response($body, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
