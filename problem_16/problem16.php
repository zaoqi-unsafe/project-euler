<?php
/**
 * Project Euler
 *
 * Power digit sum
 * Problem 16
 * 
 * 2^15 = 32768 and the sum of its digits is 3+2+7+6+8=26
 *
 * What is the sum of the digits of the number 2^1000?
 */
 function pow2($a,$b) {

    $p = 1;

    for($i=1;$i<=$b;$i++) {
        $p = bcmul($p, $a); 
    }

   return $p;
 }

 function sum_digits($a,$n) {

      $n = pow2($a,$n);

      $arr = str_split($n); 
      $s = 0; 

      for($i=0;$i<count($arr);$i++) {

          $s += intval($arr[$i]); 
      }

    return $s;
 }

echo "Sum=",sum_digits(2,1000);
?>