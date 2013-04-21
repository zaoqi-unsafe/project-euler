/** 
   Project Euler

   Largest prime factor

   Problem 3

   The prime factors of 13195 are 5, 7, 13, and 29.

   What is the largest prime factor of the number 600851475143 ? 
*/

//solution 1 rely on smallest prime factor
function smallest_factor(n) {

         i = 2

         while(i <= Math.sqrt(n) ) { 

          if( 0 == n%i ){

             return i
          }

          i++

         }

         return n
}

function largest_factor(n) {

         m = n

         l = 1

         while( m != 1 ) {

               k = smallest_factor(m)  

               m = m / k

               l = k              
         }

  return l
}

function largest_prime_factor(N) { 

         var i = 2, 

             factors = [],

             k = -1; 
    
         while((i*i) <= N) { 
       
               if(0 == N%i) { 
 
                  factors[ ++k ] = i 

                  N /= i 

               } else { 

                  i++ 
               } 
         } 

         if( N != 1) factors[ ++k ] = N 

   return factors[ factors.length - 1 ] 
}