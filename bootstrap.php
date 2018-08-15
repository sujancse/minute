<?php

require 'functions.php';

$config = require 'config.php';

require 'database/QueryBuilder.php';
require 'database/Connection.php';

return new QueryBuilder(Connection::make($config['database']));
