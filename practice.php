<?php

$income = 250000;
if ($income >10000000){
	echo "Rich";
}
 else if ($income >= 1000000 ){
 	echo "Upper Middle Class";
 }
 else if ($income >= 100000 ){
 	echo "Middle Class";
 }
 else if ($income >= 10000 ){
 	echo "Lower Middle Class";
 }
 else {
 	echo "BPL";
 }
 echo "<br><br>";

 $day = "friday";
 
 if ($day == "monday"){
 	echo "Chole Bhature";
 }
 else if ($day == "tuesday"){
 	echo "Sandwich";
 }
 else if ($day == "wednesday"){
 	echo "Samosa";
 }
 else if ($day == "thursday"){
 	echo "Poha";
 }
 else if ($day == "friday"){
 	echo "Aloo Puri";
 }
  else if ($day == "saturday"){
 	echo "Bun Butter";
 }
 else if ($day == "sunday"){
 	echo "Trekking";
 }
 else {
 	echo "Invalid";
 }