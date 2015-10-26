(defun series(x)
   (reduce '+ (loop for x from 1 to x collect (expt x x)))
)

(defun solution()
  (let (answer)
       (setf answer (series 1000))
       (mod answer (expt 10 10))
  )
)

(format t "~d" (solution))