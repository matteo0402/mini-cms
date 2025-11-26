<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::where('published', true);

        if ($search = $request->query('search')) {
            $query->where('title', 'like', "%{$search}%");
        }

        $articles = $query->latest()->get();

        return view('public.index', compact('articles', 'search'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.form', compact('categories'));
    }

    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();
        $data['published'] = $request->has('published');

        Article::create($data);

        return redirect()->route('admin.articles.index');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('admin.articles.form', compact('article', 'categories'));
    }

    public function update(StoreArticleRequest $request, Article $article)
    {
        $data = $request->validated();
        $data['published'] = $request->has('published');

        $article->update($data);

        return redirect()->route('admin.articles.index');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('admin.articles.index');
    }
}
