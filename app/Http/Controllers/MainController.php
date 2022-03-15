<?php

namespace App\Http\Controllers;

use App\Models\News;

class MainController extends Controller
{
    public function index()
    {
        $news = News::query()->latest()->take(3)->get();
        return view('main', [
            'news' => $news
        ]);
    }
}
