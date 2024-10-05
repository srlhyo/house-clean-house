<?php

function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function isUrl($value) {
    return $_SERVER['REQUEST_URI'] == $value;
}