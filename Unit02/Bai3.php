<?php
  function Kt($value='')
{
  for ($i=2; $i < sqrt($value); $i++) {
      if ($value%$i==0) {
        return false;
      }
  }
  return true;
}
echo "Các số nguyên tố nhỏ hơn 100:<br>";
for ($i=2; $i <100 ; $i++) {
  if (Kt($i)) {
    echo "\t$i";
  }
}
?>
