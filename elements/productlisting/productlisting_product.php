<div class="product product-listing-box"<?= ($i % 4 == 0 ? ' style="margin-right: 0;"' : '') ?>>
	
	<div class="product-listing-image product-image">
		<a href="<?= URL_SITE ?><?= $product['pagename'] ?>/">
			<img src="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $product['image']['id'] ?>_110.jpg" alt="<?= $product['title'] ?>" title="<?= $product['linktitle'] ?>" />
		</a>
	</div>
	
	<h<?php echo (defined('IS_HOME'))? 4 : 3;?> class="product-listing-title product-title"><a href="<?= URL_SITE ?><?= $product['pagename'] ?>/"><?= substr($product['linktitle'],0,40).(strlen($product['linktitle']) > 40 ? '...' : '') ?></a></h<?php echo (defined('IS_HOME'))? 4 : 3;?>>
	<?= ($product['parent'] && $product['optionsummary']['minprice'] != $product['optionsummary']['maxprice'] ? 'from ' : '') ?>
	
	<span class="product-listing-price-detail">
		<?php
			if ($product['offer']['isreduced'])
				echo "<span class=\"product-listing-price product-listing-price-original product-price-original\">{$product['offer']['originalpriceformatted']}</span>";
			else
				echo "<span class=\"product-listing-notreduced product-notreduced\">only</span>";
		?>
		<span class="product-price product-listing-price">
			<?php
				if ($product['offer'] && $product['offer']['price'] > 0)
					echo $product['offer']['priceformatted'];
				else if ($product['offer'] && $product['offer']['price'] == 0)
					echo gTT('PRODUCT_PRICE_CLICK');
				else if ($product['parent'] == 1)
					echo formatProductPrice($product['optionsummary']['minprice']);
				else if ($product['price'] > 0)
					echo $product['priceformatted'];
				else
					echo gTT('PRODUCT_PRICE_NOTAVAIL');
			?>
		</span>
	</span>
	
	<div class="product-listing-availibility product-availibility">
		<?php
			if ($product['offer'] || ($product['optionsummary']['minprice'] && $product['optionsummary']['maxprice']))
				echo '<div class="in_stock">'.gTT('PRODUCT_STOCK_IN').'</div>';
			else
				echo '<div class="out_stock">'.gTT('PRODUCT_STOCK_OUT').'</div>';
		?>
	</div>
	
	<div class="product-listing-buttons">
		<a rel="nofollow" href="<?= URL_SITE.$product['pagename'] ?>/"  class="product-listing-button product-listing-button-view"><?=gTT('PRODUCT_VIEW')?></a>
		<?php
			if ($product['offer'])
			{
				?>
				<a rel="nofollow" href="<?= URL_SITE ?><?=$pages['basket']['pagename']?>/add/<?= $product['id'] ?>/<?= $product['offer']['id'] ?>/" class="product-listing-button product-listing-button-add">
				<?php
			}
			else
			{
				?>
				<a rel="nofollow" href="<?= URL_SITE.$product['pagename'] ?>/" class="product-listing-button product-listing-button-add">
				<?php
			}
		?>
			<?=gTT('PRODUCT_BUY')?>
		</a>
	</div>

	<?php
		if (ADMIN_LOGGED_IN)
			require 'productlisting_admin.php';
	?>
</div>
