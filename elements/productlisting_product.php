<div class="product product-listing-box"<?= ($i % 4 == 0 ? ' style="margin-right: 0;"' : '') ?>>
	
	<div class="product-listing-image product-image">
		<a href="<?= URL_SITE ?><?= $product['pagename'] ?>/">
			<img src="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $product['image']['id'] ?>_110.jpg" alt="<?= $product['title'] ?>" title="<?= $product['linktitle'] ?>" />
		</a>
	</div>
	
	<h3 class="product-listing-title product-title"><a href="<?= URL_SITE ?><?= $product['pagename'] ?>/"><?= substr($product['linktitle'],0,40).(strlen($product['linktitle']) > 40 ? '...' : '') ?></a></h3>
	<?= ($product['parent'] && $product['optionsummary']['minprice'] != $product['optionsummary']['maxprice'] ? 'from ' : '') ?>
	
	<?php
		if ($product['offer']['isreduced'])
			echo "<span class=\"product-listing-price product-listing-price-original product-price-original\">{$product['offer']['originalpriceformatted']}</span>";
		else
			echo "<span class=\"product-listing-notreduced product-notreduced\">only</span>";
	?>
	<span class="product-listing-price product-price">
	<?php
		if ($product['offer'] && $product['offer']['price'] > 0)
			echo $product['offer']['priceformatted'];
		else if ($product['offer'] && $product['offer']['price'] == 0)
			echo '<small>Click for Details</small>';
		else if ($product['parent'] == 1)
			echo formatProductPrice($product['optionsummary']['minprice']);
		else if ($product['price'] > 0)
			echo $product['priceformatted'];
		else
			echo '<small>Price not available</small>';
	?>
	</span>
	
	<div class="product-listing-buttons">
		<a rel="nofollow" href="<?= URL_SITE.$product['pagename'] ?>/"  class="product-listing-button product-listing-button-view">View Product</a>
		<?php
			if ($product['offer'])
			{
				?>
				<a rel="nofollow" href="<?= URL_SITE ?>basket/add/<?= $product['id'] ?>/<?= $product['offer']['id'] ?>/" class="product-listing-button product-listing-button-add">
				<?php
			}
			else
			{
				?>
				<a rel="nofollow" href="<?= URL_SITE.$product['pagename'] ?>/" class="product-listing-button product-listing-button-add">
				<?php
			}
		?>
			Add to Basket
		</a>
	</div>

	<?php
		if (ADMIN_LOGGED_IN)
		{
			?>
			<div class="product-listing-admin">
				<a href="<?= URL_SITE ?>freshadmin/product/edit/<?= $product['id'] ?>/">
					<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="Edit" title="Edit" />
				</a>
				<a href="<?= URL_SITE ?>freshadmin/product/update/<?= $product['id'] ?>/">
					<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_update.png" alt="Update" title="Update" />
				</a>
				<a href="<?= $product['url'] ?>">
					<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/amazon_<?= strtolower(AMAZON_LOCALE) ?>.png" alt="view on Amazon" title="view on Amazon" />
				</a>
				<a href="<?= URL_SITE ?>freshadmin/product/removefromcategory/<?= $product['id'] ?>/<?= $thiscategory['id'] ?>/">
					<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_removefromcategory.png" alt="Remove from Category" title="Remove from Category" />
				</a>
				<a href="<?= URL_SITE ?>freshadmin/product/changestatus/<?= $product['id'] ?>/">
					<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_<?= ($product['enabled'] ? 'disable' : 'enable') ?>.png" alt="Change Product Status" title="Change Product Status" />
				</a>
				<a href="<?= URL_SITE ?>freshadmin/product/hide/<?= $product['id'] ?>/">
					<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_hide.png" alt="Hide" title="Hide" />
				</a>
				<a href="<?= URL_SITE ?>freshadmin/product/delete/<?= $product['id'] ?>/">
					<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_delete.png" alt="Delete" title="Delete" />
				</a>
			</div>
			<?php
		}
	?>

</div>
