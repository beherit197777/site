<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeginnerController extends Controller
{
    public function index()
    {
        return view('beginner.index');
    }

    /**
     * Конкретный раздел для новичка (1–7)
     */
    public function show($section)
    {
        // можно передать номер раздела в шаблон
        return view('beginner.show', compact('section'));
    }
}
