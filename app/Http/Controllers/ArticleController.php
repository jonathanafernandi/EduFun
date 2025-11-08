<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Writer;
use App\Models\Category;

class ArticleController extends Controller
{
    public function home() {
        $articles = Article::with(['writer', 'category'])->get();
        return view('home.home', compact('articles'));
    }
}
