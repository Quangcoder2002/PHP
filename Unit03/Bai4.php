<?php
$mang = "12321";
function Palindrome($number){
    $temp = $number;
    $new = 0;
    while (floor($temp)) {
        $d = $temp % 10;
        $new = $new * 10 + $d;
        $temp = $temp/10;
    }
    if ($new == $number){
        echo $number." là chuối Palindrome";
    }
    else{
        echo $number." ko là chuối Palindrome";
    }
}
function Palindrome1($string){
    if (strrev($string) == $string){
        echo $string." là chuối Palindrome";
    }
    else{
          echo $string." ko là chuối Palindrome";
    }
}
if (is_integer($mang) == true) {
  Palindrome($mang);
}else {
  Palindrome1($mang);
}
?>
