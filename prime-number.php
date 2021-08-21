<?php
	$number = 1,2,3,4,5,6,7,8,9,10; 
	$prime = true;
	for ($divider=2; $divider < $number; $divider++) { 
		if ( $number % $divider == 0) {
			$prime = false;
		}
	}
	if ($prime == true) {
		echo "number is $number. it is a prime number";
	}
	else {
		echo "number is $number. it is NOT a prime number";
	}
?>