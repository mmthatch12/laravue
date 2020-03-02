<?php

// entrypoint loads a bootstrap file
require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());

