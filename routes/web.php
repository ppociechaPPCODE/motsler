<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\OfferController;
use App\Http\Controllers\Web\PrivacyController;
use App\Http\Controllers\Web\SolutionsController;
use Illuminate\Support\Facades\Route;

$supportedLocales = array_keys(config('app.supported_locales', []));
$paths = config('localized_routes.paths', []);
$defaultLocale = 'pl';

Route::get('/', [HomeController::class, 'index'])
    ->middleware(['locale'])
    ->name('home');

foreach ($supportedLocales as $locale) {
    $p = $paths[$locale] ?? [];
    $routeGroup = Route::middleware(['locale']);

    if ($locale !== $defaultLocale) {
        $routeGroup = $routeGroup->prefix('{locale}')->where(['locale' => $locale]);
        $routeGroup->group(function () use ($locale) {
            Route::get('/', [HomeController::class, 'index'])->name("{$locale}.home");
        });
    }

    $routeGroup->group(function () use ($locale, $p) {
        Route::get($p['offer_index'], [OfferController::class, 'index'])->name("{$locale}.offer.index");
        Route::get($p['offer_dpf'], [OfferController::class, 'dpfMachines'])->name("{$locale}.offer.dpf");
        Route::get($p['offer_workshop_washers'], [OfferController::class, 'workshopWashers'])->name("{$locale}.offer.workshop_washers");
        Route::get($p['offer_pressure_washers'], [OfferController::class, 'pressureWashers'])->name("{$locale}.offer.pressure_washers");
        Route::get($p['chemia'], [SolutionsController::class, 'chemical'])->name("{$locale}.solutions.chemia");
        Route::get($p['custom_machines'], [SolutionsController::class, 'customMachines'])->name("{$locale}.solutions.custom_machines");
        Route::get($p['new_products'], [SolutionsController::class, 'newProducts'])->name("{$locale}.solutions.new_products");
        Route::get($p['about'], [AboutController::class, 'index'])->name("{$locale}.about");
        Route::get($p['contact'], [ContactController::class, 'index'])->name("{$locale}.contact");
        Route::post($p['contact'], [ContactController::class, 'store'])->name("{$locale}.contact.store");
        Route::get($p['privacy'], [PrivacyController::class, 'index'])->name("{$locale}.privacy");
        Route::get($p['blog_index'], [BlogController::class, 'index'])->name("{$locale}.blog.index");
        Route::get($p['blog_show'], [BlogController::class, 'show'])->name("{$locale}.blog.show");
    });
}

Route::permanentRedirect('pl', '/');
Route::get('pl/{path}', function (string $path) {
    $query = request()->getQueryString();
    $url = '/'.$path;

    if ($query) {
        $url .= '?'.$query;
    }

    return redirect($url, 301);
})->where('path', '.*');

Route::permanentRedirect('pl/chemia-przemyslowa', '/oferta/chemia');
Route::permanentRedirect('en/industrial-chemicals', '/en/offer/chemistry');
