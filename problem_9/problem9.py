# Problem 9
#
# Special Pythagorean triplet
# 
# A Pythagorean triplet is a set of three natural numbers, a < b < c, for which, a^2 + b^2 = c^2
# 
# For example: 3^2 + 4^2 = 9 + 16 = 25 = 5^2
# 
# Three exists exactly one Pythagorean triplet for which a + b + c = 1000
# Find the product abc
#
#

def fn():

    m = 2
    a, b, c = 0, 0, 0
    
    while a+b+c != 1000:
        for n in range(2, m):


            g = int(pow(m,2))
            h = int(2*pow(n,2))
            i = 2*n*m
 
            a = g + i
            b = h + i
            c = g + h + i
              
            print n, a, b, c

            if a+b+c == 1000:
                print 'Last:' , a, b, c
                print 'Result:' , a*b*c
                return
        m +=1 
fn()