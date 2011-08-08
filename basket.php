<h2 class="page-title"><?= $page['title'] ?></h2>
<div class="page-maintext"><?= $page['maintext'] ?></div>

<?php
	if (!$amazon->cart || sizeof($amazon->cart['items']) == 0)
	{
		require('elements/cart_empty.php');
	}
	else
	{
		require('elements/cart_products.php');
		require('elements/cart_delivery.php');
		require('elements/cart_checkoutlink.php');
	}
?>
