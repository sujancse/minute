<?php

namespace App\Http\Controllers;

/**
 * Home controller.
 */
class HomeController
{
    public function index()
    {
        return view('welcome');
    }
}
