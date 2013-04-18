/** 
   Project Euler

   Largest prime factor

   Problem 3

   The prime factors of 13195 are 5, 7, 13, and 29.

   What is the largest prime factor of the number 600851475143 ? 
*/

//solution 1
function factorsPrimes( n ) {

         var i = 2,

         out = "",

         f,

         largest = 2;
         
         do {

            f = 0

            while(n % i == 0) {

                 f++;

                 n = parseInt(n/i)
            }
               
            if(f) out += i + "^" + f + " * "

            largest = i

            i++;
 
         }while(!(n==1));

    return [out, largest];
}

//solution 2
function isPrime( n ) {

     var prime = true, 
         i;

     if(n == 1) return false

     for(i = 2; i <= Math.floor(Math.sqrt( n )); i++) {

             if( n % i == 0) {

                 prime = false

                 break 
             }
     }

   return prime
}

function isFactorPrime( n, i ) {

     return ( n % i == 0 )
}

function largestFactorPrime( n ) {

         var i, 
             largest = 2; 

         for(i = 2; i < n; i++ ) {

             if(isPrime( i ) && isFactorPrime( n, i )) {

                         largest = i
             }
         }

     return largest;
}