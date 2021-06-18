<?php
$s=0;
for ($i=1; $i <=100 ; $i++) {
  $s+= (float)(1/$i);
}
echo "Tính tổng s = 1 + 1/2 + 1/3 +... + 1/100;<br>";
echo "S = ".$s;
?>
