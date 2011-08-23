<div class="cart">
	<a href="<?= URL_SITE ?><?= $pages['basket']['pagename'] ?>/" rel="nofollow" class="view_cart">
		View Cart</a>
	<p><?= ($amazon->cart ? ($amazon->cart['totalquantity'] == 1 ? '1 item' : $amazon->cart['totalquantity'].' items') : '0 items') ?> - <?= formatProductPrice($amazon->cart['subtotal']) ?></p>
	<?php
		if ($amazon->cart && $amazon->cart['totalquantity'] > 0 && $showcheckoutbutton)
		{
			?>
			<a href="<?= URL_SITE ?><?= $pages['checkout']['pagename'] ?>/" rel="nofollow" class="check_out">Checkout</a>
			<?php
		}
	?>
</div>
