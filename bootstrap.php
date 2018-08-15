<?php

require 'functions.php';

require 'database/QueryBuilder.php';

require 'database/Connection.php';

return new QueryBuilder(Connection::make());
