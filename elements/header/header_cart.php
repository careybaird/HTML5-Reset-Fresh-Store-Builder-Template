<div class="cart">
	<a href="<?= URL_SITE ?><?= $pages['basket']['pagename'] ?>/" rel="nofollow" class="view_cart"><?=gTT('HEADER_VIEW_CART')?></a>
	<p><?= ($amazon->cart ? ($amazon->cart['totalquantity'] == 1 ? '1 '.gTT('HEADER_ITEM') : $amazon->cart['totalquantity'].gTT('HEADER_ITEMS')) : '0 '.gTT('HEAD_ITEMS')) ?> - <?= formatProductPrice($amazon->cart['subtotal']) ?></p>
	<?php
		if ($amazon->cart && $amazon->cart['totalquantity'] > 0 && $showcheckoutbutton)
		{
			?>
			<a href="<?= URL_SITE ?><?= $pages['checkout']['pagename'] ?>/" rel="nofollow" class="check_out"><?=gTT('HEADER_CHECKOUT')?></a>
			<?php
		}
	?>
</div>
