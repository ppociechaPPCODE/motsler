<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class OfferController extends Controller
{
    public function index(): View
    {
        return view('pages.offer.index');
    }

    public function dpfMachines(): View
    {
        return view('pages.offer.dpf-machines');
    }

    public function workshopWashers(): View
    {
        return view('pages.offer.workshop-washers');
    }

    public function pressureWashers(): View
    {
        return view('pages.offer.pressure-washers');
    }
}
