<div class="checkout-heading">
	<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/images/checkout_loading.gif" title="Connecting to Amazon" alt="Connecting to Amazon" />
	<h2 class="page-title"><?= gTT('CHECKOUT_CONNECTING') ?></h2>
	<br class="clearall" />
</div>

<div class="checkout-logos">
	<?= getTemplateImage('HEAD_LOGO') ?>
	<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/images/amazon_logo_<?= strtolower($amazon->locale) ?>.gif" class="checkout-logo" alt="Amazon Logo" Title="Amazon Logo" />
</div>

<br class="clearall" />

<h2 class="checkout-explain"><?= gTT('CHECKOUT_CONNECTED_AMAZON') ?></h2>

<div class="checkout-info">
	<h3>	
	<?php
		$text = gTT('CHECKOUT_INFO');
		echo sprintf($text, '<a href="'.URL_SITE.'checkout-amazon/">'.getTemplateImage('BUTTON_AMAZON_CONTINUE').'</a>');
	?>
	</h3>
</div>


<?php
/*
<div class="checkout-products">
<?php
	foreach ($products as $product)
	{
		?>
		<h3><?= $product['quantity'] ?> x <em><?= $product['title'] ?></em> (<?= formatProductPrice($product['price']) ?>)</h3>
		<?php
	}
?>
</div>
*/
?>

<p class="checkout-waiting"><?= gTT('CHECKOUT_WAITING') ?> <a href="<?= URL_SITE ?>checkout-amazon/"><?= gTT('CHECKOUT_CLICK_CONTINUE') ?></a></p>
