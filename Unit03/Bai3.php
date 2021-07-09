<?php
$chuoi = "do Manh      quang";
echo "Chuỗi ban đầu: ".$chuoi;


$chuoi = ucwords($chuoi);
$data = explode(' ', $chuoi);
foreach ($data as $key => $value) {
  if ($value == null) {
    unset($data[$key]);
  }
}
echo "<br>Chuẩn hóa: ";
echo implode(' ', $data);
 ?>
