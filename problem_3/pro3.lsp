;   Project Euler
;   Largest prime factor
;   Problem 3
;   The prime factors of 13195 are 5, 7, 13, and 29.
;   What is the largest prime factor of the number 600851475143 ?


;solution 1
(defun smallest-factor (n)
       
  
)

https://github.com/marxist/project-euler/blob/master/003.lisp
https://github.com/brandonhsiao/lisp-pe/blob/master/problem3.lisp





;solution 2
(defun smallest_factor (n)

       (labels ((rec (i) 

                   (if (or (>= i n)(zerop (REM n i) ) ) 
                       i
                       (rec (1+ i) ) )
               )) 

          (rec 2)          
       ) 
)

(defun largest_factor (n)

       (labels ((rec (m l)
                      (cond ((= m 1) l)
                            ((<= m 2) m)
                            (t (setf fc (smallest_factor m)) (rec (/ m fc) fc ))
                      )                    
               ))
 
          (rec n 1) 
       ) 
)
