<?php
	// This is an extra element that we are provide for template developers.
	// It will require more work but at the moment the core script doesn't
	// provide the necessary information to make this have product titles, etc.
	// Rather than adding logic here I'm just going to hold off.
?>
<div class="cart">
	<a href="<?= URL_SITE ?><?= $pages['basket']['pagename'] ?>/" rel="nofollow" class="view_cart"><?=gTT('HEADER_VIEW_CART')?></a>
	<p><?= ($amazon->cart ? ($amazon->cart['totalquantity'] == 1 ? '1 '.gTT('HEAD_ITEM') : $amazon->cart['totalquantity'].gTT('HEAD_ITEMS')) : '0 '.gTT('HEAD_ITEMS')) ?> - <?= formatProductPrice($amazon->cart['subtotal']) ?></p>
	<?php
		if ($amazon->cart && $amazon->cart['totalquantity'] > 0 && $showcheckoutbutton)
		{
			?>
			<a href="<?= URL_SITE ?><?= $pages['checkout']['pagename'] ?>/" rel="nofollow" class="check_out"><?=gTT('HEADER_CHECKOUT')?></a>
			<?php
		}
	?>
</div>
