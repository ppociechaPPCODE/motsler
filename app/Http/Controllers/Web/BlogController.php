<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('pages.blog.index');
    }

    public function show(string $slug): View
    {
        return view('pages.blog.show', ['slug' => $slug]);
    }
}
