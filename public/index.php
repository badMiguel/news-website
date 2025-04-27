<?php

declare(strict_types=1);

define("CONTROLLER", __DIR__ . "/../lib/controller/");
define("MODEL", __DIR__ . "/../lib/model/");
define("VIEWS", __DIR__ . "/../lib/views/");
define("CSS", __DIR__ . "/../lib/css/");

$path = "/";
if (isset($_SERVER["PATH_INFO"])) {
    $path = $_SERVER["PATH_INFO"];
}

require_once CONTROLLER . "router.php";
require_once CONTROLLER . "main.php";
require_once MODEL . "db.php";

$model = new Model();
$app = new Application($model->db);
$router = new Router($app);
$router->dispatch($path);
