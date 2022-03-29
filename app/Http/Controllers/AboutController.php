<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NotificationChannels\Telegram\Telegram;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }

    public function offers(Request $request, Telegram $telegram)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'content' => 'required|string'
        ]);

        $message = view('telegram.offers', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'content' => $request->input('content')
        ])->render();

        $telegram->sendMessage([
            'chat_id' => config('services.telegram-bot-api.main_group_id'),
            'text' => $message,
        ]);
        return redirect()->route('about');
    }
}
