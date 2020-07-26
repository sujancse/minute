<?php
/**
 * Core bootstrap application.
 */

require "core/error_exception.php";

require 'core/bootstrap.php';

use Core\Routing\Router;
use Core\Requests\Request;

$router = Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
