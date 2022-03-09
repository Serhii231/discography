<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class AddNewsController extends Controller
{
    public function index() 
    {   
        return view('add_news');
    }

    public function addNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'foto' => 'required|string|url'
        ]);

        $news = News::query()->create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'foto' => $request->input('foto'),
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('main');
    }
}
