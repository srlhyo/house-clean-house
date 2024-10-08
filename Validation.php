<?php

class Validation
{
    public static function str($value, $min = 1, $max = INF)
    {
        return isset($value) && (strlen(trim($value)) >= $min && strlen(trim($value)) <= $max) ;
    }
}