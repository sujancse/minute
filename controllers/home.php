<?php

$todos = $app['database']->getAll('todos');

require 'views/index.view.php';
