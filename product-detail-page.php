<div class="product-details">
		<img id="tray-photo" src="<?php echo $product_page['image']; ?>" alt="tray" width="200">
		<h2 id="relate-heading"><?php echo $product_page['name']; ?> </h2>
	</div>

	<div>
			<h3 id="relate-heading3"><?php echo $product_page['description']; ?></h3>
			<h3 id="related-things">OTHER ITEMS YOU MAY LIKE</h3>
			<div id="relate-section">
				<div class="box-3">
					<a href ="product-page.php?id=<?php echo $related_items['related-item-1-id']; ?>">
						<img id="related-1" src="<?php echo $related_items['related-item-1-image']; ?>" alt="related-1" width="200">
						<h3>
							<?php echo $related_items['related-item-1-name']; ?>
						</h3>
					</a>
				</div>	
				<div class="box-3">
					<a href ="product-page.php?id=<?php echo $related_items['related-item-2-id']; ?>">
						<img id="related-2" src="<?php echo $related_items['related-item-2-image']; ?>" alt="related-2" width="200">
						<h3>
							<?php echo $related_items['related-item-2-name']; ?>
						</h3>
					</a>
				</div>
				<div class="box-3">
					<a href ="product-page.php?id=<?php echo $related_items['related-item-3-id']; ?>">
						<img id="related-3" src="<?php echo $related_items['related-item-3-image']; ?>" alt="related-3" width="200">
						<h3>
							<?php echo $related_items['related-item-3-name']; ?>
						</h3>
					</a>
				</div>	
			</div>
		</div>
