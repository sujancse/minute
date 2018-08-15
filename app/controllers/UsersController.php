<?php

namespace App\Controllers;

use Core\App;

/**
 * Users controller.
 */
class UsersController
{
    public function index()
    {
        $users = App::get('database')->getAll('users');

        return view('index', compact('users'));
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
        ]);

        return redirect('users');
    }
}
