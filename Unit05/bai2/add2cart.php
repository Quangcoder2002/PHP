<?php
session_start();
//session_destroy();
if (isset($_SESSION['products'])) {
$products = $_SESSION['products'];
}

$key = $_GET['id'];
if (isset($_SESSION['cart'][$key]) && $_SESSION['products'][$key]['soLuong'] > $_SESSION['cart'][$key]['soLuong']) {
  $_SESSION['cart'][$key]['soLuong'] += 1;

}else {
  $product = $_SESSION['products'][$key];
  $product['soLuong'] = 1;
  $_SESSION['cart'][$key] = $product;
}
echo "<pre>";
print_r($_SESSION['cart']);
echo "</pre>";

header('Location: cart.php');
 ?>
