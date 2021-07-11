<?php
session_start();
$maSP = $_GET['id'];
if (isset($maSP)) {
  if ($_SESSION['cart'][$maSP]['soLuong']>1) {
    $_SESSION['cart'][$maSP]['soLuong']-=1;
  }elseif ($_SESSION['cart'][$maSP]['soLuong'] == 1) {
    unset($_SESSION['cart'][$maSP]);
  }
}
header('Location: cart.php');
 ?>
