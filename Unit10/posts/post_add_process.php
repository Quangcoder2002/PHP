<?php
  require_once('connection.php');
  include_once('upload.php');
   if (isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==true && isset($_POST)) {
     $data = $_POST;
     $data['avatar'] = $_SESSION['upload_status'][1];
     $sql = "INSERT INTO posts (title, short_content, thumbnail, category_id) VALUES ('".$data['name']."','".$data['description']."','".$data['avatar']."','".$data['category']."')";
     var_dump($sql);
     $status = $conn->query($sql);
    if ($status == true) {
      header('Location: posts.php');
    }else {
      header('Location: post_add.php');
    }
  }else {
    header('Location: post_add.php');
  }
?>
