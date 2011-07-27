<div class="hproduct">

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

<h1 class="item fn" id="product-title"<?= ($manufacturer['display'] ? ' class="product-title-manufacturer"' : '') ?>><?= $product['title'] ?></h1>
<br class="clearall" />


<div id="product-price-box">

	<h2 class="pricedetail">
		<?php
			if ($offer['isreduced'])
			{
				?>
				<span class="old"><?= $offer['originalpriceformatted'] ?></span>
				<?php
			}
		?>
		<span class="price">
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
	</h2>
	<?php
		if ($offer && $offer['price'] == 0)
		{
			echo '<p><small><strong>Why is the price not displayed here?</strong><br />The price is lower than the manufacturers "minimum advertised price" and we are legally not allowed to display it until it is requested. To request the price, simply click add to shopping cart below.</small</p>';	
		}
	?>
	
	<?php
		if ($offer['isreduced'])
		{
			?>
			<p><em>Save <?= $offer['percentagesaved'] ?>%!</em></p>
			<?php
		}
	?>

	<?php
		if ($offer['ispreorder'])
		{
			?>
			<p id="product-preorder">Available to Pre-order now!<br />Your card will not be charged until the item is dispatched. You will pay the lowest price this item has been available for in the Pre-order period - guaranteed.</p>
			<?php
		}
	?>
	
	<?php
		if ($offer['availabilitytext'])
		{
			?>
			<p><?= $offer['availabilitytext'] ?></p>
			<?php
		}
	?>
	
	
	<?php
		if ($offer && $offer['supersavershipping'])
		{
			?>
				<?php
				if ($offer['priceraw'] > ($amazon->supersavershippinglimit - 10))
				{
					?>
					<p>This item ships for FREE with Super Saver Shipping.</p>
					<?php
				}
				else
				{
					?>
					<p>This item ships for <strong>FREE</strong> with Super Saver Shipping, when the order total is greater than <?= formatProductPrice($amazon->supersavershippinglimit) ?>.</p>
					<?php
				}
		}
		else if ($product['expired'] == 0)
		{
			?>
			<p>Shipping cost is calculated during checkout.</p>
			<?php
		}
	?>
	
	<?php
		if ($offer && $offer['quantity'] > 0 && $offer['quantity'] < 5)
		{
			?>
				<p id="product-lowstock">Only <?= $offer['quantity'] ?> left in stock - order now to avoid dissapointment.</p>
			<?php
		}	
	?>
	
	<?php
		if (PRODUCT_HIDE_ADD_TO_CART == '0')
		{
			if ($offer)
			{
				?>
					<span class="availability">
						<span class="value-title" title="In stock">In Stock</span><br />
						<a href="<?= URL_SITE ?>basket/add/<?= $product['id'] ?>/<?= $offer['id'] ?>/" rel="nofollow">
							
							<?php
								if ($offer['ispreorder'])
								{
									?>
										<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/buttons/preorder.gif" alt="Add to your Shopping Cart" title="Add to your Shopping Cart" />
									<?php
								}
								else
								{
									echo getTemplateImage('BUTTON_ADD_BASKET_PRODUCTINFO');
								}
							?>
						</a>
					</span>
				<?php
			}
			else if ($product['expired'])
			{
				?>
					<p class="availability">
					<span class="value-title" title="Out of Stock">Out of Stock</span><br /><br />
					<span class="outofstock">Discontinued</span> - Unfortunately this product has been discontinued and we will not be receiving any more stock. <a href="<?= URL_SITE ?>buy-amazon/<?= $product['id'] ?>/3/">Click here for alternative products</a>.</p>
				<?php
			}
			else
			{
				?>
					<p class="availability">
					<span class="value-title outofstock" title="Out of Stock">Out of Stock</span> - stock arriving soon</p>
				<?php
			}
		}
	?>
	
	<?php
		if (PRODUCT_SHOW_AMAZON_LINK)
		{
			?>
				<br /><br />
				<a href="<?= URL_SITE ?>buy-amazon/<?= $product['id'] ?>/<?= $product['expired'] ? '3' : '2' ?>/" rel="nofollow">
					<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/buttons/buy_at_amazon_<?= strtolower($amazon->locale) ?>.gif" alt="Buy At Amazon" />
				</a>
			<?php
		}
	?>

</div>






<div id="product-image-box">

	<a href="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $mainimage['id'] ?>_500.jpg" rel="lightbox[product]" title="<?= $product['title'] ?>">
	<img class="photo fn" src="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $mainimage['id'] ?>_250.jpg" />
	</a>
	
	<p><em>Click images to enlarge</em></p>
	
	<?php
		if (sizeof($images) > 0) 
		{
			?>
			
				<?php
				foreach ($images as $image)
				{
					?>
						<a href="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $image['id'] ?>_500.jpg" rel="lightbox[product]" title="<?= $product['title'] ?>">
							<img src="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $image['id'] ?>_50.jpg" class="image-thumbnail" />
						</a>				
					<?php
				}
				?>
			
			<?php	
		}
	?>
</div>


<br clear="all" />


<?php
	if (trim($product['description']) != '' || ADMIN_LOGGED_IN)
	{
		?>	
			<h2>Introducing: <?= $product['linktitle'] ?></h2>
			<div id="product-description"><?= $product['description'] ?></div>
		<?php
	}
?>

<?php
	if (trim($amazoncontent['description']) != '' && PRODUCT_INFO_DISPLAY_AZDESC != '0')
	{
		?>
			<div id="product-azdescription">
				<h3>Manufacturer Description</h3>
				<p><?= $amazoncontent['description'] ?></p>
			</div>
		<?php
	}
?>

<?php
if ($product['reviewiframelink'] != '')
{
	?>
		<div id="product-review-box">			
			<h3><a href="<?= URL_SITE ?><?= $product['pagename'] ?>/reviews/" rel="nofollow">See All Product Reviews</a></h3>
		</div>
	<?php
}
?>

	
	<?php
	if (sizeof($product['keyfeatures']) > 0 && $product['keyfeatures'][0] != '')
	{
		?>
			<h2>Product Features</h2>
			
			<ul>
				<?php
				$product['keyfeatures'] = explode("\n",$product['keyfeatures']);
				foreach($product['keyfeatures'] as $feature)
				{
					?>
					<li><?= $feature ?></li>
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
				<h2>Key Information</h2>
				<ul>
				<?php
					foreach ($attributes as $name => $value)
					{
						if (trim($value) == '') continue;
						?>
							<li>
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
			<div id="product-descriptionsecondary"><?= $product['descriptionsecondary'] ?></div>
		<?php
	}
?>

<?php
	if ($manufacturer['display'])
	{
		?>
			<p>View our full range of <a href="<?= URL_SITE.$manufacturer['pagename'] ?>/"><?= $manufacturer['name'] ?></a></p>
		<?php
	}
?>


</div>