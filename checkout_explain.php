<div class="checkout-heading">
	<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/images/checkout_loading.gif" title="Connecting to Amazon" alt="Connecting to Amazon" />
	<h2 class="page-title">Checkout Connecting</h2>
	<br class="clearall" />
</div>

<div class="checkout-logos">
	<?= getTemplateImage('HEAD_LOGO') ?>
	<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/images/amazon_logo_<?= strtolower($amazon->locale) ?>.gif" class="checkout-logo" alt="Amazon Logo" Title="Amazon Logo" />
</div>

<br class="clearall" />

<h3 class="page-subtitle">Checkout Connected</h2>
<div class="checkout-info">
	<?php
		$text = 'Important: click the %s button on the next page to ensure you save all your products and get the lowest prices.';
		echo sprintf($text, '<a href="'.URL_SITE.'checkout-amazon/">'.getTemplateImage('BUTTON_AMAZON_CONTINUE').'</a>');
	?>
</div>

<p class="checkout-waiting">Checkout Waiting <a href="<?= URL_SITE ?>checkout-amazon/">Click to Continue</a></p>
