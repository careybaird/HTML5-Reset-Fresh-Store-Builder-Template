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
				echo getProductPrice($product, $offer);
			?>
		</span>
	</div>

	<div class="product-availability-detail">
		<?php
			echo getProductAvailability($product, $offer);
		?>
	</div>
	
	<?php

		if (PRODUCT_HIDE_ADD_TO_CART == '0')
		{
			if ($offer)
			{
				?>
					<span class="product-availability">
						<span class="value-title product-instock" title="<?=gTT('PRODUCT_STOCK_IN')?>"><?=gTT('PRODUCT_STOCK_IN')?></span><br />
						<a href="<?= URL_SITE ?><?=$pages['basket']['pagename']?>/add/<?= $product['id'] ?>/<?= $offer['id'] ?>/" rel="nofollow">
							<?= ($offer['ispreorder'])? gTT('PRODUCT_BUY_PREORDER') : gTT('PRODUCT_BUY'); ?>
						</a>
					</span>
				<?php
			}
			else if ($product['expired'])
			{
				?>
					<span class="product-availability">
						<span class="value-title" title="<?=gTT('PRODUCT_STOCK_OUT')?>"><?=gTT('PRODUCT_STOCK_OUT')?></span><br /><br />
						<span class="product-outofstock"><?=gTT('PRODUCT_STOCK_DISC')?></span>
						<?=sprintf(gTT('PRODUCT_STOCK_FINDMORE'), URL_SITE, $product['id'])?>
					</span>
				<?php
			}
			else
			{
				?>
					<span class="product-availability">
						<span class="value-title outofstock" title="<?=gTT('PRODUCT_STOCK_OUT')?>"><?=gTT('PRODUCT_STOCK_OUT')?></span><?=gTT('PRODUCT_STOCK_ARRIVE')?>
					</span>
				<?php
			}
		}
	
		if (PRODUCT_SHOW_AMAZON_LINK)
		{
			?>
				<br /><br />
				<a href="<?= URL_SITE ?>buy-amazon/<?= $product['id'] ?>/<?= $product['expired'] ? '3' : '2' ?>/" rel="nofollow" class="product-amazon-link">
					<?=gTT('PRODUCT_BUY_AMAZON')?>
				</a>
			<?php
		}
	?>
	<br class="clearall" />
</div>
