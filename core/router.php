<?php
$uri = parse_url($_SERVER['REQUEST_URI'])["path"];
$routes = require base_path('routes.php');

// dd($routes);
function routeToController($uri, $routes)
{
    // dd($uri);
    if (array_key_exists($uri, $routes)) {
        // dd($routes[$uri]);
        require $routes[$uri];
    } else {
        var_dump($uri);
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
}

routeToController($uri, $routes);
