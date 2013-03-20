<?php

    function fib($n) {

         $a = 1;
         $b = 2;

         $s = Array();

         while($a < $n) { 

               $c = $a + $b;
               if($a%2 == 0) array_push($s,$a);
               $a = $b;
               $b = $c;
         } 

         $r = 0; 

         for($i = 0; $i < count($s); $i++) $r += intval($s[$i]);

       return $r; 
    }

    echo(fib(4000000));
?>