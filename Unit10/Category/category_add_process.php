<?php
  require_once('connection.php');
  include_once('upload.php');
   if (isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==true && isset($_POST)) {
     $data = $_POST;
     $data['avatar'] = $_SESSION['upload_status'][1];
     $sql = "INSERT INTO categories (cate_name, description, cate_avatar) VALUES ('".$data['name']."','".$data['description']."','".$data['avatar']."')";
     var_dump($sql );
     $status = $conn->query($sql);
    if ($status == true) {
      header('Location: categories.php');
     }else {
    header('Location: category_add.php');
    }
  }else {
    header('Location: category_add.php');
  }
?>
