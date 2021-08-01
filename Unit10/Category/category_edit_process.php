<?php
  require_once('connection.php');
  include_once('upload.php');
   if (isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==true && isset($_POST)) {
     $data = $_POST;
     $data['avatar'] = $_SESSION['upload_status'][1];
     $sql = "UPDATE categories SET cate_name ='".$data['name']."' ,description='".$data['description']."' ,cate_avatar='".$data['avatar']."' WHERE  id = ".$data['id'];
     var_dump($sql);
     $status = $conn->query($sql);
    if ($status == true) {
       header('Location: categories.php');
    }else {
      //header("Location: category_edit.php?id=".$data['id']);
    }
  }else {
    header("Location: category_edit.php?id=".$data['id']);
  }
?>
