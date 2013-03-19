<?php
/**
 * Problme 9
 *
 * Special Pythagorean triplet
 * 
 * A Pythagorean triplet is a set of three natural numbers, a < b < c, for which, a^2 + b^2 = c^2
 * 
 * For example: 3^2 + 4^2 = 9 + 16 = 25 = 5^2
 * 
 * Three exists exactly one Pythagorean triplet for which a + b + c = 1000
 * Find the product abc
 **/



    function p9() {

        $a = 0;
        $b = 0;
        $c = 0;

        $m = 2;

        while(($a+$b+$c) != 1000) {
            
           for($n=1;$n<$m;$n++) {
 
              $g = pow($m,2);
              $h = 2*pow($n,2);
              $i = 2*$m*$n;

              $a = $g + $i;
              $b = $h + $i;
              $c = $g + $h + $i;
              
              if( ($a+$b+$c) == 1000 ) {

                  echo"($a, $b, $c)";

                  echo"\n<br/>Results: " . ($a*$b*$c);
 
                  break;
              }
           }

           $m++;
        } 

    }

    echo p9()

?>