<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home(): string
    {
        return view('pages/main/home', $this->pageData(
            'POS Dashboard',
            'css/main/home.css'
        ));
    }

    public function about(): string
    {
        return view('pages/main/about', $this->pageData(
            'About Pink POS',
            'css/main/about.css'
        ));
    }

    private function pageData(string $title, string $stylesheet): array
    {
        return [
            'title' => $title,
            'stylesheet' => $stylesheet,
        ];
    }
}
