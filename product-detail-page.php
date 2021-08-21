<!DOCTYPE html> 
	<link rel="stylesheet" type="text/css" href="product-detail-page.css">

	<?php 
		require 'header.php';
		require 'products-datasource.php';
		$id = $_GET['id'];
		$id = $id - 1;
	?>

<div class="product-details">
		<img id="tray-photo" src="<?php echo $products[$id]['image']; ?>" alt="tray" width="200">
		<h2 id="relate-heading"><?php echo $products[$id]['name']; ?> </h2>
	</div>

	<div>
			<h3 id="relate-heading3"><?php echo $products[$id]['description']; ?></h3>
			<h3 id="related-things">OTHER ITEMS YOU MAY LIKE</h3>
			<div id="relate-section">
				<div class="box-3">
					<div class="card" style="width: 15rem;">
						<img id="related-1" src="<?php echo $products[$products[$id]['related-products'][0]- 1]['image']; ?>" class="card-img-top" alt="related-1" 	width="200">
						  <div class="card-body">
							    <h5 class="card-title">
							    	<?php echo $products[$products[$id]['related-products'][0]- 1]['name'] ?>
							   	</h5>
							    <p class="card-text">₹<?php echo $products[$products[$id]['related-products'][0]- 1]['price']; ?></p>
							    <a href="product-detail-page.php?id=<?php echo $products[$products[$id]['related-products'][0]- 1]['id']; ?>" class="btn btn-primary">View Product</a>
						  </div>
					</div>
				</div>

				<div class="box-3">
					<div class="card" style="width: 15rem;">
						<img id="related-1" src="<?php echo $products[$products[$id]['related-products'][1]- 1]['image']; ?>" class="card-img-top" alt="related-1" 	width="200">
						  <div class="card-body">
							    <h5 class="card-title">
							    	<?php echo $products[$products[$id]['related-products'][1]- 1]['name'] ?>
							   	</h5>
							    <p class="card-text">₹<?php echo $products[$products[$id]['related-products'][1]- 1]['price']; ?></p>
							    <a href="product-detail-page.php?id=<?php echo $products[$products[$id]['related-products'][1]- 1]['id']; ?>" class="btn btn-primary">View Product</a>
						  </div>
					</div>
				</div>

				<div class="box-3">
					<div class="card" style="width: 15rem;">
						<img id="related-1" src="<?php echo $products[$products[$id]['related-products'][2]- 1]['image']; ?>" class="card-img-top" alt="related-1" 	width="200">
						  <div class="card-body">
							    <h5 class="card-title">
							    	<?php echo $products[$products[$id]['related-products'][2]- 1]['name'] ?>
							   	</h5>
							    <p class="card-text">₹<?php echo $products[$products[$id]['related-products'][2]- 1]['price']; ?></p>
							    <a href="product-detail-page.php?id=<?php echo $products[$products[$id]['related-products'][2]- 1]['id']; ?>" class="btn btn-primary">View Product</a>
						  </div>
					</div>
				</div>	
				
					
			</div>
		</div>
		<?php 
			require 'footer.php';
		?>
