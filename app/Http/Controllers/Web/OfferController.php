<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class OfferController extends Controller
{
    public function dpfMachines(): View
    {
        return view('pages.offer.dpf-machines');
    }
}
