<?php

require "connection.php";

$routes = [
    "/" => "login.php",
    "/register" => "register.php",
    "/login" => "login.php",
    "/profile" => "profile.php",
    "/feed" => "feed.php",
];

$path = parse_url($_SERVER["REQUEST_URI"])['path'];

if (array_key_exists($path, $routes)) {
    require($routes["$path"]);
    die();
} else {
    require "404.view.php";
    die();
}
