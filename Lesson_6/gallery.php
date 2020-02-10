<?php
include('db/engine/db.php');
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Домашнее задание 6</title>
    </head>
    <body>
        <h1>Кликни на картинку</h1>
        <?php
        $res = mysqli_query($link, "SELECT img_small, id FROM gallery ORDER BY count DESC");
        $comm = mysqli_query($link, "SELECT * FROM comment");
        while ($row = mysqli_fetch_assoc($res) AND $rowComment = mysqli_fetch_assoc($comm)) {
            $img_small = $row['img_small'];
            $id = $row['id'];
            $image_id = $rowComment['image_id'];
            if ($id == $image_id ) {
                echo "<a href='open.php?id=$id' target='_blanck'><img src=$img_small></a><br><p>Автор: {$rowComment['user_name']}</p><p>Текст комментария: {$rowComment['text']}</p>";
            }
        }
         ?>
    </body>
</html>
