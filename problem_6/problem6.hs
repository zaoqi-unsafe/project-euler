square n = n * n 

problem x = a - b
    where
     numbers = [1..x]
     a = square $ sum numbers
     b = sum $ map square numbers
                      
main = do
       print $ problem 100

