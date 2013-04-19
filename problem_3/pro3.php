<?php
/** 
   Project Euler

   Largest prime factor

   Problem 3

   The prime factors of 13195 are 5, 7, 13, and 29.

   What is the largest prime factor of the number 600851475143 ? 
*/

function largestFactorPrime( $n ) {

         $i = 2;

         $out = "";

         $largest = 2;

         $fm = 0;

         do {

            $fm = 0;

            while( ($n % $i) == 0 ) {

                 $fm++;

                 $n = intval($n / $i); 
            }

           if($fm) $out .= $i . "^". $fm . "*";

           $largest = $i;

           $i++;

         } while($n != 1) ;

   return array("factors" => $out, "largest" => ($i-1)); 
}

function factores($n) {

    $p = 2;
$factores = array();

while ($p * $p <= $n) {
if (fmod($n, $p) == 0) {
$factores[] = $p;
$n = $n / $p;
} else {
$p++;
}
}

if ($n != 1) {
$factores[] = $n;
}

return $factores;
}
//$out = largestFactorPrime( 600851475143 );

//echo $out["factors"];
echo"<pre>";
print_r( factores(1001) );
echo"</pre>";
?>
