<?php

class Test
{
    public static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    function __destruct()
    {
        self::$count--;
    }
}