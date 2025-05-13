<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZoomController extends Controller
{
    /**
     * Перенаправление на прямую ссылку Zoom
     */
    public function join()
    {
        return redirect()->away('https://us02web.zoom.us/j/88474383951?pwd=U29oWFpkdDduczduTnAybENsRThBZz09#success');
    }

    /**
     * Страница-инструкция «Как подключиться в Zoom»
     */
    public function instructions()
    {
        return view('zoom.instructions');
    }
}
