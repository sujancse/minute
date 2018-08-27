<?php

namespace App\Http\Controllers;

use Core\Application;

/**
 * Users controller.
 */
class UsersController
{
    public function index()
    {
        $users = Application::get('database')->getAll('users');

        return view('index', compact('users'));
    }

    public function store()
    {
        Application::get('database')->insert('users', [
            'name' => $_POST['name'],
        ]);

        return redirect('users');
    }
}
