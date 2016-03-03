<?php


//to make a link on "a" value: $&a

function test()
{
    global $a;
    $a++;
}



settype();

$a = 1;

//test($a);//value of a
test();

echo $a;

//superglobal variables

/*
 * $_POST
 * $_GET
 * $_REQUEST
 * $_SERVER -> keys: REMOTE_ADDR - !, REQUEST_URI
 * $_SESSION
 * $_COOKIE
 * $_FILES
 *
 */

if (isset($_GET['name'])) {
    echo $_GET['name'];
}


function requestGet($key) {
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }

    return null;
}

function requestPost($key) {
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

requestGet('name'); //instead of $_GET['name'], it's more safe

//Alt+Insert on func -> makes annotation














//function myFunc($s)
//{
//    echo "This is input param: {$s} <br>";
//
//}
//
//function debug($value, $debugFunction = 'print_r')
//{
//    echo '<pre>';
//    print_r($value); //it can be: $debugFunction($value);
//    echo '<pre>';
//
//
//    //die(); - finish interpreter work
//}
//
//function sum($a, $b, array $test)
//{
//    $c = $a + $b;
//    print_r($test);
//    return $c;
//}
//
//
//echo sum(1, 2, [12, 4, 666, 4095]);
////debug(['test' => [22, 3, 22, 42]], 'var_dump');
