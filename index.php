<?php
/**
 * Core bootstrap application.
 */
require 'core/bootstrap.php';

use Core\Routing\Router;
use Core\Requests\Request;

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
