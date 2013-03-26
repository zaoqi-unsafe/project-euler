 #
 # Project Euler
 #
 # Power digit sum
 # Problem 16
 # 
 # 2^15 = 32768 and the sum of its digits is 3+2+7+6+8=26
 #
 # What is the sum of the digits of the number 2^1000?
 #

from math import pow
 
def sum_digits(a,b):
    n = str(int(pow(a,b)))
    s = 0
    for i in n:
        s = s + int(i) 
    return s

def sum_digits2(a,b):
    n = int(pow(a,b))
    s = 0
    while n > 0:
        s += int(n % 10)
        n = int(n / 10)
    return s

print "Sum of the digits 2^1000 = ", sum_digits(2,1000)
print "Sum of the digits 2^1000 = ", sum_digits2(2,1000)

