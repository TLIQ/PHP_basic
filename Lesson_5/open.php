<?php
$user = 'user1';
$pass = '123';
$db = 'gbphp';
$link = new mysqli('localhost', $user, $pass, $db) or die("connection lost");

  $id = isset($_GET['id']) ? (int)$_GET['id'] :0;
  $res = mysqli_query($link, "SELCT imd_big FROM gallery where id='$id'");
  $row = mysqli_fetch_assoc($res);
  if (!empty($row)){
    header('Location: index.php');
    exit;
  }
  mysqli_query($link, "UPDATE gallery SET count = count + 1 WHERE gallery.id =$id");
  // $src = $row['img_big'];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Картинка</title>
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
     ?>
   </body>
 </html>
