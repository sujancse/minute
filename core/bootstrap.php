<?php

/**
 * Application array.
 *
 * @var array
 */
require 'vendor/autoload.php';
$app = [];

require 'core/functions.php';

$app['config'] = require 'config.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
