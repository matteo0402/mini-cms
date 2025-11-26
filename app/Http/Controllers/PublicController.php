<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicController extends Controller
{
    public function index()
    {
        $articles = Article::where('published', true)->latest()->get();
        return view('public.index', compact('articles'));
    }

    public function show(Article $article)
    {
        abort_unless($article->published, 404);

        return view('public.show', compact('article'));
    }
}

