<?php
  require_once "connect_data.php";
   $data = $_POST;
   $id = $_GET['id'];
  $sql = "UPDATE categories SET  cate_name='".$data['name']."', description='".$data['description']."' WHERE id = $id";
$status = $conn->query($sql);
  session_start();
if($status == true){
  $_SESSION['products'] = '
   toast({
        title: "Thành công!",
        message: "Cập nhật thành công.",
        type: "success",
        duration: 5000
      });';
   header("Location: https://laptrinhphp.zent/laptrinhphp.zent/Unit10/index.php");

}else {
  $_SESSION['products'] = '
   toast({
        title: "Thất bại!",
        message: "Cập nhật thất bại.",
        type: "error",
        duration: 5000
      });';
  header("Location: https://laptrinhphp.zent/laptrinhphp.zent/Unit10/index.php");
};
 ?>
