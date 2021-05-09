<div class="product-details">
		<img id="tray-photo" src="<?php echo $product_page['image']; ?>" alt="tray" width="200">
		<h2 id="relate-heading"><?php echo $product_page['name']; ?> </h2>
	</div>

	<div>
			<h3 id="relate-heading3"><?php echo $product_page['description']; ?></h3>
			<h3 id="related-things">OTHER ITEMS YOU MAY LIKE</h3>
			<div id="relate-section">
				<div class="box-3">
					<div class="card" style="width: 15rem;">
						<img id="related-1" src="<?php echo $related_items['related-item-1-image']; ?>" class="card-img-top" alt="related-1" 	width="200">
						  <div class="card-body">
							    <h5 class="card-title">
							    	<?php echo $related_items['related-item-1-name']; ?>
							   	</h5>
							    <p class="card-text">₹80</p>
							    <a href="product-page.php?id=<?php echo $related_items['related-item-1-id']; ?>" class="btn btn-primary">View Product</a>
						  </div>
					</div>
				</div>	
				<div class="box-3">
					<div class="card" style="width: 15rem;">
						<img id="related-2" src="<?php echo $related_items['related-item-2-image']; ?>" class="card-img-top" alt="related-2" width="200">
						  <div class="card-body">
							    <h5 class="card-title"><?php echo $related_items['related-item-2-name']; ?></h5>
							    <p class="card-text">₹80</p>
							    <a href="product-page.php?id=<?php echo $related_items['related-item-2-id']; ?>" class="btn btn-primary">View Product</a>
						  </div>
					</div>
				</div>
				<div class="box-3">
					<div class="card" style="width: 15rem;">
						<img id="related-3" src="<?php echo $related_items['related-item-3-image']; ?>" class="card-img-top" alt="related-3" 	width="200">
						  <div class="card-body">
							    <h5 class="card-title"><?php echo $related_items['related-item-3-name']; ?></h5>
							    <p class="card-text">₹80</p>
							    <a href="product-page.php?id=<?php echo $related_items['related-item-3-id']; ?>" class="btn btn-primary">View Product</a>
						  </div>
					</div>
				</div>	
			</div>
		</div>
