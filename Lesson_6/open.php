<?php
include('db/engine/db.php');


  $id = isset($_GET['id']) ? (int)$_GET['id'] :0;
  $comment = $_GET['comment'];
  $res = mysqli_query($link, "SELECT imd_big FROM gallery where id='$id'");
  $row = mysqli_fetch_assoc($res);
  if (!empty($row)){
    header('Location: index.php');
    exit;
  }
  mysqli_query($link, "UPDATE gallery SET count = count + 1 WHERE gallery.id =$id");

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Картинка</title>
       <style>
           img{
               width: 800px;
           }
       </style>
   </head>
   <body>
     <h1>Картинка</h1>
     <?php
     $res = mysqli_query($link, "SELECT img_big, id FROM gallery where id= $id");
         while ($row = mysqli_fetch_assoc($res)) {
             $img_big = $row['img_big'];
             $id = $row['id'];
             echo "<img src=$img_big>";
         }

    if (!empty($_GET['name']) AND !empty($_GET['text']) AND !empty($_GET['id']) ) {
     $id = $_GET['id'];
     $name = $_GET['name'];
     $text = $_GET['text'];

     $res = mysqli_query($link, "INSERT INTO comment (user_name, text, image_id) 
    VALUES('$name','$text', '$id')");
    }

     echo "
    <form action='' method='get'>
    <input name='id' value='$id' type='hidden'/>
    <input name='addcom' value='view' type='hidden'/>
    <b>Пользователь:</b> <input name='name' type='text' required/><br>
    <b>Текст:</b><br><textarea name='text' id='' cols='30' rows='10' required></textarea><br><br>
    <input value='Отправить' type='submit'/>
    </form>
    ";

     ?>
     <a href="gallery.php">Посмотреть все фото</a>
   </body>
 </html>
