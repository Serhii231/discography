<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

    public function index_update(int $id)
    {
        $news = News::query()
            ->where('id', $id)
            ->get();

        return view('news.update', [
            'news' => $news,
            ]);
    }

    public function update(int $id, Request $request)
    {

        $news = News::query()
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'foto'=> $request->input('foto')
            ]);

        return redirect()->route('news.show')->with('success', 'Новина успішно редагована');
    }

    public function destroy(int $id)
    {
        News::query()->where('id', $id)->delete();

        return redirect()->route('news.show')->with('success', 'Новина успішно видалена.');
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

    public function one_news(string $slug)
    {
        $news = News::query()
            ->where('slug', $slug)
            ->get();

        return view('news.one-news', [
            'news' => $news,
        ]);
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
            'slug' => Str::slug($request->input('title'))
        ]);

        return redirect()->route('main')->with('success', 'Новина успішно збережена.');

    }
}
