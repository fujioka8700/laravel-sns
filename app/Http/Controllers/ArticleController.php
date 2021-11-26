<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
                (object) [
                    'id' => 1,
                    'title' => 'タイトル1',
                    'body' => '本文1'
                ]
        ];

        return view('articles.index', ['articles' => $articles]);
    }
}
