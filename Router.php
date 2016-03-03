<?php

abstract class Router
{
    public static function redirect($uri)
    {
        header("Location: {$uri}");
        die;
    }
}