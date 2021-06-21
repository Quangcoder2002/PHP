<?php
$n=0;
if (isset ( $_POST ['n'] )) {
    $n = $_POST ['n'];
}
function Sum($n){
  $s=0;
  for ($i=1; $i <=$n ; $i++) {
    $s+= (float)(1/$i);
  }
  return $s;
}
?>
<form action="#" method="post">
  <p>s = 1 + 1/2 + 1/3 +... + 1/n</p>
 <table>
  <tr>
   <td>Nhập số nguyên:</td>
   <td><input type="text" name="n" value="<?=$n?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Tính"></td>
  </tr>
 </table>
</form>
<?php
if (filter_var ( $n, FILTER_VALIDATE_INT )) {
    echo ("S =" . Sum($n));
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>
