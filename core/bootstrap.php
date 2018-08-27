<?php

require 'vendor/autoload.php';

use Core\Application;
use Core\Database\Connection;
use Core\Database\QueryBuilder;

Application::bind('config', require 'config/config.php');

Application::bind('database', new QueryBuilder(
    Connection::make(Application::get('config')['database'])
));
