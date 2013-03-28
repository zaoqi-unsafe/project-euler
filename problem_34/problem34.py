#
# Project Euler
#
# Power digit sum
# Problem 34
# 
# 145 is a curious number, as 1! + 4! + 5! = 1 + 24 + 125 = 145
#
# Find the sum of all numbers which are equal to the sum of the factorial of their digits.
#
# Note: as !1 = 1 and !2 = 2 are not sums they are not included.


def factorial(n):
    if n == 0 or n == 1: 
        return 1
    else:
        return n*factorial(n-1)

def check_curious(n):
    s = 0
    while n > 0:
        s += factorial(int(n%10))
        n = n/10
    return s  

def curious():
    c = 0
    for i in range(3,100000):
        if check_curious(i) == i:
           print i
           c += i 
    return c

print curious()
