<?php

//ДЗ читать ООП, задания через форму и функции



include 'functions.php'; //2)require -> if mistake, then Fatal error
//require_once -> if you printed it twice, it doesn't see the second require_once

echo requestGet('name');

function test() {
    echo 'Test';
}

echo 'Hello' . test(); //result -> TestHello

function formIsValid() {
    $res = requestPost('username') !== '' && requestPost('email') !== '' &&
        requestPost('message') !== '';

    return $res;
}

$msg = requestGet('msg');

if ($_POST) {
    if (formIsValid()) {
        echo 'valid';
        // do smth
        header('Location: /?msg=valid'); //header of the server answer
        die();
    } else {
        echo 'invalid';
    }
}



?>


<!doctype html>



<body>
    <h1>Contact form</h1>
    <b><?=$msg?></b>

    <form method="get">
        User name: <input type="text" name="username" value="<?=requestPost('username')?>"> <br>
        Email: <input type="email" value="<?=requestPost('email')?>"> <br>
        Message: <textarea name=""><?=requestPost('username')?></textarea> <br>
        <button>Sent</button>

    </form>
    <hr>

    <?php print_r($_GET) ?>

</body>
