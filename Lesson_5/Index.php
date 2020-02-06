<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$user = 'user1';
$pass = '123';
$db = 'gbphp';
$link = new mysqli('localhost', $user, $pass, $db) or die("connection lost");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Домашнее задание 5</title>
    </head>
    <body>
        <h1>Кликни на картинку</h1>
        <?php
        $res = mysqli_query($link, "SELECT img_small, id FROM gallery ORDER BY count DESC");
        while ($row = mysqli_fetch_assoc($res)) {
            $img_small = $row['img_small'];
            $id = $row['id'];
            echo "<a href='open.php?id=$id' target='_blanck'><img src=$img_small></a>";
        }
         ?>
    </body>
</html>
