<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Writer;
use App\Models\Category;

class ArticleController extends Controller
{
    public function home() {
        $articles = Article::with(['writer', 'category'])->latest('posted_at')->get();
        return view('home.home', compact('articles'));
    }

    public function details($article_id) {
        $article = Article::with(['writer', 'category'])->findOrFail($article_id);
        return view('article.details', compact('article'));
    }

    public function dataScience() {
        $articles = Article::with(['writer', 'category'])
                    ->where('category_id', '1')
                    ->get();
        return view('category.data-science', compact('articles'));
    }

    public function networkSecurity() {
        $articles = Article::with(['writer', 'category'])
                    ->where('category_id', '2')
                    ->get();
        return view('category.network-security', compact('articles'));
    }

    public function popular() {
        $articles = Article::with(['writer', 'category'])->paginate(3);
        return view('popular.popular', compact('articles'));
    }
}
