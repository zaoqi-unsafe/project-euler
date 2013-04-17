/** 
   Project Euler

   Largest prime factor

   Problem 3

   The prime factors of 13195 are 5, 7, 13, and 29.

   What is the largest prime factor of the number 600851475143 ? 
*/

function factorsPrimes( n ) {

         var i = 2;

         var out = ""

         var f
         
         do {

            f = 0

            while(n % i == 0) {

                 f++;

                 n = parseInt(n/i)
            }                 
            if(f) out += i + "^" + f + " * "

            i++;

         }while(!(n==1));

    return out;
}

console.log(factorsPrimes(600851475143))
