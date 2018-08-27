<?php

namespace App\Http\Controllers;

use Core\Application;
use Core\Requests\Request;

/**
 * Users controller.
 */
class UsersController
{
    public function __construct()
    {
    }

    public function index()
    {
        $users = Application::get('database')->getAll('users');

        return view('index', compact('users'));
    }

    public function store(Request $request)
    {
        Application::get('database')->insert('users', [
            'name' => $request->name,
        ]);

        return redirect('users');
    }
}
