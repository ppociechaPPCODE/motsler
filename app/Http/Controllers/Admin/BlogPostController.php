<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogPostRequest;
use App\Http\Requests\Admin\UpdateBlogPostRequest;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BlogPostController extends Controller
{
    public function index(Request $request): View
    {
        if ($request->input('blog_category_id') === '') {
            $request->merge(['blog_category_id' => null]);
        }
        if ($request->input('title') === '') {
            $request->merge(['title' => null]);
        }

        $filters = $request->validate([
            'blog_category_id' => ['nullable', 'integer', 'exists:blog_categories,id'],
            'title' => ['nullable', 'string', 'max:255'],
        ]);

        $posts = BlogPost::query()
            ->with('category')
            ->when(
                filled($filters['blog_category_id'] ?? null),
                fn ($q) => $q->where('blog_category_id', $filters['blog_category_id'])
            )
            ->when(filled($filters['title'] ?? null), function ($q) use ($filters): void {
                $t = trim((string) $filters['title']);
                $like = '%'.addcslashes($t, '%_\\').'%';
                $q->where('title', 'like', $like);
            })
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->paginate(25)
            ->withQueryString();

        $categories = BlogCategory::query()
            ->orderBy('locale')
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.posts.index', compact('posts', 'categories', 'filters'));
    }

    public function create(): View
    {
        $post = new BlogPost;
        $categories = BlogCategory::query()->orderBy('locale')->orderBy('sort_order')->orderBy('name')->get();

        return view('admin.posts.create', compact('post', 'categories'));
    }

    public function store(StoreBlogPostRequest $request): RedirectResponse
    {
        $data = $request->validated();
        unset($data['featured_image']);
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blog/featured', 'public');
        }
        if ($request->boolean('publish_now')) {
            $data['published_at'] = now();
        } else {
            $data['published_at'] = null;
        }
        BlogPost::create($data);

        $msg = $request->boolean('publish_now') ? 'Wpis opublikowany.' : 'Wpis zapisany jako szkic.';

        return redirect()->route('admin.posts.index')->with('status', $msg);
    }

    public function edit(BlogPost $post): View
    {
        $categories = BlogCategory::query()->orderBy('locale')->orderBy('sort_order')->orderBy('name')->get();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(UpdateBlogPostRequest $request, BlogPost $post): RedirectResponse
    {
        $data = $request->validated();
        unset($data['featured_image'], $data['remove_featured_image']);
        if ($request->hasFile('featured_image')) {
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
            $data['featured_image'] = $request->file('featured_image')->store('blog/featured', 'public');
        } elseif ($request->boolean('remove_featured_image')) {
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
            $data['featured_image'] = null;
        }
        if ($request->boolean('publish_now')) {
            $data['published_at'] = now();
        } elseif ($request->boolean('unpublish')) {
            $data['published_at'] = null;
        }
        $post->update($data);

        $msg = match (true) {
            $request->boolean('publish_now') => 'Wpis opublikowany (data zaktualizowana).',
            $request->boolean('unpublish') => 'Publikacja wycofana.',
            default => 'Wpis zapisany.',
        };

        return redirect()->route('admin.posts.index')->with('status', $msg);
    }

    public function publication(Request $request, BlogPost $post): RedirectResponse
    {
        $request->validate([
            'published' => ['required', 'boolean'],
        ]);
        if ($request->boolean('published')) {
            $post->update(['published_at' => now()]);
        } else {
            $post->update(['published_at' => null]);
        }

        return back()->with('status', 'Ustawienie publikacji zapisane.');
    }

    public function destroy(BlogPost $post): RedirectResponse
    {
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }
        $post->delete();

        return redirect()->route('admin.posts.index')->with('status', 'Wpis usunięty.');
    }
}
