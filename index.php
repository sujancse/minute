<?php
/**
 * Core bootstrap application.
 */
require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());
