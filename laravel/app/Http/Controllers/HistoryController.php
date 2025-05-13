<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Страница «История Землян»
     */
    public function index()
    {
        return view('history.index');
    }
}
