<?php
require_once('connection.php');
 $id = isset($_GET['id']) ? $_GET['id']:0;
  $sql = "SELECT * from posts WHERE id = ". $id;
  $post = $conn->query($sql)->fetch_assoc();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Nội dung: <?= $post['title']; ?></h1>
    <h1>Mô tả: <?= $post['short_content']; ?></h1>
  </body>
</html>
