<?php
require_once('connection.php');
 $id = isset($_GET['id']) ? $_GET['id']:0;
  $sql = "SELECT * from categories WHERE id = ". $id;
  $category = $conn->query($sql)->fetch_assoc();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Name: <?= $category['cate_name']; ?></h1>
    <h1>Description: <?= $category['description']; ?></h1>
  </body>
</html>
