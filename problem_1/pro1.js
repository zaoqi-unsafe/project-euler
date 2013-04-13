/** 
   Project Euler

   Multiple of 3 or 5

   Problem 1

   If we list all the natural numbers below 10 that are multiplier of 3 or 5, we get 3,5,6, and 9. The sum of these multiples is 23.

   Find the sum of all the multiples of 3 or 5 below 1000.
*/

function findSumOfMultiples(n) {

    var multiples = []

    for(var i=1; i< n; i++) {

        if( (0 == i % 3) || (0 == i % 5)) {

             multiples.push( i )
        }
    }

    return multiples.reduce(function(a,b){

           return a + b
    })  
}

console.log( findSumOfMultiples(1000) )
