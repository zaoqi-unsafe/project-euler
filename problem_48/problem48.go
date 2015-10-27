package main

import (
	"fmt"
	"math"
)

func main() {

	var answer float64

	for i := 1.0; i <= 1000; i++ {

		answer += math.Pow(i, i)
	}

	fmt.Println(math.Mod(answer,1000))
}