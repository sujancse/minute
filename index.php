<?php
/**
 * Core bootstrap application.
 */
require 'core/bootstrap.php';

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
