<?php
  require_once "connect_data.php";
   $data = $_POST;
   var_dump($_POST);
  $sql = "INSERT INTO categories (cate_name, description) VALUES ('".$data['name']."','".$data['description']."')";
  echo "<pre>";
  print_r($sql);
  echo "</pre>";
$status = $conn->query($sql);
  session_start();
if($status == true){
  $_SESSION['products'] = '
   toast({
        title: "Thành công!",
        message: "Tạo tin tức thành công.",
        type: "success",
        duration: 5000
      });';
    header("Location: https://laptrinhphp.zent/laptrinhphp.zent/Unit10/index.php");

}else {
  $_SESSION['products'] = '
   toast({
        title: "Thất bại!",
        message: "Tạo tin tức thất bại.",
        type: "error",
        duration: 5000
      });';
       header("Location: https://laptrinhphp.zent/laptrinhphp.zent/Unit10/index.php");
};
 ?>
