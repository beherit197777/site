<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public function join()
    {
        return redirect()->away('https://t.me/your_telegram_group');
    }

    /**
     * Страница-инструкция «Как подключиться в Telegram»
     */
    public function instructions()
    {
        return view('telegram.instructions');
    }
}
