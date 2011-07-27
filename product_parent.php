<?php
	if ($manufacturer['display'] && $manufacturerimage)
	{
		?>
			<div id="product-manufacturer">
				<a href="<?= URL_SITE.$manufacturer['pagename'] ?>/" rel="nofollow">
					<img src="<?= URL_SITE ?>i/?src=<?= RELATIVE_URL_IMAGES_MANUFACTURER.$manufacturerimage['filename'] ?>&w=250&h=80" />
				</a>
			</div>
		<?php
	}
?>

<h1 id="product-title"<?= ($manufacturer['display'] ? ' class="product-title-manufacturer"' : '') ?>><?= $product['title'] ?></h1>
<br class="clearall" />

<div id="product-price-box">

	<?php
		if ($optionsummary['minprice'] == $optionsummary['maxprice'])
		{
			?>
				<h2 class="price"><?= formatProductPrice($optionsummary['minprice']) ?></h2>
			<?php
		}
		else
		{
			?>
				<h2 class="price">From <?= formatProductPrice($optionsummary['minprice']) ?> to <?= formatProductPrice($optionsummary['maxprice']) ?></h2>
			<?php
		}
	?>
	
	<?php
		if (PRODUCT_HIDE_ADD_TO_CART == '0')
		{
			?>
				<div id="product-options">
					<?php require('elements/product_options'.$optionsdisplaytype.'.php'); ?>
				</div>
			<?php
		}
		
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
	<img src="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $mainimage['id'] ?>_250.jpg" />
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
	if (trim($product['description']) != '' || ADMIN_LOGGED_IN)
	{
		?>	
			<h2>Description of <?= $product['linktitle'] ?></h2>
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
