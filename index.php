<?php

require 'functions.php';

$pdo = connectToDb();

$todos = getAll($pdo);

require 'index.view.php';
