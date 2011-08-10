<div id="product-price-box">

	<div class="product-price-detail">
		<?php
			if ($offer['isreduced'])
			{
				?>
				<span class="product-price-original product-price"><?= $offer['originalpriceformatted'] ?></span>
				<?php
			}
		?>
		<span class="product-price">
		<?php
			if ($offer && $offer['price'] > 0)
				echo $offer['priceformatted'];
			else if ($offer && $offer['price'] == 0)
				echo 'Price shown when you add to cart';
			else if ($product['price'] > 0 && $product['expired'] == 0)
				echo $product['priceformatted'];
			else
				echo 'Price not available at this time';
		?>
		</span>
	</div>

	<?php
		if ($offer && $offer['price'] == 0)
			echo '<p><small><strong>Why is the price not displayed here?</strong><br />The price is lower than the manufacturers "minimum advertised price" and we are legally not allowed to display it until it is requested. To request the price, simply click add to shopping cart below.</small></p>';	

		if ($offer['isreduced'])
			echo "<div class=\"product-savings\">Save {$offer['percentagesaved']}%!</div>";
		
		if ($offer['ispreorder'])
			echo '<div id="product-preorder">Available to Pre-order now!<br />Your card will not be charged until the item is dispatched. You will pay the lowest price this item has been available for in the Pre-order period - guaranteed.</div>';
		
		if ($offer['availabilitytext'])
			echo "<div class=\"product-availability\">{$offer['availabilitytext']}</div>";

		if ($offer && $offer['supersavershipping'])
				if ($offer['priceraw'] > ($amazon->supersavershippinglimit - 10))
					echo '<div class="product-shipping">This item ships for FREE with Super Saver Shipping.</div>';
				else
					echo '<div class="product-shipping">This item ships for <strong>FREE</strong> with Super Saver Shipping, when the order total is greater than '. formatProductPrice($amazon->supersavershippinglimit).'</div>';
		else if ($product['expired'] == 0)
			echo '<div class="product-shipping">Shipping cost is calculated during checkout.</div>';

		if ($offer && $offer['quantity'] > 0 && $offer['quantity'] < 5)
				echo "<div class=\"product-lowstock\">Only {$offer['quantity']} left in stock - order now to avoid dissapointment.</div>";

		if (PRODUCT_HIDE_ADD_TO_CART == '0')
		{
			if ($offer)
			{
				?>
					<span class="product-availability">
						<span class="value-title" title="In stock">In Stock</span><br />
						<a href="<?= URL_SITE ?>basket/add/<?= $product['id'] ?>/<?= $offer['id'] ?>/" rel="nofollow">
							<?= ($offer['ispreorder'])? 'Preorder' : 'Add to basket'; ?>
						</a>
					</span>
				<?php
			}
			else if ($product['expired'])
			{
				?>
					<span class="product-availability">
						<span class="value-title" title="Out of Stock">Out of Stock</span><br /><br />
						<span class="product-outofstock">Discontinued</span> - Unfortunately this product has been discontinued and we will not be receiving any more stock. <a href="<?= URL_SITE ?>buy-amazon/<?= $product['id'] ?>/3/">Click here for alternative products</a>.
					</span>
				<?php
			}
			else
			{
				?>
					<span class="product-availability">
						<span class="value-title outofstock" title="Out of Stock">Out of Stock</span> - stock arriving soon
					</span>
				<?php
			}
		}
	
		if (PRODUCT_SHOW_AMAZON_LINK)
		{
			?>
				<br /><br />
				<a href="<?= URL_SITE ?>buy-amazon/<?= $product['id'] ?>/<?= $product['expired'] ? '3' : '2' ?>/" rel="nofollow" class="product-amazon-link">
					Buy at Amazon
				</a>
			<?php
		}
	?>
	<br class="clearall" />
</div>
