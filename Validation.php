<?php

class Validation
{
    public static function str($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max ;
    }           
}