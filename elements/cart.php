<div class="cart">
	<a href="<?= URL_SITE ?><?= $pages['basket']['pagename'] ?>/" rel="nofollow">View Cart</a>
	<p><?= ($amazon->cart ? ($amazon->cart['totalquantity'] == 1 ? '1 item' : $amazon->cart['totalquantity'].' items') : '0 items') ?> - <?= formatProductPrice($amazon->cart['subtotal']) ?></p>
	<?php
		if ($amazon->cart && $amazon->cart['totalquantity'] > 0 && $showcheckoutbutton)
		{
			?>
					<a href="<?= URL_SITE ?><?= $pages['checkout']['pagename'] ?>/" rel="nofollow">
						Checkout
					</a>
			<?php
		}
	?>
</div>
