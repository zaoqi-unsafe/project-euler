# Project Euler
# Largest prime factor
# Problem 3
# The prime factors of 13195 are 5, 7, 13, and 29.
# What is the largest prime factor of the number 600851475143 ? 

#solution 1
def smallest_factor(n):
    i = 2
    while i < n:
        if 0 == n % i:
           return i
        i = i + 1
    return n

def largest_prime_factor(n):

    m = n
    l = 1
  
    while m != 1:
          if m <= 2:
             return m
          else:
             j = smallest_factor(m)
             m = m / j
             l = j
    return l

#solution 2
def largestPrimeFactor( n ):

    i, factors = 2, []
    while i*i <= n:
          if 0 == n%i:
             factors.append( i )
             n = n / i 
          else:
             i = i + 1    

    if n!= 1: factors.append(n) 

    return factors[ len( factors ) - 1 ]

#solution 1
print "Solution 1 -> ", largest_prime_factor( 600851475143 )

#solution 2
print "Solution 2 -> ", largestPrimeFactor( 600851475143 )

