<?php

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/articles', function (Request $request) {
    return Article::where('published', true)
        ->with('category')
        ->get();
});
