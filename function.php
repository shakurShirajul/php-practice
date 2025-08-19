<?php
function dd($value)
{
    // dump and die
    echo "
    <pre>";
    var_dump($value);
    echo "</pre>";
    die();
}



function urlIs($value)
{
    return $_SERVER["REQUEST_URI"] === $value;
}


function authorize($condition, $status = 404)
{
    if (!$condition) {
        abort($status);
    }
}
