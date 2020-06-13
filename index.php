<?php

require __DIR__ ."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(PATH);

$router->namespace("App\Controllers");

$router->group("/");

$router->get("/","SiteController:home");

$router->dispatch();