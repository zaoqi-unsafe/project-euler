import Data.List

square n = n * n

divideBy n x = (x `mod` n) == 0

isPrime n | n <= 1 = False
          | n == 2 = True
          | n == 3 = True
          | even n = False
          | otherwise = 
            all(\p -> not $ divideBy p n) testingSlice

               where 
                   testingNumbers = iterate (+ 2) 3         
                   testingSlice = takeWhile(\p -> square p <= n) testingNumbers 

nextPrime n = 

    let Just m = find isPrime [n+1..]
    in m 

allPrimes = 

    iterate nextPrime 2

main = do

    print $ sum $ takeWhile(<2000000) allPrimes