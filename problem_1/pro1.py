# Project Euler
# 
# Multiple of 3 or 5
# 
# Problem 1
#
# If we list all the natural numbers below 10 that are multiplier of 3 or 5, we get 3,5,6, and 9. The sum of these multiples is 23.
# 
# Find the sum of all the multiples of 3 or 5 below 1000. 

def multiples(n):

    s = 0
    i = 1
    while i < n:
          if (0 == i % 3) or (0 == i % 5):
              s = s + i
          i = i + 1
    return s

def multiples2(n):

    return sum(filter(lambda x: x % 3 == 0 or x % 5 == 0, [i for i in range(1,n)]))

print multiples2(1000) 
