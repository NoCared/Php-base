<?php
// $uriPath = parse_url($_SERVER['REQUEST_URI'])['path'];
$uriPath = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);


// $routes = match($uriPath) {
//     '/' => 'controllers/index.php',
//     '/articles' => 'controllers/articles.php',
//     '/article' => 'controllers/article.php',
//     '/contact' => 'controllers/contact.php',
//     default => 'views/404.php'
// };

//require($routes);




function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes))
    {
        require $routes[$uri];
    }
    else
    {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/$code.php";
    die();
}


$routes = require 'config/routes.php';

routeToController($uriPath,$routes);