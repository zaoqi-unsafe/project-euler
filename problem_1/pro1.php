<?php
/** 
   Project Euler

   Multiple of 3 or 5

   Problem 1

   If we list all the natural numbers below 10 that are multiplier of 3 or 5, we get 3,5,6, and 9. The sum of these multiples is 23.

   Find the sum of all the multiples of 3 or 5 below 1000.
*/

//iterative version
function multiples( $n ) {

       $s = 0;

       for($i = 1; $i < $n; $i++) {

           if(0 == ($i % 3) || (0 == ($i % 5))) {

              $s += $i;
           }
       }

   return $s;
}

//recursive version
function multiples2($n, $r) {

   if($n<=0) {

      return $r;

   } else {

      if(($n % 3) == 0 or ($n % 5) == 0) {

          $r = $r + $n;
      }

      return multiples2($n - 1, $r);
   }
}

echo "S = " . multiples2(999,0);
?>