<?php

$query = require 'bootstrap.php';

$todos = $query->getAll('todos');

require 'index.view.php';
