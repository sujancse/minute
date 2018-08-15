<?php

/**
 * Pages controller.
 */
class PagesController
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}
