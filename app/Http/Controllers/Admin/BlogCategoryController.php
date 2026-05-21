<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogCategoryRequest;
use App\Http\Requests\Admin\UpdateBlogCategoryRequest;
use App\Models\BlogCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogCategoryController extends Controller
{
    public function index(): View
    {
        $categories = BlogCategory::query()
            ->orderBy('locale')
            ->orderBy('sort_order')
            ->orderBy('name')
            ->paginate(30);

        return view('admin.categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.categories.create', ['category' => new BlogCategory]);
    }

    public function store(StoreBlogCategoryRequest $request): RedirectResponse
    {
        BlogCategory::create($request->validated());

        return redirect()->route('admin.categories.index')->with('status', 'Kategoria dodana.');
    }

    public function edit(BlogCategory $category): View
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(UpdateBlogCategoryRequest $request, BlogCategory $category): RedirectResponse
    {
        $category->update($request->validated());

        return redirect()->route('admin.categories.index')->with('status', 'Kategoria zapisana.');
    }

    public function destroy(BlogCategory $category): RedirectResponse
    {
        if ($category->posts()->exists()) {
            return redirect()->route('admin.categories.index')
                ->with('error', 'Nie można usunąć kategorii przypisanej do wpisów.');
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('status', 'Kategoria usunięta.');
    }
}
