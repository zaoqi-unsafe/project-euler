<?php

/**
 * Project Euler
 * 
 * Problem 21
 *
 * Let d(n) be defined as the sum of proper divisors of n (numbers less than n which divide evenly into n).
 * If d(a) = b and d(b) = a, where a ? b, then a and b are an amicable pair and each of a and b are called amicable numbers.
 * 
 * For example, the proper divisors of 220 are 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 and 110; therefore d(220) = 284. The proper divisors of 
 * 284 are 1, 2, 4, 71 and 142; so d(284) = 220
 *
 * Evaluate the sum of all the amicable numbers under 10000.
 *
 **/

 function getDivisors( $n ) {
    $arr = array();

    for($i=1;$i<$n;$i++) {
        if( $n % $i == 0) {
            array_push($arr, $i);  
        }  
    }
    $s = 0;
    for($j=0;$j<count($arr);$j++) {
        $s = $s + $arr[$j];
    }
   return $s;
 }

 function amicable() {

      $s = 0; 

      for($i=1;$i<10000;$i++) {

          $s1 = getDivisors($i);
          $s2 = getDivisors($s1);

          if($i==$s2 && $i != $s1) {
             echo"$i, $s1<br/>\n";
             $s = $s + $i;
          }
      }

   return $s;
 }

echo "Result = ", amicable(); 
?>