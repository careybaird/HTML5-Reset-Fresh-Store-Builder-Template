<div class="product product-full">

	<?php
		if ($manufacturer['display'] && $manufacturerimage)
		{
			?>
				<div id="product-manufacturer">
					<a href="<?= URL_SITE.$manufacturer['pagename'] ?>/" rel="nofollow">
						<img src="<?= URL_SITE ?>i/?src=<?= RELATIVE_URL_IMAGES_MANUFACTURER.$manufacturerimage['filename'] ?>&w=250&h=80" alt="<?= $manufacturer['name'] ?>"  title="<?= $manufacturer['name'] ?>" />
					</a><br />
					<small class="brand"><?= $manufacturer['name'] ?></small>
				</div>
			<?php
		}
	?>

	<h2 class="page-title product-title"><?= $product['title'] ?></h2>
	<br class="clearall" />

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
				{
					echo $offer['priceformatted'];
				}
				else if ($offer && $offer['price'] == 0)
				{
					echo 'Price shown when you add to cart';
				}
				else if ($product['price'] > 0 && $product['expired'] == 0)
				{
					echo $product['priceformatted'];
				}
				else
				{
					echo 'Price not available at this time';
				}
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
						echo '<div class="product-shipping">This item ships for <strong>FREE</strong> with Super Saver Shipping, when the order total is greater than <?= formatProductPrice($amazon->supersavershippinglimit)</div>';
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

	</div>

	<div id="product-image-box">
		<a href="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $mainimage['id'] ?>_500.jpg" rel="lightbox[product]" title="<?= $product['title'] ?>">
			<img class="product-photo" src="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $mainimage['id'] ?>_250.jpg" alt="<?= $product['title'] ?>" />
		</a>
	
		<?php
			if (sizeof($images) > 0) 
			{
				echo '<span class="image-enlarge">Click images to enlarge</span>';
					foreach ($images as $image)
					{
						?>
							<a href="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $image['id'] ?>_500.jpg" rel="lightbox[product]" title="<?= $product['title'] ?>">
								<img src="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $image['id'] ?>_50.jpg" class="image-thumbnail" />
							</a>				
						<?php
					}
			}
		?>
	</div>
	<br class="clearall" />

	<?php
		if (trim($product['description']) != '' || ADMIN_LOGGED_IN)
		{
			?>	
				<h3 class="product-description-title product-subtitle">Introducing: <?= $product['linktitle'] ?></h3>
				<div class="product-description" id="product-description"><?= $product['description'] ?></div>
			<?php
		}

		if (trim($amazoncontent['description']) != '' && PRODUCT_INFO_DISPLAY_AZDESC != '0')
		{
			?>
				<h3 class="product-azdescription-title product-subtitle">Manufacturer Description</h3>
				<div class="product-description" id="product-azdescription"><?= $amazoncontent['description'] ?></div>
			<?php
		}

		if ($product['reviewiframelink'] != '')
		{
			?>
				<div id="product-review-box">			
					<h3 class="product-subtitle product-reviews-title"><a href="<?= URL_SITE ?><?= $product['pagename'] ?>/reviews/" rel="nofollow">See All Product Reviews</a></h3>
				</div>
			<?php
		}

		if (sizeof($product['keyfeatures']) > 0 && $product['keyfeatures'][0] != '')
		{
			?>
				<h3 class="product-features-title product-subtitle">Product Features</h3>
			
				<ul class="product-list product-features">
					<?php
					$product['keyfeatures'] = explode("\n",$product['keyfeatures']);
					foreach($product['keyfeatures'] as $feature)
					{
						?>
						<li class="product-feature product-list-item"><?= $feature ?></li>
						<?php
					}
					?>
				</ul>
			
			<?php
		}
		?>
	<br class="clearall" />

	<?php
		if (sizeof($attributes) > 0)
		{
			?>
				<div id="product-details-box">
					<h3 class="product-information-title product-subtitle">Key Information</h3>
					<ul class="product-list product-information">
					<?php
						foreach ($attributes as $name => $value)
						{
							if (trim($value) == '') continue;
							?>
								<li class="product-info product-list-item">
									<span class="label"><?= $name ?></span>
									<span class="value">
									<?php
										if (is_array($value))
										{
											foreach ($value as $key => $item)
											{
												echo $key . ' = ' . $item.',';
											}
										}
										else
										{
											echo $value;
										}
									?>
									</span>
									<br class="clearall" />
								</li>
							<?php
						}
					?>
					</ul>
				</div>
			<?php	
		}
	?>
	<br class="clearall" />

	<?php
		if (trim($product['descriptionsecondary']) != '' || ADMIN_LOGGED_IN)
		{
			?>	
				<div id="product-descriptionsecondary" class="product-description"><?= $product['descriptionsecondary'] ?></div>
			<?php
		}

		if ($manufacturer['display'])
		{
			?>
				<div class="product-manufacturer">
					View our full range of <a href="<?= URL_SITE.$manufacturer['pagename'] ?>/"><?= $manufacturer['name'] ?></a>
				</div>
			<?php
		}
	?>

</div>
