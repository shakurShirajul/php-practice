<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'core/' . 'function.php';

// dd(__DIR__);

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require  base_path("{$class}.php");
});

// require_once base_path("Database.php");
require base_path('core/router.php');
