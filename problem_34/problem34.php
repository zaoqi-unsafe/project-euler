<?php

/**
 * Project Euler
 *
 * Power digit sum
 * Problem 34
 *
 * 145 is a curious number, as 1! + 4! + 5! = 1 + 24 + 125 = 145
 *
 * Find the sum of all numbers which are equal to the sum of the factorial of their digits.
 *
 * Note: as !1 = 1 and !2 = 2 are not sums they are not included.
 */

 function factorial($n) {
          if($n == 0 || $n == 1) return 1;
             else return $n*factorial($n-1); 
 }

 function factorion($n) {
       $s = 0;

       while($n>0) {
          $s += factorial(intval($n % 10));
          $n = intval($n/10);
       }
     return $s;
 }

 function curious() {
     $s = 0;
     for($i = 3; $i <= 100000; $i++) {
         if(factorion($i) == $i) {
             echo$i."<br/>\n";
             $s += $i;
         }
     } 
   return $s;
 }

 echo "Sum of all numbers which are equal to the sum of the factorial of their digits = ", curious();
?>