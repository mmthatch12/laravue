<?php

// fetch a configuration
$app = [];

$app['config'] = require 'config.php';



// form a database connection
require 'core/database/Connection.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/QueryBuilder.php';

// instatiate an instace of querybuilder and pass in pdo
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);