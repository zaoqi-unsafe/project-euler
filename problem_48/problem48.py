def solve():
    return sum(map(lambda x: x ** x, range(1, 1000))) % 10 ** 10

if __name__ == '__main__':

   print solve()