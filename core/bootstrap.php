<?php

$app = [];

require 'core/functions.php';

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/QueryBuilder.php';
require 'core/database/Connection.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
