<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\PublicController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('articles', ArticleController::class);
});

Route::get('/', [PublicController::class, 'index'])->name('public.index');
Route::get('/article/{article}', [PublicController::class, 'show'])->name('public.show');
