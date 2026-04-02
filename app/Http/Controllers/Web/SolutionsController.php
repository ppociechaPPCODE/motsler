<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SolutionsController extends Controller
{
    public function chemical(): View
    {
        return view('pages.solutions.chemical');
    }

    public function customMachines(): View
    {
        return view('pages.solutions.custom-machines');
    }

    public function newProducts(): View
    {
        return view('pages.solutions.new-products');
    }
}
