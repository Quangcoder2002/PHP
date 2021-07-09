<?php
session_start();
$profiles = $_SESSION['profiles'];

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Ngày tháng năm sinh</th>
      <th scope="col">Ngoại ngữ</th>
      <th scope="col">Quê quán</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ( $profiles as $key => $profile ) { ?>
    <tr>
      <th scope="row"><?php echo ($key+1); ?></th>
      <td><?= $profile['name']; ?></td>
      <td><?=  $profile['GioiTinh']; ?></td>
      <td><?= $profile['NamS']; ?></td>
      <td>
        <?php
          foreach ($profile['ngoaiNgu'] as $value) {
            echo " ".$value.",";
          }
         ?>
      </td>
      <td><?= $profile['que']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
  </body>
</html>
