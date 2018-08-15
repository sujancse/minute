<?php

$todos = $app['database']->getAll('todos');

$users = $app['database']->getAll('users');

require 'views/index.view.php';
