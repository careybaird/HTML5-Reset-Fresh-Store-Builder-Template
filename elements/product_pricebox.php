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
				displayProductPrice($product, $offer);
			?>
		</span>
	</div>

	<div class="product-availability-detail">
		<?php
			displayProductAvailability($product, $offer);
		?>
	</div>
	
	<?php

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
