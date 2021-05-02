<?php
function print_row ($data){
	echo $data;
	echo "<br>";
	echo "<br>";
	echo "<br>";
}

function AgeValuation ($age){
	if ($age > 25){
		echo "You are just perfect";
	}
	else {
	echo "Oops,you are to young ";
	}
}

function subtract ($value1, $value2){
	echo "subtracted";
	echo $value1 - $value2;
	echo "<br>";
	echo "<br>";
}

function divide ($value1, $value2){
	if ($value2==0) {
		echo "Not Possible";
		echo "<br>";
		echo "<br>";
	}
	else{
	echo "divided";
	echo "<br>";
	echo $value1 / $value2;
	echo "<br>";
	echo "<br>";
		}
}

function double ($value){
	echo "doubled";
	echo $value * 2;
	echo "<br>";
	echo "<br>";
}

function half ($value){
	echo "half";
	echo $value / 2;
	echo "<br>";
	echo "<br>";
}

function add_all ($value1, $value2, $value3, $value4){
 	echo "add_all";
 	echo $value1 + $value2 + $value3 + $value4;
 	echo "<br>";
	echo "<br>";
 }

 function divisibility_5 ($value){
 if ($value % 5 == 0){
	echo "It is divisible";
	echo "<br>";
	echo "<br>";
                }
else {
	echo "It is not divisible";
	echo "<br>";
	echo "<br>";
     }
 }

     function divisibility_17 ($value){
 if ($value % 17 == 0){
	echo "It is divisible";
	echo "<br>";
	echo "<br>";
                }
else {
	echo "It is not divisible";
	echo "<br>";
	echo "<br>";
     }
 }

     function divisibility_3($value){
 if ($value % 3 == 0){
	echo "It is divisible";
	echo "<br>";
	echo "<br>";
                }
else {
	echo "It is not divisible";
	echo "<br>";
	echo "<br>";
     }
 }

 function add ($value1, $value2) {
	echo $value1 + $value2;
	echo "<br>";
	echo "<br>";
	return $value1 + $value2;
}

function add_4_values ($value1, $value2, $value3, $value4){
	// echo $value1 + $value2 + $value3 + $value4;
	echo add($value1, $value2) + add($value3, $value4);

	echo "<br>";
	echo "<br>";
}

function  square_perimetre ($value){
 	echo "square_perimetre";
 	echo $value * 4;
 	echo "<br>";
	echo "<br>";
 }



