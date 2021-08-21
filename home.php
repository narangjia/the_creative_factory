<?php
require 'header.php';
require 'products-datasource.php';
?>

	<div id="box-section">
		<?php for ($count = 0; $count < count($products); $count++) { ?>
			<div class="box">
				<div class="card" style="width: 15rem;">
					<img id="diya-multiple" src="<?php echo $products[$count]['image'];?>" class="card-img-top" width="200">
					<div class="card-body">
						<h5 class="card-title"><?php echo $products[$count]['name'];?></h5>
						<p class="card-text">₹<?php echo $products[$count]['price'];?></p>
						<a href="product-detail-page.php?id=<?php echo $products[$count]['id'];?>" class="btn btn-primary">View Product</a>
					</div>
				</div>
			</div>	
		<?php } ?>
	</div>
	<?php require 'footer.php';
	?>
</body>
</html>