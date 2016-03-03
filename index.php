<?php
//DZ form 1/03/16
//magic methods, complite them in Human.php, read doc-tion

//Позднее стат.связывание -> to override method in child put static:: instead of self::, because self returns us to basic class

//MVC

function __autoload($className)
{
    $file = "{$className}.php";
    require_once $file;
}


//Human::$test = 256;

//var_dump(Human::$test);

/*$t = new Test();
$t1 = new Test();
$t2 = new Test();

unset($t1);

var_dump(Test::$count);*/

/*echo Human::anotherTest();

$h = new Human();
$h->anotherTest();*/

//(new Rectangle())->printName();

/*
$figures = [
    new Triangle(),
    new Rectangle(),
    new Rectangle(),
    new Triangle(),
    new Rectangle(),
    new Circle(),
    new Triangle(),
    new Circle(),
    new Rectangle(),
    new Triangle(),
    new Circle(),
];

foreach ($figures as $figure) {
    $figure->printName();
    //echo '<br>'; // -> for '\n', only when server is OK
}*/

/*$h = (new Human());
/*$h1 = clone $h;

var_dump($h, $h1);*/
/*
echo $h->name; //!!!without $ here!
echo $h->qwertyt; //this will work for not existing properties or private/protected properties*/

/*echo $str = serialize($h); //???
$newObject = unserialize($str);
var_dump($h, $newObject);*/

/*$sh = new SuperHuman();*/
//
//echo __FILE__;
//echo __DIR__;

//(new Human())->className();

/*$h = new Human();
function test(Human $human)
{
    $human->anotherTest();
}

test($h);*/

require "layout.phtml";

$request = new Request();
$form = new ContactForm($request);
$msg = $request->get('msg');

if ($request->isPost) {
    if ($form->isValid()) {
        // smth
        /*header('Location: /&msg=OK');
        die;*/
        Router::redirect('/&msg=OK');

    }

    $msg = 'Fail';
}

