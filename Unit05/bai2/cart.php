<?php
session_start();
if (isset($_SESSION['cart'])) {
    $products_in_cart = $_SESSION['cart'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <h1>DANH SÁCH SẢN PHẨM TRONG GIỎ:</h1>
    <a href="product_list.php">Xem thêm</a>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá bán</th>
      <th scope="col">Thành tiền</th>
      <th scope="col">Link ảnh sản phẩm</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <?php $sum = 0; ?>
    <?php foreach ( $products_in_cart as $key => $product ):
        $sum += $product['giaBan']*$product['soLuong'];
    ?>
    <tr>
      <td><?= $product['maSP']; ?></td>
      <td><?=  $product['tenSP']; ?></td>
      <td>
        <a href="add2cart.php?id=<?= $key ?>" class="btn btn-primary">thêm</a>
        <?= $product['soLuong']; ?>
        <a href="delete2_cart.php?id=<?= $key ?>" class="btn btn-primary">giảm</a>
      </td>
      <td><?= number_format($product['giaBan']); ?></td>
      <td><?= number_format($product['giaBan']*$product['soLuong']); ?></td>
      <td><img src="<?= $product['images']; ?>" alt="" width="200px" height="90px"></td>
      <td> <a href="delete_cart.php?id=<?= $key ?>" class="btn btn-primary">Xóa vào giỏ</a> </td>
    </tr>
  <?php endforeach ?>
    <tr>
      <td>Tổng công:</td>
      <td><?php echo number_format($sum);  ?></td>
    </tr>

  </tbody>
</table>
  </body>
</html>
