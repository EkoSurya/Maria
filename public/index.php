<?php

chdir(dirname(__DIR__));

require 'core/vendor/autoload.php';

$app = new \Slim\Slim();

/**************************************************/

// RUN!
$app->run();