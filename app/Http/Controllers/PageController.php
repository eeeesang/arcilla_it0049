<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'title' => 'Dashboard',
            'customerCount' => 5,
            'userCount' => 5,
        ]);
    }

    public function about(): View
    {
        return view('about', ['title' => 'About Pink POS']);
    }
}
