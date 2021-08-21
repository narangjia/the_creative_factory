<?php
$name="Jia";
$bank_balance=100;
$meeting=false;
$vaibhav_smart=false;
$vacation_dates=[25, 26, 27]; //normal array of integers
$shopping_list=[ //normal array of strings
	'milk',
	'butter',
	'coffee'
];
print_r($shopping_list);
foreach ($shopping_list as $key => $shopping_item) {
	echo $shopping_item;
	echo "<br>";
	echo $key;
	echo "<br>";
}
$my_profile=[ // associative array
	'name'=> 'Jia',
	'age'=> 12,
	'gender'=> 'female',
	'smartness'=> 100
];
foreach ($my_profile as $attribute_name => $attribute_value) {
	echo $attribute_name;
	echo "<br>";
	echo $attribute_value;
	echo "<br>";
}
$vacation_dates_for_months=[ // 2D array - normal array of normal arrays
	[25, 26, 27],
	[1, 2, 3],
	[10, 11, 12]
];


$shopping_list_for_weekdays=[ // 2D array - associative array of normal arrays
	'monday'=>['milk', 'coffee', 'butter'],
	'tuesday'=>['cookie', 'chocolate', 'honey'],
	'wednesday'=>['sugar', 'flour', 'vanilla-extract']
];
foreach ($shopping_list_for_weekdays as $weekday => $shopping_list_for_weekday) {
	echo $weekday;
	echo "<br>";
	foreach ($shopping_list_for_weekday as $key => $shopping_item) {
		echo $shopping_item;
		echo "<br>";
	}
	echo "<br>";

}


$profiles=[ //2D array - normal array of associative arrays
	['name'=> 'Jia', 'age'=> 12, 'gender'=> 'female'],
	['name'=> 'Shivangi', 'age'=> 11, 'gender'=> 'female'],
	['name'=> 'Prateek', 'age'=> 43, 'gender'=> 'male']
];
foreach ($profiles as $information => $profile) {
	echo $information;
	echo "<br>";
	foreach ($profile as $key => $info) {
	echo $info;
	echo "<br>";
	echo $key;
	echo "<br>";
	}
}
$redecorating_for_house_rooms=[ // 2D array - associative array of associative arrays
	'room1'=>['table'=> 'blue', 'mirror'=>'white', 'bed'=>'golden'],
	'room2'=>['table'=> 'white', 'mirror'=>'silver', 'bed'=>'black'],
	'room3'=>['table'=> 'black', 'mirror'=>'golden', 'bed'=>'blue']
];
$compiled_products=[
	'product_1'=>[
		'id' => 1,
		'name' =>"Resin tray with peach, golden and white base <br> Rs.650",
		'image' => "images/tray-new.jpg",
		'description' => "This is a single piece tray exclusively designed for  special ocassions anywhere.
				<br>
			and it is a very partyish."],
	'product_2'=>[
			'id' => 2 ,
			'name' =>"Resin popsocket with white, golden,<br> black marbel affect <br> Rs.80.",
			'image' => "images/popsocket-new.jpg",
			'description' =>  "This is a single popsocket with a marble design on it with colours white, golden and black.
					<br>
				and it is specially designed for wearing on your phone with traditional wear."
				],
	'product_3'=>[
			'id' => 3 ,
			'name' => "Coasters and ringplatter combo.<br>Rs.500",
			'image' => "images/coasters-and-ringplatter-new.jpg",
			'description' =>  "This is a combo of four coasters<br>and a ringplatter which is a very unique/useful combo with which you<br>can have and indian traditional look to your house.
				<br>
			and they are full of uniqueness."
				],
	'product_4'=>[
		'id' => 4 ,
		'name' => "Peacock shaped diya with multicolour taracotta.<br>Rs.150",
		'image' => "images/diya-peacock.jpg",
		'description' =>  "This is a single diya with 5 small spaces of diya and one big 
				<br>
			diya space in the centre."
				],
	'product_5'=>[
		'id' => 5 ,
		'name' => "Colourful diya with beatiful pop up art.<br>Rs.100",
		'image' => "images/diya-colourful.jpg",
		'description' =>  "This one single/unique piece which is a big diya 
				<br>
			and it is meant to be as the main diya in any pooja."
			],
	'product_6'=>[
		'id' => 6 ,
		'name' => "Set of 8 basic diyas",
		'image' => "images/diya-multiple.jpg",
		'description' =>  "these are 8 basic diyas with beautiful carving on it 
				<br>
			and they all are in different colours."
			]
];

[	[ //4D array - level-2 
		[ //level-3
			['milk', 'coffee', 'butter'],//level-3
			['cookie', 'chocolate', 'honey'],
			['sugar', 'flour', 'vanilla-extract']
		],
		[ 
			['milk', 'coffee', 'butter'],//level-3
			['cookie', 'chocolate', 'honey'],
			['sugar', 'flour', 'vanilla-extract']
		]
	]
];
for ($number= 1; $number < 11 ; $number++) { 
 	echo $number;
 	echo "<br>";
 }
 for ($number= 1; $number < 11 ; $number++) { 
 	$new_number= $number * 2;
 	echo $new_number;
 	echo "<br>";
 }
 for ($number= 1; $number < 11 ; $number++) { 
 	$new_number= $number * 5;
 	echo $new_number;
 	echo "<br>";
 }
echo "list of square numbers <br>";
for ($count = 1; $count < 16; $count++)
{ 
 	$squared = $count * $count;
    echo "$count squared is $squared <br>";

}
echo "list of cube numbers <br>";
for ($count = 1; $count < 16; $count++)
{ 
 	$cubed = $count * $count * $count; 
 	print("$count cubed is $cubed \n");
 	echo "<br>";
}
echo "list of even numbers <br>";
for ($number=1; $number < 51; $number++) { 
 	$new_number= $number * 2;
 	echo $new_number;
 	echo "<br>";
}
echo "list of odd numbers <br>";
for ($number=1; $number < 51; $number++) { 
 	$new_number= $number * 2 - 1;
 	echo $new_number;
 	echo "<br>";
}
echo "list of even numbers 2 <br>";
for ($number=1; $number < 100 ; $number++) { 
	$number = $number + 1;
	echo $number;
 	echo "<br>";

}
echo "list of odd numbers 2 <br>";
for ($number= 0; $number < 100 ; $number++) { 
	$number = $number + 1;
	echo $number;
 	echo "<br>";

}
echo "list of  negative square numbers <br>";
for ($count = -16; $count < 0; $count++)
{ 
 	$squared = $count * $count;
    echo "$count squared is $squared <br>";

}
echo "list of negative cube numbers <br>";
for ($count = -16; $count < 0; $count++)
{ 
 	$cubed = $count * $count * $count; 
 	print("$count cubed is $cubed \n");
 	echo "<br>";
}

 ?>
