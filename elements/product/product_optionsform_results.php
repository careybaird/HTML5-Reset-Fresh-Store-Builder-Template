<div id="product-option-offer">
<?php
	if ($offer)
	{		
		if ($offer['ispreorder'])
		{
			?>
			<p id="product-preorder">Available to Pre-order now!<br />Your card will not be charged until the item is dispatched. You will pay the lowest price this item has been available for in the Pre-order period - guaranteed.</p>
			<?php
		}
		
		?>
		
		
		<?php
			if ($offer && $offer['quantity'] > 0 && $offer['quantity'] < 20)
			{
				?>
					<p id="product-lowstock">Only <?= $offer['quantity'] ?> left in stock - order now to avoid dissapointment.</p>
				<?php
			}
			else
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
		else
		{
			?>
			<p>Shipping cost is calculated during checkout.</p>
			<?php
		}
		?>
	
		
		
		<h2 class="pricedetail"><?= ($offer['originalpriceformatted'] != $offer['priceformatted'] ? '<span class="old">'.$offer['originalpriceformatted'].'</span>' : '') ?> <span class="price"><?= $offer['priceformatted'] ?></span></h2>
	
		<a href="<?= URL_SITE ?>basket/add/<?= $offer['product_id'] ?>/<?= $offer['id'] ?>/" rel="nofollow">
			<?= getTemplateImage('BUTTON_ADD_BASKET_PRODUCTINFO') ?>
		</a>
		
		<?php
		if ($amazon->locale == 'UK')
		{
			?>
				<br /><br />
		<a href="<?= URL_SITE ?>buy-amazon/<?= $offer['product_id'] ?>/2/" rel="nofollow">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/buttons/buy_at_amazon.gif" alt="Buy At Amazon" />
				</a>
			<?php
		}
		?>

		<?php
		# Is there an image associated with this set of options?
		$images = getAllProductImages($offer['product_id'], '100');
		
		
		if (!$images[0]['noimage'] && sizeof($images) > 1)
		{
			?>
			<div id="product-option-images">
			<p><strong>Images for this Option</strong></p>
			<?php
			foreach ($images as $key => $image)
			{
				if ($key == 0) continue;
				?>
					<a href="<?= $image['full'] ?>" rel="lightbox[productoption]" title="">
						<img src="<?= $image['resized'] ?>" />
					</a>
				<?php
			}
			?>
			</div>
			<?php
		}
				
	}
	else
	{
		?>
			<p>
				Option not currently not available. Please choose again.
			</p>
			

			<?php
			/*
			<br /><br />
			<a href="<?= URL_SITE ?>buy-amazon/<?= $offer['product_id'] ?>/3/" rel="nofollow">
				<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/buttons/buy_at_amazon.gif" alt="Buy At Amazon" />
			</a>
			*/
			?>
		<?php		
	}
?>

</div>