<?php

namespace App;

session_start();

require_once 'config' . DIRECTORY_SEPARATOR . 'config.php';

require dirname(__DIR__, 1) . '/vendor/autoload.php';

//require_once 'core/Route.php';
core\route::start();

