<?php

use Core\Response;

function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function isUrl($value) {
    return parse_url($_SERVER['REQUEST_URI'])['path'] == $value;
}

function abort($code = 404) {
    http_response_code($code);
        
    require base_path("views/{$code}.php");
    
    die();
}

function authorize($condition)
{
    if(! $condition) {
        abort(Response::FORBIDDEN);
    }
}

function base_path($path) {
    return BASE_PATH . $path;
}

function view($path, $attributes = []) {
    extract($attributes);
    // dd($attributes);
    require base_path('views/' . $path);
}