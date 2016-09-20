/*

Project Euler

Problem 6

The sum of the squares of the first ten natural numbers is,
12 + 22 + ... + 102 = 385

The square of the sum of the first ten natural numbers is,
(1 + 2 + ... + 10)2 = 552 = 3025

Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 ? 385 = 2640.

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.

*/

#include <stdio.h>
#define MAXSIZE 100

int sum_of_first__squares_hundred() {

     int i, 
         sum = 0;

     for(i = 1; i <= MAXSIZE; ++i) {

         sum += i*i;
     }

     return sum; 
}

int square_of_sum_hundred() {

     int i, 
         sum = 0;

     for(i = 1; i <= MAXSIZE; ++i) {

         sum += i;
     }

     return sum*sum; 
}

int main() {

    int diff;

    diff = square_of_sum_hundred() - sum_of_first__squares_hundred();
 
    printf("%d", diff);
 
 return(0);
}