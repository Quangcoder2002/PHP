
<?php

 session_start();
  $product = $_POST;

 $_SESSION['products'][] = $product;

echo "<pre>";
print_r( $_SESSION['products']);
echo "</pre>";
//session_destroy();
header('Location: bai2/product_list.php');

 ?>
