<?php

class Mathematics {

	public function subtract ($value1, $value2){
		echo "subtracted";
		echo $value1 - $value2;
		echo "<br>";
		echo "<br>";
	}
	public	function divide ($value1, $value2){
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

	public function double ($value){
		echo "doubled";
		echo $value * 2;
		echo "<br>";
		echo "<br>";
	}
	public function half ($value){
	echo "half";
	echo $value / 2;
	echo "<br>";
	echo "<br>";
	}
	public function add_all ($value1, $value2, $value3, $value4){
	 	echo "add_all";
	 	echo $value1 + $value2 + $value3 + $value4;
	 	echo "<br>";
		echo "<br>";
	 }

	public function divisibility_5 ($value){
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
	public function divisibility_17 ($value){
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
	public function divisibility_3($value){
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
	public function add ($value1, $value2) {
		echo $value1 + $value2;
		echo "<br>";
		echo "<br>";
		return $value1 + $value2;
	}
	public function  square_perimetre ($value){
		echo "square_perimetre";
		echo $value * 4;
		echo "<br>";
		echo "<br>";
		 }

}


//create object
$math = new Mathematics;

$math->subtract(10, 4);
$math->divide(20,5);
$math->double(6);
$math->half(10);
$math->add_all(10, 20, 30, 40);
$math->divisibility_5(65);
$math->divisibility_17(90);
$math->divisibility_3(27);
$math->add(10, 20);
$math->square_perimetre(88);















?>