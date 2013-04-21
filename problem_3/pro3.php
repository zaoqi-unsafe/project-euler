<?php
/** 
   Project Euler

   Largest prime factor

   Problem 3

   The prime factors of 13195 are 5, 7, 13, and 29.

   What is the largest prime factor of the number 600851475143 ? 
*/

$start = microtime(true);

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


//solution 2
function largest($n) {

     $p = 2;

     $output = array();

     while($p*$p <= $n) {

           if( fmod($n, $p) == 0 ) {

               $output[] = $p;

               $n = $n / $p;  

           } else {

               $p++; 
           }
     } 
     
	if ($n != 1) {

           $output[] = $n;
      }

   return $output;
}

echo largest_factor(13195);

echo"<pre>";
print_r(largest(600851475143));
echo"</pre>";

printf("Time spent: %.5f", microtime(true) - $start);
?>
