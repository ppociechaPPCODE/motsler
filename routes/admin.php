<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminPasswordController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogEditorUploadController;
use App\Http\Controllers\Admin\BlogPostController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function (): void {
    Route::middleware('guest')->group(function (): void {
        Route::get('login', [AdminLoginController::class, 'create'])->name('login');
        Route::post('login', [AdminLoginController::class, 'store'])->name('login.attempt');
    });

    Route::middleware(['auth', 'admin'])->group(function (): void {
        Route::post('logout', [AdminLoginController::class, 'destroy'])->name('logout');
        Route::get('password', [AdminPasswordController::class, 'edit'])->name('password.edit');
        Route::put('password', [AdminPasswordController::class, 'update'])->name('password.update');
        Route::get('/', fn () => redirect()->route('admin.posts.index'))->name('dashboard');

        Route::resource('categories', BlogCategoryController::class)->except(['show']);
        Route::post('posts/{post}/publication', [BlogPostController::class, 'publication'])->name('posts.publication');
        Route::resource('posts', BlogPostController::class)->except(['show']);
        Route::post('editor/upload', [BlogEditorUploadController::class, 'store'])->name('editor.upload');
    });
});
