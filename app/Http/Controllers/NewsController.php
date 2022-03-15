<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index() 
    {
        return view('news.index', [
            'news' => News::query()->paginate(15)
        ]);
    }

    public function show() 
    {
        return view('news.show', [
            'news' => News::query()->paginate(15)
        ]);
    }

    public function togglePublishStatus(int $id) 
    {
        $news = News::query()
            ->findOrFail($id);

        $news->publish = !$news->publish;
        $news->saveOrFail();

        return redirect()->route('news.show')->with('success', 'Новина успішно змінила статус.');
    }

    public function create() 
    {
        return view('news.create');
    }

    public function store(Request $request)
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
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('main')->with('success', 'Новина успішно збережена.');

    }
}
