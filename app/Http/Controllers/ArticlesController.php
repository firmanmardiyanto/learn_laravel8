<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view('articles.article', ['article' => $article]);
    }
}
