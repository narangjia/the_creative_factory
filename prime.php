<?php
	echo "list of remainders <br>";
	$outer_loop_count = 0;
	$inner_loop_count = 0;
	for ($number= 2; $number < 50; $number++) {
		$outer_loop_count++;
		if ($number % 2 == 0) { 
				$prime = false; 
			}
		if ($number % 2 == 0){
  			 continue; 
  		}
		$prime = true;
		for ($divider=2; $divider < $number / 2; $divider++) {
		 	$inner_loop_count++;
		 	if ($number % $divider == 0) { 
				$prime = false; 
				break;
			}
		}
	 	if ($prime == true) {
	 		echo "number is $number it is a prime number";
	 	}
	 	else {
	 		echo "number is $number it is NOT a prime number";
	 	}
	 	echo "<br>";
	}
	echo " value of outer loop is $outer_loop_count";
	echo " value of inner loop is $inner_loop_count";
?>