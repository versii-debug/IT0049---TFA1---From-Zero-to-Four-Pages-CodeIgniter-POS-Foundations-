<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function landing(): string
    {
        return view('pages/landing', [
            'title' => 'Dashboard',
            'activePage' => 'home',
        ]);
    }

    public function about(): string
    {
        return view('pages/about', [
            'title' => 'About',
            'activePage' => 'about',
        ]);
    }
}
