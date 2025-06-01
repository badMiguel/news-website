<?php

declare(strict_types=1);

define("CONTROLLER", __DIR__ . "/../lib/controller/");
define("MODEL", __DIR__ . "/../lib/model/");
define("VIEWS", __DIR__ . "/../lib/views/");
define("IMAGE_DIR", __DIR__ . "/../public/images/");

define("USER", 0);
define("JOURNALIST", 1);
define("EDITOR", 2);

// $path = "/";
// if (isset($_SERVER["PATH_INFO"])) {
//     $path = $_SERVER["PATH_INFO"];
// }

$requestUri = $_SERVER["REQUEST_URI"];
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

session_start();
$_SESSION["path"] = $path;
session_write_close();

require_once CONTROLLER . "router.php";
require_once CONTROLLER . "main.php";
require_once CONTROLLER . "paginator.php";
require_once CONTROLLER . "csrf.php";
require_once MODEL . "db.php";

$model = new Model();
$csrf = new CSRF();
$paginator = new Paginator($model);
$app = new Application($model, $paginator, $csrf);
$router = new Router($app);
$router->dispatch($path);
