 #
 # Project Euler
 #
 # Factorial digit sum
 # Problem 20
 # 
 # n! means n x (n - 1) x ... x 3 x 2 x 1
 # For example, 10! = 10 x 9 x 8 x 7 x 6 x 5 x 4 x 3 x 2 x 1 = 3628800,
 # 
 # and the sum of the digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.
 #
 # Find the sum of the digits in the number 100!
 # 
 # Reference: http://php.net/manual/en/function.bcmul.php
 #
 #


def factorial(n):
    p = 1
    for i in range(1,n+1):
        p = p * i
    return p

print sum([int(i) for i in str(factorial(100))]) 

# OR
# from math import factorial
# print sum([int(x) for x in str(factorial(100))])


