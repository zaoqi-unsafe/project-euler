#
# Project Euler
#
# Amicable numbers
# Problem 21
#
# Let d(n) be defined as the sum of proper divisors of n (numbers less than n which divide evenly into n).
# if d(a) = b and d(b) = a, where a!=b, then a and b are an amicable pair and each of a and b are called amicable numbers.
#
# For example, the proper divisors of 220 are 1,2,4,5,10,11,20,22,44,55 and 110; therefore d(220) = 284. The proper divisors of
# 284 are 1,2,4,71 and 142; so d(284) = 220;
# 
# Evaluate the sum of all the amicable numbers under 10000.

def getDivisors(n):
    return [x for x in range(1,n/2+1) if n%x == 0]

def amicable():
    s = 0
    for i in range(1,10000):
        s1 = sum(getDivisors(i))
        s2 = sum(getDivisors(s1))
        if i == s2 and i != s1:
           print i,s1 
           s = s + i
    return s
 
print "S=", amicable()

