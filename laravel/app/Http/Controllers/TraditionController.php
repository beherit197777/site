<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraditionController extends Controller
{
    public function index()
    {
        return view('tradition.index');
    }
}
