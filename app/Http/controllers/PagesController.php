<?php

namespace App\Http\Controllers;

/**
 * Pages controller.
 */
class PagesController
{
    public function __construct()
    {
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}
