<?php

declare(strict_types=1);

define("CONTROLLER", __DIR__ . "/../lib/controller/");
define("MODEL", __DIR__ . "/../lib/model/");
define("VIEWS", __DIR__ . "/../lib/views/");

$path = "/";
if (isset($_SERVER["PATH_INFO"])) {
    $path = $_SERVER["PATH_INFO"];
}

require_once CONTROLLER . "router.php";
require_once CONTROLLER . "main.php";
require_once CONTROLLER . "paginator.php";
require_once MODEL . "db.php";

$model = new Model();
$paginator = new Paginator();
$app = new Application($model, $paginator);
$router = new Router($app);
$router->dispatch($path);
