<!DOCTYPE html> 
	<link rel="stylesheet" type="text/css" href="product-page.css">

<?php 
	require 'header.php';
	$id = $_GET['id'];

	$product_1=[
		'id' => 1,
		'name' =>"Resin tray with peach, golden and white base <br> Rs.650",
		'image' => "images/tray-new.jpg",
		'description' => "This is a single piece tray exclusively designed for  special ocassions anywhere.
				<br>
			and it is a very partyish."

	];
	
		$product_2=[
		'id' => 2 ,
		'name' =>"Resin popsocket with white, golden,<br> black marbel affect <br> Rs.80.",
		'image' => "images/popsocket-new.jpg",
		'description' =>  "This is a single popsocket with a marble design on it with colours white, golden and black.
				<br>
			and it is specially designed for wearing on your phone with traditional wear."
			
			];
	
	$product_3=[
		'id' => 3 ,
		'name' => "Coasters and ringplatter combo.<br>Rs.500",
		'image' => "images/coasters-and-ringplatter-new.jpg",
		'description' =>  "This is a combo of four coasters<br>and a ringplatter which is a very unique/useful combo with which you<br>can have and indian traditional look to your house.
				<br>
			and they are full of uniqueness."
			];
	$product_4=[
		'id' => 4 ,
		'name' => "Peacock shaped diya with multicolour taracotta.<br>Rs.150",
		'image' => "images/diya-peacock.jpg",
		'description' =>  "This is a single diya with 5 small spaces of diya and one big 
				<br>
			diya space in the centre."
			];
	$product_5=[
		'id' => 5 ,
		'name' => "Colourful diya with beatiful pop up art.<br>Rs.100",
		'image' => "images/diya-colourful.jpg",
		'description' =>  "This one single/unique piece which is a big diya 
				<br>
			and it is meant to be as the main diya in any pooja."
			];
	$product_6=[
		'id' => 6 ,
		'name' => "Set of 8 basic diyas",
		'image' => "images/diya-multiple.jpg",
		'description' =>  "these are 8 basic diyas with beautiful carving on it 
				<br>
			and they all are in different colours."
			];
	$product_page = [];
	$related_items = [];
	if ($id == 1) {
		$product_page = [
			'name' =>  $product_1['name'],
			'image' => $product_1['image'],
			'description' => $product_1['description']
		];
		$related_items = [
			'related-item-1-name' => $product_2['name'],
			'related-item-1-image' => $product_2['image'],
			'related-item-1-id'    => $product_2['id'],
			'related-item-2-id'    => $product_5['id'],
			'related-item-2-name' => $product_5['name'],
			'related-item-2-image' => $product_5['image'],
			'related-item-3-id'    => $product_3['id'],
			'related-item-3-name' => $product_3['name'],
			'related-item-3-image' => $product_3['image'],
		];
	}

	if ($id == 2) {
		$product_page = [
			'name' =>  $product_2['name'],
			'image' => $product_2['image'],
			'description' => $product_2['description'],
		];
			$related_items = [
			'related-item-1-name' => $product_1['name'],
			'related-item-1-image' => $product_1['image'],
			'related-item-1-id'    => $product_1['id'],
			'related-item-2-id'    => $product_5['id'],
			'related-item-2-name' => $product_5['name'],
			'related-item-2-image' => $product_5['image'],
			'related-item-3-id'    => $product_3['id'],
			'related-item-3-name' => $product_3['name'],
			'related-item-3-image' => $product_3['image']
		];
	}
	if ($id == 3) {
		$product_page = [
			'name' =>  $product_3['name'],
			'image' => $product_3['image'],
			'description' => $product_3['description'],
		];
		$related_items = [
			'related-item-1-name' => $product_1['name'],
			'related-item-1-image' => $product_1['image'],
			'related-item-1-id'    => $product_1['id'],
			'related-item-2-id'    => $product_5['id'],
			'related-item-2-name' =>$product_5['name'],
			'related-item-2-image' => $product_5['image'],
			'related-item-3-id'    => $product_2['id'],
			'related-item-3-name' => $product_2['name'],
			'related-item-3-image' => $product_2['image']
		];
	}
	if ($id == 4) {
		$product_page = [
			'name' =>  $product_4['name'],
			'image' => $product_4['image'],
			'description' => $product_4['description']
		];
		$related_items = [
			'related-item-1-name' => $product_1['name'],
			'related-item-1-image' => $product_1['image'],
			'related-item-1-id'    => $product_1['id'],
			'related-item-2-id'    => $product_4['id'],
			'related-item-2-name' => $product_4['name'],
			'related-item-2-image' => $product_4['image'],
			'related-item-3-id'    => $product_3['id'],
			'related-item-3-name' => $product_3['name'],
			'related-item-3-image' => $product_3['image']
		];
	}

	if ($id == 5) {
			$product_page = [
			'name' =>  $product_5['name'],
			'image' => $product_5['image'],
			'description' => $product_5['description'],
		];
		$related_items = [
			'related-item-1-name' =>$product_1['name'],
			'related-item-1-image' => $product_1['image'],
			'related-item-1-id'    => $product_1['id'],
			'related-item-2-id'    => $product_6['id'],
			'related-item-2-name' => $product_6['name'],
			'related-item-2-image' => $product_6['image'],
			'related-item-3-id'    => $product_3['id'],
			'related-item-3-name' => $product_3['name'],
			'related-item-3-image' => $product_3['image']
		];
	}
	if ($id == 6) {
		$product_page = [
			'name' =>  $product_6['name'],
			'image' => $product_6['image'],
			'description' => $product_6['description'],
		];
		$related_items = [
			'related-item-1-name' => $product_1['name'],
			'related-item-1-image' => $product_1['image'],
			'related-item-1-id'    => $product_1['id'],
			'related-item-2-id'    => $product_5['id'],
			'related-item-2-name' => $product_5['name'],
			'related-item-2-image' => $product_5['image'],
			'related-item-3-id'    => $product_3['id'],
			'related-item-3-name' => $product_3['name'],
			'related-item-3-image' => $product_3['image']
		];
	}
	require 'product-detail-page.php';
	require 'footer.php';
?>

