<?php
/** 
   Project Euler

   Largest prime factor

   Problem 3

   The prime factors of 13195 are 5, 7, 13, and 29.

   What is the largest prime factor of the number 600851475143 ? 
*/

//solution 1
function smallest_factor($n) {

         $i = 2;

         while($i <= sqrt($n) ) { 

          if( 0 == $n % $i ){

             return $i;
          }

          $i++;

         }

         return $n;
}

function largest_factor($n) {

         $m = $n;

         $l = 1;

         while($m!=1) {

               $k = smallest_factor($m);  

               $m = intval( $m / $k );

               $l = $k;
         }

  return $l;
}

echo largest_factor(600851475143);

//solution 2

?>
