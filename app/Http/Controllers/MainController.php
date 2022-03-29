<?php

namespace App\Http\Controllers;

use App\Events\UserJoined;
use App\Models\News;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index(Request $request)
    {
        if (!empty( $request->user())) {
            event(new UserJoined($request->user()));
        }

        $news = News::query()->latest()->take(3)->get();
        return view('main', [
            'news' => $news
        ]);
    }
}
