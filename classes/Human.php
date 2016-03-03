<?php

class Human
{
    const TEST = "Some constant";

    public static $test;

    public $hairColor;
    protected $name;
    protected $age;
    protected $gender;


    public function className()
    {
//        echo __CLASS__;
        echo get_class(); // it's better
    }

    function __get($propertyName)
    {
        echo "You tried to access {$propertyName}";
    }

    function __set($name, $value)
    {
        echo "You tries to assign {$value} to {$name}";
    }

    function __call($methodName, $arguments)
    {
        echo "You tried to call {$methodName}() with args";
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
    }

    function __sleep()
    {
        // TODO: Implement __sleep() method.
    }


    function __clone() //Ctrl+i to call list of magic methods
    {
        echo 'Cloned';
    }

    public function anotherTest()
    {
        echo 1;
    }

    public function testFunc()
    {
        self::$test = 1;
    }


    /**
     * Human constructor.
     *
     */

    public function __construct()
    {
        echo 'Human created';
    }
}

?>