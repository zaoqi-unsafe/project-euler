<?php
/**
 * Project Euler
 *
 * Factorial digit sum
 * Problem 20
 * 
 * n! means n x (n - 1) x ... x 3 x 2 x 1
 * For example, 10! = 10 x 9 x 8 x 7 x 6 x 5 x 4 x 3 x 2 x 1 = 3628800,
 * 
 * and the sum of the digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.
 *
 * Find the sum of the digits in the number 100!
 * 
 * Reference: http://php.net/manual/en/function.bcmul.php
 *
 **/

 function factorial_recursive( $n ){

     if($n == 0) return 1;

        else return $n * factorial_recursive($n-1);
 } 

function factorial_iterative( $n ) {
         $p = 1;
         for($i=$n;$i>=1;$i--) {
             $p *= $i;
         }  
    return $p;
}

function factorial_bcmul( $n ) {
         $p = 1;
         for($i=$n;$i>=1;$i--) {
             $p = bcmul($p,$i);  
         } 
    return $p;
}

 function sum( $n ) {

      $c = 0;
      $s = 0;

      while($n) {
         $s = $s + $n%10;
         $n = $n/10;
      } 
   return $s;
 }

 function sum_bcmul( $str ) {

      $arr = str_split( $str );
      $len = count($arr);
      $s = 0;

      for($i=0;$i<$len;$i++) {
          $s += $arr[$i];
      } 
      /* OR
         foreach(str_split($str) as $number) {
                 $s += $number;
         } 
       */
       
    return $s; 
 }

echo "Recursive: ", factorial_recursive(100);
echo"<br/>";
echo "Iterative: ", factorial_iterative(100);
echo"<br/>";
echo "Iterative: ", factorial_bcmul(100);
echo"<br/>";
echo 'Result: ', sum_bcmul(factorial_bcmul(100));
?>




