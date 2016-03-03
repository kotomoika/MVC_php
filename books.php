<?php
/**
 * Created by PhpStorm.
 * User: kat
 * Date: 2/23/16
 * Time: 7:02 PM
 */

//rename file -> Shift+F6


$books = array(
    array(
        'title' => 'Carrie',
        'author'=> 'King',
        'price' => 123.98
    ),

    array(
        'title' => 'Idiot',
        'author'=> 'Dostoyevski',
        'price' => 235.98
    ),

    array(
        'title' => 'Master&Margarita',
        'author'=> 'Bulghakov',
        'price' => 298.87
    ),

    array(
        'title' => 'Harry Potter',
        'author'=> 'Roling',
        'price' => 187.33
    ),
);

?>


<!doctype html>
<html lang='en'>
<head>
    </head>
<body>
    <table border="1" cellpadding="10">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
        </tr>

        <?php foreach ($books as $book) : ?>
            <tr>
                <td><?=$book['title']?></td>
                <td><?=$book['author']?></td>
                <td><?=$book['price']?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>
