<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\OfferController;
use App\Http\Controllers\Web\PrivacyController;
use Illuminate\Support\Facades\Route;

$supportedLocales = array_keys(config('app.supported_locales', []));
$paths = config('localized_routes.paths', []);

Route::get('/', function () {
    return redirect('/pl');
});

Route::prefix('{locale}')
    ->whereIn('locale', $supportedLocales)
    ->middleware(['locale'])
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
    });

foreach ($supportedLocales as $locale) {
    $p = $paths[$locale] ?? [];
    Route::prefix('{locale}')
        ->where(['locale' => $locale])
        ->middleware(['locale'])
        ->group(function () use ($locale, $p) {
            Route::get($p['offer_dpf'], [OfferController::class, 'dpfMachines'])->name("{$locale}.offer.dpf");
            Route::get($p['about'], [AboutController::class, 'index'])->name("{$locale}.about");
            Route::get($p['contact'], [ContactController::class, 'index'])->name("{$locale}.contact");
            Route::post($p['contact'], [ContactController::class, 'store'])->name("{$locale}.contact.store");
            Route::get($p['privacy'], [PrivacyController::class, 'index'])->name("{$locale}.privacy");
            Route::get($p['blog_index'], [BlogController::class, 'index'])->name("{$locale}.blog.index");
            Route::get($p['blog_show'], [BlogController::class, 'show'])->name("{$locale}.blog.show");
        });
}
