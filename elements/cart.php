<a href="<?= URL_SITE ?><?= $pages['basket']['pagename'] ?>/" rel="nofollow"><?= gTT('HEAD_VIEW_CART') ?></a>
<p><?= ($amazon->cart ? ($amazon->cart['totalquantity'] == 1 ? '1 '.gTT('HEAD_ITEM') : $amazon->cart['totalquantity'].' '.gTT('HEAD_ITEMS')) : '0 '.gTT('HEAD_ITEMS')) ?> - <?= formatProductPrice($amazon->cart['subtotal']) ?></p>

<?php
	if ($amazon->cart && $amazon->cart['totalquantity'] > 0 && $showcheckoutbutton)
	{
		?>
				<a href="<?= URL_SITE ?><?= $pages['checkout']['pagename'] ?>/" rel="nofollow">
					<?= getTemplateImage('BUTTON_CHECKOUT') ?>
				</a>
		<?php
	}
?>
