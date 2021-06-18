<?php
  $return="Fizz";
  $return1="Buzz";
  for ($i=1; $i <=100 ; $i++) {
    if($i % 5 == 0 && $i % 3 ==0){
      echo "$return"."$return1";
    }else if($i % 5 == 0){
      echo "$return1";
    }else if($i % 3 == 0){
        echo "$return";
    }else {
      echo "$i";
    }
    echo "<br>";
  }

 ?>
