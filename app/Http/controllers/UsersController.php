<?php

namespace App\Http\Controllers;

use Core\Database\ORM;
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
        $users = ORM::getAll('users');

        return view('index', compact('users'));
    }

    public function store(Request $request)
    {
        ORM::create('users', [
            'name' => $request->name,
        ]);

        return redirect('users');
    }
}
