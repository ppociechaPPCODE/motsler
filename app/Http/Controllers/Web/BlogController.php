<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
    public function index(): View
    {
        $locale = app()->getLocale();
        $categories = BlogCategory::query()
            ->where('locale', $locale)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();
        $posts = BlogPost::query()
            ->where('locale', $locale)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->with('category')
            ->orderByDesc('published_at')
            ->paginate(12);
        $l = $locale;
        $contactUrl = locale_route('contact', ['locale' => $l]);

        return view('pages.blog.index', compact('categories', 'posts', 'l', 'contactUrl'));
    }

    public function show(string $slug): View
    {
        $post = BlogPost::query()
            ->where('locale', app()->getLocale())
            ->where('slug', $slug)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->with('category')
            ->first();
        if ($post === null) {
            throw new NotFoundHttpException;
        }

        return view('pages.blog.show', compact('post'));
    }
}
