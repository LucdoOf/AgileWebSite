<?php

use AgileWeb\Controllers\Router;

define('APPLICATION_PATH', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR));

require APPLICATION_PATH . "/vendor/autoload.php";
require APPLICATION_PATH . "/src/helpers.php";

require_once "conf.inc.php";
if (IS_DEV) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

require_once APPLICATION_PATH . "/src/Controllers/Router.php";

$router = new Router();
$router->routeReq();
