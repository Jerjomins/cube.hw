<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TriviaController extends Controller
{
    public function index(): View
    {
        return view('games/trivia/index', [

        ]);
    }
}
