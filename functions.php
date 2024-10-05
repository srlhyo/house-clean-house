<?php

function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function isUrl($value) {
    return parse_url($_SERVER['REQUEST_URI'])['path'] == $value;
}