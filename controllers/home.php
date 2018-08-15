<?php

$todos = App::get('database')->getAll('todos');

$users = App::get('database')->getAll('users');

require 'views/index.view.php';
