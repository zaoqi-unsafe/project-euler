/*

Project Euler

Problem 10

The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

Find the sum of all the primes below two million.

Compile: gcc problem10 -0 p -std=c99

*/

#include <stdio.h>
#include <math.h>
#define BELLOW 2000000

int isPrime(int n) {

    int i;
      
    if(n <= 1) return 0;
    if(n == 2) return 1;
    if(n == 3) return 1;
    if(n == 5) return 1;
    if(n % 2 == 0) return 0;

    for(i = 3; i <= sqrt(n); i+=2) {

        if(n % i == 0) return 0;                     
    }

    return 1;
}

long long findSum() {

    long long i;

    long long s = 0; 

    for(i = 2; i < BELLOW; i++) {

        if( isPrime(i) ) {

            printf("%d ", i);
            s += i;

        } else {

            ;
        }
    }

    return s;
}


int main() {
 
    printf("Sum is %lld", findSum());

    return(0);
}

